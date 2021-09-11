import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, FormControl, Validators} from '@angular/forms/';
import { ToastrService } from 'ngx-toastr';
import { ProductService } from 'src/app/services/product.service';


@Component({
  selector: 'app-product-add',
  templateUrl: './product-add.component.html',
  styleUrls: ['./product-add.component.css']
})
export class ProductAddComponent implements OnInit {

  //formcontrol her bir input alanı, formgroup bu alanları içeren formdur

  productAddForm:FormGroup; //HTML kısmındaki formda bu ismi kullanıyoruz
  
  constructor(private formBuilder:FormBuilder, private productService:ProductService, private toastrService:ToastrService) { }

  ngOnInit(): void {
    this.createProductAddForm();
  }

  
  createProductAddForm(){
    this.productAddForm = this.formBuilder.group({ //bu kısımda input alanına girilen verilerin kontrolünü sağşıyoruz (FluentValidation gibi)
      productName:["", Validators.required], //ilk parametre default değeridir
      unitPrice:["", Validators.required],
      unitsInStock:["", Validators.required],
      categoryId:["", Validators.required]
    })
  }

  add(){
    if(this.productAddForm.valid){ //eğer form crateProductAddFormdaki kurallara uyuyorsa ekle
      let productModel = Object.assign({}, this.productAddForm.value); //formdan gelen verileri productModel nesnesine atar
      this.productService.add(productModel).subscribe(data=>{
        
        this.toastrService.success(data.message, "Başarılı");
      }, dataError=>{

        if(dataError.error.Errors.length>0){//gelen hatayı inceleyip buraları yazdık
          for(let i=0 ; i<dataError.error.Errors.length; i++){
            this.toastrService.error(dataError.error.Errors[i].ErrorMessage,"Doğrulama hatası");
          }
         
        }
        
        
      });
      
    }else{
      this.toastrService.error("Formda bazı bilgiler eksik", "DİKKAT!!");
    }

    
    
  }

}

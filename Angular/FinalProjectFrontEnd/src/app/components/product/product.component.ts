import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import { Product } from 'src/app/models/product';
import { CartService } from 'src/app/services/cart.service';


//api ye bağlanmak için
import { ProductService } from 'src/app/services/product.service';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.css']
})
export class ProductComponent implements OnInit {

  

  products:Product[] = [];
  dataLoaded = false; //product.componenets.html de dataLoaded false ise mavi dönen şeyi göster dedik
  filterText:string;
  
  //angular bizim yerimize enjekte eder product servisi ve activatedroute i
  constructor(
    private productService:ProductService, 
    private activatedRoute:ActivatedRoute,
    private toastrService:ToastrService, //toastr ile ekranın ekranda bildirim çıkartıyoruz
    private cartService:CartService
    ) { } 

  ngOnInit(): void {
    this.activatedRoute.params.subscribe(params=>{ //observable olduğu için subscribe olduk(params query stringdeki elemanları temsil eder)
      if(params['categoryId']){//eğer parametrelerde categoryId diye bir şey varsa
        this.getProductsByCategoryId(params['categoryId']);
      }
      else{//yoksa tüm ürünleri getir
        this.getProducts();
      }
    })
  }

  //tüm ürünleri çek(servisteki bu metod observable olduğu için subscribe olmak gerekiyor)
  getProducts(){
      this.productService.getProducts().subscribe(response=>{
      this.products = response.data;
      this.dataLoaded = true;
    });
    
  }



  getProductsByCategoryId(categoryId:number){
    this.productService.getProductsByCategoryId(categoryId).subscribe(response=>{
    this.products = response.data;
    this.dataLoaded = true;
  });
  
}

  addToCart(product:Product){
    this.toastrService.success("Sepete eklendi", product.productName);//ikinci paramtere üstte görünür
    this.cartService.addToCart(product);
  }

}

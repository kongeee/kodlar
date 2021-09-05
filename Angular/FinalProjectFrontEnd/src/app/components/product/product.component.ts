import { Component, OnInit } from '@angular/core';
import { Product } from 'src/app/models/product';
import { ProductResponseModel } from 'src/app/models/productResponseModel';

//api ye bağlanmak için
import {HttpClient} from '@angular/common/http'
import { ProductService } from 'src/app/services/product.service';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.css']
})
export class ProductComponent implements OnInit {

  

  products:Product[] = [];
  dataLoaded = false; //product.componenets.html de dataLoaded false ise mavi dönen şeyi göster dedik
  

  constructor(private productService:ProductService) { }//angular bizim yerimize enjekte eder bunu

  ngOnInit(): void {
    this.getProducts();
  }

  //ürünleri çek
  getProducts(){
    this.productService.getProducts().subscribe(response=>{
      this.products = response.data;
      this.dataLoaded = true;
    });
    
  }

}

//ng g service product yazarak bunu oluşturduk

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { ListResponseModel } from '../models/listResponseModel';
import { Product } from '../models/product';
import { ResponseModel } from '../models/responseModel';


@Injectable({
  providedIn: 'root'
})
export class ProductService {

  apiUrl = "https://localhost:44355/api/";

  constructor(private httpClient:HttpClient) { }//injection yaptık

  //ürünleri çek
  getProducts():Observable<ListResponseModel<Product>>{

    let newPath = this.apiUrl+"products/getall";
    return this.httpClient.get<ListResponseModel<Product>>(newPath);
  }

  getProductsByCategoryId(categoryId:number):Observable<ListResponseModel<Product>>{

    let newPath = this.apiUrl+"products/getbycategoryid?categoryId="+categoryId;
    return this.httpClient.get<ListResponseModel<Product>>(newPath);
  }

  add(product:Product):Observable<ResponseModel>{//success ve message bilgisi dönsün
    return this.httpClient.post<ResponseModel>(this.apiUrl+"products/add", product);//1. parametre adres, ikincisi göndereceğimiz nesne

  }
}

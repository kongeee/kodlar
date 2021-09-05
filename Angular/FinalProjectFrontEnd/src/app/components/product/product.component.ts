import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.css']
})
export class ProductComponent implements OnInit {

  product1 = { productId: 1, productName: 'Bardak', categoryId: 1, unitPrice: 5 };
  product2 = { productId: 2, productName: 'Masa', categoryId: 2, unitPrice: 8 };
  product3 = { productId: 3, productName: 'Sandalye', categoryId: 2, unitPrice: 7 };
  product4 = { productId: 4, productName: 'Kupa', categoryId: 1, unitPrice: 2 };
  product5 = { productId: 5, productName: 'Tabak', categoryId: 3, unitPrice: 9 };


  products = [this.product1, this.product2, this.product3, this.product4, this.product5];
  constructor() { }

  ngOnInit(): void {
  }

}

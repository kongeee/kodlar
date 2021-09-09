import { Injectable } from '@angular/core';
import { CartItem } from '../models/cartItem';
import { CartItems } from '../models/cartItems';
import { Product } from '../models/product';

@Injectable({
  providedIn: 'root'
})
export class CartService {

  constructor() { }

  addToCart(product:Product){
    //Aynı üründen sepette varsa yeni ürün eklemiyoruz sadece sayısını artırıyoruz
    let item = CartItems.find(c=>c.product.productId===product.productId);//aynı ürün var mı diye kontrol ettik
    if(item){
      item.quantity += 1;
    }else{//eğer ürün yoksa
      let cartItem = new CartItem();
      cartItem.product = product;
      cartItem.quantity = 1;
      CartItems.push(cartItem);
    }
  }

  removeFromCart(product:Product){
    let item:CartItem = CartItems.find(c=>c.product.productId===product.productId);//item i bul (tsconfig.jsondan strictnull bilmem ne)
    CartItems.splice(CartItems.indexOf(item),1);
  }

  list():CartItem[]{
    return CartItems;
  }

 
}

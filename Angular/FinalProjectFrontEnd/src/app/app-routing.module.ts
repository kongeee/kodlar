import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ProductComponent } from './components/product/product.component';
import { CategoryComponent } from './components/category/category.component';
import { ProductAddComponent } from './components/product-add/product-add.component';

//bu kısım app.component.html'de <router-outlet> etiketine gelecek olan componenti gösterir
const routes: Routes = [
  {path:"",pathMatch:"full", component:ProductComponent}, //eğer herhangi bir path verilmemişse productComponentini göster
  {path:"products", component:ProductComponent}, //localhost:4200/products yazılırsa product componentini göster
  {path:"products/category/:categoryId", component:ProductComponent}, //parametre verirken : ile belirtiyoruz(categoryId kısmı dinamik)
  {path:"products/add", component:ProductAddComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

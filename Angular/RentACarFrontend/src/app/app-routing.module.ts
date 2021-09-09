import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CarDetailComponent } from './components/car-detail/car-detail.component';
import { CarComponent } from './components/car/car.component';
import { CarimageComponent } from './components/carimage/carimage.component';



const routes: Routes = [
 {path:"", pathMatch:"full", component:CarComponent},
 {path:"cars/brand/:brandId", component:CarComponent},
 {path:"cars/color/:colorId", component:CarComponent},
 {path:"cars/car/:carId", component:CarDetailComponent},
 {path:"cars/car/:carId", component:CarimageComponent,outlet:"image"}

  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
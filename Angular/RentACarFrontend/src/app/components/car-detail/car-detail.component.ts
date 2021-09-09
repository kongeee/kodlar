import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { CarDetail } from 'src/app/models/carDetail';
import { CarImage } from 'src/app/models/carimage';
import { CarDetailService } from 'src/app/services/car-detail.service';
import { CarimageService } from 'src/app/services/carimage.service';
import {DomSanitizer} from '@angular/platform-browser';

@Component({
  selector: 'app-car-detail',
  templateUrl: './car-detail.component.html',
  styleUrls: ['./car-detail.component.css']
})
export class CarDetailComponent implements OnInit {

  carDetails:CarDetail[] = [];
  carImages:CarImage[];
  dataLoaded = false;

  constructor(private carDetailService:CarDetailService,
     private activatedRoute:ActivatedRoute,
      private carImageService:CarimageService,
      private sanitizer:DomSanitizer) { }

  ngOnInit(): void {
    
    this.activatedRoute.params.subscribe(params=>{
      if(params['carId']){
        this.getCarDetailsById(params['carId']);
        this.getCarImagesById(params['carId']);

      }else{
        this.getCarDetails();
      }

    })

    
    
  }

  getCarDetails(){
      this.carDetailService.getCarDetails().subscribe(response=>{
      this.carDetails = response.data;
      this.dataLoaded = true;
    })
  }

  getCarDetailsById(carId:number){
    this.carDetailService.getCarDetailsById(carId).subscribe(response=>{
      this.carDetails = response.data;
      this.dataLoaded = true;
      let sanitizedUrl = this.sanitizer.bypassSecurityTrustUrl('C:\Users\furka\Desktop\C#Odev\ReCapProject\WebAPI\Images/');
    })

  }
  getCarImagesById(carId:number){
    this.carImageService.getCarImages(carId).subscribe(response=>{
      this.carImages = response.data;
      this.dataLoaded=true;
      

    })
  }

  deneme(carDetail:CarDetail){
   
    console.log(carDetail.carName);
  }

}

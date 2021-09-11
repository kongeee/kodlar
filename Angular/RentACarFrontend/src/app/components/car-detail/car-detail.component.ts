import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { CarDetail } from 'src/app/models/carDetail';
import { CarImage } from 'src/app/models/carimage';
import { CarDetailService } from 'src/app/services/car-detail.service';
import { CarimageService } from 'src/app/services/carimage.service';


@Component({
  selector: 'app-car-detail',
  templateUrl: './car-detail.component.html',
  styleUrls: ['./car-detail.component.css']
})
export class CarDetailComponent implements OnInit {

  carDetail:CarDetail;
  
  carImages:CarImage[];
  dataLoaded = false;
  

  constructor(private carDetailService:CarDetailService,
     private activatedRoute:ActivatedRoute,
      private carImageService:CarimageService,
      ) { }

  ngOnInit(): void {
    
    this.activatedRoute.params.subscribe(params=>{
      if(params['carId']){
        this.getCarDetailsById(params['carId']);
        this.getCarImagesById(params['carId']);

      }else{
      
      }

    })

    
    
  }



  getCarDetailsById(carId:number){
    this.carDetailService.getCarDetailsById(carId).subscribe(response=>{
      this.carDetail = response.data;
      this.dataLoaded = true;
     
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

import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { CarImage } from 'src/app/models/carimage';
import { CarimageService } from 'src/app/services/carimage.service';


@Component({
  selector: 'app-carimage',
  templateUrl: './carimage.component.html',
  styleUrls: ['./carimage.component.css']
})
export class CarimageComponent implements OnInit {

  carImages:CarImage[];
  dataLoaded=false;
  constructor(private carImageService:CarimageService, private activatedRuote:ActivatedRoute) { }

  ngOnInit(): void {
    this.activatedRuote.params.subscribe(params=>{
      if(params['carId']){
        this.getCarImages(params['carId']);
      }
    })
  }
  
  

  getCarImages(carId:number){
    this.carImageService.getCarImages(carId).subscribe(response=>{
      this.carImages = response.data;
      this.dataLoaded=true;
      

    })
  }

  
}

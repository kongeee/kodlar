import { Component, OnInit } from '@angular/core';
import { Category } from 'src/app/models/category';
import { CategoryService } from 'src/app/services/category.service';

@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.css']
})
export class CategoryComponent implements OnInit {

  categories:Category[] = [];

  //tıklanan kategoriyi tutmak için bir değişken oluşturduk
  currentCategory:Category; //normalde buna ilk değer vermemiz gerekiyordu ama tsconfig.json da strict in altındakini yazdık ve düzeldi
  emptyCategory:Category; //currentCategoryi reset etmek için oluşturdum

  constructor(private categoryService:CategoryService) { }

  ngOnInit(): void {
    this.getCategories();
  }

  getCategories(){
    return this.categoryService.getCategories().subscribe(response=>{
      this.categories = response.data;
    })
  }

  setCurrentCategory(category:Category){
    this.currentCategory=category; //bunu yazpmamızın nedeni html class içinde oluşturduğumu< değişkenlerden beslenir
                                  //yani fonksyiona gelen kategoriyi htmlde kullanamayız
  }

  resetCurrentCategory(){
    this.currentCategory = this.emptyCategory;
  }


  //currentCategory i okuyarak hangisine tıklanmışsa onun rengini değiştireceğiz(her döngüde buraya bakılacak)
  getCurrentCategoryClass(category:Category){

    if(category==this.currentCategory){//html de ngFor ile categorileri gezerken bir kategori currentCategori ise
      return "list-group-item active"; //bootstrap sınıfını dönderiyoruz
    }
    return "list-group-item";
  }

  getAllCategoriesClass(){
    if(!this.currentCategory){//hiçbir kategoriye tıklanmamışsa
      return "list-group-item active";
    }
    return "list-group-item";
  }

}

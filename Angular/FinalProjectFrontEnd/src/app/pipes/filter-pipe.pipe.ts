import { Pipe, PipeTransform } from '@angular/core';
import { Product } from '../models/product';

@Pipe({
  name: 'filterPipe'
})
export class FilterPipePipe implements PipeTransform {

  transform(value: Product[], filterText:string): Product[] {
    filterText = filterText?filterText.toLocaleLowerCase():""; //Arama yerine bir şey yazılırsa onu küçük harflere çevir

    //arama kelimesi ürün adında yoksa -1 dönderir biz de -1 döndermeyenleri gösterirsek arama sonucu doğru olur
    return filterText?value.filter((p:Product)=>p.productName.toLocaleLowerCase().indexOf(filterText)!==-1):value;
  }

}

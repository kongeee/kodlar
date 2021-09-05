//api den gelecek datayı karşılayacak bir model yapıyoruz
//bu verinin içinde data, success ve message var

import { Product } from "./product";
import { ResponseModel } from "./responseModel";

export interface ProductResponseModel extends ResponseModel{
    data:Product[],
    
}
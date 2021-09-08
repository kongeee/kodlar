import { ResponseModel } from "./responseModel";

//tüm entityler için aynı yapı dönüyor hepsi için tek tek yazmaktansa generic bir yapı kuruyoruz
export interface ListResponseModel<T> extends ResponseModel{
    data:T[];
}
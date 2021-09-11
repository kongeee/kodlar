import { Injectable } from '@angular/core';
import {
  HttpRequest,
  HttpHandler,
  HttpEvent,
  HttpInterceptor
} from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable()

//Token kontrolü için oluşturduk(http header işleri)
export class AuthInterceptor implements HttpInterceptor {

  constructor() {}

  intercept(request: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<unknown>> {
    let token = localStorage.getItem("token");
    let newRequest : HttpRequest<any>
    newRequest = request.clone({
      headers : request.headers.set("Authorization", "Bearer "+token)//Postmanda yaptığımız işi burda yapıyoruz 
    })
    return next.handle(newRequest);
  }
}

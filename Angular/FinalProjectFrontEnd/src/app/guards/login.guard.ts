import { Injectable } from '@angular/core';
import { ActivatedRouteSnapshot, CanActivate, Router, RouterStateSnapshot, UrlTree } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import { Observable } from 'rxjs';
import { AuthService } from '../services/auth.service';

@Injectable({
  providedIn: 'root'
})
export class LoginGuard implements CanActivate {

  constructor(private authService:AuthService, 
    private toastrService:ToastrService,
    private router:Router){//Js kodu ile route yapmak için bunu dahil ettik normalde HTML de yapıyorduk

    }
  canActivate(
    route: ActivatedRouteSnapshot,
    state: RouterStateSnapshot): Observable<boolean | UrlTree> | Promise<boolean | UrlTree> | boolean | UrlTree {
    
    if(this.authService.isAuthenticated()){
      return true;
    }
    this.router.navigate(["login"]);//giriş yapmamışsa login sayfasına yönlendir(app-routingde nasıl veridysek öyle)
    this.toastrService.info("Sisteme giriş yapmalısınız");
    return false;
  }
  
}

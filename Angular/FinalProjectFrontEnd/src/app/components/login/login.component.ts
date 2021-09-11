import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, FormBuilder, Validators } from "@angular/forms";
import { ToastrService } from 'ngx-toastr';
import { AuthService } from 'src/app/services/auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  loginForm:FormGroup;//login formunu tutacak

  constructor(private formBuilder:FormBuilder, private authService:AuthService, private toastrService:ToastrService) { }

  ngOnInit(): void {
    this.createLoginForm();
  }

  createLoginForm(){ //kuralları tanımlıyoruz
    this.loginForm = this.formBuilder.group({
      email:["", Validators.required],
      password:["", Validators.required]
    })
  }

  login(){
    if(this.loginForm.valid){//form uygunsa(yani yukarıdaki kurallardan geçmişse)
     
      let loginModel = Object.assign({}, this.loginForm.value); //formdan gelen veriyi loginModel nesnesine aktarıyoruz
      this.authService.login(loginModel).subscribe(response=>{
        
        this.toastrService.success(response.message)
        localStorage.setItem("token", response.data.token); //key:value şeklinde cookie gibi bir şey oluşturduk browser da kaydetmek için
      }, responseError=>{
        this.toastrService.error(responseError.error);
        
      })
    }
  }

}

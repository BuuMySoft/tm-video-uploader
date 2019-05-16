import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-auth',
  templateUrl: './auth.component.html',
  styleUrls: ['./auth.component.css']
})
export class AuthComponent implements OnInit {

  message = {
    content : 'Mot de passe incorrect!',
    type : 'error'
  };

  constructor() { }

  ngOnInit() {
  }

}

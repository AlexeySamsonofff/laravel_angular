import { Component, OnInit } from '@angular/core';

import { FormControl, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-signup-form',
  templateUrl: './signup-form.component.html',
  styleUrls: ['./signup-form.component.scss']
})
export class SignupFormComponent implements OnInit {

  signupFormGroup = new FormGroup({
    email : new FormControl('')
  });

  

  constructor() { }

  ngOnInit(): void {
  }

}

import { Component, OnInit } from '@angular/core';

import { FormControl, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-sign-form',
  templateUrl: './sign-form.component.html',
  styleUrls: ['./sign-form.component.scss']
})
export class SignFormComponent implements OnInit {

  signFormGroup = new FormGroup({
    email : new FormControl('')
  });

  constructor() { }

  ngOnInit(): void {
  }

}

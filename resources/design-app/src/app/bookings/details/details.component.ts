import { Component, OnInit } from '@angular/core';

import {FormBuilder, FormGroup, Validators} from '@angular/forms';

@Component({
  selector: 'app-details',
  templateUrl: './details.component.html',
  styleUrls: ['./details.component.scss']
})
export class DetailsComponent implements OnInit {
  
  isLinear = false;
  informFormGroup: FormGroup;
  guestFormGroup: FormGroup;
  extraFormGroup: FormGroup;
  paymentFormGroup: FormGroup;

  constructor(private _formBuilder: FormBuilder) {}

  ngOnInit() {
    this.informFormGroup = this._formBuilder.group({
      firstNameCtrl: ['', Validators.required],
      lastNameCtrl: ['', Validators.required],
      addressCtrl : ['', Validators.required],
      zipCodeCtrl : ['', Validators.required],
      countryCtrl : ['', Validators.required],
      stateCtrl : ['', Validators.required],
      cityCtrl : ['', Validators.required],
      emailCtrl : ['', Validators.required],
      phoneCtrl : ['', Validators.required]
    });
    this.guestFormGroup = this._formBuilder.group({
      titleCtrl: ['', Validators.required],
      firstNameCtrl: ['', Validators.required],
      lastNameCtrl: ['', Validators.required]
    });
    this.extraFormGroup = this._formBuilder.group({
    });


  }

}

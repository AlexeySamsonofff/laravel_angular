import { Component, OnInit } from '@angular/core';

import { FormControl, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-rates',
  templateUrl: './rates.component.html',
  styleUrls: ['./rates.component.scss']
})
export class RatesComponent implements OnInit {

  rateFormGroup = new FormGroup(
    {
      date_start : new FormControl(''),
      date_end : new FormControl(''),
      policy : new FormControl('')
    }
  )

  constructor() { }

  ngOnInit(): void {
  }

}

import { Component, OnInit } from '@angular/core';

import { FormControl, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-day-pass',
  templateUrl: './day-pass.component.html',
  styleUrls: ['./day-pass.component.scss']
})
export class DayPassComponent implements OnInit {


  dayPassFormGroup = new FormGroup({
    dates : new FormControl('12/04/2020'),
    people : new FormControl('Adults 1, Children 0, Senior 0'),

  });
  constructor() { }

  ngOnInit(): void {
  }

}

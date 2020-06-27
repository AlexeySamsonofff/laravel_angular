import { Component, OnInit } from '@angular/core';

import { FormControl, FormGroup } from '@angular/forms';

import { Options } from 'ng5-slider';

@Component({
  selector: 'app-filter-widget-advance',
  templateUrl: './filter-widget-advance.component.html',
  styleUrls: ['./filter-widget-advance.component.scss']
})
export class FilterWidgetAdvanceComponent implements OnInit {

  filterFormGroup = new FormGroup({
    name : new FormControl(''),
  });

  sliderForm: FormGroup = new FormGroup({
    sliderControl: new FormControl([20, 80])
  });
  options: Options = {
    floor: 0,
    ceil: 100,
    step: 1,
    getPointerColor: (value: number): string => {
      return 'orange';
    },
    getSelectionBarColor: (value: number): string => {
      return 'orange';
    },
    translate: (value: number): string => {
      return 'USD' + ' ' + value;
    }
  };

  constructor() { }

  ngOnInit(): void {
  }


}

import { Component, OnInit, ViewChild } from '@angular/core';


import {MatAccordion} from '@angular/material/expansion';

import { FormControl, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-search-form-advance',
  templateUrl: './search-form-advance.component.html',
  styleUrls: ['./search-form-advance.component.scss']
})
export class SearchFormAdvanceComponent implements OnInit {


  @ViewChild(MatAccordion) accordion: MatAccordion;

  searchFormAdvanceGroup = new FormGroup({
    city : new FormControl(''),
    date_start : new FormControl(''),
    date_end : new FormControl(''),
    policy : new FormControl('')

  });

  constructor() { }

  ngOnInit(): void {
  }

}

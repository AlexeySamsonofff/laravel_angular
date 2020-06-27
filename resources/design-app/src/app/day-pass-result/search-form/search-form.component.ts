import { Component, OnInit,ViewChild } from '@angular/core';

import {MatAccordion} from '@angular/material/expansion';

import { FormControl, FormGroup } from '@angular/forms';


@Component({
  selector: 'app-search-form',
  templateUrl: './search-form.component.html',
  styleUrls: ['./search-form.component.scss']
})
export class SearchFormComponent implements OnInit {

  @ViewChild(MatAccordion) accordion: MatAccordion;

  searchFormGroup = new FormGroup({
    city : new FormControl(''),
    date_start : new FormControl(''),
    date_end : new FormControl('')

  });

  constructor() { }

  ngOnInit(): void {
  }

}

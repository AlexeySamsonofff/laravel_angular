import { Component, OnInit } from '@angular/core';
const ITEMS1 = [
  {id : '1', content : 'Negril'},
  {id : '2', content : 'Cultural'},
  {id : '3', content : 'Cultural'}
];

const TITLE1 = 'Destination';

const TITLE2 = 'Tours';

const TITLE3 = 'Durations';


const ITEMS2 = [
  {id : '1', content : 'Adventure'},
  {id : '2', content : 'Cultural'},
  {id : '3', content : 'Family'},
  {id : '4', content : 'Horseback Riding'},
  {id : '4', content : 'ATV'},
  {id : '4', content : 'Zipline'},
  {id : '4', content : 'Water Tours'}
];
const ITEMS3 = [
  {id : '1', content : '1hr+'},
  {id : '2', content : '6hr'},
  {id : '3', content : '4hr'}
];


@Component({
  selector: 'app-tours-filter',
  templateUrl: './tours-filter.component.html',
  styleUrls: ['./tours-filter.component.scss']
})
export class ToursFilterComponent implements OnInit {
  items1 = ITEMS1;
  title1 = TITLE1;

  items2 = ITEMS2;
  title2 = TITLE2;

  items3 = ITEMS3;
  title3 = TITLE3;

  constructor() { }

  ngOnInit(): void {
  }

}

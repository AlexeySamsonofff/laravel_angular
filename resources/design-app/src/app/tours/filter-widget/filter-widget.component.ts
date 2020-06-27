import { Component, OnInit } from '@angular/core';

const ITEMS1 = [
  {id : '1', content : 'Negril'},
  {id : '2', content : 'Cultural'}
];

const TITLE1 = 'Desination';

const TITLE2 = 'Ameneties';

const ITEMS2 = [
  {id : '1', content : 'Free Wifi'},
  {id : '2', content : 'Bar'},
  {id : '3', content : 'Beach'},
  {id : '4', content : 'Free Bar'}
];


@Component({
  selector: 'app-filter-widget',
  templateUrl: './filter-widget.component.html',
  styleUrls: ['./filter-widget.component.scss']
})
export class FilterWidgetComponent implements OnInit {

  items1 = ITEMS1;
  title1 = TITLE1;

  items2 = ITEMS2;
  title2 = TITLE2;


  constructor() { }

  ngOnInit(): void {
  }

}

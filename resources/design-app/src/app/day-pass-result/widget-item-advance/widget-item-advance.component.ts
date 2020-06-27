import { Component, OnInit } from '@angular/core';

const ITEMS = [
  {id : '1', content : 'Negril'},
  {id : '2', content : 'Cultural'}
];


@Component({
  selector: 'app-widget-item-advance',
  templateUrl: './widget-item-advance.component.html',
  styleUrls: ['./widget-item-advance.component.scss']
})
export class WidgetItemAdvanceComponent implements OnInit {

  title = 'Ameneties';
  items = ITEMS;
  
  constructor() { }

  ngOnInit(): void {
  }

}

import { Component, OnInit } from '@angular/core';

const TITLE1 = 'Parking & Transportation';
const ITEMS1 = [
  {id : '1', content : 'Free Parking'},
  {id : '1', content : 'On-site Parking'},
  {id : '1', content : 'Parking'},
  {id : '1', content : 'Private Parking'},
];

const TITLE2 = 'Guest Services';
const ITEMS2 = [
  {content : '24-hour Front Desk'}
];

const TITLE3 = 'Pools & Wellness';
const ITEMS3 = [
  {content : 'Outdoor Swimming Pool'},
  {content : 'Fitness Center'},
  {content : 'Spa'},
  {content : 'Sauna'},
  {content : 'Swimming Pool'}
];

const TITLE4 = 'Features';
const ITEMS4 = [
  {content : 'Beachfront'}
];

@Component({
  selector: 'app-rooms',
  templateUrl: './rooms.component.html',
  styleUrls: ['./rooms.component.scss']
})
export class RoomsComponent implements OnInit {

  title1 = TITLE1;
  items1 = ITEMS1;

  title2 = TITLE2;
  items2 = ITEMS2;

  title3 = TITLE3;
  items3 = ITEMS3;

  title4 = TITLE4;
  items4 = ITEMS4;

  constructor() { }

  ngOnInit(): void {
  }

}

import { Component, OnInit } from '@angular/core';

const TITLE1 = 'hightlights';
const ITEMS1 = [
  { id : '1', content : 'Scenic bus ride to the Jungle'},
  { id : '2', content : 'Experience the Zipline adventure'},
  { id : '3', content : 'Experience the tubing adventure'}
];

const TITLE2 = 'includes';
const ITEMS2 = [
  {id : '1', content : 'Lunch included in package'},
  {id : '2', content : 'Other food and beverage options are available for sale'},
  {id : '3', content : 'Complimentary transfer from major resorts'}
];

const TITLE3 = 'exclusions';
const ITEMS3 = [
  {id : '1', content : 'Souvenirs'},
  {id : '2', content : 'Photos'},
  {id : '3', content : 'Gift Items'}
];

const TITLE4 = 'Know before you go';
const ITEMS4 = [
  {id : '1', content : 'Fully guided tours'},
  {id : '2', content : 'Maximum weight : 250 lbs'},
  {id : '3', content : 'Not wheelchari accessible'},
  {id : '4', content : 'Not suitable for pregnant women'},
  {id : '5', content : 'Kayaks are also available for those who prefer kayaking instead of tubing'}
];

const TITLE5 = 'Child Policy';
const ITEMS5 = [
  {id : '1', content : 'Minium age : 6 years'}
];

const TITLE6 = 'Things to bring';
const ITEMS6 = [
  {id : '1', content : 'Wear: Swimwear, shorts & sneakers'},
  {id : '2', content : 'Bring: Water shoes, towels, bug repellent and sunscreen, as well as cash or credit card for purchasing gift items, photos, souvenirs and snacks'}
];

@Component({
  selector: 'app-description',
  templateUrl: './description.component.html',
  styleUrls: ['./description.component.scss']
})
export class DescriptionComponent implements OnInit {

  title1 = TITLE1;
  items1 = ITEMS1;

  title2 = TITLE2;
  items2 = ITEMS2;

  title3 = TITLE3;
  items3 = ITEMS3;

  title4 = TITLE4;
  items4 = ITEMS4;

  title5 = TITLE5;
  items5 = ITEMS5;

  title6 = TITLE6;
  items6 = ITEMS6;


  constructor() { }

  ngOnInit(): void {
  }

}

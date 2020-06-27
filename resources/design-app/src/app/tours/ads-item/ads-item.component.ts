import { Component, OnInit } from '@angular/core';

const TITLE = 'excellent oyster bay - adults only - all inclusive';
const SUBTITLE = 'falmouth trelawny';
const CONTENT = 'At Dolphin Cove Montego Bay, interact with two dolphins while swimming in the deep. You will participate in a brief presentation after which, you enter the world of these amazing mamalls. Swim with two dolphins as they intereact with you in our beautiful cove. Theu may give you a wonderful aspects. At Dolphin Cove Montego Bay, interact with two dolphins while swimming in the deep. You will participate in a brief presentation after which, you enter the world of these amazing mamalls. Swim with two dolphins as they intereact with you in our beautiful cove. Theu may give you a wonderful aspects.';

const PRICE = '130.00';


@Component({
  selector: 'app-ads-item',
  templateUrl: './ads-item.component.html',
  styleUrls: ['./ads-item.component.scss']
})
export class AdsItemComponent implements OnInit {

  title = TITLE;
  subtitle = SUBTITLE;
  content = CONTENT.slice(0,300);
  price = PRICE;

  constructor() { }

  ngOnInit(): void {
  }

}

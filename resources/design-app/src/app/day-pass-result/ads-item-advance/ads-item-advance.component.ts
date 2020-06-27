import { Component, OnInit } from '@angular/core';

const TITLE = 'excellent oyster bay - adults only - all inclusive';
const SUBTITLE = 'falmouth trelawny';
const CONTENT = 'The Jeep Safari tour is the perfect getaway for nature lovers! With competing forces of development, it is seemingly difficult to hear the birds sing. See exotic reptiles on a 200ft boardwalk in the center of ...';

const SALE_PRICE = '30';
const OLD_PRICE = '686';
const PRICE = '480';

@Component({
  selector: 'app-ads-item-advance',
  templateUrl: './ads-item-advance.component.html',
  styleUrls: ['./ads-item-advance.component.scss']
})
export class AdsItemAdvanceComponent implements OnInit {

  title = TITLE;
  subtitle = SUBTITLE;
  content = CONTENT;
  sale_price = SALE_PRICE;
  old_price = OLD_PRICE;
  price = PRICE;

  constructor() { }

  ngOnInit(): void {
  }

}

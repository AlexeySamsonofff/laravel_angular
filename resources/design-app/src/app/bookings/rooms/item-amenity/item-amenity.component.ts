import { Component, OnInit, Input } from '@angular/core';



@Component({
  selector: 'app-item-amenity',
  templateUrl: './item-amenity.component.html',
  styleUrls: ['./item-amenity.component.scss']
})
export class ItemAmenityComponent implements OnInit {

  @Input() title : string;
  @Input() items : [];

  constructor() { }

  ngOnInit(): void {
  }

}

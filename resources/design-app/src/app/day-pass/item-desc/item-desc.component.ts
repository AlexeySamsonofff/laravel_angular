import { Component, OnInit,Input } from '@angular/core';

@Component({
  selector: 'app-item-desc',
  templateUrl: './item-desc.component.html',
  styleUrls: ['./item-desc.component.scss']
})
export class ItemDescComponent implements OnInit {

  @Input() title : string;
  @Input() items : [];

  constructor() { }

  ngOnInit(): void {
  }

}

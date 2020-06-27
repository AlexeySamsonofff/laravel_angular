import { Component, OnInit,Injectable,Input } from '@angular/core';
import {FlatTreeControl} from '@angular/cdk/tree';
import {MatTreeFlatDataSource, MatTreeFlattener} from '@angular/material/tree';



@Component({
  selector: 'app-widget-item',
  templateUrl: './widget-item.component.html',
  styleUrls: ['./widget-item.component.scss']
})
export class WidgetItemComponent implements OnInit {

  @Input() title : string;
  @Input() items : [];


  
  constructor() {
  }


  ngOnInit(): void {
  }

}

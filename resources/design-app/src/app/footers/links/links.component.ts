import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-links',
  templateUrl: './links.component.html',
  styleUrls: ['./links.component.scss']
})
export class LinksComponent implements OnInit {

  @Input() title: string;
  @Input() data : [];

  constructor() { }

  ngOnInit(): void {
  }

}

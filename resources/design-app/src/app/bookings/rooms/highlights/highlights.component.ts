import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-highlights',
  templateUrl: './highlights.component.html',
  styleUrls: ['./highlights.component.scss']
})
export class HighlightsComponent implements OnInit {

  @Input() title : string;
  @Input() items : [];

  constructor() { }

  ngOnInit(): void {
  }

}

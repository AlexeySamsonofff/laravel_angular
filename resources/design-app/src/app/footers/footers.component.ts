import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-footers',
  templateUrl: './footers.component.html',
  styleUrls: ['./footers.component.scss']
})
export class FootersComponent implements OnInit {


  title1 : string ;title2 : string;title3 : string;
  data1 : any; data2 : any; data3 : any;
  constructor() { }

  
  ngOnInit(): void {

    //mock data from servers?
    this.data1 = [
      {description : "Hotels in Montego Bay Jamaica",url : "/"},
      {description : "Hotels in Ocho Rios Jamaica",url : "/"},
      {description : "Hotels in Negril Jamaica",url : "/"},
      {description : "Hotels in Portland Jamaica",url : "/"},
      {description : "Hotels in Kingston Jamaica",url : "/"},
      {description : "Hotels in Treasure Beach Jamaica",url : "/"},
    ];
    this.title1 = "Villas in jamaica";

    this.data2 = [
      {description : "Villas in Montego Bay Jamaica" , url : "/"},
      {description : "Villas in Ocho Rios Jamaica" , url : "/"},
      {description : "Villas in Negril Jamaica" , url : "/"},
      {description : "Villas in Portland Jamaica" , url : "/"},
      {description : "Villas in Kingston Jamaica" , url : "/"},
      {description : "Villas in Treasure Beach Jamaica" , url : "/"}
    ];
    this.title2 = "villas in jamaica";

    this.data3 = [
      {description : "hotels" , url : "/"},
      {description : "villas" , url : "/"},
      {description : "tours" , url : "/"},
      {description : "discover jamaica" , url : "/"}
    ];
    this.title3 = "start your vacation";


  }

}

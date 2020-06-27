import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-portfolio',
  templateUrl: './portfolio.component.html',
  styleUrls: ['./portfolio.component.scss']
})
export class PortfolioComponent implements OnInit {

  imageObject: Array<object> = [
    {
      image: 'assets/images/gallery/hotel1.jpg',
      thumbImage: 'assets/images/gallery/hotel1.jpg',
      alt: 'alt of image',
      title: 'title of image'                                 
    }, 
    {
      image: 'assets/images/gallery/hotel2.jpg',
      thumbImage: 'assets/images/gallery/hotel2.jpg',
      alt: 'alt of image',
      title: 'title of image'
    },
    {
      image: 'assets/images/gallery/hotel3.jpg',
      thumbImage: 'assets/images/gallery/hotel3.jpg',
      alt: 'alt of image',
      title: 'title of image'                                 
    }, 
    {
      image: 'assets/images/gallery/hotel4.jpg',
      thumbImage: 'assets/images/gallery/hotel4.jpg',
      alt: 'alt of image',
      title: 'title of image'
    },
    {
      image: 'assets/images/gallery/hotel5.jpg',
      thumbImage: 'assets/images/gallery/hotel5.jpg',
      alt: 'alt of image',
      title: 'title of image'                                 
    }, 
    {
      image: 'assets/images/gallery/hotel6.jpg',
      thumbImage: 'assets/images/gallery/hotel6.jpg',
      alt: 'alt of image',
      title: 'title of image'
    },
  ];

  size = {width: '120px', height: '100px', space: 4}

  constructor() { }

  ngOnInit(): void {
  }

}

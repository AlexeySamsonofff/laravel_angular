import { Component, OnInit, ViewEncapsulation} from '@angular/core';

import { FormControl, FormGroup } from '@angular/forms';

import {
  trigger,
  state,
  style,
  animate,
  transition,
  // ...
} from '@angular/animations';

declare var $: any;

// import { MdbImageModal} from './mdb-image-modal.component';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
  animations: [
    // animation triggers go here
  ],
  encapsulation: ViewEncapsulation.None
})
export class HomeComponent implements OnInit {

  hotelDropDownShow = false;
  hotelPopUpShow = false;
  dayPassDropDownShow = false;
  dayPassPopUpShow = false;
  tourDropDownShow = false;

  emailFormGroup = new FormGroup({
    email : new FormControl(''),

  });

  hotelFormGroup = new FormGroup({
    city : new FormControl(''),
    start_date : new FormControl(''),
    end_date : new FormControl(''),
    policy : new FormControl(''),
  });

  dayPassFormGroup = new FormGroup({
    city : new FormControl(''),
    start_date : new FormControl(''),
    end_date : new FormControl(''),
    policy : new FormControl(''),
  });

  tourFormGroup = new FormGroup({
    city : new FormControl(''),
    start_date : new FormControl(''),
    end_date : new FormControl(''),
  });

  images = [
    { img: 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg', thumb:
    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg', description: 'Image 1' },
    { img: 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg', thumb:
    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg', description: 'Image 2' },
    { img: 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg', thumb:
    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg', description: 'Image 3' },
    { img: 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg', thumb:
    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg', description: 'Image 4' },
    { img: 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg', thumb:
    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg', description: 'Image 5' },
    { img: 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg', thumb:
    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg', description: 'Image 6' },
    { img: 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg', thumb:
    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg', description: 'Image 7' },
    { img: 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg', thumb:
    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg', description: 'Image 8' },
    { img: 'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg', thumb:
    'https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg', description: 'Image 9' }
  ];

  constructor() { }

  ngOnInit(): void {
    // $('button').click(function(){
    //   alert('dkdkdk');
    //   });
    // }
    $('img').click(() => {
      alert('dkdkdkdk');
    });


  }

  toggleHotelAjaxForm() {
    this.hotelDropDownShow = !this.hotelDropDownShow;
  }

  toggleHotelPopUp() {
    this.hotelPopUpShow = true;
  }

  toggleDayPassAjaxForm() {
    this.dayPassDropDownShow = !this.dayPassDropDownShow;
  }

  toggleTourAjaxForm() {
    this.tourDropDownShow = !this.tourDropDownShow;
  }
}

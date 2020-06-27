import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { MDBBootstrapModule } from 'angular-bootstrap-md';

import { ReactiveFormsModule } from '@angular/forms';

import {MatExpansionModule} from '@angular/material/expansion';
import { MatButtonModule } from '@angular/material/button';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import {MatIconModule} from '@angular/material/icon';
import {MatTreeModule} from '@angular/material/tree';
import {MatCheckboxModule} from '@angular/material/checkbox';

import { GoogleMapsModule } from '@angular/google-maps'

import { Ng5SliderModule } from 'ng5-slider';
// import { StarRatingModule } from 'angular-star-rating';

import {MatStepperModule} from '@angular/material/stepper';
import {MatTabsModule} from '@angular/material/tabs';
import { NgImageSliderModule } from 'ng-image-slider';

import { ClarityModule } from '@clr/angular';

// MDB Angular Pro
// import { TabsModule, WavesModule } from 'ng-uikit-pro-standard'

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeadersComponent } from './headers/headers.component';
import { FootersComponent } from './footers/footers.component';
import { LinksComponent } from './footers/links/links.component';
import { SignFormComponent } from './footers/sign-form/sign-form.component';
import { SocialsComponent } from './socials/socials.component';
import { BookingsComponent } from './bookings/bookings.component';
import { ToursComponent } from './tours/tours.component';

import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { DayPassComponent } from './day-pass/day-pass.component';
import { ItemPassComponent } from './day-pass/item-pass/item-pass.component';
import { DescriptionComponent } from './day-pass/description/description.component';
import { ItemDescComponent } from './day-pass/item-desc/item-desc.component';
import { ToursItemComponent } from './tours/tours-item/tours-item.component';
import { ToursFilterComponent } from './tours/tours-filter/tours-filter.component';

import { RoomsComponent } from './bookings/rooms/rooms.component';
import { PortfolioComponent } from './bookings/rooms/portfolio/portfolio.component';
import { RatesComponent } from './bookings/rooms/rates/rates.component';
import { ItemAmenityComponent } from './bookings/rooms/item-amenity/item-amenity.component';
import { PolicyComponent } from './bookings/rooms/policy/policy.component';
import { DetailsComponent } from './bookings/details/details.component';
import { RoomDescComponent } from './bookings/rooms/room-desc/room-desc.component';
import { BookingDetailComponent } from './bookings/details/booking-detail/booking-detail.component';
import { SummaryComponent } from './bookings/details/summary/summary.component';
import { ImportantsComponent } from './bookings/details/importants/importants.component';
import { HighlightsComponent } from './bookings/rooms/highlights/highlights.component';
import { HomeComponent } from './home/home.component';

import { DayPassResultComponent } from './day-pass-result/day-pass-result.component';
import { AdsItemComponent } from './day-pass-result/ads-item/ads-item.component';
import { FilterWidgetComponent } from './day-pass-result/filter-widget/filter-widget.component';
import { SearchFormComponent } from './day-pass-result/search-form/search-form.component';
import { SignupFormComponent } from './day-pass-result/signup-form/signup-form.component';
import { WidgetItemComponent } from './day-pass-result/widget-item/widget-item.component';
import { AdsItemAdvanceComponent } from './day-pass-result/ads-item-advance/ads-item-advance.component';
import { AdvanceComponent } from './day-pass-result/advance/advance.component';
import { SearchFormAdvanceComponent } from './day-pass-result/search-form-advance/search-form-advance.component';
import { FilterWidgetAdvanceComponent } from './day-pass-result/filter-widget-advance/filter-widget-advance.component';
import { WidgetItemAdvanceComponent } from './day-pass-result/widget-item-advance/widget-item-advance.component';


@NgModule({
  declarations: [
    AppComponent,
    HeadersComponent,
    FootersComponent,
    LinksComponent,
    SignFormComponent,
    SocialsComponent,
    BookingsComponent,
    ToursComponent,
    AdsItemComponent,
    FilterWidgetComponent,
    SearchFormComponent,
    SignupFormComponent,
    WidgetItemComponent,
    DayPassComponent,
    ItemPassComponent,
    DescriptionComponent,
    ItemDescComponent,
    AdvanceComponent,
    SearchFormAdvanceComponent,
    FilterWidgetAdvanceComponent,
    AdsItemAdvanceComponent,
    WidgetItemAdvanceComponent,
    RoomsComponent,
    PortfolioComponent,
    RatesComponent,
    ItemAmenityComponent,
    PolicyComponent,
    DetailsComponent,
    RoomDescComponent,
    BookingDetailComponent,
    SummaryComponent,
    ImportantsComponent,
    HighlightsComponent,
    HomeComponent,
    DayPassResultComponent,
    ToursItemComponent,
    ToursFilterComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    MDBBootstrapModule.forRoot(),
    ReactiveFormsModule,
    BrowserAnimationsModule,
    MatExpansionModule,
    MatButtonModule,
    MatFormFieldModule,
    MatInputModule,
    MatIconModule,
    MatTreeModule,
    MatCheckboxModule,
    GoogleMapsModule,
    Ng5SliderModule,
    // StarRatingModule,
    // ClarityModule,
    MatStepperModule,
    // TabsModule,
    // WavesModule
    MatTabsModule,
    NgImageSliderModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

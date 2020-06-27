import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { HomeComponent } from './home/home.component';
import { BookingsComponent } from './bookings/bookings.component';
import { ToursComponent } from './tours/tours.component';
import { DayPassComponent } from './day-pass/day-pass.component';
import { DayPassResultComponent } from './day-pass-result/day-pass-result.component';
import { AdvanceComponent } from './day-pass-result/advance/advance.component';

const routes: Routes = [
  { path: 'home', component: HomeComponent },
  { path: 'bookings', component: BookingsComponent },
  { path: 'tours', component: ToursComponent },
  { path: 'daypass',  component: DayPassComponent },
  { path: 'daypass_result',  component: DayPassResultComponent },
  { path: 'tours_a',  component: AdvanceComponent },
  { path: '',   redirectTo: '/home', pathMatch: 'full' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

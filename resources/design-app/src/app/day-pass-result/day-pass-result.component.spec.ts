import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DayPassResultComponent } from './day-pass-result.component';

describe('DayPassResultComponent', () => {
  let component: DayPassResultComponent;
  let fixture: ComponentFixture<DayPassResultComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DayPassResultComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DayPassResultComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

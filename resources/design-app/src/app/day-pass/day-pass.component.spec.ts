import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DayPassComponent } from './day-pass.component';

describe('DayPassComponent', () => {
  let component: DayPassComponent;
  let fixture: ComponentFixture<DayPassComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DayPassComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DayPassComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ToursFilterComponent } from './tours-filter.component';

describe('ToursFilterComponent', () => {
  let component: ToursFilterComponent;
  let fixture: ComponentFixture<ToursFilterComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ToursFilterComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ToursFilterComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { FilterWidgetAdvanceComponent } from './filter-widget-advance.component';

describe('FilterWidgetAdvanceComponent', () => {
  let component: FilterWidgetAdvanceComponent;
  let fixture: ComponentFixture<FilterWidgetAdvanceComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ FilterWidgetAdvanceComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(FilterWidgetAdvanceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

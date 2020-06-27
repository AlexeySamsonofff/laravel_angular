import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { WidgetItemAdvanceComponent } from './widget-item-advance.component';

describe('WidgetItemAdvanceComponent', () => {
  let component: WidgetItemAdvanceComponent;
  let fixture: ComponentFixture<WidgetItemAdvanceComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ WidgetItemAdvanceComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(WidgetItemAdvanceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

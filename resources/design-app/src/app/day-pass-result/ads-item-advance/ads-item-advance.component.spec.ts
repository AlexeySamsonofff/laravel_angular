import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AdsItemAdvanceComponent } from './ads-item-advance.component';

describe('AdsItemAdvanceComponent', () => {
  let component: AdsItemAdvanceComponent;
  let fixture: ComponentFixture<AdsItemAdvanceComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdsItemAdvanceComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdsItemAdvanceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

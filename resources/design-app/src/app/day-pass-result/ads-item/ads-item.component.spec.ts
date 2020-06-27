import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AdsItemComponent } from './ads-item.component';

describe('AdsItemComponent', () => {
  let component: AdsItemComponent;
  let fixture: ComponentFixture<AdsItemComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AdsItemComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AdsItemComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

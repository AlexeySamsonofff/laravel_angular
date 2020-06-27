import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ItemAmenityComponent } from './item-amenity.component';

describe('ItemAmenityComponent', () => {
  let component: ItemAmenityComponent;
  let fixture: ComponentFixture<ItemAmenityComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ItemAmenityComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ItemAmenityComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

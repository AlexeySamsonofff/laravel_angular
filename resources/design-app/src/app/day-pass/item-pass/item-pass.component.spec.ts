import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ItemPassComponent } from './item-pass.component';

describe('ItemPassComponent', () => {
  let component: ItemPassComponent;
  let fixture: ComponentFixture<ItemPassComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ItemPassComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ItemPassComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

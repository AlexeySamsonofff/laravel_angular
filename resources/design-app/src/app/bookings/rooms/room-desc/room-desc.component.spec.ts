import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { RoomDescComponent } from './room-desc.component';

describe('RoomDescComponent', () => {
  let component: RoomDescComponent;
  let fixture: ComponentFixture<RoomDescComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ RoomDescComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(RoomDescComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

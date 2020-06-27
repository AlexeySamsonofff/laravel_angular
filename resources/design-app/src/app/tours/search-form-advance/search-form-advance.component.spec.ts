import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SearchFormAdvanceComponent } from './search-form-advance.component';

describe('SearchFormAdvanceComponent', () => {
  let component: SearchFormAdvanceComponent;
  let fixture: ComponentFixture<SearchFormAdvanceComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SearchFormAdvanceComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SearchFormAdvanceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

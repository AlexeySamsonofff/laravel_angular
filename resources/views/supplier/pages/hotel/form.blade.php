@extends('supplier.layouts.contentLayoutMaster')

{{-- title --}}
@section('title','Add Hotel')

{{-- vendor scripts --}}
@section('vendor-styles')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/vendors/css/forms/select/select2.min.css')}}">
@endsection

{{-- page style --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/pages/hotel/form.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section id="info-tabs-">
  <form action="#" class="wizard-horizontal icon-tab mt-2">
    <!-- Step 1 -->
    <h6>
      <i class="step-icon"></i>
      <span class="fonticon-wrap">Step 1</span>
      <span class="pl-1">General</span>
    </h6>
    <!-- Step 1 end-->
    <!-- body content of step 1 -->
    <fieldset>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">General Details</h6>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Property Name:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Property Type:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Property Rating:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Currency:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Destination: e.g ( Montego Bay, Jamaica):</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Address:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Taxes Details</h6>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="c-inputs-stacked">
                      <div class="d-inline-block mr-2">
                        <fieldset>
                          <div class="checkbox">
                            <input type="checkbox" class="checkbox__input" id="checkbox6">
                            <label for="checkbox6">Tax included</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Government Tax(%):</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Resort Fee(fixed):</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Service Tax(%):</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <!-- body content of step 1 end-->

    <!-- Step 2-->
    <h6>
      <i class="step-icon"></i>
      <span class="fonticon-wrap">Step 2</span>
      <span class="pl-1">Contact Info</span>
    </h6>
    <!-- Step 2 end-->
    <!-- body content of step 2 -->
    <fieldset>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Location Details</h6>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Location:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Latitude:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Longitude:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Hotel Details</h6>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Hotel Email:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Reservation email:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Hotel Phone:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Hotel Fax:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Booking Phone:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Emergency Number:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>TripAdvisor location Id:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <!-- body content of step 2 end-->

    <!-- Step 3-->
    <h6>
      <i class="step-icon"></i>
      <span class="fonticon-wrap">Step 3</span>
      <span class="pl-1">Hotel Amenities</span>
    </h6>
    <!-- Step 3 end-->
    <!-- body content of step 3 -->
    <fieldset>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Hotel Amenities</h6>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="c-inputs-stacked">
                      <div class="d-inline-block mr-2">
                        <fieldset>
                          <div class="checkbox">
                            <input type="checkbox" class="checkbox__input" id="checkbox6">
                            <label for="checkbox6">Gym</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="c-inputs-stacked">
                      <div class="d-inline-block mr-2">
                        <fieldset>
                          <div class="checkbox">
                            <input type="checkbox" class="checkbox__input" id="checkbox6">
                            <label for="checkbox6">WiFi</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="c-inputs-stacked">
                      <div class="d-inline-block mr-2">
                        <fieldset>
                          <div class="checkbox">
                            <input type="checkbox" class="checkbox__input" id="checkbox6">
                            <label for="checkbox6">Free WiFi</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="c-inputs-stacked">
                      <div class="d-inline-block mr-2">
                        <fieldset>
                          <div class="checkbox">
                            <input type="checkbox" class="checkbox__input" id="checkbox6">
                            <label for="checkbox6">Outdoor Pool</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="c-inputs-stacked">
                      <div class="d-inline-block mr-2">
                        <fieldset>
                          <div class="checkbox">
                            <input type="checkbox" class="checkbox__input" id="checkbox6">
                            <label for="checkbox6">24-Hour Front Desk</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <div class="c-inputs-stacked">
                      <div class="d-inline-block mr-2">
                        <fieldset>
                          <div class="checkbox">
                            <input type="checkbox" class="checkbox__input" id="checkbox6">
                            <label for="checkbox6">Swimming Pool</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <!-- body content of step 3 end-->

    <!-- Step 4-->
    <h6>
      <i class="step-icon"></i>
      <span class="fonticon-wrap">Step 4</span>
      <span class="pl-1">Images</span>
    </h6>
    <!-- Step 4 end-->
    <!-- body content of step 4 -->
    <fieldset>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Primary Hotel Image</h6>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <p>Uploaded Image Here</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Gallery Images</h6>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <p>Image 1</p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <p>Image 2</p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <p>Image 3</p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <p>Image 4</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <!-- body content of step 4 end-->

    <!-- Step 5-->
    <h6>
      <i class="step-icon"></i>
      <span class="fonticon-wrap">Step 5</span>
      <span class="pl-1">Property Details</span>
    </h6>
    <!-- Step 5 end-->
    <!-- body content of step 5 -->
    <fieldset>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Check In/Out</h6>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Check-in:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Check-out:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6 offset-sm-6">
                  <div class="form-group">
                    <label>Minimum check-in age:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Hotel description:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Check-in instructions:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Meal Plan</h6>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Meal Plan Description:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Important information:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Others</h6>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Language Spoken:</label>
                    <select class="select2 form-control" multiple="multiple">
                      <option value="english">English</option>
                      <option value="french">French</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Restaurants available or close by:</label>
                    <select class="select2 form-control" multiple="multiple">
                      <option value="restaurant_1">Restaurant 1</option>
                      <option value="restaurant_2">Restaurant 2</option>
                      <option value="restaurant_3">Restaurant 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Parking Type:</label>
                    <select class="form-control">
                      <option value="">Select Rating</option>
                      <option value="free_self_parking">Free Self Parking</option>
                      <option value="paid_parking">Paid Parking</option>
                      <option value="free_limited_parking">Free Limited Parking</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Are pets allowed:</label>
                    <select class="form-control">
                      <option value="">Are pets allowed:</option>
                      <option value="pets_allowed">Pets allowed</option>
                      <option value="pets_not_allowed">Pets not allowed</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nearby things to do:</label>
                    <select class="select2 form-control" multiple="multiple">
                      <option value="nearby_things">Nearby things to do :2 outdoor swimming pools are on site along with a 24-hour fitness center.</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Entertainment and family facilities:</label>
                    <select class="select2 form-control" multiple="multiple">
                      <option value="pool_deck">Pool Deck</option>
                      <option value="family_golf">Family Golf</option>
                      <option value="open_bar_cafe">Open Bar Cafe</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Pool and Spa:</label>
                    <select class="select2 form-control" multiple="multiple">
                      <option value="massage_room">The onsite spa has massage/treatment rooms</option>
                      <option value="family_golf">couples treatment room(s)</option>
                      <option value="open_bar_cafe">and outdoor treatment areas. Massages are available on the beach and in the spa; other services include deep-tissue massages</option>
                      <option value="hot_stone_massages">hot stone massages</option>
                      <option value="sport_massages">and sports massages.</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Transfers available:</label>
                    <select class="form-control">
                      <option value="">Select Transfers</option>
                      <option value="available_additional_cost">Available at additional cost</option>
                      <option value="included">Included</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Internet:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <!-- body content of step 5 end-->

    <!-- Step 6-->
    <h6>
      <i class="step-icon"></i>
      <span class="fonticon-wrap">Step 6</span>
      <span class="pl-1">Policies</span>
    </h6>
    <!-- Step 6 end-->
    <!-- body content of step 6 -->
    <fieldset>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content">
              <div class="card-body row">
                <div class="col-12">
                  <h6 class="py-50">Policy Details</h6>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Hotel Policy:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Child Policy:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Terms and Condition:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Rate Description:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Room Charges Disclosure:</label>
                    <textarea rows="4" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
    <!-- body content of step 6 end-->
  </form>
</section>
<!-- Form wizard with icon tabs section end -->

@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('assets/supplier/vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('assets/supplier/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/supplier/vendors/js/forms/select/select2.full.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('assets/supplier/js/scripts/pages/hotel/form.js')}}"></script>
@endsection

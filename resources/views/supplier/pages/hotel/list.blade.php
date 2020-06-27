@extends('supplier.layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Hotel List')

{{-- vendor styles --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/vendors/css/tables/datatable/datatables.min.css')}}">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" />
@endsection

{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/pages/hotel/list.css')}}">
@endsection

@section('content')
<!-- hotels list start -->
<section class="hotels-list-wrapper">
  <div class="hotels-list-filter px-1">
    <form>
      <div class="row border rounded py-2 mb-2">
        <div class="col-12 col-sm-6 col-lg-4">
          <fieldset class="form-group">
            <label for="hotels-list-code">Hotel Code</label>
            <input type="text" class="form-control" id="hotels-list-code">
          </fieldset>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <fieldset class="form-group">
            <label for="hotels-list-name">Hotel Name</label>
            <input type="text" class="form-control" id="hotels-list-name">
          </fieldset>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <label for="hotels-list-rating">Hotel Rating</label>
          <fieldset class="form-group">
            <select class="form-control" id="hotels-list-rating">
              <option value="">Select Rating</option>

              @foreach($hotelRatings as $rating)
                <option value="{{ $rating }}">{{ $rating }}</option>
              @endforeach
            </select>
          </fieldset>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <fieldset class="form-group">
            <label for="hotels-list-city">City</label>
            <input type="text" class="form-control" id="hotels-list-city">
          </fieldset>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <label for="hotels-list-status">Status</label>
          <fieldset class="form-group">
            <select class="form-control" id="hotels-list-status">
              <option value="">Select Status</option>

              @foreach($hotelStatuses as $status)
                <option value="{{ $status ? 'Active' : 'Inactive' }}">{{ $status ? 'Active' : 'Inactive' }}</option>
              @endforeach
            </select>
          </fieldset>
        </div>
        <div class="col-12 col-sm-3 col-lg-2 d-flex align-items-center">
          <button type="button" class="btn btn-primary btn-block glow hotels-list-search mb-0">Search</button>
        </div>
        <div class="col-12 col-sm-3 col-lg-2 d-flex align-items-center">
          <button type="reset" class="btn btn-dark btn-block glow hotels-list-clear mb-0">Clear Filter</button>
        </div>
      </div>
    </form>
  </div>
  <div class="hotels-list-table">
    <div class="card">
      <div class="card-content">
        <div class="card-body">

          <!-- create hotel button-->
          <div class="hotels-create-btn mb-1">
            <a href="#!" class="btn btn-success glow hotel-create" role="button" aria-pressed="true">
              Add New Hotel
            </a>
          </div>

          <!-- datatable start -->
          <div class="table-responsive">
            <table id="hotels-list-datatable" class="table display nowrap" style="width:100%">
              <thead>
                <tr>
                  <th class="all">SL.No</th>
                  <th class="all">Hotel Code</th>
                  <th class="all">Hotel Name</th>
                  <th class="all">Preview</th>
                  <th class="all">City</th>
                  <th class="all">Country</th>
                  <th class="all">Status</th>
                  <th class="none">Property Type</th>
                  <th class="none">Star Rating</th>
                  <th class="none">Email</th>
                  <th class="all">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($hotelList as $hotel)
                  <tr>
                    <td>{{ $hotel->supplier_hotel_list_id }}</td>
                    <td>{{ $hotel->hotel_code }}</td>
                    <td>{{ $hotel->hotel_name }}</td>
                    <td>
                      <a href="#!" target="_blank">
                        <i class="bx bx-show-alt"></i>
                      </a>
                    </td>
                    <td>{{ $hotel->hotel_city }}</td>
                    <td>{{ $hotel->hotel_country }}</td>
                    <td>
                      <span class="badge badge-pill badge-light-{{ $hotel->status ? 'success' : 'danger' }}">{{ $hotel->status ? 'Active' : 'Inactive' }}</span>
                    </td>
                    <td>{{ $hotel->hotel_property_type }}</td>
                    <td>{{ $hotel->hotel_star_rating }}</td>
                    <td>{{ $hotel->hotel_email }}</td>
                    <td>
                      <a href="#!" class="btn btn-sm btn-success glow">
                        <i class="bx bx-check"></i>Active
                      </a>
                      <a href="#!" class="btn btn-sm btn-primary glow">
                        <i class="bx bx-edit-alt"></i>&nbsp;Edit
                      </a>
                      <a href="#!" class="btn btn-sm btn-warning glow">
                        <i class="bx bx-duplicate"></i>&nbsp;Duplicate
                      </a>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="11">There is no hotel yet.</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <!-- datatable ends -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- hotels list ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('assets/supplier/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('assets/supplier/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('assets/supplier/js/scripts/pages/hotel/list.js')}}"></script>
@endsection

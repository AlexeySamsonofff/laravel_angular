<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-brand-center @if($configData['navbarBgColor'] !== 'bg-white' )) {{$configData['navbarBgColor']}} @else {{'bg-primary'}} @endif
@if($configData['navbarType'] === 'navbar-static') {{'navbar-static-top'}} @else {{'fixed-top'}} @endif
@if($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif">
  <div class="navbar-header d-xl-block d-none">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item">
        <a class="navbar-brand" href="{{ route('supplier.dashboard') }}">
          <div class="brand-logo">
            <img src="{{asset('assets/supplier/images/logo/logo-light.png')}}" class="logo" alt="">
          </div>
        </a>
      </li>
    </ul>
  </div>
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="navbar-collapse" id="navbar-mobile">
        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu mr-auto"><a class="nav-link nav-menu-main menu-toggle" href="#"><i class="bx bx-menu"></i></a></li>
          </ul>
        </div>
        <ul class="nav navbar-nav float-right d-flex align-items-center">
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-lg-flex d-none">
                <span class="user-name">John Doe</span><span class="user-status">Available</span>
              </div>
              <span><img class="round" src="{{asset('assets/supplier/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pb-0">
              <a class="dropdown-item" href="{{asset('assets/supplier/page-user-profile')}}"><i class="bx bx-user mr-50"></i> Edit Profile</a>
              <div class="dropdown-divider mb-0"></div>
              <a class="dropdown-item" href="{{ route('supplier.logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off mr-50"></i> Logout</a>

              <form id="logout-form" action="{{ route('supplier.logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

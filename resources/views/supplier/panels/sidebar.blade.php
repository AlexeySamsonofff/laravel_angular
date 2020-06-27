{{-- horizontal-menu --}}
@if($configData['mainLayoutType'] == 'horizontal-menu')
  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-light navbar-without-dd-arrow
       @if($configData['navbarType'] === 'navbar-static') {{'navbar-sticky'}} @endif" role="navigation"
       data-menu="menu-wrapper">
    <div class="navbar-header d-xl-none d-block">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto">
          <a class="navbar-brand" href="{{ route('supplier.dashboard') }}">
            <div class="brand-logo">
              <img src="{{asset('assets/supplier/images/logo/logo.png')}}" class="logo" alt="">
            </div>
          </a>
        </li>
        <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
            <i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">
        @if(!empty($menuData[1]) && isset($menuData[1]))
          @foreach ($menuData[1]->menu as $menu)
            <li class="@if(isset($menu->submenu)){{'dropdown'}} @endif nav-item" data-menu="dropdown">
              <a class="@if(isset($menu->submenu)){{'dropdown-toggle'}} @endif nav-link" href="{{asset($menu->url)}}"
              @if(isset($menu->submenu)){{'data-toggle=dropdown'}} @endif @if(isset($menu->newTab)){{"target=_blank"}}@endif>
                <i class="menu-livicon" data-icon="{{$menu->icon}}"></i>
                <span>{{ $menu->name }}</span>
              </a>
              @if(isset($menu->submenu))
                @include('supplier.panels.sidebar-submenu',['menu'=>$menu->submenu])
              @endif
            </li>
          @endforeach
        @endif
      </ul>
    </div>
    <!-- /horizontal menu content-->
  </div>
@endif

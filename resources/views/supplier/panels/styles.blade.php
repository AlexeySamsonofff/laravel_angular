{{-- style blade file --}}
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    @if($configData['direction'] === 'ltr')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/vendors/css/vendors.min.css')}}">
    @else
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/vendors/css/vendors-rtl.min.css')}}">
    @endif
    @yield('vendor-styles')
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/themes/semi-dark-layout.css')}}">
    @if($configData['direction'] === 'rtl')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/custom-rtl.css')}}">
    @endif
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    @if($configData['mainLayoutType'] == 'horizontal-menu')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/core/menu/menu-types/horizontal-menu.css')}}">
    @else
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/core/menu/menu-types/vertical-menu.css')}}">
    @endif
    @yield('page-styles')
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    @if($configData['direction'] === 'ltr')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/style.css')}}">
    @else
    <link rel="stylesheet" type="text/css" href="{{asset('assets/supplier/css/style-rtl.css')}}">
    @endif
    <!-- END: Custom CSS-->

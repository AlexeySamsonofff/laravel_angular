
    <!-- BEGIN: Vendor JS-->
    <script>
        var assetBaseUrl = "{{ asset('assets/supplier') . '/' }}";
    </script>
    <script src="{{asset('assets/supplier/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('assets/supplier/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{asset('assets/supplier/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{asset('assets/supplier/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    @yield('vendor-scripts')
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    @if($configData['mainLayoutType'] == 'vertical-menu')
    <script src="{{asset('assets/supplier/js/scripts/configs/vertical-menu-light.js')}}"></script>
    @else
    <script src="{{asset('assets/supplier/js/scripts/configs/horizontal-menu.js')}}"></script>
    @endif
    <script src="{{asset('assets/supplier/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/supplier/js/core/app.js')}}"></script>
    <script src="{{asset('assets/supplier/js/scripts/components.js')}}"></script>
    <script src="{{asset('assets/supplier/js/scripts/footer.js')}}"></script>
    <script src="{{asset('assets/supplier/js/scripts/customizer.js')}}"></script>
    <script src="{{asset('assets/supplier/js/custom/scripts.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    @yield('page-scripts')
    <!-- END: Page JS-->

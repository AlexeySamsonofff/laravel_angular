<html lang="en" ng-app="vacaymeApp">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vacaymenow.com: Book the best Hotels, Villas &amp; Tours in Jamaica.</title>
    <meta name="description" content="Book Hotels, Villas &amp; Tours in Jamaica with Vacaymenow fast and easy. Discover the best of Ocho Rios, Montego Bay, Negril Jamaica.">
    <meta name="keywords" content="hotels in montego bay, hotels in kingston jamaica, hotels in negril jamaica, hotels in ocho rios jamaica, things to do in Jamaica, things to do in negril, things to do in kingston, things to do in montego bay, hotels in kingston Jamaica, cheap caribbean, all-inclusive hotels” villas, villas in discovery bay, villas in jamaica">
    <link href="https://www.vacaymenow.com" rel="canonical">
    <meta name="robots" content="index,follow">
    <meta property="og:type" content="company">
    <meta property="og:title" content="Vacaymenow - Book the best Jamaican vacations. Hotels, Villas, &amp; Tours.">
    <meta property="og:description" content="Book your next Hotel, Villa &amp; Tour with Vacaymenow. Discover the best of what Jamaica has to offer and book at the best prices, quick and easy.">
    <meta property="og:url" content="https://www.vacaymenow.com">
    <meta property="og:site_name" content="Vacaymenow.com">
    <meta property="og:image" content="https://s3.us-east-2.amazonaws.com/vacaymenow.com/public/uploads/banners/All/default.jpg?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIA3NGXKBBPWLE7CMGP%2F20200409%2Fus-east-2%2Fs3%2Faws4_request&amp;X-Amz-Date=20200409T092735Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=300&amp;X-Amz-Signature=a548f52f27f89869d25901fd67c7da21ee9439387b83764a3b9b415f0f5a2732">



  <!-- Google Tag Manager -->
  <script src="https://connect.facebook.net/en_US/sdk.js?hash=09ada83f6ef0f7639e16b68c024779ee" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="//connect.facebook.net/en_US/sdk.js"></script><script src="https://connect.facebook.net/signals/config/549493059136561?v=2.9.15&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/NjSCg_IbX1Pdc6A9cf-rvw4e/recaptcha__en.js"></script><script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-5Q9J65Z"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5Q9J65Z');</script>
  <!-- End Google Tag Manager -->

  <link rel="icon" href="{{ asset('/images/favicon.ico') }}" type="image/gif" sizes="32x32">
  <script src="https://sdk.amazonaws.com/js/aws-sdk-2.179.0.min.js"></script>
  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('/css/bootstrap.css')}}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('/css/flexslider.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('/css/animate.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('/css/travel-mega-menu.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('/css/stylish-portfolio.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/flag/flag-icon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/datepicker/datepicker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery-ui-1.10.4.custom.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/slider/jquery-slider.css')}}">
  <!-- Custom Fonts -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/parsley/modalparsley.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/paxdrop/paxdrop.css')}}">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{ asset('/css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/responsive.css')}}" rel="stylesheet" type="text/css">
	<!-- MY App -->
</head>
<body ng-controller="homeController">
    <header-controller></header-controller>
    <content-controller></content-controller>
    <footer-controller></footer-controller>

<!-- Footer Script Start -->
<script src="{{ asset('/js/modernizr.js')}}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script> -->

<script type="text/javascript">
    var baseUrl = "https://www.vacaymenow.com/";
    var siteUrl = "https://www.vacaymenow.com/";
    var loaderimg = "https://s3.us-east-2.amazonaws.com/vacaymenow.com/public/img/bx_loader.gif?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIA3NGXKBBPWLE7CMGP%2F20200409%2Fus-east-2%2Fs3%2Faws4_request&X-Amz-Date=20200409T092735Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Signature=f85fcee1461c80f427dc999a90b06372ac6d7f8830e99a6d73079910679cebd0";
    var domain = "home";
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.9/angular.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/vendor/datepicker/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('/vendor/paxdrop/paxdrop.js')}}"></script>
<script type="text/javascript" src="{{ asset('/vendor/paxdrop/paxdrop_villa.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.0/parsley.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/script.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/custom.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery-ui.js')}}"></script>
<!-- Angular JS -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.7.9/angular-sanitize.min.js"></script>
<script type="text/javascript" src="{{ asset('/vendor/slider/jquery-slider.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

<script src="{{ asset('/app/helper/dirPagination.js') }}"></script>
<script src="{{ asset('/app/app.js') }}"></script>
<script src="{{ asset('/app/services/myServices.js') }}"></script>
<script src="{{ asset('/app/helper/myHelper.js') }}"></script>
<!-- App Controller -->
<!-- <script src="{{ asset('/app/controllers/hotels.js') }}"></script> -->
<script src="{{ asset('/app/controllers/home.js') }}"></script>
<!-- <script src="{{ asset('/js/hotel/list.js') }}"></script> -->


<script type="text/javascript">
$(document).ready(function(){
    $('.flexslider').flexslider({
      animation: "slide",
      animationLoop: true,
      touch: true,
      controlNav: false,
      directionNav:true,
      keyboard: true,
      move: 0,
      prevText: "",
      nextText: "",
      slideshow: false,
      itemWidth: 205,
      itemMargin: 10,
      minItems: getGridSize(), // use function to pull in initial value
      maxItems: getGridSize() // use function to pull in initial value
    });

});

function getGridSize() {
    return (window.innerWidth < 600) ? 1 : (window.innerWidth < 900) ? 2 : 3;
}

</script>
<!-- Footer Script End -->
</body>
</html>

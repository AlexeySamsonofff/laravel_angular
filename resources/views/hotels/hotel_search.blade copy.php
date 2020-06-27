
<html lang="en" ng-app="vacaymeApp">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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

    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/slider/jquery-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/paxdrop/paxdrop.css') }}">
    <link href="{{ asset('/css/hotel_result.css') }}" rel="stylesheet">

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
    <link href="https://www.vacaymenow.com/public/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Custom CSS -->
    <link href="https://www.vacaymenow.com/public/css/flexslider.css" rel="stylesheet" type="text/css">
    <link href="https://www.vacaymenow.com/public/css/animate.css" rel="stylesheet" type="text/css">
    <link href="https://www.vacaymenow.com/public/css/travel-mega-menu.css" rel="stylesheet" type="text/css">
    <link href="https://www.vacaymenow.com/public/css/stylish-portfolio.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://www.vacaymenow.com/public/vendor/flag/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="https://www.vacaymenow.com/public/vendor/datepicker/datepicker.css">
    <link rel="stylesheet" type="text/css" href="https://www.vacaymenow.com/public/css/jquery-ui-1.10.4.custom.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/paxdrop/paxdrop.css')}}">

    <link href="https://www.vacaymenow.com/public/css/custom.css" rel="stylesheet">
    <link href="https://www.vacaymenow.com/public/css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://www.vacaymenow.com/public/vendor/parsley/modalparsley.css">



    <!-- Custom Fonts -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

    <link rel="stylesheet" type="text/css" href="https://www.vacaymenow.com/public/vendor/slider/jquery-slider.css">

    <style type="text/css">
        html{
        overflow: hidden;
        }
        .loggedout.subs{
        display: block
        }
        .loggedin.subs{
        display: none
        }
        #overlay {
        display: block;
        }

        .read-more-item {
            display:block;
            text-align: left;
            overflow:hidden;
            /*padding-bottom: 10px;*/
            max-width: 99%;
            font-size: 13px;
        }
        /* .read-more-item p:last-child{
            margin-bottom: 0;
        } */
        .read-more-item{
            color: #0985c5;
            cursor:pointer;
        }
        .collapse-text-toggle{
            font-weight: bold;
        }

    </style>
</head>
    <body ng-controller="hotelsController">
        <!-- header section -->
        <header-controller></header-controller>
        <div class="container">
            <section class="signup orange-bg">
                <form method="post" id="subscribe-opt">
                    <?php if(!empty($subs_text->top_text)){ ?>
                        <h4><?php echo $subs_text->top_text ?></h4>
                    <?php } ?>
                    <div class="row small-padding" id="subs-row">
                        <div class="col-sm-4">
                            <input type="text" name="email" class="form-control email-holder" placeholder="Enter your email address">
                            <input type="hidden" name="member_signup" value="1">
                        </div>
                        <div class="col-sm-2">
                            <input type="submit" class="form-control btn btn-primary member_signup" value="Sign Up, It's Free!">
                        </div>
                        <div class="col-sm-2">
                            Or, <a href="javascript:;" data-toggle="modal" data-target="#modalLogin"><u><b>sign in</b></u></a>
                        </div>
                    </div>
                    <div class="text-white" id="subs-msg" style="display: none;"></div>
                    <?php if(!empty($subs_text->bottom_text)){ ?>
                        <p><?php echo $subs_text->bottom_text ?></p>
                    <?php } ?>
                </form>
            </section>
        </div>
        <searchresult-controller></searchresult-controller>
        <footer-controller></footer-controller>

        <script src="https://www.vacaymenow.com/public/js/modernizr.js" type="text/javascript"></script>
        <script src="https://www.vacaymenow.com/public/js/jquery-1.10.1.min.js" type="text/javascript"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->




    <!-- <script src="/bower_components/angular-read-more/readmore.min.js"></script> -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        var baseUrl = "https://www.vacaymenow.com/";
        var siteUrl = "https://www.vacaymenow.com/";
        var loaderimg = "https://s3.us-east-2.amazonaws.com/vacaymenow.com/public/img/bx_loader.gif?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIA3NGXKBBPWLE7CMGP%2F20200409%2Fus-east-2%2Fs3%2Faws4_request&X-Amz-Date=20200409T092735Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Signature=f85fcee1461c80f427dc999a90b06372ac6d7f8830e99a6d73079910679cebd0";
            var domain = "home";
        </script>

    <script type="text/javascript">
        var baseUrl = "https://www.vacaymenow.com/";
        var siteUrl = "https://www.vacaymenow.com/";
        var loaderimg = "https://s3.us-east-2.amazonaws.com/vacaymenow.com/public/img/bx_loader.gif?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIA3NGXKBBPWLE7CMGP%2F20200409%2Fus-east-2%2Fs3%2Faws4_request&X-Amz-Date=20200409T092735Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Signature=f85fcee1461c80f427dc999a90b06372ac6d7f8830e99a6d73079910679cebd0";
        var domain = "home";
    </script>

    <script type="text/javascript" src="https://www.vacaymenow.com/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.vacaymenow.com/public/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="https://www.vacaymenow.com/public/js/waypoints.min.js"></script>
    <script type="text/javascript" src="https://www.vacaymenow.com/public/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="https://www.vacaymenow.com/public/vendor/datepicker/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="https://www.vacaymenow.com/public/vendor/paxdrop/paxdrop.js"></script>
    <script type="text/javascript" src="https://www.vacaymenow.com/public/vendor/paxdrop/paxdrop_villa.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.0/parsley.js"></script>
    <script type="text/javascript" src="https://www.vacaymenow.com/public/js/script.js"></script>
    <script type="text/javascript" src="https://www.vacaymenow.com/public/js/custom.js"></script>
    <script type="text/javascript" src="https://www.vacaymenow.com/public/js/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<!-- <script type="text/javascript" src -->
    <!-- Angular JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.9/angular.min.js"></script>
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-route.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-animate.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.6.4/angular-sanitize.min.js"></script> -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.7.9/angular-sanitize.min.js"></script>


    <!-- MY App -->

    <script src="{{ asset('/app/packages/dirPagination.js') }}"></script>
    <script src="{{ asset('/app/services/myServices.js') }}"></script>
    <script src="{{ asset('/app/helper/myHelper.js') }}"></script>
    <script src="{{ asset('/app/Helpers/common_helper.php') }}"></script>

    <script src="{{ asset('app/app.js') }}"></script>
    <script src="{{ asset('app/controllers/hotels.js') }}"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </body>
</html>

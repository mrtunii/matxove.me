<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from html.alfisahr.com/shofy/payment-confirm.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jan 2017 16:11:43 GMT -->
<head>
    <title>Shofy - Mobile Shop Template</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
    <link rel="shortcut icon" href="/images/favicon.png">
    <link href="/css/custom.css" rel="stylesheet">
    <script type="text/javascript">

        $( document ).on( "pageinit", "#demo-page", function() {
            $( document ).on( "swipeleft swiperight", "#demo-page", function( e ) {
                // We check if there is no open panel on the page because otherwise
                // a swipe to close the left panel would also open the right panel (and v.v.).
                // We do this by checking the data that the framework stores on the page element (panel: open).
                if ( $.mobile.activePage.jqmData( "panel" ) !== "open" ) {
                    if ( e.type === "swipeleft"  ) {
                        $( "#slide-out-left" ).panel( "open" );
                    } else if ( e.type === "swiperight" ) {
                        $( "#slide-out-right" ).panel( "open" );
                    }
                }
            });
        });

    </script>
</head>
<body>
<div id="main">
    @if( \Request::route()->getName() != 'login')
        @include('partials.left_side')
        @include('partials.right_side')
    @endif
    <div id="page">
        <div class="top-navbar">
                @if( \Request::route()->getName() != 'login')
                    <div class="top-navbar-left"><a href="#" id="menu-left" data-activates="slide-out-left"><i class="fa fa-bars"></i></a></div>
                <div class="top-navbar-right">
                    <a href="#" class="dropdown-button" data-activates="dropdown1"><i class="fa fa-user"></i></a>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="panel-account.html"><i class="fa fa-server"></i> Panel Account</a></li>
                        <li><a href="form-account.html"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a href="order-history.html"><i class="fa fa-history"></i> Order History</a></li>
                        <li class="divider"></li>
                        <li><a href="tracking-order.html"><i class="fa fa-search"></i> Tracking Order</a></li>
                    </ul>
                    <a href="#" id="menu-right" data-activates="slide-out-right"><i class="fa fa-shopping-basket"></i></a>
                </div>
                @endif
                    <div class="site-title">
                    <a href="/"><img src="/images/logo.png" style="margin-top: 2px !important;"></a>
                    </div>


        </div>

        @yield('content')

    </div>
</div>
<script type="text/javascript" src="/js/jquery.js"></script><script type="text/javascript" src="/js/materialize.min.js"></script><script type="text/javascript" src="/js/slick.min.js"></script><script type="text/javascript" src="/js/jquery.slicknav.js"></script><script type="text/javascript" src="/js/jquery.swipebox.min.js"></script><script type="text/javascript" src="/js/custom.js"></script>
<script>
    $(document).ready(function() {
        $('.slick_track').css('width','');
    });
</script>
</body>
<!-- Mirrored from html.alfisahr.com/shofy/payment-confirm.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jan 2017 16:11:43 GMT -->
</html>
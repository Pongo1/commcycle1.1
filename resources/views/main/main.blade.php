<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>@yield('title')</title>
   <link rel="icon" type="image" href="{{ asset('imgs/social.png') }}">

    <!-- Styles -->
   <!-- <link href="{{ asset('Trev Hookups/css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('Trev Hookups/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Trev Hookups/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Trev Hookups/css/landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('Trev Hookups/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('Trev Hookups/css/commcycle.css') }}" rel="stylesheet">
    <link href="{{ asset('font/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/artificial/com-global.css') }}" rel="stylesheet">
    <script src="{{ asset('js/artificial/all.js') }}"></script>

</head>
<body>
     <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top solid" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="commcycle" id ="lb"><img src="{{ asset('imgs/social.png') }}" style="width:35px; height:25px;"></a>
                <a class="navbar-brand solid-text" href="commcycleshop">@<span style="color:deeppink;">com</span><span style="color:orange;">mcy</span><span style="color:cyan;">cle</span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                       {{--  <li>
                            <a href="commcycleshop"><strong>Commcycle</strong></a>
                        </li> --}}
                    <li>
                        <a href="shop"><strong>Shop</strong></a>
                    </li>
                     <li>
                        <a href="ladyB-main" ><strong>Lady-B</strong></a>
                    </li>
                    <li>
                        <a href="aboutus" ><strong>About</strong></a>
                    </li> 
                    @if(Session::has('cart'))   
                        <li id="carIcon"><a href="showcart" ><i class=" glyphicon glyphicon-shopping-cart" style="font-size:20px; color:lime;cursor:pointer"></i><i class="badge">{{ Session::get('cart')->quantity }}</i></a></li>  
                    @endif                                 
                </ul>

                <ul class=" navbar-right" style="margin-top:2px; margin-bottom:2px;">
                    <li>
                        <ul class="social-nav navbar-right">

                            <li><a href="https://www.fb.com/realcommcycle" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/commcycle" target="_blank" title="Instagram" rel="nofollow" class="instagram"><i class="fa fa-instagram"></i></a></li>
                             <li><a href="https://www.twitter.com/commcycle" target="_blank" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </li>                
                </ul>      
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->

    </nav>

@yield('content')







  <nav class="navbar navbar-inverse navbar-bottom solid-type-two" role="navigation" style="margin-bottom:0px; border-radius:0px;background-color: white;"">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="commcycle" id ="lb"><img src="{{ asset('imgs/social.png') }}" style="width:35px; height:25px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li style="padding-top:17px">
                        <small class="text text-muted solid-text"><strong>Copyright <span class="solid-text" style="color:orange">Com</span><span class="solid-text" style="color:deeppink">mcy</span><span class="solid-text" style="color:cyan">cle</span> 2017. All Rights Reserved</strong></small>
                    </li>
                                      
                </ul>
                <small class="navbar-right text text-muted solid-text" style="padding-top:20px;">@yield('patner')<span style="color:orange;">@</span>leroy <span style="color:deeppink;">@</span>soumaya <span style="color:cyan;">@</span>frimpong</small>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->

    </nav>
	
		

</body>

    <!-- Scripts -->
    <script src="{{ asset('Trev Hookups/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('Trev Hookups/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Trev Hookups/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('Trev Hookups/js/theme-scripts.js') }}"></script>
<style> 
    .solid-type-two{
        box-shadow:6px 9px 0px rgba(0,0,0,0.9);
    }
    .solid{
        box-shadow:0 6px 8px rgba(0,0,0,0.8);

    }
    .solid-text{
        text-shadow: 0px 4px 8px rgba(0,0,0,0.8);
    }
    .solid-text-light{
        text-shadow: 0px 3px 6px rgba(0,0,0,0.6);

    }
    .ladyB{
        height:400px;
        width:100%;
    }
    .ladyB-small{
        height:250px;
        width:100%;
    }
    .ladyB-border{
        border:solid 10px black;
        border-left-width:2px;

        border-right-width:2px;
        border-top-left-radius:10px;
        border-top-right-radius:10px;
        border-bottom-width:5;


    }

    a{
        text-decoration: none;
    }
</style>

</html>
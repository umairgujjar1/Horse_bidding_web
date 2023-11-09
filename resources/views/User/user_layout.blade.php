<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Bidding Website</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ URL::to('frontend/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>








</head>
<style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 650px;
    }


    .search {
        display: inline-block;
        position: relative;
    }

    .search input[type="text"] {
        width: 200px;
        padding: 10px;
        border: none;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .search button[type="submit"] {
        background-color: #4e99e9;
        border: none;
        color: #fff;
        cursor: pointer;
        padding: 10px 20px;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 0;
        right: 0;
        transition: .9s ease;
    }

    .search button[type="submit"]:hover {
        transform: scale(1.1);
        color: rgb(255, 255, 255);
        background-color: blue;
    }
</style>
<!--/head-->


<body>
    <header id="header" style="background-color:#c7dbc3;height: 88px;">
        <!--header-->


        <div class="header-middle">
            <!--header-middle-->
            <div class="fluid-container">
                <div class="row">
                    <div class="col-2">
                        <div class="logo pull-left">
                            <a href="{{url('/')}}">
                                <h3 style="font-size:15px"> <img src="{{ asset('images/logo/logo5.png') }}"
                                        alt="" style="width: 40px;margin:10px ;">
                                    Horse Bidding </h3>
                            </a>
                        </div>

                    </div>


                    <div class="header-bottom col-8" style="padding: 20px;">
                        <div class="container">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggl navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="mainmenu pull-left ">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{{ url('home') }}" class="active"
                                            style=" font-weight:bolder ;font-size:20px ">Home</a></li>
                                    <li><a href="{{ url('all-aution') }}"
                                            style=" font-weight:bolder ;font-size:15px ">All Autions</a></li>

                                    <li><a href="{{ url('about') }}"
                                            style=" font-weight:bolder ;font-size:15px ">About</a></li>
                                    <li><a href="{{ url('contact') }}"
                                            style=" font-weight:bolder ;font-size:15px ">Contact</a></li>
                                    <li><a href="{{ url('newsletter') }}"
                                            style=" font-weight:bolder ;font-size:15px ">Newsletter</a></li>
                                            <li><a href="{{ url('about') }}"
                                                style=" font-weight:bolder ;font-size:15px ">About us</a></li>
                                </ul>

                            </div>
                            <div class="">
                                <form action="{{ url('/') }}" method="get">
                                    <div class="search float-right">
                                        <input placeholder="Search..." name="search" type="text">
                                        <button type="submit">Go</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>





                    <div class="col-2">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav mr-5 ">
                                @if (Auth::user() == '')
                                    <div style="display: flex; margin-top:20px;padding:5px">
                                        <li class="btn mr-2 btn btn-success"  ><a
                                                href="{{ url('login') }}"
                                                style="background:none !important ;color:white;font-weight:bold ; ">
                                                Login</a></li>
                                        <li class="btn" style="background-color:#4d97f3 !important"><a
                                                href="{{ url('register') }}" class="btn btn-lg"
                                                style="background:none !important ;color:white;font-weight:bold;width:80px">
                                                Register</a></li>
                                    </div>
                                @else
                                    <div style="display: flex; margin-top:20px;padding:5px">

                                        <a href="{{ route('bids') }}"
                                            class="btn  btn-success btn-lg mr-2 "
                                            style="padding:5px;width:60px"> Bids</a>
                                        <form action="{{ URL::to('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-lg"
                                                style="padding:10px"> Logout</button>
                                        </form>
                                    </div>
                                @endif
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- @include('User.navbar') --}}

        <!--/header-middle-->


        <!--header-bottom-->


        <!--/header-bottom-->
    </header>




    @yield('content')

    <!--Footer-->
    <footer id="footer">

        <div class="footer-bottom">
            <div class="container">
                <div class="row" style="padding:20px">

                    <p class="pull-left">Copyright © 2023 Horse Bidding Website.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="#">Umair ,Muzami And
                                Zohaib</a></span></p>

                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>

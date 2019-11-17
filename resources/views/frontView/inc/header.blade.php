
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Icon css link -->
    <link href="{{ asset('vendors/material-icon/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/linears-icon/style.css') }}" rel="stylesheet">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/revolution/css/settings.css') }}">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/image-dropdown/dd.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/image-dropdown/flags.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/image-dropdown/skin2.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bootstrap-selector/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/animate-css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bs-tooltip/jquery.webui-popover.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

    <script src="{{ asset('js/map-custome.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    {{-- <div class="login_form_inner zoom-anim-dialog mfp-hide" id="small-dialog">
           <h4>User Login</h4>
           <form>
               <input type="text" placeholder="Username">
               <input type="password" placeholder="Password">
               <div class="login_btn_area">
                   <button type="submit" value="LogIn" class="btn form-control login_btn">LogIn</button>
                   <div class="login_social">
                       <h5>Login With</h5>
                       <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                       </ul>
                   </div>
               </div>
           </form>

           <img class="mfp-close" src="img/close-btn.png" alt="">
        </div>

        <div class="register_form_inner zoom-anim-dialog mfp-hide" id="register_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="registration_man">
                        <img src="img/Registration_man.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="registration_form_s">
                        <h4>Registration</h4>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="reg_email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_first" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_user" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="reg_pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span data-bind="label">Gender</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Male</a></li>
                                        <li><a href="#">Female</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="datepicker">
                                    <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="reg_chose form-group">
                                <div class="reg_check_box">
                                    <input type="radio" id="s-option" name="selector">
                                    <label for="s-option">I`m Not Robot</label>
                                    <div class="check"><div class="inside"></div></div>
                                </div>
                                <button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>
                            </div>
                        </form>
                        <img class="mfp-close" src="img/close-btn.png" alt="">
                    </div>
                </div>
            </div>
        </div> --}}

    <!--================Frist Main hader Area =================-->
    <header class="header_menu_area">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index-2.html"><img src="img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown submenu active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index-2.html">Home 01</a></li>
                                <li><a href="index-3.html">Home 02</a></li>
                                <li><a href="index-4.html">Home 03</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="single-blog-fullwidth.html">Blog Single Fullwidth</a></li>
                                <li><a href="single-blog-left-sidebar.html">Blog Single left sidebar</a></li>
                                <li><a href="single-blog-right-sidebar.html">Blog Single right sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Community</a>
                            <ul class="dropdown-menu">
                                <li><a href="community.html">Community</a></li>
                                {{-- Without this checking condition it will show error to get property id of non object.
                                    We are checking here user is logged in or not --}}
                                @if (Auth::check() && $count = App\Profile::where('status', 1)->count()  )
                                <li><a href="{{ route('profile.member') }}">Members</a></li>
                                <li><a href="{{ route('profile.show', Auth::user()->id) }}">Members Details</a></li>
                                @endif

                                @guest
                                <li><a href="discussions.html">Discussions</a></li>
                                @endguest



                                {{-- @if (auth()->check() && auth()->user()->is('status'))
                                <li><a href="forums.html">Forums</a></li>
                                @else
                                <p>Welcome, User</p>
                                @endif
                                --}}



                                <li><a href="groups.html">Groups</a></li>
                                <li><a href="matches.html">Matches</a></li>
                                <li><a href="quick.html">Quick</a></li>
                                <li><a href="search.html">Search</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-left.html">Shop Left</a></li>
                                <li><a href="shop-right.html">Shop Right</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="stories.html">Stories</a></li>
                                <li><a href="why-us.html">Why us</a></li>
                                <li><a href="404.html">Error</a></li>

                            </ul>
                        </li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>



                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>



                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <!--================Frist Main hader Area =================-->

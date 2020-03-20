<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="images/favicon.png">
    
    <link rel='stylesheet' href='{{ URL::asset('css/settings.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ URL::asset('css/swatches-and-photos.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::asset('css/font-awesome.min.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::asset('css/elegant-icon.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ URL::asset('css/style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::asset('css/shop.css') }}' type='text/css' media='all'/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    
    </style>
  </head>
  <body>
    <div class="offcanvas open">
      <div class="offcanvas-wrap">
        <div class="offcanvas-user clearfix text-center">
          {{-- <a class="offcanvas-user-wishlist-link" href="wishlist.html">
                        <i class="fa fa-heart-o"></i> My Wishlist
                    </a> --}}
          <a class="offcanvas-user-account-link login-toggle" href="#">
            <i class="fa fa-user"></i> Login
          </a>
        </div>
        <nav class="offcanvas-navbar">
          <ul class="offcanvas-nav">
            <li class="menu-item-has-children dropdown">
              <a href="{{url('/')}}" class="dropdown-hover">Home <span class="caret"></span></a>
  
            </li>
            <li class="menu-item-has-children dropdown">
              <a href="shop.html" class="dropdown-hover">Shop <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li id="menu-item-10433" class="menu-item-has-children dropdown-submenu">
                  <a href="shop-by-category.html">Butcher <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="shop-by-category.html">Nulla</a></li>
                    <li><a href="shop-by-category.html">Maecenas</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children dropdown-submenu">
                  <a href="shop-by-category.html">Fishmonger <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="shop-by-category.html">Adesso</a></li>
                    <li><a href="shop-by-category.html">Barbour</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children dropdown-submenu">
                  <a href="shop-by-category.html">Greengrocer <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="shop-by-category.html">Adesso</a></li>
                    <li><a href="shop-by-category.html">Barbour</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children dropdown-submenu">
                  <a href="shop-by-category.html">Bakery <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="shop-by-category.html">Adesso</a></li>
                    <li><a href="shop-by-category.html">Barbour</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children dropdown-submenu">
                  <a href="shop-by-category.html">Delicatessen <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="shop-by-category.html">Adesso</a></li>
                    <li><a href="shop-by-category.html">Barbour</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="collection.html">Collections</a></li>
  
            <li class="menu-item-has-children dropdown">
              <a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="about-us.html">About us</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
                <li><a href="faq.html">FAQ</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="offcanvas-widget">
          <div class="widget social-widget">
            <div class="social-widget-wrap social-widget-none" style="display: flex; justify-content: center">
              <a href="//www.facebook.com" title="Facebook" target="_blank">
                <i class="fa fa-facebook facebook-bg-hover"></i>
              </a>
              <a href="//www.twitter.com" title="Twitter" target="_blank">
                <i class="fa fa-twitter twitter-bg-hover"></i>
              </a>
              <a href="//www.instagram.com" title="Instagram" target="_blank">
                <i class="fa fa-instagram instagram-bg-hover"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="wrapper" class="wide-wrap">
      <div class="offcanvas-overlay"></div>
      <header class="header-type-classic header-absolute header-transparent">
        <div class="topbar">
          <div class="container topbar-wap">
            <div class="row">
              <div class="col-sm-6">
                <div class="left-topbar">
                  <div class="topbar-social">
                    <a href="//www.facebook.com" title="Facebook" target="_blank">
                      <i class="fa fa-facebook facebook-bg-hover"></i>
                    </a>
                    <a href="//www.twitter.com" title="Twitter" target="_blank">
                      <i class="fa fa-twitter twitter-bg-hover"></i>
                    </a>
                    <a href="//www.instagram.com" title="Instagram" target="_blank">
                      <i class="fa fa-instagram instagram-bg-hover"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="right-topbar">
                  {{-- <div class="user-wishlist">
                                        <a href="wishlist.html"><i class="fa fa-heart-o"></i> My Wishlist</a>
                                    </div> --}}
                  <div class="user-login">
                    <ul class="nav top-nav">
                      <li class="menu-item">
                        <a data-rel="loginModal" href="#"><i class="fa fa-user"></i> Login</a>
                      </li>
                    </ul>
                  </div>
                  <div class="user-login">
                    <ul class="nav top-nav">
                      <li class="menu-item">
                        <a data-rel="registerModal" href="#"><i class="fa fa-user"></i> Register</a>
                      </li>
                    </ul>
                  </div>
                  {{-- <div class="language-switcher">
                                        <div class="wpml-languages disabled">
                                            <a class="active" href="#" data-toggle="dropdown">
                                                <img src="images/en.png" alt="English"/> EN
                                            </a>
                                        </div>
                                    </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar-container">
          <div class="navbar navbar-default  navbar-scroll-fixed">
            <div class="navbar-default-wrap">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 navbar-default-col">
                    <div class="navbar-wrap">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar bar-top"></span>
                          <span class="icon-bar bar-middle"></span>
                          <span class="icon-bar bar-bottom"></span>
                        </button>
                        <a class="navbar-search-button search-icon-mobile" href="#">
                          <i class="fa fa-search"></i>
                        </a>
                        <a class="cart-icon-mobile" href="#">
                          <i class="elegant_icon_bag"></i><span>0</span>
                        </a>
                        {{-- <a class="navbar-brand" href="{{ url('/') }}" style="display: flex">
                        <div><img src="/svg/snow.svg" style="height:60px;"></div>
                        <div style="display: flex; align-items: center; padding-left: 15px">Frostfree
                        </div>
                        <img class="logo" alt="FrostFree" src="images/logo-transparent.png">
                        <img class="logo-fixed" alt="FrostFree" src="images/logo-fixed.png">
                        <img class="logo-mobile" alt="FrostFree" src="images/logo-mobile.png">
                        </a> --}}
                        <a class="navbar-brand" href="index.html">
                          <img class="logo" alt="FrostFree" src="images/logo-fixed.png">
                          <img class="logo-fixed" alt="FrostFree" src="images/logo-fixed.png">
                          <img class="logo-mobile" alt="FrostFree" src="images/logo-mobile.png">
                        </a>
                      </div>
                      <nav class="collapse navbar-collapse primary-navbar-collapse">
                        <ul class="nav navbar-nav primary-nav">
                          <li class="menu-item-has-children dropdown">
                            <a href="index.html" class="dropdown-hover">
                              <span class="underline">Home</span> <span class="caret"></span>
                            </a>
                          </li>
                          <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                            <a href="shop.html" class="dropdown-hover">
                              <span class="underline">Shop</span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                              <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                <h3 class="megamenu-title">
                                  Butcher <span class="caret"></span>
                                </h3>
                                <ul class="dropdown-menu">
                                  <li><a href="shop-by-category.html">Nulla</a></li>
                                  <li><a href="shop-by-category.html">Maecenas</a></li>
    
                                </ul>
                              </li>
                              <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                <h3 class="megamenu-title">
                                  Fishmonger <span class="caret"></span>
                                </h3>
                                <ul class="dropdown-menu">
                                  <li><a href="shop-by-category.html">Nulla</a></li>
                                  <li><a href="shop-by-category.html">Maecenas</a></li>
    
                                </ul>
                              </li>
                              <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                <h3 class="megamenu-title">
                                  Greengrocer <span class="caret"></span>
                                </h3>
                                <ul class="dropdown-menu">
                                  <li><a href="shop-by-category.html">Nulla</a></li>
                                  <li><a href="shop-by-category.html">Maecenas</a></li>
    
                                </ul>
                              </li>
                              <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                <h3 class="megamenu-title">
                                  Bakery <span class="caret"></span>
                                </h3>
                                <ul class="dropdown-menu">
                                  <li><a href="shop-by-category.html">Nulla</a></li>
                                  <li><a href="shop-by-category.html">Maecenas</a></li>
    
                                </ul>
                              </li>
                              <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                <h3 class="megamenu-title">
                                  Delicatessen <span class="caret"></span>
                                </h3>
                                <ul class="dropdown-menu">
                                  <li><a href="shop-by-category.html">Nulla</a></li>
                                  <li><a href="shop-by-category.html">Maecenas</a></li>
    
                                </ul>
                              </li>
    
                            </ul>
                          </li>
                          <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-hover">
                              <span class="underline">Categories</span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Meat</a></li>
                              <li><a href="#">Fish</a></li>
                              <li><a href="#">Cake</a></li>
                            </ul>
                          </li>
    
                          <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-hover">
                              <span class="underline">Pages</span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="about-us.html">About us</a></li>
                              <li><a href="contact-us.html">Contact Us</a></li>
                              <li><a href="faq.html">FAQ</a></li>
                            </ul>
                          </li>
                          <li class="navbar-search">
                            <a class="navbar-search-button" href="#">
                              <i class="fa fa-search"></i>
                            </a>
                          </li>
                          <li class="navbar-minicart navbar-minicart-nav">
                            <a class="minicart-link" href="#">
                              <span class="minicart-icon">
                                <i class="minicart-icon-svg elegant_icon_bag"></i>
                                <span>0</span>
                              </span>
                            </a>
                            <div class="minicart">
                              <div class="minicart-header no-items show">
                                Your shopping bag is empty.
                              </div>
                              <div class="minicart-footer">
                                <div class="minicart-actions clearfix">
                                  <a class="button" href="#">
                                    <span class="text">Go to the shop</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-search-overlay hide">
              <div class="container">
                <div class="header-search-overlay-wrap">
                  <form class="searchform">
                    <input type="search" class="searchinput" name="s" value="" placeholder="Search..." />
                    <input type="submit" class="searchsubmit hidden" name="submit" value="Search" />
                  </form>
                  <button type="button" class="close">
                    <span aria-hidden="true" class="fa fa-times"></span>
                    <span class="sr-only">Close</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      {{-- Injecting dynamic content--}}
      @yield('content')

    
      {{-- Login Form --}}
      <div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="userloginModalForm">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Login</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" id="username" name="log" required class="form-control" value=""
                    placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" required value="" name="pwd" class="form-control"
                    placeholder="Password">
                </div>
                <div class="checkbox clearfix">
                  <div class="form-flat-checkbox pull-left">
                    <input type="checkbox" name="rememberme" id="rememberme" value="forever"><i></i>&nbsp;Remember
                    Me
                  </div>
                  <span class="lostpassword-modal-link pull-right">
                    <a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your
                      password?</a>
                  </span>
                </div>
              </div>
              <div class="modal-footer">
                <span class="user-login-modal-register pull-left">
                  <a data-rel="registerModal" href="#">Not a Member yet?</a>
                </span>
                <button type="submit" class="btn btn-default btn-outline">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      {{-- Registration form --}}

      <div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="userregisterModalForm">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Register account</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="seeAnotherField">Registering for:</label>
                  <select class="form-control" id="seeAnotherField" required>
                    <option value="no">Customer</option>
                    <option value="yes">Trader</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="user_login" required class="form-control" value=""
                    placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="user_email">Email</label>
                  <input type="email" id="user_email" name="user_email" required class="form-control" value=""
                    placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="user_password">Password</label>
                  <input type="password" id="user_password" required value="" name="user_password"
                    class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="user_password">Retype password</label>
                  <input type="password" id="cuser_password" required value="" name="cuser_password"
                    class="form-control" placeholder="Retype password">
                </div>

                <div class="form-group" id="otherFieldDiv">
                  <label for="otherField">Shop</label>
                  <input type="text" name="trader_name" required class="form-control" value="" placeholder="Shop"
                    id="otherField">

                </div>
              </div>
              <div class="modal-footer">
                <span class="user-login-modal-link pull-left">
                  <a data-rel="loginModal" href="#loginModal">Already have an account?</a>
                </span>
                <button type="submit" class="btn btn-default btn-outline">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      {{-- Forgot password form --}}

      <div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="userlostpasswordModalForm">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Forgot Password</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Username or E-mail:</label>
                  <input type="text" name="user_login" required class="form-control" value=""
                    placeholder="Username or E-mail">
                </div>
              </div>
              <div class="modal-footer">
                <span class="user-login-modal-link pull-left">
                  <a data-rel="loginModal" href="#loginModal">Already have an account?</a>
                </span>
                <button type="submit" class="btn btn-default btn-outline">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      {{-- Footer one --}}
      <div class="footer-widget" style="background:url('../images/footer.jpg'); background-position: 1043px -27px; background-size:cover; background-repeat: no-repeat">
        <div class="container">
          <div class="footer-widget-wrap">
            <div class="row">
              <div class="footer-widget-col col-md-4 col-sm-6">
                <div class="widget widget_nav_menu">
                  <h3 class="widget-title"><span>Our Mission</span></h3>
                  <p>FrostFree aims to provide customers with fresh food in reasonable
                    price.</p>
                </div>
              </div>

              <div class="footer-widget-col col-md-4 col-sm-6">
                <div class="widget widget_nav_menu">
                  <h3 class="widget-title"><span>Quick Links</span></h3>
                  <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>

              <div class="footer-widget-col col-md-4 col-sm-6">
                <div class="widget widget_text">
                  <h3 class="widget-title"><span>The Collection Spot</span></h3>
                  <div class="textwidget">
                    <p><i class="fa fa-map-marker"></i> King St, Huddersfield HD1
                      2QB, United Kingdom</p>
                    <p><i class="fa fa-phone"></i> 1234 567</p>
                    <p><i class="fa fa-envelope"></i> <a href="mailto:frostfree@customercare.com">
                        frostfree@customercare.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Footer two --}}
      <footer id="footer" class="footer">
        <div class="footer-info">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="footer-info-logo">
                  <a href="#"><img alt="The DMCS" src="images/footer-logo.png"></a>
                </div>
                <div class="copyright text-center">Copyright right © {{date("Y")}}
                  FrostFree. All Rights Reserved.</div>
                <div class="footer-social">
                  <a href="//www.facebook.com" title="Facebook" target="_blank">
                    <i class="fa fa-facebook facebook-bg-hover"></i>
                  </a>
                  <a href="//www.twitter.com" title="Twitter" target="_blank">
                    <i class="fa fa-twitter twitter-bg-hover"></i>
                  </a>
                  <a href="//www.instagram.com" title="Instagram" target="_blank">
                    <i class="fa fa-instagram instagram-bg-hover"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
      <script type='text/javascript' src='{{ URL::asset('js/jquery-migrate.min.js') }}'></script>
      <script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
      <script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
      <script type='text/javascript' src='js/easing.min.js'></script>
      <script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
      <script type='text/javascript' src='js/bootstrap.min.js'></script>
      <script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
      <script type='text/javascript' src='js/jquery.appear.min.js'></script>
      <script type='text/javascript' src='js/script.js'></script>
      <script type='text/javascript' src='js/swatches-and-photos.js'></script>
      <script type='text/javascript' src='js/jquery.prettyPhoto.min.js'></script>
      <script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
      <script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
      <script type='text/javascript' src='js/jquery.parallax.js'></script>
      <script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
      <script type='text/javascript' src='js/jquery.transit.min.js'></script>
      <script type='text/javascript' src='js/jquery.carouFredSel.min.js'></script>
      <script type='text/javascript' src='js/isotope.pkgd.min.js'></script>
      <script type='text/javascript' src='js/custom.js'></script>
    </div>
  </body>
</html>
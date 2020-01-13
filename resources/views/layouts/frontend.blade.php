<!DOCTYPE html>
<html lang="en">
    <head>
         <title>   Abacus - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Unicat project">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/bootstrap.main.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/owl.carousel.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/owl.theme.default.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/animate.css')}}">


        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/contact.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/quote.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/payment.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/added.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/about.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/contact.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/style.css')}}">
        
        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/cssv2/responsive.css')}} ">



    <script type="text/javascript" src ="{{ asset('public/frontend/js/added.js') }}"></script>

    </head>
    <body>
    <div class="super_container">

        <header class="header">
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li><div class="question">Have any questions?</div></li>
                                        <li>
                                            <i class="fa fa-fw fa-phone" aria-hidden="true"></i>
                                            <div>001-1234-88888</div>
                                        </li>
                                        <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <div class="email"><a href="#">info.deercreative@gmail.com</a></div>
                                        </li>
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        <div class="login_button flex-row">
                                            <a href="https://www.facebook.com/AbacusInsuranceandFinancialServices"><i class="fa fa-facebook"></i></a> 
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="{{url('/')}}">
                                        <div class="logo"><img src="{{asset('public/frontend/images/Logo Final.jpg')}}" alt=""></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner">
                                    <ul class="main_nav">
                                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="#">About Abacus</a></li>
                                        <li class="{{ request()->is('quote-request') ? 'active' : '' }}"><a href="{{url('quote-request')}}">Quote Request</a></li>

                                        <li><a href="#">Certificate and ID Request</a></li>

                                        <li><a href="#">Claim Notification</a></li>
                                        <li class="nav-item dropdown {{ request()->is('pay-bank-customer') ? 'active' : '' }} {{ request()->is('pay-cash-customer') ? 'active' : '' }}">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Payment Online</a>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="{{url('pay-bank-customer')}}">Payment via Bank</a>
                                              <a class="dropdown-item" href="{{url('pay-cash-customer')}}">Credit Card Payment</a>
                                              
                                              </div>
                                              
                                            </li>
                                        <li class="{{ request()->is('contact-us') ? 'active' : '' }}"><a href="{{ url('contact-us') }}">Contact Us</a></li>
                                    </ul>
                                    <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                                    <div class="hamburger menu_mm">
                                    <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_search_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                            <form action="#" class="header_search_form">
                                <input type="search" class="search_input" placeholder="Search" required="required">
                                <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>

                <li><a href="#">About Abacus</a></li>

                <li class="{{ request()->is('quote-request') ? 'active' : '' }}"><a href="{{url('quote-request')}}">Quote Request</a></li>

                <li><a href="#">Certificate and ID Request</a></li>

                <li><a href="#">Claim Notification</a></li>

                <li class="nav-item dropdown {{ request()->is('pay-bank-customer') ? 'active' : '' }} {{ request()->is('pay-cash-customer') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Payment Online</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{url('pay-bank-customer')}}">Payment via Bank</a>
                      <a class="dropdown-item" href="{{url('pay-cash-customer')}}">Credit Card Payment</a>
                      
                      </div>
                      
                    </li>
                <li class="{{ request()->is('contact-us') ? 'active' : '' }}"><a href="{{ url('contact-us') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
   
    @yield('content')

    <div class="newsletter">
        <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="{{asset('public/frontend/images/newsletter.jpg')}}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                        <div class="newsletter_content text-lg-left text-center">
                            <div class="newsletter_title">sign up for news and offers</div>
                            <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
                        </div>

                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="{{url('subscribe')}}" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center" method="post">
                            @csrf
                            <input type="email" name="email" class="newsletter_input" placeholder="Your Email" required="required">
                            <button type="submit" name="submit" class="newsletter_button">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

   <footer class="footer">
        <div class="footer_background" style="background-image:url({{asset('frontend/images/footer_background.png')}})"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">
                                <div class="col-lg-3 footer_col">

<div class="footer_section footer_about">
<div class="footer_logo_container">
<a href="#">
<div class="footer_logo_img"><img src="{{asset('public/frontend/images/Logo Final.jpg')}}" alt=""></div>
</a>
</div>

<div class="footer_social">
<ul>
<li><a href="https://www.facebook.com/AbacusInsuranceandFinancialServices/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 footer_col">

<div class="footer_section footer_contact">
<div class="footer_title">Contact Us</div>
<div class="footer_contact_info">
<ul>
<li>Email: <a href="#">info.deercreative@gmail.com</a></li>
<li>Phone: +(88) 111 555 666</li>
<li>Abacus Insurance & Financial Services</li>

    <li>1304 W Walnut HILL Ln, 245  Irving, TX, 75038</li>
    
    <li>Office: 972.600.8460 </li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 footer_col">

<div class="footer_section footer_links">
<div class="footer_title">Contact Us</div>
<div class="footer_links_container">
<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About Abacus</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">Quote Request</a></li>
    <li><a href="#">Payment Online</a></li>
    <li><a href="#">Certificate and ID Request</a></li>
    <li><a href="#">Claim Notification</a></li>
    <li><a href="#">FAQs</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 footer_col clearfix">

<div class="footer_section footer_mobile">
<div class="footer_title">Mobile</div>
<div class="footer_mobile_content">
 <div class="footer_image"><a href="#"><img src="{{asset('public/frontend/images/mobile_1.png')}}" alt=""></a></div>
<div class="footer_image"><a href="#"><img src="{{asset('public/frontend/images/mobile_2.png')}}" alt=""></a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row copyright_row">
<div class="col">
<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
<div class="cr_text">
Copyright &copy All rights reserved .
</div>
<div class="ml-lg-auto cr_links">
<ul class="cr_list"><br>
<li><a href="#" id="bsai-text">Developed By :</a></li>
<li><a href="#"><img src="{{asset('public/frontend/images/bsailogo.png')}}" alt="BSAI Techno Sales"></a></li>

</ul>
</div>
</div>
</div>
</div>
</div>
</footer>
</div>
 <script src="{{asset('public/frontend/js/main.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/pooper.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/bootstrap.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/tweenmax.min.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/timeline.min.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/scrollmagic.min.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/animation.gsap.min.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/scrolltoplugin.min.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/owl.carousel.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/easing.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/parallax.min.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script src="{{asset('public/frontend/js/custom.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>
    
    <script async src="{{asset('public/frontend/js/gtag.js')}}" type="d260882a888d328dbebb28fd-text/javascript"></script>

    <script type="d260882a888d328dbebb28fd-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-23581568-13');
    </script>

    <script src="{{asset('public/frontend/js/rocket-loader.min.js')}}" data-cf-settings="d260882a888d328dbebb28fd-|49" defer=""></script>
</body>
</html>
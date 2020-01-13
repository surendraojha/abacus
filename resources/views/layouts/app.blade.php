<!DOCTYPE html>
<html lang="en">
  <head>
<?php 
  $user = auth()->user();
  $id = $user->id; 
  $user = \App\User::find($id);
?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">
    <title>   Abacus - @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{URL::asset('public/css/style.css')}}">

    <link rel="stylesheet" href="{{URL::asset('public/css/demo1_style.css')}}">
    <!-- End Layout styles -->

    <link rel="shortcut icon" href="../assets/images/favicon.png" />

    <link rel="stylesheet" href="{{ asset('public/css/external.css') }}" />

    <link rel="stylesheet" href="{{ asset('public/css/materialdesignicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/ionicons.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/typicons.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/flag-icon.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/vendor.bundle.base.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/vendor.bundle.addons.css') }}">

    <script type="text/javascript" src ="{{ asset('public/js/ckeditor.js') }}"></script>


    <script type="text/javascript" src ="{{ asset('public/frontend/js/added.js') }}"></script>

    <script type="text/javascript">
      CKEDITOR.replace( 'summary-ckeditor' );
    </script>


    <!-- editor -->

    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

    <!-- Core build with no theme, formatting, non-essential modules -->
    <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>
  </head>
  <body>

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

          <a class="navbar-brand brand-logo" href="index.html">

            <img src="{{ URL::asset('public/frontend/images/abacus.jpg')}}" alt="logo" /> </a>

          <a class="navbar-brand brand-logo-mini" href="index.html">

            <img src="{{ URL::asset('public/logo/logo.svg')}}" alt="logo" /> </a>

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block"> English </span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-fr"></i>
                  </div>French
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ae"></i>
                  </div>Arabic
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ru"></i>
                  </div>Russian
                </a>
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
           
          
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
<!--                   <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="pp">
 -->                  <p class="mb-1 mt-3 font-weight-semibold">{{ $user->name }}</p>
                  <p class="font-weight-light text-muted mb-0">{{ $user->email }}</p>
                </div>
                <a class="dropdown-item" href="{{ url('admin/change-password') }}"> Change Password </a>


                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img src="">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ $user->name }}</p>
                  <p class="designation">online</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('admin/article-listing') }}">
                  <i class="menu-icon typcn typcn-document-text"></i>
                          <span class="menu-title"> Article Listing </span>
                </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#payment_options" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title"> Payment Options </span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="payment_options">
                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">
                    <a class="nav-link" href="{{  url('admin/payment-bank') }}"> Bank </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{  url('admin/payment-cash') }}"> Cash </a>
                  </li>

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/our-service') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title"> Our Services </span>
              </a>
            </li>

            
           
           <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#claim_request" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title"> Claim request </span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="claim_request">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{  url('admin/home-quote') }}"> Home quote </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{  url('admin/auto-quote') }}"> Auto quote</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{  url('admin/business-quote') }}"> Business quote</a>
                  </li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title"> Client Request </span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/general-questions')}}">General Question List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/quote-request')}}">Quote Request List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/refer-contact')}}">Reference List</a>
                  </li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/subscriber-list') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title"> Subscriber </span>
              </a>
            </li>

          <!--   <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/our-team') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title"> Our Team </span>
              </a>
            </li> -->
           
          </ul>
        </nav>
        <!-- partial -->

        @yield('content')
       
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('public/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('public/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../assets/js/demo_1/dashboard.js"></script>
    <script type="text/javascript" src="{{URL::asset('public/js/script.js')}}"></script>

    <!-- End custom js for this page-->
  </body>
</html>
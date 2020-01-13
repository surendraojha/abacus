
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
<!-----------------------------------------Link to Css-------------------------------->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/contact-style.css') }}">

<!----------------------------------------Icons link------------------------>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <!-------------------------------------------------Top-Navigation----------->
<div class="navigation-top">
    <div class="top-navigation-item flex-row">
    <span>Have any questions?</span>
    <span><i class="fa fa-fw fa-phone"></i>&nbsp;000-1234-88888</span>
    <span><i class="fa fa-fw fa-envelope-o"></i>&nbsp;info.deercreative@gmail.com</span>
    </div>
<div class="login-button">
    <a href="#">Register or Login</a>
</div>
      
</div>
<!-----------------x--------------------------------Top-Navigation-----x------>

<!-------------------------------------------------Menu-Navigation----------->
<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="index.html"><img src="./images/logo/Logo Final.jpg" style="width: 60px; height: 60px;"></a>
    
    
      
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">About Abacus</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Quote Request</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Certificate and ID request</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Claim Notification</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Payment online</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="searchfunction()"><i class="fa fa-fw fa-search"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-fw fa-shopping-cart"></i></a>
              </li>
        </ul>
        <div class="menu-toggle"><i class="fa fa-fw fa-bars" onclick="openNav()" aria-hidden="true"></i></div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <form class="example" action="action_page.php">
                
                <input type="text" placeholder="Search" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                
              </form>
            <a href="#">About Abacus</a>
            <a href="#">Quote Request</a>
            <a href="#">Certificate and ID request</a>
            <a href="#">Claim Notification</a>
            <a href="#">Payment online</a>
            <a href="#">Contact Us</a>
          </div>
        </nav>
        

<div id="search">
    <form class="example" action="action_page.php">
        <button type="submit"><i class="fa fa-search"></i></button>
        <input type="text" placeholder="Search" name="search">
        
      </form>
</div>
<!------------------x-------------------------------Menu-Navigation-------x---->
@yield('content')


    
<!---------------------------------------------JavascriptFunction for Search Button-->
<script src="./js/main.js">
    
    </script>
<!----------------------x-----------------------JavascriptFunction for Search Button-->
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Online Bank Loan Application and Verification System </title>
   <link rel="stylesheet"  href="file:///E:/xampp/htdocs/Bank_Loan/public/fontawesome-free-5.13.0-web/css/all.css">
     <link rel="stylesheet"  href="{{asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link  rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" >
   <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
     
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <script src="https://kit.fontawesome.com/4dc177b435.js" crossorigin="anonymous"></script>
   <script src="js/owl.carousel.min.js"></script>
 
	
   <style type="text/css">

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
      
   </style>
   
</head>
<body>
  <div><nav style="background: #FC5A13; max-height:50px;" class="navbar navbar-expand-sm navbar-dark">

<a class="navbar-brand" href="#">
<img style="height:100px; width: 150px;" src="https://image.shutterstock.com/image-vector/bank-icon-logo-vector-600w-399995245.jpg"></a>

  <ul style="font-size: 20px;" class="navbar-nav ml-auto">
   <li class="nav-item">
      <a class="nav-link" href="#"><i class="fab fa-twitter-square"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fab fa-youtube-square"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
    </li>
  </ul>
</nav></div>
   <div>
      <navb style=""  class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  
  <ul class="navbar-nav" style="font-size:20px;">
   <li class="nav-item mr-5">
      <a class="nav-link" href="#"></a>
     
    </li>
  
   <li class="nav-item">
      <a class="nav-link" href="#">About Bank</a>
     
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Careers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Credit cards</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Service</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
    <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Retail & SME
            </button>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                <li class="dropdown-item"><a href="#">SME Loan</a></li>
                <li class="dropdown-divider"></li>
                <li class="dropdown-submenu">
                  <a  class="dropdown-item" tabindex="-1" href="#">Retail Loan</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a tabindex="-1" href="#">Personal Loan</a></li>
                    
                    <li class="dropdown-item"><a href="#">Mortgage Loan</a></li>
                    <li class="dropdown-item"><a href="#">Auto Loan</a></li>
                    <li class="dropdown-item"><a href="#">Two Wheeler Loan</a></li>
                   <li class="dropdown-item"><a href="#">Secure Loan(Cash Covered)</a></li>
                  <li class="dropdown-item"><a href="#">Edu Finance</a></li>
                  </ul>
                </li>
              </ul>
        </div>



      <!--<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Retail And SME
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Retail Loan</a>
        <a class="dropdown-item" href="#">SME Loan</a>
      </div>-->
    </li>
  </ul>
  <ul style="font-size: 20px;" class="navbar-nav ml-auto">
   
   <li class="nav-item ml-auto">
      <a class="nav-link" href="#">Contact</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}"><i class="far fa-user"></i>Login</a>
    </li>
  </ul>
</nav>
   </div>
  <div>
      <main class="py-4">
        @yield('content')
        
      </main>

   <footer>
  <div class="container">
    <div class="row">
      
      <div class="col-lg-4 col-md-6">
        <h3>Contact</h3>
        <ul class="navbar-nav" >
          <li class="nav-item">
       <a class="nav-link" href="#"><i class="fas fa-phone-square-alt"></i>&nbsp 8809564896498</a>
       </li>
       <li class="nav-item">
       <a class="nav-link" href="#"><i class="fas fa-envelope"></i>&nbsp info@gmail.com</a>
       </li>
      
          
        </ul>
        <ul class="list-unstyled socila-list">
          <li><img src="https://cdn4.iconfinder.com/data/icons/social-icon-4/842/facebook-512.png" alt="" /></li>
          <li><img src="https://seeklogo.com/images/T/twitter-logo-7249D46199-seeklogo.com.png" alt="" /></li>
          <li><img src="https://upload.wikimedia.org/wikipedia/commons/3/30/The_Instagram_Logo.jpg" alt="" /></li>
          <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/YouTube_social_white_squircle_%282017%29.svg/1200px-YouTube_social_white_squircle_%282017%29.svg.png" alt="" /></li>
        </ul>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <h3>latest Articles</h3>
        <div class="media">
          <a href="#" class="pull-left">
            <img src="http://placehold.it/64x64" alt="" class="media-object" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Programming</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        
        <div class="media">
          <a href="#" class="pull-left">
            <img src="http://placehold.it/64x64" alt="" class="media-object" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Coding</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        
        <div class="media">
          <a href="#" class="pull-left">
            <img src="http://placehold.it/64x64" alt="" class="media-object" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Web Sesign</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        
      </div>
      
      <div class="col-lg-4">
        <h3>Our Work</h3>
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
        <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
      </div>
      
    </div>
  </div>
  <div class="copyright text-center">
    Copyright &copy; 2017 <span>Your Template Name</span>
  </div>
</footer>

  <script type="text/javascript" src="{{asset('js/bootstrap.min.js') }}"></script> 
  <script type="text/javascript">$('.carousel').carousel()</script>
  <script type="text/javascript">
     $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            margin:100,
            nav: false,
            loop: true,
            autoplay:true,
            autoplayTimeout: 10000,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 3
              },
              1000: {
                items: 5
              }
            }
          });
        });
  </script>

</body>
</html>


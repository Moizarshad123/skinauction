<!DOCTYPE html>
<html lang="en">

<head>
  <title>Skinny</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  {{-- <link rel="icon" href="{{ asset('assets/images/favicon.png')}}" /> --}}
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/style.css">

 
  @yield('customCSS')
</head>

{{-- <body class="pg10-body"> --}}

<body>
   <!-- ***** Preloader Start ***** -->
   {{-- <div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>   --}}
<!-- ***** Preloader End ***** -->

<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}"><img src="assets/images/image_(2).png"></a>
      {{-- <img class="navbar-brand" href="{{url('/')}}" src="assets/images/image_(2).png"> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">

            @if(Auth::check())
              {{-- <img src="{{ Auth::user()->avatar }}" alt="">
              <p>{{ Auth::user()->username }}</p>
              <p>{{ Auth::user()->steamid }}</p>
              <p><a href="{{ url('logout') }}">LOGOUT</a></p> --}}

              <img class="steam" style="margin: -4px;width: 14%;height: 88%;" src="{{ Auth::user()->avatar }}" alt="">
              {{-- <p>{{ Auth::user()->username }}</p> --}}
              <button class="button"  style="color: white;">{{ Auth::user()->username }}</button>
              <button class="button-logout"><a href="{{ url('logout') }}" style="color: white;"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a></button>
            @else 
              <img class="steam" style="margin: -4px;width: 14%;height: 100%;" src="assets/images/steam.png" alt="">
              <button class="button"><a href="{{ url('steamlogin') }}" style="color: white;">LOGIN WITH STEAM</a></button>
            @endif



            
              <!-- <a class="nav-link" href="#">Home</a>
              <a class="nav-link" href="#">Games</a>
              <a class="nav-link" href="#">Bid</a>
              <a class="nav-link" href="#">Auctions</a> -->
            {{-- <li class="nav-link">
              <a href="">Auctions<i class="fa fa-caret-down" aria-hidden="true" style="margin-left: 5px;"></i></a>
              <ul class="submenu nav-link">
                <li><a href="">Submenu item</a></li>
                <li><a href="">Submenu item</a></li>
              </ul>			
            </li>
            <li class="nav-link" style="margin-right: 12px;"><a href="">Bid</a></li>
            <li class="nav-link" style="margin-right: 12px;">
              <a href="">Games<i class="fa fa-caret-down" aria-hidden="true" style="margin-left: 5px;"></i></a>
              <ul class="submenu nav-link">
                <li><a href="">Submenu item</a></li>
                <li><a href="">Submenu item</a></li>
              </ul>			
            </li>
            <li class="nav-link" style="margin-left: 12px;margin-right: 12px;"><a href="{{ url('/') }}">Home</a></li> --}}
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>




  @yield('content')

  <footer class="page-footer font-small cyan darken-3">
    <!-- Footer Elements -->
    <div class="container-fluid" style="background: #101010;">
    </div>
    <!-- Footer Elements -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background: black;color: white;">Copyright © SkinAuction. All rights reserved. Registered . Powered by Steam, however is not affiliated with Steam or Valve Software Inc.
      <a href="https://www.w3schools.com/" class="T1">TERMS</a> <a href="https://www.w3schools.com/" class="T1" >F.A.Q</a>
    </div>
    <!-- Copyright -->
  </footer>

  

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>



  @yield('customJS')


</body>
</html>
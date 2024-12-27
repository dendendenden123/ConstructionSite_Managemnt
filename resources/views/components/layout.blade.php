<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
  
    <title>Inance</title>
  
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    
  
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
   

    
  </head>
  
  <body>

    {{-- Start of Header Section --}}
    <div class="hero_area">
    <header class="header_section">

        <div class="header_bottom">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="/">
                <span>
                  Inance
                </span>
              </a>
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
    
    
                  <li class="nav-item ">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
    
                  @guest
                    <li class="nav-item ">
                      <a class="nav-link" href="login">Login</a>
                    </li>
      
                    <li class="nav-item ">
                      <a class="nav-link" href="signup">Sign UP</a>
                    </li>
                  @endguest

                  @auth
                  <li class="nav-item ">
                    <form method="post" action="/logout">
                      @csrf
                        <input type="submit" class="nav-link" value="Log Out">
                    </form>
                  </li>

                  <li class="nav-item ">
                    <a class="nav-link" href="/customer">Dashboard</a>
                  </li>
                  @endauth
                  <li class="nav-item ">
                    <a class="nav-link" href="about"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="service">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact">Contact Us</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>
      
      {{-- end of header section --}}
 

    {{$slot}}

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <script src="{{ asset('js/landing_page/jquery-3.4.1.min.js')}}"></script>
  <script src="{{ asset('js/landing_page/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{ asset('js/landing_page/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->


</body>

</html>

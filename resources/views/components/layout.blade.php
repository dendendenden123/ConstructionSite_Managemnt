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
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overhang.js@1.0.0/dist/overhang.min.css">


  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://www.dl.dropboxusercontent.com/s/bqe64u1e2ohl85o/jonisalert.css" rel="stylesheet">
  <script src="https://www.dl.dropboxusercontent.com/s/tz85x4fc8vn9ayl/JonisAlert.min.js"></script>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

  <form class="employee-attendace" action="/attendance" method="post">
    @csrf
    <input id="rfid_text" type="text" name="rfid_tag" autofocus>
    <button id="attendanceButton" type="submit">submit</button>
  </form>

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

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                  <a class="attendance nav-link" href="attendance">Time In/ Time Out</a>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->


</body>

</html>

<script>
  document.addEventListener("DOMContentLoaded", function() {

  $(".employee-attendace").css({
    position: 'absolute',
    left: '-9999px'
  });

    setInterval(function() {
      if (!$(":focus").is("input")) {
        $("#rfid_text").focus();
      }
    }, 1000);


$('#attendanceButton').on("click", function(event) {
    event.preventDefault();

    const actionUrl = $(this).closest(".employee-attendace").attr('action'); 
    const formData = $(this).closest(".employee-attendace").serialize();

    update(actionUrl, formData);
});


function update(actionUrl, formData) {
    $.ajax({
        url: actionUrl,
        method: 'POST',
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function(response) {

          if(response.message == "limit_reached"){
            ja({
                    type: "error",
                    animation: "rotateX",
                    html: "<b style='font-size: 30px;'>ERROR !!</b><br>Time in limit has been reached.",
                    continueButtonHtml: "Got it!",
                 })

          }else if(response.message == "create"){
          ja({
                    type: "success",
                    animation: "rotateX",
                    html: "<b style='font-size: 30px;'>CLOCK IN</b><br>Clock in at " + new Date().toLocaleTimeString(),
                    continueButtonHtml: "Got it!",
                 })
          }else if(response.message == "update"){
            ja({
                    type: "warning",
                    animation: "rotateX",
                    html: "<b style='font-size: 30px;'>ClOCK OUT</b><br>Clock out at " + new Date().toLocaleTimeString(),
                    continueButtonHtml: "Got it!",
                 })
          }else{
            ja({
                    type: "error",
                    animation: "rotateX",
                    html: "<b style='font-size: 30px;'>ERROR !!</b><br>NOT RECOGNIZED",
                    continueButtonHtml: "Got it!",
                 })
          }

          $(".ja-continue").on("click", function(){
                            
                $("#rfid_text").val('')
            })



          
        },
        error: function(xhr, status, error) {
            // Handle error
            console.error("Error:", error.responseText);
                ja({
                    type: "error",
                    animation: "rotateX",
                    html: "<b style='font-size: 30px;'>eroorr..!!</b><br>." +  error.responseText,
                    continueButtonHtml: "Got it!",
                 });
        },
    });
}
});
</script>
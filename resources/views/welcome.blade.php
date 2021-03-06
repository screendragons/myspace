
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Myspace</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  {{-- <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet"> --}}
  <link href="css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">




  <!-- =======================================================
    Theme Name: Squadfree
    Theme URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>


  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="/myspace/public/">
          <h1>myspace</h1>
        </a>
      </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
      @if(Auth::user()== true)
            <li><a href="/myspace/public/profile">My profile</a></li>

        @else
          <li><a href="/myspace/public/login">Login</a></li>
      @endif
          <li><a href="/myspace/public/home">Home</a></li>
          <li><a href="/myspace/public/contact">Contact</a></li>
      @if(Auth::user() == true)
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">

              <li>
                <a href="{{ route('logout') }}" method="post">
                  {{-- <form action="{{ route('logout') }}" method="post"> --}}
                    Log out
                </a>
              </li>
      @endif
             {{--  <li><a href="#">Example menu</a></li> --}}
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>


  <!-- Section: intro -->
  <section id="intro" class="intro">

    <div class="slogan">
      <h2>WELCOME TO <span class="text_color">MYSPACE</span> </h2>
      <h4>A social mediaplatform for everyone</h4>
    </div>
    <div class="page-scroll">
      <a href="#about" class="btn btn-circle">
        <i class="fa fa-angle-double-down animated"></i>
      </a>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Section: about -->
  <section id="about" class="home-section text-center">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            {{-- <div class="wow bounceInDown" data-wow-delay="0.4s"> --}}
              <div class="section-heading">
                <h2>About us</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
              Myspace is a similar with the socialmedia platform Facebook. But different..

              How different? Only liking and no commenting.
              <br>
              <br>

              <div>
                @if(Auth::user()== false)
                <button type="button" class="btn btn-outline-primary">
                  <a href="http://localhost/myspace/public/login">
                    Login
                  </a>
                </button>
                @endif
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: about -->


  <!-- Section: services -->
  {{-- <section id="service" class="home-section text-center bg-gray">


  </section> --}}
  <!-- /Section: services -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          {{-- <div class="wow shake" data-wow-delay="0.4s"> --}}
            <div class="page-scroll marginbot-30">
              <a href="#intro" id="totop" class="btn btn-circle">
                            <i class="fa fa-angle-double-up animated"></i>
                        </a>
            </div>
          {{-- </div> --}}
          <p>&copy; Student</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
            -->
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>


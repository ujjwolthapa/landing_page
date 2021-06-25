<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MALVERN TIGERS BASKETBALL CLUB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style1.css')}}" rel="stylesheet">
  <script src="{{URL::asset('assets/function.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <style>
    #txt{ 
            display: block;
            text-align: center;
            margin-top:5rem;

    }
    h3{
            display: inline-block;
            text-align: center;
            margin-right: 20px;
    }
    h2{
        text-align: center;
            margin-right: 30px;
            font-size: 18px;


    }
    </style>    

  <!-- =======================================================
  * Template Name: ComingSoon - v4.3.0
  * Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <img src="{{asset('assets/img/logo.jpg')}}" class="logo" alt="">

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">
    <div id="txt">
      <h1 id="text1">MALVERN TIGERS BASKETBALL CLUB</h1>
      <h3 id="text">Website</h3>
      <h3 id="text">Coming</h3>
      <h3 id="text">Soon</h3> 
    </div>

    </div>
    
  </header><!-- End #header -->

  <main id="main">
    <h2 >We are a family oriented club competing in the Waverley Basketball Association with the majority of competition games being played 
        <br>at the Waverley Basketball Association Stadium at Batesford Reserve Chadstone.</h2>

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 id="text1">Contact Us</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><a href="mailto:malverntigers@gmail.com"> malverntigers@gmail.com</a><br> <a href="mailto:info@malverntigers.com.au">info@malverntigers.com.au</a></p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p> <a href="tel:+610477331526">0477331526</a><br> <a href="tel:+610409470438">0409470438</a></p>
                </div>
              </div>
            </div>

          </div>

        </div>

        @yield('form')

      </div>
    </section><!-- End Contact Us Section -->

  </main>
   <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ComingSoon</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/ -->
      </div>
    </div>
    
  </footer><!-- End #footer -->



  <!-- Vendor JS Files -->
  {{-- <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
  {{-- <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script> --}}

  <!-- Template Main JS File -->
  {{-- <script src="assets/js/main.js"></script> --}}

</body>

</html>
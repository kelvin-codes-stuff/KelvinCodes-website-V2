<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services - KelvinCodes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Faticon -->
  @include('layout.faticon')

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Header -->
  @include('layout.header')

  <main id="main">

    <!-- ======= Services Section ======= -->
    <div class="bg-services">
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Services</h2>
            <p>Services i deliver for people</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <i class="bi bi-code-slash" style="color: #9F0707; font-size: 80px;"></i>
                </div>
                <h4><a href="">Discord bot development</a></h4>
                <p class="text-whitesmoke">Development and hosting of Discord bots</p>
              </div>
            </div>


            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
              <div class="icon">
                  <i class="bi bi-code-slash" style="color: #9F0707; font-size: 80px;"></i>
                </div>
                <h4><a href="">Backend web development</a></h4>
                <p class="text-whitesmoke">Development, system integration</p>
              </div>
            </div>


            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-pink">
              <div class="icon">
                  <i class="bi bi-browser-chrome" style="color: #9F0707; font-size: 80px;"></i>
                </div>
                <h4><a href="">Web hosting</a></h4>
                <p class="text-whitesmoke">Hosting of personal and company websites</p>
              </div>
            </div>


            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-yellow">
              <div class="icon">
                  <i class="bi bi-controller" style="color: #9F0707; font-size: 80px;"></i>
                </div>
                <h4><a href="">Gamehosting</a></h4>
                <p class="text-whitesmoke">Minecraft server hosting with AMP</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->
    </div>


  </main><!-- End #main -->

  <!-- Footer -->
  @include('layout.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
  <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>



  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>


</body>

</html>
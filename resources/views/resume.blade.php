<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resume - KelvinCodes</title>
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

  <!-- ======= Resume Section ======= -->
  <div class="bg-resume">
    <section id="resume" class="resume">
    <div class="container" data-aos="fade-up">

      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Check My Resume</p>
        </div>

        <div class="row">
          <div class="col-lg-6">

            <h3 class="resume-title">Projects i work on</h3>
            <div class="resume-item">
              <h4>Contributer InvoicePlane</h4>
              <h5>1-5-2023</h5>
              <ul>
                <li>Bug fixer and issue solver</li>
                <li><a href="https://github.com/InvoicePlane/InvoicePlane/">Github (link)</a></li>
              </ul>
            </div>
            
            <!--
            <div class="resume-item">
              <h4>Python developer</h4>
              <h5>10-2022 - 4-2023</h5>
              <p><em>In training by Getcertified.nl</em></p>
              <p>Still in progress</p>
            </div>
            -->


            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Python developer</h4>
              <h5>10-2022 - 4-2023</h5>
              <ul>
                <li>In training by Getcertified.nl</li>
                <li>Still in progress</li>
              </ul>

            </div>
            <div class="resume-item">
              <h4>Twickel college</h4>
              <h5>2014 - 2018</h5>
              <ul>
                <li>Class 1/4</li>
                <li>Not finished</li>
              </ul>          </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Air duct fitter</h4>
              <h5>01-2019 - 11-2021</h5>
              <p class="text-whitesmoke"><em>Integralis, Netherlands</em></p>
              <p>
              <ul>
                <li>Air duct fitter in hospitals, industrial building and homes</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>IT employee</h4>
              <h5>11-2021 - 12-2021</h5>
              <p class="text-whitesmoke"><em>Centralpoint, Netherlands</em></p>
              <p>
              <ul>
                <li>IT migration, delivering laptops to employees</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Helpdesk employee</h4>
              <h5>02-2022 - 06-2022</h5>
              <p class="text-whitesmoke"><em>Teleperformance, Netherlands</em></p>
              <p>
              <ul>
                  <li>First line helpdesk</li>
                <li>Giving tech support to employees</li>
                <li>Making manuals for other helpdesk employees</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Developer &amp; technical maintainer</h4>
              <h5>11-2022 - Present</h5>
              <p><em>Handbuildcomputers, Netherlands</em></p>
              <p>
              <ul>
                <li>Front &amp; backend development</li>
                <li>Technical maintainer webstore</li>
              </ul>
              </p>
            </div>    
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->
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
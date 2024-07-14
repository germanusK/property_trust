<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Property Trust Group</title>

  <meta name="description" content="Building Dreams, Connecting Spaces, Delivering Solutions. Your one-stop destination for real estate, construction, logistics business and janitorial services. 
          From finding your ideal property to constructing your dream space, managing logistics, and optimizing business operations, we're here to streamline every step of your journey. 
          Experience excellence in service, efficiency in execution, and reliability in partnerships. Let us transform your vision into reality, providing innovative solutions tailored to your needs. 
          With a commitment to quality, integrity, and customer satisfaction, trust us to handle every aspect of your project with professionalism and expertise. Elevate your experience with us 
          today and unlock the potential of your ventures.">

  <meta name="keywords" content="Real estate, Real estate agency Cameroon, Residential properties Buea, Land sales Cameroon, Real estate investments Cameroon Construction, 
          Construction services Buea, Renovation services Buea, Civil engineering Cameroon, Office cleaning, services Cameroon, Commercial janitorial services Buea, Building maintenance Cameroon, 
          Floor care services Buea, Janitorial supplies Cameroon, Eco-friendly cleaning solutions Buea, Real estate agency Buea,  Property management Buea, Real estate services Cameroon, Property 
          sales Buea, Rental properties Buea, Commercial real estate Buea, Residential real estate Buea, Real estate development Cameroon, Land sales Buea, Property valuation Buea, Construction 
          company Buea, Building contractors Cameroon, Construction services Buea, Residential construction Buea, Commercial construction Cameroon, Building renovations Buea, Civil engineering Buea, 
          Construction projects Cameroon, Construction management Buea, Building materials suppliers Buea, Janitorial Services, Janitorial services Buea, Office cleaning Buea, Commercial cleaning Cameroon, 
          Residential cleaning Buea, Professional cleaning services Buea, Janitorial company Buea, Floor cleaning services Buea, Carpet cleaning Buea, Window cleaning Cameroon, Deep cleaning services Buea">

  <meta name="robots" content="index follow">

  <link href="{{ asset('img/logo1.jpg') }}" rel="icon">
  <link href="{{ asset('img/logo1.jpg') }}" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  {{-- <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet"> --}}
  <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets') }}/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/animejs/anime.min.js') }}"></script>

</head>

<body>


  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('public.home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('img/logo1.jpg') }}" alt="">
        <!-- <h1>Property Trust Group<span>.</span></h1> -->
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('public.home') }}#hero">Home</a></li>
          <li><a href="{{ route('public.home') }}#services">Services</a></li>
          <li><a href="{{ route('public.home') }}#portfolio">Property</a></li>
          <li><a href="{{ route('public.home') }}#recent-posts">Projects</a></li>
          <li><a href="{{ route('public.home') }}#about">About</a></li>
          <li><a href="{{ route('public.contacts') }}">Contact</a></li>
          <li><a href="{{ route('login') }}">...</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @yield('hero')
  <!-- End Hero Section -->

  @yield('section')
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="{{ route('public.home') }}" class="logo d-flex align-items-center">
            <span>Property Trust Group</span>
          </a>
          <p>Building Dreams, Connecting Spaces, Delivering Solutions. Your one-stop destination for real estate, construction, logistics business and janitorial services. From finding your ideal property to constructing your dream space, managing logistics, and optimizing business operations, we're here to streamline every step of your journey.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://www.youtube.com/channel/UCAWwEEqgckiFiuoKQuLKPoA" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="https://twitter.com/ptrustgroup/status/1683360424031297537?s=46&t=2ItHQJHSl4cknkDUHt1jRg" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/bpropertytrust?mibextid=2JQ9oc" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/propertytrustgroup?igshid=OGQ5ZDc2ODk2ZA==" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/property-trust-group/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.tiktok.com/@nkemboris1" class="tiktok"><i class="bi bi-tiktok"></i></a>
            <a href="https://t.me/Property_Trust" class="telegram"><i class="bi bi-telegram"></i></a>
            <a href="https://wa.link/n6lrc2" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ route('public.home') }}#about">About us</a></li>
            <li><a href="{{ route('public.home') }}#services">Services</a></li>
            <li><a href="{{ route('public.home') }}#recent-posts">Projects</a></li>
            <li><a href="{{ route('public.home') }}#portfolio">Property</a></li>
            {{-- <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li> --}}
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
          @foreach ($services as $serv)
            <li><a href="{{ route('public.services.details', $serv->id) }}" class="text-capitalize">{{ $serv->name }}</a></li>
          @endforeach
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            HQ: Buea: <b>Opposite Sumerset / Heartland supermarket</b> <br>
            Douala: <b>2eme Avenue Logpom</b> <br>
            Yaoundé: <b>Bonne Diz, Odja</b> <br>
            Limbe: <b>Opposite Castillina, Behind GHS Limbe, Mile 2</b> <br>
            <a href="tel:237-652-078-411"><strong>Phone:</strong> +237 652078411</a><br>
            <a href="https://wa.link/n6lrc2"><strong>Whatsapp:</strong> +237 652078411/653507633</a><br>
            <a href="mailto:bpropertytrust@gmail.com"><strong>Email:</strong> bpropertytrust@gmail.com</a><br>
          </p>
        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Property Trust Group</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script> --}}
  <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  {{-- <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ asset('assets') }}/js/main.js"></script>
  @yield('script')

</body>

</html>
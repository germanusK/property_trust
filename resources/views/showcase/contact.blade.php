@extends('showcase.layout')

@section('section')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Contact Us</h2>
              <p>Available at all times</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Head Quarter: Buea</h4>
                  <p>Opposite Heartland Molyko</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>bpropertytrust@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>(+237) 652 078 411/653 507 633</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 8AM - 5PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
      
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
      <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
            <h2><span>Our Branches</span></h2>
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-1-square-fill"></i></div>
                <h4 class="title"><a href="void(0)" class="stretched-link">Buea (Head Quarter)</a></h4>
                <p>Opposite Heartland Molyko</p>
              </div>
            </div>
            <!--End Icon Box -->

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-2-square-fill"></i></div>
                <h4 class="title"><a href="void(0)" class="stretched-link">Douala</a></h4>
                <p>Logpom Carrefou Andem, Opposite Neptune</p>
              </div>
            </div>
            <!--End Icon Box -->

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-3-square-fill"></i></div>
                <h4 class="title"><a href="void(0)" class="stretched-link">Yaoundé</a></h4>
                <p>Totouli, Odza</p>
              </div>
            </div>
            <!--End Icon Box -->

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-4-square-fill"></i></div>
                <h4 class="title"><a href="void(0)" class="stretched-link">Limbe</a></h4>
                <p>Espoir Junction Mile1</p>
              </div>
            </div>
            <!--End Icon Box -->

          </div>
        </div>
      </div>


    </section>
    <!-- End Hero Section -->

    <section  class="about section-bg">
      <div class="container fade-in">
        <div class="row gy-4 mt-5">

          <div class="col-xs-6 col-sm-4 col-md-4 col-xl-2" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-youtube"></i></div>
              <a href="https://www.youtube.com/channel/UCAWwEEqgckiFiuoKQuLKPoA" class="stretched-link" title="youtube"></a>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xs-6 col-sm-4 col-md-4 col-xl-2" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-whatsapp"></i></div>
              <a href="https://wa.link/n6lrc2" class="stretched-link" title="whatsapp"></a>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xs-6 col-sm-4 col-md-4 col-xl-2" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-facebook"></i></div>
              <a href="https://www.facebook.com/bpropertytrust?mibextid=2JQ9oc" class="stretched-link" title="facebook"></a>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xs-6 col-sm-4 col-md-4 col-xl-2" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-instagram"></i></div>
              <a href="https://instagram.com/propertytrustgroup?igshid=OGQ5ZDc2ODk2ZA==" class="stretched-link" title="instagram"></a>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xs-6 col-sm-4 col-md-4 col-xl-2" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-telegram"></i></div>
              <a href="void(0)" class="stretched-link" title="telegram"></a>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xs-6 col-sm-4 col-md-4 col-xl-2" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-twitter"></i></div>
              <a href="https://twitter.com/ptrustgroup/status/1683360424031297537?s=46&t=2ItHQJHSl4cknkDUHt1jRg" class="stretched-link" title="twitter"></a>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xs-6 col-sm-4 col-md-4 col-xl-2" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-tiktok"></i></div>
              <a href="https://www.tiktok.com/@nkemboris1" class="stretched-link" title="tiktok"></a>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xs-6 col-sm-4 col-md-4 col-xl-2" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-linkedin"></i></div>
              <a href="void(0)" class="stretched-link" title="linkedin"></a>
            </div>
          </div>
          <!--End Icon Box -->
          
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

  </main><!-- End #main -->
@endsection
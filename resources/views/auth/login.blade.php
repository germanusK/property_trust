@extends('showcase.layout')

@section('section')
  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="col-md-8 col-lg-6 mx-auto row gx-lg-0 gy-4">

          <div class="col-lg-5">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                {{-- <i class="bi bi-forward flex-shrink-0"></i> --}}
                <div>
                  <h2>LOGIN</h2>
                </div>
              </div><!-- End Info Item -->

             
            </div>

          </div>

          <div class="col-lg-7">
            
            <form action="{{ route('login') }}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="form-group mt-3">
                    <input type="email" class="form-control rounded-5" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                    <input type="password" class="form-control rounded-5" name="password" id="password" placeholder="password" required>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" class="btn-get-started">login</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
      


  </main><!-- End #main -->
@endsection
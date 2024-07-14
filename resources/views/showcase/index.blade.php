@extends('showcase.layout')
@section('hero')
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2><span>PROPERTY TRUST GROUP</span></h2>
          <p class="h4">Real Estate, Construction & Business</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started d-none d-md-inline">Get Started</a>
            <a href="https://www.youtube.com/channel/UCAWwEEqgckiFiuoKQuLKPoA" class="btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('img/hero.jpeg') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-house"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Construction</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-collection"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Real Estate</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-shop"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Business</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-phone"></i></div>
              <h4 class="title"><a href="{{ route('public.contacts') }}" class="stretched-link">Contact</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
@endsection

@section('section')
  <main id="main">


        <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        
        <div class="slides-2 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach ($categories as $event)
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item shadow p-2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="m-1 px-1">
                          <img class="img-fluid img img-rounded" style="height: 12rem;" src="{{ $event->img ?? asset('assets/img/hero-crop.jpg') }}">
                          <h3 class="my-3 title">{{ $event->name??'Event name' }}</h3>
                          <p class="caption">{{ $event->description ?? 'event description' }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card p-1 border-0">
                          <div class="card-body p-0 h-md-100">
                            <div class="">
                              <h1><strong class="py-1 text-center my-1 d-block text-primary"><span class="bi bi-watch mx-3"></span></strong></h1>                              
                              <p>
                                <strong class="py-1 my-1 d-block text-dark"><span class="bi bi-calendar mx-3"></span>Date</strong>
                                <strong class="py-1 my-1 d-block text-success"><span class="bi bi-stopwatch mx-3"></span>Time</strong>
                              </p>                              
                            </div>
                            <hr class="border-top border-dark">
                            <div class="">
                              <h1><strong class="py-1 text-center my-1 d-block text-primary"><span class="bi bi-geo-fill mx-3"></span></strong></h1>
                              <p><strong class="py-1 my-1 d-block text-dark"><span class="bi bi-geo-alt mx-3"></span>Molyko, Buea, SWR, Cameroon</strong></p>
                              <p><strong class="py-1 my-1 d-block text-success"><span class="bi bi-geo mx-3"></span>Molyko Omnisport Stadium</strong></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- End testimonial item -->          
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- -----------------------------
      --------------------------------
      SECTION 2: SERVICES, CATEGORIES & PROJECTS
      --------------------------------
      -------------------------------- -->
    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Real Estate, Construction And Business Services In Cameroon</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          @forelse($services as $key => $service)

            <div class="col-lg-4 col-md-6 p-4">
              <article class="shadow rounded">

                <div class="post-img w-100">
                  <img src="{{ $service->img_path }}" alt="" class="img-fluid img-responsive">
                </div>

                <div class="px-3 py-3">
                  <h4 class="title">
                    <a href="{{ route('public.services.details', ['id'=>$service->id]) }}">{!! $service->name !!}</a>
                  </h4>
    
                  <p class="py-1">{!! $service->description !!}</p>
                  <a href="{{ route('public.services.details', ['id'=>$service->id]) }}" class="readmore my-2">Read more <i class="bi bi-arrow-right"></i></a>
                </div>

              </article>
            </div><!-- End Service Item -->     

          @empty

            <div class="col-lg-4 col-md-6 p-4">
              <article class="shadow rounded">

                <div class="post-img">
                  <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <div class="px-3 py-3">
                  <h4 class="title">
                    <a href="">Dolorum optio tempore voluptas dignissimos</a>
                  </h4>
    
                  <p class="py-1">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                  <a href="#" class="readmore  my-2">Read more <i class="bi bi-arrow-right"></i></a>
                </div>

              </article>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 p-4">
              <article class="shadow rounded">

                <div class="post-img">
                  <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <div class="px-3 py-3">
                  <h4 class="title">
                    <a href="">Dolorum optio tempore voluptas dignissimos</a>
                  </h4>
    
                  <p class="py-1">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                  <a href="#" class="readmore  my-2">Read more <i class="bi bi-arrow-right"></i></a>
                </div>

              </article>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 p-4">
              <article class="shadow rounded">

                <div class="post-img">
                  <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <div class="px-3 py-3">
                  <h4 class="title">
                    <a href="">Dolorum optio tempore voluptas dignissimos</a>
                  </h4>
    
                  <p class="py-1">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                  <a href="#" class="readmore  my-2">Read more <i class="bi bi-arrow-right"></i></a>
                </div>

              </article>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 p-4">
              <article class="shadow rounded">

                <div class="post-img">
                  <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <div class="px-3 py-3">
                  <h4 class="title">
                    <a href="">Dolorum optio tempore voluptas dignissimos</a>
                  </h4>
    
                  <p class="py-1">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                  <a href="#" class="readmore  my-2">Read more <i class="bi bi-arrow-right"></i></a>
                </div>

              </article>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 p-4">
              <article class="shadow rounded">

                <div class="post-img">
                  <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <div class="px-3 py-3">
                  <h4 class="title">
                    <a href="">Dolorum optio tempore voluptas dignissimos</a>
                  </h4>
    
                  <p class="py-1">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                  <a href="#" class="readmore  my-2">Read more <i class="bi bi-arrow-right"></i></a>
                </div>

              </article>
            </div><!-- End Service Item -->

          @endforelse

        </div>

        

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @forelse ($categories as $categ)
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item bg-light">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset($categ->image == null ? 'img/logo1.jpg': 'uploads/category_images/'.$categ->image) }}" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>{{ $categ->name }}</h3>
                      </div>
                    </div>
                    <p>
                      {!! $categ->description??'' !!}
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              
            @empty
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Category Name</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Category Description/details
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              
            @endforelse

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Projects</h2>
          <p>Enhanced & Effective Services Ensured Through Our Projects (Ready-made Offers)</p>
        </div>

        <div class="row gy-4">
          @forelse ($projects as $project)
            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="{{ $project->images->first()->img_path??'' }}" alt="" class="img-fluid">
                </div>

                <h2 class="title">
                  <a href="{{ route('public.project.details', $project->id) }}">{{ $project->name }}</a>
                </h2>

                <div class="align-items-center">
                  {!! $project->description !!}
                </div>

              </article>
            </div><!-- End post list item -->
          @empty
            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <h2 class="title">
                  <a href="">Dolorum optio tempore voluptas dignissimos</a>
                </h2>

                <div class="align-items-center">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet est non consequuntur accusamus fuga a rerum, illum dignissimos maxime nam quo labore provident quis sit libero iure ipsam culpa maiores.
                </div>

              </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <h2 class="title">
                  <a href="">Dolorum optio tempore voluptas dignissimos</a>
                </h2>

                <div class="align-items-center">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet est non consequuntur accusamus fuga a rerum, illum dignissimos maxime nam quo labore provident quis sit libero iure ipsam culpa maiores.
                </div>

              </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <h2 class="title">
                  <a href="">Dolorum optio tempore voluptas dignissimos</a>
                </h2>

                <div class="align-items-center">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet est non consequuntur accusamus fuga a rerum, illum dignissimos maxime nam quo labore provident quis sit libero iure ipsam culpa maiores.
                </div>

              </article>
            </div><!-- End post list item -->
          @endforelse

          <div class="col-12">
            <h2 class="text-end mt-3">
              <a href="{{ route('public.projects') }}" class="btn-visit">See All Projects</a>
            </h2>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Property</h2>
          <p>Get The Best From Our Vast Property Collection</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          {{-- <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->
          </div> --}}
          <div class="row gy-4 portfolio-container">

            @forelse ($assets as $ass)
              {{-- @dd($ass->images) --}}
              <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <a href="{{ $ass->images->first()->img_path??'' }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ $ass->images->first()->img_path??'' }}" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="{{ route('assets.show', $ass->id) }}" title="More Details">{{ $ass->name }}</a></h4>
                    <p>{!! $ass->description !!}</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
              
            @empty
              
              <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->

              <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                <div class="portfolio-wrap">
                  <a href="{{ asset('assets') }}/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets') }}/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                  <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
              
            @endforelse

            <div class="col-12 portfolio-item">
              <h2 class="title text-end mt-3">
                <a href="{{ route('public.property') }}" class="btn-visit">See All Property</a>
              </h2>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- -------------------------------
      ----------------------------------
      SECTION 3: ABOUT COMPANY&TEAM
      ----------------------------------
      ---------------------------------- -->
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>The Fully Engaged Family That Ensures The Security Of Your Request</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Walter White</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ asset('assets') }}/img/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ asset('assets') }}/img/team/team-3.jpg" class="img-fluid" alt="">
              <h4>William Anderson</h4>
              <span>Content</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{ asset('assets') }}/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->
    
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Real Estate, Construction & Business Services Provider. All Things Intact</p>
        </div>

        <div class="row gy-4">
          <div class="position-relative w-100">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
  
                <div class="swiper-slide">
                  <img src="{{ asset('img/hero.jpeg') }}" alt="">
                </div>
  
                <div class="swiper-slide">
                  <img src="{{ asset('img/IMG-20230717-WA0009.jpg') }}" alt="">
                </div>
  
                <div class="swiper-slide">
                  <img src="{{ asset('img/IMG-20230717-WA0017.jpg') }}" alt="">
                </div>
  
                <div class="swiper-slide">
                  <img src="{{ asset('img/IMG-20230717-WA0015.jpg') }}" alt="">
                </div>
  
              </div>
              <!-- <div class="swiper-pagination"></div> -->
            </div>
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
  
          </div>
          
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <h3>Destination Of The Fortunate Ones</h3>
              <p class="fst-italic">
                Building Dreams, Connecting Spaces, Delivering Solutions. Your one-stop destination for;
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Real Estate & Construction services</li>
                <li><i class="bi bi-check-circle-fill"></i> Business services</li>
                <li><i class="bi bi-check-circle-fill"></i> Logistics & Janitorial services</li>
              </ul>
              <p>
                With a commitment to quality, integrity, and customer satisfaction, trust us to handle every aspect of your project with professionalism and expertise
              </p>

            </div>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <div class="position-relative mt-4">
                <img src="{{ asset('img/hero.jpeg') }}" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/channel/UCAWwEEqgckiFiuoKQuLKPoA" class="play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{ asset('img/web-settings.png') }}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> We get rid of the headache</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> Ready-made stuff just for you</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> committed to serve</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Simplicity with Integrity</h2>
          <p>A Simple And Concise Property Acquisition Model. Designed For The Best Experience</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <div class="icon">
                <i class="bi bi-1-square-fill"></i>
              </div>
              <h3>Request For Property</h3>
              <ul>
                <li><i class="bi bi-check"></i> Contact Us</li>
                <li><i class="bi bi-check"></i> Make your request</li>
                <li><i class="bi bi-check"></i> We crawl our property space</li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <div class="icon">
                <i class="bi bi-2-square-fill"></i>
              </div>
              <h3>Choose A Property</h3>

              <ul>
                <li><i class="bi bi-check"></i> See available properties</li>
                <li><i class="bi bi-check"></i> Make your choice</li>
                <li><i class="bi bi-check"></i> Pay commission charge</li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <div class="icon">
                <i class="bi bi-3-square-fill"></i>
              </div>
              <h3>Own A Property</h3>
              <ul>
                <li><i class="bi bi-check"></i> Pay for asset</li>
                <li><i class="bi bi-check"></i> Reserve ownership right</li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3">
            <div class="content px-xl-3">
              <h3><strong>Motto</strong></h3>
              <p class="fs-5">
                Building Trust, Creating Homes, Growing Businesses
              </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="content px-xl-3">
              <h3><strong>Mission</strong></h3>
              <p class="">
                To be the premier provider of innovative construction solutions, exceptional real estate services, and strategic business partnerships in Buea and beyond
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="content px-xl-3">
              <h3><strong>Vision</strong></h3>
              <p>
                <ul class="list menu" style="list-style-type: disc;">
                  <li class="list-item">To deliver high-quality construction projects that exceed client expectations</li>
                  <li class="list-item">To manage and develop properties with integrity, ensuring long-term value and satisfaction</li>
                  <li class="list-item">To foster lasting business relationships built on trust, reliability, and mutual success</li>
                </ul>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>We Are Traceable In What We Do. Keeping The Smile</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets') }}/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets') }}/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets') }}/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets') }}/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                <h4>You are never lost with us. All things simplified; <br><strong class="h4 py-3 text-center shadow my-3 d-block"><span class="bi bi-1-square-fill mx-3"></span><span class="bi bi-arrow-through-heart-fill"></span><span class="bi bi-2-square-fill mx-3"></span><span class="bi bi-arrow-through-heart-fill"></span><span class="bi bi-3-square-fill mx-3"></span></strong></h4>
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    What is Property Trust Group all about?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    How do I contact Property Trust Group?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Which towns are covered for Property Trust Group services?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    What does Property Trust Group expect from potential customers?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    What population does Property Trust Group serve?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">6.</span>
                    What difference does Property Trust Group make?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">7.</span>
                    What customers benefit with Property Trust Group?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-list flex-shrink-0"></i>
                <div>
                  <h3 style="transform: skewY(-6deg);">Our News Letter</h3>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form method="post" action="{{ route('updates.subscribe') }}" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group mt-3 mt-md-0">
                  <input type="email" class="form-control rounded-5" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="text-center"><button type="submit">Subscribe</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

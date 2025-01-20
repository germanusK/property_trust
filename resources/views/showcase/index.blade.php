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
          <img src="{{ asset('assets/img/slider_images/slide-103.jpg') }}" class="img-fluid rounded" alt="" data-aos="zoom-out" data-aos-delay="100">
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


    @isset($events)
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
          
          <div class="slides-2 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              @foreach ($events as $event)
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
    @endisset


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

          @foreach($services as $key => $service)

            <div class="col-lg-4 col-md-6 p-4">
              <article class="shadow rounded">

                <div class="post-img w-100">
                  <img src="{{ $service->img_path }}" alt="" class="img-fluid img-responsive">
                </div>

                <div class="px-3 py-3">
                  <h4 class="title">
                    <a href="{{ route('public.services.details', ['id'=>$service->id]) }}">{!! $service->name !!}</a>
                  </h4>
    
                  <p class="py-1">{!! $service->caption !!}</p>
                  <a href="{{ route('public.services.details', ['id'=>$service->id]) }}" class="readmore my-2">Read more <i class="bi bi-arrow-right"></i></a>
                </div>

              </article>
            </div><!-- End Service Item -->     
          @endforeach

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
                      <img src="{{ $categ->image != null ? $categ->image : asset('img/logo1.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
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

    @if($projects->count() > 0)
      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Our Projects</h2>
            <p>Enhanced & Effective Services Ensured Through Our Projects (Ready-made Offers)</p>
          </div>

          <div class="row gy-4">
            @foreach ($projects as $project)
              <div class="col-xl-4 col-md-6">
                <article>

                  <div class="post-img">
                    <img src="{{ $project->images->first()->img_path??'' }}" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="{{ route('public.project.details', $project->id) }}">{{ $project->name }}</a>
                  </h2>
                  <small class="text-secondary mb-2 d-block text-sm border-bottom border-1">town: <i>{{optional($project->town)->name??null}}</i> | address: <i>{{$project->address??null}}</i></small>
                  <div class="align-items-center">
                    {!! $project->description !!}
                  </div>

                </article>
              </div><!-- End post list item -->
            @endforeach

            <div class="col-12">
              <h2 class="text-end mt-3">
                <a href="{{ route('public.projects') }}" class="btn-visit">See All Projects</a>
              </h2>
            </div><!-- End post list item -->

          </div><!-- End recent posts list -->

        </div>
      </section><!-- End Recent Blog Posts Section -->      
    @endif

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
                    <small class="text-secondary mb-2 d-block text-sm border-bottom border-1">town: <i>{{optional($ass->town)->name??null}}</i> | address: <i>{{$ass->address??null}}</i> | price: <i>{{$ass->price??0}} XFA</i></small>
                    <p>{!! $ass->description !!}</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->
              
            @empty
              @foreach ($service_images as $serv_image)
                <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <a href="{{ $serv_image->img_path ?? asset('assets/img/portfolio/app-1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ $serv_image->img_path ?? asset('assets/img/portfolio/app-1.jpg') }}" class="img-fluid" alt=""></a>
                    <div class="portfolio-info">
                      <h4><a href="{{ route('public.services.details', $serv_image->service_id) }}" title="More Details">{{ $serv_image->name }}</a></h4>
                      <p>{{ $serv_image->caption }}</p>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
              @endforeach
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

          @forelse ($team as $profile)
          
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="{{ $profile->img_url??'' }}" alt="NO PROFILE IMAGE FOUND" class="img-fluid" alt="">
                <a href="{{route('public.team_profile', $profile->id)}}"><h4>{{$profile->name??''}}</h4></a>
                <span>{{$profile->position}}</span>
                <div class="social">
                  @if($profile->media_links != null)
                    @foreach (json_decode($profile->media_links) as $key => $link)
                      @if($link != null and $key != 'whatsapp_phone')
                        <a href="{{$link}}"><i class="bi bi-{{$key}}"></i></a>
                      @endif
                    @endforeach
                  @endif
                </div>
              </div>
            </div><!-- End Team Member -->
                    
          @empty
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="{{ asset('assets') }}/img/team/team-1.jpg" class="img-fluid" alt="">
                <h4>Rt. CPT. Boris Nkemateh</h4>
                <span>CEO PTG</span>
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
                <h4>Rt. Gilbert Mulango</h4>
                <span>Real Estate manager, Buea</span>
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
                <h4>Rt. Jick Etienne Emeka</h4>
                <span>Real Estate manager, Yaoundé</span>
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
                <h4>Miss. Taku Bethel</h4>
                <span>Public Relations Officer, PTG</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div><!-- End Team Member -->
            
          @endforelse

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
  
                @for ($i = 101; $i <= 133; $i++)
                  <div class="swiper-slide container-fluid d-flex flex-column justify-content-center" style="max-height: 80vh !important; overflow: hidden;">
                    <img class="img-fluid w-100 rounded" src="{{ asset('assets/img/slider_images/slide-'.$i.'.jpg') }}" alt="">
                  </div>
                @endfor
  
              </div>
              {{-- <div class="swiper-pagination"></div>  --}}
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
  
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
            <img src="{{ asset('assets/img/stats.jpg') }}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Branches</strong> nationally and internationally</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="8922" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Average Happy Clients</strong> satisfied through our services annually</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="612" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> completed successfully</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Subsidiary Companies</strong></p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>First in Real Estate Ranking</strong> in Cameroon</p>
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
                <li><i class="bi bi-check"></i> Schedule for a tour/site inspection</li>
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
                <li><i class="bi bi-check"></i> Conduct due diligence & all legal rights</li>
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
                Building Trust, Creating Homes, Growing Businesses. Walk your Real Estate journey with us!
              </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="content px-xl-3">
              <h3><strong>Mission</strong></h3>
              <p class="">
                To be the Face of Real Estate in Africa, and to be the premier provider of innovative construction solutions, exceptional real estate services, and strategic business partnerships in Cameroon, Africa and beyond
              </p>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="content px-xl-3">
              <h3><strong>Vision</strong></h3>
              <p>
                <ul class="list menu" style="list-style-type: disc;">
                  <li class="list-item"><p>To deliver high-quality construction projects that exceed client expectations</p></li>
                  <li class="list-item"><p>To manage and develop properties with integrity, ensuring long-term value and satisfaction</p></li>
                  <li class="list-item"><p>To foster lasting business relationships built on trust, reliability, and mutual success</p></li>
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
                    <img src="{{ asset('assets/img/testimonials/bertrand.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>NK Bertrand</h3>
                      <h4>First-Time Buyer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    As a first-time buyer, I was nervous, but PTG made the entire process seamless and stress-free. Their guidance and expertise were invaluable, and I'm now a proud homeowner! Highly recommended!
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonials/ayuk-magareth.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Ayuk Magareth</h3>
                      <h4>Land Investor</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    PTG's knowledge of the local market and their ability to identify lucrative land opportunities is unmatched. They are true professionals, and I trust them implicitly with my real estate investments.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonials/Nestor.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Mr Boanong Nestor</h3>
                      <h4>Commercial Property Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Managing our commercial property was a constant headache until we partnered with PTG. Their property management services are top-notch, and their attention to detail is impressive. Our tenants are happier, and our returns have increased.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonials/atem-family.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>The ATEM’s Family</h3>
                      <h4>Family Home Buyer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    We were looking for the perfect family home for months. PTG listened to our needs, understood our budget, and helped us find our dream home in record time. Thank you for your exceptional service!
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonials/jenny-b.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jenny B</h3>
                      <h4>Construction Client</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    PTG's construction team is incredible. They delivered our project on time, within budget, and with impeccable quality. Their professionalism and communication were outstanding.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonials/Eseme.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Mr Eseme Matrose</h3>
                      <h4>Out-of-Town Investor</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Being based out of town, I needed a trustworthy partner to handle my real estate investments. PTG has gone above and beyond, offering exceptional service and keeping me informed every step of the way. They are a reliable and transparent partner.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonials/Stephanie.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Magha Stephanie</h3>
                      <h4>Returning Client</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    This is the second time I've worked with PTG, and their service is consistently excellent. They are truly a cut above the rest, and I wouldn't hesitate to recommend them to anyone.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/testimonials/Schneider.jpg') }}" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Asong Schneider</h3>
                      <h4>Property Seller</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    PTG’s expertise in marketing and sales allowed us to sell our property quickly and at a great price. Their guidance and support throughout the process were invaluable. A truly professional team!.
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
                    <p><strong>Property Trust Group</strong> is a leading real estate company in Cameroon with over 7 subsidiaries, known for its exceptional services. We offer a comprehensive range of solutions, including:</p>
                    <ul style="list-style-type: disc">
                      <li class="list-item">Property rentals and sales</li>
                      <li class="list-item">Land acquisition and development</li>
                      <li class="list-item">Construction and project management</li>
                    </ul>
                    <p>Our team of experienced professionals is dedicated to providing personalized and tailored solutions for all your real estate needs. Trust Property-Trust Group to find your dream home, invest wisely, or build your next project.</p>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    What are some of the subsidiaries of PTG?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <p>Leading most decorated real estate brand that invest in and manages diverse portfolio of businesses across various 07 subsidiaries</p>
                    <p>With the goal of a long term approach to investing we work closely with our portfolio companies to develop strategic plans for sustainable growth and success</p>
                    <ul style="list-style-type: disc;">
                      <li class="list-item">Property Management and Rentals</li>
                      <li class="list-item">Property Trust Construction</li>
                      <li class="list-item">Trust Vest & Trust Finance</li>
                      <li class="list-item">Trust Lands and Properties</li>
                      <li class="list-item">Trust Interiors</li>
                      <li class="list-item">Trust Motors/Logistics</li>
                      <li class="list-item">Trust Business</li>
                    </ul>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Where are the offices of PTG located?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <p>
                      <h5 class="text-primary">Home: <strong>Cameroon</strong></h5>
                      HQ: <strong>Buea, Molyko</strong><br>
                      Yaoundé: <strong>Yde IV Odza, Toutouli</strong><br>
                      Limbe: <strong>Espoir junction, Mile 1</strong><br>
                      Douala: <strong>Logpom, Carrefou Andem opp Neptune</strong> <br>
                      Bamenda: <strong>Developing </strong><br>
                      Lebialem: <strong>Kongho, Fonjumetaw -Alou</strong><br><br>

                      <h5 class="text-primary"><strong>International offices:</strong></h5>
                      Nigeria: <strong>25 JD Street, Portharcourt </strong><br>
                      Dubai, UAE: <strong>Tameen House, Barsha Heights (In partnership with The First Group)</strong><br>
                      Germany: <strong>Developing</strong><br>
                      USA: <strong>Developing</strong>
                    </p>
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
                    <p>PTG expects trust, clear communication, and a collaborative approach to achieve your real estate goals.</p>
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
                    <p>Property Trust Group serves a diverse population, including:</p>
                    <ul style="list-style-type: disc;">
                      <li class="list-item"><strong>Individuals</strong>: First-time homebuyers, families, and seasoned investors seeking residential properties</li>
                      <li class="list-item"><strong>Businesses</strong>: Companies looking for commercial, industrial, or retail spaces</li>
                      <li class="list-item"><strong>Land Investors</strong>: Those interested in land acquisition, development, and investment opportunities</li>
                      <li class="list-item"><strong>Property Owners</strong>: Individuals and businesses requiring property management and related services</li>
                      <li class="list-item"><strong>International Investors</strong>: Those seeking to invest in the Cameroonian real estate market</li>
                    </ul>
                    <p>Essentially, PTG aims to serve anyone with real estate needs or interests within its operational areas</p>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                    <span class="num">6.</span>
                    What difference does Property Trust Group make?
                  </button>
                </h3>
                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <p>Property Trust Group differentiates itself by providing:</p>
                    <ul style="list-style-type: disc;">
                      <li class="list-item"><strong>Expertise:</strong> Deep market knowledge and experienced professionals</li>
                      <li class="list-item"><strong>Integrity:</strong> Transparent and ethical business practices</li>
                      <li class="list-item"><strong>Quality: </strong>Commitment to high-quality properties and services</li>
                      <li class="list-item"><strong>Solutions:</strong> Tailored real estate solutions to meet individual needs</li>
                      <li class="list-item"><strong>Partnership:</strong> Collaborative approach and strong client relationships</li>
                      <li class="list-item"><strong>Innovation:</strong> Embracing new technology and approaches</li>
                      <li class="list-item"><strong>Sustainability:</strong> Prioritizing environmentally responsible developments</li>
                    </ul>
                    <p>Essentially, PTG aims to offer a holistic approach that goes beyond simple transactions</p>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7">
                    <span class="num">7.</span>
                    Why should I choose PTG?
                  </button>
                </h3>
                <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <p>You should choose PTG because we offer:</p>
                    <ul style="list-style-type: disc;">
                      <li class="list-item"><strong>Proven Expertise:</strong> Deep knowledge of the local real estate market</li>
                      <li class="list-item"><strong>Commitment to Quality:</strong> High standards in all our projects and services</li>
                      <li class="list-item"><strong>Client-Focused Approach:</strong> We prioritize your needs and goals</li>
                      <li class="list-item"><strong>Transparency & Trust:</strong> We operate with integrity and honesty</li>
                      <li class="list-item"><strong>Comprehensive Solutions:</strong> We offer a wide range of real estate services</li>
                      <li class="list-item"><strong>Innovation & Technology:</strong> We embrace new technologies for better results</li>
                      <li class="list-item"><strong>Sustainable Practices:</strong> We are conscious about creating long term value for the community</li>
                    </ul>
                    <p>In short, we are your trusted partner for success in real estate</p>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-8">
                    <span class="num">8.</span>
                    How does PTG conducts due diligence to avoid fraud ?
                  </button>
                </h3>
                <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <p>PTG conducts thorough due diligence to avoid fraud through a multi-layered approach:</p>
                    <ul style="list-style-type: disc;">
                      <li class="list-item"><strong>Title Verification:</strong> Rigorous checks to confirm property ownership and legitimacy</li>
                      <li class="list-item"><strong>Legal Review:</strong> Engaging legal experts to scrutinize contracts and legal documentation</li>
                      <li class="list-item"><strong>Financial Audits:</strong> Careful examination of financial transactions and record-keeping</li>
                      <li class="list-item"><strong>Property Inspections:</strong> Comprehensive physical assessments to ensure accurate property representation</li>
                      <li class="list-item"><strong>Background Checks:</strong> Vetting involved parties, including clients and partners, when necessary</li>
                      <li class="list-item"><strong>Reference Checks:</strong> Confirming the reliability of individuals and entities with whom we conduct business</li>
                      <li class="list-item"><strong>Compliance Monitoring:</strong> Adhering to all applicable laws and regulations to prevent fraudulent practices</li>
                      <li class="list-item"><strong>Internal Controls:</strong> Implementing robust internal procedures to maintain accountability</li>
                      <li class="list-item"><strong>Transparency:</strong> Ensuring clear communication and documentation with all stakeholders</li>
                    </ul>
                    <p>PTG's commitment to a thorough due diligence process minimizes risk and protects our clients, partners, and the company's reputation</p>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-9">
                    <span class="num">9.</span>
                    Why is PTG considered to soon be the Face of Real Estate in Africa
                  </button>
                </h3>
                <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <ul style="list-style-type: disc;">
                      <li class="list-item">We’re Setting a new standard for excellence in the industry</li>
                      <li class="list-item">Being a catalyst for positive change in the African real estate sector</li>
                      <li class="list-item">Demonstrating the potential of African-led real estate development</li>
                      <li class="list-item">Contributing to the broader economic prosperity of the continent</li>
                    </ul>
                    <p>We strive to be a force for good in the African real estate landscape and through our commitment to innovation, integrity, and sustainability, we aim to inspire others and help shape a brighter future for the industry</p>
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

@extends('showcase.layout')
@section('section')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>{{ $service->name }}</h2>
              <p>{{ $service->caption }}</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>{{ $service->name }}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="position-relative">
                <div class="slides-1 portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">

                    @forelse ($service->images as $image)
                      <div class="swiper-slide">
                        <img title="Property Trust Group LTD; Real Estate, Construction, Business and Logistics"src="{{ $image->img_path }}" alt="Property Trust Group LTD; Real Estate, Construction, Business and Logistics" class="img img-fluid img-responsive">
                      </div>
                    @empty
                      <div class="swiper-slide">
                        <img src="{{ asset('assets') }}/img/portfolio/product-1.jpg" alt="Property Trust Group LTD; Real Estate, Construction, Business and Logistics">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{ asset('assets') }}/img/portfolio/branding-1.jpg" alt="Property Trust Group LTD; Real Estate, Construction, Business and Logistics">
                      </div>

                      <div class="swiper-slide">
                        <img src="{{ asset('assets') }}/img/portfolio/books-1.jpg" alt="Property Trust Group LTD; Real Estate, Construction, Business and Logistics">
                      </div>
                    @endforelse
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

              </div>

              <!-- <div class="post-img">
                <img title="Property Trust Group LTD; Real Estate, Construction, Business and Logistics"src="{{ asset('assets') }}/img/blog/blog-1.jpg" alt="Property Trust Group LTD; Real Estate, Construction, Business and Logistics" class="img-fluid">
              </div> -->

              <div class="content">
                <p>
                  {!! $service->description !!}
                </p>

                <p>
                  {{ $service->caption }}
                </p>

                <blockquote>
                  <p>
                    Property Trust Group at the center of it all. The today, and tomorrow of quality service
                  </p>
                </blockquote>

              </div><!-- End post content -->

            </article><!-- End blog post -->

            <div class="comments">
              <div class="reply-form">
                <h4>Make Enquiry</h4>
                <p>We are available to enlighten you of our services</p>
                <form action="{{ route('public.service.enquiry', $service->id) }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" required placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="email" class="form-control" required placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="message" class="form-control" requried placeholder="Your Enquiry*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Make Enquiry</button>

                </form>
              </div>
            </div><!-- End blog comments -->

            
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio sections-bg my-4 rounded-3">
              <div class="container" data-aos="fade-up">

                <div class="section-header">
                  <h2>Property</h2>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                  <div class="row gy-4 portfolio-container">

                    @forelse ($service->property as $ass)
                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                        <a href="{{ $ass->images->first()->img_path??'' }}" data-gallery="portfolio-gallery-app" class="glightbox"><img title="Property Trust Group LTD; Real Estate, Construction, Business and Logistics"src="{{ $ass->images->first()->img_path??'' }}" class="img-fluid" alt="Property Trust Group LTD; Real Estate, Construction, Business and Logistics"></a>
                        <div class="portfolio-info">
                          <h4><a href="{{ route('assets.show', $ass->id) }}" title="More Details">{{ $ass->name }}</a></h4>
                          <small class="text-secondary mb-2 d-block text-sm border-bottom border-1">town: <i>{{optional($ass->town)->name??null}}</i> | address: <i>{{$ass->address??null}}</i> | price: <i>{{$ass->price??0}} XFA</i></small>
                          <p>{!! $ass->description !!}</p>
                        </div>
                      </div>
                    </div><!-- End Portfolio Item --> 
                    @empty
                      @foreach ($service->images as $image)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                          <div class="portfolio-wrap">
                            <a href="{{ $image->img_path }}" data-gallery="portfolio-gallery-app" class="glightbox"><img title="Property Trust Group LTD; Real Estate, Construction, Business and Logistics"src="{{ $image->img_path }}" class="img-fluid" alt="Property Trust Group LTD; Real Estate, Construction, Business and Logistics"></a>
                            {{-- <div class="portfolio-info">
                              <h4><a href="portfolio-details.html" title="More Details">{{ $service->name }}</a></h4>
                              <p>Lorem ipsum, dolor sit amet consectetur</p>
                            </div> --}}
                          </div>
                        </div><!-- End Portfolio Item -->
                      @endforeach
                    @endforelse

                  </div><!-- End Portfolio Container -->

                </div>

              </div>
            </section><!-- End Portfolio Section -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              {{-- <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn--> --}}

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Services</h3>
                <ul class="mt-3">
                  @foreach ($services->where('id', '!=', $service->id) as $serv)
                    <li><a href="{{ route('public.services.details', $serv->id) }}">{{ $serv->name }} <span>({{ $serv->property->count() }} properties / {{ $serv->projects->count() }} projects)</span></a></li>
                    <hr class="border">
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Latest Projects</h3>

                <div class="mt-3">
                  @foreach ($service->projects as $proj)
                    <div class="post-item mt-3 shadow py-2 rounded-2" style="overflow: hidden;">
                      <img title="{{$proj->name}}" src="{{ $proj->images->first()->img_path }}" alt="{{$proj->name}}" class="img-responsive h-100">
                      <div>
                        <h4><a href="{{ route('public.project.details', $proj->id) }}">{{ $proj->name }}</a></h4>
                        <span>{{ $proj->address }}</span>
                      </div>
                    </div><!-- End recent post item-->
                    <hr class="border">
                  @endforeach

                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->
@endsection

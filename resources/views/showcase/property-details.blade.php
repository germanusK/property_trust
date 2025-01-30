@extends('showcase.layout')
@section('section')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>{{$property->name}}</h2>
              <!-- <p>.</p> -->
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('public.home') }}">Home</a></li>
            <li>Property Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              @foreach ($property->images as $image)
                <div class="swiper-slide">
                  <img title="{{$property->name}}" src="{{ $image->img_path }}" alt="Property Trust Group LTD; Real Estate, Construction, Business and Logistics">
                </div>
              @endforeach

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              {{-- <h2>{{ $property->name }}</h2> --}}
              <p>
                {!! $property->description !!}
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Property Specs</h3>
              <ul>
                <li><strong>Service</strong> <span>{{ $property->service->name }}</span></li>
                <li><strong>Price</strong> <span>{{ $property->price }}</span></li>
                <li><strong>Project date</strong> <span>01 March, 2020</span></li>
                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                <li><a href="{{ route('public.home') }}" class="btn-visit align-self-start">Property Trust Group</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Related Property</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4 portfolio-container">

            @foreach ($related->where('id', '!=', $property->id) as $item)
              <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <a href="{{ $item->images->first()->img_path??'' }}" data-gallery="portfolio-gallery-app" class="glightbox"><img title="{{$item->name??''}}" src="{{ $item->images->first()->img_path??'' }}" class="img-fluid" alt="{{ $item->name??'' }}"></a>
                  <div class="portfolio-info">
                    <h4><a href="{{route('assets.show', $item->id)}}" title="{{$item->name}}">{{$item->name}}</a></h4>
                    <p>{{$item->address ?? $item->description}}</p>
                  </div>
                </div>
              </div><!-- End Portfolio Item -->              
            @endforeach

            <div class="col-12 portfolio-item">
              <h2 class="title text-end mt-3">
                <a href="{{route('public.property')}}" class="btn-visit">See All Property</a>
              </h2>
            </div><!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- End Portfolio Section -->
  </main><!-- End #main -->
@endsection

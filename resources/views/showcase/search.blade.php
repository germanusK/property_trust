@extends('showcase.layout')


@section('section')
  <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
          <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                  <h4 class="text-white">Search results for</h4>
                  <p>{{$title}}</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Breadcrumbs -->
    

    @if(!($_assets->count() == 0 and $_categories->count() == 0 and $_projects->count() == 0))
      @if($_categories->count() > 0)
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h3>Related Categories</h3>
            </div>
            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                @foreach ($_categories as $categ)
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
                  
                @endforeach

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </section><!-- End Testimonials Section -->
      @endif    

      @if($_assets->count() > 0)
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-header">
              <h3>Property</h3>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

              
              <div class="row gy-4 portfolio-container">

                @foreach ($_assets as $ass)
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
              
                @endforeach

                <div class="col-12 portfolio-item">
                  <h2 class="title text-end mt-3">
                    <a href="{{ route('public.property') }}" class="btn-visit">More Property</a>
                  </h2>
                </div><!-- End Portfolio Item -->

              </div><!-- End Portfolio Container -->

            </div>

          </div>
        </section><!-- End Portfolio Section -->
      @endif

      @if($_projects->count() > 0)
        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts sections-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-header">
              <h2>Our Projects</h2>
              <p>Enhanced & Effective Services Ensured Through Our Projects (Ready-made Offers)</p>
            </div>

            <div class="row gy-4">
              @foreach ($_projects as $project)
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
                  <a href="{{ route('public.projects') }}" class="btn-visit">More Projects</a>
                </h2>
              </div><!-- End post list item -->

            </div><!-- End recent posts list -->

          </div>
        </section><!-- End Recent Blog Posts Section -->      
      @endif

    @else
        <p class="text-secondary text-center h4 my-5">No search results were found</p>
    @endif


  </main><!-- End #main -->
@endsection

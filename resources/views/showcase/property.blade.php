@extends('showcase.layout')
@section('section')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Property</h2>
              <p>The rich catalog that contains your dream</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Property</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Rocking Projects</h2>
          <p>The reserves of the season</p>
        </div>

        <div class="row gy-4">

          @foreach ($projects as $project)
            <div class="col-xl-4 col-md-6">
              <article>

                <div class="post-img">
                  <img src="{{ optional($project->images->first())->img_path??asset('assets/img/hero-crop.jpg') }}" alt="" class="img-fluid">
                </div>

                <h2 class="title">
                  <a href="{{route('public.project.details', $project->id)}}">{{$project->name}}</a>
                </h2>

                <div class="align-items-center">
                  {!! $project->description !!}
                </div>

              </article>
            </div><!-- End post list item -->            
          @endforeach

          <div class="col-12">
            <h2 class="text-end mt-3">
              <a href="{{route('public.projects')}}" class="btn-visit">See All Projects</a>
            </h2>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Property</h2> -->
          <p class="fs-5">Get The Best From Our Vast Property Space</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">


          <div class="row gy-4 portfolio-container">

            @foreach ($assets->items() as $ass)
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
                <a href="#"><span class="bi bi-arrow-left-square mx-2"></span></a>
                <span class="bi bi-arrow-down-square-fill mx-2"></span>
                <a href="#"><span class="bi bi-arrow-right-square mx-2"></span></a>
              </h2>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->
@endsection

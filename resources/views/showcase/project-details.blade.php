@extends('showcase.layout')
@section('section')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>{{$project->name ?? $project->address}}</h2>
              <p>Explore our vast reserve for the best fit.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{ route('public.home') }}">Home</a></li>
            <li>Project Details</li>
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


              <div class="post-img">
                <img title="{{$project->name}}" src="{{ $project->images->first()->img_path??'' }}" alt="{{$project->name}}" class="img-fluid">
              </div>

              {{-- <h2 class="title">{{ $project->name }}</h2> --}}

              <div class="content">
                <p>
                  {!! $project->description !!}
                </p>

                <p>
                  {{ $project->address }}
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
                <p>We are available to clarify your worries</p>
                <form action="{{route('post_message')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="email" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Worries*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Make Enquiry</button>
                </form>
              </div>
            </div><!-- End blog comments -->

            
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio sections-bg my-4 rounded-3">
              <div class="container" data-aos="fade-up">

                <!-- <div class="section-header">
                  <h2>Gallery</h2>
                </div> -->

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                  <div class="row gy-4 portfolio-container">
                    
                    @foreach ($project->images as $img)
                      <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                          <a href="{{ $img->img_path }}" data-gallery="portfolio-gallery-app" class="glightbox"><img title="Property Trust Group LTD; Real Estate, Construction, Business and Logistics"src="{{ $img->img_path }}" class="img-fluid" alt="Property Trust Group LTD; Real Estate, Construction, Business and Logistics"></a>
                          {{-- <div class="portfolio-info">
                            <h4><a title="More Details"></a></h4>
                          </div> --}}
                        </div>
                      </div><!-- End Portfolio Item -->                      
                    @endforeach

                  </div><!-- End Portfolio Container -->

                </div>

              </div>
            </section><!-- End Portfolio Section -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Related Projects</h3>
                <ul class="mt-3">
                  @foreach ($project->service->projects->where('id', '!=', $project->id) as $proj)
                    <li><a href="{{ route('public.project.details', $proj->id) }}">{{ $proj->name }} <span>({{ $proj->address }})</span></a></li>
                    <hr>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->  
@endsection

@extends('showcase.layout')
@section('section')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Projects</h2>
              <p>Some ready-made packages we'have for you.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Projects</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">

          @foreach ($projects->items() as $project)
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img title="{{$project->name}}" src="{{ optional($project->images->first())->img_path??asset('assets/img/blog/blog-1.jpg') }}" alt="{{$project->name}}" class="img-fluid">
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

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection

@extends('dashboard.main')
@section('section')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card py-5 d-flex flex-column align-items-center">
                        <img src="{{ $service->img_path == null ? asset('img/logo1.jpg') : $service->img_path }}" alt="Profile" class="img img-rounded">
                        <h2 class="text-center">{{ $service->name??'' }}</h2>
                        <h6 class="text-center">{{ $service->caption??'null caption' }}</h6>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Details</button>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rest.projects.index', $service->id) }}">Projects <small class="text-danger">({{ $service->projects->count() }})</small></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rest.assets.index', $service->id) }}">Property <small class="text-danger">({{ $service->property->count() }})</small></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rest.services.bookings', $service->id) }}">Bookings</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rest.services.images', $service->id) }}">Gallery</a>
                            </li>
                        </ul>

                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <p class="small fst-italic">{!! $service->description??'' !!}</p>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Name</div>
                                    <div class="col-lg-9 col-md-8">{{ $service->name??'' }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Caption</div>
                                    <div class="col-lg-9 col-md-8">{{ $service->caption??'' }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Category</div>
                                    <div class="col-lg-9 col-md-8">{{ $service->category->name??'' }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Price</div>
                                    <div class="col-lg-9 col-md-8">XAF {{ $service->price??'---' }}</div>
                                </div>

                                <hr>

                                <div class="form-control d-flex flex-wrap">
                                    @foreach ($service->images as $image)
                                        <div class="m-1 position-relative">
                                            <img class="img img-thumbnail" style="height: 7rem; width: auto;" src="{{ $image->img_path }}">
                                        </div>
                                    @endforeach
                                </div>

                            </div>



                        </div><!-- End Bordered Tabs -->
                        <hr>
                        <div class="navbar navbar-inverse">
                            <ul class="nav nav-tabs">

                                <li class="pull-right">
                                    <a class=" btn mx-1 btn-xs btn-outline-primary" href="{{ route('rest.projects.create', $service->id) }}">new project</a>
                                </li>

                                <li class="pull-right">
                                    <a class=" btn mx-1 btn-xs btn-outline-primary" href="{{ route('rest.assets.create', $service->id) }}">new property</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
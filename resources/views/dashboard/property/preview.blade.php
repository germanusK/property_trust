@extends('dashboard.main')
@section('section')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{ $item->images == null ? asset('img/home1.jpg') : $item->images->first()->img_path }}" alt="Profile" class="rounded-circle">
                        <h2>{{ $item->name }}</h2>
                        <h5>{{ $item->address }}</h5>
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
                                <a href="{{ route('rest.assets.edit', $item->id) }}" class="nav-link">Edit Property</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('rest.assets.images', $item->id) }}" class="nav-link">Images</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('rest.assets.delete', $item->id) }}" class="nav-link">Delete</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <p class="small fst-italic">{!! $item->description??'' !!}</p>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Company</div>
                                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Job</div>
                                    <div class="col-lg-9 col-md-8">Web Designer</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Country</div>
                                    <div class="col-lg-9 col-md-8">USA</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                </div>

                                <hr>

                                <div class="form-control d-flex flex-wrap">
                                    @foreach ($item->images as $image)
                                        <div class="m-1 position-relative">
                                            <img class="img img-thumbnail" style="height: 7rem; width: auto;" src="{{ $image->img_path }}">
                                        </div>
                                    @endforeach
                                </div>
                                
                            </div>

                            

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
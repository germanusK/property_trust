@extends('dashboard.main')
@section('section')
    <section class="section profile">
        <div class="row">
            <div class="col-lg-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{ $category->image }}" alt="Profile" class="rounded-circle">
                        <h2>{{ $category->name??'???' }}</h2>
                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        
                        <div class="profile-overview" id="profile-overview">
                            <h5 class="card-title">Related tags</h5>
                            <p class="small fst-italic">{{ $category->description }}</p>


                            <h5 class="card-title">Projects</h5>
                            <div class="row">
                                @foreach ($category->projects()->inRandomOrder()->take(6)->get() as $project)
                                    <div class="col-sm-6 col-xl-4 p-1">
                                        <div class="card">
                                            <img src="{{ $project->images()->first()->img_path??'' }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $project->name??'' }}</h5>
                                                <p class="card-text">{{  $project->address??''  }}</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                @endforeach
                            </div>

                            <div class="card-footer py-2 d-flex justify-content-end">
                                <a class="btn btn-outline-success btn-xs mx-2" href="{{ route('rest.services.index', $category->id) }}">services <span class="text-warning">({{ $category->services->count() }})</span></a>
                                <a class="btn btn-outline-success btn-xs mx-2" href="{{ route('rest.projects.index') }}?catex1={{ $category->id }}">projects <span class="text-warning">({{ $category->projects->count() }})</span></a>
                                <a class="btn btn-outline-success btn-xs mx-2" href="{{ route('rest.assets.index') }}?catex1={{ $category->id }}">assets <span class="text-warning">({{ $category->assets->count() }})</span></a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        @if($category->assets()->count() > 0)
            <div class="row py-2">
                @foreach ($category->assets as $asset)
                    <div class="col-sm-6 col-md-4 col-xl-3 p-1">
                        <div class="card">
                            <img src="{{ $asset->images()->first()->img_path }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->name??'' }}</h5>
                                <p class="card-text">{{  $project->address??''  }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
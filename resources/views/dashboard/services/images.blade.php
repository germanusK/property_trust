@extends('dashboard.main')
@section('section')
     <div class="card">
        <div class="card-body pt-5">
            <!-- Horizontal Form -->
            <h4 class="fw-semibold">{{ $service->name??'' }}</h4>
            <hr>
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-10">
                        <div class="form-control input-images"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gallery</label>
                    <div class="col-sm-10">
                        <div class="form-control row" data-masonry='{"percentPosition": true }'>
                            @foreach ($service->images as $image)
                                <div class="p-1 position-relative image-item col-md-6 col-lg-4 col-xl-3">
                                    <div class="text-center py-2 position-absolute w-100"><input type="checkbox" checked name="old_images[]" value="{{ $image->id }}"></div>
                                    <img class="img img-fluid img-responsive" src="{{ $image->img_path }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-3">Submit</button>
                    <button type="reset" class="btn btn-secondary px-3">Reset</button>
                </div>
            </form><!-- End Horizontal Form -->
{{-- 
            <div class="py-4 row">
                <div class="col-md-4 col-xl-3">@if($service->img_path != null)
                    <img style="width: 6rem; height: 6rem; border-radius: 0.2rem;" class="img img-rounded img-responsive" src="{{ $service->img_path }}">
                @endif</div>
                <div class="col-md-12 col-xl-9">
                @if($service->images()->count() > 0)
                    <div class="d-flex flex-wrap">
                        @foreach ($service->images as $image)
                            <img class="img img-responsive img-rounded" style="width:7rem; height: 7rem; border-radius: 0.2rem;" src="{{ $image->img_path }}">
                        @endforeach
                    </div>
                @endif
                </div>
            </div> --}}
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.input-images').imageUploader();
    </script>
@endsection
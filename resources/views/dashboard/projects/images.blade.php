@extends('dashboard.main')
@section('section')
     <div class="card">
        <div class="card-body pt-5">
            <!-- Horizontal Form -->
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
                        <div class="d-flex flex-wrap">
                            @foreach ($project->images as $image)
                                <div class="position-relative">
                                    <div class="position-absolute w-100 d-flex justify-content-center">
                                        <input type="checkbox" value="{{ $image->id }}" name="old_images[]" checked>
                                    </div>
                                    <img class="img img-thumbnail m-1 bg-light" style="height:7rem; width:auto;" src="{{ $image->img_path }}">
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
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.input-images').imageUploader();
    </script>
@endsection
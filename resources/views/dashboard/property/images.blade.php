@extends('dashboard.main')
@section('section')
     <div class="card">
        <div class="card-body pt-5">
            <!-- Horizontal Form -->
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Add Images</label>
                    <div class="col-sm-10">
                        <div class="form-control input-images"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gallery</label>
                    <div class="col-sm-10">
                        <div class="form-control d-flex flex-wrap">
                            @foreach ($item->images as $image)
                                <div class="m-1 position-relative">
                                    <div class="text-center py-2 position-absolute w-100"><input type="checkbox" checked name="old_images[]" value="{{ $image->id }}"></div>
                                    <img class="img img-thumbnail" style="height: 7rem; width: auto;" src="{{ $image->img_path }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-3">Update</button>
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
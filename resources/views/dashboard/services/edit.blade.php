@extends('dashboard.main')
@section('section')
     <div class="card">
        <div class="card-body pt-5">
            <!-- Horizontal Form -->
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ old('old', $service->name) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Caption</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="caption" value="{{ old('caption', $service->caption??'') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">category</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="category_id">
                        @foreach (\App\Models\Category::orderBy('name')->get() as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $service->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name??'' }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <!-- TinyMCE Editor -->
                        <textarea class="tinymce-editor form-control" name="description" placeholder="Enter property specifications">{!! old('description', $service->description) !!}
                        </textarea>
                        <!-- End TinyMCE Editor -->
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="price" value="{{ old('price', $service->price??'') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
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
        preview = function(event){
            file = event.target.files[0];
            url = URL.createObjectURL(file);
            console.log(url);
            document.getElementById('icon_preview').src = url;
        }
    </script>
@endsection
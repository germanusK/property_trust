@extends('dashboard.main')
@section('section')
<div class="w-full">
    
    <!-- Top Selling -->
    <div class="card py-4">
        <div class="card-body">
            <!-- Vertical Form -->
            <form class="row g-3" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Property Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter property location">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Unit price</label>
                    <input type="number" class="form-control" name="price" placeholder="enter unit price" value="{{ old('price') }}"> 
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Specifications</label>
                    <!-- TinyMCE Editor -->
                    <textarea class="tinymce-editor form-control" name="description" placeholder="Enter property specifications" style="height: 6rem !important;">{!! old('description') !!}
                    </textarea>
                    <!-- End TinyMCE Editor -->
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Images</label>
                    <!-- TinyMCE Editor -->
                    <div class="form-control input-images">
                    </div>
                    <!-- End TinyMCE Editor -->
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5">Save</button>
                    <button type="reset" class="btn btn-secondary px-5">Reset</button>
                </div>
            </form><!-- Vertical Form -->
        </div>
    </div>
    <!-- End Top Selling -->
</div>
@endsection
@section('script')
    <script>
        $('.input-images').imageUploader({label:"Uplaod Images"});
    </script>
@endsection
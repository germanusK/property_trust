@extends('dashboard.main')
@section('section')
<div class="w-full">
    
    <!-- Top Selling -->
    <div class="card py-4">
        <div class="card-body">
            <!-- Vertical Form -->
            <form class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Project Name</label>
                    <input type="text" class="form-control" required name="name" value="{{ old('name') }}">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter property location">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Town</label>
                    <select class="form-control" name="town_id" required>
                        <option value="">select town</option>
                        @foreach ($towns as $town)
                            <option value="{{$town->id}}" {{old('town_id') == $town->id ? 'selected' : ''}}>{{$town->name??''}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Specifications</label>
                    <!-- TinyMCE Editor -->
                    <textarea class="tinymce-editor form-control" name="description" value="{!! old('description') !!}" placeholder="Enter property specifications">
                    </textarea>
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
        $('.input-images').imageUploader();
    </script>
@endsection
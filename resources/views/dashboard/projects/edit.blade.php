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
                    <label for="inputNanme4" class="form-label">Property Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $project->name??'') }}">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address', $project->address??'') }}" placeholder="Enter property location">
                </div>
                <div class="col-12">
                    <label for="service" class="form-label">Service</label>
                    <select class="form-control" name="service_id">
                        <option></option>
                        @foreach (\App\Models\Service::orderBy('name')->get() as $service)
                            <option value="{{ $service->id }}" {{ old('service_id', $project->service_id) == $service->id ? 'selected': '' }}>{{ $service->name??'' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Specifications</label>
                    <!-- TinyMCE Editor -->
                    <textarea class="tinymce-editor form-control" name="description" placeholder="Enter property specifications">{!! old('description', $project->description??'') !!}
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
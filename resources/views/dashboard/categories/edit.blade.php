@extends('dashboard.main')
@section('section')
<div class="w-full">

    <div class="card">
        <div class="card-body pt-4">

            <!-- Floating Labels Form -->
            <form class="row g-3" method="POST">
                @csrf
                <div class="col-xl-6">
                    <div class="form-floating">
                    <input type="text" class="form-control" name="name" value="{{ old('name', $category->name??'')}}" required id="floatingName" placeholder="Name">
                    <label for="floatingName">Name</label>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-floating">
                    <input type="file" accept="image/*" name="image" class="form-control" id="floatingEmail" placeholder="Icon">
                    <label for="floatingEmail">Icon</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                    <textarea class="form-control" placeholder="Tags" name="description" id="floatingTextarea" style="height: 100px;">{{ old('description', $category->description??'') }}</textarea>
                    <label for="floatingTextarea">Tags</label>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>
</div>
@endsection
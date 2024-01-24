@extends('dashboard.main')
@section('section')
<div class="w-full">
    
    <!-- Top Selling -->
    <div class="col-12">
        <div class="card top-selling overflow-auto">

        <div class="card-body pb-0">
            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                    <th scope="col">Icon</th>
                    <th scope="col">Name</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (\App\Models\Category::all() as $cat)
                        <tr>
                            <th scope="row"><a href="#"><img src="{{ asset('uploads/category_images/'.$cat->image??'') }}" alt=""></a></th>
                            <td class="fw-semibold">{{ $cat->name??'' }}</td>
                            <td>{!! $cat->description??'' !!}</td>
                            <td class="fw-bold">
                                <a href="{{ route('rest.categories.edit', $cat->id) }}" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square me-1"></i> edit</a>
                                <a href="{{ route('rest.categories.show', $cat->id) }}" class="btn btn-outline-success btn-sm"><i class="bi bi-pencil-square me-1"></i> details</a>
                                <a href="{{ route('rest.categories.delete', $cat->id) }}" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash me-1"></i> delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        </div>
    </div><!-- End Top Selling -->

</div>
@endsection
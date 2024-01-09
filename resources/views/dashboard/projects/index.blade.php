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
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $proj)
                        <tr>
                            <th scope="row"><a href="#"><img src="{{ $proj->images->first()->img_path }}" alt="" style="width: 3rem; height: 3rem; border-radius: 0.2rem"></a></th>
                            <td class="fw-semibold">{!! $proj->name??'' !!}</td>
                            <td class="fw-semibold">{!! $proj->address??'' !!}</td>
                            <td class="fw-bold">
                                <a href="{{ route('rest.projects.edit', $proj->id) }}" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square me-1"></i> edit</a>
                                <a href="{{ route('rest.projects.show', $proj->id) }}" class="btn btn-outline-success btn-sm"><i class="bi bi-pencil-square me-1"></i> details</a>
                                <a href="{{ route('rest.projects.delete', $proj->id) }}" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash me-1"></i> delete</a>
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
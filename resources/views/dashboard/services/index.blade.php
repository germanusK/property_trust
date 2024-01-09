@extends('dashboard.main')
@section('section')
<div class="w-full">
    
    <!-- Top Selling -->
    <div class="col-12">
        <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <table class="table table-borderless datatable">
                    <thead>
                        <th scope="col">Icon</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </thead>
                    <tbody>
                        @foreach (\App\Models\Service::orderBy('id', 'DESC')->orderBy('name', 'DESC')->get() as $prop)
                            <tr>
                                <th scope="row"><a href="#"><img src="{{ $prop->img_path }}" alt=""></a></th>
                                <td class="fw-semibold">{{ $prop->name??'' }}</td>
                                <td>{!! $prop->description??'' !!}</td>
                                <td class="fw-bold">
                                    <a href="{{ route('rest.services.edit', $prop->id) }}" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square me-1"></i> edit</a>
                                    <a href="{{ route('rest.services.show', $prop->id) }}" class="btn btn-outline-success btn-sm"><i class="bi bi-pencil-square me-1"></i> details</a>
                                    <a href="{{ route('rest.services.delete', $prop->id) }}" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash me-1"></i> delete</a>
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
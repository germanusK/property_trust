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
                        <th scope="col">Tags</th>
                        <th scope="col">Action</th>
                    </thead>
                    <tbody>
                        @foreach (\App\Models\Asset::orderBy('id', 'DESC')->orderBy('name', 'DESC')->get() as $prop)
                            <tr>
                                <th scope="row"><a href="#"><img src="{{ asset('admin_assets') }}/img/product-1.jpg" alt=""></a></th>
                                <td class="fw-semibold">{{ $prop->name??'' }}</td>
                                <td>${{ $prop->price??'' }}</td>
                                <td class="fw-bold">
                                    <button type="button" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square me-1"></i> edit</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-pencil-square me-1"></i> details</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash me-1"></i> delete</button>
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
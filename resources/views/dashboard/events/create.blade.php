@extends('dashboard.main')
@section('section')
    <div class="container-fluid py-4">
        <form method="post" enctype="multipart/form-data">
            <div class="card border-0 shadow-sm">
                <div class="card-header py-2">
                    <div class="row">
                        <span class="col-lg-4"><b>Event name<i class="text-danger">*</i>:</b></span>
                        <div class="col-lg-8"><input type="text" name="name" id="" class="form-control rounded border-top-0 border-left-0 border-right-0" required ></div>
                    </div>
                </div>
                
                <div class="card-body py-2">
                    <div class="row my-2">
                        <div class="col-lg-4">
                            <span class=""><b>Date<i class="text-danger">*</i>:</b></span>
                        <div class=""><input type="date" name="date" id="" class="form-control border-top-0 border-left-0 border-right-0 rounded" required></div>
                        </div>
                        <div class="col-lg-4">
                            <span><b>Start time<i class="text-danger">*</i>:</b></span>
                            <div><input type="time" name="start_time" id="" class="form-control border-top-0 border-left-0 border-right-0 rounded" required></div>
                        </div>
                        <div class="col-lg-4">
                            <span><b>Ending time:</b></span>
                            <div><input type="time" name="stop_time" id="" class="form-control border-top-0 border-left-0 border-right-0 rounded"></div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-4">
                            <span><b>Town:</b></span>
                            <div><input type="text" name="town" id="" class="form-control border-top-0 border-left-0 border-right-0 rounded"></div>
                        </div>
                        <div class="col-lg-8">
                            <span><b>Address:</b></span>
                            <div><input type="text" name="address" id="" class="form-control border-top-0 border-left-0 border-right-0 rounded"></div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-4">
                            <span><b>Featured image:</b></span>
                            <div><input type="file" name="featured_image" accept="image/*" id="" class="form-control border-top-0 border-left-0 border-right-0 rounded"></div>
                        </div>
                        <div class="col-lg-8">
                            <span><b>Links:</b></span>
                            <div><input type="text" name="links" id="" class="form-control border-top-0 border-left-0 border-right-0 rounded"></div>
                        </div>
                    </div>
                    <div class="my-2">
                        <span class=""><b>Caption:</b></span>
                        <div class=""><textarea type="text" name="caption" id="" class="form-control border-top-0 border-left-0 border-right-0 rounded"></textarea></div>
                    </div>
                    <div class="my-2">
                        <span class=""><b>Description:</b></span>
                        <div class=""><textarea type="text" name="description" id="" class="form-control border-top-0 border-left-0 border-right-0 rounded"></textarea></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    
@endsection
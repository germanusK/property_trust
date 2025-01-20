@extends('showcase.layout')
@section('section')
    <div class="container-fluid">
        @if ($profile->status == 1)
            <div class="col-lg-9 col-xl-8 mx-auto my-5 card">
                <div class="card-header text-uppercase text-center text-dark h4">PTG Team Profile</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="container-fluid p-4">
                                <img src="{{$profile->img_url}}" alt="PROFILE IMAGE" class="img img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="container-fluid">
                                <div class="d-flex justify-content-between">
                                    <span class="d-flex flex-column justify-content-center">
                                        <span class="py-1 px-4 d-block @if($profile->status == 1) text-success @else text-danger @endif h4"><b>@if($profile->status == 1) ACTIVE PTG PROFILE @else INACTIVE @endif</b></span>
                                    </span>
                                    <span class="text-white d-block border border-secondary p-2 rounded">{{$qrcode??''}}</span>
                                </div>
                                <hr>
                                <div class="row mb-2 border-bottom border-light">
                                    <div class="col-md-3 text-secondary h6 text-capitalize">name :</div>
                                    <div class="col-md-9 text-dark text-body">{{$profile->name??''}}</div>
                                </div>
                                <div class="row mb-2 border-bottom border-light">
                                    <div class="col-md-3 text-secondary h6 text-capitalize">email :</div>
                                    <div class="col-md-9 text-dark text-body">{{$profile->email??''}}</div>
                                </div>
                                <div class="row mb-2 border-bottom border-light">
                                    <div class="col-md-3 text-secondary h6 text-capitalize">phone :</div>
                                    <div class="col-md-9 text-dark text-body">{{$profile->phone??''}}</div>
                                </div>
                                <div class="row mb-2 border-bottom border-light">
                                    <div class="col-md-3 text-secondary h6 text-capitalize">position :</div>
                                    <div class="col-md-9 text-dark text-body">{{$profile->position??''}}</div>
                                </div>
                                <div class="row mb-2 border-bottom border-light">
                                    <div class="col-md-3 text-secondary h6 text-capitalize">media links :</div>
                                    <div class="col-md-9 text-dark text-body">
                                        @if($profile->media_links != null)
                                            @foreach (json_decode($profile->media_links) as $key => $item)
                                                @if($item != null and $key != 'whatsapp_phone')
                                                    <a href="{{$item}}" class="mr-3"><span class="bi bi-{{$key}}"></span></a>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-danger text-center my-5 h3 text-uppercase">This PTG team profile is not active</div>
        @endif
    </div>
@endsection
@extends('team.main')
@section('section')
    <div class="container-fluid">

        <!-- Left side columns -->
        <div class="col-lg-10 mx-auto card my-5">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-5 d-flex flex-column" style="justify-content: center; align-items:center;">
                <img src="{{$profile->img_url??''}}" alt="UPLOAD A PROFILE PHOTO" class="img img-fluid mx-auto">
              </div>
              <div class="col-lg-7">
                <div class="py-1 d-flex justify-content-end">
                  @if ($profile->status == 1)
                    <strong class=" text-success text-uppercase rounded border-bottom border-success alert-success px-4 py-1"><i>Active</i></strong>
                  @else
                    <strong class=" text-danger text-uppercase rounded border-bottom border-secondary alert-danger px-4 py-1"><i>Passive</i></strong>
                  @endif
                </div>
                <div class="mb-4 py-3 d-flex justify-content-end">
                  {!!$qrcode!!}
                </div>
                <div class="mb-3 border-bottom">
                  <small class="text-secondary text-capitalize">name</small> 
                  <label for="" class="text-dark border-left ml-5 d-block">{{$profile->name??''}}</label>
                </div>
                <div class="mb-3 border-bottom">
                  <small class="text-secondary text-capitalize">email</small>
                  <label for="" class="text-dark border-left ml-5 d-block">{{$profile->email??''}}</label>
                </div>
                <div class="mb-3 border-bottom">
                  <small class="text-secondary text-capitalize">phone</small>
                  <label for="" class="text-dark border-left ml-5 d-block">{{$profile->phone??''}}</label>
                </div>
                <div class="mb-3 border-bottom">
                  <small class="text-secondary text-capitalize">position</small>
                  <label for="" class="text-dark border-left ml-5 d-block">{{$profile->position??''}}</label>
                </div>
                <div class="mb-3 border-bottom">
                  <small class="text-secondary text-capitalize">Media Links</small>
                  <label for="" class="text-dark border-left-5 ml-5 d-block" >
                    @if($profile->media_links != null)
                      @foreach (json_decode($profile->media_links) as $key => $link)
                        @if($link != null)
                          <span class="mr-4 px-1"><a href="{{$link}}"><span class="bi bi-{{$key}}"></span></a> </span>
                        @endif
                      @endforeach
                    @endif
                  </label>
                </div>

              </div>
            </div>
          </div>
        </div><!-- End Left side columns -->
        
    </div>
@endsection

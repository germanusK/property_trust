@extends('team.main')
@section('section')
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card py-5 d-flex flex-column align-items-center">

              <img src="{{ $profile->img_url }}" alt="NO PROFILE PHOTO">
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                {{-- <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li> --}}

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                {{-- <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{ $profile->name??'' }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ $profile->email??'' }}</div>
                  </div>

                </div> --}}

                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="POST" action="{{route('team.edit_profile')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullName" value="{{ old('name', $profile->name) }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{ old('email', $profile->email) }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Position</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="position" type="text" class="form-control" id="Position" value="{{ old('position', $profile->position) }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="tel" class="form-control" id="Position" value="{{ old('phone', $profile->phone??'') }}">
                      </div>
                    </div>
                    

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">image</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="photo" type="file" accept="image/*" class="form-control" id="Position" >
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Media Links</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="mb-2 border-top border-secondary">
                          <small class="text-secondary">twitter</small>
                          <input type="url" name="media_links[twitter]" placeholder="twitter profile link" id="" class="form-control border-light" value="{{old('media_links[twitter]', $media_links->twitter??'')}}">
                        </div>
                        <div class="mb-2 border-top border-secondary">
                          <small class="text-secondary">facebook</small>
                          <input type="url" name="media_links[facebook]" placeholder="facebook profile link" id="" class="form-control border-light" value="{{old('media_links[facebook]', $media_links->facebook??'')}}">
                        </div>
                        <div class="mb-2 border-top border-secondary">
                          <small class="text-secondary">instagram</small>
                          <input type="url" name="media_links[instagram]" placeholder="instagram profile link" id="" class="form-control border-light" value="{{old('media_links[instagram]', $media_links->instagram??'')}}">
                        </div>
                        <div class="mb-2 border-top border-secondary">
                          <small class="text-secondary">telegram</small>
                          <input type="url" name="media_links[telegram]" placeholder="telegram profile link" id="" class="form-control border-light" value="{{old('media_links[telegram]', $media_links->telegram??'')}}">
                        </div>
                        <div class="mb-2 border-top border-secondary">
                          <small class="text-secondary">tiktok</small>
                          <input type="url" name="media_links[tiktok]" placeholder="tiktok profile link" id="" class="form-control border-light" value="{{old('media_links[tiktok]', $media_links->tiktok??'')}}">
                        </div>
                        <div class="mb-2 border-top border-secondary">
                          <small class="text-secondary">linkedin</small>
                          <input type="url" name="media_links[linkedin]" placeholder="linkedin profile link" id="" class="form-control border-light" value="{{old('media_links[linkedin]', $media_links->linkedin??'')}}">
                        </div>
                        <div class="mb-2 border-top border-secondary">
                          <small class="text-secondary">whatsapp number <span class="text-danger">(include country code for international number)</span></small>
                          <input type="tel" name="media_links[whatsapp]" placeholder="whatsapp number" id="" class="form-control border-light" value="{{old('media_links[whatsapp]', $media_links->whatsapp_phone??'')}}">
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="POST" action="{{route('team.change_password')}}">
                    @csrf
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="current_password" type="password" class="form-control" id="currentPassword" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="new_password" type="password" class="form-control" id="newPassword" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirm_new_password" type="password" class="form-control" id="renewPassword" required>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
@endsection
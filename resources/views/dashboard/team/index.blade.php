@extends('dashboard.main')
@section('section')
    <div class="container-fluid">
        <table class="table border datatable">
            <thead class="text-capitalize border-bottom">
                <th class="border-right">Photo</th>
                <th class="border-right">Name</th>
                <th class="border-right">Phone</th>
                <th class="border-right">Position</th>
                <th class="border-right">Media Links</th>
                <th class="border-right">Status</th>
                <th class=""></th>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                    <tr class="border-bottom">
                        <td class="border-right"><img src="{{$profile->img_url??''}}" alt="NONE" srcset="" style="height: 2.5rem; width: 2.5rem; border-radius:0.2rem; margin:0.2rem;"></td>
                        <td class="border-right">{{$profile->name??''}}</td>
                        <td class="border-right">{{$profile->phone??''}}</td>
                        <td class="border-right">{{$profile->position??''}}</td>
                        <td class="border-right">
                            @if($profile->media_links != null)
                            @foreach (json_decode($profile->media_links) as $key => $link)
                                @if($link != null)
                                    <a href="{{$link}}" class="m-1 p-1"><i class="bi bi-{{$key}}"></i></a>
                                @endif
                            @endforeach
                            @endif
                        </td>
                        <td class="border-right">@if($profile->status == 1) <span class="text-primary">ACTIVE</span> @else <span class="text-danger">INACTIVE</span> @endif</td>
                        <td>
                            @if ($profile->status == 1)
                                <a href="{{route('rest.team.deactivate', $profile->id)}}" class="btn btn-sm btn-danger rounded m-1">deactivate</a>
                            @else
                                <a href="{{route('rest.team.activate', $profile->id)}}" class="btn btn-sm btn-primary rounded m-1">activate</a>
                            @endif
                            @if ($profile->mount == 1)
                                <a href="{{route('rest.team.unmount', $profile->id)}}" class="btn btn-sm btn-warning rounded m-1">unmount</a>
                            @else
                                <a href="{{route('rest.team.mount', $profile->id)}}" class="btn btn-sm btn-dark rounded m-1">mount</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
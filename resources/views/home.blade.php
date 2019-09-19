@extends('layouts.app')

@section('content')
  <head>
      <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <div class="row justify-content-center">
    <div class="col-md-8 profile-section">

        @foreach($users as $user)
        <div class="card">
            <div class="card-header">
               <img src="{{asset('/uploads/images')}}/{{$user->image}}" class="img-fluid" alt="">

            </div>

            <div class="card-body">
                <div>Username:</div>
              {{ $user->username }}
              <br>
              <div>Name:</div>
              {{ $user->first_name }}

            </div>

        </div>
        @endforeach
        <br>
    </div>
  </div>
@endsection

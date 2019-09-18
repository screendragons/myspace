@extends('layouts.app')

@section('content')
  <head>
      <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <div class="row justify-content-center">
    <div class="col-md-8 profile-section">

        <div class="card">
            <div class="card-header">
            	<p>Username</p>
            	{{ $users->username }}
              <p>Name</p>
              {{ $users->first_name }}
            </div>
            <div class="card-body">
                {{ $users->image }}

            </div>
        </div>
        <br>
    </div>
  </div>
@endsection

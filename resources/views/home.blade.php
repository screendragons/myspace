@extends('layouts.app')

@section('content')
  <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <div class="row justify-content-center">
          <div class="col-md-8 profile-section">

              <div class="card">
                  <div class="card-header">
                  	<p>Username</p>
                  	{{ $users->username }}
                    <p>Name</p>
                    {{ Auth::user()->first_name }}
                  </div>
                  <div class="card-body">
                      {{ $users->image }}

                  </div>
              </div>
              <br>
          </div>
      </div>
@endsection

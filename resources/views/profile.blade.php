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
                      Hello {{ Auth::user()->first_name }}, welcome back!
                  </div>
                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                      You are logged in!
                      <br>
                      <br>
                      {{-- Liked posts --}}
                      <p>Liked pages:</p>
                      <a href="{{ route('likes') }}" class="btn btn-outline-danger logout upload">
                          Likes
                      </a>
                  </div>
              </div>
              <br>
              <h5>Edit profile</h5>
              <form>
                  <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                      <p>
                        <input type="username" class="form-control" id="exampleInputUsername" placeholder="Username" value="{{ $user->username }}">
                      </p>
                    {{-- <input type="username" class="form-control" id="exampleInputUsername" placeholder="Username"> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFirstname">First name</label>
                    <input type="first_name" class="form-control" id="exampleInputFirst_name" placeholder="First name" value="{{ $user->first_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputLastname">Last name</label>
                    <input type="last_name" class="form-control" id="exampleInputLast_name" placeholder="Last name" value="{{ $user->last_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{ $user->password }}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $user->email }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAddress">Address</label>
                    <input type="address" class="form-control" id="exampleInputAddress" placeholder="Address" value="{{ $user->address }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputZipcode">Zipcode</label>
                    <input type="zipcode" class="form-control" id="exampleInputZipcode" placeholder="Zipcode" value="{{ $user->zipcode }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputImage">Image</label>
                   {{--  <input type="file" name="myFile" class="form-control" id="exampleInputImage" placeholder="Upload here your image" value="{{ $user->image }}"> --}}
                    <img src="{{ asset('/uploads/images/'. $user->image) }}" style="width: 150px; height: 150px; border-radius: 50%; display: block; margin-left: auto; margin-right: auto;" class="card-img-top">
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <label>Update Profile Image</label>
                        <input type="file" name="image">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="submit" class="pull-right btn btn-sm btn-primary">
                    </form>
                  </div>
                  <form>
                    <label for="exampleInputImage">Relationship status</label><br>
                    <input type="checkbox" name="single" value="single">Single<br>
                    <input type="checkbox" name="in relationship" value="in relationship">In relationship<br>
                    <input type="submit" value="Submit" class="btn btn-primary">
                  </form>
              </form>
              <br>
              <br>
          </div>
      </div>
@endsection

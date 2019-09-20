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
                      Hello {{ $users->first_name }}, welcome back!
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

                <div class="form-group">
                  <label for="exampleInputImage">Image</label>
                 {{--  <input type="file" name="myFile" class="form-control" id="exampleInputImage" placeholder="Upload here your image" value="{{ $userss->image }}"> --}}
                  <img src="{{ asset('/uploads/images/'. $users->image) }}" style="width: 150px; height: 150px; border-radius: 50%; display: block; margin-right: auto;" class="card-img-top">
                  <form enctype="multipart/form-data" action="/profile" method="POST">
                      <label>Update profile image</label>
                      <input type="file" name="image">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                      <input type="submit" class="pull-right btn btn-sm btn-primary">
                  </form>


                </div>
                <form method="POST" action="{{ route('profile.update',[$users->id]) }}">
                  <div class="form-group">
                    <label for="exampleInputuserssname">usersname</label>
                        <input type="usersname" class="form-control" id="exampleInputuserssname" placeholder="usersname" value="{{ $users->username }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFirstname">First name</label>
                    <input type="first_name" class="form-control" id="exampleInputFirst_name" placeholder="First name" value="{{ $users->first_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputLastname">Last name</label>
                    <input type="last_name" class="form-control" id="exampleInputLast_name" placeholder="Last name" value="{{ $users->last_name }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{ $users->password }}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $users->email }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAddress">Address</label>
                    <input type="address" class="form-control" id="exampleInputAddress" placeholder="Address" value="{{ $users->address }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputZipcode">Zipcode</label>
                    <input type="zipcode" class="form-control" id="exampleInputZipcode" placeholder="Zipcode" value="{{ $users->zipcode }}">
                  </div>

                  {{-- <form>
                    <label for="exampleInputImage">Relationship status</label><br>
                    <input type="checkbox" name="single" value="single">Single<br>
                    <input type="checkbox" name="in relationship" value="in relationship">In relationship<br>
                  </form> --}}
                  <input type="submit" value="Submit" class="btn btn-primary">
              </form>
              <br>
              <br>
          </div>
      </div>
@endsection

@extends('layouts.app')

@section('content')
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
                      <input type="username" class="form-control" id="exampleInputUsername" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFirstname">First name</label>
                      <input type="first_name" class="form-control" id="exampleInputFirst_name" placeholder="First name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputLastname">Last name</label>
                      <input type="last_name" class="form-control" id="exampleInputLast_name" placeholder="Last name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress">Address</label>
                      <input type="address" class="form-control" id="exampleInputAddress" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputZipcode">Zipcode</label>
                      <input type="zipcode" class="form-control" id="exampleInputZipcode" placeholder="Zipcode">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputImage">Image</label>
                      <input type="file" name="myFile" class="form-control" id="exampleInputImage" placeholder="Upload here your image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAddress1">Relationship status</label>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Single</a></li>
                                <li><a href="#">In relationship</a></li>
                            </ul>
                       </div>
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
                <br>
            </div>
        </div>
@endsection

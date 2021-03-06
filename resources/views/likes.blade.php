@extends('layouts.app')

@section('content')
	<head>
	    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	</head>
	<div>
		Hier komen de likes te staan
		<div class="row justify-content-center">
		  <div class="col-md-8 profile-section">
		  @foreach($users as $user)
		    <div class="card" style="width: 18rem;">
		      <img src="{{asset('/uploads/images')}}/{{$user->image}}" class="img-fluid" alt="">
		      <div class="card-body">
		        <h5 class="card-title">{{ $user->username }}</h5>
		        <p class="card-text"> {{ $user->first_name }} {{ $user->last_name }}</p>
		      </div>
		    </div>
		  </div>
		<div>
		@endforeach
	</div>

@endsection

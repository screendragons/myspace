@extends('layouts.app')

@section('content')
@include('partials.header')
  <head>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <div class="container">
    <form {{-- action="/action_page.php" --}}>
      <label for="firstname">First Name</label><br>
      <input type="text" id="firstname" name="firstname" placeholder="Your name.."><br>

      <label for="lastname">Last Name</label><br>
      <input type="text" id="lastname" name="lastname" placeholder="Your last name.."><br>

      <label for="country">Country</label><br>
      <select id="country" name="country"><br>
        <option value="the netherlands">The Netherlands</option>
        <option value="belgium">Belgium</option>
        <option value="germany">Germany</option>
      </select><br>

      <label for="subject">Subject</label><br>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br>

      <input type="submit" value="Submit">
    </form>
  </div>
@endsection

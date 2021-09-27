@extends('template');

@section('title', 'Forgot Password')

@section('content');
<link rel="stylesheet" type="text/css" href="{!! asset('css/login.css') !!}">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Forgot Password</h1>
      <p>Please Enter your Email Address to request a password reset</p>
    </div>

    <!-- Login Form -->
    <form action="{{ route('sendemail') }}" method="POST">
    @csrf

	    {{-- Jika password salah --}}
	    @if ($message = Session::get('error'))
		    <div class="alert alert-danger alert-block mb-3">
		        <button type="button" class="close" data-dismiss="alert">×</button>    
		        {{ $message }}
		    </div>
			@endif

      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      @if ($errors->has('email'))<br><small class="text-danger" role="alert">{{ $errors->first('email') }}</small>@endif
      <input type="submit" class="fadeIn fourth" value="Submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <br>
      <a class="underlineHover" href="{{ route('register') }}">Register</a>
      <br>
      <a class="underlineHover" href="{{ route('login') }}">Login</a>
    </div>

  </div>
</div>
@endsection
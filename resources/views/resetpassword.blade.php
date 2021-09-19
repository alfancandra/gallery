@extends('template');

@section('content');
<link rel="stylesheet" type="text/css" href="{!! asset('css/login.css') !!}">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Reset Password</h1>
    </div>

    <!-- Login Form -->
    <form action="{{route('newpassword', ['userToken' => $token, 'timestamp' => $timestamp])}}" method="POST">
    @csrf

	    {{-- Jika password salah --}}
	    @if ($message = Session::get('error'))
		    <div class="alert alert-danger alert-block mb-3">
		        <button type="button" class="close" data-dismiss="alert">×</button>    
		        {{ $message }}
		    </div>
			@endif

      <input type="password" id="login" class="fadeIn second" name="password" placeholder="New Password">
      <input type="password" id="password" class="fadeIn third" name="password_confirmation" placeholder="Confirm New Password">
      @if ($errors->has('password'))<br><small class="text-danger" role="alert">{{ $errors->first('password') }}</small>@endif
      <input type="submit" class="fadeIn fourth" value="Reset">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <br>
      <a class="underlineHover" href="{{ route('register') }}">Register</a>
      <br>
      <a class="underlineHover" href="{{ route('forgotpassword') }}">Forgot Password?</a>
    </div>

  </div>
</div>
@endsection
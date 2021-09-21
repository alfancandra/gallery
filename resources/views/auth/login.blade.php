@extends('template');

@section('content');
<link rel="stylesheet" type="text/css" href="{!! asset('css/login.css') !!}">
<nav style="background: #B5B5B5;opacity:0.5">
  <div class="logo" style="color:black">
      <a href="{{ url('/') }}">High<em>way</em></a>
  </div>
</nav>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>LOGIN</h1>
    </div>

    <!-- Login Form -->
    <form action="{{ route('storelogin') }}" method="POST">
    @csrf

	    {{-- Jika password salah --}}
	    @if ($message = Session::get('error'))
		    <div class="alert alert-danger alert-block mb-3">
		        <button type="button" class="close" data-dismiss="alert">×</button>    
		        {{ $message }}
		    </div>
			@endif

	    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block mb-3">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            {{ $message }}
        </div>
      @endif

      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      @if ($errors->has('email'))<br><small class="text-danger" role="alert">{{ $errors->first('email') }}</small>@endif
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      @if ($errors->has('password'))<br><small class="text-danger" role="alert">{{ $errors->first('password') }}</small>@endif
      <input type="submit" class="fadeIn fourth" value="Log In">
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
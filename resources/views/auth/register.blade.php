@extends('template');

@section('content');
<link rel="stylesheet" type="text/css" href="{!! asset('css/login.css') !!}">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>REGISTER</h1>
    </div>

    <!-- Login Form -->
    <form action="{{ route('storeregister') }}" method="POST">
      @csrf
      <input type="text" id="login" class="fadeIn second" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}">

      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      @if ($errors->has('email'))<br><small class="text-danger" role="alert">{{ $errors->first('email') }}</small>@endif

      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">

      <input type="text" class="fadeIn third" name="hp" placeholder="Nomor Hp" value="{{ old('hp') }}"> 
      <input type="text" id="login" class="fadeIn second" name="institusi" placeholder="Institusi" value="{{ old('institusi') }}">
      <input type="submit" class="fadeIn fourth" value="Register">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="{{ route('forgotpassword') }}">Forgot Password?</a>
      <br>
      <a class="underlineHover" href="{{ route('login') }}">Login</a>
    </div>

  </div>
</div>
@endsection
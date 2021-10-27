<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pameran Arsitektur UAJY - @yield('title')</title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png') }">
        @if(request()->route()->getName() != "usr.profile")
            <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
        @endif
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontAwesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/light-box.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/templatehome.css') }}">
        

        <!--<link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">-->

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

@php 
$background = '';
$color = '';
if(request()->route()->getName() == 'login' || request()->route()->getName() == 'register' || request()->route()->getName() == 'forgotpassword'){
    $background = 'bg-image';
    $color = '';
}else{
    $background = '';
    $color = 'background:#000';
}
@endphp
<body class="{{ $background }}" style="{{ $color }}">
    <nav>
        <div class="logo" style="z-index: -1">
            <a href="{{ url('/') }}">Pameran Arsitektur UAJY</a>
        </div>
        @if(request()->route()->getName() != "usr.profile")
            <div class="menu-icon">
            <span></span>
        @endif
      </div>
    </nav>
    <section class="overlay-menu">
        <div class="container">
          <div class="row">
            <div class="main-menu">
                <ul>
                    <span>- Category -</span>
                    <hr>
                    @php
                        $category = App\Models\Category::where('active',1)->get();
                    @endphp
                    @foreach ($category as $cat)
                      <li>
                          <a href="{{ url('category/'.$cat->id) }}">{{ $cat->category }}</a>
                      </li>
                    @endforeach
                    <hr>
                    @if(!Auth::user())
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    @if(Auth::user()->role_id==1)
                    <li>
                        <a href="{{ route('adm.dashboardadmin') }}">Admin Page</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('usr.profile') }}">Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}">Logout</a>
                    </li>
                    @endif
                </ul>
                {{-- <p>BY SHIPPU.</p> --}}
                <p>- Pameran Arsitektur UAJY -</p>
            </div>
          </div>
        </div>
      </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.jscroll.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('content')
    

    
</body>
</html>
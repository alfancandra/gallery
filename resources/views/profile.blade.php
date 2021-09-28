@extends('template')

@section('title', 'Profile')

@section('content')
@php    
if(!empty(Auth::user()->image)){
    $photo = '/img/user/'.Auth::user()->image;
}else{
    $photo = '/img/user/user.png';
}
@endphp
<link rel="stylesheet" href="{!! asset('css/profile.css') !!}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container-fluid mt-5">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block mb-3 text-center"> 
                                {{ $message }}
                            </div>
                        @endif
                    <form action="{{ route('usr.updateprofile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="{{ asset($photo) }}" id="preview-image-before-upload" name="preview-image-before-upload" alt="Maxwell Admin">
                            </div>
                            <div class="small font-italic text-muted mb-2">{{ __('JPG or PNG, no more than 2 MB') }}</div>
                                <label class="btn btn-secondary lift" type="button" for="image">{{ __('Choose Photo') }}</label>
                                <input id="image" name="image" type="file" accept="image/x-png,image/jpeg" style="display: none;">
                                <br>
                                @if ($errors->has('image'))<small class="text-danger" role="alert">{{ $errors->first('image') }}</small>@endif
                            <hr>
                            <h5 class="user-name mt-3">{{ Auth::user()->name }}</h5>
                            <h6 class="user-email mb-2">{{ Auth::user()->email }}</h6>
                            <h6 class="user-email">{{ Auth::user()->hp }}</h6>
                        </div>
                        <div class="about">
                            <h5>{{ Auth::user()->institusi }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Personal Details</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" name="name" class="form-control" id="fullName" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Institusi</label>
                                <input type="text" name="institusi" class="form-control" id="website" value="{{ Auth::user()->institusi }}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Nomor Hp</label>
                                <input name="hp" type="text" class="form-control" id="website" value="{{ Auth::user()->hp }}">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mt-3 mb-2 text-primary">Change Password</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Street">Current Password</label>
                                <input type="password" name="curpassword" class="form-control">
                            </div>
                            @if(session()->has('curpassword'))<p class="text-danger">{{session('curpassword')}}</p>@endif
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="sTate">New Password</label>
                                <input type="password" name="password" class="form-control" id="sTate">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="zIp">Confirm New Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="zIp">
                            </div>
                            @if(session()->has('password'))<p class="text-danger">{{session('password')}}</p>@endif
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <a href="{{ route('usr.profile') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function (e) {
        $('#image').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@endsection
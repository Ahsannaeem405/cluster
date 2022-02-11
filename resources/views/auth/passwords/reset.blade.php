
@php
//@dd($cluster_id);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>

<title>Login | Sign up</title>

<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Theme Font -->
<link rel="preload" type="text/css" href="{{asset('css/theme-font.min.css')}}" as="style">

<!-- Bootstrap CSS -->

<link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap.css')}}">

<!-- Main Styles CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('css/main.min.css')}}">

<!-- Main RTL CSS -->
<!--<link rel="stylesheet" type="text/css" href="{{asset('css/rtl.min.css')}}">-->

<!-- WebP Safari Support -->
<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
<script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>

</head>

<body >

<div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row justify-content-center ">
        <div class="col-lg-6 col-md-6 bg-white py-5 px-5">
            <div class="forgot">
                <h2>Forgot your password?</h2>
                <p>Change your password in three easy steps. This will help you to secure your password!</p>
               
            </div>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
             
                <div class="form-group label-floating">
                    <label class="control-label">Your Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group label-floating">
						<label class="control-label">{{ __('Password') }}</label>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="form-group label-floating">
						<label class="control-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					</div>
                      
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>           
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var webpMachine = new webpHero.WebpMachine()
    webpMachine.polyfillDocument()
});


</script>
<script src="{{asset('js/jQuery/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('js/libs/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('js/libs/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/libs/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/libs/material.min.js')}}"></script>
<script src="{{asset('js/libs/selectize.min.js')}}"></script>
<script src="{{asset('js/libs/moment.min.js')}}"></script>
<script src="{{asset('js/libs/daterangepicker.min.js')}}"></script>
<script src="{{asset('js/libs/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/libs/ajax-pagination.min.js')}}"></script>
<script src="{{asset('js/libs/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/libs-init/libs-init.js')}}"></script>

<script src="{{asset('Bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>


<!-- SVG icons loader -->
<script src="{{asset('js/svg-loader.js')}}"></script>
<!-- /SVG icons loader -->

</body>

</html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script>
    $(document).ready(function() {
    $user_val=$('.event_value').val();
    //alert($user_val);
    if($user_val == 'event')
    {
        $('#event').show();
        $('#cluster').hide();
        $(".eventMultiple").attr("required", "true");



    }else{
        $('#event').hide();
        $(".clusterMultiple").attr("required", "true");


    }

    $('#member').click(function(){
    $('#cluster').show();
    $('#event').hide();
    $(".clusterMultiple").attr("required", "true");
    });
    
    $('#user').click(function(){
    $('#cluster').hide();
    $('#event').show();
    $(".eventMultiple").attr("required", "true");

    });

$('.clusterMultiple').select2();
$('.eventMultiple').select2();
});
</script>

{{-- 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

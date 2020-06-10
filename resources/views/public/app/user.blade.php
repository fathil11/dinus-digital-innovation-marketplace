@extends('layouts.public-app')
@section('content')

@include('section.app.header-main', ['scrollShow' => false])

<div class="page-content header-clear-medium">

    <div class="card card-style">
        <div class="d-flex content">
            <div class="flex-grow-1">
                <div>
                    <h1 class="font-700 mb-1">Fathil Arham</h1>
                    <p class="mb-0 pb-1 pr-3">
                        Edit your Profile Settings here and apply.
                    </p>
                </div>
            </div>
            <div>
                <img src="images/empty.png" data-src="{{ asset('images/app/user/profile/1.jpg') }}" width="80"
                    class="rounded-circle mt- shadow-xl preload-img">
            </div>
        </div>
    </div>

    <div class="card card-style">
        <div class="content mb-0">
            <h2>Basic Information</h2>
            <p class="mb-5">
                Edit your basic information here.
            </p>
            <div class="input-style input-style-2 has-icon input-required">
                <i class="input-icon fa fa-user"></i>
                <span class="color-highlight input-style-1-active">Name</span>
                <em>(required)</em>
                <input type="name" class="form-control" value="Fathil Arham">
            </div>
            <div class="input-style input-style-2 has-icon input-required mt-4">
                <i class="input-icon fa fa-at"></i>
                <span class="color-highlight input-style-1-active">Email Address</span>
                <em>(required)</em>
                <input type="email" class="form-control" value="fathil.arham@gmail.com">
            </div>
            <div class="input-style input-style-2 has-icon input-required mt-4">
                <i class="input-icon fa fa-map-marker"></i>
                <span class="color-highlight input-style-1-active">Location</span>
                <em>(required)</em>
                <input type="text" class="form-control" value="Semarang, Indonesia">
            </div>
            <div class="input-style input-style-2 has-icon input-required mt-4">
                <i class="input-icon fa fa-phone"></i>
                <span class="color-highlight input-style-1-active">Phone Number</span>
                <em>(required)</em>
                <input type="phone" class="form-control" value="+628 222 5210 125">
            </div>
            <a href="#"
                class="btn btn-full bg-blue2-light btn-m text-uppercase rounded-sm shadow-l mb-3 mt-4 font-900">Save
                Basic Information</a>
        </div>
    </div>

    <div class="card card-style">
        <div class="content mb-0">
            <h2 class="mb-0">Account Security</h2>
            <p class="mb-5">
                Activate options or set different elements here that are different from basic fields.
            </p>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight input-style-1-active">Password</span>
                <em>(required)</em>
                <input type="password" class="form-control" placeholder="" value="password here">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight input-style-1-active">Confirm Password</span>
                <em>(required)</em>
                <input type="password" class="form-control" placeholder="" value="password here">
            </div>
            <a href="#"
                class="btn btn-full bg-blue2-light btn-m text-uppercase rounded-sm shadow-l mb-3 mt-4 font-900">Save
                Password</a>
        </div>
    </div>

</div>
<!-- End of Page Content-->

{{-- Login Popup Section --}}
@include('section.app.login-popup')

{{-- Register Popup Section --}}
@include('section.app.register-popup')

{{-- PWA Install Popup Section --}}
{{-- @include('section.app.pwa-install-popup') --}}

@endsection

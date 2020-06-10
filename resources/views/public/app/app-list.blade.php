@extends('layouts.public-app')

@section('content')

@include('section.app.header-main', ['scrollShow' => false])

<div class="page-content header-clear-medium">

    @include('section.app.topic-slider')

    @include('section.app.app-list', ['title' => $platform])

    @include('section.app.card-contribution')

    @include('section.app.footer')

</div>
<!-- End of Page Content-->

{{-- Login Popup Section --}}
@include('section.app.login-popup')

{{-- Register Popup Section --}}
@include('section.app.register-popup')

{{-- PWA Install Popup Section --}}
{{-- @include('section.app.pwa-install-popup') --}}

@endsection

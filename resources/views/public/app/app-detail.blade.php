@extends('layouts.public-app')

@section('content')

@include('section.app.header-secondary', ['scrollShow' => true])

<div class="page-content">

    <div class="card">
        <img class="img-fluid" src="{{ asset('images/app/apps/header/10.jpg') }}" alt="" srcset="">
    </div>


    <div class="content px-1">
        <h1 class="font-40 font-900 line-height-xl mt-4">
            Dinus Virtual Tour
        </h1>
        <p>
            <i class="fa fa-tag font-11 mr-2"></i>
            Mobile Template & PWA
        </p>
        <div class="d-flex">
            <div class="flex-grow-1">
                <span class="font-11">
                    Ratings & Reviews
                </span>
                <p class="mt-n2">
                    <strong class="color-theme pr-2">4.9</strong>
                    <i class="fa fa-star color-yellow1-dark"></i>
                    <i class="fa fa-star color-yellow1-dark"></i>
                    <i class="fa fa-star color-yellow1-dark"></i>
                    <i class="fa fa-star color-yellow1-dark"></i>
                    <i class="fa fa-star color-yellow1-dark"></i>
                </p>
            </div>
            <div class="flex-shrink-1">
                <a target="_blank" href="https://tour.dinus.ac.id"
                    class="btn btn-full btn-s mb-3 mr-3 font-900 text-uppercase rounded-sm shadow-l bg-blue2-light"><i
                        class="fa fa-globe mr-1"></i> Visit
                    Now</a>
            </div>
        </div>
    </div>

    <div class="content mb-n2">
        <div class="snapshot-slider owl-carousel owl-no-dots">
            <div class="item">
                <div class="card rounded-m shadow-l">
                    <img src="{{ asset('images/app/apps/snapshots/1.jpg') }}" alt="" height="200v">
                </div>
            </div>

            <div class="item">
                <div class="card rounded-m shadow-l">
                    <img src="{{ asset('images/app/apps/snapshots/3.jpg') }}" alt="" height="200v">
                </div>
            </div>

            <div class="item">
                <div class="card rounded-m shadow-l">
                    <img src="{{ asset('images/app/apps/snapshots/2.jpg') }}" alt="" height="200v">
                </div>
            </div>

            <div class="item">
                <div class="card rounded-m shadow-l">
                    <img src="{{ asset('images/app/apps/snapshots/4.jpg') }}" alt="" height="200v">
                </div>
            </div>
        </div>
    </div>

    <div class="card card-overflow card-style">
        <div class="content">
            <p>
                Tour Virtual Univeritas Dian Nuswantoro, Berkunjung di udinus secara virtual tanpa terhalang
                ruang dan waktu. Ayo bergabung dengan kami.
            </p>

            <div class="row mb-0">
                <div class="col-4">
                    <span class="font-11">Visitors</span>
                    <p class="mt-n2 mb-3">
                        <strong class="color-theme">1000+</strong>
                    </p>
                </div>
                <div class="col-4">
                    <span class="font-11">Reviews</span>
                    <p class="mt-n2 mb-3">
                        <strong class="color-theme">615</strong>
                    </p>
                </div>
                <div class="col-4">
                    <span class="font-11">Rating</span>
                    <p class="mt-n2 mb-3">
                        <strong class="color-theme">4.9</strong>
                    </p>
                </div>
            </div>

            <div class="divider mt-3"></div>

            <div class="d-flex">
                <div class="flex-grow-1">
                    <span class="font-11">Help grow up this system </span>
                    <p class="mt-n2">
                        <strong class="color-theme">Share or Like</strong>
                    </p>
                </div>
                <div class="flex-shrink-1 mt-1">
                    <a href="#" data-menu="menu-share" class="icon icon-xs rounded-xl shadow-m ml-2 bg-blue2-dark"><i
                            class="fa fa-share-alt"></i></a>
                    <a href="#" data-menu="menu-share" class="icon icon-xs rounded-xl shadow-m ml-2 bg-red2-dark"><i
                            class="fa fa-heart"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h2>App Reviews</h2>
            <p>
                Your review help the developer to update this app.
            </p>
        </div>

        <div class="content">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <h1 class="float-left fa-4x font-900 mr-3">5.00</h1>
                    <h5 class="font-11 font-500 mb-n2 mt-n1">average rating</h5>
                    <span>
                        <i class="fa fa-star color-yellow1-dark"></i>
                        <i class="fa fa-star color-yellow1-dark"></i>
                        <i class="fa fa-star color-yellow1-dark"></i>
                        <i class="fa fa-star color-yellow1-dark"></i>
                        <i class="fa fa-star color-yellow1-dark"></i>
                    </span>
                </div>
                <div>
                    <h6 class="mb-0 text-right">Azam Fatim</h6>
                    <p class="font-10 mb-0 mt-n1 opacity-40 text-right">21th March 2025</p>
                </div>
            </div>
            <p class="mt-3">
                Keren banget nih aplikasinya hehe. Bisa jalan jalan.
            </p>
        </div>

        <div class="divider divider-margins mb-3"></div>

        <div class="content">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <h1 class="float-left fa-4x font-900 mr-3">3.2</h1>
                    <h5 class="font-11 font-500 mb-n2">average rating</h5>
                    <span>
                        <i class="fa fa-star color-yellow1-dark"></i>
                        <i class="fa fa-star color-yellow1-dark"></i>
                        <i class="fa fa-star color-yellow1-dark"></i>
                        <i class="fa fa-star color-yellow1-dark"></i>
                        <i class="fa fa-star color-yellow1-dark"></i>
                    </span>
                </div>
                <div>
                    <h6 class="mb-0 text-right">Tio Karisma</h6>
                    <p class="font-10 mb-0 mt-n1 opacity-40 text-right">21th March 2025</p>
                </div>
            </div>
            <p class="mt-3">
                Masih perlu perbaikan di hp IPhone nih, sepertinya kurang responsive.
            </p>
        </div>
    </div>

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

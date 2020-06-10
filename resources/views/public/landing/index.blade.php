@extends('layouts.public-landing')
@section('title', 'DDIM')
@section('content')
<!-- Hero Start -->
<section class="bg-half-170 border-bottom agency-wrapper d-table w-100" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 order-1 order-md-2">
                <div class="title-heading mt-4 ml-lg-5">
                    <h1 class="heading mb-3"><span class="text-primary">DDIM</span>
                        Dinus Digital Innovation Marketplace</h1>
                    <p class="para-desc text-muted">A marketplace that stores a lot of digital innovation apps
                        created by Dian Nuswantoro University students.</p>
                    <div class="watch-video mt-4 pt-2">
                        <a href="{{ url('/app') }}" class="btn btn-primary d-none d-md-inline">Explore apps
                            <i class="mdi mdi-chevron-right"></i></a>
                        <!-- <a href="http://vimeo.com/99025203" class="video-play-icon watch text-dark mb-2 ml-2"><i
                                    class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle text-white position-relative play play-iconbar"></i>
                                WATCH VIDEO</a> -->
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-0 pt-md-2 mt-sm-0 pt-sm-0">
                <img src="{{ asset('images/landing/illustrations/working_with_computer.svg') }}" class="img-fluid"
                    alt="">
            </div>
        </div>

        <div class="row d-inline d-md-none">
            <div class="col-12 text-center mt-3">
                <a href="{{ url('/app') }}" class="btn btn-primary">Explore apps
                    <i class="mdi mdi-chevron-right"></i></a>
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<section class="section bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white para-dark">Start connecting your digital innovation with the world.</h2>
            </div>
        </div>
    </div>
</section>

<!-- Platform Section -->
<section class="section" id="platform">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-3">
                <h1 class="title mb-4">Platform</h1>
            </div>

            <div class="col-md-4">
                <div class="card course-feature text-center rounded shadow border-0">
                    <div class="card-body py-5">
                        <div class="icon">
                            <img src="{{ asset('images/landing/icons/cloud.svg') }}" class="avatar avatar-small" alt="">
                        </div>

                        <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark">Web</a>
                        </h4>
                        <p class="text-muted">Web platform apps including Web Apps, Web Services, etc</p>
                        <a href="/app/web" class="text-primary read-more">Explore Web Apps <i
                                class="mdi mdi-chevron-right"></i></a>
                        <img src="{{ asset('images/landing/icons/cloud.svg') }}" class="full-img" height="300" alt="">
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4">
                <div class="card course-feature text-center overflow-hidden rounded shadow border-0">
                    <div class="card-body py-5">
                        <div class="icon">
                            <img src="{{ asset('images/landing/icons/device.svg') }}" class="avatar avatar-small"
                                alt="">
                        </div>

                        <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark">Mobile</a></h4>
                        <p class="text-muted">Mobile platform apps including Android apps,IOS apps, etc.</p>
                        <a href="/app/mobile" class="text-primary read-more">Explore Mobile Apps <i
                                class="mdi mdi-chevron-right"></i></a>
                        <img src="{{ asset('images/landing/icons/device.svg') }}" class="full-img" height="300" alt="">
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-4">
                <div class="card course-feature text-center overflow-hidden rounded shadow border-0">
                    <div class="card-body py-5">
                        <div class="icon">
                            <img src="{{ asset('images/landing/icons/tv.svg') }}" class="avatar avatar-small" alt="">
                        </div>

                        <h4 class="mt-3"><a href="javascript:void(0)" class="title text-dark">Desktop</a>
                        </h4>
                        <p class="text-muted">Desktop apps including Window, MacOS, Linux apps, etc. </p>
                        <a href="/app/desktop" class="text-primary read-more">Explore Desktop Apps <i
                                class="mdi mdi-chevron-right"></i></a>
                        <img src="{{ asset('images/landing/icons/tv.svg') }}" class="full-img" height="300" alt="">
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</section>
<!--end container-->
<!-- Category Start -->
<section class="section" id="category">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <div class="mb-4">
                    <h1 class="title">Category</h1>
                    <p class="text-muted para-desc mx-auto mb-0">Help you find the suitable apps in <span
                            class="text-primary font-weight-bold">DDIM</span> based on your category.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-monitor fea icon-ex-md text-primary">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        </svg>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Business</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-heart fea icon-ex-md text-primary">
                            <polyline points="4 14 10 14 10 20" />
                            <polyline points="20 10 14 10 14 4" />
                            <line x1="14" y1="10" x2="21" y2="3" />
                            <line x1="3" y1="21" x2="10" y2="14" />
                        </svg>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Communication</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-eye fea icon-ex-md text-primary">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                        </svg>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Education</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bold fea icon-ex-md text-primary">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Entertainment</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-feather fea icon-ex-md text-primary">
                            <line x1="12" y1="1" x2="12" y2="23" />
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Financial</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-code fea icon-ex-md text-primary">
                            <path d="M18 8h1a4 4 0 0 1 0 8h-1" />
                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />
                            <line x1="6" y1="1" x2="6" y2="4" />
                            <line x1="10" y1="1" x2="10" y2="4" />
                            <line x1="14" y1="1" x2="14" y2="4" />
                        </svg>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Drink & Food</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-user-check fea icon-ex-md text-primary">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                        </svg>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Health & Fitness</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-git-merge fea icon-ex-md text-primary">
                            <circle cx="12" cy="12" r="7" />
                            <polyline points="12 9 12 12 13.5 13.5" />
                            <path
                                d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83" />
                        </svg>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Lifestyle</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="media key-feature align-items-center p-3 rounded shadow">
                    <div class="icon text-center rounded-circle mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings fea icon-ex-md text-primary">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                        </svg>
                    </div>
                    <div class="media-body">
                        <h4 class="title mb-0">Shoping</h4>
                    </div>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection

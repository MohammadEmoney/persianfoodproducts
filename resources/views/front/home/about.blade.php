@extends('layouts.main')

@section('content')
@include('layouts.partials.header')
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">{{ __('About') }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto"><p class="lead">{{ __('messages.about') }}</p></div>
            <div class="col-lg-4 me-auto"><p class="lead">{{ __('messages.about_2') }}</p></div>
        </div>
        <!-- About Section Button-->
        {{-- <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                <i class="fas fa-download me-2"></i>
                Free Download!
            </a>
        </div> --}}
    </div>
</section>
<!-- Mission Section-->
<section class="page-section mb-0" id="mission">
    <div class="container">
        <!-- Mission Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary">{{ __('Our Mission') }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Mission Section Content-->
        <div class="text-center mt-4">
            <p class="lead">{{ __('messages.mission') }}</p>
        </div>
        <!-- Mission Section Button-->
    </div>
</section>

<!-- Activity Section-->
<section class="page-section bg-primary text-white mb-0" id="activity">
    <div class="container">
        <!-- Activity Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">{{ __('Fields Of Activity') }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Activity Section Content-->
        <div class="text-center mt-4">
            <p class="lead">{{ __('messages.activity') }}</p>
        </div>
        <!-- Activity Section Button-->
    </div>
</section>
@endsection

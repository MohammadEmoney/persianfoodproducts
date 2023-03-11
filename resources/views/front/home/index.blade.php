@extends('layouts.main')

@section('content')
@include('layouts.partials.header')
<section class="page-section portfolio" id="search">

    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('Search products') }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <form action="{{ route('products.search') }}" class="input-group rounded w-50">
                <input type="search" class="form-control rounded" name="search"
                placeholder="{{ __('Search') }}" aria-label="Search" aria-describedby="search-addon" />
                <button type="submit" class="input-group-text border-0" id="search-addon">
                  <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</section>
@endsection

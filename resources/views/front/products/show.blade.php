@extends('layouts.main')

@section('title', $title = $product->name)

@section('content')
    @include('layouts.partials.header')
    <section class="page-section portfolio" id="search">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <div class="my-3">
                <h3 class="page-section-heading text-uppercase text-secondary mb-2">{{ $product->name }}</h3>
                <div class="d-flex">
                    @foreach (\App\Models\Category::descendantsAndSelf($product->category->id) as $item)
                        <span class="mx-2">
                            <a href="{{ route('categories.show', $item->slug) }}" class="text-decoration-none">
                                {{ $item->name }}
                            </a>
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    @endforeach
                    <span>
                        <p class="text-info mx-2">
                            {{ $product->name }}
                        </p>
                    </span>
                </div>
            </div>
            <!-- Icon Divider-->
            {{-- <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div> --}}
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="{{ $product->getFirstMediaUrl('SpecialImage') }}" alt="">
                </div>
                <div class="col-md-6">
                    <h4 class="text-danger">{{ $product->name }}</h4>

                    <div class="details">
                        <span class="text-uppercase text-primary font-weight-bold mb-2">
                            <strong>{{ __('Product details') }}</strong>
                        </span>

                        @foreach (\App\Models\AttributeType::all() as $attrType)
                            <p class="mb-2">
                                <strong>{{ $attrType->name }}:</strong>
                                @foreach ($product->attributeValues->where('attribute_type_id', $attrType->id) as $attrValue)
                                    <span>{{ $attrValue->name }}</span>
                                    @if(!$loop->last)
                                        <span> / </span>
                                    @endif
                                @endforeach
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($relatedProducts as $relatedProduct)
                    <div class="col-md-4">
                        <div class="card">
                            <div>
                                <img src="{{ asset('front/assets/img/1.jpg') }}" class="w-100" alt="">
                            </div>
                            <div class="card-body">
                                <h4>{{ $relatedProduct->name }}</h4>
                                <p>{{ $relatedProduct->created_at }}</p>
                            </div>
                            <div class="card-footer bg-transaparent">
                                <a href="{{  route('products.show', $relatedProduct->slug) }}" class="btn btn-primary">{{ __('Details') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <h3>{{ __('Comments') }}</h3>

                @forelse ($product->comments as $commnent)
                    <div class="card mb-3">
                        <div class="card-body">
                            <span>{{ $comment->user->full_name }}</span>
                            <p>{{ $comment->body }}</p>
                            <small>{{ comment->created_at->format('Y:mm:dd') }}</small>
                        </div>
                    </div>
                @empty
                    <p class="mb-3 p-2 text-info fw-bold">{{ __('No Comments!') }} <i class="fa fa-comment"></i></p>
                @endforelse


                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{ route('products.comment', $product->slug) }}">
                            <div class="form-group mb-3">
                                <label for="body" class="fw-bold mb-2">{{ __('Comment') }}</label>
                                <textarea name="body" id="body" class="form-control" cols="30" rows="3">{{ old('body', "Leave a comment...") }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

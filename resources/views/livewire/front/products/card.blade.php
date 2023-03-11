<div class="card">
    <a href="{{  route('products.show', $product->slug) }}" class="text-decoration-none">
        <div class="image-wrapper">
            <img src="{{ $product->getFirstMediaUrl('SpecialImage') }}" class="w-100" alt="">
        </div>
    </a>
    <div class="card-body">
        <div class="d-flex">
            <h4 class="text-capitalize">{{ $product->name }}</h4>
            <small class="align-self-center mx-2 text-black-50">{{ $product->sicentific_name }}</small>
        </div>
        <div>
            {{ $product->category?->name }}
        </div>
        <p>{{ $product->created_at->format('Y-m-d') }}</p>
    </div>
</div>

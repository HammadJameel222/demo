@props([
    'img'=> $img ?? 'images/showcase/showcase-1.png',
    // 'price1' => $price1 ?? '',
    // 'price2' => $price2 ?? '',
    'title' => $title ?? 'Apple Watch',
]);

<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="block">
        <div class="gallery-overlay">
            <a href="{{ route('product-details') }}" class="gallery-popup">
                <i class="tf-ion-plus-round"></i>
            </a>
        </div>
        <img class="img-fluid" src="{{asset($img)}}" alt="{{ $title }}">
    </div>
    <div class="product-info">
        <h4 class="mb-2"><a href="{{ route('product-details') }}" class="link-title">{{ $title }}</a></h4>
        {{-- <p class="price">$ {{$price1}}
            <s class="price">$ {{$price2}}</s>
        </p> --}}
        {{ $price }}
    </div>
</div>

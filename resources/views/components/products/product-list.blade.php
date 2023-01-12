@props([
    'img' => $img ?? 'images/showcase/showcase-2.png' ,
    'title' => $title ?? 'Apple Watch',
]);


<div class="block">
    <div class="gallery-overlay">
        <a href="{{ route('product-details')}}" class="gallery-popup">
            <i class="tf-ion-plus-round"></i>
        </a>
    </div>
    <img class="img-fluid" src="{{asset($img)}}" alt="{{ $title }}">
</div>

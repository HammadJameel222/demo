@props([
    'img' => $img ?? 'images/showcase/showcase-3.png',
    'desc' => $desc ?? '',
]);

<div class="row mb-40">
    <div class="col-md-6 text-center mb-5 mb-lg-0">
        <img class="img-fluid" src="{{ asset($img) }}" alt="">
    </div>
    <div class="col-md-6 align-self-center text-center text-md-left">
        <div class="content">
            <h4 class="subheading"><a class="link-title" href="{{ route('blog-details') }}">Best Watch Strap In Your
                    Budget</a></h4>
            <p>{{ $desc }}</p>
            <a href="{{ route('blog-details') }}" class="btn btn-main btn-main-sm">Read More</a>
        </div>
    </div>
</div>

<div class="row mb-40">
    <div class="col-md-6 order-md-1 order-2 align-self-center text-center text-md-left">
        <div class="content">
            <h4 class="subheading"><a class="link-title" href="{{ route('blog-details')}}">How to choose right watch for
                    you.</a></h4>
            <p>{{$desc}}</p>
            <a href="{{ route('blog-details')}}" class="btn btn-main btn-main-sm">Read More</a>
        </div>
    </div>
    <div class="col-md-6 order-md-2 order-1 text-center mb-5 mb-lg-0">
        <img class="img-fluid" src="{{ $img }}" alt="">
    </div>
</div>

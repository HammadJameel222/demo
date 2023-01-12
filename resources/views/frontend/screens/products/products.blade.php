@extends('frontend.layouts.app')
@section('content')
    <section class="section gallery">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="font-weight-bold">All latest Smart Watch</h1>
                </div>

                <x-products.product-component img="images/showcase/showcase-1.png" title="Apple Watch">
                    <x-slot name="price">
                        @foreach (collect([['price1'=> '$25.00','price2'=> '$35.00']]) as $items)
                        <p class="price">{{$items['price1']}}
                            <s class="price">{{$items['price2']}}</s>
                        </p>
                        @endforeach
                    </x-slot>

                </x-products.product-component>

                <x-products.product-component img="images/showcase/showcase-2.png" title="Galaxy Watch">
                    <x-slot name="price">
                        @foreach (collect([['price1'=> '$25.00','price2'=> '$35.00']]) as $items)
                        <p class="price">{{$items['price1']}}
                            <s class="price">{{$items['price2']}}</s>
                        </p>
                        @endforeach
                    </x-slot>

                </x-products.product-component>

                <x-products.product-component img="images/showcase/showcase-3.png" title="LG Watch">
                    <x-slot name="price">
                        @foreach (collect([['price1'=> '$25.00','price2'=> '$35.00']]) as $items)
                        <p class="price">{{$items['price1']}}
                            <s class="price">{{$items['price2']}}</s>
                        </p>
                        @endforeach
                    </x-slot>

                </x-products.product-component>

                <x-products.product-component img="images/showcase/showcase-4.png" title="Apple Watch">
                    <x-slot name="price">
                        @foreach (collect([['price1'=> '$25.00','price2'=> '$35.00']]) as $items)
                        <p class="price">{{$items['price1']}}
                            <s class="price">{{$items['price2']}}</s>
                        </p>
                        @endforeach
                    </x-slot>

                </x-products.product-component>



            </div>
        </div>
    </section>

@endsection

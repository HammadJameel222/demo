@extends('frontend.layouts.app')
@section('content')
    <section class="feature-list section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1>Our Latest Post</h1>
                </div>
            </div>
            <x-blog.blog-component img="images/showcase/showcase-4.png"
                desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
                <x-blog.blog-component img="images/showcase/showcase-2.png"
                desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
                <x-blog.blog-component img="images/showcase/showcase-2.png"
                desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
                <x-blog.blog-component img="images/showcase/showcase-2.png"
                desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
        </div>


    </section>
@endsection

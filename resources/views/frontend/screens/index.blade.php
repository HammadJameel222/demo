@extends('frontend.layouts.app')
@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-5 mb-md-0">
                    <img class="img-fluid" src="{{ asset('images/watch.png') }}" alt="">
                </div>
                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="block">
                        <h1 class="font-weight-bold mb-4 font-size-60">Believe in Technology, Make the change</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptas, modi fugit in veritatis labore perferendis. Minima hic at, nostrum nihil!</p>

                        <a href="products" class="btn btn-main">Browse All Products</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Our Core Features</h2>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 tf-ion-ios-alarm-outline"></i>
                        <h4 class="font-weight-bold mb-2">Smooth Touch</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, inventore?</p>
                    </div>

                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 tf-ion-ios-bell-outline"></i>
                        <h4 class="font-weight-bold mb-2">Elegant Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, inventore?</p>
                    </div>

                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 tf-ion-ios-cart-outline"></i>
                        <h4 class="font-weight-bold mb-2">Easy Pricing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, inventore?</p>
                    </div>

                </div>
                <div class="col-md-4 text-center align-self-center mb-4 mb-md-0">
                    <img class="img-fluid" src="{{ asset('images/watch-2.png') }}" alt="">
                </div>
                <div class="col-md-4">

                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 tf-ion-ios-alarm-outline"></i>
                        <h4 class="font-weight-bold mb-2">Smooth Touch</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, inventore?</p>
                    </div>

                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 tf-ion-ios-bell-outline"></i>
                        <h4 class="font-weight-bold mb-2">Elegant Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, inventore?</p>
                    </div>

                    <div class="mb-40 text-center text-md-left">
                        <i class="d-inlin-block h2 mb-10 tf-ion-ios-cart-outline"></i>
                        <h4 class="font-weight-bold mb-2">Easy Pricing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, inventore?</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-orange section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-5 mb-lg-0">
                    <img class="img-fluid" src="{{ asset('images/watch.png') }}" alt="">
                </div>
                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="content">
                        <h2 class="subheading text-white font-weight-bold mb-10">Designed by professional , the benefit for
                            creative gigs</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia vel labore,
                            deleniti minima nisi, velit atque quaerat impedit ea maxime sunt accusamus at obcaecati dolor
                            iure iusto omnis quis eum. <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Facilis commodi odit, illo, qui aliquam dol</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-list section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Why Choose Apple Watch</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-40">
                <div class="col-md-6 text-center mb-5 mb-lg-0">
                    <img class="img-fluid" src="{{ asset('images/showcase/showcase-4.png') }}" alt="">
                </div>
                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="content">
                        <h4 class="subheading">Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, sed, assumenda. Tenetur sed
                            esse, voluptas voluptate est veniam numquam, quis magni. Architecto minus suscipit quas, quo
                            harum deserunt consequatur cumque!</p>

                    </div>
                </div>
            </div>

            <div class="row mb-40">
                <div class="col-md-6 order-md-1 order-2 align-self-center text-center text-md-left">
                    <div class="content">
                        <h4 class="subheading">Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, sed, assumenda. Tenetur sed
                            esse, voluptas voluptate est veniam numquam, quis magni. Architecto minus suscipit quas, quo
                            harum deserunt consequatur cumque!</p>

                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1 text-center mb-5 mb-lg-0">
                    <img class="img-fluid" src="{{ asset('images/showcase/showcase-3.png') }}" alt="">
                </div>
            </div>


        </div>
    </section>

    <section class="gallery" id="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Checkout Our All Products</h2>
                    </div>

                    <div class="product-slider">
                        <x-products.product-list img="images/showcase/showcase-1.png"/>
                        <x-products.product-list img="images/showcase/showcase-3.png"/>
                        <x-products.product-list img="images/showcase/showcase-4.png"/>
                        <x-products.product-list />

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action section bg-opacity" style="background-image: url('images/call-to-action.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 text-center mx-auto">
                    <h2 class="subheading text-white">Get Product Updates</h2>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <div class="input-group">
                        <form action="" method="post" class="w-100" name="mc-embedded-subscribe-form"
                            target="_blank">
                            <input type="email" id="email" class="form-control" name="email"
                                placeholder="Your Email Address Here" required>
                            <button class="btn btn-main btn-submit" type="submit" name="subscribe">Subscribe</button>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="" tabindex="-1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials section" id="testimonial">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="heading">
                        <h2>Watch Review</h2>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0 text-center">
                    <div class="testimonial-block">
                        <i class="tf-ion-quote"></i>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                            which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot,
                            which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed
                            in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        <div class="author-details">
                            <img src="{{ asset('images/avater.png')}}" alt="Jonathon Andrew">
                            <h4>Jonathon Andrew</h4>
                            <span>CEO, Themefisher</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0 text-center">
                    <div class="testimonial-block">
                        <i class="tf-ion-quote"></i>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                            which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot,
                            which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed
                            in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        <div class="author-details">
                            <img src="{{ asset('images/avater.png')}}" alt="Jonathon Andrew">
                            <h4>Jonathon Andrew</h4>
                            <span>CEO, Themefisher</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0 text-center">
                    <div class="testimonial-block">
                        <i class="tf-ion-quote"></i>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                            which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot,
                            which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed
                            in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        <div class="author-details">
                            <img src="{{ asset('images/avater.png')}}" alt="Jonathon Andrew">
                            <h4>Jonathon Andrew</h4>
                            <span>CEO, Themefisher</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection

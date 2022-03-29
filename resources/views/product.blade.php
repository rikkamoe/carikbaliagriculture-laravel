@extends('layouts.app')

@section('content')
<!-- Begin Main Content Area  -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('customer/assets/images/breadcrumb/bg/1-1-1919x388.jpg') }}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">{{ $data->name_product }}</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>{{ $data->name_product }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-product-img">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="{{ asset('customer/img/'.$data->name_img) }}" class="single-img gallery-popup">
                                        <img class="img-full" src="{{ asset('customer/img/'.$data->name_img) }}" alt="Product Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('customer/img/'.$data->name_img) }}" class="single-img gallery-popup">
                                        <img class="img-full" src="{{ asset('customer/img/'.$data->name_img) }}" alt="Product Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('customer/img/'.$data->name_img) }}" class="single-img gallery-popup">
                                        <img class="img-full" src="{{ asset('customer/img/'.$data->name_img) }}" alt="Product Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('customer/img/'.$data->name_img) }}" class="single-img gallery-popup">
                                        <img class="img-full" src="{{ asset('customer/img/'.$data->name_img) }}" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbs-arrow-holder">
                            <div class="swiper-container single-product-thumbs">
                                <div class="swiper-wrapper">
                                    <a href="#" class="swiper-slide">
                                        <img class="img-full" src="{{ asset('customer/img/'.$data->name_img) }}" alt="Product Thumnail">
                                    </a>
                                    <a href="#" class="swiper-slide">
                                        <img class="img-full" src="{{ asset('customer/img/'.$data->name_img) }}" alt="Product Thumnail">
                                    </a>
                                    <a href="#" class="swiper-slide">
                                        <img class="img-full" src="{{ asset('customer/img/'.$data->name_img) }}" alt="Product Thumnail">
                                    </a>
                                    <a href="#" class="swiper-slide">
                                        <img class="img-full" src="{{ asset('customer/img/'.$data->name_img) }}" alt="Product Thumnail">
                                    </a>
                                </div>
                                <!-- Add Arrows -->
                                <div class=" thumbs-button-wrap d-none d-md-block">
                                    <div class="thumbs-button-prev">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <div class="thumbs-button-next">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <div class="single-product-content">
                        <h2 class="title">American Marigold</h2>
                        <div class="price-box">
                            <span class="new-price">$23.45</span>
                        </div>
                        <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod
                            tempo incid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate</p>
                        <ul class="quantity-with-btn">
                            <li class="add-to-cart">
                                <a class="btn btn-custom-size lg-size btn-pronia-primary" href="https://wa.me/6281246312412?text=Saya%20tertarik%20dengan%20product {{ $data->name_product }}">Order</a>
                            </li>
                        </ul>
                        <div class="product-category mt-5">
                            <span class="title">SKU:</span>
                            <ul>
                                <li>
                                    <a href="#">{{ $data->sku_product }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category">
                            <span class="title">Categories :</span>
                            <ul>
                                <li>
                                    <a href="#">{{ $data->categories_product }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category product-tags">
                            <span class="title">Tags :</span>
                            <ul>
                                <li>
                                    <a href="#">{{ $data->tags_product }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-tab-area section-space-top-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav product-tab-nav tab-style-2 pt-0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="tab-btn" id="information-tab" data-bs-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">
                                Information
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="active tab-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                Description
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content product-tab-content">
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <div class="product-information-body">
                                <h4 class="title">Shipping</h4>
                                <p class="short-desc mb-4">The item will be shipped from China. So it need 15-20 days to
                                    deliver. Our product is good with reasonable price and we believe you will worth it.
                                    So please wait for it patiently! Thanks.Any question please kindly to contact us and
                                    we promise to work hard to help you to solve the problem</p>
                                <h4 class="title">About return request</h4>
                                <p class="short-desc mb-4">If you don't need the item with worry, you can contact us
                                    then we will help you to solve the problem, so please close the return request!
                                    Thanks</p>
                                <h4 class="title">Guarantee</h4>
                                <p class="short-desc mb-0">If it is the quality question, we will resend or refund to
                                    you; If you receive damaged or wrong items, please contact us and attach some
                                    pictures about product, we will exchange a new correct item to you after the
                                    confirmation.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-description-body">
                                <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                    fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- Main Content Area End Here  -->
@endsection

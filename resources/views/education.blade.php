@extends('layouts.app')

@section('content')	
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('customer/assets/images/breadcrumb/bg/1-1-1919x388.jpg') }}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Edukasi</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Beranda</a>
                            </li>
                            <li>Detail Edukasi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8 order-1">
                    <div class="blog-detail-item">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li class="author">
                                        <a href="#">By: Admin</a>
                                    </li>
                                    <li class="date">24 April 2021</li>
                                </ul>
                            </div>
                            <h2 class="title">There Many Variations</h2>
                            <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore etl dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquiex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eukip fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deseruntk mollit anim id est laborum. Sed ut
                                perspiciatis unde omnis iste natus error sit voluptatem accusantiumy doloremque
                                laudantium, totam rem aperiam,
                            </p>
                        </div>
                        <div class="blog-img img-hover-effect">
                            <img class="img-full" src="assets/images/blog/large-size/1-1-768x546.jpg" alt="Blog Image">
                        </div>
                        <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore etl dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquiex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eukip fugiat nulla pariatur. Excepteur
                            sint occaecat.</p>
                        <blockquote>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt
                            </p>
                        </blockquote>
                        <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore etl dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquiex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eukip fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deseruntk mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantiumy doloremque laudantium, totam rem aperiam,
                        </p>
                        <div class="blog-banner row">
                            <div class="single-img img-hover-effect col-sm-6">
                                <img class="img-full" src="assets/images/blog/medium-size/2-1-370x270.jpg" alt="Blog Banner">
                            </div>
                            <div class="single-img img-hover-effect col-sm-6 pt-5 pt-sm-0">
                                <img class="img-full" src="assets/images/blog/medium-size/2-2-370x270.jpg" alt="Blog Banner">
                            </div>
                        </div>
                        <p class="short-desc mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore etl dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquiex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eukip fugiat nulla pariatur.
                            Excepteur sint occaecat
                        </p>
                    </div>
                    <div class="social-with-tags">
                        <div class="tags">
                            <span class="title">Tags: </span>
                            <ul>
                                <li>
                                    <a href="#">Plant,</a>
                                </li>
                                <li>
                                    <a href="#">Tree Plant</a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-link">
                            <ul>
                                <li>
                                    <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->
@endsection
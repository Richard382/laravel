@extends('layouts.master')

@section('title')Welcome @endsection


@section('header')
        <header id="headerwrap" class="dark-wrapper backstretched special-max-height no-overlay">
            <div class="container vertical-center">
                <div class="intro-text vertical-center text-left smoothie">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">This Is Kompleet</div>
                    <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">Take a look our <span class="rotate">awesome home pages, sexy portfolio items, flexible blog examples</span></div>
                </div>
            </div>
        </header>

@endsection

@section('content')
 <section class="white-bg">
            <div class="section-inner masonry-portfolio container demo-selector" data-masonry-cols="4">
                <div>
                    <div>
                        <ul class="masonry-portfolio-items isotope list-unstyled">
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{asset('Kompleet/assets/img/homepages/agency-1.jpg')}}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-agency-1.html" title="view project">Agency 1</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{asset('Kompleet/assets/img/homepages/blog-2.jpg')}}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-blog-2.html" title="view project">Blog 2</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{asset('Kompleet/assets/img/homepages/corporate-1.jpg')}}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-corporate-1.html" title="view project">Corporate 1</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{asset('Kompleet/assets/img/homepages/landing-2.jpg')}}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-landing-2.html" title="view project">Landing 2</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{asset('Kompleet/assets/img/homepages/portfolio-1.jpg')}}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-portfoio-1.html" title="view project">Portfolio 1</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
@endsection

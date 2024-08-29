@extends('layouts.main')

@section('main')
    
    <div class="slider-section slider-active overflow-hidden">
        <div class="single-slider-04 animation-style-01" style="background-image: url(/assets/images/make-sale/bg4.png);">
            <div class="container position-top">
                <div>
                    <div class="rolling-text slider-content-04__title text-white">
                        <span>Sales</span>
                    </div><br>
                    <div class="rolling-text slider-content-04__title text-white">
                        <span>Point</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-padding-01">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-five_inner">
                        <blockquote class="testimonial-five_blockquote text-blue" style="font-weight:900;">Holland levert premium snoep en verse, lokaal geproduceerde melk met de hoogste kwaliteitsnormen. Onze producten zijn landelijk verkrijgbaar, zodat iedereen kan genieten van onze heerlijke aanbiedingen.</blockquote>
                        <span class="testimonial-five_border"></span>
                        <span class="testimonial-five_author">Verkooppunten</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="featured-products section-padding-03" data-bg-image="assets/images/bg/10.jpg">
        <div class="container">

            <div class="featured-product-active">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($salespoints as $salespoint)
                            @php
                                $id = $salespoint->id;
                                $title = $salespoint->title;
                                $description = $salespoint->description;
                                $position = $salespoint->position;
                                $owner = $salespoint->owner;
                                $titletolow = strtolower(str_replace(" ", "-", $title));
                                $imageUrl = '/assets/images/make-sale' .'/' . $titletolow . '.jpg';
                            @endphp
                        <!-- Featured Products Title Strat -->
                        <div class="swiper-slide featured-product-item padding-y">
                            <div class="row mb-n30">
                                <div class="col-md-6 mb-30">
                                    <!-- Featured Products Item Image Strat -->
                                    <div class="featured-product-item__image">
                                        <div class="image">
                                        <a href="/salespoint/{{$titletolow}}"><img src="{{$imageUrl}}" class="about-image  salespoint-image" alt="Product"></a>
                                        </div>
                                    </div>
                                    <!-- Featured Products Item Image End -->
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="blog-post__content">
                                        <div class="section-title-04">
                                            <h3 class="slider-content-04__title_contact text-red"><a href="/salespoint/{{$titletolow}}">{{$title}}</a></h3>
                                        </div>
                                        <div class="blog-post__text blog-post__overflow text-black">{{$description}}</div>
                                        
                                        <div class="blog-post__text text-blue">Owner : {{$owner}}</div>
                                        <div class="blog-post__text text-blue">Position : {{$position}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Products Title End -->
                        @endforeach

                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>


        </div>
    </div>

    <div class="section-padding-01 background-red">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="best-service-item">
                        <h4 class="best-service-item__title">01.Custom shape</h4>
                        <p class="best-service-item__desc">Wij maken speelse krullen met vloeiende rondingen en heerlijke melk waar kinderen dol op zijn.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="best-service-item">
                        <h4 class="best-service-item__title">02.Free shipping</h4>
                        <p class="best-service-item__desc">Profiteer van gratis verzending. Bij aankoop van melk is verse melk bij u thuis gegarandeerd.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="best-service-item">
                        <h4 class="best-service-item__title">03.new design</h4>
                        <p class="best-service-item__desc">Het ontwerp heeft levendige kleuren en verpakkingen. Wij moedigen nieuwe ontwerpe.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="best-service-item">
                        <h4 class="best-service-item__title">04.high-quality service</h4>
                        <p class="best-service-item__desc">Wij bieden een eersteklas service en zorgen ervoor dat elke bestelling met zorg wordt behandeld.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="best-service section-padding-03">

        <!-- Section Title Strat -->
        <div class="section-title-04 text-center">
            <h5 class="section-title-04__sub-title">Holland Nationwide</h5>
            <h2 class="slider-content-04__title text-red">Holland Nationwide</h2>
        </div>
        <!-- Section Title End -->

        <div class="container">
            <div class="row gx-xxl-10 mb-n30">
                <div class="col-lg-6 col-12 mb-30">
                    <div class="testimonial-five_inner">
                        <blockquote class="testimonial-five_blockquote gradient-text">Holland biedt landelijke verkoopdekking en levert producten efficiënt door het hele land. Met een sterk distributienetwerk zorgen we voor consistente toegang tot onze goederen in alle regio's, waarmee we zowel lokale als nationale markten ondersteunen.</blockquote>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-30">

                    <!-- Section Title Strat -->
                    <div class="best-service-image">
                        <div class="best-service-image__image"> 
                            <img class="netherlands-map" src="assets/images/bg/netherlands-map1.jpg" alt="MAP">
                        </div>
                    </div>
                    <!-- Section Title End -->

                </div>
                
            </div>
        </div>

    </div>
    
@endsection
    
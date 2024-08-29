@extends('layouts.main')

@section('main')

    <div class="breadcrumb background-red" style="height: 25vh;">
    </div>
   
    <div class="slider-section slider-active overflow-hidden">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider-04 animation-style-04" style="height:75vh; background-image: url('/assets/images/bg/redbg2.jpg');">
                    <img class="call-to-action-more__images_2" style="left:10px;" src="assets/images/drop-images/01.png" alt="Svg Text">
                    <img class="call-to-action-more__images_5" style="left:100px;" src="assets/images/drop-images/02.png" alt="Svg Text">
                    <img class="call-to-action-more__images_3" style="left:200px;" src="assets/images/drop-images/03.png" alt="Svg Text">
                    <img class="call-to-action-more__images_5" style="left:300px;" src="assets/images/drop-images/04.png" alt="Svg Text">
                    <img class="call-to-action-more__images_2" style="left:400px;" src="assets/images/drop-images/05.png" alt="Svg Text">
                    <img class="call-to-action-more__images_4" style="left:500px;" src="assets/images/drop-images/06.png" alt="Svg Text">
                    <img class="call-to-action-more__images_1" style="left:600px;" src="assets/images/drop-images/07.png" alt="Svg Text">
                    <img class="call-to-action-more__images_3" style="left:700px;" src="assets/images/drop-images/08.png" alt="Svg Text">
                    <img class="call-to-action-more__images_5" style="left:800px;" src="assets/images/drop-images/09.png" alt="Svg Text">
                    <img class="call-to-action-more__images_1" style="left:900px;" src="assets/images/drop-images/10.png" alt="Svg Text">
                    <img class="call-to-action-more__images_4" style="left:1000px;" src="assets/images/drop-images/11.png" alt="Svg Text">
                    <img class="call-to-action-more__images_2" style="left:1100px;" src="assets/images/drop-images/12.png" alt="Svg Text">
                    <img class="call-to-action-more__images_3" style="left:1200px;" src="assets/images/drop-images/13.png" alt="Svg Text">
                    <img class="call-to-action-more__images_4" style="left:1300px;" src="assets/images/drop-images/14.png" alt="Svg Text">
                    <img class="call-to-action-more__images_3" style="left:1400px;" src="assets/images/drop-images/15.png" alt="Svg Text">
                    <img class="call-to-action-more__images_2" style="left:1500px;" src="assets/images/drop-images/16.png" alt="Svg Text">
                    <img class="call-to-action-more__images_5" style="left:1600px;" src="assets/images/drop-images/17.png" alt="Svg Text">
                    <img class="call-to-action-more__images_3" style="left:1700px;" src="assets/images/drop-images/18.png" alt="Svg Text">
                    <img class="call-to-action-more__images_1" style="left:1800px;" src="assets/images/drop-images/19.png" alt="Svg Text">
                    <div class="container">
                        <!-- Slider Content Start -->
                        <div class="slider-content-04">
                            <h1 class="slider-content-04__title text-white">About Us</h1>
                            <a class="slider-content-07__btn btn slider-btn-02 rounded-pill" href="{{url('/')}}"><span>Home</span></a>
                        </div>
                        <!-- Slider Content Start -->
                    </div>
                </div>
                
                <!-- Single Slider End -->
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Section Start -->
    <div class="section-padding-03 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="section-title-10 justify-content-start text-start align-items-start">
                        <span class="section-title-10__subtitle text-blue">We Are Holland Foodz</span>
                        <h1 class="section-title-10__title text-blue">we love holland foodz</h1>
                        <p class="section-title-10__text text-blue">Nullam dictum, justo eu blandit lacinia, diam libero porta sem, sit amet molestie tellus lacus non orci. Nullam orci urna, egestas at dui vel, sagittis semper est.</p>
                        <p class="section-title-10__text text-blue">Vestibulum eu tristique tellus. Praesent at varius nisi, ut dignissim lectus. Praesent venenatis ipsum in arcu ullamcorper tristique. Aliquam et gravida magna, ut tincidunt massa.</p>
                        <div class="team-2-thumb" style="width:70%">
                            <img src="/assets/images/bg/10.png" alt="Signature-Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="slider-section slider-active overflow-hidden">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Single Slider Start -->
                                <div class="swiper-slide">
                                    <div class="aboutus-image">
                                        <img width="70%" style="height:auto; aspect-ratio:2/1;" src="/assets/images/bg/love.png" alt="About-Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="aboutus-image">
                                        <img width="70%" style="height:auto; aspect-ratio:2/1;" src="/assets/images/bg/lovemilk1.jpg" alt="About-Image">
                                    </div>
                                </div>
                                
                                <!-- Single Slider End -->
                            </div>
                            <div class="slider-arrow slider-arrow-four">
                                <div class="swiper-button-next"><i class="lastudioicon-left-arrow"></i></div>
                                <div class="swiper-button-prev"><i class="lastudioicon-right-arrow"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Call to Action Section Strat -->
    <div class="video-section" style="background-image: url(assets/images/make-sale/video.jpg);">
        <div class="container">
            <div class="call-to-action-more text-center position-relative popup-video" id="popup-video">
                <a class="call-to-action-more__arrow text-white lh-1 video-popup" href="/assets/video/what.mp4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="none" viewBox="0 0 20 24">
                        <path fill="currentColor" d="M.417.5v23L19.583 12 .417.5z"></path>
                    </svg>
                </a>
                <div class="position-absolute top-50 start-50 translate-middle">
                    <img class="call-to-action-more__svg" src="assets/images/svg-text.svg" alt="Svg Text">
                </div>
            </div>
            <!-- Video Play End -->

        </div>
    </div>
    <!-- Call to Action Section End -->

    <div class="team-2 section-padding-03 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Strat -->
                    <!-- <div class="section-title-10 text-center">
                        <h2 class="section-title-10__title mb-0 mb-lg-5 mb-md-3">Our Chef</h2>
                    </div> -->
                    <div class="section-title-04 text-center">
                        <h5 class="section-title-04__sub-title">Our Chef</h5>
                        <h2 class="slider-content-04__title text-red">Our Chef</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mb-n25">
            @foreach($chiefs as $chief)
                @php
                    $avatar = $chief->avatar;
                    $imageUrl = '/assets/images/avatar/' . $avatar;
                    $name = $chief->name;
                    $roll = $chief->roll;
                    $facebookUrl = $chief->facebook;
                    $twitterUrl = $chief->twitter;
                    $pinterestUrl = $chief->pinterest;
                    $instagramUrl = $chief->instagram;
                @endphp
                <!-- Single Teams start -->
                <div class="col mb-25">
                    <div class="team-2-wrapper">
                        <div class="team-2-thumb">
                            <img src={{$imageUrl}} alt="Team-Image">
                        </div>
                        <div class="team-2-content">
                            <span class="team-2-name">{{$name}}</span>
                            <span class="team-2-designation">{{$roll}}</span>
                        </div>
                        <ul class="team-2-social">
                            <li>
                                <a href={{$facebookUrl}}><i class="lastudioicon-b-facebook"></i></a>
                            </li>
                            <li>
                                <a href={{$twitterUrl}}><i class="lastudioicon-b-twitter"></i></a>
                            </li>
                            <li>
                                <a href={{$pinterestUrl}}><i class="lastudioicon-b-pinterest"></i></a>
                            </li>
                            <li>
                                <a href={{$instagramUrl}}><i class="lastudioicon-b-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- About Section Start -->
     
    <div class="section-padding-03 overflow-hidden">
        <div class="container">
            <div class="row flex-md-row-reverse align-items-center">
                <div class="col-md-5">
                    <div class="section-title-10 justify-content-start text-start align-items-start">
                        <span class="section-title-10__subtitle">Holland Foodz Time</span>
                        <h1 class="section-title-10__title">we are open</h1>
                        <p class="section-title-10__text text-black">Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur</p>
                    </div>
                    <ul class="about-schedule">
                        <li>
                            <span class="about-schedule_name">Mon - Fri</span>
                            <span class="about-schedule_time text-black">9:00 am - 9:00 pm</span>
                        </li>
                        <li>
                            <span class="about-schedule_name">Sat - Sun</span>
                            <span class="about-schedule_time text-black">10:00 am - 10:00 pm</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="aboutus-image-two">
                        <img width="100%" src="/assets/images/bg/collection-candy.jpg" alt="About-Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Team Section Start -->
   
    <!-- Team Section End -->
    <!-- Testimonial Section Strat -->
    <div class="testimonial-section section-padding-03" data-bg-color="#F9F9F9">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Title Strat -->
                    <div class="section-title-04 text-center">
                        <h5 class="section-title-04__sub-title">Customer Reviews</h5>
                        <h2 class="slider-content-04__title text-red">Customer Reviews</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
        </div>
        <!-- Testimonial Active Strat -->
        <div class="testimonial-active-two my-0 mx-auto">
            <div class="swiper">
                <div class="swiper-wrapper">

                @foreach($reviews as $review)
                    <!-- swiper-slide start -->
                    <!-- Testimonial Item Strat -->
                     @php
                        $description = $review->description;
                        $avatar = $review->avatar;
                        $imageUrl = '/assets/images/avatar/' . $avatar;
                        $name = $review->name;
                        $position = $review->position;
                     @endphp
                    <div class="swiper-slide">
                        <div class="testimonial-two text-center">
                            <div class="testimonial-two_quote">
                                <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                            <p class="testimonial-two_text">{{$description}}</p>
                            <div class="testimonial-two_image">
                                <img width="56" height="56" src={{$imageUrl}} alt="Author">
                            </div>
                            <span class="testimonial-two_name">{{$name}}</span>
                            <span class="testimonial-two_position text-black">{{$position}}</span>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                    <!-- Testimonial Item Strat -->
                @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial Active End -->

    </div>
    <!-- Testimonial Section End -->

    <!-- Brand Section Strat -->
    <div class="brand-section">
        <div class="container">

            <!-- Brand Action Strat -->
            <div class="brand-active">
                <div class="swiper">
                    <div class="swiper-wrapper align-items-center">
                    @foreach($products as $product)
                        @php
                            $productName = $product->name;
                            $productCategory = $product->category;
                            $imageUrl = '/assets/images/' . strtolower(str_replace(" ", "-", $productCategory)) . '/' . $productName . '.jpg'; 
                        @endphp
                        <!-- Brand Item Strat -->
                        <div class="swiper-slide brand-item">
                            <img src={{$imageUrl}} alt="Brand">
                        </div>
                        <!-- Brand Item End -->
                    @endforeach
                    </div>
                </div>
            </div>
            <!-- Brand Action End -->

        </div>
    </div>
@endsection

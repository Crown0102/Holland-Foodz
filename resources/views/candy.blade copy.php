@extends('layouts.main')

@section('main')
    
    <!-- Slider Section Strat -->
    <div class="slider-section slider-active overflow-hidden">
        <!-- Single Slider Start -->
        <div class="single-slider-02 animation-style-01" style="background-image: url(/assets/images/landing/6.jpg);">
            <div class="container position-top1">

                <!-- Slider Content Start -->
                <div class="slider-content-02 text-center mx-auto">
                    <h1 class="slider-content-02__title text-white">Candy which Spreading Love of Joy </h1>
                    <a class="slider-content-02__shape" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 94">
                            <path fill="currentColor" d="M17.272 93.047c-.635 1.27-2.7 1.27-3.336 0C8.533 83.195 3.607 73.184.747 62.379c-.318-1.589 1.43-3.178 2.86-2.224 3.178 2.224 5.88 4.926 8.263 8.104-.636-22.246-3.655-45.286 1.589-67.214.318-1.59 3.019-1.271 2.86.318-2.86 22.722-.635 45.286-.318 68.008 2.701-2.383 5.402-4.767 7.945-7.15 1.112-1.113 3.496-.477 3.337 1.43-1.271 10.487-4.767 20.338-10.01 29.396zm-1.747-18.91c-.954 1.43-3.655 1.113-3.655-1.112v-.317c-1.907-1.907-3.655-3.814-5.72-5.72 2.542 7.309 5.72 14.141 9.374 20.974 3.178-6.197 5.562-12.553 6.833-19.386-1.748 1.59-3.655 3.178-5.403 4.926-.317.636-.953.795-1.43.636z"></path>
                        </svg>
                    </a>
                </div>
                <!-- Slider Content Start -->

            </div>
        </div>
        <!-- Single Slider End -->
    </div>
    <!-- Slider Section End -->


    
    <!-- Features Card Section Strat -->
    <div class="features-card-section">
        <div class="container">

            <!-- Features Card Wrapper Strat -->
            <div class="features-card-wrapper">
                <div class="row gx-4 gx-lg-6 gy-6">
                    <div class="col-md-4">

                        <!-- Features Card Wrapper Strat -->
                        <div class="features-card-item">
                            <div class="features-card-item__image">
                                <a href="/products/Cinnamon-Chunks">
                                    <img src="{{asset('assets/images/bg/range.jpg')}}" alt="Features Card" width="460" height="516">
                                </a>
                            </div>
                            <div class="features-card-item__content text-center">
                                <div class="features-card-item__inner background-red">
                                    <h3 class="features-card-item__title font-white"><a href="/products/Cinnamon-Chunks">Cinnamon Chunks</a></h3>
                                    <p class="font-white">Deze bieden een explosie van gedurfde, pittige kaneel in elke knapperige hap. Deze snoepjes leveren een intense, bevredigende smaak die perfect is voor degenen die van een zoete en pittige kick houden.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Features Card Wrapper End -->
                         
                    </div>
                    <div class="col-md-4">

                        <!-- Features Card Wrapper Strat -->
                        <div class="features-card-item">
                            <div class="features-card-item__image">
                                <a href="/products/Cinnamon-Sticks">
                                    <img src="{{asset('assets/images/cinnamon-sticks/SOOSTERHOUTSE.jpg')}}" alt="Features Card" width="460" height="516">
                                </a>
                            </div>
                            <div class="features-card-item__content text-center">
                                <div class="features-card-item__inner">
                                    <h3 class="features-card-item__title"><a href="/products/Cinnamon-Sticks">Cinnamon Sticks</a></h3>
                                    <p>Deze combineren de klassieke, troostende smaak van kaneel met een verrukkelijk, stokvormig snoepje. Hun unieke textuur en rijke smaak maken ze een perfecte traktatie voor een gezellige, zoete verwennerij.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Features Card Wrapper End -->

                    </div>
                    <div class="col-md-4">

                        <!-- Features Card Wrapper Strat -->
                        <div class="features-card-item background-blue">
                            <div class="features-card-item__image">
                                <a href="/products/Cinnamon-Pillows">
                                    <img src="{{asset('assets/images/cinnamon-pillows/PSTROOPWATELS.jpg')}}" alt="Features Card" width="460" height="516">
                                </a>
                            </div>
                            <div class="features-card-item__content text-center">
                                <div class="features-card-item__inner">
                                    <h3 class="features-card-item__title font-white"><a href="/products/Cinnamon-Chunks">Cinnamon pillows</a></h3>
                                    <p class="font-white">Deze hebben een zachte, kussenachtige textuur met een warme, zoete kaneelvulling. Deze snoepjes zijn ideaal voor degenen die genieten van een zachte, met kaneel doordrenkte traktatie.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Features Card Wrapper End -->

                    </div>
                </div>
            </div>
            <!-- Features Card Wrapper End -->

        </div>
    </div>
    <!-- Features Card Section End -->

    <!-- Product Section Strat -->
    <div class="section-padding-01 bg-color-01" style="background-image: url(/assets/images/background-1.png);">
        <div class="container">
            <!-- Section Title Strat -->
            <div class="section-title-03 text-center max-width-720 mx-auto">
                <h2 class="section-title-03__title"><span>Zzoet van toen</span></h2>
                <p style="color: #858585!important;">Dit product combineert tijdloze, geliefde smaken met een frisse, eigentijdse touch, en biedt een smaakervaring die het verleden eert en tegelijkertijd het heden verrukt.</p>
            </div>
            <!-- Section Title End -->
            <div class="featured-product-active">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($products->chunk(9) as $chunk)
                            <div class="swiper-slide">
                                <div class="row g-6 gy-xxl-16 gx-xxl-10">
                                    @foreach ($chunk as $product)
                                        @php
                                            $productName = $product->name;
                                            $productCategory = $product->category;
                                            $imageUrl = '/assets/images/' . strtolower(str_replace(" ", "-", $productCategory)) . '/' . $productName . '.jpg'; 
                                        @endphp
                                    
                                    <div class="col-lg-4 col-sm-6">
                                    <!-- Product Item Start -->
                                        <div class="product-item product-item-03 bg-white p-4 p-md-6 text-center">
                                            <div class="product-item__image">
                                                <a href="/product/{{$productName}}">
                                                    <img src={{$imageUrl}}  style="width:70%; height:auto; aspect-ratio:1/1;" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-item__content px-0 pt-9 pb-4 px-0">
                                                <h5 class="product-item__title fs-5"><a href="/product/{{$productName}}">{{$productName}}</a></h5>
                                                <div class="product-item__rating">
                                                    <div class="product-item__star-rating" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- Product Item End -->
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            <div class="swiper-pagination"></div></div>
        </div>
    </div>
    <!-- Product Section End -->

    

    <!-- Why Choose Section Start -->
    <div class="section-padding-03 custom-container-four container-fluid why-choose">
        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <div class="why-choose-images">
                    <!-- <div class="why-choose-image1"> -->
                        <img src="{{asset('/assets/images/make-sale/makecandy.jpg')}}" style="width:100%; border-radius: 50px;" alt="Image">
                    <!-- </div> -->
                    <!-- <div class="why-choose-image2">
                        <img src="{{asset('/assets/images/product/how_make_355-457.jpg')}}" alt="Image">
                    </div> -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 align-self-center">
                <div class="why-choose-content">
                    <div class="why-choose-head">
                        <span class="why-choose-subtitle">Why Choose Us</span>
                        <h2 class="why-choose-title">How Did We Make The Candy</h2>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header font-black" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                    <span>Hoe maak je de kaneelbrokken</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body font-black">Om kaneelbrokken te maken, beginnen we met het verwarmen van een mengsel van suiker, water en een vleugje glucosestroop tot de perfecte temperatuur. Zodra het mengsel de ideale consistentie heeft bereikt, voegen we er een rijk kaneelextract en een vleugje natuurlijke rode kleurstof aan toe om het die kenmerkende look te geven. De hete snoepjes worden vervolgens in mallen gegoten en mogen afkoelen voordat ze in grote stukken worden gebroken, zodat elke hap een intense kaneelsmaak oplevert.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                    <span>Hoe maak je de kaneelstokjes</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body font-black">
                                    Om kaneelstokjes te maken, beginnen we met het verwarmen van een mengsel van suiker en water tot het een dikke siroop vormt. We voegen dan kaneelolie toe voor die sterke, pittige smaak en vormen het mengsel voorzichtig tot lange, dunne stokjes. Zodra ze zijn afgekoeld, worden elk stokje afzonderlijk verpakt om de gladde textuur en intense kaneelsmaak te behouden.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                    <span>Hoe maak je de kaneelkussentjes</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body font-black">
                                    Cinnamon Pillows beginnen met een opgeklopte suikersiroop die precies op de juiste temperatuur is verhit. Nadat we het mengsel hebben voorzien van kaneelsmaak, wordt het belucht om een ​​luchtige, kussenachtige textuur te creëren. Zodra het is afgekoeld, snijden we het snoep in zachte, kussenvormige stukken die een uitgebalanceerde kaneelsmaak bieden met een heerlijke crunch.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Section End -->
@endsection
    
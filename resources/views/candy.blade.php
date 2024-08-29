@extends('layouts.main')

@section('main')
    <div class="breadcrumb background-red" style="height: 25vh;">
    </div>

    <!-- Product Section Strat -->
    <div class="section-padding-01 bg-color-01" style="background-image: url(/assets/images/background-1.png);">
        <div class="container">
            <div class="section-title-03 row">
                <div class="col-xl-1 col-0">
                </div>
                <div class="col-xl-10 col-12">
                    <blockquote class="testimonial-five_blockquote testimonial-five_blockquote_product text-red mb-6">Products - Candy</blockquote>
                    <div class="mb-3 row">
                        <div class="col-xl-2 col-3">
                            <blockquote class="testimonial-five_blockquote testimonial-five_blockquote_category text-blue mb-3">Smaken</blockquote>
                        </div>
                        <div class="col-xl-10 col-9">
                            @for ($i = 0 ; $i < 6 ; $i++ )
                                <form method="POST" action="{{ route('candy') }}" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{ $categories[$i]->id }}" {{ in_array($categories[$i]->id, $candySelectedCategories) ? 'checked' : '' }}>
                                    <button type="submit" class="btn btn-shape btn-space {{ in_array($categories[$i]->id, $candyAvailableCategories) ? 'btn-primary' : 'btn-secondary' }}">
                                        {{ $categories[$i]->name }}
                                    </button>
                                </form>
                            @endfor
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-xl-2 col-3">
                            <blockquote class="testimonial-five_blockquote testimonial-five_blockquote_category text-blue mb-3">Structuren</blockquote>
                        </div>
                        <div class="col-xl-10 col-9">
                            @for ($i = 6 ; $i < 9 ; $i++ )
                                <form method="POST" action="{{ route('candy') }}" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{ $categories[$i]->id }}" {{ in_array($categories[$i]->id, $candySelectedCategories) ? 'checked' : '' }}>
                                    <button type="submit" class="btn btn-shape btn-space {{ in_array($categories[$i]->id, $candyAvailableCategories) ? 'btn-primary' : 'btn-secondary' }}">
                                        {{ $categories[$i]->name }}
                                    </button>
                                </form>
                            @endfor
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-xl-2 col-3">
                            <blockquote class="testimonial-five_blockquote testimonial-five_blockquote_category text-blue mb-3">Zakken</blockquote>
                        </div>
                        <div class="col-xl-10 col-9">
                            @for ($i = 9 ; $i < 12 ; $i++ )
                                <form method="POST" action="{{ route('candy') }}" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{ $categories[$i]->id }}" {{ in_array($categories[$i]->id, $candySelectedCategories) ? 'checked' : '' }}>
                                    <button type="submit" class="btn btn-shape btn-space {{ in_array($categories[$i]->id, $candyAvailableCategories) ? 'btn-primary' : 'btn-secondary' }}">
                                        {{ $categories[$i]->name }}
                                    </button>
                                </form>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 col-0">
                </div>
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
                                            $imageUrl = '/assets/images/candy/' . $productName . '.jpg'; 
                                        @endphp
                                    
                                    <div class="col-lg-4 col-sm-6">
                                    <!-- Product Item Start -->
                                        <div class="product-item product-item-03 bg-white p-4 p-md-6 text-center milk-image">
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
    
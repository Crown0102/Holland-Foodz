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
                    <blockquote class="testimonial-five_blockquote testimonial-five_blockquote_product text-red mb-6">Products - Diary</blockquote>
                    <div class="mb-3 row">
                        <div class="col-xl-3 col-4">
                            <blockquote class="testimonial-five_blockquote testimonial-five_blockquote_category text-blue mb-3">Gearomatiseerd</blockquote>
                        </div>
                        <div class="col-xl-9 col-8">
                            @for ($i = 0 ; $i < 5 ; $i++ )
                                <form method="POST" action="{{ route('diary') }}" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{ $categories[$i]->id }}" {{ in_array($categories[$i]->id, $diarySelectedCategories) ? 'checked' : '' }}>
                                    <button type="submit" class="btn btn-shape btn-space {{ in_array($categories[$i]->id, $diaryAvailableCategories) ? 'btn-primary' : 'btn-secondary' }}">
                                        {{ $categories[$i]->name }}
                                    </button>
                                </form>
                            @endfor
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-xl-3 col-4">
                            <blockquote class="testimonial-five_blockquote testimonial-five_blockquote_category text-blue mb-3">Natuurlijk</blockquote>
                        </div>
                        <div class="col-xl-9 col-8">
                            @for ($i = 5 ; $i < 9 ; $i++ )
                                <form method="POST" action="{{ route('diary') }}" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{ $categories[$i]->id }}" {{ in_array($categories[$i]->id, $diarySelectedCategories) ? 'checked' : '' }}>
                                    <button type="submit" class="btn btn-shape btn-space {{ in_array($categories[$i]->id, $diaryAvailableCategories) ? 'btn-primary' : 'btn-secondary' }}">
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
                        @foreach ($products->chunk(6) as $chunk)
                            <div class="swiper-slide">
                                <div class="row g-6 gy-xxl-16 gx-xxl-10">
                                    @foreach ($chunk as $product)
                                        @php
                                            $productName = $product->name;
                                            $imageUrl = '/assets/images/diary/' . $productName . '.jpg'; 
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
                    <img src="{{asset('/assets/images/make-sale/makemilk.jpg')}}" style="width:100%; border-radius: 50px;" alt="Image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 align-self-center">
                <div class="why-choose-content">
                    <div class="why-choose-head">
                        <span class="why-choose-subtitle">Why Choose Us</span>
                        <h2 class="why-choose-title">How Did We Make The Diary</h2>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header font-black" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                    <span>hoe melk te produceren</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body font-black">
                                Om melk te produceren, beginnen we met het zorgvuldig melken van gezonde, goed gevoede koeien met behulp van schone, moderne apparatuur. De melk wordt vervolgens gepasteuriseerd om alle bacteriën te verwijderen en gehomogeniseerd voor een gladde, consistente textuur.
                                Tot slot wordt het verpakt en opgeslagen onder optimale omstandigheden om de versheid en kwaliteit te garanderen voordat het op uw tafel terechtkomt.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="lastudioicon lastudioicon-down-arrow"></i>
                                    <span>hoe melk te verpakken</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body font-black">
                                Na pasteurisatie en homogenisatie verpakken we de melk in gesteriliseerde containers met behulp van geautomatiseerde machines om de versheid te garanderen. De containers worden vervolgens goed afgesloten om besmetting te voorkomen en voorzien van essentiële informatie. Tot slot wordt de melk opgeslagen in een gekoelde omgeving om de kwaliteit te behouden totdat deze op uw tafel terechtkomt.
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
    
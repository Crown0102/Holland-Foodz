
@extends('layouts.main')

@section('main')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb background-red" style="height: 25vh;">
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Single Product Section Start -->
    <div class="section section-margin-top section-padding-03">
        <div class="container">
            @php
                $singleProductId = $singleProduct->id;
                $singleProductName = $singleProduct->name;
                $singleProductPrice = $singleProduct->price;
                $singleProductCategory = $singleProduct->category;
                $singleProductDesc = $singleProduct->description;
                if($type=="diary") {
                    $singleImageUrl = '/assets/images/diary/' . $singleProductName . '.jpg'; 
                    $singleProductCategory = 'Milk';
                }
                else {
                    $singleProductTemp = $singleProduct->temp;
                    $singleImageUrl = '/assets/images/candy/' . $singleProductName . '.jpg'; 
                }
            @endphp
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                    <div class="product-details-img d-flex overflow-hidden flex-row">
                        <div class="single-product-vertical-tab swiper-container order-2">
                            <div class="product-desc-img">
                                <img src="{{$singleImageUrl}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="product-desc-content">
                        <h5 class="product-desc-title site-text-blue">We Love {{$singleProductName}}</h5>
                        <p class="product-desc-text site-text-blue">{{$singleProductDesc}}</p>
                    </div>

                    <ul class="product-meta-custom">
                        <li class="product-meta-wrapper">
                            <span class="product-meta-name">SKU:</span>
                            <span class="product-meta-detail">REF. LA-{{$singleProductId}}</span>
                        </li>
                        <!-- <li class="product-meta-wrapper">
                            <span class="product-meta-name">Category:</span>
                            <span class="product-meta-detail">{{$singleProductCategory}}</span>
                        </li> -->
                        <li class="product-meta-wrapper">
                            <span class="product-meta-name">Tags:</span>
                            <span class="product-meta-detail">{{$type}}</span>
                        </li>
                    </ul>
                    <div class="product-meta-custom">
                        <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                        <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                        <a href="#"><i class="lastudioicon-b-pinterest"></i></a>
                        <a href="#"><i class="lastudioicon-b-instagram"></i></a>
                    </div>
                </div>
               
            </div>
            <div class="row section-padding-02">
                <div class="col-lg-12 single-product-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews ({{$customerReviews->count()}})</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-bs-toggle="tab" href="#connect-4" role="tab" aria-selected="false">Additional information</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Start Single Content -->
                            <div class="review text-black">

                            @foreach($customerReviews as $review)
                                @php
                                    $name = $review->name;
                                    $nameParts = explode(" ", $name);
                                    $firstLetter = strtoupper(substr($nameParts[0], 0, 1));
                                    $imageName = $firstLetter;
                                    if(count($nameParts) == 2) {
                                        $lastLetter = strtoupper(substr($nameParts[1], 0, 1));
                                        $imageName = $imageName . '.' . $lastLetter;
                                    }
                                    $score = $review->score / 5 * 100;
                                    $comment = $review->comment;
                                @endphp
                                <!-- Review Top Start -->
                                <div class="review-top d-flex mb-4 align-items-center">

                                    <!-- Review Thumb Start -->
                                    <div  class="review_thumb_1">
                                        <div  class="review_thumb_2 d-flex align-items-center justify-content-center">
                                            <span style="opacity:1; z-index:2;">{{$imageName}}</span>
                                        </div>
                                    </div>
                                    <!-- Review Thumb End -->

                                    <!-- Review Details Start -->
                                    <div class="review_details ms-3">
                                        <!-- Rating Start -->
                                        <div class="review-rating mb-2">
                                            <span class="review-rating-bg">
                                                <span class="review-rating-active" style="width: {{$score}}%"></span>
                                            </span>
                                        </div>
                                        <!-- Rating End -->
                                        <!-- Review Title & Date Start -->
                                        <div class="review-title-date d-flex">
                                            <h5 class="title me-1">{{$name}} - </h5>
                                            <p>{{$review->created_at->format('F d, Y')}}</p>
                                        </div>
                                        <!-- Review Title & Date End -->
                                        <p>{{$comment}}</p>
                                    </div>
                                    <!-- Review Details End -->

                                </div>
                                <!-- Review Top End -->
                            @endforeach
                                <!-- Comments ans Replay Start -->
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-custom">
                                            <h5 class="title mb-2">Add a review</h5>
                                            <p class="comments-area_text">Your email address will not be published. Required fields are marked *</p>

                                            <form class="comments-area_form" method="POST" action="{{ route('reviews.store') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input class="comments-area_input border-blue" type="text" required="required" name="name">
                                                    </div>
                                                    <div class="col-md-5 mb-3">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input class="comments-area_input border-blue" type="text" required="required" name="email">
                                                    </div>

                                                    <input type="hidden" name="productId" value="{{$singleProductId}}" required="required">
                                                    <input type="hidden" name="productType" value="{{$type}}" required="required">
                                                    
                                                    <div class="col-md-2 mb-3">
                                                        <label>Score <span class="required">*</span></label>
                                                        <input class="comments-area_input border-blue" type="number" required="required" name="score" min="0" max="5" step="0.1">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Comment</label>
                                                    <textarea class="comments-area_textarea border-red" required="required" name="comment"></textarea>
                                                </div>
                                                <div class="comment-form-submit">
                                                    <button type="submit" class="btn btn-dark btn-hover-primary">Submit</button>
                                                </div>
                                            </form>
                                            
                                            @if(session('success'))
                                                <script>
                                                    alert("{{ session('success') }}");
                                                </script>
                                            @elseif(session('error'))
                                                <script>
                                                    alert("{{ session('error') }}");
                                                </script>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Comments ans Replay End -->

                            </div>
                            <!-- End Single Content -->
                        </div>
                        <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                            <div class="review size-tab table-responsive-lg">
                                <table class="table border mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="cun-name"><span>Color</span></td>
                                            <td>Blue, Gray, Green, Red, Yellow</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>Size</span></td>
                                            <td>Large, Medium, Small</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Product Tab End -->
            </div>
        </div>
    </div>
    <!-- Single Product Section End -->

    <!-- Product Section Strat -->
    <div class="section-padding-03 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="section-title__title">Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="product-active">
                <div class="swiper">
                    <div class="swiper-wrapper">
                    @foreach($relatedProducts as $product)
                        @php
                            $productName = $product->name;
                            $productPrice = $product->price;
                            $productCategory = $product->category;
                            if($type == "diary") {
                                $imageUrl = '/assets/images/diary/' . $productName . '.jpg';
                            } else {
                                $productTemp = $product->temp;
                                $imageUrl = '/assets/images/candy/' . $productName . '.jpg'; 
                            }
                        @endphp
                        <div class="swiper-slide">
                                <div class="product-item text-center">
                                    @if($type == "candy" && $productTemp != "")
                                        <div class="product-item__badge">{{$productTemp}}</div>
                                    @endif
                                    <div class="product-item__image border w-100">
                                        <a href="/product/{{$productName}}"><img  style="width:70%; height:auto; aspect-ratio:1/1;" src="{{$imageUrl}}" alt="Product"></a>
                                    </div>
                                    <div class="product-item__content pt-5">
                                        <h5 class="product-item__title"><a href="/product/{{$productName}}">{{$productName}}</a></h5>
                                    </div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
                    <div class="swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Section End -->
@endsection

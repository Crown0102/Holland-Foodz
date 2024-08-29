
@extends('layouts.main')

@section('main')

    <div class="slider-section slider-active overflow-hidden">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider-04 animation-style-04" style="background-image: url('/assets/images/bg/redbg6.jpg');">
                    @php
                        
                        for($i = 1; $i <=20; $i++) {
                            $imageHtml = '';
                            $randomNumber1 = rand(1, 9);
                            $randomNumber2 = rand(($i-1)*100, $i*100);
                            $randomNumber3 = rand(1, 8);
                            $imageHtml .= '<img class="call-to-action-more__images_' . $randomNumber1 . '" style="left:' . $randomNumber2 . 'px;" src="assets/images/drop-images/petal' . $randomNumber3 . '.png" alt="Svg Text">';
                            echo $imageHtml;
                        }
                        
                    @endphp
                    <div class="container position-top">
                        <!-- Slider Content Start -->
                        <div class="slider-content-04">
                            <h1 class="slider-content-04__title text-white">Contact Us</h1>
                            <a class="slider-content-07__btn btn slider-btn-02 rounded-pill" href="{{url('/')}}"><span>Home</span></a>
                        </div>
                        <!-- Slider Content Start -->
                    </div>
                </div>
                
                <!-- Single Slider End -->
            </div>
        </div>
    </div>
    <div class="section-padding-03 contact-section2 contact-section2_bg" style="background-image: url('/assets/images/bg/whitebg.jpg'); background-size:cover; background-repeat:no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-section2_formbg h-100">
                        <div class="section-title-04">
                            <h5 class="slider-content-04__title_contact text-red">Information</h5>
                        </div>
                        <!-- <h2 class="contact-section2__title">Information</h2> -->
                        <div class="contact-section2__text text-black">Voor vragen of assistentie kunt u gerust contact met ons opnemen via ons contactformulier of via e-mail op uw e-mailadres.<br> Ons klantenserviceteam is beschikbaar van maandag tot en met vrijdag, van 9.00 tot 17.00 uur, om u te helpen met vragen of zorgen.<br> U kunt ons ook rechtstreeks bellen op uw telefoonnummer voor onmiddellijke assistentie.</div>
                        <ul class="contact-section2_list">
                            <li>
                                <span class="contact-section2_list__icon"><i class="lastudioicon lastudioicon-pin-3-2"></i></span>
                                <span class="contact-section2_list__text text-black">Karolusstraat <br> 4903 RJ Oosterhout</span>
                            </li>
                            <li>
                                <span class="contact-section2_list__icon"><i class="lastudioicon lastudioicon-phone-2"></i></span>
                                <span class="contact-section2_list__text text-black">+31(0)162 744 744</span>
                            </li>
                            <li>
                                <span class="contact-section2_list__icon"><i class="lastudioicon lastudioicon-mail"></i></span>
                                <span class="contact-section2_list__text text-black">info@hollandfoodz.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="contact-section2_formbg h-100">
                        <div class="section-title-04 text-center">
                            <h5 class="slider-content-04__title_contact text-red">Say Something</h5>
                        </div>
                        <form class="comments-area_form"  method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-6 form-p">
                                    <label>Voomaam <span class="required">*</span></label>
                                    <input class="comments-area_input" type="text" required="required" name="firstname">
                                </div>
                                <div class="col-sm-6 col-6 form-p">
                                    <label>Achtemaam <span class="required">*</span></label>
                                    <input class="comments-area_input" type="text" name="lastname" required="required">
                                </div>
                                <div class="col-sm-6 col-6 form-p">
                                    <label>Bedrijf <span class="required">*</span></label>
                                    <input class="comments-area_input" type="text" name="company" required="required">
                                </div>
                                <div class="col-sm-6 col-6 form-p">
                                    <label>Telefoon <span class="required">*</span></label>
                                    <input class="comments-area_input" type="text" name="phone" required="required">
                                </div>
                                <div class="col-sm-6 col-6 form-p">
                                    <label>E-mail <span class="required">*</span></label>
                                    <input class="comments-area_input" type="text" name="email" required="required">
                                </div>
                                <div class="col-sm-6 col-6 form-p">
                                    <label>Onderwerp <span class="required">*</span></label>
                                    <input class="comments-area_input" type="text" name="subject" required="required">
                                </div>
                                <div class="col-md-12 form-p">
                                    <label>Bericht</label>
                                    <textarea class="comments-area_textarea" required="required" name="message"></textarea>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group mb-0 d-flex justify-content-center">
                                        <button class="btn btn-secondary btn-hover-primary" type="submit">Send Message</button>
                                    </div>
                                </div>
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
                        <!-- Message Notification -->
                        <!-- <div class="form-messege"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact form section End -->

    <!-- Contact Map Start -->
    <div class="section">
        <!-- Google Map Area Start -->
        <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
            <iframe class="contact-map" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Karolusstraat,%20Netherland+(Your%20Business%20Name)&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
        <!-- Google Map Area Start -->
    </div>
    <!-- Contact Map End -->
@endsection
    
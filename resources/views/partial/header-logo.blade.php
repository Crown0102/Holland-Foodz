 <!-- Header Start -->
    <div class="header-section header-transparent header-sticky-03 header-self-top">
        <div class="container header-container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-12 d-none d-lg-block">
                    <!-- Header Menu Start -->
                    <div class="header-menu">
                        <ul class="header-primary-menu header-primary-menu-04 px-5 shadow bg-white rounded-pill d-flex justify-content-center">
                            <li><a class="menu-item-link" href="/"><span>Home</span></a>
                            </li>
                            <li><a class="menu-item-link" href="/"><span>Assortment</span></a>
                                <ul class="sub-menu">
                                    <!-- <li><a class="sub-item-link" href="/collection/candy"><span>Candy</span></a></li> -->
                                    <li>
                                        <a class="sub-item-link" href="#" onclick="event.preventDefault(); document.getElementById('candy-form').submit();">
                                            <span>Candy</span>
                                        </a>
                                        <form id="candy-form" action="{{ route('candy') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                    <li>
                                        <a class="sub-item-link" href="#" onclick="event.preventDefault(); document.getElementById('diary-form').submit();">
                                            <span>Diary</span>
                                        </a>
                                        <form id="diary-form" action="{{ route('diary') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/">
                                    <img class="white-logo" src="{{asset('assets/images/logo/logo.png')}}" alt="Logo">
                                </a>
                            </li>
                            <li><a class="menu-item-link" href="/salespoint"><span>Verkooppunten</span></a></li>
                            <li><a class="menu-item-link" href="/contact"><span>Contact</span></a></li>
                        </ul>
                    </div>
                    <!-- Header Menu End -->
                </div>
                <div class="col-md-10 col-10 d-lg-none d-xl-none">
                    <a href="/">
                        <img class="white-logo" src="{{asset('assets/images/logo/logo.jpg')}}" alt="Logo">
                    </a>
                </div>
                <div class="col-2 col-md-2">
                    <!-- Header Meta Start -->
                    <div class="header-meta">
                        <ul class="header-meta__action header-meta__action-03 d-flex justify-content-end">
                            <li class="d-lg-none">
                                <button class="action" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"><i class="lastudioicon-menu-8-1"></i></button>
                            </li>
                        </ul>
                    </div>
                    <!-- Header Meta End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Header End -->

    
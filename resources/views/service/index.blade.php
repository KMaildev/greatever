@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="page-banner bg-image section-padding"
        style="background-image: url({{ asset('data/service_banner2.png') }})">
        <div class="gaps-right d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="gaps-left d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="container"style="text-align:right;">
            <h2 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s" style="color:black;">
                SERVICES
            </h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                <a href="{{ route('home') }}" style="color:black;">Home :</a>
                <span style="color:black;">
                    Our Services
                </span>
            </div>
        </div>
    </section>


    <div class="marquee-wrapper text-slider primary-bg">
        <div class="marquee-inner to-right">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    <span class="stroke-text">
                        Our Services:
                    </span>
                    Passport Application
                    <span class="stroke-text">
                        Visa Registration
                    </span>
                    Notary Services
                    <span class="stroke-text">
                        Vocational Training School
                    </span>
                    Air Ticket Services
                </li>
            </ul>
        </div>
    </div>

    <section class="testimonial testimonial-two sub-bg section-padding">
        <div class="bg-image d-none d-lg-block"
            style="background-image: url({{ asset('assets/images/testimonial/shape2.png') }});">
        </div>
        <div class="women wow bounceInRight d-none d-lg-block" data-wow-duration="1.3s" data-wow-delay=".7s">
            <div class="">
                {{-- wrp --}}
                <img src="{{ asset('data/a1.png') }}" alt="" style="border-radius: 2%;">
            </div>
        </div>
        <div class="stroke-text wow slideInRight d-none d-lg-block" data-wow-duration=".3s" data-wow-delay=".3s">
            <img src="{{ asset('data/text.png') }}" alt="">
        </div>
        <div class="gaps-primary2 d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary-fade.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-header mb-5">
                        <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                            Our Services
                        </h5>
                        <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                            GREAT EVER  COMPANY LIMITED
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="swiper arry-wrp testimonial-slider2">
                                <div class="item">
                                    <h3>
                                        Passport Application
                                    </h3>
                                    <p>
                                        "Get your passport with ease through our dedicated passport application services in
                                        Myanmar. We streamline the process, ensuring a hassle-free experience for our
                                        overseas employment candidates."
                                    </p>
                                </div>
                                <div class="arry-btn">
                                    <div class="slider-info">
                                        <div class="dot theme testimonial-dot"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                </div>
            </div>
        </div>
    </section>




    <section class="testimonial section-padding pb-0">
        <div class="container">
            <div class="testimonial-wrp bor wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
                <div class="row justify-content-between">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <div class="section-header mb-5">
                            <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                                OUR SERVICES
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                                GREAT EVER  COMPANY LIMITED
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="swiper arry-wrp testimonial-slider">
                                    <div class="swiper-wrapper">
                                        <div class="">
                                            <div class="item">
                                                <h3>
                                                    Visa Registration
                                                </h3>
                                                <p>
                                                    "Count on us for seamless visa registration services in Myanmar. We
                                                    simplify the process, ensuring our overseas employment candidates are
                                                    well-prepared for their international assignments."
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="image">
                            <div class="swiper testimonial-slider">
                                <div class="swiper-wrapper">
                                    {{-- swiper-slide --}}
                                    <div class="">
                                        <img src="{{ asset('data/visa.webp') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="service-single section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="left-item">
                        <div class="image">
                            <img src="{{ asset('data/notry.png') }}" alt="image">
                        </div>
                        <h3 class="text-capitalize mt-40 mb-30">
                            Notary Services
                        </h3>
                        <p style="text-align: justify; font-size: 18px;">
                            "At GREAT EVER  COMPANY LIMITED, we understand the importance of notarized documents in overseas
                            employment and international transactions. Our dedicated notary services in Myanmar provide
                            efficient and precise document verification, certification, and legalization. Our experienced
                            notaries are well-versed in handling various document types, including employment contracts,
                            visa applications, and educational transcripts. We ensure your documents meet the highest
                            standards of authenticity and legal recognition, simplifying your overseas employment journey."
                        </p>
                    </div>



                    <div class="blog-two section-padding">
                        <div class="col-lg-12 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
                            <div class="item-left sub-bg">
                                <div class="row g-4">
                                    <div class="col-md-7">
                                        <div class="content">
                                            <h3 style="padding-bottom: 10px;">
                                                Air Ticket Services
                                            </h3>
                                            <p style="text-align: justify">
                                                "When it comes to air ticket services, we've got you covered. At M&S COMPANY
                                                LIMITED, we offer seamless and hassle-free booking solutions for
                                                all your travel needs. Our experienced team is dedicated to finding the best
                                                flight options, ensuring convenience and affordability for your journey."
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <img style="width: 100%;" src="{{ asset('data/air4.webp') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4">
                    <div class="right-item">

                        <div class="item-one mb-30 pb-30">
                            <div class="image">
                                <img src="{{ asset('data/contact1.jpg') }}" alt="image">
                            </div>
                            <h3>Available</h3>
                            <h3 class="text-capitalize mt-2 mb-30">for any type of Service</h3>
                            <a href="{{ route('contact.index') }}">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                        <div class="item-two bg-image mb-30"
                            style="background-image: url({{ asset('data/contact11.jpg') }})">
                            <i class="fa-solid fa-phone-volume ring-animation"></i>
                            <h3 class="text-capitalize">Have any questions?</h3>
                            <h3 class="text-capitalize mt-2 mb-30">
                                call us today!</h3>
                            <div class="line">
                                <span class="sm_line"></span>
                                <span class="big_line"></span>
                            </div>
                            <a href="tel:+9595038526">
                                +9595038526
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

    <section class="services-section" style="padding: 70px 0 10px;">
        <div class="icon-dots"></div>
        <div class="auto-container">
            <div class="row">

                <div class="service-block col-lg-4 col-md-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('data/job-search.jpg') }}" alt="Image"
                                    style="width: 100%; height: 300px; background-size: top; object-fit: cover;">
                            </figure>
                        </div>
                        <div class="caption-box">
                            <h4 class="title">
                                <a href="javascript::void(0)">
                                    Search the right job.
                                </a>
                            </h4>
                        </div>
                        <div class="content-box">
                            <h4 class="title">
                                Search the right job.
                            </h4>
                            <div class="text">
                                Find your deal job with GREAT EVER COMPANY LIMITED Company Limited.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="service-block col-lg-4 col-md-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('data/job-search2.jpeg') }}" alt="Image"
                                    style="width: 100%; height: 300px; background-size: top; object-fit: cover;">
                            </figure>
                        </div>
                        <div class="caption-box">
                            <h4 class="title">
                                <a href="javascript::void(0)">
                                    Submit CV
                                </a>
                            </h4>
                        </div>
                        <div class="content-box">
                            <h4 class="title">
                                Submit CV
                            </h4>
                            <div class="text">
                                Faster Enrollments for your CV.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="service-block col-lg-4 col-md-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('data/job-search3.jpg') }}" alt="Image"
                                    style="width: 100%; height: 300px; background-size: top; object-fit: cover;">
                            </figure>
                        </div>
                        <div class="caption-box">
                            <h4 class="title">
                                <a href="javascript::void(0)">
                                    Apply Jobs
                                </a>
                            </h4>
                        </div>
                        <div class="content-box">
                            <h4 class="title">
                                Apply Jobs
                            </h4>
                            <div class="text">
                                Post a job for free by submitting your job details.
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="about-section" style="padding: 70px 0 10px;">
        <div class="icon-shape-4"></div>
        <div class="auto-container">
            <div class="row">

                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-lg-2 wow fadeInRight" data-wow-delay="300ms">
                    <div class="inner-column">
                        <div class="sec-title"> <span class="sub-title">our introduction</span>
                            <h2 class="scrub-each-word text-split">
                                GREAT EVER CO.,LTD
                            </h2>
                            <div class="text" style="text-align: justify; font-size: 17px;">
                                Great Ever Company Limited was established in 2018.(License No.115470728) We, thereafter,
                                obtained our overseas employment agency license in 2019 (License No.244/2019) and overseas
                                employment agency license for Thailand in 2022 (License No.199/2022) issued by the Ministry
                                of Labor, Immigration and Population, Republic of the Union of Myanmar. We are also the
                                member of Myanmar Oversea Employment Agencies Federation (MOEAF) .
                                <br><br>
                                We pride ourselves on being your gateway to global career opportunities. As an overseas
                                employment agency, we are dedicated to simplifying the process of finding the perfect job
                                abroad. Our experienced team is committed to understanding your unique skills, aspirations,
                                and preferences, ensuring a personalized approach to your international employment journey.
                                With a vast network of global employers, we connect talented individuals with exciting
                                opportunities across various industries.
                                <br><br>
                                Join us at Great Ever Co.,Ltd and let's embark on a journey together, turning your dreams of
                                working overseas into a reality.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInRight">
                    <div class="inner-column">
                        <div class="icon-dots-2 bounce-y"></div>
                        <div class="image-box">
                            <figure class="image overlay-anim reveal">
                                <img src="{{ asset('data/2.jpg') }}" alt="Image">
                            </figure>
                            <figure class="image-2 overlay-anim reveal">
                                <img src="{{ asset('data/3.jpg') }}" alt="Image" style="width: 60%;">
                            </figure>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="process-section" style="padding: 50px 0 50px;">
        <div class="bg bg-pattern-4"></div>
        <div class="small-container">
            <div class="sec-title text-center" style="margin-bottom: 30px;">
                <span class="sub-title">GREAT EVER COMPANY LIMITED</span>
                <h2 class="scrub-each-word text-split">
                    Our Objectives
                </h2>
            </div>
            <div class="row">
                <p style="color: black; font-size: 18px;">
                    Our central objective is to bridge the gap between Myanmar's skilled workforce and the global
                    business landscape. By sourcing and deploying highly skilled individuals, we aim to fulfill the
                    employment needs of various industries while actively combating unemployment challenges
                    within our country.
                </p>
            </div>
        </div>
    </section>


    <section class="call-to-action pull-down">
        <div class="auto-container">
            <div class="outer-box wow fadeInLeft">
                <div class="title-box">
                    <h4 class="title">
                        If you have any queries?
                    </h4>
                </div>
                <div class="icon-box"> <i class="icon fa fa-comments"></i>
                    <div class="icon-lines-14"></div>
                </div>
                <div class="contact-box">
                    <h6>
                        Call Now
                    </h6>
                    <div class="contact">Free <a href="tel:+959 5122659">+959 5122659</a></div>
                </div>
            </div>
        </div>
    </section>



    <section class="features-section-two pt-20">
        <div class="icon-lines-18"></div>
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="sub-title">What We’re offering</span>
                            <h2 class="wow fadeInUp">
                                Our Sending Country
                            </h2>
                        </div>
                        <div class="row">

                            <div class="feature-block-two col-sm-6">
                                <div class="inner-box">
                                    <img src="{{ asset('data/japan.png') }}" alt="" style="width: 20%;">
                                    <h5 class="title">
                                        &nbsp;&nbsp; Japan
                                    </h5>
                                </div>
                            </div>

                            <div class="feature-block-two col-sm-6">
                                <div class="inner-box">
                                    <img src="{{ asset('data/malaysia.png') }}" alt="" style="width: 20%;">
                                    <h5 class="title">
                                        &nbsp;&nbsp; Malaysia
                                    </h5>
                                </div>
                            </div>

                            <div class="feature-block-two col-sm-6">
                                <div class="inner-box">
                                    <img src="{{ asset('data/singapore.png') }}" alt="" style="width: 20%;">
                                    <h5 class="title">
                                        &nbsp;&nbsp; Singapore
                                    </h5>
                                </div>
                            </div>

                            <div class="feature-block-two col-sm-6">
                                <div class="inner-box">
                                    <img src="{{ asset('data/thailand.png') }}" alt="" style="width: 20%;">
                                    <h5 class="title">
                                        &nbsp;&nbsp; Thailand
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6">
                    <div class="inner-column">
                        <div class="overlay-4"></div>
                        <div class="image-box">
                            <figure class="image">
                                <img style="width: 100%" src="{{ asset('data/world_map.jpeg') }}" alt="Image">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="col-lg-12 col-md-12 col-xs-12">
        <style>
            .btn-box {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 30px 0;

            }

            .btn-box .btn-call {
                background: #2a5e2e !important;
                color: #fff;
                font-weight: 600;
                border-radius: 5px;
                padding: 5px 10px;
            }
        </style>
        <div class="btn-box">

            <a href="tel:+959 5122659" class="btn btn-call">
                <i class="fa fa-phone" aria-hidden="true"></i>
                &nbsp;
                Click To Call: +959 5122659
            </a>

            <a class="btn btn-call" href="tel:9595038526" style="margin-left: 10px">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                greatever.agency@gmail.com
            </a>

        </div>
    </div>


    <section class="our-project pt-50 pb-90">
        <div class="icon-lines-21 position-absolute"></div>
        <div class="auto-container">

            <div class="sec-title text-center">
                <span class="sub-title">
                    {{ $category->title ?? '' }}
                </span>
                <h2 class="scrub-each-word text-split">
                    Gallery & Activities
                </h2>
            </div>

            <div class="row">

                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-lg-4 col-sm-6">
                            <div class="project-block">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img data-enlargeable="" src="{{ $image }}" alt=""
                                            style="width: 100%; height: 400px; background-size: top; object-fit: cover;">
                                    </figure>
                                    <div class="content-box">
                                        <div class="content">
                                            <h5 class="title">
                                                GREAT EVER CO.,LTD
                                            </h5>
                                            <div class="inner">
                                                <div class="text">
                                                    {{ $activity->title ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection

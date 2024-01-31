@extends('layouts.main')
@section('title', 'About Us')
@section('content')

    <section class="page-title" style="background-image: url({{ asset('data/about-banner.jpg') }});">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">About Us</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about-section">
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


    <section class="news-section" style="padding: 10px 0 90px;">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    Company Information
                </span>
                <h2 class="scrub-each-word text-split">
                    Our update licenses, <br>
                    Approved by Ministry of Labour
                </h2>
            </div>

            <div class="row align-items-center d-flex justify-content-around">

                <div class="news-block col-lg-3 col-md-3 wow fadeInUp">
                    <div class="inner-box"
                        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="image-box">
                            <figure class="image">
                                <a href="javascript::void(0)">
                                    <img src="{{ asset('data/company/1.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                    <img src="{{ asset('data/company/1.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                </a>
                            </figure>
                        </div>
                        <div class="content-box" style="padding: 0px 0px 0px;">
                            <h4 class="title" style="font-size: 13px; text-align: center;">
                                Overseas Employment Agency Licence
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-3 col-md-3 wow fadeInUp">
                    <div class="inner-box"
                        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="image-box">
                            <figure class="image">
                                <a href="javascript::void(0)">
                                    <img src="{{ asset('data/company/2.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                    <img src="{{ asset('data/company/2.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                </a>
                            </figure>
                        </div>
                        <div class="content-box" style="padding: 0px 0px 0px;">
                            <h4 class="title" style="font-size: 13px; text-align: center;">
                                Overseas Employment Agency Licence
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-3 col-md-3 wow fadeInUp">
                    <div class="inner-box"
                        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="image-box">
                            <figure class="image">
                                <a href="javascript::void(0)">
                                    <img src="{{ asset('data/company/3.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                    <img src="{{ asset('data/company/3.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                </a>
                            </figure>
                        </div>
                        <div class="content-box" style="padding: 0px 0px 0px;">
                            <h4 class="title" style="font-size: 13px; text-align: center;">
                                Overseas Employment Agency Licence for Thailand
                            </h4>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row align-items-center d-flex justify-content-around py-3">
                <div class="news-block col-lg-3 col-md-3 wow fadeInUp">
                    <div class="inner-box"
                        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="image-box">
                            <figure class="image">
                                <a href="javascript::void(0)">
                                    <img src="{{ asset('data/company/4.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                    <img src="{{ asset('data/company/4.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                </a>
                            </figure>
                        </div>
                        <div class="content-box" style="padding: 0px 0px 0px;">
                            <h4 class="title" style="font-size: 13px; text-align: center;">
                                Overseas Employment Agency Licence for Thailand
                            </h4>
                        </div>
                    </div>
                </div>


                <div class="news-block col-lg-3 col-md-3 wow fadeInUp">
                    <div class="inner-box"
                        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="image-box">
                            <figure class="image">
                                <a href="javascript::void(0)">
                                    <img src="{{ asset('data/company/5.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                    <img src="{{ asset('data/company/5.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                </a>
                            </figure>
                        </div>
                        <div class="content-box" style="padding: 0px 0px 0px;">
                            <h4 class="title" style="font-size: 13px; text-align: center;">
                                Overseas Employment Agency Licence for Thailand
                            </h4>
                        </div>
                    </div>
                </div>


                <div class="news-block col-lg-3 col-md-3 wow fadeInUp">
                    <div class="inner-box"
                        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="image-box">
                            <figure class="image">
                                <a href="javascript::void(0)">
                                    <img src="{{ asset('data/company/6.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                    <img src="{{ asset('data/company/6.png') }}" alt="Image"
                                        style="width: 100%; height: 340px; background-size: top; object-position: top; object-fit: cover;">
                                </a>
                            </figure>
                        </div>
                        <div class="content-box" style="padding: 0px 0px 0px;">
                            <h4 class="title" style="font-size: 13px; text-align: center;">
                                Overseas Employment Agency Licence for Thailand
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="features-section-three">
        <div class="bg bg-image" style="background-image: url({{ asset('assets/images/background/1.jpg') }});"></div>
        <div class="large-container">
            <div class="sec-title text-center">
                <span class="sub-title">
                    GREAT EVER COMPANY LIMITED
                </span>
                <h2 class="scrub-each-word text-split">
                    Our Vision, Mission & Value
                </h2>
            </div>


            <div class="row">

                <div class="col-xl-4 col-lg-4">
                    <div class="service-sidebar">
                        <div class="sidebar-widget service-sidebar-single">
                            <div class="service-details-help">
                                <div class="help-shape-1"></div>
                                <div class="help-shape-2"></div>
                                <h2 class="help-title">Contact with <br> us for any <br> advice</h2>
                                <div class="help-icon">
                                    <span class=" lnr-icon-phone-handset"></span>
                                </div>
                                <div class="help-contact">
                                    <p>Need help? Talk to an expert</p>
                                    <a href="tel:+959 5122659">
                                        +959 5122659
                                    </a>
                                </div>
                            </div>

                            <div class="sidebar-widget service-sidebar-single mt-4">
                                <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s"
                                    data-wow-duration="1200m">
                                    <a href="{{ asset('data/company/profile.pdf') }}"
                                        class="theme-btn btn-style-one d-grid" target="_blank">
                                        <span class="btn-title">
                                            <span class="fas fa-file-pdf"></span>
                                            download pdf file
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        <div class="mt-25">
                            <ul class="accordion-box wow fadeInRight">

                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <span class="count">1.</span>
                                        Our Vision
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                "Empowering individuals to achieve global career success through seamless
                                                overseas employment opportunities. We envision a future where every
                                                individual can achieve their professional dreams globally."
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <span class="count">2.</span>
                                        Our Mission
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                We aim to provide our candidates to grow their careers with best companies
                                                according to their qualifications, skills and experiences and place them on
                                                right jobs at right time.
                                                Connecting talents with opportunities abroad, we strive to make
                                                international careers accessible and fulfilling through tailored support and
                                                expertise.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <span class="count">3.</span>
                                        Our Value
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">
                                                Our core values define our commitment to excellence and integrity in the
                                                overseas employment landscape. With a focus on integrity, client-centricity,
                                                and respect for diversity, we empower individuals to navigate global
                                                careers. Collaboration and innovation drive us, ensuring adaptability in the
                                                dynamic job market.
                                                At the heart of our company, these values guide our actions, shape our
                                                identity, and fuel our mission to connect individuals with rewarding
                                                international employment opportunities.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
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

@endsection

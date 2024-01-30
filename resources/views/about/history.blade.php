@extends('layouts.main')
@section('title', 'Company History')
@section('content')

    <section class="story section-padding secondary-bg">
        <div class="map">
            <img src="assets/images/story/map.png" alt="">
        </div>
        <div class="container">
            <div class="section-header text-center position-relative">
                <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">our story</h5>
                <h2 class="wow fadeInUp text-white" data-wow-duration="1.6s" data-wow-delay=".6s">Company
                    history
                </h2>
            </div>
            <div class="wrp">
                <div class="line d-none d-lg-block"></div>
                <div class="main-item pb-65">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="{{ asset('data/h1.png') }}" alt="image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">
                                    <span class="primary-color pb-2">2018</span>
                                    <h3 class="text-white text-capitalize">start the company story</h3>
                                    <p class="text-white pt-4" style="text-align: justify">
                                        GREAT EVER  COMPANY LIMITED Co., Ltd (Overseas Myanmar Manpower Employment Agency)
                                        embarked on its journey in 2018 with a vision to revolutionize the recruitment
                                        landscape.
                                        Founded by Mrs.Ei Ei Khaing, our company was established with a commitment to
                                        connect
                                        skilled Myanmar workers with international opportunities. Over the years, we have
                                        grown from a
                                        promising startup to a reputable name in the industry, driven by our unwavering
                                        dedication to
                                        professionalism, integrity, and client satisfaction. Milestone by milestone, we have
                                        achieved
                                        significant success, serving as a bridge between skilled talent and global
                                        enterprises.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-item pb-65">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">
                                    <span class="primary-color left-span pb-2">2019 - 2020</span>
                                    <h3 class="text-white text-capitalize">
                                        Sent to Thailand
                                    </h3>
                                    <p class="text-white pt-4">
                                        More than 2500 Myanmar MOU workers sent to Thailand
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="{{ asset('data/thai.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-item">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="{{ asset('data/jp.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="title">
                                    <span class="primary-color pb-2">
                                        2021 - 2023
                                    </span>
                                    <h3 class="text-white text-capitalize">
                                        Sent To Malaysia & Japan
                                    </h3>
                                    <p class="text-white pt-4">
                                        More than 3000 Myanmar MOU workers sent to Malaysia & Japan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

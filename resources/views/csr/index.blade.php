@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="page-banner bg-image section-padding" style="background-image: url({{ asset('data/csr_banner.png') }})">
        <div class="gaps-right d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="gaps-left d-none d-sm-block float-bob-x">
            <img src="{{ asset('assets/images/shape/gaps-primary.png') }}" alt="">
        </div>
        <div class="container" style="text-align:left;">
            <h2 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s" style="color:black;">
                CSR
            </h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s">
                <a href="{{ route('home') }}" style="color:black;">Home :</a>
                <span style="color:black;">
                   Corporate Social Responsibility
                </span>
            </div>
        </div>
    </section>


    <section class="blog-three section-padding"
        style="
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
    background-color: #08AC61;
    background: -webkit-gradient(linear, left top, left bottom, from(#08AC61), to(#FBD313));
    background: -webkit-linear-gradient(top, #08AC61, #FBD313);
    background: -moz-linear-gradient(top, #08AC61, #FBD313);
    background: -ms-linear-gradient(top, #08AC61, #FBD313);
    background: -o-linear-gradient(top, #08AC61, #FBD313); 
">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                            CSR
                        </h5>
                        <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s" style="color: white;">
                            <center>
                                Corporate Social Responsibility
                            </center>
                        </h2>
                        <p style="text-align: center; color: white; font-size: 18px;" class="wow fadeInUp"
                            data-wow-duration="1.9s" data-wow-delay=".9s">
                            At GREAT EVER  COMPANY LIMITED, we believe in the power of responsible business practices to
                            make a
                            positive impact on society and the communities in which we operate. Our commitment to Corporate
                            Social Responsibility (CSR) is deeply ingrained in our core values and is integral to every
                            aspect
                            of our operations.
                        </p>
                    </div>
                </div>
            </div>


            <div class="row g-4">
                @foreach ($csrs as $csr)
                    @php
                        $images = explode(',', $csr->photo);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-md-6 col-xl-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
                            <div class="item">
                                <div class="image">
                                    <img src="{{ $image }}" alt="" data-enlargeable=""
                                        style="object-position: top; width: 100%; height: 450px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                                        class="img-enlargeable">
                                    <div class="content" style="width: 100%;">
                                        <h3 style="font-size: 17px;">
                                            {{ $csr->title ?? '' }}
                                        </h3>
                                        <div class="info">
                                            <strong>By:</strong>
                                            <a href="#0">
                                                {{ $csr->submit_date ?? '' }}
                                            </a>
                                            <span class="px-1">|</span>
                                            <span>
                                                {{ $csr->upload_by ?? '' }}
                                            </span>
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

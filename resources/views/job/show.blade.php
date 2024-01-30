@extends('layouts.main')
@section('title', 'Jobs')
@section('content')


    <section class="news-section" style="padding: 70px 0 90px;">
        <div class="icon-lines-20"></div>
        <div class="auto-container">

            <div class="row d-flex justify-content-center">
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <div class="section-header">
                        <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s" style="color: black;">
                            <center>
                                Jobs Available In
                                <span>
                                    {{ $country_detail->country ?? '' }}
                                </span>
                            </center>
                        </h2>
                        <p style="text-align: center; color: black; font-size: 18px;" class="wow fadeInUp"
                            data-wow-duration="1.9s" data-wow-delay=".9s">
                            We are one of the best oversea employment agency in myanmar.
                            <br>
                            {{ $country_detail->description ?? '' }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row py-3">

                @foreach ($jobs as $job)
                    <div class="news-block col-lg-4 col-md-6 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('cv.index') }}">
                                        <img src="{{ $job->photo }}" alt=""
                                            style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                        <img src="{{ $job->photo }}" alt=""
                                            style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                                    </a>
                                </figure>
                                <div class="date">
                                    Job
                                </div>
                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li>
                                        <i class="fa fa-tag"></i>
                                        Job In
                                        {{ $job->country->country ?? '' }}
                                    </li>
                                    <li>
                                        <i class="fa fa-comments"></i>
                                        GREAT EVER CO.,LTD
                                    </li>
                                </ul>
                                <h4 class="title">
                                    <a href="">
                                        {{ $job->title ?? '' }}
                                    </a>
                                </h4>
                                <a href="{{ route('cv.index') }}" class="read-more">
                                    <i class="fa fa-angle-right"></i>
                                    Submit CV
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection

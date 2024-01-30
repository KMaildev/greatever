@extends('layouts.main')
@section('title', 'Activities')
@section('content')
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

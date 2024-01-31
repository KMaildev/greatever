@extends('layouts.main')
@section('title', 'Our Team Members')
@section('content')

    <section class="team-section">
        <div class="icon-lines-17"></div>
        <div class="auto-container">
            <div class="sec-title text-center"> <span class="sub-title">GREAT EVER  COMPANY LIMITED</span>
                <h2 class="scrub-each-word text-split">Meet Our Team Members </h2>
            </div>
        </div>
        <div class="auto-container">
            <div class="row">
                @foreach ($teams as $team)
                    <div class="team-block col-lg-4 col-md-6 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ $team->photo }}" alt="#"
                                        style="width: 100%; height: auto; background-size: top; object-fit: cover;">
                                </figure>
                                <div class="icon-box">
                                    <span class="icon share-icon fa fa-share-alt"></span>
                                    <a href="mailto:greatever.agency@gmail.com " class="icon mail-icon fa fa-envelope"></a>
                                </div>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="info-box">
                                <h5 class="name">
                                    {{ $team->name ?? '' }}
                                </h5>
                                <span class="designation">
                                    {{ $team->position ?? '' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

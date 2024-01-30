@extends('layouts.main')
@section('title', 'Our Team Members')
@section('content')

    <section class="team-two section-padding">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <div class="section-header">
                        <h2 class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".6s" style="color: black;">
                            <center>
                                Meet Our Team Members
                            </center>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row g-4">

                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <a href="javascript::void(0)" class="image d-block">
                                <img src="{{ $team->photo }}" alt="#"
                                    style="width: 100%; height: auto; background-size: top; object-fit: cover;">
                            </a>
                            <div class="team-info">
                                <a class="d-block" href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                <a class="d-block" href="#0"><i class="fa-brands fa-twitter"></i></a>
                                <a class="d-block" href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="javascript::void(0)">
                                        {{ $team->name ?? '' }}
                                    </a>
                                </h3>
                                <span>
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

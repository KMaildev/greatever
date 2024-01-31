@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">Send us email</span>
                        <h2>Feel free to write</h2>
                    </div>

                    <form id="create-form" class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                        autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <textarea name="message" class="form-control" rows="2" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="theme-btn btn-style-one">
                                    <span class="btn-title">Send message</span>
                                </button>

                                <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span
                                        class="btn-title">Reset</span></button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h2>Get in touch with us</h2>
                            <div class="text">
                                Alternatively, you may contact us by filling up the contact form. Our team will response you
                                shortly.
                            </div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Have any question?</h6>
                                    <a href="tel:+959 5122659" class="tel:0123456789">
                                        +959 5122659,
                                    </a>

                                    <a href="tel:+959 690903095" class="tel:0123456789">
                                        +959 690903095
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Write email</h6>
                                    <a href="mailto:greatever.agency@gmail.com">
                                        greatever.agency@gmail.com
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>Visit anytime</h6>
                                    <span style="text-transform: lowercase;">
                                        NO. 26, YARZAR DIRIT STREET, <br> EAST DAGON TOWNSHIP, YANGON, MYANMAR.
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact') !!}
@endsection

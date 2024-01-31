<header class="main-header header-style-two">
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">

                <ul class="list-style-one light">
                    <li>
                        <i class="fa fa-phone"></i>
                        <a href="tel:+959 5122659" class="tel:0123456789">
                            +959 5122659,
                        </a>

                        <a href="tel:+959 690903095" class="tel:0123456789">
                            +959 690903095
                        </a>
                    </li>

                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:greatever.agency@gmail.com">
                            greatever.agency@gmail.com
                        </a>
                    </li>

                    <li>
                        <i class="fa fa-map-marker"></i>
                        NO. 26, YARZAR DIRIT STREET, EAST DAGON TOWNSHIP, YANGON, MYANMAR.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-lower"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">

        <div class="main-box">
            {{-- logo-box --}}
            <div class="" style="margin-right: 50px;">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/company/logo.png') }}" alt="Logo"
                            title="GREAT EVER  COMPANY LIMITED" style="width: 200px;">
                    </a>
                </div>
            </div>

            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">

                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript::void(0)">
                                About
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        Company Introduction
                                    </a>
                                </li>

                                <li hidden>
                                    <a href="{{ route('history') }}">
                                        Company History
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team') }}">
                                        Our Team Members
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="{{ route('md') }}">
                                Founder’s Message
                            </a>
                        </li>

                        <li>
                            <a href="{{ asset('data/company/profile.pdf') }}" target="_blank">
                                Profile
                            </a>
                        </li>


                        <li class="dropdown">
                            <a href="javascript::void(0)">
                                Our Network
                            </a>
                            <ul class="sub-menu">
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('job.show', $country->id) }}">
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>


                        <li hidden>
                            <a href="javascript::void(0)">
                                SERVICES
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('service.index') }}">
                                        Services
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript::void(0)">
                                        Vocational Training School
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li hidden>
                            <a href="{{ route('csr.index') }}">
                                CSR
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript::void(0)">
                                Gallery
                            </a>
                            <ul class="sub-menu">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('activities.show', $category->id) }}">
                                            {{ $category->title ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="javascript::void(0)">
                                Application
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('cv.index') }}">
                                        Job Application
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('employer.index') }}">
                                        Employers Application
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('contact.index') }}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>


            <div class="outer-box">

                <ul class="social-icon-one">
                    <li><a href="#"><i class="icon fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="icon fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="icon fab fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="icon fab fa-instagram"></i></a></li>
                </ul>

                <div class="mobile-nav-toggler">
                    <span class="icon lnr-icon-bars"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/company/logo.png') }}" alt>
                    </a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
            </ul>
            <ul class="contact-list-one">
                <li>
                    <i class="icon lnr-icon-phone-handset"></i>
                    <span class="title">Call Now</span>
                    <div class="text">
                        <a href="tel:+959 5122659" class="tel:0123456789">
                            +959 5122659,
                        </a>

                        <a href="tel:+959 690903095" class="tel:0123456789">
                            +959 690903095
                        </a>
                    </div>
                </li>

                <li>
                    <i class="icon lnr-icon-envelope1"></i>
                    <span class="title">Send Email</span>
                    <div class="text">
                        <a href="mailto:greatever.agency@gmail.com">
                            greatever.agency@gmail.com
                        </a>
                    </div>
                </li>

                <li>
                    <i class="icon lnr-icon-map-marker"></i>
                    <span class="title">Address</span>
                    <div class="text">
                        NO. 26, YARZAR DIRIT STREET, EAST DAGON TOWNSHIP, YANGON, MYANMAR.
                    </div>
                </li>
            </ul>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div>


    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">

                <div class="">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('data/company/logo.png') }}" alt="GREAT EVER  COMPANY LIMITED"
                            style="width: 100px;">
                    </a>
                </div>

                <div class="nav-outer">

                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">

                            </ul>
                        </div>
                    </nav>


                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>

</header>

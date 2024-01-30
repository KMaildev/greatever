@extends('layouts.main')
@section('title', 'Founder’s Message')
@section('content')

    <section class="team-details" style="background-image: url({{ asset('assets/images/icons/icon-lines-20.png') }});">
        <div class></div>
        <div class="container pb-100">
            <div class="team-details__top pb-70">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__top-left">
                            <div class="team-details__top-img">
                                <img src="{{ asset('data/md.jpg') }}" alt>
                                <div class="team-details__big-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__top-right">
                            <div class="team-details__top-content">
                                <h3 class="team-details__top-name">
                                    GREAT EVER CO.,LTD
                                </h3>
                                <p class="team-details__top-title">
                                    Managing Director　 (代表取締役）
                                </p>
                                <div class="team-details-contact mb-30">
                                    <h5 class="mb-0">Email Address</h5>
                                    <div class>
                                        <span>
                                            <a href="mailto:greatever.agency@gmail.com">
                                                greatever.agency@gmail.com
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="team-details-contact mb-30">
                                    <h5 class="mb-0">Phone Number</h5>
                                    <div class>
                                        <span>
                                            <a href="tel:+959 5122659" class="tel:0123456789">
                                                +959 5122659,
                                            </a>

                                            <a href="tel:+959 690903095" class="tel:0123456789">
                                                +959 690903095
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="team-details-contact">
                                    <h5 class="mb-0"> Address</h5>
                                    <div class>
                                        <span>
                                            NO. 26, YARZAR DIRIT STREET, EAST DAGON TOWNSHIP, YANGON, MYANMAR.
                                        </span>
                                    </div>
                                </div>
                                <div class="team-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a
                                        href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i
                                            class="fab fa-pinterest-p"></i></a> <a href="#"><i
                                            class="fab fa-instagram"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-details__bottom pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <div class="team-details__top-content">
                                <h3 class="team-details__top-name">
                                    DAW AYE AYE THET (エーエーテッ）
                                </h3>
                                <p class="team-details__top-title">
                                    Managing Director　 (代表取締役）
                                </p>
                            </div>
                        </center>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-left">
                            <p class="team-details__bottom-left-text"
                                style="text-align: justify; color: black; font-size: 18px;">
                                Great Ever Co.,Ltd is an admired Manpower Consultancy and a Perfect Key to provide
                                jobseekers seeking employment in Myanmar.
                                Human Resources in the world today have been valued subjected to the adequate skills they
                                acquire.
                                <br><br>
                                We aim to achieve perfection in everything we undertake and have a commitment to excel.
                                I and my team would like to assure you of our constant endeavor to deliver services of
                                highest quality to our clients.
                                It will be our great pleasure to serve your esteem organization.
                                <br><br>
                                We look forward to a long and mutually beneficial business relationship with you.
                                <br><br>
                                With Best Regards!
                            </p>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-left">
                            <p class="team-details__bottom-left-text"
                                style="text-align: justify; color: black; font-size: 18px;">
                                Great Ever Co.,Ltd は、ミャンマーでの就職を希望する求職者に提供する人材コンサルタント会社であり、完璧な鍵です。
                                今日の世界の人材は、適切なスキルを身につけることで評価されています。
                                私たちは、取り組むすべてにおいて完璧を達成することを目指し、卓越することを約束します。
                                私と私のチームは、お客様に最高品質のサービスを提供するための絶え間ない努力を保証したいと思います.
                                あなたの尊敬する組織に仕えることは私たちの大きな喜びです。
                                <br><br>
                                私たちはあなたとの長期的で相互に有益なビジネス関係を楽しみにしています.
                                <br><br>
                                敬具！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

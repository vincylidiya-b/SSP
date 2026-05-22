@extends('frontend.layouts.subpage')
@section('title', 'Customers')
@section('description', 'Join over 1M+ students and institutions using SmartSchool Plus. Discover our satisfied customers across India and abroad.')
@section('keywords', 'SmartSchool customers, school software clients, education ERP users, successful school management implementations')
@section('content')

    <style>
        .feature-image {
            background: #fff;
            margin: 0 auto;
            text-align: center;
        }

        .post-post-grid .feature-image img {
            max-width: 100%;
            width: auto;
        }

        .service {
            padding-top: 120px;
            padding-bottom: 100px;
        }

        .pixsass-portfolio-items.portfolio-one .pixsass-portfolio-item {
            margin-bottom: 25px;
        }

        .pixsass-isotope-filter li.current a {
            border-color: transparent;
            color: #fa7070;
        }

        .pixsass-isotope-filter li a {
            padding: 0;
        }

        /* current-class css */
        .h_map ul li.current .place_name {
            background: #070089;
            box-shadow: 0px 20px 30px 0px #7052fb47;
        }

        .h_map ul li.current .place_name:before {
            color: #333;
            border-color: #7052fb transparent transparent transparent;
        }

        .h_map ul li.current .round {
            background: #070089;
        }

        .h_map ul li.current .round:before,
        .h_map ul li.current .round:after {
            content: "";
            background: #7052fb;
        }

        .h_map ul li.current .round .dot {
            background: rgba(112, 82, 251, 0.27);
        }

        .testimonials-two {
            background: #efedfd;
        }

        .op-4 {
            opacity: 0.4;
        }

        .portfolios {
            padding: 60px 0 125px;
        }

        .font-500 {
            font-weight: 500;
        }

        .bg-cl {
            background: url('media/background/bg-client.svg') no-repeat center top;
            background-size: 100%;
        }

        .max-w {
            max-width: 70%;
            margin: 0 auto;
        }

        svg.h100 {
            width: 570px;
        }

        .pixsass-isotope {
            max-height: 551px;
            overflow: hidden;
        }

        .page-banner {
            background: #f9f9f9;
            background-image: linear-gradient(-60deg, #ffffff 0%, #ffffff 100%);
        }

        .s-red {
            color: #403434 !important;
        }

        .animate-ball .ball {
            background: #f4f7fb;
        }

        .pt-country-image {
            display: inline-block;
            width: 32px;
            height: 22px;
            background: url(general-sprite1.png);
        }

        .pt-country-detail>span {
            vertical-align: text-top;
            height: 25px;
            display: inline-block;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            padding-left: 15px;
            line-height: 6px;
        }

        .pt-country-Qatar {
            background-position: -6px -151px;
        }

        .pt-country-Nepal {
            background-position: -35px -133px;
        }

        .pt-country-Myanmar {
            background-position: -91px -57px;
        }

        .pt-country-Kuwait {
            background-position: -132px -56px;
        }

        .pt-country-eastafrica {
            background-position: -177px -56px;
        }

        .pt-country-India {
            background-position: -216px -56px;
        }

        .blog-grid-two {
            padding: 50px 0;
            background: #efefef;
        }

        .testimonials-two {
            padding: 35px 0 60px;
        }

        .entry-meta {
            margin-bottom: 20px;
            margin-top: 15px;
        }

        .i-color {
            font-size: 52px;
            margin-right: 4px;
            color: #7f8092;
        }

        .entry-meta a {
            color: #2b2350;
            margin-right: 10px;
            font-size: 15px;
            display: inline-block;
        }

        .blog-post-two .blog-content {
            padding: 2px 8px !important;
            text-align: left;
            background: #fff;
        }

        b,
        strong {
            font-weight: 600;
        }

        .count-col.slide-left {
            display: inline-block;
            padding-right: 20px;
        }

        .pt-list {
            width: 80%;
            border: 1px solid lightgray;
            border-radius: 10px;
            margin: 80px auto 35px;
            padding: 40px 20px;
            text-align: center;
            line-height: 1.5;
            background-color: rgba(255, 255, 255, 0.5);
        }

        @media (max-width: 991px) {
            .font-style-xs {
                font-size: 20px;
                line-height: 30px;
                letter-spacing: .5px;
            }

            .pixsass-isotope {
                max-height: initial;
                margin-top: 12%;
            }

            .portfolios {
                padding: 20px 0 40px;
            }

            .max-w {
                max-width: 90%;
                margin: 0 auto;
            }

            .faq-forms1 {
                padding-bottom: 76px;
            }
        }

        .faq-forms1 {
            padding-bottom: 34px;
        }
    </style>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h1 class="title">Customers</h1>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ url('/') }}">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Customers</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <section class="portfolios">
        <div class="container">

            <div class="portfolio-inner row">
                <div class="col-lg-6">
                    <div class="h_map">
                        <ul class="list-unstyled pixsass-isotope-filter">
                            <li class="wow fadeIn" data-wow-delay="0.7s" title="Jammu &amp; Kashmir"
                                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                                <a href="#" data-id="26" data-filter=".jammu ">
                                    <div class="place_name hide wow fadeInUp" data-wow-delay="0.2s"> Jammu & Kashmir <br>
                                        <!-- <span style="color:goldenrod;">200 +</span>-->
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeIn" data-wow-delay="0.9s" title="Himachal"
                                style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">
                                <div class="place_name hide wow fadeInUp" data-wow-delay="0.2s"
                                    style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"> Himachal
                                    Pradesh</div>
                                <div class="round">
                                    <div class="dot"></div>
                                </div>
                            </li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Uttarakhand"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="5" data-filter=".Uttarakhand ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        Uttarakhand
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="0.7s" title="Haryana"
                                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;"> <a
                                    href="#" data-id="6" data-filter=".Haryana ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"> Haryana
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn current" data-wow-delay="0.3s" title="Delhi"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"><a
                                    href="#" data-id="7" data-filter=".Delhi">
                                    <div class="place_name wow fadeInUp" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"> Delhi
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Rajasthan"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="8" data-filter=".Rajasthan ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"> Rajasthan
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Uttar Pradesh"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="9" data-filter=".Uttar ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Uttar
                                        Pradesh
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Bihar"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="10" data-filter=".Bihar">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Bihar
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Punjab"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="3" data-filter=".Punjab">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Punjab
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Himachal Pradesh"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
                                <a href="#" data-id="2" data-filter=".Himachal">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Himachal
                                        Pradesh
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Assam"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
                                <a href="#" data-id="18" data-filter=".Assam">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Assam
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="West Bengal"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
                                <a href="#" data-id="19" data-filter=".Bengal">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">West
                                        Bengal
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeIn" data-wow-delay="1.1s" title="Jharkhand"
                                style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;"><a
                                    href="#" data-id="20" data-filter=".Jharkhand ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"> Jharkhand
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
                                <a href="#" data-id="21" data-filter=".Odisha ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;"> Odisha
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Chhattisgarh"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="22" data-filter=".Chhattisgarh ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                        Chhattisgarh
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Madhya Pradesh"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="23" data-filter=".Madhya ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        Madhya Pradesh
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="0.5s" title="Gujarat"
                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;"> <a
                                    href="#" data-id="24" data-filter=".Gujarat">
                                    <div class="place_name wow animated hide" data-wow-delay="0.2s"
                                        style="visibility: visible; animation-delay: 0.2s;"> Gujarat</div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Maharashtra"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="27" data-filter=".Maharashtra ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                        Maharashtra
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="0.1s" title="Andhra Pradesh"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;"><a
                                    href="#" data-id="28" data-filter=".Andhra" class="selected">
                                    <div class="place_name hide wow fadeInUp" data-wow-delay="0.2s"> Andhra Pradesh
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a> </li>
                            <li class="wow fadeIn" data-wow-delay="1.3s" title="Karnataka"
                                style="visibility: visible; animation-delay: 1.3s; animation-name: fadeIn;"><a
                                    href="#" data-id="29" data-filter=".Karnataka ">
                                    <div class="place_name hide wow fadeInUp" data-wow-delay="0.2s"> Karnataka</div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Sikkim"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
                                <div class="place_name hide wow fadeInUp" data-wow-delay="0.2s"
                                    style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Sikkim</div>
                                <div class="round">
                                    <div class="dot"></div>
                                </div>
                            </li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Kerala"><a href="#"
                                    data-id="32" data-filter=".Kerala ">
                                    <div class="place_name hide wow fadeInUp" data-wow-delay="0.2s"> Kerala
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Tamil Nadu"><a href="#"
                                    data-id="33" data-filter=".Tamil ">
                                    <div class="place_name hide wow fadeInUp" data-wow-delay="0.2s"> Tamil Nadu
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Telangana"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="37" data-filter=".Telangana ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Telangana
                                    </div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>
                            <li class="wow fadeIn" data-wow-delay="1.5s" title="Andaman Nicobar"
                                style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;"><a
                                    href="#" data-id="38" data-filter=".Nicobar ">
                                    <div class="place_name wow fadeInUp hide" data-wow-delay="0.2s"
                                        style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">Andaman
                                        Nicobar</div>
                                    <div class="round">
                                        <div class="dot"></div>
                                    </div>
                                </a></li>



                        </ul>
                    </div>

                    <div class="shape-bg">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;"
                            xml:space="preserve" class="h100">
                            <style type="text/css">
                                .st0 {
                                    fill: #E8E8E8;
                                    stroke: #898989;
                                    stroke-miterlimit: 10;
                                }
                            </style>
                            <g>
                                <path class="st0 st-1 state_10" d="M610,368.1c1.5,0.3,1.7,4.7,2.6,6.3c0.2,0.3,0.4,1.3,0.5,1.4c0.2,0.4,1.8,0.8,2.2,1.6c1,1.6-0.7,4.2,0.5,5.8
              c1.9,2.5,5.2,0,6.6,2.2c1.1,1.9-0.1,3.2,1.7,4.9c1,0.9,3.8-0.7,3.6,2.2c-0.2,3-9,1.7-11.2,2.6c0.3-0.1-2.3,1.7-2.2,1.6
              c-0.9,0.7-2.5-0.1-1.9,2c0.6,1.9,6.2,1.4,7.6,3.1c2.8,3.5-1.7,6.1-4.7,6.4c2,3.8,5.6,6.8,9.1,8.8c1.9,1.1,3.2,2,5.1,2.9
              c1.4,0.7,3.7,0.8,4.7,2.1c5.7,6.7-7.2,4.3-9.1,4.8c-1.6,0.4-1.8,2.2-4.1,1.6c-0.6-0.1-0.2-3-2.8-1.2c-0.5,0.3-0.3,1.9-0.8,2.5
              c-1,1-2.2,1.1-3.5,1.9c-1.5,1-2.2,1.8-3.3,3.3c-2.2,2.9-3.4,3-6.5,4.8c-2,1.2-5.2,2.4-6.9,3.6c-4.3,3.1-3.8,10.3-1.7,14.7
              c1.3,2.8,10,9,3.1,12.2c3.4,2.1,7.5,1.6,11.3,1.7c1.2,0,4.2,0.7,5.2-0.2c0.5-0.4,0.1-2.3,0.4-2.4c0,0,0.3-0.4,0.6-0.5
              c2.6-1,3.6,2.7,4.9,3.4c0,1,0.4,1.5,1.2,1.4c0.7,0.1,1.3-0.1,1.8-0.7c2.4,0.2,3.7-2.7,5.4,1c0.7,1.6-0.5,3,1,4.6
              c1.7,1.8,4.7,1.1,5.7,0.4c0.5-0.3-0.3-1.9,0.1-2.4c0.3-0.3,1.2,0.2,1.5,0c1.1,0.2,1.9,0,2.5-0.8c0.2-0.8,0.5-1.5,0.8-2.2
              c1.5-0.6,2.5-1.6,4.2-0.5c2.7,1.8,1.6,5.1,5.6,4.1c0,0,3-1.5,3.4-1.8c0.8,0,1.6-0.1,2.2-0.6c0.2-0.5,0.2-0.9,0.1-1.4
              c2.4-1.4,5.3-0.6,7.5-1.7c1.3-0.6,0.8-1.2,1.8-1.8c0.3-0.2,2-1,2.1-1.2c0.8-1,1.7-2.4,2.2-4c2.2-6.7,4.7-2.3,8.9-2.5
              c2.4-0.1,2.4-0.9,4.2,0c2.4,1.3,2.9,4.6,2.7,7c1.1,0,3-1.5,4.2-0.6c1.4,1,0.4,2.7,1,3.8c0.8,1.6-0.1,1.3,1,2.3
              c0.8,0.7,2.5,1.2,3.4,0.4c-0.1,0.1,5.3-14.4,6.5-5.4c1.7-0.1,3-1.7,2.9-3.4c1.6,0.1,3.6,2.9,4.8,2.6c0.2-3.4,2.4-2.6,3.5-5.3
              c0.5-1.4-0.2-3.1,0.3-4.5c0.7-1.9,1.8-0.9,2.3-3.7c0.4-2.3-0.8-3.7,0.9-5.6c1-1.1,2.2-0.7,3.2-2.1c0.7-0.9,0.5-3.3,1.3-4
              c0.9-0.8,4.2-0.2,5.3-0.3c0-0.1,1.3-4.5,1.3-4.6c3.3-2.1,7.5,2.4,9.9,3.7c0-1.5,2.4-2.3,2.4-3.4c0-0.2-1.5-2.9-1.7-3.1
              c-0.6-1.1-2.3-3.5-1.6-4.9c0.1-0.1,1.5-0.2,1.4,0c0.6,0,1.1,0,1.7,0c0-0.4,0.1-0.7,0.1-1.1c1.4-1,0-1.9,2.4-2.4
              c1.3-0.3,2.2,0.6,3.3,1.1c-0.4-2.4-0.4-6-2.7-7.7c-0.8-0.6-2.3-0.7-3-1c-5.1-2.9-1.9-6.4-1.9-10.8c2.7,0.8,2.4-0.5,3.8-1.6
              c2.1-1.7,3.7-3.5,5.6-5.5c3.1-3.2,1.9-2.5,1.3-7.2c-0.5-3.4,1.2-4.8-2.1-6.4c0,1.4-2,7.2-3.2,2.9c-1.5,1.5-0.3,7-2.7,7.1
              c-1.3,0-2.9-3.4-4.3-3.9c0.2,2.1-4.2,2-5.8,2.5c-1.1,0.3-2.1,0.9-3.2,1c-1.5,0.1-3.8-1.5-5.2-0.8c-3.7,1.8-0.7,3.8-6.1,1.9
              c0.5,0.2-3.8-1.4-3.5-1.1c-0.8-0.8-0.7-4.9-1.4-6.3c-0.7,0.1-3.3,2.9-4.1,3.5c-2.2,1.6-5.3,3.5-7.3,3c-1.2-0.3-3.3-2.6-4.6-3.3
              c-1.7-0.8-3-1.1-4.8-1.7c-1.2-0.4-2.2-1.1-3.5-1.2c-1.2-0.1-2.2,1-3.9,0.6c-1.6-0.4-2.8-1.9-4.6-1.8c-1.6,0.1-2.7,2-4,2.6
              c-2,0.9-0.7,0.7-2.7,0.4c0.1,0-4.1-2.2-3.7-1.7c-2.2-3.1,3.4-10.2-3.9-8.1c-2.7,0.8-4,3.6-6.5,4.4c-0.7,0.2-3.3,0.5-4,0.1
              c-1.5-0.9-0.9-2.4-1.8-3.1c-1.7-1.3-2.4-0.3-4.1-1c-1.2-0.5-2.1-2.4-3.6-3.3c-2.8-1.7-8,0.4-10.1-1.8c-2.1-2.1,1.3-6.9-0.1-9.9
              c-1.1-2.3-0.5-1.5-3.3-2.1c-1.5-0.3-3.2,0.2-4.7-0.2c-3.7-0.9-4.1-3.5-7.5-4.5c-1.1-0.3-1.4-1.2-2.8-1.1c1.8-0.2-2.5,2.4-1.8,2.1
              c-1.4,0.6-4.3,0.1-5.5,1.3C608.1,366,607.4,368.3,610,368.1z" />

                                <path class="st0 st-2" d="M744.2,366.7c1.3,2.6,1.4,2.1,4.7,2.4c2.4,0.2,5.2,1.7,7.1,0.3c2.9-2.2,0.2-3.2,5-3.1c0.4,0,1.2,0.8,1.7,0.8
              s1-0.7,1.5-0.6c1.4,0.2,0.4,0.5,1.8,0.1c0.8-0.2,0.6-0.2,1.7,0.4c-0.1-2.5,3-2.1,2.5-5.1c-0.5-2.6-3.7-3.1-3.8-6.6
              c0-1.6,1.1-3.2,1.6-4.8c0.9-2.8,0.9-4.1,0.8-6.5c-0.1-2.2-0.4-7.8-3.6-9.2c-1.2-0.5-1.6,0.4-2.7,0.1c-0.6-0.2-0.6-1.3-0.7-1.3
              c-1.9-0.1-3.3-0.1-3.5,2.9c-0.8-0.3-1.5-0.7-2.2-1.1c-0.1,0.2-1.9,3.8-2.3,3.2c-1.7-2.5-1.1-0.1-2.8,0.4c-1.6,0.5-4.2,0.4-5.8,0.5
              c0,2.5,2,3.1,1.5,6c-0.3,1.9-1.7,4.8-2.6,6.6c-1.4,2.6-1.4,2.8-1.6,5.9c-0.1,1.2,0.1,6.7-0.8,7.4
              C742.6,365.6,743.7,365.8,744.2,366.7z" />

                                <path class="st0 st-3 state_20" d="M595.5,484c0.6,0.8,3.9,0.4,4.9,1.6c1.7,2,0.7,4.1,3,6.2c1.8,1.6,3,2.3,4.5,4.3c0.8,1.2,0.5,2.7,2.5,2.1
              c-0.1,4.2,1.2,2.8,3.9,3.6c4.4,1.4,3,4.2,2.5,8c-0.3,3.3,1.2,2.6,2,4.9c0.6,2,0.5,3.9,1.3,5.5c2,4.2,4.8,3.9,8.8,4.2
              c-0.6,2.3-0.5,6.6-1.9,8.5c-1.7,2.2-7,2.5-6.6,6.5c-0.1-0.8,3.8,4.3,3.6,4.2c1.1,0.9,2,1,3.3,1.5c4.4,1.6,5.5-0.1,9.4-1.5
              c3.6-1.3,7.7,0,11.5-1.1c1.9-0.6,5.9-3.8,7.9-2.5c0.7,0.5,0.5,10.9,0,11.9c-0.3,0.8-1.3,1.8-2.2,2.4c3.6,0.8,5.2,2.8,8.5,0.6
              c3.4-2.3,4.1-3.9,8.7-2.6c2.7,0.7,4.3,2,7.1,2.2c1.2,0.1,0.9-1.2,1.8-0.8c1.8,0.7,2,2.2,0.9,3.7c3.4,0.9,1.8-0.3,3.3-1.9
              c-0.5,0.5,2.7-3.7,2.4-2.3c0.3-1.2-1.2-2.9-1.2-4.1c0-1.7,1-1.9,0.8-4c-0.2-2-2-4.3-2.8-6.2c4.2-0.4,6,0.2,9.5,1.1
              c4.3,1.1,6.8,1.8,8.6,6.5c1.1-0.2,1.1-1.8,2.3-2.2c2.4-0.7,3.8,1.1,5.3,2.4c1.7,1.4,0.1,2.2,2.3,2.3c1.3,0.1,2.3-0.9,3.2-1.7
              c-1.3-0.5-1.3-2.8-2-3.8c-1-1.4-4.2-1.6-0.7-3.3c-0.4-2.4-3.7-4.1-5.8-3.5c1.4-2.8-2.8-3.7-4.3-5.8c-1.7-2.4-2.9-5.6,1-7.2
              c-1.3-1-4.2,0-5.8-0.1c-2.8-0.1-5.8-2.1-7.9-4c0,0-1.2,0-1.3,0c-0.6-0.3-0.6-1.5-1.5-1.9c-1.8-0.8-4.6,1.2-4.6-1.8
              c-0.5-0.3-2.2,0.4-2.5-0.2c-0.8-1.5,0.5-3.8,1-5.1c0.6-1.8,2.1-4.2-1.2-5.7c2.3-0.2,4.6-0.1,6.9-0.2c-0.4-2.4,0.2-5.6,4.4-3.2
              c1.1,0.6,0.1,1.9,1.2,3.1c3.8,4.1,5.5-2.2,7.6-3.9c1.2-1,2.6-2.1,3.9-2.8c1.7-0.9,4.2-0.8,5.6-1.7c2-1.3,1-1.8,2.2-3.9
              c0,0.1,2.9-2.2,2.4-2c1.5-0.6,1.2-0.8,3.2-0.6c1.8,0.2,3.3,1.4,5.2,1.4c0.2-3.1-1.8-2.4,2.7-2c0.1-1.1,1-2.3,1-3.3
              c0-1.5-2.6-1.7-1-3.4c2.4-2.3,5,2,6.6,2.1c0.1-3.7,1.7-6.5,5.9-6.8c-1.8-2.3-0.6-2,1.5-4.3c2.1-2.4,1.7-3.9,1.5-6.3
              c-0.1-1-0.4-3-0.8-4.3c2.6-0.2,6,0.3,4-3.7c-0.9-1.9-2.6-0.7-2.5-3.5c0-0.8,1.2-0.3,1.3-0.9c0.8-3.9,1-7.7-2.3-10.5
              c-2.2-1.8-7.2-4.7-10.2-4.5c-0.1,1.5-0.6,4.1-1.6,4.7c-1.2,0.8-3.9-0.8-5.1,0c-0.7,0.5-0.7,2.8-1.2,3.6c-1.1,1.8-3.3,1.7-4.1,3.2
              c-0.6,1.1,0.5,3,0.3,4.1c-0.4,2-1.4,2.1-1.9,3.5c-0.5,1.5-0.1,4.4-1,5.9c-1,1.7-2.2,1.7-3.4,2.6c-2.5,2.1,1.7,1.4-1,2.3
              c-1.7,0.6-2.7-1.3-3.8-2.1c-1,3.2-4.2,2.2-5.3,2.3c-0.6,0,0.1-1.6-1.3-1.2c0,0-1.9,2.6-2,3c-1.3,3.5-0.5,4.9-4.2,4.7
              c-2.4-0.2-2.8-2-3.4-4.4c-1.4-5.7-1.2,0.9-4.9-2c-0.7-0.5,0.3-1-0.2-2.1c-1-2,0.2-2.4-2-4.1c-2.7-2.2,0.5-0.4-3.8-0.6
              c-1.2,0.4-2.3,0.3-3.4-0.2c-0.1-0.7-0.4-1.1-0.9-1.1c-3.5,0-3,1.1-4.1,4.3c-0.3,0.8,0.2,2.1-0.5,2.8c-0.9,0.9-2.2,0.4-3,1
              c-0.8,0.6-0.5,2.1-1.7,2.8c-1.4,0.9-4.1-0.2-5.7,0.5c-2.3,1-3.1,2.2-5.5,3.3c-0.5,0.2-2.8,1.9-3,1.9c-1.8,0.4-4,0-5.4-1.4
              c-0.9-1-0.8-3.1-2.1-3.3c-2.4-0.3-1.3,1.5-2.4,2.4c-0.5,0.4-4,1.5-4,1.5c-2,3,1.4,4.2-4.3,3.1c-2.8-0.5-4-1.5-5-4
              c-0.8-2,1-3.3-1.8-3.8c-2.8-0.5-3.1,3.1-6.2,0.6c-1.5-1.3-0.7-2.8-3.4-3.5c-0.5,7.2-16,1.9-20,0.6c-0.2,1.7,0.7,2.8,0.6,4.4
              c0,0.7-0.8,2-0.9,2.9c-0.1,1,0.5,1.9,0.2,3.2C596.8,482.6,594,481.9,595.5,484z" />

                                <path class="st0 st-4 state_8" d="M193.6,453.6c-0.1,1.3,0.8,2.3,2.2,2c0.1-4,4.7-2.3,7.9-1.8c1.5,0.2,3.4,0.1,4.8,0.4c2.7,0.6,2.7,3.5,4.4,4
              c0.5-4,2.5-2,3.6-1.6c0.6-1.6,3.7-3.8,5.5-2.9c0.7,0.3,0.1,3,1.3,3.8c2.3,1.5,3.8-0.2,5.9,2c1,1.1,3.2,3.7,3.4,5.3
              c1.4-1.2,0.8-2.3,2.7-2.5c0.5,0,4.2,2.6,4.5,2.9c0.1,0.1,0.4,0.9,0.5,1c0.7,0.8-0.2,1.5,0.8,2.1c0.5,0.3,2.9-0.2,3.4-0.1
              c0.7,0.1,3.4,1.7,3.5,1.7c1-0.4,0.8-3.7,1.8-4.5c0.7-0.5,4.1-1.1,5-0.3c0.8,0.8-0.1,3-0.1,4.3c1.4,0,2.5,0.3,3.5,1.2
              c-2,1.2-4.6,1.9-5,4.5c-0.4,2.5,1.4,4.3,3.9,3.8c-1.8,4,0,2.5,1.5,2.1c2.1-0.4,0.6-2.6,3.5-1c1.8,0.9,2.1,3.4,1.6,5
              c-0.5,2-4.8,4.3-4.1,6.5c0.3,1,1.9,0.3,2.4,1c1.6,1.9,0.9,3,2,4.9c4.2-2,3.9,0.8,4.2,3.6c0.6,5.1,0.9,1.6,5.1,3.6
              c1.3,0.6,1.8,2.2,3.1,2.8c0.7,0.4,1.5,0.2,2.3,0.5c2,0.6,3.5-0.2,4.5,2.3c0.2,0.6-0.5,3.3-0.2,3.6c0.5,0.5,5.2,0.2,5.6,0.2
              c1.4,0,1.4-1,3.2-0.2c1.1,0.5,1.5,2.5,2.3,3.3c0.4-1,1.9-0.1,2.7-0.2c1.3-0.2,6.1-1.9,7.5-2.8c3.9-2.6-1.4-3.5-4.3-4.5
              c1.1-0.8,0.9-1.9,1.4-2.9c1.3-2.8-0.8-2.1,3.5-3.6c4.9-1.7,8.7-2.3,9.1-8.1c0.1-2.2-0.7-4.6,0-6.8c0.6-1.9,2.2-2.8,2.4-4.9
              c0-0.7-0.9-1.6-1.1-2.3c-0.7-2.5,0-3.5-1.9-4.4c-1.2-0.6-3.8,0-5.2-0.1c0.7-1,1.8-1.9,2.2-2.9c0.5-1.3,0.1-3.7,1.2-4.6
              c-2-2-2.4,0-3.3-2.2c-1.3-3.2,2.1-4.6,2.6-6.6c0.5-2.1-1.5-5.3,2.6-3.8c0.2,0.1,2.1,2.9,3.1,3.3c-0.2-1-7.9-10.4-3.7-11.2
              c3.1-0.6,2.7,6.8,7.2,4.2c2.1-1.2,0.9-3.8,2.7-5.4c0.9-0.8,5.3-1.5,6.3-0.6c1.3,1.1,0.7,4.1,0.6,6.2c-2.3-0.4-1.1,1-1.9,2.2
              c0.8-1.1-1.5,3.8-1.3,2c-0.1,1-1.7,0.1-0.5,1.7c0.3,0.4,3,0.5,3.4,0.5c2.5,0.3,5.1,0.5,7.7,0.6c-0.1,0.6-0.1,1-0.1,1.6
              c2.2-1,4.6-3.8,7.2-3c3.2,1,0.3,3.8,2.2,6.1c1.8,2.1,2.7-1.3,2.5,3.1c-0.2,5.9-5.5,0.7-5.5,5.3c0,1.5,0.9-0.1,1.2,1
              c0.4,2-0.5,4.9,0.2,6.7c1.1,2.8,3.8,1.2,1,3.8c-1.1,1-3,1.6-4.5,1.8c-1.2,0.1-5.2-1.3-5.6-1.2c-1,0.5-1.4,3.7-0.9,4.6
              c0.4,0.7,3.7,2.5,4.9,3.5c0.7-6.3,3.5-1.3,7.5-3.7c3.3-2-0.4-1.8,0.8-4.2c0.3-0.7,1.6-0.4,2.2-0.9c1.5-1.5,2.6-1.6,3.5-4.2
              c0.3-0.8,0.2-2.6,0.8-3.1c2.1-1.7,11.5,1.2,14.1,1.9c0.1-0.6,0.1-1.1-0.1-1.6c2-0.1,3.7,0.4,4.4-1.9c0.4,3.2,0,5.5,4.3,4.7
              c-0.1,0.8-0.5,2.5,0.6,2.7c0.5-1.8,2.8-1.3,3.4-2.8c-3.4-2.1-1.5-9.3-2.7-12.6c2.7-0.8,9.8,4.7,8-2.8c-1-4.4-7.1-2.5-8.7-7.8
              c8.9-0.6-1-4.1,2.6-8.4c0.9-1.1,6.1,0,7.5-0.1c3-0.3,5.1-2,7.8-3.1c-0.4,0.8-0.4,1.6-0.3,2.5c5.6-1.5,0.4-7.3,0.6-10.9
              c-2.6,0.1-1.5,2.2-2.9,3.2c-1.3,0.9-0.3-0.3-2.4-0.1c-3.2,0.3-7.2,0.7-10.8,0.3c-3.2-0.3-7.1-1.1-8.8-4.1
              c-1.8-3.2-2.5-8.3-3.8-11.9c3.1,1,2-3,3.7-4.4c1.9-1.6,4.7-0.8,6.7-3.1c3.2-3.8,4.2-6,9-7.9c3.5-1.4,5.7-4,9.3-5.8
              c1.1-0.5,2.4-1.8,3.3-2.2c2.1-1,4.2-0.7,6.3-2.2c0.8-0.9,1.6-1.7,2.5-2.5c1.1-0.4,2.2-0.7,3.4-0.9c1-0.7,1-2.7,2.6-3.6
              c1.4-0.8,3-0.6,4.5-0.7c1,0,1.9,0,2.9,0c1.3,0.4,1.9-0.1,1.8-1.5c0.3-0.2,2-3.6,2-3.5c0.5-2.6-0.1-2.1-1.2-4.4
              c-1,0.7-4.3,8.6-5.4,1.7c-1.7,0-2.1,1.8-4,1.6c-1.4-0.1-1.1-1.9-2.8-1.7c-1.5,0.2-1.9,1-1.4,2.6c-2.6,0.2-9.4-1.5-8.2,3.2
              c-4.8,1-2.5-5.3-0.2-6.8c0.7-0.4,0.6-0.7,1.2-0.9c1.1-0.4,2.5,0.2,3.6-0.1c1.4-0.3,1.2-1.7,3.5-1.7c-2.2-2.7-8.9,1.4-5.1-5.1
              c0.8-1.4,3-1.1,2.2-3.1c-0.4-0.9-2.6-0.5-2.5-2.1c0.2,0,1.9-0.4,0.7-0.6c0.4,0,0.7-0.1,1-0.4c-0.5-1-3.7-0.9-4.4-1.4
              c-2.4-1.4-2.6-3.3-3.5-5.9c-0.6-2-1.3-3.6-1.5-5.7c-0.1-1.1-0.3-2.4,0.1-3.5c0.3-1,2.2-2.5,2-3.1c-3.2,2.9-5.2,4.4-9.7,3.7
              c0-0.1-0.1,1.9,0.1,2.4c-3.4-1-2.8,4.3-6.1,1.9c-2.4-1.8-0.3-15.3,1.8-16.8c-1.2-0.5-2.8-3-4.1-2.7c-0.1,2.9,0.4,2.3-0.7,3.1
              c-0.8,0.5-2.8-0.7-3.5,0c-0.5,0.5,0.2,1.9-0.4,2.3c-1.2,1.1-1.6,2.3-4.2,0.6c-2.8-1.8-2.7-4.3-6.7-5.3c0.5,1.9,0,3.4,1,5.6
              c-1.1,0.1-4-0.6-4.8,0.1c-1.9,1.5,1.2,4.8,0,6.1c-0.5,0.5-4.8,0.2-5.2-0.5c-0.6,1.1-1.7,0.4-2.6-0.6c-1.8-1.8-0.8-3.8-0.3-5.8
              c1-4.5,3-7.3-1.4-11.2c-1.1-1-3.1-1.5-4-2.6c-1-1.2-0.9-2.7-1.8-3.2c-1.3,0.2-2.5,0-3.7-0.6c-0.7-0.7-1-1.5-1-2.4
              c-0.9-1.5-2-3.7-2.5-5.4c-0.7-2.1-0.6-4.5-0.5-6.7c0.1-1.6,0.2-3.2,0.4-4.7c-0.6-0.1-1.1-0.4-1.6-0.7c-0.5-1.6-0.2-4.6-0.8-6
              c-0.8-1.8-1.1-1.1-2.6-1.8c-0.1,0,0.1-1.1-0.1-1.2c-1.6-0.1-2.9,1.6-4.5,1.6c-2.6,0.1-4.3-2.6-6.6-1.9c0.9-2.8-2.1-4.8-4.7-4.6
              c0,0-0.3,1.7-0.3,2c-2.4-0.8-5.1-0.9-7.5,0c1-3.5-6.7-5.2,0.4-5.4c0-1.9,0-3.6,0.2-5.4c0.2-1.4,1.5-1.6,0.5-3.4
              c-0.9-1.4-2.1,0.7-3-1.4c-0.8-2,1.3-3.2,1.3-4.2c0.2-0.1,0.5-0.2,0.7-0.4c0.3-1-0.1-1.5-1.3-1.4c-0.2-0.3-1.8-2.1-2.1-2.3
              c0.2-1.7-0.5-2.2-2.3-1.6c-1.1,0.1-2.1,0.1-3.1-0.2c-2.1-0.3-3.9-1-6.1-1.1c-4.2-0.2-3.1,0-4.5-3c-0.5-1.1,0.5-2.9-1.8-2.6
              c-1.7,0.2-1.9,3.4-3.1,4.2c-2.5,1.7-7-0.3-10,0.7c-4.2,1.4-3.6,6.2-4.8,10c-1.2,3.8-2.1,8.4-4.5,11.8c-4.4,6.3-8.3,12.4-15.3,15.9
              c-6.4,3.1-12.5,4.9-16.3,11c-0.8,1.2-1.7,1.9-2.1,3.2c-0.3,1.2,0.6,2.6,0.1,3.9c-1.3,3.1-5.6,3.3-7.6,5.8c-2.1,2.7-1.8,6.5-4.4,8.9
              c-2.5,2.4-6,2.6-9.3,2.5c-4.3-0.1-8.5-0.8-12.8,0.4c-3.8,1.1-7.8,5.3-11.9,4.3c-6.9-1.7-4-10.2-8.8-12.6c-7.7-3.8-13,6.5-16.5,11
              c-2.3,2.9-4.4,6.2-7.2,8.5c-2.7,2.2-6.7,3.2-9.1,5.8c-2.2,2.4-1.7,4.5-2.6,7.4c-1,3.3-3.6,6.5-1.2,9.9c1.8,2.5,8.9,6.9,11.1,7.4
              c2,0.5,5.3-1,7.7,1.1c2.2,1.9,2.5,7.5,1.5,10.2c-1.4,3.5-4.6,4.5-4.1,9c0.3,2.5,1.6,3.7,2.7,5.6c0,0.5,0,0.9-0.1,1.4
              c-0.4,1.1,0,1.8,1.3,1.8c1.2,1.8,1.4,2.2,3.5,3.1c2.5,1,7.9-0.2,9.8,1.2c2.3,1.7,1.2,5.4,1.6,8c0.6,4.2,2.5,8.2,4.6,11.9
              c2.1,3.6,3.4,7.2,5.9,10.6C189.3,447.3,193.8,451.6,193.6,453.6z" />
                                <g>
                                    <g>
                                        <path class="st0" d="M776.91,572.31c0.55-0.07,3.51-4.79,3.61-5.12c0.29-0.96-0.05-2.81-0.24-3.82
                                      c-0.23-1.29-0.63-2.53-1.2-3.71c-0.95,0.16-1.87,0.07-2.77-0.25c-0.26,0.7-1.35,6.67-0.6,6.84c-0.55-0.19-0.92-0.03-1.1,0.49
                                      C778.09,567.04,776.73,569.54,776.91,572.31z" style="fill: rgb(232, 232, 232);">
                                        </path>
                                        <path class="st0" d="M753.03,570.5c2.61,0.07,2.05-1.45,2.51-3.59c0.24-1.12,1.27-2.1,0.86-3.33c-0.91-2.75-1.98,4.5-1.94,4.37
                                      C754.41,568.11,752.66,570.49,753.03,570.5z" style="fill: rgb(232, 232, 232);">
                                        </path>
                                        <path class="st0" d="M781.79,563.67c0.71,1.71,1.47,5.05,3.09,5.55c3.83,1.18,1.89-3.02,1.48-4.41
                                      c-0.47-1.59-1.1-6.21-3.38-6.39C780.08,558.19,781.1,562.03,781.79,563.67z"
                                            style="fill: rgb(232, 232, 232);"></path>
                                        <path class="st0" d="M780.46,553.28c-0.31,1.09,3.59,3.86,4.91,3.02c0.93-0.59,1.08-2.42,0.4-3.19
                                      C784.63,551.84,781.85,553.19,780.46,553.28z" style="fill: rgb(232, 232, 232);">
                                        </path>
                                        <path class="st0" d="M776.32,555.02c-1.07,1.13-1.93,0.6-2.74,1.47c3.23,0.94,5.99,2.94,6.33-1.14c0.14-1.69,0.78-2.38-1.2-2.9
                                      C775.89,551.7,777.66,553.6,776.32,555.02z" style="fill: rgb(232, 232, 232);"></path>
                                        <path class="st0" d="M774.37,560.26c0.28,0.02,2.55-1.31,3.06-1.33c0.09-0.25,0.1-0.49,0.03-0.75
                                      c-0.59-0.04-2.79-1.15-3.38-0.61C773.5,558.11,773.03,560.14,774.37,560.26z"
                                            style="fill: rgb(232, 232, 232);"></path>
                                        <path class="st0" d="M785.34,548.67c-0.45-0.98-3.38-3.05-4.39-3.08c-0.19,2.14,1.03,0.62,1.32,2.42c0.25,1.55-0.47,3.2-0.7,4.7
                                      C782.11,550.49,787.65,553.72,785.34,548.67z" style="fill: rgb(232, 232, 232);">
                                        </path>
                                        <path class="st0" d="M780.24,546.24c0.3,0.01-3.74,2.9-3.52,2.49c-0.45,0.84,0.25,2.92,2.01,3.01
                                      C781.45,551.9,782.65,546.34,780.24,546.24z" style="fill: rgb(232, 232, 232);">
                                        </path>
                                        <path class="st0"
                                            d="M760.34,569.85c0.25-1.87-1.31-2.66-0.49-4.87C758.38,565.72,757.48,570.4,760.34,569.85z"
                                            style="fill: rgb(232, 232, 232);"></path>
                                        <path class="st0" d="M775.55,553.22c0.03-0.09,1.52-2.15,0.94-2.23c-2.68-0.41-6.57,1.27-5.51,4.68
                                      C771.24,556.56,775.26,554.07,775.55,553.22z" style="fill: rgb(232, 232, 232);">
                                        </path>
                                        <path class="st0"
                                            d="M766.23,570.01c0.3-1.4,1.02-7.19-0.15-6.67C764.55,564.02,762.87,569.35,766.23,570.01z"
                                            style="fill: rgb(232, 232, 232);"></path>
                                        <path class="st0 st-5 state_21" d="M736.81,570.46c-0.38,5.56-5.53,2.86-9,3.45c-4.93,0.84-11.5,6.36-13.29,10.97
                                      c-2.11,5.46,1.73,9.29,3.37,14.02c2.08,6.02-4.98,1.74-5.15,7.88c1.53-1.08,6.9-4.19,8.65-3.81c-1.26,3.3-3.63,5.53-6.45,7.48
                                      c-2.11,1.46-5.65,2.68-4.99,5.97c3.24,0,2.25,3.04,0.22,4.78c-1.68,1.45-4.48,1.69-6.32,2.9c-4,2.63-4.09,6.58-7.46,9.55
                                      c-4.5,3.97-11.74,3.97-17.05,6.28c-3.31,1.44-6.39,3.18-9.85,4.25c-1.41,0.43-4.98,2.87-6,2.77c-0.19-3.61,2.09-2.61,4.57-4.55
                                      c3.6-2.82,2.42-6.39-2.02-5.32c-2.29,0.55-6.76,3.83-8.1,5.56c-1.84,2.38-0.73,5.71-3.35,7.13c3.81-0.08,3.51-5.51,6.66-4.51
                                      c-0.63,0.87-2.12,1.13-2.34,2.33c7.88-2.47,1.24,2.16-1.57,4.55c-2,1.7-4.35,2.91-6.04,4.96c-1.63,1.99-2.27,4.55-3.73,6.58
                                      c-0.45,0.63-3.24,3.73-3.65,3.61c-1.43-0.42,0.29-2.6-0.54-3.33c-2.1-1.85-7.32,2.55-3.56,3.48c0.04-0.85-4.99,1.4-5.3,1.54
                                      c0.22-0.1-2.09,1.43-1.88,1.12c-0.49-0.1-0.91,0.08-1.24,0.53c0.04,1.03,0.42,1.94,1.14,2.71c-1.22,2.98-5.93,4.91-8.64,4.29
                                      c-1.69-0.39-2.92-1.53-4.69-1.83c-0.44-0.08-2.29,0.22-2.79,0.05c-2.95-1.01-1.79-1.84-3.84-4.76
                                      c-2.67-3.81-2.73-0.22-5.11-3.12c-1.39-1.69,0.03-4.16-3.17-3.99c-0.01,0.8,0.24,4.11-0.55,4.41c-1.14,0.41-0.74-1.61-1.8,0.1
                                      c-0.9-2.21-0.94-0.93-1.71-2.01c-0.65,1.46-1.06,3.02-1.23,4.61c-1.09-1.32-2.81-2.31-4.32-0.76c-2.62,2.67,1.2,1.76,1.31,3.34
                                      c0.31,4.71-4.94,2.95-7.81,4.38c-2.17,1.08-0.45,1.51-1.51,3.48c-0.78,1.46-3.06-0.3-2.93,3.17c0.06,1.63,2.84,3.1,2.9,3.66
                                      c-2.26,0.09-1.46,3.55-3.36,4.59c-3.19,1.74-3.13-3.51-6.74-2.3c-1.35,0.45,0.28,1.61-0.66,2.54c-0.36,0.36-5.38,3.99-5.36,3.99
                                      c0.35,0.1,0.67-3.04,0.51-3.8c-0.33-1.58-0.92-1.53-1.48-2.33c-0.91-1.29-1.87-4.25-4.09-3.89c1.09-0.18-4.58,4.15-4.26,3.61
                                      c-0.72,1.19,0.14,4.44,0.71,5.43c-2.61,1.22-2.17,4.57,0.08,5.08c0.03,0.69-1.02,1.51-0.96,2.65c-2.27-0.05-1.61,2.71-2.7,2.97
                                      c-1.32,0.31-2.14-2.22-3.48-2.77c-2.44-1-3.76,0.56-5.55,1.6c-1.41,0.82-2.84,0.98-4.2,1.63c-1.89,0.9-1.4,1.9-2.67,2.81
                                      c-1.42,1.01-3.96,0.92-5.52,1.14c-2.45,0.35-5.21,0.73-7.87,1.03c-1.12,0.13-2.47,0.61-3.59,0.55c-1.41-0.08-2.2-1.45-3.82-1.08
                                      c1.98-1.21,3.69-1.05,5.58-2.56c1.57-1.25,3.21-2.96,4-4.84c1.65-3.89,0.34-7.14,4.93-9.3c1.35-0.64,2.75-0.13,4.07-0.93
                                      c2.27-1.38,1.91-5.58,3.98-6.87c1.66-1.04,7.45-1.21,2.15-5.36c1.17-0.12,2.56-0.33,3.33-0.66c-0.28,0.12,1.59-1.66,1.42-1.53
                                      c0.59-0.44,1.47-0.32,2.07-0.92c1.2-1.21,0.35-2.86,1.18-4.01c0.12-0.16,1.06-1.41,1.03-1.34c0.12-0.24,1.38,0.08,1.46-0.09
                                      c0.21-0.44-0.12-1.21,0.06-1.62c1-2.25-0.81-6.83-1.21-9.11c-0.4-2.29,0.15-5.03-0.42-7.19c-0.76-2.91-2.51-5-5.17-5.24
                                      c0.1-3.27,3.47-7.16,1.19-10.21c-1.09-1.46-3.3-0.33-3.28-2.85c-3.78,1.48-4.46-2.63-2.46-5.44c1.18-1.66-0.88-1.56,1.78-1.49
                                      c1.41,0.04,1.21,0.66,1.05,1.64c3.12,0.21,9.43-0.86,11.12,2.01c0.79,1.35-1.08,4.9,1.69,5.31c1.1,0.17,1.41-0.64,1.61-0.7
                                      c0.52-0.13,0.75-1.69,2.84-1.83c4.5-0.31,1.46,1.78,3.13,3.8c1.12,1.36,3.9,0.04,4.78-1.72c0.46-0.92,0.48-3.81,0.05-4.68
                                      c-1.2-2.44-1.75-1.43-4.2-1.48c-5.9-0.12-6.39-1.88-5.6-7.06c0.32-2.1,1.31-4.61,1.08-6.74c-0.27-2.5-1.53-2.44-2.54-4.14
                                      c-2.05-3.45-1.03-10.79-0.79-15.04c2.45,0.24,2.15,5.06,5.68,1.14c2.28-2.53,1.55-7.52,3.38-9.69c1.48-1.77,7.5-0.72,10.32-0.66
                                      c1.62,0.03,7,1.78,8.08,1.32c3.36-1.43,0.62-7,4.75-8.29c1.38-0.43,3.36,0.91,4.04-0.46c0.69-1.39-1.35-2.29-1.55-3.3
                                      c-0.26-1.33-0.16-2.73,0.2-4.03c0.46-1.69,1.88-2.41,2.3-3.17c0.62-1.13,0.46-2.28,0.86-3.29c-0.18,0.45,1.7-3.08,1.09-2.16
                                      c0.43-0.65,4.09-2.98,4.19-3.49c0.29-1.59-3.08-2.96-2.93-4.71c0.21-2.35,1.14-0.87,2-2.31c0.8-1.33,0.31-1.95,1.34-3.24
                                      c1.8-2.26,6.62-4.83,9.09-6.2c3.72-2.07,4.54-2.04,4.04-6.74c2.83-0.11,3.86,4.12,6.29,5.33c4.62,2.3,6.77,0.61,10.97-0.87
                                      c3.1-1.09,6.28-0.41,9.53-0.9c2.85-0.43,6.34-3.3,8.89-3.26c0.19,3.26,0.6,7.83-0.56,10.36c-0.67,1.46-2.06,2.34-2.66,3.96
                                      c2.85,0.04,5.34,2.2,8.1,2.08c4.05-0.19,4.87-4.42,9.2-4.32c3.07,0.07,5.67,2.22,8.62,2.63c1.65,0.23,1.85-1.29,2.65,0.03
                                      c0.28,0.46-1.26,1.95-1.71,2.31c1.47,0.35,4.94,1.83,6.18,0.9c0.76-0.57,0.51-2.82,0.91-3.6c0.32-0.61,1.83-0.81,1.87-0.92
                                      c0.71-1.82-0.89-3.61-0.83-5.71c0.03-1.07,1.08-2.1,0.93-3.7c-0.16-1.76-1.44-3.52-2.25-5.04c1.92-0.35,3.15,0.48,3.95,0.68
                                      c0.38,0.09,2.03,0.53,3.58,0.63c3.39,0.22,7.55,2.54,7.44,6.57c2.74,0.34,2.58-2.01,4.28-2.21c2.63-0.31,4.82,2.4,4.2,4.91
                                      c2.86-0.68,2.47,1.46,4.26,2.69c2.13,1.48,5.28,0,6.46,2.86c1,2.41-1.5,5.98,2.69,6.84c1.48,0.31,4-2.62,4.51-3.86
                                      c1.94,0.2,1.36,3.46,2.19,4.53c1.14,1.47,3.21,1.61,4.76,2.37C735.13,566.66,736.99,567.76,736.81,570.46z M543.72,710.67
                                      c1.06-0.38,1.23-0.81,1.22-2.02C543.76,708.72,543.79,709.68,543.72,710.67z"
                                            style="fill: rgb(232, 232, 232);"></path>
                                        <path class="st0" d="M773.37,560.88c-0.5-1.42-3.21-1.53-4.14-0.48c-0.32,0.36,0.05,2.14-0.03,2.58
                                      c-0.49,2.57,0.18,5.4-0.13,8.01C772.51,571.3,774.22,563.35,773.37,560.88z"
                                            style="fill: rgb(232, 232, 232);"></path>
                                        <path class="st0"
                                            d="M772.88,558.78c0.31-3.98-4-0.68-3.71,0.66C769.81,559.51,772.8,559.88,772.88,558.78z"
                                            style="fill: rgb(232, 232, 232);"></path>
                                        <path class="st0" d="M782.21,557.97" style="fill: rgb(232, 232, 232);"></path>
                                    </g>
                                </g>
                                <path class="st0 st-6 state_23" d="M298.5,561.9c0.5,2.7-0.1,5.9,2.1,8c2.2,2.2,3.9,1,6.5,0.7c5.4-0.4,7.9,0.2,10.5,4.8c2.2,3.9,3.8,4.5,8.5,4.6
              c4.8,0.1,9.4,0,14.3-0.3c3.6-0.3,7.3,0.3,10.1,2.5c2.2,1.7,1.6,4.3,2.3,6.8c0.8,2.9-0.6,2.3,3.2,2.5c0.5,0,4.7,0.4,5.1,0
              c0.6-0.6-0.5-2.4,0.1-2.9c1.1-0.9,3.7,0.3,5.1-0.7c2-1.3,1.7-2.1-0.8-2.5c1.7-3.3,7.9-5.4,6.2-9.5c2.1,0.1,1.7-1.8,2.8-2.5
              c3.2-2,7.4-1.9,10.7-1.6c2.8,0.3,1.7,0,3.5-1.1c1.9-1.2,2.8-2.7,5.7-2.3c4.8,0.7,5.1,6,7.9,9.2c-1.4,0.2-2.5,1.1-3.1,2.4
              c1.1,0,1,1.1,1.8,1.5c0.7,0.4,1.5,0,2.3,0.2c3.9,0.8,8.5-0.1,12-1.9c1.2,0.4,1.9,0,2-1.1c0.3-1,0.8-1.8,1.7-2.4
              c2.4-1.5,3.6,1,5.4,0.5c1.3-0.3,2.1-3,3.9-2c1.5,0.8-1.4,3.4,1.3,3.8c-0.8-0.1,2.6-1.2,2.5-1.2c1.2,0.1,2.1,1.6,3,2
              c2.4,1.1,3.8,1.3,6.5,0.7c2.7-0.6,2.1-0.2,3-1.9c1-1.8-0.7-2.1,0.2-2.9c1-0.8,5.2,0.8,6.2,1c0.1-2.1,0.4-0.2,2.2-1.7
              c2.3-1.9,0.3-2.9,3.9-2.1c0.3,0.6,0.7,1.1,1,1.7c0.7,0.5,1.5,0.7,2.3,0.5c3.9,1.4,3.2,3.1,7.4,2.8c2.3-0.1,3.9-0.6,6.2,0
              c1.9,0.5,3.2,1.4,5.2,1.6c4.2,0.3,6-2.7,9.3-2.7c0.3,0,2.4,1,2.8,1.2c2.7,1.4,2.9,3.1,5.2,5.5c2.1,2.1,2.1,1.6,4.5,1.5
              c1.4,0,2.2-1.2,2.9,0.1c0.7-1.7,2.5-1.8,3.2-4.6c0.7-2.9-0.4-5.9-0.5-8.7c2.2,0.5,3.7-0.5,4.1-2.5c0.3-1.4-1-2.7-1-4.1
              c0-2.6,0.4-1.6,1.1-3.5c0.1-0.2,1.2-0.5,1.4-1c0.4-0.8-0.6-2.6,0.1-3.3c0.9-1,3,0.5,4.3,0.5c0.1-2-0.7-2.7-0.2-4.8
              c0.2-0.9,0.8-1.7,1-2.6c0.6,0.3,2.1,0.4,2.5,0.4c0.3-7.2-1.3-5.9,5.4-7.1c0.7-0.1,1.5-0.8,2.2-0.9c0.9-0.1,2.4,0.7,3.2,0.6
              c0.4-0.1,4.4-2.2,5.2-2.8c0.9-0.6,1.9-2.2,2.7-3c0.6-0.6,1.7-0.5,2.2-1.2c0.7-0.9,0-1.9,0.4-2.8c0.8-1.6,2.2-2.2,3-3.6
              c0.5-0.9,0.2-2.3,0.7-3.2c0.7-1.5,2.5-1.9,2-3.8c3.7-0.2,7.1,0.4,7.2-4.3c0-2.4-1.3-4.4-3-6c-0.8-0.8-2.7-1.3-3.2-1.8
              c-1-1-1-1.7-2-2.2c0.1,0.1-2.9-1.1-3.3-1.2c-2.3-0.5-3.5,1.4-5.6,0.4c-1.8-0.9-2.2-3.4-1.6-4.8c0.7-1.5,4-2.5,3.7-4.5
              c-0.2-1.5-3.2-1.1-3.6-3c-0.5-2.5,3-3.1,4.6-2.8c1.1,0.2,1.2,2.2,1.8,2.4c1.3,0.5,2.4-0.1,3.6-0.2c3.8-0.3,7.3-0.1,10.9,0.7
              c1.2,0.3,9.8,0.7,10.1,3c0.1-0.4,0.2-2.1,0.7-2.4c0,0,2.4-0.5,2.2-0.4c0.3-0.3,0.9-1.2,1.1-1.4c0.2-0.6,0.3-1.2,0.4-1.8
              c0.7-0.7,1.5-1.1,2.5-1c3.6-3.3-0.8-3.6-1.4-7.2c-0.2-1.1,2.4-3.1,2.8-4.7c0.1-0.4,0.2-0.9,0.3-1.3c0.1-0.5,0.3-1,0.4-1.5
              c0.3-1-0.1-1.5-1.1-1.3c-0.1-0.3-0.7-1.6-0.7-3c-0.3-0.1-0.7,0-1,0.1c-0.1-1.6-0.1-3.2,0-4.8c3.9,2.2,3.3-0.7,1-2.5
              c-1.3-1.1-0.6-1.3-2.9-1.1c-2.5,0.1-5.1,0.7-7.8,0.7c0.2,5.4-0.5,1.6-3.8,2c0.8-3.2-1.6-1.4-2.2-2.8c-0.3-0.6,0.3-2.1,0-2.6
              c-0.8-1.1-1.9-0.1-3.3-0.6c-0.9-0.3-0.6-0.6-0.7-1.9c-5.4,0.2-6.7-0.2-6.6-5.8c-1.4-0.1-2.9,0.5-4.2-0.1c-0.6-0.3-1.6-2.2-1.8-2.3
              c-0.9-0.3-3.5,0.6-4.1,0c-1-1,1.3-3.8,0.1-5.1c-2.2-2.4-3.1,2.4-3,3.8c-2.2,0.4-3.6-0.8-4.2-2.5c-1.3-0.1-1.9,1-2.2,2
              c-0.1-0.5-0.6-2.3-2.2-1.6c1.4,2.7-1.9,4.6-0.2,7.4c-2.9,0.2-6-0.1-8.9,0.1c-1.6,0.1-4.2,1.5-6.1,0.8c1.5-2.1,1.4-4.1,1.6-6.6
              c-0.2,0.6-0.6,1.1-0.9,1.7c0.3-1.8-0.2-3.3-2.1-2.9c0.7,1,0.2,0.7,0.1,1.9c-0.9,0-1.7,0.5-2.4,0.3c-0.1,0-2.2-1.8-2.3-2
              c-0.2,0.4-0.8,1.6-1,2.4c-0.4-0.8-0.5-2.1-1.6-1.5c0.4,1.3,0.5,6.3-2.4,4.6c-0.9-0.5,0.5-2.8-0.3-3.3c-2-1.4-2.2,0.7-2.6,0.9
              c-1.4,0.5-2.1,1.5-3.5,1.4c0-2,1.9-1.8,2.6-3.1c0.1-0.1,0.1-2.2,0.5-2.9c1.2-2.6,2.5-1.1,0.1-4.3c-1.5-1.9-2.7-1.3-2.9-4.2
              c-1.5,0.3-3.1,0.7-3.1,2.3c-1.1-0.4-2.2-0.7-3.4-0.7c0.6,3.2-3.1,2.9-4.7,3.9c-0.7,0.4-0.7-0.6-1.1-0.2c-1.3,1.1,0.4,3-0.4,4.1
              c-0.8,1.1-2.5,0.8-4.3,0.9c-1.4,0-3.2,0.3-4.6,0c-0.6-0.2-0.4-1.4-0.8-1.9c-0.7-0.8-0.7,1.5-0.6,1.9c-2.5,0.1-3.9-0.8-4.6,2.5
              c-7-0.3,1-6.2,1.3-7.7c-2.8,0-3.2-1.5-5.4-2.8c0.4,1.8,2.3,5.3,0.5,6.8c-0.4,0.3-7.6,0.4-8.7,0.4c0-0.9-0.4-3.4-0.8-3.7
              c-1.6-0.3-2,1.9-3.3,1.8c-2.5-0.2-0.1-0.6-1.4-2.3c-0.4-0.5-2-0.7-2.1-1.2c-0.5-2.6,1.2-4,3.6-4.3c-1.1-3-0.2-3,0-5.5
              c-1.8,0.7-3.7,2.6-3.1,4.6c-2.6-0.7-2.7,3.8-6,2c-1.1-0.6,0.9-2-1.3-2.2c-2.2-0.3-2.1,2.8-3.4,3.6c2.7,0.2,2.5,2,3.5,4
              c0,0.8,0.1,1.5,0.2,2.3c0.4,0.1,0.8,0.3,1.2,0.4c0.6,1.7,0.5,2.2,0.8,4.1c0.2,1.5-0.2,2.5,0.6,3.8c0.5,0.8,2,0.1,2.4,0.8
              c1.5,3-0.1,6.2,0,9.3c2.3,0,3.7-1.2,5-0.2c1.6,1.3,1.5,3.6,1.3,5.5c-0.3,0-1.1-0.3-1.2,0.1c1.6,0.7,2.5,2.3,3.6,3.5
              c-2.1,0.9-1.1,3-2.2,4c-1,1-4.9,3-6.3,3.4c0.3-1.3-0.2-2.4-1.9-2.1c-0.1,0.6-0.1,1.1,0.1,1.7c-2.5,0-2.6-1.8-3.8-3.1
              c-0.7-0.7-0.4-1.6-1.1-2.3c-0.9-0.8-2.4,0.1-3.3-1.2c-1.1,1.1-0.7,6.6-4.4,3.7c-0.9-0.7-0.2-1.6-0.3-3.1c-0.1-1.4,0.5-2.3-0.5-3.5
              c-0.6-0.6-1.9-0.2-2.3-0.7c-2.8-3.5-0.2-2.1,0-4.9c0.2-3.8-3.9-7.4-3.3-11c4.4,0.4,5.3-3.9,5.4-7.4c1-0.1,1.2,0.2,1.8-1
              c0.6-1.4,1.2-0.4,1-1.9c-0.1-1.2-1.5-0.9-2-1.9c-1.6-3.3-1.2-8.1,2.7-8.1c0-5.4,2.3-3.5,6.4-4.3c1.8-0.4,6.4-1.5,6.6-2.9
              c0.1-0.6-1.3-2.2-1.4-3.2c0,0.3,1-2.8,0.6-1.9c0.2-1,0.8-1.4,1.7-1.2c0.6-1.3,1.1-2.5,1.6-3.8c0.4-0.7,1-1.3,1.4-2.1
              c1.2-2.3,1.7-5.1,2.7-7c1.5-2.9,3.3-4.3,2.5-8.3c-0.4-1.9-1.9-3.5-2.5-5.3c-0.6-1.6,0.4-2.1-0.7-3.3c-0.4-0.4-3.1-2.1-3.6-2.4
              c-1.3-0.9-2.4-1.9-4.1-1.9c-0.6,4.6-17.6-6.3-18.5,4.6c0,0.6-2.3,0.8-4.2,0.9c-2.4,0.1-4.4-0.1-6.4,1.3c-0.7,0.5-0.4,1.8-0.9,2.2
              c-1.1,1,0.7-0.8-2.3,1c-4.5,2.8-9,5.1-13.9,7.4c-3.2,1.5-3.8,2.8-6.5,4.7c-2.3,1.6-5,1.4-7.3,3.3c-1.7,1.4-2.5,3.5-3.9,5.1
              c-1.9,2.2-2.9,2.1-5.4,3.4c-3,1.6-1,0.3-2.6,2.6c-0.1,0.1-1.7,2.4-1.7,2.3c-0.2,2,1.8,4.6,2.4,6.4c1.5,5.1,2.9,6.3,8.5,6.9
              c4.2,0.5,8.2-1.4,11.9,0.2c0.5-1.8,3.2-5.4,5.3-3.5c1.1,1-1.4,4.3,1.6,3.7c0.1,1.6,1,7.4,0,8.9c-0.6,0.8-3.5,0.8-4.9,1
              c0.2-0.6,0.2-1.2,0.1-1.8c-2.1,1.1-3.7,2-6.1,2.2c-1.3,0.1-5.7-0.7-6.4,0.2c-2.1,2.6,6.1,8.2-1.9,8.2c1.8,4.3,7.8,1,8.2,7.1
              c0.1,1.8-0.5,4.7-2.4,5.3c-2.3,0.8-3.2-1.9-5.2-1.9c0.4,2.3,0,4.8,0.5,7.1c0.1,0.5,1.6,3.5,1.6,3.5c0,1.7-1.2,3.2-3.2,4.1
              c-1.5,0.7-0.8,0.8-3.2-0.4c0.1-1.2-0.6-1.7-2-1.5c-0.6-0.2-1.1-0.4-1.8-0.4c-0.6-0.3-0.3-1.5-0.4-2.3c-2-0.5-2.5,0.6-1.8,2.4
              c-2.6-1.1-9.4-3.1-12.2-2.8c-4.1,0.5-1.9,2.3-4.2,5.3c-1.5,2-2.1,1.8-4.3,2.5c0.8,2.9,1.4,4.4-1.6,5.2c-1.2,0.3-2.9-0.4-4.2-0.1
              c-3.4,0.6-1.9,1.1-3.2,4.3c-1-0.6-1.7-1.6-2.6-2.2c-0.7-0.4-3.4-1.3-3.5-1.5c-0.7-0.7-0.7-1.2-0.8-2.9c-0.2-4.2,0.6-4.5,4-4.2
              c3.2,0.3,5,0.5,8-1.6c-4.2-0.4-1.5-5.8-2-8.1c-0.2-0.7-1.5-0.6-1.6-2.5c0-1.6,1.2-3,2.6-3.5c0.6-0.2,1.8,1.9,2.6,0.9
              c0.4-0.5,0.5-3.5,0.3-3.8c-0.4-0.5-2.5,0-3.1-0.7c-0.5-0.7-0.1-4.9-0.1-5.6c-2.6-0.1-3.6,1.4-5.7,2.2c-3.5,1.4-1.6-0.3-3.1-0.6
              c-2-0.4-5.8-0.3-8-1c-0.8-0.2-2.2,0-2.9-0.8c-2.1-2.5,0.9-2.6,1.6-4c0.4-0.8,0-1.9,0.4-2.8c0.8-1.5,1.8-0.9,1.6-3
              c-0.3-2.8-3.8-2.8-5.6-0.5c-1.5,1.9,0.2,3.9-3.1,4.9c-4.2,1.4-4.1-2.3-6.4-4c-1.2,3,6.4,8.7,4.4,10.7c-1.1,1-5.8-2.7-5.8-3.5
              c-0.3-0.1-0.5,0-0.7,0.1c-0.5,0.7,1.1,2.4,1,3.2c-0.3,2.4-0.7,0.7-1.6,2.4c-0.8,1.5-1.4-0.5-1.4,2.1c0,3.5-0.2,0.1,1.6,2
              c1.2,1.4,1.7,1.7,1.8,2.6c0.2,1.4-1,4.5-2.1,5.6c4.8,0.1,4.5-0.9,5.3,3.3c0.4,2.1,2,4.2,1.5,6.4c-0.5,2.3-2.2,3.2-2.5,5.9
              c-0.3,4.2,1.2,8-3,10.8c-2,1.3-4.5,1.6-6.6,2.5c-4.2,1.8-1,1.7-3.1,4.7c4.1,1.5,7.3,3.6,2.5,6.3c-1.4,0.8-5,2.5-6.3,2.9
              c-0.2,0.1-0.2,0.3-0.5,0.4c0.1,0-3.8,0.1-3.4,0.2c-2.1-0.8-3.5-6.5-5.9-2.7c-0.4,0.6-0.3,4.1-0.2,5c0.4,2.8,0.5,2,2.4,3.3
              c1.3,0.9,1.5-0.7,2.8,1.3c0.7,1,0,3.1-0.4,4.1c-0.5,1.2-2.1,3.3-3.1,4c-1.3,1-2.4,0.6-3.7,1.3c-1.5,0.7-1.3,1.5-2.8,2.6
              c-2.1,1.6-3.2,1-5.5,1.1c-0.1,2.5,11.1,2.4,7.2,6.8c-0.8,0.9-8.4-1.2-8.5,2.2c0,1,2.8,3.3,3,4.8c0.4,2.2-1.2,3.1-0.7,5.6
              c0.9,4.2,3,1.6,5.2,1.8c1.4,0.1,3.3,1.4,4.6,1.3c2.3-0.2,1.4-1.4,2.8-2c4.1-1.7,2.7,1.1,6,2.2c-0.4,0-0.7,0.2-0.7,0.6
              C297.6,562,298.1,561.9,298.5,561.9z" />
                                <path class="st0"
                                    d="M449.1,440.8c-0.9,0-1,1.4-1,2.2C448.9,442.6,449.3,441.8,449.1,440.8z" />
                                <path class="st0"
                                    d="M512.8,447.6c-0.4,0-0.9,0.4-1,0.6c-0.1,0.1,0.4,0.6,0.7,0.3C512.7,448.4,512.8,448.1,512.8,447.6z" />
                                <path class="st0"
                                    d="M399.1,580.2c0.1-2.7-1.8-2-3.8-2.2c0.4,1.3,0.7,2.8,1.5,3.9C396.9,580.8,398.1,580.1,399.1,580.2z" />
                                <path class="st0 st-7 state_22" d="M492.2,679.7c0.2,0.2,0.4,0.4,0.6,0.6c-0.4,0.2-0.8,0.5-1.2,0.7c2.3,1.5,2.1,2.8,5,3c1.8,0.1-0.2-1.5,2.9-0.7
              c0.6,0.2,3,2.7,3.4,3.2c2,2.3,3.3,4.8,4.3,7.6c0.2,0.6,0.8,1.4,0.8,2c0.3,1.8-0.6,2.8-0.4,4.3c1.4,0.5,2.5-1.9,4.4-1.4
              c1.1,0.3,0.6,1,0.8,2.4c3.6-0.7,1.7-0.7,2.4,2.2c0.3,1.2,1.1,2.4,1.6,3.8c0.5,1.5-0.2,3.3,0.2,4.7c1.2,4.1,3.1-0.4,6-1.9
              c1.5-0.8,1.9-0.2,3.3-1.1c1.3-0.9,3.2-3,4-4.4c1.1-2.2,0.3-5.5,1.3-7.3c1.2-2,5.1-2.8,6.9-3.7c3-1.5,3.5-5.1,5.9-7.5
              c1.3-1.3,3.6,0.8,2.3-2.4c-0.4-0.9-2.2-1.7-3.2-2.1c5.4-2,10.8-1.9,10-9.3c5.3,1.8,1.1-9.9,0.9-12.8c-0.2-2.7-0.4-9.1-5-7.6
              c-0.4-4.4,3.1-7.9,0.4-11.1c0.4,0.5-3.2-2.3-2.4-1.9c-0.5-0.3-2.3,0.6-2.7,0.1c-1.5-1.8-0.9-6.4,0.3-8.3c1.9-3.2,5.3,0.1,8.8,0.2
              c2.1,0.1,6.5,0,7.5,2.1c0.3,0.6-0.8,5,0.6,5.1c0.1-2.8,5.4-3.3,7.3-2.2c1.8,1.1,1.2,1.2,1.3,4.1c2-0.1,2.5-2.4,2.4-3.9
              c-0.2-3.4-2-1.8-4.9-2.2c-8.3-1.1-4.8-6.4-4.2-12.8c0.4-4.5-2.5-4.9-2.9-8.9c-0.2-2.5-1.9-13.2,1-13.6c3.8-0.6,2.5,6.2,5.7-0.2
              c0.9-1.9,1.2-7.5,2.3-8.7c1-1.1-0.5-0.3,2.6-0.7c3-0.4,6.5,0.2,9.5,0.3c1.5,0,5.9,1.9,7,1.4c1.9-0.9,0.9-4.9,1.7-6.4
              c1.3-2.4,3.8-1.9,6.3-1.8c-0.4-3-2.4-3.2-1.3-7c0.7-2.3,2-2.5,2.9-4.1c0.5-0.7,0.3-1.9,0.6-2.8c0.9-2.5,2-3.8,4.4-5.2
              c-0.9-1.4-2.8-2.7-2.5-4.6c0.2-1.8,1.5-1.5,2.2-2.7c0.8-1.3,0.2-1.9,1.5-3.4c1.2-1.6,3.4-2.4,5-3.5c2.2-1.5,7-2.9,7.9-5.2
              c0.7-1.8-0.3-3.7-2-4.3c3.8,0.6,4-3.5,6.7-5.6c2-1.6,2.8-1.4,3.7-3.4c0.6-1.2,0.4-3.5,0.9-4.9c-3.7,0.1-6.7-1.3-8.5-4.6
              c-0.5-0.9-0.4-2.6-0.9-4c-0.6-2-1.8-2-2.1-2.9c-1-2.9,1.8-8,0-10.2c-1.5-1.9-3.7,0.5-5.6-1.2c-0.8-0.8-1.3-2.5-1.7-3.2
              c-0.4-0.7-1.4-2.2-2-3.1c-1.5-2.2-3.9-2.7-5.5-4.7c-2.3-2.9,0-5.9-4.9-6.4c0.1,0.3,0.2,0.7,0.2,1.1c-1.7-0.3-3.3,0.8-4,1.9
              c-1.9,3.1,0.6,5.6-4.8,6.3c-1.5,0.2-4.5,0.3-6-0.3c-1.3-0.6-1.2-1.6-2.4-2.2c-2.9-1.2-2-0.2-4.1,0.8c-0.9,0.4-2.1-0.1-2.8,0.7
              c-0.8,0.8-0.2,2.5-1.3,3.5c-0.8,0.8-1.9,0.1-2.7,0.7c-0.7,0.5,0.3,1.9-1,2.4c-1.6,0.7-1.2-1-1.8-1.1c-0.7-0.1-3.6-1-4.5-1
              c-0.9,0-3.5-0.1-5.1-0.2c0.3-2.8-7-2-8.9-1.8c-2,0.1-4,1.2-6.1,0.2c-1.1-0.5,0.3-3.2-2.6-2.2c-3.2,1.1,1.6,2.4,2,3.1
              c1.7,3-1.7,3.6-2.8,5.7c-0.8,1.6-1.1,3.5,1.3,4.1c0.4,0.1,2.6-1.3,3.5-1.1c1.4,0.2,2.1,1.2,3.1,1.9c1.8-2.2,4.4,1.3,6.2,3.1
              c3.3,3.4,7.2,11,0.4,13.1c-2.8,0.9-3.4-0.3-5.1,2.5c-0.7,1.2-0.6,2.8-1.3,4.1c-0.5,0.9-1.7,1.3-2.1,2.2c-0.5,1.1-0.3,2.9-0.9,4
              c-0.8,1.3-2,1.2-3,2.1c-1.2,1-1.6,2.1-2.8,3.1c-2.7,2.2-4.1,2.2-6.7,2.6c-1.7,0.2-3.3,0.5-5.2,0.8c-4.9,0.9-2.3,0.1-3.4,4.5
              c-0.7,2.9,0.1,1.2-0.6,2.3c-1.5,2.3-2.1-1.4-3.2,1.9c-0.3,0.8,0.3,1,0.3,1.3c-0.2,4.5,0.9,3.7-4.1,3c-0.2,5.6-0.8,2.2-2.6,5.4
              c-1.7,2.9,4.6,9.1-3,9.4c1.3,6.2,1.1,11.5-5.7,12.8c5.3,0.7,2.4,5.1-0.5,6.8c-1.2,0.7-2.6,1.1-3.6,1.6c-0.3,0.2,0-1.2-0.8-1.2
              c0.4,1.5,0,4.1,0.5,5.4c0.7,1.6,1.5,0.9,2.6,2c4,4.3,0.3,7.3-0.4,12.2c5.1-1.4,3.5,0.7,3.2,5.4c-0.2,3.2-0.4,4.2-2.9,6
              c-2.2,1.6-4.3,0.8-3.9,4.4c5-2.1,7.5,8.4,1.4,8.2c0.1,0.8,1.1,1.4,0.8,2.2c-0.2,0.6-1.2,1.7-1.3,2.3c6.3-4.5,6.5,3.3,8.5,6.4
              c-1.3-1.9,3.9,2.3,2.1,1.6c1.5,0.6,3.7-0.3,4.9,1.5c1.6,2.3-0.5,2.1-0.8,4.1c0.6,0.3,1.2,0.6,1.9,0.6c-1.5,1-1.8,2.6-3,3.6
              c-1.5,1.2-2.1,1.4-3.8,1.5c-3.4,0.2-4-2-6.3-3.5c-1.7,1.8-4.7,3.2-6.1,4.8c-0.9,1.1-1.4,3.1-1.9,4.5c-1,3-0.5,3.3,0.9,6
              C496.7,677.5,489.1,676.8,492.2,679.7z" />

                                <path class="st0 st-8 state_24" d="M235.5,620.6c0.6-2.7,2.1-1.5,3.7-2.5c1.9-1.2,3.3-4.4,6.6-3.6c2.8,0.7,3.7,2.8,1.6,4.6
              c-0.5,0.4-2.2,0.4-3,0.9c0,1.2,3.6-0.7,4.4-0.5c1.4,0.3,0.1,1.5,2,1.7c0.8,0.1,1.7-0.4,2.2-0.6c0.6-1,0.7,0,1.3-0.7
              c0.6-0.7,2-4.2,2.3-5.6c0.5-2.1,2.8-9.6-0.8-9.7c1.6-3.1,0.6-4.2,4-3.2c0.2,0.1,1.6,1.9,2,2.1c0.6,0.3,2-0.3,2.6,0.1
              c0.6,0.4,0.2,1.6,0.6,1.9c1.3,1,2.2,1.8,4.4,0.7c3.8-1.9-0.3-1,1.2-3.7c0.8-1.5,3.4-0.1,4.3-1.2c0.4-0.5,0-3-0.2-3.6
              c-0.5-2.8-1.7-4.4-4-6c-1.3-0.9-1.8-1.1-3.1-1.8c-0.5-0.3-1.6,0.2-2.1-0.1c-0.9-0.6-2-1.6-1-2.7c0.6-0.6,4.4-0.1,5.7-0.7
              c2.6-1.3,1.3-1.8,3-4c1.2-1.5,2.5-0.5,3.9-1.5c0.1,0,2.4-2.1,1.4-1.7c0,0,2.1-0.5,2.1-0.5c3-2.3,5.6-1.1,9-2.6
              c-1.8-1.5-4.2-2.1-6.5-1.8c-1.9,0.2-3,1.8-4.6,2.1c-1.7,0.2-4.8-2.7-4.9-4c-0.2-1.9,1.9-2.8,1.7-4.4c-0.2-1.5-3-1.6-2.1-3.6
              c0.2-0.5,0.3-0.2,0.6-0.5c0.1-0.1,3-0.2,3.5-0.4c1.2-0.5,1-1.9,2.6-2.3c-3.6-3.5,0.2-6.6-2-10.3c-1.3-2.2-2.9-2.6-1-5
              c1.8-2.3,5.4-1.7,7.8-1.7c-0.1-3.7-6.8-0.9-7.6-4.7c-0.7-3.3,1.9-1.2,3.9-1.8c2.3-0.6,1.8-2.5,3.4-3.5c0.3-0.2,2.5-0.6,2.3-0.5
              c0.7-0.5,1.9-0.3,2.8-0.9c1.3-0.8,3.7-3.9,3.2-5.7c-0.7-2.7-3.4-0.8-5-3.6c-1.1-1.9,0.4-4.3-0.1-6.2c-1-3.2,0.1-1-2.3-2.1
              c-2-0.9-2.2,0.8-3.4-1.8c-0.2-0.3,0.7-1.8,0.6-2c-1.7-3-2.5-1.3-5.4-2.3c-1.5-0.5-2.1-2.2-3.4-2.9c-4.7-2.3-6,0.9-6.6-5.6
              c-0.1-1.3,0.7-1.9-0.5-2.7c-0.7-0.5-2.2,1.2-2.7,1c-1.3-0.6-0.9-2.5-1.3-3.4c-0.6-1.1-1.1-1.4-1.8-2.3c-1.5-2-3-1.2-1.4-4.5
              c0.7-1.5,3.2-2.6,3.4-4.4c0.1-1.1,0-3.2-1.4-3.5c-1.5-0.4-1,1.3-2.3,1.8c-2.2,0.8-1.8,0.8-3.5-0.7c-0.2-0.6-0.2-1.2-0.1-1.8
              c-0.9-0.1-1.8-0.5-2.4-1.2c-1.9-3.5-1.2-6.6,2.5-8.5c-3.1-0.1-1.9-1.5-1.7-4.4c-4.4-0.6-2.2,0.2-4,2.4c-3.1,4-1.9,1.4-4.9,0.8
              c-1.7-0.3-4.3,0.6-5.6-0.2c-0.7-0.4,0.1-2.3-0.3-3.1c0.1,0.1-4-3-3.9-3c-1,1.5-1.8,2.8-3.6,3.3c0-1.1-0.1-2.2-0.6-3.2
              c-0.1-0.1-3-4.4-2.9-4.2c-2.7-2-6.8,1.1-7.1-4.4c-1.5,0.2-4.6,5.4-6,1.8c-1.7,1,0.1,4.5-3.2,2.1c-2-1.4-1-2.5-3.6-3.2
              c-1.5-0.4-5.1-1-6.8-1.1c-0.1,0-2.2,0.2-2.3,0.2c-0.6,0.1-1.2,0.1-1.9,0.2c0,0.4,0,0.9,0,1.3c-0.1,0,0,0.5-0.4,0.6
              c-0.9,0.2-2,0.5-2.9-0.1c-0.6-0.3-1.2-2.4-1.4-2.5c-1.1-0.4-3.6-0.2-3.9,1.9c1.9,0.3,0,3,0.2,4.1c0.7,2.8,1.4,1.7,4.7,1.9
              c-0.5,3.7-6.4,2.6-8.5,4c-0.8,0.5-0.7,2.5-1.1,2.8c-0.8,0.4-3.1,0.2-4,0.2c-3.1-0.2-4.9-0.5-5.4-3.5c-0.7-3.8,1.2-4.2-3.6-4.1
              c-2.8,0-4.2,0.9-6.7,1.8c-1.7,0.6-3.7,0.6-5.3,1.3c-2,0.9-3.4,3.6-5.4,4.3c-2.9,1.1-8,0.3-10.2-1.7c-1.4-1.3-1.9-3.2-3.6-4
              c-1.1-0.5-4.9-0.5-6-0.4c-1.8,0.1-2.1,0.5-3.7,0.6c-1.1,0.1-3.4,0.2-4.6,0.2c-2,0-3.4-1-5.1-1.2c-2.6-0.2-2.6,1.9-3.7-1.7
              c-1.5-0.2-2.3,2.6-2.6,3.6c-2.2,0-0.7-4.5-2.4-5.2c-0.2-0.1-1.6,7.9-1.8,8.5c-0.2,1.1-0.1,4.1-1.1,5c-1.1,1-7,0-8.5,0
              c-5,0-9.3-1.7-11.6,3.6c-1.4,3.3-5.8,12.2,2.7,9.8c2.5-0.7,1.4-0.9,2.8-2.6c1.5-1.8,1-1.8,3.4-2.8c1.5-0.6,2.8,0.1,4.5-0.8
              c0.9-0.5,2.6-2.8,3.7-2.5c-1.9,3-1.3,3-4.6,4.8c-0.9,0.5-4.6,1.5-5.1,2.1c-0.8,1-1.1,4.2-0.5,5.3c0.4,0.9,1.7,0.6,2.6,1.8
              c0.7,0.8-1.2,1.5-1.5,1.9c0.8,0,4.1,0.6,4.4,1.8c0.2,0.9-1.7,1.8-1.4,3c1.3,0,1.2-1.8,2.6-1.9c0.1,1.2-1.7,3.2-1.3,3.9
              c1.1-0.5,2.2-2.6,3.7-2.1c0,0.3-2,3.4-2.8,3.3c3.9,5.1,9.4,7.4,14.6,11.4c2.4,1.8,4.2,4.2,7.1,5.1c1,0.3,2.2,0,3.3,0.3
              c3,0.9-1.6,1.2,3.2,1.7c0.8,0.1,3.6-0.4,5.2-0.2c4.1,0.5,5.5-0.7,8.7-1.5c1.8-0.5,3.7,0.3,5.4-0.4c1-0.4,1.3-1.8,2.3-2.1
              c0.6-0.2,8.7-2.2,2.8-2.3c-0.3-2.7,2.5-0.7,2.9-0.9c0.1,0.5,0.4,0.7,0.8,0.8c1-0.2,1.4-0.8,1.2-1.9c1.6-0.9,2.2-2.5,4.6-2.1
              c1.1,0.2,0.9,3.9,3.7,1.5c-2.1,3.3-3.5,5.2-5.1,8.9c-1.3,3.1-4.6,4.4-6.4,7.4c-0.6,0.4-0.9,1-0.8,1.8c0.2,1.5-0.4,2-2.1,1.2
              c0.1,0-2.9,0.5-2.4,0.6c-3-0.6-2.7-2.4-6.4,0c3.4,0,1,3.1-0.8,4.1c-2.8,1.6-1.8-1-4-0.8c-2.3,0.2-4,3.5-5.8,3.6
              c-0.4-2.6-3.8-1.1-5.9-1c0.8,0.1,1,0.7,0.6,1.7c-0.9,0.2-1.5-1-1.8-0.9c-0.4,0.1-2,0-2.8,0c-2.2,0.2-3.9,1.8-5.8,2.4
              c0.2-1.1,1.7-0.8,1.5-2.1c-3.6,0.3-0.3-3.5,0.3-4.8c-0.4,0.4-5.6,1.2-6.1,0.6c-1.7-1.9,2.1-1.8,2.1-3c-2.3-0.2-5.2,2.7-5.3,5.2
              c-0.2,2.6,4.8,9,6.2,11c3,4.4,6.9,9,10.7,12.7c1.9,1.8,4,3.5,5.8,5.5c1.4,1.5,3.3,5.8,5.7,5.5c-4,3.9,24.9,26.2,30.1,26.9
              c1.3,0.2,1.9-0.8,3-0.8c0.9,0,1.7,1,2.5,1.2c-0.2,0,4.8,0.9,4.3,1c1.3-0.2,2.8-1.8,4.1-2.1c2.9-0.9,6.9-1.1,9.7-2.2
              c1.1-0.4,2-1.8,3.3-2.4c1-0.4,3.8,0.4,3.7-1.5c-1,0.1-2.4,0.1-2.8,1.3c-1.3-1.8,2.9-2.3,3.7-2.4c3.3-0.4,4.8-0.9,7.8-2
              c2.6-1,4.6-1.4,6.8-3.2c0.5-0.5,1.2-0.8,2-0.7c0-0.7,0-1.4,0.1-2.1c0.4-0.5,1.4-1.9,2.1-2.7c1.8-2.4,4.1-4,4.8-7
              c0.6-2.4,0.7-4.8,0.9-7.1c0.2-2.1-0.9-3.6-1-5.4c-0.2-2.9,1.4-5.9,3.4-7.9c-1,0.1-1.9,0-2.8-0.5c0.6-0.4,1.7-3.4,1.8-3.4
              c1.2-0.4,2.3,1.3,3.4,1.3c0.4,0,3-1.2,3-1.1c0.7-1.5-2.8-0.8-3.4-0.9c0.1-0.2,3.2-2.5,3.3-2.5c1.7-0.2,3,1,4.5,1.7
              c4.3,2.1,6.2,0.5,10.6,0.5c-3.4,1.7-3.7,4.8-8.1,2.6c-1.6-0.8-2.4-2.9-4.1-1.9c-1.7,1-0.6,4.1-2.2,4.9c2.6,2.1-2.1,5.5,1.2,6.7
              c2.2,0.8,5.4-2.7,8.4-1c-1.7,0.7-3,1.5-4.9,1.9c-0.9,0.2-2.1-0.5-2.9,0c-1.5,1-2.6,6.2-1.9,8.2c1.6,0.3,6.5-0.2,6.7,1.8
              c-2,0.1-4.1-0.3-6.1,0.3c1.9,1.7,0.8,2.5,4,1.8c1.7-0.4,2.3-2.7,4.3-1.8c-1.4,0-5.7,5.6-6.3,7c0.1-0.2-0.7,3.7-0.7,4.2
              c-0.1,0.7,0.4,1.8,0.4,2.2c-0.1,0.5-0.7,2.1-0.5,2.9c0.5,0,3.3-0.5,3.4,0.7c-1,0.2-1.7,0.8-2.1,1.7c1.4,0,2.9-0.1,4.3-0.2
              c0.3,1.3-1.9,0.9-2.7,1.5c1.2,0.6,0.8,2.2,0.8,3.2c1.4-0.1,2.7-0.2,4.1-0.1c-1.2,2.6-0.9,1.9-4.1,2.8c1.3,2.4,1.4,3.1,4.2,3.3
              c0.1,1-0.4,1.5-1.4,1.6c-1.4,0-1.9,0.9-1.3,2.5c-0.6,2.1,0,4.4-1,6.5c2.3,0.3,2.4,2,0.9,3.4c-1.2,1.1-2.4,0-3.5,0.8
              c-0.6,0.4-0.1,2.3-0.6,2.8c-0.5,0.4-2.5,0.6-2.7,1.1C232.1,619.2,233.4,620.6,235.5,620.6z" />

                                <path class="st0 st-9 state_27" d="M255.2,781c-3.2,0-2.8-0.3-4.1-3.4c-1-2.4-2.6-4.1-3.6-6.2c-1-0.4-1.6-1.1-2-2.1c1-0.6,1.5-1.5,1.7-2.6
              c0-0.2-1.1-3.8-1.3-4.4c-0.9-4.3-2.3-8.8-2.6-13.1c-0.3-3.6,1.5-9.2-1.1-12.4c1,0.3,1.6-0.1,1.7-1.1c-2.3-0.2-0.9-1.4-1.1-3.1
              c0-0.1-0.4-1.8-0.5-1.6c-0.1,1,0.1-3.8,0.7-1.9c-0.4-1.5-1.2-1.8-1.8-3.2c-1-2.3,4.2-2.3-1-2.7c1.7-1.8,0.7-4.1,0.5-6.2
              c-0.4-3.4-1.2-1.8,1.1-4c-2.5-2.1-1.1,1.9-2.2-2.6c-0.6-2.4,0.1-3.4-0.9-5.9c-0.7-1.7-3.6-4.8-0.3-5.8c-2.6,0.8-1.4-4-3.4-4
              c0.7-1.7,1-2.3,0.6-3.8c-0.4-1.5-2.2,0.3-1.7-2.5c1.1-0.1,3.9-0.7,4.1,1.1c0-1,0-1.9,0.2-2.8c-1.4-0.3-1.6,1.2-3.4,1
              c0.4-0.5,0.7-2.2,0.4-2.8c-0.5-0.2-1-0.3-1.5-0.5c-0.1-0.9-0.1-1.9-0.1-2.8c0.1-4,0.5-1.7,2.4-2.1c-1.5-1.6-4.4-6.6-3.9-8.8
              c1.2-5,3.8,0.2,6.6-2.3c-2.7-1.4-5.8-1.8-3.4-5.2c0.8-1.2,2.4-1.1,2.9-1.7c1.4-1.8-0.2-2.8,0.1-5.1c-1.6-0.2-0.5,2.8-1,3.2
              c-0.9,0.9-2.3,0.1-3.1,0.9c-1,1-0.4,4.9-2.5,3.3c-1.1-0.8,0.5-2.1,0.5-2.7c0-0.8,0.2-1.8,0.2-2.4c0-1.5-1.2-3.6-1-5
              c0.7-4.1,1.9-1.4,4.9-3.4c-2.9-0.3-5.7-0.1-5.2-3.9c0.4-3,2.2-1.5,3.9-3.7c-2.3-1-2.8-3.5-3.1,0.6c-4,0.4-1.1-3.1-1.3-5.6
              c-0.1-1.7-0.8-0.5-1-2.8c-0.1-1.8,0.2-3.3,2-3.6c-1.7,0.3-2.7-8.6,1.6-2.6c0.4-3-4.9-5.5,0.1-6.9c0.9-0.2,2.2,0.7,3.2,0.2
              c0.6-0.2-0.2-1.7,0.6-1.8c0.4-0.4,0.7-0.6,1.2-0.6c1.9-0.7,2.6,0,1.9,2.1c1,1.3,0.9,2.4,2.6,3.4c1.8,1,5.5,1.1,6.7,0.2
              c0.1-0.9,0.1-1.7,0.1-2.6c0.4,0,0.7,0,1.1,0c0.4-0.3,3.1-0.9,3.7-1.3c2.7-1.7,1,1.1,2-3.6c0.5-2.2,1.3-3.9,1.7-6.3
              c0.3-1.6,1.2-2.4,1.1-4.3c-0.1-2.4-1.4-2.8-0.7-5.1c-0.3,0,5.1,3.2,4.8,2.8c0.3,0.3,0.3,1.9,0.5,2.1c0.8,0.7,2.5,1.1,3.6,2.5
              c0.3-4.1,6.7-0.8,4.5-6.5c3.3-0.9,3.6,0.3,4.3-2.6c0.6-2.5-0.8-5.9-2.3-7.8c-0.8-1-2.8-3-4-3.5c-0.2-0.1-4.3-0.5-4.4-0.8
              c2.8,0.1,6.3-0.2,8.1-2.5c1.1-1.4-0.1-2.1,1.5-3.2c1.2-0.9,3.3-0.2,4.6-0.8c0.3-0.1,0-1.5,0.3-1.8c0.5-0.3,3.5-2.1,4-2.2
              c1.4-0.4,3.8,0,5.3-0.2c1.4-0.1,2.3-0.6,3.7-0.3c-2.5-2.2-4.5-3.9-7.9-4.3c-2.9-0.4-6.9,2.6-8.7,1.5c-2.7-1.5-0.2-4.1,0-5.3
              c0.2-1,0.1-2.3,0-3.3c-0.1-0.5-2.1-0.2-2.2-0.8c4.2,0.2,6.3-4,10.9-4c1.1,0,2,1,3,1.1c3.2,0.3,1.6-0.5,4.2-1.6c2-0.8,1.6-1.2,3.5,1
              c1.9,2.2,1.1,5,2.8,7.8c2.4,3.9,4.6,2.8,8.6,2.4c3.3-0.3,6-0.4,8.2,2.1c1.6,1.8,1.8,5.3,4.3,6.5c3.3,1.5,8.9,0.4,12.5,0.9
              c5.7,0.8,10.7-2.1,15.4,1.2c2.9,2,3.3,1.6,3.7,6c0.1,0.8-0.7,1.6-0.5,2.1c1.4,2.8,12.2,3.7,11.4-0.9c2,0.1,6.5-0.2,6.7-2.7
              c0.1-0.7-1.5-3.1-1.6-2.5c0.2-1.3,1.6-1.4,2.4-2c0.2-0.2,0.4-0.4,0.6-0.6c2.9-2.4,3-5.6,6-7.3c1.7-1,9.3-4.6,7.7,0.3
              c1.4-2.2,2.7-0.5,4.4-1.5c2.3-1.3,0.8-3.2,4.3-3.5c2.3-0.2,7.5,3.3,6.4,6c-0.7,1.7-4.7,0.7-5.9,0.8c0.9,2.5,1.3,7,4.6,7.2
              c-1-3.8,1.2-1.1,2-1.1c3.6,0.2,7,1.3,11,0.1c1.9-0.6,6-1.3,7-2.3c2.5-2.2,0.7-2.7,4.6-2.9c2.1-0.1,3.1,1.6,4.4-1.2
              c0,0-0.2,2.5,0.1,2.6c0.2,0.8,0.6,1.2,1.3,1.2c0.7,0.4,1.4,0.2,2-0.5c31.1,5.2-32.5-8.3,2.1-0.5c0.8,0.2,2.1,1.8,2.9,2.2
              c1.8,0.8,8.2,1,9.9-0.3c1.1-0.9,0.5-2.2,0.5-4.3c2.4,0.1,4.7,1.1,7.1,1.1c-1.5-2.2,0.8-0.9,1.5-1.8c0.6-0.9-0.1-2.5,1.2-2.8
              c-0.1,0,3.7,2.7,4.1,2.9c0.8,0.3,1.8-0.2,2.6,0.3c0.7,0.4,0.5,1.4,1,1.7c2.1,1.3,3.1,1,5.9,0.7c4.8-0.5,8.5,2.5,13.4,1.6
              c2.3-0.4,4.4-2.3,5.6-2.3c1.4,0,4,1.1,5,2c1.4,1.3,1.9,3.8,3.5,5.1c1.9,1.6,4.4,0.8,6.1,1.9c3.8,2.6-0.6,3.9-3.2,5.8
              c-0.5-2.1-2.7-1.2-3.2-0.5c0,0,0.6,5.9,0.7,6.1c0.8,2.3,1.9,1.4,2.9,2.8c3.3,4.7-1.1,5.8-0.5,10.8c0.3,2.6,0.6,1.6,3.5,1
              c-0.1,1.9,0.3,6.1-0.5,7.7c-1,2-2.8,1.9-4.1,2.7c-2.1,1.2-2.9,3.2-2.5,6.3c1.7-0.9,3.7-0.8,4.7,1c0.2,0.3,0.2,2.5,0.1,2.9
              c-0.7,1.7-1.1,0.6-1.9,1.6c-0.1,0.2-1.3-0.2-1.5,0c-0.7,0.8,0.6,2.1,0.5,2.8c-0.3,1.4-1.6,3.1-0.4,4.7c5.1-2.6,4.8-1,7.2,3.1
              c0.7,1.3,2.5,3.9,3.5,4.3c1.4,0.6,4-0.4,4.7,1.4c-0.1-0.2-0.9,4.2-0.8,4c-1.5,3.6-4.4,4-7.9,1.9c-2.5-1.5-1.4-2.1-3.9-0.9
              c-1.4,0.7-2.5,2.5-3.7,3.4c-1.5,1.2-1.2-0.4-2,0.7c-1.2,1.4-0.6,2.3-1.2,3.8c-0.6,1.5-1.7,1.7-1.9,3.8c-0.1,0.9,0.1,2.2,0.5,3
              c0.2,0.4,2.5,2.2,2.5,2.5c0.1,1.5-7.5,3.8-3.5,6c-2.8,1.1-8.4-0.3-9.6-3.3c2.4-0.9,0.2-5.5-0.6-7.5c-0.5-1.2-1.9-0.2-2-1.7
              c-0.1-1,1.9-2.7,2.3-3.5c0.7-1.7,0.9-5,1.1-6.8c0.6-5.5-1.4-4.7-5-7.5c-2.4-1.8-3.4-3.2-6.7-2.4c-4.2,1-0.3-1.4-3,1.7
              c-1.4-3.9-3.1,1.5-2.9,1.5c-1.3,0.1-1.9-1.4-1.5-2.7c-1.5,0.4-1.6,0.3-1.5-1.1c-1.5,0-3.6,0.4-4.2-1.3c0.4,1.2-0.7-0.6-0.9-0.6
              c-1.5,0.4-2.6,4-2,5.6c-3.7-2.1-4.4-1.3-8.7-1.2c-0.1-1.7,2.7-3.5,1.9-4.9c-0.5-0.9-3.8-0.2-4.7-0.1c-0.2-6.1,0-5.3-6.4-5.8
              c-1.1-0.1-2.6,0.2-3.7,0.1c-2.2-0.3-1.6-0.2-3.5-1.2c-1.7-0.8-3.7-1.9-4.9-3.4c-0.3,0.7-2,1.8-2.1,2c-0.4,1.6,2.2,2.6,2.3,3.9
              c0,1.6-1.9,2.3-2.3,3.9c0.1-0.4,0.5,2.9,0.5,2.8c0.5,4.9-1.6,4.9-5.5,6.3c-3.5,1.3-1,1.9,0.9,4.8c-1.9,1.9-3.9-0.5-5-1.2
              c-0.8-0.5-0.1-1.5-0.7-1.8c-2.8-1.4-3.8,1.4-4.4,3.1c-0.6,1.8-1.2,3.9-2.1,5.3c-1.5,2.5-2.4,1.3-0.9,4.2c1,2,1.9,4.2,3.9,4.4
              c-0.1,1.4-4.2,3.7-5.1,5.2c-0.8,1.2-1.6,5-2.1,5.4c-0.6,0.4-3.5-0.1-4.5,0.2c-0.3,0.1,0.4,1.9-1.8,1.1c0.4,0.5,1.2,5.3,1.1,5.7
              c-0.5,3.4-1.6,0.3-4,0.7c-1.5,0.2-1.1,0.6-2.4,1.8c-1.5,1.4-3.7,4.6-5.6,5.4c-2.7,1.2-7.6-1.4-8.6,3.6c3.8,0.4,0.2,2.4,0,2.8
              c-0.8,1.6,0.4,1.9-1.4,3c-1.6,1-3.8,1-3.5-1.2c-3.4-0.7-2.1,3.7-0.4,5c-0.9,1.7-3,1.4-3.4,3.8c-1.9-1.6-1.2-3-4.9-2.4
              c-2.9,0.4-4,2.8-4.4,5.4c-1.8,1.8-3.1-2.3-4.4,0.9c-0.1,0.3-0.1,3.9,0,4.5c0.1,1.8,2,3.6,1.3,4.8c-2.9-2.3-6.6-2-10-3.2
              c-0.1,0-3.6,1.5-5.6,0.2c-2.1-1.3-1.4-2.3-4.1-3c-0.1,0-1.2,0.3-1.8,0.2c-1.4-0.4-0.8-1.3-2.1-1.8c-4-1.8-3.1-1.1-3.7,1.9
              c-0.5,2.6,0.7,4.5,0.6,6.7c0,2.2-1.2,2.2-1,5c0.1,1,0.7,2,0.7,3.2c0,4.3-0.1,0.6-2.4,0.4c-2-0.2-1.9,0.3-1.9,2.2
              c-2.7,0.1-8.2-1.7-10.6,0.1c-0.6,0.5,0.5,2.3,0.1,2.5c-2.5,1.4-3.2-0.7-5.1-1.8c-2.8-1.6-6.4-1.1-9.5-0.8c3.7,0.6,2,3.1,1,4.4
              c-1.7,2.2-1.1,1.9-3.9,3c-1.4,0.5-7.8,2.5-5.7,5c-0.8,0.2-1.5,0.3-2.3,0.5c-0.2-3.8-6.2-3.9-6.4-0.1c-1.7,0.2-3.1,0.1-3.2,2.2
              c-0.9-0.3-2.5-2.1-3.2-0.9c-1.5,2.2,2.8,4.1,3.2,5.7c0.2,0.8-3.1,2.9-0.8,5.1c2.1,2,2.8-1.6,4.9,2.3c2.8,5.3-5.6,1.8-4,5.9
              c1.6,4.1,4.9-1,1.8,4.7c-0.9,1.6-1.1-0.1-1.2,3.1c-4.4-0.7-4.4,0.7-8.7,3.2c-2.1,1.2-1,2.7-4.3,1.1c-1-0.5-1.8-1.4-2.6-1.8
              C260.1,780.9,258.2,781,255.2,781z M400,577.1c-0.1-0.2-0.3-0.5-0.4-0.7C399.4,577,399.4,577.4,400,577.1z" />

                                <path class="st0" d="M269.7,810.9c0-0.6-0.1-1.2-0.4-1.7c1.3,0.2,2.3,1,3.5,1.4c-0.1-1.5,1.4-3.4,1.6-5.2c0.2-1.3-0.2-1.4,0.5-2.1
              c0-0.8-2.4-1.6-1.7-3.1c0.5-1,3.3,0.3,3.1-1.8c-0.1-1.7-2.2-1.2-2.6-2.2c-0.7-1.8,1.5-3.5,0.3-5.3c2.3-0.8-0.7-3.9-2.2-4.5
              c-0.9-0.4-2.5,0-3.5-0.1c-1.6-0.3-3.2-1.3-4.9-1.5c0.5,0.1-1.5-1.8-2.2-2.1c-2.4-0.9-5.5-0.5-8.1-0.3c1.6,3.5,2.3,8.9,7.4,8.4
              c-0.9,0.1-2.6-0.1-2.9,1c-0.4,1.8,4,0.9,4.6,1.8c-1.1-0.1-2.3,0-3.4,0.3c2,3.7,2.3,7.5,3.5,10.5c0.4,0.9,2.3,3.5,2.9,4.3
              C267.1,811,266.1,811,269.7,810.9z" />

                                <path class="st0 st-37 state_37" d="M396.1,693.7c-1.5,2.5,5.2,1.8,5.9,2.4c1.5,1.4-0.5,2-1.1,2c-0.2,2.1,0.7,3.9,0.3,6c0,0.1-1.2-0.1-1.2,0.1
              c-0.1,0.7,0.6,1.4,0.6,2.1c-0.3,3.2,0.3,3.6-1.8,6.2c-0.4,0.5-2,1.2-2.2,1.6c-0.4,0.6,0.4,2,0,2.5c-0.2,0.3-1.5,0.3-1.5,0.4
              c-0.2,0.5-0.4,2.2-0.8,2.9c-0.3,0.5-2.4-0.5-2.6,0.7c1.4,0.1,3.3,1,4.8,1.3c1.4,0.2,5.5-0.3,5.7,2c0.2,2.1-1.6,1.5-3.2,2.2
              c-3.2,1.3-4.2,4-6.3,6.6c-0.8,0.9-2.1,1.2-2.9,2.5c1.5,2,3-0.1,3.9,2.7c0.7,2.2-1.9,5.6-1.9,7.6c-0.1,2.7,2.4,5.1-1.1,5.1
              c0.3,3.5,2.2,4.5,0.5,7.4c-0.1,0.1-1.9,2.2-2.3,2.5c-1.2,0.8-5.3-0.7-5.3,1.1c1.6,0.2,12.6,2,13.3,3.1c0.8,1.4-0.5,2.4-1.4,3.3
              c-4.6,5,0.2-3.8-2.5,1.6c-0.5,1-0.2,3.6-0.2,4.7c0,3.8-0.2,4.5,3.7,4.5c2.5-0.1,1.9-0.1,4.3,0.7c1.3,0.4,3.1,1.4,4.5,1.2
              c3.1-0.4,2.4-3.1,4.4-0.2c0.4-0.5,4.4-0.5,4.8-0.5c2.7-0.3,0.9,1.7,4.1-0.5c0.6-0.4,1.3,0.4,1.8-0.5c0.8-1.2-1.2-2.5-0.8-3.6
              c0.8-2.3,3.1-1.4,5.4-1.5c2.9-0.1,5.4-1,8.7-0.6c1.8,0.2,4,3.3,5.9,1.1c0.5-0.6-0.5-2.1-0.2-2.4c1.4-1.4,2.4,0.6,3.7,1.6
              c-0.2-3.7,0.2-7.3,4.9-7.2c3.5,0,3.8,3.6,6.4-0.4c0.4-0.5,0.8-4,1-4.7c0.4-1,0.4-2,1.1-3.1c0.9-1.1,1.6-1.5,2.8-1.9
              c0.5-0.2,1.9,0.1,2.5,0c0.6-0.1,1.4-1.2,2-1.5c0.5-0.2,1.5,0.5,2,0.2c0.8-0.3,1.8-1.3,2.5-1.5c0,0,2.6-0.6,2.2-0.4
              c0.2-0.1,2.5-1.5,2.5-1.6c2.3-0.7,1.4-0.4,3.4,0.7c0.6,0.3,1.9,0.2,2.5,0.5c-0.2-0.1,0.4,1.5,0.3,1.5c0.9,0,1.7-0.7,2.4-1.1
              c1.3-0.6,2.1-1.3,2.8-2.5c0.9-1.7-0.6-2.9,0.3-4c-4.9-0.2-0.9-4.4,1-5.7c0.5-0.3,3-2,3.6-1.9c1,0.2,1,1.7,1.8,2.3s1.6,0.7,2.4,1.6
              c0.5,0.5,0.8,1.6,1.3,2.2c1.3,1.6,3.4,3.1,5.2,3.3c2.5,0.3,2.5,0.2,2.3-1.9c-0.2-2.6-1.2-2-3.7-2.7c-3-0.8-3.5-0.9-3.3-3.9
              c0.2-3.6,0.8-2.2,3.6-0.4c1.6-0.9,1.3-3,2.9-3.7c1.9-0.9,3.9,0.9,4.4,2.4c1.4-0.6,5.1,0.6,6.4,1.2c0-2.8-0.6-1.6,0.8-3.9
              c0.1-0.2,0.9-2.1,0.9-2.1c1.2-0.4,3.6,0.4,5,0.2c1.4-0.2,2.7-0.6,4.1-0.8c0.2-0.7-0.9-1.7-0.1-2.4c0.8-0.7,3-1.5,4.1-1.9
              c2.5-1,5.7-0.3,7.2-3c1.3-2.5,0.7-6.2,2.4-9c0.7-1.1,1.2-1.9,2.1-2.6c0.8-0.6,2.7-0.2,2.8-1.3c-3.3,1.1-7.2,1.2-10.8,1.5
              c-1.6,0.1-3.5,0.7-5.1,0.7c-1.7-0.1-2.2-1.2-4-1c-4.2,0.6-5.2,4.2-6.2-2.1c-0.6-3.5-1.7-6-1.4-9.3c-1.7,0.7-2.1-0.2-2.8-0.3
              c-0.3-0.1-0.1-1.2-1.1-1.5c-0.5-0.1-0.5,0.9-1,0.9c-3.5-0.1-2.2,1.1-2.9-2c-0.1-0.5,0.6-1.4,0.5-2.2c-0.1-0.5-1-2.3-1.1-2.7
              c-1.3-3.2-4.2-9.5-7.9-10.1c-0.5-0.1-2,1.2-3.2,1.1c-1.8-0.2-2-1.6-3.2-2.4c-2.1-1.2-4.1-0.8-6.5-1.7s-5-2.2-5.7-4.9
              c1.1-0.5,1.4-1.3,0.8-2.5c-0.2-0.5-0.3-1.1-0.5-1.6c-0.3-0.7-0.3-1.5-0.6-2.1c-0.5-0.8-1.8-0.4-2.1-1.8c-0.4-2,0.9-2.3,1.5-3.9
              c0.9-2,1.8-5.9,1.8-8.1c0-3.5-5.2-6.9-7.9-7.7c-0.3-0.1-2.5-0.1-3,0c-0.7,0.2-1.5,1.6-2.1,1.6c-3.5,0-0.1-0.1-2-1.1
              c-1.3,1.6,0.4,3.6-3,2.2c-1.6-0.7-0.7-2.9-3-2c1-2.5-2.5-1-3.5-3c-0.1,2.1-1.4,3.8,0.9,5c-2.7,1.2-3.3-0.7-5.5-1.5
              c-0.3,0.5-6,1.1-6.6,0.5c-2-1.9,1.2-3.6,1.5-5.2c-3.5-0.3-3.7,1.1-4.9-1c-0.9-1.7,0.9-2.9-0.8-3.9c-0.6-0.3-2.9-0.2-3.6-0.3
              c-1.9-0.1-5.8,0.7-7.5,0c-0.6-0.2-1.7-2.2-3.1-2.8c-4.3-1.8-0.5,1.6-1.2,4.8c-0.2,0.8-1.6,0.5-1.7,1c-0.1,0.6,0.6,0.5,0.5,0.8
              c-1.2,5.8,1.4,9.6-7,10.5c1.6,0.8,3.2,2.9,2.4,4.2c-0.8,1.3-5.1,1.7-5.9,1.2c-2.3-1.2-1.5-6.4-4.1-1.3c-0.7,1.3-0.4,2.5-0.9,3.8
              c-0.7,1.7-2.7,1.8-3.3,3.2c1.3,1.2,3.2,6.6,5.1,4.1c0.4,3.7-1.3,3.5-3.4,5.7c-1.5,1.6-3,7.4-4.2,8.1c-2.2,1.4-5-0.8-5.5,3.1
              C396.6,689.1,398.1,690.4,396.1,693.7z" />

                                <path class="st0 st-11 state_29" d="M295.9,892.4c0.5-0.2,0-0.4-0.3-0.5c0.9-0.5,2.1-0.4,2.6-0.1c1.1,0.5,1.3,4.3,1.9,4.8c1.1-3.4,5.9,0,4.4,1.9
              c1.1,0,1.6-0.3,1.7,0.8c0.8-0.7,1.5-0.6,2.2-1c-0.3,2.5,0.9,3.1,1.8,5.1c0.5-1.1,2.3-1.3,3-0.3c0.5,0.9-0.9,1.7-0.9,2.3
              c0,1-0.7,1.8,0.1,3.3c1.1,2.1,0.7,0.4,2.4,1.7c2.1,1.6,2.9,3.7,4.5,5.5c0.5,0.5,2.6,2.2,3.2,2.5c0.8,0.4,2.2,0.2,2.8,0.6
              c1.5,1,1.3,1.1,2.4,2.4c1.3,1.5,0.4,1.7,2.8,2.7c4.7,1.8,7.5-3.7,7.6,2.6c3.4-0.4,5.4,3.5,8.3,4.8c1.3,0.6,2.6,1.1,3.8,1.7
              c0.1,0.4,0.1,0.7,0.2,1.1c0.7,0,1.4-0.1,2.1-0.1c1.8,1.3,2.2,0.6,2.4,3.5c2.1-0.8,3.8-0.5,5.9-0.6c3-0.2,1.9,0.2,3.1-1.5
              c1.5-2.2,1.1-4.3,4.3-5.4c3.1-1,3.6,0.1,5.7,1.8c1.2-4.6,8.7-0.5,11.9-0.1c0.6-8.8,9.4-4.1,10.8-11c1.4-6.9-7.5-2.5-10.4-6.4
              c1.8-1.1,4.5-2.7,5.5-4.4c1-1.7,1.4-4.5-1-4.1c0.8-2.2-0.3-6,1.1-7.2c1.6-1.4,4.4,0.7,6.1-1.6c1-1.3,0-4.3,1.3-5.4
              c2.5-2.4,6.1,1.5,7.7,1.5c0.6,0,0.8-1.6,1.3-1.7c1.4-0.1,1.5,0.8,2.6,1.2c1.4,0.6,2.9,1.4,4.4,2c-0.3-2.2,0.1-4,2.5-4.3
              c-2.4-1.1-1.3-3.3,0.9-3.3c1.9,0,2.6,3.2,3.9,3.2c0.9-0.2-0.7-5.1-0.1-6c0.6-0.8,1.8-0.7,2.2-1.2c0.6-0.6,0.4-1,1-2.2
              c0.4-0.8,1.8-4.4,0.9-5.4c-1.3-1.3-4.6,0.7-6-0.2c-1.9-1.2-0.9-5.1-1.2-7.4c-0.5-4.1-1.6-1.8-4.9-1.8c-0.1,0-0.8,1-1.6,0.5
              c-0.9-0.6,0.3-1.6-0.3-2.2c-0.4-0.4-0.1-1-0.8-1.5c-0.5-0.5-1.7,0.5-2.2,0.2c-1.3-1-0.4-1.2-0.3-2.3c0,0,2.2-4,1.1-5.1
              c-1.2-1.4-2.9,0.5-3.1,0.5c-1.7,0.3-3.8,1.1-2.1-2.5c-2.1,0.4-1.9-1.2-4.2-1c0.6,2.3-1.5,3.4-3.3,4.6c-2.8,1.9-3.8,0.1-7.4,1.4
              c-2,0.7-2,3-3.9,0.2c-1.6-2.5,0.3-2.6-2.2-3.7c-1.2-0.5-2.8-0.1-4-0.6c-0.9-0.3-2.3-2-3.1-2.1c-0.2,2.7,1.2,4.2-1.5,5.3
              c-0.8,0.3-4.2,0.2-4.8-0.5c-1.9-2.7,1.8-4.1,2-5c0.6-2.1-1.3-4.1-2.7-5.7c0-0.5,0.1-0.9,0.2-1.4c-0.5-0.3-1-0.5-1.5-0.7
              c-0.4-0.7-1.2,0-1.5-0.5c-0.7-1.1-0.1-2.4,0.5-2.8c2.6-1.8,5.2,3.1,6.2,4.1c1.2,1.2,3.6,1.5,3.8,3.8c1.2-0.5,1.3-1.8,3.9-1
              c2.4,0.7,3.2,3.2,4.9,3.8c2.5,0.8-2.6-3.3-2-2.3c-0.8-1.2-0.7-2.8-0.2-4.1c1-2.7,1.5-1,3.1-2.4c0.3-0.2,1.9,0.4,2-0.2
              c-1.9-0.6-2-4.3-3.2-4.5c-0.2,3.2,1.6,4.7-1.9,2.9c-1.9-1-2-0.6-2.2-2.9c-1.6,1-3.6-0.7-5,0.5c-0.5,0.4,0.2,2.4-0.2,2.8
              c-1.3,1-3.2-0.4-4.2-0.6c-3.1-0.7-2-0.2-3.5-2.5c-0.3-0.5-1.5-2.3-1.5-3c0-0.8,1-2.1,2-2.7c-2.9,0.6-3.4-1.5-4.3-2.8
              c-2.6-3.5-1.2-4.6-0.9-8.6c0,0.1,1.7-4.5,1.7-6.6c-5.3,0.4-1.4-5.1-1-6.6c2.9,3.3,2.6,2.9,6.3,3.1c1.4,0.1,3.1,1.3,4.4,0.6
              c1.8-1.1,2.1-5.3,1.8-7c-0.5-3.2-1.6-2.2-3.1-4.5c-1.8-2.6-1.9-10.2,2.1-10.3c-0.3-2.5-2.7-3.1-1.9-6.2c0.2-0.9,0.5-1.8,1.4-2.7
              c3.7-3.8,11-0.7,15.5-0.7c0.1-3.5-0.8-7.3,0-10.8c0.2-1.1,0.4-2.1,1.1-2.9c0.7-0.7,2.7,0.7,2.9-1c-1.7,0-12.7-2-13.3-3.4
              c-1.5-3.4,5-3.2,6.2-4.2c1.2-0.9,3.9-3.9,0.8-3.8c0.9-2.7-1.6-5.3,1.9-5.3c-0.3-2.3-0.5-2.8-0.1-5.1c0.2-1.3,1-3,0.9-4.4
              c-0.2-2.2,0.4-1.1-0.3-2.3c-0.5-0.9-3,0-3.2-2.1c-0.1-1,4.5-5.7,5.3-6.7c1.5-1.8,4.5-4.7,7-4.6c-1.3-1.7-9.5-0.1-10.3-2.2
              c-1.2-3.4,6.3-4.6,4.9-9.1c4.2,1,3.9-4.4,3.9-6.5c0-2.6,0.8-2.5,1.1-4.8c0.1-1-0.9-2.8-0.6-4.3c-1.3,0-2.6,0-3.8,0
              c0.4-2.2-1.8-1.2-2.3-3.1c-0.1-0.4,0.6-1.2,0.8-0.8c-0.2-0.5,0.9-3.1-2.4-2.1c-0.2,0.1-1.9,2.5-2.4,3c-1.1,1-2.4,1.8-3.6,2.6
              c-0.8,0.6-0.5,1.5-1.8,1.9c-2.1,0.7-5.2-2.2-6.6,0.7c2,0.9,2,4.5-0.4,4.6c0.2,1.8,0.4,1.5-0.6,1.7c-0.4,0.9,0.3,0.8-0.9,0.7
              c0.4,1.8-4,1.8-5.4,1.2c0,0.8,2,1.7,1.7,2.3c-0.7,1.5-1.6,1.5-2.8,2.7c0.2-0.2-1.1,2-0.6,1.8c-2.8,0.9-0.7-0.2-3.2-1.1
              c-3.4-1.2-4.5,0-6.2,2.5c-1.1,1.7,1,1.2-1.7,2.5c-0.4,0.2-2-0.6-2.6-0.7c0.5,1.7-0.2,2.9,0,4.3c0.2,1,1.5,3,1.6,3.5
              c0.1,0.8-0.5,2.5-0.7,3.9c-2.8-1.6-4.9-2.9-8.1-3.2c-2.6-0.3-2.4,0.5-5.8,0.3c-3.9-0.2-2.5-2.2-5.3-3.6c-1.1-0.6-2.6,0.3-4-0.2
              c-1.4-0.5-2-2.7-3.7-2.6c0,2.4-0.4,4.2-0.1,6.4c0.2,1.5,1,1.7,0.9,3.5c-0.1,0.8-1.2,1.4-1.3,2.7c-0.1,1.3,2,4.1,1.2,5.7
              c-1.9,3.8-2.9-0.3-4.6-0.1c-0.1,4.8-7.1,1-10.8,2c0.9,2.9-2.1,3.9-4.5,3c-3-1.2-3.6-3.2-7.5-3c0.2,1.1,0.1,2.3-0.1,3.4
              c-2.2-0.2-0.7,1.2-2.1,2.7c-1.3,1.3-4.3,1.8-6,2.6c-2.8,1.1-3.7,1.6-0.8,3.9c-1.9-0.1-5.3,1.5-6.8,0.6c-1.6-1,0.2-4.3-3.9-2.1
              c0.4-0.2-1,1.9-1.1,2c0.5-0.5-3.3,1.6-2.1,1.2c-0.9,0.3-0.6,1.7-3.2,0c0.2,1.6,2.2,1.7,2.6,3c0.7,2.4-0.4,1.5-0.4,3.2
              c0,0.5-1.6,1.3,0.1,2.8c1.8-2.8,5.3,2.4,5.7,4.4c0.8,4.7-1.6,2.3-4.8,3.6c-0.2,1.3,2.8,0.8,3.5,2c1.5,2.5-1.9,3.5-2.8,5.1
              c-1.3,2.3,1.7,4-2.9,2.5c0.3,0.6,0.1,1.2,0.4,1.7c-1.8-0.5-7.4-0.1-7.3,2.7c2.5-0.1,2.8,0.3,4.4,1.8c3.8,3.6-0.2,4.4,1,8.2
              c0.4,1.4,3.5,2.5,2.2,5c-0.1,0.1-3,1.4-3,1.4c3,1.6,0.9,5.4,0.1,7.7c-0.7,2.1-0.3,4-3.5,1.8c0,0.3,0.1,0.8,0.2,1
              c-1.5,0.1-3.1,0.1-4.6,0.2c0.8,0.5,1.6,1.1,2.2,1.8c-7.1,0.5-1.5,2.8,1.6,4.4c2.7,1.3,1.9,0.7,3,3.6c0.7,1.9,1.3,5.1,3.9,4.9
              c-0.2,0.7-0.5,1.3-1,1.8c0.1,0.8,0.3,1.6,0.7,2.3c0.4,1.2,1.3,1.8,1.7,2.8c0.5,1.1,0.2,3.1,0.5,4.8c0.4,2.3-1,1.1,0.1,3.3
              c0.7,1.3,2.4,2.3,3.2,3.7c1.7,2.9,1.8,5.5,2,8.8c3.6-0.3,1,1.4,1.1,2c0.1,0.6,0.4,1.9,0.4,2.6c0.1,1.6,1.2,3.2,0.7,5
              c0.5,1.3,0.2,2-0.9,2.1c-0.7,0.2-1.2,0.5-1.7,0.9c-0.1,0.8,2.3,1.5,2.8,2.1c0.7,0.9,1.3,3.2,1.6,4.3c1,4-0.7,6.9,2.7,9.6
              C289.2,884.2,292.1,893.5,295.9,892.4z" />

                                <path class="st0 st-12  state_32" d="M373,1059.4c0.3-1.7,2.2-4.7,1.8-6.9c0.4,0.3,1.7,0.8,2.1,0.6c1.2-1.1-3.1-7.3-2.1-9.4c1.2-2.5,3.3-2.3,2-5.4
              c-1.1-2.7-3.5-2.7-2.1-5.8c0.5-1.1,2.4-1.8,2.9-3.7c0.3-1.2-0.2-2.8,0.3-4c0.5-1.1,1.6-1.6,2-2.3c0.4-0.7,2.5-5.6,2.5-5.9
              c0-1-1.3-2-1.4-3.2c-1.6,0.2-0.2,1.9-2.3,1.4c-1.8-0.4-3.5-1.4-3.9-3c-0.2-1,1-3.9,1.3-5.2c0.1-0.8,0.3-2.1,0.4-2.8
              c0.5-2.8,2.2-4.8,1.6-6.8c-0.1-0.3-1.5-0.5-1.7-0.8c-0.4-0.8-0.3-2.4-0.4-3.3c3.5,0.7,2.4-6.2,0.3-7c-4.3-1.4-6,5.4-9.2,4.7
              c-1-0.2-3.4-3-3.9-4.1c-1.5-2.9-0.7-6.3-0.1-9.3c0.6-2.5,2.4-7.5,0.3-10c-1-1.2-5.3-3-6.9-2.8c0.6-1.7,0.6-4,1.2-5.5
              c0.1-0.3,1,0.1,1.3-0.7c0.8-2.5-0.5-3.9-2.6-4.6c-1.9-0.6-7,1.5-7.4-0.5c-0.1-0.6,2.6-4.8,3.4-5.3c-2-2.7-6.7-2.5-9.1-4
              c-0.9-0.5-1,0.2-1.6-0.5c-0.8-1.1,0.1-5.3,0.4-6.6c2.3,0.8,6.8,1.7,6.8-2.3c0-1.3-0.4-0.9-1.5-1.7c-0.4-0.3-1.3,0.1-1.7-0.1
              c-1.2-0.6-1.7-1.6-2.8-2.3c-1.1,0.6-3-3.2-6.1-2.2c-0.1-1.2,0-2.4-0.1-3.6c-1.9,0.4-3.4,1.2-5.4,0.8c-3.5-0.5-3-2.2-4.9-4.1
              c-1.2-1.3-2.6-0.9-4.6-2c-1.7-0.9-2.4-2.9-4.6-2.6c0.8-4.9-4-4.2-5.9-6.8c-0.2-0.3-0.1-2.1-0.1-2.5c-0.1-2.7,0.2-1.5,1-3.8
              c-0.7-0.2-1.2,1.2-2.7,0.8c-0.9-0.3-1-2.3-2.6-2.5c0.3-0.7,0.4-1,0.4-1.9c-0.8,0.7-1.1,1.4-2.3,0.8c2.2,0.9-2.9-3.3-1.5-1.2
              c-0.1-0.2-0.7-2.7,0-2.2c-2.2-1.4-1.6,0.4-2.3,0.3c-1.6-0.2-3.4-0.9-2.1-2.3c0.1-0.9-1.3-0.1-1.6,0c0.1-0.6,0-1.8,0-2.5
              c-1.2,0.8-2.5,0.9-3.9,0.8c1.1,3.1,3.3,5.5,4.2,8.7c1.1,3.6,1.9,7.3,3.3,10.8c0.7,1.7,1.1,5.2,1.9,6.5c1,1.6,2.4,0,3.6,1.3
              c0.2,0.5,0.1,0.7-0.4,0.8c-0.1,0.6,3.1,1.9,3.6,2.2c-3.5,0.3-0.1,2.9,1.5,4.3c2.4,2,4,0.7,6.3,1.8c3.5,1.7-0.1,2-0.4,3.8
              c-0.4,2.3,2.9,4.3,0.6,4.4c0.5,2.4,1.8,2.8,2.8,4.4c0,0,4.1,5.2,4.4,3.6c-2.9,0.2-0.6,2.8-0.2,5.8c0.5-0.6,1.3-0.7,2.1-0.4
              c0.1,0.5-1,1.9-1,2.8c0,1.5,1.1,4.2,1.5,5.9c0.7,3,1,7.2,2.2,9.9c0.1-1.3,0.5-1.7,0.8-2.8c0.7,1.1,0.5,2.5,1.1,3.3
              c-3.2-1.6,0.1,4.1,0.8,4.8c1.6,1.6,1.9,1.2,3.6,3.5c-1.7,0.2-1.3-1.7-2.3-1.4c0.4,4,3.7,7.5,3.7,11.6c1.6-2.5,1.1,2.9,1.4-2.1
              c0.7,0.5,1.2,4,2.2,3.8c-0.5,0.1-1.8-0.5-1.7-1.1c-1.2-0.3-0.6,4.1-0.4,4.8c0.9,2.6,4,4,5.1,6.4c1,2.1,1.3,5.8,1.6,8.2
              c0.2,1.7,0.3,2.9,0.9,3.8c0.1,0.2,2.9-1.1,2.5,1.9c-6.7,0.4-4.2-3.8-5.1-7.4c-0.3-1.2-1.3-4-1.9-5.6c-0.4-1.1-2.6-4-2.6-5
              c0,3.1,1.7,6.1,2.2,9.1c0.5,3.1,0.3,6.2,1,9.3c1.3,5.5,2.9,12,5.6,17c0.2-0.4,1.7-2.6,1.8,0.1c-1.8,0.8-1.4,1.5-0.3,3.2
              c0.8-1.6,3.2-2.3,4.3-0.3c-0.7,0.7-3.7,0.9-1.6,2.1c-0.5,0-0.9,0-1.4,0c-0.1,1.9,6.9,3,2.7,3.1c-0.3,3.5,7.2,9.5,9.1,11.8
              C365.8,1056,367.4,1061,373,1059.4z" />

                                <path class="st0 st-13 state_33" d="M456.1,1026.2c-1.3-0.7-1-2.4-1.1-3.6c-0.6-0.2-2.8,0.5-3.7,0.7c-2.1,0.4-4.4-0.2-5.9-0.9
              c-4.4-1.9-7-2.9-5.7-8.1c1-3.9,4.1-6.8,6.2-10c0.5-0.9,7-8.2,7-8.3c-0.3-0.9-1.4,0-1.5-0.9c0-0.9,0.1-1.8,0.2-2.7
              c0.2-1.3,1.5-3.9,2.7-4.9c4-3.4,13.5,0.6,18.4,0.3c-1.5-2.9-9.5-3-12.1-1.9c-0.5-1.2,6.8-1.6,7.8-1.5c2.7,0.3,4.1,1.7,5.2,3.7
              c2.3-3.9,1.1-17.4-1.3-20.3c-1.6-1.9-5.2-2.3-4.8-5.6c2-0.1,2.2-3.4,5.5-1.6c-0.1-5.2,0.5-11-1-15.9c-1.3-4.1-0.6-6.7-0.5-11.1
              c-0.6,0.2-0.3,0-0.6-0.2c-1.1,0.3-3.8-1.3-6-1.9c0.9-1.8-0.9-2.4-2.7-2.4c0.2-1.5,1.2-2,2.6-2.1c-0.1-0.5-0.4-4-0.2-4.1
              c0.8-0.7,3.2-0.7,3.4,0.6c0.9-3.9,2.9,1.7,2.4,1.5c1.4,0.6,2.4,0,3-1.2c1.4-2.5-1.2-3-1.2-3.4c0.1-3.2,1.9-0.4,2.3-0.4
              c1.5-0.1,0.9-1.8,1.4-2.6c1.1-1.7,2.4-2.7,3.9-4.2c1.8-1.9,6-7.7,0.7-8.2c2.7,0,2.9,0.9,4.6-1.5c1.2-1.6,2.1-4.8,2.5-6.7
              c0.7-3.1,0.2-6.2,1.1-9.2c1.1-3.4,2.3-5.5,2-9.3c-0.2-2.9-1.2-6.3-3.3-8.4c-0.5-0.5-0.4-0.5-1.2-1c-2.3-1.3-2.1,0.5-3.3,0.4
              c-2.9-0.2-1.5-2.2-3.5-2.2c-0.1,4.6-0.8,2.3-3,5.7c-1.6,2.5,0,3.4-2.1,4.6c-0.7,0.4-1.9-0.3-2.6,0.3c-0.4,0.3-0.7,1.4-0.8,1.5
              c-0.5,0.3,0.1,0.8-0.9,1.3c-4.1,1.9-3.5-4-5-3.5c0.2,0-1.8,2.3-3,2.3c0.2-2.9-2.1-5.5-5.3-3.6c0.4,0.4,2.2,0.8,2.7,0.9
              c-1.9,0.6-1,1.7-1.8,2.8c-0.1,0.2-1.3,1.7-1.4,1.9c-1.5,2.4-2.6,3.7-5.1,2.1c-0.3,0.6-0.4,1.5-0.3,2.1c-2.1-0.2-2.4,1.9-4.8,1.8
              c-2.6-0.1-4-2.6-6.6-3c-2.1-0.3-8.9,0.2-10.1,2.2c-0.7,1.1,1,4.8,0.3,6.7c-0.3,0.7-2.5,2.9-3.4,4.1c-2.2,2.8-4.6,4.7-8,3.4
              c-2.4-0.9-2.6-3.2-4-4.3c-1-0.8-4.8-3.1-5.9-3.4c-2,5.4-5.3-2.4-8.6,0c-1,0.8-0.3,4.3-1.3,5.5c-1.5,1.9-4.3,1.7-6.4,1.8
              c0,1.5,0.2,3.1,0,4.6c1.1,0.1,0.9,0.6,0.9,1.8c0.2,4.6-2,5.4-5.1,8.1c2.5,1.6,7.1-0.6,9.2,1.9c0.9,1,0.8,3.7,0.5,4.9
              c-0.2,0.6-1.9,3.7-2.2,3.9c-0.4,0.3-0.1,0.6-0.6,1c-1.6,1.2-4.6-0.5-6.5,1.3c-3.8,3.5,1.3,5.8-4.4,4.9c-1.5-0.2-3.1-0.9-4.6-1.1
              c-1.2-0.1-2.3-0.5-3.5-0.1c-0.5,0.2-0.7,1.2-0.8,1.2c-1.2,0.2-0.7,0.1-2.8-0.5c-1.7-0.5-3.1-1.6-5.1-0.1c-4.2,3.1,0.1,6.3-6.5,6.3
              c-2.4,0-4.3,0.2-6.5,0.8c0-0.4,0.1-0.9,0.1-1.3c-1.4,0-0.1-1.4-1.5-2.3c-1.9-1.3-3.2,1.1-4.1,1.9c-2.1,1.9-2.3,3-5.7,1.2
              c-0.6,4.2,0.1,3.9,3.5,5c1.9,0.6,2.8,1.3,4.4,2.5c1.4,1.1,2.7,0.2,2.9,2.7c0,0-2.9,3.7-3.1,3.9c7.4-0.5,9.8,0.2,9.6,7.7
              c-0.3-0.1-1.8-0.2-1.9,0c-0.8,2.5,0.2,2.5,1.8,3.7c3.5,2.7,6,2.8,5.4,8.2c-0.3,2.7-1.6,5.4-1.9,8.3c-0.1,1.5,0,4.8,0.9,6
              c1,1.3,3.3,1.3,3.8,3.1c-0.8,0.1,2.7-2.9,2.6-2.8c1.1-0.9,2-1.7,3.4-2.1c3.1-0.8,4.6,1.1,5.2,4c0.2,1.4,0,2.9-0.4,4.2
              c-0.2,0.8-1.5,1-1.6,1.4c-0.1,0.9,0.9,1,1,1.4c0.2,1,1.8,1.5,1.6,3.1c0,0.3-0.9,0.5-1,0.8c-0.3,1.2-1,2.5-1.1,3.3
              c0,0.7,0.5,2.1,0.3,2.9c-0.1,0.8-1,0.6-1.3,1.5c-0.5,1.7-1.1,4.1,0.1,5.2c2.2,1.9,1.4-0.4,2.8-0.2c1.8,0.2,3.4,0.1,3.5,3.2
              c0.1,2.6-2.8,5.1-2.4,8.4c-1.5-0.4-1.6,0-2.2,1.2c-0.6,1.2-0.1,3.1-0.5,4.4c-0.4,1.2-1.2,2.1-1.8,3.2c-0.8,1.7-2,0-0.7,2.6
              c0.5,0.9,2.1,1.6,2.3,2.2c2,4.6-3.2,5.2-2.2,9.3c0.3,1.3,4.7,8.4-0.3,7.3c0,3.9-0.6,5.8-5,7c2.3,4,11.7,8.9,16.4,7.4
              c1.7-0.6,1.1-1.3,2.3-1.9c1.9-0.9,4.3-0.5,6.3-1.7c1.8-1.1,2.4-2.9,4.1-4.1c1.8-1.2,4.2-1,6-2.6c1.4-1.2,3.7-4.6,4-6.4
              c0.6-3.7-1.1-2.3-4.1-2.5c0.1-1.7,2.3-0.4,3-0.9c1.5-1,0.7-0.4,1.8-2.4c1.6-3,0.3-5.4,1.3-8.5c0.7-2.2,1.9-2.6,3.8-3.8
              c3.1-1.8,4.3-3.2,8-4c2.8-0.6,6-1.6,7.9-2.5c2.1-1.1,4.1-2,6.6-2.4c5-0.8,14.5-1,18.5,2.7C457.3,1026.8,457.1,1026.3,456.1,1026.2z
              " />

                                <path class="st0 st-14 state_6" d="M400.4,346.9c-2.1-1.9-1-3.7,0.2-5.4c1.7-2.4,1.8,0.2,1.8-2.9c0-3.9-4.4-7.6-5.9-10.9c-2.4-5.3,0-1.6-2.7-0.5
              c-2.5,1-3.3-2.6-5.3-3.4c-1.3-0.5-5.6,1.1-5.3-2.2c0.2,0,0.4,0,0.7,0c-0.2,0-0.4,0-0.6,0c0-1.2,2-2.1,2.5-3.2c0.4-1-0.1-2,0.3-3.2
              c0.8-2.5,3-3.4,5.4-3c-1.5-3.9-0.4-8.4-1.4-12.5c-1.3-5.2-1.4-10.1,0.4-15.4c0.2-0.6,1.1-2.2,1.6-3c1.6-2.5,0.9-4,2-6.5
              c1.2-2.7,5.1-4.9,6.7-6.7c1.5-1.6,3.2-4.7,4.5-6.6c1.9-2.8,1.6-3.1,0.8-4.3c-0.7-1.1-1.6-1.5-2.6-2c-1-0.6-2.5-0.9-3.7-1.5
              c-0.8-0.5-1.5-1.2-2.5-1.7c-1-0.4-2.4,0.1-2.9-0.6c-1.1-1.3,0.7-4.9-0.2-6.5s-4.7-3.9-6.1-5.3c-1.3-1.4-3.5-5.8-5.4-6.3
              c-0.2,0.8,1.2,1.5,1.3,2.2c0.2,1.4,0.1,3.3,0.4,4.6c0.1,0.6-0.6,1.4-0.3,1.8c0.3,0.6,1.9,0.4,2.1,0.9c1.2,2.1,1.1,3,1,5.8
              c0,1.4,1.1,7-1.4,7.3c1.2-0.1-6.7-5.6-5.3-3c1.7,0,1.6,2.8,0.9,3.9c-0.6,1-3.3,0.3-4,2.1c-0.1,0.2,1.4,2.8,1,4.1
              c-0.3,0.9-1.3,1-2,1.4c-4.9,3.2-2-2.9-5.1-3c-1.1,3.6-2.2,2.3-5.4,1.4c0,1.8-3,9.5,0.2,9.2c-0.3,3.4-1.5,2.2-3.3,3.6
              c-0.6,0.5-2,2.9-2.7,3.1c-1.6,0.5-4.9-0.3-5.9-0.9c-2.1-1.1-1.7-3.1-5.1-2c-0.8,0.3,0.1,1.4-0.8,1.6c-3.6,1.1-5.8-2.5-8.6-0.2
              c-0.8,0.6-1.6,2.3-2.1,3.1c-0.4,0.6-1.3,0.8-1.6,1.5c-0.5,1,0.4,2.3-0.6,3.2c-2.7,2.6-3-0.9-3.8-2.3c-0.8-1.6-1.9-1.2-1.8-3.2
              c0.1-1.8,2.4-2.4,2-4.4c-2.5,5-4-4.9-3.2-4.4c-1.4,3.8-6.7-3.5-10.5-2.8c-1.6,0.3-1.5,1.1-2.6,1.5c-3.2,1-3.9-0.8-7-1.3
              c0.2,1.7,1.7,3.8,3.2,2.2c0.7,1.8,0,3.3-0.2,4.3c-0.2,0.9-2.5,1.2-1.3,3.3c0.2,0.3,2.7-0.3,2.9,0.1c1,2.3-0.7,5.8-0.8,8.1
              c-0.1,3.5,1,3.2-2.9,3.3c0,0,2.5,1.4,2.4,1.4c0,0.3,0.1,0.5,0.2,0.8c0.1,0.6,0.7,0.6,1.7,0c1.2-0.1,2.3,0,3.4,0.3
              c0.3-0.5,0.5-1,0.8-1.5c1.5-0.1,5.3,0.7,6.5,1.9c0.5,0.5,0.3,1.9,0.8,2.5c2.7,3.2,7.3-0.4,10.5,0.6c0.2,0.1,2.5,2.5,2.7,2.9
              c0.7,1.4-0.4,3.3,0,4.8c0.4,1.5,1.4,1.4,1.3,2.1c2.9-0.4,0.8,4.5,0.8,6.3c-0.1,4.3,1.2,6,2.8,9.8c0.4,0.9,0.1,2.3,0.9,3
              c1.1,1,3.2-0.4,4.1,0.3c0.9,0.8,0.2,2,1.1,3.3c1.4,2.1,4.5,2.6,6.1,5.2c2.5,3.9,1.4,5,0.1,8.7c-0.6,1.8-1.6,4.9,0.2,6.4
              c1.3,1.1,3.5,0,5.1,0.7c-0.7-4.8-1.1-6.7,4.3-6.4c-1.8-4.3-2.5-7.9,3.8-4.6c1.5,0.8,3.8,4.8,5.3,4.9c3.6,0.4,0.2-1.2,1.7-2.2
              c1.8-1.2,1.5-1.5,4.3-1.3c0.2-5.8,6.7-1.5,6.9,1.7c0,0.2-1.1,0.7-1.1,0.9c-0.6,2-0.9,3.6-1.1,5.7c-0.1,1.4-1.5,8.9,0.6,8.6
              c0.2-1.7,1.6-2.5,3.2-2.5c0-0.5-0.1-2.4-0.4-3.1C393.3,354.1,396.6,348.8,400.4,346.9z" />

                                <path class="st0 st-15 state_3" d="M292.8,261.9c1.9,4-2,3.5,4.1,3.9c3.7,0.2,8.4,0.7,12,1.4c2.6,0.5,3.7,1.7,6.1,1.1c0.7-0.2,0.9-1.2,1.9-1.4
              c1.8-0.4,4.8,0.2,6.4,1c1.1,0.5,2.8,3.5,3.7,3.6c1.3-0.1,0.8-3.4,3.1-1.1c0.8,0.8-1,4.1,0.4,4.6c1.2,0.4,1-3.4,2.8-0.3
              c1.5,2.5-2.2,3.8-2,5.6c0.1,0.9,3.2,4.3,3.5,4.2c-1.3,0.4,3.2-6.2,3.4-6.4c2-2.3,1.8-2.7,5-2.6c2.1,0.1,3.4,0.6,5,0.2
              c1.8-0.4,2.6-2.2,5.2-0.9c1.6,0.8,3.5,4,5.9,3c1-0.4,1.4-2.4,1.6-3.6c0.1,0.4,0.6,1.1,0.9,1.4c0.4-1.8,2.5-0.5,3-1.9
              c0,0-1.1-2.8-1.1-3.3c-0.3-2.6,1-6.4,1.7-9c1.6,0.6,3.3,1,4.8,1.8c1.4-1.4,0.6-4.6,3.5-1.5c2.1,2.3-0.5,3.6,2.3,2
              c4.1-2.5-0.7-2.6-0.4-4.9c0,0,2-1.6,2.2-1.8c1.3-0.9,2.1-0.3,2.7-1.8c0.5-1.3-1.4-1-1-2.3c1-3.3,5.6-1.8,6.7,0.9
              c0.2-1.9,0.9-6.8,0.1-8.5c-0.7-1.5-2.2-1.6-3.6-2.2c-0.8-0.4-1.5-1.1-1.2-0.6c-0.5-1-0.6-0.8-0.4-1.6c-0.2,0.1-0.4,0.2-0.6,0.3
              c-0.6-2.6-1.3-4.8,2.8-4.3c-0.4-3.2-2.6-3.7-4.8-5.1c-3.6-2.4-2.1-4-2.2-7.3c0-1-0.6-3.2-1.3-3.7c-1.4-1.1-2.4-0.3-3.8-2
              c-0.9-1-1.2-2.5-2.3-3.4c-0.6,2.3-3,5.2-6,3.3c-1.4-0.9-0.3-3.2-0.8-5.1c-0.7-2.5-10.1-11.5-4.9-13c-1.6-2.7-3.7-5.4-6.6-6.5
              c-1.9-0.7-4.2-0.4-5.9-1.7c0.6-1,2.5-1.2,2.9-1.9c0.5-1-0.8-2.5-0.4-3.5c0.9-2,3-0.9,4.2-1.9c2.2-1.9,0.2-3.6,4.3-4.1
              c-0.6-1.3-1.7-2.4-2.5-3.6c-0.3,0.7-0.4,2.1-1.2,2.4c-1,0.3-2.3-0.1-3.1,0.3c-0.8,0.4-1.4,1.2-2.1,1.5c-0.8,0.3,0.1,0.9-0.7,1.2
              c-1.8,0.6-3.8-1.2-5.6-1.1c0.2,2.2-0.4,5.7-1.5,7.5c-1.5,2.6-4.4,2.4-7,2.5c-2.1,0-4.7-0.5-6.4,0.7c-1.2,0.9-1.2,2.9-2.4,3.6
              c-1.5,0.9-3.2,0.2-4.7,1.4c-1,0.8-2.5,3.4-3,4.3c-0.2,0.4-1.2,0-1.4,1.1c-0.1,0.7,0.9,1.7,1.1,2.3c0.9,2.5,2.9,4.3,0.5,6.2
              c5.1-0.1-0.4,4.2-1.1,5.7c-0.9,1.9-1.8,6.2-0.1,7.6c1.1,0.9,3.3-2.1,4.2-0.6c1.2,2-1.4,1.5-1.9,1.9c-2.5,2-4.2,4.3-6.7,6.6
              c-1.6,1.4-3.6,2.2-4.9,3.7c-1.1,1.2-1.7,2.9-3.2,4.3c-0.3,0.3-1.6,0.9-1.7,1.1c-0.5,0.6-0.5,1.6-1.1,2.5c-1.2,1.6-2.1,1.4-3.3,2.2
              c-0.5,0.4-1.7-0.1-2.2,0.6c-0.6,0.9,0.6,1.7,0.8,1.3c0.1-0.2-0.4,1.5-0.3,1.2c0,0.2-1.6,0.2-1.7,0.5c-0.6,2.1,1.2,3.2,1.2,5.8
              c0,1.6-0.1,4.2-1.8,5C292.1,260.8,292.5,261.3,292.8,261.9z" />

                                <path class="st0 st-16 state_5"
                                    d="M453.3,226c0.8,0.8,2.8,2.9,2.5,4c-0.4,1.5-5,1.8-6.4,1.2c-0.9-0.4-1.3-2.5-3.1-3.3c-2-0.9-4-0.3-6.1-0.5
              c-4.8-0.5-8.4-2.3-13-0.2c-0.7,0.1-1.5,0.3-2.2,0.4c-0.1,0.7-0.3,1.3-0.6,1.9c-1,0.5-1.1,1-2.4,1.2c-1.4,0.2-1.3-1.5-3.2-0.8
              c-1.2,0.4-2.6,2.5-2.9,3.7c0.3,0.1,0.5-0.1,0.9-0.1c0.6,2.1-1.1,2.6-2.9,2.5c0.1,2,1.1,2,1.1,4c-2.1-0.4-2.7,2.8-3,4.6
              c2.1,0.9,0.4,3.2,0.6,5.1s2.4,1.6,0.4,4.1c-1,1.3-3.8,1.7-5.2,2.7c0.5,1.4,3.3,3.3,4.5,4.1c0.9,0.5,6.8,1.9,7,2.7
              c0.3,1.7-2.2,1.2-2.8,2c-1.1,1.6-1,4.4-2.1,6.2c-2.2,3.7-3.7,3.4-1.9,7.9c1,2.6-0.1,2.6,3,2.6c1.3,0,2.8-0.7,4.1-1
              c-0.1,1.4-0.7,6.1,1.9,5.7c0,0,2.5-3,2.9-3.4c0.3-0.3,1.4-0.3,1.8-0.6c0.6-0.4,0.4-1.6,1.5-2.4c1.8-1.1,5.5-1.2,7.1,0
              c2.8,2.1,3.9,5.5,6.8,7.8c1.4,1.1,6.8,3.9,7.9,5.3c2.9,3.9-2.6,2-3.7,3.8c-1.4,2.2,2.4,3.7,3.7,4.7c1.5,1.2-0.3,1.2,2.3,2
              c1.6,0.4,3.6-1.1,5.2,0.4c1,0.9,0.4,2.3,1,3.2c1.5,2.1,5.7,2.5,8.2,3.9c0.5,0.3,1.5,2.4,1.4,2.4c1.1,0.5,3.7,0.1,4.9,0.1
              c2,0.1,6.4-1,8.1-0.3c0.4,0.1,0.1,0.4,0.3,0.5c0,0.7,0,1.4,0,2c-0.1,0.7,0.3,0.9,1.4,0.4c0.3,0.3,0.6,0.7,1.1,1
              c0.3,0.1,2.2,1.9,1.9,1.8c3,0.2,1.6-1.6,3.6-3c-3.8-1.7,2.4-7.4,3.5-9.3c1-1.7,1.4-3.9,2.5-5.5c0.6-0.5,1-1.2,1-2
              c0.7,0,1.4,0,2.1-0.1c0.9-2.3-3.2-5.9-1.1-9.4c0.9-1.4,2.2-1.4,3-2.5c1.1-1.6,0-2.8,0.2-4.3c0.3-2.8-0.4-2.4,1.7-4.3
              c0.8-0.8,2.1-0.8,3-1.9c1-1.3,0.4-3.3,1.8-4.4c1-0.8,2.6,0,3.5-0.6c1.7-1.1,2.2-4.8,4-5.9c0.8-0.5,2.6,0.2,3.1-0.4
              c1.6-2.2-3.8-4.5-4.5-5c-1.4-0.9-1.8-0.5-3.2-1.9c-1.4-1.4-1.3-2.4-3-3.6c-1.1-0.7-3.4-1.8-4.7-2.3c-2.2-0.9-4.9-0.1-6.9-1
              c-2.5-1-1.9-1.4-3-3.7c-0.2-1-0.1-2.1,0.1-3.1c-0.9-0.1-1.5-0.5-2-1.3c-2.1-2.9-3-1.8-6-3.4c-3-1.5-2.7-5.3-6.5-5.4
              c-4.5-0.1-3.5,3.2-7.7,0.1c-2.4-1.8-4.3-4.3-5.8-6.8c-0.7-1.2-1.4-2.2-2.2-3.4c-1-1.7,0.7-3.8-2.8-2.9c1.5-0.4-2.5-4.6-3.3-4.8
              c0.1,0.8,0.1,1.6-0.1,2.3c-0.6,0.3-1.1,0.4-1.8,0.4c-0.6,1.2-0.6,3.9-2.4,4.1C451.9,224.6,452.5,225.4,453.3,226z" />

                                <path class="st0 st-17  state_2" d="M437.7,181.3c-1.6-2.1-3.8-0.8-5.1,1c0.5-3.3,4.5-6.6,3.1-10.2c-1.3-3.6-3.5,0.5-5.6,1.1
              c-1.1,0.3-5.8,0.8-6.8,0c-0.9-0.6,0-0.2-0.6-1.3s-0.1-2.9-0.9-4.1c-0.9-1.5-0.9-1-1.9-2c-2.1-1.9-3.1-1.8-3-5.1
              c-3.4,0.4-6.5,3.2-10.2,3.6c-3.2,0.3-4-0.6-6.5-2c-1.7-0.9-1.2-0.7-3.4-1.4c-1.9-0.6-1.5,0.3-2.4-0.2c-1-0.6-1.6-3.1-2.7-3.7
              c-1.2-0.8-2.2-0.4-3.5-1c-2.1-1.1-1.3-2.8-2.5-3.6c-1.6-1.2-11.4-0.9-13.1,0.4c-0.3,0.2-1.7,3-1.7,3c-2.1,2.9-2.2,1.6-5.2,2.9
              c-1.5,0.6-2,2.8-3.8,3.5c-2.6,1.1-5.1-3.2-5.4,0.7c3.5,0.2,2.4,4.5,2.1,6.8c-0.3,2.1-0.3,3.3-1.6,5.1c-0.4,0.6-1.9,0.9-2,1.6
              c-0.4,1.5,2.7,3.6,1.8,5.4c-0.8,1.5-4.3,0.4-4.6,4c0-0.7-0.7,0.6-0.9,0.8c-1.3,0.8-2.2-0.5-3,0.9c-0.8,1.4,1.9,3.5-1,4.4
              c4.5,0.3,11,4.7,11,9.6c0,0.9-1.8-0.4-1.5,2c0.2,1.6,3,3.9,4,5.3c1.3,1.9,2.1,3,2.5,5.4c0-0.3-0.1,3,0,3.2c2.7,2.6,3.8-3.1,4.9-3.4
              c1.7-0.4,2.7,2.5,3.5,3.4c0.4,0.4,0.4,1.7,1,2c1,0.6,2.1-0.3,3.2,0.4c2.6,1.7,0.4,5.3,0.8,7.8c0.5,4,4.5,3.1,6.9,4.8
              c2.6,1.8,4.5,5.7,6.8,8c2.5,2.4,4.5,2.8,5.1,6.1c0.2,1-0.4,2.4,0,3.3c0.6,1.1,2.3,1.2,3.8,2c1.1,0.6,1.5,1.7,2.7,2.1
              c0.9,0.3,2-0.1,2.8,0.2c1.5,0.6,0.2,0.2,1.1,1.9c1.2-0.4,2.8-1.6,3.9-2.3c0.6-0.4,2-0.4,2.4-1.1c0.7-1.1-0.4-1.1-0.4-1.4
              c0,0.2-0.5-5-0.5-5.5c0,0.1-0.5-0.9-0.5-1.9c0.1-1.4,1.4-3.2,1.7-4.6c0.5-2.3-1.2-4.7,2.1-4.6c-0.2-1.9,0.9-3.6,2.3-4.8
              c0.7-0.7,1.7-1.7,2.8-1.8c1.2-0.1,2.5,1.7,3.2,1.5c0.9-0.6,0.2-2.4,1.1-2.9c1.6-0.9,3.5-0.9,5.3-1.2c2.4-0.5-0.8-0.6,3.1-0.8
              c1.2-0.1,3.3,0.3,4.5,0.6c2.4,0.5,4.4,0.5,6.9,0.8c2.4,0.3,3.6,1.1,5.6,2.3c0.2,1.6,1,2.1,2.4,1.7c0.8-0.1,1.7-0.1,2.5-0.2
              c-2-4.3-4.7-5.7-5.2-10.9c-1.8,1.6-2.5-1.6-2.3-3.1c0.2-2,1.6-3.3,1.8-5.4c0.3-2.6-0.8-5-1.9-7.3c-1-2.1-1.2-5-2.2-6.9
              c-0.3-0.5-1.5-0.4-1.7-0.8c-0.7-1.6-0.2-2.6-0.7-3.9c-0.4-1-0.6-1.4-1-2.4c-0.3-0.6-1.5-0.5-1.8-1.4c-0.4-1.7,2.5-2.5,1.5-4.8
              C440.6,182,438.7,182.5,437.7,181.3z" />

                                <path class="st0"
                                    d="M383.1,238.2c-0.5-0.1-2.3-0.4-2.5,0.1C380.2,239.8,383.4,244.5,383.1,238.2z" />
                                <path class="st0" d="M248.2,620.8c-0.7,0-1.4,2.3-3.6,1c-3.4-2,0.1-3,1.2-4c0.6-0.5,3.2,0.5,1.3-1.5c-1.9-2-4.6,0.2-5.3,2.1
              c-0.9,2.4,0,4.4,2.2,5.5c0.6,0.3,2.1,0.5,2.8,0.4C248.8,623.8,248.3,623.4,248.2,620.8z" />
                                <g>
                                    <path class="st0 st-18 state_9" d="M488.8,318.4c-2.1,5.9-6.2-1.5-9.2-0.5c-0.1-1.1-0.1-2.3-0.1-3.4c-4.1-0.2-9.9,1.4-13.2-0.4
               c0.4,0.2-0.8-1.9-0.8-1.9c-0.3-0.2-4.9-1.9-4.9-1.9c-1.4-0.6-3.4-0.9-3.9-1.9c-2.2-3.9,1-3-4.6-3.5c-3.1-0.3-3.9-1.5-6-3.9
               c-3.7-4.4-1-4.2,3-6.4c-0.3-0.9-3.5-2-4.5-2.6c-2.1-1.5-5-3.3-6.8-5.2c-1.5-1.6-2-4.5-4-5.7c-2.4-1.4-1.4-0.5-3.6,0.2
               c-1.9,0.6-1.8,0.7-2.9,1.4c-0.2,0.1-2.4,1.4-2.6,1.7c-0.8,0.8-1.4,3.1-2.6,3.5c-1.4,0.5-3.4-2.1-4.6-2.7c0.9-0.9,0.9-1.6,0.7-2.8
               c-1.9,0.5-5.1,1.7-6.6-0.2c-0.8-0.9-0.1-2.5-0.4-3.5c-0.3-1.3-1.6-1.8-1.4-3.3c0.2-2.2,3.7-5.2,4.5-7.2c0.9-2.3,0.3-3.6,2.5-4.7
               c-3.5-1.2-5.9-2.5-8.7-4.8c-0.9,3.2-4.3,7.7-6.3,10.2c-0.4,0.4,0,1.1-0.3,1.4c-0.5,0.5-1.8-0.3-2.4,0.2c-0.7,0.7-1.1,2.3-1.8,3.3
               c0,0.1-0.4-0.1-0.5,0c-0.7,1-0.8-0.2-1.6,1.5c-0.4,0.9,0.2,2.5-0.1,3.5c-1.6,5.7-5.3,8.7-5.1,15.4c0.1,4,1.9,7.9,2.1,12.1
               c0.1,2.9,0.5,4.6,1.5,7c1.1,2.6,3.4,4.1,3.6,7.4c0,0.6-1.1,0.7-1,1c0,0.3,0.8,0.5,0.8,0.7c0.1,2.9,1.1,5.5,2.6,7.9
               c1.5,2.3,3,4.5,3.9,7.2c1.4,4.4-0.2,2.4-2.1,5.2c-1.5,2.4,0.9,3.1,0.7,5.3c0-1-1.6,1.6-1.2,1.1c0,0-1.2,2-1.2,2.2
               c-0.5,1.8-0.9,2.9-0.6,5c0.3,2.8,1.5,8.1,3.6,9.7c0.5,0.4,9.6,2.6,4.2,4.2c4.8,1.8,0.8,2.9,1.8,5.8c-0.2-0.1-2.1-0.5-2.2-0.1
               c-0.8,2.1-0.1,1.3,1,1.9c2.2,1.3,4.7-0.1,5,3.6c-1-0.1-15.2,3.6-11.3,6.7c0.3-5.9,9.8-0.3,8.2-5.6c3.1-0.4,4.9,1,7.3,0.9
               c1-0.1,2.8-0.5,3.5-0.4c0.3,0,0,2,0.7,2.1c0.1-1.3,2.2-5,4-4.6c0.8,0.1,0.4,1.3,1.1,1.8c1.4,0.9,2.1,1.4,3.9,1.5
               c-0.8,0.2-3.1,1-3.1,2.1c4.3-1,5.4,0.1,9.6,1c1.8,0.4,4.9-0.7,5.3-0.8c2.9-0.3,4.2,0.7,6.5,2.2c1.7,1.1,3.4,2.5,4.5,4.5
               c0,1,0.1,1.9,0.3,2.9c0.6,0.9,1.1,1.8,1.7,2.6c0.5,2.1,1.2,4.3,0.5,6.5c-0.9,2.8-0.2,0.7-2.1,3.4c-0.9,1.3-1.5,2.9-1.9,4.5
               c-1,3.7-4.3,7-4.5,11c-0.3-0.3-0.9-0.9-1.3-1.1c-0.6,1.2,0.3,2.1-0.5,2.8c1.2,2.5,2,3-0.7,4.8c-0.4,0.2-3.7,1.4-4.3,1.5
               c-1.5,0.3-5.3-0.9-6.5,0.3c-1,1,0.2,3.1-0.6,4c-1.5,1.7-1.8-1.1-2.9,1.6c-0.4,1.1-0.1,3.5,0.3,4.6c0.5,1,1.4,0.3,1.8,1
               c0.7,1.3,1,2.6,0.8,4c-1.5-0.1-2.5,0.9-3.1,2.2c-1.4,3.1-0.7,6-5.4,7.1c0.9,2.7,2.8,5.2,3.1,8.1c0-0.4-0.5,5.6-1.2,4.2
               c0.6,1.3,1.6,0.3,2.1,1.2c0.9,1.5,2,0.9,2.4,3.5c0.2,0.9-1.1,3.6,0.1,3.7c0.9,0.1,2.2-3.8,3.8-4.7c0.4,2.5,1.7,0.9,3.2,2.2
               c1.6,1.4,1.3,3.7,3,5c0.3-2,3.5-2.1,4.4,0c0.9-0.8,3.4-1.7,4.1-2.5c2.2-2.7,0-3.2-0.6-5.1c-0.2-0.8-0.9-0.1-1.1-0.9
               c-0.3-1.2,1.3-1.7,1.3-2.1c0-1.2,0.2-2-0.9-2.9c-3.8-3.1-6.2,4.2-5.3-4.2c0.2-1.6,1-3.5,0.2-5.1c-0.5-1.1-2.7-0.7-3.4-3.2
               c-0.5-1.9-0.6-4.3-1-5.6c0.1,0.2-0.8-0.7-0.9-1c-0.7-1.7,0.2-3.6-1.3-5c-1.1-1-3.3,0.6-3.7-1.6c-0.2-1,0.6-0.8,0.8-1.1
               c-0.5,1.2,2.5-2.4,2-2c1.9-1.5,5.8-3.6,5.8,0.6c2.5,0.1,0.7-0.9,1.8-2.1c0.2-0.2,1.3-0.2,1.4-0.3c0.2-0.3,0.1-1.8,0.3-2.1
               c0.3-0.3,1.2,0,1.6-0.4c0.6-0.6,2.4-3.1,3.5-2.3c1.8,1.4-0.7,2.8-0.6,4c0.1,1.4,1.1,2.7,1.3,4.1c-1.5-0.1-4.1,0.2-3.9,2.2
               c0.1,0.1,0.3,0.2,0.4,0.2c0.6-3.4,5.5-2.2,2.8,1.7c2.9-1,4.2,0.9,4.5,2.9c2-0.7,4.8,0.6,6.1-0.2c0.8-0.5-0.4-1.1,0.9-1.7
               c-0.1-1.7-1.6-3.6-1.8-5.5c1.6,0.2,3.3,1.3,4.8,1c-0.7,3.4,2.5,0.9,3.4,2.3c1.9,2.9-5.5,5-3.7,8c0.5-2.4,5.1-2.5,5.1-2.5
               s0.1-2.2,1.1-2c1.8,0.3,1,1.2,1.9,1.6c0.8,0.3,5.8,0.4,6.4-0.2c0.8-0.7-0.1-2.1,0.6-3.3c1.1-1.8,1.6-0.7,2.7-1.2
               c1.7-0.8,4.5-1,2.7-3.6c1.5-0.4,3.2,0.1,4.5-0.1c1.3-0.3,3.1-2.6,4.7-1.8c0.8,0.4,1.6,3.1,2.8,4.3c0.5,0.5,2.4,1.7,2.5,2.1
               c0.9,2.5-1.4,2.6-1.9,4.1c-0.4,1.4,0.1,0.7-0.3,2c2.5-1.3,3.3,1.3,3.2,3.1c1.5-0.1-2-7.1,2.8-4.7c0-2.2,3.8,1.2,4.9,1.1
               c-0.6-2.8,3.1-1.5,3.1-1.5s2.6-1.1,3.2-1.1c-0.8,2.5-0.6,5.9-1.7,8.4c2.8-1.4,2.9-0.9,4.8-0.8c2.3,0.2,5,0.3,6.2-1
               c0.2-0.2,1.2-2.6,1.2-3c0-0.2-0.1-2.5-0.2-2.3c0.7-1.1,3-0.6,3-0.6s1.2-1,2.7-0.6c0.7,0.2,1.1,1.8,2.3,2.1c0-0.2,1.3-4.2,3.5-3.9
               c1.7,0.3,2.7,1.9,2.1,5.2c1.4-0.1,2.3-0.2,3.7,0.2c0.6,0.2,0.5,1.6,1.3,1.9c0.7,0.3,4.6-0.2,5.2,0.4c0.9,1.2-0.8,3.7,0.3,5.1
               c1.3,1.6,4.5,0,6.2,0.5c0.1,0-0.1,1.2,0,1.2c-0.2-0.1,2.9,0.5,3.3,0.7c1.3,0.8-0.1,2.1,0.7,3.7c0.1,0.2,1.8,0,2.1,0.4
               c0.2,0.2-0.1,1.7,0.1,1.8c0.7,0.2,1,0.5,1.5,1c-0.3-3.1-0.5-2.1,1-2.9c1.2-0.6,3.9,0.3,5.3,0.1c0.7-0.1,2.2-1.1,2.5-1.1
               c2.9,0,2.6,0.7,4.2,2.5c0.7,0.8,1.7,0.3,2.2,1.7c0.8,2.5-1,3.7-3.2,3c0,1.9-0.2,1.2,1,1.3c-0.2,0.8-0.2,2.5,0.1,3.1
               c1.4,0.2,2.1,1,1.9,2.5c-0.2,0.8-0.4,1.6-0.6,2.4c-0.5,2-1.5,2.9-1.5,5.4c-0.5-0.1-0.9-0.1-1.5-0.1c0-1.2,2.8,4.3,2.7,4.1
               c0.4,0,0.7,0,1.1,0c-0.2,1.4,6,4.2,7.1,4.4c4.1,0.8,4.8,0,6.1-2.8c0.8-1.7,1.5-5.2,4.1-5.2c-2.2-3.5,0.8-2.6,1.6-5.1
               c0.2-0.6-0.9-1.1-0.7-1.7c0.2-0.8,0.6-2.7,0.7-3.4c0.2-1.3-1.2-3.7-0.3-5.1c0.7-1.2,3.1-0.6,3.9-2.7c1.3-3.8-3.6-5.4-5-8
               c-1.7-3-2.4-8-1.6-11.4c1.8-7.3,10-7,15-11.4c1.3-1.2,1.5-3,2.7-4.2c1.2-1.2,3-1.5,4.2-2.6c2-1.8,1.9-5,5.5-4.5
               c1.8,0.2,1.2,1.7,2.6,1.8c0.4,0,1.5-1.7,2.2-1.9c1.7-0.5,7.5,2.4,8.5,0.1c1.2-2.6-2.7-3.4-4.1-4c-2.2-0.9-3.8-1.7-5.8-3
               c-3.7-2.2-9.1-6.8-10.5-11.4c2.4,0.3,6.9-0.4,5.8-3.5c-1-2.8-5-1-7-2.8c-0.8-0.7-1.6-2.7-0.8-3.9c1.2-1.8,2.6-0.5,3.9-1.2
               c1.2-0.6,1.6-2,3.7-2.4c1.1-0.2,7,1,7.6-0.5c0.1-0.4-3.4-1.4-3.6-1.5c-1.8-1.2-0.4-3.7-1.8-5.2c-0.7-0.7-3.5,0.1-4.7-0.5
               c-2.9-1.5-1.5-3.3-2.2-5.8c-0.8-2.5-1.3-1.2-2.3-2.6c-1-1.3-0.8-3.2-1.5-4.9c-1.5-3.6-4.7-6.3-8.4-7.8c-1.8-0.7-6.4-1.7-8.2-0.7
               c-1.3,0.8-1.3,3.1-3.3,3.8c-3.3,1-3.7-4-8.1-4.3c-3.9-0.3-6.7-0.8-10.8-1c-0.1-1.9,0.4-6.4-1.6-7.6c-2.2-1.3-5.7,1.8-8,1
               c-1.8-0.6-2.8-2.5-4.4-3.6c-2.1-1.3-5.8-3-8.1-3.7c-2.2-0.6-2.1,0.3-4,0.4c-0.7,0-1,1-2,0.9c-0.2,0-2.2-2-2.6-2.3
               c-1.1-0.7-2.7-0.7-3.8-1.4c-0.7-0.3-1.4-0.6-2.2-1c0-0.4,0-0.8-0.1-1.2c-1.6-1.2-4.5-3.3-6.2-4.1c-3.9-1.7-2.9,0.3-4.3-4.2
               c-1.2-4-4.9-4.8-8.4-6.5c-3.9-1.9-6.2-2.1-10-4.9c-3.2-2.4-6.2-7.2-6.6-0.5c-1.5,0.2-1.3-1.6-2.3-1.9c-1.1-0.3-3-0.8-4-1.4
               C491.8,319.2,490.3,314.5,488.8,318.4z" />

                                    <path class="st0 st-7 state_7" d="M393.2,316.4c-1-0.6-0.4-1.4-0.8-2.4c-2,0.7-1.5-0.6-3.5,0.4c-2.6,1.3-0.1,3.9-2.1,5c1,0.7-1.7,2.2-2.2,2.3
               c1.9,2.1,4-0.2,6.3,1.5c0.8,0.6,0.8,2.9,1.8,3c2.1,0.2-0.4-1,0.6-1.6c0.8-0.5,2.1-0.6,2.6-0.9c0-0.7-0.9-1.4-1-2.4
               c-0.1-0.7,0.8-1,0.4-2.3C395.1,318.2,393.8,317.4,393.2,316.4z" />
                                </g>
                                <path class="st0" d="M387.2,314.7" />
                                <path class="st0" d="M386.8,319.3" />

                                <path class="st0 st-28 state_28" d="M562,749.5c1.1,0-0.6-5.3-0.5-5.7c3.9,0.8,1.7,4.5,1,6.5C562.1,750,561.9,749.8,562,749.5z M642.8,666.2
              c0-0.3,0.1-0.6,0.1-0.9c-0.9,0-1.7,0.3-2.4,0.8c0.2,0.9,3.3,0.3,0.5,2.7c-0.9,0.8-2.6-0.1-3.6,0.3c-1.5,0.6-2,2.7-3.8,2.4
              c0.6,1,1.3,2,2.1,2.9c-2.2-0.2-5.4,2.2-5.2,4.4c-4.8,0.5-7.5-1.1-11.9-1.6c-2-0.2-3.2,0.7-4.7-1.1c-0.6-0.7-2.4-5.2-2.8-6.1
              c-2.2,0.6-3.7,0.7-4.8-3.3c-0.2,3.8-3.1,1.7-3.6,5c-0.3-0.9-0.8-1.8-1.2-2.6c-0.4,1.5-0.5,3.1-0.4,4.7c-1.7-0.8-3.4-4-5.3-2
              c0.5,0.4,3.9,2.2,3,3c-1.6,1.1-2.2,2.9-4.1,3.8c-2,1-3.9,0.8-6,0.7c0,0.9,0.2,2.4-0.3,3.1c-0.6,0.8-2.2,0.2-2.5,1.3
              c-0.7,2.6,2.8,2.8,2.6,5.6c-0.1,1-1.5,0.1-1.5,0.5c-0.2,1.1,0.1,2.1,0.6,3.3c-2.1-0.1-3,1.9-4.9,1.8c-2.3-0.1-2.4-3-4.8-2.9
              c0,0.8,0.2,2.2-0.2,2.6c-0.3,0.3-1.5-0.2-1.9,0.2c-0.9,0.9-1.5,2.2-2.6,2.8c-1.8,0.9-3.2,1.4-3.8-1.3c-0.1-0.6,1.5-1.1,1.7-1.7
              c-1.8-1-1.7-4.7-4.4-5.8c-1,1.5-3.5,2.7-3.7,3.9c-0.1,0.6,0.7,2.5,0.7,2.5c0-0.1,0.3,0.3,0.3,0.5c-0.1,1.4-1.5,1.5-1.5,2.2
              c-0.3,2.7,1.6,2.3,0.6,5c-0.2,0.7-0.1,1.8-0.5,2.3c-0.3,0.3-1.5-0.2-1.7,0c-0.3,0.4-0.4,1.9-0.8,2.1c-3.6,1.9-2.5-1-5.2-1.9
              c-2.4-0.9-4.7,1.5-6.3,2.9c-0.6,0.3-1.2,0.4-1.8,0.3c0.2,1-0.1,1.8-0.7,2.5c-0.7,0.6-1.8,0.5-2.4,0.9c-1.1,0.7-2.3,1.5-3.4,2.3
              c-4,2.9-2.6,7.4-4.5,11.2c-2.1,4.1-6.7,1.8-9.8,4.8c-0.6,0-1.2,0.2-1.7,0.4c0.1,0.6,0.2,1.3,0.3,1.9c-1,0.9-1.2,0.7-2.4,1.2
              c-1.7,0.8-5.2,1.4-6.9,0.5c-0.2,1.4-1.8,1.5-2.2,2.4c-0.5,1.3,2.1,2.6-0.5,3.6c-0.9,0.3-4.6-1-5.7-1.5c-0.2-0.1-0.8,0.4-1.1,0.3
              c-0.6-0.3-0.7-1.6-1.1-1.8c-0.8-0.2-1.8-1-2.6-0.6c-0.9,0.4-0.7,2.2-1.5,2.8c-2.4,1.8-2.1,0.1-4.3-0.8c0.8,2.5-1,2,1.8,3.3
              c1.5,0.7,4,0.2,5.2,1.8c2,2.6,0,5.8-2.9,5.8c-2.4,0-5.4-2.3-6.8-4.1c-0.7-0.9-1.1-2.4-1.7-3.1c-0.8-0.9-2.2-0.7-2.9-2.2
              c-1.1,0.9-2.9,1.2-3.9,2.1c-0.5,0.5-0.9,1.7-1.6,2.6c3,0.5,1.7,0.3,2.1,2.3c0.5,2.1,0.7,3.1-1.2,5.3c-0.9,1-3.7,2.8-5.1,2.7
              c-1.6-0.1-0.7-1.3-1.6-1.9c-0.9-0.5-3,0.7-3.3-1.6c-1.1,0.5-1.9,1.9-3.1,2.5c-0.9,0.4-1.4-0.3-2-0.1c-0.9,0.3-2.6,1.6-3.5,2
              c-0.6-0.1-1.2-0.2-1.8-0.3c-0.5,0.5-1,1-1.4,1.5c-2,0.3-3.2-0.2-4.7,1c-1.3,1.1-1.5,4.7-1.9,6c-0.4,1.5-0.7,3.6-2.6,4.5
              c-3.2,1.5-3.1-1.8-6.3-1.4c-5.7,0.7-0.1,11.6-6.1,6c0,3-2.4,3.2-4.8,2.5c-2.6-0.7-4.5-1.8-7.2-1.5c-1,0.1-2.5,0.6-3.8,0.6
              c-0.3,0-4.2-0.2-4.4,0.2c-0.9,1.4,1.6,3.3-0.6,5.4c0.8-0.7-4.5,1.5-3.5,1.4c-1.4,0.1-2.6-1-3.6-1.2c-1.4-0.1-4.6,2.2-4.9-0.9
              c-1.6,0.7-2.2,1.6-4.1,1.6c-1.5,0-2.8-0.9-4.2-1.3c-0.4-0.1-0.7-0.9-1.2-1c-1.6-0.3-3.8,0.9-5.8,0.4c0.1,5.8-13.9-3-16.7,3.9
              c-0.3,0.6-0.5,1.8-0.4,2.4c0.2,1.1,1.6,1.4,1.8,1.9c0.7,2.2-0.1,2.6-0.6,3.4c-0.1,0.2-1.2,0.3-1.5,0.7c-0.5,0.7-0.5,2.5-0.5,3.4
              c0,1.4,0,3.3,0.9,4.6c1.1,1.6,2.4,1.2,3.1,3.7c0.6,2.1,0.2,5.5-0.8,7.3c-1.6,2.8-2.5,1.7-4.7,1.8c-3,0-5.6,0.8-7.7-2.1
              c-1.9,3.7,1.1,1.5,1.9,3.1c0.9,1.9-0.6,6-0.7,8c-2.3-0.4-2.3,4.6-1.8,6.1c0.4,1,2.4,2.9,3.3,3.5c1.1,0.7,2.3-1,3.2,0.6
              c0.9,1.6-4.5,4.2-1.1,4.1c0,1-0.4,2.8,0.3,3.6c-0.3-0.4,4.5,0.3,3.8,0.6c1-0.4,0.5-0.6,1-0.9c1-0.6,0.1-1.7,2-2.4
              c0.8-0.3,2.9,0.2,3.6,0.1c0,0,2-1.3,2-1.4c-0.1,2.6,0.2,2.6,1.7,4.2c-0.4-1,0-2.8,0.1-4c1.6,1.1,2,2.2,3.1,3.5
              c0.9,1.2,3.4,2.4,2.2,4.3c-1.6,2.6-4.2-1.3-4.9,2.7c-0.6,3.3,2.5,1.6,2.9,4.5c0.2,1.5-1.5,2.7-3,2.4c-1.3-0.2-0.9-1.7-1.7-2.2
              c-2-1.2-1.9-1.9-4.6-1.9c-0.8,0-0.7,1.7-2.2,1c-0.7-0.3-1.5-2.1-1.9-2.6c-0.2-0.2-1.9-1.7-2.3-2.1c-1.5-1.4-1.6-2.9-4.1-3
              c0,1.1,2.5,0.8,3,1.6c0.5,0.7-0.5,2.1-0.2,2.8c0.7,1.4,2.9,1.4,3.2,3.4c0.5,2.9-2.6,2.8-2.6,5.8c1.1,0.1,3,0.5,4.2,0.1
              c0.9-5.6-2-5.7,4.5-3.1c1.6,0.7,5.5-0.2,6.4,1c1,1.3-0.9,3.3,1.2,3.7c0-1.5,5.3-1.2,6-1.4c2-0.5,8.2-2.8,4.1-5.1
              c1.7-0.2,5.3-1,6.2,0.7c0-0.9,0.3-3,2.2-1.5c1.2,1-0.4,3-0.6,4.3c0.5-1.4,3.3-1.7,4.4-1c2.4,1.5,0.4,3.9,1.1,6.1
              c0.8,2.5,3,1,2.3,4.5c2.9-1.9,6.2-0.4,6.8,2.3c0.3,1.5-0.8,4.1-0.2,5.5c1.1,2.4,1.6,1,4.3,1.5c6.5,1.2,0.6,7.1,1.8,10.3
              c-6.2-0.5-0.5,4.3-3,6.7c-2.5,2.3-3.5-3.4-6.1-2.2c0.6,1.8,3.3-0.5,2.5,2.3c-0.3,1.1-2.9,0.5-3.7,1.9c-1.6,2.5,1.2,6.5,3.9,6.8
              c2.9,0.3,4.9-3.1,6.4-5c2.2-2.7,1.7-3.7,1.9-6.7c0.2-3.7,1.5-3.9,5.4-4.8c3.4-0.8,6.6-0.8,9.8,0.5c1.4,0.6,5.4,4.1,5-0.1
              c2.7,0.9,1.8-3.5,4.9-0.8c0.8-1.8,2.7-2.2,3.4-3.3c0.6-1.1-0.4-3-0.4-3.3c0.2-2,0.4-2.5,3.2-2.4c2.4,0.1,4.2,0.7,4.3,3.3
              c0.3-0.1,0.6-1.9,1.2-1.8c1.8,0.3,1.9,1.8,3.1,2.4c2.6,1.3,0.5,0.2,2.4-0.8c1.6-0.9,2.4-1.3,4.4-1.3c-1-2.2-0.2-1.7,0.6-3.3
              c0.4-0.9,0.9-1.7,1.4-2.6c0.4-0.6,1-0.9,1.7-0.9c0-0.6,0-1.3,0-1.9c1-1.2-1.1-2.1,2-1.5c1.4,0.3,1.8,1.1,2,2.4
              c2.5-0.3-0.5-2.6,2.4-1.5c-0.5-0.7-1.9-12.5-0.6-11.7c0.9,0.6,2.4,7.4,2.8,8.7c0.8,2.4,0.6,4.4,3,5.4c0,0-0.8-5.7-0.9-6.4
              c-0.4-3.1-1-6.1-1.4-9.2c-0.3-2.7-0.8-5.5-1.4-8.2c-0.2-0.9-2-7.6-3-3.9c-0.6-1.7,1.6-1.5,2.2-2.2c0.6-0.8,1.8-3.1,2.2-4.1
              c1-3.1,0.5-7.5-0.4-10.5c-1.2-4.3-3.1-8.2-3.4-12.9c-0.2-4,1.2-7.1,2.4-10.8c1.3-3.8,3.3-6.2,5.1-9.7c0.9-1.7,1.2-3.9,2.7-5.3
              c1.8-1.6,2.9-0.7,4.7-1.6c2.5-1.3,4.3-3.9,7.7-3c2.6,0.7,1.9,1.1,2.5,3.6c0.2,0.8-0.7,3.2,1,2.8c-0.3-1.1,0.1-1.9,1.1-2.3
              c0,0.8-0.1,1.7-0.1,2.6c1.8,0.2,1.4-3.3,1.5-4.3c0.4,0.7,3.8,5.2,2.8,1.6c0.3,0.6,0.9,0.8,1.6,0.6c-3.3-0.9,2.1-4.9,2.6-5.4
              c1.8-1.8,2.4-4.3,3.7-6.4c1-1.6,1.3-3.1,2.1-4.6c1.7-3.1,4.5-2.3,7.9-3.4c0.3-3-6.1,0.3-6.7,0.2c0.7-3.3,13.7-1.5,13.9,1.1
              c0-0.9,0.1-1.8,0.1-2.7c1.2,0.2,0.8,2.3,0.9,3c4.4,0.8,8.5-3.3,12-5.1c1.6-0.8,3.9-0.8,5.2-2.2c1.1-1.2,0.8-3.4,2-4.3
              c0,1.2,0.3,4.3,1,1.7c0.3-1.1-0.4-2.5-0.2-3.6c-2.6,0.3-3.7-0.9-3.2-3.2c0.2-0.7,1.3-1.3,1.7-2c0.5-1,0.3-3.1,0.7-4.2
              c1.8-5.7,8.7-7.2,12.8-11.1c2.2-2.2,3.3-3.6,6.2-5c3.5-1.7,8.2-2.5,11.2-4.9c5.3-4.2,6.8-10.7,12.8-14.9c5.1-3.6,11.2-6,16.1-9.7
              c0.2-0.2,2.9-2.8,3-2.9c0.4-0.7,0.7-2,1-2.5c0.5-0.6,0.6-1.7,1.2-2.6c0.3-0.4,3.1-2,3.6-2.4c4-3,6-7,9-11.1
              c1.6-2.1,3.8-3.4,5.4-5.4C646.1,667.9,642.2,669.7,642.8,666.2z M561.2,750.7c-3-0.2-1.7,2.7,0.5,1.6
              C561.8,751.7,561.7,751.2,561.2,750.7z" />

                                <path class="st0" d="M979.4,354.2" />
                                <path class="st0 st-20" d="M805,384c-1,2.3-1.9,7.3,2.1,6.5c-1.4,2.2-3.4,4.2-4.7,6.4c0,0.1-1.1,3-1,3c-0.9,1.2-2.5-0.1-2.7,1.6
              c3.3-2.9,3.5,2.8,4,4.5c0.3,0.9,1.5,2.5,1.5,3.1c0.2,1.1-1.2,8.4-0.1,5.5c0.2,1.7-0.6,4.4,0.2,6c-0.6,1.6-0.1,2.2,1.6,1.8
              c1,0.1,1.9,0.1,2.8-0.2c0.9-1.2-0.2-4.9-2.1-4.3c-0.2-3.4,0.2-2.4,1.4-4.2c2.5-3.8,3.5-2.6,7.6-3.4c2-0.4,2.4-1.6,3.3-1.9
              c0.5-0.2,1.8-0.2,2.5-0.4c3.7-1.1,6.3,0.3,9.8,0.7c4.2,0.5,9.1-1.6,13.1,0.5c1.2,0.6,1.9,3.1,2.9,3.2c0.8,0,1.6-3.2,3.7-2.1
              c2.2,1.1-1.2,5.1,2.4,4.2c0.9-0.2,2.2-2.9,2.9-3.4c1.7-1,2.8-0.7,4.6-1.2c-3-3.1,4.2-9.4,6.6-2.8c1.9-4.6,0.6-5.1,6.1-5
              c2.5,0,3.6-0.2,6.4-0.5c1.1-0.1,5.6-1.3,6-0.3c0.7,2.1-2.8,2.4-3.5,4c3.2,1.1,1.1,5.9,1.2,8.2c1.8-0.1,3.5-1.8,5.4-2
              c3-0.3,2.9,0.7,5.1,1.7c1,0.5,5,2.1,5.2,2.4c1,2-2,3.8,0.2,6.3c1.6,1.9,7.5,2.9,4.6,7.1c-2.3,3.4-11.7,5.2-11.7,9.6
              c0,3.4,2.5,1.5,3.1,3.2c0.3,0.8,1,2.2,0.2,3c-2.1,2.2-5.7-1.8-8-1.7c-0.8,2.4,1.8,3.8,1.4,6c-0.1,0.8-1.2,1-1.4,1.6
              c-0.5,1.2-0.6,2-0.9,3.4c-0.3,1.3-0.6,3-0.7,4.3c0,0.8,0.5,3.4,0.4,4.9c5.6-0.6,6.7-2.6,6.9,3.1c3.1-0.1,2-2.6,3.1-4.1
              c0.4-0.6,1.5-0.1,1.9-0.6c0.3-0.4,0.9-2.4,1.2-2.9c0.3-0.6,1.2-0.9,1.5-1.7c0.7-1.6,0.3-4.2,0.4-5.9c0.6,1.4,1.5,2.6,2.6,3.6
              c2.7,2.4,1.2,1.5,4.5,0.6c3.9-1,1.3,1.4,3.1-1.6c1.3-2,1.2-4.8,1.3-7.1c0-1-0.4-5.5,0.3-6.2c0.6-0.6,1.5,0.4,2.3-0.4
              c1.5,0.4,2-0.2,1.6-2c0.1-0.8,0.2-1.5,0.3-2.2c0-1.5,0.2-2.7-0.8-4c3.4,0.3,3.5-5.1,5.1-7.4c1.3-1.9,2.5-2.1,1.7-4.9
              c-0.5-1.5-0.3-1.3-1-2.2c-0.7-0.9-2.7-1-3.1-2.6c-0.7-2.7,1.4-2.1,3.1-3.7c0.7-0.7,1.3-1.7,1.7-2.5c1.1-2.2,1.2-2.4,3.1-4.4
              c0.5-0.5,1.7-0.6,2-1.4c0.2-0.5-1.4-1.8-0.8-2.8c0.4-0.7,3.6-1.7,4.2-1.4c1.1,0.5,0.2,2.8,1.7,3.5c1.9,0.8,3.6-1.2,3.9-2.8
              c0.2-1.2-0.9-2.5-0.6-3.6c0.1-0.5,1-1.2,1-1.6c0-0.3,0.6-1,0.7-1.3c0-0.1-0.8-2.4-1-1.4c0-0.3,0.7-1.8,0.1-1.1
              c1.4-1.5,1.8-3.7,3-5.4c1.1-1.5,2-1.2,2.8-3c0.7-1.6-0.2-3.9,1.3-5.1c4.9-4,1.2,4.8,4.8,1.2c2.4-2.4,1.7-5.7,5-7.9
              c2.5-1.8,5.6-2.4,7.8-4.7c1.1-1.1,1.4-3.5,2.3-4.4c1.6-1.5,4.4-1.4,6.3-2.7c1.4-1,2.2-2.4,3.5-3.3c0.7-0.5,2-0.1,2.8-0.6
              c0.1-0.1-0.1-1,0-1.1c0.8-0.5,2.7-1.2,3.4-2.1c0.9-1.2,0.5-2.4,1.4-3.7c2-2.9,5.1-0.7,8.2-1.6c3.1-0.9,9.2-2.2,7.6-6.8
              c-4.6,4-4.2-0.9-5.9-4.4c-1-2.2-3.1-5.3-2-8.2c0.6-1.8,4-3.4,4.2-5.3c-2.1-4.2-25.3,8.5-29.1,10.1c-2.6,1.1-4.2,2.4-6.4,3.6
              c-2.9,1.7-5.8,3.6-8.8,4.7c-0.6,0.2-2.8,1.1-3.3,1.1c-1.8,0.1-4.2-2.1-6-1.7c-0.3,1.5,2.2,3.6,1,5.9c-1.3,2.5-4.7,4.6-6.6,6.7
              c-1.8,2-2.8,3.5-3.5,5.9c-0.4,1.4,0,1.9-0.4,2.6c0-0.1-4.2,3.7-4.1,3.6c-1.7,1-4,0.6-6,1c-2.1,0.3-5.2,0.5-7.3,1.1
              c-2.6,0.8-4.3,2.4-7.3,2.1c-5.9-0.6-9.3-3.6-14.9-0.7c-3.9,2-7.7,3-11.9,4c-1.5,0.4-3.5,1.6-4.7,1.9c-0.8,0.2-3.3-0.2-3.1-0.2
              c-4.3,0.6,0.2,1.5-3.2,3.7c-0.7-4.3-2-1.2-4-0.6c-1.3,0.4-2.5,0-3.9,0.2c-1.4,0.2-2.3,1.6-3.9,1.3c-0.1-3.1-1.7-2.4-3.9-1.4
              c-1.3,0.6-1,1.6-2.7,2.2c-1.1,0.4-2.8,0.1-4,0c-5.5-0.3-11.9,1.6-17.4-0.4c-2.4-0.9-4.1-3-6.7-3.5c-0.9-0.2-2.8-0.2-3.6,0.1
              c-2.2,0.8-0.6,0.8-2,1.9C813.8,379.8,806.9,379.4,805,384z" />

                                <path class="st0" d="M979,354.1" />

                                <path class="st0 st-19 state_19" d="M797.4,398.8c1.6-1.4,1.9-1.6,3.3-3.6c0.4-0.6,2-1.6,2.2-2.4c0.4-1.4-0.4-0.4-0.4-1.5c0-3.1-0.9-5.6,0.5-8.8
              c-3.8,1.1-7.8-0.2-11.5,1.5c0-1,0.4-1.9,1.2-2.5c-2.1-0.4-3.4-1.5-5.1-2.1c-2.5-0.8-2.6-0.1-4.9,0.4c-4.7,1-3.9-0.4-7.2-2.5
              c-1-0.7-2.5-0.4-3.6-1.1c-2-1.2-2.2-2.8-3.1-4.7c-0.8-1.9-2.5-5.4-3.8-1.5c0-0.2-0.9-2.1-1.1-2.1c-1.5,1.6-2.3-0.6-3.5-0.4
              c-3,0.4-0.2,0.1-1.8,1.8c-2,2.2-3.8,2.3-6.8,1.9c-1.6-0.3-4.5-0.3-6.2-0.8c-2-0.6-2.5-3.1-3.7-3.3c0.3,2.5-0.3,4.1,0.9,5.9
              c0.3,0.4,1.6,0.8,2.1,1.4c0.5,0.6,0.8,1.2,1,1.9c0.3,1.2,0,2.2,0.4,3.4c0.5,1.3,1.8,2.1,2.2,3.3c1,3,0,1.8-0.9,4.3
              c3.3,2.3,2.5,2.1,3.1,6.1c0.5,3.6,2.5,6.1-0.4,9.2c-1.4,1.5-2.9,2.6-4.3,4.2c-0.2,0.3-1.8,1.2-2.3,1.6c-0.5,0.4-0.7,2-1.1,2.5
              c-0.9,0-1.8,0-2.6-0.1c0,0.7-0.1,1.3-0.3,1.9c-0.5,0.8-1.4,2.3-1.2,3.3c0.2,1.1,2.5,2.9,3.3,3.4c1.9,1.2,3.3,1,4.6,3.6
              c1.1,2.3,1.1,4.7,1.5,7.2c-3,0.4-3.2-1.6-5.8-0.1c-2.6,1.5,2.1,2.2-3.3,2.4c0.4,1.3,3.8,5.6,3.8,6.2c0,1.8-3.1,2.5-2.7,4.3
              c0.2,0.8,2.8,2.4,3.3,3.6c0.9,2,0.8,4.8,0.3,6.9s0.3,2-1.5,2.9c-0.2,1.7,5,3.8,2.6,7.1c-1.1,1.5-3.5-0.5-4,2.2
              c-0.1,0.3,1.3,1.3,1.5,2.4c0.6,3.5-2.3,6.6-5,8.2c1.1,0.5,1.7,1.7,1.9,2.9c-1.9-0.1-4,0-3,2.4c-3.4-3-2.8,1-3.5,2.7
              c-0.5,1.1,0.4,1.3-0.6,1.7c-2,0.7-4.1-2.4-6.4-2.3c1.8,2,1.4,7.8-2.4,6.6c1.2,4.6-4.5,0.9-6.5,1c-2.5,0.1-2.3-0.2-2.3,2.9
              c-2-2.8-1.5-0.6-2.6,0.4c-1.4,1.5-0.5,1.9-2.8,2.9c-2.7,1.1-4.7,1.2-7.3,3.1c-1.9,1.3-2.7,2.4-3.9,3.9c-1.2,1.5-0.3,1.8-2.3,2.4
              c-1.6,0.5-3.4-0.3-4.6-1.2c-2.2-1.7,0.1-3.5-4-2.8c1.1,4.2-0.3,3.1-4.4,3.1c1.9,4.1-1.7,4.9-1.8,8.5c2.4-0.2,1.6,1.5,2.6,1.8
              c0.9,0.3,2.2-0.5,3.1-0.1c1.5,0.7,1.4,1.3,2.7,2c0.5,0.3,2.8,1.6,3.4,1.9c2.5,1.3,0.4,0.8,3,1.5c-0.1,0,3.4,0.5,3.1,0.4
              c1.4,0.1,6.5-0.9,5.9,2.1c-0.3,1.8-3.1,0.5-2.8,3.8c0.5,4.3,6.8,3.2,6.2,7.4c2.6-0.4,7.4,4.1,4.3,6.2c2.5,1.5,1.4,2.2,2.7,3.9
              c0.6,0.8,2,1.2,2.8,2c-3.3,0.2-6.6,2.9-2.7,5c1.9,1,4-0.2,5.5,2.1c0.5,0.9-0.2,7.7,2.2,7c-1.5-0.5,1.7-1.7,1.4-1.4
              c1.9-1.6,2.3-4.6,5-0.8c0.8,1.2,0.5,2.7,1.5,3.7c0.9,0.9,3,1.3,4.1,1.8c2.3,1.1,4.4,2.5,4.3,5.4c1.6-1.4,3.4-1.2,5-2.2
              c1.6-1,1.5-1.5,2.5-2.9c1.5-2.1,3.2-4.5,5.3-6.5c1.2-1.1,2.3-2.6,3.6-3.4c4.1-2.7,2.2-3.8,1-8.2c3.1-0.9,3.7,3.3,3.2,5.4
              c-0.8,3.5-1.4,2.6-0.2,6.1c0.1,0.2,1,3.4,0.9,3.3c2.1,1.5,3.2-3.7,6.1-3.4c0.6,0.3,0.7,0.9,0.5,1.6c1.5,0.6,2.1,0.1,1.8-1.2
              c1-0.4,0.6-1.2,2.5-1.4c-0.7-2.2-0.5-5.7,1.1-6.9c0.6-0.5,2.3,0.1,3.1-0.2c0.4-0.2,2.2-2.1,2.4-2.4c0.7-0.8,1.7-3,2.6-3.5
              c2.8-1.3,5.5,3,7.3,4.3c-0.5-2.6-2.4-4.4-3.2-6.8c-0.6-1.8-0.3-3.7-0.7-5.5c-0.8-3.8-2.8-7.6-2.8-11.2c0-1.8,0.5-2.6-0.4-4.5
              c-0.6-1.2-1.8-1.5-2.1-2.5c-0.5-1.8,1.3-8.6,3.9-7.9c-2.8-1.7-4.5-0.4-6.9-0.3c-2.7,0.1-2.6-0.2-2.3-3.7c0.1-1.4,2-5,1.4-6.1
              c-0.6-1.2-4.3-2.7-5.6-3.9c-1.9-1.9-0.8,2.7-2.1-2.2c-0.3-1.3-0.4-3.9,0-5.1c1-2.5,2.6-2.1,4.1-4.3c1.8-2.5,2.9-6.8,1.4-9.7
              c-1.4-2.6-4.1-2.5-7-3.2c1.9,0,3.8-0.1,5.6,0.6c-0.1,0.1,0.2,0.2,0.3,0.3c-1.5-2.2-5.6-2.2-8-2.6c-1.1-0.2-3.2-0.4-4.2-0.8
              c-1.6-0.7-0.6-0.9-1.9-1.7c-1.3-0.8-3.7-1.5-4.8-2.7c-0.7-0.8-3.5-4-3.7-4.7c-0.6-2,1.6-6.8,2.5-9.1c0.6-1.4,0.7-3.4,3.5-2.2
              c2,0.9,0.4,2.8,3.4,2.5c-1-0.5-1.4-1.2-1.3-2.3c3.3-0.2,1.3-0.2,2.9-2c0.9-1.1,1.6-0.9,2-2.1c0.9-2.7-2.2-3.4,1-5
              c1.2-0.6,4.1-0.4,5.3-0.4c4.4-0.1,11.3,0.5,9.7-6.8c-2.5-0.5-0.7,2.9-4,1c-1.6-0.9-2.9-4.8-3.5-6.5c-3,2.7-7.6,3.1-10.3-0.6
              c-2.1-2.9-1-4.7-5.2-6.6c-3.6-1.7-7,0.6-6.3-4.8c0.2-1.3,0.9-2.4,1.1-3.5c1.2-0.2,1.4-0.8,0.7-1.8c-0.5-0.6-0.7-1.2-0.5-2
              c0.4-2.4,2.1-2.5,3.7-3.7c1.4-1.1,1.5-2.2,2.6-3.2c1.2-1.1,3.9-2.5,3.5-3.8c-0.6-2-1.5-0.6-2.7-1.8c-1.6-1.6-3.5-5.4,0.3-4.8
              c-0.7-0.1,3,2.8,2.6,2.5c1.7,1.4,1.1,1.7,4.2,1.9c-1,3.8,1.7,0.3,2.9,2.8c1,2-1.5,3.6-1.3,5.4c0.9,0.1,1.7,0,2.5-0.1
              c-0.1,1.2,0,2.5,0.2,3.7c0.4-2.5,0.5-8,2.7-4.1c1.8-3.8,1.9-0.6,6.1-1c-0.7-1-4.8-5.4-4.1-6.7c1-1.9,4.6,0.4,5.4,1.4
              c2.7,3.4,1,7.1,5.3,9.9c2.1,1.4,4.2,2.5,6.7,2.8c3.2,0.4,3,0.2,4.3-2C795.9,404.9,795.6,400.4,797.4,398.8z" />

                                <path class="st0 st-16" d="M884,466.2c0.2-1.7,0.7-6.5,0.2-7.2c-0.8,0.8-1.1,2-1.6,2.2c-0.7,0.4-1.6,0.6-2.2,1.2
              c-2.2,1.8-2.6,4.6-4.6,6.3c-5.1-4.9-6.5,2-11.8,3.3c-3.3,0.9-5.6-0.1-7.3,3.7c-1.1,2.5-1.7,6.2-2.5,8.8c-1.2,3.8-0.8,5,1.2,8.1
              c2.3,3.7,1.8,6,3,10c0.4,1.4,1.4,9.1,2.8,9.7c3.7,1.6,2.3-4,2.1-5.5c-0.2-1.5-1.9-6.9,1.3-5c2.2,1.3,1.3,5,2.3,7
              c0.5,1.1,4,5.6,5.3,5.5c1.7-0.2,5.2-6.6,5.3-7.9c0.3-2.9-3.5-6.6-1.6-9.4c0.6-0.9,2.6-0.2,3-0.9c0.7-1.3,0-2,0.2-3.6
              c0.2-1.1,0.3-4.3,0.9-4.8c0.8-0.8,1.5,0.2,2.4-0.4c0.3,0.1,0.7,0.1,1.1,0.2c0.3-0.8,0.7-1.6,1.3-2.2c1.3-0.5,1.3-2.5,2.4,0.4
              c0.3-2,2.1-1.5,2.7-2.5c0.8-1.4,0.9-4.8,0.9-6.3c-0.1-1.5-0.8-8.1-2.1-8.8c0.5,0.1,0.7-0.1,0.8-0.6c-0.4,0.1-0.9,0.2-1.3,0.2
              c-0.1-0.7-0.1-1.4-0.1-2.1C886.7,465.9,885.3,466,884,466.2z" />

                                <path class="st0" d="M908.3,458.5c-2.8,2.1-3.2,1.3-5-0.7c-0.4,1.9-1.3,2.2-2.7,3.3c-0.2,0.1,0.4,2.7,0.2,3
              c-0.2,0.3-1.6-0.1-1.8,0.2c-0.5,0.7-0.8,2-1.5,2.7c-1.1,1.2-3.5,2.6-5.2,2c-1.7-0.6-1.3-1.4-1.2-3.7c-3.2,0.4-0.5,3.4-0.1,5.8
              c0.6,3.4,1.1,6.1,0.6,9.7c-0.5,3.5,0.6,5,1.1,8.2c0.3,1.6-0.5,2.7,0.1,4.3c1,2.5,1.9,1.5,2.2,4.7c0.4,4-0.6,7.4,0.7,11.4
              c1.1,3.7,3.3,6.6,4.7,10.2c1.2,3.2,3,6.6,3.6,10c0.7,3.7-0.6,9.5,2.2,12.6c4,4.4,0-7.7,5.6-2c1.6,1.6,2.9,7.1,6.3,4.7
              c1.5-1,2-5.6,3.1-6.8c1.7-1.9,2.8-0.6,4.3-2.1c0.8-0.8,1-5,0.9-5.8c-0.3-2.1-2.1-3.5-2.9-5.7c-1.3-3.3-0.7-8.4-0.6-11.9
              c-1.8,0.9-3.6-2.7-2.6-4c0.5-0.6,4,0.2,5,0c4-1.1,4.8-7.8,5.1-11.8c0.4-5.9-0.1-11-2-16.5c-0.5-1.4-6.1-11.7-4.6-12.5
              c-2-0.4-8.9-1.7-9.8-3.1c-1.1-1.7,0.8-3.7-1.2-5.5C911.7,458.4,909.3,457.7,908.3,458.5z" />

                                <path class="st0" d="M924,426.1c-2.4,1.7-2.1,5-3.1,7.6c-0.6,1.7-0.7,5.8-1.8,7.6c-1.1,1.9-1.9,0.5-3,1.6c-1,1-0.7,3.1-0.8,5
              c-0.1,1.9-0.7,9.3-2.4,10.1c2.7,1.1,1.3,2.5,2.2,4.3c0.9,1.8,0.1,0.9,2.4,2.1c2.9,1.5,6,1.7,8.6,3.4c1,0.6,1.2,1.9,2.8,2.5
              c1.7,0.6,7.3,0.9,7.4-2.4c1.5,0.5,2.4,2.8,3.9,3.1c2.5,0.4,1.1-1.3,3-1.4c0.9,0,4.8,1.1,5.5,1.6c0.4,0.3,1.7,3.5,2.9,3.2
              c2.2-0.6,2.7-9.7,3-11.2c0.8-4.1,2.3-8.5,3.9-12.2c1.4-3.2,3-6.5,4.8-9.6c2.4-4.1,5.5-7.3,5.2-12.4c-0.4-6.2-3.2-0.7-6.1-4.5
              c-1.3-1.6-0.1-8.7,1.7-9.7c-3.5-1.5-3-5-2.9-8.1c-5.2-0.1-3,5.2-6.7,6.9c-3.8,1.7-9.2-0.2-13.2,0.1c-3.1,0.3-2.4,0.1-3.6,2.6
              c-1.2,2.4-1.9,4.8-3.6,7c-1.4,1.8-1.9,2.6-4.1,2.8C927.9,426.3,925.5,424.3,924,426.1z" />

                                <path class="st0" d="M954,377.7c-0.5,2.2-5.5,7-7,3.1c-0.4,3.7-2.2,4.3-4,6.7c-1.8,2.6-1.7,5.1-1.9,7.8c0,0.5-0.9,0.8-1,1.2
              c-0.3,1.3,0.8,2.9,0.4,4.4c-0.9,3.3-6,5.9-8.5,2.5c-1,1.5-2.5,2-3.7,3.2c-1.9,2-1.2,2.1-2.6,4.6c-1,1.9-2,2.1-4.1,3.1
              c1.3,2.3,2.9,1,4,4c0.6,1.6-0.5,3.8,0.7,5.4c5.7,6.8,9-8.2,10.4-10.1c2.7-3.6,12-0.2,15.9-1.1c4.4-1,1.7-2.3,3.6-5.2
              c0.7-1.1,4.2-2.6,5.5-2c1.4,0.7-0.2,3.9,0.5,5.4c1.6,3.9,4.8,3.9,6.9,0.8c2-3,0.2-5.1,0.8-8.6c0.6-3.2,2.9-5.3,4.4-7.8
              c1.3-2.4,2.2-5.5,2.3-8.5c0-1.3-0.2-3.1-0.9-4.2c-0.5-0.1-0.9-0.1-1.4,0c0-0.5-0.1-1.1-0.2-1.6c-2.7-1.7-7.6-4.1-10.7-4.9
              c-2-0.5-4.4-0.7-6.4-0.5C954.2,375.7,954.7,374.8,954,377.7z" />

                                <path class="st0" d="M893.8,433.1c2.2-0.8,9-4.8,8.1-7.1c-0.5-1.2-4-1.9-4.9-3.3c-1.1-1.7-0.1-3.1-0.7-4.7
              c-0.5-1.4-4.3-4.2-6.4-4.3c-2.9-0.2-5.4,2.3-8.5,2.3c-0.2-3.8,2.5-8.5-2.2-9.3c0.5-0.8,0.8-1.8,1.3-2.7c-1.3,0.1-2.6,0.7-3.6,0.8
              c-2.3,0.2-3.9-0.5-6.1-1c0.4,2.9-2.4,7.2-3.4,9.8c-1.2-3.2-1.3-8.8-5.1-5.6c0.3-0.2,2.7,2.9,2.9,3.1c-3.5,1-6.2,1-8.3,3.4
              c-0.2,0.2-2.2,2.7-2.2,2.7c-2.5,1-5.4-0.6-5.6-3.3c-2.5,2.9-3.7-1.3-5-2.1c-1.9-1-5.4-1.4-7.6-1.2c-5.3,0.4-10.6-1.9-15.6-0.3
              c-1.7,0.5-2.9,2-5.2,2.3c-1.1,0.1-2.7-0.4-3.7,0c-1.2,0.5-2.4,2.5-2.4,3.5c0,2.7,3.3,5.2,0.6,7.9c-1.1,1.1-5.1,1.4-6,0
              c-0.1,2.3-0.4,7,2.2,8.3c1.9,1,5.1-0.1,7.4,0.7c5.8,2.1,11.3,3.4,17.6,2.8c4-0.4,7.8-0.4,11.8-0.6c3.2-0.2,6.2,0.5,9.3,0.3
              c2.8-0.2,4-0.1,7,0.3c1.4,0.2,6.2,1.3,6.7-0.6c-0.7,2.8,13-1.1,14-1.1c1.3,0,2.7,0,3.9,0.6c1.1,0.5,2,2.2,2.9,2.5
              c3.3,1.2,4-1,6-2.5c-0.4-0.3-0.8-0.6-1.2-0.9C892.3,433.6,893.1,433.2,893.8,433.1z" />

                                <path class="st0 st-22" d="M1041.3,312.6c0-1-1.8-2.7-2.2-3.7c-0.8-2.4-0.1-2.2-1.9-4.1c-0.9-1-2.4-3-3.7-3.5c-2.4-1-3.3,0.4-5.6,0.6
              c-3.1,0.3-6.9-0.2-10.1-1.4c-4.7-1.8-8.1-0.5-10,4.2c-1.4-0.5-2.9-0.7-4.4-0.7c-0.4-2,1.5-1.4,1.8-2.8c0.3-1-0.7-1.2-0.4-1.9
              c0.8-2.5,1.6-2.5,3-4.9c0.4-0.7-0.5-1.6,0.2-2.6c0.6-0.9,1.9-1,2.4-1.8c0.7-1,1.7-1.9,1.4-2.8c-0.3-0.7-1.9-1.2-2.4-1.7
              c-1.1-1.2-1.7-2.4-2.6-3.7c-1.5-2.3,1.1-2.4-2.1-2.9c-1.2-0.2-3.3,1-4,1.9c-0.8,0.9-0.8,5.7-2.6,4.9c-3-1.3,2.5-4.6-3.2-5
              c0.2-2.2,7.5-6.6,6.5-8.1c-1-1.5-2.1,0.1-3.5-0.4c-1.5-0.5-1.3-1.4-2.5-2.4c-0.9-0.8-3.5-4.5-4.4-4.8c0,2.9-6.1,5.5-8.1,6.6
              c-1.8,1.1-5.2,2.4-6.3,4.2c-1.1,1.9,1.1,3.3-1.8,3.5c1.4,2.3-0.7,3.8-2.7,4.2c-3.2,0.6-5.6-2.1-8.6-2.6c-2.9-0.5-5.7,1-8.5,0
              c-3.1-1-5.1-4.7-8.7-4.4c-0.2,4.5-3,2.9-6.2,4.7c-2.3,1.3-4.8,4.2-6.1,6.5c-0.4,0.7-0.3,2.4-1,3c-0.6,0.4-1.7,0.1-2,0.4
              c-0.1,0.1-1.3,0.9-1.4,1c0.2-0.2,0.7,1.7,0.5,2.1c-0.5,1-2,1-2.8,1.6c-0.9,0.7-1,1.4-1.9,2.1c-1.4,1.1-3.4,3.4-5,4.2
              c-1.3,0.7-2.5,0.2-3.9,0.5c-2.2,0.5-4.2,2.1-6.4,2.7c-4.2,1.1-4.4-0.1-5.2,4.1c-0.9,4.8-2.9,7.8-6.8,10.7c-2.1,1.5-8.9,4.6-8.4,8.1
              c0.3,1.6,3.3,0.8,2.1,3.6c-0.6,1.3-3.7,2.3-4.8,3.1c-2.1,1.5-1.4,1.9-4.7,2.1c-0.9,0.1-1.5,1.2-2.3,1.2c-1.8,0,0.3-2-2.9-1.5
              c3,1.3-3.2,2.3-3.6,2.5c-1,0.5-1.6,1.6-2.4,2.1c-3.2,1.8-6.1-0.6-10,0.1c-4.6,0.9-1.4-0.2-2.6,2.5c-1.2,2.6-1,1.2-0.1,4
              c1.1,3.3,3.6,3.5,5.2,6.4c0.9-1.6,6.9-2.8,8.3-2.3c0.2,0.1,2.6,3.4,2.7,3.5c1,2.1,0.5,1,0,2.5c-0.5,1.7-2.5,2.9-2.4,5
              c0.1,2,1.5,1.7,2.3,2.9c1,1.5,2.4,2.5,2.3,5c0.6-0.1-0.6-1.1,0.8-1.3c1.4-0.2,3.5-0.7,5-1.1c2.9-0.9,5.5-1.8,8.2-3.2
              c4.6-2.3,8.1-2.2,13.2-0.8c5.6,1.6,6.8-0.7,12.2-1.3c2.7-0.3,5.3-0.4,8-1.1c3.1-0.9,4.2-2.5,5.4-5.1c1.6-3.3,3.1-5.8,5.8-8.6
              c1.1-1.1,2.4-2,3.3-3.3c1.3-1.8,1.1-2,0.9-3.6c-0.2-1.5-2-3.2,0.4-4.5c1.1-0.6,2.5,0.1,3.6,0.4c2.4,0.6,2.1,0.8,4.5,0.3
              c4.4-1,8.1-3.8,12.1-6.1c6.8-3.9,13.8-6.1,20.7-9.5c3-1.5,17.7-7.3,15.8,0.6c-0.9,3.9-5.6,3.4-3.6,8.6c0.6,1.6,1.8,1.7,2.5,2.8
              c0.5,0.9,0.4,2.9,0.8,4c0.8-1.1,2.1-2,3.2-2.9c2.8,8.3-1.7,12.4-10,13.8c-0.9,0.1-4.5-0.8-4.8-0.6c-0.5,0.4-0.3,2.9-0.8,3.8
              c-0.7,1-4,3.9-5.1,4.5c-1.2,0.7-2.5,0.8-3.6,1.5c-1.4,0.8-2.2,2.5-3.6,3.2c-1.1,0.6-3.1,0.3-4.1,1.1c-0.7,0.5-1.5,2.6-2.4,3.7
              c-2.9,3.5-8,4.3-10.7,7.8c3.3,0,6.7-0.1,9.9,0.8c3.2,1,5.6,3.4,8.8,4.3c-0.9-2.6,1.4-5.7,3.1-7.6c1.1-1.2,2.1-1.8,3.5-2.6
              c0.6,0,1.3,0,1.9-0.1c0.8,0.1,1.2-0.5,1-1.5c2.2-2.1,3.1-4.3,5.7-6.1c0.7-0.5,1.8-0.6,2.6-1.2c1.3-1,1.5-2.7,2.7-3.7
              c1.6-1.3,3.4-1.5,4.8-3c2.3-2.4,2.4-5.9,5.6-8c2.2-1.4,4.7-1.4,7.1-2.1c3.4-1,4.8-2.3,7-4.7c0.6,2.7,4.6,0,6.1,0.4
              c0.2,0.1,2.5,1.7,2.6,1.8c0.4,0.8,0.6,1.6,0.5,2.4c-0.3,1.1,0.3,1.5,1.8,1.1c2,1.4,7.3,4.1,7.2,0.1c-0.1-2.3-4.3-5.4-5.9-7
              c-3-2.9-5.2-6.5-2.8-10.3c1.3-2.1,3.3-3.3,4.8-5.3c0.5-0.7,1.2-3.1,1.7-3.5c1.9-1.8,3.9-1.1,6.2-1.2
              C1040.7,316.4,1039.9,312.7,1041.3,312.6z" />

                                <path class="st0  st-23 state_18" d="M1000.1,339c-0.2-0.5-0.4-1.1-0.6-1.6c-2.1,1.5-1.9,3.2-3.7,1.4c-0.8-0.9-1.2-3.5-1.6-4.4
              c-1-2.4-3.2-5.3-1.8-8.4c0.6-1.2,4.8-2.9,3.9-4.9c-1.6-3.2-10.1,0.2-12,1.1c-2,1-10.8,2.6-9,5.1c-2.2-2.9-21.6,10-24.6,11.2
              c-0.9,0.3-3.2,1.6-4.2,1.5c-1.4-0.1-3.4-2.6-5-1.9c-1.4,0.6-1.1,1.1-1,2.5c0.1,0.9,1.6,2.1,0.9,4c-0.6,1.4-2.6,2.9-3.7,4
              c-3.2,3.2-6.6,5.9-6.2,10.7c-2.5,0.1-2.9,3.4-5.2,4.3c-1.3,0.5-3-0.1-4.3,0.2c-2.1,0.4-4.6,0.6-6.7,1.1c-3.3,0.8-4.8,2.5-8.6,2
              c-3.5-0.4-6.9-2.9-10.6-2.3c-1,0.2-3.4,1.6-4.5,2.1c-4.2,2-8.5,2.6-12.9,4.2c0.9,2.4-4.6,2.5-5.9,2.7c-0.3,0-1.3-0.9-2.2-0.3
              s0.6,2.6-1.1,3.6c-0.7-4.3-2-1.2-4-0.6c-1.3,0.4-2.5,0-3.9,0.2c-1.4,0.2-2.3,1.6-3.9,1.3c-0.1-2.5-1.1-2.7-3.3-1.8
              c-1.7,0.7-0.9,1.7-2.4,2.4c-1.2,0.5-2.7,0.4-3.9,0.3c-5.3-0.1-10.6,1-16,0.2c-3.8-0.6-9.5-6.8-13.6-4c-1.1,0.8-1,2.2-2.4,3.4
              c-2,1.8-6.4,1.6-8.8,2.5c-3,1.1-3.9,2.3-4.3,5.7c-0.2,1.5,0.2,2.7,0.4,4.1c0.1,0.7,1.4,0.4,1.3,1.2c-0.1,0.8-1.2,1.6-1.5,2.3
              c-1,1.7-2.8,4.1-3.7,5.2c-0.4,0.5-1.4,0.5-2.1,1.6c-0.5,0.8-0.4,2.5-0.5,3.4c1.6-1,1.5-5.5,4.5-2.7c1.1,1,1.2,4.9,1.6,6.4
              c0.3,1.3,0.8,1.3,0.9,2.9c0,0.6-1.3,7.2,0,3.7c0.4,3.3-1.8,9.1,3.1,9c4.7-0.1,1.9-4.1,1.4-6.8c-0.2-0.9-0.8-0.4-0.2-2.1
              c0.1-0.4,1.8-2.7,2.3-2.9c2.4-1.3,6-0.3,8.8-1.5c0.6-0.2,0.7-1,1.4-1.2c0.7-0.3,2.2-0.3,3-0.3c1.6-0.1,2.3-0.1,3.8,0.1
              c3.1,0.5,5.4,0.7,8.6,0.6c2.2-0.1,4.2-0.1,6.4,0.8c0.6,0.2,1-0.2,1.7,0.3c0.7,0.4,0.8,1.5,1.3,1.7c3.6,1.9,1.5-1.1,4.9-0.9
              c-0.2,5.8,2.9,5.4,5.5,2.2c1.9-2.4,4.1-2,7.1-3.1c-1.6-1.5-2.5-4.4,0.4-5c2.9-0.6,3.3,2.9,4,4.9c0.4-1.1,1.1-2.3,1.5-3.4
              c1-3,0-3.9,3.1-4.1c1.2-0.1,2.3,1,3.5,1c1,0,1.5-0.9,2.4-1c2.1-0.3,4.8-0.5,6.8-0.6c-1.6,1.3-3.1,1.5-3.9,3.8
              c3.8,0.5,1.6,6.1,1.7,8.7c2.8,0.1,5-2.7,7.8-2.3c3.2,0.4,3.8,3.5,7.6,3.7c-3.2,6.4,3.7,5.7,5.1,9.8c1.1,3.1-6.3,7.3-8.9,8.2
              c2.2,1.6-1.1,1.1-1.9,3.4c-1.3,3.7,2.3,2.9,3.4,4.7c3.4,5.8-7.2,0.8-8,0.9c-0.8,2.5,1.8,4,1.2,6.5c-0.2,0.8-1.5,1.4-1.8,2.3
              c-0.5,1.2-0.1,2.5-0.3,3.7c-0.7,3.9-1.2,5-1.5,9.2c2.3-0.3,4.6-0.6,7-0.9c0.1,2.1-0.7,3.5,1.2,3.9c3,0.6,3.6-3.2,4.4-4.6
              c0.1-0.2,1,0.1,1.2-0.1c-0.3,0.5,0.9-1.6,0.5-1.3c1.4-1.4,2.8-4.3,2.9-6.6c1.3,1.3,2.1,3.1,3.7,3.1c0.3,0,3.3-1.2,3.8-1.4
              c0.6-0.2,1.5,0.4,2.2,0c0.8-0.5,1.7-5.4,1.9-6.6c0.3-1.9-0.1-3.9,0.2-5.8c0-1,0.1-1.9,0.1-2.8c0.4,0,0.8,0,1.2,0
              c1.8-2.5,1.4,2.7,2.8-3.1c0.1-0.2,0.3-1.5,0.3-2c0.3-1.1,0.3-2.2,0-3.3c0.3,0,0.6-0.1,1-0.2c1.2-3,1.5-8.2,5.7-9
              c-0.8-2,0.2-5.4-1.2-7c-1.7-2-5-0.8-2.8-3.8c0.5-0.6,2.1-1,2.6-1.6c1.1-1.2,0.8-2.8,1.6-3.9c1-1.5,4-2.3,4.7-3.9
              c0.3-0.8-0.3-1.9-0.4-1.8c0.5-1-1.6-1,0.9-1.4c2.6-0.4,0.4,1.2,2.3,2.1c2,0.9,4.1,1.7,5.8-0.9c1.4-2-0.3-3.7,0-5.6
              c0.2-1,1.6-1.5,1.8-2.6c0.5-2.7-0.8-4.3,1.7-7.4c0.7-0.9,2-1.2,2.7-2.2c1.1-1.8,0.1-6.2,2.8-6.5c0.1,3.1,0.6,3.8,2.8,2.5
              c1.1-0.7,1.8-2.2,2.3-3.3c1.5-3.1,1.6-4.2,4.8-6.2c3.3-2.1,6.1-3.6,8.6-6.5c1-1.2,0.4-1.6,2.1-2.7c1.6-1,3.3-1,5-2.4
              c1.4-1.1,2.2-1.8,3.6-2.6c0.5-0.3,1,0.1,1.5-0.2c1.3-0.8,4.6-3.5,5.4-4.8c1.1-1.7-0.8-3.2,1.7-4.1c0.5-0.2,3.2,0.8,4.2,0.6
              c1.1-0.2,1.9-0.8,3-1.1C996.3,345.7,1001.9,344.4,1000.1,339z" />
                                <g>
                                    <path class="st0 st-24 "
                                        d="M636.1,1015.1c-0.1,0.9-0.1,1.8,0,2.8c1.5,0.2,1.5-1.3,1.7-1.9C637.9,1015.9,637,1014.8,636.1,1015.1z" />
                                    <path class="st0" d="M776.9,1011.1" />
                                    <path class="st0" d="M894.5,999.8c-2.1,0.8-2,0.1-2.6-1.6c-1.7,1.5-1.5-1.5-3.1-1.1c0,0.2,2.4,4.2-0.9,4.4
               c0.7,0.3,3.5,3.5,3.8,3.3c0-0.3,0.1-0.8,0-1c4.7,2.4,2.1,0.7,4.3-4.4C895.4,999.6,895,999.7,894.5,999.8z" />
                                    <path class="st0" d="M895.5,1035.1c-1.1-0.5-1.8-0.3-2.5,0.4c-1.6,1.5-0.1,1.5,0.8,2.6c0.6,0.8,1.8,1.4,2.7,2.2
               C896.3,1039.2,896.7,1035.8,895.5,1035.1z" />
                                    <path class="st0"
                                        d="M740,1005.6c0.2-0.2,0.4-0.4,0.6-0.7c-0.9-0.3-2.1-0.3-3-0.2C738.5,1005.7,738.8,1006.6,740,1005.6z" />
                                    <path class="st0"
                                        d="M615.8,1029.3c-2.3-0.4-1.4,2.3,0.2,2.6c0.2-0.7,0-1.2-0.6-1.5C616.1,1030.8,615.9,1030.4,615.8,1029.3z" />
                                    <path class="st0"
                                        d="M616.5,1056.3c-0.3-0.5-1.3-0.5-1.5,0.2C615.5,1056.6,616,1056.5,616.5,1056.3z" />
                                    <path class="st0"
                                        d="M629.3,1042.8c-0.2,0.8-0.2,1.7-0.3,2.6C628.8,1046.5,634.2,1042.8,629.3,1042.8z" />
                                    <path class="st0"
                                        d="M636.9,998.5c-0.2,0.7,0.1,1.1,0.8,1.3c0.2-0.6,0.2-1.3,0.2-1.3C637.5,998.4,637.2,998.5,636.9,998.5z" />
                                    <path class="st0"
                                        d="M602.9,992.7c-0.2,0.7,1.4,1.8,2,1.6C605.3,993,603.4,991.3,602.9,992.7z" />
                                    <path class="st0"
                                        d="M647.5,1008.2c0.6,0.1,1.2,0,1.7-0.4C649.6,1005.8,647.5,1008.1,647.5,1008.2z" />
                                    <path class="st0"
                                        d="M596.3,1001.9c0.2,0.5,0.5,0.9,1,1.2c-0.4-1.1-0.5-1.4-0.3-1C596.9,1001.5,596.6,1001.4,596.3,1001.9z" />
                                    <path class="st0"
                                        d="M615.8,1000.3c-0.5,1.9-1.2,2.8,0.7,2.8C617.1,1002.1,616.9,1000.9,615.8,1000.3z" />
                                    <path class="st0"
                                        d="M614.3,1059.3c0-0.6-0.5-0.8-1.1-0.5C612.7,1059,614.2,1059.8,614.3,1059.3z" />
                                    <path class="st0"
                                        d="M619.9,1025.3c-0.8,0.5,0.3,1.3,0.9,1.1C621.2,1026.3,620.7,1024.7,619.9,1025.3z" />
                                    <path class="st0"
                                        d="M628.6,1030.1c-0.1,1.2,0.2,1.1,1.4,1.1C629.9,1031.2,629.4,1030.1,628.6,1030.1z" />
                                    <path class="st0" d="M608,976.1" />
                                    <path class="st0"
                                        d="M606,974.5c0.3,0,0.6,0,0.9,0c-0.5-0.1-0.7-0.4-0.6-0.8C606.2,974,606.1,974.3,606,974.5z" />
                                    <path class="st0"
                                        d="M607.6,977.1c0.5-0.1,0.8-0.4,0.9-0.9C607.9,976,607.6,976.3,607.6,977.1z" />
                                    <path class="st0"
                                        d="M667.5,1062c0.3,0.4,0.4-5.3,0.4-4C667.4,1059.1,666.6,1060.9,667.5,1062z" />
                                    <path class="st0"
                                        d="M611.9,1016.5c-0.5,0.5,0.3,2.8,1.5,0.9c-0.1,0.2-0.2,0.3-0.3,0.4C613.7,1017.1,612.7,1015.8,611.9,1016.5z" />
                                </g>
                                <g>
                                    <g>
                                        <path class="st0 st-38 state_38" d="M929.2,689v-5.4v-2.1l1.1-2.1c0,0-0.2-4.7,0-5.4c0.2-0.6,0.9-7.5,0.9-7.5s2.1-4.3,2.4-5.6
                c0.2-1.3,3-4.7,3-4.7s1.3,0.6,2.1,0c0.9-0.6,2.1-2.6,2.1-2.6s1.1-0.2,1.1,2.4s-0.9,4.9-0.9,4.9l0.9,2.1c0,0,1.9,1.7,0,1.7
                s-3.6,1.1-3.6,1.1s0.2,2.8,1.3,3.4c1.1,0.6,3.4,1.7,3.2,3.2c-0.2,1.5,0.7,7.9,0,8.6s-4.7,2.8-5.4,1.7c-0.6-1.1-0.8-3.6-1.3-3.6
                s-2,1.3-2,1.3s0,3.9-0.2,4.7c-0.2,0.9-2.6,4.9-2.6,4.9s-1.3-0.3-1.3,0s2.1,0.8,3.5,0.8s3,1.9,3.2,2.7s0.8,4.7,0.9,5.5
                s-0.4,4.8-0.4,5.8s0.9,6.9,0.1,8s-3.2,2-3.9,2.1c-0.6,0.1-2.8,0-2.8,0s0.6,2.9,1.3,3.5c0.6,0.6,1.7,1.9,1.3,2.6
                c-0.4,0.6-2.4,1-2.6,1.4s-0.4,1.2,1,1.6s2.4,0.3,1.9,1.9s-1.8,3.2-2.6,4.2s-2.7,3.4-3.3,4.4s-1.2-2-1.5-2.4s-2.2,0.1-2.2,0.9
                s-0.5,3.2,0,4.1s-0.2,4.3-0.2,4.3s-0.1,2.4,0,3.4s-0.2,3.1-0.1,3.4s0.1-3.5,1.4-3.6c1.3-0.1,1.9,3.5,2,3.7c0.1,0.2-1,3.6-1.3,4.6
                c-0.3,1-1.3,3.1-2.2,3.9s-2.4,2.2-2.8,2.7s2.2,0.5,2.7,0s1.5-1.1,1.5,0.4c0,1.5,0.5,4.7,0,5s-2.6,2-3.1,2.5s-1.9,1.7-1.9,1.7
                s2.8,5.1,1.1,6.3c-1.7,1.2-4.3,1.3-4.6,0s1-4.5,1.5-5.6s1.4,0,2.1-2.4s-0.6-3.6-0.6-3.6s-1.2-3.4-0.5-3.5s1.5,0.8,1.9,0.4
                s-2.1-0.2-3.1-1.7c-1-1.5-3.1-4.2-2.8-5.8s0.2-2.4-0.8-3.4s-0.6-5.9,1.6-4.8s2,1.4,2-1.5s-0.6-8.9,0.9-11.4s2.8-3.2,3.2-2.7
                c0.4,0.5,0.3,2.2,1.1,2.6s3.4,1,3.5-1.9s0.6-4.8,1.8-5.5c1.2-0.6,3.8-2,1-2.6s-5.2,0.9-5-2.7s0.1-10.3,0.1-11.5
                c0-1.2,0.3-3,1.7-3.3s3.5-2.5,1.7-2.5s-2.1-1-2-3.1c0.1-2.1,0.2-4.5,0.9-5c0.6-0.5,2.2-2.1,2.2-2.1s1,0,0.8-0.9
                C929.5,690,929.2,689,929.2,689z" />
                                        <path class="st0" d="M920.7,694.6c0,0,3.9-2,4.1-4.2c0.2-2.2,0.7-4.3,0.2-4.7c-0.5-0.3-1.3-1.9-2-0.9s-1.5,4-1.5,4.7
                s0.3,0.7-0.2,2.4S920.7,694.6,920.7,694.6z" />
                                        <path class="st0" d="M943.3,726.7c0,0-1.3,0.9-1.7,2.9s-2.9,3.7-2,4.3c0.9,0.6,2.7,2.1,2.7,0.9s0.1-2.1,0.6-1.9
                c0.5,0.3,0.7,2.1,1.1,0.6S943.3,726.7,943.3,726.7z" />
                                        <path class="st0"
                                            d="M938.4,737c0,0,5,4.3,4.5,6c-0.5,1.7-1.2,2.4-1.2,2.4s-4.2-5.9-4.5-6.6S938.4,737,938.4,737z" />
                                        <path class="st0"
                                            d="M899.3,760.8c0,0-2,1-1.1,2.6s1.7,0.3,2.4,0s0-2.6,0-2.6H899.3z" />
                                        <path class="st0" d="M913.6,812.8c0,0,3.4-2,2.7-7.1s-4-9.1-6.9-5.4s-4,6.7-3.1,9.4s0.4,3.1,0.4,4.9c0,1.7,0.3,3,2,3.6
                s3.3,0.9,4.3,0s2-1.4,1.7-2s-0.5-1.9-1.1-2.1S913.6,812.8,913.6,812.8z" />
                                        <path class="st0"
                                            d="M928.3,887.2c0,0,1.4,2.4,1.4,3s-3.3,2.6-3.3,2.6s-3.3-1-3-2.8s2.5-3.2,3.1-3.2S928.3,887.2,928.3,887.2z" />
                                    </g>
                                </g>
                                <path class="st0 st-26 state_26" d="M446.8,170.2c-0.3,3.4,1.8,6.9,4.9,8.3c3.2,1.4,7.1,0.5,9.4-2c0.9-1,1.6-2.2,2.8-2.7c1.4-0.6,3.1,0.1,4.6-0.1
              c3.2-0.3,5.3-4,4.9-7.2c-0.4-3.2-2.5-6-4.6-8.4c-1.2-1.4-2.5-3.2-1.8-4.9c0.5-1.4,2.4-2.4,2.1-3.9c-2.8-2.9-7.4-2.8-11.3-3.6
              s-7.8-3.1-7-7c2.4-1.3,5-2.1,7.7-2.2c-1.6-5-3.2-10-4.7-15c4.8,1.6,10.4,0.9,14.3-2.4c3.8-3.3,5.3-9.3,2.8-13.7
              c1.6,2,5,0.2,6.2-2.1c1.2-2.3,1.6-5.2,3.7-6.7c1.7-1.2,3.9-1.2,5.9-1.1c0.2-9,2-17.9,5.2-26.3c0.6-1.7,1.3-3.4,0.9-5.2
              c-1.2-4.8-9.7-5.4-9.8-10.3c-5.4,3.6-12.4-0.4-18-3.8c-1.9-1.1-4.4-2.2-6-0.7c-0.9,0.8-1.2,2.2-2.1,3c-3,2.7-8.1-2.9-11.6-0.9
              c-1.5,0.8-2,2.7-3.4,3.8c-2.8,2.3-7.9,0.4-10.2,3.2c-0.9,1.2-1.1,2.9-2.2,3.8c-0.9,0.8-2.3,0.9-3.6,1.2c-6.4,1.1-12.3,5.8-18.6,4.5
              c-1.4-0.3-2.8-1-3.3-2.2s0.3-3.1,1.7-3.1c-4.3-4.1-10-6.7-15.9-7.2c-1.4-0.1-3-0.2-3.8-1.4c-0.7-1-0.4-2.3-0.2-3.5
              c0.7-3.7,0.2-8.3-3.2-9.8c-1.7-0.7-3.8-0.5-5.3-1.6c-0.9-0.8-1.4-2-2.2-2.9c-1.1-1.4-2.8-2.1-4.4-2.8c-8.7-4.1-16.5-10.1-22.7-17.5
              c-2-2.4-4-5.1-4.3-8.3c-2.3,2.6-6.3,2.7-9.7,1.9c-3.4-0.8-6.7-2.2-10.2-1.8c-2.4,0.3-4.6,1.5-6.8,2.3c-8.1,3.3-17.5,3.1-25.4-0.4
              c3,2.6,6.2,5.5,6.6,9.4c-6.1-0.6-12.1-1.3-18.2-1.9c-0.9-0.1-1.8-0.2-2.6,0.2c-1.3,0.6-1.8,2-2.3,3.3c-1.3,3.4-3,6.8-5.9,9
              c-2.9,2.2-7.2,2.9-10.2,0.7c-1.4,5.7-1.1,11.9,0.8,17.5c3.6-1.1,7.5-2,11.1-1.1c3.7,0.9,7,4,7.1,7.7c2.9,3.1,4.7,5.3,9,5.1
              c1.8-0.1,4-0.6,5,0.9c1.3,1.8-0.8,4-1.2,6.1c-0.5,3.1,2.5,5.5,5.3,6.8c1.9,0.9,3.4,2.5,5.4,3.3c3.3,1.3,6.8,1.5,10.3,2.4
              c1.1,0.3,2.3,0.7,3.2,1.3c0.8,0.5,1.5,1.1,2.1,1.8c3.2,3.1,6.8,6.1,11.2,6.6c1.5,0.2,2.9,0.1,4.4,0.2s3,0.6,4,1.6
              c0.7,0.7,1.1,1.6,1.3,2.5c0.1,0.5,0.1,1,0.2,1.5c0,0.5,0.2,0.8,0.3,1.3c0.4,1.8,0.9,3.4,1.4,5.2c0.6,2.1,1.5,4.1,2.4,6.1
              c0.9,1.9,1.7,3.9,2.9,5.6c0.3,0.4,0.5,0.8,0.9,1c0.9,0.8,1.8,1.4,2.9,1.7c1.7,0.4,3.4,0.9,5,1.7c1.3,0.6,2.4,1.5,3.5,2.4
              c0.4,0.3,0.6,0.5,1,0.8c1.6,1,3,2.2,4.4,3.5c0.3,0.3,0.7,0.6,1,1c0.2,0.3,0.4,0.6,0.6,0.9c1.2,2.1,2,4.4,2.1,6.9
              c0.1,1.3,1,2.5,1.7,3.6c0.8,1.1,1.8,2,3.1,2.3c0.1,0,0.3,0.1,0.4,0c0.1,0,0.2-0.1,0.4-0.2c0.8-0.7,1.9-0.9,3-0.8
              c0.3,0,0.5,0.1,0.7,0.2c0.3,0.2,0.6,0.4,0.9,0.7c0.4,0.3,0.9,0.5,1.3,0.8c0.2,0.2,0.4,0.4,0.6,0.7c0.7,0.8,1.3,1.6,2,2.4
              c1.3,0.4,1.8,1.7,2.4,2.9c1.1,2.2,2.2,4.4,3.3,6.6c0.6,1.2,1.2,2.4,2.4,3c1.3,0.7,2.9,0.4,4,1.4c0.7,0.6,1,1.5,1.6,2.2
              c0.6,0.7,1.4,1,2.3,1.4c1.3,0.6,2.6,1.1,3.8,1.7c2.4,1,4.9,2.1,7.4,1.5c3.1-0.7,5.7-3.7,8.9-3.4c0.2,0,0.4,0.1,0.6,0.2
              c0.3,0.3,0.3,0.7,0.3,1.1c0.1,1.9,2.1,3.1,3.5,4.5c1.4,1.4,2.3,3.3,2.5,5.3c0.1,0.6,0.1,1.3,0.6,1.6c0.4,0.2,0.9,0,1.3,0
              c1.4-0.3,2.9,0.3,4.2-0.1c1.1-0.3,1.9-1.1,2.8-1.8c0.9-0.6,2.2-1.1,3.1-0.5c0.3,0.2,0,0.4,0.2,0.6c0.9,1.4,1.1,3.2,1.1,4.8
              c0,1.7-0.2,3.4,0,5c-0.1-1.7,0.8-3.3,1.1-4.9c0.2-0.8,0.2-1.7,0.6-2.5c0.7-1.3,2.3-1.6,3.8-1.9C444.1,171,445.5,170.5,446.8,170.2z
              " />
                                <path class="st0 st-26 state_26"
                                    d="M297.7,86c-2.8,1.3-5.3,3.5-6.7,6.2c-0.4,0.8-0.8,1.7-1.5,2.2c-1.7,1.2-4.2,0.1-6.1,1c-1.5,0.8-2,2.6-2.1,4.3
              c-0.3,4.6,1.5,9.1,1.7,13.7c0.2,3.2-0.5,6.4-0.3,9.6c0.1,3.4,1.1,6.7,1.5,10c0.4,3.6,0.2,7.2-0.6,10.7c-0.4,1.9-1,3.8-0.3,5.6
              c0.6,1.4,1.9,2.4,3.2,3.2c4.1,2.7,8.5,4.9,13,6.9c3.2,1.4,6.4,3.1,9.9,3.6c1.7,0.2,3.6,0.2,5,1.2c1.9,1.3,2.5,4,1.7,6.1
              c-0.3,0.9-0.9,1.7-0.1,2.7c0.6,0.7,1.5,1.1,2.4,1.2c6.9,0.5,14.7,2.1,18.4,8.2c0.4,0.7,1.3,0.9,2,0.6c0.8-0.4,0.4-1.2,0.7-1.8
              c0.6-1.3,2.7-0.8,4-0.3c1.8,0.7,3.1-1.8,5.3-2c1.4-0.1,2.7-0.8,3.7-1.8c1.5-1.4,2.4-2.7,4.4-3.9c0.7-0.4,0.4-2.4,0.6-3.2
              c0.7-3.5,0.8-6.7-1.1-5.7c-0.1,0.1-0.3-0.1-0.6-1.2c-0.4-2,0.2-3.1,2.3-3l1.4,0.4c0.4,0,1.9,0.7,2.3,0.5c0.4-0.2-0.7-2.7-0.2-2.6
              c2.9,0.7,2.1-0.1,3.3-1c1.1-0.3,4.5,0.3,5.8-3c0.5-1.2,2.7-4.2,3.9-4.1c2.7,0.2,6.8-0.4,10.6,0.4c-2.9-5-8.2-15.1-11.7-11.6
              c-0.9,0.9-1.7,0.5-2.8,0c-2.8-1.1-4.6-3.8-4.8-6.8c-0.5-6.9-6.6-10.8-12.1-14.1c-1.2-0.7-2.3-1.4-3.7-1.7c-1.1-0.3-2.2-0.3-3.1-0.8
              c-0.9-0.5-1.6-1.4-2.1-2.3c-3.8-5.9-6.3-12.6-7.3-19.6c-0.1-1-0.3-2-0.9-2.8c-1.3-1.8-4.1-1.5-6.3-1.5c-3.1,0-6.3-1-8.8-2.9
              c-2.7-2-4.7-4.8-7.7-6.2c-1.9-0.9-4.2-1.3-6.3-1.7c-2.4-0.5-2.2-0.8-3.1,1c-0.8,1.6-0.1,2.6-1.7,4C301.5,84.6,298.9,86,297.7,86z" />
                            </g>
                        </svg>

                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="section-title dark-title  d-none d-lg-block" style="margin-bottom: 10px;">
                        <h1>
 Trusted by Our Clients
</h1>

                        <h3 class="wow pixFadeUp mb-25 font-500  d-none d-lg-block" data-wow-delay="0.3s">
                            We are present in over 20 Indian states, serving <span
                                style="color: #0b048a; font-size: 48px;">300+</span> clients, with a reach that extends to global associations.
                        </h3>
                    </div>
                    <div class="pixsass-isotope wow fadeIn" data-wow-delay="0.3s">
                        <div class="pixsass-portfolio-items portfolio-one column-3 port-gutters">
                            <div class="grid-sizer"></div>

                            <!--------jammu--------------->
                            <div class="pixsass-portfolio-item width-large grid-item jammu">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">20 Clients</h1>

                                </div>
                            </div>
                            <!--------jammu--------------->

                            <!--------himachal-->
                            <div class="pixsass-portfolio-item width-large grid-item Himachal">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">1 Clients</h1>
                                </div>
                            </div>
                            <!--------himachal--------------->

                            <!--------punjab--------------->
                            <div class="pixsass-portfolio-item width-large grid-item  Punjab">
                                <div class="pixsass-isotope-grid__img">

                                </div>
                            </div>
                            <!--------punjab--------------->

                            <!--------Uttarakhand--------------->
                            <div class="pixsass-portfolio-item width-large grid-item  Uttarakhand">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">1 Clients</h1>
                                </div>
                            </div>
                            <!--------Uttarakhand--------------->

                            <!--------delhi--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Delhi ">
                                <div class="pixsass-isotope-grid__img">

                                </div>
                            </div>
                            <!--------delhi--------------->

                            <!--------Uttar--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Uttar ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">20 Clients</h1>
                                </div>
                            </div>
                            <!-------- Uttar--------------->

                            <!--------Bihar--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Bihar ">
                                <div class="pixsass-isotope-grid__img">
                                </div>
                            </div>
                            <!--------Bihar--------------->

                            <!--------Rajasthan--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Rajasthan ">
                                <div class="pixsass-isotope-grid__img">

                                </div>
                            </div>
                            <!--------Rajasthan--------------->

                            <!--------Madhya--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Madhya ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">2 Clients</h1>
                                </div>
                            </div>
                            <!--------Madhya--------------->

                            <!--------Gujarat--------------->
                            <div class="pixsass-portfolio-item width-sm-large grid-item up  Gujarat ">
                                <div class="pixsass-isotope-grid__img">
                                </div>
                            </div>
                            <!--------Gujarat--------------->

                            <!--------Haryana--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Haryana ">
                                <div class="pixsass-isotope-grid__img">
                                </div>
                            </div>
                            <!--------Haryana--------------->

                            <!--------Tripura--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Tripura ">
                                <div class="pixsass-isotope-grid__img">
                                </div>
                            </div>
                            <!--------Tripura--------------->

                            <!--------Assam--------------->
                            <div class="pixsass-portfolio-item width-sm-large grid-item up  Assam ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">7 Clients</h1>
                                </div>
                            </div>
                            <!--------Assam--------------->

                            <!--------Bengal--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Bengal ">
                                <div class="pixsass-isotope-grid__img">
                                </div>
                            </div>
                            <!--------Bengal--------------->

                            <!--------Jharkhand--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Jharkhand ">
                                <div class="pixsass-isotope-grid__img">
                                </div>
                            </div>
                            <!--------Jharkhand--------------->

                            <!--------Odisha--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Odisha ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">2 Clients</h1>
                                </div>
                            </div>
                            <!--------Odisha--------------->

                            <!--------Chhattisgarh--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Chhattisgarh ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">2 Clients</h1>
                                </div>
                            </div>
                            <!--------Chhattisgarh--------------->

                            <!--------Maharashtra--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Maharashtra ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">8 Clients</h1>
                                </div>
                            </div>
                            <!--------Maharashtra--------------->

                            <!--------Andhra--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Andhra ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">20 Clients</h1>
                                </div>
                            </div>
                            <!--------Andhra--------------->

                            <!--------Karnataka--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Karnataka ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">27 Clients</h1>
                                </div>
                            </div>
                            <!--------Karnataka--------------->

                            <!----Sikkim-->
                            <div class="pixsass-portfolio-item width-large grid-item">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">2 Clients</h1>
                                </div>
                            </div>
                            <!--------Sikkim------------->

                            <!--------Kerala--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Kerala ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">35 Clients</h1>
                                </div>
                            </div>
                            <!--------Kerala--------------->

                            <!--------Tamil nadu--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Tamil ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">152 Clients</h1>
                                </div>
                            </div>
                            <!--------Tamil nadu--------------->

                            <!--------Telangana--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Telangana ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">28 Clients</h1>
                                </div>
                            </div>
                            <!--------Telangana--------------->

                            <!--------Andaman & Nikobar--------------->
                            <div class="pixsass-portfolio-item width-large grid-item Nicobar ">
                                <div class="pixsass-isotope-grid__img">
                                    <h1 style="color:var(--tg-theme-primary);">2 Clients</h1>
                                </div>
                            </div>
                            <!--------Andaman & Nikobar--------------->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/jquery.min_1.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/map.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <script>
        $(function() {
        setTimeout(function() {
            $("ul.pixsass-isotope-filter li a[data-id='23']").trigger("click");
        }, 100);
        setInterval(function() {
            var n = $('ul.pixsass-isotope-filter li.current').index() + 1;
            var len = $('ul.pixsass-isotope-filter li').length;
            if (n >= len) {
                n = 0;
            }
            tswap(n)
;
        }, 2000);
    });

    function tswap(n)
 {
        if ($("ul.pixsass-isotope-filter li").eq(n).children("a").eq("0").attr("data-filter") != undefined) {
            $("ul.pixsass-isotope-filter li").removeClass("current");
            $("ul.pixsass-isotope-filter li").eq(n).addClass("current").children("a").trigger("click");
        } else {
            n++;
            var len = $('ul.pixsass-isotope-filter li').length;
            if (n >= len) {
                n = 0;
            }
            tswap(n)
;
        }
    }
    $(document).ready(function() {
        $('ul.pixsass-isotope-filter li a').on('click', function() {
            $("ul.pixsass-isotope-filter li a").children("div.place_name").addClass("hide");
            $(this).children("div.place_name").removeClass('hide');
            var statecode = $(this).attr("data-id");
            $("path.st0").css({
                "fill": "#E8E8E8"
            });
            $("path.state_" + statecode).css({
                "fill": "#fcb415"
            });
        });
    })

    $(document).on('click', '.cs-options ul li ', function(e) {
        var vdata = ($(this).attr('data-value'));
        $("div.itemrow").addClass("d-none").removeClass('d-block');
        $("div#" + vdata).removeClass("d-none").addClass("d-block");

    });

    $(function() {
        $(".cs-options ul li").eq(1).trigger("click");
        $(".cs-select").removeClass("cs-active");
    });
    </script>
@endsection

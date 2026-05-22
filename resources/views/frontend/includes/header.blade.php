<header>
    <div class="tg-header__top">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tg-header__top-info list-wrap">
                        <li><img src="{{ asset('assets/img/icons/map_marker.svg') }}" alt="Address"> <span> Bosco
                                Soft Technologies Pvt. Ltd</span></li>
                        <li><img src="{{ asset('assets/img/icons/envelope.svg') }}" alt="Email"> <a
                                href="mailto:binfo@boscosofttech.com">binfo@boscosofttech.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tg-header__top-right">
                        <div class="tg-header__phone"> <img src="{{ asset('assets/img/icons/phone.svg') }}"
                                alt="Phone">Call us: <a href="https://wa.me/9626800800">+91 9626 800 800</a> </div>
                        <ul class="tg-header__top-social list-wrap">
                            <li>Follow Us On :</li>
                            <li><a href="https://www.facebook.com/smartschoolplus.erp/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com/@boscosofttechnologies2022" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/smartschoolplus_/" target="_blank"><i
                                        class="fab fa-instagram" target="_blank"></i></a></li>
                            <li><a href="https://whatsapp.com/channel/0029VaWk0pwJ3jv7l2FmI01t" target="_blank"><i
                                        class="fab fa-whatsapp" target="_blank"></i></a></li>
                            <li><a href="https://x.com/Boscosoft1" target="_blank"><i class="fab fa-twiter">X</i></a></li>
                            <li><a href="https://www.linkedin.com/showcase/smartschool-school-management-software/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-fixed-height"></div>
    <div id="sticky-header" class="tg-header__area tg-header__style-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo"> <a href="{{ url('/') }}"><img class="h-logo"
                                        src="{{ asset('assets/img/logo/logo-smsp-01.svg') }}" alt="smartschoolplus logo" width="190" height="53"></a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                               <ul class="navigation">
                                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                                        <a href="{{ route('frontend.pages.about-us') }}">About Us</a>
                                    </li>
                                    <li class="{{ request()->is('customers') ? 'active' : '' }}">
                                        <a href="{{ route('frontend.pages.customers') }}">Customers</a>
                                    </li>
                                    <li class="{{ request()->is('success-stories') ? 'active' : '' }}">
                                        <a href="{{ route('frontend.pages.success-stories') }}">Testimonials</a>
                                    </li>
                                    <li class="{{ request()->is('blog') ? 'active' : '' }}">
                                        <a href="{{ route('frontend.pages.blog') }}">Blogs</a>
                                    </li>
                                    <li class="{{ request()->is('contact-us') ? 'active' : '' }}">
                                        <a href="{{ route('frontend.pages.contact-us') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                             <div class="logo"> <a href="{{ url('/') }}"><img class="h-logo bs-logo"
                                        src="{{ asset('assets/img/logo/boscosoft-logo.avif') }}" alt="Smartschoolplus Logo" width="190" height="53"></a>
                            </div>
                            <div class="tgmenu__action tgmenu__action-two">
                				  <a id="openPopup" href="#">   <dotlottie-player src="https://lottie.host/9397f0d2-d951-45a3-bc6b-eebfaa60c4e7/w36z6HyHPU.json" background="transparent" speed="1" style="width: 104px; height: 82px;" loop autoplay></dotlottie-player></a>
                              </div>
                                         
                            <!--<div class="tgmenu__action tgmenu__action-two">-->
                            <!--    <ul class="list-wrap">-->
                            <!--        <li class="header-btn login-btn"> <a href="{{ route('frontend.pages.contact-us') }}#contact-form-wrap" class="btn">Get-->
                            <!--                Started</a> </li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                            <div class="mobile-login-btn"> <a href=""><img
                                        src="{{ asset('assets/img/icons/user.svg') }}" alt="school management services"
                                        class="injectable"></a> </div>
                            <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="tgmobile__menu">
                        <nav class="tgmobile__menu-box">
                            <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                            <div class="nav-logo"> <a href=""><img
                                        src="{{ asset('assets/img/logo/logo-smsp-01.svg') }}" alt="SmartSchool Plus Logo"></a>
                            </div>
                            <div class="tgmobile__search">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="tgmobile__menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="list-wrap">
                                    <li><a href="https://www.facebook.com/smartschoolplus.erp/"><i
                                                class="fab fa-facebook-f" Taget="_blank"></i></a></li>
                                                
                                <!--     <li>-->
                                <!--    <a href="https://x.com/Boscosoft1" target="_blank">-->
                                <!--        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"-->
                                <!--            fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">-->
                                <!--            <path-->
                                <!--                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />-->
                                <!--        </svg>-->
                                <!--    </a>-->
                                <!--</li>           -->
                                                
                                    <li><a href="https://x.com/Boscosoft1" Taget="_blank"><i
                                                class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="https://whatsapp.com/channel/0029VaWk0pwJ3jv7l2FmI01t" Taget="_blank"><i
                                                class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="https://www.instagram.com/smartschoolplus_/" Taget="_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a
                                            href="https://www.linkedin.com/showcase/smartschool-school-management-software/" Taget="_blank"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.youtube.com/@boscosofttechnologies2022" Taget="_blank"><i
                                                class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="tgmobile__menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>

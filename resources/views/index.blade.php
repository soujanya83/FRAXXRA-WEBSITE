@include('particial.index_header')

<body class="gradient-body">




    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here
	******************************** -->

    <div class="cursor"></div>
    <div class="cursor2"></div>


    <!--==============================
    Preloader
  ==============================-->
    <!-- <div id="preloader" class="preloader ">
    <button class="th-btn th-radius preloaderCls">Cancel Preloader </button>
    <div id="loader" class="th-preloader">
        <div class="animation-preloader">
            <div class="txt-loading">
                <a class="icon-masking" href="index"><span data-mask-src="assets/img/logo-small-updated"  width="250px" class="mask-icon"></span><img src="assets/img/logo-small_updated.png"  width="250px"  alt="BYC"></a>
                 <span preloader-text="W" class="characters">W</span>

                <span preloader-text="E" class="characters">E</span>

                <span preloader-text="B" class="characters">B</span>

                <span preloader-text="T" class="characters">T</span>

                <span preloader-text="E" class="characters">E</span>

                <span preloader-text="C" class="characters">C</span>

                <span preloader-text="K" class="characters">K</span>
            </div>
        </div>
    </div>
</div>  -->

    <!--==============================
    Sidemenu
 ============================== -->



    <div class="sidemenu-wrapper background-image">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-area mb-35 text-xl-start text-center">
                            <span class="sub-title">
                                <div class="icon-masking me-2">
                                    <span class="mask-icon bg-mask"
                                        style="mask-image: url(_assets/img/theme-img/title_shape_2.html);"></span>
                                    <img src="assets/img/theme-img/title_shape_2.svg" alt="shape_2">
                                </div>contact with us!
                            </span>
                            <p class="sec_para">Have Any Questions?</p>
                            <p class="sec-text"> Reach out to us, and we’ll address all your concerns, helping you make
                                confident decisions for your business. </p>
                        </div>
                        <form action="https://www.buildyourcode.in/mail.php" method="POST"
                            class="contact-form ajax-contact">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control dcd3d3" name="name" id="name"
                                        placeholder="Your Name">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control dcd3d3" name="email" id="email"
                                        placeholder="Email Address">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <select name="subject" id="subject" class="form-select dcd3d3">
                                        <option value="" disabled="" selected="" hidden="">Select Subject</option>
                                        <option value="Ux/UI Designing">UI/UX Designing</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Mobile App Development">Mobile App Development</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="Branding">Branding</option>
                                        <option value="Secuirty Services">Secuirty Services</option>
                                        <option value="Cloud Services">Cloud Services</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <i class="fal fa-chevron-down"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="tel" class="form-control dcd3d3" name="number" id="number"
                                        placeholder="Phone Number">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message dcd3d3" cols="30" rows="3"
                                        class="form-control custom-textarea" placeholder="Your Message"></textarea>
                                    <i class="fal fa-comment"></i>
                                </div>
                                <div class="form-btn text-xl-start text-center col-12">
                                    <button class="th-btn">Send Message<i
                                            class="fa-regular fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>






    @include('particial.nav')














    <!--==============================
Hero Area
==============================-->

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="hero-style1 w-100 ">
                    <span class="hero-subtitle">Solution For Your Business</span>
                    <h1 class="hero-title">Providing Technology</h1>
                    <p class=" hero_par">For Smart <span class="text-theme fw-medium">IT Solution</span></p>
                    <p class="hero-text">"BYC IT Solutions is dedicated to delivering cutting-edge technology for smart
                        and efficient IT services. Our solutions are tailored to meet unique business needs, ensuring
                        innovation and reliability. Partner with us to transform your IT systems and achieve
                        unparalleled success."</p>
                    <div class="btn-group">
                        <a href="about" class="th-btn">ABOUT US<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="call-btn">
                            <a href="https://www.youtube.com/watch?v=wPdXbdYc-EE" class="play-btn popup-video">
                                <i class="fas fa-play"></i>
                            </a>
                            <div class="media-body">
                                <a href="https://www.youtube.com/watch?v=wPdXbdYc-EE"
                                    class="btn-title popup-video">Watch Our Story</a>
                                <span class="btn-text">Call Now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="testi-block-area01 p-1 w-100 ">
                    <div class="swiper th-slider has-shadow testi-block-slide"
                        data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <img src="assets/img/sliders/1.png" alt="app1" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <img src="assets/img/sliders/2.png" alt="app2" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <img src="assets/img/sliders/3.png" alt="app3" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <img src="assets/img/sliders/4.png" alt="app4" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <img src="assets/img/sliders/5.png" alt="app5" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <img src="assets/img/sliders/6.png" alt="app6" />
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                    <div class="testi-block-quote">
                        <img src="assets/img/icon/quote_3d.png" alt="quote">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="hero-img tilt-active">
            <div class="container">

            </div>
        </div>
        <div class="container">

        </div>
        <div class="hero-shape1">
            <img src="assets/img/hero/hero_shape_1_1.svg" alt="shape1">
        </div>
        <div class="hero-shape2">
            <img src="assets/img/hero/hero_shape_1_2.svg" alt="shape2">
        </div>
        <div class="hero-shape3">
            <img src="assets/img/hero/hero_shape_1_3.svg" alt="shape3">
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
Feature Area
==============================-->
    <section class="about-sec-v4 space-bottom" id="about-sec">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="shape-icon">
                            <img src="assets/img/icon/feature_card_1.png" alt="icon1">
                        </div>
                        <h3 class="box-title">Data Management Service</h3>
                        <p class="feature-card_text">Data management services involve organizing, storing, and securing
                            data for efficient access and analysis.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="shape-icon">
                            <img src="assets/img/icon/feature_card_2.png" alt="icon2">
                        </div>
                        <h3 class="box-title">IT Strategy & Consultancy</h3>
                        <p class="feature-card_text">IT strategy and consultancy help businesses optimize technology to
                            drive growth and innovation.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="shape-icon">
                            <img src="assets/img/icon/feature_card_3.png" alt="icon3">
                        </div>
                        <h3 class="box-title">World Class Support</h3>
                        <p class="feature-card_text">World-class support delivers exceptional, reliable assistance to
                            meet customer needs efficiently and effectively.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container space-top">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="testi-block-area01 p-1 w-100 ">
                        <div class="swiper th-slider has-shadow testi-block-slide"
                            data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testi-block">
                                        <img src="assets/img/sliders/7.png" alt="app1" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-block">
                                        <img src="assets/img/sliders/8.png" alt="app2" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-block">
                                        <img src="assets/img/sliders/9.png" alt="app3" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-block">
                                        <img src="assets/img/sliders/10.png" alt="app4" />
                                    </div>
                                </div>




                                <div class="slider-pagination"></div>
                            </div>
                            <div class="testi-block-quote">
                                <img src="assets/img/icon/quote_3d.png" alt="quote">
                            </div>
                        </div>
                    </div>
                </div>






                <div class="col-lg-7 text-lg-start text-center">
                    <div class="ps-xxl-5">
                        <div class="title-area mb-35">
                            <span class="sub-title">About Company</span>
                            <p class="sec_para">We've Been Thriving for 10 Years.</p>
                        </div>
                        <p class="mt-n2 mb-25">For over a decade, <span class="red_bold">BYC IT Solutions </span> has
                            been a trusted partner in delivering innovative, reliable, and cutting-edge IT services. Our
                            journey began with a vision to revolutionize the tech industry by providing exceptional
                            solutions that drive growth, efficiency, and success for our clients.</p>
                        <div class="checklist style4 mb-40 list-center">
                            <ul>
                                <li><img class="icon_bg" src="assets/img/icon/check_1.png" alt="icon"> Dramatically
                                    re-engineer value added IT systems via mission</li>
                                <li><img src="assets/img/icon/check_1.png" alt="icon-img"> Website & Mobile application
                                    design & Development</li>
                                <li><img src="assets/img/icon/check_1.png" alt="icon-img1"> Professional User Experince
                                    & Interface researching</li>
                            </ul>
                        </div>
                        <a href="about" class="th-btn">ABOUT MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Service Area
==============================-->
    <section class="" id="service-sec">
        <div class="round-container gr-bg3 space">
            <div class="container">
                <div class="row gy-40 justify-content-between space-bottom">
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="icon">
                                <img src="assets/img/icon/counter_2_1.png" alt="Icon_counter2">
                            </div>
                            <div class="media-body">
                                <p class="count_num text-title"><span class="counter-number">150</span>+</p>
                                <p class="counter-card_text text-body">Finished Project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="icon">
                                <img src="assets/img/icon/counter_2_2.png" alt="Icon-counter2.2">
                            </div>
                            <div class="media-body">
                                <p class="count_num text-title"><span class="counter-number">150</span>+</p>
                                <p class="counter-card_text text-body">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="icon">
                                <img src="assets/img/icon/counter_2_3.png" alt="Icon2-3">
                            </div>
                            <div class="media-body">
                                <p class="count_num text-title"><span class="counter-number">25</span>+</p>
                                <p class="counter-card_text text-body">Skilled Team</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="icon">
                                <img src="assets/img/icon/counter_2_4.png" alt="Icon2_4">
                            </div>
                            <div class="media-body">
                                <p class="count_num text-title"><span class="counter-number">12</span>+</p>
                                <p class="counter-card_text text-body">Honorable Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-area text-center">
                    <span class="sub-title">OUR SERVICES</span>
                    <p class="sec_para">We Provide Exclusive Services</p>
                </div>

                <div class="slider-area">
                    <div class="swiper th-slider has-shadow"
                        data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_1.png" alt="Icon_3d">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Webdevelopment">Web Development</a></h3>
                                        <p class="service-3d_text">Web development involves building dynamic,
                                            responsive, and functional websites for users.</p>
                                        <a href="Webdevelopment" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_2.png" alt="Icon_s3d">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Uxuidesigning">UI/UX Design</a></h3>
                                        <p class="service-3d_text">UI/UX design focuses on creating intuitive,
                                            user-friendly interfaces and enhancing overall user experience.</p>
                                        <a href="Uxuidesigning" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_3.png" alt="Icon_s3d3">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Digitalmarketing">Digital Marketing</a></h3>
                                        <p class="service-3d_text">Mobile development involves creating responsive,
                                            user-friendly applications for smartphones and tablets.</p>
                                        <a href="Digitalmarketing" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_4.png" alt="Icon_s3d4">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Mobiledevelopment">Mobile App
                                                development</a></h3>
                                        <p class="service-3d_text">Mobile development focuses on creating applications
                                            for smartphones and tablets with optimal performance.</p>
                                        <a href="Mobiledevelopment" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_1.png" alt="Icon_s3d1">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Security_services">Security Services</a>
                                        </h3>
                                        <p class="service-3d_text">Security services provide comprehensive protection
                                            for assets, data, and systems against threats.</p>
                                        <a href="Security_services" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_2.png" alt="Icon_s3d2">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Branding">Branding</a></h3>
                                        <p class="service-3d_text">Branding defines a company's identity, values, and
                                            unique market presence and recognition.</p>
                                        <a href="Branding" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_3.png" alt="Icon_s3de">
                                    </div>
                                    <!--- <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Security_services">Security Services</a></h3>
                                        <p class="service-3d_text">Security services provide comprehensive protection for assets, data, and systems against threats.</p>
                                        <a href="Security_services" class="th-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_4.png" alt="Icon">
                                    </div> -->
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Cloud_services">Cloud Services</a></h3>
                                        <p class="service-3d_text">Cloud services offer scalable, on-demand access to
                                            computing resources and data storage online.</p>
                                        <a href="Cloud_services" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Feature Area
==============================-->
    <div class="">
        <div class="container space">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 mb-30 mb-lg-0">
                    <div class="img-box7">
                        <div class="img1">
                            <img src="assets/img/normal/why_3_1.png" alt="Why">
                        </div>
                        <div class="shape1">
                            <img src="assets/img/normal/why_3_2.png" alt="About1">
                        </div>
                        <div class="shape2">
                            <img src="assets/img/normal/why_3_3.png" alt="About">
                        </div>
                        <div class="color-animate"></div>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-start text-center">
                    <div class="title-area mb-35">
                        <span class="sub-title">WHY CHOOSE US</span>
                        <p class="sec_para">You Get IT & Business Solution</p>
                    </div>
                    <p class="mt-n2 mb-30">Dynamically brand plug-and-play action items for extensive leadership.
                        Dramatically seize prospective content through seamless collaboration. Quickly leverage existing
                        24/7 portals via scalable alignments.</p>
                    <div class="two-column mb-40 list-center">
                        <div class="checklist style2">
                            <ul>
                                <li><img src="assets/img/icon/check_1.png" alt="icon_ch1"> Big Data Analysis</li>
                                <li><img src="assets/img/icon/check_1.png" alt="icon_ch2"> 24/7 Online Support</li>
                            </ul>
                        </div>
                        <div class="checklist style2">
                            <ul>
                                <li><img src="assets/img/icon/check_1.png" alt="icon_ch1.1"> High Quality Security</li>
                                <li><img src="assets/img/icon/check_1.png" alt="icon_ch1.1"> Virtual Support Team</li>
                            </ul>
                        </div>
                    </div>
                    <a href="about" class="th-btn">LEARN MORE<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0" data-right="0">
            <div class="particle-3" id="particle-4"></div>
        </div>
    </div>
    <!--==============================
Project Area
==============================-->
    <section class="" id="project-sec">
        <div class="round-container gr-bg4 space">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-5 mb-n2 mb-lg-0">
                        <div class="title-area text-center text-lg-start">
                            <span class="sub-title">CASE STUDY</span>
                            <p class="sec_para">Our Portfolio / Works</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="sec-btn">
                            <a href="project" class="th-btn">VIEW ALL PORJECTS<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div> <!-- / Title row -->

                <div class="slider-area">
                    <div class="swiper th-slider has-shadow" id="projectSlider3"
                        data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_3_1.jpg" alt="project image">
                                    </div>
                                    <div class="project-content" data-bg-src="assets/img/bg/project_card_bg.png">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="project-details">IT consultancy</a></h3>
                                            <p class="project-subtitle">Technology</p>
                                        </div>
                                        <a href="assets/img/project/project_3_1.jpg" class="icon-btn popup-image"><i
                                                class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_3_2.jpg" alt="project image">
                                    </div>
                                    <div class="project-content" data-bg-src="assets/img/bg/project_card_bg.png">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="project-details">Web Development</a>
                                            </h3>
                                            <p class="project-subtitle">Technology</p>
                                        </div>
                                        <a href="assets/img/project/project_3_2.jpg" class="icon-btn popup-image"><i
                                                class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_3_3.jpg" alt="project image1">
                                    </div>
                                    <div class="project-content" data-bg-src="assets/img/bg/project_card_bg.png">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="project-details">Website Design</a></h3>
                                            <p class="project-subtitle">Technology</p>
                                        </div>
                                        <a href="assets/img/project/project_3_3.jpg" class="icon-btn popup-image"><i
                                                class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_3_4.jpg" alt="project image3">
                                    </div>
                                    <div class="project-content" data-bg-src="assets/img/bg/project_card_bg.png">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="project-details">SEO Optimization</a>
                                            </h3>
                                            <p class="project-subtitle">Marketing</p>
                                        </div>
                                        <a href="assets/img/project/project_3_4.jpg" class="icon-btn popup-image"><i
                                                class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_3_1.jpg" alt="project image3">
                                    </div>
                                    <div class="project-content" data-bg-src="assets/img/bg/project_card_bg.png">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="project-details">Custom App
                                                    Development</a></h3>
                                            <p class="project-subtitle">Technology</p>
                                        </div>
                                        <a href="assets/img/project/project_3_1.jpg" class="icon-btn popup-image"><i
                                                class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_3_2.jpg" alt="project image">
                                    </div>
                                    <div class="project-content" data-bg-src="assets/img/bg/project_card_bg.png">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="project-details">Cloud Based
                                                    Services</a></h3>
                                            <p class="project-subtitle">Technology</p>
                                        </div>
                                        <a href="assets/img/project/project_3_2.jpg" class="icon-btn popup-image"><i
                                                class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="assets/img/project/project_3_3.jpg" alt="project image3_3">
                                    </div>
                                    <div class="project-content" data-bg-src="assets/img/bg/project_card_bg.png">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="project-details">Security Services</a>
                                            </h3>
                                            <p class="project-subtitle">Technology</p>
                                        </div>
                                        <a href="assets/img/project/project_3_3.jpg" class="icon-btn popup-image"><i
                                                class="far fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <button data-slider-prev="#projectSlider3" class="slider-arrow style3 slider-prev"><i
                            class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#projectSlider3" class="slider-arrow style3 slider-next"><i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="shape-mockup" data-top="0%" data-right="0%"><img src="assets/img/shape/tech_shape_6.png"
                    alt="shape"></div>
            <div class="shape-mockup" data-bottom="0%" data-left="0%"><img src="assets/img/shape/tech_shape_7.png"
                    alt="shape1"></div>
        </div>

    </section>
    <!--==============================
Process Area
==============================-->
    <section class="space" id="process-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">WORK PROCESS</span>
                <p class="sec_para">How to work <span class="text-theme">it!</span></p>
            </div>
            <div class="process-card-area">
                <div class="process-line position-top">
                    <img src="assets/img/bg/process_line_2.svg" alt="line">
                </div>
                <div class="row gy-40 justify-content-between">
                    <div class="col-sm-6 col-xl-auto process-card-wrap">
                        <div class="process-card">
                            <div class="pulse"></div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_box_1.png" alt="iconbox">
                            </div>
                            <p class="box-title">Select a project</p>
                            <p class="process-card_text">Choose the Perfect IT Solution for Your Project Needs</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto process-card-wrap">
                        <div class="process-card">
                            <div class="pulse"></div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_box_2.png" alt="iconbox1">
                            </div>
                            <p class="box-title">Project analysis</p>
                            <p class="process-card_text">Comprehensive project analysis to design tailored IT solutions
                                that align with business goals and drive efficiency.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-auto process-card-wrap">
                        <div class="process-card">
                            <div class="pulse"></div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_box_1.png" alt="iconbox2">
                            </div>
                            <p class="box-title">Project Requirement</p>
                            <p class="process-card_text">We are ready to deliver efficient, scalable, and high-quality
                                code tailored to your project requirements--describe your need in one line!</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto process-card-wrap">
                        <div class="process-card">
                            <div class="pulse"></div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_box_3.png" alt="iconbox3">
                            </div>
                            <p class="box-title">Plan Execute</p>
                            <p class="process-card_text">Plan and Execute: Crafting Tailored IT Solutions for Seamless
                                Success</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto process-card-wrap">
                        <div class="process-card">
                            <div class="pulse"></div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_box_4.png" alt="iconbox4">
                            </div>
                            <p class="box-title">Deliver result</p>
                            <p class="process-card_text">Continua scale empowered metrics with cost effective
                                innovation.</p>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </section>
    <!--==============================
Testimonial Area
==============================-->
    <section class="">
        <div class="round-container " data-bg-src="assets/img/bg/testi_bg_4.jpg">
            <div class="container">
                <div class="testi-block-area">
                    <div class="swiper th-slider has-shadow testi-block-slide"
                        data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <p class="testi-block_text">"Our collaboration with BYC IT Solutions has been
                                        fantastic. They bring exceptional technical expertise and a customer-first
                                        attitude, ensuring all our IT needs are met. Truly an asset for any business!"
                                    </p>
                                    <div class="testi-block_profile">
                                        <div class="testi-block_avater">
                                            <img src="assets/img/testimonial/menu1.png" alt="Avater" width="50px">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title">Mr.Suman Shetty</h3>
                                            <p class="testi-block_desig">Entreprenuer, Hyderabad</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <p class="testi-block_text">"BYC IT Solutions is a trustworthy partner in IT. They
                                        deliver top-notch solutions and have a team that genuinely cares about client
                                        success. Their personalized approach sets them apart!"

                                    </p>
                                    <div class="testi-block_profile">
                                        <div class="testi-block_avater">
                                            <img src="assets/img/testimonial/women1.jpg" alt="Avaterw" width="80px">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title">Dhanalaxmi</h3>
                                            <p class="testi-block_desig">Eventplanner, Vijayawada</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <p class="testi-block_text">"Working with BYC IT Solutions has been a game-changer
                                        for our business. Their expertise in IT services helped us streamline operations
                                        and improve productivity. The team’s support and responsiveness are
                                        outstanding!"

                                    </p>
                                    <div class="testi-block_profile">
                                        <div class="testi-block_avater">
                                            <img src="assets/img/testimonial/menu3.png" alt="Avaterm" width="80px">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title">Adithya</h3>
                                            <p class="testi-block_desig">Lecturer,Karimnagar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-block">
                                    <p class="testi-block_text">"BYC IT Solutions exceeded our expectations with their
                                        innovative and efficient IT services. Their dedicated team ensured a seamless
                                        experience, resolving issues promptly and offering tailored solutions. We highly
                                        recommend them for their professionalism and reliability!"</p>
                                    <div class="testi-block_profile">
                                        <div class="testi-block_avater">
                                            <img src="assets/img/testimonial/testi_4.png" alt="Avatert" width="80px">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title">Janaki</h3>
                                            <p class="testi-block_desig">Goldsmith, Ahmedabad</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                    <div class="testi-block-quote">
                        <img src="assets/img/icon/quote_3d.png" alt="quote">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Faq Area
==============================-->
    <div class="overflow-hidden space-top" id="faq-sec">
        <div class="container space-bottom">
            <div class="slider-area text-center">
                <div class="swiper th-slider"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/01.png" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/02.png" alt="Brand Logo1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/03.png" alt="Brand Logo3">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/04.png" alt="Brand Logo4">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/05.png" alt="Brand Logo5">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/06.png" alt="Brand Logo6">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/07.png" alt="Brand Logo7">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/08.png" alt="Brand Logo8">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/09.png" alt="Brand Logo9">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/10.png" alt="Brand Logo10">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/01.png" alt="Brand Logo1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="assets/img/icons/02.png" alt="Brand Logo2">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-9">
                    <div class="title-area text-center text-xl-start">
                        <span class="sub-title">FAQ'S</span>
                        <h2 class="sec-title">Know More About Our It Solution</h2>
                    </div>
                    <div class="accordion-area accordion" id="faqAccordion">


                        <div class="accordion-card style3 ">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">Where
                                    can I get analytics help?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse " aria-labelledby="collapse-item-1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">At BYC IT Solutions, we provide expert analytics support to help
                                        you make data-driven decisions. Our team specializes in transforming raw data
                                        into actionable insights, enabling you to optimize operations, improve customer
                                        experiences, and achieve your business goals effectively. Let us turn your data
                                        into a competitive advantage.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style3 active">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">How
                                    long should a business plan be?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">A business plan for BYC IT Solutions should be concise yet
                                        comprehensive, typically ranging from 15 to 25 pages. It should include key
                                        sections like an executive summary, market analysis, strategy, operations, and
                                        financial projections, ensuring it effectively communicates your vision and
                                        goals to stakeholders.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style3 ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Do I
                                    need a business plan?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Yes, a business plan is essential for BYC IT Solutions. It
                                        serves as a roadmap, outlining your goals, strategies, and financial projections
                                        while helping secure funding and guiding decision-making. A well-crafted plan
                                        ensures your business stays focused and prepared for growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mt-35 mt-xl-0">
                    <div class="img-box8">
                        <div class="img1">
                            <img src="assets/img/normal/faq_2_1.png" alt="Faq">
                        </div>
                        <div class="shape1">
                            <img src="assets/img/normal/faq_2_2.png" alt="Aboutfaq">
                        </div>
                        <div class="shape2">
                            <img src="assets/img/normal/faq_2_3.png" alt="Aboutfaq2">
                        </div>
                        <div class="color-animate"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Blog Area
==============================-->

    @include('particial.footer')

</body>


<!-- Mirrored from www.buildyourcode.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:03 GMT -->

</html>

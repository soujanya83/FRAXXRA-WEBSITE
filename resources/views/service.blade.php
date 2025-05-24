@include('particial.header')

<body>




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
                <a class="icon-masking" href="index.html"><span data-mask-src="assets/img/logo-small-updated"  width="250px" class="mask-icon"></span><img src="assets/img/logo-small_updated.png"  width="250px"  alt="BYC"></a>
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
                            <h2 class="sec-title">Have Any Questions?</h2>
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

    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Service Area
==============================-->
    <section class="space" id="service-sec">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">01</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_1.svg" alt="service_card_img">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="Webdevelopment.html">Web Development</a></h3>
                        <p class="service-card_text">Web development is the process of creating and maintaining
                            websites, combining front-end and back-end technologies for functionality and user
                            experience.</p>
                        <a href="service-details.html" class="th-btn">Read More<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="service_bg_img">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">02</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_2.svg" alt="service_card_img2">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="Uxuidesigning.html">UI/UX Design</a></h3>
                        <p class="service-card_text">UI/UX design focuses on enhancing usability, aesthetics, and user
                            satisfaction in digital products.</p>
                        <a href="service-details.html" class="th-btn">Read More<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="service_bg_img2">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">03</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_3.svg" alt="service_card_img3">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="Digitalmarketing.html">Digital Marketing</a></h3>
                        <p class="service-card_text">Digital marketing uses online platforms and tools to promote
                            products, services, and brands.</p>
                        <a href="service-details.html" class="th-btn">Read More<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="service_bg-img3">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">04</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_4.svg" alt="service_card_img4">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="Mobiledevelopment.html">Mobile Development</a></h3>
                        <p class="service-card_text">Mobile development involves creating applications for smartphones
                            and tablets, optimizing for user experience.
                        </p>
                        <a href="service-details.html" class="th-btn">Read More<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="service_bg-img4">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">05</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_5.svg" alt="service_card_img5">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="Security_services.html">Security Services</a></h3>
                        <p class="service-card_text">Security services involve protecting organizations' assets, data,
                            and systems from threats and breaches.</p>
                        <a href="service-details.html" class="th-btn">Read More<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="service_bg_img5">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">06</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_6.svg" alt="service_card_img6">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="Branding.html">Branding</a></h3>
                        <p class="service-card_text">Branding is the process of creating a unique identity and image for
                            a business.</p>
                        <a href="service-details.html" class="th-btn">Read More<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="service_bg_img6">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">07</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_7.svg" alt="service_card_img7">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="project.html">Project</a></h3>
                        <p class="service-card_text">App development is the process of creating software applications
                            for mobile devices or desktops.</p>
                        <a href="service-details.html" class="th-btn">Read More<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="service_bg_img7">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">08</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_8.svg" alt="service_card_img8">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="Cloud_services.html">Cloud Services</a></h3>
                        <p class="service-card_text">Cloud services offer on-demand access to computing resources like
                            storage and software via the internet.

                        </p>
                        <a href="service-details.html" class="th-btn">Read More<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="service_bg_img8">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">09</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_9.svg" alt="service_card_img9">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Service-details</a></h3>
                        <p class="service-card_text">Backup and recovery involve storing data copies securely and
                            restoring them during loss or failure.</p>
                        <a href="service-details.html" class="th-btn">Read More<i
                                class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="service_bg_img9">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==============================
Cta Area
==============================-->
    <section class="position-relative space">
        <div class="th-bg-img" data-bg-src="assets/img/bg/cta_bg_2.jpg">
            <img src="assets/img/bg/bg_overlay_1.png" alt="overlay_1">
        </div>
        <div class="container z-index-common">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                    <div class="title-area mb-35">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape_2">
                            </div>
                            CONTACT US
                        </span>
                        <h2 class="sec-title text-white">Need Any Kind Of IT Solution For <span
                                class="text-theme fw-normal">Your Business?</span></h2>
                    </div>
                    <a href="contact.html" class="th-btn style3">Get In Touch</a>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Process Area
==============================-->
    <section class="bg-smoke" id="process-sec" data-bg-src="assets/img/bg/process_bg_1.png">
        <div class="container space">
            <div class="title-area text-center">
                <span class="sub-title">
                    <div class="icon-masking me-2">
                        <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                        <img src="assets/img/theme-img/title_shape_2.svg" alt="shape_2_img">
                    </div>
                    WORK PROCESS
                </span>
                <h2 class="sec-title">How to work <span class="text-theme">it!</span></h2>
            </div>
            <div class="process-card-area">
                <div class="process-line">
                    <img src="assets/img/bg/process_line.svg" alt="process_line">
                </div>
                <div class="row gy-40">
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">01</div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_card_1.svg" alt="process_card1">
                            </div>
                            <h2 class="box-title">Select a project</h2>
                            <p class="process-card_text">Choose project based on interests.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">02</div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_card_2.svg" alt="process_card2">
                            </div>
                            <h2 class="box-title">Project analysis</h2>
                            <p class="process-card_text">Project analysis evaluates goals, resources, risks, and
                                timelines.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">03</div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_card_3.svg" alt="process_card3">
                            </div>
                            <h2 class="box-title">Plan Execute</h2>
                            <p class="process-card_text">Plan, execute, monitor, and adjust for successful outcomes.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 process-card-wrap">
                        <div class="process-card">
                            <div class="process-card_number">04</div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_card_4.svg" alt="process_card4">
                            </div>
                            <h2 class="box-title">Deliver result</h2>
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
    <section class="bg-auto space" data-bg-src="assets/img/bg/testi_bg_2.png">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">
                    <div class="icon-masking me-2">
                        <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                        <img src="assets/img/theme-img/title_shape_2.svg" alt="shape-2">
                    </div>
                    CUSTOMER FEEDBACK
                </span>
                <h2 class="sec-title">What Happy Clients Says <br> <span class="text-theme fw-normal"> About Us?</span>
                </h2>
            </div>

            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlider2"
                    data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="assets/img/testimonial/testi_2_1.jpg" alt="Avater_img1">
                                    <div class="testi-box_quote">
                                        <img src="assets/img/icon/quote_left_2.svg" alt="quote_img">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Reliable, professional service, exceeding expectations
                                        with excellent results.

                                    </p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Dasharath</h3>
                                    <p class="testi-box_desig">Doctor, Hyderabad</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="assets/img/testimonial/testi_2_2.jpg" alt="Avater_img2">
                                    <div class="testi-box_quote">
                                        <img src="assets/img/icon/quote_left_2.svg" alt="quote_img2">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Exceptional service, great communication, and outstanding
                                        results every time.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Jayasudha</h3>
                                    <p class="testi-box_desig">Lecturer, Karimnagar</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="assets/img/testimonial/testi_2_3.jpg" alt="Avater_img3">
                                    <div class="testi-box_quote">
                                        <img src="assets/img/icon/quote_left_2.svg" alt="quote_img3">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Efficient, reliable, and top-quality service that always
                                        exceeds expectations.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Aditya</h3>
                                    <p class="testi-box_desig">IT Employee , Chennai</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="assets/img/testimonial/testi_2_1.jpg" alt="Avater_img4">
                                    <div class="testi-box_quote">
                                        <img src="assets/img/icon/quote_left_2.svg" alt="quote_img4">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Consistent excellence, attentive service, and results that
                                        truly make a difference.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Dayanand</h3>
                                    <p class="testi-box_desig">Event Organiser, Banglore</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="assets/img/testimonial/testi_2_2.jpg" alt="Avater_img5">
                                    <div class="testi-box_quote">
                                        <img src="assets/img/icon/quote_left_2.svg" alt="quote_img5">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text">Professional, reliable, and always delivering exceptional
                                        results with great care.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Jaya Laxmi</h3>
                                    <p class="testi-box_desig">Principal, Karkapatla</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-box">
                                <div class="testi-box_img">
                                    <img src="assets/img/testimonial/testi_2_3.jpg" alt="Avater_img6">
                                    <div class="testi-box_quote">
                                        <img src="assets/img/icon/quote_left_2.svg" alt="quote_img6">
                                    </div>
                                </div>
                                <div class="testi-box_content">
                                    <p class="testi-box_text"> Excellent communication, timely service, and results that
                                        always exceed expectations.</p>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                            class="fa-solid fa-star-sharp"></i>
                                    </div>
                                    <h3 class="box-title">Aditya</h3>
                                    <p class="testi-box_desig">Advocate , Gujarat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#testiSlider2" class="slider-arrow style3 slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlider2" class="slider-arrow style3 slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="shape-mockup moving d-none d-xl-block" data-bottom="0%" data-left="10%"><img
                src="assets/img/shape/line_1.png" alt="line_1"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="20%" data-right="2%"><img
                src="assets/img/shape/line_2.png" alt="line_2"></div>
    </section>
          @include('particial.footer')


</body>


<!-- Mirrored from www.buildyourcode.in/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:22 GMT -->

</html>

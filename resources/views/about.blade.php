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


    <!-- ==============================
     Preloader
  ==============================-->
    <!---- <div id="preloader" class="preloader ">
        <button class="th-btn th-radius preloaderCls">Cancel Preloader </button>
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <a  href="index.html"><span data-mask-src="assets/img/icon/logo-small_updated.png"  width="250px" class="mask-icon"></span><img src="assets/img/logo-small_updated.png"  width="250px" alt="BYC"></a>

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
    </div> --->

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
                                    <button class="btn shadow-none sideMenuToggler appointment-btn">Send Message<i
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
                <h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index-2">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <!--============================== -->




    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="assets/images/web-3.jpg" alt="About1">
                        </div>
                        <div class="shape1">
                            <img src="assets/img/normal/about_shape_1.png" alt="shape_2">
                        </div>
                        <div class="year-counter">
                            <h3 class="year-counter_number"><span class="counter-number">10</span></h3>
                            <p class="year-counter_text">Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-4 ms-xl-3">
                        <div class="title-area mb-35">
                            <span class="sub-title">
                                <div class="icon-masking me-2">

                                    <img src="assets/img/logo-small_updated.png" style="width:25px;height:25px" alt="shapef">
                                </div>About Us
                            </span>
                            <h2 class="sec-title">About Fraxxra Tech Pvt Ltd</span></h2>
                        </div>
                        <p class="mt-n2 mb-25">Welcome to Fraxxra Tech Pvt Ltd, where innovation meets excellence. We
                            are a dynamic technology company dedicated to pushing the boundaries of what's possible. At
                            Fraxxra, we believe in the transformative power of technology to drive progress and shape
                            the future.</p>
                        {{-- <div class="about-feature-wrap">
                            <div class="about-feature">
                                <div class="about-feature_icon">
                                    <img src="assets/img/icon/about_feature_1_2.png" alt="Iconf_1">
                                </div>
                                <div class="media-body">
                                    <h3 class="about-feature_title">Certified Company</h3>
                                    <p class="about-feature_text">Best Provide Skills Services</p>
                                </div>
                            </div>
                            <div class="about-feature">
                                <div class="about-feature_icon">
                                    <img src="assets/img/icon/about_feature_1_2.png" alt="Iconf_3">
                                </div>
                                <div class="media-body">
                                    <h3 class="about-feature_title">Expert Team</h3>
                                    <p class="about-feature_text">100% Expert Team</p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

 <div class="bg-theme space-extra">
        <div class="container py-2">
            <div class="row gy-40 justify-content-between">
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon">
                            <img src="assets/img/icon/counter_1_1.svg" alt="Icon_1">
                        </div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">150</span>+</h2>
                            <p class="counter-card_text">Finished Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon">
                            <img src="assets/img/icon/counter_1_2.svg" alt="Icon_1.2">
                        </div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">150</span>+</h2>
                            <p class="counter-card_text">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon">
                            <img src="assets/img/icon/counter_1_3.svg" alt="Icon_1.3">
                        </div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">25</span>+</h2>
                            <p class="counter-card_text">Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-auto">
                    <div class="counter-card">
                        <div class="counter-card_icon">
                            <img src="assets/img/icon/counter_1_4.svg" alt="Icon_1.4">
                        </div>
                        <div class="media-body">
                            <h2 class="counter-card_number"><span class="counter-number">12</span>+</h2>
                            <p class="counter-card_text">Honorable Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        {{-- <span class="sub-title">WHY CHOOSE US</span> --}}
                        <p class="sec_para">Our Mission</p>
                    </div>
                    <p class="mt-n2 mb-30">-Empowering Businesses, Transforming Futures
                        At the core of Fraxxra Tech's mission is the commitment to empower businesses through
                        cutting-edge technology solutions. We strive to be a catalyst for positive change, driving
                        digital transformation that not only meets but exceeds the expectations of our clients.

                    </p>


                </div>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0" data-right="0">
            <div class="particle-3" id="particle-4"></div>
        </div>
    </div>
    <!--==============================
Team Area
==============================-->

    <div class="round-container gr-bg3 space">
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
                        {{-- <span class="sub-title">WHY CHOOSE US</span> --}}
                        <p class="sec_para">Our Values</p>
                    </div>
                    <p class="mt-n2 mb-30">Innovation: We thrive on innovation, constantly seeking new and better ways
                        to solve challenges and deliver exceptional solutions.</p>

                    <p class="mt-n2 mb-30">Integrity: Trust is the foundation of our relationships. We conduct business
                        with the highest standards of integrity, ensuring transparency and accountability.</p>

                    <p class="mt-n2 mb-30">Collaboration: We believe in the power of collaboration. By working closely
                        with our clients, partners, and each other, we create synergies that lead to success.</p>

                    <p class="mt-n2 mb-30">Excellence: Striving for excellence is not just a goal; it's our mindset. We
                        are committed to delivering services and solutions that set industry benchmarks.</p>


                </div>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0" data-right="0">
            <div class="particle-3" id="particle-4"></div>
        </div>
    </div>
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="assets/images/web-3.jpg" alt="About1">
                        </div>
                        <div class="shape1">
                            <img src="assets/img/normal/about_shape_1.png" alt="shape_2">
                        </div>
                        <div class="year-counter">
                            <h3 class="year-counter_number"><span class="counter-number">10</span></h3>
                            <p class="year-counter_text">Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-4 ms-xl-3">
                        <div class="title-area mb-35">
                            {{-- <span class="sub-title">
                                <div class="icon-masking me-2">
                                    <span class="mask-icon"
                                        data-mask-src="assets/img/theme-img/title_shape_1.svg"></span>
                                    <img src="assets/img/favicons/favicon.png" alt="shapef">
                                </div>About Us
                            </span> --}}
                            <h2 class="sec-title">Why Choose Fraxxra Tech?</span></h2>
                        </div>
                        <p class="mt-n2 mb-25">Expert Team: Our team of skilled professionals comprises experts in
                            various domains, ensuring that we can meet the diverse needs of our clients.</p>

                        <p class="mt-n2 mb-25">Client-Centric Approach: Your success is our priority. We take the time
                            to understand your business, challenges, and goals to deliver customized solutions.</p>


                        <p class="mt-n2 mb-25">Adaptability: In the fast-paced world of technology, adaptability is key.
                            We stay ahead of trends, ensuring that our clients are well-positioned for the future.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




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
                        {{-- <span class="sub-title">WHY CHOOSE US</span> --}}
                        <p class="sec_para">Our Journey</p>
                    </div>
                    <p class="mt-n2 mb-30">Founded with a passion for innovation and a vision for the future, Fraxxra
                        Tech has evolved into a trusted partner for businesses seeking to harness the power of
                        technology. Our journey is marked by milestones of success, fueled by the dedication and
                        expertise of our team.
                    </p>
                </div>



            </div>
        </div>
        <div class="shape-mockup" data-bottom="0" data-right="0">
            <div class="particle-3" id="particle-4"></div>
        </div>
    </div>




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
                        {{-- <span class="sub-title">WHY CHOOSE US</span> --}}
                        <p class="sec_para">Join Us on the Digital Frontier
                        </p>
                    </div>
                    <p class="mt-n2 mb-30">As we continue to innovate and explore new horizons, we invite you to join us
                        on the digital frontier. Whether you are a client, a partner, or a team member, your journey
                        with Fraxxra Tech is a journey toward progress and possibilities.
                    </p>
                    <p class="sub-title">Connect with Fraxxra Tech
                    </p>

                    <p class="mt-n2 mb-30">Ready to embark on a transformative journey with Fraxxra Tech? Contact us to
                        explore how our services can elevate your business.</p>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0" data-right="0">
            <div class="particle-3" id="particle-4"></div>
        </div>
    </div>
    <!--==============================
Counter Area
==============================-->







    <!--==============================
Testimonial Area
==============================-->
    {{-- <section class="bg-top-center space" data-bg-src="assets/img/bg/testi_bg_3.jpg">
        <div class="container">
            <div class="title-area text-center">
                <div class="shadow-title color2">TESTIMONIALS</div>
                <span class="sub-title">
                    <div class="icon-masking me-2">
                        <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                        <img src="assets/img/favicons/favicon-16x16.png" alt="shape_fav">
                    </div>
                    CUSTOMER FEEDBACK
                </span>
                <h2 class="sec-title text-white">What Happy Clients Says <br> <span class="text-theme">
                        About Us?</span>
                </h2>
            </div>

            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlider3"
                    data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_img">
                                    <img src="assets/img/testimonial/m1_1.jpg" alt="Avaterm">
                                    <div class="testi-grid_quote">
                                        <img src="assets/img/icon/quote_left_3.svg" alt="quoteq">
                                    </div>
                                </div>
                                <div class="testi-grid_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i>
                                </div>
                                <div class="testi-grid_content">
                                    <p class="testi-grid_text">Clients trust us for our unmatched expertise
                                        in handling
                                        complex IT challenges. We provide innovative solutions that drive
                                        sustainable
                                        business growth. Our unwavering commitment to excellence ensures
                                        their success
                                        every time.

                                    </p>
                                    <h3 class="box-title">Dharma Rao</h3>
                                    <p class="testi-grid_desig">Entreprenuer, Hyderabad</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_img">
                                    <img src="assets/img/testimonial/m1_3.jpg" alt="Avaterm1">
                                    <div class="testi-grid_quote">
                                        <img src="assets/img/icon/quote_left_3.svg" alt="quotel">
                                    </div>
                                </div>
                                <div class="testi-grid_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i>
                                </div>
                                <div class="testi-grid_content">
                                    <p class="testi-grid_text">Our clients rely on our personalized IT
                                        solutions to
                                        streamline operations and enhance productivity. We tackle each
                                        project with
                                        dedication and attention to detail. Our services are designed to
                                        meet their
                                        unique needs</p>
                                    <h3 class="box-title">Jaya Laxmi</h3>
                                    <p class="testi-grid_desig">Business, Vijayawada</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_img">
                                    <img src="assets/img/testimonial/m1_4.jpg" alt="Avaterm4">
                                    <div class="testi-grid_quote">
                                        <img src="assets/img/icon/quote_left_3.svg" alt="quotel3">
                                    </div>
                                </div>
                                <div class="testi-grid_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i>
                                </div>
                                <div class="testi-grid_content">
                                    <p class="testi-grid_text">We are proud to support clients with
                                        innovative IT
                                        solutions that transform their business operations. Our expert team
                                        ensures
                                        timely delivery results. They trust us for consistent, high-quality,
                                        and
                                        reliable service.</p>
                                    <h3 class="box-title">Aarthi</h3>
                                    <p class="testi-grid_desig">lecturer, Karimnagar</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_img">
                                    <img src="assets/img/testimonial/m1_5.jpg" alt="Avatert">
                                    <div class="testi-grid_quote">
                                        <img src="assets/img/icon/quote_left_3.svg" alt="quotel3">
                                    </div>
                                </div>
                                <div class="testi-grid_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i>
                                </div>
                                <div class="testi-grid_content">
                                    <p class="testi-grid_text">Clients choose us for our expert handling of
                                        complex IT
                                        challenges and provide innovative and effective solutions. We focus
                                        on helping
                                        businesses thrive and achieve sustainable, long-term success. Our
                                        reliable
                                        service builds strong, lasting partnerships.

                                    </p>
                                    <h3 class="box-title">mukundar</h3>
                                    <p class="testi-grid_desig"> Doctor at Banglore</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_img">
                                    <img src="assets/img/testimonial/ms1.jpg" alt="Avaterms1">
                                    <div class="testi-grid_quote">
                                        <img src="assets/img/icon/quote_left_3.svg" alt="quotel3">
                                    </div>
                                </div>
                                <div class="testi-grid_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i>
                                </div>
                                <div class="testi-grid_content">
                                    <p class="testi-grid_text">We help our clients overcome IT challenges
                                        with tailored,
                                        customized solutions and expert guidance. Our focus on efficiency
                                        and innovation
                                        ensures their continued growth. They value our consistent,
                                        high-quality service.
                                    </p>
                                    <h3 class="box-title">Dasharath</h3>
                                    <p class="testi-grid_desig">Teacher at Amaravathi</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_img">
                                    <img src="assets/img/testimonial/testi_3_4.jpg" alt="Avatert4">
                                    <div class="testi-grid_quote">
                                        <img src="assets/img/icon/quote_left_3.svg" alt="quotel3">
                                    </div>
                                </div>
                                <div class="testi-grid_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i>
                                </div>
                                <div class="testi-grid_content">
                                    <p class="testi-grid_text">Clients trust us for our innovative IT
                                        strategies that
                                        improve efficiency and drive business success. We ensure every
                                        project is
                                        handled with expertise and care. solutions are designed to create
                                        long-lasting
                                        results definetly.</p>
                                    <h3 class="box-title">Prakash</h3>
                                    <p class="ji-grid_desig">Vice-Principal , Chennai</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_img">
                                    <img src="assets/img/testimonial/ms2.jpg" alt="Avaterms2">
                                    <div class="testi-grid_quote">
                                        <img src="assets/img/icon/quote_left_3.svg" alt="quotel3">
                                    </div>
                                </div>
                                <div class="testi-grid_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i>
                                </div>
                                <div class="testi-grid_content">
                                    <p class="testi-grid_text">We help our clients overcome IT challenges
                                        with
                                        customized solutions and expert guidance. Our focus on efficiency
                                        and innovation
                                        ensures their continued growth. They value our consistent,
                                        high-quality service.
                                    </p>
                                    <h3 class="box-title">Adithya Sharma</h3>
                                    <p class="testi-grid_desig">Jr.Assistant in Ahmedabad</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="testi-grid_img">
                                    <img src="assets/img/testimonial/ms3.jpg" alt="Avaterms">
                                    <div class="testi-grid_quote">
                                        <img src="assets/img/icon/quote_left_3.svg" alt="quotel">
                                    </div>
                                </div>
                                <div class="testi-grid_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i
                                        class="fa-solid fa-star-sharp"></i>
                                </div>
                                <div class="testi-grid_content">
                                    <p class="testi-grid_text">Our clients depend on us to deliver solutions
                                        that
                                        simplify operations and boost productivity. We work closely with
                                        them to
                                        understand their goals. Our commitment to excellence guarantees
                                        success at every
                                        stage.</p>
                                    <h3 class="box-title">Md Sumon Mia</h3>
                                    <p class="testi-grid_desig">Pallavi school viceeprincipal- Rajasthan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#testiSlider3" class="slider-arrow style3 slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlider3" class="slider-arrow style3 slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section> --}}


    @include('particial.footer')



</body>


<!-- Mirrored from www.buildyourcode.in/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:13 GMT -->

</html>

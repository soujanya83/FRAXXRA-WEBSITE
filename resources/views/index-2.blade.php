@include('particial.index_header')

<body class="gradient-body">



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
                                        style="mask-image: url(_assets/img/theme-img/title_shape_2);"></span>
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


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="hero-style1 w-100 ">
                    {{-- <span class="hero-subtitle">Solution For Your Business</span> --}}
                    <h1 class="hero-title"> Welcome to Fraxxra Tech Pvt Ltd</h1>
                    {{-- <p class=" hero_par">For Smart <span class="text-theme fw-medium">IT Solution</span></p> --}}
                    <p class="hero-text">"At Fraxxra Tech, we pioneer innovation, driving the digital future with
                        cutting-edge solutions that redefine possibilities. Explore a world where technology meets
                        imagination, where data transforms into insights, and where your business evolves into a
                        seamless digital experience."</p>

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
                    {{-- <span class="sub-title">OUR SERVICES</span> --}}
                    {{-- <p class="sec_para">We Provide Exclusive Services</p> --}}
                    <p class="sec_para">OUR SERVICES</p>
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
                                        <h3 class="box-title"><a href="Webdevelopment">Business Intelligence</a></h3>
                                        <p class="service-3d_text">Unlock the power of your data with our Business
                                            Intelligence services. Gain valuable insights, make informed decisions, and
                                            propel your business forward.</p>
                                        {{-- <a href="Webdevelopment" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_2.png" alt="Icon_s3d">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Uxuidesigning">Data Warehouse</a></h3>
                                        <p class="service-3d_text">Build a robust foundation for your data with our Data
                                            Warehouse solutions. Organize, store, and retrieve information efficiently
                                            for enhanced business performance.</p>
                                        {{-- <a href="Uxuidesigning" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_3.png" alt="Icon_s3d3">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Digitalmarketing">Machine & Deep Learning</a>
                                        </h3>
                                        <p class="service-3d_text">Embrace the future of artificial intelligence with
                                            our Machine and Deep Learning services. Harness the potential of algorithms
                                            that learn and adapt, enabling your systems to evolve intelligently.</p>
                                        {{-- <a href="Digitalmarketing" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_4.png" alt="Icon_s3d4">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Mobiledevelopment">AR/VR Solutions</a></h3>
                                        <p class="service-3d_text">Immerse your audience in captivating experiences with
                                            our Augmented Reality (AR) and Virtual Reality (VR) solutions. Transform how
                                            users interact with your products and services.</p>
                                        {{-- <a href="Mobiledevelopment" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_1.png" alt="Icon_s3d1">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Security_services">XR Technologies</a>
                                        </h3>
                                        <p class="service-3d_text">Explore the extended reality (XR) realm with our XR
                                            technologies. Merge physical and virtual worlds seamlessly, offering unique
                                            and immersive experiences.</p>
                                        {{-- <a href="Security_services" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-3d">
                                    <div class="service-3d_icon">
                                        <img src="assets/img/icon/service_3d_2.png" alt="Icon_s3d2">
                                    </div>
                                    <div class="service-3d_content">
                                        <h3 class="box-title"><a href="Branding">Metaverse Development</a></h3>
                                        <p class="service-3d_text">Step into the future with our Metaverse development
                                            services. Create interconnected digital universes, fostering new
                                            opportunities for collaboration and engagement.</p>
                                        {{-- <a href="Branding" class="th-btn">Read More<i
                                                class="fas fa-arrow-right ms-2"></i></a> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="">
        <div class="container space">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 mb-30 mb-lg-0">
                    <div class="img-box7">
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
                <div class="col-lg-6 text-lg-start text-center">
                    <div class="title-area mb-35">
                        {{-- <span class="sub-title">WHY CHOOSE US</span> --}}
                        <p class="sec_para">Why Choose Fraxxra Tech?</p>
                    </div>
                    <p class="mt-n2 mb-30">- Innovation at its Core: We stay at the forefront of technological
                        advancements, ensuring your business stays ahead in a rapidly evolving digital landscape.</p>

                    <p class="mt-n2 mb-30">- Expertise That Matters: Our team of skilled professionals brings a wealth
                        of experience, delivering tailored solutions to meet your unique business needs.</p>

                    <p class="mt-n2 mb-30">- Reliable Partnerships: We believe in building lasting relationships. Your
                        success is our success, and we're committed to supporting you every step of the way.</p>

                    {{-- <div class="two-column mb-40 list-center">
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
                    <a href="about" class="th-btn">LEARN MORE<i class="fa-regular fa-arrow-right ms-2"></i></a> --}}
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0" data-right="0">
            <div class="particle-3" id="particle-4"></div>
        </div>
    </div>


    <div class="round-container gr-bg3 space">
        <div class="container space">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 mb-30 mb-lg-0">
                    <div class="img-box7">
                        <div class="img1">
                            <img src="assets/img/normal/why_3_1.png" alt="Why">
                        </div>
                        <div class="shape1">
                            {{-- <img src="assets/images/digital_1.jpg" alt="About1"> --}}
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
                        <p class="sec_para">Let's Shape the Future Together</p>
                    </div>
                    <p class="mt-n2 mb-30">Embark on a journey of innovation with Fraxxra Tech Pvt Ltd. Whether you are
                        looking to enhance efficiency, create immersive experiences, or revolutionize your industry, we
                        have the expertise to make it happen.</p>

                    <p class="mt-n2 mb-30">Ready to transform your business? Explore the limitless possibilities with
                        Fraxxra Tech Pvt Ltd.</p>

                    <p class="mt-n2 mb-30">Contact us today to embark on a journey of digital transformation!</p>

                    {{-- <div class="two-column mb-40 list-center">
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
                    <a href="about" class="th-btn">LEARN MORE<i class="fa-regular fa-arrow-right ms-2"></i></a> --}}
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
                            <img src="assets/images/canva3.png" alt="Why">
                        </div>
                        {{-- <div class="shape1">
                            <img src="assets/img/normal/why_3_2.png" alt="About1">
                        </div>
                        <div class="shape2">
                            <img src="assets/img/normal/faq_2_3.png" alt="About">
                        </div> --}}
                        <div class="color-animate"></div>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-start text-center">
                    <div class="title-area mb-35">
                        {{-- <span class="sub-title">WHY CHOOSE US</span> --}}
                        <p class="sec_para">Need Consultation? - Let's Talk</p>
                    </div>
                    <p class="mt-n2 mb-30">- One of our executives will get in touch with you to gather your
                        requirements. We will analyze the requirements and schedule a virtual demo.Demo is done adhering
                        to all the requisite parameters.
                        Address and contact details
                    </p>


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
    {{-- <section class="" id="project-sec">
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

    </section> --}}
    <!--==============================
Process Area
==============================-->
    <section class="space" id="process-sec">




        <div class="container">
            <div class="title-area text-center">
                {{-- <span class="sub-title">WORK PROCESS</span> --}}
                <p class="sec_para">HOW WE WORK</p>
                <p>How Fraxxra Tech Pvt Ltd services assist your business. At Fraxxra Tech services we provide all types
                    of Artificial Intelligence (AI) and Machine Learning (ML) solutions by providing you with regular
                    updates on the project and sharing real-time work progress.Our Dev team turns your prospects into
                    possible by streamlining various tasks.</p>
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
                            <p class="box-title">Ideation</p>
                            <p class="process-card_text">From the initial state of ideation to the planning and
                                implementation of strategies. We are backed up by the creative team who has much more to
                                contribute.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto process-card-wrap">
                        <div class="process-card">
                            <div class="pulse"></div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_box_2.png" alt="iconbox1">
                            </div>
                            <p class="box-title">Analysis</p>
                            <p class="process-card_text">After the ideation, an analysis of the project is said to be
                                done, which includes market analysis, customer interest analysis, and application
                                analysis.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-auto process-card-wrap">
                        <div class="process-card">
                            <div class="pulse"></div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_box_1.png" alt="iconbox2">
                            </div>
                            <p class="box-title">Execution</p>
                            <p class="process-card_text">This is the final phase of our operation module. The execution
                                part involves the submission of the project to the client and moving the project to
                                live. Customer feedback and suggestions are accepted during this phase.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto process-card-wrap">
                        <div class="process-card">
                            <div class="pulse"></div>
                            <div class="process-card_icon">
                                <img src="assets/img/icon/process_box_3.png" alt="iconbox3">
                            </div>
                            <p class="box-title">Testing</p>
                            <p class="process-card_text">Testing is done vigorously to determine the loopholes and then
                                suggests necessary modifications and at a later stage rectifies them accordingly.</p>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </section>
    <!--==============================
Testimonial Area
==============================-->
    {{-- <section class="">
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
    </section> --}}
    <!--==============================
Faq Area
==============================-->
    {{-- <div class="overflow-hidden space-top" id="faq-sec">
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
    </div> --}}


    @include('particial.footer')

</body>


<!-- Mirrored from www.buildyourcode.in/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:08 GMT -->

</html>

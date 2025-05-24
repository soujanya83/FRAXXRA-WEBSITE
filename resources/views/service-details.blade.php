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
                <h1 class="breadcumb-title">Services Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Services Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single">
                        <div class="page-img">
                            <img src="assets/img/service/service_details.jpg" alt="Service-img1">
                        </div>
                        <div class="page-content">
                            <h2 class="h3 page-title">Web Development</h2>
                            <p>Web development involves building and maintaining websites, focusing on both front-end
                                and back-end technologies. It ensures functionality, user experience, and performance,
                                creating responsive, secure, and optimized online platforms.</p>
                            <p class="mb-30">Web development also includes integrating databases, ensuring security, and
                                optimizing websites for search engines. It plays a vital role in enhancing a business's
                                online visibility and user engagement.

                            </p>

                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="th-video">
                                        <img class="w-100" src="assets/img/service/service_inner_1.jpg"
                                            alt="service_inner_1">
                                        <a href="https://www.youtube.com/watch?v=wPdXbdYc-EE"
                                            class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <h3 class="h4 mb-20">We Serve The Best Work</h3>
                                    <div class="checklist style3">
                                        <ul>
                                            <li><i class="fas fa-octagon-check"></i> Up am intention on dependent
                                                questions</li>
                                            <li><i class="fas fa-octagon-check"></i> Surrounded affronting favourable
                                            </li>
                                            <li><i class="fas fa-octagon-check"></i> We provide the best services at
                                                BYC.</li>
                                            <li><i class="fas fa-octagon-check"></i> Special Careness Risk Free</li>
                                            <li><i class="fas fa-octagon-check"></i> Reliable IT services for seamless
                                                operations.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-4">Credibly brand accurate data after user friendly ROI. Professionally
                                negotiate inexpensive markets and team driven scenarios. Interactively seize wireless
                                e-tailers after resource maximizing content. Collaboratively leverage existing.</p>

                            <h3 class="h4 mb-20">Benefits With Our Service</h3>

                            <div class="service-feature-wrap">
                                <div class="service-feature">
                                    <div class="service-feature_icon">
                                        <img src="assets/img/icon/service_feature_1.svg" alt="service_icon1">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="service-feature_title">Flexible Solutions</h4>
                                        <p class="service-feature_text">Flexible solutions adapt to diverse client
                                            needs.</p>
                                    </div>
                                </div>
                                <div class="service-feature">
                                    <div class="service-feature_icon">
                                        <img src="assets/img/icon/service_feature_2.svg" alt="service_icon2">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="service-feature_title">24/7 Unlimited Support</h4>
                                        <p class="service-feature_text">24/7 unlimited support for continuous assistance
                                            and service.</p>
                                    </div>
                                </div>
                            </div>

                            <h3 class="h4 mt-35 mb-4">Questions About Service</h3>
                            <div class="accordion-area accordion" id="faqAccordion">


                                <div class="accordion-card style2 active">
                                    <div class="accordion-header" id="collapse-item-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-1" aria-expanded="true"
                                            aria-controls="collapse-1">Where can I get analytics help?</button>
                                    </div>
                                    <div id="collapse-1" class="accordion-collapse collapse show"
                                        aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">If you have any questions about our services, feel free
                                                to reach out. We're happy to provide more information and assist you
                                                with any inquiries.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2 ">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false"
                                            aria-controls="collapse-2">How long should a business plan be?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse "
                                        aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Our team is always ready to answer any questions
                                                regarding our services.
                                                Feel free to contact us for further clarification or guidance on service
                                                details.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2 ">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                            aria-controls="collapse-3">How To Choose A Good QA Consultant?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse "
                                        aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">We strive to offer comprehensive support for all
                                                service-related inquiries.
                                                Our goal is to ensure that you have all the information needed for
                                                decision-making.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_nav_menu  ">
                            <h3 class="widget_title">All Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="service-details.html">Web Development</a></li>
                                    <li><a href="service-details.html">UI/UX Design</a></li>
                                    <li><a href="service-details.html">Digital Marketing</a></li>
                                    <li><a href="service-details.html">Business Analysis</a></li>
                                    <li><a href="service-details.html">Softwer Services</a></li>
                                    <li><a href="service-details.html">Mechine Learning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget_download  ">
                            <h4 class="widget_title">Download Brochure</h4>
                            <div class="download-widget-wrap">
                                <a href="service-details.html" class="th-btn"><i
                                        class="fa-light fa-file-pdf me-2"></i>DOWNLOAD PDF</a>
                                <a href="service-details.html" class="th-btn style5"><i
                                        class="fa-light fa-file-lines me-2"></i>DOWNLOAD DOC</a>
                            </div>
                        </div>
                        <div class="widget widget_banner  " data-bg-src="assets/img/bg/widget_banner.jpg">
                            <div class="widget-banner">
                                <span class="text">CONTACT US NOW</span>
                                <h2 class="title">You Need Help?</h2>
                                <a href="contact.html" class="th-btn style3">GET A QUOTE<i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
          @include('particial.footer')


</body>


<!-- Mirrored from www.buildyourcode.in/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:23 GMT -->

</html>

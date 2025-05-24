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
                                    <img src="assets/img/theme-img/title_shape_2.svg" alt="shape_svg">
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


    <!--==============================Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/servicesbanner.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Cloud Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Cloud Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!--- main body--start-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mt-4">
                <img class="head_pic w-100 pt-4" src="assets/images/cloud2.jpg" alt="cloud1">
            </div>
            <div class="col-md-6">
                <h2 class="web_head"> <span class="web_1">Cloud Security Services</span> for Seamless Protection</h2>
                <p class="web_para">In an increasingly digital world, the safety of your cloud infrastructure is
                    critical. Our cloud security services are designed to protect your data, applications, and workflows
                    from cyber threats while ensuring uninterrupted access. We provide comprehensive solutions,
                    including data encryption, identity and access management, and real-time threat monitoring, tailored
                    to meet your business's unique needs. With our expertise, you can secure sensitive information,
                    comply with industry regulations, and mitigate risks effectively.

                </p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">

            <div class="col-md-6">
                <h2 class="web_head">Advanced <span class="web_1">Cloud Security Services for Digital Safety</h2>

                <p class="web_para">As businesses transition to the cloud, robust security services are essential to
                    safeguard digital assets. Our advanced cloud security services offer end-to-end protection, ensuring
                    the confidentiality, integrity, and availability of your data. From multi-layered firewalls to
                    intrusion detection and response, we employ the latest technologies to secure your cloud
                    environments. Our solutions include vulnerability assessments, compliance monitoring, and disaster
                    recovery planning to keep your systems resilient. Trust our team of cloud security experts to help
                    you navigate the complexities of cloud infrastructure while protecting your business from potential
                    cyber threats and ensuring your operations remain uninterrupted.

                </p>
            </div>

            <div class="col-md-6 mt-4">
                <img class="head_pic  w-100" src="assets/images/cloud1.jpg" alt="cloud2">
            </div>

        </div>
    </div>


    <div class="container mt-4 mb-4 ">
        <div class="row">
            <div class="col-md-6">
                <img class="head_pic w-100 pt-4" src="assets/images/cloud3.jpg" alt="cloud3">
            </div>
            <div class="col-md-6">
                <h2 class="web_head"> Reliable <span class="web_1">Cloud Security</span> Services for Modern Enterprises
                </h2>
                <p class="web_para">Reliable cloud security services for enterprises include data encryption,
                    multi-factor authentication, identity and access management, and continuous monitoring. They offer
                    threat detection, vulnerability management, and secure APIs, ensuring data protection, risk
                    mitigation, and business continuity in scalable environments.

                </p>
            </div>
        </div>
    </div>


           @include('particial.footer')


</body>


<!-- Mirrored from www.buildyourcode.in/Cloud_services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:59 GMT -->

</html>

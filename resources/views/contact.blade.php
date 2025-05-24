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
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bannercont.jpg">
        <!-- <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"></h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html"></a></li>
                    <li></li>
                </ul>
            </div>
        </div> -->
    </div>
    <!--==============================
Contact Area
==============================-->
    <div class="space">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="box-title">Our Office Address</h4>
                            <span class="contact-info_text"> #303, NKN, R P Business Park <br>Shaikpet, Hyderabad -
                                500008</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="box-title">Call Us Anytime</h4>
                            <span class="contact-info_text">
                                <a href="tel:+65485965789">+91 95154 21414</a>

                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="box-title">Send An Email</h4>
                            <span class="contact-info_text">
                                <a href="mailto:info@buildyourcode.in">info@buildyourcode.in</a>

                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Contact Area
==============================-->
    <div class="bg-smoke space" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="title-area mb-35 text-xl-start text-center">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <!-- <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> -->
                                <!-- <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"> -->
                            </div>contact with us!
                        </span>
                        <h2 class="sec-title">Have Any Questions?</h2>
                        <p class="sec-text">Enthusiastically disintermediate one-to-one leadership via business
                            e-commerce. Dramatically reintermediate compelling process improvements rather than
                            empowered relationships.</p>
                    </div>
                    <form action="https://www.buildyourcode.in/mail.php" method="POST"
                        class="contact-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email Address">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select">
                                    <option value="" disabled selected hidden>Select Subject</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Brand Marketing">Brand Marketing</option>
                                    <option value="UI/UX Designing">UI/UX Designing</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                </select>
                                <!-- <i class="fal fa-chevron-down"></i> -->
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number"
                                    placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                    placeholder="Your Message"></textarea>
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
    {{-- <div class="map-sec">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d60902.58422266196!2d78.45707397476649!3d17.44000715245279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m5!1s0x3bcb84ad48255d29%3A0x410841a999b3433!2sSecunderabad%2C%20Telangana!3m2!1d17.439929499999998!2d78.4982741!4m1!2s%20%23303%2C%20NKN%2C%20R%20P%20Business%20Park%20%2CShaikpet%2C%20Hyderabad%20-%20500008!5e0!3m2!1sen!2sin!4v1733417095404!5m2!1sen!2sin"
            width="600" height="450" allowfullscreen="" loading="lazy"></iframe>


    </div> --}}

          @include('particial.footer')


</body>


<!-- Mirrored from www.buildyourcode.in/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:55 GMT -->

</html>

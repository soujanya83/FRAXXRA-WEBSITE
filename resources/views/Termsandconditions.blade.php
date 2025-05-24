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
                                    <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
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
    <div class="breadcumb-wrapper1" data-bg-src="assets/img/bg/footer_bg_17.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Terms and Conditions</h1>

            </div>
        </div>
    </div>
    <!-- main body starts-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <p class="mt-4 p-2"> Welcome to Build Your Code (BYC) IT Solutions Pvt Ltd (“Company,” “we,” “our,”
                        “us”). These Terms and Conditions (“Terms”) govern your access to and use of our services,
                        websites, and any related applications provided by BYC IT Solutions Pvt Ltd, Hyderabad.

                        By accessing or using our services, you agree to be bound by these Terms. If you do not agree,
                        please do not use our services.</p>

                    <h4 class=" p-2">1. Acceptance of Terms</h4>
                    <ul>
                        <li class=" p-2"> You confirm that you are at least 18 years old and have the legal capacity to
                            enter into agreements.</li>

                        <li class=" p-2"> Your continued use of our services constitutes your acceptance of these Terms,
                            as they may be updated from time to time.</li>
                    </ul>

                    <h4 class=" p-2"> 2. Services Provided</h4>
                    <ul>
                        <li class=" p-2"> BYC IT Solutions Pvt Ltd provides IT solutions, including but not limited to
                            software development, web application design, mobile application development, and IT
                            consulting services.</li>

                        <li class=" p-2"> All services are subject to specific agreements or contracts that detail
                            project scope, deliverables, and timelines.</li>
                    </ul>

                    <h4 class=" p-2">3. User Responsibilities</h4>
                    <ul>
                        <li class=" p-2"> You are responsible for providing accurate and complete information when
                            requested.</li>

                        <li class=" p-2"> You agree not to misuse our services by engaging in illegal, fraudulent, or
                            unethical activities.</li>

                        <li> Any data or content you share with us must comply with applicable laws and not infringe on
                            any third-party rights.</li>
                    </ul>

                    <h4 class=" p-2">4. Intellectual Property</h4>
                    <ul>

                        <li>All intellectual property rights related to our services, including but not limited to
                            software, trademarks, logos, and content, remain the property of BYC IT Solutions Pvt Ltd or
                            its licensors.</li>

                        <li> You are granted a limited, non-exclusive, non-transferable license to use our services for
                            their intended purpose.</li>

                        <li> Unauthorized use, reproduction, or distribution of our intellectual property is prohibited.
                        </li>
                    </ul>

                    <h4 class=" p-2"> 5. Confidentiality</h4>
                    <ul>

                        <li> Both parties agree to maintain the confidentiality of any proprietary or sensitive
                            information exchanged during the course of engagement.</li>

                        <li> This obligation remains effective even after the termination of the relationship between
                            the parties.</li>
                    </ul>
                    <h4 class=" p-2"> 6. Payment Terms</h4>
                    <ul>

                        <li> Payment terms will be outlined in the specific agreement or contract governing the services
                            provided.</li>

                        <li> Delayed or non-payment may result in the suspension or termination of services.</li>

                        <li> All payments are non-refundable unless otherwise stated in the agreement.</li>
                    </ul>

                    <h4 class=" p-2"> 7. Limitation of Liability</h4>
                    <ul>

                        <li> BYC IT Solutions Pvt Ltd will not be liable for indirect, incidental, or consequential
                            damages resulting from the use of our services.</li>

                        <li> Our maximum liability for any claim will not exceed the fees paid by you for the specific
                            service in question.</li>
                    </ul>

                    <h4 class=" p-2">8. Termination</h4>
                    <ul>

                        <li> Either party may terminate the engagement by providing written notice as specified in the
                            service agreement.</li>

                        <li> Upon termination, you agree to settle all outstanding payments and return any proprietary
                            materials provided by BYC IT Solutions Pvt Ltd.</li>
                    </ul>

                    <h4 class=" p-2">9. Governing Law and Jurisdiction</h4>
                    <ul>

                        <li> These Terms are governed by and construed in accordance with the laws of India.</li>

                        <li> Any disputes arising out of these Terms shall be subject to the exclusive jurisdiction of
                            the courts in Hyderabad, Telangana.</li>
                    </ul>

                    <h4 class=" p-2"> 10. Amendments to Terms</h4>
                    <ul>

                        <li> BYC IT Solutions Pvt Ltd reserves the right to update or modify these Terms at any time
                            without prior notice.</li>

                        <li> Continued use of our services after changes to the Terms constitutes acceptance of the
                            revised Terms.</li>
                    </ul>

                    <h4 class=" p-2">11. Contact Information</h4>
                    <ul>

                        <p class="mt-4 p-2"> If you have any questions or concerns regarding these Terms, please contact
                            us:

                            BYC IT Solutions Pvt Ltd <span class="priv">> #303, NKN, R P Business Park <br>Shaikpet,
                                Hyderabad - 500008, Telangana, India</span></p>
                        <p><span class="priv">Email: info@buildyourcode.in</span></p>
                        <p><span class="priv">Phone: +91 95154 21414</span></p>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!---main body--end-->

         @include('particial.footer')


</body>


<!-- Mirrored from www.buildyourcode.in/Termsandconditions.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:40:00 GMT -->

</html>

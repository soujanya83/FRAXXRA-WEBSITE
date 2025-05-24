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
                <h1 class="breadcumb-title">Privacy Policy</h1>

            </div>
        </div>
    </div>


    <!--main body-starts-->
    <div class="container my-4 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">

                    <p class="mt-4 p-2">At Build Your Code (BYC) IT Solutions Pvt. Ltd., Hyderabad, we value your
                        privacy and are committed to protecting your personal information. This Privacy Policy explains
                        how we collect, use, and safeguard the data you provide while using our services, website, or
                        applications. By accessing or using our services, you agree to the practices outlined in this
                        policy.</p>
                    <h4 class=" p-2">1. Information We Collect</h4>
                    <p class=" p-2"> We may collect the following types of information:</p>
                    <ul>
                        <h5 class="mt-1 p-2">a. Personal Information</h5>
                        <li> Company:<span class="priv">Buildyourcode(BYC)</span></li>
                        <li> emailaddress:<span class="priv">info@buildyourcode.in</span></li>
                        <li>Phone Number:<span class="priv">+91 95154 21414</span></li>
                        <li>
                            <address>#303, NKN, R P Business Park <br>Shaikpet, Hyderabad - 500008</address>
                        </li>
                        <li> Employment-related details (for job applicants).</li>
                        <li>Financial details (for transactions).</li>
                    </ul>
                    <ul>
                        <h5 class="mt-1 p-2"> b. Non-Personal Information</h5>
                        <li>Browser type</li>
                        <li>IP address</li>
                        <li>device type</li>
                        <li>operating system.</li>
                        <li> Usage data</li>
                        <li>including pages viewed</li>
                        <li>time spent on our platform</li>
                        <li>interaction details.</li>
                    </ul>
                    <h5 class="mt-1 p-2">c. Cookies and Tracking Technologies</h5>
                    <p class="mt-1 p-2">We use cookies to enhance user experience and collect analytics data. You can
                        manage cookie preferences through your browser settings.</p>

                    <ul>
                        <h5 class="mt-1 p-2">2. How We Use Your Information</h5>
                        <p>We use the information collected for the following purposes:</p>

                        <li>To provide and improve our services.</li>
                        <li>To communicate with you regarding updates, offers, and support.</li>
                        <li>To process transactions and manage accounts.</li>
                        <li>To analyze user behavior for improving platform efficiency.</li>
                        <li>To comply with legal and regulatory requirements.</li>
                    </ul>



                    <ul>

                        <h5 class="mt-1 p-2">3. Data Sharing and Disclosure</h5>
                        <p>We do not sell, rent, or trade your personal information. However, we may share your
                            information with:</p>

                        <li>Third-Party Service Providers: To perform services on our behalf, such as payment
                            processing, analytics, or marketing.</li>
                        <li>Legal Authorities: To comply with legal obligations or respond to lawful requests.</li>
                        <li>Business Transfers: In case of mergers, acquisitions, or asset sales.</li>
                    </ul>
                    <ul>
                        <h5 class="mt-1 p-2">4. Data Security</h5>
                        <p>We implement robust security measures to protect your data from unauthorized access,
                            alteration, or disclosure. These include:</p>

                        <li>Secure servers and encryption technologies.</li>
                        <li>Regular audits and security updates.</li>
                        <li>Restricted access to personal data on a need-to-know basis.</li>
                    </ul>
                    <ul>
                        <h5 class="mt-1 p-2">5. Your Rights.</h5>
                        <p class="mt-1 p-2">As a user, you have the following rights regarding your personal data:</p>

                        <li>Access and update your information.</li>
                        <li>Request deletion of your personal data.</li>
                        <li>Opt out of marketing communications.</li>
                        <li>Withdraw consent for data processing, where applicable.</li>
                        <li>To exercise these rights, please contact us at [<span
                                class="priv">info@buildyourcode.in</span>].</li>
                    </ul>

                    <h5 class="mt-1 p-2">6. Data Retention</h5>
                    <p class="mt-1 p-2">We retain your personal information only as long as necessary for the purposes
                        outlined in this policy or as required by law.</p>

                    <h5 class="mt-1 p-2">7. Third-Party Links</h5>
                    <p class="mt-1 p-2">Our website or applications may contain links to third-party websites. We are
                        not responsible for the privacy practices or content of these sites.</p>

                    <h5 class="mt-1 p-2">8. Updates to the Privacy Policy</h5>
                    <p class="mt-1 p-2">We may update this policy periodically to reflect changes in our practices or
                        legal requirements. Updates will be posted on this page with the revised date.</p>

                    <h5 class="mt-1 p-2">9. Contact Us</h5>
                    <p class="mt-1 p-2">If you have any questions or concerns regarding this Privacy Policy, please
                        contact us:</p>

                    <p class="mt-1 p-2">Build Your Code (BYC) IT Solutions Pvt. Ltd.
                        #303, NKN, R P Business Park <br>Shaikpet, Hyderabad - 500008
                        Telangana, India</p>
                    <p class=" p-2">Email: <span class="priv">info@buildyourcode.in</span></p>
                    <p class="p-2">Phone: <span class="priv">+91 95154 21414</span></p>


                </div>
            </div>
        </div>
    </div>


    <!---main body--end-->

           @include('particial.footer')


</body>


<!-- Mirrored from www.buildyourcode.in/Privacyandconditions.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:40:00 GMT -->

</html>

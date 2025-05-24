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




    <!--==============================Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Canva</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Canva</li>
                </ul>
            </div>
        </div>
    </div>

    <!--- main body--start-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mt-4">
                <img class="head_pic w-100" src="assets/images/canva1.jpg" alt="canva1">
            </div>
            <div class="col-md-6">
                <h2 class="web_head"> Enhanced Security Services for <span class="web_1">Canva</span> Designs</h2>
                <p class="web_para">Canva, the popular design platform, provides advanced security services to protect
                    your creative projects and ensure secure collaboration. With features like encrypted cloud storage,
                    password-protected design links, and access controls, Canva ensures that only authorized users can
                    view or edit your designs. The platform also integrates with Google and Microsoft accounts for
                    secure login options, offering two-factor authentication for an additional layer of protection.
                    Whether you’re creating social media graphics or business presentations, Canva’s security services
                    allow you to work with confidence, knowing your designs and personal data are safe from unauthorized
                    access.



                </p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">

            <div class="col-md-6">
                <h2 class="web_head"> Robust Security Services for <span class="web_1"> Canva</span> Collaborations</h2>

                <p class="web_para">When it comes to collaborative design, Canva integrates a variety of security
                    services to safeguard your creative assets. Team members can share designs securely with permission
                    settings, ensuring only specific individuals can access or edit files. Canva also provides real-time
                    version history, allowing you to track changes and revert to earlier versions if needed. The
                    platform’s secure cloud storage ensures that all your designs are protected against data loss and
                    unauthorized access, offering peace of mind for individuals and teams working on high-stakes
                    projects. These security services make Canva an ideal tool for both individual creators and
                    businesses looking to collaborate securely


                </p>
            </div>

            <div class="col-md-6 mt-4">
                <img class="head_pic  w-100" src="assets/images/canva2.jpg" alt="canva1">
            </div>

        </div>
    </div>


    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-6">
                <img class="head_pic w-100" src="assets/images/canva3.png" alt="canva2">
            </div>
            <div class="col-md-6">
                <h2 class="web_head">Canva Security Services for Safe and Creative Projects</h2>
                <p class="web_para">Canva's security services help protect your projects from start to finish, offering
                    peace of mind for both personal and professional use. With secure file storage, encrypted backups,
                    and shared design link protection, Canva ensures your designs are kept confidential. For businesses,
                    Canva’s enterprise-level security features include team permissions, access logs, and secure
                    collaboration tools to prevent unauthorized changes. Whether you’re designing marketing materials or
                    crafting social media posts, Canva’s robust security infrastructure keeps your creative work safe,
                    allowing you to focus on bringing your ideas to life while minimizing the risk of data breaches.


                </p>
            </div>
        </div>
    </div>


           @include('particial.footer')


</body>


<!-- Mirrored from www.buildyourcode.in/Canva.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:31 GMT -->

</html>

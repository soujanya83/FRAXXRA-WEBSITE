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
                <h1 class="breadcumb-title">AngularJS</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index-2.html">Home</a></li>
                    <li>AngularJS</li>
                </ul>
            </div>
        </div>
    </div>


    <!--- main body--start-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mt-4">
                <img class="head_pic w-100" src="assets/images/ang1.jpg" alt="angular_ang1">
            </div>
            <div class="col-md-6">
                <h2 class="web_head">Features of<span class="web_1"> AngularJS</span></h2>
                <p class="web_para">AngularJS is a feature-rich JavaScript framework designed to create dynamic and
                    robust web applications. It provides two-way data binding, ensuring automatic synchronization
                    between the model and view, and follows an MVC architecture for organized development. Dependency
                    injection simplifies the management of components, while directives allow extending HTML with custom
                    tags and attributes. Filters enable efficient data formatting, and deep linking ensures SEO-friendly
                    URLs. With its seamless integration with RESTful APIs, modular code structure, and built-in unit
                    testing capabilities, AngularJS supports the creation of scalable and reusable components. It is
                    especially effective for building responsive and interactive single-page applications (SPAs).

                </p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">

            <div class="col-md-6">
                <h2 class="web_head">Architecture of<span class="web_1"> AngularJS</span></h2>
                <p class="web_para">AngularJS architecture is built on the Model-View-Controller (MVC) pattern,
                    streamlining the development of dynamic web applications. The Model manages application data, the
                    View is responsible for the user interface, and the Controller bridges the two, processing user
                    inputs and managing interactions. AngularJS enhances this architecture with features like two-way
                    data binding, ensuring real-time synchronization between the model and view, and directives that
                    extend HTML functionality with custom elements and attributes. Dependency injection simplifies
                    component management and testing, promoting modular and maintainable code. With its dynamic and
                    scalable structure, AngularJS enables developers to handle complex application logic efficiently,
                    making it ideal for building robust, interactive single-page applications (SPAs).

                </p>
            </div>

            <div class="col-md-6 mt-4">
                <img class="head_pic  w-100" src="assets/images/ang2.jpg" alt="ang2">
            </div>

        </div>
    </div>


    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-6">
                <img class="head_pic w-100" src="assets/images/ang3.jpg" alt="ang3">
            </div>
            <div class="col-md-6">
                <h2 class="web_head">Benefits of <span class="web_1"> AngularJS</span> </h2>
                <p class="web_para">AngularJS offers numerous benefits for web development. Its two-way data binding
                    ensures real-time synchronization between the model and view, reducing manual DOM manipulation. The
                    MVC architecture simplifies application design and enhances code organization. Features like
                    directives and reusable components promote modular development. Dependency injection streamlines
                    component management, while built-in testing tools improve code quality. AngularJS supports
                    SEO-friendly deep linking and integrates seamlessly with RESTful APIs. Its modular structure enables
                    scalability, making it ideal for building dynamic and interactive single-page applications (SPAs).


                </p>
            </div>
        </div>
    </div>


           @include('particial.footer')


</body>


<!-- Mirrored from www.buildyourcode.in/AngularJS.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:36 GMT -->

</html>

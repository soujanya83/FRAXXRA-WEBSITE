@include('particial.header')

<body>


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






    <!-----
    Mobile Menu
       ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a class="icon-masking" href="index-2"><span data-mask-src="assets/img/logo-small_updated.png"
                        class="mask-icon"></span><img src="assets/img/logo-small_updated.png" style="width:100px;"
                        alt="BuildYourCode"></a>
            </div>

            <div class="th-mobile-menu">
                <ul>
                    <li><a href="about">Home</a></li>

                    <li><a href="about">About Us</a></li>

                    <li class="menu-item-has-children">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="Uxuidesigning">UX/UI Designing</a></li>
                            <li><a href="Webdevelopment">Web Development</a></li>

                            <li><a href="#">Mobile Development</a></li>
                            <li><a href="service">Digital Marketing</a></li>
                            <li><a href="service-details">Branding</a></li>
                            <li><a href="service">Security Services</a></li>
                            <li><a href="service-details">Cloud Services</a></li>
                        </ul>

                    <li class="menu-item-has-children mega-menu-wrap">
                        <a href="#">Technologies</a>
                        <ul class="mega-menu">
                            <li><a href="#">UX/UI Design Tools</a>
                                <ul>
                                    <li><a href="Adobexd">Adobe XD</a></li>
                                    <li><a href="Figma">Figma</a></li>
                                    <li><a href="Adobephotoshop">Adobe Photoshop 2025</a></li>
                                    <li><a href="Sketch">Sketch</a></li>
                                    <li><a href="Indesign">InDesign</a></li>
                                    <li><a href="Adobeillustrator">Adobe Illustrator</a></li>
                                    <li><a href="Adobe_dream_weaver">Adobe Dreamweaver</a></li>
                                    <li><a href="Canva">Canva pro</a></li>

                                </ul>
                            </li>

                            <li><a href="#">Front-end Frameworks</a>
                                <ul>
                                    <li><a href="Html">HTML5</a></li>
                                    <li><a href="Css">CSS3</a></li>
                                    <li><a href="Bootstrap">Bootstrap 5</a></li>
                                    <li><a href="Sass">Sass</a></li>
                                    <li><a href="Tailwindcss">Tailwind CSS</a></li>
                                    <li><a href="Reactjs">React Js</a></li>
                                    <li><a href="AngularJS">Angular Js</a></li>
                                    <li><a href="Vuejs">Vue JS</a></li>
                                    <li><a href="Nextjs">Next JS</a></li>


                                </ul>
                            </li>
                            <li><a href="#">Backend Technologies</a>
                                <ul>
                                    <li><a href="Php">PHP</a></li>
                                    <li><a href="Java">JAVA</a></li>
                                    <li><a href="Net">.NET</a></li>
                                    <li><a href="Python">PYTHON</a></li>
                                    <li><a href="Nodejs">NODEJS</a></li>


                                </ul>
                            </li>
                            <li><a href="#">Databases</a>
                                <ul>
                                    <li><a href="Mysql">MySQL</a></li>
                                    <li><a href="Sql">SQL</a></li>
                                    <li><a href="Postgresql">PostgreSQL</a></li>
                                    <li><a href="Microsoftsql">Microsoft SQL Server</a></li>
                                    <li><a href="sqlite">SQLite</a></li>
                                    <li><a href="Monogodb">MongoDB</a></li>
                                    <li><a href="Cassandra">Cassandra</a></li>
                                    <li><a href="Couchdb">CouchDB</a></li>
                                    <li><a href="Redis">Redis</a></li>
                                    <li><a href="Dynamodb">DynamoDB</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Projects</a>
                        <ul class="sub-menu">
                            <li><a href="RealEstateApp">Real Estate App</a></li>
                            <li><a href="EcommerceApp">E-Commerce App</a></li>
                            <li><a href="GroceryDeliveryApp">Grocery Delivery App</a></li>
                            <li><a href="EntertainmentApp">Entertainment App</a></li>
                            <li><a href="MechanicApp">Mechanic App</a></li>
                            <li><a href="PharmancyDeliveryApp">Pharmacy Delivery App</a></li>
                            <li><a href="HotelBookingApp">Hotel Booking App</a></li>



                            <li><a href="JobApp">Job App</a></li>
                            <li><a href="LaundryBookingApp">Laundry Booking App</a></li>
                            <li><a href="CabBookingApp">Cab Booking App</a></li>
                            <li><a href="PlumberBookingApp">Plumber App</a></li>
                            <li><a href="Social_media_App">Social Media App</a></li>
                            <li><a href="OnlineGameApp">Online Game App</a></li>
                            <li><a href="BikeBookingApp">Bike Booking App</a></li>
                            <li><a href="RentalApp">Rental App</a></li>



                        </ul>
                    </li>





                    <li>
                        <a href="contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>









    <!--Product Lightbox
==============================-->
    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="assets/img/product/product_details_1_1" alt="Product_img"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <p class="price">$180.85<del>$350.99</del></p>
                        <h2 class="product-title">Gaming Computer</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                    style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on
                                    <span class="rating">1</span> customer rating</span></div>
                            <a href="shop-details" class="woocommerce-review-link">(<span class="count">3</span>
                                customer reviews)</a>
                        </div>
                        <p class="text">Syndicate customized growth strategies prospective human capital leverage
                            other's optimal e-markets without transparent catalysts for change. Credibly coordinate
                            highly efficient methods of empowerment cross unit solutions.</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-badge-check"></i> Lifetime structural, one year finish warranty
                                </li>
                                <li><i class="far fa-badge-check"></i> Mapped from “Center Caps” under ” tment” tab</li>
                                <li><i class="far fa-badge-check"></i> Fully copatible with OEM equimpent</li>
                            </ul>
                        </div>
                        <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity"
                                    value="1" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                                <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                            </div>
                            <button class="th-btn">Add to Cart</button>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">wheel-fits-chevy-camaro</span></span>
                            <span class="posted_in">Category: <a href="shop" rel="tag">Tires & Wheels</a></span>
                            <span>Tags: <a href="shop">automotive parts</a><a href="shop">wheels</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div>

    @include('particial.nav')


    <!--==============================Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Webdevelopment</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index-2">Home</a></li>
                    <li>webdevelopment</li>
                </ul>
            </div>
        </div>
    </div>

    <!--- Web Development--start   -->

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mt-4">
                <img class="head_pic w-100" src="assets/images/web-1.jpg" alt="web_img1">
            </div>
            <div class="col-md-6">
                <h2 class="web_head"><span class="web_1">Business Intelligence </span> Unlocking Insights for Informed
                    Decision-Making</h2>
                <p class="web_para">In a data-driven world, our Business Intelligence services empower your organization
                    to extract meaningful insights from vast datasets. We employ advanced analytics tools and
                    visualization techniques to transform raw data into actionable intelligence. From performance
                    metrics to market trends, our solutions enable informed decision-making, fostering a competitive
                    edge.
                </p>

                <p class="sub-title web_para">Key Features:
                </p>

                <p class="web_para"> <b>Data Visualization:</b> Dynamic charts, graphs, and dashboards translate complex
                    data into comprehensible visual formats.</p>
                <p class="web_para"><b>Custom Reporting:</b> Tailored reports provide real-time insights, facilitating
                    strategic decision-making.</p>
                <p class="web_para"><b>Predictive Analytics:</b> Anticipate trends and make proactive decisions based on
                    predictive modeling.</p>
            </div>




            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <h2 class="web_head"><span class="web_1">Data Warehouse</span> Building Robust Foundations for
                            Data Management

                        </h2>
                        <p class="web_para">Our Data Warehouse solutions provide a secure and scalable architecture for
                            efficient data management. We organize and store diverse data sources in a centralized
                            repository, ensuring quick and reliable access. From historical records to real-time
                            updates, our solutions empower your business with a solid foundation for data-driven
                            decision-making.

                        </p>

                        <p class="sub-title web_para">Key Features:
                        </p>
                        <p class="web_para"> <b>Scalability:</b> Easily scale storage capacity to accommodate growing
                            data volumes.</p>
                        <p class="web_para"><b>Data Integration:</b> Seamlessly integrate data from various sources for
                            a comprehensive view.</p>
                        <p class="web_para"><b> Performance Optimization:</b> Fine-tune data warehouse performance for
                            rapid retrieval.</p>
                    </div>

                    <div class="col-md-6 mt-4 ">
                        <img class="head_pic w-100" src="assets/images/web-2.jpg" alt="Web_img2">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <img class="head_pic w-100" src="assets/images/web-3.jpg" alt="Web_img3">


                    </div>
                    <div class="col-md-6">
                        <h2 class="web_head"><span class="web_1">Machine & Deep Learning </span> Shaping the Future with
                            Intelligent Algorithms
                        </h2>
                        <p class="web_para">Fraxxra Tech specializes in Machine and Deep Learning services that propel
                            businesses into the realm of artificial intelligence. Our algorithms learn from data
                            patterns, enabling systems to adapt and make intelligent decisions. From recommendation
                            engines to predictive analytics, our solutions usher in a new era of automation and
                            intelligence.
                        </p>

                        <p class="sub-title web_para">Key Features:
                        </p>
                        <p class="web_para"> <b>Algorithm Development:</b> Customized algorithms tailored to your
                            specific business needs.</p>
                        <p class="web_para"><b>Natural Language Processing (NLP):</b> Enhance user interactions with
                            advanced language understanding.</p>
                        <p class="web_para"><b>Continuous Learning:</b> Systems evolve over time, ensuring adaptability
                            to changing scenarios.</p>
                    </div>


                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <img class="head_pic w-100" src="assets/images/ux1.jpg" alt="Web_img3">


                    </div>
                    <div class="col-md-6">
                        <h2 class="web_head"><span class="web_1">AR/VR Solutions</span> Transforming Experiences
                            Through Augmented and Virtual Reality
                        </h2>
                        <p class="web_para">Immerse your audience in captivating experiences with our Augmented Reality
                            (AR) and Virtual Reality (VR) solutions. Whether enhancing product interactions or creating
                            immersive training simulations, our AR/VR applications redefine engagement. From 3D
                            visualizations to interactive environments, we bring your ideas to life in the digital
                            realm.
                        </p>

                        <p class="sub-title web_para">Key Features:
                        </p>
                        <p class="web_para"> <b>Interactive Simulations:</b> Create realistic, interactive environments
                            for training and exploration.</p>
                        <p class="web_para"><b>Product Visualization:</b> Showcase products in 3D, allowing users to
                            explore details from every angle.</p>
                        <p class="web_para"><b>Immersive Experiences:</b> users with immersive storytelling and
                            interactive elements.</p>
                    </div>


                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <img class="head_pic w-100" src="assets/images/digital-3.jpg" alt="Web_img3">


                    </div>
                    <div class="col-md-6">
                        <h2 class="web_head"><span class="web_1">XR Technologies </span> Realities for Unparalleled
                                Experiences
                        </h2>
                        <p class="web_para">Fraxxra Tech explores the vast potential of extended reality (XR)
                            technologies, where physical and virtual worlds seamlessly converge. Our XR solutions span
                            augmented reality, virtual reality, and mixed reality, offering diverse applications. From
                            gaming to industrial training, our XR technologies open doors to limitless possibilities.
                        </p>

                        <p class="sub-title web_para">Key Features:
                        </p>
                        <p class="web_para"> <b>Mixed Reality Experiences:</b> Blend digital and physical elements for
                            truly immersive experiences.</p>
                        <p class="web_para"><b>Spatial Computing:</b> Explore environments where digital content
                            interacts with the real world.</p>
                        <p class="web_para"><b>Industry-Specific Solutions: </b> Tailor XR applications to meet the
                            unique needs of various industries.</p>
                    </div>


                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <img class="head_pic w-100" src="assets/images/sketch2.jpg"  alt="Web_img3">


                    </div>
                    <div class="col-md-6">
                        <h2 class="web_head"><span class="web_1">Metaverse Development </span> Crafting Interconnected Digital
                                Universes
                        </h2>
                        <p class="web_para">Embark on a journey into the Metaverse with Fraxxra Tech. Our Metaverse
                            development services redefine digital interactions, creating interconnected virtual
                            universes. From social platforms to collaborative workspaces, we enable businesses to thrive
                            in the evolving landscape of digital connectivity.

                        </p>

                        <p class="sub-title web_para">Key Features:
                        </p>
                        <p class="web_para"> <b>Virtual Collaboration:</b> Connect with colleagues and clients in
                            virtual environments for enhanced collaboration.</p>
                        <p class="web_para"><b>Digital Commerce: </b> Explore new avenues for digital commerce within
                            the immersive Metaverse.</p>
                        <p class="web_para"><b> Customized Experiences: </b> Tailor Metaverse solutions to align with
                            your brand and objectives.</p>
                    </div>


                </div>
            </div>

        </div>
    </div>

    @include('particial.footer')


</body>


<!-- Mirrored from www.buildyourcode.in/Webdevelopment by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 11:39:16 GMT -->

</html>

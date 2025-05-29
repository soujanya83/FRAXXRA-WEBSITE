<style>
    .appointment-btn {
        background-color: #417f8e;
        color: white;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        margin-right: 62px;
    }

    .appointment-btn:hover {
        background-color: black;
        color: white;
    }
</style>
<style>
    .appointment-btn {
        background-color: #417f8e;
        color: white;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .appointment-btn:hover {
        background-color: black;
        color: white;
    }

    header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
}
</style>

<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a class="icon-masking" href="/"><span data-mask-src="assets/img/logo-small_updated.png"
                    class="mask-icon"></span><img src="assets/img/logo-small_updated.png"
                    style="width:120px;margin-left: 50%;" alt="fraxxra_small"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('about_page') }}">About Us</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="Uxuidesigning">UX/UI Designing</a></li>
                        <li><a href="Webdevelopment">Web Development</a></li>

                        <li><a href="#">Mobile Development</a></li>
                        <li><a href="service">Digital Marketing</a></li>
                        <li><a href="">Branding</a></li>
                        <li><a href="">Security Services</a></li>
                    </ul>
                </li>
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

<header class="">

    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="" style="background-color: #73c6b6;width:100%">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a class="icon-masking" href="{{ route('home_page') }}"><img
                                    src="assets/img/logo-small_updated.png" style="width:120px; margin-left: 50%;"
                                    alt="fraxxra_small"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('home_page') }}">Home</a></li>
                                <li><a href="{{ route('about_page') }}">About Us</a></li>
                                <li><a href="{{ route('services_page') }}">Services</a></li>
                                <li>
                                    <a href="{{ route('contact_page')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-button">
                            <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            </button>
                            <a href="{{ route('contact_page') }}"
                                class="btn shadow-none sideMenuToggler appointment-btn">
                                Make Appointment<i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

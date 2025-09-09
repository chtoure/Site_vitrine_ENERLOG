
@extends('component.app')

@section('content')


        <section id="slider" class="hero p-0 odd">
            <div class="swiper-container no-slider animation slider-h-100 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="assets/images/bg-4.jpg" alt="Full Image" class="full-image" data-mask="50">    

                        <div class="slide-content row">
                            <div class="col-12 d-flex justify-content-start inner">
                                <div class="left text-left">

                                    <!-- Content -->
                                    <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">
                                        <span class="pre-title m-0">Human Resources</span>
                                        Get More <span class="featured bottom"><span>Productivity</span></span>
                                    </h1>
                                    <p data-aos="zoom-in" data-aos-delay="2400" class="description bigger">Planning, recruitment and selection process and performance evaluation of employees.</p>

                                    <!-- Action -->
                                    <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                        <div class="d-sm-inline-flex">
                                            <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN TOUCH</a>
                                            <a href="#features" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="features" class="section-1 features offers featured">
            <div class="container">
                <div class="row justify-content-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon featured icon-people"></i>
                            <h4>Human Capital</h4>
                            <p>Humanizing business: Harness the power of technology to improve the way people work.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon featured icon-pie-chart"></i>
                            <h4>Core Business</h4>
                            <p>It takes innovative approaches to transform, modernize, and run existing platforms.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon featured icon-speedometer"></i>
                            <h4>Performance</h4>
                            <p>Achieving maximum impact and value from investments in finance and supply chain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="funfacts" class="section-2 highlights image-right counter funfacts featured">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text items">
                        <div data-aos="fade-up"  class="row intro mb-4">
                            <div class="col-12 p-0">
                                <span class="pre-title m-auto m-md-0">About the network</span>
                                <h2><span class="featured"><span>The</span></span> Company</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis diam varius diam ultricies lacinia.</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div data-aos="fade-up" class="col-12 col-md-4 p-0 pr-md-4 item">
                                <div data-percent="230" class="radial left">
                                    <span></span>
                                </div>
                                <h4>Employees</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div data-aos="fade-up" class="col-12 col-md-4 p-0 pr-md-4 item">
                                <div data-percent="164" class="radial left">
                                    <span></span>
                                </div>
                                <h4>Partners</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div data-aos="fade-up" class="col-12 col-md-4 p-0 pr-md-4 item">
                                <div data-percent="517" class="radial left">
                                    <span></span>
                                </div>
                                <h4>Customers</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                        <!-- Action -->
                        <div data-aos="fade-up" class="buttons">
                            <div class="d-sm-inline-flex mb-5 mb-md-0">
                                <a href="#contact" class="smooth-anchor mx-auto mt-4 btn primary-button">GET IN TOUCH</a>
                                <a href="#" class="mx-auto ml-sm-4 mt-4 btn outline-button">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-0 image">
                        <img src="assets/images/about-5.jpg" class="fit-image" alt="Fit Image">
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="section-3 odd showcase blog-grid filter-section projects">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <span class="pre-title">We do more for everyone</span>
                            <h2 class="mb-0">Actions & <span class="featured"><span>Projects</span></span></h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-12">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" value="all" checked class="btn-filter-item">
                                    <span>All</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="institutional" class="btn-filter-item">
                                    <span>Institutional</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="social" class="btn-filter-item">
                                    <span>Social</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="events" class="btn-filter-item">
                                    <span>Events</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="innovation" class="btn-filter-item">
                                    <span>Innovation</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="environment" class="btn-filter-item">
                                    <span>Environment</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="technology" class="btn-filter-item">
                                    <span>Technology</span>
                                </label>
                            </div>
                        </div>
                    </div>                    
                    <div class="row items filter-items">                       
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["innovation","social","technology"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/project-1.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Academic professional program in social media</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>            
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["institutional","events","environment"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/project-2.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>President's speech at the annual meeting</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>     
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["environment","institutional","social"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/project-3.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>International business trip in Shanghai</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","events","innovation"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/project-4.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Technology workshop with education theme</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["social","environment","events"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/project-5.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Donation of clothes and food to the partner NGO</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["innovation","institutional","technology"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/project-6.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Confraternization of the procurement team</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-1 filter-sizer"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="section-4 process offers">
            <div class="container full">
                <div class="row text-center intro">
                    <div class="col-12">
                        <span class="pre-title">How it works in practice</span>
                        <h2><span class="featured"><span>Process</span></span> Management</h2>
                        <p class="text-max-800">We work with innovative methodologies to ensure that the entire reformatting process is done from start to finish as planned.</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-2 item">
                        <div class="step"><span>01</span></div>
                        <h4>Collection of information</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 item">
                        <div class="step"><span>02</span></div>
                        <h4>Strategic planning</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 item">
                        <div class="step"><span>03</span></div>
                        <h4>Assignment of responsibilities</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 item">
                        <div class="step"><span>04</span></div>
                        <h4>Formatting process</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 item">
                        <div class="step"><span>05</span></div>
                        <h4>Continuity formalization</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="section-5 carousel testimonials">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <span class="pre-title">Customer Testimonials</span>
                            <h2>Trusted <span class="featured"><span>Feedback</span></span></h2>
                            <p class="text-max-800">We work intensively in search of ideals that can add up in the lives of our customers. This is what moves us and we are grateful for the recognition.</p>
                        </div>
                    </div>
                    <div class="swiper-container mid-slider items" data-perview="3"> 
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-1.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-2.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-3.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-4.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-5.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-1.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-2.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-3.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-4.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-center item">
                                <div class="row card">
                                    <div class="col-12">
                                        <img src="assets/images/logo-5.png" alt="Logo" class="logo">
                                        <p>Praesent volutpat justo sit amet elementum malesuada. Praesent sagittis augue justo, in accumsan orci rhoncus at pellentesque.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <i class="quote-right fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="contact" class="section-6 odd form contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Send a message</span>
                                <h2>Get in <span class="featured"><span>Touch</span></span></h2>
                                <p>We will respond to your message as soon as possible.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <form action="php/form.php" id="nexgen-simple-form" class="nexgen-simple-form">
                                    <input type="hidden" name="section" value="nexgen_form">

                                    <input type="hidden" name="reCAPTCHA">
                                    <!-- Remove this field if you want to disable recaptcha -->

                                    <div class="row form-group-margin">
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="email" name="email" class="form-control field-email" placeholder="Email">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <i class="icon-arrow-down mr-3"></i>
                                            <select name="info" class="form-control field-info">
                                                <option value="" selected disabled>More Info</option>
                                                <option>Audit & Assurance</option>
                                                <option>Financial Advisory</option>
                                                <option>Analytics and M&A</option>
                                                <option>Middle Marketing</option>
                                                <option>Legal Consulting</option>
                                                <option>Regulatory Risk</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12 m-0 p-2 input-group">
                                            <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12 col-12 m-0 p-2 input-group">
                                            <span class="form-alert"></span>
                                        </div>
                                        <div class="col-12 input-group m-0 p-2">
                                            <a class="btn primary-button">SEND</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contacts">
                            <h4>Example Inc.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
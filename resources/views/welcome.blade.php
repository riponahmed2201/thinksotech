<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ThinkSoTech - Think it. We solve it.</title>

    <!-- ======= Google Font =======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- End Google Font-->

    <!-- ======= Styles =======-->
    <link href="assets/web/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/web/vendors/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/web/vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="assets/web/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/web/vendors/aos/aos.css" rel="stylesheet">
    <!-- End Styles-->

    <!-- ======= Theme Style =======-->
    <link href="assets/web/css/style.css" rel="stylesheet">
    <!-- End Theme Style-->

    <!-- ======= Apply theme =======-->
    <script>
        (function() {
            const storedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-bs-theme', storedTheme);
        })();
    </script>
</head>

<body>

    <!-- ======= Site Wrap =======-->
    <div class="site-wrap">

        <!-- ======= Header =======-->
        <header class="fbs__net-navbar navbar navbar-expand-lg dark" aria-label="freebootstrap.net navbar">
            <div class="container d-flex align-items-center justify-content-between">

                <!-- Start Logo-->
                <a class="navbar-brand w-auto" href="/">
                    <img class="logo dark img-fluid" style="width: 104px;" src="assets/logo/TS_color.svg"
                        alt="ThinkSoTech Logo">
                    <img class="logo light img-fluid" style="width: 104px;" src="assets/web/images/logo-light.svg"
                        alt="ThinkSoTech Logo">
                </a>
                <!-- End Logo-->

                <!-- Start offcanvas-->
                <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1"
                    aria-labelledby="fbs__net-navbarsLabel">

                    <div class="offcanvas-header">
                        <div class="offcanvas-header-logo">
                            <a class="logo-link" id="fbs__net-navbarsLabel" href="index.html">
                                <img class="logo dark img-fluid" style="width: 104px;" src="assets/logo/TS_color.svg"
                                    alt="ThinkSoTech Logo">
                                <img class="logo light img-fluid" style="width: 104px;" src="assets/logo/TS_color.svg"
                                    alt="ThinkSoTech Logo"></a>
                        </div>
                        <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body align-items-lg-center">
                        <ul class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link scroll-link active" aria-current="page"
                                    href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#about">About Us</a></li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown" aria-expanded="false">Services<i
                                        class="bi bi-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">Web
                                            Development</a></li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">Mobile Apps</a>
                                    </li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">Custom
                                            Software</a></li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">E-commerce</a>
                                    </li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">UI/UX Design</a>
                                    </li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">Cloud
                                            Services</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#how-it-works">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#testimonials">Testimonials</a>
                            </li>
                            <li class="nav-item"><a class="nav-link scroll-link" href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End offcanvas-->

                <div class="ms-auto w-auto">
                    <div class="header-social d-flex align-items-center gap-1"><a class="btn btn-primary py-2"
                            href="#contact">Get a Quote</a>

                        <button class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto"
                            data-bs-toggle="offcanvas" data-bs-target="#fbs__net-navbars"
                            aria-controls="fbs__net-navbars" aria-label="Toggle navigation" aria-expanded="false">
                            <svg class="fbs__net-icon-menu" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="21" x2="3" y1="6" y2="6"></line>
                                <line x1="15" x2="3" y1="12" y2="12"></line>
                                <line x1="17" x2="3" y1="18" y2="18"></line>
                            </svg>
                            <svg class="fbs__net-icon-close" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header-->

        <!-- ======= Main =======-->
        <main>

            <!-- ======= Hero =======-->
            <section class="hero__v6 section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="row">
                                <div class="col-lg-11"><span class="hero-subtitle text-uppercase" data-aos="fade-up"
                                        data-aos-delay="0">Think it. We solve it.</span>
                                    <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">Innovate.
                                        Think. Solve.</h1>
                                    <p class="hero-description mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="200">
                                        Welcome to ThinkSoTech — a modern software company turning ideas into
                                        intelligent
                                        digital solutions. We simplify complexity through smart design, powerful code,
                                        and innovative technology.
                                    </p>
                                    <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up"
                                        data-aos-delay="300"><a class="btn" href="#contact">Get Started</a><a
                                            class="btn btn-white-outline" href="#contact">Contact Us
                                            <svg class="lucide lucide-arrow-up-right"
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M7 7h10v10"></path>
                                                <path d="M7 17 17 7"></path>
                                            </svg></a></div>
                                    <div class="logos mb-4" data-aos="fade-up" data-aos-delay="400"><span
                                            class="logos-title text-uppercase mb-4 d-block">Trusted by businesses
                                            worldwide</span>
                                        <div class="logos-images d-flex gap-4 align-items-center"><img
                                                class="img-fluid js-img-to-inline-svg"
                                                src="assets/web/images/logo/actual-size/logo-air-bnb__black.svg"
                                                alt="Company 1" style="width: 110px;"><img
                                                class="img-fluid js-img-to-inline-svg"
                                                src="assets/web/images/logo/actual-size/logo-ibm__black.svg"
                                                alt="Company 2" style="width: 80px;"><img
                                                class="img-fluid js-img-to-inline-svg"
                                                src="assets/web/images/logo/actual-size/logo-google__black.svg"
                                                alt="Company 3" style="width: 110px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-img"><img class="img-card img-fluid"
                                    src="assets/web/images/card-expenses.png" alt="Image card" data-aos="fade-down"
                                    data-aos-delay="600"><img class="img-main img-fluid rounded-4"
                                    src="assets/web/images/hero-img-1-min.jpg" alt="Hero Image" data-aos="fade-in"
                                    data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Hero-->

            <!-- ======= About =======-->
            <section class="about__v4 section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 order-md-2">
                            <div class="row justify-content-end">
                                <div class="col-md-11 mb-4 mb-md-0"><span class="subtitle text-uppercase mb-3"
                                        data-aos="fade-up" data-aos-delay="0">About us</span>
                                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">Transform Your Ideas
                                        Into Powerful Digital Solutions</h2>
                                    <div data-aos="fade-up" data-aos-delay="200">
                                        <p>ThinkSoTech is a forward-thinking software development company dedicated to
                                            transforming
                                            ideas into scalable, intelligent products.</p>
                                        <p>From concept to code, we deliver digital solutions that empower
                                            organizations to innovate and adapt in today's fast-paced digital landscape.
                                        </p>
                                    </div>
                                    <h4 class="small fw-bold mt-4 mb-3" data-aos="fade-up" data-aos-delay="300">Our
                                        Core Values</h4>
                                    <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features"
                                        data-aos="fade-up" data-aos-delay="400">
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span
                                                class="text">Innovation</span></li>
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span class="text">Quality</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span class="text">Client-Centric
                                                Design</span></li>
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span
                                                class="text">Transparency</span></li>
                                        <li class="d-flex align-items-center gap-2"><span
                                                class="icon rounded-circle text-center"><i
                                                    class="bi bi-check"></i></span><span
                                                class="text">Excellence</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-wrap position-relative"><img class="img-fluid rounded-4"
                                    src="assets/web/images/about_2-min.jpg" alt="About ThinkSoTech"
                                    data-aos="fade-up" data-aos-delay="0">
                                <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up"
                                    data-aos-delay="100">
                                    <div class="mission-icon text-center rounded-circle"><i
                                            class="bi bi-lightbulb fs-4"></i></div>
                                    <div>
                                        <h3 class="text-uppercase fw-bold">Our Mission</h3>
                                        <p class="fs-5 mb-0">To simplify technology and make innovation accessible to
                                            everyone.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About-->

            <!-- ======= Features =======-->
            <section class="section features__v2" id="features">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-lg-flex p-5 rounded-4 content" data-aos="fade-in" data-aos-delay="0">
                                <div class="rounded-borders">
                                    <div class="rounded-border-1"></div>
                                    <div class="rounded-border-2"></div>
                                    <div class="rounded-border-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                                        <div class="row">
                                            <div class="col-lg-11">
                                                <div class="h-100 flex-column justify-content-between d-flex">
                                                    <div>
                                                        <h2 class="mb-4">Why Choose ThinkSoTech</h2>
                                                        <p class="mb-5">Experience the future of software development
                                                            with our secure, efficient, and user-friendly solutions. Our
                                                            cutting-edge approach ensures your projects are delivered
                                                            with precision, empowering you to achieve your digital goals
                                                            with confidence and ease.</p>
                                                    </div>
                                                    <div class="align-self-start"><a
                                                            class="glightbox btn btn-play d-inline-flex align-items-center gap-2"
                                                            href="https://www.youtube.com/watch?v=DQx96G4yHd8"
                                                            data-gallery="video"><i class="bi bi-play-fill"></i> Watch
                                                            the Video</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="row justify-content-end">
                                            <div class="col-lg-11">
                                                <div class="row">
                                                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="0">
                                                        <div class="icon text-center mb-4"><i
                                                                class="bi bi-code-square fs-4"></i></div>
                                                        <h3 class="fs-6 fw-bold mb-3">Expert Development Team</h3>
                                                        <p>Skilled developers with expertise in latest technologies and
                                                            frameworks.</p>
                                                    </div>
                                                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                                        <div class="icon text-center mb-4"><i
                                                                class="bi bi-lightning-charge fs-4"></i></div>
                                                        <h3 class="fs-6 fw-bold mb-3">Agile Methodology</h3>
                                                        <p>Flexible development process with regular updates and faster
                                                            delivery.</p>
                                                    </div>
                                                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                                                        <div class="icon text-center mb-4"><i
                                                                class="bi bi-headset fs-4"></i></div>
                                                        <h3 class="fs-6 fw-bold mb-3">24/7 Customer Support</h3>
                                                        <p>Round-the-clock assistance via chat, email, phone, and
                                                            comprehensive documentation.</p>
                                                    </div>
                                                    <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                                                        <div class="icon text-center mb-4"><i
                                                                class="bi bi-shield-lock fs-4"></i></div>
                                                        <h3 class="fs-6 fw-bold mb-3">Robust Security</h3>
                                                        <p>Advanced security measures, data encryption, and best
                                                            practices implementation.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Features-->

            <!-- ======= Pricing =======-->
            <section class="section pricing__v2" id="pricing">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-5 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">Pricing</span>
                            <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Plan for Every Budget</h2>
                            <p data-aos="fade-up" data-aos-delay="200">Experience the future of software with our
                                flexible, efficient, and results-driven development services</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                            <div class="p-5 rounded-4 price-table h-100">
                                <h3>Starter</h3>
                                <p>Perfect for small projects and startups. Get your business online with a professional
                                    website.</p>
                                <div class="price mb-4"><strong>$499</strong><span>/ project</span></div>
                                <div><a class="btn" href="#contact">Get Started</a></div>
                            </div>
                        </div>
                        <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                            <div class="p-5 rounded-4 price-table popular h-100">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="mb-3">Business</h3>
                                        <p>Optimize your business operations with our tailored software solutions.</p>
                                        <div class="price mb-4"><strong class="me-1">$1,999</strong><span>/
                                                project</span></div>
                                        <div><a class="btn btn-white hover-outline" href="#contact">Get Started</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pricing-features">
                                        <h4 class="text-uppercase fw-bold mb-3">Features</h4>
                                        <ul class="list-unstyled d-flex flex-column gap-3">
                                            <li class="d-flex gap-2 align-items-start mb-0"><span
                                                    class="icon rounded-circle position-relative mt-1"><i
                                                        class="bi bi-check"></i></span><span>Custom Web/Mobile
                                                    Application</span></li>
                                            <li class="d-flex gap-2 align-items-start mb-0"><span
                                                    class="icon rounded-circle position-relative mt-1"><i
                                                        class="bi bi-check"></i></span><span>Advanced Features
                                                    Integration</span></li>
                                            <li class="d-flex gap-2 align-items-start mb-0"><span
                                                    class="icon rounded-circle position-relative mt-1"><i
                                                        class="bi bi-check"></i></span><span>Database & API
                                                    Development</span></li>
                                            <li class="d-flex gap-2 align-items-start mb-0"><span
                                                    class="icon rounded-circle position-relative mt-1"><i
                                                        class="bi bi-check"></i></span><span>3 Months Support & Source
                                                    Code</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Pricing-->

            <!-- ======= How it works =======-->
            <section class="section howitworks__v1" id="how-it-works">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-6 text-center mx-auto"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">How it works</span>
                            <h2 data-aos="fade-up" data-aos-delay="100">How It Works</h2>
                            <p data-aos="fade-up" data-aos-delay="200">Our development process is designed to make
                                building software simple and efficient. Follow these easy steps to get started:</p>
                        </div>
                    </div>
                    <div class="row g-md-5">
                        <div class="col-md-6 col-lg-3">
                            <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative"
                                data-aos="fade-up" data-aos-delay="0">
                                <div data-aos="fade-right" data-aos-delay="500"><img class="arch-line"
                                        src="assets/web/images/arch-line.svg" alt="Step connector">
                                </div><span
                                    class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">1</span>
                                <div>
                                    <h3 class="fs-5 mb-4">Consultation</h3>
                                    <p>Share your vision with us. We'll discuss your requirements, goals, and create a
                                        detailed project plan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                            <div
                                class="step-card reverse text-center h-100 d-flex flex-column justify-content-start position-relative">
                                <div data-aos="fade-right" data-aos-delay="1100"><img class="arch-line reverse"
                                        src="assets/web/images/arch-line-reverse.svg" alt="Step connector"></div><span
                                    class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">2</span>
                                <h3 class="fs-5 mb-4">Design & Planning</h3>
                                <p>Our team creates wireframes, designs, and technical architecture tailored to your
                                    needs.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1200">
                            <div
                                class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
                                <div data-aos="fade-right" data-aos-delay="1700"><img class="arch-line"
                                        src="assets/web/images/arch-line.svg" alt="Step connector">
                                </div><span
                                    class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">3</span>
                                <h3 class="fs-5 mb-4">Development</h3>
                                <p>We build your solution using cutting-edge technologies, keeping you updated
                                    throughout the process.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1800">
                            <div
                                class="step-card last text-center h-100 d-flex flex-column justify-content-start position-relative">
                                <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">4</span>
                                <div>
                                    <h3 class="fs-5 mb-4">Launch & Support</h3>
                                    <p>After thorough testing, we launch your project and provide ongoing support for
                                        continuous success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End How it works-->

            <!-- ======= Stats =======-->
            <section class="stats__v3 section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap content rounded-4" data-aos="fade-up" data-aos-delay="0">
                                <div class="rounded-borders">
                                    <div class="rounded-border-1"></div>
                                    <div class="rounded-border-2"></div>
                                    <div class="rounded-border-3"></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up"
                                    data-aos-delay="100">
                                    <div class="stat-item">
                                        <h3 class="fs-1 fw-bold"><span class="purecounter" data-purecounter-start="0"
                                                data-purecounter-end="50"
                                                data-purecounter-duration="2">0</span><span>+</span></h3>
                                        <p class="mb-0">Happy Clients</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <div class="stat-item">
                                        <h3 class="fs-1 fw-bold"> <span class="purecounter"
                                                data-purecounter-start="0" data-purecounter-end="100"
                                                data-purecounter-duration="2">0</span><span>+</span></h3>
                                        <p class="mb-0">Projects Completed</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up"
                                    data-aos-delay="300">
                                    <div class="stat-item">
                                        <h3 class="fs-1 fw-bold"><span class="purecounter" data-purecounter-start="0"
                                                data-purecounter-end="5"
                                                data-purecounter-duration="2">0</span><span>x</span></h3>
                                        <p class="mb-0">Business Growth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Stats-->

            <!-- ======= Services =======-->
            <section class="section services__v3" id="services">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-8 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">Our Services</span>
                            <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Empowering Digital Innovation
                                Through Cutting-Edge Services</h2>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div><span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M50.327 4H25.168a6.007 6.007 0 0 0-6 6v5.11h-8.375a3.154 3.154 0 0 0-3.12 3.18v5.47a1 1 0 0 0 .724.961 3.204 3.204 0 0 1 0 6.097 1 1 0 0 0-.724.962v5.49a3.154 3.154 0 0 0 3.12 3.18H34.5c-2.147 8.057 9.408 12.135 12.77 4.441a1 1 0 0 0-1.841-.779 4.778 4.778 0 1 1-4.403-6.636c1.039-.159 2.453 1.082 3.063-.225.449-1.37-1.383-1.598-2.336-1.734V31.8a1 1 0 0 0-.72-.96 3.21 3.21 0 0 1 0-6.11 1 1 0 0 0 .72-.96v-5.48a3.154 3.154 0 0 0-3.12-3.18H21.168V10a4.004 4.004 0 0 1 4-4h3.21l1.24 3.066a3.982 3.982 0 0 0 3.708 2.503h8.826a3.984 3.984 0 0 0 3.71-2.503L47.1 6h3.228a4.004 4.004 0 0 1 4 4v1.6a1 1 0 0 0 2 0V10a6.007 6.007 0 0 0-6-6ZM38.633 17.11a1.153 1.153 0 0 1 1.12 1.18v4.792a5.234 5.234 0 0 0 0 9.405V35.6a6.789 6.789 0 0 0-4.333 2.85H10.793a1.153 1.153 0 0 1-1.12-1.18v-4.8a5.232 5.232 0 0 0 0-9.401V18.29a1.153 1.153 0 0 1 1.12-1.18Zm5.375-8.793a1.994 1.994 0 0 1-1.856 1.252h-8.826a1.991 1.991 0 0 1-1.854-1.252l-.934-2.312H44.94Z"
                                                    fill="currentColor" opacity="1" data-original="#000000">
                                                </path>
                                            </g>
                                        </svg></span>
                                    <h3 class="fs-5 mb-3">Custom Software Development</h3>
                                    <p class="mb-4">Tailored solutions built specifically for your business needs,
                                        from enterprise applications to specialized tools.</p>
                                </div><a
                                    class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact"><span class="icons"><i
                                            class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"> </i></span><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div><span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="m57.936 58.647-4.47-11.871a9.542 9.542 0 0 0-5.914-5.693l-7.659-2.609-1.944-2.116v-2.62a13.043 13.043 0 0 0 4.739-5.175 14.256 14.256 0 0 0 3.237.14 2.909 2.909 0 0 0 2.905-2.906v-5.382a2.895 2.895 0 0 0-1.495-2.523 13.84 13.84 0 0 0-2.807-7.777 1 1 0 0 0-1.597 1.205 11.879 11.879 0 0 1 2.386 6.19c-.012-.01-2.017.036-1.987-.023-4.064-11.113-18.668-11.126-22.702.024h-1.875c.73-9.938 13.556-14.987 21.539-8.81a1 1 0 0 0 1.196-1.605c-9.394-7.24-24.311-1.02-24.754 10.758a2.895 2.895 0 0 0-1.566 2.561v5.382a2.909 2.909 0 0 0 2.905 2.906c.4-.042 2.932.115 3.213-.122a12.843 12.843 0 0 0 4.542 5.038v2.757l-1.825 2.184-7.553 2.521a9.547 9.547 0 0 0-5.917 5.695l-4.47 11.871a1.008 1.008 0 0 0 .935 1.352H49.97a1 1 0 0 0 0-2H36.123l-2.985-7.876 2.014-2.491 2.009 1.746a1.007 1.007 0 0 0 1.643-.594l1.322-8.118 6.785 2.312a7.549 7.549 0 0 1 4.682 4.504L55.555 58H53.97a1 1 0 0 0 0 2H57a1.007 1.007 0 0 0 .936-1.353z"
                                                    fill="currentColor" opacity="1" data-original="currentColor">
                                                </path>
                                            </g>
                                        </svg></span>
                                    <h3 class="fs-5 mb-3">Web Application Development</h3>
                                    <p class="mb-4">Responsive, scalable, and modern web applications using latest
                                        frameworks like Laravel, React, and Vue.js.</p>
                                </div><a
                                    class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact"><span class="icons"><i
                                            class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"> </i></span><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div><span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M35.719 21.413a1 1 0 0 0-1.586 1.218 15.554 15.554 0 0 1 1.806 3.012h-6.1a19.93 19.93 0 0 0-3.417-8.42 15.637 15.637 0 0 1 5.012 2.652 1 1 0 0 0 1.245-1.565 17.676 17.676 0 1 0-11.002 31.51c14.511.067 22.936-16.94 14.042-28.407z"
                                                    fill="currentColor" opacity="1" data-original="#000000">
                                                </path>
                                            </g>
                                        </svg></span>
                                    <h3 class="fs-5 mb-3">Mobile App Development</h3>
                                    <p class="mb-4">Native and cross-platform mobile solutions for iOS and Android
                                        that deliver seamless user experiences.</p>
                                </div><a
                                    class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact"><span class="icons"><i
                                            class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"> </i></span><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div><span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M59 47.487h-1.81v-27.61a5.223 5.223 0 0 0-5-5.409h-3.71a1 1 0 0 0 0 2h3.71a3.228 3.228 0 0 1 3 3.41v27.609H26.03a1.013 1.013 0 0 0-.996 1.02 34.358 34.358 0 0 0 1.49 3.57 2 2 0 0 0 1.828 1.188h7.296a2 2 0 0 0 1.828-1.188l1.149-2.589L58 49.487v2.74a2.823 2.823 0 0 1-2.82 2.82H8.82A2.823 2.823 0 0 1 6 52.227v-2.74h16.03a1 1 0 0 0 0-2H8.81v-27.61a3.228 3.228 0 0 1 3-3.41h6.89c-3.535 9.154 3.658 19.594 13.63 19.48 11.076.08 18.127-12.336 12.587-21.706a14.54 14.54 0 0 0-25.162-.073 1.646 1.646 0 0 1-.163.299H11.81a5.223 5.223 0 0 0-5 5.41v27.61H5a1 1 0 0 0-1 1v3.74a4.825 4.825 0 0 0 4.82 4.82h46.36a4.825 4.825 0 0 0 4.82-4.82v-3.74a1 1 0 0 0-1-1z"
                                                    fill="currentColor" opacity="1" data-original="#000000">
                                                </path>
                                            </g>
                                        </svg></span>
                                    <h3 class="fs-5 mb-3">E-commerce Solutions</h3>
                                    <p class="mb-4">Complete online store development with payment integration,
                                        inventory management, and analytics.</p>
                                </div><a
                                    class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact"><span class="icons"><i
                                            class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"> </i></span><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div><span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M51.798 12.238a27.71 27.71 0 0 0-3.132-2.708 1 1 0 0 0-1.186 1.609 25.317 25.317 0 0 1 2.162 1.82l-2.117 2.117A22.896 22.896 0 0 0 33.002 9.05V6.057a25.425 25.425 0 0 1 11.2 3.02 1 1 0 0 0 .946-1.761C26.702-2.634 3.907 11.036 4.02 32.012c-.31 15.036 12.945 28.294 27.983 27.983 24.827-.03 37.332-30.174 19.795-47.757z"
                                                    fill="currentColor" opacity="1" data-original="#000000">
                                                </path>
                                            </g>
                                        </svg></span>
                                    <h3 class="fs-5 mb-3">UI/UX Design</h3>
                                    <p class="mb-4">Beautiful, intuitive interfaces that users love, combining
                                        aesthetics with functionality.</p>
                                </div><a
                                    class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact"><span class="icons"><i
                                            class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"> </i></span><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div><span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 64 64"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M49.5 4H24.34a6.007 6.007 0 0 0-6 6v5.29a1 1 0 0 0 2 0V10a4.005 4.005 0 0 1 4-4h3.218l1.237 3.066a3.984 3.984 0 0 0 3.71 2.503h8.826a3.984 3.984 0 0 0 3.71-2.503L46.277 6H49.5a4.004 4.004 0 0 1 4 4v44a4.004 4.004 0 0 1-4 4H24.34a4.005 4.005 0 0 1-4-4V39.42h11.8a6.774 6.774 0 0 0 12.998 2.159 1 1 0 0 0-1.842-.78 4.778 4.778 0 1 1-2.638-6.3 1 1 0 0 0 1.298-.56c.446-1.634-1.965-1.701-3.062-1.776a6.785 6.785 0 0 0-6.6 5.257H13.502a3.003 3.003 0 0 1-3-3v-7.932h27.4v2.672a1 1 0 0 0 2 0v-5.87a5.006 5.006 0 0 0-5-5H13.5a5.006 5.006 0 0 0-5 5c.007 1.424-.005 9.521 0 11.13a5.006 5.006 0 0 0 5 5h4.84V54a6.007 6.007 0 0 0 6 6H49.5a6.007 6.007 0 0 0 6-6V10a6.007 6.007 0 0 0-6-6z"
                                                    fill="currentColor" opacity="1" data-original="#000000">
                                                </path>
                                            </g>
                                        </svg></span>
                                    <h3 class="fs-5 mb-3">Cloud & DevOps Services</h3>
                                    <p class="mb-4">Scalable cloud-based applications, migrations, and automated
                                        deployment pipelines.</p>
                                </div><a
                                    class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact"><span class="icons"><i
                                            class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"> </i></span><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services-->

            <!-- ======= Testimonials =======-->
            <section class="section testimonials__v2" id="testimonials">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-5 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">Testimonials</span>
                            <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">What Our Clients Are Saying
                            </h2>
                            <p data-aos="fade-up" data-aos-delay="200">Real Stories of Success and Satisfaction from
                                Our Valued Clients</p>
                        </div>
                    </div>
                    <div class="row g-4" data-masonry="{&quot;percentPosition&quot;: true }">
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <div class="testimonial rounded-4 p-4">
                                <blockquote class="mb-3">
                                    &ldquo;
                                    ThinkSoTech transformed our business idea into a fully functional web application.
                                    Their team's expertise and dedication were exceptional throughout the project.
                                    &rdquo;
                                </blockquote>
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="assets/web/images/person-sq-2-min.jpg" alt="Client"></div>
                                    <div class="lh-base"><strong class="d-block">John Davis</strong><span>CEO at
                                            TechStart</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="testimonial rounded-4 p-4">
                                <blockquote class="mb-3">
                                    &ldquo;
                                    As a startup founder, I needed a reliable partner. ThinkSoTech delivered a beautiful
                                    e-commerce platform that exceeded my expectations. Highly recommended!
                                    &rdquo;
                                </blockquote>
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="assets/web/images/person-sq-1-min.jpg" alt="Client"></div>
                                    <div class="lh-base"><strong class="d-block">Emily Rahman</strong><span>Founder of
                                            StyleHub</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="testimonial rounded-4 p-4">
                                <blockquote class="mb-3">
                                    &ldquo;
                                    The custom software solution ThinkSoTech built for us has streamlined our operations
                                    significantly. Their technical skills and project management were outstanding. We
                                    couldn't be happier with the results!
                                    &rdquo;
                                </blockquote>
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="assets/web/images/person-sq-5-min.jpg" alt="Client"></div>
                                    <div class="lh-base"><strong class="d-block">Michael Ahmed</strong><span>CTO at
                                            DataFlow</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="testimonial rounded-4 p-4">
                                <blockquote class="mb-3">
                                    &ldquo;
                                    Working with ThinkSoTech was a pleasure. They understood our vision and delivered a
                                    mobile app that our users absolutely love. Professional and efficient!
                                    &rdquo;
                                </blockquote>
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="assets/web/images/person-sq-3-min.jpg" alt="Client"></div>
                                    <div class="lh-base"><strong class="d-block">Sarah Khan</strong><span>Product
                                            Manager</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="testimonial rounded-4 p-4">
                                <blockquote class="mb-3">
                                    &ldquo;
                                    The team's attention to detail and commitment to quality is impressive. Our website
                                    looks great and performs flawlessly across all devices.
                                    &rdquo;
                                </blockquote>
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="assets/web/images/person-sq-7-min.jpg" alt="Client"></div>
                                    <div class="lh-base"><strong class="d-block">James Islam</strong><span>Business
                                            Owner</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                            <div class="testimonial rounded-4 p-4">
                                <blockquote class="mb-3">
                                    &ldquo;
                                    ThinkSoTech's support doesn't end at launch. They've been there for us every step of
                                    the way, helping us grow and scale our platform.
                                    &rdquo;
                                </blockquote>
                                <div class="testimonial-author d-flex gap-3 align-items-center">
                                    <div class="author-img"><img class="rounded-circle img-fluid"
                                            src="assets/web/images/person-sq-8-min.jpg" alt="Client"></div>
                                    <div class="lh-base"><strong class="d-block">Laura
                                            Hossain</strong><span>Entrepreneur</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials-->

            <!-- ======= FAQ =======-->
            <section class="section faq__v2" id="faq">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-md-6 col-lg-7 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">FAQ</span>
                            <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Frequently Asked
                                Questions</h2>
                            <p data-aos="fade-up" data-aos-delay="100">Get answers to common questions about our
                                services and development process.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mx-auto" data-aos="fade-up" data-aos-delay="200">
                            <div class="faq-content">
                                <div class="accordion custom-accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne"> What services does
                                                ThinkSoTech offer? </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="panelsStayOpen-collapseOne">
                                            <div class="accordion-body">ThinkSoTech offers comprehensive software
                                                development services including custom software development, web and
                                                mobile app development, e-commerce solutions, UI/UX design, cloud
                                                services, and ongoing maintenance and support. We tailor our services to
                                                meet the unique needs of each client.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseFour"> Will my application be
                                                mobile-friendly? </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="panelsStayOpen-collapseFour">
                                            <div class="accordion-body">Absolutely! All our solutions are fully
                                                responsive and optimized for all devices - desktops, tablets, and
                                                smartphones. Mobile-first design is our priority, ensuring a great user
                                                experience across all platforms.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseFive"> Do you provide ongoing
                                                support after launch? </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="panelsStayOpen-collapseFive">
                                            <div class="accordion-body">Yes! We offer comprehensive maintenance
                                                packages including updates, security monitoring, bug fixes, and
                                                technical support to keep your solution running smoothly. Our
                                                relationship doesn't end at deployment.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End FAQ-->

            <!-- ======= Contact =======-->
            <section class="section contact__v2" id="contact">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-7 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                                data-aos="fade-up" data-aos-delay="0">Contact</span>
                            <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Get In Touch With Us
                            </h2>
                            <p data-aos="fade-up" data-aos-delay="100">Ready to start your project? Let's discuss how
                                we can bring your vision to life.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex gap-5 flex-column">
                                <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="0">
                                    <div class="icon d-block"><i class="bi bi-telephone"></i></div><span> <span
                                            class="d-block">Phone</span><strong>+880 1234-567890</strong></span>
                                </div>
                                <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon d-block"><i class="bi bi-send"></i></div><span> <span
                                            class="d-block">Email</span><strong>info@thinksotech.com</strong></span>
                                </div>
                                <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon d-block"><i class="bi bi-geo-alt"></i></div><span> <span
                                            class="d-block">Address</span>
                                        <address class="fw-bold">Dhaka, Bangladesh</address>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="300">
                                <form id="contactForm">
                                    <div class="row gap-3 mb-3">
                                        <div class="col-md-12">
                                            <label class="mb-2" for="name">Name</label>
                                            <input class="form-control" id="name" type="text" name="name"
                                                required="">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mb-2" for="email">Email</label>
                                            <input class="form-control" id="email" type="email" name="email"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="row gap-3 mb-3">
                                        <div class="col-md-12">
                                            <label class="mb-2" for="subject">Subject</label>
                                            <input class="form-control" id="subject" type="text"
                                                name="subject">
                                        </div>
                                    </div>
                                    <div class="row gap-3 gap-md-0 mb-3">
                                        <div class="col-md-12">
                                            <label class="mb-2" for="message">Message</label>
                                            <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary fw-semibold" type="submit">Send Message</button>
                                </form>
                                <div class="mt-3 d-none alert alert-success" id="successMessage">Message sent
                                    successfully!</div>
                                <div class="mt-3 d-none alert alert-danger" id="errorMessage">Message sending failed.
                                    Please try again later.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Contact-->

            <!-- ======= Footer =======-->
            <footer class="footer pt-5 pb-5">
                <div class="container">
                    <div class="row mb-5 pb-4">
                        <div class="col-md-7">
                            <h2 class="fs-5">Join our newsletter</h2>
                            <p>Stay updated with our latest projects, technologies, and offers—join our newsletter
                                today!</p>
                        </div>
                        <div class="col-md-5">
                            <form class="d-flex gap-2">
                                <input class="form-control" type="email" placeholder="Enter your email"
                                    required="">
                                <button class="btn btn-primary fs-6" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-between mb-5 g-xl-5">
                        <div class="col-md-4 mb-5 mb-lg-0">
                            <h3 class="mb-3">About ThinkSoTech</h3>
                            <p class="mb-4">ThinkSoTech is dedicated to transforming ideas into powerful digital
                                solutions. We combine technical expertise with creative innovation to deliver results
                                that exceed expectations.</p>
                        </div>
                        <div class="col-md-7">
                            <div class="row g-2">
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                    <h3 class="mb-3">Company</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#about">About Us</a></li>
                                        <li><a href="#services">Our Services</a></li>
                                        <li><a href="#how-it-works">Portfolio</a></li>
                                        <li><a href="#testimonials">Testimonials</a></li>
                                        <li><a href="#contact">Contact Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                    <h3 class="mb-3">Services</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#services">Web Development</a></li>
                                        <li><a href="#services">Mobile Apps</a></li>
                                        <li><a href="#services">Custom Software</a></li>
                                        <li><a href="#services">E-commerce</a></li>
                                        <li><a href="#services">UI/UX Design</a></li>
                                        <li><a href="#services">Cloud Services</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 quick-contact">
                                    <h3 class="mb-3">Contact</h3>
                                    <p class="d-flex mb-3"><i class="bi bi-geo-alt-fill me-3"></i><span>Dhaka,
                                            Bangladesh</span></p>
                                    <a class="d-flex mb-3" href="mailto:info@thinksotech.com"><i
                                            class="bi bi-envelope-fill me-3"></i><span>info@thinksotech.com</span></a>
                                    <a class="d-flex mb-3" href="tel:+8801234567890"><i
                                            class="bi bi-telephone-fill me-3"></i><span>+880 1234-567890</span></a>
                                    <a class="d-flex mb-3" href="https://thinksotech.com"><i
                                            class="bi bi-globe me-3"></i><span>thinksotech.com</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row credits pt-3">
                        <div class="col-xl-8 text-center text-xl-start mb-3 mb-xl-0">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> ThinkSoTech. All rights reserved. Think it. We solve it.
                        </div>
                        <div
                            class="col-xl-4 justify-content-start justify-content-xl-end quick-links d-flex flex-column flex-xl-row text-center text-xl-start gap-1">
                            <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer-->

        </main>
    </div>

    <!-- ======= Back to Top =======-->
    <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>
    <!-- End Back to top-->

    <!-- ======= Javascripts =======-->
    <script src="assets/web/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/web/vendors/gsap/gsap.min.js"></script>
    <script src="assets/web/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/web/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/web/vendors/glightbox/glightbox.min.js"></script>
    <script src="assets/web/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="assets/web/vendors/aos/aos.js"></script>
    <script src="assets/web/vendors/purecounter/purecounter.js"></script>
    <script src="assets/web/js/custom.js"></script>
    <script src="assets/web/js/send_email.js"></script>
    <!-- End JavaScripts-->
</body>

</html>

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
                    <img class="logo dark img-fluid" style="width: 104px;" src="assets/logo/ThinkSo-1.svg"
                        alt="ThinkSoTech Logo">
                    <img class="logo light img-fluid" style="width: 104px;" src="assets/logo/ThinkSo-1.svg"
                        alt="ThinkSoTech Logo">
                </a>
                <!-- End Logo-->

                <!-- Start offcanvas-->
                <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1"
                    aria-labelledby="fbs__net-navbarsLabel">

                    <div class="offcanvas-header">
                        <div class="offcanvas-header-logo">
                            <a class="logo-link" id="fbs__net-navbarsLabel" href="index.html">
                                <img class="logo dark img-fluid" style="width: 104px;" src="assets/logo/ThinkSo-1.svg"
                                    alt="ThinkSoTech Logo">
                                <img class="logo light img-fluid" style="width: 104px;" src="assets/logo/ThinkSo-1.svg"
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
                            <li class="nav-item"><a class="nav-link scroll-link" href="#services">Services</a></li>
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
                            href="#contact">Get in Touch</a>

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

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-img"><img class="img-card img-fluid" src="assets/web/images/hero1.png"
                                    alt="Image card" data-aos="fade-down" data-aos-delay="600"><img
                                    class="img-main img-fluid rounded-4" src="assets/web/images/hero2.jpg"
                                    alt="Hero Image" data-aos="fade-in" data-aos-delay="500"></div>
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
                                    src="assets/web/images/about.jpg" alt="About ThinkSoTech" data-aos="fade-up"
                                    data-aos-delay="0">
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
                        <div class="col-md-8 mx-auto text-center">
                            <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Our
                                Services</span>
                            <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Empowering Digital Innovation
                                Through Cutting-Edge Services</h2>
                        </div>
                    </div>
                    <div class="row g-4">
                        <!-- Custom Software Development -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <polyline points="16 18 22 12 16 6"></polyline>
                                            <polyline points="8 6 2 12 8 18"></polyline>
                                        </svg>
                                    </span>
                                    <h3 class="fs-5 mb-3">Custom Software Development</h3>
                                    <p class="mb-4">We design and build tailored software solutions to meet your
                                        organization's unique needs. Our services include web-based systems, ERP/CRM/MIS
                                        development, government and NGO data systems, analytics dashboards, and API
                                        integration with automation.</p>
                                </div>
                                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact">
                                    <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"></i></span>
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>

                        <!-- Mobile App Development -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <rect x="5" y="2" width="14" height="20" rx="2"
                                                ry="2"></rect>
                                            <line x1="12" y1="18" x2="12.01" y2="18">
                                            </line>
                                        </svg>
                                    </span>
                                    <h3 class="fs-5 mb-3">Mobile App Development</h3>
                                    <p class="mb-4">We create fast, secure, and scalable mobile applications for
                                        Android (Kotlin/Flutter), iOS (Swift/Flutter), and cross-platform (React
                                        Native/Flutter). From business apps to e-commerce, health & fitness, LMS, and
                                        AgroTech solutions.</p>
                                </div>
                                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact">
                                    <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"></i></span>
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>

                        <!-- AI & Machine Learning Solutions -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                            </path>
                                            <polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline>
                                            <polyline points="7.5 19.79 7.5 14.6 3 12"></polyline>
                                            <polyline points="21 12 16.5 14.6 16.5 19.79"></polyline>
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                            <line x1="12" y1="22.08" x2="12" y2="12">
                                            </line>
                                        </svg>
                                    </span>
                                    <h3 class="fs-5 mb-3">AI & Machine Learning Solutions</h3>
                                    <p class="mb-4">We leverage AI to help businesses make data-driven decisions
                                        through predictive analytics, recommendation engines, chatbots, virtual
                                        assistants, image recognition, OCR, natural language processing, and intelligent
                                        dashboards.</p>
                                </div>
                                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact">
                                    <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"></i></span>
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>

                        <!-- HealthTech Solutions -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>
                                    </span>
                                    <h3 class="fs-5 mb-3">HealthTech Solutions</h3>
                                    <p class="mb-4">Smart, compliant, and secure healthcare solutions including
                                        Electronic Medical Record (EMR) systems, telemedicine platforms, appointment
                                        scheduling, health monitoring dashboards, and patient engagement apps with
                                        medication reminders.</p>
                                </div>
                                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact">
                                    <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"></i></span>
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>

                        <!-- GovTech & Enterprise Solutions -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </span>
                                    <h3 class="fs-5 mb-3">GovTech & Enterprise Solutions</h3>
                                    <p class="mb-4">Modernizing public services and enterprise operations with
                                        citizen service portals, digital registration systems, data collection
                                        platforms, M&E dashboards, and e-governance workflow automation for efficient
                                        service delivery.</p>
                                </div>
                                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact">
                                    <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"></i></span>
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>

                        <!-- Learning Management Systems -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                        </svg>
                                    </span>
                                    <h3 class="fs-5 mb-3">Learning Management Systems (LMS)</h3>
                                    <p class="mb-4">Building smart, user-friendly e-learning experiences with course
                                        creation and management, progress tracking and reporting, interactive exams with
                                        automated grading, and AI-based personalized learning paths.</p>
                                </div>
                                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact">
                                    <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"></i></span>
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>

                        <!-- AgroTech & Smart Farming Solutions -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                            <path d="M2 12h20"></path>
                                        </svg>
                                    </span>
                                    <h3 class="fs-5 mb-3">AgroTech & Smart Farming Solutions</h3>
                                    <p class="mb-4">Bringing innovation to agriculture and rural development with
                                        crop monitoring apps, weather and soil data analytics, supply chain and farmer
                                        marketplace platforms, and IoT-based field management systems.</p>
                                </div>
                                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact">
                                    <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"></i></span>
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>

                        <!-- UI/UX Design & Research -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                            <path d="M2 2l7.586 7.586"></path>
                                            <circle cx="11" cy="11" r="2"></circle>
                                        </svg>
                                    </span>
                                    <h3 class="fs-5 mb-3">UI/UX Design & Research</h3>
                                    <p class="mb-4">Designing intuitive, inclusive, and research-backed experiences
                                        through user research, persona development, wireframes, prototypes, visual
                                        design systems, usability testing, and comprehensive design documentation.</p>
                                </div>
                                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact">
                                    <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"></i></span>
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>

                        <!-- System Audit & Consultancy -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="800">
                            <div
                                class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                                <div>
                                    <span class="icon mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13">
                                            </line>
                                            <line x1="16" y1="17" x2="8" y2="17">
                                            </line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </span>
                                    <h3 class="fs-5 mb-3">System Audit & Consultancy</h3>
                                    <p class="mb-4">We assess, analyze, and guide organizations to strengthen their
                                        digital systems through UI/UX audits, security and performance assessments,
                                        technology architecture reviews, and business process optimization.</p>
                                </div>
                                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none"
                                    href="#contact">
                                    <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                                            class="icon-2 bi bi-arrow-right-short"></i></span>
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <style>
                .services__v3 .icon svg {
                    width: 50px;
                    height: 50px;
                    color: inherit;
                }

                .service-card {
                    transition: all 0.3s ease;
                }

                .service-card:hover {
                    transform: translateY(-5px);
                }

                .service-card .icon {
                    display: inline-block;
                    width: 70px;
                    height: 70px;
                    border-radius: 12px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .special-link {
                    font-weight: 500;
                    transition: all 0.3s ease;
                }

                .special-link:hover {
                    gap: 0.75rem !important;
                }
            </style>
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

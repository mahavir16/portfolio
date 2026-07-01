<?php
require_once 'includes/config.php';

$pageTitle = "Home | " . SITE_NAME;
$pageDescription = "Official Portfolio of Mahavir Jain - Senior Software Engineer, ERP Specialist & Founder of Navkarsoft.";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- =========================
 HERO SECTION
========================== -->

<section class="hero">

    <div class="container">

        <div class="row align-items-center min-vh-100">

            <!-- LEFT -->

            <div class="col-lg-7">

                <span class="hero-badge">

                    👋 Welcome to my Portfolio

                </span>

                <h1 class="hero-title mt-4">

                    Hi,

                    I'm

                    <span>Mahavir Jain</span>

                </h1>

                <h2 class="hero-subtitle">

                    Senior Software Engineer

                    <br>

                    ERP Specialist

                    <br>

                    Founder • Navkarsoft

                </h2>

                <p class="hero-description">

                    I build powerful ERP solutions, custom software,
                    business automation systems, AI-powered applications,
                    and scalable web platforms using Core PHP,
                    MySQL, JavaScript and modern technologies.

                </p>

                <div class="hero-buttons mt-5">

                    <a href="portfolio.php"
                       class="btn btn-primary btn-lg">

                        View Portfolio

                    </a>

                    <a href="resume.php"
                       class="btn btn-outline-light btn-lg ms-3">

                        Download Resume

                    </a>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-lg-5 text-center">

                <div class="hero-image">

                    <img src="assets/img/profile/profile.png"
                         class="img-fluid"
                         alt="Mahavir Jain">

                    <div class="experience-card">

                        <h3>15+</h3>

                        <span>Years Experience</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!--=========================================
    TECH STACK
==========================================-->

<section class="tech-stack py-5">

    <div class="container">

        <div class="section-title text-center mb-5">

            <span>TECHNOLOGIES</span>

            <h2>Technologies I Work With</h2>

            <p>
                Modern technologies used for scalable ERP,
                Web Applications and Business Automation.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-3 col-6">

                <div class="tech-card">

                    <i class="fab fa-php"></i>

                    <h5>Core PHP</h5>

                </div>

            </div>

            <div class="col-md-3 col-6">

                <div class="tech-card">

                    <i class="fas fa-database"></i>

                    <h5>MySQL</h5>

                </div>

            </div>

            <div class="col-md-3 col-6">

                <div class="tech-card">

                    <i class="fab fa-js-square"></i>

                    <h5>JavaScript</h5>

                </div>

            </div>

            <div class="col-md-3 col-6">

                <div class="tech-card">

                    <i class="fab fa-bootstrap"></i>

                    <h5>Bootstrap</h5>

                </div>

            </div>

            <div class="col-md-3 col-6">

                <div class="tech-card">

                    <i class="fab fa-git-alt"></i>

                    <h5>Git</h5>

                </div>

            </div>

            <div class="col-md-3 col-6">

                <div class="tech-card">

                    <i class="fab fa-github"></i>

                    <h5>GitHub</h5>

                </div>

            </div>

            <div class="col-md-3 col-6">

                <div class="tech-card">

                    <i class="fas fa-server"></i>

                    <h5>REST API</h5>

                </div>

            </div>

            <div class="col-md-3 col-6">

                <div class="tech-card">

                    <i class="fas fa-robot"></i>

                    <h5>Artificial Intelligence</h5>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    EXPERIENCE
==========================================-->

<section class="experience-section py-5">

    <div class="container">

        <div class="row text-center">

            <div class="col-lg-3 col-6">

                <div class="counter-box">

                    <h2>15+</h2>

                    <p>Years Experience</p>

                </div>

            </div>

            <div class="col-lg-3 col-6">

                <div class="counter-box">

                    <h2>250+</h2>

                    <p>Projects</p>

                </div>

            </div>

            <div class="col-lg-3 col-6">

                <div class="counter-box">

                    <h2>100+</h2>

                    <p>Clients</p>

                </div>

            </div>

            <div class="col-lg-3 col-6">

                <div class="counter-box">

                    <h2>30+</h2>

                    <p>ERP Modules</p>

                </div>

            </div>

        </div>

    </div>

</section>
<!--=========================================
    FEATURED PROJECTS
==========================================-->

<section class="featured-projects py-5">

    <div class="container">

        <div class="section-title text-center mb-5">

            <span>PORTFOLIO</span>

            <h2>Featured Projects</h2>

            <p>
                Some of my professional software solutions and ERP systems.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="project-card">

                    <img src="assets/img/projects/maruti.jpg"
                         class="img-fluid"
                         alt="Maruti ERP">

                    <div class="project-content">

                        <h4>Manufacturing ERP</h4>

                        <p>

                            Complete Manufacturing ERP including
                            Inventory, Production,
                            Sales, Purchase,
                            Barcode and Reports.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="project-card">

                    <img src="assets/img/projects/lootmart.jpg"
                         class="img-fluid"
                         alt="LootMart">

                    <div class="project-content">

                        <h4>LootMart Retail ERP</h4>

                        <p>

                            Garment Inventory,
                            Billing,
                            Customer Management,
                            GST and Stock Control.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="project-card">

                    <img src="assets/img/projects/dhaniram.jpg"
                         class="img-fluid"
                         alt="Dhaniram Agro">

                    <div class="project-content">

                        <h4>Dhaniram Agro</h4>

                        <p>

                            Corporate Website,
                            Product Catalogue,
                            Contact System
                            and SEO Optimization.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    WHY HIRE ME
==========================================-->

<section class="why-me py-5">

    <div class="container">

        <div class="section-title text-center mb-5">

            <span>WHY CHOOSE ME</span>

            <h2>Why Hire Me?</h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="feature-card">

                    <i class="fas fa-code"></i>

                    <h4>Clean Development</h4>

                    <p>

                        Scalable, secure and
                        maintainable code following
                        professional standards.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-card">

                    <i class="fas fa-database"></i>

                    <h4>ERP Expertise</h4>

                    <p>

                        15+ years of experience in
                        Manufacturing,
                        Inventory and
                        Business Automation.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="feature-card">

                    <i class="fas fa-headset"></i>

                    <h4>Long Term Support</h4>

                    <p>

                        Continuous maintenance,
                        upgrades and technical
                        support for every project.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!--=========================================
    CALL TO ACTION
==========================================-->

<section class="cta-section">

    <div class="container">

        <div class="cta-box text-center">

            <h2>

                Let's Build Something Amazing Together

            </h2>

            <p>

                Looking for a Professional Software Developer,
                ERP Expert or Business Automation Consultant?

            </p>

            <a href="contact.php"
               class="btn btn-primary btn-lg">

                Hire Me

            </a>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>
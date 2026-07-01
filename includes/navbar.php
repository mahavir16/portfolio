<?php

$currentPage = basename($_SERVER['PHP_SELF']);

?>

<!--=========================================
    NAVBAR
==========================================-->

<nav class="navbar navbar-expand-lg fixed-top custom-navbar">

    <div class="container">

        <!-- Logo -->

        <a class="navbar-brand" href="index.php">

            <span class="logo-icon">MJ</span>

            <div class="logo-text">

                <strong>Mahavir Jain</strong>

                <small>Founder • Navkarsoft</small>

            </div>

        </a>

        <!-- Mobile Toggle -->

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar">

            <i class="fas fa-bars"></i>

        </button>

        <div class="collapse navbar-collapse"
             id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">

                    <a class="nav-link <?= ($currentPage=='index.php')?'active':''; ?>"
                       href="index.php">

                        Home

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link <?= ($currentPage=='about.php')?'active':''; ?>"
                       href="about.php">

                        About

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link <?= ($currentPage=='services.php')?'active':''; ?>"
                       href="services.php">

                        Services

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link <?= ($currentPage=='portfolio.php')?'active':''; ?>"
                       href="portfolio.php">

                        Portfolio

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link <?= ($currentPage=='resume.php')?'active':''; ?>"
                       href="resume.php">

                        Resume

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link <?= ($currentPage=='contact.php')?'active':''; ?>"
                       href="contact.php">

                        Contact

                    </a>

                </li>

                <!-- GitHub -->

                <li class="nav-item ms-lg-3">

                    <a href="<?= GITHUB_URL; ?>"
                       target="_blank"
                       class="btn btn-outline-light btn-sm">

                        <i class="fab fa-github"></i>

                        GitHub

                    </a>

                </li>

                <!-- Hire Me -->

                <li class="nav-item ms-lg-2">

                    <a href="contact.php"
                       class="btn btn-primary btn-sm">

                        Hire Me

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>
<!--=========================================
    FOOTER START
==========================================-->

<footer class="footer">

    <div class="container">

        <div class="row gy-5">

            <!-- About -->

            <div class="col-lg-4">

                <div class="footer-brand">

                    <h3><?= SITE_NAME ?></h3>

                    <p>
                        Senior Software Engineer with 15+ years of experience in
                        ERP Development, Core PHP, MySQL, Business Automation,
                        AI Integration and Custom Software Solutions.
                    </p>

                </div>

            </div>

            <!-- Quick Links -->

            <div class="col-lg-2">

                <h5>Quick Links</h5>

                <ul class="footer-links">

                    <li><a href="index.php">Home</a></li>

                    <li><a href="about.php">About</a></li>

                    <li><a href="services.php">Services</a></li>

                    <li><a href="portfolio.php">Portfolio</a></li>

                    <li><a href="resume.php">Resume</a></li>

                    <li><a href="contact.php">Contact</a></li>

                </ul>

            </div>

            <!-- Services -->

            <div class="col-lg-3">

                <h5>Services</h5>

                <ul class="footer-links">

                    <li>ERP Development</li>

                    <li>Website Development</li>

                    <li>Business Automation</li>

                    <li>AI Integration</li>

                    <li>API Development</li>

                    <li>Software Consulting</li>

                </ul>

            </div>

            <!-- Contact -->

            <div class="col-lg-3">

                <h5>Contact</h5>

                <ul class="footer-contact">

                    <li>

                        <i class="fas fa-envelope"></i>

                        <?= SITE_EMAIL ?>

                    </li>

                    <li>

                        <i class="fas fa-phone"></i>

                        <?= SITE_PHONE ?>

                    </li>

                    <li>

                        <i class="fas fa-location-dot"></i>

                        <?= SITE_LOCATION ?>

                    </li>

                </ul>

                <div class="social-links mt-4">

                    <a href="<?= GITHUB_URL ?>" target="_blank">

                        <i class="fab fa-github"></i>

                    </a>

                    <a href="<?= LINKEDIN_URL ?>" target="_blank">

                        <i class="fab fa-linkedin"></i>

                    </a>

                    <a href="<?= FACEBOOK_URL ?>" target="_blank">

                        <i class="fab fa-facebook"></i>

                    </a>

                    <a href="<?= INSTAGRAM_URL ?>" target="_blank">

                        <i class="fab fa-instagram"></i>

                    </a>

                </div>

            </div>

        </div>

        <hr>

        <div class="footer-bottom">

            <p>

                © <?= CURRENT_YEAR ?>

                <?= SITE_NAME ?>

                | All Rights Reserved.

            </p>

            <p>

                Designed & Developed with ❤️ using PHP,
                Bootstrap & JavaScript.

            </p>

        </div>

    </div>

</footer>

<!--=========================================
    JS
==========================================-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>

AOS.init({

duration:800,

once:true

});

</script>

<script src="<?= JS_PATH ?>app.js"></script>

</body>

</html>
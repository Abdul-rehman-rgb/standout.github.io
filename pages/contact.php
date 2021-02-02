<?php include 'modules/head.php' ?>
    <title>Contact	StandOut-Studio</title>
</head>

<body>

<?php include 'modules/header.php' ?>

<?php include 'modules/preloader.php' ?>

<?php include 'modules/cursor.php' ?>

    <!-- ==================== Start header ==================== -->

    <header class="works-header fixed-slider hfixd valign">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 static">
                    <div class="capt mt-50">
                        <div class="parlx">
                            <h2 class="custom-font"><span>Let's</span>Talk About Your project.</h2>
                            <p>Feel free to ask me any question or let’s do to talk about
                                our future collaboration.</p>
                        </div>

                        <div class="bactxt custom-font valign">
                            <span class="full-width">Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End header ==================== -->


    <!-- ==================== Start main-content ==================== -->

    <div class="main-content">

        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="extra-title mb-50">Get In Touch.</h4>

                            <form id="contact-form" method="post" action="contact.php">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required">
                                    </div>

                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                            required="required"></textarea>
                                    </div>

                                    <button type="submit" class="btn-curve btn-lit"><span>Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <div class="cont-info">
                            <h4 class="extra-title mb-50">Contact Info.</h4>
                            <h3 class="custom-font wow" data-splitting>Let's Talk.
                            </h3>
                            <div class="item mb-40">
                                <h5><a href="#0">discuss@standout-studios.com</a></h5>
                                <h5>(+92) 311 123 6513</h5>
                            </div>
                            <h3 class="custom-font wow" data-splitting>Visit Us.
                            </h3>
                            <div class="item">
                                <h6>Sanober Twins Tower, Scheme 33,
                                    <br>Karachi, Pakistan.</h6>
                            </div>
                            <div class="social mt-50">
                                <a href="https://www.facebook.com/StandOutStudiosOfficial" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/stand-out-studios/" class="icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->


        <!-- ==================== Start Map ==================== -->

        <div class="map" id="ieatmaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.5248012266898!2d67.16131751447935!3d24.94825334787852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3386d12b7aa7d%3A0x95a5723552cc1fcf!2sSanober%20Twin%20Towers!5e0!3m2!1sen!2s!4v1611945148991!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <!-- ==================== End Map ==================== -->


        <!-- ==================== Start Footer ==================== -->

        <footer class="footer-half sub-bg">
            <div class="container">
                <div class="copyrights text-center mt-0">
                    <p>© Copyright 2021. All Rights Reserved by: <a href="/">Stand Out Studios</a>.</p>
                </div>
            </div>
        </footer>

        <!-- ==================== End Footer ==================== -->


    </div>

    <!-- ==================== End main-content ==================== -->

    <!-- jQuery -->
    <script src="/assets/js/jquery-3.0.0.min.js"></script>
    <script src="/assets/js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="/assets/js/plugins.js"></script>


    <!-- custom scripts -->
    <script src="/assets/js/scripts.js"></script>

<?php include 'modules/foot.php' ?>
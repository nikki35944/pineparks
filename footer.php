<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pineparks
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6"><img src="<?= get_template_directory_uri() ?>/assets/images/logo-footer.png" alt=""></div>
                <div class="col-lg-3 col-6">

                </div>
                <div class="col-lg-3 col-6">
                    <p class="footer-menu-heading">Top destinations</p>
                    <ul class="footer-menu">
                        <li><a href="#">Serengeti National Park</a></li>
                        <li><a href="#">Kilimanjaro</a></li>
                        <li><a href="#">Zanzibar</a></li>
                        <li><a href="#">Ngorongoro Conservation Area</a></li>
                        <li><a href="#">Lake Manyara</a></li>
                        <li><a href="#">Lake Natron</a></li>
                        <li><a href="#">Arusha National Park</a></li>
                        <li><a href="#">Selous Game Reserve</a></li>
                        <li><a href="#">Tarangire National Park</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 d-flex flex-column justify-content-between">
                    <div class="group-items">
                        <p class="footer-menu-heading">Travel information</p>
                        <ul>
                            <li><a href="#">About Tanzania Safari</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Tanzania traveller reviews</a></li>
                        </ul>
                    </div>

                    <a href="#" class="btn btn-white hide-md align-self-start">Book a tour</a>

                </div>
            </div>
        </div>

        <div class="container-fluid">
            <a href="#" class="btn btn-white d-none show-md">Book a tour</a>
        </div>

        <div class="container-fluid copyright">
            <div class="row">
                <div class="col-6">
                    <p class="small-text text-muted">
                        © 2022 Tanzania   | <a href="#">Terms and conditions</a>   | <a href="#">Privacy policy</a>
                    </p>
                </div>
                <div class="col-6">
                    <div class="social-links d-flex justify-content-md-end">
                        <a href="#"><img src="<?= get_template_directory_uri()?>/assets/icons/insta.png" alt=""></a>
                        <a href="#"><img src="<?= get_template_directory_uri()?>/assets/icons/fb.png" alt=""></a>
                        <a href="#"><img src="<?= get_template_directory_uri()?>/assets/icons/twitter.png" alt=""></a>
                        <a href="#"><img src="<?= get_template_directory_uri()?>/assets/icons/pinterest.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->

</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>

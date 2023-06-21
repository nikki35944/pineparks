<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pineparks
 */

get_header();
?>

<div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= get_template_directory_uri() ?>/assets/images/slider-1.jpg" class="d-block w-100">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-white">Tanzania: land of safaris, nature, culture and wildlife.</h2>
                        <p class="text-white">
                            Tanzania: land of safaris, nature, culture and wildlife.
                        </p>
                        <a href="#" class="btn btn-white mt-30 mb-30">Book a tour</a>
                        <ul>
                            <li>100% specialized in Tanzania</li>
                            <li>World class safari guides</li>
                            <li>Private safaris</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= get_template_directory_uri() ?>/assets/images/slider-2.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="<?= get_template_directory_uri() ?>/assets/images/slider-3.jpg" class="d-block w-100">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<?php
get_footer();
?>

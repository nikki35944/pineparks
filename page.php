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

<section class="main-slider">
    <div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= get_template_directory_uri() ?>/assets/images/slider-1.jpg" class="d-block w-100">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="items-container">
                                <h2 class="text-white">Tanzania: land of safaris, nature, culture and wildlife.</h2>
                                <p class="text-white">
                                    A Tanzania vacation is the ultimate once-in-a-lifetime holiday! Tanzania is a top safari destination and has so much to offer.
                                </p>
                                <a href="#" class="btn btn-white">Book a tour</a>
                                <ul>
                                    <li>100% specialized in Tanzania</li>
                                    <li>World class safari guides</li>
                                    <li>Private safaris</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/slider-2.jpg" class="d-block w-100">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="items-container">
                                <h2 class="text-white">Tanzania: land of safaris, nature, culture and wildlife.</h2>
                                <p class="text-white">
                                    A Tanzania vacation is the ultimate once-in-a-lifetime holiday! Tanzania is a top safari destination and has so much to offer.
                                </p>
                                <a href="#" class="btn btn-white">Book a tour</a>
                                <ul>
                                    <li>100% specialized in Tanzania</li>
                                    <li>World class safari guides</li>
                                    <li>Private safaris</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= get_template_directory_uri() ?>/assets/images/slider-3.jpg" class="d-block w-100">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="items-container">
                                <h2 class="text-white">Tanzania: land of safaris, nature, culture and wildlife.</h2>
                                <p class="text-white">
                                    A Tanzania vacation is the ultimate once-in-a-lifetime holiday! Tanzania is a top safari destination and has so much to offer.
                                </p>
                                <a href="#" class="btn btn-white">Book a tour</a>
                                <ul>
                                    <li>100% specialized in Tanzania</li>
                                    <li>World class safari guides</li>
                                    <li>Private safaris</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="controls-container">
            <div class="carousel-indicators display-xl">
                <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="group-controls">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>



<section class="text-image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 center-content order-md-2">
                <div class="group-items">
                    <p class="text-muted">Serengeti, the ultimate wildlife experience</p>
                    <h3>1 day safari Serengeti national park</h3>
                    <div class="d-flex flex-row">
                        <div class="d-flex flex-column col-6">
                            <p class="text-big">12 000</p>
                            <p>square miles</p>
                        </div>
                        <div class="d-flex flex-column col-6">
                            <p class="text-big">30%</p>
                            <p class="text-small">of Tanzania is National Parks</p>
                        </div>
                    </div>
                    <div class="calculator">
                        <p>Vacation calculator</p>
                        <div class="d-flex flex-row-sm">
                            <input type="text">
                            <select name="operations" id="operations-select">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                            <input type="text">
                        </div>
                        <p class="mt-15">Result: <span class="result"></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="<?= get_template_directory_uri() ?>/assets/images/pair-adult-lions-1.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
<?php
/*
 * Template Name: Top destinations
 */
get_header();
?>

<section class="accordion">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <p class="text-muted">Interesting information</p>
                <h3>Tips for the best experience of Tanzania</h3>
            </div>
            <div class="col-md-7">
                <div class="accordion" id="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                When to visit Tanzania?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                Going on safari in Africa is an experience that you certainly won’t ever forget, and epic safari photography makes sure that you are able to share the incredible experience with family and friends. In fact, the photos that you take while on safari are one of the best ways to share this experience with the ones you love.  For that reason, you will want to make sure you are able to take the best pictures you possibly can.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Five Simple Tips to Improve Your Safari Photographs
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                Going on safari in Africa is an experience that you certainly won’t ever forget, and epic safari photography makes sure that you are able to share the incredible experience with family and friends. In fact, the photos that you take while on safari are one of the best ways to share this experience with the ones you love.  For that reason, you will want to make sure you are able to take the best pictures you possibly can.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Tanzania weather
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                Going on safari in Africa is an experience that you certainly won’t ever forget, and epic safari photography makes sure that you are able to share the incredible experience with family and friends. In fact, the photos that you take while on safari are one of the best ways to share this experience with the ones you love.  For that reason, you will want to make sure you are able to take the best pictures you possibly can.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Tanzania visa
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                Going on safari in Africa is an experience that you certainly won’t ever forget, and epic safari photography makes sure that you are able to share the incredible experience with family and friends. In fact, the photos that you take while on safari are one of the best ways to share this experience with the ones you love.  For that reason, you will want to make sure you are able to take the best pictures you possibly can.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                TOP destinations
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                Going on safari in Africa is an experience that you certainly won’t ever forget, and epic safari photography makes sure that you are able to share the incredible experience with family and friends. In fact, the photos that you take while on safari are one of the best ways to share this experience with the ones you love.  For that reason, you will want to make sure you are able to take the best pictures you possibly can.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="<?= get_template_directory_uri() ?>/assets/images/pair-adult-lions-1.jpg" alt="">
            </div>
            <div class="col-md-6 center-content order-md-1">
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
                            <form id="form_calculator" class="d-flex flex-row-sm">
                                <input type="text" name="first_number">
                                <select name="operations">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                                <input type="text" name="second_number">
                            </form>
                        <p class="mt-15">Result: <span id="result"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

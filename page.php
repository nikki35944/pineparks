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

<?php if(have_rows('sections')): while(have_rows('sections')): the_row(); ?>

    <?php if( get_row_layout() == 'slider' ): ?>
        <section class="main-slider">
            <div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
                <div class="carousel-inner">
                <?php $i = 0; while(have_rows('slider_block')): the_row(); $i++;?>
                    <div class="carousel-item <?php if ($i == 1) echo 'active'; ?>">
                        <img src="<?= get_sub_field('slider-image'); ?>" class="d-block w-100">
                        <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="items-container">
                                            <h2 class="text-white"><?= get_sub_field('slider_heading_2_text'); ?></h2>
                                            <p class="text-white">
                                                <?= get_sub_field('slide_description'); ?>
                                            </p>
                                            <a href="<?= get_sub_field('slider_button_link'); ?>" class="btn btn-white">Book a tour</a>
                                            <ul>
                                                <?php while(have_rows('unordered-list')): the_row(); ?>
                                                    <li><?= get_sub_field('slider_ul_text_item') ?></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
                <div class="controls-container">
                    <div class="carousel-indicators display-xl">
                    <?php $i = 1; ?>
                        <span>0<?= $i ?></span>
                    <?php while(have_rows('slider_block')): the_row(); ?>
                        <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="<?= $i-1; ?>" <?php if ($i == 1) echo 'class="active" aria-current="true"' ?> aria-label="Slide <?= $i; ?>"></button>
                    <?php $i++; endwhile; ?>
                        <span>0<?= $i-1; ?></span>
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
    <?php endif; ?>

    <?php if( get_row_layout() == 'text_image_block' ): ?>
        <section class="text-image">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 center-content <?php if(!get_sub_field('change_columns_direction')) echo 'order-md-2'; ?>">
                    <?php while( have_rows('grouped_items_column') ): the_row(); ?>
                        <div class="group-items">
                            <p class="text-muted"><?= get_sub_field('description_text_on_top'); ?></p>
                            <h3><?= get_sub_field('text_image_heading'); ?></h3>
                            <div class="d-flex flex-row">
                                <?php while( have_rows('benefits_group_block_one') ): the_row(); ?>
                                <div class="d-flex flex-column col-6">
                                    <p class="text-big"><?= get_sub_field('benefits_1_number') ?></p>
                                    <p><?= get_sub_field('benefits_1_text'); ?></p>
                                </div>
                                <?php endwhile; ?>
                                <?php while( have_rows('benefits_group_block_two') ): the_row(); ?>
                                <div class="d-flex flex-column col-6">
                                    <p class="text-big"><?= get_sub_field('benefits_2_number') ?></p>
                                    <p class="text-small"><?= get_sub_field('benefits_2_text'); ?></p>
                                </div>
                                <?php endwhile; ?>
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
                    <?php endwhile; ?>
                    </div>
                    <div class="col-md-6 order-md-<?php if(!get_sub_field('change_columns_direction')) echo 'order-md-1'; ?>">
                        <img src="<?= get_sub_field('big_image'); ?>">
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if( get_row_layout() == 'accordion_block' ): ?>
        <section class="accordion">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <?php while( have_rows('accordion_column_left') ): the_row(); ?>
                        <p class="text-muted"><?= get_sub_field('accordion_left_col_description'); ?></p>
                        <h3><?= get_sub_field('accordion_left_col_heading'); ?></h3>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-md-7">
                        <div class="accordion" id="accordion">
                            <?php $i=0; while( have_rows('accordion_items') ): the_row(); $i++; ?>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?=$i;?>">
                                    <button class="accordion-button <?php if ($i != 1) echo 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$i;?>" <?php echo ($i != 1) ? 'aria-expanded="false"' : 'aria-expanded="true"'; ?>  aria-controls="collapse<?=$i;?>">
                                        <?= get_sub_field('accordion_item_heading'); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?=$i;?>" class="accordion-collapse collapse <?php if ($i == 1) echo 'show'; ?>" aria-labelledby="heading<?=$i;?>" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <?= get_sub_field('accordion_item_description'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php endwhile; endif; ?>

<?php
get_footer();
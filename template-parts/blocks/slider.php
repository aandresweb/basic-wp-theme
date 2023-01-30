
<div class="banner fade-in-right" data-aos="fade-down">
    <!-- Slider -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php if(get_field('slider_images')): ?>

                <?php foreach(get_field('slider_images') as $slide): ?>

                    <div class="banner-slider-slide swiper-slide">
                        <img
                            class="banner-slider-slide__img"
                            src="<?php echo $slide['slide_image'] ?>"
                        />
                    </div>

                <?php endforeach ?>

            <?php endif ?>
        </div>

        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="banner-slider-prev">
            <i class="bx bxs-chevron-left"></i>
        </div>
        <div class="banner-slider-next">
            <i class="bx bxs-chevron-right"></i>
        </div>
    </div>
    <!-- End slider -->
    <!-- Slider Responsive-->
    <div class="swiper responsive">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php if(get_field('slider_images_responsive')): ?>

                <?php foreach(get_field('slider_images_responsive') as $slide): ?>

                    <div class="banner-slider-slide swiper-slide">
                        <img
                            class="banner-slider-slide__img"
                            src="<?php echo $slide['slide_image'] ?>"
                        />
                    </div>

                <?php endforeach ?>

            <?php endif ?>
        </div>

        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="banner-slider-prev">
            <i class="bx bxs-chevron-left"></i>
        </div>
        <div class="banner-slider-next">
            <i class="bx bxs-chevron-right"></i>
        </div>
    </div>
    <!-- End slider -->
</div>

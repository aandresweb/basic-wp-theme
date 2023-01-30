<div class="section space-x bg-grey space-left" data-aos="fade-down" data-aos-duration="1000">
    <div class="wrapper">
        <h3 class="title mb-xlarge">
            Clientes
        </h3>
        <!-- Slider -->
        <div class="swiper customers-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
                <!-- Slides -->
                <?php if(get_field('slides')): ?>

                    <?php foreach(get_field('slides') as $slides): ?>

                        <div class="swiper-slide banner-slider-slide">
                            <div class="customers">
                                <?php foreach($slides['images'] as $slide): ?>
                                    <div class="customer-item">
                                        <img src="<?php echo $slide['image'] ?>" alt="">
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                    <?php endforeach ?>

                <?php endif ?>
            </div>

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
</div>
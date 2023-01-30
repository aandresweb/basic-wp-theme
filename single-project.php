<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <div class="portfolio-item-banner">
        <img src="<?php echo get_field('banner') ?>" alt="">
    </div>
    <div class="portfolio-item-banner responsive">
        <img src="<?php echo get_field('banner_responsive') ?>" alt="">
    </div>
    <div class="portoflio-item-intro bg-grey space-x">
        <div class="wrapper">
            <div class="portofolio-item-title mb-large">
                <h3 class="title grey text-center light xlarge">Morochas Lúcuma</h3>
                <p class="text-center">- <?php echo get_field('subtitle') ?> -</p>
            </div>
            <p class="text-center">
                <?php echo get_field('content') ?>
            </p>
        </div>
    </div>

    <?php if(get_field('project_template') === 'project_template_1'): ?>
        <div class="portfolio-item-media space-x">
            <div class="wrapper portfolio-wrapper">
                <div class="portfolio-item-media-wrapper">
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section')['image_1'] ?>"/>
                    </div>
                    <div class="portfolio-item-gif-1">
                    <img src="<?php echo get_field('gifs_section')['gif_1'] ?>" alt="">
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section')['image_2'] ?>" alt="">
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('gifs_section')['gif_2'] ?>" alt="">
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section')['image_3'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <?php if(get_field('project_template') === 'project_template_2'): ?>
        <div class="portfolio-item-media portfolio-2 space-x space-top-special">
            <div class="portfolio-section-1 wrapper">
                <div class="portfolio-item-media-wrapper">
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_1')['image_1'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_1')['image_2'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_1')['image_colors'] ?>"/>
                    </div>
                </div>
            </div>
            <div class="portfolio-section-1 responsive wrapper">
                <div class="portfolio-item-media-wrapper">
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_1_responsive')['image_1'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_1_responsive')['image_2'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_1_responsive')['image_colors'] ?>"/>
                    </div>
                </div>
            </div>
            <div class="portfolio-section-2 wrapper-full" style="background-color: <?php echo get_field('images_section_2')['background_color'] ?>;">
                <div class="porfolio-item-media-wrapper-bg">
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2')['image_1'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2')['image_2'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2')['image_3'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2')['image_4'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2')['image_5'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2')['image_6'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2')['image_7'] ?>"/>
                    </div>
                </div>
            </div>
            <div class="portfolio-section-2 responsive wrapper-full" style="background-color: <?php echo get_field('images_section_2')['background_color'] ?>;">
                <div class="porfolio-item-media-wrapper-bg">
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2_responsive')['image_1'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2_responsive')['image_2'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2_responsive')['image_3'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2_responsive')['image_4'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2_responsive')['image_5'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2_responsive')['image_6'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_2_responsive')['image_7'] ?>"/>
                    </div>
                </div>
            </div>
            <div class="portfolio-section-3 wrapper-full">
                <div class="portfolio-item-media-wrapper">
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_3')['image_1'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_3')['image_2'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_3')['image_3'] ?>"/>
                    </div>
                </div>
            </div>
            <div class="portfolio-section-4 wrapper">
                <div class="portfolio-item-media-wrapper">
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_4')['gif_1'] ?>"/>
                    </div>
                    <div class="portfolio-item-img-1">
                        <img src="<?php echo get_field('images_section_4')['image_2'] ?>"/>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

<?php endif; ?>

<?php get_footer(); ?>
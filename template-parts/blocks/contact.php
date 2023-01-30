<div class="space-x" >
    <div class="wrapper">
        <h3 class="title text-center mb-large xlarge" data-aos="fade-left" data-aos-duration="1000">
            <?php echo get_field('title') ?>
        </h3>
        <p class="text-center">
            <?php echo get_field('text') ?>
        </p>
        <?php if(get_field('form')): ?>

            <div class="contact-wrapper" data-aos="fade-down">
                <?php echo do_shortcode('[contact-form-7 id="'. get_field('form') .'" title="Contact form 1"]') ?>
            </div>

        <?php endif ?>
    </div>
</div> 
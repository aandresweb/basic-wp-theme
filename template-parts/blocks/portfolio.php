<?php 

    $projects_arg = array(
        'post_type' => 'project',
        'post_status' => 'publish',
        'posts_per_page' => 4
    );

	$projects = new WP_Query($projects_arg);

?>


<div class="portfolio">
    <div class="wrapper-side">
        <?php if(get_field('show_title')): ?>
            <h3 class="title">Portafolio</h3>
        <?php endif ?>
        <div class="grid gap-0">
            <?php foreach ($projects->posts as $project_key => $project): ?>
                <?php $delay = $project_key * 100 ?>
                <div class="portfolio-item" data-aos="fade-up" data-aos-delay="<?php echo $delay ?>" data-aos-duration="500">
                    <a href="<?php echo get_permalink($project->ID) ?>">
                        <div class="portfolio-item-img">
                            <img class="portfolio-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($project->ID), 'thumbnail' ) ?>" alt="">
                        </div>
                        <!-- 
                        <div class="portfolio-content">
                            <h4 class="portfolio-title"><?php echo $project->post_title ?></h4>
                        </div>
                        -->
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        <?php if(get_field('show_button')): ?>
        <div class="button-wrapper" data-aos="fade-up">
            <a class="button" href="<?php echo get_permalink( get_page_by_path( 'portfolio' ) ); ?>">Ver portafolio</a>
        </div>
        <?php endif ?>
    </div>
</div>
<div class="space-x space-left">
    <div class="wrapper">
        <h3 class="title mb-large"><span class="light">Creando</span> <br/> Soluciones</h3>
        <p>
            <?php echo get_field('text') ?>    
        </p>
        <div class="servicios space-x-medium">

            <?php if(get_field('services')): ?>

                <?php foreach(get_field('services') as $service_key => $service): ?>
                    <?php $delay = $service_key * 100 ?>
                    <div class="servicio-item" data-aos="fade-up" data-aos-delay="<?php echo $delay ?>" data-aos-duration="500">
                        <img src="<?php echo $service['image'] ?>" alt="<?php echo $service['title'] ?>">
                        <p class="servicio-title"><?php echo $service['title'] ?></p>
                    </div>
                <?php endforeach ?>

            <?php endif ?>
        </div>
    </div>
</div>
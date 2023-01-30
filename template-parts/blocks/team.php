<div class="section space-left space-x" data-aos="fade-down" data-aos-duration="500">
    <div class="wrapper">
        <h3 class="title mb-large"><span class="light">Nuestro</span> <br/> Equipo</h3>
        <p>
            <?php echo get_field('text') ?>
        </p>
        <div class="team-members">

            <?php if(get_field('team_members')): ?>

                <?php foreach(get_field('team_members') as $team_member): ?>
                    <div class="team-member">
                        <img src="<?php echo $team_member['image'] ?>" alt="">
                    </div>
                <?php endforeach ?>
            <?php endif ?> 

        </div>
    </div>
</div>
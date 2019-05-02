<?php get_header() ?>


<section class="main__section">

    <div class="section__intro">
        <h2 class="intro__title">
            <?php the_title(); ?>
        </h2>
        <p class="intro__teaser">
            <?php get_field('service_teaser'); ?>
        </p>
    </div>

</section>


<?php get_footer() ?>



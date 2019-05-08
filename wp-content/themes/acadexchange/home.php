<?php
/*
Template Name: Home
*/
 get_header(); 
 ?>

<section class="main__head">
    <div class="head__intro">
        <p class="intro__name"></p>
        <p class="intro__teaser"></p>
    </div>
</section>
<section class="main__content">
    <h2 class="content__title"></h2>
    <p class="content__context"></p>
    <img src="" alt="" class="content__img">
    <a href="" class="content__link"></a>
    <div class="content__sentence">
        <p class="content__text"></p>
    </div>
    <?php
    $query = new WP_Query([
        'post_type' => 'service'
    ]);
    if ($query->have_posts()):while ($query->have_posts()):$query->the_post(); ?>
        <section class="content__service">

            <?php $img = ae_get_image('service_banner', 'large'); ?>

            <img src="<?= $img->src; ?>" alt="<?= $img->title; ?>">

            <h3 class="service__title"><?php echo get_field('service_name') ?></h3>
            <P class="service__excerpt"><?php the_excerpt() ?></P>
            <a href="<?php the_permalink() ?>" class="service__link"
               title="More about <?php get_field('service_name') ?>">More
                about <?php echo get_field('service_name') ?> </a>
        </section>

    <?php endwhile; else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>

<a href="<?php the_permalink(); ?>" class="product-intro-item">
    <div class="overlay-product-intro">

    </div>
    <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    <p class="text-white fw-7 fz-20 name">
        <?php the_title(); ?>
        <span class="line-product"></span>
    </p>
</a>
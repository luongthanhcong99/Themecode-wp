<style>
    .product-loop-sidebar {
        border-bottom: 1px solid #dfdfdf;
        padding: 10px;
    }

    .col-left {
        width: 20%;
    }

    .col-right {
        width: 80%;
        padding-left: 15px;
        line-height: 20px;
    }
</style>
<div class="inside-right-sidebar">
    <p class="mbt-30">
        <strong class="fz-20">
            Featured Product
        </strong>
    </p>
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 5,
        'limit'          => 5,
        'order'          => 'rand',
    );
    $parent = new WP_Query($args);
    if ($parent->have_posts()) : ?>
        <?php while ($parent->have_posts()) : $parent->the_post();
        ?>

            <a href="<?php the_permalink(); ?>" class="product-loop-sidebar dp-flex">
                <div class="col-left">
                    <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="col-right">
                    <p class="fz-14 t-upper" style="margin:0;">
                        <strong><?php the_title(); ?></strong>
                    </p>
                    <p style="color:orange;font-size:12px;">
                        <strong><?php echo get_the_category(get_the_id())[0]->name;  ?></strong>
                    </p>
                </div>
            </a>
        <?php
        endwhile; ?>
    <?php endif;
    wp_reset_postdata(); ?>
    <p>
        <a target="_blank" class="btn-linear d-flex mt-30 mbt-30 center-all" href="/wp-content/uploads/2023/05/3835403-Catalogue-FuJi.pdf">
            <i class="fa-regular fa-file-pdf"></i> &nbsp;&nbsp; Download Catalogue
        </a>
    </p>
</div>
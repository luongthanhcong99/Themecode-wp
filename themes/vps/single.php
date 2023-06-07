<?php get_header(); ?>
<?php require_once get_template_directory() . '/page-title.php'; ?>
<style>
    .post-content {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .single-product-related a {
        display: block;
    }

    #page-title {
        background-color: orange;
    }

    .single-product-related {
        padding: 15px;
        font-weight: 500;
        border-bottom: 1px solid #fff;
        background-color: #dfdfdf;
    }

    #content h1,
    #content h2,
    #content h3,
    #content h4 {
        color: var(--root)
    }

</style>

<div class="container">
    <div class="post-content">
        <div class="row">
            <div class="col-md-3 mbt-30">

                <h4 class="fz-24 mbt-20">
                    OUR PRODUCTS
                </h4>
                <div class="mbt-30">
                    <span class="line-product"></span>
                </div>
                <div id="related">
                    <?php $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'limit' => 3,
                        'order' => 'ASC',
                        'orderby' => 'menu_order',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <div class="single-product-related">
                                <a href="<?php the_permalink(); ?>" class="post-loop-item">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>

            </div>
            <div id="content" class="col-md-9">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                } ?>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php
/*
	Template Name: Our products
*/
?>
<?php get_header(); ?>
<?php require_once get_template_directory() . '/page-title.php'; ?>
<div id="main">
    <div class="container pt-50 pbt-50">
        <div class="row">
            <div class="col-md-9">
                <div>
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_content();
                        }
                    } ?>
                </div>
                <div id="list-product">
                    <div class="row">
                        <?php
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => -1,
                            'limit'          => -1,
                            'order'          => 'date',
                        );
                        $parent = new WP_Query($args);
                        if ($parent->have_posts()) : ?>
                            <?php while ($parent->have_posts()) : $parent->the_post();
                            ?>
                                <div class="col-md-4 mbt-15 product-intro">
                                    <?php require get_template_directory() . '/content-single.php'; ?>
                                </div>
                            <?php
                            endwhile; ?>
                        <?php endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
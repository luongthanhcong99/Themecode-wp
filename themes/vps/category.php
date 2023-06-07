<?php get_header(); ?>
<?php

$obj = get_queried_object();
$title = $obj->post_title;
$id = $obj->ID;
?>
<div class="container">
    <h1 class="heading mt-30 mbt-30">
        <?php echo $obj->name; ?>
    </h1>
    <div class="row">
        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'limit'          => -1,
            'order'          => 'date',
            'orderby'        => 'menu_order',
            'category_name' => $obj->slug
        );
        $parent = new WP_Query($args);
        if ($parent->have_posts()) : ?>
            <?php while ($parent->have_posts()) : $parent->the_post();
            ?>
                <div class="col-md-4">
                    <?php get_template_part('content-single'); ?>
                </div>
            <?php
            endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</div>
<?php get_footer(); ?>
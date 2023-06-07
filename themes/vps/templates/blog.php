<?php

/*

	Template Name: Blog

*/

?>
<?php get_header(); ?>
<?php // require_once get_template_directory() . '/page-title.php'; 
?>
<div class="container">
    <div class="row center-hor">
        <div class="col-md-12 pt-10 pbt-10">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
        </div>

    </div>
    <div id="blog" class="row">
        <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'limit' => 3,
            'order' => 'ASC',
            'orderby' => 'menu_order',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <div class="col-md-4 ">
                    <?php get_template_part('content-single'); ?>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();; ?>
    </div>
</div>
<?php get_footer(); ?>
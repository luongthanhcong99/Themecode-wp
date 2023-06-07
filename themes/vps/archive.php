<?php get_header(); ?>

<div class="container">
    <div class="row center-hor">
        <div class="col-md-12 pt-50 pbt-50">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
        </div>
        <div class="col-md-10">
            <?php require_once get_template_directory() . '/post-loop.php'; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
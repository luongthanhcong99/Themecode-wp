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
        <div id="content">
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
<?php get_footer(); ?>
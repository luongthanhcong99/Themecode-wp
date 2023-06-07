<?php
$obj = get_queried_object();
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => -1,
    'limit'          => -1,
    'order'          => 'date',
    'orderby'        => 'menu_order',
    'category' => $obj->id
);
$parent = new WP_Query($args);
if ($parent->have_posts()) : ?>
    <?php while ($parent->have_posts()) : $parent->the_post(); ?>
        <div class="post-loop__item mbt-30">
            <div class="row">
                <div class="col-md-5">
                    <a href="<?php the_permalink(); ?>">
                        <div class="thumb-post-loop">
                            <img class="radius-20" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-7">
                    <h2 class="fz-18">
                        <?php the_title(); ?>
                    </h2>
                    <div>
                        <?php echo substr(substr(get_the_excerpt(), 0, 110), 0, 110) . '...'; ?>
                    </div>
                    <div class="mt-20 dp-flex">
                        <a class="radius-6 root-bg text-white p-10" href="<?php the_permalink(); ?>">
                            Đọc tiếp...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif;
wp_reset_postdata(); ?>
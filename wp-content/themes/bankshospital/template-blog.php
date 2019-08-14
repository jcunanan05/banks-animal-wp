<?php
/*
Template Name: Blog
*/
get_header();
?>
<section class="col-xs-12">
    <div class="block content-container pv40">
        <div class="block">
            <h1 class="section-title bm40"><?php the_title(); ?></h1>

            <div class="listing__cards-container">
                <?php
                // Banner slider
                $args = array(
                    'post_type' => 'our-blog',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                );
                query_posts($args);
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="listing__card">
                        <div class="listing__card--inner">
                            <div class="listing__media">
                                <a rel="prettyPhoto" href="<?php the_permalink(); ?>" class="block">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('bh_400x300', array('class' => 'block'));
                                    } ?>
                                </a>
                            </div>

                            <div class="listing__description text-center">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn--small btn--default bm10">Read more</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

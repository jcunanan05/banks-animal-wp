<?php get_header(); ?>

    <section class="col-xs-12">
        <div class="content-container">
            <div class="page__content-container">
                <div class="page__inner-container">
                    <h1 class="page__title"><?php the_title(); ?></h1>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="row">
                            <div class="col-md-8 col-xs-12">
                                <div class="widget__container">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('wpbs-featured', array('class' => 'block bm30'));
                                    } ?>
                                    <div class="block">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <?php get_sidebar(); // sidebar 1 ?>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
<?php
/*
Template Name: How to videos
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
                    'post_type' => 'how-to-video',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                );
                query_posts($args);
                if (have_posts()) : while (have_posts()) : the_post();
                    // get custom field data
                    $meta_values = get_post_meta($post->ID); ?>

                    <!--For image type-->
                    <?php if ($meta_values['wpcf-select-media-type'][0] == 1) { ?>
                        <div class="listing__card">
                            <div class="listing__card--inner">
                                <div class="listing__media">
                                    <?php
                                        $large_image_url = types_render_field('upload-content-image', array("size" => "full", "url" => "true"));
                                        $img_path = types_render_field('upload-content-image', array("size" => "bh_400x250", "url" => "true"));
                                    ?>
                                    <a rel="prettyPhoto" href="<?php echo $large_image_url; ?>" class="image-full">
                                        <img src="<?php echo $img_path; ?>" class="block"/>
                                    </a>
                                </div>

                                <div class="listing__description">
                                    <?php echo $meta_values['wpcf-content-description-text'][0]; ?>
                                </div>
                            </div>
                        </div>

                        <!--For video type-->
                    <?php } else { ?>
                        <div class="listing__card">
                            <div class="listing__card--inner">
                                <div class="listing__media">
                                    <a href="<?php echo $meta_values['wpcf-youtube-video-url'][0];?>" class="popup-youtube">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('bh_400x250', array('class' => 'block'));
                                        } ?>

                                        <div class="listing__yt-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/yt-icon.png"/>
                                        </div>
                                    </a>
                                </div>

                                <div class="listing__description">
                                    <?php echo $meta_values['wpcf-content-description-text'][0]; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php endwhile; endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

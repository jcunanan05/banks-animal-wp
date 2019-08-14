<?php
/*
Template Name: Blog
*/
get_header();
?>
<section class="col-xs-12">
    <div class="content-container">
        <div class="page__content-container">
            <div class="page__inner-container">
                <h1 class="page__title"><?php the_title(); ?></h1>

                <div class="row flex__columns">
                    <div class="col-md-8 col-xs-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d857.9579271589298!2d-79.31956992228623!3d43.6728176124987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cc761c0a1b0f%3A0x990a0c326f4a324d!2s230+Coxwell+Ave%2C+Toronto%2C+ON+M4L+3B2%2C+Canada!5e0!3m2!1sen!2sin!4v1488038629002"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4 col-xs-12 flex__columns">
                        <div class="widget__container">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

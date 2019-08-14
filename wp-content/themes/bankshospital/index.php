<?php
/*
Template Name: Home Page
*/
get_header();
?>
    <!--Banner section-->
    <section class="col-xs-12">
        <div class="block banner--slider">
            <?php
            // Banner slider
            $args = array(
                'post_type' => 'banner-slide',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => 5
            );
            query_posts($args);
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!--slide-->
                <div class="block banner--container">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('bh_banner-home', array('class' => 'block'));
                    } ?>

                    <!--Caption-->
                    <div class="banner--caption">
                        <h4><?php the_title(); ?></h4>
                        <h1><?php echo get_field('banner_slide_description'); ?><h1>
                    </div>
                </div>
            <?php endwhile; endif;
            wp_reset_query(); ?>
        </div>
    </section>

    <!--Services offered-->
    <section class="col-xs-12 pv60">
        <h2 class="section-title text-center bm20">
            SERVICES OFFERED TO FELINE AND CANINE FRIENDS
        </h2>
        <!--cards-->
        <div class="block guide--wrapper content-container">
            <!--Step-->
            <div class="guide--step anim fadeInLeft" data-wow-delay="200ms">
                <div class="guide--title">
                    Parasite Control
                </div>
                <a href="<?php echo home_url(); ?>/parasite-control/" class="guide--icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/guide-icon-1.png"
                         alt="Parasite Control"
                         class="img-responsive"/>
                </a>
                <div class="guide--description">
                    The key to flea control is prevention.
                </div>
            </div>
            <!--Step-->
            <div class="guide--step anim fadeInLeft" data-wow-delay="300ms">
                <div class="guide--title">
                    Dentistry
                </div>
                <a href="<?php echo home_url(); ?>/veterinary-services/dentisty/" class="guide--icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/guide-icon-2.png"
                         alt="Dentistry"
                         class="img-responsive"/>
                </a>
                <div class="guide--description">
                    80% of dogs and 70% of cats <br>
                    have oral disease by the age of 3.
                </div>
            </div>
            <!--Step-->
            <div class="guide--step anim fadeInLeft" data-wow-delay="400ms">
                <div class="guide--title">
                    Puppy/Kitten
                </div>
                <a href="<?php echo home_url(); ?>/puppy-kitten-immunization/" class="guide--icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/guide-icon-3.png"
                         alt="Puppy/Kitten" class="img-responsive"/>
                </a>
                <div class="guide--description">
                    Vaccine protocols and first visits <br>for your new family member.
                </div>
            </div>
            <!--Step-->
            <div class="guide--step anim fadeInLeft" data-wow-delay="500ms">
                <div class="guide--title">
                    Dermatology
                </div>
                <a href="<?php echo home_url(); ?>/veterinary-services/dermatology/" class="guide--icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/guide-icon-4.png"
                         alt="Dermatology" class="img-responsive"/>
                </a>
                <div class="guide--description">
                    The skin is a good barometer of <br>
                    the health of the pet and problems.
                </div>
            </div>
            <!--Step-->
            <div class="guide--step anim fadeInLeft" data-wow-delay="600ms">
                <div class="guide--title">
                    Laser Surgery
                </div>
                <a href="<?php echo home_url(); ?>/veterinary-services/laser-surgery/" class="guide--icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/guide-icon-5.png"
                         alt="Laser Surgery"
                         class="img-responsive"/>
                </a>
                <div class="guide--description">
                    The many benefits to laser surgery.
                </div>
            </div>
        </div>
    </section>

    <!--Information-->
    <section class="col-xs-12">
        <div class="block img-grid--container">
            <a href="<?php echo home_url(); ?>/welcome-to-banks-animal-hospital/"
               class="img-grid--item mr5 anim zoomIn">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/new--client.jpg" class="block"/>
            </a>

            <a href="<?php echo home_url(); ?>/about-us" class="img-grid--item anim zoomIn">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/about-us.jpg" class="block"/>
            </a>
        </div>

        <div class="block text-center anim slideInLeft">
            <h2 class="section-title">we treat your pets like the valued family members they are.</h2>
            <p>Serving pet parents in the Gerrard East, Beach(es), Leslieville, Riverside, Danforth Village,
                Birch Cliff,
                Scarborough and surrounding neighbourhoods.</p>
            <div class="block text-center bm20">
                <a href="<?php echo home_url(); ?>/contact-us" class="btn btn--default button--wayra">
                    Get in touch
                </a>
            </div>
        </div>

        <div class="block img-grid--container bm40">
            <a href="<?php echo home_url(); ?>/from-the-keyboard-of-dr-pusong" class="img-grid--item anim zoomIn mr5">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/how-to-videos.jpg" class="block"/>
            </a>

            <a href="<?php echo home_url(); ?>/veterinary-services" class="img-grid--item anim zoomIn">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/veterinary-resources.jpg"
                     class="block"/>
            </a>
        </div>
    </section>

    <!--Customer service-->
    <section class="col-xs-12">
        <div class="block customer-service--container bm40">
            <div class="customer-service--item anim slideInLeft" data-wow-delay="200ms">
                <a href="<?php echo home_url(); ?>/after-hours-emergency/" class="cs__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/cs-icon-1.png"
                         alt="After hours emergency?"/>

                    <span class="action">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/link.png" alt="">
                    </span>
                </a>
                <span class="customer-service--title">After hours emergency?</span>
            </div>

            <div class="customer-service--item item-pointer anim fadeIn" data-wow-delay="250ms">
                <picture class="block">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/library/images/ds--arrow-mobile.png"
                            media="(max-width: 768px)"
                            class="block">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/library/images/ds--arrow.png"
                            class="block">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/ds--arrow.png"/>
                </picture>
            </div>

            <div class="customer-service--item anim slideInLeft" data-wow-delay="300ms">
                <a href="<?php echo home_url(); ?>/banks-animal-hospital-payment-options/" class="cs__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/cs-icon-2.png"
                         alt="Payment options"/>
                    <span class="action">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/link.png" alt="">
                    </span>
                </a>
                <span class="customer-service--title">Payment options</span>
            </div>

            <div class="customer-service--item item-pointer anim fadeIn" data-wow-delay="350ms">
                <picture class="block">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/library/images/ds--arrow-mobile.png"
                            media="(max-width: 768px)"
                            class="block">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/library/images/ds--arrow.png"
                            class="block">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/ds--arrow.png"/>
                </picture>
            </div>

            <div class="customer-service--item anim slideInLeft" data-wow-delay="400ms">
                <a href="<?php echo home_url(); ?>/do-you-have-pet-insurance/" class="cs__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/cs-icon-3.png"
                         alt="Do you have pet insurance?"/>
                    <span class="action">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/link.png" alt="">
                    </span>
                </a>

                <span class="customer-service--title">Do you have pet insurance?</span>
            </div>

            <div class="customer-service--item item-pointer anim fadeIn" data-wow-delay="450ms">
                <picture class="block">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/library/images/ds--arrow-mobile.png"
                            media="(max-width: 768px)"
                            class="block">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/library/images/ds--arrow.png"
                            class="block">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/ds--arrow.png"/>
                </picture>
            </div>

            <div class="customer-service--item anim slideInLeft" data-wow-delay="500ms">
                <a href="<?php echo home_url(); ?>/the-cost-of-owning-a-pet/" class="cs__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/cs-icon-4.png"
                         alt="The Cost of Owning a Pet"/>
                    <span class="action">
                        <img src="<?php echo get_template_directory_uri(); ?>/library/images/link.png" alt="">
                    </span>
                </a>
                <span class="customer-service--title">The Cost of Owning a Pet</span>
            </div>
        </div>
    </section>

    <!--Design dream home-->
    <section class="col-xs-12">
        <div class="block virtual-tour--container">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/virtual-tour.png"
                 alt="Design your dream home today"
                 class="block anim fadeIn">
            <!--Caption-->
            <div class="virtual-tour--caption anim slideInLeft">
                <h2 class="section-title">
                    Take A Virtual Hospital tour
                </h2>
                <p>
                    Welcome to our virtual tour. Although this will give you the visual layout, the reality
                    tour is much more interactive. Enjoy...
                </p>
                <a href="https://www.youtube.com/watch?v=NUkRXvyg6cw" target="_blank"
                   class="btn btn--default popup-youtube">Start your tour</a>
            </div>
        </div>
    </section>

    <!--Our team-->
    <section class="col-xs-12">
        <div class="block team--container">
            <div class="team--banner">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/team-faces.jpg" alt="Our team"
                     class="block"/>
            </div>
            <div class="team--description text-center">
                <h2 class="section-sub-title bm20">Meet our team</h2>
                <p class="bm40">
                    As a family veterinary practice, we are committed to providing you and your animal
                    companion
                    <br> with a loving and nurturing environment centered on compassionate <br>
                    care applied through the science of the heart.
                </p>
                <a href="<?php echo home_url(); ?>/meet-the-team" class="btn btn--default btn--wide">Read more</a>
            </div>
        </div>
    </section>

    <!--Blog-->
    <section class="col-xs-12">
        <div class="block text-center blog--bg pv20">
            <h4 class="section-title bm20">From our blog</h4>
            <div class="block featured-blog--container">
                <?php
                // Banner slider
                $args = array(
                    'post_type' => 'our-blog',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'posts_per_page' => 3
                );
                query_posts($args);
                if (have_posts()) : while (have_posts()) : the_post();
                    ?>
                    <!--Featured blog article-->
                    <div class="featured-blog--item anim zoomIn">
                        <div class="featured-blog--image">
                            <a href="<?php the_permalink(); ?>" class="block">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('bh_400x300', array('class' => 'block'));
                                } ?>
                            </a>
                        </div>
                        <div class="featured-blog--detail">
                            <span class="date"><?php the_title(); ?></span>
                            <a href="<?php the_permalink(); ?>" class="link">Read more</a>
                        </div>
                    </div>
                <?php endwhile; endif;
                wp_reset_query(); ?>
            </div>
            <div class="block anim slideInUp">
                <a href="<?php echo home_url(); ?>/blog" target="_blank"
                   class="btn btn--default btn--wide">Read our blog</a>
            </div>
        </div>
    </section>

    <!--Testimonials-->
    <section class="col-xs-12">
        <div class="block testimonial--bg">
            <div class="testimonial--content anim fadeInDown">
                “At Banks Animal Hospital we strive to make your clinic visit comfortable, informative, and in
                respecting your time, we are committed to not running behind on appointment times.”
            </div>
            <div class="testimonial--author anim fadeInUp">
                - Dr. Pusong
            </div>
        </div>
    </section>
<?php get_footer(); ?>
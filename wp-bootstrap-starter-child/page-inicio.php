<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<?php echo get_template_part( 'template-parts/content', 'banner' ) ?>
<!-- end banner -->

<!-- section 1 -->
<?php echo get_template_part( 'template-parts/content', 'section-1' ) ?>
<!-- end section 1 -->

<!-- section 2 -->
<?php echo get_template_part( 'template-parts/content', 'section-2' ) ?>
<!-- end section 2 -->

<!-- section 3 -->
<?php echo get_template_part( 'template-parts/content', 'section-3' ) ?>
<!-- end section 3 -->

<!-- contact -->
<?php echo get_template_part( 'template-parts/content', 'contact' ) ?>
<!-- end contact -->

<!-- testimonials -->
<section 
class="l-testimonials py-5"
id="depoimentos">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <h3 class="c-title">
                    Depoimentos
                </h3>

                <div class="row">
                    
                    <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'testimonials',
                            'order'          => 'DESC',
                        );

                        $testimonials = new WP_Query( $args );

                        if( $testimonials->have_posts() ) : 
                            while( $testimonials->have_posts() ): $testimonials->the_post();
                                if(have_rows( 'depoimentos' )) :
                                    while(have_rows( 'depoimentos' )) : the_row();
                    ?>
                                        <div class="col-lg-9 l-testimonials__col-child my-3">

                                            <div class="l-testimonials__box u-box-shadow-pattern flex-column flex-lg-row py-5 px-4">
                                                
                                                <div class="col-6 col-lg-2">

                                                    <div class="l-testimonials__rounded">
                                                        <?php if(get_sub_field( 'imagem' )) : ?>
                                                            <img
                                                            class="img-fluid"
                                                            src="<?php echo get_sub_field( 'imagem' ) ?>"
                                                            alt="<?php the_title() ?>">
                                                        <?php else : ?>
                                                            <img
                                                            class="img-fluid"
                                                            src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/testimonials-icon-user.png"
                                                            alt="Testimonials">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-lg-10 d-flex align-items-center mt-4 mt-lg-0">

                                                    <span class="d-block u-font-size-14 text-white mb-0">
                                                        <?php echo get_sub_field( 'depoimento' ) ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                    <?php           endwhile;
                                endif;
                            endwhile; 
                        endif;

                        wp_reset_query();
                    ?>

                    <!-- <div class="col-lg-9 l-testimonials__col-child my-3">

                        <div class="l-testimonials__box u-box-shadow-pattern flex-column flex-lg-row py-5 px-4">
                            
                            <div class="col-6 col-lg-2">

                                <div class="l-testimonials__rounded">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/testimonials-icon-user.png"
                                    alt="Testimonials">
                                </div>
                            </div>

                            <div class="col-lg-10 d-flex align-items-center mt-4 mt-lg-0">

                                <p class="u-font-size-14 u-font-weight-light text-white mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas magna eget lectus
                                    facilisis pharetra. <br>
                                    <span class="font-weight-bold u-font-style-italic">Lorem ipsum</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 l-testimonials__col-child my-3">

                        <div class="l-testimonials__box u-box-shadow-pattern flex-column flex-lg-row py-5 px-4">
                            
                            <div class="col-6 col-lg-2">

                                <div class="l-testimonials__rounded">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/testimonials-icon-user.png"
                                    alt="Testimonials">
                                </div>
                            </div>

                            <div class="col-lg-10 d-flex align-items-center mt-4 mt-lg-0">

                                <p class="u-font-size-14 u-font-weight-light text-white mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas magna eget lectus
                                    facilisis pharetra. <br>
                                    <span class="font-weight-bold u-font-style-italic">Lorem ipsum</span>
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end testimonials -->

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

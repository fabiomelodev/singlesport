<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- single banner -->
<section 
class="l-single-banner position-relative d-flex justify-content-center align-items-end"
style="background-image: url(<?php echo get_field( 'banner' ) ?>)">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-6 col-lg-3 pb-5">

                <p class="l-single-banner__tag u-font-weight-medium text-center">
                    <?php the_title() ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end single banner -->

<!-- single content -->
<section class="my-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <span class="d-block">
                    <?php the_content() ?>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- end single content -->
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

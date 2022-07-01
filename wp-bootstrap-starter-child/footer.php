<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
  
    <?php get_template_part( 'footer-widget' ); ?>
    
    <!-- <footer id="colophon" class="site-footer <php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <php echo date('Y'); ?> <php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div>
        </div>
    </footer> #colophon -->

    <!-- whatsapp -->
    <?php echo get_template_part( 'template-parts/content', 'whatsapp' ); ?>
    <!-- end whatsapp -->

    <footer class="l-footer pt-5 pb-3">
        
        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="row">

                        <div class="col-lg-4 my-3 my-lg-0">
                            <p class="font-weight-bold text-capitalize text-white">
                                Sobre nós
                            </p>

                            <?php
                                $args = array(
                                    'posts_per_page' => 1,
                                    'post_type'      => 'about',
                                    'order'          => 'DESC',
                                );

                                $about = new WP_Query( $args );

                                if( $about->have_posts() ) : 
                                    while( $about->have_posts() ): $about->the_post();
                            ?>
                                        <span class="d-block u-font-size-14 u-font-weight-light text-white">
                                            <?php the_content() ?>
                                        </span>
                            <?php endwhile; 
                                endif;

                                wp_reset_query();
                            ?>
                        </div>

                        <div class="col-lg-4 my-3 my-lg-0">
                            <p class="font-weight-bold text-capitalize text-white">
                                Redes sociais
                            </p>

                            <!-- social media -->
                            <?php echo get_template_part( 'template-parts/content', 'social-media' ) ?>
                            <!-- end social media -->
                        </div>

                        <div class="col-lg-4 my-3 my-lg-0">
                            <p class="font-weight-bold text-white">
                                Contato
                            </p>

                            <span class="d-block u-font-weight-light text-white">
                                <?php
                                    $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'contato',
                                        'order'          => 'DESC',
                                    );

                                    $contact = new WP_Query( $args );

                                if( $contact->have_posts() ) : 
                                    while( $contact->have_posts() ): $contact->the_post();
                                ?>
                                        <span class="d-block">
                                            <?php the_content() ?>
                                        </span>
                                <?php endwhile; 
                                    endif;

                                    wp_reset_query();
                                ?>
                            </span>
                        </div>
                    </div>
                        
                    <div class="row justify-content-end">

                        <div class="col-lg-4 my-4">
                            <p class="l-footer__dev font-weight-bold text-white mb-0">
                                Desenvolvido por: 
                                <a 
                                class="u-font-weight-light text-white"
                                href="https://singletemas.com.br/"
                                target="_blank"
                                rel="noreferrer noopener">
                                    SingleTemas
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 d-flex justify-content-center mt-5">

                            <a 
                            class="l-footer__copyright text-center text-white mb-0"
                            href="<?php echo get_home_url(null, '') ?>">
                                <!-- singlesport.com.br -->
                                <?php echo get_bloginfo( 'name' ) . ' - ' . date('Y'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
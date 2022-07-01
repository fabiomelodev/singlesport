<section class="l-section-1 mb-5 py-5" id="#">
    
    <div class="container">

        <div class="row">

            <div class="col-12 mt-5">

                <h3 class="c-title">
                    <!-- Conheça a nossa estrutura -->
                    <?php echo get_field( 'secao_1_titulo', 'option' ) ?>
                </h3>
                
                <!-- swiper -->
                <div class="swiper-container swiper-container-section-1 js-swiper-container-section-1">

                    <div class="swiper-wrapper">

                            <?php
								$args = array(
									'posts_per_page' => -1,
									'post_type'      => 'secao-1',
									'order'          => 'DESC',
								);

								$sections1 = new WP_Query( $args );

				                if( $sections1->have_posts() ) : 
				                    while( $sections1->have_posts() ): $sections1->the_post();
							?>
                                        <!-- slide -->
                                        <div class="swiper-slide">

                                            <div class="card l-section-1__card">

                                                <div class="card-img l-section-1__card-img l-section-1__overlay overflow-hidden position-relative" data-value="<?php the_title() ?>">

                                                    <?php
                                                        $alt_title = get_the_title();

                                                        the_post_thumbnail(
                                                            'post-thumbnail', 
                                                            array(
                                                                'class' => 'img-fluid blog--post-img',
                                                                'alt'   => $alt_title,
                                                            )
                                                        );
                                                    ?>
                                                </div>

                                                <div class="card-body">

                                                    <span class="d-block u-font-weight-semibold mb-0">
                                                        <?php the_title() ?>
                                                    </span>

                                                    <span class="u-font-size-12 u-font-weight-light">
                                                        <?php echo the_excerpt() ?> 
                                                    </span>

                                                    <a
                                                    class="u-border-radius-4 u-box-shadow-pattern text-decoration-none u-font-size-12 u-font-weight-medium u-color-folk-light-black hover:u-color-folk-white hover:u-bg-folk-primary py-2 px-3"
                                                    href="<?php the_permalink() ?>">
                                                        Ver mais
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                            <?php endwhile; 
								endif;

								wp_reset_query();
							?>
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-section-1 d-none d-lg-flex js-swiper-button-prev-section-1"></div>
                <div class="swiper-button-next swiper-button-next-section-1 d-none d-lg-flex js-swiper-button-next-section-1"></div>

                <!-- pagination -->
                <div class="swiper-pagination swiper-pagination-section-1 js-swiper-pagination-section-1"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
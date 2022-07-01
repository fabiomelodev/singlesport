<section 
class="l-section-2 pt-5" 
style="background-image: url(<?php echo get_field( 'secao_2_imagem_de_fundo', 'option' ) ?>)"
id="#">

    <div class="container">

        <div class="row">

            <div class="col-12 mt-5">

                <div class="row">
                    
                    <!-- loop -->
                    <?php
                        if( have_rows( 'itens', 'option' ) ) : 
                            while( have_rows( 'itens', 'option' ) ): the_row();
                    ?>
                                <div class="col-lg-4 l-section-2__col-child mb-3">

                                    <div class="card border-0 u-box-shadow-pattern p-3">

                                        <div class="card-img">
                                            <img
                                            class="img-fluid blog--post-img"
                                            src="<?php echo get_sub_field( 'icone' ) ?>"
                                            alt="<?php echo get_sub_field( 'titulo' ) ?>">
                                        </div>

                                        <div class="card-body px-0">

                                            <h3 class="l-section-2__card-title font-weight-bold">
                                                <?php echo get_sub_field( 'titulo' ) ?>
                                            </h3>

                                            <span class="l-section-2__card-text position-relative d-block font-weight-light before::is-bouncing mt-3 pb-4">
                                                <?php echo get_sub_field( 'descricao' ) ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                    <?php endwhile; 
                        endif;
                    ?>
                    <!-- end loop -->
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-4 d-flex justify-content-center my-5">
                        <a
                        class="c-btn-pattern u-border-color-purple u-font-size-14 u-font-weight-medium text-decoration-none u-color-folk-purple hover:u-color-folk-white u-bg-folk-white hover:u-bg-folk-purple py-3 px-4"
                        href="<?php echo get_field( 'secao_2_link_do_botao', 'option' ) ?>">
                            <?php echo get_field( 'secao_2_botao', 'option' ) ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
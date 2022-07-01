<section 
class="l-section-3 py-5"
style="background-image: url(<?php echo get_field( 'secao_3_imagem_de_fundo', 'option' ) ?>)">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-6">
                        
                        <div class="row">
                            
                            <?php
				                if( have_rows( 'secao_3_itens', 'option' ) ) : 
				                    while( have_rows( 'secao_3_itens', 'option' ) ): the_row();
							?>
                                        <div class="col-lg-6 my-3">

                                            <div class="card h-100 border-0 u-box-shadow-pattern align-items-center py-5 px-4">
                                        
                                                <div class="card-img l-section-3__card-img">
                                                    <img
                                                    class="img-fluid"
                                                    src="<?php echo get_sub_field( 'icone' ) ?>"
                                                    alt="<?php echo get_sub_field( 'titulo' ) ?>">
                                                </div>

                                                <div class="card-body">

                                                    <h3 class="u-font-size-14 font-weight-bold text-center text-uppercase">
                                                        <?php echo get_sub_field( 'titulo' ) ?>
                                                    </h3>

                                                    <span class="d-block u-font-size-12 u-font-weight-light u-font-style-italic text-center">
                                                        <?php echo get_sub_field( 'descricao' ) ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                            <?php endwhile; 
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="l-contact py-5" id="contato">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="l-contact__box u-box-shadow-pattern u-bg-folk-white py-5 px-4">

                    <div class="row">

                        <div class="col-lg-6 d-flex align-items-center my-3 my-lg-0 pt-4">
                            <?php echo do_shortcode( '[contact-form-7 id="58" title="Contato"]' ) ?>
                        </div>
                        
                        
                        <div class="col-lg-6 my-3 my-lg-0 pt-4">
                            
                            <p class="l-contact__text u-font-weight-regular mb-0">
                                Deseja conhecer melhor SingleSport
                            </p>

                            <h3 class="l-contact__title font-weight-bold text-uppercase">
                                entre em contato
                            </h3>

                            <p>
                                <?php echo get_field( 'endereco', 'option' ) ?>
                            </p>

                            <p class="font-weight-bold">
                                Horário de funcionamento:
                            </p>

                            <span class="d-block">
                                <?php echo get_field( 'horario_de_funcionamento', 'option' ) ?>
                            </span>

                            <span class="d-block font-weight-bold mb-3">
                                <?php echo get_field( 'contato', 'option' ) ?>
                            </span>
                            
                            <!-- social media -->
                            <?php echo get_template_part( 'template-parts/content', 'social-media' ) ?>
                            <!-- end social media -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
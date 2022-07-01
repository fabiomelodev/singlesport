<section class="l-banner" style="background-image: url(<?php echo get_field( 'banner', 'option' ) ?>)">

    <div class="container">

        <div class="row">

            <div class="col-12 mt-5 pt-5">

                <h2 class="l-banner__title font-weight-bold text-white">
                    <?php echo get_field( 'titulo', 'option' ) ?>
                </h2>

                <span class="d-block u-font-weight-light text-white mb-5">
                    <?php echo get_field( 'texto', 'option' ) ?>
                </span>

                <a
                class="c-btn-pattern u-border-color-white u-font-weight-light text-decoration-none text-white hover:u-color-folk-purple hover:u-bg-folk-white py-2 px-4"
                href="<?php echo get_field( 'link_do_botao', 'option' ) ?>">
                    <?php echo get_field( 'botao', 'option' ) ?>
                </a>
            </div>
        </div>
    </div>
</section>
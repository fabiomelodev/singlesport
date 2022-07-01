
<ul class="l-social-media">
    <?php  if( get_field( 'facebook', 'option' ) ) : ?>
            <li 
            class="l-social-media__item" 
            style="background-color: <?php echo get_field( 'cor_de_fundo', 'option' ) ?>">
                <a
                class="l-social-media__link l-social-media__facebook"
                href="<?php echo get_field( 'facebook', 'option' ) ?>"
                target="_blank"
                rel="noreferrer noopener">
                    Link do Facebook
                </a>
            </li>
    <?php endif; ?>

    <?php if( get_field( 'instagram', 'option' ) ) : ?>
            <li 
            class="l-social-media__item mx-3" 
            style="background-color: <?php echo get_field( 'cor_de_fundo', 'option' ) ?>">
                <a
                class="l-social-media__link l-social-media__instagram"
                href="<?php echo get_field( 'instagram', 'option' ) ?>"
                target="_blank"
                rel="noreferrer noopener">
                    Link do Instagram
                </a>
            </li>
    <?php endif; ?>

    <?php if( get_field( 'whatsapp', 'option' ) ) : ?>
            <li 
            class="l-social-media__item" 
            style="background-color: <?php echo get_field( 'cor_de_fundo', 'option' ) ?>">
                <a
                class="l-social-media__link l-social-media__whatsapp"
                href="<?php echo get_field( 'whatsapp', 'option' ) ?>"
                target="_blank"
                rel="noreferrer noopener">
                    Link do Whatsapp
                </a>
            </li>
    <?php endif; ?>
</ul>
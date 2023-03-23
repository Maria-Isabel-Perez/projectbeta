<footer>

    <div class="footer__logo">

    <a href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo ( 'template_url' ); ?>/img/basis-visuals-logo.svg" alt="<?php bloginfo ( 'name' ); ?>">
    </a>

    </div>

    <div class="footer__legend">
        <p>✨ Estudio de branding para emprendedores, <strong>100% online</strong> desde España🇪🇸.
        <br>
        Apoyando a comunidades latinas a progresar en el extranjero 🇨🇴✨</p>
    </div>

    <div class="footer__contact">
        <p id="contact__text">¿SEGUIMOS EN CONTACTO?</p>
        <p id="email"><a href="mailto:<?php bloginfo ( 'admin_email' ); ?>"><?php bloginfo ( 'admin_email' ); ?></a></p>
    </div>

    <?php
            
            wp_nav_menu ( array
            (
                'theme_location' => 'footer-menu-center',
                'container' => false,
                'menu_class' => 'center'
            )); 
                
        ?>



    <?php wp_footer(); ?>



</footer>

<div class="divider"></div>

<footer>

<main>

    
    <div class="footer__logo">

    <a href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo ( 'template_url' ); ?>/img/basis-visuals-logo.svg" alt="<?php bloginfo ( 'name' ); ?>">
    </a>

    </div>

    <section id="footer-info">

    <div class="footer__legend">
        <p>✨ Estudio de branding para emprendedores, <strong>100% online</strong> desde España🇪🇸.
        <br>
        Apoyando a comunidades latinas a progresar en el extranjero 🇨🇴✨</p>
    </div>

    <div class="footer__contact">
        <p id="contact__text">¿SEGUIMOS EN CONTACTO?</p>
        <p id="email"><a href="mailto:<?php bloginfo ( 'admin_email' ); ?>"><?php bloginfo ( 'admin_email' ); ?></a></p>
    </div>

    </section>

    <div class="legal">
        <p>Aviso Legal
        <br>Política de privacidad
        <br>Cookies
        <br><br>© 2023          
        </p>
        
    </div>



    <?php wp_footer(); ?>

</main>

</footer>

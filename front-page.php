<!-- Calendly link widget begin 
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/mariaisabelperez/15min?primary_color=b27cf0'});return false;">¡Agenda aquí tu asesoría gratuita!</a>
Calendly link widget end -->

<?php get_header(); the_post(); ?>

    <div class="claim">

        <img class="icono-carita-feliz" src="<?php bloginfo ( 'template_url' ); ?>/img/smiley.svg" alt="">
            <h1>Si estás comenzando un nuevo negocio, <br>
        <strong>¡Basis Visuals está aquí para ayudarte!</strong> <br> </h1>

            <div class="claim__secondaryinfo">
            <p class="info-claim"><span id="subrayado-negro">Te brindamos los recursos gráficos base, necesarios para que puedas 
            construir una identidad visual impactante desde el principio.</span></p>
            </div>
            
        <div class="buttons">
            
            <a href="<?php echo home_url ( '/Servicios/' ); ?>" class="btn">¡CUÉNTAME MÁS!</a>

        </div>
     

    </div>



    <div class="galeria">

        <div class="galeria__fotos">
            <img src="<?php bloginfo ( 'template_url' ); ?>/img/companions.jpg" alt="<?php bloginfo ( 'companions' ); ?>">
            <img src="<?php bloginfo ( 'template_url' ); ?>/img/paws.jpg" alt="<?php bloginfo ( 'companions' ); ?>">
            <img src="<?php bloginfo ( 'template_url' ); ?>/img/growgreen.jpg" alt="<?php bloginfo ( 'companions' ); ?>">
            <img src="<?php bloginfo ( 'template_url' ); ?>/img/seven.jpg" alt="<?php bloginfo ( 'companions' ); ?>">
            <img src="<?php bloginfo ( 'template_url' ); ?>/img/daycare.jpg" alt="<?php bloginfo ( 'companions' ); ?>">
            <img class="abuela" src="<?php bloginfo ( 'template_url' ); ?>/img/abuela.jpg" alt="<?php bloginfo ( 'companions' ); ?>">
        </div>

    </div>



        <div class="claim__dos">

            <h2>Te brindo las bases gráficas para que tu negocio tenga un <i><span id="subrayado-amarillo">aspecto profesional y genere credibilidad.</span></i></h2>
            
            <p>Conoce los tres paquetes que te ofrezco para impulsar tu negocio.
            <br>¿Cuál de los 03 es el kit de branding que más le favorece a tu marca?</p>

            <div class="buttons">
            
            <a href="<?php echo home_url ( '/Servicios/' ); ?>" class="btn">¡QUIERO MI MARCA!</a>

        </div>
     

    </div>


<?php get_footer(); ?>
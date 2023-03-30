<?php /* Template name: Servicios */ ?>

<?php get_header(); the_post(); ?>

<div class="servicios">

    <?php the_content(); ?>

</div>

<div class="servicios__dos">

    <div class="pack starter">
        <p id="titulo-pack">STARTER PACK</p> 
        <p>Los infaltables para comenzar con tu emprendimiento.
        Elementos esenciales para tu identidad visual.</p>
        <ul>
           <li>Logo</li>
           <li>Tipografías</li>  
           <li>Colores corporativos.</li>
           <li>*Obsequio: grafismos e íconos!</li>
           <br>
        </ul>

    </div>

    <div class="pack pro">
        <p id="titulo-pack">PRO PACK</p> 
        <p>Los esenciales para tu identidad visual + 
        Las reglas de tu marca para futuras implementaciones. </p>
        <ul>
           <li>Starter Pack</li>
           <li>Manual de marca</li>  
        </ul>

    </div>

    <div class="pack expert">
        <p id="titulo-pack">EXPERT PACK</p> 
        <p>Elementos que además de ser la cara de tu empresa, 
        te permitirán autogestionarla con autonomía a futuro.</p>
        <ul>
           <li>Starter + Pro</li>
           <li>06 Post para redes sociales</li>
           <li>06 Plantillas de posts en Canva para editar</li>   
        </ul>

    </div>



</div>

    

<div class=bloque-calendly>

        <img id="estrella" src="<?php bloginfo ( 'template_url' ); ?>/img/estrella.svg" alt="<?php bloginfo ( 'estrella' ); ?>">
        <p class="texto-calendly">Solicita una sesión gratuita de 15 minutos para asesorarte sobre cuál es el kit de branding que te va mejor.</p>
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
        <a class="calendly__dos" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/mariaisabelperez/15min?primary_color=b27cf0'});return false;">AGENDA TU CITA AHORA</a>

</div>


<?php get_footer(); ?>
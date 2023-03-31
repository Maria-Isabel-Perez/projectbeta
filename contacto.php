<?php /* Template name: contacto */ ?>

<?php get_header(); the_post(); ?>

<div class="contacto">


    <div class="contact-info">
        <?php the_content(); ?>

        <div class="buttons">
            <a href= 'https://calendly.com/mariaisabelperez/15min' class="link-calendly" target="_blank">¡AGENDA AQUÍ TU ASESORÍA GRATUITA!</a> 
        </div>
    </div>


    <div class="contact-info-dos">

        <p class="titulo-contacto">Puedes contactarme por email, 
        te responderé lo antes posible.</p>

        <div class="form">

            <input type="text" placeholder="NOMBRE COMPLETO*" required>
            <input type="text" placeholder="CORREO ELECTRÓNICO*" required>
            <input type="text" placeholder="¿CUÁL KIT TE INTERESA?*" required>
            <input type="text" placeholder="¿DÓNDE TE ENCUENTRAS?*" required>
            <input type="text" placeholder="¿CÓMO PUEDO AYUDARTE?*" required id="respuesta-form">

        </div>

        <button class="btn"> ENVIAR </button>

    </div>

</div>

<?php get_footer(); ?>
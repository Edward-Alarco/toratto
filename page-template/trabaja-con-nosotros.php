<?php
/*
    Template name: trabaja-con-nosotros
*/

get_header();
?>

<section class="banner_inline trabaja">
    <div class="contenedor">
        <h1>Trabaja <b>con <span>nosotros</span></b></h1>
    </div>
</section>

<section class="contact_form contacto_section">
    <div class="contenedor">
        <h2>Completa el siguiente formulario</h2>
        <?php echo do_shortcode('[contact-form-7 id="137" title="Trabaja con Nosotros"]') ?>
    </div>
</section>


<?php get_template_part('inc/duda'); ?>

<?php get_footer(); ?>
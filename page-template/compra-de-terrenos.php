<?php
/*
    Template name: compra-terrenos
*/

get_header();
?>

<section class="banner_inline terrenos">
    <div class="contenedor">
        <h1>¿Deseas <b>vender <span>tu terreno?</span></b></h1>
    </div>
</section>

<section class="compra_terrenos">
    <div class="contenedor side right">
        <div class="row">
            <div class="col">
                <h2>Nuestro servicio compra de terrenos</h2>
                <div class="w-100">
                    <p>Si usted es propietario de un terreno y le interesa negociarlo para el desarrollo de un proyecto, puede dejarnos sus datos completos y después de una evaluación, nos pondremos en contacto.</p>
                </div>
            </div>
            <div class="col">
                <img src="<?php echo IMG; ?>/compra/compra-terrenos.jpg">
            </div>
        </div>
    </div>
</section>

<section class="contact_form">
    <div class="contenedor">
        <h2>Completa el siguiente formulario</h2>
        <?php echo do_shortcode('[contact-form-7 id="136" title="Compra Terrenos"]') ?>
    </div>
</section>

<?php get_template_part('inc/duda'); ?>

<?php get_footer(); ?>
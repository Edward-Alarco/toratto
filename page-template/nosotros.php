<?php
/*
    Template name: nosotros
*/

get_header();
?>

<section class="banner">

</section>

<?php get_template_part('inc/informacion_adicional'); ?>

<section class="valores">
    <div class="contenedor">
        <div class="row">
            <div class="valor">
                <img src="<?php echo IMG; ?>/nosotros/icon1.svg">
                <h3>COMPROMISO</h3>
            </div>
            <div class="valor">
                <img src="<?php echo IMG; ?>/nosotros/icon2.svg">
                <h3>CALIDAD</h3>
            </div>
            <div class="valor">
                <img src="<?php echo IMG; ?>/nosotros/icon3.svg">
                <h3>AHORRO</h3>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/desc_temporada'); ?>

<?php get_template_part('inc/duda'); ?>

<?php get_footer(); ?>
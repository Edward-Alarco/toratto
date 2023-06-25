<?php
/*
    Template name: proximos-proyectos
*/

get_header();
?>

<section class="banner_inline proximos" style="background: url(<?php echo get_field('imagen_banner')['url'] ?>)">
    <div class="contenedor">
        <h1>Descubre nuestros <b>próximos <span>proyectos</span></b></h1>
    </div>
</section>

<?php get_template_part('inc/informacion_adicional'); ?>

<section class="listado_departamentos">
    <div class="contenedor">
        <div class="contenedor_depas">
            <?php if(have_rows('proyectos')): while(have_rows('proyectos')): the_row(); ?>
            <div class="card card_departamento no_hover blur">
                <div class="card_image">
                    <img 
                        src="<?php echo get_sub_field('imagen')['url'] ?>" 
                        title="<?php echo get_sub_field('imagen')['title'] ?>" 
                        alt="<?php echo get_sub_field('imagen')['alt'] ?>" 
                        width="<?php echo get_sub_field('imagen')['width'] ?>" 
                        height="<?php echo get_sub_field('imagen')['height'] ?>" 
                        loading="lazy"
                    >
                </div>
                <div class="card_information w-100">
                    <div class="card_marca">
                        <img 
                            src="<?php echo get_sub_field('marca')['url'] ?>" 
                            title="<?php echo get_sub_field('marca')['title'] ?>" 
                            alt="<?php echo get_sub_field('marca')['alt'] ?>" 
                            width="<?php echo get_sub_field('marca')['width'] ?>" 
                            height="<?php echo get_sub_field('marca')['height'] ?>" 
                            loading="lazy"
                        >
                    </div>
                    <div class="card_ubicacion">
                        <h3>Próximamente</h3>
                    </div>
                    <div class="card_direccion w-100">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        <p><?php echo get_sub_field('direccion'); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile;else: ?>
            <p class="noone">Aún no tenemos próximos proyectos</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="nuevo_paso">
    <div class="contenedor">
        <div class="row start">
            <div class="col">
                <h2>¡Tu nuevo hogar <b>está a un solo paso!</b></h2>
            </div>
            <div class="col">
                <div class="contact_box contacto_section">
                    <p>Ingrese sus datos en el siguiente formato y en breve un asesor se pondrá en contacto con usted:</p>
                    <?php echo do_shortcode('[contact-form-7 id="157" title="Hogar a un solo paso"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/departamentos_en_venta'); ?>

<?php get_template_part('inc/desc_temporada'); ?>

<?php get_footer(); ?>
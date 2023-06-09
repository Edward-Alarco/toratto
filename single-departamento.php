<?php

get_header();

$ID = get_the_ID();

$taxonomy = 'departamentosgenero';
//$categories = get_the_terms( $ID, $taxonomy );

?>

<section class="depa_banner" style="background: url(<?php echo get_field('imagen_banner')['url']; ?>);">
    <div class="contenedor">
        <div class="ubication">
            <div class="info"><p>Entrega Inmediata</p></div>
            <div class="logo">
                <img src="<?php echo get_field('imagen_logo')['url'] ?>" 
                    alt="<?php echo get_field('imagen_logo')['alt'] ?>" 
                    title="<?php echo get_field('imagen_logo')['title'] ?>" 
                    width="<?php echo get_field('imagen_logo')['width'] ?>" 
                    height="<?php echo get_field('imagen_logo')['height'] ?>" 
                    loading="lazy">
            </div>
            <div class="place-2"><p><?php echo get_field('distrito') ?></p></div>
        </div>
    </div>
</section>

<section class="hero_img">
    <?php if(have_rows('vistas')): ?>
    <div class="contenedor xxl">
        <div class="splide vistas" id="splideHero">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while(have_rows('vistas')): the_row(); ?>
                    <li class="splide__slide">
                        <img src="<?php echo get_sub_field('imagen_vista')['url'] ?>" 
                            alt="<?php echo get_sub_field('imagen_vista')['alt'] ?>" 
                            title="<?php echo get_sub_field('imagen_vista')['title'] ?>" 
                            width="<?php echo get_sub_field('imagen_vista')['width'] ?>" 
                            height="<?php echo get_sub_field('imagen_vista')['height'] ?>" 
                            loading="lazy">
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if(have_rows('vistas')): ?>
    <div class="contenedor xl">
    <?php else: ?>
    <div class="contenedor xl" style="border-radius:20px">
    <?php endif; ?>

        <div class="depa_info">
            <div>
                <img src="<?php echo IMG; ?>/depa/marker.png">
                <p><b>Jr. Coronel Zegarra 758 Jesús María</b></p>
            </div>
            <div>
                <a href="#" class="waze">
                    <img src="<?php echo IMG; ?>/depa/waze.png">
                </a>
            </div>
            <div>
                <img src="<?php echo IMG; ?>/inicio/rooms.png">
                <p>Hasta <b>3 dormitorios</b></p>
            </div>
            <div>
                <img src="<?php echo IMG; ?>/inicio/m2.png">
                <p>Desde <b>73.48 hasta 101.62 m²</b></p>
            </div>
            <div>
                <a href="" class="download">
                    <img src="<?php echo IMG; ?>/depa/pdf.png">
                    <p>Descargar Brochure</p>
                </a>
            </div>
        </div>
    </div>
</section>

<?php if(have_rows('caracteristicas')): ?>
<section class="caracteristicas">
    <div class="contenedor small">
        <div class="caracteristicas_caja">
            <h2>Características del Proyecto</h2>
            <div class="caracteristicas-contenedor">
                <?php while(have_rows('caracteristicas')): the_row(); ?>
                <div class="caracteristica">
                    <img src="<?php echo get_sub_field('imagen_caracteristica')['url'] ?>" 
                        alt="<?php echo get_sub_field('imagen_caracteristica')['alt'] ?>" 
                        title="<?php echo get_sub_field('imagen_caracteristica')['title'] ?>" 
                        width="<?php echo get_sub_field('imagen_caracteristica')['width'] ?>" 
                        height="<?php echo get_sub_field('imagen_caracteristica')['height'] ?>" 
                        loading="lazy">
                    <div>
                        <h3><?php echo get_sub_field('nombre_caracteristica'); ?></h3>
                        <p><?php echo get_sub_field('descripcion_caracteristica'); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_template_part('inc/desc_temporada'); ?>

<?php get_template_part('inc/duda'); ?>

<?php get_footer(); ?>
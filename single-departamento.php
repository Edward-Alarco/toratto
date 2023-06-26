<?php

get_header();

$ID = get_the_ID();
$taxonomy = 'departamentosgenero';
//$categories = get_the_terms($ID, $taxonomy);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

<section class="depa_banner" style="background: url(<?php echo get_field('imagen_banner')['url']; ?>);">
    <div class="contenedor">
        <div class="ubication">
            <div class="info">
                <p><?php echo get_field('etiqueta') ?></p>
            </div>
            <div class="logo">
                <img src="<?php echo get_field('imagen_logo')['url'] ?>" alt="<?php echo get_field('imagen_logo')['alt'] ?>" title="<?php echo get_field('imagen_logo')['title'] ?>" width="<?php echo get_field('imagen_logo')['width'] ?>" height="<?php echo get_field('imagen_logo')['height'] ?>" loading="lazy">
            </div>
            <div class="place-2">
                <p><?php echo get_field('distrito') ?></p>
            </div>
        </div>
    </div>
</section>

<section class="hero_img">
    <?php if (have_rows('vistas')) : ?>
        <div class="contenedor xxl">
            <div class="splide vistas" id="splideHero">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php while (have_rows('vistas')) : the_row(); ?>
                            <li class="splide__slide">
                                <img src="<?php echo get_sub_field('imagen_vista')['url'] ?>" alt="<?php echo get_sub_field('imagen_vista')['alt'] ?>" title="<?php echo get_sub_field('imagen_vista')['title'] ?>" width="<?php echo get_sub_field('imagen_vista')['width'] ?>" height="<?php echo get_sub_field('imagen_vista')['height'] ?>" loading="lazy">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (have_rows('vistas')) : ?>
        <div class="contenedor xl">
        <?php else : ?>
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

<?php if (have_rows('caracteristicas')) : ?>
    <section class="caracteristicas">
        <div class="contenedor small">
            <div class="caracteristicas_caja">
                <h2>Características del Proyecto</h2>
                <div class="caracteristicas-contenedor">
                    <?php while (have_rows('caracteristicas')) : the_row(); ?>
                        <div class="caracteristica">
                            <img src="<?php echo get_sub_field('imagen_caracteristica')['url'] ?>" alt="<?php echo get_sub_field('imagen_caracteristica')['alt'] ?>" title="<?php echo get_sub_field('imagen_caracteristica')['title'] ?>" width="<?php echo get_sub_field('imagen_caracteristica')['width'] ?>" height="<?php echo get_sub_field('imagen_caracteristica')['height'] ?>" loading="lazy">
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

<?php if(have_rows('avances')): ?>
<section class="avance_obra" id="galeria">
    <div class="contenedor">
        <h2><?php echo get_field('titulo_avance') ?></h2>
        <div class="masonry">
            <?php while(have_rows('avances')): the_row(); ?>
            <div class="masonry_item">
                <a href="<?php echo get_sub_field('imagen_avance')['url'] ?>" class="glightbox">
                    <img src="<?php echo get_sub_field('imagen_avance')['url'] ?>" 
                        alt="<?php echo get_sub_field('imagen_avance')['alt'] ?>" 
                        title="<?php echo get_sub_field('imagen_avance')['title'] ?>" 
                        width="<?php echo get_sub_field('imagen_avance')['width'] ?>" 
                        height="<?php echo get_sub_field('imagen_avance')['height'] ?>" loading="lazy">
                </a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if(get_field('mostrar_seccion_sueno')): ?>
<section class="dreams" style="background: url(<?php echo get_field('fondo')['url'] ?>)">
    <div class="contenedor">
        <div class="dreams_contenido">
            <img src="<?php echo IMG;?>/depa/rombo.svg" alt="Imagen fondo" title="Imagen fondo" class="p-absolute rombo">
            <h2><?php echo get_field('titulo_sueno') ?></h2>

            <?php if(!empty(get_field('enlace_vista_360'))): ?>
            <a href="<?php echo get_field('enlace_vista_360') ?>">Haz clic aquí para verlo en 360°</a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="planos" id="plano">
    <div class="contenedor xl">
        <h2>¡Tu nuevo hogar está a un solo paso!</h2>
        <div class="contacto_section w-100 contact_planos">
            <div class="row start">
                <div class="col">
                    <p>Ingrese sus datos en el siguiente formato y en breve un asesor se pondrá en contacto con usted:</p>
                    <?php echo do_shortcode('[contact-form-7 id="158" title="Formulario Planos"]'); ?>
                    <div class="asesor">
                        <img src="<?php echo IMG; ?>/depa/asesor.png">
                        <div>
                            <p>Silvia Granda</p>
                            <p>Asesor inmobiliario</p>
                            <p><i class="fas fa-phone-alt"></i> +51 992 856 081</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="esquema">
                        <div class="dormitorios w-100">
                            <button data-id="1d" type="button" class="active">1 Dorm.</button>
                            <button data-id="2d" type="button">2 Dorm.</button>
                            <button data-id="3d" type="button">3 Dorm.</button>
                        </div>
                        <?php 
                            /*$contador = 0;
                            if(have_rows('lista_flat')){
                                while(have_rows('lista_flat')){
                                    the_row();
                                    $contador++;
                                }
                            }*/
                        ?>
                        <div class="flat w-100">

                            <?php //if($contador>10): ?>
                            <?php //else: ?>
                            <?php //endif; ?>
                            <!-- <div class="custom-select wh-100 scroll"> -->

                            <div class="custom-select wh-100">
                                <select id="select">
                                    <?php $x=1; if(have_rows('lista_flat')): while(have_rows('lista_flat')): the_row(); ?>
                                    <option value="<?php echo $x; ?>"><?php echo get_sub_field('flat') ?></option>
                                    <?php $x++;endwhile;endif; ?>
                                </select>
                                <div class="select-styled">
                                    <img src="<?php echo IMG; ?>/depa/sel.jpg">
                                    <p>Seleccionar Flat</p>
                                    <ion-icon name="chevron-down-outline"></ion-icon>
                                </div>
                                <ul class="select-options">
                                    <?php $y=1; if(have_rows('lista_flat')): while(have_rows('lista_flat')): the_row(); ?>
                                        <?php if(get_sub_field('cant_dormitorios') == '1d'): //mostrar ?>
                                        <li class="sel_item" data-value="<?php echo $y; ?>" data-dormitorios="<?php echo get_sub_field('cant_dormitorios'); ?>" data-img="<?php echo get_sub_field('imagen')['url'] ?? ''; ?>"><?php echo get_sub_field('flat') ?></li>
                                        <?php else: //ocultar ?>
                                        <li class="sel_item none" data-value="<?php echo $y; ?>" data-dormitorios="<?php echo get_sub_field('cant_dormitorios'); ?>" data-img="<?php echo get_sub_field('imagen')['url'] ?? ''; ?>"><?php echo get_sub_field('flat') ?></li>
                                        <?php endif; ?>
                                    <?php $y++;endwhile;endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $primera_fila = false;
                    ?>
                    <div class="canvas w-100 p-relative">
                        <div>
                            <p>Haz clic aquí</p>
                        </div>
                        <?php if(have_rows('lista_flat')): while(have_rows('lista_flat')): the_row(); ?>
                        <?php if (!$primera_fila): ?>
                            <a href="<?php echo get_sub_field('imagen')['url'] ?>" class="glightbox3 wh-100" style="display:block">
                                <img 
                                    src="<?php echo get_sub_field('imagen')['url'] ?>" 
                                    width="<?php echo get_sub_field('imagen')['width'] ?>" 
                                    height="<?php echo get_sub_field('imagen')['height'] ?>" 
                                    title="Plano" alt="Plano" loading="lazy">
                            </a>
                        <?php $primera_fila = true; endif; ?>
                        <?php endwhile;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="maps p-relative">
    <div class="contenedor xxl">
        <div class="p-absolute actions">
            <div class="ubication" style="align-items:flex-start">
                <div class="place" style="background:#6CC24A">
                    <p><?php echo get_field('nombre_proyecto'); ?></p>
                </div>
                <div class="place-2">
                    <p><?php echo get_field('distrito') ?></p>
                </div>
            </div>
            <?php if(!empty(get_field('enlace_maps'))): ?>
            <a href="<?php echo get_field('enlace_maps') ?>" class="waze" target="_blank">
                <div>
                    <p>Ver con<br>google maps</p>
                </div>
                <div>
                    <img src="<?php echo IMG; ?>/depa/maps.png" alt="Maps" title="Maps">
                </div>
            </a>
            <?php endif; ?>
            <?php if(!empty(get_field('enlace_waze'))): ?>
            <a href="<?php echo get_field('enlace_waze') ?>" class="maps" target="_blank">
                <div>
                    <p>Ver con<br>Waze</p>
                </div>
                <div>
                    <img src="<?php echo IMG; ?>/depa/wase.png" alt="Waze" title="Waze">
                </div>
            </a>
            <?php endif; ?>
        </div>
        <img src="<?php echo get_field('imagen_mapa')['url'] ?>" 
            alt="<?php echo get_field('imagen_mapa')['alt'] ?>" 
            title="<?php echo get_field('imagen_mapa')['title'] ?>" 
            width="<?php echo get_field('imagen_mapa')['width'] ?>" 
            height="<?php echo get_field('imagen_mapa')['height'] ?>" 
            loading="lazy" class="w-100">
    </div>
</section>

<?php get_template_part('inc/departamentos_en_venta'); ?>

<section class="visitanos">
    <div class="contenedor small">
        <h2>Visita nuestra <b>sala de ventas</b></h2>
        <ul>
            <li>
                <i class="fas fa-map-marker-alt"></i>
                <h3>Jr. Manuel Gómez N° 366-390 Lince</h3>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <h3>(01) 445 - 8897</h3>
            </li>
        </ul>
    </div>
</section>

<?php get_template_part('inc/duda'); ?>

<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script>
    if(document.querySelector('#galeria')){
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true
        });
    }
    if(document.querySelector('#plano')){
        const lightbox = GLightbox({
            selector: '.glightbox3',
            touchNavigation: false,
            loop: true,
            draggable: false,
            preload: true,
        });
    }
</script>
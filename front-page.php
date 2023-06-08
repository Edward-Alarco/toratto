<?php
/*
    Template name: inicio
*/

get_header();
?>

<main>
    <div class="splide wh-100" id="splideHero">
        <div class="splide__track wh-100">
            <ul class="splide__list wh-100">
                <li class="splide__slide wh-100">
                    <div class="p-absolute ubication">
                        <div><p>En construcción</p></div>
                        <div><p>Livorno</p></div>
                        <div><p>Lince</p></div>
                    </div>
                    <img src="<?php echo IMG; ?>/inicio/hero1.png" class="wh-100">
                </li>
                <li class="splide__slide wh-100">
                    <div class="p-absolute ubication">
                        <div><p>Pre venta</p></div>
                        <div><p>Lombardía</p></div>
                        <div><p>Lince</p></div>
                    </div>
                    <img src="<?php echo IMG; ?>/inicio/hero2.png" class="wh-100">
                </li>
            </ul>
        </div>
    </div>
</main>

<section class="en_venta">
    <div class="contenedor">
        <h2>Departamentos en venta</h2>
        <p>Descubre las mejores opciones para tu futuro depa</p>
    </div>
    <div class="contenedor">
        <div class="splide" id="splideDepartamentos">
            <div class="splide__track">
		        <ul class="splide__list">
			        <li class="splide__slide">
                        <div class="card card_departamento">
                            <div class="card_image">
                                <img src="<?php echo IMG; ?>/inicio/card.png">
                            </div>
                            <div class="card_information w-100">
                                <div class="card_marca">
                                    <img src="<?php echo IMG; ?>/inicio/logo-lombardia.png">
                                </div>
                                <div class="card_ubicacion">
                                    <h3>Lince</h3>
                                </div>
                                <div class="card_direccion w-100">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Jr. Manuel Gómez N° 366-390</p>
                                </div>
                                <div class="card_cuartos">
                                    <img src="<?php echo IMG; ?>/inicio/rooms.png">
                                    <p>Hasta <b>3 dormitorios</b></p>
                                </div>
                                <div class="card_metros">
                                    <img src="<?php echo IMG; ?>/inicio/m2.png">
                                    <p>Desde <b>40.3 hasta 151 m²</b></p>
                                </div>
                                <div class="card_boton w-100">
                                    <a href="#">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </li>
		        </ul>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/duda'); ?>

<section class="ultimas_noticias">
    <div class="contenedor">
        
    </div>
</section>

<?php get_footer(); ?>
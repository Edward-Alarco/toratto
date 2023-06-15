<?php
/*
    Template name: nosotros
*/

get_header();
?>

<section class="banner_inline nosotros">
    <div class="contenedor">
        <h1><b><span>Nosotros</span></b></h1>
    </div>
</section>

<?php get_template_part('inc/informacion_adicional'); ?>

<section class="contenido_texto contenido_1">
    <div class="contenedor side left">
        <div class="row">
            <div class="col">
                <img src="<?php echo IMG; ?>/nosotros/img1.jpg">
            </div>
            <div class="col">
                <div class="contenido">
                    <h2>Tenemos lo mejor para ti y tu familia</h2>
                    <div>
                        <p>Toratto Grupo Inmobiliario desarrolla su actividad empresarial en el área de la planificación, construcción y promoción de proyectos inmobiliarios por y para el cuidado de la familia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mvision">
    <div class="contenedor">
        <div class="row">
            <div class="col">
                <div class="card_valor" style="background:#004C97">
                    <div class="card_valor_front">
                        <img src="<?php echo IMG; ?>/nosotros/icono2.svg">
                        <h2>Misión</h2>
                    </div>
                    <div class="card_valor_back">
                        <div class="card_valor_title">
                            <img src="<?php echo IMG; ?>/nosotros/icono2.svg">
                            <h3>Misión</h3>
                        </div>
                        <p>Dedicados a la construcción de proyectos inmobiliarios, orientada a generar bienestar integral a las personas, mediante el desarrollo de soluciones de vivienda, basados en la pasión por nuestro trabajo; ofreciendo productos que permitan mejorar la calidad de vida de nuestros clientes.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_valor" style="background:#6CC24A">
                    <div class="card_valor_front">
                        <img src="<?php echo IMG; ?>/nosotros/icono1.svg">
                        <h2>Visión</h2>
                    </div>
                    <div class="card_valor_back">
                        <div class="card_valor_title">
                            <img src="<?php echo IMG; ?>/nosotros/icono1.svg">
                            <h3>Visión</h3>
                        </div>
                        <p>Ser reconocidos, por sus valores, diseño, gestión e innovación y sólido prestigio en una de las mejores empresas de la construcción; alcanzando posicionamiento y prestigio nacional, satisfaciendo las necesidades de nuestros clientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contenido_texto contenido_2">
    <div class="contenedor side right">
        <div class="row">
            <div class="col">
                <div class="contenido">
                    <h2>¿Por qué elegirnos entre la competencia?</h2>
                    <div>
                        <p>En Toratto Grupo Inmobiliario destacamos el interés para la mejoría del hogar de nuestros clientes, es por ello que brindamos soluciones de vivienda en la construcción de proyectos inmobiliarios.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="<?php echo IMG; ?>/nosotros/img2.jpg">
            </div>
        </div>
    </div>
</section>

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

<section class="ecofriendly">
    <div class="contenedor">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h2>Orgullosamente ecofriendly</h2>
                <div>
                    <p>Contamos con criterios de sostenibilidad que te permiten ahorrar y, a la vez, ser parte de nuestro compromiso de cuidar el planeta.</p>
                </div>
                <a href="#">Ver más</a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/desc_temporada'); ?>

<?php get_template_part('inc/duda'); ?>

<?php get_footer(); ?>
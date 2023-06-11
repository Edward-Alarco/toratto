<?php
/*
    Template name: blog
*/

get_header();
?>

<section class="banner_inline blog">
    <div class="contenedor">
        <h1>Descubre las últimas noticias <b>en el mundo <span>inmobiliario</span></b></h1>
    </div>
</section>

<section class="articulos_blog">
    <div class="contenedor">
        <div class="busqueda_avanzada w-100">
            <div class="filtros w-100">
                
            </div>
            <div class="buscador w-100">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/desc_temporada'); ?>

<?php get_footer(); ?>
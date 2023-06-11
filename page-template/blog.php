<?php
/*
    Template name: blog
*/

get_header();
?>

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
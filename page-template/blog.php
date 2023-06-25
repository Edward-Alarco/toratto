<?php
/*
    Template name: blog
*/

get_header();
?>

<section class="banner_inline blog" style="background: url(<?php echo get_field('imagen_banner')['url'] ?>)">
    <div class="contenedor">
        <h1>Descubre las últimas noticias <b>en el mundo <span>inmobiliario</span></b></h1>
    </div>
</section>

<?php 
    global $wp_query;
    $wp_query = new WP_Query( array(
        'post_type' => 'post', 
        'posts_per_page' => 500,
        'post_status' => 'publish'
    ));
?>

<section class="articulos_blog">
    <div class="contenedor">
        <div class="busqueda_avanzada w-100">
            <div class="filtros w-100" id="filtros">
                <button class="filtro-nombres w-100">
                    <img src="<?php echo IMG; ?>/blog/filtro1.svg">
                    <p>Filtrar por Nombre</p>
                </button>
                <button class="filtro-vistos w-100">
                    <img src="<?php echo IMG; ?>/blog/filtro2.svg">
                    <p>Filtrar por Más vistos</p>
                </button>
            </div>
            <div class="buscador w-100">
                <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                    <i class="fas fa-search"></i>
                    <input type="search" class="search-field" placeholder="Buscar" value="<?php echo get_search_query() ?>" name="s" />
                    <button type="submit" class="search-submit">Buscar</button>
                </form>
                <?php //get_search_form(); ?>
            </div>
        </div>
    </div>
    <div class="contenedor small">
        <div class="busqueda_contenido">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php if(has_post_thumbnail()): ?>
            <?php $vistas = get_post_meta(get_the_ID(), 'vistas', true); ?>
            <a class="post" href="<?php the_permalink(); ?>" title="<?php the_title();?>" data-nombre="<?php echo get_the_title();?>" data-vistas="<?php echo $vistas; ?>">
                <div class="post_image">
                    <?php
                        $thumbID = get_post_thumbnail_id( $post->ID );
                        $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                        echo '<img src="'.$imgDestacada[0].'" title="'.get_the_title().'" alt="'.get_the_title().'">';
                    ?>
                </div>
                <div class="post_information">
                    <div class="post_head">
                        <p><?php echo ucfirst(get_the_date('F-d')); ?></p>
                        <h3><?php echo get_the_title();?></h3>
                    </div>
                    <span>Ver más</span>
                </div>
            </a>
            <?php endif; ?>
            <?php endwhile;endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_template_part('inc/desc_temporada'); ?>

<?php get_footer(); ?>
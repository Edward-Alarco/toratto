<?php
/*
    Template name: inicio
*/

get_header();
?>

<main class="p-relative">
    <div class="contenedor">
        <h1>
            <span>Hacemos que</span>
            <span>tu hogar soñado</span>
            <span>sea una realidad</span>
        </h1>
        <p>Tu nueva vida, empieza hoy</p>
        <a href="#">Conoce tu nuevo depa</a>
    </div>
    <div class="splide wh-100" id="splideHero">
        <div class="splide__track wh-100">
            <ul class="splide__list wh-100">
                <li class="splide__slide wh-100">
                    <div class="p-absolute ubication">
                        <div class="info"><p>Pre venta</p></div>
                        <div class="place"><p>Lombardía</p></div>
                        <div class="place-2"><p>Lince</p></div>
                    </div>
                    <img src="<?php echo IMG; ?>/inicio/hero1.png" class="wh-100">
                </li>
                <li class="splide__slide wh-100">
                    <div class="p-absolute ubication">
                        <div class="info"><p>Pre venta</p></div>
                        <div class="place"><p>Lombardía</p></div>
                        <div class="place-2"><p>Lince</p></div>
                    </div>
                    <img src="<?php echo IMG; ?>/inicio/hero2.png" class="wh-100">
                </li>
            </ul>
        </div>
    </div>
</main>

<?php get_template_part('inc/informacion_adicional'); ?>

<?php get_template_part('inc/departamentos_en_venta'); ?>

<?php get_template_part('inc/desc_temporada'); ?>

<section class="best_option">
    <div class="contenedor">
        <div class="row">
            <div class="col">
                <?php if(get_field('archivo_opcion')['type'] == 'image'): ?>
                    <img src="<?php echo get_field('archivo_opcion')['url'] ?>" 
                        alt="<?php echo get_field('archivo_opcion')['alt'] ?>" 
                        title="<?php echo get_field('archivo_opcion')['title'] ?>" 
                        width="<?php echo get_field('archivo_opcion')['width'] ?>" 
                        height="<?php echo get_field('archivo_opcion')['height'] ?>" 
                        loading="lazy">
                <?php else: ?>
                    <video controls>
                        <source src="<?php echo get_field('archivo_opcion')['url'] ?>">
                    </video>
                <?php endif; ?>
            </div>
            <div class="col">
                <h2><?php echo get_field('titulo_opcion') ?></h2>
                <?php echo get_field('descripcion_opcion') ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/duda'); ?>

<?php 
    global $wp_query;
    $wp_query = new WP_Query( array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
        'post_status' => 'publish'
    ));
?>

<section class="ultimas_noticias">
    <div class="contenedor">
        <h2>Últimas noticias<br>del mundo inmobiliario</h2>
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <?php if(has_post_thumbnail()): ?>
            <a class="post" href="<?php the_permalink(); ?>" title="<?php the_title();?>">
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
                        <h3><?php the_title();?></h3>
                    </div>
                    <span>Ver más</span>
                </div>
            </a>
            <?php endif; ?>
            <?php endwhile;endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php wp_reset_query(); ?>
        </div>
        <a href="<?php echo esc_url(home_url('blog')) ?>">Ver todos los proyectos</a>
    </div>
</section>

<section class="sociales">
    <div class="contenedor">
        <h2><?php echo get_field('titulo_redes') ?></h2>
        <div class="social">
            <ul>
                <?php get_template_part('inc/redes_sociales'); ?>
            </ul>
        </div>
    </div>
    <div class="contenedor xxl">
        <div class="splide" id="splidePublications">
            <div class="splide__track">
		        <ul class="splide__list">
		            <?php if(have_rows('publicaciones')): while(have_rows('publicaciones')): the_row(); ?>
			        <li class="splide__slide">
                        <?php echo get_sub_field('publicacion') ?>
                    </li>
                    <?php endwhile;endif; ?>
		        </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
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
        </div>
        <a href="<?php echo esc_url(home_url('blog')) ?>">Ver todos los proyectos</a>
    </div>
</section>

<section class="sociales">
    <div class="contenedor">
        <h2>¡Síguenos en nuestras redes sociales!</h2>
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
			        <li class="splide__slide">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHubSpotEspanol%2Fposts%2Fpfbid02VtEGvpeY2HbJ7uJpa4KRamJUQApY2ac76KTQetqoEhYYancmEm5U1htnxj6Wnidtl&show_text=true&width=500" width="500" height="713" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="splide__slide">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHubSpotEspanol%2Fposts%2Fpfbid02VtEGvpeY2HbJ7uJpa4KRamJUQApY2ac76KTQetqoEhYYancmEm5U1htnxj6Wnidtl&show_text=true&width=500" width="500" height="713" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="splide__slide">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHubSpotEspanol%2Fposts%2Fpfbid02VtEGvpeY2HbJ7uJpa4KRamJUQApY2ac76KTQetqoEhYYancmEm5U1htnxj6Wnidtl&show_text=true&width=500" width="500" height="713" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="splide__slide">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHubSpotEspanol%2Fposts%2Fpfbid02VtEGvpeY2HbJ7uJpa4KRamJUQApY2ac76KTQetqoEhYYancmEm5U1htnxj6Wnidtl&show_text=true&width=500" width="500" height="713" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="splide__slide">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHubSpotEspanol%2Fposts%2Fpfbid02VtEGvpeY2HbJ7uJpa4KRamJUQApY2ac76KTQetqoEhYYancmEm5U1htnxj6Wnidtl&show_text=true&width=500" width="500" height="713" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="splide__slide">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHubSpotEspanol%2Fposts%2Fpfbid02VtEGvpeY2HbJ7uJpa4KRamJUQApY2ac76KTQetqoEhYYancmEm5U1htnxj6Wnidtl&show_text=true&width=500" width="500" height="713" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="splide__slide">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHubSpotEspanol%2Fposts%2Fpfbid02VtEGvpeY2HbJ7uJpa4KRamJUQApY2ac76KTQetqoEhYYancmEm5U1htnxj6Wnidtl&show_text=true&width=500" width="500" height="713" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
		        </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
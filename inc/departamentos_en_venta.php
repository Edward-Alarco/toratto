<?php 
    global $wp_query;
    $wp_query = new WP_Query( array(
        'post_type' => 'departamento', 
        'posts_per_page' => 500,
        'post_status' => 'publish'
    ));
?>

<section class="en_venta">
    <div class="contenedor">
        <h2>Departamentos en venta</h2>
        <p>Descubre las mejores opciones para tu futuro depa</p>
    </div>
    <div class="contenedor">
        <?php if ( have_posts() ) : ?>
        <div class="splide" id="splideDepartamentos">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while ( have_posts() ) : the_post();?>
                    <?php if(has_post_thumbnail()): ?>
                    <li class="splide__slide">
                        <div class="card card_departamento">
                            <div class="card_tag">
                                <span>Pre Venta</span>
                            </div>
                            <div class="card_image">
                                <?php
                                    $thumbID = get_post_thumbnail_id( $post->ID );
                                    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                                    echo '<img src="'.$imgDestacada[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" loading="lazy">';
                                ?>
                            </div>
                            <div class="card_information w-100">
                                <div class="card_marca">
                                    <img 
                                        src="<?php echo get_field('imagen_logo')['url'] ?>" 
                                        title="<?php echo get_field('imagen_logo')['title'] ?>" 
                                        alt="<?php echo get_field('imagen_logo')['alt'] ?>" 
                                        width="<?php echo get_field('imagen_logo')['width'] ?>" 
                                        height="<?php echo get_field('imagen_logo')['height'] ?>" 
                                        loading="lazy"
                                    >
                                </div>
                                <div class="card_ubicacion">
                                    <h3><?php echo get_field('distrito'); ?></h3>
                                </div>
                                <div class="card_direccion w-100">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p><?php echo get_field('direccion_exacta') ?></p>
                                </div>
                                <div class="card_cuartos">
                                    <img src="<?php echo IMG; ?>/inicio/rooms.png">
                                    <?php if(get_field('dormitorios') == 1): ?>
                                    <p><b>1 dormitorio</b></p>
                                    <?php else: ?>
                                    <p>Hasta <b><?php echo get_field('dormitorios') ?> dormitorios</b></p>
                                    <?php endif; ?>
                                </div>
                                <div class="card_metros">
                                    <img src="<?php echo IMG; ?>/inicio/m2.png">
                                    <p>Desde <b><?php echo get_field('m2') ?></b></p>
                                </div>
                                <div class="card_boton w-100">
                                    <a href="<?php the_permalink(); ?>">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <?php else: ?>
        <p class="no-one">No hay productos disponibles</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <?php wp_reset_query(); ?>
    </div>
    <div class="contenedor">
        <a href="<?php echo esc_url(home_url('departamentos-en-venta')) ?>">Ver todos los proyectos</a>
    </div>
</section>
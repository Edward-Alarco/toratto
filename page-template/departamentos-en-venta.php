<?php
/*
    Template name: dep-venta
*/

get_header();
?>

<?php
    global $wp_query;
    $wp_query = new WP_Query(array(
        'post_type' => 'departamento',
        'posts_per_page' => 500,
        'post_status' => 'publish'
    ));
?>

<input type="hidden" name="uri" class="uri" value="<?php echo admin_url('admin-ajax.php'); ?>">
<section class="banner_rectangle deps" style="background: url(<?php echo get_field('imagen_banner')['url'] ?>)">
    <div class="contenedor xxl">
        <div class="caja_titulo">
            <div class="contenido">
                <h1>
                    Tú también puedes ser
                    <b>parte de la familia</b>
                    <em>Toratto</em>
                </h1>
            </div>
            <div class="hr"></div>
            <div class="contenido">
                <p>Descubre nuestros departamentos en venta</p>
            </div>
        </div>
    </div>
</section>

<section class="listado_departamentos articulos_blog">
    <div class="contenedor">
        <div class="busqueda_avanzada w-100">
            <div class="filtros w-100" id="filtros">
                <button class="filtro-distrito w-100">
                    <img src="<?php echo IMG; ?>/depa/peru.svg">
                    <p>Filtrar por distrito o ciudad</p>
                    <?php if ($wp_query->have_posts()) : ?>
                    <select name="distrito" id="distrito">
                        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <option value=""><?php echo get_field('distrito'); ?></option>
                        <?php endwhile; ?>
                    </select>
                    <?php endif; ?>
                </button>
                <button class="filtro-proyecto w-100">
                    <img src="<?php echo IMG; ?>/depa/marker.svg">
                    <p>Filtrar por proyecto</p>
                    <?php if ($wp_query->have_posts()) : ?>
                    <select name="proyecto" id="proyecto">
                        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        <option value=""><?php echo get_field('nombre_proyecto'); ?></option>
                        <?php endwhile; ?>
                    </select>
                    <?php endif; ?>
                </button>
            </div>
            <div class="buscador w-100">
                <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                    <i class="fas fa-search"></i>
                    <input type="hidden" value="departamento" name="p" />
                    <input type="search" class="search-field" placeholder="Buscar" value="<?php echo get_search_query() ?>" name="s" />
                    <button type="submit" class="search-submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="contenedor">
        <div class="contenedor_depas">
            <?php if ($wp_query->have_posts()) : ?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="card card_departamento" data-depa="<?php echo get_field('distrito'); ?>" data-proyecto="<?php echo get_field('nombre_proyecto'); ?>">
                            <?php if(!empty(get_field('tag'))): ?>
                            <div class="card_tag">
                                <span><?php echo get_field('tag'); ?></span>
                            </div>
                            <?php endif; ?>
                            <div class="card_image">
                                <?php
                                $thumbID = get_post_thumbnail_id($post->ID);
                                $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                echo '<img src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '" loading="lazy">';
                                ?>
                            </div>
                            <div class="card_information w-100">
                                <div class="card_marca">
                                    <img src="<?php echo get_field('imagen_logo')['url'] ?>" title="<?php echo get_field('imagen_logo')['title'] ?>" alt="<?php echo get_field('imagen_logo')['alt'] ?>" width="<?php echo get_field('imagen_logo')['width'] ?>" height="<?php echo get_field('imagen_logo')['height'] ?>" loading="lazy">
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
                                    <?php if (get_field('dormitorios') == 1) : ?>
                                        <p><b>1 dormitorio</b></p>
                                    <?php else : ?>
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
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="no-one">No hay productos disponibles</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php wp_reset_query(); ?>

<?php get_template_part('inc/informacion_adicional'); ?>

<br>

<?php get_template_part('inc/desc_temporada'); ?>

<?php get_template_part('inc/duda'); ?>

<?php get_footer(); ?>
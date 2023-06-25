<?php
/*
    Template name: nosotros
*/

get_header();
?>

<section class="banner_inline nosotros" style="background: url(<?php echo get_field('imagen_banner')['url'] ?>)">
    <div class="contenedor">
        <h1><b><span>Nosotros</span></b></h1>
    </div>
</section>

<?php get_template_part('inc/informacion_adicional'); ?>

<section class="contenido_texto contenido_1">
    <div class="contenedor side left">
        <div class="row">
            <div class="col">
                <img src="<?php echo get_field('imagen_1')['url'] ?>" 
                    alt="<?php echo get_field('imagen_1')['alt'] ?>" 
                    title="<?php echo get_field('imagen_1')['title'] ?>" 
                    width="<?php echo get_field('imagen_1')['width'] ?>" 
                    height="<?php echo get_field('imagen_1')['height'] ?>" 
                    loading="lazy"
                >
            </div>
            <div class="col">
                <div class="contenido">
                    <h2><?php echo get_field('titulo_1') ?></h2>
                    <div>
                        <?php echo get_field('contenido_1') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(have_rows('mision_y_vision')): ?>
<section class="mvision">
    <div class="contenedor">
        <div class="row">
            <?php while(have_rows('mision_y_vision')): the_row(); ?>
            <div class="col">
                <div class="card_valor" style="background:<?php echo get_row_index()==1 ? '#004C97' : '#6CC24A'; ?>">
                    <div class="card_valor_front">
                        <img src="<?php echo get_sub_field('imagen_mv')['url'] ?>" 
                            alt="<?php echo get_sub_field('imagen_mv')['alt'] ?>" 
                            title="<?php echo get_sub_field('imagen_mv')['title'] ?>" 
                            width="<?php echo get_sub_field('imagen_mv')['width'] ?>" 
                            height="<?php echo get_sub_field('imagen_mv')['height'] ?>" 
                            loading="lazy"
                        >
                        <h2><?php echo get_sub_field('titulo_mv') ?></h2>
                    </div>
                    <div class="card_valor_back">
                        <div class="card_valor_title">
                            <img src="<?php echo get_sub_field('imagen_mv')['url'] ?>" 
                                alt="<?php echo get_sub_field('imagen_mv')['alt'] ?>" 
                                title="<?php echo get_sub_field('imagen_mv')['title'] ?>" 
                                width="<?php echo get_sub_field('imagen_mv')['width'] ?>" 
                                height="<?php echo get_sub_field('imagen_mv')['height'] ?>" 
                                loading="lazy"
                            >
                            <h3><?php echo get_sub_field('titulo_mv') ?></h3>
                        </div>
                        <?php echo get_sub_field('contenido_mv') ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="contenido_texto contenido_2">
    <div class="contenedor side right">
        <div class="row">
            <div class="col">
                <div class="contenido">
                    <h2><?php echo get_field('titulo_2') ?></h2>
                    <div>
                        <?php echo get_field('contenido_2') ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="<?php echo get_field('imagen_2')['url'] ?>" 
                    alt="<?php echo get_field('imagen_2')['alt'] ?>" 
                    title="<?php echo get_field('imagen_2')['title'] ?>" 
                    width="<?php echo get_field('imagen_2')['width'] ?>" 
                    height="<?php echo get_field('imagen_2')['height'] ?>" 
                    loading="lazy"
                >
            </div>
        </div>
    </div>
</section>

<?php if(have_rows('valores')): ?>
<section class="valores">
    <div class="contenedor">
        <div class="row">
            <?php while(have_rows('valores')): the_row(); ?>
            <div class="valor">
                <img src="<?php echo get_sub_field('imagen_valor')['url'] ?>" 
                    alt="<?php echo get_sub_field('imagen_valor')['alt'] ?>" 
                    title="<?php echo get_sub_field('imagen_valor')['title'] ?>" 
                    width="<?php echo get_sub_field('imagen_valor')['width'] ?>" 
                    height="<?php echo get_sub_field('imagen_valor')['height'] ?>" 
                    loading="lazy"
                >
                <h3><?php echo strtoupper(get_sub_field('nombre_valor')) ?></h3>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="ecofriendly">
    <div class="contenedor">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h2><?php echo get_field('titulo_eco') ?></h2>
                <div>
                    <?php echo get_field('descripcion_eco') ?>
                </div>
                <?php if(!empty(get_field('boton_eco'))): ?>
                <a href="<?php echo get_field('boton_eco') ?>">Ver más</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/desc_temporada'); ?>

<?php get_template_part('inc/duda'); ?>

<?php get_footer(); ?>
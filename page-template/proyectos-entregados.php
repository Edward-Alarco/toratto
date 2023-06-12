<?php
/*
    Template name: proyectos-entregados
*/

get_header();
?>

<section class="banner_inline entregados">
    <div class="contenedor">
        <h1>Cada vez somos más <b>en la familia <span>Toratto</span></b></h1>
    </div>
</section>

<?php get_template_part('inc/informacion_adicional'); ?>

<?php if(have_rows('proyectos')): ?>
<section class="proyectos_entregados">
    <div class="contenedor">
        <?php while(have_rows('proyectos')): the_row(); ?>
        <div class="card card_departamento no_hover">
            <div class="card_image">
                <img 
                    src="<?php echo get_sub_field('imagen')['url'] ?>" 
                    title="<?php echo get_sub_field('imagen')['title'] ?>" 
                    alt="<?php echo get_sub_field('imagen')['alt'] ?>" 
                    width="<?php echo get_sub_field('imagen')['width'] ?>" 
                    height="<?php echo get_sub_field('imagen')['height'] ?>" 
                    loading="lazy"
                >
            </div>
            <div class="card_information w-100">
                <div class="card_marca">
                    <img 
                        src="<?php echo get_sub_field('marca')['url'] ?>" 
                        title="<?php echo get_sub_field('marca')['title'] ?>" 
                        alt="<?php echo get_sub_field('marca')['alt'] ?>" 
                        width="<?php echo get_sub_field('marca')['width'] ?>" 
                        height="<?php echo get_sub_field('marca')['height'] ?>" 
                        loading="lazy"
                    >
                </div>
                <div class="card_ubicacion">
                    <h3><?php echo get_sub_field('distrito'); ?></h3>
                </div>
                <div class="card_direccion w-100">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><?php echo get_sub_field('direccion') ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php endif; ?>

<section class="familia">
    <div class="contenedor">
        <h2>Tú también puedes ser <b>parte de la familia <span>Toratto</span></b></h2>
        <a href="#">Ver más</a>
    </div>
</section>

<?php get_footer(); ?>
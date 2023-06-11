<?php
/*
    Template name: gracias
*/

get_header();
?>

<section class="thanks">
    <div class="contenedor">
        <div class="contenido">
            <div class="contenido_titulo">
                <h1><b>¡Gracias</b> <span>por contactarnos!</span></h1>
                <p>En breve le enviaremos la información solicitada al correo ingresado.</p>
                <a href="<?php echo esc_url(home_url('/')) ?>">Volver a inicio</a>
            </div>
            <div class="contenido_redes">
                <p>También puedes seguirnos en:</p>
                <ul>
                    <?php get_template_part('inc/redes_sociales'); ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
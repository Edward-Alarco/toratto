<section class="desc_temporada" style="background: url(<?php echo get_field('imagen_fondo', 'option')['url'] ?>);">
    <div class="contenedor">
        <div class="row">
            <div class="col">
                <div class="caja">
                    <h2><?php echo get_field('titulo', 'option') ?></h2>
                </div>
                <?php if(!empty(get_field('descuento_de_hasta', 'option'))): ?>
                <h2>Dscto hasta <?php echo get_field('descuento_de_hasta', 'option') ?></h2>
                <?php endif; ?>
                <ul>
                    <?php if(have_rows('aplicaciones_y_restricciones','option')): while(have_rows('aplicaciones_y_restricciones','option')): the_row(); ?>
                    <li><?php echo get_sub_field('texto_ap_rs'); ?></li>
                    <?php endwhile;endif; ?>
                </ul>
                <h3>Ingresa y cotiza hoy en:</h3>
                <?php if(!empty(get_field('enlace_boton', 'option'))): ?>
                <a href="<?php echo get_field('enlace_boton', 'option') ?>" target="_blank">
                    <?php echo get_field('enlace_boton', 'option') ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="p-absolute ubication">
        <div class="place"><p><?php echo get_field('marca_desc', 'option') ?></p></div>
        <div class="place-2"><p><?php echo get_field('distrito_desc', 'option') ?></p></div>
    </div>
</section>
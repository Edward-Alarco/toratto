<?php
/*
    Template name: contactanos
*/

get_header();
?>

<section class="banner_inline contacto" style="background: url(<?php echo get_field('imagen_banner')['url'] ?>)">
    <div class="contenedor">
        <h1><b>Contáctanos</b></h1>
    </div>
</section>

<section class="contacto">
    <div class="contenedor">
        <div class="row stretch">
            <div class="col">
                <div class="contacto_info w-100">
                    <ul>
                        <?php if(!empty(get_option('nro_1'))): ?>
                        <li>
                            <a href="tel:<?php echo get_option('nro_1'); ?>">
                                <div>
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <p><?php echo get_option('nro_1'); ?></p>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php if(!empty(get_option('correo'))): ?>
                        <li>
                            <a href="mailto:<?php echo get_option('correo'); ?>">
                                <div>
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <p><?php echo get_option('correo'); ?></p>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php if(!empty(get_option('maps'))): ?>
                        <li>
                            <a href="<?php echo get_option('maps'); ?>" target="_blank">
                                <div>
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <p><?php echo get_option('direccion'); ?></p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col">
                <?php echo get_field('mapa') ?>
            </div>
        </div>
    </div>
    <div class="contenedor">
        <div class="contact_form contacto_section w-100">
            <?php echo do_shortcode('[contact-form-7 id="174" title="Cotiza Aqui"]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
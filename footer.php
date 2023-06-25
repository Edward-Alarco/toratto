<footer>
    <div class="contenedor">
        <div class="row start">
            <div class="col">
                <img src="<?php echo IMG; ?>/inicio/logo-white.png" class="logo">
                <ul>
                    <?php if(!empty(get_option('nro_1'))): ?>
                    <li>
                        <a href="tel:<?php echo get_option('nro_1'); ?>">
                            <i class="fas fa-phone-alt"></i>
                            <p><?php echo get_option('nro_1'); ?></p>
                        </a>
                    </li>
                    <?php endif; ?>
                    
                    <?php if(!empty(get_option('correo'))): ?>
                    <li>
                        <a href="mailto:<?php echo get_option('correo'); ?>">
                            <i class="fas fa-paper-plane"></i>
                            <p><?php echo get_option('correo'); ?></p>
                        </a>
                    </li>
                    <?php endif; ?>
                    
                    <?php if(!empty(get_option('maps'))): ?>
                    <li>
                        <a href="<?php echo get_option('maps'); ?>" target="_blank">
                            <i class="fas fa-map-marker-alt"></i>
                            <p><?php echo get_option('direccion'); ?></p>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col">
                <?php wp_nav_menu(array('theme_location'=>'footer-menu','menu_class'=>'ul_menu')); ?>
            </div>
            <div class="col">
                <p style="margin-bottom:0">Miembros de:</p>
                <div>
                    <?php if(have_rows('miembros','option')): while(have_rows('miembros','option')): the_row(); ?>
                    <img src="<?php echo get_sub_field('logo')['url'] ?>" 
                        alt="<?php echo get_sub_field('logo')['alt'] ?>" 
                        title="<?php echo get_sub_field('logo')['title'] ?>" 
                        width="<?php echo get_sub_field('logo')['width'] ?>" 
                        height="<?php echo get_sub_field('logo')['height'] ?>" 
                        loading="lazy"
                    >
                    <?php endwhile;endif; ?>
                </div>
                <p>Síguenos en:</p>
                <ul>
                    <?php get_template_part('inc/redes_sociales'); ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="contenedor">
        <small>Todas las imágenes, planos, medidas y áreas son referenciales por lo que podrían sufrir cambios al momento de desarrollarse el proyecto, asimismo los elementos decorativos acabados y mobiliarios son propuestas del departamento de diseño que no se incluyen en la oferta comercial y no comprometen a la empresa inmobiliaria.</small>
    </div>
</footer>

<div class="float_buttons">
    <?php if(!empty(get_option('whatsapp'))): ?>
    <a href="<?php echo get_option('whatsapp'); ?>" class="wsp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <?php endif; ?>
    <?php if(!empty(get_option('nro_1'))): ?>
    <a href="tel:<?php echo get_option('nro_1'); ?>" class="tel">
        <div>
            <i class="fas fa-phone"></i>
        </div>
        <div>
            <p>Llama gratis</p>
        </div>
    </a>
    <?php endif; ?>
    <a href="#" class="msg">
        <div>
            <ion-icon name="chatbubble-ellipses"></ion-icon>
        </div>
        <div>
            <p>Chat online</p>
        </div>
    </a>
</div>

<?php wp_footer();?>

<script>function paddingTop(){document.body.style.paddingTop=document.querySelector("header").offsetHeight+"px"}window.onpaint=paddingTop();</script>

</body>
</html>
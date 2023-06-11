<footer>
    <div class="contenedor">
        <div class="row start">
            <div class="col">
                <img src="<?php echo IMG; ?>/inicio/logo-white.png" class="logo">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-phone-alt"></i>
                            <p>(01) 284 - 3979</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-paper-plane"></i>
                            <p>info@grupotoratto.com</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Jr. Manuel Villavicencio 1452. Lince, Lima</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Compra de terrenos</a></li>
                    <li><a href="#">Próximos proyectos</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Post Venta</a></li>
                    <li><a href="#">Protección al consumidor</a></li>
                    <li><a href="#">Libro de Reclamaciones</a></li>
                    <li><a href="#">Trabaja con Nosotros</a></li>
                </ul>
            </div>
            <div class="col">
                <p style="margin-bottom:0">Miembros de:</p>
                <div>
                    <img src="<?php echo IMG; ?>/inicio/edge-logo.svg">
                    <img src="<?php echo IMG; ?>/inicio/asei-logo.svg">
                    <img src="<?php echo IMG; ?>/inicio/dci-logo.svg">
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
    <a href="#" class="wsp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="#" class="tel">
        <div>
            <i class="fas fa-phone"></i>
        </div>
        <div>
            <p>Llama gratis</p>
        </div>
    </a>
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
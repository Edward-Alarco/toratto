<?php
/*
    Template name: contactanos
*/

get_header();
?>

<section class="banner_inline contacto">
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
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <p>(01) 284 - 3979</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <p>info@grupotoratto.com</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <p>Jr. Manuel Villavicencio 1452. Lince, Lima</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d289.9671802274675!2d-77.04608172951309!3d-12.09038274860303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c859b852fc83%3A0x80411cb4a3d275f1!2sBosque%20Castilla!5e0!3m2!1ses!2spe!4v1686842481024!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
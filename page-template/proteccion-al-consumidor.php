<?php
/*
    Template name: proteccion-al-consumidor
*/

get_header();
?>

<?php if(have_rows('terminos')): ?>
<section class="politicas">
    <div class="contenedor">
        <div class="tab">
            <?php while(have_rows('terminos')): the_row(); ?>
            <button class="tablinks <?php echo get_row_index()==1 ? 'active' : ''; ?>" onclick="openCity(event, 'contenido<?php echo get_row_index(); ?>')">
                <p><?php echo get_sub_field('titulot') ?></p>
            </button>
            <?php endwhile; ?>
        </div>

        <?php while(have_rows('terminos')): the_row(); ?>
        <div class="tab_content" id="contenido<?php echo get_row_index(); ?>" <?php if(get_row_index()==1): ?>style="display: block;"<?php endif;?>>
            <?php echo get_sub_field('contenido') ?>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>

<script>function openCity(e,t){var a,l,s;for(a=0,l=document.getElementsByClassName("tab_content");a<l.length;a++)l[a].style.display="none";for(a=0,s=document.getElementsByClassName("tablinks");a<s.length;a++)s[a].className=s[a].className.replace(" active","");document.getElementById(t).style.display="block",e.currentTarget.className+=" active"}</script>
<section class="aditional_info">
    <div class="contenedor p-relative">
        <div class="row">
            <?php if(have_rows('estadisticas','option')): while(have_rows('estadisticas','option')): the_row(); ?>
            <div class="col">
                <img 
                    src="<?php echo get_sub_field('imagen')['url'] ?>" 
                    title="<?php echo get_sub_field('imagen')['title'] ?>" 
                    alt="<?php echo get_sub_field('imagen')['alt'] ?>" 
                    width="<?php echo get_sub_field('imagen')['width'] ?>" 
                    height="<?php echo get_sub_field('imagen')['height'] ?>" 
                    loading="lazy"
                >
                <span><?php echo get_sub_field('cifra'); ?></span>
                <p><?php echo get_sub_field('descripcion'); ?></p>
            </div>
            <?php if(get_row_index() == 1): ?>
                <div class="col">
                    <img src="<?php echo IMG; ?>/inicio/arrow.svg" class="arrow">
                </div>
            <?php endif; ?>
            <?php endwhile;endif; ?>
        </div>
    </div>
</section>
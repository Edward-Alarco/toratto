<?php
/*
    Template name: single
*/

get_header();

$id_single = intval(get_the_ID());
?>

<section class="single_banner" style="background: url(<?php echo get_field('fondo_banner')['url']; ?>)">
    <div class="contenedor">
        <h1><?php the_title();?></h1>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php echo esc_url(home_url('blog')) ?>" class="back">
            <ion-icon name="arrow-back-circle-outline"></ion-icon>
            <p>Volver al blog</p>
        </a>
    </div>
</section>

<section class="single_body">
    <div class="contenedor">
        <div class="row start">
            <div class="col-8">
                <div class="contenido">
                    <?php the_content(); ?>
                    <div class="hr"></div>
                    <a href="<?php echo esc_url(home_url('blog')) ?>" title="Blog">Volver al blog</a>
                </div>
            </div>

            <?php 
                global $wp_query;
                $wp_query = new WP_Query( array(
                    'post_type' => 'post', 
                    'posts_per_page' => 3,
                    'post_status' => 'publish'
                ));
            ?>
            <aside class="posts">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <?php if($post->ID != $id_single): ?>
                <?php if(has_post_thumbnail()): ?>
                <a class="post small_post" href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                    <div class="post_image">
                        <?php
                            $thumbID = get_post_thumbnail_id( $post->ID );
                            $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                            echo '<img src="'.$imgDestacada[0].'" title="'.get_the_title().'" alt="'.get_the_title().'">';
                        ?>
                    </div>
                    <div class="post_information">
                        <div class="post_head">
                            <p><?php echo ucfirst(get_the_date('F-d')); ?></p>
                            <h3><?php the_title();?></h3>
                        </div>
                        <span>Ver más</span>
                    </div>
                </a>
                <?php endif; ?>
                <?php endif; ?>
                <?php endwhile;endif; ?>
                <?php wp_reset_postdata(); ?>
                <?php wp_reset_query(); ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
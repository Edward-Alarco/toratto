<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b72be65822.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php wp_head();?>
    
    <?php if (is_404()): ?>
    <title><?php esc_attr_e("Grupo Toratto | Página de Error"); ?></title>
    <?php else: ?>
    <title><?php the_title();?></title>
    <?php endif; ?>

</head>
<body <?php body_class(); ?>>

<header>
    <nav>
        <div class="contenedor">
            <a class="tel" href="#">
                <img src="<?php echo IMG; ?>/inicio/tel.png">
                <p>(01) 284 - 3979</p>
            </a>
        </div>
    </nav>
    <div class="contenedor">
        <div class="row">
            <div class="col">
                <img src="<?php echo IMG; ?>/inicio/logo.png" class="logo">
            </div>
            <div class="col navbar">
                <?php wp_nav_menu(array('theme_location'=>'header-menu','menu_class'=>'ul_menu')); ?>
                <button id="burger">
                    <div></div>
                    <div></div>
                </button>
            </div>
        </div>
    </div>
</header>
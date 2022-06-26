<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url')?>" type="text/css"/>
    <title><?php wp_title();?></title>

    <?php wp_head();?>

    <div class="container geral">
        <div class="row">
            <div class="col-md-3 col-sm-3 logo">
                <a href="<?php echo site_url();?>">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" class="logo">
                </a>
            </div>
            <div class="col-md-8 col-sm-8 titulo">
                <h1><?php bloginfo("name")?></h1>
                <p><?php bloginfo("description")?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-1 text-uppercase text-break menu">

            <?php
				$args = array(
					'theme_location' => 'header-menu',
					'menu'=> 'menu-1'
				);

				wp_nav_menu( $args);
			?>
    
        </div>
    </div>

    <?php if(!is_page('contato') and !is_page('pagina-de-exemplo')) { ?>
    
    <div class="row">
        <div class="col-10 offset-1 my-5">
            <?php masterslider(2);?>
        </div>
    </div>

    <?php } ?>

</head>

<body>

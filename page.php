<?php get_header();?>

    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();

    ?>
    <div class="row">
        <div class="col-md-10 offset-md-1 col-10">
            <div class="jumbotron">
                <h2><?php the_title();?></h2>
            </div>
        </div>
    </div>

    <?php if(!is_page('contato')) { ?>

    <div class="row">
        <div class="col-md-10 offset-md-1 col-10 post mb-5">
            <?php the_content();?>
        </div>
    </div>
    <?php } ?>

    <?php if(is_page('contato')) { ?>
    
    <div class="row">
        <div class="col-md-4 col-10 offset-1 post mb-5">
            <?php the_content();?>
        </div>
        <div class="col-md-6 col-10 offset-1 mt-4">
            <iframe class="shadow" width="90%" height="90%" src="https://maps.google.com/maps?q=itanha%C3%A9m,%20Brasil&t=&z=13&ie=UTF8&iwloc=&output=embed"                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>

    <?php    
        }

            }
        }
    ?>

<?php get_footer();?>
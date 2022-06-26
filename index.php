<?php get_header();?>

    <div class="row">
        <?php
        $cont = 0;
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    $cont++;
                if($cont <= 3){
        ?>
                <div class="col-sm-10 col-md-3 col-lg-3 mx-auto mb-5 post shadow">
                    <div class="img-responsive img-thumbnail mt-4 foto"><?php the_post_thumbnail(); ?></div>
                    <h3 class="my-2"><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a class="btn btn-dark" href="<?php the_permalink();?>">Leia Mais</a>
                </div>

        <?php 
                }
                }
            }
        ?>
    </div>
    
<?php get_footer();?>
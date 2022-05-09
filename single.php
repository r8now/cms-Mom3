<?php get_header(); ?>
<!-- Main content -->

<h1><?php the_title(); ?></h1>

<!-- Container -->
<div class="container">

    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
             //Om det finns en bild, skriv ut i så fall
             ?>
            <article>
                <div class="article-1">
                    <?php
        if (has_post_thumbnail()) {
            ?>
        
           
<?php
            the_post_thumbnail();
        }
            ?>
    
         
                    <?php
                    the_content();
                 
                    ?>

                </div>
                    <div class="article-2"> <?php get_the_content(); ?></div>
                    </div>
            </article>


<?php
        }
    }
?>

<!-- Main ends-->
<?php get_footer(); ?> 
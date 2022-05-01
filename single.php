<?php get_header(); ?>
<!-- Main content -->

<p>SINGEL.PHP for single POSTS!</p>
<h1><?php the_title(); ?></h1>

<!-- Container -->
<div class="container">

    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
             //Om det finns en bild, skriv ut i så fall
        if (has_post_thumbnail()) {
            ?>
            <article>
            <div class="article-1">
<?php
            the_post_thumbnail();
        }
            ?>
    
         
                    <?php
                    
                    the_content();
                 
                    ?>




                </div>
            </article>
</div>

<?php
        }
    }
?>

<!-- Main ends-->
<?php get_footer(); ?> 
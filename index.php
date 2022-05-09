<?php get_header(); ?>
<!-- Main content







-->


<h1><?php the_title(); ?></h1>
<br>
<h2>SENASTE NYHTERNA</h2>

<!-- Container -->
<div class="container">

    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <article>
                <div class="article-1">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    the_content();
                    
                    ?>
                  <p><a href="<?php the_permalink();?>">Läs mer</a></p>

                </div>
        
            </article>


<?php
        }
    }
?>
</div>
<!-- Main ends-->
<?php get_footer(); ?>
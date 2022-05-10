<?php get_header(); ?>
<!-- Main content -->

<h1><?php the_title(); ?></h1>

<?php
query_posts('posts_per_page=1');
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //Om det finns en bild, skriv ut i så fall
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        }

            ?>
            <div class="front-page">
        
              <?php
            the_content(); ?>

        
                
    
        <p><a href="<?php the_permalink();?>">Läs mer</a></p>
        </div>
<?php
        }
        ?>
<?php
        }
    

?>
<!-- Widget area-->

<?php
if (is_active_sidebar('widget-area'))  : ?>
<div id="widget-area">
    <?php dynamic_sidebar('widget-area'); ?>
</div>
<?php endif; ?>

<?php echo do_shortcode('
  [metaslider id="79"]
'); ?>



<!-- Widget area-->


<!-- Main ends-->
<?php get_footer(); ?>
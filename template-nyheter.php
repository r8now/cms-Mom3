<?php 
/*
Template Name: Nyheter-template

*/ 

?>

<?php get_header(); ?>
<!-- Main content -->


<h1 id="h1"> Har du skog som är i vägen för ditt dyrbara solljus?</h1>
<br>
<?php global $template; echo basename($template); ?>

<?php
query_posts('category_name=nyheter&posts_per_page=10');
if (have_posts()) {
    while (have_posts()) {
        the_post();
         if (has_post_thumbnail()) {
            the_post_thumbnail();
        }
        
        the_content();
      
       
    }
}

?>
<!-- Main ends-->
<?php get_footer(); ?>
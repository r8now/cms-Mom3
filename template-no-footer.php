<?php 
/*
Template Name: No-Footer-template

*/ 

?>
<?php get_header(); ?>
<!-- Main content -->


<br>
<h2>No-footer-template</h2>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
<h1 id="h1"> 
        <?php the_title(); ?> </h1>
        <article>
        <?php
        the_content();
        ?>
        </article>
        <?php
    }
}
?>

<!-- Main ends-->
    <!--  </div> --> <!-- /.container -->
</main>
  </body>
  
  </html>
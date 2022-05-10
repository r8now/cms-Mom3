<?php get_header(); ?>
<!-- Main content -->


<br>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
<h1 id="h1"> 
        <?php the_title(); ?> </h1>
        <div class="page">
        <?php
        the_content();
        ?>
        </div>
        <?php
    }
}
?>

<!-- Main ends-->
<?php get_footer(); ?>
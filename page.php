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
        <form>
        <?php
        the_content();
        ?>
        </form>
        <?php
    }
}
?>

<!-- Main ends-->
<?php get_footer(); ?>
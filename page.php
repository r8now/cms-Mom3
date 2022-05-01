<?php get_header(); ?>
<!-- Main content -->


<h1 id="h1"> Har du skog som är i vägen för ditt dyrbara solljus?</h1>
<br>
<h2>Page.php for single PAGES!</h2>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>

<!-- Main ends-->
<?php get_footer(); ?>
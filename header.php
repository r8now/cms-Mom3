<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


    <link rel="icon" type="image/png" sizes="32x32" href="<?php get_template_directory_uri();?>images/favicon-32x32.png">

    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">

        <div class="flex">

            <a href="<?=get_home_url(); ?>">
               
                <img class="logo" src="<?= get_template_directory_uri(); ?>/images/miniskog.png" alt="Logo, tre träd">
            </a>

           <ul>
           <nav>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </nav>
           </ul>


        </div>
    </div> <!-- Navbar   slut -->


    <div class="headimage 1"> <img class="headimage" src="<?= get_template_directory_uri(); ?>/images/träd1100-300.jpg" alt=""></div>


    <main>
  <!--  <div class="container"> -->

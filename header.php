<?php 
    /**
     * header.php
     * @package blueprint
     * @author Scott Shealy
     * @version 1.0.0 (2025.12.01)
     * @copyright 2025 (2025.12.01)
    **/
?>

<!-- BLUEPRINT | WEBSITE DESIGN BY SCOTT SHEALY | SCOTTSHEALY.COM -->

<html id="blueprint" class="h-100" <?php language_attributes(); ?>>
    
    <!-- HEAD -->
    <head>
        
        <!-- META -->
        <?php include(get_stylesheet_directory().'/php/scripts/head/meta.php'); ?>

        <!-- HEADER-SCRIPTS -->
        <?php include(get_stylesheet_directory().'/php/scripts/head/header-scripts.php'); ?>

    </head>

    <!-- BODY -->
    <?php 
        do_action('bricks_body');

        do_action('bricks_before_site_wrapper');

        do_action('bricks_before_header');

        do_action('render_header');

        do_action('bricks_after_header');
    ?>
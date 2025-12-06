<?php 
    /**
     * php/scripts/head/header-scripts.php
     * @package blueprint
     * @author Scott Shealy
     * @version 1.0.0 (2025.12.01)
     * @copyright 2025 (2025.12.01)
    **/
?>

<!-- FONTS -->

<!-- FONT-AWESOME -->
<?php include(get_stylesheet_directory().'/php/scripts/external/font-awesome/header.php'); ?>

<!-- FRAMEWORK -->
<?php include(get_stylesheet_directory().'/php/scripts/external/bootstrap/header.php'); ?>

<!-- WP-HEAD -->
<?php wp_head(); ?>

<!-- GOOGLE-ANALYTICS -->
<!-- STYLESHEET -->
<link rel="stylesheet" src="<?php echo get_stylesheet_directory_uri(); ?>/style.min.css"/>
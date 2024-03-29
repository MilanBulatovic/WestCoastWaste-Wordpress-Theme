<?php
/**
 * Template Name: Home PAge Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

//$container = get_theme_mod( 'understrap_container_type' );
?>


	<?php get_template_part( '/global-templates/hero' ); ?>
	<?php get_template_part( '/global-templates/home-content' ); ?>



<?php
get_footer();
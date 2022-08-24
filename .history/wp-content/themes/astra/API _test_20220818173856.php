<?php
/**
 * Template Name: Custom API1
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */


get_header(); ?>
<style>
.admin-quick-add {
	background-color: #DDD;
	padding: 15px;
	margin-bottom: 15px;
}

.admin-quick-add input,
.admin-quick-add textarea {
	width: 100%;
	border: none;
	padding: 10px;
	margin: 0 0 10px 0;
	box-sizing: border-box;
}
</style>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php
/**
 * Template Name: API Test Template
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();?>
    <div class="admin-quick-add">
	<h2>Load API data</h2>
	<div id="result"></div>
 
    </div>
    <?php
	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();

<?php
/**
 * Template Name: POST DATA template
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
	the_post();
	?>
    <form name="post-form" id="post-form">
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
     
    <label for="status">Status</label>
    <select name="status" id="status">
        <option value="publish">Publish</option>
        <option value="draft">Draft</option>
    </select>
     
    <label for="content">Content</label>
    <textarea name="content" id="content"></textarea>
     
    <input type="submit" name="submit" value="Submit">
    </form>


	<?php // If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();

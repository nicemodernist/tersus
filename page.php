<?php
/**
 * @package WordPress
 * @subpackage Tersus
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
		<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
		<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	</div>
	<?php endwhile; endif; ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
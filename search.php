<?php get_header(); ?>
<section id="content" role="main" class="row">
	<?php if ( have_posts() ) : ?>
		<header class="header col-sm-12">
			<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'evanhill' ), get_search_query() ); ?></h1>
		</header>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="col-sm-4 post-tile">
			<?php get_template_part('entry'); ?>
		</div>
		<?php endwhile; ?>
		<?php get_template_part('nav', 'below'); ?>
	<?php else : ?>
		<article id="post-0" class="post no-results not-found">
			<header class="header">
				<h2 class="entry-title"><?php _e( 'Nothing Found', 'evanhill' ); ?></h2>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'evanhill' ); ?></p>
				<?php get_search_form(); ?>
			</section>
		</article>
	<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>
<section id="content" role="main" class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-sm-4 post-tile">
			<?php get_template_part('entry'); ?>
		</div>
	<?php endwhile; endif; ?>
	<?php get_template_part('nav', 'below'); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>
<section id="content" role="main">
	<header class="header">
		<h1 class="entry-title"><?php single_cat_title(); ?></h1>
		<?php if ( '' != category_description() ) echo apply_filters('archive_meta', '<div class="archive-meta">' . category_description() . '</div>'); ?>
	</header>
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-sm-4">
				<?php get_template_part('entry'); ?>
			</div> <!-- col -->
		<?php endwhile; endif; ?>
	</div> <!-- row -->
	<?php get_template_part('nav', 'below'); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
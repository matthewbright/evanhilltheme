<?php get_header(); ?>
<section id="content" role="main">
	<header class="header">
		<h1 class="entry-title"><?php single_cat_title(); ?></h1>
		<?php if ( '' != category_description() ) echo apply_filters('archive_meta', '<div class="archive-meta">' . category_description() . '</div>'); ?>
	</header>
	<div class="row">
		<div class="col-med-4">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('entry'); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part('nav', 'below'); ?>
		</div> <!-- col -->
	</div> <!-- row -->
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>
<div class="row">
<section id="content" role="main" class="col-sm-12">
	<header class="header">
		<h1 class="entry-title"><?php single_cat_title(); ?></h1>
		<?php if ( '' != category_description() ) echo apply_filters('archive_meta', '<div class="archive-meta">' . category_description() . '</div>'); ?>
	</header>
	<div class="gallery">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('entry'); ?>
		<?php endwhile; endif; ?>
	</div> <!-- gallery -->
	<?php get_template_part('nav', 'below'); ?>
</section>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
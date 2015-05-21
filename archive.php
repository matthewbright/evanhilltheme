<?php get_header(); ?>
<section id="content" role="main">
	<header class="header">
		<h1 class="entry-title"><?php 
		if ( is_day() ) { printf( __( 'Daily Archives: %s', 'evanhill' ), get_the_time(get_option('date_format') ) ); }
		elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'evanhill' ), get_the_time('F Y') ); }
		elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'evanhill' ), get_the_time('Y') ); }
		else { _e( 'Archives', 'evanhill' ); }
		?></h1>
	</header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-sm-4 post-tile">
			<?php get_template_part('entry'); ?>
		</div>
	<?php endwhile; endif; ?>
	<?php get_template_part('nav', 'below'); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
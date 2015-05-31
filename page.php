<?php get_header(); ?>
<section id="content" class="row" role="main">
<div class="col-sm-12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_front_page() ) : ?>			    	
			<div id = "homecarousel" class="carousel slide carousel-fade">
				<ol class="carousel-indicators">
					<?php
					$posts_count = -1;
				   	$featured_posts = my_get_featured_posts();
					while ( $featured_posts->have_posts() ) {
					    $featured_posts->the_post();
					    ++$posts_count; ?>
						<li data-target="#homecarousel" data-slide-to="<?php echo $posts_count; ?>" <?php if($posts_count == 0) { ?>class="active"<?php } ?>></li>
					<?php } wp_reset_postdata(); ?>
				</ol>
				<div class="carousel-inner">
					<?php
					$posts_count = -1;
				   	$featured_posts = my_get_featured_posts();
					while ( $featured_posts->have_posts() ) {
					    $featured_posts->the_post();
					    ++$posts_count; ?>
						<div class="item <?php if($posts_count == 0) { ?>active<?php } ?>">
							<a href="<?php the_permalink(); ?>"><?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail();
} 
?></a>
							<div class="carousel-caption">
													<p class="show-title"><?php the_title(); ?></p>
						<?php $scompany = get_post_meta( $post->ID, '_mb_show_company', true );
						/* if ($scompany) { ?>
							<p class="show-company"><?php echo $scompany; ?></p>
						<?php } ?>
						<?php $position = get_post_meta( $post->ID, '_mb_show_position', true );
						if ($position) { ?>
							<p class="show-position"><?php echo $position; ?></p>
						<?php } */ ?>	
								
							</div>
						</div>
					<?php } wp_reset_postdata(); ?>
				</div>
				
				<a class="carousel-control left" href="#homecarousel" data-slide="prev">
					<span class="ddicon-prev"></span>
				</a>
				<a class="carousel-control right" href="#homecarousel" data-slide="next">
					<span class="ddicon-next"></span>
				</a>
			</div> <!-- end .carousel -->
		<?php else : ?>
			<?php edit_post_link(); ?>
		<?php endif; ?>

		<section class="page-content">
			<?php the_content(); ?>
			<div class="entry-links"><?php wp_link_pages(); ?></div>
		</section>
	</article>
<?php endwhile; endif; ?>
</div>
</section> <!-- end .row -->
<script type='text/javascript'>
    $(document).ready(function() {
         $('.carousel').carousel({
             interval: 10000
         })
    });    
</script>
<?php get_footer(); ?>
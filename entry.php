
	<?php if (is_single()) : ?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part('entry', 'header'); ?>
		<?php get_template_part('entry', (is_archive() || is_search() ? 'summary' : 'content')); ?>
	<?php else : ?>
<article id="post-<?php the_ID(); ?>" class="post-full-tile">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post-thumbnail-box">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "img-responsive attachment-post-thumbnail")); ?>
						</a>
						<div class="tile-meta">
							<?php $writer1 = get_post_meta( $post->ID, '_mb_show_writer1', true );
							if ($writer1) { ?>
								<p class="show-writer"><?php echo $writer1; ?></p>
							<?php } ?>	
							<?php $writer2 = get_post_meta( $post->ID, '_mb_show_writer2', true );
								if ($writer2) { ?>
									<p class="show-writer"><?php echo $writer2; ?></p>
							<?php } ?>	
							<?php $theatre = get_post_meta( $post->ID, '_mb_show_theatre', true );
								if ($theatre) { ?>
									<p class="show-theatre"><?php echo $theatre; ?></p>
							<?php } ?>	
							<?php $dirdes1 = get_post_meta( $post->ID, '_mb_show_dirdes1', true );
								if ($dirdes1) { ?>
									<p class="show-dirdes"><?php echo $dirdes1; ?></p>
							<?php } ?>	
							<?php $dirdes2 = get_post_meta( $post->ID, '_mb_show_dirdes2', true );
								if ($dirdes2) { ?>
									<p class="show-dirdes"><?php echo $dirdes2; ?></p>
							<?php } ?>	
							<?php $dirdes3 = get_post_meta( $post->ID, '_mb_show_dirdes3', true );
								if ($dirdes3) { ?>
									<p class="show-dirdes"><?php echo $dirdes3; ?></p>
							<?php } ?>	
							<?php $dirdes4 = get_post_meta( $post->ID, '_mb_show_dirdes4', true );
								if ($dirdes4) { ?>
									<p class="show-dirdes"><?php echo $dirdes4; ?></p>
							<?php } ?>	
							<?php $dirdes5 = get_post_meta( $post->ID, '_mb_show_dirdes5', true );
								if ($dirdes5) { ?>
									<p class="show-dirdes"><?php echo $dirdes5; ?></p>
							<?php } ?>	
						</div>
					</div>
				<?php } ?>
				
				<h2 class="tile-entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><span class="tile-link"></span></a>

	<?php endif; ?>
</article>
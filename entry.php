
	<?php if (is_single()) : ?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part('entry', 'header'); ?>
		<?php get_template_part('entry', (is_archive() || is_search() ? 'summary' : 'content')); ?>
	<?php else : ?>
<dl id="post-<?php the_ID(); ?>" class="post-full-tile gallery-item">
				<?php if ( has_post_thumbnail() ) { ?>
					<dt class="post-thumbnail-box gallery-icon">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php the_post_thumbnail('gallery-thumbnail', array( 'class'	=> "img-responsive attachment-post-thumbnail")); ?>
						</a>
					</dt>
					<dd class="tile-meta gallery-caption">
						<p class="show-title"><?php the_title(); ?></p>
						<?php $scompany = get_post_meta( $post->ID, '_mb_show_company', true );
						if ($scompany) { ?>
							<p class="show-company"><?php echo $scompany; ?></p>
						<?php } ?>
						<?php $position = get_post_meta( $post->ID, '_mb_show_position', true );
						if ($position) { ?>
							<p class="show-position"><?php echo $position; ?></p>
						<?php } ?>			
					</dd>
				<?php } ?>
				
	<?php endif; ?>
</dl>
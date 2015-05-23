<header class = "row">
	<div class="col-sm-12" id="show-header">
		<div class="meta show-info">
			<div class="meta" id="show-name">
				<h2 class="single-title"><?php the_title(); ?></h2>
			</div>
			<div class="meta" id="show-info-top">
				<div class="meta" id="show-info-top-left">
					<?php $scompany = get_post_meta( $post->ID, '_mb_show_company', true );
						if ($scompany) { ?>
							<p class="show-company"><?php echo $scompany; ?></p>
					<?php } ?>
				</div> 
				<div class="meta" id="show-info-top-right">
					<?php $position = get_post_meta( $post->ID, '_mb_show_position', true );
						if ($position) { ?>
							<p class="show-position"><?php echo $position; ?></p>
					<?php } ?>
				</div>
			</div>
			<div class="meta" id="show-info-bottom">
				<div class="meta" id="show-info-bottom-left">
					<?php $creditl1 = get_post_meta( $post->ID, '_mb_show_creditl1', true );
						if ($creditl1) { ?>
							<p class="show-credit"><?php echo $creditl1; ?></p>
					<?php } ?>	
					<?php $creditl2 = get_post_meta( $post->ID, '_mb_show_creditl2', true );
						if ($creditl2) { ?>
							<p class="show-credit"><?php echo $creditl2; ?></p>
					<?php } ?>	
					<?php $creditl3 = get_post_meta( $post->ID, '_mb_show_creditl3', true );
						if ($creditl3) { ?>
							<p class="show-credit"><?php echo $creditl3; ?></p>
					<?php } ?>
				</div>
				<div class="meta" id="show-info-bottom-right">
					<?php $creditr1 = get_post_meta( $post->ID, '_mb_show_creditr1', true );
						if ($creditr1) { ?>
							<p class="show-credit"><?php echo $creditr1; ?></p>
					<?php } ?>	
					<?php $creditr2 = get_post_meta( $post->ID, '_mb_show_creditr2', true );
						if ($creditr2) { ?>
							<p class="show-credit"><?php echo $creditr2; ?></p>
					<?php } ?>	
					<?php $creditr3 = get_post_meta( $post->ID, '_mb_show_creditr3', true );
						if ($creditr3) { ?>
							<p class="show-credit"><?php echo $creditr3; ?></p>
					<?php } ?>
				</div>
			</div>
			<div class="grid-bottom-margin">
			</div>
		</div>
	</div>
</header>
<?php edit_post_link(); ?>

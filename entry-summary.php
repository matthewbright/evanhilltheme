<section class="entry-summary">
	<?php the_excerpt(); ?>
	<h2>Test to see if this is entry-summary that displays here</h2>
	<?php if(is_search()) { ?><div class="entry-links"><?php wp_link_pages(); ?></div><?php } ?>
</section>
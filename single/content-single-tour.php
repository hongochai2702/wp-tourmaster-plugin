
<article <?php post_class( 'fl-post' ); ?> id="fl-post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
	
	<div class="tour-header">
		<header class="fl-post-header">
			<h1 class="fl-post-title" itemprop="headline">
				<?php the_title(); ?>
				<?php edit_post_link( _x( 'Edit', 'Edit post link text.', 'fl-automator' ) ); ?>
			</h1>
		</header><!-- .fl-post-header -->
		<div class="tour-image-thumnail image-wrapper">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full' ); ?>
			<?php endif; ?>
		</div>
	</div>
	<!-- /.tour-header -->
	<div class="tour-content fl-post-content clearfix" itemprop="text">
		<?php

		the_content();
		
		wp_link_pages( array(
			'before'         => '<div class="fl-post-page-nav">' . _x( 'Pages:', 'Text before page links on paginated post.', 'fl-automator' ),
			'after'          => '</div>',
			'next_or_number' => 'number'
		) );

		?>
	</div><!-- .fl-post-content -->
	<!-- /.tour-content -->
	<div class="tour-footer"></div>
	<!-- /.tour-footer -->
	<?php FLTheme::post_navigation(); ?>
	<?php comments_template(); ?>

</article>
<!-- .fl-post -->
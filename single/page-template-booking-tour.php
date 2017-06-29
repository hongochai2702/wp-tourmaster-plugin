<?php get_header(); ?>

<div class="fl-content-full container">
	<div class="row">
		<div class="fl-content col-md-12">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article <?php post_class( 'fl-post' ); ?> id="fl-post-<?php the_ID(); ?>" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">

					<?php if ( FLTheme::show_post_header() ) : ?>
					<header class="fl-post-header">
						<h1 class="fl-post-title" itemprop="headline"><?php the_title(); ?></h1>
						<?php edit_post_link( _x( 'Edit', 'Edit page link text.', 'fl-automator' ) ); ?>
					</header><!-- .fl-post-header -->
					<?php endif; ?>

					<div class="fl-post-content clearfix" itemprop="text" id="booking-tour-form">
						<?php
							echo 'TOUR ID = ' . $_GET['id'];
							load_template( TOURMASTER_SINGLE_LOCAL . '/template/page-template-form-booking.php', true );
							//the_content();

							wp_link_pages( array(
								'before'         => '<div class="fl-post-page-nav">' . _x( 'Pages:', 'Text before page links on paginated post.', 'fl-automator' ),
								'after'          => '</div>',
								'next_or_number' => 'number'
							) );
						?>
					</div><!-- .fl-post-content -->

					<?php comments_template(); ?>

				</article>
				<!-- .fl-post -->
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
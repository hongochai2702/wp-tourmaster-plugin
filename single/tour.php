<?php get_header(); ?>

<div class="container">
	<div class="row">
		
		<?php //FLTheme::sidebar('left'); ?>
		
		<div class="fl-content">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php require_once ( TOURMASTER_LOCAL . '/single/content-single-tour.php' ); ?>
			<?php endwhile; endif; ?>
		</div>
		
		<?php //FLTheme::sidebar('right'); ?>
		
	</div>
</div>

<?php get_footer(); ?>
<?php get_header(); global $tourSettings; 

?>

<div class="fl-archive container">
	<div class="row">
		
		<?php //FLTheme::sidebar('left'); ?>
		
		<div class="fl-content col-md-12" itemscope="itemscope" itemtype="http://schema.org/Blog">

			<header class="fl-archive-header">
				<?php
					$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				?>
				<h1 class="fl-archive-title"><?php echo $term->name; ?></h1>
			</header>
			<?php do_action( 'archive_before_post_tour' ); ?>
			<?php if(have_posts()) : ?>
			
				<?php while(have_posts()) : the_post(); ?>
					<?php load_template( TOURMASTER_SINGLE_LOCAL . '/template/archive-'. $tourSettings['tm_tour_layout_archive'][0] .'.php' , false ); ?>
				<?php endwhile; ?>
				
				<?php FLTheme::archive_nav(); ?>
				
			<?php else : ?>
		
				<?php get_template_part('content', 'no-results'); ?>
		
			<?php endif; ?>
			<?php do_action( 'archive_after_post_tour' ); ?>
		</div>
		
		<?php //FLTheme::sidebar('right'); ?>
		
	</div>
</div>

<?php get_footer(); ?>
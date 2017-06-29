<?php get_header(); ?>

<div class="fl-archive container">
	<div class="row">
		
		<?php FLTheme::sidebar('left'); ?>
		
		<div class="fl-content <?php FLTheme::content_class(); ?>" itemscope="itemscope" itemtype="http://schema.org/Blog" id="list-tour-layout">

			<header class="fl-archive-header">
				<?php
					$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				?>
				<h1 class="fl-archive-title"><?php echo $term->name; ?></h1>
			</header>
			
			<?php if(have_posts()) : ?>
			
				<?php while(have_posts()) : the_post(); ?>
					<?php include( TOURMASTER_LOCAL . '/single/template/archive-list-tour.php' ); ?>
				<?php endwhile; ?>
				
				<?php FLTheme::archive_nav(); ?>
				
			<?php else : ?>
		
				<?php get_template_part('content', 'no-results'); ?>
		
			<?php endif; ?>
			
		</div>
		
		<?php FLTheme::sidebar('right'); ?>
		
	</div>
</div>

<?php get_footer(); ?>
<?php
global $tourSettings;
$show_thumbs = FLTheme::get_setting('fl-archive-show-thumbs');
$show_full   = FLTheme::get_setting('fl-archive-show-full');
$more_text   = FLTheme::get_setting('fl-archive-readmore-text');
// Check Column
switch ( $tourSettings['tm_tour_columns_archive'] ) {
	case 2:
		$columns = 'col-lg-6 col-md-6';
		break;
	case 3:
		$columns = 'col-lg-4 col-md-4';
		break;
	case 4:
		$columns = 'col-lg-3 col-md-3';
		break;
	
	default:
		$columns = 'col-lg-4 col-md-4';
		break;
}

?>
<article <?php post_class( 'fl-post '. $columns .' col-xs-12 overlay-layout content-rollover-layout-list' ); ?> id="fl-post-<?php the_ID(); ?>" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
	<div class="post-thumbnail-wrap">
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>" class="post-thumbnail-rollover">
				<?php the_post_thumbnail('full', 'lazyLoad' ); ?>
			</a>
		</div>
	</div>
	<!-- /.post-thumbnail-wrap -->

	<div class="post-entry-content">
		<div class="post-entry-wrapper" style="transform: translateY(100px);">
			<h3 class="entry-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a> </h3>
			<div class="entry-meta"><span class="category-link"><a href="#">Travel</a></span></div>
			<div class="entry-excrept"><p style="color: #fff">Duis ornare, est at lobortis mollis, felis libero mollis orci, vitae congue neque…</p></div>
			<a href="http://the7.io/main/5-reasons-lorem-ipsum-dolor/" class="post-details details-type-link" rel="nofollow">Read more<i class="fa fa-caret-right" aria-hidden="true"></i></a>
		</div>

	</div>
</article>

<!-- /#list-tour-layout -->
<!-- .fl-post -->
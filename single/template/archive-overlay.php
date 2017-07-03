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
				<img class="iso-lazy-load preload-me height-ready iso-layzr-loaded" src="http://the7io.dreamthemecom.netdna-cdn.com/main/wp-content/uploads/sites/39/2014/03/7-4-004-728x728.jpg" alt="" width="728" height="728" data-ratio="1" srcset="http://the7io.dreamthemecom.netdna-cdn.com/main/wp-content/uploads/sites/39/2014/03/7-4-004-728x728.jpg 728w, http://the7io.dreamthemecom.netdna-cdn.com/main/wp-content/uploads/sites/39/2014/03/7-4-004-1000x1000.jpg 1000w" sizes="379px">
			</a>
		</div>
	</div>
	<!-- /.post-thumbnail-wrap -->

	<div class="post-entry-content">
		<div class="post-entry-wrapper" style="transform: translateY(85px);">
			<h3 class="entry-title"> <a href="http://the7.io/main/5-reasons-lorem-ipsum-dolor/" title="5 Reasons lorem ipsum dolor" rel="bookmark">5 Reasons lorem ipsum dolor</a> </h3>
			<div class="entry-meta"><span class="category-link"><a href="#">Travel</a></span></div>
			<div class="entry-excrept"><p>Duis ornare, est at lobortis mollis, felis libero mollis orci, vitae congue neque…</p></div>
			<a href="http://the7.io/main/5-reasons-lorem-ipsum-dolor/" class="post-details details-type-link" rel="nofollow">Read more<i class="fa fa-caret-right" aria-hidden="true"></i></a>
		</div>

	</div>
</article>

<!-- /#list-tour-layout -->
<!-- .fl-post -->
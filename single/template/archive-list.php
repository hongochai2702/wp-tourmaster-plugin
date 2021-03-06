<?php

$show_thumbs = FLTheme::get_setting('fl-archive-show-thumbs');
$show_full   = FLTheme::get_setting('fl-archive-show-full');
$more_text   = FLTheme::get_setting('fl-archive-readmore-text');

?>
<article <?php post_class( 'fl-post' ); ?> id="fl-post-<?php the_ID(); ?>" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
	<div class="list-layout">
		<div class="article-tour">
			<div class="thumbnail-media">
				<a rel="nofollow" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'tour-archive-medium' ); ?></a>
			</div>
			<!-- /.thumbnail-media -->
			<div class="thumbnail-body">
				<header class="tour-title"><h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<div class="meta-info">
					<span class="tour-cat"><a href="/han-quoc">Hàn Quốc</a></span> -
					<span class="tour-time"><a href="/han-quoc">5 ngày 3 đêm</a></span> -
					<div class="star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
				</div>
				</header>
				<div class="tour-info">
					<div class="excrept-box">
						<p>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến ...</p>
						<div class="accompanied_service">
							<i class="fa fa-check" title="Bảo hiểm"></i> <span>Bảo hiểm</span>
							<i class="fa fa-street-view" title="Hướng dẫn viên"></i> <span>Hướng dẫn viên</span>
							<i class="fa fa-car" title="Xe đưa đón"></i><span> Xe đưa đón</span>
							<i class="fa fa-ticket" title="Vé tham quan"></i> <span>Vé tham quan</span>
						</div>
					</div>
					<!-- /.excrept-left -->
					<div class="price-box">
						<div class="price">69.696.000 <span>VNĐ</span></div>
						<a href="<?php echo esc_url( get_bloginfo( 'url' ) . '/' . get_post_field( 'post_name', $tourSettings["tm_tour_page_template"] ))  . '?id=' . get_the_ID(); ?>" class="btn btn-add-tour"><?php _e( 'Book tour', 'piklist-tour' ); ?> <i class="icon fa fa-chevron-right"></i></a>
					</div>
				</div>
				<!-- /.meta-tour-info -->
			</div> 
			<!-- /.thumbnail-body -->
		</div> 
		<!-- /.article-tour -->
	</div>
	<!-- /#list-tour-layout -->
</article>
<!-- .fl-post -->
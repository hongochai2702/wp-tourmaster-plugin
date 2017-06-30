<?php global $tourSettings;
	$tourOptions = new Tourmaster();
	$tour = $tourOptions->get_mail_posted_fields($_GET['id']);
	$tour_info = unserialize($tour['tour_info'][0]);
	
?>
<input type="hidden" name="tour_price" value="<?php echo $tour['tour_price'][0] ?>" />
<div class="form-book-tour">
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12 tour-info">
				<div class="tour tour-id">
					<h4><?php echo get_the_title( $_GET['id'] ); ?></h4>
					<p><span>Thời gian: </span> <strong><?php printf('%1$s ngày %2$s đêm', $tour_info['day_time'], $tour_info['night_time']) ?></strong></p>
					<p><span>Giá người lớn: </span> <strong><?php echo number_format($tour['tour_price'][0], 0, ',', '.').' đ'; ?></strong></p>
					
					<p><span>Giá trẻ em: </span> <strong>0đ</strong></p>
				</div>
				<!-- /.tour -->
				<div class="tour-customize">
					<!-- Customize -->
					<h4>Đang customize ...</h4>
					<div class="forn-group">
						<label for="">Số người lớn</label>
						<input type="number" min="0" max="21" name="number_adults" value="1" />
					</div>
					<div class="forn-group">
						<label for="">Số trẻ em</label>
						<input type="number" min="0" max="21" name="number_children" value="0" />
					</div>
				</div>
				<!-- /.tour-customize -->

				<div class="tour-sum">
					<div class="list-sum">
						<div class="item">
							<label for="sum">Tổng cộng</label>
							<div class="price_total">1,710,000đ</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- /.tour-info -->
			<div class="col-lg-6 col-md-6 col-xs-12 tour-contact-customer">
				<?php echo do_shortcode( '[contact-form-7 id="'. $tourSettings['tm_tour_contact_form_template'] .'"]' ); ?>
			</div>
			<!-- /.tour-contact-customer -->
		</div>
	</div>
</div>
<!-- /.form-book-tour -->
<input type="hidden" name="price_adults" value="<?php echo $tour['tour_price'][0]; ?>" />
<input type="hidden" name="price_children" value="10" />
<input type="hidden" name="price_total" value="<?php echo $tour['tour_price'][0]; ?>">
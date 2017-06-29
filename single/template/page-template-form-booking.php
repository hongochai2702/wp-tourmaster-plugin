<?php
global $tourSettings; ?>
<div class="form-book-tour">
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12 tour-info">
				<div class="tour tour-id">
					<h4>Tour Ninh Bình: Tràng An – Bái Đính – Đầm Vân Long 2 ngày 1 đêm</h4>
					<p><span>Thời gian: </span> <strong>2 ngày 1 đêm</strong></p>
					<p><span>Giá người lớn: </span> <strong>1,710,000đ</strong></p>
					<p><span>Giá trẻ em: </span> <strong>0đ</strong></p>
				</div>
				<!-- /.tour -->
				<div class="tour-customize">
					<!-- Customize -->
					<h4>Đang customize ...</h4>
				</div>
				<!-- /.tour-customize -->

				<div class="tour-sum">
					<div class="list-sum">
						<div class="item">
							<label for="sum">Tổng cộng</label>
							<div class="price_sum">1,710,000đ</div>
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
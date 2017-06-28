<article <?php post_class('fl-post'); ?> id="fl-post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
    <div class="tour-content fl-post-content clearfix" itemprop="text">
        <div class="col-xs-9">
            <div id="single-tour-layout">
                <div class="single-header-tour">
                    <header class="tour-title">
                        <h1>Tour Hàn Quốc: Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm</h1>
                    </header>
                    <div class="thumbnail-media">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('full'); ?>
                        </a>
                    </div>
                </div>
                <!-- /.thumbnail-media -->
                <div class="single-body-tour">
                    <div class="layout-tab-tour">
                        <div class="tab-tour">
                            <div class="tab select" data-tab="tab1"><?php _e("Giới thiệu chung", "piklist-tour"); ?></div>
                            <div class="tab" data-tab="tab2"><?php _e("Lịch trình chi tiết", "piklist-tour"); ?></div>
                            <div class="tab" data-tab="tab3"><?php _e("Đánh giá của khách hàng", "piklist-tour"); ?></div>
                        </div>

                        <div class="tab-content-group">
                            <div class="tab-content">
                                <div class="content c-tab1" style="display: block">
                                    <?php the_content() ?>
                                </div>
                                <!-- /.c-tab1 -->
                                <div class="content c-tab2">
                                    <?php $tmp_tour_atts = get_post_meta($post->ID, 'tour_detailed_schedule', false);
                                        $tour_atts = $tmp_tour_atts[0];
                                        foreach ($tour_atts as $k => $val) {
                                            echo '<h3>'. $val['tour_detailed_schedule_title'] .'</h3>';
                                            echo '<div class="tour_detailed_schedule-'.$k.'">'. $val['tour_detailed_schedule_content'] .'</div>';
                                        }
                                    ?>
                                    
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    
                                </div>
                                <!-- /.c-tab2 -->
                                <div class="content c-tab3">
                                    <h3>Quánh giá của KH</h3>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                    <p style="text-align: justify;"><strong>Chắc chắn bạn đang có hẹn với Hàn Quốc tháng 5, 6, ở đất nước đẹp như mơ trong những thước phim lãng mạn, với rất nhiều cảnh đẹp, điểm đến khám phá kỳ thú, nơi có nền văn hóa vô cùng đặc sắc và còn đáp ứng cơn cuồng mua sắm những sản phẩm hấp dẫn, ngay trong Tour Seoul – Nami – Everland – Drumcat Show 5 ngày 4 đêm, giá ưu đãi hấp dẫn mà PYS Travel dành cho bạn.</strong></p>
                                </div>
                                <!-- /.c-tab3 -->
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            $(".single-body-tour .layout-tab-tour .tab").click(function () {
                                var tab = $(this).attr("data-tab");
                                $(this).addClass("select");
                                $(this).siblings().removeClass("select");
                                $(".content").hide();
                                $(".c-" + tab).show();
                            });
                        });
                    </script>
                    <script>
                        jQuery(document).ready(function ($) {
                            $(".layout-tab-tour .tab-tour").sticky();
                            $(".layout-tab-tour .tab-tour > .tab").click(function () {
                                $('html, body').animate({
                                    scrollTop: $(".layout-tab-tour").offset().top - 105
                                }, 500);
                            });
                        });
                    </script>

                    <!-- /.tour-tab -->
                    <!-- <div class="tour-info">
                            <div class="excrept-box">
                                    <div class="accompanied_service">
                                            <i class="fa fa-check"></i> <span>Bảo hiểm</span>
                                            <i class="fa fa-street-view"></i> <span>Hướng dẫn viên</span>
                                            <i class="fa fa-car"></i><span> Xe đưa đón</span>
                                            <i class="fa fa-ticket"></i> <span>Vé tham quan</span>
                                    </div>
                            </div>
                            /.excrept-left
                            <div class="price-box">
                                    <div class="price">69.696.000 <span>VNĐ</span></div>
                                    <a href="/dat-tour?id=6969" class="btn btn-add-tour">Đặt Tour <i class="icon fa fa-chevron-right"></i></a>
                            </div>
                    </div> -->
                    <!-- /.meta-tour-info -->
                </div> 
                <!-- /.thumbnail-body -->
            </div> 
            <!-- /.article-tour -->
        </div>
        <!-- /.left-content -->
        <div class="col-xs-3" id="right-sidebar">
            <div class="pintab-wrapper">
                <div class="pintab">
                    <div class="tour-info">
                        <h2><?php _e("Thông tin tour", "piklist-tour") ?></h2>
                        <div class="list-info">
                            <div class="item">
                                <label for="tour-cat"><?php _e("Điểm đến", "piklist-tour") ?></label>
                                <a href="#diem-dien" title="Điểm đến">Nha Trang</a>
                            </div>
                            <div class="item">
                                <label for="tour-time"><?php _e("Thời gian", "piklist-tour") ?></label>
                                <a rel="nofollow" title="Thời gian">3 ngày 2 đêm</a>
                            </div>
                            <div class="item">
                                <label for="tour-start"><?php _e("Khởi hành", "piklist-tour") ?></label>
                                <a rel="nofollow" title="Khởi hành">T2 & T6 hàng tuần</a>
                            </div>
                            <div class="item">
                                <label for="tour-start"><?php _e("Số sao", "piklist-tour") ?></label>
                                <a rel="nofollow" title="Số sao">
                                    <div class="star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tour-contact">
                        <!-- Show Contact form -->
                    </div>
                </div>
            </div>
        </div>

        <!-- /#single-tour-layout -->
        <?php
        wp_link_pages(array(
            'before' => '<div class="fl-post-page-nav">' . _x('Pages:', 'Text before page links on paginated post.', 'fl-automator'),
            'after' => '</div>',
            'next_or_number' => 'number'
        ));
        ?>
    </div><!-- .fl-post-content -->
    <!-- /.tour-content -->
    <div class="tour-footer"></div>
    <!-- /.tour-footer -->
    <?php FLTheme::post_navigation(); ?>
    <?php comments_template(); ?>

</article>
<!-- .fl-post -->
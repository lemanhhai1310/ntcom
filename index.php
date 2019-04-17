<?php include('header.php'); ?>
<div class="uk-section-small block_step">
    <div class="uk-container">
        <div class="uk-child-width-1-4@m" uk-grid uk-scrollspy="cls: uk-animation-scale-down; target: > div > .box_step; delay: 500; repeat: false">
            <?php
            $item = array(
                array(
                    'src' => 'imgs/step1.png',
                    'title' => 'chính hãng',
                    'desc' => 'Sản phẩm chính uy tín',
                ),
                array(
                    'src' => 'imgs/step2.png',
                    'title' => 'bảo hành',
                    'desc' => 'Hỗ trợ bảo hành 24/07',
                ),
                array(
                    'src' => 'imgs/step3.png',
                    'title' => 'kiểm nghiệm',
                    'desc' => 'Sản phẩm được kiểm nghiệm kỹ càng',
                ),
                array(
                    'src' => 'imgs/step4.png',
                    'title' => 'tiết kiệm',
                    'desc' => 'Giá thành phải chăng',
                ),
            );
            foreach ($item as $key => $value) { ?>
                <div>
                    <div class="box_step uk-text-center">
                        <img class="uk-margin-small" src="<?php echo $value['src']; ?>" alt="">
                        <h3 class="uk-text-uppercase uk-margin-small"><?php echo $value['title']; ?></h3>
                        <p class="uk-margin-small"><?php echo $value['desc']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container">
        <h2 class="title_c uk-flex uk-flex-middle uk-flex-center uk-margin-medium">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <span class="uk-margin-small-left uk-margin-small-right">Các dòng sản phẩm chính</span>
            <i class="fa fa-circle" aria-hidden="true"></i>
        </h2>
        <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; delay: 500; repeat: false">
            <?php
            $item = array(
                array(
                    'src' => 'imgs/spchinh/img1.png',
                    'title' => 'Switching',
                ),
                array(
                    'src' => 'imgs/spchinh/img2.png',
                    'title' => 'Routing',
                ),
                array(
                    'src' => 'imgs/spchinh/img3.png',
                    'title' => 'Wireless',
                ),
                array(
                    'src' => 'imgs/spchinh/img4.png',
                    'title' => 'Network Security',
                ),
                array(
                    'src' => 'imgs/spchinh/img5.png',
                    'title' => 'Media Converters',
                ),
                array(
                    'src' => 'imgs/spchinh/img6.png',
                    'title' => 'Network Adapters',
                ),
                array(
                    'src' => 'imgs/spchinh/img7.png',
                    'title' => 'Transceivers',
                ),
                array(
                    'src' => 'imgs/spchinh/img8.png',
                    'title' => 'Sản phẩm khác',
                ),
            );
            foreach ($item as $key => $value) { ?>
                <div>
                    <div class="uk-card card3 uk-card-default uk-card-body uk-text-center uk-transition-toggle uk-height-1-1">
                        <div class="uk-inline-clip uk-width-1-1" tabindex="1">
                            <div class="uk-background-contain uk-background-center-center uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url(<?php echo $value['src']; ?>); padding-top: 53%;"></div>
                        </div>
                        <h3 class="uk-card-title"><a href="#"><?php echo $value['title']; ?></a></h3>
                        <hr class="uk-divider-small">
                    </div>
                </div>
            <?php } ?>
        </div>
        <h2 class="title_c uk-flex uk-flex-middle uk-flex-center uk-margin-medium">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <span class="uk-margin-small-left uk-margin-small-right">Sản phẩm bán chạy</span>
            <i class="fa fa-circle" aria-hidden="true"></i>
        </h2>
        <div class="spbc_slider uk-overflow-hidden" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-2@m uk-grid-medium" uk-grid>
                        <li>
                            <div class="uk-card card2 uk-card-default">
                                <div class="uk-card-body">
                                    <div class="uk-cover-container">
                                        <img src="imgs/spbc/spbc1.jpg" alt="">
                                    </div>
                                    <h3 class="uk-card-title"><a href="#">Catalyst IE3200 <span>Rugged Series (new)</span></a></h3>
                                    <p>Fixed DIN Rail switch  |  All Gigabit Ethernet platform  |  8 PoE/POE+ ports  |  Cisco DNA Center for management</p>
                                    <a href="#" class="uk-button order uk-button-secondary">Đặt hàng</a>
                                    <a href="#" class="uk-link uk-margin-small-left">Đọc thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card card2 uk-card-default">
                                <div class="uk-card-body">
                                    <div class="uk-cover-container">
                                        <img src="imgs/spbc/spbc2.jpg" alt="">
                                    </div>
                                    <h3 class="uk-card-title"><a href="#">Cisco Catalyst 4500-X Series</a></h3>
                                    <p>Cost-effective, small, fixed aggregation switch  |  High-availability features reduce downtime+</p>
                                    <a href="#" class="uk-button order uk-button-secondary">Đặt hàng</a>
                                    <a href="#" class="uk-link uk-margin-small-left">Đọc thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-card card2 uk-card-default">
                                <div class="uk-card-body">
                                    <div class="uk-cover-container">
                                        <img src="imgs/spbc/spbc1.jpg" alt="">
                                    </div>
                                    <h3 class="uk-card-title"><a href="#">Catalyst IE3200 <span>Rugged Series (new)</span></a></h3>
                                    <p>Fixed DIN Rail switch  |  All Gigabit Ethernet platform  |  8 PoE/POE+ ports  |  Cisco DNA Center for management</p>
                                    <a href="#" class="uk-button order uk-button-secondary">Đặt hàng</a>
                                    <a href="#" class="uk-link uk-margin-small-left">Đọc thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="uk-section block_tintuc">
    <div class="uk-container">
        <h2 class="title_c uk-flex uk-flex-middle uk-flex-center uk-margin-medium">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <span class="uk-margin-small-left uk-margin-small-right">Tin tức</span>
            <i class="fa fa-circle" aria-hidden="true"></i>
        </h2>
        <div class="uk-child-width-1-3@m uk-grid-medium" uk-grid>
            <?php
            $item = array(
                'https://znews-photo.zadn.vn/w480/Uploaded/sgtnrb/2019_04_17/rtx6rvfs.jpg',
                'https://znews-photo.zadn.vn/w480/Uploaded/iutmtn/2019_04_16/manhatan.jpg',
                'https://znews-photo.zadn.vn/w480/Uploaded/xpcwvovp/2019_04_15/thumb_1.jpg',
            );
            foreach ($item as $key => $value) { ?>
                <div>
                    <div class="uk-card card1 uk-card-default">
                        <div class="uk-cover-container">
                            <img src="<?php echo $value; ?>" alt="" uk-cover>
                            <canvas width="898" height="599"></canvas>
                        </div>
                        <div class="uk-card-body uk-padding-small">
                            <h3 class="uk-card-title uk-margin-small"><a href="#">Lorem Ipsum</a></h3>
                            <p class="uk-margin-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            <hr class="uk-divider-small">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<?php include('header.php'); ?>
<div class="uk-section">
    <div class="uk-container">
        <h2 class="title_c uk-flex uk-flex-middle uk-flex-center uk-margin-medium">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <span class="uk-margin-small-left uk-margin-small-right">Sản phẩm bán chạy</span>
            <i class="fa fa-circle" aria-hidden="true"></i>
        </h2>
        <div uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-2" uk-grid>
                        <li>
                            <div class="uk-card card2 uk-card-default">
                                <div class="uk-card-body">
                                    <div class="uk-cover-container">
                                        <img src="imgs/spbc/spbc1.jpg" alt="" uk-cover>
                                        <canvas width="600" height="400"></canvas>
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
                                        <img src="imgs/spbc/spbc1.jpg" alt="" uk-cover>
                                        <canvas width="600" height="400"></canvas>
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
                                        <img src="imgs/spbc/spbc1.jpg" alt="" uk-cover>
                                        <canvas width="600" height="400"></canvas>
                                    </div>
                                    <h3 class="uk-card-title"><a href="#">Catalyst IE3200 <span>Rugged Series (new)</span></a></h3>
                                    <p>Fixed DIN Rail switch  |  All Gigabit Ethernet platform  |  8 PoE/POE+ ports  |  Cisco DNA Center for management</p>
                                    <a href="#" class="uk-button order uk-button-secondary">Đặt hàng</a>
                                    <a href="#" class="uk-link uk-margin-small-left">Đọc thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
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
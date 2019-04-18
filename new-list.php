<?php include('header.php'); ?>
<div class="block_breadcrumb">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><span>Tin tức</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="new-list uk-margin-medium" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small" uk-grid>
                        <?php
                        $item = array(
                            array(
                                'src' => 'https://imgproxy3.cdnforo.com/JSRLEtL8dMKeBcb_zVi_pm8aAazj3gYgApyCdZGJnR0/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4620887_cover_4618081_tinhte_review_samsung_galaxy_watch_active_10.jpg',
                            ),
                            array(
                                'src' => 'https://imgproxy3.cdnforo.com/-aj02AO-FzAlsDdg2GiAwebTzeY3I4FrhJCicgPiwjQ/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4622959_cover_tinhte_google_assistant_audio_logs.jpg',
                            ),
                            array(
                                'src' => 'https://imgproxy3.cdnforo.com/cGtjWIM0HX4D72x24s-qmYWXmwhGZAz1_rgEEUyjTrw/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4623023_CV.jpg',
                            ),
                            array(
                                'src' => 'https://imgproxy3.cdnforo.com/cUIOBnz1Cm19D-ftuv8uBMOSBUC9ZDTZNlA7LOCfBt8/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4623223_Cover_camera.tinhte.vn_-14.jpg',
                            ),
                            array(
                                'src' => 'https://imgproxy3.cdnforo.com/ADj_v8r3B8GJJegy_ThN4mD95FDeg-H5bU9gGc-YqNk/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4622842_HOME-2020-mercedes-benz-gls.jpg',
                            ),
                        );
                        foreach ($item as $key => $value) { ?>
                        <li>
                            <div class="uk-card card4">
                                <div class="uk-cover-container">
                                    <img src="<?php echo $value['src']; ?>" alt="" uk-cover>
                                    <canvas width="523" height="349"></canvas>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title uk-text-uppercase"><a href="#">Đánh giá chi tiết Galaxy Watch Active: Đứa con lai tuyệt đẹp của nhà Samsung</a></h3>
                                    <time>05 tgh 3 2019</time>
                                    <p>Galaxy Watch Active được Samsung giới thiệu vào sự kiện Unpacked 2019 và nó thực sự khiến mình thích thú so với những thứ còn lại của ngày hôm đó.</p>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <div>
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

        </div>
        <div class="uk-grid-medium uk-child-width-1-2@m" uk-grid>
            <?php
            $item = array(
                array(
                    'src' => 'https://imgproxy3.cdnforo.com/JSRLEtL8dMKeBcb_zVi_pm8aAazj3gYgApyCdZGJnR0/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4620887_cover_4618081_tinhte_review_samsung_galaxy_watch_active_10.jpg',
                ),
                array(
                    'src' => 'https://imgproxy3.cdnforo.com/-aj02AO-FzAlsDdg2GiAwebTzeY3I4FrhJCicgPiwjQ/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4622959_cover_tinhte_google_assistant_audio_logs.jpg',
                ),
                array(
                    'src' => 'https://imgproxy3.cdnforo.com/cGtjWIM0HX4D72x24s-qmYWXmwhGZAz1_rgEEUyjTrw/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4623023_CV.jpg',
                ),
                array(
                    'src' => 'https://imgproxy3.cdnforo.com/cUIOBnz1Cm19D-ftuv8uBMOSBUC9ZDTZNlA7LOCfBt8/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4623223_Cover_camera.tinhte.vn_-14.jpg',
                ),
                array(
                    'src' => 'https://imgproxy3.cdnforo.com/ADj_v8r3B8GJJegy_ThN4mD95FDeg-H5bU9gGc-YqNk/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4622842_HOME-2020-mercedes-benz-gls.jpg',
                ),
                array(
                    'src' => 'https://imgproxy3.cdnforo.com/Vl8NmFHnLmy5ecE3HkPPBkc6c3nL64AThXSjRDn7Y6Y/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/04/4622226_deal2-1.jpg',
                ),
            );
            foreach ($item as $key => $value) { ?>
            <div>
                <div class="uk-card card5 uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="<?php echo $value['src']; ?>" alt="" uk-cover>
                        <canvas width="395" height="344"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body uk-padding-small">
                            <h3 class="uk-card-title"><a href="#">Bộ Office trên Mac đã có icon mới, anh em Windows thì sao?</a></h3>
                            <time>05 tgh 3 2019</time>
                            <p>Hôm nay sau khi mình cập nhật bộ Office trên Mac thì thấy đã được dùng dàn biểu tượng mới đẹp quá, anh em trên Windows thì sao, anh em cập nhật phần mềm xem có chưa nhé.
                                Người ta nói thay đổi cái icon là việc nhỏ, đây sẽ là bước đánh dấu để Microsoft thay đổi toàn diện UI, UX cho bộ Office.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
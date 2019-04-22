<?php $body = '' ?>
<?php include('header.php'); ?>
<div class="uk-section uk-background-cover" style="background-image: url(imgs/bg-catalog.jpg)">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-3@m">
                <div class="box_catalog">
                    <h1 class="uk-text-uppercase">router</h1>
                    <p>The Catalyst 9000 access portfolio now includes switches and wireless controllers.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-medium" uk-grid>
            <div class="uk-width-expand@m">
                <div class="uk-margin uk-flex uk-flex-middle uk-flex-between">
                    <h3 class="title_catalog uk-text-uppercase uk-margin-remove">tất cả 122 router</h3>
                    <div class="uk-flex uk-flex-middle uk-visible@m">
                        <div class="tab uk-margin-right">
                            <a id="grid" class="uk-active" href="#"><span uk-icon="grid"></span></a>
                            <a id="list" href="#"><span uk-icon="list"></span></a>
                        </div>
                        <div uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Sắp xếp</option>
                                <option value="1">Option 01</option>
                                <option value="2">Option 02</option>
                                <option value="3">Option 03</option>
                                <option value="4">Option 04</option>
                            </select>
                            <button class="uk-button uk-button-default btn2" type="button" tabindex="-1">
                                <span></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $('#list').click(function (event) {
                                event.preventDefault();
                                $('.tab a').removeClass('uk-active');
                                $('#list').addClass('uk-active');
                                $('#products > div').removeClass('uk-width-1-3@m');
                                $('#products > div').addClass('uk-width-1-1@m');
                                $('.row1').removeClass('uk-width-1-1@m');
                                $('.row1').addClass('uk-width-1-3@m');
                                UIkit.grid('#products', function () {
                                    console.log('Dạng list');
                                });
                            });
                            $('#grid').click(function (event) {
                                event.preventDefault();
                                $('.tab a').removeClass('uk-active');
                                $('#grid').addClass('uk-active');
                                $('#products > div').removeClass('uk-width-1-1@m');
                                $('#products > div').addClass('uk-width-1-3@m');
                                $('.row1').removeClass('uk-width-1-3@m');
                                $('.row1').addClass('uk-width-1-1@m');
                                UIkit.grid('#products', function () {
                                    console.log('Dạng grid');
                                });
                            });
                        });
                    </script>
                </div>
                <div id="products" class="uk-grid-small" uk-grid>
                    <?php
                    $item = array(
                        array(
                            'src' => 'imgs/spbc/spbc1.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc2.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc3.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc1.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc2.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc3.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc1.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc2.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc3.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc1.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc2.jpg',
                        ),
                        array(
                            'src' => 'imgs/spbc/spbc3.jpg',
                        ),
                    );
                    foreach ($item as $key => $value) { ?>
                    <div class="uk-width-1-3@m">
                        <div class="uk-card card6 uk-padding-remove uk-card-default uk-grid-collapse uk-margin" uk-grid>
                            <div class="row1 uk-width-1-1@m">
                                <div class="uk-padding-small">
                                    <div class="uk-background-contain uk-width-1-1" style="background-image: url(<?php echo $value['src']; ?>); padding-top: 70%;"></div>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-card-body uk-padding-small">
                                    <h3 class="uk-card-title"><a href="product-detail.php">Cisco Catalyst 4500-X Series</a></h3>
                                    <p>Fixed DIN Rail switch  |  All Gigabit Ethernet platform  |  8 PoE/POE+ ports  |  Cisco DNA Center for management</p>
                                    <p class="price_sp">
                                        <span class="uk-margin-small-right">881.000đ</span>
                                        <del>1.031.000đ</del>
                                    </p>
                                    <a href="product-detail.php" class="uk-button uk-button-secondary">Đặt hàng</a>
                                    <a href="product-detail.php" class="uk-link uk-margin-small-left">Đọc thêm <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <ul class="uk-pagination uk-flex-center" uk-margin>
                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="uk-disabled"><span>...</span></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li class="uk-active"><span>7</span></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#"><span uk-pagination-next></span></a></li>
                </ul>
            </div>
            <div class="uk-width-1-4@m uk-flex-first@m">
                <aside class="box_aside uk-height-1-1">
                    <h3 class="title uk-text-center">Thương hiệu</h3>
                    <div class="uk-padding-small">
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label>
                                <input class="uk-checkbox" type="checkbox" checked>
                                <div>
                                    <img src="imgs/loc1.jpg" alt="">
                                </div>
                            </label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label>
                                <input class="uk-checkbox" type="checkbox">
                                <div>
                                    <img src="imgs/loc2.jpg" alt="">
                                </div>
                            </label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label>
                                <input class="uk-checkbox" type="checkbox">
                                <div>
                                    <img src="imgs/loc3.jpg" alt="">
                                </div>
                            </label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label>
                                <input class="uk-checkbox" type="checkbox">
                                <div>
                                    <img src="imgs/loc4.jpg" alt="">
                                </div>
                            </label>
                        </div>
                    </div>
                    <h3 class="title uk-text-center">Default Memory</h3>
                    <div class="uk-padding-small">
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox" checked> 512 MB</label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox"> 256 MB</label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox"> 128 MB</label>
                        </div>
                    </div>
                    <h3 class="title uk-text-center">WAN Circuit Speed</h3>
                    <div class="uk-padding-small">
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox" checked> 15-35 Mbps (45)</label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox"> 50-100 Mbps (40)</label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox"> 150-500 Mbps (26)</label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox"> 1G Mbps or above</label>
                        </div>
                    </div>
                    <h3 class="title uk-text-center">VPN Tunnels</h3>
                    <div class="uk-padding-small">
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox" checked> 10 - 250 tunnels (54)</label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox"> 750 more tunnels  (20)</label>
                        </div>
                    </div>
                    <h3 class="title uk-text-center">Firewall Thoughtput</h3>
                    <div class="uk-padding-small">
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox" checked> 100Mbps - 1Gbps (29)</label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox"> 1.2Gbps - 2Gbps (6)</label>
                        </div>
                        <div class="uk-margin-small uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox uk-margin-small-right" type="checkbox"> 3Gbps - 5Gbps  (20)</label>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="uk-width-1-1">
                <div class="uk-section-xsmall"></div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
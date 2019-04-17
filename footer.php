<footer id="footer" class="uk-position-relative">
    <div class="uk-position-top-center uk-position-z-index uk-text-center go-up">
        <a href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    </div>
    <div class="uk-container">
        <div class="uk-section">
            <div uk-grid>
                <?php
                $item = array(
                    array(
                        'title' => 'Sản phẩm',
                        'link' => array(
                            'Switching',
                            'Routing',
                            'Wireless',
                            'Network Security',
                            'Xem thêm'
                        ),
                    ),
                    array(
                        'title' => 'Hỗ trợ',
                        'link' => array(
                            'Hỗ trợ sản phẩm',
                            'Giúp mua hàng',
                            'Chính sách dịch vụ sau bán hàng',
                        ),
                    ),
                    array(
                        'title' => 'Khám phá',
                        'link' => array(
                            'Tin tức',
                            'Sự kiện',
                            'Hướng dẫn mua hàng',
                        ),
                    ),
                    array(
                        'title' => 'Câu hỏi thường gặp',
                        'link' => array(
                            'Làm thế nào để đặt hàng?',
                            'Hình thức thanh toán như thế nào?',
                            'Phí vận chuyển',
                        ),
                    ),
                );
                foreach ($item as $key => $value) { ?>
                    <div class="uk-width-1-6@m">
                        <h5 class="title_f"><?php echo $value['title']; ?></h5>
                        <ul class="uk-list list1_f">
                            <?php foreach ($value['link'] as $k => $v) { ?>
                                <li><a href="#"><?php echo $v; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <div class="uk-width-expand@m uk-text-right@m">
                    <h5 class="title_f">Đăng ký nhận tin</h5>
                    <form class="box1_f uk-margin-medium-bottom">
                        <fieldset class="uk-fieldset">
                            <legend class="uk-legend uk-margin-small">Nhận tin tức mới nhất từ NTCOM</legend>
                            <div class="uk-grid-small uk-width-medium@m uk-margin-auto-left uk-grid-collapse uk-grid" uk-grid="">
                                <div class="uk-width-expand uk-first-column">
                                    <input class="uk-input" type="email" placeholder="Điền email của bạn">
                                </div>
                                <div class="uk-width-auto">
                                    <button type="submit" class="uk-button uk-button-secondary uk-padding-small uk-padding-remove-bottom uk-padding-remove-top"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <ul class="uk-grid-small uk-margin-medium uk-child-width-auto uk-flex-right@m payment_method" uk-grid>
                        <li><img src="imgs/paypal.png" alt=""></li>
                        <li><img src="imgs/visa.png" alt=""></li>
                        <li><img src="imgs/master-card.png" alt=""></li>
                        <li><img src="imgs/discover.png" alt=""></li>
                        <li><img src="imgs/american-express.png" alt=""></li>
                    </ul>
                    <div class="uk-margin-medium dcma">
                        <a href="#"><img src="imgs/dcma.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-flex-between@m uk-flex-middle" uk-grid>
            <div class="uk-width-auto@m">
                <ul class="uk-grid-small uk-child-width-auto uk-flex-middle site_map_f" uk-grid>
                    <li><a href="#"><img src="imgs/logo.png" alt=""></a></li>
                    <li><a href="#">Về NTCOM</a></li>
                    <li><a href="#">Liên hệ chúng tôi</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="#">Hỏi đáp</a></li>
                </ul>
            </div>
            <div class="uk-width-auto@m">
                <ul class="uk-grid-small uk-child-width-auto site_map_f uk-flex-middle" uk-grid>
                    <li><a href="#"><span uk-icon="facebook"></span></a></li>
                    <li><a href="#"><span uk-icon="twitter"></span></a></li>
                    <li><a href="#"><span uk-icon="youtube"></span></a></li>
                    <li><a href="#"><span uk-icon="vimeo"></span></a></li>
                    <li><a href="#"><span uk-icon="instagram"></span></a></li>
                </ul>
            </div>
        </div>
        <hr class="uk-margin">
        <div class="uk-section-xsmall uk-padding-remove-top">
            <div class="uk-flex-between@m uk-flex-bottom" uk-grid>
                <div class="uk-width-auto@m">
                    <ul class="uk-breadcrumb Nav_f uk-margin-small">
                        <li><span>Bản quyền © 2019 Bảo lưu mọi quyền</span></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Sử dụng cookie</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                    </ul>
                    <ul class="uk-breadcrumb Nav_f uk-margin-small">
                        <li><span>Phản hồi về trải nghiệm web?</span> <a href="#">Bấm vào đây</a></li>
                    </ul>
                </div>
                <div class="uk-width-auto@m">
                    <div uk-form-custom="target: > * > span:last-child">
                        <select>
                            <option value="1">Tiếng Việt</option>
                            <option value="2">Tiếng Anh</option>
                        </select>
                        <span class="uk-link-reset select_lang uk-flex uk-position-relative uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-left">
                            <span uk-icon="icon: world"></span>
                            <span style="margin-left: 5px;"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>
</body>
</html>
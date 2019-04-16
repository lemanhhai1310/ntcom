<footer id="footer">
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
                    <form class="box1_f uk-margin">
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
                    <ul class="uk-grid-small uk-margin uk-child-width-auto uk-flex-right@m payment_method" uk-grid>
                        <li><img src="imgs/paypal.png" alt=""></li>
                        <li><img src="imgs/visa.png" alt=""></li>
                        <li><img src="imgs/master-card.png" alt=""></li>
                        <li><img src="imgs/discover.png" alt=""></li>
                        <li><img src="imgs/american-express.png" alt=""></li>
                    </ul>
                    <div class="uk-margin dcma">
                        <a href="#"><img src="imgs/dcma.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
</section>
</body>
</html>
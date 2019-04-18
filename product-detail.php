<?php $body = '' ?>
<?php include('header.php'); ?>
<div class="block_breadcrumb">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><span>CISCO1941W-N/K9</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-padding" style="background-color: #FFFFFF;">

        </div>
        <h2 class="title_c uk-flex uk-flex-middle uk-flex-center uk-margin-medium">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <span class="uk-margin-small-left uk-margin-small-right">Sản phẩm tương tự</span>
            <i class="fa fa-circle" aria-hidden="true"></i>
        </h2>
        <div class="uk-grid-medium uk-child-width-1-3@m" uk-grid>
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
            );
            foreach ($item as $key => $value) { ?>
            <div>
                <?php include('box_product.php'); ?>
            </div>
            <?php } ?>
        </div>
        <div class="uk-section-small"></div>
    </div>
</div>
<?php include('footer.php'); ?>
<?php include('header.php'); ?>
<div class="uk-section">
    <div class="uk-container">
        <h2 class="title_c uk-flex uk-flex-middle uk-flex-center uk-margin-medium">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <span class="uk-margin-small-left uk-margin-small-right">Sản phẩm bán chạy</span>
            <i class="fa fa-circle" aria-hidden="true"></i>
        </h2>
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
                            <h3 class="uk-card-title"><a href="#">Lorem Ipsum</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            <hr class="uk-divider-small">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
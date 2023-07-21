<div class="title-main"><span><?= $titleMain ?></span></div>
<div class="grid-products">
    <?php if (!empty($allAlbum)) {
        foreach ($allAlbum as $k => $v) { ?>
            <div>
                <a href="" title="<?= $v['name' . $lang] ?>">
                    <div class="item_video">
                        <a class="scale-img effect-1">
                            <?= $func->getImage(['class' => 'w-100', 'sizes' => '293x220x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                        <div class="title_video">
                            <?= $v["desc" . $lang] ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php }
    } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>
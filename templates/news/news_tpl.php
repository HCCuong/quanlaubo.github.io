<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="content-main row">
    <?php if (!empty($news)) {
        foreach ($news as $k => $v) { ?>
            <div class="col-md-6">
                <div class="box_news">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="image_boder hover-glass">
                                <a href="<?= $v[$sluglang] ?>" title="<?= $v["ten$lang"] ?>">
                                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '285x205x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="text-border">
                                <h3 class="text-split"> <a href="<?= $v[$sluglang] ?>" title="<?= $v["name$lang"] ?>"> <?= $v["name$lang"] ?></a></h3>
                                <p class="text-split"><?= $v["desc$lang"] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
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
<div class="footer">
    <div class="footer-article">
        <div class="wrap-content">
            <div class="row">
                <div class="footer-news col-lg-5 text-lg-right">
                    <h3 class="footer-title">Thông tn liên hệ </h3>
                    <div class="footer-infor">
                        <p>Địa chỉ: <?= $optsetting['address'] ?></p>
                        <p>Số Điện Thoại: <?= $optsetting['phone'] ?></p>
                        <p>Mail: <?= $optsetting['email'] ?></p>
                        <p>Website: <?= $optsetting['website'] ?></p>
                    </div>
                    <?php if (!empty($socialft)) { ?>
                        <div class="social-footer d-flex justify-content-end">
                            <?php foreach ($socialft as $key => $v) { ?>
                                <a class="d-block" href="<?= $v["link"] ?>" title="<?= $v["name" . $lang] ?>">
                                    <?= $func->getImage(['class' => 'w-100', 'sizes' => '25x25x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v["photo"], 'alt' => $v["name" . $lang]]) ?>
                                </a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="footer-news col-lg-2 text-lg-center">
                    <a class="logo-footer d-inline-block">
                        <?= $func->getImage(['class' => '', 'sizes' => '180x205x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logoft['photo'], 'alt' => $logoft['name' . $lang]]) ?>
                    </a>
                </div>

                <div class="footer-news col-lg-5">
                    <h3 class="footer-title">
                        Về chúng tôi
                    </h3>
                    <ul class="footer-ul d-flex flex-wrap justify-content-between">
                        <li class="w-50 pr-1"><a href="index" title="<?= trangchu ?>"><?= trangchu ?></a></li>
                        <li class="w-50"><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>
                        <li class="w-50 pr-1">
                            <a class="<?php if ($com == 'thuc-don') echo 'menu-active'; ?> transition" href="thuc-don" title="<?= "Thực đơn" ?>">
                                Thực đơn
                            </a>
                        </li>
                        <li class="w-50 pr-1"><a class="<?php if ($com == 'thu-vien-anh') echo 'active'; ?> transition" href="thu-vien-anh" title="Thư viện ảnh">Thư viện ảnh</a></li>
                        <li class="w-50 pr-1">
                            <a class="has-child <?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="<?= tintuc ?>"><?= tintuc ?></a>

                        </li>
                        <li class="w-50 pr-1"><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>"><?= lienhe ?></a></li>
                    </ul>

                    <div class="footer-copyright">Copyright © 2023 Lẩu Bò Nhà Đan. Design by NiNa.vn</div>

                </div>
            </div>
        </div>
    </div>

    <div class="boxMap-footer">
        <div class="wrap-content">
            <div>
                <div id="footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.988287056003!2d106.68259107464303!3d10.888494289267161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d7ce2ca86c7f%3A0x3d8703cc9a2656bb!2zNzY4IEjDoCBIdXkgR2nDoXAsIFRo4bqhbmggTOG7mWMsIFF14bqtbiAxMiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1686887776213!5m2!1svi!2s" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>
<?php if ($deviceType == 'mobile') { ?>
    <div class="toolbar">
        <ul>
            <li>
                <a id="goidien" href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t1.png', 'alt' => 'Phone']) ?><br>
                    <span>Gọi điện</span>
                </a>
            </li>
            <li>
                <a id="nhantin" href="sms:<?= $func->parsePhone($optsetting['hotline']) ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t2.png', 'alt' => 'Message']) ?><br>
                    <span>Nhắn tin</span>
                </a>
            </li>
            <li>
                <a id="chatzalo" href="https://zalo.me/<?= $func->parsePhone($optsetting['zalo']) ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t3.png', 'alt' => 'Zalo']) ?><br>
                    <span>Chat zalo</span>
                </a>
            </li>
            <li>
                <a id="chatfb" href="<?= $optsetting['fanpage'] ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t4.png', 'alt' => 'Facebook']) ?><br>
                    <span>Chat facebook</span>
                </a>
            </li>
        </ul>
    </div>
<?php } ?>
<div class="header">
	<div class="wrap-content d-lg-flex align-items-center justify-content-between">
		<div class="header-left">
			<div class="banner_left d-flex justify-content-between">
				<div class="logo-header scale-img effect-1">
					<a href="trang-chu">
						<?= $func->getImage(['class' => '', 'sizes' => '229x200x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
					</a>
				</div>
				<div class="banner-header">
					<span>Quán lẩu Bò</span>
					<p class="name-banner">NHÀ ĐAN</p>
					<p class="addr-header"><?= $optsetting['address'] ?></p>
				</div>
			</div>

			<?php include TEMPLATE . LAYOUT . "menu.php"; ?>
		</div>

		<div class="header-right">
			<div class="hotline-header">
				<span>Hotline</span>
				<p>Liên hệ đặt hàng ngay với chúng tôi</p>
				<a><?= $func->formatPhone($optsetting['hotline']) ?></a>
				<i class="xxx-icon d-inline-block mb-1"></i>
			</div>
			<div class="timeOpened-header">
				Giờ mở cửa: <span>8h - 22h (T2 - CN)</span>
			</div>
			<div class="d-lg-flex align-items-center justify-content-center">
				<ul class="social social-header list-unstyled p-0 m-0 res-none">
					<?php foreach ($social as $k => $v) { ?>
						<li class="d-inline-block align-top mr-1">
							<a href="<?= $v['link'] ?>" target="_blank">
								<?= $func->getImage(['sizes' => '39x39x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
							</a>
						</li>
					<?php } ?>
				</ul>

			</div>
		</div>
	</div>
</div>
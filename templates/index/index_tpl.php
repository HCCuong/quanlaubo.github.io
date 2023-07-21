<?php if (!empty($about)) { ?>
	<div class="about">
		<div class="wrap-content d-flex justify-content-between">
			<div class="about-left">
				<div class="desc-about">
					<?= $about["desc" . $lang] ?>
				</div>
				<div class="btn-seemore">
					<a href="gioi-thieu"><span>Xem chi tiết</span></a>
				</div>
			</div>
			<div class="about-right">
				<div class="title-about">
					<span><?= $about["name" . $lang] ?></span>
				</div>
				<div class="box-img-about d-flex justify-content-between">
					<div class="img-about-left">
						<a href="gioi-thieu">
							<span class="scale-img effect-1">
								<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '359x266x1', 'upload' => 'assets/images/', 'image' => 'about-img-left.jpg', 'alt' => '']) ?>
							</span>
							<div class="content-img-about-left d-flex justify-content-end">
								<div>
									<span>Giờ mở cửa</span>
									<p class="day">Các ngày trong tuần</p>
									<p class="time">8H - 22H</p>
								</div>
							</div>
						</a>
					</div>
					<div class="img-about-right">
						<a href="gioi-thieu">
							<span class="scale-img effect-1">
								<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '356x396x1', 'upload' => 'assets/images/', 'image' => 'about-img-right.jpg', 'alt' => '']) ?>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (!empty($td) && !empty($tpmonan)) { ?>
	<div class="td-div">
		<div class="wrap-content d-lg-flex justify-content-between">
			<div class="td-div-left">
				<div class="slide-td">
					<?php foreach ($td as $key => $v) { ?>
						<div>
							<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '470x960x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="td-div-right">
				<div>
					<span class="td-div-center d-inline-block">
						<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '406x470x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $tpmonan[0]["photo"], 'alt' => $tpmonan[0]["name" . $lang]]) ?>
						<i class="arrow-af-1 position-absolute"></i>
						<i class="arrow-af-2 position-absolute"></i>
						<i class="arrow-af-3 position-absolute"></i>
						<i class="arrow-af-4 position-absolute"></i>
					</span>
					<div class="ds-1 d-inline-block position-absolute">
						<span>
							<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '180x152x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $tpmonan[1]["photo"], 'alt' => $tpmonan[1]["name" . $lang]]) ?>
						</span>
						<span class="name-ds text-split"><?= $tpmonan[1]["name" . $lang] ?></span>
					</div>
					<div class="ds-2 d-inline-block position-absolute">
						<span>
							<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '235x175x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $tpmonan[2]["photo"], 'alt' => $tpmonan[2]["name" . $lang]]) ?>
						</span>
						<span class="name-ds text-split"><?= $tpmonan[2]["name" . $lang] ?></span>
					</div>
					<div class="ds-3 d-inline-block position-absolute">
						<span>
							<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '336x265x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $tpmonan[3]["photo"], 'alt' => $tpmonan[3]["name" . $lang]]) ?>
						</span>
						<span class="name-ds text-split"><?= $tpmonan[3]["name" . $lang] ?></span>
					</div>
					<div class="ds-4 d-inline-block position-absolute">
						<span>
							<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '175x140x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $tpmonan[4]["photo"], 'alt' => $tpmonan[4]["name" . $lang]]) ?>
						</span>
						<span class="name-ds text-split"><?= $tpmonan[4]["name" . $lang] ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (!empty($pronb)) { ?>
	<div class="letter-pronb">
		<div class="wrap-content">
			<div class="d-lg-flex justify-content-between">
				<div class="newsletter">
					<div>
						<div class="title-newsletter">
							<span>Quán Nhà Đan</span>
							<h3>Book bàn ngay</h3>
							<p>Hãy nhanh tay đặt bàn ngay để được hỗ trợ sắp xếp tốt nhất</p>
							<i class="xxx-icon d-inline-block"></i>
						</div>
						<form id="FormNewsletter" class="validation-newsletter" novalidate method="POST" action enctype="multipart/form-data">
							<div class="form-row">
								<div class="newsletter-input col-sm-6">
									<input type="text" class="form-control text-sm" id="fullname" name="fullname" placeholder="Họ và tên:" required>
								</div>
								<div class="newsletter-input col-sm-6">
									<input type="number" class="form-control text-sm" id="phone" name="phone" placeholder="Số điện thoại:" required>
								</div>
							</div>
							<div class="form-row">
								<div class="newsletter-input col-sm-6">
									<input type="text" class="form-control text-sm" id="date" name="date" placeholder="Ngày:" required>
								</div>
								<div class="newsletter-input col-sm-6">
									<input type="number" class="form-control text-sm" id="amount" name="amount" placeholder="Số lượng:" required>
								</div>
							</div>

							<div class="form-row position-relative">
								<div class="newsletter-input col-sm-12">
									<textarea class="form-control text-sm" id="content" name="content" placeholder="Nội dung" required></textarea>
								</div>
								<div class="newsletter-button">
									<input type="submit" class="btn btn-sm btn-danger btn-submit" name="submit" value="Gửi">
									<input type="hidden" name="newsletter" value="submit">
									<input type="hidden" name="btn btn-sm btn-danger w-100" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="pro-nb">
					<div>
						<div class="title-pro-nb">
							<span>Món ngon <br> Nổi bật</span>
						</div>
						<div class="slide-pro-nb">
							<?php foreach ($pronb as $key => $v) { ?>
								<div class="box-product">
									<a href="<?= $v["slug" . $lang] ?>" class="pic-product scale-img effect-1">
										<?= $func->getImage(['class' => 'w-100', 'isLazy' => false, 'sizes' => '366x264x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v["photo"], 'alt' => $v["name" . $lang]]) ?>
									</a>
									<div class="info-product">
										<a href="<?= $v["slug" . $lang] ?>" class="name-product text-split"><?= $v["name" . $lang] ?></a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<?php if (!empty($splist)) { ?>
	<div class="wrap-product-all">
		<div class="wrap-content">
			<div class="title-main-pro">
				<span>
					<span>Thực đơn nhà đan</span>
				</span>
			</div>
			<div class="wrap-pro-list">
				<div class="row">
					<?php foreach ($splist as $key => $vlist) { ?>
						<div class="prolist col-xl-6 col-12">
							<div class="d-flex justify-content-between">
								<div class="prolist-left">
									<div class="text-right">
										<a class="name-prolist text-decoration-none d-inline-block" href="<?= $vlist["slug" . $lang] ?>" title="<?= $vlist["name" . $lang] ?>">
											<span class="text-split"><?= $vlist["name" . $lang] ?></span>
										</a>
									</div>
									<div class="boxImg-prolist">
										<a class="prolist-img d-inline-block" href="<?= $vlist["slug" . $lang] ?>">
											<span class="scale-img effect-1">
												<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '248x250x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $vlist['photo'], 'alt' => $vlist['name' . $lang]]) ?>
											</span>
											<div class="hashtag">
												<span># <?= $vlist["name" . $lang] ?></span>
											</div>
										</a>
									</div>
								</div>
								<div class="prolist-right">
									<div class="box-productOfList">
										<?php $monanlist = $d->rawQuery("select name$lang, slug$lang, id, regular_price from #_product where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id']));
										foreach ($monanlist as $key => $ma) { ?>
											<div>
												<div class="box-name d-flex justify-content-between align-items-end">
													<a class="name-productOfList text-decoration-none text-split" href="<?= $ma["slug" . $lang] ?>" title="<?= $ma["name" . $lang] ?>">
														<?= $ma["name" . $lang] ?>
													</a>
													<div class="price-productOfList">
														<span>
															<?= $ma["regular_price"] / 1000 ?>K
														</span>
													</div>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (!empty($banner)) { ?>
	<div class="banner-qc">
		<?php foreach ($banner as $key => $v) { ?>
			<div class="effect-1">
				<a href target="_blank"><?= $func->getImage(['class' => 'w-100', 'sizes' => '1366x484x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v["photo"], 'alt' => $v["name" . $lang]]) ?></a>
			</div>
		<?php } ?>
	</div>

<?php } ?>

<!-- Album -->
<?php if (!empty($album)) { ?>
	<div class="album">
		<div class="wrap-content">
			<p class="slogan-album">
				# Chỗ này chill phết
			</p>
			<div class="wrap-album row">
				<div class="col-albumhome col-lg-3 col-md-6 col-sm-6">
					<div class="albumhome-item albumhome-item-0 wow animate__  animate__zoomIn animated">
						<a class="albumhome-img scale-img effect-1">
							<?= $func->getImage(['class' => 'w-100', 'sizes' => '278x522x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $album[0]["photo"], 'alt' => $album[0]["name" . $lang]]) ?>
						</a>
					</div>
				</div>
				<div class="col-albumhome col-lg-3 col-md-6 col-sm-6">
					<div class="albumhome-item albumhome-item-1 wow animate__  animate__zoomIn animated">
						<a class="albumhome-img scale-img effect-1">
							<?= $func->getImage(['class' => 'w-100', 'sizes' => '278x522x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $album[1]["photo"], 'alt' => $album[1]["name" . $lang]]) ?>
						</a>
						<div class="title-main">
							<p>Album</p>
							<span>Thư viện ảnh</span>
							<span class="d-inline-block three-line"></span>
						</div>
					</div>
				</div>
				<div class="col-albumhome col-lg-3 col-md-6 col-sm-6">
					<div class="albumhome-item albumhome-item-2 wow animate__  animate__zoomIn animated">
						<a class="albumhome-img scale-img effect-1">
							<?= $func->getImage(['class' => 'w-100', 'sizes' => '278x322x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $album[2]["photo"], 'alt' => $album[2]["name" . $lang]]) ?>
						</a>
					</div>
					<div class="albumhome-item albumhome-item-3 wow animate__  animate__zoomIn animated">
						<a class="albumhome-img scale-img effect-1">
							<?= $func->getImage(['class' => 'w-100', 'sizes' => '278x322x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $album[3]["photo"], 'alt' => $album[3]["name" . $lang]]) ?>
						</a>
					</div>
				</div>
				<div class="col-albumhome col-lg-3 col-md-6 col-sm-6">
					<div class="albumhome-item albumhome-item-4 wow animate__  animate__zoomIn animated">
						<a class="albumhome-img scale-img effect-1">
							<?= $func->getImage(['class' => 'w-100', 'sizes' => '278x322x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $album[4]["photo"], 'alt' => $album[4]["name" . $lang]]) ?>
						</a>
					</div>
					<div class="albumhome-item albumhome-item-5 wow animate__  animate__zoomIn animated">
						<a class="albumhome-img scale-img effect-1">
							<?= $func->getImage(['class' => 'w-100', 'sizes' => '278x322x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $album[5]["photo"], 'alt' => $album[5]["name" . $lang]]) ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<!-- Motion  -->

<?php if (!empty($videonb) && !empty($feedback)) { ?>
	<div class="cmt-video">
		<div class="wrap-content d-lg-flex justify-content-between">
			<div class="cmt">
				<div class="customer">
					<div class="title-customer">
						<span>Cảm nhận của bạn</span>
					</div>
					<div class="slide-customer">
						<div class="slick-customer">
							<!-- <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">
							Previous
						</button> -->
							<?php foreach ($feedback as $key => $fb) { ?>
								<div class="item-customer">
									<p class="desc-customer text-split mb-0">
										<span class="text-split"><?= $fb["content" . $lang] ?></span>
									</p>
									<div class="info-customer d-flex justify-content-between align-items-end">
										<div class="cus-avatar">
											<span class="d-inline-block">
												<?= $func->getImage(['class' => 'w-100', 'sizes' => '130x130x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $fb['photo'], 'alt' => $fb['name' . $lang]]) ?>
											</span>
										</div>
										<div class="cus-text">
											<span class="cus-name text-split"><?= $fb["name" . $lang] ?></span>
											<span class="cus-job text-split"><?= $fb["desc" . $lang] ?></span>
										</div>
									</div>
								</div>
							<?php  } ?>
							<!-- <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Next" role="button" style="display: block;">
							Next
						</button> -->
						</div>
					</div>
				</div>
			</div>
			<div class="video-div">
				<div class="video-nb">
					<div class="slide-video">
						<?php foreach ($videonb as $key => $v) { ?>
							<div>
								<div class="item_video item_video_slick" data-fancybox="video" data-src="<?= $v['link_video'] ?>">
									<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '560x390x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
									<span class="btn_play" data-fancybox="video" data-src="<?= $v['link_video'] ?>"></span>
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
							</div>
						<?php  } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<!-- Tin tức -->
<?php if (!empty($newsnb)) { ?>
	<div class="center tintuc">
		<div class="wrap-content">
			<div class="title-main-pro">
				<span>
					<span>Tin tức - sự kiện</span>
				</span>
			</div>
			<div class="box_center">
				<div class="slick-newsnb">

					<?php foreach ($newsnb as $key => $v) { ?>
						<div class="item_center">
							<div class="front_center">
								<div class="item_center_front">
									<a class="newsnb-img d-block" href="">
										<span class="d-block">
											<?= $func->getImage(['class' => 'w-100', 'sizes' => '345x345x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v["photo"], 'alt' => $v["name" . $lang]]) ?>
										</span>
									</a>
									<div class="info-newsnb-front">
										<h3 class="name-newsnb">
											<a class="text-split text-decoration-none" href="<?= $v["slug" . $lang] ?>" title="<?= $v["name" . $lang] ?>"><?= $v["name" . $lang] ?></a>
										</h3>
									</div>
								</div>
							</div>
							<div class="back_center">
								<div class="item_center_back d-inline-block">
									<a class="newsnb-img d-block" href="">
										<span class="d-block">
											<?= $func->getImage(['class' => 'w-100', 'sizes' => '341x381x1', 'upload' => 'assets/images/', 'image' => 'img8457-9538.jpg', 'alt' => '']) ?>
										</span>
									</a>
									<div class="info-newsnb-back">
										<h3 class="name-newsnb">
											<a class="text-split text-decoration-none" href="<?= $v["slug" . $lang] ?>" title="<?= $v["name" . $lang] ?>"><?= $v["name" . $lang] ?></a>
										</h3>
										<span class="d-inline-block xxx-icon"></span>
										<p class="desc-newsnb text-split"><?= $v["desc" . $lang] ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
<?php } ?>

<!-- <?php if (!empty($duan)) { ?>
	<div class=" wrap-service">
		<div class="wrap-content-pd0">
			<div class="title-main"><span>Dự án đã thực hiện</span></div>
			<div class="run_item_3 i_next_prev">
				<?php foreach ($duan as $key => $v) { ?>
					<div>
						<div class="box_news box_news_slick">
							<div class="image_boder hover-glass">
								<a href="<?= $v[$sluglang] ?>" title="<?= $v["name$lang"] ?>">
									<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '385x310x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
								</a>


							</div>


							<div class="desc_pos">
								<div class="desc_pos_text">
									<h3>
										<a href="<?= $v[$sluglang] ?>" title="<?= $v["name$lang"] ?>">
											<?= $v["name$lang"] ?></a>
									</h3>

									<p class="text-split"><?= $v["desc$lang"] ?></p>
									<a class="i_xem" href="<?= $v[$sluglang] ?>" title="<?= $v["name$lang"] ?>">
										Xem chi tiết
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php  } ?>
			</div>
			<div class="text-center">
				<p class="icon_xemthem"><a href="du-an">Xem tất cả dự án</a></p>
			</div>
		</div>
	</div>
<?php } ?> -->

<!-- <div class="wrap-intro">
	<div class="wrap-content">

		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-12 col-12">
				<div class="title-intro">
					<span>Video</span>
				</div>
				<div class="run_item_3">
					<?php foreach ($videonb as $key => $v) { ?>
						<div>
							<div class="item_video item_video_slick" data-fancybox="video" data-src="<?= $v['link_video'] ?>">

								<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '270x225x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>

								<div class="title_video">
									<?= $v["name" . $lang] ?>
								</div>

							</div>
						</div>
					<?php  } ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 col-12">
				<div class="title-intro">
					<span>Tin tức mỗi ngày</span>
				</div>
				<?php if (!empty($newsnb)) { ?>
					<div class="news-intro position-relative">
						<span class="news-control position-absolute transition" id="up"><i class="fas fa-chevron-up"></i></span>
						<span class="news-control position-absolute transition" id="down"><i class="fas fa-chevron-down"></i></span>
						<div class="news-scroll position-relative">
							<ul class="list-unstyled p-0 m-0">
								<?php foreach ($newsnb as $v) { ?>
									<li>

										<div class="news-shadow-article position-relative d-flex justify-content-start">
											<a class="news-shadow-image scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
												<?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '110x70x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
											</a>
											<div class="news-shadow-info">
												<h3 class="news-shadow-name">
													<a class="text-decoration-none transition text-split" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
												</h3>
												<div class="news-shadow-desc text-split"><?= $v['desc' . $lang] ?></div>
											</div>
										</div>

									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				<?php } ?>
			</div>

		</div>
	</div>
</div>
<div class="wrap-newsletter">
	<div class="wrap-content">

		<div class="row align-items-center justify-content-star">
			<div class="col-lg-2 col-md-12 col-sm-12 col-12 i-newsletter-center ">
				<a class="logo-header" href="">
					<?= $func->getImage(['class' => '', 'sizes' => '135x85x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logoft['photo'], 'alt' => $setting['name' . $lang]]) ?>
				</a>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 col-12 i-newsletter-center ">
				<form class="form-newsletter validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">


					<div class="newsletter-input ">
						<input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="Email" required />
						<div class="invalid-feedback">
							<?= vuilongnhapdiachiemail ?>
						</div>
					</div>


					<div class="newsletter-button">
						<input type="submit" class="btn btn-sm w-100" name="submit-newsletter" value="<?= gui ?>" disabled>
						<input type="hidden" name="newsletter" value="submit">
						<input type="hidden" class="btn btn-sm btn-danger w-100" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
					</div>

				</form>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-12 i-newsletter-center ">
				<p class="icon_xemthem3"><a>Đăng ký nhận báo giá</a></p>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-12 i-newsletter-center ">
				<ul class="social social-header list-unstyled p-0 m-0">
					<?php foreach ($socialft as $k => $v) { ?>
						<li class="d-inline-block align-top mr-1">
							<a href="<?= $v['link'] ?>" target="_blank">
								<?= $func->getImage(['sizes' => '30x30x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>



		</div>
	</div>
</div> -->
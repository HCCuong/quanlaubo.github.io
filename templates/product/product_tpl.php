<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="content-main w-clear">
	<?php if (!empty($product)) { ?>
		<div class="grid-products">
			<?php foreach ($product as $k => $v) { ?>
				<div class="product">
					<div class="box-product">
						<a href="<?= $v["slug" . $lang] ?>" class="pic-product scale-img effect-1">
							<?= $func->getImage(['class' => 'w-100', 'isLazy' => false, 'sizes' => '366x264x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v["photo"], 'alt' => $v["name" . $lang]]) ?>
						</a>
						<div class="info-product">
							<a href="<?= $v["slug" . $lang] ?>" class="name-product text-split"><?= $v["name" . $lang] ?></a>
							<?php if ($v["code"] != "") { ?>
								<p class="msp_product">
									Mã sản phẩm: <?= $v["code"] ?>
								</p>
							<?php } ?>
							<?php if ($v["discount"] > 0) { ?>
								<p class="price-product">
									<span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
									<span class="price-new"><?= $func->formatMoney($v['sale_price']) ?>
									</span>
								</p>
							<?php } else { ?>
								<p class="price-product"><?= ($v['regular_price'] > 0) ? 'Giá: ' : '' ?><span class="price-new"><?= ($v['regular_price'] > 0) ? $func->formatMoney($v['regular_price']) : '<a href="tel:' . preg_replace('/[^0-9]/', '', $optsetting['hotline']) . '">' . $optsetting['hotline'] . '</a>' ?></span></p>
							<?php } ?>
						</div>
					</div><!--item_product-->
				</div>
			<?php } ?>

		</div>
	<?php } else { ?>
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
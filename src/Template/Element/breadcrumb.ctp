<div class="col-md-6">
	<?php if(!empty($page_title)) { ?>
			<p><a href="<?php echo $this->Url->build('/', true); ?>">Home</a> / <a href="#"><?= __($page_title); ?></a></p>
	<?php } else { ?>
			<p><a href="<?php echo $this->Url->build('/', true); ?>">Home</a> / <a href="#"><?= __($otherPage->title) ?></a></p>
	<?php } ?>
</div>




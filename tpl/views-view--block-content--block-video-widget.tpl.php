<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>

<div class="news-bar">
	<div class="tag-ct2 video-slider">
		<div class="caroufredsel_wrapper">
			<?php print $rows; ?>
		</div>
	</div>
</div>

<?php endif; ?>
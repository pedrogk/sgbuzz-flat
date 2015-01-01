<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>

<div class="right_arrow2"></div>
	<div class="htick2">
		<div class="htick-text2">
			<div id="hot-ticker">
				<?php print $rows; ?>
			</div>
		</div>
	</div>

<?php endif; ?>
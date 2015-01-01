<?php print render($title_prefix); ?>
<?php if ($header): ?>
<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>

<div class="carvertical section" id="carvertical">
	<div class="game-bar">
		<div class="tag-ct2 carvertical-slider">
			<div class="caroufredsel_wrapper">
				<?php print $rows; ?>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>
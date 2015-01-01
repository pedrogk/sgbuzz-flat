<?php print render($title_prefix); ?>

<?php if ($header): ?>

<?php print $header; ?>

<?php endif; ?>

<?php if ($rows): ?>



<div class="right_arrow"></div>

<div class="htick">

	<div class="htick-text">

		<ul id="ticker01" class="newsticker">

			<?php print $rows; ?>

		</ul>

	</div>

</div>



<?php endif; ?>
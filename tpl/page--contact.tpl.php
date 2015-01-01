<?php include('header.tpl.php') ?>



<?php  if($page['headlines']):?>

<div id="news-wrapper">

	<div class="news-ticker" >

		<?php print render($page['headlines']) ?>

	</div>

</div>

<?php endif; ?>

<div class="clear"></div>



<?php  if($page['slider']):?>

<div id="pbt-slider">

	<?php print render($page['slider']) ?>

	<div class="clear"></div>

</div>

<?php endif; ?>

<div class="clear"></div>



<?php

	if (isset($node->field_layout['und'][0]['value']))

		{

			$layout_style = $node->field_layout['und'][0]['value'];

		} else $layout_style = 0;

	if ($layout_style == 1) {$class_stype = 'first-right';} else $class_stype ='';



?>



<!-- Begin wrapper content -->

<div id="content-wrapper" class="<?php	print $class_stype; ?>">



	<!-- Begin main content -->

	<div id="main-wrapper">

		<div id="tag-widget1">
			<h2 class="title"><span><?php print drupal_get_title(); ?></span></h2>
			<?php  if($page['content']): ?>
			<div class="content">
				<?php print render($page['content']) ?>
				<div class="clear"></div>
			</div>
			<?php endif; ?>
			<div class="clear"></div>
		</div>

	</div> <!-- End main content -->



	<!-- Begin sidebar first -->

	<div id="sidebar-wrapper2">

		<?php  if($page['sidebar_first']): ?>

		<div class="sidebar section" id="sidebar-box2">

			<?php print render($page['sidebar_first']) ?>

		</div>

		<?php endif ?>

	</div> <!-- End sidebar first -->



	<!-- Begin sidebar second-->

	<?php  if($page['sidebar_second']): ?>

	<div id="sidebar-wrapper">

		<?php print render($page['sidebar_second']) ?>

	</div> <!-- End sidebar second -->

	<div class="clear"></div>

	<?php endif ?>



	<?php  if($page['content_end']): ?>



	<!-- Begin content end-->

	<div id="tag-widget9">

		<div class="carousel section" id="carousel">
			<?php print render($page['content_end']) ?>
		</div>

	</div>

	<div class="clear"></div>

	<?php endif; ?>

</div>

<!-- end content-wrapper -->

<!-- end outer-wrapper -->

<?php include('footer.tpl.php') ?>




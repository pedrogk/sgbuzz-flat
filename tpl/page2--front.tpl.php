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

<!-- Begin wrapper content -->
<div id="content-wrapper">

	<!-- Begin main content -->
	<div id="main-wrapper">
		<div class="content">

			<?php  if($page['tag_widget1']): ?>
			<div class="tag-widget1">
				<?php print render($page['tag_widget1']) ?>
			</div>
			<?php endif ?>

			<?php  if($page['tag_post2']): ?>
			<div class="tag-post2">
				<div class="tag-widget2">
					<?php print render($page['tag_post2']) ?>
				</div>
			</div>
			<?php endif ?>

			<?php  if($page['tag_post2_last']): ?>
			<div class="tag-post2 last-column">
				<div class="tag-widget3">
					<?php print render($page['tag_post2_last']) ?>
				</div>
			</div>
			<?php endif ?>

			<?php  if($page['tag_post3']): ?>
			<div class="tag-post3">
				<?php print render($page['tag_post3']) ?>
			</div>
			<?php endif ?>

			<?php  if($page['tag_post4']): ?>
			<div class="tag-post4">
				<?php print render($page['tag_post4']) ?>
			</div>
			<?php endif ?>

			<?php  if($page['tag_post5']): ?>
			<div class="tag-post5">
				<?php print render($page['tag_post5']) ?>
			</div>
			<?php endif ?>

			<?php  if($page['pic_tag_post6']): ?>
			<div id="pic_tag-post6">
				<div class="tag-widget4">
					<?php print render($page['pic_tag_post6']) ?>
				</div>
			</div>
			<?php endif ?>

			<div class="clear"></div>
		</div>

		<div class="clear"></div>
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
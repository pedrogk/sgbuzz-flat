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
		<div class="main section" id="main">
			<div class="widget Blog" id="Blog1">
				<div class="blog-posts hfeed">
					<div class="status-msg-wrap">
						<div class="status-msg-body">
							<div id="error-404"><span>404</span></div>
							<h1 class="large-heading" style="text-align: center;">Page Not Found. :/</h1>
							<h2 class="light-heading" style="text-align: center;"><span>Sorry, the page you were looking for in this blog does not exist..</span></h2>
						</div>
						<div class="status-msg-border">
							<div class="status-msg-bg">
								<div class="status-msg-hidden">

								<div id="error-404"><span>404</span></div>
								<h1 class="large-heading" style="text-align: center;">Page Not Found. :/</h1>
								<h2 class="light-heading" style="text-align: center;"><span>Sorry, the page you were looking for in this blog does not exist..</span></h2>
								<br/>
								</div>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
			<!-- google_ad_section_start(name=default) -->
			<!-- google_ad_section_end -->
				</div>

			</div>
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




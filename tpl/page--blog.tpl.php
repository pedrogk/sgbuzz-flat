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

		<div>

			<div class="widget2" id="top-tab1" style="display: block;">

				<div class="tag-widget1">

					<div class="hide section" id="tag-widget1">

						<div class="widget HTML" id="HTML68">

							<h2 class="title"><span><a href="<?php print $base_url; ?>/blog"><?php print t('Blogs') ?></a></span></h2>

							<div class="main section" id="main">

								<?php

									if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):

										print render($tabs);

									endif;

									print $messages;

								?>

							<?php  if($page['content']): ?>

								<div class="widget Blog" id="Blog1">

									<div class="blog-posts hfeed">

										<!-- google_ad_section_start(name=default) -->

										<div class="date-outer">

											<div class="date-posts">



											<?php print render($page['content']) ?>

											</div>

										</div>

										<!-- google_ad_section_end -->

									</div>

									<div class="clear"></div>

									<div class="blog-feeds"></div>

								</div>

								<div class="clear"></div>

							<?php endif; ?>

							</div>

						</div>

					</div>

				</div>

			</div>

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


<?php include('switcher.tpl.php'); ?>

<!-- Footer begin -->

<footer id="footer-wrapper">

	<?php  if($page['bottom_menu']):?>

	<nav id="nav3">

		<?php print render($page['bottom_menu']) ?>

	</nav>

	<?php endif; ?>



	<?php  if($page['headlines2']):?>

	<div id="headlines2">

		<?php print render($page['headlines2']) ?>

	</div>

	<?php endif; ?>



	<div class="clear"></div>

	<div class="footer-bottom">

		<div id="footer-widgetfix">



			<?php  if($page['footer_col1']):?>

			<div class="footer-widget" id="footx1">

				<?php print render($page['footer_col1']) ?>

			</div>

			<?php endif ?>



			<?php  if($page['footer_col2']):?>

			<div class="footer-widget" id="footx2">

				<?php print render($page['footer_col2']) ?>

			</div>

			<?php endif ?>



			<?php  if($page['footer_col3']):?>

			<div class="footer-widget" id="footx3">

				<?php print render($page['footer_col3']) ?>

			</div>

			<?php endif ?>



			<?php  if($page['footer_col4']):?>

			<div class="footer-widget" id="footx4">

				<?php print render($page['footer_col4']) ?>

			</div>

			<?php endif ?>



		</div>

	</div>

	<div id="footerfix">

		<div id="credit">

			<div class="credit-left">

				<div id="creditfix">

					<div class="cpright"> <?php print theme_get_setting('footer_copyright_message', 'flat'); ?> </div>

					<div class="creditfix"> </div>

				</div>

			</div>


		</div>

	</div>

</footer>

<!-- Footer end -->
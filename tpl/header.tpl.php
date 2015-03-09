<?php global $base_url; ?>
<header id="header-wrapper">
	<?php  if($page['top_menu']):?>
	<nav id="nav2">
		<?php print render($page['top_menu']) ?>
	</nav>
	<?php endif ?>

	<?php  if($page['top_bar_right']):?>
	<div id="top-right">
		<?php print render($page['top_bar_right']) ?>
	</div>
	<?php endif ?>

	<div class="clear"></div>

	<!-- Ads  -->
	<?php  if($page['header_ads']):?>
	<div id="header-ads">
		<div class="header section" id="headerads1">
			<?php print render($page['header_ads']) ?>
		</div>
	</div>
	<?php endif; ?>

	<!-- Begin Logo  -->
	<div id="header-fix">
		<div id="header-title">
			<div class="header section" id="header">
				<div class="widget Header" id="Header1">
					<div id="header-inner">
						<div class="title_wrapper">
						<?php  if (theme_get_setting('text_logo', 'flat') != ''){ ?>
							<h1 class="title"> <a href="<?php print $base_url; ?>"> <?php print theme_get_setting('text_logo', 'flat'); ?> </a> </h1>
						<?php } elseif($logo){  ?>
				          <a href="<?php print $base_url; ?>" title="<?php print $site_name; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a>
				          <?php }?>
				       	</div>
				       	<?php if ($site_slogan){ ?>
				       	<div class="description_wrapper">
				       		<p class="description"><span><?php print $site_slogan; ?></span></p>
				        </div>
				        <?php } ?>
				    </div>
				</div>
			</div>
		</div>
	</div>

	<?php  if($page['search']):?>
	<div id="searchformfix">
		<?php print render($page['search']) ?>
	</div>
	<?php endif; ?>
	<?php  if($page['main_menu']):?>

		<nav id="nav">
		<?php print render($page['main_menu']) ?>
	  </nav>

	<?php endif; ?>
</header> <!-- End header  -->

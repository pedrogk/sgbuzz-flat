<?php include('header.tpl.php') ?>
<?php  if($page['headlines']):?>
<div id="news-wrapper">
  <div class="news-ticker" > <?php print render($page['headlines']) ?> </div>
</div>
<?php endif; ?>
<div class="clear"></div>
<?php  if($page['slider']):?>
<div id="pbt-slider"> <?php print render($page['slider']) ?>
  <div class="clear"></div>
</div>
<?php endif; ?>
<div class="clear"></div>
<?php
  if (isset($node->field_layout['und'][0]['value'])) {
    $layout_style = $node->field_layout['und'][0]['value'];
  } else $layout_style = 0;
  if ($layout_style == 1) { 
    $class_stype = 'first-right';
  } else {
    $class_stype ='';
  }
?>

<!-- Begin wrapper content -->

<div id="content-wrapper" class="<?php	print $class_stype; ?>"> 
  
  <!-- Begin main content -->
  
  <div id="main-wrapper">
    <?php print $messages; ?>
    <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php  if($page['content']): ?>    
    <div class="content"> <?php print render($page['content']) ?>
      <div class="clear"></div>
    </div>
    <?php endif; ?>
    <div class="clear"></div>
  </div>
  <!-- End main content --> 
  
  <!-- Begin sidebar first -->
  
  <div id="sidebar-wrapper2">
    <?php  if($page['sidebar_first']): ?>
    <div class="sidebar section" id="sidebar-box2"> <?php print render($page['sidebar_first']) ?> </div>
    <?php endif ?>
  </div>
  <!-- End sidebar first --> 
  
  <!-- Begin sidebar second-->
  
  <?php  if($page['sidebar_second']): ?>
  <div id="sidebar-wrapper"> <?php print render($page['sidebar_second']) ?> </div>
  <!-- End sidebar second -->
  
  <div class="clear"></div>
  <?php endif ?>
  <?php  if($page['content_end']): ?>
  
  <!-- Begin content end-->
  
  <div id="tag-widget9">
    <div class="carousel section" id="carousel"> <?php print render($page['content_end']) ?> </div>
  </div>
  <div class="clear"></div>
  <?php endif; ?>
</div>

<!-- end content-wrapper --> 

<!-- end outer-wrapper -->

<?php include('footer.tpl.php') ?>

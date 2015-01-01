<?php

$out = '';

if ($block->region == 'headlines') {

	$out .= '<div class="widget '.$classes.'" '.$attributes.'>';

	$out .= '<div id="headlines">';

	$out .= render($title_suffix);

		if ($block->subject)

			$out .= '<h2><span>'.$block->subject.'</span></h2>';



	$out .= $content;

	$out .= '</div>';

	$out .= '</div>';



}elseif($block->region == 'sidebar_first'){



	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';



	$out .= $content;

	$out .= '</div>';

	$out .= '</div>';



}elseif($block->region == 'sidebar_second' || $block->region == 'content_end'){



	$out .= '<div class="widget '.$classes.'"  '.$attributes.' data-color="'.$block->css_color.'">';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 style ="background-color:'.$block->css_color.'"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';



	$out .= $content;

	$out .= '</div>';

	$out .= '</div>';



}elseif($block->region == 'tag_widget1'){

	$out .= '<div id="tag-widget1">';

	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 class="title" style ="background-color:'.$block->css_color.'"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';

	$out .= $content;

	$out .= '<div class="clear"></div>';

	$out .= '</div><div class="clear"></div>';

	$out .= '</div></div>';

}elseif($block->region == 'tag_widget1_2'){

	$out .= '<div id="tag-widget1-2">';

	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 class="title" style ="background-color:'.$block->css_color.'"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';

	$out .= $content;

	$out .= '<div class="clear"></div>';

	$out .= '</div><div class="clear"></div>';

	$out .= '</div></div>';



}elseif($block->region == 'tag_post2'){

	$out .= '<div id="tag-widget2">';

	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 class="title" style ="background-color:'.$block->css_color.'"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';

	$out .= $content;

	$out .= '<div class="clear"></div>';

	$out .= '</div>';

	$out .= '</div></div>';



}elseif($block->region == 'tag_post2_last'){

	$out .= '<div id="tag-widget3">';

	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 class="title" style ="background-color:'.$block->css_color.'"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';

	$out .= $content;

	$out .= '<div class="clear"></div>';

	$out .= '</div>';

	$out .= '</div></div>';



}elseif($block->region == 'tag_post3'){

	$out .= '<div id="tag-widget7">';

	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 class="title" style ="background-color:'.$block->css_color.'"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';

	$out .= $content;

	$out .= '<div class="clear"></div>';

	$out .= '</div>';

	$out .= '</div></div>';



}elseif($block->region == 'tag_post4'){

	$out .= '<div id="tag-widget5">';

	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 class="title" style ="background-color:'.$block->css_color.'"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';

	$out .= $content;

	$out .= '<div class="clear"></div>';

	$out .= '</div>';

	$out .= '</div></div>';



}elseif($block->region == 'tag_post5'){

	$out .= '<div id="tag-widget6">';

	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 class="title" style ="background-color:'.$block->css_color.'"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';

	$out .= $content;

	$out .= '<div class="clear"></div>';

	$out .= '</div>';

	$out .= '</div></div>';



}elseif($block->region == 'pic_tag_post6'){

	$out .= '<div id="tag-widget4">';

	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 class="title" style ="background-color:'.$block->css_color.'"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';

	$out .= $content;

	$out .= '<div class="clear"></div>';

	$out .= '</div>';

	$out .= '</div></div>';



}elseif($block->region == 'footer_col1' || $block->region == 'footer_col2' || $block->region == 'footer_col3' || $block->region == 'footer_col4'){

	$out .= '<div class="footer section">';

	$out .= '<div class="widget '.$classes.'"  '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 class="title"><span>'.$block->subject.'</span></h2>';

	$out .= '<div class="widget-content" >';

	$out .= $content;

	$out .= '</div>';

	$out .= '</div></div>';



}else{

	$out .= '<div class="'.$classes.'" '.$attributes.' >';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2 style ="background-color:'.$block->css_color.'">'.$block->subject.'</h2>';

	$out .= $content;

	$out .= '</div>';

}

print $out;

?>
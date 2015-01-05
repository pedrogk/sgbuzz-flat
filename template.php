<?php

global $base_url;

function flat_preprocess_html(&$variables) {

	drupal_add_css('http://fonts.googleapis.com/css?family=Lato:300|Oswald|Archivo+Black|Open+Sans:400,400italic,600,700', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/font-awesome.min.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/widget_css_2_bundle.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/color-scheme/default.css', array('type' => 'external'));

	drupal_add_css(base_path().path_to_theme().'/css/style1.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/responsive.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/style2.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/lightbox.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/update.css', array('type' => 'external'));

	//jQuery Google
	drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array('type' => 'external', 'scope' => 'header'));

	//Flexslider
	drupal_add_js(base_path().path_to_theme().'/js/jquery.flexslider.js', array('type' => 'file', 'scope' => 'header'));

	drupal_add_js(base_path().path_to_theme().'/js/carousel.js', array('type' => 'file', 'scope' => 'header'));
	drupal_add_js(base_path().path_to_theme().'/js/custom.js', array('type' => 'file', 'scope' => 'header'));
	drupal_add_js(base_path().path_to_theme().'/js/jquery-easing.js', array('type' => 'file', 'scope' => 'header'));
	drupal_add_css(base_path().path_to_theme().'/css/custom-footer.css', array('type' => 'external'));

	//JS FOOTER
	drupal_add_js(base_path().path_to_theme().'/js/lightbox.min.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/custom-footer.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/update.js', array('type' => 'file', 'scope' => 'footer'));

}

// Add css skin

$setting_skin = theme_get_setting('built_in_skins', 'flat');

if(!empty($setting_skin)) {
	$skin_color = '/css/color-scheme/'.$setting_skin;
} else {
	$skin_color = '/css/color-scheme/default.css';
}

$css_skin = array(
	'#tag' => 'link', // The #tag is the html tag - <link />
	'#attributes' => array( // Set up an array of attributes inside the tag
	'href' => $base_url.'/'.path_to_theme().$skin_color,
	'rel' => 'stylesheet',
	'type' => 'text/css',
	'id' => 'skin',
	'data-baseurl'=>$base_url.'/'.path_to_theme()
	),
	'#weight' => 1,
);

drupal_add_html_head($css_skin, 'skin');

//Right to left style

$rtl_skin = theme_get_setting('right_to_left', 'flat');

if($rtl_skin =='on'){
	$skin_rtl = '/css/rtl.css';
} else{
	$skin_rtl = '/css/ltr.css';
}

$css_rtl = array(
	'#tag' => 'link', // The #tag is the html tag - <link />
	'#attributes' => array( // Set up an array of attributes inside the tag
	'href' => $base_url.'/'.path_to_theme().$skin_rtl,
	'rel' => 'stylesheet',
	'type' => 'text/css',
	'id' => 'rtl',
	'data-baseurl'=>$base_url.'/'.path_to_theme()
	),
	'#weight' => 2,
);

drupal_add_html_head($css_rtl, 'rtl');

function flat_form_comment_form_alter(&$form, &$form_state) {
  $form['comment_body']['#after_build'][] = 'flat_customize_comment_form';
}

function flat_customize_comment_form(&$form) {
  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  return $form;
}

function flat_preprocess_page(&$vars) {
	if (isset($vars['node'])) {
		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
	}

	//404 page

	$status = drupal_get_http_header("status");

	if($status == "404 Not Found") {
		$vars['theme_hook_suggestions'][] = 'page__404';
		drupal_add_css(base_path().path_to_theme().'/css/404.css', array('type' => 'external', 'scope' => 'header', 'weight'=>1000));
		$vars['styles'] = drupal_get_css();
	}

	if (isset($vars['node'])) :
		//print $vars['node']->type;
        if($vars['node']->type == 'page'):
            $node = node_load($vars['node']->nid);
            $output = field_view_field('node', $node, 'field_show_page_title', array('label' => 'hidden'));
            $vars['field_show_page_title'] = $output;

        //sidebar
	    	    $output = field_view_field('node', $node, 'field_sidebar', array('label' => 'hidden'));
            $vars['field_sidebar'] = $output;
        endif;

    endif;

}


// Remove superfish css files.

function flat_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
}



function flat_form_alter(&$form, &$form_state, $form_id) {

	if ($form_id == 'search_block_form') {
		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");

		//disabled submit button

		//unset($form['actions']['submit']);

		unset($form['search_block_form']['#title']);

		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";

		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";

	}

	if($form_id == 'contact_site_form'){

		$form['mail']['#attributes']['class'] = array("input-contact-form");

		$form['name']['#attributes']['class'] = array("input-contact-form");

		$form['subject']['#attributes']['class'] = array("input-contact-form");

		$form['message']['#attributes']['class'] = array("message-contact-form");

		$form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button');

	}

	if ($form_id == 'comment_form') {

		$form['comment_filter']['format'] = array(); // nuke wysiwyg from comments

	}



}

function flat_textarea($variables) {
  $element = $variables['element'];
  $element['#attributes']['name'] = $element['#name'];
  $element['#attributes']['id'] = $element['#id'];
  $element['#attributes']['cols'] = $element['#cols'];
  $element['#attributes']['rows'] = $element['#rows'];
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    $wrapper_attributes['class'][] = 'resizable';
  }

  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;

}

function flat_breadcrumb($variables) {
	$crumbs ='';
	$breadcrumb = $variables['breadcrumb'];

	if (!empty($breadcrumb)) {
		$crumbs .= '<div class="breadcrumb"><span class="crumbs">';
		foreach($breadcrumb as $value) {
			$crumbs .= '<span class="crust" typeof="v:Breadcrumb">'.$value.'  <span class="arrow"><span>&gt;</span></span></span>';
		}

		$crumbs .= '<span class="crust"><a><span>'.drupal_get_title().'</span></a><span class="arrow"><span></span></span></span>';
		$crumbs .= '</span></div>';
		return $crumbs;
	} else {
		return NULL;
	}
}

//custom main menu

function flat_menu_tree__menu_sgbuzz_menu(array $variables) {
  $str = '';
  if (preg_match("/\bsubmenu\b/i", $variables['tree'])) {
    $str .= '<nav id="nav"><ul id="menuhlng1" class="menu">' . $variables['tree']    . '</ul></nav>';
  } else {
    $str .= '<ul class="submenu">' . $variables['tree'] . '</ul>';
  }

  return $str;

}


/**Override Menu theme */

function flat_links__system_main_menu(array $variables) {
       $html = "<ul class='menu'>";

    foreach ($variables['links'] as $link) {
        $html .= "<li>".l($link['title'], $link['path'], $link)."</li>";
    }
    $html .= "</ul>";
    return $html;
}



function flat_menu_tree__menu_top_menu($variables) {
  $str = '';
  $str .= '<ul id="menuhlng2">';
  $str .= $variables['tree'];
  $str .= '</ul>';
  return $str;
}

function flat_menu_tree__menu_bottom_menu($variables) {
  $str = '';
  $str .= '<ul id="menuhlng3">';
  $str .= $variables['tree'];
  $str .= '</ul>';
  return $str;
}

function hook_preprocess_page(&$variables) {
  if (arg(0) == 'node' && is_numeric($nid)) {
    if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {
      $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];
      if (empty($variables['node_content']['field_show_page_title'])) {
        $variables['node_content']['field_show_page_title'] = NULL;
      }
    }
  }
}

/**
* Show contextual links on all nodes
*/
function flat_node_view_alter( &$build ) {
  $build['#contextual_links']['node'] = array('node', array($build['#node']->nid));
}

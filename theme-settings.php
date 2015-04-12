<?php

function flat_form_system_theme_settings_alter(&$form, $form_state) {

  $theme_path = drupal_get_path('theme', 'flat');
  $form['settings'] = array(
    '#type' => 'vertical_tabs',
    '#title' => t('Theme settings'),
    '#weight' => 2,
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#attached' => array(
      'css' => array(drupal_get_path('theme', 'flat') . '/css/drupalet_base/admin.css'),
      'js' => array(drupal_get_path('theme', 'flat') . '/js/drupalet_admin/admin.js',),
    ),
  );

  $form['settings']['general_setting'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general_setting']['general_setting_tracking_code'] = array(
      '#type' => 'textarea',
      '#title' => t('Tracking Code 1'),
      '#default_value' => theme_get_setting('general_setting_tracking_code', 'flat'),
  );

  $form['settings']['header'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['header']['date_time'] = array(
      '#title' => t('Date Time Top Bar'),
      '#type' => 'select',
      '#options' => array('off' => t('OFF'), 'on' => t('ON')),
      '#default_value' => theme_get_setting('date_time', 'flat'),
  );

   $form['settings']['header']['text_logo'] = array(
      '#type' => 'textarea',
      '#title' => t('Logo text replace logo image'),
      '#default_value' => theme_get_setting('text_logo', 'flat'),
  );

  $form['settings']['footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Footer settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['footer']['footer_copyright_message'] = array(
      '#type' => 'textarea',
      '#title' => t('Footer copyright message'),
      '#default_value' => theme_get_setting('footer_copyright_message', 'flat'),
  );

	$form['settings']['custom_css'] = array(
		  '#type' => 'fieldset',
		  '#title' => t('Custom CSS'),
		  '#collapsible' => TRUE,
		  '#collapsed' => FALSE,
	  );

	$form['settings']['custom_css']['custom_css'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Custom CSS'),
		  '#default_value' => theme_get_setting('custom_css', 'flat'),
		  '#description'  => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
	  );


  $form['settings']['skin'] = array(
    '#type' => 'fieldset',
    '#title' => t('Skin setting'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

  //Right to left style;
  $form['settings']['skin']['right_to_left'] = array(

      '#title' => t('Right To Left Style'),

      '#type' => 'select',

      '#options' => array('off' => t('OFF'), 'on' => t('ON')),

      '#default_value' => theme_get_setting('right_to_left', 'flat'),

  );
  //Disable Switcher style;

  $form['settings']['skin']['flat_disable_switch'] = array(

      '#title' => t('Switcher style'),

      '#type' => 'select',

      '#options' => array('on' => t('ON'), 'off' => t('OFF')),

      '#default_value' => theme_get_setting('flat_disable_switch', 'flat'),

  );
  $form['settings']['skin']['built_in_skins'] = array(
      '#type' => 'radios',
    '#title' => t('Built-in Skins'),
    '#options' => array(
        'default.css' => t('Default'),
        'lightblue.css' => t('Light-blue'),
        'red.css' => t('Red'),
        'dodgerblue.css' => t('Dodger-blue'),
        'darkblue.css' => t('Dark-blue'),
        'limegreen.css' => t('Lime-green'),
        'bluemarguerite.css' => t('Blue-marguerite'),
        'silvertree.css' => t('Silver-tree'),
        'orange.css' => t('Orange'),
        'lightgreen.css' => t('Light-green'),
        'pink.css' => t('Pink'),
        'purple.css' => t('Purple'),
        'springgreen.css' => t('Spring-green'),
        'violet.css' => t('Violet'),
        'laurel.css' => t('Laurel'),
        'turquoise.css' => t('Turquoise'),
        'silverlime.css' => t('Silver-lime'),
        'wetasphal.css' => t('Wet-asphal'),
        'greensmoke.css' => t('Green-smoke'),
        'amethyst.css' => t('Amethyst'),
        'concrete.css' => t('Concrete'),
        'nephritis.css' => t('Nephritis'),
        'alizarin.css' => t('Alizarin'),
        'burntsienna.css' => t('Burnt-sienna'),
        'belizehole.css' => t('Belize-hole'),
        'midnightblue.css' => t('Midnight-blue'),
        'greensea.css' => t('Green-sea'),
        'mediumpurple.css' => t('Medium-purple'),
        'deepblush.css' => t('Deep-blush'),

    ),

    '#default_value' => theme_get_setting('built_in_skins','flat')
  );

}

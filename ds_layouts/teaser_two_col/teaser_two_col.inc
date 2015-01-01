<?php

/**
 * @file
 * Display Suite Teaser two col configuration.
 */

function ds_teaser_two_col() {
  return array(
    'label' => t('Teaser two col'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (teaser_two_col.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (teaser_two_col.png)
    // 'image' => TRUE,
  );
}

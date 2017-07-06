<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Foundation Omega theme.
 */

//Override Drupal default jQuery version for frontend only
function foundation_theme_js_alter(&$javascript) {
  $javascript['misc/jquery.js']['data'] = drupal_get_path('theme', 'foundation_theme') .
    '/js/jquery-1.8.1.min.js';
  $javascript['misc/jquery.js']['version'] = '1.8.1';
}

//insert viewport meta tag in head
function foundation_theme_preprocess_html(&$vars) {
  $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
    ),
  );

  drupal_add_html_head($viewport, 'viewport');
}
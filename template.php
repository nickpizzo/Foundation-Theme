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

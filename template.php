<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Foundation Omega theme.
 */

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

//add placeholder text to main searchbar
function foundation_theme_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == "views_exposed_form") {
    $form['search_api_views_fulltext']['#attributes'] = array(
      'placeholder' => t('Search Keyword or Part #')
    );
  }

	elseif ($form_id == 'fitment_facet_select') {
		$form['year']['#options'][0] = 'Year';
		$form['make']['#options'][0] = 'Make';
		$form['model']['#options'][0] = 'Model';
		$form['submit']['#value'] = t("Search");
	}

	elseif ($form_id == 'fitment_base_form') {
		$form['year']['#options'][0] = 'Year';
		$form['make']['#options'][0] = 'Make';
		$form['model']['#options'][0] = 'Model';
	}
}
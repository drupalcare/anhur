<?php

/**
 * @file
 * Anhur Theme.theme.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function anhur_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $form['anhur_settings']['w3_external_libraries'] = [
    '#type' => 'details',
    '#title' => t('Load External Libraries locally - Anhur'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#description'   => t('<p>Load google fonts locally. It is with Anhur Sub-Theme</p>'),
  ];
  $form['anhur_settings']['w3_external_libraries']['anhur_google_font'] = [
    '#type' => 'checkbox',
    '#title' => t('Load google font locally'),
    '#default_value' => theme_get_setting('anhur_google_font'),
  ];

}

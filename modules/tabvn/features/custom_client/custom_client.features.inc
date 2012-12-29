<?php
/**
 * @file
 * custom_client.features.inc
 */

/**
 * Implements hook_node_info().
 */
function custom_client_node_info() {
  $items = array(
    'client' => array(
      'name' => t('Client'),
      'base' => 'node_content',
      'description' => t('Client content.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}

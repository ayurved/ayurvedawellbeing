<?php
/**
 * @file
 * custom_image_style.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function custom_image_style_image_default_styles() {
  $styles = array();

  // Exported image style: blog_teaser.
  $styles['blog_teaser'] = array(
    'name' => 'blog_teaser',
    'effects' => array(
      1 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '610',
          'height' => '300',
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: portfolio_300_200.
  $styles['portfolio_300_200'] = array(
    'name' => 'portfolio_300_200',
    'effects' => array(
      3 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '300',
          'height' => '200',
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: portfolio_460_300.
  $styles['portfolio_460_300'] = array(
    'name' => 'portfolio_460_300',
    'effects' => array(),
  );

  // Exported image style: portfolio_940_400.
  $styles['portfolio_940_400'] = array(
    'name' => 'portfolio_940_400',
    'effects' => array(),
  );

  // Exported image style: related_post.
  $styles['related_post'] = array(
    'name' => 'related_post',
    'effects' => array(
      2 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '140',
          'height' => '100',
        ),
        'weight' => '1',
      ),
    ),
  );

  return $styles;
}

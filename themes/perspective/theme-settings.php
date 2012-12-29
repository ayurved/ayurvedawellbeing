<?php

include_once 'template.php';

/**
 * Advanced theme settings.
 */
function perspective_form_system_theme_settings_alter(&$form, $form_state) {


    $form['perspective_theme_slogan'] = array(
        '#type' => 'textarea',
        '#title' => t('Theme slogan'),
        '#default_value' => theme_get_setting('perspective_theme_slogan', 'perspective'),
        '#description' => t('This is heading message on the site.'),
    );
    $form['perspective_footer_copyright'] = array(
        '#type' => 'textarea',
        '#title' => t('Footer copyright message'),
        '#default_value' => theme_get_setting('perspective_footer_copyright', 'perspective'),
        '#description' => t('This is copyright message in footer region.'),
    );
    $form['perspective_footer_social_links'] = array(
        '#type' => 'textarea',
        '#title' => t('Footer Social links'),
        '#default_value' => theme_get_setting('perspective_footer_social_links', 'perspective'),
        '#description' => t('This is social links in footer region.'),
    );

    $form['slider'] = array(
        '#type' => 'fieldset',
        '#title' => t('Slider managment'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );

    // Image upload section ======================================================
    $banners = perspective_get_banners();

    $form['slider']['banner']['images'] = array(
        '#type' => 'vertical_tabs',
        '#title' => t('Banner images'),
        '#weight' => 2,
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
        '#tree' => TRUE,
    );

    $i = 0;
    foreach ($banners as $image_data) {
        $form['slider']['banner']['images'][$i] = array(
            '#type' => 'fieldset',
            '#title' => t('Image !number: !title', array('!number' => $i + 1, '!title' => $image_data['image_title'])),
            '#weight' => $i,
            '#collapsible' => TRUE,
            '#collapsed' => FALSE,
            '#tree' => TRUE,
            // Add image config form to $form
            'image' => _perspective_banner_form($image_data),
        );

        $i++;
    }

    $form['slider']['banner']['image_upload'] = array(
        '#type' => 'file',
        '#title' => t('Upload a new image'),
        '#weight' => $i,
    );

    $form['#submit'][] = 'perspective_settings_submit';



    $form['home'] = array(
        '#type' => 'fieldset',
        '#title' => t('Homepage settings'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
    $form['home']['perspective_homepage_type'] = array(
        '#type' => 'select',
        '#title' => t('Hompage type'),
        '#options' => array('slider' => 'Slider', 'video' => 'Video'),
        '#default_value' => theme_get_setting('perspective_homepage_type', 'perspective'),
    );

    if (theme_get_setting('perspective_homepage_type', 'perspective') == 'video') {

        $form['home']['video']['perspective_video_title'] = array(
            '#type' => 'textfield',
            '#title' => t('Video title'),
            '#default_value' => theme_get_setting('perspective_video_title', 'perspective'),
        );

        $form['home']['video']['perspective_video'] = array(
            '#type' => 'textarea',
            '#title' => t('Video iframe code'),
            '#default_value' => theme_get_setting('perspective_video', 'perspective'),
            '#description' => t('This is iframe of video, or you can enter image code here.'),
        );

        $form['home']['video']['perspective_video_description'] = array(
            '#type' => 'textarea',
            '#title' => t('Description'),
            '#default_value' => theme_get_setting('perspective_video_description', 'perspective'),
            '#description' => t('Enter description.'),
        );

        $form['home']['video']['perspective_video_link_title'] = array(
            '#type' => 'textfield',
            '#title' => t('link title'),
            '#default_value' => theme_get_setting('perspective_video_link_title', 'perspective'),
        );

        $form['home']['video']['perspective_video_link_url'] = array(
            '#type' => 'textfield',
            '#title' => t('Link URL'),
            '#default_value' => theme_get_setting('perspective_video_link_url', 'perspective'),
            '#description' => t('This is the URL.')
        );
    }

    $blog_style_options = array(
        'blog_meta_before' => t('[Default] big image - meta before'),
        'blog_meta_after' => t('Big image - meta after'),
        'blog_meta_icons_right' => t('Big image meta-icons right'),
        'blog_meta_icons_left' => t('Big image meta-icons left'),
        'blog_image_meta_31' => t('Image-Meta / 3:1'),
        'blog_image_meta_13' => t('Meta-Image / 1:3'),
        'blog_image_hidden_meta' => t('Hiden meta / Big image'),
        'blog_small_image_left' => t('Small image left'),
        'blog_small_image_right' => t('Small image right'),
        'blog_75p_meta' => t('75% Image / Meta'),
        'blog_meta_75p' => t('Meta / 75% Image'),
    );
    $form['blog_display_setting'] = array(
        '#type' => 'select',
        '#title' => t('Blog style options'),
        '#options' => $blog_style_options,
        '#default_value' => theme_get_setting('blog_display_setting', 'perspective'),
    );

    $form['portfolio'] = array(
        '#type' => 'fieldset',
        '#title' => t('Portfolio settings'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );

    $form['portfolio']['default_portfolio'] = array(
        '#type' => 'select',
        '#title' => t('Default portfolio display'),
        '#options' => array(
            '1c' => 'Portfolio - 1col',
            '2c' => 'Portfolio - 2cols',
            '3c' => 'Portfolio - 3cols',
            '4c' => 'portfolio - 4cols',
        ),
        '#default_value' => theme_get_setting('default_portfolio', 'perspective'),
    );

    $form['portfolio']['default_nodes_portfolio'] = array(
        '#type' => 'select',
        '#title' => t('Number nodes show on portfolio page'),
        '#options' => drupal_map_assoc(array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 25, 30)),
        '#default_value' => theme_get_setting('default_nodes_portfolio', 'perspective'),
    );

    $form['contact'] = array(
        '#type' => 'fieldset',
        '#title' => t('Contact settings'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );
    $form['contact']['contact_map'] = array(
        '#type' => 'textarea',
        '#title' => 'Map embed code',
        '#default_value' => theme_get_setting('contact_map', 'perspective'),
    );


    $form['skin'] = array(
        '#type' => 'fieldset',
        '#title' => t('Skins settings'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );

    $skins_options = array();



    $dir = drupal_get_path('theme', 'perspective') . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'themes';

    $files = file_scan_directory($dir, '/.*\.css/');

    if (!empty($files)) {
        foreach ($files as $file) {
            if (isset($file->filename)) {
                $skins_options[$file->name] = $file->filename;
            }
        }
    }
    
    $form['skin']['default_skin'] = array(
        '#type' => 'select',
        '#title' => t('Default skin'),
        '#options' => $skins_options,
        '#default_value' => theme_get_setting('default_skin', 'perspective'),
    );
    return $form;
}

/**
 * Save settings data.
 */
function perspective_settings_submit($form, &$form_state) {
    $settings = array();

    // Update image field
    foreach ($form_state['input']['images'] as $image) {
        if (is_array($image)) {
            $image = $image['image'];

            if ($image['image_delete']) {
                // Delete banner file
                file_unmanaged_delete($image['image_path']);
                // Delete banner thumbnail file
                file_unmanaged_delete($image['image_thumb']);
            } else {
                // Update image
                $settings[] = $image;
            }
        }
    }

    // Check for a new uploaded file, and use that if available.
    if ($file = file_save_upload('image_upload')) {
        $file->status = FILE_STATUS_PERMANENT;
        if ($image = _perspective_save_image($file)) {
            // Put new image into settings
            $settings[] = $image;
        }
    }

    // Save settings
    perspective_set_banners($settings);
}

/**
 * Check if folder is available or create it.
 *
 * @param <string> $dir
 *    Folder to check
 */
function _perspective_check_dir($dir) {
    // Normalize directory name
    $dir = file_stream_wrapper_uri_normalize($dir);

    // Create directory (if not exist)
    file_prepare_directory($dir, FILE_CREATE_DIRECTORY);
}

/**
 * Save file uploaded by user and generate setting to save.
 *
 * @param <file> $file
 *    File uploaded from user
 *
 * @param <string> $banner_folder
 *    Folder where save image
 *
 * @param <string> $banner_thumb_folder
 *    Folder where save image thumbnail
 *
 * @return <array>
 *    Array with file data.
 *    FALSE on error.
 */
function _perspective_save_image($file, $banner_folder = 'public://banner/', $banner_thumb_folder = 'public://banner/thumb/') {
    // Check directory and create it (if not exist)
    _perspective_check_dir($banner_folder);
    _perspective_check_dir($banner_thumb_folder);

    $parts = pathinfo($file->filename);
    $destination = $banner_folder . $parts['basename'];
    $setting = array();

    $file->status = FILE_STATUS_PERMANENT;

    // Copy temporary image into banner folder
    if ($img = file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
        // Generate image thumb
        $image = image_load($destination);
        $small_img = image_scale($image, 100, 59);
        $image->source = $banner_thumb_folder . $parts['basename'];
        image_save($image);

        // Set image info
        $setting['image_path'] = $destination;
        $setting['image_thumb'] = $image->source;
        $setting['image_title'] = '';
        $setting['image_description'] = '';
        $setting['image_url'] = '<front>';
        $setting['image_url_title'] = 'Read more';
        $setting['image_weight'] = 0;
        $setting['image_published'] = FALSE;


        return $setting;
    }

    return FALSE;
}

/**
 * Provvide default installation settings for perspective.
 */
function _perspective_install() {
    // Deafault data
    $file = new stdClass;
    $banners = array();
    // Source base for images

    $src_base_path = drupal_get_path('theme', 'perspective');
    $default_banners = theme_get_setting('default_banners', 'perspective');


    // Put all image as banners
    foreach ($default_banners as $i => $data) {
        $file->uri = $src_base_path . '/' . $data['image_path'];
        $file->filename = $file->uri;

        $banner = _perspective_save_image($file);
        unset($data['image_path']);
        $banner = array_merge($banner, $data);
        $banners[$i] = $banner;
    }

    // Save banner data
    perspective_set_banners($banners);

    // Flag theme is installed
    variable_set('theme_perspective_first_install', FALSE);
}

/**
 * Generate form to mange banner informations
 *
 * @param <array> $image_data
 *    Array with image data
 *
 * @return <array>
 *    Form to manage image informations
 */
function _perspective_banner_form($image_data) {
    $img_form = array();

    // Image preview
    $img_form['image_preview'] = array(
        '#markup' => theme('image', array('path' => $image_data['image_thumb'])),
    );

    // Image path
    $img_form['image_path'] = array(
        '#type' => 'hidden',
        '#value' => $image_data['image_path'],
    );

    // Thumbnail path
    $img_form['image_thumb'] = array(
        '#type' => 'hidden',
        '#value' => $image_data['image_thumb'],
    );

    // Image title
    $img_form['image_title'] = array(
        '#type' => 'textfield',
        '#title' => t('Title'),
        '#default_value' => $image_data['image_title'],
    );

    // Image description
    $img_form['image_description'] = array(
        '#type' => 'textarea',
        '#title' => t('Description'),
        '#default_value' => $image_data['image_description'],
    );

    // Link url
    $img_form['image_url'] = array(
        '#type' => 'textfield',
        '#title' => t('Link'),
        '#default_value' => $image_data['image_url'],
    );

    $img_form['image_url_title'] = array(
        '#type' => 'textfield',
        '#title' => t('Link title'),
        '#default_value' => $image_data['image_url_title'],
    );

    // Image weight
    $img_form['image_weight'] = array(
        '#type' => 'weight',
        '#title' => t('Weight'),
        '#default_value' => $image_data['image_weight'],
    );

    // Image is published
    $img_form['image_published'] = array(
        '#type' => 'checkbox',
        '#title' => t('Published'),
        '#default_value' => $image_data['image_published'],
    );

    // Delete image
    $img_form['image_delete'] = array(
        '#type' => 'checkbox',
        '#title' => t('Delete image.'),
        '#default_value' => FALSE,
    );

    return $img_form;
}

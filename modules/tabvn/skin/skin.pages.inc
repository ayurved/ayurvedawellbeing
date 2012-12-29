<?php

function skin_builder_page() {

    $module_path = drupal_get_path('module', 'skin');
    drupal_add_js($module_path . '/tbuilder/colorpicker/js/colorpicker.js', array('scope' => 'footer'));
    drupal_add_js($module_path . '/tbuilder/colorpicker/js/eye.js', array('scope' => 'footer'));
    drupal_add_js($module_path . '/tbuilder/colorpicker/js/utils.js', array('scope' => 'footer'));
    drupal_add_js($module_path . '/tbuilder/colorpicker/js/layout.js', array('scope' => 'footer'));


    drupal_add_js($module_path . '/tbuilder/jqueryui/jquery-ui-1.8.22.custom.min.js', array('scope' => 'footer'));
    drupal_add_js($module_path . '/tbuilder/scripts.js', array('scope' => 'footer'));
    drupal_add_js($module_path . '/tbuilder/skin.js', array('scope' => 'footer'));


    drupal_add_css($module_path . '/tbuilder/styles.css');
    drupal_add_css($module_path . '/tbuilder/colorpicker/css/colorpicker.css');
    drupal_add_css($module_path . '/tbuilder/colorpicker/css/layout.css');
    drupal_add_css($module_path . '/tbuilder/jqueryui/jquery-ui-1.8.22.custom.css');


    return theme('skin_builder_page');
}

function skin_save_page() {

    $dir = drupal_get_path('theme', 'perspective') . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'themes' . DIRECTORY_SEPARATOR;

    $file_name = file_create_filename('custom_skin.css', $dir);

    $ourFileName = "testFile.txt";
    $ourFileHandle = fopen($file_name, 'w') or die("can't open file");
    fclose($ourFileHandle);


    $data = $_POST['data_save'];
    $file = $file_name;
    $current = file_get_contents($file);
    $current .= $data;
    file_put_contents($file, $current);

    echo '<div id="tb_generated_code_block" class="tb_generated_code_block"><div class="alert success_msg" style="margin-bottom: 10px;">';
    echo "<p>New skin has been saved in <strong>" . $file_name . '</strong></p>';
    echo '<br/>';
    echo '<a target="_blank" href="' . url('admin/appearance/settings/perspective') . '#edit-skin">Setting your skin here</a>';
    echo '</div></div>';
}
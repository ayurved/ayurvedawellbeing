<?php
$terms = array();
$vid = NULL;
$vid_machine_name = 'portfolio_categories';
$vocabulary = taxonomy_vocabulary_machine_name_load($vid_machine_name);
if (!empty($vocabulary->vid)) {
    $vid = $vocabulary->vid;
}
if (!empty($vid)) {
    $terms = taxonomy_get_tree($vid);
}

?>
<ul id="portfolio_menu" class="filter">
    <span class="portfolio_menu_title"><?php print t('Categories'); ?>:</span>
    <li><a href="#" data-filter="*" class="active_cat"><?php print t('All'); ?></a></li>
    <?php if (!empty($terms)): ?>
        <?php foreach ($terms as $term): ?>
            <li><a href="#" data-filter=".tid-<?php print $term->tid; ?>"><?php print $term->name; ?></a></li>
        <?php endforeach; ?>
    <?php endif; ?>

</ul>
<div class="clear"></div>
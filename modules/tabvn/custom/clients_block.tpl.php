<?php
if (empty($titel)) {
    $title = t('Our clients');
}
?>
<div class="home_clients">
    <div class="grid_3 hp_item_grid">
        <h1 class="home_module_title"><?php print $title; ?></h1>
        <p><?php print $description; ?></p>
    </div>
    <div class="grid_9">

        <?php foreach ($nodes as $node): ?>
            <div class="hp_item_grid_client">
                <div class="hp_grid_img_client">
                    <?php $image = theme('image', array('path' => $node->field_logo[LANGUAGE_NONE][0]['uri'])); ?>
                    <?php
                    $link = '#';
                    if (!empty($node->field_website[LANGUAGE_NONE])) {
                        $link = $node->field_website[LANGUAGE_NONE][0]['value'];
                    }
                    ?>
                    <a href="<?php print $link; ?>"><?php print $image; ?></a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="clear"></div>
</div>
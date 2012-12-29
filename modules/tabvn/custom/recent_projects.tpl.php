<?php
if (empty($titel)) {
    $title = t('Recent projects');
}
?>
<div class="home_blog">
    <div class="grid_3 hp_item_grid">
        <h1 class="home_module_title"><?php print $title; ?></h1>
        <p><?php print $description; ?></p>
        <span class="home_more_link"><a href="<?php print url('portfolio'); ?>"><?php print t('View all our projects →'); ?> &rarr;</a></span>
    </div>				


    <?php foreach ($nodes as $node): ?>
        <div class="grid_3 hp_item_grid">
            <div class="hp_grid_img">
                <a href="<?php print url('node/' . $node->nid); ?>">
                    <span class="image_wrap"><span class="img_wrap_in">
                            <?php
                            $image_uri = $node->field_image[LANGUAGE_NONE][0]['uri'];

                            $style_name = 'portfolio_300_200';

                            print theme('image_style', array('style_name' => $style_name, 'path' => $image_uri));
                            ?>
                        </span></span>
                </a>
            </div>
            <div class="hp_item_meta">
                <h2><?php print l($node->title, 'node/' . $node->nid); ?></h2>
                <span class="hb_meta"><?php print t('Posted in'); ?> <?php print custom_format_comma_field('field_portfolio_category', $node); ?></span>


            </div>							
            <div class="clear"></div>
        </div>
    <?php endforeach; ?>

</div>

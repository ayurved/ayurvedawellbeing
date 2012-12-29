<?php
$nids = db_query("SELECT n.nid FROM {node} n WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,4", array(':type' => 'portfolio', ':nid' => $node->nid))->fetchCol();

$nodes = node_load_multiple($nids);
?>
<?php if (!empty($nodes)): ?>
    <h5><?php print t('Related Items'); ?></h5>
    <hr />
    <?php $i = 0; ?>
    <?php foreach ($nodes as $node): ?>
        <!-- Related gallery item [begin] -->
        <?php
        $item_class = 'item-class-name';
        if ($i == 0) {
            $item_class = 'alpha';
        }
        if ($i == 3) {
            $item_class = 'omega';
        }
        ?>
        <div class="portf_item related_portf_item grid_3 <?php print $item_class; ?>">
            <?php
            $image_uri = $node->field_image[LANGUAGE_NONE][0]['uri'];

            $style_name = 'portfolio_300_200';

            $image = theme('image_style', array('style_name' => $style_name, 'path' => $image_uri));
            ?>
            <a href="<?php print url('node/' . $node->nid); ?>">
                <span class="image_wrap">
                    <!-- Image -->
                    <span class="img_wrap_in">
                        <?php print $image; ?>
                    </span>
                    <!-- Caption(title) -->
                    <span class="portfolio_descr all_transition_05 trans_delay_01"><?php print $node->title; ?></span>
                </span><!-- End of  .image_wrap-->
            </a>
        </div>
        <?php $i++; ?>
        <!-- Related gallery  item [end] -->
    <?php endforeach; ?>
<?php endif; ?>
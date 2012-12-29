<?php
$nids = db_query("SELECT n.nid FROM {node} n WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,5", array(':type' => 'blog', ':nid' => $node->nid))->fetchCol();

$nodes = node_load_multiple($nids);
?>
<?php if (!empty($nodes)): ?>
    <!--=== Related posts [begin] ===-->
    <div class="box_toggle closed box_toogle_related_posts clearfix"> <!-- .closed class is very important -->
        <div class="tg_title"><?php print t('Related posts'); ?><span class="l"></span><span class="r"></span></div>
        <div class="block">
            <div class="block_in">

                <?php foreach ($nodes as $node): ?>

                    <!--Related post [begin]-->
                    <div class="blog_related_post clearfix">
                        <?php $body_class = 'has-image'; ?>
                        <?php if (!empty($node->field_image[LANGUAGE_NONE])): ?>
                            <?php $body_class = 'grid_6 omega'; ?>
                            <div class="grid_2 alpha">
                                <a href="<?php print url('node/' . $node->nid); ?>">
                                    <span class="image_wrap">
                                        <span class="img_wrap_in">
                                            <?php
                                            $image_uri = $node->field_image[LANGUAGE_NONE][0]['uri'];

                                            $style_name = 'related_post';

                                            print theme('image_style', array('style_name' => $style_name, 'path' => $image_uri));
                                            ?>

                                        </span>
                                    </span>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="<?php $body_class; ?>">
                            <h4><?php print l($node->title, 'node/' . $node->nid) ?></h4>
                            <?php $node_view = node_view($node, 'teaser'); ?>
                            <?php print render($node_view['body']); ?>
                        </div>
                    </div>
                    <!--Related post [end]-->
                <?php endforeach; ?>


            </div>
        </div>
    </div><!-- .box_toogle_related_posts END -->
<?php endif; ?>
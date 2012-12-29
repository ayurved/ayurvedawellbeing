<?php
require_once 'portfolio_filter.tpl.php';
?>
<div id="portfolio">
    <?php if (!empty($nodes)): ?>
        <!-- Portfolio item [begin] -->

        <?php foreach ($nodes as $node) : ?>
            <?php
            $image_full = file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']);
            ?>
            <div class="portf_item <?php print portfolio_format_terms('field_portfolio_category', $node); ?> grid_4">
                <a href="<?php print $image_full; ?>" class="lightbox">
                    <span class="image_wrap">
                        <span class="img_wrap_in">
                            <?php
                            $image_uri = $node->field_image[LANGUAGE_NONE][0]['uri'];

                            $style_name = 'portfolio_300_200';

                            print theme('image_style', array('style_name' => $style_name, 'path' => $image_uri));
                            ?>
                            <span class="img_caption_zoom"></span>
                        </span>
                    </span><!-- End of  .image_wrap-->
                </a>
                <div class="clear"></div>
                <div class="pf_item_description">
                    <h2><?php print l($node->title, 'node/' . $node->nid); ?></h2>
                    <p><?php print portfolio_format_comma_field('field_portfolio_category', $node, FALSE); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Portfolio item [end] -->
    <?php endif; ?>

</div><!-- End of #portfolio -->
<div class="clear"></div>
<div class="blog_article blog_article_s7 clearfix">

    <!-- Post title-->
    <h1><?php print l($title, 'node/' . $node->nid); ?></h1>


    <!-- Post meta-->
    <div class="blog_s7_meta grid_2 alpha">	

        <div class="meta_block_s7">
            <div class="meta_block_s7_inner">
                <div class="meta_number"><?php print format_date($node->created, 'custom', 'd'); ?></div>
                <div class="meta_text"><?php print format_date($node->created, 'custom', 'm Y'); ?></div>
            </div>
        </div>

        <div class="meta_block_s7">
            <div class="meta_block_s7_inner">
                <div class="meta_number"><a href="<?php print $node_url; ?>#comments"><?php print $node->comment_count; ?></a></div>
                <div class="meta_text"><?php print t('comments'); ?></div>
            </div>
        </div>

    </div>


    <!-- Post image -->

    <div class="grid_6 omega">
        <!-- Post image -->
        <?php if (!empty($node->field_image[LANGUAGE_NONE])): ?>
            <?php if (count($node->field_image[LANGUAGE_NONE]) == 1): ?>
                <div class="blog_post_image">
                    <a href="<?php print $node_url; ?>">
                        <span class="image_wrap">
                            <span class="img_wrap_in">
                                <?php print render($content['field_image']); ?>
                                <span class="img_caption_more"></span>
                            </span>
                        </span>
                    </a>
                </div>
            <?php else: ?>
                <?php print render($content['field_image']); ?>
            <?php endif; ?>
        <?php else: ?>
            <?php
            hide($content['field_category']);
            hide($content['links']);
            hide($content['field_tags']);
            print render($content);
            ?>
        <?php endif; ?>
        <!-- // post image -->
    </div>



    <div class="clear"></div>
    <?php if (!empty($node->field_image[LANGUAGE_NONE])): ?>
        <div class="blog_s4_content">						
            <?php
            hide($content['field_category']);
            hide($content['links']);
            hide($content['field_tags']);
            print render($content);
            ?>
        </div>
    <?php endif; ?>


</div>
<div class="clear"></div>
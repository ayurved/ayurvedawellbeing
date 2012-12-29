<div class="blog_article blog_article_s2 clearfix">

    <!-- Post slider -->
    <?php $body_class = 'has-image'; ?>
    <?php if (!empty($node->field_image[LANGUAGE_NONE])): ?>
        <?php
        $body_class = 'grid_5 alpha';
        ?>

    <?php endif; ?>


    <!-- Post content-->
    <div class="<?php print $body_class; ?>">
        <!-- Post title and details -->
        <h1><?php print l($title, 'node/' . $node->nid); ?></h1>

        <div class="blog_post_meta">
            <span><?php print t('Posted by'); ?>: <?php print $blog_author; ?></span>								
            <span><?php print t('Date'); ?>: <span class="blogpost_date"><?php print format_date($node->created, 'custom', 'M d, Y'); ?></span></span>								
            <span><?php print t('Comments'); ?>: <a href="<?php print $node_url; ?>#comments"><?php print $node->comment_count; ?> <?php print t('comments'); ?></a></span>
            <!--<?php if (isset($node->field_category) && !empty($node->field_category[LANGUAGE_NONE])): ?>
                        <span><?php print t('Category'); ?>:<?php print perspective_format_comma_field('field_category', $node) ?></span>
            <?php endif; ?> -->
        </div>
        <?php
        hide($content['field_category']);
        hide($content['links']);
        hide($content['field_tags']);
        hide($content['field_image']);
        print render($content);
        ?>
    </div>

    <?php if (!empty($node->field_image[LANGUAGE_NONE])): ?>

        <div class="grid_3 omega">
            <!-- Post image -->
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

            <!-- // post image -->
            <div class="clear"></div>
        </div>
    <?php endif; ?>



</div>
<div class="clear"></div>
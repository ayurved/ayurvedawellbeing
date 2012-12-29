<div class="blog_article grid_4 blog_article_s6 clearfix">
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
    <?php endif; ?>
    <!-- // post image -->

    <!-- Post title and details -->
    <div class="clearfix">
        <h1><?php print l($title, 'node/' . $node->nid); ?></h1>
    </div>

    <!-- Post content-->
    <div>						

        <?php
        hide($content['field_category']);
        hide($content['links']);
        hide($content['field_tags']);
        print render($content);
        ?>

    </div>
<?php ?> 
<div class="blog_article clearfix">
    <!-- Post title and details -->
    <div class="clearfix">
        <h1><?php print l($title, 'node/' . $node->nid); ?></h1>
        <div class="blog_post_meta">
            <span><?php print t('Posted by'); ?>: <?php print $blog_author; ?></span>								
            <span><?php print t('Date'); ?>: <span class="blogpost_date"><?php print format_date($node->created, 'custom', 'M d, Y'); ?></span></span>								
            <span><?php print t('Comments'); ?>: <a href="#"><?php print $node->comment_count; ?> <?php print t('comments'); ?></a></span>
        </div>
    </div>


    <!-- Post image -->
    <?php if(!empty($node->field_image[LANGUAGE_NONE])):?>
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

    <!-- Post content-->
    <div>						
        <?php
        hide($content['field_category']);
        hide($content['field_tags']);
        hide($content['links']);
        print render($content);
        ?>
    </div>

    <!-- Post read more... -->
    <div>	
        <div class="blog_post_category">
            <?php print render($content['field_category']); ?>
        </div>					
        <span><a class="default_button alignright" href="<?php print $node_url; ?>"><?php print t('Read more'); ?></a></span>
    </div>

</div>
<div class="clear"></div>
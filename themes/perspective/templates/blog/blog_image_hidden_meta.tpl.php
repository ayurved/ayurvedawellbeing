<div class="blog_article blog_article_s3 blog_s5 clearfix">

    <!-- Post title-->
    <h1><a href="#">Default post with featured image</a></h1>

    <!-- Post meta-->
    <div class="grid_1 alpha">	
        <ul class="blog_metahidden">
            <li><div class="min_date"><span><?php print format_date($node->created, 'custom', 'M d, Y'); ?></span></div></li>
            <?php if (isset($node->field_category) && !empty($node->field_category[LANGUAGE_NONE])): ?>
                <li><div class="min_category"><span><?php print perspective_format_comma_field('field_category', $node) ?></span></div></li>
            <?php endif; ?>
            <li><div class="min_comments"><span><a href="<?php print $node_url; ?>#comments"><?php print $node->comment_count; ?> <?php print t('comments'); ?></a></span></div></li>
            <?php if (isset($node->field_tags) && !empty($node->field_tags[LANGUAGE_NONE])): ?>
                <li><div class="min_tag"><span><?php print perspective_format_comma_field('field_tags', $node) ?></span></div></li>
            <?php endif; ?>
        </ul>
    </div>

    <!-- Post image -->
    <?php 
    $body_class = 'grid_7 omega';
    ?>
    <?php if(!empty($node->field_image[LANGUAGE_NONE])):?>
    <?php
    $body_class = 'has-image';
    ?>
    <div class="grid_7 omega">
        <div class="blog_post_image">
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
        </div>
    </div>
    <div class="clear"></div>
    <?php endif; ?>
    

    <div class="blog_s4_content <?php print $body_class; ?>">						
        <?php
        hide($content['field_category']);
        hide($content['links']);
        hide($content['field_tags']);
        print render($content);
        ?>
    </div>


</div>
<div class="clear"></div>
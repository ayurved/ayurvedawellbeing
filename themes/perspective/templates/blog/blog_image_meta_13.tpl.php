<div class="blog_article blog_article_s3 blog_s4 clearfix">

    <!-- Post title-->
    <h1><?php print l($title, 'node/' . $node->nid); ?></h1>


    <!-- Post meta-->
    <div class="blog_s3_meta grid_3 alpha">	
        <ul class="metasingle">
            <li class="blog_date"><?php print format_date($node->created, 'custom', 'M d, Y'); ?></li>
            <?php if (isset($node->field_category) && !empty($node->field_category[LANGUAGE_NONE])): ?>
                <li class="blog_category"><?php print perspective_format_comma_field('field_category', $node) ?></li>
            <?php endif; ?>
            <li class="blog_comments"><a href="<?php print $node_url; ?>#comments"><?php print $node->comment_count; ?> <?php print t('comments'); ?></a></li>
            <?php if (isset($node->field_tags) && !empty($node->field_tags[LANGUAGE_NONE])): ?>
                <li class="blog_tag"><?php print perspective_format_comma_field('field_tags', $node) ?></li>

            <?php endif; ?>
        </ul>
    </div>
    
    <?php $body_class = 'grid_5 omega'; ?>

    <?php if (!empty($node->field_image[LANGUAGE_NONE])): ?>
    <?php
    $body_class = 'has-image';
    ?>
        <!-- Post image -->
        <div class="grid_5 omega">
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
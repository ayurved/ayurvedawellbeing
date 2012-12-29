<div class="post_article_single clearfix">

    <!-- Post title and details -->
    <div class="color_transition_03">
        <h1><?php print $title; ?></h1>
        <div class="blog_post_meta">
            <span><?php print t('Posted by'); ?>: <?php print $blog_author; ?></span>
            <span><?php print t('Date'); ?>: <span class="blogpost_date"><?php print format_date($node->created, 'custom', 'M d, Y'); ?></span></span>	
        </div>
    </div>

    <div class="grid_8 alpha">
        <!-- Post image -->
        <?php if (!empty($node->field_image[LANGUAGE_NONE])): ?>
            <?php if (count($node->field_image[LANGUAGE_NONE]) == 1): ?>
                <?php
                $image_full = file_create_url($node->field_image[LANGUAGE_NONE][0]['uri']);
                ?>
                <div class="blog_post_image">
                    <a href="<?php print $image_full; ?>" class="lightbox">
                        <span class="image_wrap">
                            <span class="img_wrap_in">
                                <?php print render($content['field_image']); ?>
                                <span class="img_caption_zoom"></span>
                            </span>
                        </span>
                    </a>
                </div>
            <?php else: ?>
                <div class="blog_post_image">
                    <?php print render($content['field_image']); ?>
                </div>
            <?php endif; ?>


        <?php endif; ?>
        <div class="clear"></div>
        <?php
        hide($content['field_portfolio_category']);
        hide($content['field_how_we_made_it']);
        hide($content['field_about_this_project']);
        hide($content['field_client_name']);
        hide($content['field_client_occupation']);
        hide($content['field_website']);
        hide($content['links']);
        hide($content['comments']);
        print render($content);
        ?>

    </div>
    <div class="portfolio_single_details grid_4 omega">
        <?php if (!empty($content['field_about_this_project'])): ?>
            <h5><?php print t('About this project'); ?>:</h5>

            <?php print render($content['field_about_this_project']); ?>
        <?php endif; ?>
        <?php if (!empty($content['field_about_this_project'])): ?>
            <h5><?php print t('Here\'s how we made it'); ?>:</h5>
            <?php
            print render($content['field_about_this_project']);
            ?>
        <?php endif; ?>

        <h5><?php print t('About client'); ?>:</h5>
        <ul class="portfolio_single_list">
            <?php if (!empty($node->field_client_name[LANGUAGE_NONE][0]['value'])): ?>
                <li><?php print t('Name'); ?>: <strong><?php print $node->field_client_name[LANGUAGE_NONE][0]['value']; ?></strong></li>
            <?php endif; ?>

            <?php if (!empty($node->field_client_occupation[LANGUAGE_NONE][0]['value'])): ?>
                <li><?php print t('Occupation'); ?>: <strong><?php print $node->field_client_occupation[LANGUAGE_NONE][0]['value']; ?></strong></li>
            <?php endif; ?>
            <?php if (!empty($node->field_website[LANGUAGE_NONE][0]['value'])): ?>
                <li><?php print t('Website'); ?>:<?php print l($node->field_website[LANGUAGE_NONE][0]['value'], $node->field_website[LANGUAGE_NONE][0]['value']); ?></li>
            <?php endif; ?>
        </ul>



    </div>
    <div class="clear"></div>


</div>
<div class="clear"></div>
<!-- ==== Blog article [end] ==== -->

<?php include_once 'related_items.tpl.php'; ?>
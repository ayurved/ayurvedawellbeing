<div class="post_article_single clearfix">

    <!-- Post title and details -->
    <div class="color_transition_03">
        <h1><?php print $title; ?></h1>
        <div class="blog_post_meta">
            <span><?php print t('Posted by'); ?>: <?php print $blog_author; ?></span>								
            <span>Date: <span class="blogpost_date"><?php print format_date($node->created, 'custom', 'M d, Y'); ?></span></span>								
            <?php if (isset($node->field_category) && !empty($node->field_category[LANGUAGE_NONE])): ?>
                <span class="blog_post_category">
                    <?php print t('Category'); ?> 
                    <?php print perspective_format_comma_field('field_category', $node) ?>
                </span>	
            <?php endif; ?>
        </div>
    </div>


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
        <div class="clear"></div>
    <?php endif; ?>


    <!-- Post content-->
    <div class="blog_post_content">						
        <?php
        hide($content['field_category']);
        hide($content['links']);
        hide($content['comments']);
        hide($content['field_tags']);
        print render($content);
        ?>
    </div><!-- End of .blog_post_content -->

    <!-- === Author info === -->
    <div class="grid_8 alpha omega ">	
        <div class="blog_author_info clearfix all_transition_05">
            <?php print $user_picture; ?>
            <div class="author"><?php print t('About'); ?> <?php print $blog_author; ?></div>
            <p class="author_bio">
                <?php
                $user = user_load($node->uid);
                if (!empty($user->field_about_me[LANGUAGE_NONE][0]['value'])) {
                    print $user->field_about_me[LANGUAGE_NONE][0]['value'];
                }
                ?>
            </p>
            <div class="social">
                <span><?php print t('Social profiles'); ?>:</span> 
                <?php if (!empty($user->field_facebook_url[LANGUAGE_NONE][0]['value'])): ?>
                    <a href="<?php print url($user->field_facebook_url[LANGUAGE_NONE][0]['value']); ?>" class="facebook" title="Facebook"></a>
                <?php endif; ?>
                <?php if (!empty($user->field_twitter_url[LANGUAGE_NONE][0]['value'])): ?>
                    <a href="<?php print url($user->field_twitter_url[LANGUAGE_NONE][0]['value']); ?>" class="twitter" title="Twitter"></a>
                <?php endif; ?>
                <?php if (!empty($user->field_linkedin_url[LANGUAGE_NONE][0]['value'])): ?>
                    <a href="<?php print url($user->field_linkedin_url[LANGUAGE_NONE][0]['value']); ?>" class="linkedin" title="Linkedin"></a>
                <?php endif; ?>
                <?php if (!empty($user->field_youtube_url[LANGUAGE_NONE][0]['value'])): ?>
                    <a href="<?php print url($user->field_youtube_url[LANGUAGE_NONE][0]['value']); ?>" class="youtube" title="Youtube"></a>
                <?php endif; ?>
                <!-- <a href="#" class="digg" title="Digg"></a>
                 <a href="#" class="delicious" title="Delicious"></a>
                 <a href="#" class="aim" title="Aim"></a>
                 <a href="#" class="yahoo" title="Yahoo"></a>
                 <a href="#" class="google" title="Google"></a>
                 <a href="#" class="website" title="Website"></a>-->
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!-- === Author info [end] === -->

    <!--=== Share buttons [begin] ===-->
    <div class="grid_8 alpha omega post_buttons_share clearfix">
        <div class="share_in">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> 
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_pinterest_pinit"></a>
                <a class="addthis_counter addthis_pill_style"></a>
            </div>
            <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
            <!-- AddThis Button END -->
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
    <!--=== Share buttons [end] ===-->

    <?php
    include_once 'related_posts.tpl.php';
    ?>
    <div class="clear"></div>

    <!--=== Related posts [end] ===-->

</div>
<div class="clear"></div>

<div class="grid_8 alpha omega post_buttons_share clearfix">
    <div class="share_in" style="padding:5px;">
        <?php print render($content['links']); ?>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>

<?php print render($content['comments']); ?>
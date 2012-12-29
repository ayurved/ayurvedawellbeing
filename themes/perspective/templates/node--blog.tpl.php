
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php
    $blog_author = theme('username', array('account' => $node));

    if (!$page) {
        // display node as teaser

        $blog_display_setting = theme_get_setting('blog_display_setting');

        switch ($blog_display_setting) {
            case 'blog_meta_before':
                include 'blog/blog_meta_before.tpl.php';
                break;

            case 'blog_meta_after':
                include 'blog/blog_meta_after.tpl.php';
                break;

            case 'blog_meta_icons_right':
                include 'blog/blog_meta_icons_right.tpl.php';

                break;

            case 'blog_meta_icons_left':
                include 'blog/blog_meta_icons_left.tpl.php';
                break;


            case 'blog_image_meta_31':
                include 'blog/blog_image_meta_31.tpl.php';
                break;

            case 'blog_image_meta_13':
                include 'blog/blog_image_meta_13.tpl.php';
                break;

            case 'blog_image_hidden_meta':
                include 'blog/blog_image_hidden_meta.tpl.php';
                break;


            case 'blog_small_image_left':
                include 'blog/blog_small_image_left.tpl.php';
                break;

            case 'blog_small_image_right':
                include 'blog/blog_small_image_right.tpl.php';
                break;

            case 'blog_75p_meta':
                include 'blog/blog_75p_meta.tpl.php';
                break;

            case 'blog_meta_75p':
                include 'blog/blog_meta_75p.tpl.php';
                break;

            default :
                include 'blog/blog_meta_before.tpl.php';
                break;
        }
    } else {
        // display as full node 

        include_once 'blog/blog_full.tpl.php';
    }
    ?>

</div>

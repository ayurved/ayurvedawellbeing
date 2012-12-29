<section id="smk_container_full">
    <section class="smk_container">
        <section class="wrap">
            <!--============================================================= BEGIN top blocks -->
            <section class="top_head_separator">
                <section class="container_12">

                    <?php if ($logo): ?>
                        <div class="grid_4 logo">
                            <a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                        </div>
                    <?php endif; ?>
                    <div class="grid_8 top_mod_right">

                        <!--================== BEGIN main menu -->
                        <?php if (isset($navigation)): ?>
                            <nav id="horizontal">
                                <?php print $navigation; ?>
                                <!-- End of #nav-->
                            </nav><!-- End of menu nav#horizontal -->
                        <?php endif; ?>

                        <div class="clear"></div>
                        <!--/================= END main menu -->
                    </div>			
                    <div class="clear"></div>
                </section>
                <div class="clear"></div>
            </section><!-- End of .top_head_separator -->
            <div class="clear"></div>
            <!--/============================================================= END top blocks -->

            <!-- =============== HEADER [end] ================ -->

            <!--============================================================== BEGIN content [ .smk_content ] -->
            <div class="clear"></div>


            <?php if (drupal_is_front_page() && !empty($slider)): ?>
                <div class="header">
                    <?php print $slider; ?>
                </div>
            <?php endif; ?>
            <?php if (arg(0) == 'contact'): ?>
                <div id="google_map">
                    <?php print theme_get_setting('contact_map', 'perspective'); ?>
                </div>
            <?php endif; ?>
            <div class="clear"></div>
            <?php if (!drupal_is_front_page() && $title && (arg(0) != 'contact')): ?>
                <div class="page_top_details clearfix">
                    <div class="page_title container_12">
                        <div class="grid_6">
                            <?php print render($title_prefix); ?>
                            <h1><?php print $title; ?></h1>
                            <?php print render($title_suffix); ?>
                        </div>
                        <?php if ($seach_block_form): ?>
                            <div class="grid_6">
                                <?php print $seach_block_form; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <section id="smk_content" class="smk_content">
                <div class="container_12">

                    <!-- ===================================================== MAIN CONTENT[begin] -->
                    <?php if (drupal_is_front_page()): ?>
                        <!-- ============= HOME NOTICE[begin] -->
                        <div class="home_notice">
                            <h2><?php print theme_get_setting('perspective_theme_slogan', 'perspective'); ?></h2>
                        </div>
                        <!-- ============= HOME NOTICE[end] -->
                    <?php endif; ?>


                    <?php if ($messages): ?>
                        <div id="messages"><div class="section clearfix">
                                <?php print $messages; ?>
                            </div></div> <!-- /.section, /#messages -->
                    <?php endif; ?>

                    <?php if ($page['featured']): ?>
                        <div id="featured"><div class="section clearfix">
                                <?php print render($page['featured']); ?>
                            </div></div> <!-- /.section, /#featured -->
                    <?php endif; ?>

                    <!--
                    <?php if ($breadcrumb): ?>
                            <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                    <?php endif; ?>

                    -->
                    <?php if ($page['sidebar_first']): ?>
                        <div id="sidebar-first" class="sidebar grid_<?php print $sidebar_first_size; ?>"><div class="section">
                                <?php print render($page['sidebar_first']); ?>
                            </div></div> <!-- /.section, /#sidebar-first -->
                    <?php endif; ?>
                    <?php if (arg(0) == 'portfolio' || (drupal_is_front_page() && !$page['sidebar_first'] && !$page['sidebar_second']) || arg(0) == 'skin'): ?>
                        <div id="content" class="clearfix">
                        <?php else: ?>
                            <div id="content" class="grid_<?php print $content_size; ?>">
                            <?php endif; ?>

                            <?php if ($tabs): ?>
                                <div class="tabs">
                                    <?php print render($tabs); ?>
                                </div>
                            <?php endif; ?>
                            <?php print render($page['help']); ?>
                            <?php if ($action_links): ?>
                                <ul class="action-links">
                                    <?php print render($action_links); ?>
                                </ul>
                            <?php endif; ?>
                            <?php print render($page['content']); ?>
                            <?php print $feed_icons; ?>
                        </div>


                        <?php if ($page['sidebar_second']): ?>
                            <div id="sidebar-second" class="sidebar grid_<?php print $sidebar_second_size; ?>"><div class="section">
                                    <?php print render($page['sidebar_second']); ?>
                                </div></div> <!-- /.section, /#sidebar-second -->
                        <?php endif; ?>

                        <div class="clear"></div>


                        <!-- ===================================================== MAIN CONTENT[end] -->
                    </div><!-- END .container_12 -->		
                    <div class="clear"></div>
            </section><!-- END of .smk_content -->
            <div class="clear"></div>
            <!--/============================================================= END content [ .smk_content ] -->

            <!-- =============== FOOTER [begin] ================ -->

        </section><!-- END of .wrap -->

        <!--============================================================== BEGIN site footer [ #site_footer ] -->

        <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
            <section id="site_footer">
                <div class="footer_glare"></div>
                <section class="container_12 widgetized_footer">
                    <div class="grid_3">
                        <?php print render($page['footer_firstcolumn']); ?>
                        <div class="clear"></div>

                    </div>

                    <div class="grid_3">
                        <?php print render($page['footer_secondcolumn']); ?>
                        <div class="clear"></div>

                    </div>

                    <div class="grid_3">
                        <?php print render($page['footer_thirdcolumn']); ?>
                        <div class="clear"></div>

                    </div>			

                    <div class="grid_3">
                        <?php print render($page['footer_fourthcolumn']); ?>
                        <div class="clear"></div>

                    </div>


                    <div class="clear"></div>
                </section>
                <div class="clear"></div>
            </section>
        <?php endif; ?>
        <div class="clear"></div>
        <!--/============================================================= END site footer [ #site_footer ] -->

        <!--============================================================== BEGIN site footer 2 [ #site_footer_second ] -->
        <section id="site_footer_second">
            <section class="container_12 site_footer_inner">
                <?php if (isset($perspective_footer_copyright)): ?>
                    <div class="grid_6 site_copyright">
                        <a class="go_to_top scroll_top_infooter" href="#" onClick="return false;"><?php print t('top'); ?></a>
                        <?php print $perspective_footer_copyright; ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($perspective_footer_social_links)): ?>
                    <div class="grid_6 footer2_right footer_social">
                        <?php print $perspective_footer_social_links; ?>
                    </div>
                <?php endif; ?>
                <div class="clear"></div>
            </section>
            <div class="clear"></div>
        </section>
        <div class="clear"></div>
        <!--/============================================================= END site footer 2 [ #site_footer_second ] -->

    </section><!-- END of .smk_container -->
</section><!-- END of #smk_container_full -->

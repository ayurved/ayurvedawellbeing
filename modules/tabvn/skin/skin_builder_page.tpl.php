<div id="tbuilder" class="clearfix">

    <div class="tb_header clearfix">
        <div class="grid_5 smk_skinr_logo alpha"></div>
        <a href="http://themeforest.net/user/tabvn/portfolio" class="default_button alignright" style="margin-top:8px;" target="_blank">Purchase template</a>
    </div>
    <div class="clear"></div>
    <div class="textcenter"><a class="go_to_bottom" href="#" onClick="return false;">&or; Scroll down &or;</a></div>
    <div class="clear"></div>

    <!-- ===================================================== Form Begin
    ============================================================================================================= -->
    <form id="tbuilder_form" method="POST" action="<?php print url('skin/process'); ?>">

        <!-- =========== Color scheme =========== -->
        <div class="grid_12"><div class="tb_head_spr">Color scheme</div></div><div class="clear"></div>

        <div class="grid_12 color_scheme_show">
            <div class="csh_color1" style="background-color: #4a7dff;"></div>
            <div class="csh_color2" style="background-color: #00a5eb;"></div>
            <div class="csh_color3" style="background-color: #45abff;"></div>
            <div class="csh_color4" style="background-color: #7dbcff;"></div>							
        </div>
        <div class="clear"></div>

        <div class="grid_3">
            <h6>Color 1</h6><hr />
            <input type="text" class="tb_input_color" readonly="readonly" id="cp_FirstColor" name="cp_FirstColor" value="#4a7dff" />
            <span class="cp_square" id="cp_FirstColorBG_square" style="background-color: #4a7dff;"></span>
        </div>

        <div class="grid_3">
            <h6>Color 2</h6><hr />
            <input type="text" class="tb_input_color" readonly="readonly" id="cp_SecondColor" name="cp_SecondColor" value="#00a5eb" />
            <span class="cp_square" id="cp_SecondColorBG_square" style="background-color: #00a5eb;"></span>
        </div>

        <div class="grid_3">
            <h6>Color 3</h6><hr />
            <input type="text" class="tb_input_color" readonly="readonly" id="cp_ThirdColor" name="cp_ThirdColor" value="#45abff" />
            <span class="cp_square" id="cp_ThirdColorBG_square" style="background-color: #45abff;"></span>
        </div>

        <div class="grid_3">
            <h6>Color 4</h6><hr />
            <input type="text" class="tb_input_color" readonly="readonly" id="cp_FourthColor" name="cp_FourthColor" value="#7dbcff" />
            <span class="cp_square" id="cp_FourthColorBG_square" style="background-color: #7dbcff;"></span>
        </div>

        <div class="clear"></div>
        <!-- =========== / Color scheme =========== -->


        <!-- =========== Links =========== -->
        <div class="grid_12"><div class="tb_head_spr">Links</div></div><div class="clear"></div>

        <div class="grid_3">
            <h6>Passive :link</h6><hr />
            <input type="text" class="tb_input_color" readonly="readonly" id="cp_ALinkColor" name="cp_ALinkColor" value="#4a7dff" />
            <span class="cp_square" id="cp_ALinkColor_square" style="background-color: #4a7dff;"></span>
        </div>

        <div class="grid_3">
            <h6>Active :hover</h6><hr />
            <input type="text" class="tb_input_color" readonly="readonly" id="cp_AHoverColor" name="cp_AHoverColor" value="#00a5eb" />
            <span class="cp_square" id="cp_AHoverColor_square" style="background-color: #00a5eb;"></span>
        </div>
        <div class="clear"></div>

        <!-- Load next Button
        <div id="tb_loadnext_block" class="loadnext_block textcenter">
          <a href="#" class="smk_button large red" id="tb_load_next">Load next</a>
        </div>
        Load next Button -->

        <section id="tb_next_content">
            <!-- =========== Top bar =========== -->
            <div class="grid_12"><div class="tb_head_spr">Top bar</div></div><div class="clear"></div>

            <div class="grid_3">
                <h6>Top bar background</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_TopBarBG" name="cp_TopBarBG" value="#FFFFFF" />
                <span class="cp_square" id="cp_TopBarBG_square" style="background-color: #FFFFFF;"></span>
            </div>

            <div class="grid_3">
                <h6>Top bar border color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_TopBarBorder" name="cp_TopBarBorder" value="#EEEEEE" />
                <span class="cp_square" id="cp_TopBarBorder_square" style="background-color: #EEEEEE;"></span>
            </div>

            <div class="grid_3">
                <h6>Top bar border width</h6><hr />
                <input type="text" class="tb_input_slider" id="tb_TopBarBorderWidth_input" name="tb_TopBarBorderWidth_input" value="10px" />
                <div id="tb_TopBarBorderWidth"></div>
            </div>
            <div class="clear"></div>

            <div class="grid_12"><div class="tb_head_spr">Menu</div></div><div class="clear"></div>

            <div class="grid_3">
                <h6>Menu border color on hover</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_TopBarMenuBorder" name="cp_TopBarMenuBorder" value="#00a5eb" />
                <span class="cp_square" id="cp_TopBarMenuBorder_square" style="background-color: #00a5eb"></span>
            </div>

            <div class="grid_3">
                <h6>Menu border width</h6><hr />
                <input type="text" class="tb_input_slider" id="tb_TopBarMenuBorderWidth_input" name="tb_TopBarMenuBorderWidth_input" value="1px" />
                <div id="tb_TopBarMenuBorderWidth"></div>
            </div>

            <div class="grid_3">
                <h6>Menu background on hover</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_TopBarMenuBG" name="cp_TopBarMenuBG" value="#222222" />
                <span class="cp_square" id="cp_TopBarMenuBG_square" style="background-color: #222222"></span>
            </div>

            <div class="grid_3">
                <h6>Menu text color on hover</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_TopBarMenuText" name="cp_TopBarMenuText" value="#FFFFFF" />
                <span class="cp_square" id="cp_TopBarMenuText_square" style="background-color: #FFFFFF"></span>
            </div>
            <div class="clear"></div>

            <div class="grid_3">
                <h6>Menu Item Padding</h6><hr />
                <input type="text" class="tb_input_slider" id="tb_TopBarMenuPadding_input" name="tb_TopBarMenuPadding_input" value="7px" />
                <div id="tb_TopBarMenuPadding"></div>
            </div>
            <div class="clear"></div>
            <!-- =========== / Top bar =========== -->


            <!-- =========== Header =========== -->
            <div class="grid_12"><div class="tb_head_spr">Header</div></div><div class="clear"></div>

            <div class="grid_8">
                <div class="tb_header_imgs">
                    <?php
                    $path = drupal_get_path('module', 'skin');
                    $images = glob($path . '/tbuilder/themeimg/headers/' . "*.jpg");

                    foreach ($images as $image) {

                        $real_url = str_replace('sites/all/modules/tabvn/skin/tbuilder/themeimg', 'images', $image);

                        if ($real_url == 'images/headers/header40.jpg') {
                            echo '<img src="' . $image . '" alt="' . $real_url . '" title="' . $real_url . '" class="tbh_selected" />';
                        } else {
                            echo '<img src="' . $image . '" alt="' . $real_url . '" title="' . $real_url . '" />';
                        }
                        print "\n";
                    }
                    ?>
                    <div class="clear"></div>
                    <?php
                    $images = glob($path . '/tbuilder/themeimg/pattern/' . "*.png");
                    foreach ($images as $image) {
                        $real_url = str_replace('sites/all/modules/tabvn/skin/tbuilder/themeimg', 'images', $image);
                        echo '<img src="' . $image . '" alt="' . $real_url . '" title="' . $real_url . '" />';
                        print "\n";
                    }

                    $images = glob($path . '/tbuilder/themeimg/pattern/' . "*.jpg");
                    foreach ($images as $image) {
                        $real_url = str_replace('sites/all/modules/tabvn/skin/tbuilder/themeimg', 'images', $image);
                        echo '<img src="' . $image . '" alt="' . $real_url . '" title="' . $real_url . '" />';
                        print "\n";
                    }
                    ?>
                </div>
            </div>

            <div class="grid_4">
                <h6>Header background image</h6><hr />
                <input id="tbh_header_input" name="tbh_header_input" type="text" value="../../images/headers/header40.jpg" style="width:92%" />

                <h6>Header background color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_HeaderBGcolor" name="cp_HeaderBGcolor" value="#ffffff" />
                <span class="cp_square" id="cp_HeaderBGcolor_square" style="background-color: #ffffff"></span>

                <h6>Top bar border color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_HeaderBorder" name="cp_HeaderBorder" value="#EEEEEE" />
                <span class="cp_square" id="cp_HeaderBorder_square" style="background-color: #EEEEEE"></span>

                <h6>Top bar border width</h6><hr />
                <input type="text" class="tb_input_slider" id="tb_HeaderBorderWidth_input" name="tb_HeaderBorderWidth_input" value="10px" />
                <div id="tb_HeaderBorderWidth"></div>

                <h6>Header demo</h6><hr />
                <div class="header_demo_styles_show" style="background-image: url(images/headers/header40.jpg); background-position: center -100px; "></div>


            </div>
            <div class="clear"></div>
            <!-- =========== / Header =========== -->

            <!-- =========== Wrap =========== -->
            <div class="grid_12"><div class="tb_head_spr">Wrap</div></div><div class="clear"></div>

            <div class="grid_8">
                <div class="tb_wrap_imgs">
                    <?php
                    $images = glob($path . '/tbuilder/themeimg/wrap-pattern/' . "*.png");
                    foreach ($images as $image) {
                        $real_url = str_replace('sites/all/modules/tabvn/skin/tbuilder/themeimg', 'images', $image);
                        echo '<img src="' . $image . '" alt="' . $real_url . '" title="' . $real_url . '" />';
                        print "\n";
                    }
                    ?>
                    <img src="<?php print $path; ?>/tbuilder/none60x40.png" class="tbh_none_wrapBG tbh_wrap_selected" alt="" title="None" />
                    <div class="clear"></div>
                </div>
            </div>

            <div class="grid_4">

                <h6>Wrap background image</h6><hr />
                <input id="tbh_wrap_input" name="tbh_wrap_input" type="text" value="" style="width:92%" />

                <h6>Wrap background attachment</h6><hr />
                <select name="tbh_wrap_BgAttach" id="tbh_wrap_BgAttach">
                    <option value="scroll" selected="selected">Scroll</option>
                    <option value="fixed">Fixed</option>
                </select>

                <h6>Wrap Background color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_WrapBGcolor" name="cp_WrapBGcolor" value="#ffffff" />
                <span class="cp_square" id="cp_WrapBGcolor_square" style="background-color: #ffffff"></span>
            </div>
            <div class="clear"></div>
            <!-- =========== / Wrap =========== -->


            <!-- =========== Image Wrap =========== -->
            <div class="grid_12"><div class="tb_head_spr">Image Wrap</div></div><div class="clear"></div>

            <div class="grid_3">
                <h6>Image Wrap BG color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_ImageWrapBGcolor" name="cp_ImageWrapBGcolor" value="#eaeaea" />
                <span class="cp_square" id="cp_ImageWrapBGcolor_square" style="background-color: #eaeaea"></span>
            </div>

            <div class="grid_3">
                <h6>Image Wrap padding</h6><hr />
                <input type="text" class="tb_input_slider" id="tb_ImageWrapPadding_input" name="tb_ImageWrapPadding_input" value="5px" />
                <div id="tb_ImageWrapPadding"></div>
            </div>

            <div class="grid_3">
                <h6>Image Wrap border-radius</h6><hr />
                <input type="text" class="tb_input_slider" id="tb_ImageWrapRadius_input" name="tb_ImageWrapRadius_input" value="2px" />
                <div id="tb_ImageWrapRadius"></div>
            </div>

            <div class="grid_3">
                <h6 style="color: #000000">Demo</h6><hr />
                <span class="image_wrap">
                    <span class="img_wrap_in">
                        <img src="<?php drupal_get_path('theme', 'perspective'); ?>/images/assets/t/2.jpg" alt="" />
                    </span>
                </span><!-- End of  .image_wrap-->
            </div>
            <div class="clear"></div>
            <!-- =========== / Image Wrap =========== -->


            <!-- =========== Forms =========== -->
            <div class="grid_12"><div class="tb_head_spr">Forms</div></div><div class="clear"></div>
            <div class="grid_9">
                <div class="grid_3 alpha">
                    <h6>Default Border color</h6><hr />
                    <input type="text" class="tb_input_color" readonly="readonly" id="cp_FormsBordercolor" name="cp_FormsBordercolor" value="#BBBBBB" />
                    <span class="cp_square" id="cp_FormsBordercolor_square" style="background-color: #BBBBBB"></span>
                </div>

                <div class="grid_3">
                    <h6>Default Background color</h6><hr />
                    <input type="text" class="tb_input_color" readonly="readonly" id="cp_FormsBackgroundcolor" name="cp_FormsBackgroundcolor" value="#FFFFFF" />
                    <span class="cp_square" id="cp_FormsBackgroundcolor_square" style="background-color: #FFFFFF"></span>
                </div>

                <div class="grid_3 omega">
                    <h6>Default color</h6><hr />
                    <input type="text" class="tb_input_color" readonly="readonly" id="cp_FormsColor" name="cp_FormsColor" value="#000000" />
                    <span class="cp_square" id="cp_FormsColor_square" style="background-color: #000000"></span>
                </div>

                <div class="clear"></div>

                <div class="grid_3 alpha">
                    <h6><em style="color: #DB817D">:focus</em> Border color</h6><hr />
                    <input type="text" class="tb_input_color" readonly="readonly" id="cp_FormsBorderFocuscolor" name="cp_FormsBorderFocuscolor" value="#00a5eb" />
                    <span class="cp_square" id="cp_FormsBorderFocuscolor_square" style="background-color: #00a5eb"></span>
                </div>						

                <div class="grid_3">
                    <h6><em style="color: #DB817D">:focus</em> Background color</h6><hr />
                    <input type="text" class="tb_input_color" readonly="readonly" id="cp_FormsBackgroundFocuscolor" name="cp_FormsBackgroundFocuscolor" value="#FFFFFF" />
                    <span class="cp_square" id="cp_FormsBackgroundFocuscolor_square" style="background-color: #FFFFFF"></span>
                </div>

                <div class="grid_3 omega">
                    <h6><em style="color: #DB817D">:focus</em> color</h6><hr />
                    <input type="text" class="tb_input_color" readonly="readonly" id="cp_FormsFocusColor" name="cp_FormsFocusColor" value="#000000" />
                    <span class="cp_square" id="cp_FormsFocusColor_square" style="background-color: #000000"></span>
                </div>						
                <div class="clear"></div>

                <div class="grid_3 alpha">
                    <h6><em style="color: #DB7222">:hover</em> Border color</h6><hr />
                    <input type="text" class="tb_input_color" readonly="readonly" id="cp_FormsBorderHovercolor" name="cp_FormsBorderHovercolor" value="#BBBBBB" />
                    <span class="cp_square" id="cp_FormsBorderHovercolor_square" style="background-color: #BBBBBB"></span>
                </div>						

                <div class="grid_3">
                    <h6><em style="color: #DB7222">:hover</em> Background color</h6><hr />
                    <input type="text" class="tb_input_color" readonly="readonly" id="cp_FormsBackgroundHovercolor" name="cp_FormsBackgroundHovercolor" value="#FFFFFF" />
                    <span class="cp_square" id="cp_FormsBackgroundHovercolor_square" style="background-color: #FFFFFF"></span>
                </div>

                <div class="grid_3 omega">
                    <h6><em style="color: #DB7222">:hover</em> color</h6><hr />
                    <input type="text" class="tb_input_color" readonly="readonly" id="cp_FormsHoverColor" name="cp_FormsHoverColor" value="#000000" />
                    <span class="cp_square" id="cp_FormsHoverColor_square" style="background-color: #000000"></span>
                </div>						
                <div class="clear"></div>

                <div class="grid_3 alpha">
                    <h6>Disable hover property</h6><hr />
                    <select name="tb_FormDisableHover" id="tb_FormDisableHover">
                        <option value="yes" selected="selected">Yes(disable :hover)</option>
                        <option value="no">No(enable :hover)</option>
                    </select>
                </div>

                <div class="grid_3 alpha">
                    <h6>Border-radius</h6><hr />
                    <input type="text" class="tb_input_slider" id="tb_FormsBorderRadius_input" name="tb_FormsBorderRadius_input" value="3px" />
                    <div id="tb_FormsBorderRadius"></div>
                </div>
                <div class="clear"></div>
            </div>

            <!-- Demo -->
            <div class="grid_3">
                <h6 style="color: #000000">Demo</h6><hr />
                <input type="text" id="tb_demo_FormInput_default" value="default" />
                <input type="text" id="tb_demo_FormInputFocus_default" value=":focus" style="border-color: #00a5eb" />
                <input type="text" id="tb_demo_FormInputHover_default" value=":hover" style="border-color: #bbbbbb" />
            </div>
            <div class="clear"></div>
            <!-- Demo -->
            <!-- =========== / Forms =========== -->


            <!-- =========== Default Button =========== -->
            <div class="grid_12"><div class="tb_head_spr">Default Button</div></div><div class="clear"></div>
            <div class="grid_3">
                <h6>Background color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_ButtonBGcolor" name="cp_ButtonBGcolor" value="#444444" />
                <span class="cp_square" id="cp_ButtonBGcolor_square" style="background-color: #444444"></span>
            </div>
            <div class="grid_3">
                <h6>Border color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_ButtonBordercolor" name="cp_ButtonBordercolor" value="#111111" />
                <span class="cp_square" id="cp_ButtonBordercolor_square" style="background-color: #111111"></span>
            </div>
            <div class="grid_3">
                <h6>Text color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_ButtonTextcolor" name="cp_ButtonTextcolor" value="#FFFFFF" />
                <span class="cp_square" id="cp_ButtonTextcolor_square" style="background-color: #FFFFFF"></span>
            </div>
            <div class="grid_3">
                <h6>Demo</h6><hr />
                <a href="#" class="default_button_demo" onclick="return false;">Button</a>
            </div>
            <div class="clear"></div>

            <div class="grid_3">
                <h6>Background color(hover)</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_ButtonHoverBGcolor" name="cp_ButtonHoverBGcolor" value="#45abff" />
                <span class="cp_square" id="cp_ButtonHoverBGcolor_square" style="background-color: #45abff"></span>
            </div>
            <div class="grid_3">
                <h6>Border color(hover)</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_ButtonHoverBordercolor" name="cp_ButtonHoverBordercolor" value="#4a7dff" />
                <span class="cp_square" id="cp_ButtonHoverBordercolor_square" style="background-color: #4a7dff"></span>
            </div>
            <div class="grid_3">
                <h6>Text color(hover)</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_ButtonHoverTextcolor" name="cp_ButtonHoverTextcolor" value="#FFFFFF" />
                <span class="cp_square" id="cp_ButtonHoverTextcolor_square" style="background-color: #FFFFFF"></span>
            </div>
            <div class="grid_3">
                <h6>Demo(hover)</h6><hr />
                <a href="#" class="default_button_hover_demo" style="background-color: #45abff; border-color: #4a7dff;" onclick="return false;">Button</a>
            </div>
            <div class="clear"></div>


            <!-- =========== / Default Button =========== -->


            <!-- =========== Image loader =========== -->
            <div class="grid_12"><div class="tb_head_spr">Image loader</div></div><div class="clear"></div>
            <div class="grid_9">
                <div class="tb_loader_imgs">
                    <?php
                    $theme_path = drupal_get_path('theme', 'perspective');
                    $images = glob($theme_path . '/images/loaders/' . "*.gif");
                    foreach ($images as $image) {
                        $title_img = str_replace('sites/all/themes/perspective/images', 'images', $image);
                        echo '<div class="tb_loader_block" style="background: url(' . $image . ') no-repeat center center" title="' . $title_img . '"></div>';
                        print "\n";
                    }
                    ?>	
                </div>
            </div>
            <div class="grid_3">
                <input id="tbh_loader_input" name="tbh_loader_input" type="text" value="../../images/loaders/1.gif" style="width:165px" />
                <span id="tb_loader_active" style="width: 32px; height: 32px; margin-top: 5px; background: url(images/loaders/1.gif) no-repeat center center; float: right;"></span>
            </div>
            <!-- =========== / Image loader =========== -->

            <!-- =========== Image hover icon =========== -->
            <div class="grid_12"><div class="tb_head_spr">Image hover icon</div></div><div class="clear"></div>
            <div class="grid_9">
                <div class="tb_imghover_imgs">
                    <?php
                    $images = glob($theme_path . '/images/caption/' . "*.png");
                    foreach ($images as $image) {

                        $title_img = str_replace('sites/all/themes/perspective/images', 'images', $image);
                        if ($image == $theme_path . '/images/caption/01.png') {

                            echo '<div class="tb_imghover_block tbh_imghover_selected" style="background: url(' . $image . ') no-repeat center center" title="' . $title_img . '"></div>';
                        } else {
                            echo '<div class="tb_imghover_block" style="background: url(' . $image . ') no-repeat center center" title="' . $title_img . '"></div>';
                        }
                        print "\n";
                    }
                    ?>	
                </div>
            </div>
            <div class="grid_3">

                <h6>Selected:</h6><hr />
                <input id="tbh_imghover_input" name="tbh_imghover_input" type="text" value="../../images/caption/01.png" style="width:165px" />

                <h6>Animation</h6><hr />
                <select name="tb_imgHoverAnimation" id="tb_imgHoverAnimation">
                    <option value="fade">Fade</option>
                    <option value="fromtop">Top</option>
                    <option value="frombottom">Bottom</option>
                    <option value="fromleft">Left</option>
                    <option value="fromright">Right</option>
                    <option value="fadefromtop">Fade Top</option>
                    <option value="fadefrombottom">Fade Bottom</option>
                    <option value="fadefromleft">Fade Left</option>
                    <option value="fadefromright">Fade Right</option>
                    <option value="scalefromtop">Scale Top</option>
                    <option value="scalefrombottom">Scale Bottom</option>
                    <option value="scalefromleft">Scale Left</option>
                    <option value="scalefromright">Scale Right</option>
                    <option value="scale">Scale</option>
                    <option value="scalebig" selected="selected">Scale Big</option>
                    <option value="rotate">Rotate style 1</option>
                    <option value="rotate2">Rotate style 2</option>
                    <option value="rotate3">Rotate style 3</option>
                </select>

                <h6>Opacity</h6><hr />
                <input type="text" class="tb_input_slider" id="tb_imgHoverOpacity_input" name="tb_imgHoverOpacity_input" value="100" />
                <div id="tb_imgHoverOpacity"></div>

                <h6>Transition(in seconds)</h6><hr />
                <input type="text" class="tb_input_slider" id="tb_imgHoverTransition_input" name="tb_imgHoverTransition_input" value="0.3s" />
                <div id="tb_imgHoverTransition"></div>

                <h6>Demo</h6><hr />
                <a href="<?php print $theme_path; ?>/images/assets/800x600.jpg" class="lightbox">
                    <span class="image_wrap">
                        <span class="img_wrap_in">
                            <img src="<?php print $theme_path; ?>/images/assets/t/1.jpg" alt="" />
                            <span class="img_caption_zoom" style="background-image: url(<?php print $theme_path; ?>/images/caption/01.png); "></span>
                        </span>
                    </span><!-- End of  .image_wrap-->
                </a>
            </div>
            <div class="clear"></div>
            <!-- =========== / Image hover icon =========== -->


            <!-- =========== Blog icons =========== -->						
            <div class="grid_12"><div class="tb_head_spr">Blog icons</div></div><div class="clear"></div>
            <div class="tb_blogicons_imgs clearfix">
                <div class="grid_3">
                    <div data-blogicon="0" class="blogIcons_selectBlock tbh_blogicons_selected clearfix">
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-calendar0.png" alt="" width="24" height="24" border="0" title="Post Date" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-category0.png" alt="" width="24" height="24" border="0" title="Post Category" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-comments0.png" alt="" width="24" height="24" border="0" title="Post Comments" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-tag0.png" alt="" width="24" height="24" border="0" title="Post Tags" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-user0.png" alt="" width="24" height="24" border="0" title="Post Author" />
                    </div>
                </div>

                <div class="grid_3">
                    <div data-blogicon="1" class="blogIcons_selectBlock clearfix">
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-calendar1.png" alt="" width="24" height="24" border="0" title="Post Date" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-category1.png" alt="" width="24" height="24" border="0" title="Post Category" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-comments1.png" alt="" width="24" height="24" border="0" title="Post Comments" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-tag1.png" alt="" width="24" height="24" border="0" title="Post Tags" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-user1.png" alt="" width="24" height="24" border="0" title="Post Author" />
                    </div>
                </div>

                <div class="grid_3">
                    <div data-blogicon="2" class="blogIcons_selectBlock clearfix">
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-calendar2.png" alt="" width="24" height="24" border="0" title="Post Date" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-category2.png" alt="" width="24" height="24" border="0" title="Post Category" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-comments2.png" alt="" width="24" height="24" border="0" title="Post Comments" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-tag2.png" alt="" width="24" height="24" border="0" title="Post Tags" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-user2.png" alt="" width="24" height="24" border="0" title="Post Author" />
                    </div>
                </div>

                <div class="grid_3">
                    <div data-blogicon="3" class="blogIcons_selectBlock clearfix">
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-calendar3.png" alt="" width="24" height="24" border="0" title="Post Date" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-category3.png" alt="" width="24" height="24" border="0" title="Post Category" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-comments3.png" alt="" width="24" height="24" border="0" title="Post Comments" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-tag3.png" alt="" width="24" height="24" border="0" title="Post Tags" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-user3.png" alt="" width="24" height="24" border="0" title="Post Author" />
                    </div>
                </div>

                <div class="grid_3">
                    <div data-blogicon="4" class="blogIcons_selectBlock clearfix">
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-calendar4.png" alt="" width="24" height="24" border="0" title="Post Date" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-category4.png" alt="" width="24" height="24" border="0" title="Post Category" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-comments4.png" alt="" width="24" height="24" border="0" title="Post Comments" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-tag4.png" alt="" width="24" height="24" border="0" title="Post Tags" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-user4.png" alt="" width="24" height="24" border="0" title="Post Author" />
                    </div>
                </div>

                <div class="grid_3">
                    <div data-blogicon="5" class="blogIcons_selectBlock clearfix">
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-calendar5.png" alt="" width="24" height="24" border="0" title="Post Date" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-category5.png" alt="" width="24" height="24" border="0" title="Post Category" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-comments5.png" alt="" width="24" height="24" border="0" title="Post Comments" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-tag5.png" alt="" width="24" height="24" border="0" title="Post Tags" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-user5.png" alt="" width="24" height="24" border="0" title="Post Author" />
                    </div>
                </div>

                <div class="grid_3">
                    <div data-blogicon="6" class="blogIcons_selectBlock clearfix">
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-calendar6.png" alt="" border="0" title="Post Date" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-category6.png" alt="" border="0" title="Post Category" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-comments6.png" alt="" border="0" title="Post Comments" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-tag6.png" alt="" border="0" title="Post Tags" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-user6.png" alt="" border="0" title="Post Author" />
                    </div>
                </div>

                <div class="grid_3">
                    <div data-blogicon="7" class="blogIcons_selectBlock clearfix">
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-calendar7.png" alt="" border="0" title="Post Date" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-category7.png" alt="" border="0" title="Post Category" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-comments7.png" alt="" border="0" title="Post Comments" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-tag7.png" alt="" border="0" title="Post Tags" />
                        <img src="<?php print $theme_path; ?>/images/icons/blog/blog-user7.png" alt="" border="0" title="Post Author" />
                    </div>
                </div>

                <!-- Value -->
                <input id="tbh_blogicons_input" name="tbh_blogicons_input" type="hidden" value="0" style="width:165px" />
                <!-- / Value -->

            </div><!-- / .tb_blogicons_imgs -->

            <!-- =========== / Blog icons =========== -->

            <!-- =========== Footer =========== -->						
            <div class="grid_12"><div class="tb_head_spr">Footer</div></div><div class="clear"></div>
            <div class="grid_6">
                <div class="tb_footer_imgs clearfix">
                    <?php
                    $images = glob($path . '/tbuilder/themeimg/pattern/' . "*.png");
                    foreach ($images as $image) {
                        $real_url = str_replace('sites/all/modules/tabvn/skin/tbuilder/themeimg', 'images', $image);
                        echo '<img src="' . $image . '" alt="' . $real_url . '" title="' . $real_url . '" />';
                        print "\n";
                    }

                    $images = glob($path . '/tbuilder/themeimg/pattern/' . "*.jpg");
                    foreach ($images as $image) {
                        $real_url = str_replace('sites/all/modules/tabvn/skin/tbuilder/themeimg', 'images', $image);
                        echo '<img src="' . $image . '" alt="' . $real_url . '" title="' . $real_url . '" />';
                        print "\n";
                    }
                    ?>
                </div>
            </div>
            <div class="grid_3">
                <h6>Footer background image</h6><hr />
                <input id="tbh_footer_input" name="tbh_footer_input" type="text" value="../../images/pattern/62.png" style="width:92%" />

                <h6>Footer background color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_FooterBGcolor" name="cp_FooterBGcolor" value="#32303D" />
                <span class="cp_square" id="cp_FooterBGcolor_square" style="background-color: #32303D"></span>

                <h6>Footer Text color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_FooterColor" name="cp_FooterColor" value="#FFFFFF" />
                <span class="cp_square" id="cp_FooterColor_square" style="background-color: #FFFFFF"></span>

                <h6>Footer Link color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_FooterLinkColor" name="cp_FooterLinkColor" value="#FFFFFF" />
                <span class="cp_square" id="cp_FooterLinkColor_square" style="background-color: #FFFFFF"></span>

                <h6>Footer link hover color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_FooterHoverColor" name="cp_FooterHoverColor" value="#7dbcff" />
                <span class="cp_square" id="cp_FooterHoverColor_square" style="background-color: #7dbcff"></span>
                <div class="tb_info_tip">This style is not applied now to footer. But it is included in final code. You'll notice that if you hover links from footer, only default color is applied. Sorry for inconvenience.</div>

                <h6>Footer Demo Show</h6><hr />
                <div class="footer_demo_styles_show" style="background-image: url(images/pattern/62.png); background-color: #32303D; background-position: 50% 0%; background-repeat: repeat repeat;">
                    <div class="fdft_text" style="color: #fff;">Footer text color</div>
                    <div class="fdft_link" style="color: #fff;">Footer Links color</div>
                    <div class="fdft_hover" style="color: #7dbcff;">Footer :hover link color</div>
                </div>
                <div class="footer2_demo_styles_show clearfix" style="background-color: #32303D; border-top: 1px solid #49475C; color: #F3EAFD;">
                    <div class="fdft2_text" style="color: #fff;">text</div>
                    <div class="fdft2_link" style="color: #fff;">Links</div>
                    <div class="fdft2_hover" style="color: #7dbcff;">:hover link</div>
                </div>

            </div>

            <div class="grid_3">

                <h6>Footer 2 background color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_Footer2BGcolor" name="cp_Footer2BGcolor" value="#32303D" />
                <span class="cp_square" id="cp_Footer2BGcolor_square" style="background-color: #32303D"></span>

                <h6>Footer 2 Text color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_Footer2Color" name="cp_Footer2Color" value="#FFFFFF" />
                <span class="cp_square" id="cp_Footer2Color_square" style="background-color: #FFFFFF"></span>

                <h6>Footer 2 Link color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_Footer2LinkColor" name="cp_Footer2LinkColor" value="#FFFFFF" />
                <span class="cp_square" id="cp_Footer2LinkColor_square" style="background-color: #FFFFFF"></span>

                <h6>Footer 2 link hover color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_Footer2HoverColor" name="cp_Footer2HoverColor" value="#7dbcff" />
                <span class="cp_square" id="cp_Footer2HoverColor_square" style="background-color: #7dbcff"></span>
                <div class="tb_info_tip">This style is not applied now to footer. But it is included in final code. You'll notice that if you hover links from footer, only default color is applied. Sorry for inconvenience.</div>

                <h6>Footer 2 border-top color</h6><hr />
                <input type="text" class="tb_input_color" readonly="readonly" id="cp_Footer2BorderColor" name="cp_Footer2BorderColor" value="#49475C" />
                <span class="cp_square" id="cp_Footer2BorderColor_square" style="background-color: #49475C"></span>

                <h6>Footer 2 Border width</h6><hr />
                <input type="text" class="tb_input_slider" id="tb_FooterBorderWidth_input" name="tb_FooterBorderWidth_input" value="1px" />
                <div id="tb_FooterBorderWidth"></div>

            </div>
            <!-- =========== / Footer =========== -->






        </section><!-- End OF #tb_next_content -->


        <!-- =========== Get the code =========== -->
        <div class="grid_12"><div class="tb_head_spr">Get the code</div></div><div class="clear"></div>
        <div id="GenFormEnd">
            <div class="grid_4" style="display: none;">
                <input type="hidden" id="save_action" value="<?php print url('skin/save'); ?>" />
                <label>Skin name:(must number character) </label><br />
                <input id="tb_user_name" name="tb_user_name" type="text" value="" style="width:115px; padding: 8px 10px; margin-top: 5px;" />
            </div>
            <div class="grid_5" style="display:none;">
                <label>Item Purchase Code(required): </label><br />
                <input id="tb_user_password" name="tb_user_password" type="text" value="toan123" style="width:358px; padding: 8px 10px; margin-top: 5px;" />
            </div>
            <div class="grid_2 submit_block_elements">
                <input id="tbsubmit" type="submit" name="tbsubmit" class="smk_button black submitinput" style="margin-top: 24px;" value="Get the code">
            </div>
            <!--  <div class="grid_3">
                  <strong>Where to find the Purchase Code?</strong><br />
                  <p><a href="<?php print $path; ?>/tbuilder/p-code.html?lightbox[width]=800&amp;lightbox[height]=600" class="lightbox" style="margin-top: 10px;"><strong>Click here</strong></a> to open lightbox with more information about this.</p>
              </div> -->
        </div>
        <!-- =========== / Get the code =========== -->

    </form>
    <!-- ===================================================== Form End
    ============================================================================================================= -->

    <!-- ===================================================== GENERATED CODE[BEGIN] -->
    <div id="GenCodeResultLoader" class="grid_12"></div>
    <div id="GenCodeResult" class="grid_12"></div>
    <!-- ===================================================== GENERATED CODE[END] -->



</div>
<?php

function skin_process_page() {

    
    /*
      require 'tbuilder/Envato_marketplaces.php';
      $Envato = new Envato_marketplaces();
      $Envato->set_api_key('7yh18l66xfg98cfcfwrfuc574sg6y11d'); */

    


    /*     * ***************************************************
      VARIABLES START
     * **************************************************** */

    date_default_timezone_set('Australia/Melbourne');
    $timezone_to_print = date_default_timezone_get();
    $date_to_print = date('m/d/Y h:i:s a', time());

    // User
    $tb_user_name = $_POST['tb_user_name'];

    // Veify user purchase code
    $tb_user_password = $_POST['tb_user_password'];
    // $verify_user_purchase_code = $Envato->verify_purchase('Smartik', $tb_user_password);
    $verify_user_purchase_code_result = 'not';

    /* if (isset($verify_user_purchase_code->buyer)) {
      $verify_user_purchase_code_result = 'yes';
      } else {
      $verify_user_purchase_code_result = 'not';
      } */

    // Main colors
    $cp_FirstColor = $_POST['cp_FirstColor'];
    if (empty($cp_FirstColor)) {
        $cp_FirstColor = '#4a7dff';
    }//First Color
    $cp_SecondColor = $_POST['cp_SecondColor'];
    if (empty($cp_SecondColor)) {
        $cp_SecondColor = '#00a5eb';
    }//Second Color
    $cp_ThirdColor = $_POST['cp_ThirdColor'];
    if (empty($cp_ThirdColor)) {
        $cp_ThirdColor = '#45abff';
    } //Third Color
    $cp_FourthColor = $_POST['cp_FourthColor'];
    if (empty($cp_FourthColor)) {
        $cp_FourthColor = '#7dbcff';
    } //Fourth Color
    //Links
    $cp_ALinkColor = $_POST['cp_ALinkColor'];
    if (empty($cp_ALinkColor)) {
        $cp_ALinkColor = $cp_FirstColor;
    } //Passive
    $cp_AHoverColor = $_POST['cp_AHoverColor'];
    if (empty($cp_AHoverColor)) {
        $cp_AHoverColor = $cp_SecondColor;
    } //Active
    // Top bar [TopB]
    $cp_TopBarBG = $_POST['cp_TopBarBG'];
    if (empty($cp_TopBarBG)) {
        $cp_TopBarBG = '#FFFFFF';
    }//TopB Background
    $cp_TopBarBorder = $_POST['cp_TopBarBorder'];
    if (empty($cp_TopBarBorder)) {
        $cp_TopBarBorder = '#EEEEEE';
    }//TopB Border Color
    $tb_TopBarBorderWidth_input = $_POST['tb_TopBarBorderWidth_input'];
    if (empty($tb_TopBarBorderWidth_input)) {
        $tb_TopBarBorderWidth_input = '10px';
    }//TopB Width
    // Menu
    $cp_TopBarMenuBorder = $_POST['cp_TopBarMenuBorder'];
    if (empty($cp_TopBarMenuBorder)) {
        $cp_TopBarMenuBorder = $cp_SecondColor;
    }//Menu border color on hover
    $tb_TopBarMenuBorderWidth_input = $_POST['tb_TopBarMenuBorderWidth_input'];
    if (empty($tb_TopBarMenuBorderWidth_input)) {
        $tb_TopBarMenuBorderWidth_input = '1px';
    }//Menu border width
    $cp_TopBarMenuBG = $_POST['cp_TopBarMenuBG'];
    if (empty($cp_TopBarMenuBG)) {
        $cp_TopBarMenuBG = '#222';
    }//Menu background on hover
    $cp_TopBarMenuText = $_POST['cp_TopBarMenuText'];
    if (empty($cp_TopBarMenuText)) {
        $cp_TopBarMenuText = '#FFF';
    }//Menu text color on hover
    $tb_TopBarMenuPadding_input = $_POST['tb_TopBarMenuPadding_input'];
    if (empty($tb_TopBarMenuPadding_input)) {
        $tb_TopBarMenuPadding_input = '7px';
    }//Menu Item Padding
    // Header 
    $tbh_header_input = $_POST['tbh_header_input'];
    if (empty($tbh_header_input)) {
        $tbh_header_input = '../../images/headers/header40.jpg';
    }//Header background image
    $cp_HeaderBGcolor = $_POST['cp_HeaderBGcolor'];
    if (empty($cp_HeaderBGcolor)) {
        $cp_HeaderBGcolor = '#FFF';
    }//Header background color
    $cp_HeaderBorder = $_POST['cp_HeaderBorder'];
    if (empty($cp_HeaderBorder)) {
        $cp_HeaderBorder = '#EEE';
    }//Top bar border color
    $tb_HeaderBorderWidth_input = $_POST['tb_HeaderBorderWidth_input'];
    if (empty($tb_HeaderBorderWidth_input)) {
        $tb_HeaderBorderWidth_input = '10px';
    }//Top bar border width
    // Wrap 
    $tbh_wrap_input = $_POST['tbh_wrap_input'];
    if (empty($tbh_wrap_input)) {
        $tbh_wrap_input = '';
    }//Wrap background image
    $cp_WrapBGcolor = $_POST['cp_WrapBGcolor'];
    if (empty($cp_WrapBGcolor)) {
        $cp_WrapBGcolor = '#FFF';
    }//Wrap Background color
    $tbh_wrap_BgAttach = $_POST['tbh_wrap_BgAttach'];
    if (empty($tbh_wrap_BgAttach)) {
        $tbh_wrap_BgAttach = 'scroll';
    }//Wrap Background attachment
    // Image Wrap
    $cp_ImageWrapBGcolor = $_POST['cp_ImageWrapBGcolor'];
    if (empty($cp_ImageWrapBGcolor)) {
        $cp_ImageWrapBGcolor = '#EAEAEA';
    }//Image Wrap BG color
    $tb_ImageWrapPadding_input = $_POST['tb_ImageWrapPadding_input'];
    if (empty($tb_ImageWrapPadding_input)) {
        $tb_ImageWrapPadding_input = '5px';
    }//Image Wrap padding
    $tb_ImageWrapRadius_input = $_POST['tb_ImageWrapRadius_input'];
    if (empty($tb_ImageWrapRadius_input)) {
        $tb_ImageWrapRadius_input = '2px';
    }//Image Wrap border-radius
    // Forms
    $cp_FormsBordercolor = $_POST['cp_FormsBordercolor'];
    if (empty($cp_FormsBordercolor)) {
        $cp_FormsBordercolor = '#BBB';
    }//Default Border color
    $cp_FormsBackgroundcolor = $_POST['cp_FormsBackgroundcolor'];
    if (empty($cp_FormsBackgroundcolor)) {
        $cp_FormsBackgroundcolor = '#FFF';
    }//Default Background color
    $cp_FormsColor = $_POST['cp_FormsColor'];
    if (empty($cp_FormsColor)) {
        $cp_FormsColor = '#000';
    }//Default color
    $cp_FormsBorderFocuscolor = $_POST['cp_FormsBorderFocuscolor'];
    if (empty($cp_FormsBorderFocuscolor)) {
        $cp_FormsBorderFocuscolor = $cp_SecondColor;
    }//:focus Border color
    $cp_FormsBackgroundFocuscolor = $_POST['cp_FormsBackgroundFocuscolor'];
    if (empty($cp_FormsBackgroundFocuscolor)) {
        $cp_FormsBackgroundFocuscolor = '#FFF';
    }//:focus Background color
    $cp_FormsFocusColor = $_POST['cp_FormsFocusColor'];
    if (empty($cp_FormsFocusColor)) {
        $cp_FormsFocusColor = '#000';
    }//:focus color
    $cp_FormsBorderHovercolor = $_POST['cp_FormsBorderHovercolor'];
    if (empty($cp_FormsBorderHovercolor)) {
        $cp_FormsBorderHovercolor = '#BBB';
    }//:hover Border color
    $cp_FormsBackgroundHovercolor = $_POST['cp_FormsBackgroundHovercolor'];
    if (empty($cp_FormsBackgroundHovercolor)) {
        $cp_FormsBackgroundHovercolor = '#FFF';
    }//:hover Background color
    $cp_FormsHoverColor = $_POST['cp_FormsHoverColor'];
    if (empty($cp_FormsHoverColor)) {
        $cp_FormsHoverColor = '#000';
    }//:hover color
    $tb_FormsBorderRadius_input = $_POST['tb_FormsBorderRadius_input'];
    if (empty($tb_FormsBorderRadius_input)) {
        $tb_FormsBorderRadius_input = '3px';
    }//Border-radius
    // Image loader
    $tbh_loader_input = $_POST['tbh_loader_input'];
    if (empty($tbh_loader_input)) {
        $tbh_loader_input = '../../images/loaders/1.gif';
    }

    // Footer
    $tbh_footer_input = $_POST['tbh_footer_input'];
    if (empty($tbh_footer_input)) {
        $tbh_footer_input = '../../images/pattern/62.png';
    }
    $cp_FooterBGcolor = $_POST['cp_FooterBGcolor'];
    if (empty($cp_FooterBGcolor)) {
        $cp_FooterBGcolor = '#32303D';
    }
    $cp_FooterColor = $_POST['cp_FooterColor'];
    if (empty($cp_FooterColor)) {
        $cp_FooterColor = '#FFFFFF';
    }
    $cp_FooterLinkColor = $_POST['cp_FooterLinkColor'];
    if (empty($cp_FooterLinkColor)) {
        $cp_FooterLinkColor = '#FFFFFF';
    }
    $cp_FooterHoverColor = $_POST['cp_FooterHoverColor'];
    if (empty($cp_FooterHoverColor)) {
        $cp_FooterHoverColor = $cp_FourthColor;
    }
    // Footer Bar
    $cp_Footer2BGcolor = $_POST['cp_Footer2BGcolor'];
    if (empty($cp_Footer2BGcolor)) {
        $cp_Footer2BGcolor = '#32303D';
    }
    $cp_Footer2Color = $_POST['cp_Footer2Color'];
    if (empty($cp_Footer2Color)) {
        $cp_Footer2Color = '#FFFFFF';
    }
    $cp_Footer2LinkColor = $_POST['cp_Footer2LinkColor'];
    if (empty($cp_Footer2LinkColor)) {
        $cp_Footer2LinkColor = '#FFFFFF';
    }
    $cp_Footer2HoverColor = $_POST['cp_Footer2HoverColor'];
    if (empty($cp_Footer2HoverColor)) {
        $cp_Footer2HoverColor = $cp_FourthColor;
    }
    $cp_Footer2BorderColor = $_POST['cp_Footer2BorderColor'];
    if (empty($cp_Footer2BorderColor)) {
        $cp_Footer2BorderColor = '#49475C';
    }
    $tb_FooterBorderWidth_input = $_POST['tb_FooterBorderWidth_input'];
    if (empty($tb_FooterBorderWidth_input)) {
        $tb_FooterBorderWidth_input = '1px';
    }

    // Image hover icon
    $tbh_imghover_input = $_POST['tbh_imghover_input'];
    if (empty($tbh_imghover_input)) {
        $tbh_imghover_input = '../../images/caption/01.png';
    }
    $tb_imgHoverAnimation = $_POST['tb_imgHoverAnimation'];
    if (empty($tb_imgHoverAnimation)) {
        $tb_imgHoverAnimation = 'fade';
    }
    $tb_imgHoverOpacity_input = $_POST['tb_imgHoverOpacity_input'];
    if (empty($tb_imgHoverOpacity_input)) {
        $tb_imgHoverOpacity_input = '100';
    }
    $tb_imgHoverTransition_input = $_POST['tb_imgHoverTransition_input'];
    if (empty($tb_imgHoverTransition_input)) {
        $tb_imgHoverTransition_input = '0.3s';
    }

    // Blog icons
    $tbh_blogicons_input = $_POST['tbh_blogicons_input'];
    if (empty($tbh_blogicons_input)) {
        $tbh_blogicons_input = '0';
    }

    // Button
    $cp_ButtonBGcolor = $_POST['cp_ButtonBGcolor'];
    if (empty($cp_ButtonBGcolor)) {
        $cp_ButtonBGcolor = '#444444';
    }
    $cp_ButtonBordercolor = $_POST['cp_ButtonBordercolor'];
    if (empty($cp_ButtonBordercolor)) {
        $cp_ButtonBordercolor = '#111111';
    }
    $cp_ButtonTextcolor = $_POST['cp_ButtonTextcolor'];
    if (empty($cp_ButtonTextcolor)) {
        $cp_ButtonTextcolor = '#ffffff';
    }
    $cp_ButtonHoverBGcolor = $_POST['cp_ButtonHoverBGcolor'];
    if (empty($cp_ButtonHoverBGcolor)) {
        $cp_ButtonHoverBGcolor = $cp_ThirdColor;
    }
    $cp_ButtonHoverBordercolor = $_POST['cp_ButtonHoverBordercolor'];
    if (empty($cp_ButtonHoverBordercolor)) {
        $cp_ButtonHoverBordercolor = $cp_FirstColor;
    }
    $cp_ButtonHoverTextcolor = $_POST['cp_ButtonHoverTextcolor'];
    if (empty($cp_ButtonHoverTextcolor)) {
        $cp_ButtonHoverTextcolor = '#ffffff';
    }


    /* --- Current Vars --- */
// Image hover icon
    $webkitImgOpacity = '';
    if ($tb_imgHoverOpacity_input == '100') {
        $webkitImgOpacity = '1';
    } else {
        $webkitImgOpacity = '0.' . $tb_imgHoverOpacity_input;
    }
// Image hover animation
    $tb_imgHoverAnimationVal = '';
    $tb_imgHoverAnimationValHOV = '';
    switch ($tb_imgHoverAnimation) {
        case 'fromtop':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: -25%;";
            break;
        case 'frombottom':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 125%;";
            break;
        case 'fromleft':
            $tb_imgHoverAnimationVal = "left: -25%; 
	top: 50%;";
            break;
        case 'fromright':
            $tb_imgHoverAnimationVal = "left: 125%; 
	top: 50%;";
            break;
        case 'fadefromtop':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 35%;";
            break;
        case 'fadefrombottom':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 65%;";
            break;
        case 'fadefromleft':
            $tb_imgHoverAnimationVal = "left: 35%; 
	top: 50%;";
            break;
        case 'fadefromright':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 50%;";
            break;
        case 'scalefromtop':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: -25%;
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
	-o-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);";
            $tb_imgHoverAnimationValHOV = '-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);';
            break;
        case 'scalefrombottom':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 125%;
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
	-o-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);";
            $tb_imgHoverAnimationValHOV = '-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);';
            break;
        case 'scalefromleft':
            $tb_imgHoverAnimationVal = "left: -25%; 
	top: 50%;
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
	-o-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);";
            $tb_imgHoverAnimationValHOV = '-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);';
            break;
        case 'scalefromright':
            $tb_imgHoverAnimationVal = "left: 125%; 
	top: 50%;
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
	-o-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);";
            $tb_imgHoverAnimationValHOV = '-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);';
            break;
        case 'scale':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 50%;
	-webkit-transform: scale(0);
	-moz-transform: scale(0);
	-o-transform: scale(0);
	-ms-transform: scale(0);
	transform: scale(0);";
            $tb_imgHoverAnimationValHOV = '-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);';
            break;
        case 'scalebig':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 50%;
	-webkit-transform: scale(5);
	-moz-transform: scale(5);
	-o-transform: scale(5);
	-ms-transform: scale(5);
	transform: scale(5);";
            $tb_imgHoverAnimationValHOV = '-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);';
            break;
        case 'rotate':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 50%;
	transform: rotate(-360deg);
	-ms-transform: rotate(-360deg);
	-webkit-transform: rotate(-360deg);
	-o-transform: rotate(-360deg);
	-moz-transform: rotate(-360deg);";
            $tb_imgHoverAnimationValHOV = "transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
	-o-transform: rotate(0deg);
	-moz-transform: rotate(0deg);";
            break;
        case 'rotate2':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 50%;
	transform: rotate(-180deg);
	-ms-transform: rotate(-180deg);
	-webkit-transform: rotate(-180deg);
	-o-transform: rotate(-180deg);
	-moz-transform: rotate(-180deg);";
            $tb_imgHoverAnimationValHOV = "transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
	-o-transform: rotate(0deg);
	-moz-transform: rotate(0deg);";
            break;
        case 'rotate3':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 50%;
	transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);";
            $tb_imgHoverAnimationValHOV = "transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
	-o-transform: rotate(0deg);
	-moz-transform: rotate(0deg);";
            break;
        case 'fade':
            $tb_imgHoverAnimationVal = "left: 50%; 
	top: 50%;";
            break;
    }

    $generalinfo_wrap = '';
    if (empty($tbh_wrap_input)) {
        $generalinfo_wrap = 'none';
    } else {
        $generalinfo_wrap = $tbh_wrap_input;
    }


    /*     * ***************************************************
      VARIABLES END
     * **************************************************** */


    /*     * ***************************************************
      CODE GENERATION START
     * **************************************************** */

    if ($verify_user_purchase_code_result == "not") {

// ------------------------------------------------------
// IF THE PASSWORD IS VALID SHOW THIS SUCCESS MESSAGE !!!
// ------------------------------------------------------
        echo '<div class="alert success_msg" style="margin-bottom: 10px;">Copy the following code to <strong><span class="text-tomato">css/themes/</span><span class="text-red">custom-skin.css</span></strong></div>';
        print "\n";
        echo '<div class="clear"></div>';
        print "\n";

// ------------------------------------------------------
// TEXTAREA START
// ------------------------------------------------------
        echo '<textarea class="tb_textarea_codeResult" style="width: 98.5%; height: 450px;" onclick="this.focus();this.select()"  readonly="readonly">';
        print "\n";

// Information
// ------------------------------------------------------
        echo '/*';
        print "\n";
        echo ' + Generated with SMK SKINR v1.0';
        print "\n";

        if (!empty($tb_user_name)) {
            echo ' + Customized by ' . $tb_user_name;
            print "\n";
        }

        echo ' + Date and time: ' . $date_to_print . ' - ' . $timezone_to_print;
        print "\n";

        echo ' + SMK SKINR URL: http://www.smartik-themes.com/themeforest/html/perspective/template-builder.php';
        print "\n";

        echo ' + Color Scheme: ' . $cp_FirstColor . ' | ' . $cp_SecondColor . ' | ' . $cp_ThirdColor . ' | ' . $cp_FourthColor;
        print "\n";
        echo ' + General info: 
	header: ' . $tbh_header_input . '
	wrap: ' . $generalinfo_wrap . '
	loader: ' . $tbh_loader_input . '
	caption: ' . $tbh_imghover_input . '
	footer: ' . $tbh_footer_input . '
	blog icons set: ' . $tbh_blogicons_input;
        print "\n";
        echo '*/';
        print "\n\n";

// CSS Rules
// ------------------------------------------------------
        /* ---- Links  */
        echo '/*Links*/';
        print "\n";
        echo 'a {
	color: ' . $cp_ALinkColor . ';
	transition: all .3s;
	-moz-transition: all .3s;
	-webkit-transition: all .3s;
	-o-transition: all .3s;
}';
        print "\n";
        echo 'a:hover, 
h1 a:hover,
h2 a:hover, 
h3 a:hover, 
h4 a:hover, 
h5 a:hover, 
h6 a:hover {
	color: ' . $cp_AHoverColor . '
}';
        print "\n\n";

        /* ---- Top Bar(with menu) */
        echo '/*Top Bar(with menu)*/';
        print "\n";
        echo '.top_head_separator{
	background: ' . $cp_TopBarBG . '; 
	border-bottom: ' . $cp_TopBarBorder . ' solid ' . $tb_TopBarBorderWidth_input . ';
}';
        print "\n\n";

        /* ---- Menu */
        echo '/*Menu*/';
        print "\n";
        echo '.nav_simple ul li a {
	border-bottom: ' . $tb_TopBarMenuBorderWidth_input . ' solid transparent;
	padding-top: ' . $tb_TopBarMenuPadding_input . ';
	padding-bottom: ' . $tb_TopBarMenuPadding_input . ';
}';
        ;
        print "\n";
        echo '.nav_simple ul li a:hover,
.nav_simple ul li a.hov,
.nav_simple ul li a.active {
	border-bottom: ' . $tb_TopBarMenuBorderWidth_input . ' solid ' . $cp_TopBarMenuBorder . ';
	background: ' . $cp_TopBarMenuBG . ';
	color: ' . $cp_TopBarMenuText . ';
}
.nav_simple li.nav_badge em,
.nav_simple li.nav_badge a em{
	background: ' . $cp_FourthColor . ';
	color: #fff;
}

';
        ;
        print "\n\n";

        /* ---- Header */
        echo '/*Header*/';
        print "\n";
        echo '.header, 
.page_top_details{ 
	background: url(' . $tbh_header_input . ') center top ' . $cp_HeaderBGcolor . ';
	border-bottom: ' . $tb_HeaderBorderWidth_input . ' solid ' . $cp_HeaderBorder . ';
}';
        print "\n\n";

        /* ---- Wrap */
        echo '/*Wrap*/';
        print "\n";
        if (!empty($tbh_wrap_input)) {
            echo '.wrap{
	background: url(' . $tbh_wrap_input . ') repeat 0 0 ' . $cp_WrapBGcolor . ' ' . $tbh_wrap_BgAttach . ';
}';
            print "\n\n";
        } else {
            echo '.wrap{
	background: ' . $cp_WrapBGcolor . ';
}';
            print "\n\n";
        }

        /* ---- Image Wrap */
        echo '/*Image/Video Wrap*/';
        print "\n";
        echo '.image_wrap,
.image_wrap_simple,
.blog_article .blog_slider.flexslider,
.post_article_single .post_slider.flexslider,
.blog_article .container_video,
.post_article_single .container_video{
	background: #fafafa;
}';
        print "\n";
        echo '.image_wrap:hover, 
.image_wrap_simple:hover, 
.blog_article .blog_slider.flexslider:hover,
.post_article_single .post_slider.flexslider:hover,
.blog_article .container_video:hover, 
.post_article_single .container_video:hover{
	background: ' . $cp_ImageWrapBGcolor . ';
}';
        print "\n";
        echo '.img_wrap_in{
	margin: ' . $tb_ImageWrapPadding_input . ';
}';
        print "\n";
        echo '.image_wrap,
.image_wrap_simple,
.blog_article .blog_slider.flexslider,
.post_article_single .post_slider.flexslider,
.blog_article .container_video,
.post_article_single .container_video,
.image_wrap img,
.image_wrap_simple img,
.blog_article .blog_slider.flexslider img,
.post_article_single .post_slider.flexslider img,
.blog_article .container_video iframe,
.post_article_single .container_video iframe,
.img_wrap_in{
	border-radius: ' . $tb_ImageWrapRadius_input . ';
	-webkit-border-radius: ' . $tb_ImageWrapRadius_input . ';
	-moz-border-radius: ' . $tb_ImageWrapRadius_input . ';
}';
        print "\n\n";

        /* ---- Forms */
        echo '/*Forms*/';
        print "\n";
        echo 'input[type=text], 
input[type=password], 
input[type=url], 
input[type=email], 
input.text, 
input.title, 
textarea, 
select{
	border-color: ' . $cp_FormsBordercolor . ';
	background: ' . $cp_FormsBackgroundcolor . ';
	color: ' . $cp_FormsColor . ';
	border-radius: ' . $tb_FormsBorderRadius_input . ';
	-webkit-border-radius: ' . $tb_FormsBorderRadius_input . ';
	-moz-border-radius: ' . $tb_FormsBorderRadius_input . ';
}';
        print "\n";

        if ($tb_FormDisableHover == 'no') {
            echo 'input[type=text]:hover, 
input[type=password]:hover, 
input[type=url]:hover, 
input[type=email]:hover, 
input.text:hover, 
input.title:hover, 
textarea:hover, 
select:hover{
	border-color: ' . $cp_FormsBorderHovercolor . ';
	background: ' . $cp_FormsBackgroundHovercolor . ';
	color: ' . $cp_FormsHoverColor . ';
}';
            print "\n";
        }// END OF: if($tb_FormDisableHover == 'no')

        echo 'input[type=text]:focus, 
input[type=password]:focus, 
input[type=url]:focus, 
input[type=email]:focus, 
input.text:focus, 
input.title:focus, 
textarea:focus, 
select:focus{
	border-color: ' . $cp_FormsBorderFocuscolor . ';
	background: ' . $cp_FormsBackgroundFocuscolor . ';
	color: ' . $cp_FormsFocusColor . ';
}';
        print "\n\n";

        /* ---- Image Preloader */
        echo '/*Image Preloader*/';
        print "\n";
        echo '.preloader { background:url(' . $tbh_loader_input . ') center center no-repeat #ffffff; }';
        print "\n\n";

        /* Site Footer */
        echo '/*Site Footer*/';
        print "\n";
        echo '#site_footer{ 
	background-image: url(' . $tbh_footer_input . ');
	background-color: ' . $cp_FooterBGcolor . ';
	background-repeat: repeat; 
	background-position: center top; 
}';
        print "\n";

        echo '#site_footer
#site_footer .widgetized_footer,
#site_footer .widgetized_footer .widget-title,
#site_footer .widgetized_footer .widget ul li{
	color: ' . $cp_FooterColor . ';
}';
        print "\n";

        echo '#site_footer .widgetized_footer a,
#site_footer .widgetized_footer .widget ul li a{
	color: ' . $cp_FooterLinkColor . ';
}';
        print "\n";

        echo '#site_footer a:hover,
#site_footer .widgetized_footer a:hover,
#site_footer .widgetized_footer .widget ul li a:hover{
	color: ' . $cp_FooterHoverColor . ';
}';
        print "\n";

        echo '#site_footer_second{
	background: ' . $cp_Footer2BGcolor . ';
	border-top: ' . $tb_FooterBorderWidth_input . ' solid ' . $cp_Footer2BorderColor . ';
}';
        print "\n";

        echo '#site_footer_second,
#site_footer_second .site_footer_inner,
.site_copyright{
	color: ' . $cp_Footer2Color . ';
}';
        print "\n";

        echo '#site_footer_second a,
#site_footer_second .site_footer_inner a{
	color: ' . $cp_Footer2LinkColor . ';
}';
        print "\n";

        echo '#site_footer_second a:hover,
#site_footer_second .site_footer_inner a:hover{
	color: ' . $cp_Footer2HoverColor . ';
}';
        print "\n\n\n";

        /* Blog icons */
        echo '/* Blog icons */';
        print "\n";
        echo '.blog_article.blog_article_s3 .blog_s3_meta ul.metasingle li.blog_user { 
	background-image: url(../../images/icons/blog/blog-user' . $tbh_blogicons_input . '.png); 
}
.blog_article.blog_article_s3 .blog_s3_meta ul.metasingle li.blog_date { 
	background-image: url(../../images/icons/blog/blog-calendar' . $tbh_blogicons_input . '.png); 
}
.blog_article.blog_article_s3 .blog_s3_meta ul.metasingle li.blog_category { 
	background-image: url(../../images/icons/blog/blog-category' . $tbh_blogicons_input . '.png); 
}
.blog_article.blog_article_s3 .blog_s3_meta ul.metasingle li.blog_comments { 
	background-image: url(../../images/icons/blog/blog-comments' . $tbh_blogicons_input . '.png); 
}
.blog_article.blog_article_s3 .blog_s3_meta ul.metasingle li.blog_tag { 
	background-image: url(../../images/icons/blog/blog-tag' . $tbh_blogicons_input . '.png); 
}';
        print "\n\n\n";

        /* ---- Image hover icon */
        echo '/* Image hover icon */';
        print "\n";
        /* passive */
        echo '.image_wrap .img_caption_zoom,
.image_wrap .img_caption_more,
.image_wrap .img_caption_video,
.image_wrap .img_caption_link{
	filter: alpha(opacity=0);
	opacity: 0;
	background: url(' . $tbh_imghover_input . ');
	' . $tb_imgHoverAnimationVal . '
	-webkit-transition: all ' . $tb_imgHoverTransition_input . ' ease-in-out;
	-moz-transition: all ' . $tb_imgHoverTransition_input . ' ease-in-out;
	-o-transition: all ' . $tb_imgHoverTransition_input . ' ease-in-out;
	-ms-transition: all ' . $tb_imgHoverTransition_input . ' ease-in-out;
	transition: all ' . $tb_imgHoverTransition_input . ' ease-in-out;
}';
        print "\n";

        echo'.image_wrap .img_caption_zoom,.image_wrap:hover .img_caption_zoom {background-position: 0 0; }
.image_wrap .img_caption_more,.image_wrap:hover .img_caption_more{background-position: -48px 0;}
.image_wrap .img_caption_video,.image_wrap:hover .img_caption_video{background-position: -96px 0;}
.image_wrap .img_caption_link,.image_wrap:hover .img_caption_link{background-position: -144px 0;}';
        print "\n";

        /* on hover */
        echo '.image_wrap:hover .img_caption_zoom,
.image_wrap:hover .img_caption_more,
.image_wrap:hover .img_caption_video,
.image_wrap:hover .img_caption_link{
	left: 50%;
	top: 50%;
	filter: alpha(opacity=' . $tb_imgHoverOpacity_input . ');
	opacity: ' . $webkitImgOpacity . ';
	' . $tb_imgHoverAnimationValHOV . '
}';
        print "\n\n\n";

        /* Button */
        echo '/* Button */';
        print "\n";
        echo '.default_button{
	border: solid 1px ' . $cp_ButtonBordercolor . ';
	color: ' . $cp_ButtonTextcolor . ';
	background: ' . $cp_ButtonBGcolor . ';
 }
.default_button:hover,
.default_button:active { 
	color: ' . $cp_ButtonHoverTextcolor . '; 
	background: ' . $cp_ButtonHoverBGcolor . '; 
	border-color: ' . $cp_ButtonHoverBordercolor . '; 
}';
        print "\n\n\n";


        /* ---- General color scheme */
        echo '/*General color scheme
------------------------------------------------------------------------------------------*/';
        print "\n";

        echo '/* Price box title */
.price_box.pb2col .pb_column.pb_active,
.price_box.pb3col .pb_column.pb_active,
.price_box.pb4col .pb_column.pb_active,
.price_box.pb5col .pb_column.pb_active {
	border-color:' . $cp_ThirdColor . ';
	box-shadow: 0px 0px 47px ' . $cp_FourthColor . ';
	-moz-box-shadow: 0px 0px 47px ' . $cp_FourthColor . ';
	-webkit-box-shadow: 0px 0px 47px ' . $cp_FourthColor . ';
}';
        print "\n\n";

        echo '/* Default color for selected text */
::selection, 
::-moz-selection { 
	background: ' . $cp_SecondColor . ';
	color: #fff;
}';
        print "\n\n";

        echo '/* Top search form */
.page_top_details #searchform #s{
	border: 1px solid #fff;
	background: #fff;
	color: #222;
}
.page_top_details #searchform #s:focus{
	/* border-color: ' . $cp_SecondColor . '; */
	background: #fff;
	color: #222;
}';
        print "\n\n";

        echo '/* Pagination */
#smk_pagination a{
	color:#777; 
	border-bottom: 3px solid #ddd; 
}
#smk_pagination a:hover { 
	border-color:' . $cp_SecondColor . '; 
	color:' . $cp_SecondColor . '; 
}
#smk_pagination .active_smk_link { 
	border-bottom: 3px solid ' . $cp_FirstColor . '; 
	color:' . $cp_FirstColor . '; 
}
#smk_pagination .disabled_smk_pagination { 
	border-bottom:3px solid #EBEBEB; 
	color:#D7D7D7; 
}';
        print "\n\n";

        echo '/* Home clients */
.home_clients .hp_item_grid_client:hover{ 
	border-top-color: ' . $cp_SecondColor . ';
}';
        print "\n\n";

        echo '/* Portfolio styles */
.portf_item .pf_icons .pf_icon.img_zoom:hover,
.portf_item .pf_icons .pf_icon.img_info:hover { 
	background-color: ' . $cp_ThirdColor . ';
}
.portf_item h2:hover{ 
	color: ' . $cp_FourthColor . ';
}
#portfolio_menu li a:hover { 
	color: ' . $cp_SecondColor . ';
}
#portfolio_menu li a.active_cat { 
	color: ' . $cp_SecondColor . '; 
	border-bottom: 1px solid ' . $cp_SecondColor . ';
}';
        print "\n\n";

        echo '/* Blog colors */
.blog_article.blog_article_s3 .blog_s3_meta ul.metasingle a:hover {
	color: ' . $cp_SecondColor . ';
}';
        print "\n\n";

        echo '/* Widgets */
.widget ul li a { 
	border-bottom: 1px solid #eee; 
	color: #666; 
}
.widget ul li a:hover,
.widget ul li a:focus,
.widget ul li a:active {
	border-color:' . $cp_SecondColor . '; 
	color:' . $cp_SecondColor . ';
}
.widget ul li.current-menu-item a {	
	color:' . $cp_SecondColor . ';
}';
        print "\n\n";

        echo '/* Team link color */
.team_member .team_mb_name a:hover{ 
	color: ' . $cp_SecondColor . ';
}';


        echo '</textarea>';
        print "\n";
// ------------------------------------------------------
// TEXTAREA END
// ------------------------------------------------------
    } else {

// ------------------------------------------------------
// IF THE PASSWORD IS INVALID SHOW THIS ERROR MESSAGE !!!
// ------------------------------------------------------
        echo '<div class="alert error_msg" style="margin-bottom: 0;"><strong>Invalid Item Purchase Code!</strong> Please try again.</div>';
        print "\n";
        echo '<div class="clear"></div>';
        print "\n";
    } // END OF: if ($tb_user_password == "tb012")

    /*     * ***************************************************
      CODE GENERATION END
     * **************************************************** */
    
     
}
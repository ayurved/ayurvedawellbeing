(function ($) {
    // All your code here
  
    jQuery(document).ready(function(){
			
        $('#tbuilder_form').submit(function(){
	
            $.scrollTo('#GenCodeResult', {
                duration: 1500
            });
		
            var action = $(this).attr('action');
		
            $("#GenCodeResult").slideUp(750,function() {
                $('#GenCodeResult').hide();
		
                $('#tbsubmit').attr('disabled','disabled');
                $('#GenCodeResultLoader').append('<img src="/sites/all/modules/tabvn/skin/tbuilder/loader.gif" class="tbloader" />');
                $('#tb_close_codeblock').remove();
                $('#tbsubmit').after('<a href="#" id="tb_close_codeblock" onclick="return false;" title="Close"></a>');
		
                $.post(action, { 
                    // User access
                    tb_user_name: $('#tb_user_name').val(), //User name
                    tb_user_password: $('#tb_user_password').val(), //User Password access

                    // Main colors
                    cp_FirstColor: $('#cp_FirstColor').val(),//Main Color
                    cp_SecondColor: $('#cp_SecondColor').val(),//Second Color
                    cp_ThirdColor: $('#cp_ThirdColor').val(),//Third Color
                    cp_FourthColor: $('#cp_FourthColor').val(),//Fourth Color
			
                    cp_ALinkColor: $('#cp_ALinkColor').val(),//Link
                    cp_AHoverColor: $('#cp_AHoverColor').val(),//Hover

                    // Top bar [TopB]
                    cp_TopBarBG: $('#cp_TopBarBG').val(),//TopB Background
                    cp_TopBarBorder: $('#cp_TopBarBorder').val(),//TopB Border Color
                    tb_TopBarBorderWidth_input: $('#tb_TopBarBorderWidth_input').val(),//TopB Width

                    // Menu
                    cp_TopBarMenuBorder: $('#cp_TopBarMenuBorder').val(),//Menu border color on hover

                    tb_TopBarMenuBorderWidth_input: $('#tb_TopBarMenuBorderWidth_input').val(), //Menu border width
                    cp_TopBarMenuBG: $('#cp_TopBarMenuBG').val(), //Menu background on hover
                    cp_TopBarMenuText: $('#cp_TopBarMenuText').val(), //Menu text color on hover
                    tb_TopBarMenuPadding_input: $('#tb_TopBarMenuPadding_input').val(), //Menu Item Padding

                    // Header 
                    tbh_header_input: $('#tbh_header_input').val(), //Header background image
                    cp_HeaderBGcolor: $('#cp_HeaderBGcolor').val(), //Header background color
                    cp_HeaderBorder: $('#cp_HeaderBorder').val(), //Top bar border color
                    tb_HeaderBorderWidth_input: $('#tb_HeaderBorderWidth_input').val(), //Top bar border width

                    // Wrap 
                    tbh_wrap_input: $('#tbh_wrap_input').val(), //Wrap background image
                    cp_WrapBGcolor: $('#cp_WrapBGcolor').val(), //Wrap Background color
                    tbh_wrap_BgAttach: $('#tbh_wrap_BgAttach').val(), //Wrap Background attachment

                    // Image Wrap
                    cp_ImageWrapBGcolor: $('#cp_ImageWrapBGcolor').val(), //Image Wrap BG color
                    tb_ImageWrapPadding_input: $('#tb_ImageWrapPadding_input').val(), //Image Wrap padding
                    tb_ImageWrapRadius_input: $('#tb_ImageWrapRadius_input').val(), //Image Wrap border-radius

                    // Forms
                    cp_FormsBordercolor: $('#cp_FormsBordercolor').val(), //Default Border color
                    cp_FormsBackgroundcolor: $('#cp_FormsBackgroundcolor').val(), //Default Background color
                    cp_FormsColor: $('#cp_FormsColor').val(), //Default color
                    cp_FormsBorderFocuscolor: $('#cp_FormsBorderFocuscolor').val(), //:focus Border color
                    cp_FormsBackgroundFocuscolor: $('#cp_FormsBackgroundFocuscolor').val(), //:focus Background color
                    cp_FormsFocusColor: $('#cp_FormsFocusColor').val(), //:focus color
                    cp_FormsBorderHovercolor: $('#cp_FormsBorderHovercolor').val(), //:hover Border color
                    cp_FormsBackgroundHovercolor: $('#cp_FormsBackgroundHovercolor').val(), //:hover Background color
                    cp_FormsHoverColor: $('#cp_FormsHoverColor').val(), //:hover color
                    tb_FormsBorderRadius_input: $('#tb_FormsBorderRadius_input').val(), //Border-radius
                    tb_FormDisableHover: $('#tb_FormDisableHover').val(), //Disable :hover Forms

                    // Image loader
                    tbh_loader_input: $('#tbh_loader_input').val(),
			
                    // Footer
                    tbh_footer_input: $('#tbh_footer_input').val(),
                    cp_FooterBGcolor: $('#cp_FooterBGcolor').val(),
                    cp_FooterColor: $('#cp_FooterColor').val(),
                    cp_FooterLinkColor: $('#cp_FooterLinkColor').val(),
                    cp_FooterHoverColor: $('#cp_FooterHoverColor').val(),
                    // Footer Bar
                    cp_Footer2BGcolor: $('#cp_Footer2BGcolor').val(),
                    cp_Footer2Color: $('#cp_Footer2Color').val(),
                    cp_Footer2LinkColor: $('#cp_Footer2LinkColor').val(),
                    cp_Footer2HoverColor: $('#cp_Footer2HoverColor').val(),
                    cp_Footer2BorderColor: $('#cp_Footer2BorderColor').val(),
                    tb_FooterBorderWidth_input: $('#tb_FooterBorderWidth_input').val(),
                    // Image hover icon
                    tbh_imghover_input: $('#tbh_imghover_input').val(),
                    tb_imgHoverAnimation: $('#tb_imgHoverAnimation').val(),
                    tb_imgHoverOpacity_input: $('#tb_imgHoverOpacity_input').val(),
                    tb_imgHoverTransition_input: $('#tb_imgHoverTransition_input').val(),
                    // Blog icons
                    tbh_blogicons_input: $('#tbh_blogicons_input').val(),
                    // Button
                    cp_ButtonBGcolor: $('#cp_ButtonBGcolor').val(),
                    cp_ButtonBordercolor: $('#cp_ButtonBordercolor').val(),
                    cp_ButtonTextcolor: $('#cp_ButtonTextcolor').val(),
                    cp_ButtonHoverBGcolor: $('#cp_ButtonHoverBGcolor').val(),
                    cp_ButtonHoverBordercolor: $('#cp_ButtonHoverBordercolor').val(),
                    cp_ButtonHoverTextcolor: $('#cp_ButtonHoverTextcolor').val()

			
                },
                function(data){
                    // document.getElementById('GenCodeResult').innerHTML = data;
                    save_action = $('#save_action').val();
                    $.post(save_action,{
                        data_save:data
                    },function(result){
                        document.getElementById('GenCodeResult').innerHTML = result;
                    });
                
                    $('#GenCodeResult').slideDown('slow');
                    $('img.tbloader').fadeOut('slow',function(){
                        $(this).remove()
                    });
                    $('#tbsubmit').removeAttr('disabled');
				
                }
                );
		
            });
		
            return false; 
		
        });
	
    });
  
})(jQuery);

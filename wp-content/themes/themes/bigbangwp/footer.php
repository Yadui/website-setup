<?php
$layout = get_option(BRANKIC_VAR_PREFIX."boxed_stretched");
if (isset($_GET["layout"])) 
{
    if (htmlspecialchars(strip_tags($_GET["layout"])) == "stretched") $layout = "stretched" ;
    if (htmlspecialchars(strip_tags($_GET["layout"])) == "boxed") $layout = "boxed" ; 
}

if ($layout == "stretched")
{
$page_template = get_page_template();
$path = pathinfo($page_template);
$page_template = $path['filename'];

if ($page_template != "page-contact-2")
{
?>
</div><!-- END CONTENT-WRAPPER --> 
<?php
}
?>
</div><!-- END WRAPPER --> 
<?php
}
?> 
    
 
    <!-- START FOOTER -->
    
    <!-- <div id="footer">
    
        <div id="footer-content">
/*<?php
$all_sidebars = wp_get_sidebars_widgets();
if (count($all_sidebars["Footer_1st_box"]) > 0 || count($all_sidebars["Footer_2nd_box"]) > 0 || count($all_sidebars["Footer_3rd_box"]) > 0 || count($all_sidebars["Footer_4th_box"]) > 0)
{
?> */                   
                <!--<div id="footer-top" class="clear">
                    
                <div class="one-fourth">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer_1st_box") ) : endif; ?>
                </div><!--END one-fourth-->
                
                <div class="one-fourth">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer_2nd_box") ) : endif; ?>
                </div><!--END one-fourth-->
                
                <div class="one-fourth">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer_3rd_box") ) : endif;  ?>
                </div><!--END one-fourth-->
                
                <div class="one-fourth last">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer_4th_box") ) : endif;  ?>
                </div><!--END one-fourth last-->
                    
                </div>--><!--END FOOTER-TOP-->
/*<?php
}
?>*/         
            
                <!--<div id="footer-bottom" class="clear">
                            
                    <div class="one-half">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer_left") ) : endif;  ?>
                    </div><!--END ONE-HALF-->    
                            
                    <div class="one-half text-align-right last">            
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer_right") ) : endif;  ?>
                    </div><!--END ONE-HALF LAST-->
                    
                </div><!--END FOOTER-BOTTOM-->    
            
        </div><!--END FOOTER-CONTENT-->        
    
    </div><!--END FOOTER-->
    
    <!-- END FOOTER -->    
<?php
if ($layout == "boxed")
{
?>*/
<!--</div><!-- END CONTENT-WRAPPER --> 

</div>--><!-- END WRAPPER --> 
<?php
}
?>

          



<script type='text/javascript'>
jQuery(document).ready(function($){
<?php
$bg_image_global = get_option(BRANKIC_VAR_PREFIX."background_image");
$tile_background_global = get_option(BRANKIC_VAR_PREFIX."tile_background");
$bg_image_local = get_post_meta(get_the_ID(), BRANKIC_VAR_PREFIX."background_image", true);

if ($bg_image_local != "")
{ 
    $bg_image = $bg_image_local;
    $image_id = MultiPostThumbnails::get_post_thumbnail_id( 'page', $bg_image, get_the_ID() );
    $page_bg_image = wp_get_attachment_image_src( $image_id, "page_" . $bg_image );
    $bg_image = $page_bg_image[0];
    $tile_background = get_post_meta(get_the_ID(), BRANKIC_VAR_PREFIX."tile_background", true);
}
else
{
    $bg_image = $bg_image_global;
    $tile_background = $tile_background_global;
}

if ($bg_image != "" && $tile_background == "yes")
{
?>
    $("body").css("background", "url(<?php echo $bg_image; ?>) repeat");
<?php
}
if ($bg_image != "" && $tile_background != "yes") 
{
?> 
    $.backstretch("<?php echo $bg_image; ?>");
<?php
}
 
?>
})
<?php echo get_option(BRANKIC_VAR_PREFIX."extra_javascript"); ?> 
<?php 
if (is_single()) {
?>
/*--------------------------------------------------
         COMMENT FORM CODE
---------------------------------------------------*/
jQuery(document).ready(function($){
    $(".comment-list li").addClass("comment");
    $("#comment-form").addClass("form");
    $("#comment-form #submit").addClass("submit");
    $("#reply-title").addClass("title");
    $("#reply-title").after("<p><?php _e('Make sure you fill in all mandatory fields.', BRANKIC_THEME_SHORT); ?></p>")
});
<?php
}  
?>
</script>
<?php
if (get_option(BRANKIC_VAR_PREFIX."show_panel") == "yes")
{
?>
<!-- Theme Option --> 
<script type="text/javascript" src="<?php echo BRANKIC_ROOT."/javascript/theme-option.js" ; ?>"></script>

<div id="panel" style="margin-left:-210px;">
        
    <div id="panel-admin">
        <strong>Background pattern</strong> <br />    
        <select id="background">
          <option value="">--</option>
          <option value="">Blank</option>
          <option value="bg-1.png">Pattern 1</option>
          <option value="bg-4.png">Pattern 2</option>
          <option value="bg-6.png">Pattern 3</option>
          <option value="bg-2.png">Pattern 4</option>
          <option value="bg-5.png">Pattern 5</option>
          <option value="bg-7.png">Pattern 6</option>
          <option value="bg-3.png">Pattern 7</option>
          <option value="bg-8.png">Pattern 8</option>
          <option value="bg-9.png">Pattern 9</option>
          <option value="bg-10.png">Pattern 10</option>
          <option value="bg1.jpg">Backstreach photography</option>
        </select>
        
        <strong>Colors</strong> <br />
        <select id="colors">
          <option value="">--</option>
          <option value="color-blue.css">Blue</option>
          <option value="color-navyblue.css">Navyblue</option>
          <option value="color-orange.css">Orange</option>
          <option value="color-yellow.css">Yellow</option>
          <option value="color-green.css">Green</option>
          <option value="color-tealgreen.css">Tealgreen</option>
          <option value="color-red.css">Red</option>
          <option value="color-pink.css">Pink</option>
          <option value="color-purple.css">Purple</option>
          <option value="color-magenta.css">Magenta</option>
          <option value="color-cream.css">Cream</option>
        </select>
        
        <strong>Layout style</strong> <br />
        <select id="layout">
          <option value="">--</option>
          <option value="streched">Stretched</option>
          <option value="boxed">Boxed</option>
        </select>
<br /><br /><br />

    </div><!--PANEL-ADMIN-->    
    
    <a class="open" href="#"></a>

</div><!--PANEL-->
<?php
}
?>
<?php if (get_option(BRANKIC_VAR_PREFIX."extra_css") != "")
{
?> 
<style type="text/css">
<!--
<?php echo get_option(BRANKIC_VAR_PREFIX."extra_css"); ?>
-->
</style>
<?php
}
?>
<?php wp_footer(); ?>
<!--<script type='text/javascript'> 
FRESHCHAT_VISITORINFO = { "name":user_name, "email":user_email, "phone":user_phone, "custom_field1":user_textfield, "custom_field2":user_dropdown}
</script> -->
<!--Chat Script-->
<script type='text/javascript'>var fc_CSS=document.createElement('link');fc_CSS.setAttribute('rel','stylesheet');var fc_isSecured = (window.location && window.location.protocol == 'https:');var fc_lang = document.getElementsByTagName('html')[0].getAttribute('lang'); var fc_rtlLanguages = ['ar','he']; var fc_rtlSuffix = (fc_rtlLanguages.indexOf(fc_lang) >= 0) ? '-rtl' : '';fc_CSS.setAttribute('type','text/css');fc_CSS.setAttribute('href',((fc_isSecured)? 'https://d36mpcpuzc4ztk.cloudfront.net':'http://assets1.chat.freshdesk.com')+'/css/visitor'+fc_rtlSuffix+'.css');document.getElementsByTagName('head')[0].appendChild(fc_CSS);var fc_JS=document.createElement('script'); fc_JS.type='text/javascript'; fc_JS.defer=true;fc_JS.src=((fc_isSecured)?'https://d36mpcpuzc4ztk.cloudfront.net':'https://assets.chat.freshdesk.com')+'/js/visitor.js';(document.body?document.body:document.getElementsByTagName('head')[0]).appendChild(fc_JS);window.freshchat_setting= 'eyJ3aWRnZXRfc2l0ZV91cmwiOiJmb2V0cm9uc3VwcG9ydC5mcmVzaGRlc2suY29tIiwicHJvZHVjdF9pZCI6bnVsbCwibmFtZSI6IkZvZXRyb24iLCJ3aWRnZXRfZXh0ZXJuYWxfaWQiOm51bGwsIndpZGdldF9pZCI6IjY0ZWM1NzE1LTFhNDItNDdiMy04M2MyLWJhYjU4NWU4YzY5NCIsInNob3dfb25fcG9ydGFsIjpmYWxzZSwicG9ydGFsX2xvZ2luX3JlcXVpcmVkIjpmYWxzZSwiaWQiOjE0MDAwMDE5MDQ0LCJtYWluX3dpZGdldCI6dHJ1ZSwiZmNfaWQiOiJkY2Q2MjZmMzBkMzMxYzhjYzMzZDE0YWRjNmU5MWI2ZCIsInNob3ciOjEsInJlcXVpcmVkIjoyLCJoZWxwZGVza25hbWUiOiJGb2V0cm9uIiwibmFtZV9sYWJlbCI6Ik5hbWUiLCJtYWlsX2xhYmVsIjoiRW1haWwiLCJtZXNzYWdlX2xhYmVsIjoiTWVzc2FnZSIsInBob25lX2xhYmVsIjoiUGhvbmUgTnVtYmVyIiwidGV4dGZpZWxkX2xhYmVsIjoiVGV4dGZpZWxkIiwiZHJvcGRvd25fbGFiZWwiOiJEcm9wZG93biIsIndlYnVybCI6ImZvZXRyb25zdXBwb3J0LmZyZXNoZGVzay5jb20iLCJub2RldXJsIjoiY2hhdC5mcmVzaGRlc2suY29tIiwiZGVidWciOjEsIm1lIjoiTWUiLCJleHBpcnkiOjAsImVudmlyb25tZW50IjoicHJvZHVjdGlvbiIsImRlZmF1bHRfd2luZG93X29mZnNldCI6MzAsImRlZmF1bHRfbWF4aW1pemVkX3RpdGxlIjoiQ2hhdCBpbiBwcm9ncmVzcyIsImRlZmF1bHRfbWluaW1pemVkX3RpdGxlIjoiTGV0J3MgdGFsayEiLCJkZWZhdWx0X3RleHRfcGxhY2UiOiJZb3VyIE1lc3NhZ2UiLCJkZWZhdWx0X2Nvbm5lY3RpbmdfbXNnIjoiV2FpdGluZyBmb3IgYW4gYWdlbnQiLCJkZWZhdWx0X3dlbGNvbWVfbWVzc2FnZSI6IkhpISBIb3cgY2FuIHdlIGhlbHAgeW91IHRvZGF5PyIsImRlZmF1bHRfd2FpdF9tZXNzYWdlIjoiT25lIG9mIHVzIHdpbGwgYmUgd2l0aCB5b3UgcmlnaHQgYXdheSwgcGxlYXNlIHdhaXQuIiwiZGVmYXVsdF9hZ2VudF9qb2luZWRfbXNnIjoie3thZ2VudF9uYW1lfX0gaGFzIGpvaW5lZCB0aGUgY2hhdCIsImRlZmF1bHRfYWdlbnRfbGVmdF9tc2ciOiJ7e2FnZW50X25hbWV9fSBoYXMgbGVmdCB0aGUgY2hhdCIsImRlZmF1bHRfYWdlbnRfdHJhbnNmZXJfbXNnX3RvX3Zpc2l0b3IiOiJZb3VyIGNoYXQgaGFzIGJlZW4gdHJhbnNmZXJyZWQgdG8ge3thZ2VudF9uYW1lfX0iLCJkZWZhdWx0X3RoYW5rX21lc3NhZ2UiOiJUaGFuayB5b3UgZm9yIGNoYXR0aW5nIHdpdGggdXMuIElmIHlvdSBoYXZlIGFkZGl0aW9uYWwgcXVlc3Rpb25zLCBmZWVsIGZyZWUgdG8gcGluZyB1cyEiLCJkZWZhdWx0X25vbl9hdmFpbGFiaWxpdHlfbWVzc2FnZSI6Ik91ciBhZ2VudHMgYXJlIHVuYXZhaWxhYmxlIHJpZ2h0IG5vdy4gU29ycnkgYWJvdXQgdGhhdCwgYnV0IHBsZWFzZSBsZWF2ZSB1cyBhIG1lc3NhZ2UgYW5kIHdlJ2xsIGdldCByaWdodCBiYWNrLiIsImRlZmF1bHRfcHJlY2hhdF9tZXNzYWdlIjoiV2UgY2FuJ3Qgd2FpdCB0byB0YWxrIHRvIHlvdS4gQnV0IGZpcnN0LCBwbGVhc2UgdGVsbCB1cyBhIGJpdCBhYm91dCB5b3Vyc2VsZi4iLCJhZ2VudF90cmFuc2ZlcmVkX21zZyI6IllvdXIgY2hhdCBoYXMgYmVlbiB0cmFuc2ZlcnJlZCB0byB7e2FnZW50X25hbWV9fSIsImFnZW50X3Jlb3Blbl9jaGF0X21zZyI6Int7YWdlbnRfbmFtZX19IHJlb3BlbmVkIHRoZSBjaGF0IiwidmlzaXRvcl9zaWRlX2luYWN0aXZlX21zZyI6IlRoaXMgY2hhdCBoYXMgYmVlbiBpbmFjdGl2ZSBmb3IgdGhlIHBhc3QgMjAgbWludXRlcy4iLCJhZ2VudF9kaXNjb25uZWN0X21zZyI6Int7YWdlbnRfbmFtZX19IGhhcyBiZWVuIGRpc2Nvbm5lY3RlZCIsInZpc2l0b3JfY29icm93c2VfcmVxdWVzdCI6IkNhbiBhZ2VudCBjb250cm9sIHlvdXIgY3VycmVudCBzY3JlZW4/ICIsImNvYnJvd3Npbmdfc3RhcnRfbXNnIjoiWW91ciBzY3JlZW5zaGFyZSBzZXNzaW9uIGhhcyBzdGFydGVkIiwiY29icm93c2luZ19zdG9wX21zZyI6IllvdXIgc2NyZWVuc2hhcmluZyBzZXNzaW9uIGhhcyBlbmRlZCIsImNvYnJvd3NpbmdfY2FuY2VsX3Zpc2l0b3JfbXNnIjoiU2NyZWVuc2hhcmluZyBpcyBjdXJyZW50bHkgdW5hdmFpbGFibGUiLCJjYl92aWV3aW5nX3NjcmVlbl92aSI6IkFnZW50IGNhbiB2aWV3IHlvdXIgc2NyZWVuICIsImNiX2NvbnRyb2xsaW5nX3NjcmVlbl92aSI6IkFnZW50IGNhbiBjb250cm9sIHlvdXIgc2NyZWVuIiwiY2JfZ2l2ZV9jb250cm9sX3ZpIjoiQWxsb3cgYWdlbnQgdG8gY29udHJvbCB5b3VyIHNjcmVlbiIsImNvYnJvd3Npbmdfc3RvcF9yZXF1ZXN0IjoiRW5kIHlvdXIgc2NyZWVuc2hhcmluZyBzZXNzaW9uIiwic2l0ZV9pZCI6ImRjZDYyNmYzMGQzMzFjOGNjMzNkMTRhZGM2ZTkxYjZkIiwiYWN0aXZlIjp0cnVlLCJ3aWRnZXRfcHJlZmVyZW5jZXMiOnsid2luZG93X2NvbG9yIjoiIzc3Nzc3NyIsIndpbmRvd19wb3NpdGlvbiI6IkJvdHRvbSBSaWdodCIsIndpbmRvd19vZmZzZXQiOiIzMCIsIm1pbmltaXplZF90aXRsZSI6IkxldCdzIHRhbGshIiwibWF4aW1pemVkX3RpdGxlIjoiQ2hhdCBpbiBwcm9ncmVzcyIsInRleHRfcGxhY2UiOiJZb3VyIE1lc3NhZ2UiLCJ3ZWxjb21lX21lc3NhZ2UiOiJIaSEgSG93IGNhbiB3ZSBoZWxwIHlvdSB0b2RheT8iLCJ0aGFua19tZXNzYWdlIjoiVGhhbmsgeW91IGZvciBjaGF0dGluZyB3aXRoIHVzLiBJZiB5b3UgaGF2ZSBhZGRpdGlvbmFsIHF1ZXN0aW9ucywgZmVlbCBmcmVlIHRvIHBpbmcgdXMhIiwid2FpdF9tZXNzYWdlIjoiT25lIG9mIHVzIHdpbGwgYmUgd2l0aCB5b3UgcmlnaHQgYXdheSwgcGxlYXNlIHdhaXQuIiwiYWdlbnRfam9pbmVkX21zZyI6Int7YWdlbnRfbmFtZX19IGhhcyBqb2luZWQgdGhlIGNoYXQiLCJhZ2VudF9sZWZ0X21zZyI6Int7YWdlbnRfbmFtZX19IGhhcyBsZWZ0IHRoZSBjaGF0IiwiYWdlbnRfdHJhbnNmZXJfbXNnX3RvX3Zpc2l0b3IiOiJZb3VyIGNoYXQgaGFzIGJlZW4gdHJhbnNmZXJyZWQgdG8ge3thZ2VudF9uYW1lfX0iLCJjb25uZWN0aW5nX21zZyI6IldhaXRpbmcgZm9yIGFuIGFnZW50In0sInJvdXRpbmciOm51bGwsInByZWNoYXRfZm9ybSI6dHJ1ZSwicHJlY2hhdF9tZXNzYWdlIjoiV2UgY2FuJ3Qgd2FpdCB0byB0YWxrIHRvIHlvdS4gQnV0IGZpcnN0LCBwbGVhc2UgdGVsbCB1cyBhIGJpdCBhYm91dCB5b3Vyc2VsZi4iLCJwcmVjaGF0X2ZpZWxkcyI6eyJuYW1lIjp7InRpdGxlIjoiTmFtZSIsInNob3ciOiIyIn0sImVtYWlsIjp7InRpdGxlIjoiRW1haWwiLCJzaG93IjoiMiJ9LCJwaG9uZSI6eyJ0aXRsZSI6IlBob25lIE51bWJlciIsInNob3ciOiIwIn0sInRleHRmaWVsZCI6eyJ0aXRsZSI6IlRleHRmaWVsZCIsInNob3ciOiIwIn0sImRyb3Bkb3duIjp7InRpdGxlIjoiRHJvcGRvd24iLCJzaG93IjoiMCIsIm9wdGlvbnMiOlsibGlzdDEiLCJsaXN0MiIsImxpc3QzIl19fSwiYnVzaW5lc3NfY2FsZW5kYXIiOm51bGwsIm5vbl9hdmFpbGFiaWxpdHlfbWVzc2FnZSI6eyJ0ZXh0IjoiT3VyIGFnZW50cyBhcmUgdW5hdmFpbGFibGUgcmlnaHQgbm93LiBTb3JyeSBhYm91dCB0aGF0LCBidXQgcGxlYXNlIGxlYXZlIHVzIGEgbWVzc2FnZSBhbmQgd2UnbGwgZ2V0IHJpZ2h0IGJhY2suIiwidGlja2V0X2xpbmtfb3B0aW9uIjoiMCIsImN1c3RvbV9saW5rX3VybCI6IiJ9LCJwcm9hY3RpdmVfY2hhdCI6ZmFsc2UsInByb2FjdGl2ZV90aW1lIjoxNSwic2l0ZV91cmwiOiJmb2V0cm9uc3VwcG9ydC5mcmVzaGRlc2suY29tIiwiZXh0ZXJuYWxfaWQiOm51bGwsImRlbGV0ZWQiOmZhbHNlLCJvZmZsaW5lX2NoYXQiOnsic2hvdyI6IjEiLCJmb3JtIjp7Im5hbWUiOiJOYW1lIiwiZW1haWwiOiJFbWFpbCIsIm1lc3NhZ2UiOiJNZXNzYWdlIn0sIm1lc3NhZ2VzIjp7InRpdGxlIjoiTGVhdmUgdXMgYSBtZXNzYWdlISIsInRoYW5rIjoiVGhhbmsgeW91IGZvciB3cml0aW5nIHRvIHVzLiBXZSB3aWxsIGdldCBiYWNrIHRvIHlvdSBzaG9ydGx5LiIsInRoYW5rX2hlYWRlciI6IlRoYW5rIHlvdSEifX0sIm1vYmlsZSI6dHJ1ZSwiY3JlYXRlZF9hdCI6IjIwMTYtMDMtMzFUMDU6MTQ6MzEuMDAwWiIsInVwZGF0ZWRfYXQiOiIyMDE2LTA0LTAyVDA2OjAzOjA0LjAwMFoifQ==';</script>

<!--End Chat Script-->
</body>
</html>
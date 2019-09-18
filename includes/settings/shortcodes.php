<?php
if(function_exists('sola_t_register_pro')){
    echo submission_form_shortcode_row();
} else {
    $pro_link = "<a href=\"http://solaplugins.com/plugins/sola-testimonials/?utm_source=plugin&utm_medium=link&utm_campaign=sola_t_submission_form_shortcode\" target=\"_BLANK\">".__('Premium Version', 'sola_t')."</a>";
    echo "<tr>
            <th><label for=\"\">".__('Submit A Testimonial', 'sola_t')."</label></th>
            <td>        
                <p class=\"description\">".__("Allow your visitors to submit a testimonial on your website. Only in the $pro_link", 'sola_t')."</p>
            </td>
        </tr>";
}
?>
<tr>
    <td colspan="2">
        <hr/>
    </td>
</tr>
<tr>
    <th><label for=""><?php _e('Display A Single Testimonial', 'sola_t'); ?></label></th>
    <td>        
        <input type="text" readonly id="sola_testimonials_single_shortcode" value="[sola_testimonial id=1]"/>
        <p class="description"><?php _e('Show off a single tesimonial. Use the ID of the testimonial.', 'sola_t'); ?></p>
    </td>
</tr>
<tr>
    <td colspan="2">
        <hr/>
    </td>
</tr>
<tr>
    <th><label for=""><?php _e('Display All Testimonials', 'sola_t'); ?></label></th>
    <td>        
        <input type="text" readonly id="sola_testimonials_all_shortcode" value="[sola_t_all_testimonials]"/>
        <p class="description"><?php _e('Show off your raving reviews all on one page', 'sola_t'); ?></p>
    </td>
</tr>
<tr>
    <td colspan="2">
        <hr/>
    </td>
</tr>
<tr>
    <th><label for=""><?php _e('Display All Testimonials With Pagination', 'sola_t'); ?></label></th>
    <td>        
        <input type="text" readonly id="sola_testimonials_all_pagination_shortcode" value="[sola_t_all_testimonials per_page=2]" style='width: 300px;'/>
        <p class="description"><?php _e('Specify how many testimonials you would like per page', 'sola_t'); ?></p>
    </td>
</tr>
<tr>
    <td colspan="2">
        <hr/>
    </td>
</tr>
<?php
if(function_exists('sola_t_register_pro')){
    echo slider_shortcode_row();
} else {
    $pro_link = "<a href=\"http://solaplugins.com/plugins/sola-testimonials/?utm_source=plugin&utm_medium=link&utm_campaign=sola_t_slider_shortcode\" target=\"_BLANK\">".__('Premium Version', 'sola_t')."</a>";
    echo "<tr>
            <th><label for=\"\">".__('Display Testimonials In A Slider', 'sola_t')."</label></th>
            <td>        
                <p class=\"description\">".__("Show off your raving testimonials in a slider. Only in the $pro_link", 'sola_t')."</p>
            </td>
        </tr>";
}
?>
<tr>
    <td colspan="2">
        <hr/>
    </td>
</tr>
<?php
if(function_exists('sola_t_register_pro')){
    echo categories_shortcode_row();
} else {
    $pro_link = "<a href=\"http://solaplugins.com/plugins/sola-testimonials/?utm_source=plugin&utm_medium=link&utm_campaign=sola_t_categories_shortcode\" target=\"_BLANK\">".__('Premium Version', 'sola_t')."</a>";
    echo "<tr>
            <th><label for=\"\">".__('Display Testimonials Based On Category', 'sola_t')."</label></th>
            <td>        
                <p class=\"description\">".__("Display and group your testimonials in a category. Only in the $pro_link", 'sola_t')."</p>
            </td>
        </tr>";
}
?>
<script>
//Click to copy shortcode - BASIC Features
 jQuery(function($) {
    $(window).on("load", function() {

        //Pagination shortcode
        document.getElementById('sola_testimonials_all_pagination_shortcode').onclick = function() {
            this.select();
            document.execCommand('copy');
            var $tmp2 = jQuery('<span  width:100%; text-align:center;">Copied to Clipboard</span>');
            jQuery('#sola_testimonials_all_pagination_shortcode').after($tmp2);
            jQuery($tmp2).fadeIn();
                setTimeout(function(){ jQuery($tmp2).fadeOut(); }, 1000);
                setTimeout(function(){ jQuery($tmp2).remove(); }, 1500);
        }

        //Single Shortcode
        document.getElementById('sola_testimonials_single_shortcode').onclick = function() {
            this.select();
            document.execCommand('copy');
            var $tmp2 = jQuery('<span width:100%; text-align:center;">Copied to Clipboard</span>');
            jQuery('#sola_testimonials_single_shortcode').after($tmp2);
            jQuery($tmp2).fadeIn();
                setTimeout(function(){ jQuery($tmp2).fadeOut(); }, 1000);
                setTimeout(function(){ jQuery($tmp2).remove(); }, 1500);
        }

        //All testimonials shortcode
        document.getElementById('sola_testimonials_all_shortcode').onclick = function() {
            this.select();
            document.execCommand('copy');
            
            var $tmp2 = jQuery('<span  width:100%; text-align:center;">Copied to Clipboard</span>');
            jQuery('#sola_testimonials_all_shortcode').after($tmp2);
            jQuery($tmp2).fadeIn();
                setTimeout(function(){ jQuery($tmp2).fadeOut(); }, 1000);
                setTimeout(function(){ jQuery($tmp2).remove(); }, 1500);
        }
    });
});

//Click to copy shortcode - Pro Features
if(is_pro_active.pro_active == 'true'){
    jQuery(function($) {
        $(window).on("load", function() {

            //Testimonials Slider
            document.getElementById('sola_testimonials_slider_shortcode').onclick = function() {
                this.select();
                document.execCommand('copy');
                var $tmp2 = jQuery('<span  width:100%; text-align:center;">Copied to Clipboard</span>');
                jQuery('#sola_testimonials_slider_shortcode').after($tmp2);
                jQuery($tmp2).fadeIn();
                    setTimeout(function(){ jQuery($tmp2).fadeOut(); }, 1000);
                    setTimeout(function(){ jQuery($tmp2).remove(); }, 1500);
            }

            //Submit form shortcode
            document.getElementById('sola_testimonials_submit_form_shortcode').onclick = function() {
                this.select();
                document.execCommand('copy'); 
                var $tmp2 = jQuery('<span  width:100%; text-align:center;">Copied to Clipboard</span>');
                jQuery('#sola_testimonials_submit_form_shortcode').after($tmp2);
                jQuery($tmp2).fadeIn();
                    setTimeout(function(){ jQuery($tmp2).fadeOut(); }, 1000);
                    setTimeout(function(){ jQuery($tmp2).remove(); }, 1500);
            }

            //Slider Caegories shortcode
            document.getElementById('sola_testimonials_slider_cat_shortcode').onclick = function() {
                this.select();
                document.execCommand('copy'); 
                var $tmp2 = jQuery('<span  width:100%; text-align:center;">Copied to Clipboard</span>');
                jQuery('#sola_testimonials_slider_cat_shortcode').after($tmp2);
                jQuery($tmp2).fadeIn();
                    setTimeout(function(){ jQuery($tmp2).fadeOut(); }, 1000);
                    setTimeout(function(){ jQuery($tmp2).remove(); }, 1500);
            }

            //Categories Shortcode
            document.getElementById('sola_testimonials_all_cat_shortcode').onclick = function() {
                this.select();
                document.execCommand('copy'); 
                var $tmp2 = jQuery('<span  width:100%; text-align:center;">Copied to Clipboard</span>');
                jQuery('#sola_testimonials_all_cat_shortcode').after($tmp2);
                jQuery($tmp2).fadeIn();
 			        setTimeout(function(){ jQuery($tmp2).fadeOut(); }, 1000);
 			        setTimeout(function(){ jQuery($tmp2).remove(); }, 1500);
            }

        });

    });

}
</script>

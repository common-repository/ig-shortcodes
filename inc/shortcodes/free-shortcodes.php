<?php
/*************************************************
ACCORDION
*************************************************/
/* Tabs content*/
function ig_shortcodes_accordion_content($atts, $content = null) {
    /* Return Tabs */
    return '<ul class="ig-accordion">'.do_shortcode($content).'</ul>';

}
add_shortcode('ig_accordion_content', 'ig_shortcodes_accordion_content');

/* Tab single */
function ig_shortcodes_accordion($atts, $content = null) {
    
    // Attributes
    extract(shortcode_atts(array(
        'heading' => ''
    ), $atts));
    remove_all_filters( 'the_content' );
    return '
    <li>
        <a href="javascript:void(0)" class="js-accordion-trigger">'.$heading.'</a>
        <ul class="submenu">
            <li>
                <span class="content">' . $content . '</span>
            </li>
        </ul>
    </li>
    ';
}
add_shortcode('ig_accordion', 'ig_shortcodes_accordion');

/*************************************************
BADGES
*************************************************/
function ig_shortcodes_badge($atts, $content = null) {

    // Attributes
    extract(shortcode_atts(array(
        'style' => ''
        ), $atts));

    return '<div class="ig-badge"><span class="badge-'.$style.'">'.$content.'</span></div>';

}
add_shortcode('ig_badge', 'ig_shortcodes_badge');


/**************************************************
BUTTONS
*************************************************/
function ig_shortcodes_button( $atts, $content = null ) {
    
    // Attributes
    extract( shortcode_atts(
        array(
            'style' => '',
            'link' => '',
            'target' => '',
        ), $atts )
    );

    // Code
return '<a class="ig-button '. $style .'" href="'. $link .'" target="'. $target .'" >'.$content.'</a>';
}
add_shortcode( 'ig_button', 'ig_shortcodes_button' );

/*************************************************
CLEARFIX
*************************************************/
function ig_shortcodes_clearfix( $atts, $content = null ) {

    // Attributes
    extract( shortcode_atts(
        array(
        ), $atts )
    );

    // Code
return '<div style="clear:both;"></div>';
}
add_shortcode( 'ig_clearfix', 'ig_shortcodes_clearfix' );

/*************************************************
COLUMNS
*************************************************/
function ig_shortcodes_columns($atts, $content = null) {
    /* Return Tabs */
    return '<div class="ig-columns">'.do_shortcode($content).'</div>';

}
add_shortcode('ig_columns', 'ig_shortcodes_columns');

function ig_shortcodes_column( $atts, $content = null ) {

    // Attributes
    extract( shortcode_atts(
        array(
            'width' => ''
        ), $atts )
    );

    // Code
return '<div class="ig-col '.$width.'">'.$content.'</div>';
}
add_shortcode( 'ig_column', 'ig_shortcodes_column' );

/*************************************************
DIVIDER
*************************************************/
function ig_shortcodes_divider($atts, $content = null) {

    // Attributes
    extract(shortcode_atts(array(
        'style' => ''
        ), $atts));

    return '<span class="ig-divider '.$style.'"></span>';

}
add_shortcode('ig_divider', 'ig_shortcodes_divider');

/**************************************************
 NOTICE BOX
 *************************************************/
function ig_shortcodes_notice( $atts, $content = null ) {

    // Attributes
    extract( shortcode_atts(
        array(
            'style' => ''
        ), $atts )
    );

    // Code
return '<div class="ig-notice-'.$style .'"><span>'.$content.'</span></div>';
}
add_shortcode( 'ig_notice', 'ig_shortcodes_notice' );

/*************************************************
TABS
*************************************************/
/* Tabs content*/
function ig_shortcodes_tabs($atts, $content = null) {
    /* Return Tabs */
    return '<ul class="ig-accordion-tabs">'.do_shortcode($content).'</ul>';

}
add_shortcode('ig_tabs', 'ig_shortcodes_tabs');

/* Tab single */
function ig_shortcodes_tab($atts, $content = null) {

    // Attributes
    extract(shortcode_atts(array(
        'label' => ''
    ), $atts));
        remove_all_filters( 'the_content' );
    
    return '
    <li class="tab-header-and-content">
        <a href="javascript:void(0)" class="tab-link">' . $label . '</a>
    <div class="tab-content">
      ' . $content . '
    </div>
    </li>
    ';

}
add_shortcode('ig_tab', 'ig_shortcodes_tab');

/*************************************************
TOGGLE
*************************************************/
function ig_shortcodes_toggle($atts, $content = null) {

    // Attributes
    extract(shortcode_atts(array(
        'label' => ''
    ), $atts));
        remove_all_filters( 'the_content' );
    
    return '
    <div class="ig-expander">
    <a href="javascript:void(0)" class="expander-trigger expander-hidden">'.$label.'</a>
    <div class="expander-content">
    '.$content.'
    </div>
    </div>
  ';

}
add_shortcode('ig_toggle', 'ig_shortcodes_toggle');

/*************************************************
GOOGLE MAPS
*************************************************/
function ig_shortcodes_map($atts, $content = null){ 
    
    // Attributes
    extract(shortcode_atts(array(
        'height' => '',
        'width' => '',
        'coordinates' => '',
        'address' => '',
        ), $atts));
        ob_start(); ?>

<div class="ig-map">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:<?php echo $height;?>;">
<div id="gmap_canvas" style="height:<?php echo $height;?>; width:<?php echo $width;?>"></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>

<script type="text/javascript">
function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(<?php echo $coordinates;?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?php echo $coordinates;?>)});infowindow = new google.maps.InfoWindow({content:"<b><?php echo $blog_title = get_bloginfo('name'); ?></b></br><?php echo $address; ?>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode('ig_map', 'ig_shortcodes_map');
/*************************************************
Progress bar
*************************************************/
function ig_shortcodes_progress_bar( $atts ) {

    // Attributes
    extract( shortcode_atts(
        array(
        'style' => 'success',
        'width' => '80'
        ), $atts )
    );
    ob_start(); ?>
    <div class="ig-progress-bar">
        <span class="meter <?php esc_attr_e($style); ?>" style="width:<?php esc_attr_e($width); ?>%"></span>
    </div>
<?php
    $output = ob_get_clean();
    return $output;
 }
add_shortcode( 'ig_progress_bar', 'ig_shortcodes_progress_bar' );

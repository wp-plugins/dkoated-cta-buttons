<?php
/**
 * Plugin name: DKOATED CTA Buttons
 * Plugin URI: http://DKOATED.com/dkoated-cta-buttons-wordpress-plugin/
 * Author: David Klein
 * Author URI: http://DKOATED.com
 * Version: 1.0.0
 * Description: Add beautiful call to action buttons through shortcodes to your WordPress. Optionally change links to "nofollow" and changing button colors and styles is actually super simple!<br /><code>&#91;DKB url="http://dkoated.com" text="Your headline here" desc="Your subheadline here" type="large|normal|small|extrasmall" color="black|white|grey|red|green|blue|orange|yellow|pink|brown" opennewwindow="yes|no" nofollow="yes|no"&#93;</code>.
 */

if(!is_admin()) {
	define('DKOATED_CTA_BUTTONS_VERSION', '1.0.0');

	$css_url = plugins_url(basename(dirname(__FILE__)) . '/css/dkoated-cta-buttons.css');

	/* Add CSS to WordPress */
	wp_register_style('dkoated-cta-buttons-for-wordpress', $css_url, array(), DKOATED_CTA_BUTTONS_VERSION, 'screen');
	wp_enqueue_style('dkoated-cta-buttons-for-wordpress');

	/* @param $atts */
	/* These are the attributes */
	function sc_DKOATEDCTABUTTONS($atts) {
		extract(shortcode_atts(array(
			"url" => '',
			"text" => '',
			"desc" => '',
			"type" => '',
			"color" => '',
			"opennewwindow" => '',
			"nofollow" => ''
		), $atts));

		if ($type == '' OR $type == 'large'){$type = 'large';}
			elseif ($type == 'normal'){$type = 'normal';}
			elseif ($type == 'small'){$type = 'small';}
			elseif ($type == 'extrasmall'){$type = 'extrasmall';}
		if ($color == '' OR $color == 'black'){$color = '';}
			elseif ($color == 'grey'){$color = 'grey ';}
			elseif ($color == 'white'){$color = 'white ';}
			elseif ($color == 'red'){$color = 'red ';}
			elseif ($color == 'orange'){$color = 'orange ';}
			elseif ($color == 'pink'){$color = 'pink ';}
			elseif ($color == 'green'){$color = 'green ';}
			elseif ($color == 'blue'){$color = 'blue ';}
			elseif ($color == 'yellow'){$color = 'yellow ';}
			elseif ($color == 'brown'){$color = 'brown ';}
		if ($desc == ''){$desc = '';}
			elseif ($desc != ''){$desc = '<span><br /><em>' . $desc . '</em></span>';}
		if ($opennewwindow == 'yes'){$opennewwindow = ' target="_blank"';}
			elseif ($opennewwindow == '' OR $opennewwindow == 'no'){$opennewwindow = '';}
		if ($nofollow == 'yes'){$nofollow = ' rel="nofollow"';}
			elseif ($nofollow == '' OR $nofollow == 'no'){$nofollow = '';}

		/* @var string */
		/* This is the output */
		$var_sHTML = '';
		$var_sHTML .= '<a class="' . $type . ' ' . $color . 'dkoatedbutton" ' . $styleadd . ' href="' . $url . '" title="' . $text . '" ' . $opennewwindow . ' ' . $nofollow .'>' . $text . $desc . '</a>';
		return $var_sHTML;
	}

	/* Add Shortcode to WordPress */
	add_shortcode('DKB', 'sc_DKOATEDCTABUTTONS');
}
?>
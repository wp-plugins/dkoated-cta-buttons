=== DKOATED CTA Buttons ===
Contributors: David Klein
Donate link: http://DKOATED.com/donate
Tags: call to action, download, buy, register, button, buttons, shortcode, shortcodes, css
Requires at least: 2.9.2
Tested up to: 3.3
Stable tag: 1.1.0

Add beautiful and SEO ready call to action buttons through shortcodes to your WordPress. Simple usage, no external resources, no javascript and no images necessary!

== Description ==
Add beautiful and SEO ready call to action buttons through shortcodes to your WordPress. Simple usage, no external resources, no javascript and no images necessary!<br />
Choose between ten colors for your buttons: Black, White, Grey, Red, Blue, Green, Yellow, Pink, Brown and Orange.<br />
Choose if you want your button to be followed by search engines or you prefer the button to be nofollow.<br />
Choose the size of the button and optionally the minimum width.<br />
Choose a different link title text to optimize your SEO.<br />
Choose if you want the button to open the link in a new browser window (or tab).<br /><br />
<strong>Usage:</strong><br />
<code>&#91;DKB url="http://dkoated.com/" text="Your headline here" desc="Your subheadline here" title="Your SEO title for the link" type="large|normal|small|extrasmall" color="black|white|grey|red|green|blue|orange|yellow|pink|brown" width="100" opennewwindow="yes|no" nofollow="yes|no"&#93;</code>.

== Installation ==
You can either use the WordPress built-in installer and upgrader or you can install the plugin manually.

<strong>Automatic Installation:</strong>
1. Search for 'DKOATED CTA Buttons' through the built-in Plugin menu in WordPress.
2. Click on 'Install', then 'Activate' the Plugin.

<strong>Manual Installation:</strong>
1. Download the plugin and extract the Zip archive locally.
2. Upload the extracted folder 'dkoated-cta-buttons' to your '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Screenshots ==
Visit <a href="http://DKOATED.com/dkoated-cta-buttons-wordpress-plugin/" title="DKOATED CTA Buttons Plugin for WordPress">DKOATED CTA Buttons WordPress plugin page</a> for screenshots and working demos.

== Changelog ==
= 1.1.0 =
* New fallback for attribute "url": If left empty or unspecified "url" now defaults to your WordPress homepage URL.
* New fallback for attribute "text": If left empty or unspecified "text" now defaults to the URL of the link.
* New feature: Specify a fixed button width in pixels through the attribute "width".
* New feature: Add your own link-title (good for SEO). If left empty or unspecified, the "title"-attribute defaults to the "text"-attribute.
* Fixed some line-height issues with buttons that make use of sub-headlines.


= 1.0.0 =
* Initial Release
* WordPress 3.3 ready

== Frequently Asked Questions ==
<strong>Q:</strong> How do I use the plugin?<br />
<strong>A:</strong> Easy: Just add the following code to either a post or page: <code>&#91;DKB url="http://dkoated.com/" text="Your headline here" desc="Your subheadline here" title="Your SEO title for the link" type="large|normal|small|extrasmall" color="black|white|grey|red|green|blue|orange|yellow|pink|brown" width="100" opennewwindow="yes|no" nofollow="yes|no"&#93;</code>. As you may see in the code, there are many colors and some options to choose from. Just remove the ones you don't want.<br /><br />
<strong>Q:</strong> But do I need to add that WHOLE thing?<br />
<strong>A:</strong> No. The only required attribute fields for the shortcode is the URL. That means, the minimum code to use is: <code>&#91;DKB url="http://dkoated.com/"&#93;</code>. I highly recommend to at least also use the "text"-attribute: <code>&#91;DKB url="http://dkoated.com/" text="Your headline here"&#93;</code>. Everything else, such as the attribute fields "title", "type", "color", "width", "opennewwindow" and "nofollow" are optional and if they aren't specified these attribute fields will get their respective default setting.<br /><br />
<strong>Q:</strong> What are the default attribute fields settings?<br />
<strong>A:</strong> The "url" is really the only required field. If you leave others empty or don't specify them at all, the will default. The default setting for "url" is your WordPress homepage URL, "text" defaults to the URL address, if "desc" is blank, meaning a button will be generated without a sub-headline. "type" defaults to the setting "normal", "color" defaults to "black", "opennewwindow" defaults to "no" (opens in the same browser window) and "nofollow" defaults to "no", meaning the link will be followed by search engines.<br /><br />
<strong>Q:</strong> Can I use just some attribute fields?<br />
<strong>A:</strong> Yes. The only required attribute field for the shortcode is URL. If you want to let's say only specify the "nofollow" attribute, you would need to use this code: <code>&#91;DKB url="http://dkoated.com/" text="Your headline here" nofollow="yes"&#93;</code>.<br /><br />
<strong>Q:</strong> The buttons look somewhat fishy?<br />
<strong>A:</strong> If you are using a webkit-based browser such as Safari or Chrome and you have the plugin WP-Minify installed, you have to explicitly exclude the file 'dkoated-cta-buttons.css' from minification within the WP-Minify options.<br /><br />
<strong>Q:</strong> What's up with the "size" attribute?<br />
<strong>A:</strong> Specify the exact width of the button in pixels. Just add a number (without 'px') and watch the button grow (or get smaller).<br /><br />
<strong>Q:</strong> I am having massive problems here. Please help!<br />
<strong>A:</strong> Head over to http://DKOATED.com/dkoated-cta-buttons-wordpress-plugin/ and leave some feedback. I'll try to help out as much as I can, alright? ;)

== Upgrade Notice ==
Just upgrade the plugin.
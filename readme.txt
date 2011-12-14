=== DKOATED CTA Buttons ===
Contributors: David Klein
Donate link: http://DKOATED.com/donate
Tags: call to action, download, buy, register, button, buttons, shortcode, shortcodes, css
Requires at least: 2.9.2
Tested up to: 3.3
Stable tag: 1.0.0

Add beautiful call to action buttons through shortcodes to your WordPress. Changing buttons colors and styles are super simple!

== Description ==

Add beautiful call to action buttons through shortcodes to your WordPress. Optionally change links to "nofollow" and changing button colors and styles is actually super simple!<br />There are ten colors to choose from: Black, White, Grey, Red, Blue, Green, Yellow, Pink, Brown and Orange.<br /><code>&#91;DKB url="http://dkoated.com/" text="Your headline here" desc="Your subheadline here" type="large|normal|small|extrasmall" color="black|white|grey|red|green|blue|orange|yellow|pink|brown" opennewwindow="yes|no" nofollow="yes|no"&#93;</code>.

== Installation ==

You can either use the WordPress built-in installer and upgrader or you can install the plugin manually.

<strong>Automatic Installation:</strong>
1. Search for 'DKOATED CTA Buttons' through the 'Add new' menu
2. Click on 'Install' and 'Activate' the Plugin

<strong>Manual Installation:</strong>
1. Upload the plugin to your /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==
Visit <a href="http://DKOATED.com/dkoated-cta-buttons-wordpress-plugin/" title="DKOATED CTA Buttons Plugin for WordPress">DKOATED CTA Buttons</a> WordPress Plugin page for screenshots and a demo.

== Changelog ==

= 1.0.0 =
* Initial Release
* WordPress 3.3 ready

== Frequently Asked Questions ==

<strong>Q:</strong> How do I use the plugin?<br />
<strong>A:</strong> Easy: Just add the following code to either a post or page: <code>&#91;DKB url="http://dkoated.com/" text="Your headline here" desc="Your subheadline here" type="large|normal|small|extrasmall" color="black|white|grey|red|green|blue|orange|yellow|pink|brown" opennewwindow="yes|no" nofollow="yes|no"&#93;</code>. As you may see in the code, there are many colors and some options to choose from. Just remove the ones you don't want.<br /><br />

<strong>Q:</strong> But do I need to add that WHOLE thing?<br />
<strong>A:</strong> No. The only required attribute fields for the shortcode are URL and TEXT. That means, the minimum code to use is: <code>&#91;DKB url="http://dkoated.com/" text="Your headline here"&#93;</code>. Everything else, such as the attribute fields "type", "color", "opennewwindow" and "nofollow" are optional and if they aren't specified these attribute fields will get their respective default setting.<br /><br />

<strong>Q:</strong> What are the default attribute fields settings?<br />
<strong>A:</strong> The "url" and "text" are required fields. That means, they will not default. If you leave these empty or don't specify them at all, the will stay blank. The default setting for "desc" is blank, meaning a button will be generated without a sub-headline. "type" defaults to the setting "normal", "color" defaults to "black", "opennewwindow" defaults to "no" (opens in the same browser window) and "nofollow" defaults to "no", meaning the link will be followed by search engines.<br /><br />

<strong>Q:</strong> Can I use just some attribute fields?<br />
<strong>A:</strong> Yes. The only required attribute fields for the shortcode are URL and TEXT. If you want to let's say only specify the "nofollow" attribute, you would need to use this code: <code>&#91;DKB url="http://dkoated.com/" text="Your headline here" nofollow="yes"&#93;</code>.<br /><br />

<strong>Q:</strong> The buttons look somewhat fishy?<br />
<strong>A:</strong> If you are using a webkit-based browser such as Safari or Chrome and you have the plugin WP-Minify installed, you have to explicitly exclude the file 'dkoated-cta-buttons.css' from minification within the WP-Minify options.<br /><br />

<strong>Q:</strong> I am having massive problems here. Please help!<br />
<strong>A:</strong> Head over to http://DKOATED.com/dkoated-cta-buttons-wordpress-plugin/ and leave some feedback. I'll try to help out as much as I can, alright? ;)

== Upgrade Notice ==

Just upgrade the plugin.
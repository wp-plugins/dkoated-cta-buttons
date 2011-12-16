=== DKOATED CTA Buttons ===
Contributors: David Klein
Donate link: http://DKOATED.com/donate
Tags: call to action, download, buy, register, button, buttons, shortcode, shortcodes, css
Requires at least: 2.9.2
Tested up to: 3.3
Stable tag: 1.1.1

Add beautiful and SEO ready call to action buttons through shortcodes to your WordPress. Simple usage, no external resources, no javascript and no images necessary!

== Description ==
Add beautiful and SEO ready call to action buttons through shortcodes to your WordPress. Simple usage, no external resources, no javascript and no images necessary! Just pure CSS!<br /><br />
<ul>
	<li>Ten colors to choose from: Black, White, Grey, Red, Blue, Green, Yellow, Pink, Brown and Orange</li>
	<li>No javascript, no external libraries needed (such as jQuery, Modernizr, etc.)</li>
	<li>No images needed, just pure CSS</li>
	<li>Search engine optimized buttons: Fully crawlable, W3C valid code, Nofollow or Follow links and link-titles</li>
	<li>Dynamically sets height and width according to your theme's link font and base size</li>
	<li>Possibility to manually override the width of the button</li>
	<li>Open your links in a new window (or tab) or have them open links in the same browser window</li>
	<li>Simple usage, but with optional advanced settings</li>
</ul>
<br />
<strong>Simple Usage:</strong>
<code>&#91;DKB url="http://dkoated.com/" text="Your headline here" type="large|normal|small|extrasmall" color="black|white|grey|red|green|blue|orange|yellow|pink|brown"&#93;</code>.<br /><br />
<strong>Advanced Usage:</strong>
<code>&#91;DKB url="http://dkoated.com/" text="Main Button Text" desc="Sub-headline of button" title="Link SEO title" type="large|normal|small|extrasmall" color="black|white|grey|red|green|blue|orange|yellow|pink|brown" width="100" opennewwindow="yes|no" nofollow="yes|no"&#93;</code>.<br /><br />
<strong>Settings help:</strong><br />
<ul>
	<li><strong>url=""</strong>: Requires a full link, including <em>http://</em> or <em>https://</em></li>
	<li><strong>text=""</strong>: Displays as main text of the button</li>
	<li><strong>desc=""</strong>: If set, displays as the sub-headline of the button</li>
	<li><strong>title=""</strong>: If set, text displays as the hover popup and allows to include more keywords for search engine optimization</li>
	<li><strong>type=""</strong>: Renders the button in different sizes. Choose from either "large", "normal", "small" or "extrasmall".</li>
	<li><strong>color=""</strong>: Renders the button in different colors. Choose from either "black", "white", "grey", "red, "blue", "green", "yellow", "pink", "brown" or "orange"</li>
	<li><strong>width=""</strong>: If set, renders the button with a specific width</li>
	<li><strong>opennewwindow=""</strong>: Forces the link to open in a new window or in the same window. Choose from either "yes" or "no"</li>
	<li><strong>nofollow=""</strong>: Forces search engines to either follow the link or to ignore the link, thus not visiting the links URL</li>
</ul>

== Installation ==
You can either use the WordPress built-in installer and upgrader or you can install the plugin manually.

<strong>Automatic Installation:</strong>
<ol>
	<li>Search for 'DKOATED CTA Buttons' through the built-in Plugin menu in WordPress</li>
	<li>Click on 'Install', then click on 'Activate' (or 'Activate plugin')</li>
</ol>

<strong>Manual Installation:</strong>
<ol>
	<li>Download the plugin and extract the Zip archive locally</li>
	<li>Upload the extracted folder 'dkoated-cta-buttons' to your '/wp-content/plugins/' directory</li>
	<li>Activate the plugin through the 'Plugins' menu in WordPress</li>
</ol>

== Screenshots ==
Visit <a href="http://DKOATED.com/dkoated-cta-buttons-wordpress-plugin/" title="DKOATED CTA Buttons Plugin for WordPress">DKOATED CTA Buttons WordPress plugin page</a> for screenshots and working demos.

== Changelog ==
= 1.1.1 =
<ul>
	<li>Minified some more sourcecode for performance optimizations</li>
	<li>Minified CSS for max. compatibility and performance optimization</li>
	<li>New readme.txt with advanced attributes help</li>
	<li>If "width" is specified, the plugin now checks if the value is properly inserted (only numeric without 'px')</li>
	<li></li>
</ul>

= 1.1.0 =
<ul>
	<li>New fallback for attribute "url": If left empty or unspecified "url" now defaults to your WordPress homepage URL</li>
	<li>New fallback for attribute "text": If left empty or unspecified "text" now defaults to the URL of the link</li>
	<li>New feature: Specify a fixed button width in pixels through the attribute "width"</li>
	<li>New feature: Add your own link-title (good for SEO). If left empty or unspecified, the "title"-attribute defaults to the "text"-attribute</li>
	<li>Fixed some line-height issues with buttons that make use of sub-headlines</li>
</ul>

= 1.0.0 =
<ul>
	<li>Initial Release</li>
	<li>WordPress 3.3 ready</li>
</ul>

== Frequently Asked Questions ==
<strong>How do I use the plugin?</strong><br />
Easy: Just add the following code to either a post or page: <code>&#91;DKB url="http://dkoated.com/" text="Main Button Text" desc="Sub-headline of button" title="Link SEO title" type="large|normal|small|extrasmall" color="black|white|grey|red|green|blue|orange|yellow|pink|brown" width="100" opennewwindow="yes|no" nofollow="yes|no"&#93;</code>. As you may see in the code, there are many options to choose from. Just remove the ones you don't want. All options you choose not to use, will default to their default settings.<br />

<strong>But do I need to add that WHOLE thing?</strong><br />
No. Actually there are no required attribute fields for the shortcode. Theoretically, the minimum code you need to use is: <code>&#91;DKB&#93;</code>, but that wouldn't make a lot of sense would it? I highly recommend to at least use the "url" and "text"-attributes: <code>&#91;DKB url="http://dkoated.com/" text="Your headline here"&#93;</code>. Everything else, such as the attribute fields "title", "type", "color", "width", "opennewwindow" and "nofollow" are optional and if unspecified, these attribute fields will default to their default setting.<br />

<strong>What are the default settings?</strong><br />
<ul>
	<li>"url" defaults to your WordPress homepage URL</li>
	<li>"text" defaults to the "url" attribute</li>
	<li>"desc" defaults to nothing, so a button without sub-headline will be rendered</li>
	<li>"type" defaults to "normal"</li>
	<li>"color" defaults to "black"</li>
	<li>"opennewwindow" defaults to "no" (opens in the same browser window)</li>
	<li>"nofollow" defaults to "no", meaning the link will be followed by search engines</li>
</ul><br />

<strong>Can I use just some attribute fields?</strong><br />
Yes. If you want to let's say only specify the "width" and "nofollow" attributes, you would use this code: <code>&#91;DKB url="http://dkoated.com/" text="Your headline here" width="200" nofollow="yes"&#93;</code>. All other unspecified attributes will default to their default settings.<br />

<strong>The buttons look all messed up! What's wrong?</strong><br />
If you are using a webkit-based browser such as Safari or Chrome and you have the plugin WP-Minify installed, you have to explicitly exclude the file 'dkoated-cta-buttons.css' from minification within the WP-Minify options. The css file itself is already optimized and would not benefit from a minification anyway (perhaps by only a few bytes).<br />

<strong>What's up with the "size" attribute?</strong><br />
Specify the exact width of the button in pixels. Just add a number (without 'px') and watch the button grow (or get smaller). Be cautious though, the specified size will, no matter what, be set and displayed. If you specify a longer text to be displayed within the button through either "text" or "desc", the text will be cut off if the width of the button is smaller.<br />

<strong>I am having massive problems here. Please help!</strong><br />
Head over to http://DKOATED.com/dkoated-cta-buttons-wordpress-plugin/ and leave some feedback. I'll try to help out as much as I can, alright? ;)

== Upgrade Notice ==
Just upgrade your plugin.
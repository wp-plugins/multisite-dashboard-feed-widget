=== Multisite Dashboard Feed Widget ===
Contributors: senlin
Donate link: http://senl.in/PPd0na
Tags: multisite, dashboard, feed, widget, admin, rss
Requires at least: 3.1.2
Tested up to: 3.5
Stable tag: 1.3
License: GPLv2 or later

Shows the latest Posts from the main site of a multisite install in the top of the Dashboard of the sites hanging under the multisite install.

== Description ==

With the arrival of WordPress version 3.1.2 all of a sudden the Dashboard Feed on Multisite had disappeared. A few others noticed this too, but nobody had any solutions. That is the reason why I made this plugin.<br /> 
By default it shows the titles (and links to) the 3 latest Posts of the Main Site (blog_id=1) in a box with a yellow background which shows as the first available widget in the dashboard of all sites hanging under the Multisite.

As this is my first plugin, I have not yet included an options page. Actually there are not that many variables anyway. But making options available is on the TO-DO list.

The default settings are:<br />
- the plugin automatically takes the RSS Feed of the main site in the WordPress Multisite install (blog_id=1)<br />
- the default number of RSS items is 3<br />
- the standard title of the widget box is "Recent Updates"

The plugin comes localized for use on sites other than the English language and/or on bi/multilingual websites. In the languages folder you will find the .po, .pot and .mo files. For now there is only one line, but when I get around to do the options page, that will of course become more.

== Installation ==

If you can live with the default settings, then follow step 1-3 below. If you want to change the default settings, skip step 1-3 and read further below them.

1. Upload `multisite-dashboard-feed-widget.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Network activate the plugin in your Network Admin (`yoursite.com/wp-admin/network/`)

If you would like to change the RSS Feed address, open `msrss.php` and delete line 2. Then change line 3 into:
`$rss = fetch_feed('http://yourdomain.com/feed/');`

If you would like to change the number of RSS items, open `msrss.php` and edit the number in line 6.

If you would like to change the title from "Recent Updates" to something else, open `msdbfeed.php` and change the name in line 44.

After editing the file(s), you can follow step 1-3 above to install the plugin.

== Frequently Asked Questions ==

= Can I use this plugin also on a single WordPress install? =

You could, but you'd probably be better off by installing the [Dashboard Feed Widget](http://wordpress.org/extend/plugins/dashboard-feed-widget/) plugin that I released in August 2012. That plugin actually comes with its own Settings page too.

== Screenshots ==

1. Siteadmin Dashboard after installation.

== Changelog ==

= 1.3 =
* Adjusted FAQ

= 1.2.3 =
* Changed compatibility to WP 3.4.1

= 1.2.2 =
* Resave to get last updated right

= 1.2.1 =
* Tested on WordPress version 3.3, works

= 1.2 =
* Messed up uploading and versioning
* Added Screenshot

= 1.0 =
* First version (stable)

== Upgrade Notice ==

= 1.2.1 =
* Tested on WordPress version 3.3, works

= 1.0 =
First release

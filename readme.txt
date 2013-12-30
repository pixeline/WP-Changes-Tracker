=== WP Changes Tracker ===
Contributors: pixeline 
Donate link: http://goo.gl/7L2ua
Tags: changelog,history,track,changes,revisions,log
Requires at least: 2.9.2
Tested up to: 3.4.3
Stable tag: trunk


Maintain a log of all themes, plugins and wordpress changes.


== Description ==

Ever found yourself in the situation where you updated a series of plugins with no apparent issue, only to find out a few days later that <em>something</em> went terribly wrong... But what? Which plugins did i upgrade? Until now, you had to rely on your own note taking or memory.

This plugin keeps track of all changes made to your wordpress structure: core, network, plugins and options, for now. Themes will come soon.

Since version 2.0.0, the log can be exported as .csv. 

Please <a href="http://wordpress.org/extend/plugins/wp-changes-tracker/">rate the plugin</a> if you like it.
Thanks, 
<a href="http://www.pixeline.be">pixeline</a>

= Usage = 

Nothing special. Activate the plugin and you're done.

== Installation ==

1. Extract the zip file 
2. Drop the contents in the wp-content/plugins/ directory of your WordPress installation 
3. Activate the Plugin from Plugins page.
4. Go to Settings > WP Changes Tracker to view the log.

== Credits ==

Special thanks to toscho for <a href="http://wordpress.stackexchange.com/questions/53413/deactivated-plugin-hook-get-the-name-of-the-plugin/53414">putting me on the right tracks</a>

Thanks also to:
- This plugin template : http://soderlind.no/archives/2010/03/04/wordpress-plugin-template/
- the jquery plugin: dataTables _ http://datatables.net/
	
Long live open source, Heil to the helpful souls!

== Changelog ==

= 2.0.3 =
- fixed a typo provoquing a js error.

= 2.0.2 = 
- remove deprecated javascript.
- remove reference to external datatables.js and instead have it served locally.

= 2.0.1 =
- as the log can be huge, added a few ini_set() to increase the chance that downloading the log does not fail 500.

= 2.0.0 =
- Added the possibility to download your log file as .csv (experimental)
- Added an option to completely erase the log (You get a warning beforehand).

= 1.1.2 =
- Reduced the amount of log items shown by default (see <a href="http://wordpress.org/support/topic/plugin-wp-changes-tracker-too-many-db-results-and-bloated-table?replies=2#post-3102869">this thread</a> for context.)
- In some cases, the javascript responsible for datatables would fail. Fixed.
- From now on, user will be able to choose if the log should keep a trace of an option 's value before it was changed. If active, the log will be much heavier but will contain all details useful for tracing down a problem. Defaulted to false.

= 1.1.1 =
- Fixed a basic implementation of the plugin in Multisites mode. (Only available to network admin for now)

= 1.1 =
- Started adding a lot Core and Network (multisite) event logging.
- Improved logging info: now showing what value(s) changed using array_diff
- dataTables script finetuning
- Fixed the DataTables option from only working after manual refresh.

= 1.0.0. = 
Initial release. Tracks plugins and option changes.
Dashboard widget available.

== Screenshots ==
1. The changelog as a filterable/sortable/scrollable table.

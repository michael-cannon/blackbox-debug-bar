=== BlackBox Debug Bar ===
Contributors: gwin,comprock
Donate link: http://ditio.net/contact/
Tags: debugging, debug bar
Requires at least: 3.0.0
Tested up to: 3.6.0
Stable tag: trunk
License: GPLv2 or later

BlackBox is a plugin for plugin and theme developers. It collects and displays useful debug information (errors, executed queries, globals, profiler).

== Description ==

BlackBox is symfony like unobstrusive debug bar attached to the top of the browser window.

How can it help you with development:

1. Instantly inspect global variables (GET, POST, COOKIE, SERVER)
2. Debug both frontend and admin area
3. Executed MySQL queries and time it took to execute each query (useful for finding slow queries)
4. Profiler for measuring performance of your plugins and themes
5. Errors occurred when loading WordPress page
6. Displays active WordPress constants

= Notes =
The icons are property of http://www.gentleface.com/free_icon_set.html, used on Creative Commons Attribution-NonCommercial license.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload plugin to `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!

== Frequently Asked Questions ==

Request [support](http://wordpress.org/support/plugin/blackbox-debug-bar).

== Screenshots ==

1. Glabal variables foramted using var_export() function, syntax coloring using awesome highlight.js library (75% zoom) 
2. Profiler tab. Displays checkpoint name, time passed since profiler start and current memory usage (75% zoom) 
3. SQL tab. Displays each query execution time and the executed queries. Syntax highlighting using highlight.js library (75% zoom) 
4. Errors tab. Displays error type and the error message. If the error occured more then once  its type is displayed as "Notice (X)" where X is the number of error occurances.

== Changelog ==

* Update readme.txt
* Add WordPress constants

== Upgrade Notice ==

* TBD

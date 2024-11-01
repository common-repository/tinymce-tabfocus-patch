=== Plugin Name ===
Contributors: jbeeler 
Tags: posts, tinymce, tabfocus, tab character, tab 
Requires at least: 2.8
Tested up to: 2.9.1
Stable tag: 1.1

Disables TinyMCE plugin Tabfocus thereby allowing tab characters to be typed into posts.

== Description ==

The TinyMCE Tabfocus Patch is a WordPress plugin which disables TinyMCE plugin Tabfocus thereby allowing tab characters to be typed into posts.

While attempting to write several posts including blocks of code I realized that TinyMCE was stripping out all the tab characters I attempted to type. Although I could type tab characters in HTML mode, switching between HTML and Visual removed the tab characters, infuriating me. I use CodeColorer for code coloring, and as the plugin also converts tabs to non-blocking spaces automatically I don't want tab characters that I paste in to get stripped.

After searching for the cause of this issue I realized that the cause was the tabfocus TinyMCE plugin. Rather than going into post.php and manually removing the TinyMCE plugin from the list of plugins to be automatically loaded, I wrote this WordPress to handle it for me.

This plugin should work with TinyMCE, TinyMCE Advanced, and most other TinyMCE mods out there.

Special thanks to Mike Walker's TinyMCE Entities Patch which provided the basis for understanding how to hook the necessary section of code to solve the problem.

== Installation ==

Installation Instructions:

1. Download the zip file for the plugin
2. Upload the zip file's contents into your WordPress installation's plugin directory.
4. From the **Plugin Management** page, activate the **TinyMCE Tabfocus Patch** plugin.

   
== Frequently Asked Questions ==

= What functionality is gained from this plugin? =

You can now type tab characters in TinyMCE and not have them stripped out when you post/switch from Visual to HTML mode.

= What functionality is lost from this plugin? =

You can no longer tab in/out of the TinyMCE editor.  

== Screenshots ==

There are no screenshots for this plugin.   
   
== Changelog ==

**Changes in version 1.1**

* Corrected bug which prevented other TinyMCE plugins from loading

**Changes in version 1.0**

* Initial Release.
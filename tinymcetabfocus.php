<?php
/*
    Plugin Name: TinyMCE Tabfocus Patch
    Plugin URI: http://www.optictheory.com/tinymce-tabfocus-patch/
    Description: Prevents the Tabfocus TinyMCE plugin from loading. This will allow for the typing of tab characters (for example, in code) into TinyMCE.   
    Version: 1.1
    Author: John Beeler
    Author URI: http://www.optictheory.com
*/

/*  Copyright 2010  John Beeler  (email : jbwp@optictheory.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* A special thanks to Mike English for the TinyMCE Entities Patch which provided insight into how to hook the necessary functions in
 WordPress */
	
add_filter('tiny_mce_before_init', 'kill_tinymce_tabfocus_plugin');


/**
 * Searches the list of TinyMCE plugins for 'tabfocus' and removes it when found. 
 *
 * @param array $initArray array of TinyMCE initialization parameters
 * @return updated array
 */
function kill_tinymce_tabfocus_plugin($initArray) {
    $initArray['plugins']=preg_replace("|[,]+tabfocus|i","",$initArray['plugins']);
    return $initArray;
}
?>
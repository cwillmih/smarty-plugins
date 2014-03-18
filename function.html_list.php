<?php

/**
 *  Smarty {html_list} template function plugin.
 *
 *  Constructs and returns HTML ordered or unordered list.
 *
 *  Usage:
 *      {html_list type='ol|ul' items=$items_array class='class-name' id='element-id'}
 *
 *  @author Chris Womack <cwillmih@gmail.com>
 *
 *  Copyright (c) cwillmih. All Rights Reserved.
 *
 *  This Source Code Form is subject to the terms of the Mozilla Public
 *  License, v. 2.0. If a copy of the MPL was not distributed with this
 *  file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

function smarty_function_html_list($params, $template) {

	$_html_result = "<".(@$params["type"] ?: "ol").(isset($params["class"]) ? " class=\"".$params["class"]."\"" : "").(isset($params["id"]) ? " id=\"".$params["id"]."\"" : "").">";

	if(isset($params["items"]) && is_array($params["items"])) {
		foreach($params["items"] as $item)
			$_html_result .= "<li>".$item."</li>";
	}

	$_html_result .= "</".(@$params["type"] ?: "ol").">";

	return $_html_result;

}

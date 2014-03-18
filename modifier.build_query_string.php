<?php

/**
 *  Smarty {$assoc_array|build_query_string} template modifier plugin.
 *
 *  Sorts an associative array of key => value pairs, then returns
 *  http_build_query() response.
 *
 *  Usage:
 *      {$assoc_array|build_query_string:$prefix:$separator}
 *
 *  @author Chris Womack <cwillmih@gmail.com>
 *
 *  Copyright (c) cwillmih. All Rights Reserved.
 *
 *  This Source Code Form is subject to the terms of the Mozilla Public
 *  License, v. 2.0. If a copy of the MPL was not distributed with this
 *  file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

function smarty_modifier_build_query_string($params, $prefix = "", $separator = "&") {

	if(is_array($params))
		ksort($params);

	return is_array($params) ? http_build_query($params, $prefix, $separator) : "";

}

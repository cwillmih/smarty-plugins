<?php

/**
 *  Smarty {$url|extract_domain} template modifier plugin.
 *
 *  Extracts the domain portion of a URL.
 *
 *  Usage:
 *      {$url|extract_domain}
 *
 *  @author Chris Womack <cwillmih@gmail.com>
 *
 *  Copyright (c) cwillmih. All Rights Reserved.
 *
 *  This Source Code Form is subject to the terms of the Mozilla Public
 *  License, v. 2.0. If a copy of the MPL was not distributed with this
 *  file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

function smarty_modifier_extract_domain($url) {

	$url = parse_url($url, PHP_URL_HOST);

    return preg_replace("/^www\./", "", $url);

}

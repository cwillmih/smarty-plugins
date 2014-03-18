<?php

/**
 *  Smarty {$rgb_hex_value|convert_rgb_hex} template modifier plugin.
 *
 *  Converts and RGB value to HEX, or HEX value to RGB.
 *
 *  Usage:
 *      {$rgb_hex_value|convert_rgb_hex:$as_hex}
 *
 *  @author Chris Womack <cwillmih@gmail.com>
 *
 *  Copyright (c) cwillmih. All Rights Reserved.
 *
 *  This Source Code Form is subject to the terms of the Mozilla Public
 *  License, v. 2.0. If a copy of the MPL was not distributed with this
 *  file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

function smarty_modifier_convert_rgb_hex($color, $as_hex = true) {

	if($color == "transparent")
		return $color;

	if($color == "")
		return null;

	if(strpos($color, ",") !== false) {
		$colors = explode(",", $color);

		foreach($colors as $k => $v)
			$colors[$k] = intval($v);

	} else {
		if(strpos($color, "#") === 0)
			$color = substr($color, 1);

		switch(strlen($color)) {
		case 6:
			$colors[] = substr($color, 0, 2);
			$colors[] = substr($color, 2, 2);
			$colors[] = substr($color, 4, 2);
			break;
		case 3:
			$colors[] = substr($color, 0, 1).substr($color, 0, 1);
			$colors[] = substr($color, 1, 1).substr($color, 1, 1);
			$colors[] = substr($color, 2, 1).substr($color, 2, 1);
			break;
		}

		foreach($colors as $k => $v)
			$colors[$k] = hexdec($v);
	}

	if($as_hex === true) {
		$color = "#"
				.str_pad(dechex($colors[0]), 2, "0", STR_PAD_LEFT)
				.str_pad(dechex($colors[1]), 2, "0", STR_PAD_LEFT)
				.str_pad(dechex($colors[2]), 2, "0", STR_PAD_LEFT);
	} else {
		$color = "rgb(".implode(",", $colors).")";
	}

	unset($colors);

    return $color;
}

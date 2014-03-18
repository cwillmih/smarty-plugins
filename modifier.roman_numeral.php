<?php

/**
 *  Smarty {$number|roman_numeral} template modifier plugin.
 *
 *  Converts a positive number to roman numeral format.
 *
 *  Usage:
 *      {$number|roman_numeral}
 *
 *  @author Chris Womack <cwillmih@gmail.com>
 *
 *  Copyright (c) cwillmih. All Rights Reserved.
 *
 *  This Source Code Form is subject to the terms of the Mozilla Public
 *  License, v. 2.0. If a copy of the MPL was not distributed with this
 *  file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

function smarty_modifier_roman_numeral($integer) {

	$r = "";

	foreach(array("M" => 1000, "CM" => 900, "D" => 500, "CD" => 400, "C" => 100, "XC" => 90, "L" => 50, "XL" => 40, "X" =>10 , "IX" =>9 , "V" =>5 , "IV" => 4, "I" => 1) as $rn => $n) {
		$r .= str_repeat($rn, intval($integer / $n));

		$integer = $integer % $n;
	}

	return $r;

}

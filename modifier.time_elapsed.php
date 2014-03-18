<?php

/**
 *  Smarty {$timestamp|time_elapsed} template modifier plugin.
 *
 *  Convert a timestamp to a string represented elapsed time since.
 *
 *  Usage:
 *      {$timestamp|time_elapsed:$full}
 *
 *  @author Chris Womack <cwillmih@gmail.com>
 *
 *  Copyright (c) cwillmih. All Rights Reserved.
 *
 *  This Source Code Form is subject to the terms of the Mozilla Public
 *  License, v. 2.0. If a copy of the MPL was not distributed with this
 *  file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

function smarty_modifier_time_elapsed($datetime, $full = false) {

    $now = new DateTime();

    $ago = new DateTime();
	$ago->setTimestamp($datetime);

    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        "y" => "year",
        "m" => "month",
        "w" => "week",
        "d" => "day",
        "h" => "hour",
        "i" => "minute",
        "s" => "second",
    );
    foreach($string as $k => &$v) {
        if($diff->$k)
            $v = $diff->$k." ".$v.($diff->$k > 1 ? "s" : "");
        else
            unset($string[$k]);
    }

	unset($now, $ago, $diff);

    if($full === false)
		$string = array_slice($string, 0, 1);

    return $string ? implode(", ", $string)." ago" : "just now";

}

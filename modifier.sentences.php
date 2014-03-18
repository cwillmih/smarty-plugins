<?php

/**
 *  Smarty {$text|sentences} template modifier plugin.
 *
 *  Extract number of sentences from text string.
 *
 *  Usage:
 *      {$text|sentences:2}
 *
 *  @author Chris Womack <cwillmih@gmail.com>
 *
 *  Copyright (c) cwillmih. All Rights Reserved.
 *
 *  This Source Code Form is subject to the terms of the Mozilla Public
 *  License, v. 2.0. If a copy of the MPL was not distributed with this
 *  file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

function smarty_modifier_sentences($str, $return = 2) {

	$sentences = preg_split('/(?<=[.?!])\s+/', $str, -1, PREG_SPLIT_NO_EMPTY);

	$result = implode(" ", array_slice($sentences, 0, $return));

	unset($sentences);

	return $result;

}

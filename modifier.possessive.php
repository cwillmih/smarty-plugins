<?php

/**
 *  Smarty {$string|possessive} template modifier plugin.
 *
 *  Add possessive nature to a string.
 *      e.g. Bob to Bob's, or Chris to Chris'
 *
 *  Usage:
 *      {$string|possessive}
 *
 *  @author Chris Womack <cwillmih@gmail.com>
 *
 *  Copyright (c) cwillmih. All Rights Reserved.
 *
 *  This Source Code Form is subject to the terms of the Mozilla Public
 *  License, v. 2.0. If a copy of the MPL was not distributed with this
 *  file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

function smarty_modifier_possessive($str) {

	return $str."'".(substr($str, -1) == "s" ? "" : "s");

}

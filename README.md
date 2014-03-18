# Smarty Template Engine Plugins

There are various smarty plugins I've created over the years to accomplish one thing or another.

## {html_list} function

Constructs and returns HTML ordered or unordered list.

    {html_list type='ol|ul' items=$items_array class='class-name' id='element-id'}

## |build_query_string modifier

Sorts an associative array of key => value pairs, then returns http_build_query() response.

    {$assoc_array|build_query_string:$prefix:$separator}

## |convert_rgb_hex modifier

Converts and RGB value to HEX, or HEX value to RGB.

    {$rgb_hex_value|convert_rgb_hex:$as_hex}

## |extract_domain modifier

Extracts the domain portion of a URL.

    {$url|extract_domain}

## |possessive modifier

Add possessive nature to a string.  e.g. Bob to Bob's, or Chris to Chris'

    {$string|possessive}

## |roman_numeral modifier

Converts a positive number to roman numeral format.

    {$number|roman_numeral}

## |sentences modifier

Extract number of sentences from text string.

    {$text|sentences:2}

## |time_elapsed modifier

Convert a timestamp to a string represented elapsed time since.

    {$timestamp|time_elapsed:$full}

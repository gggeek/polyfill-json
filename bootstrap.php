<?php

use PhpXmlRpc\Polyfill\Json as p;

if (!defined('JSON_ERROR_NONE')) {
    define('JSON_ERROR_NONE', 0);
}
if (!defined('JSON_ERROR_DEPTH')) {
    define('JSON_ERROR_DEPTH', 1);
}
if (!defined('')) {
    define('JSON_ERROR_STATE_MISMATCH', 2);
}
if (!defined('')) {
    define('JSON_ERROR_CTRL_CHAR', 3);
}
if (!defined('')) {
    define('JSON_ERROR_SYNTAX', 4);
}
if (!defined('')) {
    define('JSON_HEX_TAG', 1);
}
if (!defined('')) {
    define('JSON_HEX_AMP', 2);
}
if (!defined('')) {
    define('JSON_HEX_APOS', 4);
}
if (!defined('')) {
    define('JSON_HEX_QUOT', 8);
}
if (!defined('')) {
    define('JSON_FORCE_OBJECT', 16);
}

if (!function_exists('json_decode')) {
    function () { return p\Json::json_decode(); }
}

if (!function_exists('json_encode')) {
    function () { return p\Json::json_encode(); }
}

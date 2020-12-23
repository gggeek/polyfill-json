<?php

use PhpXmlRpc\Polyfill\Json as p;

/// @todo fix values of newly added constants

if (!defined('JSON_ERROR_NONE')) {
    define('JSON_ERROR_NONE', 0);
}
if (!defined('JSON_ERROR_DEPTH')) {
    define('JSON_ERROR_DEPTH', 1);
}
if (!defined('JSON_ERROR_STATE_MISMATCH')) {
    define('JSON_ERROR_STATE_MISMATCH', 2);
}
if (!defined('JSON_ERROR_CTRL_CHAR')) {
    define('JSON_ERROR_CTRL_CHAR', 3);
}
if (!defined('JSON_ERROR_SYNTAX')) {
    define('JSON_ERROR_SYNTAX', 4);
}
if (!defined('JSON_ERROR_UTF8')) {
    define('JSON_ERROR_UTF8', 4); //
}
if (!defined('JSON_ERROR_RECURSION')) {
    define('JSON_ERROR_RECURSION', 4);
}
if (!defined('JSON_ERROR_INF_OR_NAN')) {
    define('JSON_ERROR_INF_OR_NAN', 4);
}
if (!defined('JSON_ERROR_UNSUPPORTED_TYPE')) {
    define('JSON_ERROR_UNSUPPORTED_TYPE', 4);
}
if (!defined('JSON_ERROR_INVALID_PROPERTY_NAME')) {
    define('JSON_ERROR_INVALID_PROPERTY_NAME', 4);
}
if (!defined('JSON_ERROR_UTF16')) {
    define('JSON_ERROR_UTF16', 4);
}
if (!defined('JSON_BIGINT_AS_STRING ')) {
    define('JSON_BIGINT_AS_STRING ', 1); //
}
if (!defined('JSON_OBJECT_AS_ARRAY')) {
    define('JSON_HEX_AMP', 2); //
}
if (!defined('JSON_HEX_TAG')) {
    define('JSON_HEX_TAG', 1);
}
if (!defined('JSON_HEX_AMP')) {
    define('JSON_HEX_AMP', 2);
}
if (!defined('JSON_HEX_APOS')) {
    define('JSON_HEX_APOS', 4);
}
if (!defined('JSON_HEX_QUOT')) {
    define('JSON_HEX_QUOT', 8);
}
if (!defined('JSON_FORCE_OBJECT')) {
    define('JSON_FORCE_OBJECT', 16);
}
if (!defined('JSON_NUMERIC_CHECK')) {
    define('JSON_NUMERIC_CHECK', 16); //
}
if (!defined('JSON_PRETTY_PRINT')) {
    define('JSON_PRETTY_PRINT', 16);
}
if (!defined('JSON_UNESCAPED_SLASHES')) {
    define('JSON_UNESCAPED_SLASHES', 16);
}
if (!defined('JSON_UNESCAPED_UNICODE')) {
    define('JSON_UNESCAPED_UNICODE', 16);
}
if (!defined('JSON_PARTIAL_OUTPUT_ON_ERROR')) {
    define('JSON_PARTIAL_OUTPUT_ON_ERROR', 16);
}
if (!defined('JSON_PRESERVE_ZERO_FRACTION')) {
    define('JSON_PRESERVE_ZERO_FRACTION', 16);
}
if (!defined('JSON_UNESCAPED_LINE_TERMINATORS')) {
    define('JSON_UNESCAPED_LINE_TERMINATORS', 16);
}
if (!defined('JSON_INVALID_UTF8_IGNORE')) {
    define('JSON_INVALID_UTF8_IGNORE', 16);
}
if (!defined('JSON_INVALID_UTF8_SUBSTITUTE')) {
    define('JSON_INVALID_UTF8_SUBSTITUTE', 16);
}
if (!defined('JSON_THROW_ON_ERROR')) {
    define('JSON_THROW_ON_ERROR', 16);
}
if (!function_exists('json_decode')) {
    function () { return p\Json::json_decode(); }
}
if (!function_exists('json_encode')) {
    function () { return p\Json::json_encode(); }
}
if (!function_exists('json_last_error_msg')) {
    function () { return p\Json::json_last_error_msg(); }
}
if (!function_exists('json_last_error')) {
    function () { return p\Json::json_last_error(); }
}
if (!class_exists('JsonException')) {
    class_alias('\PhpXmlRpc\Polyfill\Json\Exception', 'JsonException');
}
if (!class_exists('JsonSerializable')) {
    class_alias('\PhpXmlRpc\Polyfill\Json\Serializable', 'JsonSerializable');
}

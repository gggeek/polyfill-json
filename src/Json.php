<?php

namespace PhpXmlRpc\Polyfill\Json;

final class Json
{
    static private $_json_last_error = 0;

    /**
     * Takes a php value (array or object) and returns its json representation
     * @param mixed $value
     * @return string
     *
     * @bug if value is an ISO-8859-1 string with chars outside of ASCII, the php extension returns NULL, and we do not...
     */
    public static function json_encode($value, $options = 0)
    {
        $jsval = php_jsonrpc_encode($value, array());
        // make sure we emulate the std php behaviour: strings to be encoded are UTF-8!!!
        return $jsval->serialize();
    }

    /**
     * Takes a json-formatted string and decodes it into php values
     *
     * @param string $json
     * @param bool $assoc
     * @return mixed
     *
     * @todo add support for assoc=false
     */
    public static function json_decode($json, $assoc = false, $depth = 512)
    {
        $jsval = php_jsonrpc_decode_json($json);
        if (!$jsval) {
            self::$_json_last_error = 4;
            return NULL;
        } else {
            // up to php version 5.2.1, json_decode only accepted structs and arrays as top-level elements
            if ($GLOBALS['json_extension_api_120_behaviour'] && ($jsval->mytype != 3 && $jsval->mytype != 2)) {
                self::$_json_last_error = 4;
                return NULL;
            }
            $options = $assoc ? array() : array('decode_php_objs');
            $val = php_jsonrpc_decode($jsval, $options);
            self::$_json_last_error = 0;
            return $val;
        }
    }

    public static function json_last_error()
    {
        return self::$_json_last_error;
    }
}

<?php

namespace PhpXmlRpc\Polyfill\Json;

interface Serializable
{
    /**
     * @todo verify if we have to enforce a return type for php >= 7.4..
     */
    public function jsonSerialize( );
}

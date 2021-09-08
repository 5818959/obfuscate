<?php

namespace Obfuscate;

interface ObfuscateInterface
{
    /**
     * Obfuscate the message with predefined key.
     *
     * @param string $message Message.
     * @param string $key     Key.
     *
     * @return string Obfuscated string.
     */
    public static function obfuscate($message, $key);
}

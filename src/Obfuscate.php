<?php

declare(strict_types=1);

namespace Obfuscate;

use function str_pad;
use function strlen;

/**
 * Obfuscate a string.
 */
class Obfuscate implements ObfuscateInterface
{
    /**
     * Obfuscate the message with predefined key.
     *
     * @param string $message Message.
     * @param string $key     Key.
     *
     * @return string Obfuscated string.
     */
    public static function obfuscate($message, $key)
    {
        if (empty($key)) {
            return $message;
        }

        return $message ^ str_pad('', strlen($message), $key);
    }
}

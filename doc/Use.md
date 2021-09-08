# How to use

This library provides a simple class `Obfuscate` with static method `obfuscate`:

```php
<?php

use Obfuscate\Obfuscate;

$key = '<secret>';
$message = "Hello World!";

$encoded = Obfuscate::obfuscate($message, $key);
$decoded = Obfuscate::obfuscate($encoded, $key);
```

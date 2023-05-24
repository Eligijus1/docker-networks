<?php
echo '<b>src dir:</b> src_php_8.1';

// prints e.g. 'Current PHP version: 4.1.1'
echo '<br><b>Current PHP version:</b> ' . phpversion();

// prints e.g. '2.0' or nothing if the extension isn't enabled
// https://www.php.net/manual/en/intro.tidy.php
// echo '<br><b>Current tidy version:</b> ' . phpversion('tidy');

// Call external API (random cat facts via text message):
//echo '<br><b>Random cat fact:</b> ' . file_get_contents("https://catfact.ninja/fact");
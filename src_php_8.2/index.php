<?php
echo '<b>src dir:</b> src_php_8.2';

// prints e.g. 'Current PHP version: 4.1.1'
echo '<br><br><b>Current PHP version:</b> ' . phpversion();

// prints e.g. '2.0' or nothing if the extension isn't enabled
// https://www.php.net/manual/en/intro.tidy.php
// echo '<br><b>Current tidy version:</b> ' . phpversion('tidy');

// Call external API (random cat facts via text message):
echo '<br><br><b>Random cat fact (https://catfact.ninja/fact) API response:</b><br>' . file_get_contents("https://catfact.ninja/fact");

// Call PHP 8.1 service:
echo "<br><br><b>PHP 8.1 server (http://php81) response:</b><br>" . file_get_contents("http://php81");

// Call PHP 7.4 service:
echo "<br><br><b>PHP 7.4 server (http://php74) response:</b><br>" . file_get_contents("http://php74");

// Call PHP 5.6 service:
echo "<br><br><b>PHP 5.6 server (http://php56) response:</b><br>" . file_get_contents("http://php56");
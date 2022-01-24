<?php

/**
 * URL
 * 
 * Response methods
 */
class Url {
    /**
 * Redirect to another URL on the same site
 * 
 * @param string $path The path to the redirect to
 * 
 * @return void
 */
// Should use absolute URL with includes the protocol and the server name.
// We use the below to get the info from data provided by SUPERGLOBAL.

    public static function redirect($path) {
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
      $protocol = 'https';
    } else {
      $protocol = 'http';
    }
    // Use 'header' function to redirect to the article page after submit
    header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . $path);
    // Good practice to 'exit' the script after 'header' since nothing below matters
    exit;
  
  }
}
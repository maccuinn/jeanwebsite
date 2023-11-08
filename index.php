<?php

/**
 * See https://cloud.google.com/appengine/docs/standard/php-gen2/runtime
 */
# [START gae_simple_front_controller]
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
    case '/index.php':
        require 'homepage.php';
        break;
    case '/books.php':
        require 'books.php';
        break;
    case '/quilts.php':
        require 'quilts.php';
        break;
    case '/purchase.php':
        require 'purchase.php';
        break;
    case '/contact.php':
        require 'contact.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}
# [END gae_simple_front_controller]

<?php
// Display usage terms and conditions for this sample application.

// Load information about your Facebook app and runtime config
if (!class_exists('Facebook_Sample_Application')) {
    require_once('config.php');
}

$debug_file_suffix = '.min';
if (Facebook_Sample_Application::DEBUG) {
    $debug_file_suffix = '';
}

$og = array(
    'prefixes' => array(
        'og' => 'http://ogp.me/ns#',
        'fb' => 'http://ogp.me/ns/fb#'
    ),
    'type' => 'website',
    'title' => 'Terms of Service',
    'description' => 'Tumptious is a sample application intended to be used for demonstrative purposes only.'
);

$page_url = Facebook_Sample_Application::BASE_URI . 'terms.php';

include_once('templates/terms.php');
?>
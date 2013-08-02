<?php
session_start();
/**
 * Load sample meal data from the JSON dataset.
 */
function get_all_meals() {
    require_once('meals/meal-options.php' );
    $data_directory = 'data/';
    $meals = array();
    foreach ( $meal_options as $meal_option => $exists ) {
        $meals[ $meal_option ] = json_decode( file_get_contents( $data_directory . $meal_option . '.json' ) );
    }
    return $meals;
}

// :oad information about your Facebook app and runtime config
if (! class_exists('Facebook_Sample_Application'))
    require_once('config.php');

$debug_file_suffix = '.min';
if ( Facebook_Sample_Application::DEBUG )
    $debug_file_suffix = '';

$og = array(
    'prefixes' => array(
        'og' => 'http://ogp.me/ns#',
        'fb' => 'http://ogp.me/ns/fb#'
    ),
    'type' => 'website',
    'title' => 'Scrumptious (powered by Temboo) sample web application',
    'description' => 'Scrumptious (powered by Temboo) sample web application. Choose a meal, friends, and place before posting a story to your Facebook Timeline using choreos.'
);

$page_url = Facebook_Sample_Application::BASE_URI;
$meals = get_all_meals();
include_once('templates/home.php' );
?>

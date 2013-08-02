<?php

/**
 * Temboo PHP SDK example usage
 *
 * Demonstrates how to use the Temboo PHP SDK.
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Services
 * @package    Temboo
 * @subpackage Examples
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://www.temboo.com
 */


/**
 * Your Temboo account name (note that this is NOT your username).
 *
 * @package    Temboo
 * @subpackage Examples
 */
define('ACCOUNT_NAME', 'my account');

/**
 * Your Temboo App Key name. You can get this from https://www.temboo.com/account/
 *
 * @package    Temboo
 * @subpackage Examples
 */
define('APP_KEY_NAME', 'myFirstApp');

/**
 * Your Temboo App Key value. You can get this from https://www.temboo.com/account/
 *
 * @package    Temboo
 * @subpackage Examples
 */
define('APP_KEY_VALUE', '********');


require '../src/temboo.php';


/**
 * A simple NY Times movie review search.
 * https://www.temboo.com/library/Library/NYTimes/MovieReviews/
 */
try {
    echo "Searching for reviews...\n";

    // Instantiate a Temboo session with valid Temboo App Key credentials
    $session = new Temboo_Session(ACCOUNT_NAME, APP_KEY_NAME, APP_KEY_VALUE);

    $searchByKeyword = new NYTimes_MovieReviews_SearchByKeyword($session);

    // Get an input object for the Choreo
    $searchByKeywordInputs = $searchByKeyword->newInputs();

    // Set inputs
    $searchByKeywordInputs->setQuery("Casablanca")->setResponseFormat("json");

    // Execute Choreo and get results
    $searchByKeywordResults = $searchByKeyword->execute($searchByKeywordInputs)->getResults();

    // Print the results
    $jsonResponse = $searchByKeywordResults->getResponse();
    print_r(json_decode($jsonResponse));

    echo "\n\nDone.\n";
}
catch(Temboo_Exception_Authentication $e) {
    echo "Temboo authentication exception caught: " . $e->getMessage() . "\n";
    echo "Debug info:\n\n";
    print_r($e->getDetails());
}
catch(Temboo_Exception_Execution $e) {
    echo "Temboo execution exception caught: " . $e->getMessage() . "\n";
    echo "Debug info:\n\n";
    print_r($e->getDetails());
}
catch(Temboo_Exception_Notfound $e) {
    echo "Temboo 'not found' exception caught: " . $e->getMessage() . "\n";
    echo "Debug info:\n\n";
    print_r($e->getDetails());
}
catch(Temboo_Exception $e) {
    echo "Temboo general exception caught: " . $e->getMessage() . "\n";
    echo "Debug info:\n\n";
    print_r($e->getDetails());
}
catch(Exception $e) {
    echo "Something else went wrong! " . $e->getMessage() . "\n\n";
}

?>

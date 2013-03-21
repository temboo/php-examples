<?php

/**
 * Temboo PHP Facebook Login example
 *
 * Demonstrates how to use the Temboo PHP SDK to connect and retrieve user data
 * from Facebook.
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
 * @author     Nick Blanchard-Wright <nick.wright@temboo.com>
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://www.temboo.com
 */


/**
 * Your Temboo account name (note that this is NOT your username). You can sign up at:
 * https://temboo.com/signup
 */
define('TEMBOO_ACCOUNT_NAME', 'myAccount');

/**
 * Your Temboo Application Key name. You can get this from:
 * https://live.temboo.com/account/
 */
define('TEMBOO_APPLICATION_KEY_NAME', 'myFirstApp');

/**
 * Your Temboo Application Key value. You can get this from:
 * https://live.temboo.com/account/
 */
define('TEMBOO_APPLICATION_KEY', '************');

/**
 * Your Temboo Credential for Facebook OAuth choreos. You can set this by logging into
 * Temboo and click "+ Add new" from the "Credentials" sidebar at:
 * https://live.temboo.com/library/Library/Facebook/OAuth/
 */
define('TEMBOO_FACEBOOK_OAUTH_CREDENTIAL_NAME', 'myFacebookOauthCredential');

/**
 * The URL where you've installed this example.
 * Defaults to best guess based on server environment.
 */
define('TEMBOO_EXAMPLE_URI', (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']);


/**
 * Temboo PHP SDK. You can get this from:
 * https://temboo.com/download
 * Unzip it inside the FacebookLogin directory.
 */
require 'php-sdk/src/temboo.php';


/**
 * Reusable authenticated Temboo session for executing choreos.
 */
$temboo_session = new Temboo_Session(TEMBOO_ACCOUNT_NAME, TEMBOO_APPLICATION_KEY_NAME, TEMBOO_APPLICATION_KEY);


/**
 * PHP session to store oauth access token and callback ID from Facebook
 */
session_start();


/**
  * Route requests based on "action" parameter in query string.
  * Catch and report any Temboo-generated exceptions.
  */
try {
    $action = isset($_GET['action']) ? (string) $_GET['action'] : false;
    switch($action) {
        case "oauth_init":
            oauthInit($temboo_session);
            break;
        case "oauth_final":
            oauthFinal($temboo_session);
            break;
        case "get_picture":
            getPicture($temboo_session);
            break;
        case "oauth_reset":
            oauthReset();
            break;
        default:
            getLikes($temboo_session);
    }
} catch(Temboo_Exception $e) {
    header('Content-type: text/plain');
    // Possible Temboo-generated exception types: Temboo_Exception_Authentication,
    // Temboo_Exception_Execution, Temboo_Exception_Notfound
    echo get_class($e) . ': ' . $e->getMessage() . "\n";
    echo "Debug info:\n\n";
    print_r($e->getDetails());
    exit;
} catch(Exception $e) {
    header('Content-type: text/plain');
    echo "Something else went wrong! " . $e->getMessage();
    exit;
}


/**
 * Generate an authorization URL and callback ID with Facebook, and forward the user
 * to Facebook's sign in page.
 *
 * Choreos used:
 * https://live.temboo.com/library/Library/Facebook/OAuth/InitializeOAuth/
 *
 * @param Temboo_Session $temboo_session authenticated Temboo session for choreo execution
 */
function oauthInit(Temboo_Session $temboo_session) {
    // Instantiate choreo with previously instantiated temboo session
    $initializeOAuth = new Facebook_OAuth_InitializeOAuth($temboo_session);

    // Get an input object for the Choreo
    $initializeOAuthInputs = $initializeOAuth->newInputs();

    // Set credential to use for execution
    $initializeOAuthInputs->setCredential(TEMBOO_FACEBOOK_OAUTH_CREDENTIAL_NAME);

    // Set inputs
    $initializeOAuthInputs->setForwardingURL(TEMBOO_EXAMPLE_URI . '?action=oauth_final');

    // Execute Choreo and get results
    $initializeOAuthResults = $initializeOAuth->execute($initializeOAuthInputs)->getResults();

    // Store callback id for second part of authorization
    $_SESSION['facebook_callback_id'] = $initializeOAuthResults->getCallbackID();

    // Redirect to sign in URL supplied by Facebook
    header("Location: " . $initializeOAuthResults->getAuthorizationUrl());
    exit;
}


/**
 * Finalize authorization and retrieve access token after user is redirected back by Facebook.
 *
 * Choreos used:
 * https://live.temboo.com/library/Library/Facebook/OAuth/FinalizeOAuth/
 *
 * @param Temboo_Session $temboo_session authenticated Temboo session for choreo execution
 */
function oauthFinal(Temboo_Session $temboo_session) {
    // Instantiate choreo with previously instantiated temboo session
    $finalizeOAuth = new Facebook_OAuth_FinalizeOAuth($temboo_session);

    // Get an input object for the Choreo
    $finalizeOAuthInputs = $finalizeOAuth->newInputs();

    // Set credential to use for execution
    $finalizeOAuthInputs->setCredential(TEMBOO_FACEBOOK_OAUTH_CREDENTIAL_NAME);

    // Set inputs
    $finalizeOAuthInputs->setCallbackID($_SESSION['facebook_callback_id'])->setLongLivedToken(1)->setTimeout(60);

    // Execute Choreo and get results
    $finalizeOAuthResults = $finalizeOAuth->execute($finalizeOAuthInputs)->getResults();

    $error = $finalizeOAuthResults->getErrorMessage();

    if($error) {
        throw new Exception('Facebook authorization failed: ' . $error);
    }

    // Store access token in PHP session
    $_SESSION['facebook_access_token'] = $finalizeOAuthResults->getAccessToken();

    // Callback ID no longer needed
    unset($_SESSION['facebook_callback_id']);

    // Redirect to base URL to fetch and display users's Likes.
    header("Location: " . TEMBOO_EXAMPLE_URI);
    exit;
}



/**
 * Fetch the Facebook user's last 10 public Likes.
 *
 * Choreos used:
 * https://live.temboo.com/library/Library/Facebook/Reading/Likes/
 *
 * @param Temboo_Session $temboo_session authenticated Temboo session for choreo execution
 */
function getLikes(Temboo_Session $temboo_session) {
    if(!isset($_SESSION['facebook_access_token'])) {
        return false; // OAuth not initiated yet, so nothing to be done.
    }

    if(isset($_SESSION['facebook_likes'])) {
        return false; // Likes already cached, so nothing to be done.
    }

    $_SESSION['facebook_likes'] = array();

    // Instantiate choreo with previously instantiated temboo session
    $likes = new Facebook_Reading_Likes($temboo_session);

    // Get an input object for the Choreo
    $likesInputs = $likes->newInputs();

    // Set inputs
    $likesInputs->setAccessToken($_SESSION['facebook_access_token']);
    $likesInputs->setLimit(10);

    // Execute Choreo and get results
    $likesResults = $likes->execute($likesInputs)->getResults();

    $response = json_decode($likesResults->getResponse());

    // For each like, query Facebook for extended object data and save the object's URL
    if(isset($response->data)) {
        foreach($response->data as $like) {
            $like->link = getLink($temboo_session, $like->id);
            $_SESSION['facebook_likes'][] = $like;
        }
    }
}


/**
 * Attempt to fetch a canonical URL for a Facebook object.
 * As a fallback, return best guess based on object id.
 *
 * Choreos used:
 * https://live.temboo.com/library/Library/Facebook/Reading/GetObject/
 *
 * @param Temboo_Session $temboo_session authenticated Temboo session for choreo execution
 * @param string $objectId the Facebook object ID.
 * @return string the URL for the object
 */
function getLink(Temboo_Session $temboo_session, $objectId) {
    $link = 'https://www.facebook.com/' . urlencode($objectId);

    try {
        // Instantiate choreo with previously instantiated temboo session
        $getObject = new Facebook_Reading_GetObject($temboo_session);

        // Get an input object for the Choreo
        $getObjectInputs = $getObject->newInputs();

        // Set inputs
        $getObjectInputs->setAccessToken($_SESSION['facebook_access_token'])->setObjectID($objectId);

        // Execute Choreo and get results
        $getObjectResults = $getObject->execute($getObjectInputs)->getResults();

        $response = json_decode($getObjectResults->getResponse());

        if(isset($response->link)) {
            $link = $response->link;
        }
    } catch(Temboo_Exception $e) {
        // Do nothing. Return the default below.
    }
    return $link;
}


/**
 * Fetch profile photo for a Facebook object.
 *
 * Choreos used:
 * https://live.temboo.com/library/Library/Facebook/Reading/Picture/
 *
 * @param Temboo_Session $temboo_session authenticated Temboo session for choreo execution
 */
function getPicture(Temboo_Session $temboo_session) {
    if(!isset($_SESSION['facebook_access_token'])) {
        exit; // OAuth not initiated yet, so nothing to be done.
    }
    if(!isset($_GET['object_id'])) {
        exit; // No object ID, so nothing to be done.
    }

    $objectId = (string) $_GET['object_id'];

    // Instantiate choreo with previously instantiated temboo session
    $picture = new Facebook_Reading_Picture($temboo_session);

    // Get an input object for the Choreo
    $pictureInputs = $picture->newInputs();

    // Set inputs
    $pictureInputs->setAccessToken($_SESSION['facebook_access_token'])->setProfileID($objectId)->setType("square");

    // Execute Choreo and get results
    $pictureResults = $picture->execute($pictureInputs)->getResults();

    // Return the decoded image data
    header("Content-type: image/jpeg");
    echo base64_decode($pictureResults->getResponse());
    exit;
}


/**
 * Erase PHP session variables, resetting example.
 */
function oauthReset() {
    unset($_SESSION['facebook_access_token']);
    unset($_SESSION['facebook_likes']);
    header("Location: " . TEMBOO_EXAMPLE_URI);
    exit;
}


?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Temboo Facebook Login Example</title>
</head>
<body>
    <?php if(isset($_SESSION['facebook_likes'])): ?>

        <?php if(count($_SESSION['facebook_likes']) > 0): ?>

            <p class="example-facebook-success">Success! Here are your recent Facebook Likes:</p>

            <?php foreach($_SESSION['facebook_likes'] as $like): ?>

                <p>
                    <a href="<?php echo $like->link; ?>">
                        <img src="<?php echo TEMBOO_EXAMPLE_URI; ?>?action=get_picture&object_id=<?php echo $like->id; ?>" width="50" height="50" /></a>
                    </a>
                    <br />
                    <a href="<?php echo $like->link; ?>">
                        <?php echo $like->name; ?>
                    </a>
                </p>

            <?php endforeach; ?>

        <?php else: ?>

            <p>Sorry! We can't find any public likes for this Facebook account.</p>

        <?php endif; ?>

        <p><a href="<?php echo TEMBOO_EXAMPLE_URI ?>?action=oauth_reset">Reset</a></p>

    <?php else: ?>

        <p><a href="<?php echo TEMBOO_EXAMPLE_URI ?>?action=oauth_init">Log in with Facebook</a></p>

    <?php endif; ?>
</body>
</html>
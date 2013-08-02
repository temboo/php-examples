<?php
session_start();
if (!class_exists('Facebook_Sample_Application')) {
    require_once('config.php');
}
require_once('tumptious-config.php');
require_once('php-sdk/src/temboo.php');

class Tumptious {
    public function Tumptious() {
        // Instantiate a new Temboo session, which is necessary to run Choreos on the 
        // Temboo platform
        $this->session = new Temboo_Session(ACCOUNT_NAME,
                                            APP_KEY_NAME,
                                            APP_KEY_VALUE);
    }

    public function dispatch() {
        // Handle GET requests (eg, perform OAuth handshake, load user info, etc.)
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $pathArray = explode('/', $_SERVER['REQUEST_URI']);
            $phase = array_pop($pathArray);
            if ($phase === 'fbauthinit') {
                // Initialize the OAuth process
                $this->fbauthinit();
            } elseif ($phase === 'fbauthfinal') {
                // Finalize the OAuth process
                $this->fbauthfinal();
            } elseif ($phase === 'getinfo') {
                // Retrieve info about the logged-in Facebook user
                echo $this->getUserInfo();
            } elseif ($phase === 'fblogout') {
                // Log out of Facebook
                echo $this->fblogout();
            } else {
                // Request target not understood.
            }

        // Handle POST requests
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $postTarget = $_POST['target'];
            if ($postTarget === 'timeline-post') {

                // Post a status update to Facebook
                $this->postTumptiousStatus($_POST['meal'],
                                           $_POST['message'],
                                           $_POST['location'],
                                           $_POST['tagged']);
            } elseif ($postTarget === 'find-places') {
                // Search for Facebook places
                $this->searchPlaces($_POST['searchString'],
                                    $_POST['locationString']);
            } elseif ($postTarget === 'find-friends') {
                // Search for Facebook friends
                $this->searchFriends($_POST['query']);
            }

        }
    }

    /**
     * Get info about the current Facebook user
     * @return JSON encoded string containing user's full name and usernamr.
     */
    private function getUserInfo() {
        // Instantiate the Temboo Facebook > Reading > User Choreo, using the 
        // Temboo session
        $user = new Facebook_Reading_User($this->session);

        // Obtain an InputSet for the Choreo, and populate it
        $userInputs = $user->newInputs();
        $userInputs->setAccessToken($_SESSION['facebook_access_token']);
        $userInputs->setFields("name, username");

        // Run the Choreo and return results
        $userResults = $user->execute($userInputs)->getResults();
        return $userResults->getResponse();
    }

    /**
     * Initialize the Facebook OAuth process
     */
    private function fbauthinit() {
        try {

            // Instantiate the Temboo Facebook > OAuth > InitializeOAuth Choreo, using
            // the Temboo session, populate its inputs and run the Choreo
            $initializeOAuth = new Facebook_OAuth_InitializeOAuth($this->session);
            $initializeOAuthInputs = $initializeOAuth->newInputs();
            $initializeOAuthInputs->setAppID(Facebook_Sample_Application::APP_ID);
            $initializeOAuthInputs->setForwardingURL(Facebook_Sample_Application::BASE_URI . 'tumptious.php/fbauthfinal');
            $initializeOAuthInputs->setScope("publish_actions");
            $initializeOAuthResults = $initializeOAuth->execute($initializeOAuthInputs)->getResults();

            // Store the Temboo callback ID, which we will use to retrieve callback data, in the 
            // session and redirect to the authorization URL returned by Facebook
            $_SESSION['facebook_callback_id'] = $initializeOAuthResults->getCallbackID();
            header("Location: " . $initializeOAuthResults->getAuthorizationUrl());
            exit;
        } catch (Temboo_Exception $e) {
            $_SESSION['facebook_error'] = "Facebook authorization failed.";
            header("Location: " . Facebook_Sample_Application::BASE_URI);
            exit;
        }
    }

    /**
     * Finalize the Facebook OAuth process
     */
    private function fbauthfinal() {
        try {
            // Instantiate the Temboo Facebook > OAuth > FinalizeOAuth Choreo, using
            // the Temboo session, populate its inputs and run the Choreo
            $finalizeOAuth = new Facebook_OAuth_FinalizeOAuth($this->session);
            $finalizeOAuthInputs = $finalizeOAuth->newInputs();

            // Provide the callback ID returned by the InitializeOAuth Choreo 
            $finalizeOAuthInputs->setCallbackID($_SESSION['facebook_callback_id'])->
                                  setAppSecret(Facebook_Sample_Application::APP_SECRET)->
                                  setAppID(Facebook_Sample_Application::APP_ID);
            $finalizeOAuthInputs->setLongLivedToken(1)->setTimeout(60);
            $finalizeOAuthResults = $finalizeOAuth->execute($finalizeOAuthInputs)->getResults();
            $error = $finalizeOAuthResults->getErrorMessage();
            if($error) {
                $_SESSION['facebook_error'] = "Facebook authorization failed: " . $error;
                header("Location: " . Facebook_Sample_Application::BASE_URI);
                exit;
            }
            // Store the Facebook OAuth token in the session
            $_SESSION['facebook_access_token'] = $finalizeOAuthResults->getAccessToken();
            // Return to front page of Tumptious.
            header("Location: " . Facebook_Sample_Application::BASE_URI);

            // Send Facebook's instrumentation post.
            $post = new Utilities_HTTP_Post($this->session);
            $postInputs = $post->newInputs();
            $postInputs->setRequestBody("plugin=featured_resources,\npayload={ \"resource\": \"temboo_tumptious\", \"appid\\\": \"444354808996455\", \"version\": \"1.0\" }")->
                         setURL("https://www.facebook.com/impression.php");
            $postResults = $post->execute($postInputs);
            exit;

        } catch (Temboo_Exception $e) {
            // $_SESSION['facebook_error'] = "Facebook authorization failed.";
            $_SESSION['facebook_error'] = var_dump($e);
            header("Location: " . Facebook_Sample_Application::BASE_URI);
            exit;
        }
    }

    /**
     * Log out of Facebook, by clearing the stored Session data
     */
    private function fblogout() {
        session_unset();
        header("Location: " . Facebook_Sample_Application::BASE_URI);
    }

    /**
     * Post a status update to Facebook
     * Enable this function to send updates to Facebook as standard posts
     */
    /*
    private function postTumptiousStatus($meal, $ingredients, $message, $location, $tags) {
        // Instantiate the Temboo Facebook > Publishing > Post Choreo, using
        // the Temboo session, populate its inputs and run the Choreo
        $post = new Facebook_Publishing_Post($this->session);
        $postInputs = $post->newInputs();
        $postInputs->setAccessToken($_SESSION['facebook_access_token']);
        $postInputs->setLink($meal);
        $postInputs->setCaption($ingredients);
        $postInputs->setDescription($message);
        $postInputs->setPlaceID($location);
        $postInputs->setTags($tags);
        $postInputs->setName("I ate this");

        $postResults = $post->execute($postInputs)->getResults();
        echo $postResults->getResponse();
    }
    */

    /*
     * Post a custom action (eat a meal) to Facebook
     * Enable this function to send updates to Facebook as custom actions
     */
    private function postTumptiousStatus($meal, $message, $location, $tags) {

        // Instantiate the Temboo Facebook > Actions > Custom > CreateAction Choreo, using
        // the Temboo session, populate its inputs and run the Choreo
        $createAction = new Facebook_Actions_Custom_CreateAction($this->session);
        $createActionInputs = $createAction->newInputs();
        $createActionInputs->setAppNamespace('tumptious')->
                             setAccessToken($_SESSION['facebook_access_token'])->
                             setActionType('eat')->
                             setMessage($message)->
                             setPropertyName("meal")->
                             setPropertyValue($meal)->
                             setPlace($location)->
                             setTags($tags)->
                             setExplicityShared(1);
        $createActionResults = $createAction->execute($createActionInputs)->getResults();
        echo $createActionResults->getResponse();
    }


    /**
     * Search for Facebook friends
     */
    private function searchFriends($query) {
        // Instantiate the Temboo Facebook > Reading > Friends Choreo, using
        // the Temboo session, populate its inputs and run the Choreo
        $friends = new Facebook_Reading_Friends($this->session);
        $friendsInputs = $friends->newInputs();
        $friendsInputs->setAccessToken($_SESSION['facebook_access_token']);
        $friendsInputs->setFields("id,name,picture,link");
        $friendsResults = $friends->execute($friendsInputs)->getResults();
        $resultArray = json_decode($friendsResults->getResponse(), true);
        $dataArray = $resultArray['data'];
        $formattedArray = array();

        // Format Temboo response.
        foreach ($dataArray as $tembooOutput) {
        if (strpos(strtolower($tembooOutput['name']), strtolower($query)) !== false) {
            $formattedEntry = array('label'     => $tembooOutput['name'],
                                    'value'     => $tembooOutput['id'],
                                    'picture'   => $tembooOutput['picture']['data']['url'],
                                    'link'      => $tembooOutput['link']);
            array_push($formattedArray, $formattedEntry);
            }
        }
        echo json_encode($formattedArray);
    }

    /**
     * Perform a search for Facebook places
     */
    private function searchPlaces($queryString, $locationString) {
        // Instantiate the Temboo Facebook > Searching > Search Choreo, using
        // the Temboo session, populate its inputs and run the Choreo
        $search = new Facebook_Searching_Search($this->session);
        $searchInputs = $search->newInputs();
        $searchInputs->setAccessToken($_SESSION['facebook_access_token']);
        $searchInputs->setObjectType("place")->
                       setFields("id,name,location,picture,were_here_count,is_published,link")->
                       setQuery($queryString)->
                       setCenter($locationString);
        $searchResults = $search->execute($searchInputs)->getResults();
        $resultArray = json_decode($searchResults->getResponse(), true);
        $dataArray = $resultArray['data'];
        $formattedArray = array();

        // Massage data into the format we'd like.
        foreach ($dataArray as $tembooOutput) {
            $formattedEntry = array('label' => $tembooOutput['name'],
                                    'value' => $tembooOutput['id'],
                                    'link'  => $tembooOutput['link'],
                                    'location' => array('area' => $tembooOutput['location']['city'] . ', ' . $tembooOutput['location']['state']),
                                    'were_here_count' => $tembooOutput['were_here_count'],
                                    'picture' => $tembooOutput['picture']['data']['url']);
            array_push($formattedArray, $formattedEntry);
        }
        echo json_encode($formattedArray);
    }
}

$instance = new Tumptious();
$instance->dispatch();
?>
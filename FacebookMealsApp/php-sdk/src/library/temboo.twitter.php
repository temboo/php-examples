<?php

/**
 * Temboo PHP SDK Twitter classes
 *
 * Execute Choreographies from the Temboo Twitter bundle.
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
 * @subpackage Twitter
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves up to 100 of the first retweets of a given tweet.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets extends Temboo_Choreography
{
    /**
     * Retrieves up to 100 of the first retweets of a given tweet.
     *
     * @param Temboo_Session $session The session that owns this GetRetweets Choreo.
     * @return Twitter_Tweets_GetRetweets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/GetRetweets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRetweets Choreo.
     *
     * @param Twitter_Tweets_GetRetweets_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_GetRetweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_GetRetweets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_GetRetweets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRetweets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_GetRetweets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_GetRetweets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRetweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRetweets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_GetRetweets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRetweets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRetweets Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRetweets Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetRetweets Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetRetweets Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this GetRetweets Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to, up to a maximum of 100.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ID input for this GetRetweets Choreo.
     *
     * @param int $value (required, integer) The numerical ID of the tweet to retrieve retweets for.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the TrimUser input for this GetRetweets Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID.
     * @return Twitter_Tweets_GetRetweets_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the GetRetweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRetweets Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRetweets execution.
     * @param Twitter_Tweets_GetRetweets $choreo The choreography object for this execution.
     * @param Twitter_Tweets_GetRetweets_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_GetRetweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_GetRetweets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_GetRetweets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRetweets execution.
     *
     * @return Twitter_Tweets_GetRetweets_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetRetweets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_GetRetweets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_GetRetweets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRetweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_GetRetweets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRetweets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_GetRetweets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRetweets execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to update your Twitter status (aka Tweet).
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate extends Temboo_Choreography
{
    /**
     * Allows you to update your Twitter status (aka Tweet).
     *
     * @param Temboo_Session $session The session that owns this StatusesUpdate Choreo.
     * @return Twitter_Tweets_StatusesUpdate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/StatusesUpdate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this StatusesUpdate Choreo.
     *
     * @param Twitter_Tweets_StatusesUpdate_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesUpdate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_StatusesUpdate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusesUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesUpdate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_StatusesUpdate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusesUpdate Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the StatusesUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesUpdate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusesUpdate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the DisplayCoordinates input for this StatusesUpdate Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to put a pin on the exact coordinates a tweet has been sent from.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setDisplayCoordinates($value)
    {
        return $this->set('DisplayCoordinates', $value);
    }

    /**
     * Set the value for the InReplyTo input for this StatusesUpdate Choreo.
     *
     * @param string $value (optional, string) The ID of an existing status that the update is in reply to.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setInReplyTo($value)
    {
        return $this->set('InReplyTo', $value);
    }

    /**
     * Set the value for the Latitude input for this StatusesUpdate Choreo.
     *
     * @param float $value (optional, decimal) The latitude of the location this tweet refers to.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this StatusesUpdate Choreo.
     *
     * @param float $value (optional, decimal) The longitude of the location this tweet refers to.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the PlaceID input for this StatusesUpdate Choreo.
     *
     * @param string $value (optional, string) The ID associated with a place in the world. These IDs can be retrieved from the PlacesAndGeo.ReverseGeocode Choreo.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setPlaceID($value)
    {
        return $this->set('PlaceID', $value);
    }

    /**
     * Set the value for the StatusUpdate input for this StatusesUpdate Choreo.
     *
     * @param string $value (required, string) The text for your status update. 140-character limit.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setStatusUpdate($value)
    {
        return $this->set('StatusUpdate', $value);
    }

    /**
     * Set the value for the TrimUser input for this StatusesUpdate Choreo.
     *
     * @param bool $value (optional, boolean) When set to either true, each tweet returned in a timeline will include a user object including only the status authors numerical ID.
     * @return Twitter_Tweets_StatusesUpdate_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the StatusesUpdate Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusesUpdate Choreo.
     *
     * @param Temboo_Session $session The session that owns this StatusesUpdate execution.
     * @param Twitter_Tweets_StatusesUpdate $choreo The choreography object for this execution.
     * @param Twitter_Tweets_StatusesUpdate_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesUpdate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_StatusesUpdate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusesUpdate execution.
     *
     * @return Twitter_Tweets_StatusesUpdate_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this StatusesUpdate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_StatusesUpdate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_StatusesUpdate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the StatusesUpdate Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesUpdate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the StatusesUpdate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_StatusesUpdate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this StatusesUpdate execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a collection of the most recent Tweets posted by the user whose screen_name or user_id is indicated.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline extends Temboo_Choreography
{
    /**
     * Retrieves a collection of the most recent Tweets posted by the user whose screen_name or user_id is indicated.
     *
     * @param Temboo_Session $session The session that owns this UserTimeline Choreo.
     * @return Twitter_Timelines_UserTimeline New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/UserTimeline/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UserTimeline Choreo.
     *
     * @param Twitter_Timelines_UserTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_UserTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_UserTimeline_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_UserTimeline_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserTimeline Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_UserTimeline_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_UserTimeline_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UserTimeline Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_UserTimeline_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserTimeline input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this UserTimeline Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this UserTimeline Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ExcludeReplies input for this UserTimeline Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to prevent replies from appearing in the returned timeline.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setExcludeReplies($value)
    {
        return $this->set('ExcludeReplies', $value);
    }

    /**
     * Set the value for the IncludeRetweets input for this UserTimeline Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setIncludeRetweets($value)
    {
        return $this->set('IncludeRetweets', $value);
    }

    /**
     * Set the value for the MaxId input for this UserTimeline Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the ScreenName input for this UserTimeline Choreo.
     *
     * @param string $value (conditional, string) Screen name of the user to return results for. Required unless providing the UserId.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the SinceId input for this UserTimeline Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this UserTimeline Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }

    /**
     * Set the value for the UserId input for this UserTimeline Choreo.
     *
     * @param int $value (conditional, integer) ID of the user to return results for. Required unless providing the ScreenName.
     * @return Twitter_Timelines_UserTimeline_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the UserTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserTimeline Choreo.
     *
     * @param Temboo_Session $session The session that owns this UserTimeline execution.
     * @param Twitter_Timelines_UserTimeline $choreo The choreography object for this execution.
     * @param Twitter_Timelines_UserTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_UserTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_UserTimeline_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_UserTimeline $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserTimeline execution.
     *
     * @return Twitter_Timelines_UserTimeline_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this UserTimeline execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_UserTimeline_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_UserTimeline_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UserTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_UserTimeline_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UserTimeline Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_UserTimeline_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UserTimeline execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the relationship of the authenticating user to the comma-separated list of up to 100 screen names or user IDs provided.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup extends Temboo_Choreography
{
    /**
     * Retrieves the relationship of the authenticating user to the comma-separated list of up to 100 screen names or user IDs provided.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsLookup Choreo.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/FriendshipsLookup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FriendshipsLookup Choreo.
     *
     * @param Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsLookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FriendshipsLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FriendshipsLookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FriendshipsLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FriendshipsLookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FriendshipsLookup Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this FriendshipsLookup Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FriendshipsLookup Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FriendshipsLookup Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this FriendshipsLookup Choreo.
     *
     * @param string $value (conditional, string) A comma separated list of screen names. Up to 100 are allowed. Required unless UserID is specified.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserID input for this FriendshipsLookup Choreo.
     *
     * @param int $value (conditional, integer) A comma separated list of user IDs. Up to 100 are allowed. Required unless ScreenName is specified.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the FriendshipsLookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FriendshipsLookup Choreo.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsLookup execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsLookup $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_FriendshipsLookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FriendshipsLookup execution.
     *
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FriendshipsLookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsLookup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FriendshipsLookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsLookup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FriendshipsLookup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsLookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FriendshipsLookup execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single Tweet with a given ID.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow extends Temboo_Choreography
{
    /**
     * Retrieves a single Tweet with a given ID.
     *
     * @param Temboo_Session $session The session that owns this StatusesShow Choreo.
     * @return Twitter_Tweets_StatusesShow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/StatusesShow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this StatusesShow Choreo.
     *
     * @param Twitter_Tweets_StatusesShow_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesShow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_StatusesShow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusesShow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesShow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_StatusesShow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusesShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the StatusesShow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesShow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusesShow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this StatusesShow Choreo.
     *
     * @param string $value (required, string) The numerical ID of the desired Tweet.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this StatusesShow Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the IncludeMyRetweet input for this StatusesShow Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, any Tweets returned that have been retweeted by the authenticating user will include an additional current_user_retweet node, containing the ID of the source status for the retweet.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setIncludeMyRetweet($value)
    {
        return $this->set('IncludeMyRetweet', $value);
    }

    /**
     * Set the value for the TrimUser input for this StatusesShow Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Tweets_StatusesShow_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the StatusesShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusesShow Choreo.
     *
     * @param Temboo_Session $session The session that owns this StatusesShow execution.
     * @param Twitter_Tweets_StatusesShow $choreo The choreography object for this execution.
     * @param Twitter_Tweets_StatusesShow_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesShow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_StatusesShow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusesShow execution.
     *
     * @return Twitter_Tweets_StatusesShow_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this StatusesShow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_StatusesShow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_StatusesShow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the StatusesShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesShow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the StatusesShow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_StatusesShow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this StatusesShow execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a collection of relevant Tweets matching a specified query.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Tweets extends Temboo_Choreography
{
    /**
     * Retrieves a collection of relevant Tweets matching a specified query.
     *
     * @param Temboo_Session $session The session that owns this Tweets Choreo.
     * @return Twitter_Search_Tweets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Search/Tweets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Tweets Choreo.
     *
     * @param Twitter_Search_Tweets_Inputs|array $inputs (optional) Inputs as Twitter_Search_Tweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Search_Tweets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Search_Tweets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Tweets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Search_Tweets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Search_Tweets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Tweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Tweets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Tweets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Search_Tweets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Tweets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Tweets Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Tweets Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Tweets Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Tweets Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this Tweets Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Geocode input for this Tweets Choreo.
     *
     * @param string $value (optional, string) Returns tweets by users located within a given radius of the given latitude/longitude. Formatted like: 37.781157,-122.398720,1mi.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setGeocode($value)
    {
        return $this->set('Geocode', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Tweets Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the Language input for this Tweets Choreo.
     *
     * @param string $value (optional, string) Restricts tweets to the given language, given by an ISO 639-1 code.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setLanguage($value)
    {
        return $this->set('Language', $value);
    }

    /**
     * Set the value for the MaxId input for this Tweets Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the Query input for this Tweets Choreo.
     *
     * @param string $value (required, string) A search query of up to 1,000 characters.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResultType input for this Tweets Choreo.
     *
     * @param string $value (optional, string) Specifies what type of search results you want to receive. The default is "mixed." Valid values are: mixed, recent, and popular.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setResultType($value)
    {
        return $this->set('ResultType', $value);
    }

    /**
     * Set the value for the SinceId input for this Tweets Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the Until input for this Tweets Choreo.
     *
     * @param string $value (optional, date) Returns tweets generated before the given date. Date should be formatted as YYYY-MM-DD.
     * @return Twitter_Search_Tweets_Inputs For method chaining.
     */
    public function setUntil($value)
    {
        return $this->set('Until', $value);
    }
}


/**
 * Execution object for the Tweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Tweets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Tweets Choreo.
     *
     * @param Temboo_Session $session The session that owns this Tweets execution.
     * @param Twitter_Search_Tweets $choreo The choreography object for this execution.
     * @param Twitter_Search_Tweets_Inputs|array $inputs (optional) Inputs as Twitter_Search_Tweets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Search_Tweets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Search_Tweets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Tweets execution.
     *
     * @return Twitter_Search_Tweets_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Tweets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Search_Tweets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Search_Tweets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Tweets Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Search_Tweets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Tweets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Search_Tweets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Tweets execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns detailed information about the relationship between two users.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow extends Temboo_Choreography
{
    /**
     * Returns detailed information about the relationship between two users.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsShow Choreo.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/FriendshipsShow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FriendshipsShow Choreo.
     *
     * @param Twitter_FriendsAndFollowers_FriendshipsShow_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsShow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FriendshipsShow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_FriendshipsShow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FriendshipsShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FriendshipsShow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FriendshipsShow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this FriendshipsShow Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this FriendshipsShow Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FriendshipsShow Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FriendshipsShow Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the SourceScreenName input for this FriendshipsShow Choreo.
     *
     * @param string $value (conditional, string) The screen_name of the subject user. Required unless specifying the SourceUserID instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setSourceScreenName($value)
    {
        return $this->set('SourceScreenName', $value);
    }

    /**
     * Set the value for the SourceUserID input for this FriendshipsShow Choreo.
     *
     * @param int $value (conditional, integer) The ID of the subject user. Required unless specifying the SourceScreenName instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setSourceUserID($value)
    {
        return $this->set('SourceUserID', $value);
    }

    /**
     * Set the value for the TargetScreenName input for this FriendshipsShow Choreo.
     *
     * @param string $value (conditional, string) The screen_name of the target user. Required unless specifying the TargetUserID instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setTargetScreenName($value)
    {
        return $this->set('TargetScreenName', $value);
    }

    /**
     * Set the value for the TargetUserID input for this FriendshipsShow Choreo.
     *
     * @param int $value (conditional, integer) The ID of the target user. Required unless specifying the TargetScreenName instead.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Inputs For method chaining.
     */
    public function setTargetUserID($value)
    {
        return $this->set('TargetUserID', $value);
    }
}


/**
 * Execution object for the FriendshipsShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FriendshipsShow Choreo.
     *
     * @param Temboo_Session $session The session that owns this FriendshipsShow execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsShow $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_FriendshipsShow_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_FriendshipsShow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_FriendshipsShow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FriendshipsShow execution.
     *
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FriendshipsShow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_FriendshipsShow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FriendshipsShow Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_FriendshipsShow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FriendshipsShow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_FriendshipsShow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FriendshipsShow execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent direct messages sent to the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent direct messages sent to the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this GetDirectMessages Choreo.
     * @return Twitter_DirectMessages_GetDirectMessages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/GetDirectMessages/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDirectMessages Choreo.
     *
     * @param Twitter_DirectMessages_GetDirectMessages_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetDirectMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetDirectMessages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_GetDirectMessages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDirectMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_GetDirectMessages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDirectMessages Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDirectMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDirectMessages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetDirectMessages Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetDirectMessages Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetDirectMessages Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetDirectMessages Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this GetDirectMessages Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve up to a maximum of 200.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this GetDirectMessages Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxID input for this GetDirectMessages Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the Page input for this GetDirectMessages Choreo.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceID input for this GetDirectMessages Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }

    /**
     * Set the value for the SkipStatus input for this GetDirectMessages Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, statuses will not be included in the returned user objects.
     * @return Twitter_DirectMessages_GetDirectMessages_Inputs For method chaining.
     */
    public function setSkipStatus($value)
    {
        return $this->set('SkipStatus', $value);
    }
}


/**
 * Execution object for the GetDirectMessages Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDirectMessages Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDirectMessages execution.
     * @param Twitter_DirectMessages_GetDirectMessages $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_GetDirectMessages_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetDirectMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetDirectMessages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_GetDirectMessages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDirectMessages execution.
     *
     * @return Twitter_DirectMessages_GetDirectMessages_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetDirectMessages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_GetDirectMessages_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDirectMessages Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetDirectMessages_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDirectMessages Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_GetDirectMessages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDirectMessages execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a specific Twitter user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show extends Temboo_Choreography
{
    /**
     * Retrieves information about a specific Twitter user.
     *
     * @param Temboo_Session $session The session that owns this Show Choreo.
     * @return Twitter_Users_Show New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/Show/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Show Choreo.
     *
     * @param Twitter_Users_Show_Inputs|array $inputs (optional) Inputs as Twitter_Users_Show_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Show_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_Show_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Show Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Show_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_Show_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Show Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Show Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Show_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Show input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Show Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Show Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Show Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Show Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Show Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the ScreenName input for this Show Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. Required if UserId isn't specified.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this Show Choreo.
     *
     * @param int $value (conditional, integer) The ID of the user for whom to return results for. Required if ScreenName isn't specified.
     * @return Twitter_Users_Show_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the Show Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Show Choreo.
     *
     * @param Temboo_Session $session The session that owns this Show execution.
     * @param Twitter_Users_Show $choreo The choreography object for this execution.
     * @param Twitter_Users_Show_Inputs|array $inputs (optional) Inputs as Twitter_Users_Show_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Show_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_Show $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Show execution.
     *
     * @return Twitter_Users_Show_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Show execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_Show_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_Show_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Show Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Show_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Show Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_Show_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Show execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent direct messages sent by the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent direct messages sent by the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this DirectMessagesSent Choreo.
     * @return Twitter_DirectMessages_DirectMessagesSent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/DirectMessagesSent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DirectMessagesSent Choreo.
     *
     * @param Twitter_DirectMessages_DirectMessagesSent_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DirectMessagesSent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DirectMessagesSent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_DirectMessagesSent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DirectMessagesSent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_DirectMessagesSent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DirectMessagesSent Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DirectMessagesSent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DirectMessagesSent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DirectMessagesSent Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DirectMessagesSent Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DirectMessagesSent Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DirectMessagesSent Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this DirectMessagesSent Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve up to a maximum of 200.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this DirectMessagesSent Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxID input for this DirectMessagesSent Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the Page input for this DirectMessagesSent Choreo.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SinceID input for this DirectMessagesSent Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_DirectMessages_DirectMessagesSent_Inputs For method chaining.
     */
    public function setSinceID($value)
    {
        return $this->set('SinceID', $value);
    }
}


/**
 * Execution object for the DirectMessagesSent Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DirectMessagesSent Choreo.
     *
     * @param Temboo_Session $session The session that owns this DirectMessagesSent execution.
     * @param Twitter_DirectMessages_DirectMessagesSent $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_DirectMessagesSent_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DirectMessagesSent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DirectMessagesSent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_DirectMessagesSent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DirectMessagesSent execution.
     *
     * @return Twitter_DirectMessages_DirectMessagesSent_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DirectMessagesSent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_DirectMessagesSent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DirectMessagesSent Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DirectMessagesSent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DirectMessagesSent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_DirectMessagesSent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DirectMessagesSent execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns user objects for up to 100 Twitter users.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup extends Temboo_Choreography
{
    /**
     * Returns user objects for up to 100 Twitter users.
     *
     * @param Temboo_Session $session The session that owns this Lookup Choreo.
     * @return Twitter_Users_Lookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/Lookup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Lookup Choreo.
     *
     * @param Twitter_Users_Lookup_Inputs|array $inputs (optional) Inputs as Twitter_Users_Lookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Lookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_Lookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Lookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Lookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_Lookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Lookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Lookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Lookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Lookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Lookup Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Lookup Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Lookup Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Lookup Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Lookup Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the ScreenName input for this Lookup Choreo.
     *
     * @param string $value (conditional, string) A comma-separated list of up to 100 screen names. Required if UserId isn't specified.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this Lookup Choreo.
     *
     * @param int $value (conditional, integer) A comma-separated list of up to 100 user IDs. Required if ScreenName isn't specified.
     * @return Twitter_Users_Lookup_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the Lookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Lookup Choreo.
     *
     * @param Temboo_Session $session The session that owns this Lookup execution.
     * @param Twitter_Users_Lookup $choreo The choreography object for this execution.
     * @param Twitter_Users_Lookup_Inputs|array $inputs (optional) Inputs as Twitter_Users_Lookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Lookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_Lookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Lookup execution.
     *
     * @return Twitter_Users_Lookup_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Lookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_Lookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_Lookup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Lookup Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Lookup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Lookup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_Lookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Lookup execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the locations that Twitter has trending topic information for.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available extends Temboo_Choreography
{
    /**
     * Retrieves the locations that Twitter has trending topic information for.
     *
     * @param Temboo_Session $session The session that owns this Available Choreo.
     * @return Twitter_Trends_Available New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Trends/Available/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Available Choreo.
     *
     * @param Twitter_Trends_Available_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Available_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Available_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Trends_Available_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Available Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Available_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Trends_Available_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Available Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Available Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Trends_Available_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Available input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Available Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Available Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Available Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Available Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Trends_Available_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }
}


/**
 * Execution object for the Available Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Available Choreo.
     *
     * @param Temboo_Session $session The session that owns this Available execution.
     * @param Twitter_Trends_Available $choreo The choreography object for this execution.
     * @param Twitter_Trends_Available_Inputs|array $inputs (optional) Inputs as Twitter_Trends_Available_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Trends_Available_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Trends_Available $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Available execution.
     *
     * @return Twitter_Trends_Available_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Available execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Trends_Available_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Trends_Available_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Available Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Trends_Available_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Available Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Trends_Available_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Available execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of numeric IDs for every user the specified user is following (also known as their "friends").
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every user the specified user is following (also known as their "friends").
     *
     * @param Temboo_Session $session The session that owns this GetFriendsByID Choreo.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/GetFriendsByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFriendsByID Choreo.
     *
     * @param Twitter_FriendsAndFollowers_GetFriendsByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFriendsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_GetFriendsByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFriendsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_GetFriendsByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFriendsByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFriendsByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFriendsByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFriendsByID Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFriendsByID Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFriendsByID Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFriendsByID Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this GetFriendsByID Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetFriendsByID Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this GetFriendsByID Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }

    /**
     * Set the value for the UserID input for this GetFriendsByID Choreo.
     *
     * @param int $value (conditional, integer) The ID of the user for whom to return results for. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFriendsByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFriendsByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFriendsByID execution.
     * @param Twitter_FriendsAndFollowers_GetFriendsByID $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_GetFriendsByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFriendsByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_GetFriendsByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFriendsByID execution.
     *
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetFriendsByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_GetFriendsByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFriendsByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFriendsByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFriendsByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFriendsByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFriendsByID execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Locates places near the given coordinates which have a similar name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces extends Temboo_Choreography
{
    /**
     * Locates places near the given coordinates which have a similar name.
     *
     * @param Temboo_Session $session The session that owns this SimilarPlaces Choreo.
     * @return Twitter_PlacesAndGeo_SimilarPlaces New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/SimilarPlaces/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SimilarPlaces Choreo.
     *
     * @param Twitter_PlacesAndGeo_SimilarPlaces_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_SimilarPlaces_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_SimilarPlaces_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SimilarPlaces Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_SimilarPlaces_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SimilarPlaces Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SimilarPlaces Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SimilarPlaces input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Callback input for this SimilarPlaces Choreo.
     *
     * @param string $value (optional, string) If supplied, the response will use the JSONP format with a callback of the given name.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContainedWithin input for this SimilarPlaces Choreo.
     *
     * @param string $value (optional, string) This is the place_id which you would like to restrict the search results to. This id can be retrieved with the GetPlaceInformation Choreo.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setContainedWithin($value)
    {
        return $this->set('ContainedWithin', $value);
    }

    /**
     * Set the value for the Latitude input for this SimilarPlaces Choreo.
     *
     * @param float $value (required, decimal) The latitude to search around.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SimilarPlaces Choreo.
     *
     * @param float $value (required, decimal) The longitude to search around.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxResults input for this SimilarPlaces Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Name input for this SimilarPlaces Choreo.
     *
     * @param string $value (required, string) The name of the place.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }
}


/**
 * Execution object for the SimilarPlaces Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SimilarPlaces Choreo.
     *
     * @param Temboo_Session $session The session that owns this SimilarPlaces execution.
     * @param Twitter_PlacesAndGeo_SimilarPlaces $choreo The choreography object for this execution.
     * @param Twitter_PlacesAndGeo_SimilarPlaces_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_SimilarPlaces_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_SimilarPlaces $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SimilarPlaces execution.
     *
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SimilarPlaces execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_SimilarPlaces_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SimilarPlaces Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_SimilarPlaces_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SimilarPlaces Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_SimilarPlaces_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SimilarPlaces execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to search public user accounts on Twitter.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search extends Temboo_Choreography
{
    /**
     * Allows you to search public user accounts on Twitter.
     *
     * @param Temboo_Session $session The session that owns this Search Choreo.
     * @return Twitter_Users_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Users/Search/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Search Choreo.
     *
     * @param Twitter_Users_Search_Inputs|array $inputs (optional) Inputs as Twitter_Users_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Users_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Users_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Users_Search_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Search input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Search Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Search Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Search Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Search Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this Search Choreo.
     *
     * @param int $value (optional, integer) The number of potential user results to retrieve per page. This value has a maximum of 20.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the Page input for this Search Choreo.
     *
     * @param int $value (optional, integer) Specifies the page of results to retrieve.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the SearchString input for this Search Choreo.
     *
     * @param string $value (required, string) The string used to search for users.
     * @return Twitter_Users_Search_Inputs For method chaining.
     */
    public function setSearchString($value)
    {
        return $this->set('SearchString', $value);
    }
}


/**
 * Execution object for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search Choreo.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Twitter_Users_Search $choreo The choreography object for this execution.
     * @param Twitter_Users_Search_Inputs|array $inputs (optional) Inputs as Twitter_Users_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Users_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Users_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Twitter_Users_Search_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Search execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Users_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Users_Search_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Users_Search_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Search Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Users_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the most recent tweets posted by the authenticating user that have recently been retweeted by others.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe extends Temboo_Choreography
{
    /**
     * Retrieves the most recent tweets posted by the authenticating user that have recently been retweeted by others.
     *
     * @param Temboo_Session $session The session that owns this RetweetsOfMe Choreo.
     * @return Twitter_Timelines_RetweetsOfMe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/RetweetsOfMe/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetweetsOfMe Choreo.
     *
     * @param Twitter_Timelines_RetweetsOfMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetsOfMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetsOfMe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_RetweetsOfMe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetweetsOfMe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_RetweetsOfMe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetweetsOfMe Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetweetsOfMe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetweetsOfMe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this RetweetsOfMe Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this RetweetsOfMe Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this RetweetsOfMe Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this RetweetsOfMe Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Count input for this RetweetsOfMe Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this RetweetsOfMe Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the IncludeUserEntities input for this RetweetsOfMe Choreo.
     *
     * @param bool $value (optional, boolean) The user entities node will not be included when set to false.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setIncludeUserEntities($value)
    {
        return $this->set('IncludeUserEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this RetweetsOfMe Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the SinceId input for this RetweetsOfMe Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this RetweetsOfMe Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_RetweetsOfMe_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the RetweetsOfMe Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetweetsOfMe Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetweetsOfMe execution.
     * @param Twitter_Timelines_RetweetsOfMe $choreo The choreography object for this execution.
     * @param Twitter_Timelines_RetweetsOfMe_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_RetweetsOfMe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_RetweetsOfMe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_RetweetsOfMe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetweetsOfMe execution.
     *
     * @return Twitter_Timelines_RetweetsOfMe_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this RetweetsOfMe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_RetweetsOfMe_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetweetsOfMe Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_RetweetsOfMe_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetweetsOfMe Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_RetweetsOfMe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetweetsOfMe execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a single direct message, specified by an id.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID extends Temboo_Choreography
{
    /**
     * Retrieves a single direct message, specified by an id.
     *
     * @param Temboo_Session $session The session that owns this GetMessageByID Choreo.
     * @return Twitter_DirectMessages_GetMessageByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/GetMessageByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMessageByID Choreo.
     *
     * @param Twitter_DirectMessages_GetMessageByID_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetMessageByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetMessageByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_GetMessageByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMessageByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_GetMessageByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMessageByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMessageByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMessageByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetMessageByID Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetMessageByID Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetMessageByID Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetMessageByID Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this GetMessageByID Choreo.
     *
     * @param int $value (required, integer) The ID of the direct message.
     * @return Twitter_DirectMessages_GetMessageByID_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the GetMessageByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMessageByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMessageByID execution.
     * @param Twitter_DirectMessages_GetMessageByID $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_GetMessageByID_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_GetMessageByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_GetMessageByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_GetMessageByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMessageByID execution.
     *
     * @return Twitter_DirectMessages_GetMessageByID_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetMessageByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_GetMessageByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMessageByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_GetMessageByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMessageByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_GetMessageByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMessageByID execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Given a latitude and a longitude coordinates, returns up to 20 places that can be used as a Place ID when updating a status.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode extends Temboo_Choreography
{
    /**
     * Given a latitude and a longitude coordinates, returns up to 20 places that can be used as a Place ID when updating a status.
     *
     * @param Temboo_Session $session The session that owns this ReverseGeocode Choreo.
     * @return Twitter_PlacesAndGeo_ReverseGeocode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/ReverseGeocode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReverseGeocode Choreo.
     *
     * @param Twitter_PlacesAndGeo_ReverseGeocode_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_ReverseGeocode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_ReverseGeocode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReverseGeocode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_ReverseGeocode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReverseGeocode Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReverseGeocode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReverseGeocode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this ReverseGeocode Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this ReverseGeocode Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Accuracy input for this ReverseGeocode Choreo.
     *
     * @param string $value (optional, string) A hint on the "region" in which to search. If a number, then this is a radius in meters. You can also specify feet by using the ft suffix (i.e. 5ft).
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Callback input for this ReverseGeocode Choreo.
     *
     * @param string $value (optional, string) If supplied, the response will use the JSONP format with a callback of the given name.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this ReverseGeocode Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this ReverseGeocode Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Granularity input for this ReverseGeocode Choreo.
     *
     * @param string $value (optional, string) This is the minimal granularity of place types to return and must be one of: poi, neighborhood, city, admin or country. Defaults to neighborhood.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setGranularity($value)
    {
        return $this->set('Granularity', $value);
    }

    /**
     * Set the value for the Latitude input for this ReverseGeocode Choreo.
     *
     * @param float $value (required, decimal) The latitude to search around.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this ReverseGeocode Choreo.
     *
     * @param float $value (required, decimal) The longitude to search around.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxResults input for this ReverseGeocode Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }
}


/**
 * Execution object for the ReverseGeocode Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReverseGeocode Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReverseGeocode execution.
     * @param Twitter_PlacesAndGeo_ReverseGeocode $choreo The choreography object for this execution.
     * @param Twitter_PlacesAndGeo_ReverseGeocode_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_ReverseGeocode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_ReverseGeocode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReverseGeocode execution.
     *
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this ReverseGeocode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_ReverseGeocode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReverseGeocode Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_ReverseGeocode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReverseGeocode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_ReverseGeocode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReverseGeocode execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of numeric IDs for every user who has a pending request to follow the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every user who has a pending request to follow the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this IncomingFriendships Choreo.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/IncomingFriendships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this IncomingFriendships Choreo.
     *
     * @param Twitter_FriendsAndFollowers_IncomingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_IncomingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_IncomingFriendships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IncomingFriendships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_IncomingFriendships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IncomingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the IncomingFriendships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IncomingFriendships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this IncomingFriendships Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this IncomingFriendships Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this IncomingFriendships Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this IncomingFriendships Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this IncomingFriendships Choreo.
     *
     * @param int $value (optional, integer) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this IncomingFriendships Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }
}


/**
 * Execution object for the IncomingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IncomingFriendships Choreo.
     *
     * @param Temboo_Session $session The session that owns this IncomingFriendships execution.
     * @param Twitter_FriendsAndFollowers_IncomingFriendships $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_IncomingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_IncomingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_IncomingFriendships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IncomingFriendships execution.
     *
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this IncomingFriendships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_IncomingFriendships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the IncomingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_IncomingFriendships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the IncomingFriendships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_IncomingFriendships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this IncomingFriendships execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Twitter access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Twitter access token and access token secret for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Twitter_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Twitter_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Twitter_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FinalizeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The oauth_token_secret retrieved during the OAuth process. This is returned by the InitializeOAuth Choreo.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Twitter_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }
}


/**
 * Execution object for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Twitter_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Twitter_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Twitter_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Twitter_OAuth_FinalizeOAuth_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this FinalizeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessTokenSecret" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token Secret retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessTokenSecret()
    {
        return $this->get('AccessTokenSecret');
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "ScreenName" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Twitter screen name associated with the access token that is being retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getScreenName()
    {
        return $this->get('ScreenName');
    }
    /**
     * Retrieve the value for the "UserID" output from this FinalizeOAuth execution.
     *
     * @return int (integer) The Twitter user id associated with the AccessToken that is being retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserID()
    {
        return $this->get('UserID');
    }
}

/**
 * Deletes a specified status.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy extends Temboo_Choreography
{
    /**
     * Deletes a specified status.
     *
     * @param Temboo_Session $session The session that owns this StatusesDestroy Choreo.
     * @return Twitter_Tweets_StatusesDestroy New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Tweets/StatusesDestroy/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this StatusesDestroy Choreo.
     *
     * @param Twitter_Tweets_StatusesDestroy_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesDestroy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesDestroy_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Tweets_StatusesDestroy_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StatusesDestroy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesDestroy_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Tweets_StatusesDestroy_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StatusesDestroy Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the StatusesDestroy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Tweets_StatusesDestroy_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StatusesDestroy input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this StatusesDestroy Choreo.
     *
     * @param string $value (required, string) The numerical ID of the status to delete.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the TrimUser input for this StatusesDestroy Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID.
     * @return Twitter_Tweets_StatusesDestroy_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the StatusesDestroy Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StatusesDestroy Choreo.
     *
     * @param Temboo_Session $session The session that owns this StatusesDestroy execution.
     * @param Twitter_Tweets_StatusesDestroy $choreo The choreography object for this execution.
     * @param Twitter_Tweets_StatusesDestroy_Inputs|array $inputs (optional) Inputs as Twitter_Tweets_StatusesDestroy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Tweets_StatusesDestroy_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Tweets_StatusesDestroy $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StatusesDestroy execution.
     *
     * @return Twitter_Tweets_StatusesDestroy_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this StatusesDestroy execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Tweets_StatusesDestroy_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Tweets_StatusesDestroy_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the StatusesDestroy Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Tweets_StatusesDestroy_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the StatusesDestroy Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Tweets_StatusesDestroy_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this StatusesDestroy execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to unfollow another Twitter user when you specify a Twitter user ID or screen name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship extends Temboo_Choreography
{
    /**
     * Allows you to unfollow another Twitter user when you specify a Twitter user ID or screen name.
     *
     * @param Temboo_Session $session The session that owns this DeleteFriendship Choreo.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/DeleteFriendship/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFriendship Choreo.
     *
     * @param Twitter_FriendsAndFollowers_DeleteFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_DeleteFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_DeleteFriendship_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFriendship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_DeleteFriendship_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFriendship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFriendship input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DeleteFriendship Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DeleteFriendship Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DeleteFriendship Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DeleteFriendship Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this DeleteFriendship Choreo.
     *
     * @param string $value (conditional, string) The screen name for the friend you want to unfollow. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this DeleteFriendship Choreo.
     *
     * @param int $value (conditional, integer) The user ID for the friend you want to unfollow. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the DeleteFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFriendship Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFriendship execution.
     * @param Twitter_FriendsAndFollowers_DeleteFriendship $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_DeleteFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_DeleteFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_DeleteFriendship $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFriendship execution.
     *
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DeleteFriendship execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_DeleteFriendship_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_DeleteFriendship_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFriendship Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_DeleteFriendship_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFriendship execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sends a new direct message to the specified user from the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage extends Temboo_Choreography
{
    /**
     * Sends a new direct message to the specified user from the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this SendDirectMessage Choreo.
     * @return Twitter_DirectMessages_SendDirectMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/SendDirectMessage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SendDirectMessage Choreo.
     *
     * @param Twitter_DirectMessages_SendDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_SendDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_SendDirectMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_SendDirectMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendDirectMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_SendDirectMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SendDirectMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendDirectMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ScreenName input for this SendDirectMessage Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user who should receive the direct message. Required unless specifying the UserId.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the Text input for this SendDirectMessage Choreo.
     *
     * @param string $value (required, string) The text for the direct message. Max characters is 140.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the UserID input for this SendDirectMessage Choreo.
     *
     * @param int $value (conditional, integer) The ID of the user who should receive the direct message. Required unless specifying the ScreenName.
     * @return Twitter_DirectMessages_SendDirectMessage_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the SendDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendDirectMessage Choreo.
     *
     * @param Temboo_Session $session The session that owns this SendDirectMessage execution.
     * @param Twitter_DirectMessages_SendDirectMessage $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_SendDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_SendDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_SendDirectMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_SendDirectMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendDirectMessage execution.
     *
     * @return Twitter_DirectMessages_SendDirectMessage_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this SendDirectMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_SendDirectMessage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SendDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_SendDirectMessage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SendDirectMessage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_SendDirectMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SendDirectMessage execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a collection of the most recent Tweets and retweets posted by the authenticating user and the users they follow.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline extends Temboo_Choreography
{
    /**
     * Retrieves a collection of the most recent Tweets and retweets posted by the authenticating user and the users they follow.
     *
     * @param Temboo_Session $session The session that owns this HomeTimeline Choreo.
     * @return Twitter_Timelines_HomeTimeline New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/HomeTimeline/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HomeTimeline Choreo.
     *
     * @param Twitter_Timelines_HomeTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_HomeTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_HomeTimeline_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_HomeTimeline_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HomeTimeline Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_HomeTimeline_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_HomeTimeline_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HomeTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HomeTimeline Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_HomeTimeline_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HomeTimeline input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this HomeTimeline Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this HomeTimeline Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this HomeTimeline Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this HomeTimeline Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this HomeTimeline Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this HomeTimeline Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the ExcludeReplies input for this HomeTimeline Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to prevent replies from appearing in the returned timeline.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setExcludeReplies($value)
    {
        return $this->set('ExcludeReplies', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this HomeTimeline Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this HomeTimeline Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the SinceId input for this HomeTimeline Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this HomeTimeline Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false.
     * @return Twitter_Timelines_HomeTimeline_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the HomeTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HomeTimeline Choreo.
     *
     * @param Temboo_Session $session The session that owns this HomeTimeline execution.
     * @param Twitter_Timelines_HomeTimeline $choreo The choreography object for this execution.
     * @param Twitter_Timelines_HomeTimeline_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_HomeTimeline_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_HomeTimeline_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_HomeTimeline $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HomeTimeline execution.
     *
     * @return Twitter_Timelines_HomeTimeline_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this HomeTimeline execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_HomeTimeline_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_HomeTimeline_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HomeTimeline Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_HomeTimeline_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HomeTimeline Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_HomeTimeline_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this HomeTimeline execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified Direct Message.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage extends Temboo_Choreography
{
    /**
     * Deletes a specified Direct Message.
     *
     * @param Temboo_Session $session The session that owns this DestroyDirectMessage Choreo.
     * @return Twitter_DirectMessages_DestroyDirectMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/DirectMessages/DestroyDirectMessage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DestroyDirectMessage Choreo.
     *
     * @param Twitter_DirectMessages_DestroyDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DestroyDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_DirectMessages_DestroyDirectMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DestroyDirectMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_DirectMessages_DestroyDirectMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DestroyDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DestroyDirectMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DestroyDirectMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this DestroyDirectMessage Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this DestroyDirectMessage Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this DestroyDirectMessage Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this DestroyDirectMessage Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ID input for this DestroyDirectMessage Choreo.
     *
     * @param int $value (required, integer) The ID of the direct message.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this DestroyDirectMessage Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }
}


/**
 * Execution object for the DestroyDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DestroyDirectMessage Choreo.
     *
     * @param Temboo_Session $session The session that owns this DestroyDirectMessage execution.
     * @param Twitter_DirectMessages_DestroyDirectMessage $choreo The choreography object for this execution.
     * @param Twitter_DirectMessages_DestroyDirectMessage_Inputs|array $inputs (optional) Inputs as Twitter_DirectMessages_DestroyDirectMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_DirectMessages_DestroyDirectMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DestroyDirectMessage execution.
     *
     * @return Twitter_DirectMessages_DestroyDirectMessage_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this DestroyDirectMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_DirectMessages_DestroyDirectMessage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DestroyDirectMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_DirectMessages_DestroyDirectMessage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DestroyDirectMessage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_DirectMessages_DestroyDirectMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DestroyDirectMessage execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to follow another Twitter user by specifying a Twitter user id or screen name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship extends Temboo_Choreography
{
    /**
     * Allows you to follow another Twitter user by specifying a Twitter user id or screen name.
     *
     * @param Temboo_Session $session The session that owns this CreateFriendship Choreo.
     * @return Twitter_FriendsAndFollowers_CreateFriendship New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/CreateFriendship/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFriendship Choreo.
     *
     * @param Twitter_FriendsAndFollowers_CreateFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_CreateFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_CreateFriendship_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFriendship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_CreateFriendship_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFriendship Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFriendship input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this CreateFriendship Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateFriendship Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this CreateFriendship Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this CreateFriendship Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Follow input for this CreateFriendship Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag that enables notifications for the target user when set to true.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setFollow($value)
    {
        return $this->set('Follow', $value);
    }

    /**
     * Set the value for the ScreenName input for this CreateFriendship Choreo.
     *
     * @param string $value (conditional, string) The screen name for the friend you want to create a friendship with. Required if UserId isn't specified.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the UserId input for this CreateFriendship Choreo.
     *
     * @param int $value (conditional, integer) The user id for the friend you want to create a friendship with. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the CreateFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFriendship Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFriendship execution.
     * @param Twitter_FriendsAndFollowers_CreateFriendship $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_CreateFriendship_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_CreateFriendship_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_CreateFriendship $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFriendship execution.
     *
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this CreateFriendship execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_CreateFriendship_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFriendship Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_CreateFriendship_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFriendship Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_CreateFriendship_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFriendship execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for places that can be attached to a status update using a latitude and a longitude pair, an IP address, or a name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch extends Temboo_Choreography
{
    /**
     * Searches for places that can be attached to a status update using a latitude and a longitude pair, an IP address, or a name.
     *
     * @param Temboo_Session $session The session that owns this GeoSearch Choreo.
     * @return Twitter_PlacesAndGeo_GeoSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/GeoSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GeoSearch Choreo.
     *
     * @param Twitter_PlacesAndGeo_GeoSearch_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GeoSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GeoSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_GeoSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GeoSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_GeoSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GeoSearch Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GeoSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GeoSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GeoSearch Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GeoSearch Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Accuracy input for this GeoSearch Choreo.
     *
     * @param string $value (optional, string) A hint on the "region" in which to search. If a number, then this is a radius in meters. You can also specify feet by using the ft suffix (i.e. 5ft).
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setAccuracy($value)
    {
        return $this->set('Accuracy', $value);
    }

    /**
     * Set the value for the Callback input for this GeoSearch Choreo.
     *
     * @param string $value (optional, string) If supplied, the response will use the JSONP format with a callback of the given name.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GeoSearch Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GeoSearch Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContainedWithin input for this GeoSearch Choreo.
     *
     * @param string $value (optional, string) This is the place_id which you would like to restrict the search results to. This id can be retrieved with the GetPlaceInformation Choreo.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setContainedWithin($value)
    {
        return $this->set('ContainedWithin', $value);
    }

    /**
     * Set the value for the Granularity input for this GeoSearch Choreo.
     *
     * @param string $value (optional, string) This is the minimal granularity of place types to return and must be one of: poi, neighborhood, city, admin or country. Defaults to neighborhood.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setGranularity($value)
    {
        return $this->set('Granularity', $value);
    }

    /**
     * Set the value for the IP input for this GeoSearch Choreo.
     *
     * @param string $value (conditional, string) An IP address. Used when attempting to fix geolocation based off of the user's IP address. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setIP($value)
    {
        return $this->set('IP', $value);
    }

    /**
     * Set the value for the Latitude input for this GeoSearch Choreo.
     *
     * @param float $value (conditional, decimal) The latitude to search around. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GeoSearch Choreo.
     *
     * @param float $value (conditional, decimal) The longitude to search around. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxResults input for this GeoSearch Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results to return.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the Query input for this GeoSearch Choreo.
     *
     * @param string $value (conditional, string) Free-form text to match against while executing a geo-based query. You must provide Latitude and Longitude, IP, or Query.
     * @return Twitter_PlacesAndGeo_GeoSearch_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }
}


/**
 * Execution object for the GeoSearch Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GeoSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this GeoSearch execution.
     * @param Twitter_PlacesAndGeo_GeoSearch $choreo The choreography object for this execution.
     * @param Twitter_PlacesAndGeo_GeoSearch_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GeoSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GeoSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_GeoSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GeoSearch execution.
     *
     * @return Twitter_PlacesAndGeo_GeoSearch_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GeoSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_GeoSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GeoSearch Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GeoSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GeoSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GeoSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GeoSearch execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of numeric IDs for every user following the specified user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every user following the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetFollowersByID Choreo.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/GetFollowersByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFollowersByID Choreo.
     *
     * @param Twitter_FriendsAndFollowers_GetFollowersByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFollowersByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_GetFollowersByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFollowersByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_GetFollowersByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFollowersByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFollowersByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFollowersByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetFollowersByID Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetFollowersByID Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetFollowersByID Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetFollowersByID Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this GetFollowersByID Choreo.
     *
     * @param string $value (optional, string) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetFollowersByID Choreo.
     *
     * @param string $value (conditional, string) The screen name of the user for whom to return results for. Required if UserID isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this GetFollowersByID Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }

    /**
     * Set the value for the UserID input for this GetFollowersByID Choreo.
     *
     * @param int $value (conditional, integer) The ID of the user for whom to return results for. Required if ScreenName isn't specified.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetFollowersByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFollowersByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFollowersByID execution.
     * @param Twitter_FriendsAndFollowers_GetFollowersByID $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_GetFollowersByID_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_GetFollowersByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_GetFollowersByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFollowersByID execution.
     *
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetFollowersByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_GetFollowersByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFollowersByID Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_GetFollowersByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFollowersByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_GetFollowersByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFollowersByID execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the 20 most recent mentions for the authenticating user.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions extends Temboo_Choreography
{
    /**
     * Retrieves the 20 most recent mentions for the authenticating user.
     *
     * @param Temboo_Session $session The session that owns this Mentions Choreo.
     * @return Twitter_Timelines_Mentions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/Timelines/Mentions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Mentions Choreo.
     *
     * @param Twitter_Timelines_Mentions_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_Mentions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_Mentions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_Timelines_Mentions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Mentions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_Mentions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_Timelines_Mentions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Mentions Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Mentions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_Timelines_Mentions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Mentions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this Mentions Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.n
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this Mentions Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this Mentions Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this Mentions Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ContributorDetails input for this Mentions Choreo.
     *
     * @param bool $value (optional, boolean) Set to true to include the screen_name of the contributor. By default only the user_id of the contributor is included.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setContributorDetails($value)
    {
        return $this->set('ContributorDetails', $value);
    }

    /**
     * Set the value for the Count input for this Mentions Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of tweets to retrieve. Must be less than or equal to 200. Defaults to 20.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the IncludeEntities input for this Mentions Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, the response will include the "entities" node.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setIncludeEntities($value)
    {
        return $this->set('IncludeEntities', $value);
    }

    /**
     * Set the value for the MaxId input for this Mentions Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID less than (older than) or equal to the specified ID.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setMaxId($value)
    {
        return $this->set('MaxId', $value);
    }

    /**
     * Set the value for the SinceId input for this Mentions Choreo.
     *
     * @param int $value (optional, integer) Returns results with an ID greater than (more recent than) the specified ID.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setSinceId($value)
    {
        return $this->set('SinceId', $value);
    }

    /**
     * Set the value for the TrimUser input for this Mentions Choreo.
     *
     * @param bool $value (optional, boolean) When set to true, each tweet returned in a timeline will include a user object including only the status authors numerical ID. Defaults to false, which returns the complete user object.
     * @return Twitter_Timelines_Mentions_Inputs For method chaining.
     */
    public function setTrimUser($value)
    {
        return $this->set('TrimUser', $value);
    }
}


/**
 * Execution object for the Mentions Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Mentions Choreo.
     *
     * @param Temboo_Session $session The session that owns this Mentions execution.
     * @param Twitter_Timelines_Mentions $choreo The choreography object for this execution.
     * @param Twitter_Timelines_Mentions_Inputs|array $inputs (optional) Inputs as Twitter_Timelines_Mentions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_Timelines_Mentions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_Timelines_Mentions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Mentions execution.
     *
     * @return Twitter_Timelines_Mentions_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this Mentions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_Timelines_Mentions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_Timelines_Mentions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Mentions Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_Timelines_Mentions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Mentions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_Timelines_Mentions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Mentions execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Twitter_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Twitter_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Twitter_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_OAuth_InitializeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InitializeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return Twitter_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Twitter_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Twitter_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Twitter_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Twitter_OAuth_InitializeOAuth_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this InitializeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the application's user needs to go to in order to grant access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizationURL()
    {
        return $this->get('AuthorizationURL');
    }
    /**
     * Retrieve the value for the "CallbackID" output from this InitializeOAuth execution.
     *
     * @return string (string) An ID used to retrieve the callback data that Temboo stores once your application's user authorizes.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCallbackID()
    {
        return $this->get('CallbackID');
    }
    /**
     * Retrieve the value for the "OAuthTokenSecret" output from this InitializeOAuth execution.
     *
     * @return string (string) The temporary OAuth Token Secret that can be exchanged for permanent tokens using the FinalizeOAuth Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthTokenSecret()
    {
        return $this->get('OAuthTokenSecret');
    }
}

/**
 * Searches for places that can be attached to a statuses/update using a latitude and a longitude pair, an IP address, or a name.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation extends Temboo_Choreography
{
    /**
     * Searches for places that can be attached to a statuses/update using a latitude and a longitude pair, an IP address, or a name.
     *
     * @param Temboo_Session $session The session that owns this GetPlaceInformation Choreo.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/PlacesAndGeo/GetPlaceInformation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPlaceInformation Choreo.
     *
     * @param Twitter_PlacesAndGeo_GetPlaceInformation_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GetPlaceInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_PlacesAndGeo_GetPlaceInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPlaceInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_PlacesAndGeo_GetPlaceInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPlaceInformation Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPlaceInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPlaceInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the PlaceId input for this GetPlaceInformation Choreo.
     *
     * @param string $value (required, string) The id for a place in the world. These IDs can be retrieved from the ReverseGeocode Choreo.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Inputs For method chaining.
     */
    public function setPlaceId($value)
    {
        return $this->set('PlaceId', $value);
    }
}


/**
 * Execution object for the GetPlaceInformation Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPlaceInformation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPlaceInformation execution.
     * @param Twitter_PlacesAndGeo_GetPlaceInformation $choreo The choreography object for this execution.
     * @param Twitter_PlacesAndGeo_GetPlaceInformation_Inputs|array $inputs (optional) Inputs as Twitter_PlacesAndGeo_GetPlaceInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_PlacesAndGeo_GetPlaceInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPlaceInformation execution.
     *
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this GetPlaceInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_PlacesAndGeo_GetPlaceInformation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPlaceInformation Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_PlacesAndGeo_GetPlaceInformation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPlaceInformation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_PlacesAndGeo_GetPlaceInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPlaceInformation execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of numeric IDs for every protected user for whom the authenticating user has a pending follow request.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships extends Temboo_Choreography
{
    /**
     * Retrieves a list of numeric IDs for every protected user for whom the authenticating user has a pending follow request.
     *
     * @param Temboo_Session $session The session that owns this OutgoingFriendships Choreo.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twitter/FriendsAndFollowers/OutgoingFriendships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this OutgoingFriendships Choreo.
     *
     * @param Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twitter_FriendsAndFollowers_OutgoingFriendships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this OutgoingFriendships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the OutgoingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the OutgoingFriendships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this OutgoingFriendships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessTokenSecret input for this OutgoingFriendships Choreo.
     *
     * @param string $value (required, string) The Access Token Secret provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this OutgoingFriendships Choreo.
     *
     * @param string $value (required, string) The Access Token provided by Twitter or retrieved during the OAuth process.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ConsumerKey input for this OutgoingFriendships Choreo.
     *
     * @param string $value (required, string) The Consumer Key provided by Twitter.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setConsumerKey($value)
    {
        return $this->set('ConsumerKey', $value);
    }

    /**
     * Set the value for the ConsumerSecret input for this OutgoingFriendships Choreo.
     *
     * @param string $value (required, string) The Consumer Secret provided by Twitter.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setConsumerSecret($value)
    {
        return $this->set('ConsumerSecret', $value);
    }

    /**
     * Set the value for the Cursor input for this OutgoingFriendships Choreo.
     *
     * @param int $value (optional, integer) Allows you to pass in the previous_cursor or next_cursor in order to page through results.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setCursor($value)
    {
        return $this->set('Cursor', $value);
    }

    /**
     * Set the value for the StringifyIDs input for this OutgoingFriendships Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating that Tweet IDs should be returned as strings.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs For method chaining.
     */
    public function setStringifyIDs($value)
    {
        return $this->set('StringifyIDs', $value);
    }
}


/**
 * Execution object for the OutgoingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the OutgoingFriendships Choreo.
     *
     * @param Temboo_Session $session The session that owns this OutgoingFriendships execution.
     * @param Twitter_FriendsAndFollowers_OutgoingFriendships $choreo The choreography object for this execution.
     * @param Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs|array $inputs (optional) Inputs as Twitter_FriendsAndFollowers_OutgoingFriendships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twitter_FriendsAndFollowers_OutgoingFriendships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this OutgoingFriendships execution.
     *
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occurred in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appropriate results class for this OutgoingFriendships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twitter_FriendsAndFollowers_OutgoingFriendships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the OutgoingFriendships Choreo.
 *
 * @package Temboo
 * @subpackage Twitter
 */
class Twitter_FriendsAndFollowers_OutgoingFriendships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the OutgoingFriendships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twitter_FriendsAndFollowers_OutgoingFriendships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this OutgoingFriendships execution.
     *
     * @return string (json) The response from Twitter.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


?>
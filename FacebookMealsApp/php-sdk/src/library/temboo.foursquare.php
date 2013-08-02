<?php

/**
 * Temboo PHP SDK Foursquare classes
 *
 * Execute Choreographies from the Temboo Foursquare bundle.
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
 * @subpackage Foursquare
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Posts user-generated content from an external app to a Foursquare check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddPost extends Temboo_Choreography
{
    /**
     * Posts user-generated content from an external app to a Foursquare check-in.
     *
     * @param Temboo_Session $session The session that owns this AddPost Choreo.
     * @return Foursquare_Checkins_AddPost New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/AddPost/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddPost Choreo.
     *
     * @param Foursquare_Checkins_AddPost_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddPost_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_AddPost_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddPost_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_AddPost_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddPost Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddPost_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddPost Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddPost_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddPost input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this AddPost Choreo.
     *
     * @param string $value (required, string) The ID of the check-in to add a post to.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the ContentID input for this AddPost Choreo.
     *
     * @param string $value (optional, string) An ID for the post to be used in a native link. Can be up to 50 characters. The URL input must also be specified when using this parameter.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setContentID($value)
    {
        return $this->set('ContentID', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddPost Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddPost Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddPost Choreo.
     *
     * @param string $value (required, string) The text of the post. Max length is 200 characters.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the URL input for this AddPost Choreo.
     *
     * @param string $value (optional, string) A URL linking to more details. The following URL schemes are supported: http, https, foursquare, mailto, tel, and sms.
     * @return Foursquare_Checkins_AddPost_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the AddPost Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddPost_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddPost Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddPost execution.
     * @param Foursquare_Checkins_AddPost $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_AddPost_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddPost_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddPost_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_AddPost $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddPost execution.
     *
     * @return Foursquare_Checkins_AddPost_Results New results object.
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
     * Wraps results in appropriate results class for this AddPost execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_AddPost_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_AddPost_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddPost Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddPost_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddPost Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_AddPost_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddPost execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get information for the post that was created
	*/

	public function getPost() {
		return new Foursquare_Post_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "post"));
	}
}

/**
 * Retrieves a list of pending friend requests for the authenticated user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests extends Temboo_Choreography
{
    /**
     * Retrieves a list of pending friend requests for the authenticated user.
     *
     * @param Temboo_Session $session The session that owns this PendingFriendRequests Choreo.
     * @return Foursquare_Users_PendingFriendRequests New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/PendingFriendRequests/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PendingFriendRequests Choreo.
     *
     * @param Foursquare_Users_PendingFriendRequests_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PendingFriendRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PendingFriendRequests_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_PendingFriendRequests_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PendingFriendRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PendingFriendRequests_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_PendingFriendRequests_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PendingFriendRequests Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PendingFriendRequests Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PendingFriendRequests_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PendingFriendRequests input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this PendingFriendRequests Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PendingFriendRequests Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_PendingFriendRequests_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PendingFriendRequests Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PendingFriendRequests Choreo.
     *
     * @param Temboo_Session $session The session that owns this PendingFriendRequests execution.
     * @param Foursquare_Users_PendingFriendRequests $choreo The choreography object for this execution.
     * @param Foursquare_Users_PendingFriendRequests_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PendingFriendRequests_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PendingFriendRequests_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_PendingFriendRequests $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PendingFriendRequests execution.
     *
     * @return Foursquare_Users_PendingFriendRequests_Results New results object.
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
     * Wraps results in appropriate results class for this PendingFriendRequests execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_PendingFriendRequests_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_PendingFriendRequests_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PendingFriendRequests Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PendingFriendRequests_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PendingFriendRequests Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_PendingFriendRequests_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PendingFriendRequests execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get friend requests
	*/

	public function getUsers() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "requests");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_User_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns a list of venues near the current location with the most people currently checked in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues extends Temboo_Choreography
{
    /**
     * Returns a list of venues near the current location with the most people currently checked in.
     *
     * @param Temboo_Session $session The session that owns this TrendingVenues Choreo.
     * @return Foursquare_Venues_TrendingVenues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/TrendingVenues/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TrendingVenues Choreo.
     *
     * @param Foursquare_Venues_TrendingVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TrendingVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TrendingVenues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_TrendingVenues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TrendingVenues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TrendingVenues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_TrendingVenues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TrendingVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TrendingVenues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TrendingVenues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TrendingVenues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Latitude input for this TrendingVenues Choreo.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this TrendingVenues Choreo.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this TrendingVenues Choreo.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this TrendingVenues Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Radius input for this TrendingVenues Choreo.
     *
     * @param int $value (optional, integer) Radius in meters, up to approximately 2000 meters.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TrendingVenues Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_TrendingVenues_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the TrendingVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TrendingVenues Choreo.
     *
     * @param Temboo_Session $session The session that owns this TrendingVenues execution.
     * @param Foursquare_Venues_TrendingVenues $choreo The choreography object for this execution.
     * @param Foursquare_Venues_TrendingVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TrendingVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TrendingVenues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_TrendingVenues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TrendingVenues execution.
     *
     * @return Foursquare_Venues_TrendingVenues_Results New results object.
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
     * Wraps results in appropriate results class for this TrendingVenues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_TrendingVenues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_TrendingVenues_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TrendingVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TrendingVenues_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TrendingVenues Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_TrendingVenues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TrendingVenues execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get trending venues
	*/

	public function getVenues() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "venues");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Venue_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Retrieves user lists.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists extends Temboo_Choreography
{
    /**
     * Retrieves user lists.
     *
     * @param Temboo_Session $session The session that owns this UserLists Choreo.
     * @return Foursquare_Users_UserLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/UserLists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UserLists Choreo.
     *
     * @param Foursquare_Users_UserLists_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UserLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UserLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_UserLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UserLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_UserLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserLists Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UserLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_UserLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Group input for this UserLists Choreo.
     *
     * @param string $value (optional, string) Used to narrow down the lists to returns. Valid values are: created, edited, followed, friends, and suggested. See documentation for definitions of these parameter values.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setGroup($value)
    {
        return $this->set('Group', $value);
    }

    /**
     * Set the value for the Latitude input for this UserLists Choreo.
     *
     * @param float $value (conditional, decimal) Latitude of user's location. Required in order to return the suggested group.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this UserLists Choreo.
     *
     * @param float $value (conditional, decimal) Longitude of user's location. Required in order to return the suggested group.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this UserLists Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UserLists Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this UserLists Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get lists for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_UserLists_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UserLists Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserLists Choreo.
     *
     * @param Temboo_Session $session The session that owns this UserLists execution.
     * @param Foursquare_Users_UserLists $choreo The choreography object for this execution.
     * @param Foursquare_Users_UserLists_Inputs|array $inputs (optional) Inputs as Foursquare_Users_UserLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_UserLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_UserLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserLists execution.
     *
     * @return Foursquare_Users_UserLists_Results New results object.
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
     * Wraps results in appropriate results class for this UserLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_UserLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_UserLists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UserLists Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_UserLists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UserLists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_UserLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UserLists execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get list groups
	*/

	public function getListGroups() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "lists"), "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_ListGroup_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Allows you to access information about the current events at a place.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents extends Temboo_Choreography
{
    /**
     * Allows you to access information about the current events at a place.
     *
     * @param Temboo_Session $session The session that owns this VenueEvents Choreo.
     * @return Foursquare_Venues_VenueEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/VenueEvents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VenueEvents Choreo.
     *
     * @param Foursquare_Venues_VenueEvents_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_VenueEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_VenueEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueEvents Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VenueEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this VenueEvents Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueEvents Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this VenueEvents Choreo.
     *
     * @param string $value (required, string) The ID associated with the venue you want to retrieve details for.
     * @return Foursquare_Venues_VenueEvents_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the VenueEvents Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueEvents Choreo.
     *
     * @param Temboo_Session $session The session that owns this VenueEvents execution.
     * @param Foursquare_Venues_VenueEvents $choreo The choreography object for this execution.
     * @param Foursquare_Venues_VenueEvents_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_VenueEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueEvents execution.
     *
     * @return Foursquare_Venues_VenueEvents_Results New results object.
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
     * Wraps results in appropriate results class for this VenueEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_VenueEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_VenueEvents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VenueEvents Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueEvents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VenueEvents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_VenueEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VenueEvents execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get venue events
	*/

	public function getEvents() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "events"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Event_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns details about a given list. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails extends Temboo_Choreography
{
    /**
     * Returns details about a given list. 
     *
     * @param Temboo_Session $session The session that owns this ListDetails Choreo.
     * @return Foursquare_Lists_ListDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/ListDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListDetails Choreo.
     *
     * @param Foursquare_Lists_ListDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_ListDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_ListDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this ListDetails Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 500.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ListID input for this ListDetails Choreo.
     *
     * @param string $value (required, string) The id of a user-created or followed list or an id for a tip or todo in the form of USER_ID/tips or USER_ID/todos. When getting tips or todos for the acting user, the user id is not required.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this ListDetails Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this ListDetails Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListDetails Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListDetails Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get lists for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Lists_ListDetails_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListDetails execution.
     * @param Foursquare_Lists_ListDetails $choreo The choreography object for this execution.
     * @param Foursquare_Lists_ListDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_ListDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListDetails execution.
     *
     * @return Foursquare_Lists_ListDetails_Results New results object.
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
     * Wraps results in appropriate results class for this ListDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_ListDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_ListDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_ListDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get get list details
	*/

	public function getList() {
		return new Foursquare_List_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "list"));
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Allows a user to locate friends.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers extends Temboo_Choreography
{
    /**
     * Allows a user to locate friends.
     *
     * @param Temboo_Session $session The session that owns this FindUsers Choreo.
     * @return Foursquare_Users_FindUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/FindUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindUsers Choreo.
     *
     * @param Foursquare_Users_FindUsers_Inputs|array $inputs (optional) Inputs as Foursquare_Users_FindUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_FindUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_FindUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_FindUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_FindUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindUsers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_FindUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A comma-delimited list of email addresses to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FacebookID input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A comma-delimited list of Facebook ID's to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setFacebookID($value)
    {
        return $this->set('FacebookID', $value);
    }

    /**
     * Set the value for the Name input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A single string to search for in users' names. A single string to search for in users' names. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OauthToken input for this FindUsers Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Phone input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A comma-delimited list of phone numbers to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindUsers Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TwitterSource input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A single Twitter handle. Results will be users that this handle follows on Twitter who use Foursquare. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setTwitterSource($value)
    {
        return $this->set('TwitterSource', $value);
    }

    /**
     * Set the value for the Twitter input for this FindUsers Choreo.
     *
     * @param string $value (conditional, string) A comma-delimited list of Twitter handles to look for. Must specify one of Name, Phone, Email, FacebookID, Twitter, or TwitterSource.
     * @return Foursquare_Users_FindUsers_Inputs For method chaining.
     */
    public function setTwitter($value)
    {
        return $this->set('Twitter', $value);
    }
}


/**
 * Execution object for the FindUsers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindUsers execution.
     * @param Foursquare_Users_FindUsers $choreo The choreography object for this execution.
     * @param Foursquare_Users_FindUsers_Inputs|array $inputs (optional) Inputs as Foursquare_Users_FindUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_FindUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_FindUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindUsers execution.
     *
     * @return Foursquare_Users_FindUsers_Results New results object.
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
     * Wraps results in appropriate results class for this FindUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_FindUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_FindUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindUsers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_FindUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_FindUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindUsers execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get users from the search results
	*/

	public function getUser() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "results");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_User_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Allows a user to add an item to a list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem extends Temboo_Choreography
{
    /**
     * Allows a user to add an item to a list.
     *
     * @param Temboo_Session $session The session that owns this AddItem Choreo.
     * @return Foursquare_Lists_AddItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/AddItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddItem Choreo.
     *
     * @param Foursquare_Lists_AddItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_AddItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_AddItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this AddItem Choreo.
     *
     * @param string $value (conditional, string) The id of an item on a list that you wish to copy to the target list. Used in conjuction with ListID. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ItemListID input for this AddItem Choreo.
     *
     * @param string $value (conditional, string) The ID of a list that contains an item that you wish to copy to the new list. Used in conjuction with ItemID. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setItemListID($value)
    {
        return $this->set('ItemListID', $value);
    }

    /**
     * Set the value for the ListID input for this AddItem Choreo.
     *
     * @param string $value (required, string) The ID of the list that  you are adding an item to. This can be a user-created list id or one of tips, todos, or dones.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddItem Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddItem Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddItem Choreo.
     *
     * @param string $value (optional, string) If the target is a user-created list, this will create a public tip on the venue. If the target is todos, the text will be a private note that is only visible to the author.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the TipID input for this AddItem Choreo.
     *
     * @param string $value (conditional, string) The id of a tip to add to the list. Cannot be used in conjunction with the Text and URL inputs. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }

    /**
     * Set the value for the URL input for this AddItem Choreo.
     *
     * @param string $value (optional, string) If adding a new tip using the Text input, this can associate a url with the tip.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the VenueID input for this AddItem Choreo.
     *
     * @param string $value (conditional, string) The id of a venue to add to the list. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_AddItem_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the AddItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddItem execution.
     * @param Foursquare_Lists_AddItem $choreo The choreography object for this execution.
     * @param Foursquare_Lists_AddItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_AddItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddItem execution.
     *
     * @return Foursquare_Lists_AddItem_Results New results object.
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
     * Wraps results in appropriate results class for this AddItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_AddItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_AddItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_AddItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddItem execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the item that was added to a list
	*/

	public function getItem() {
		return new Foursquare_Item_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "item"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Gives details about a tip, including which users (especially friends) have marked the tip to-do or done. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails extends Temboo_Choreography
{
    /**
     * Gives details about a tip, including which users (especially friends) have marked the tip to-do or done. 
     *
     * @param Temboo_Session $session The session that owns this TipDetails Choreo.
     * @return Foursquare_Tips_TipDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/TipDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TipDetails Choreo.
     *
     * @param Foursquare_Tips_TipDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_TipDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_TipDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_TipDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TipDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_TipDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_TipDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TipDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TipDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_TipDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TipDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this TipDetails Choreo.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TipDetails Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this TipDetails Choreo.
     *
     * @param string $value (required, string) ID of tip to retrieve
     * @return Foursquare_Tips_TipDetails_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }
}


/**
 * Execution object for the TipDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TipDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this TipDetails execution.
     * @param Foursquare_Tips_TipDetails $choreo The choreography object for this execution.
     * @param Foursquare_Tips_TipDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_TipDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_TipDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_TipDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TipDetails execution.
     *
     * @return Foursquare_Tips_TipDetails_Results New results object.
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
     * Wraps results in appropriate results class for this TipDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_TipDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_TipDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TipDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_TipDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TipDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_TipDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TipDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get details for this tip
	*/

	public function getTipDetails() {
		return new Foursquare_TipDetails_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "tip"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns a list of all venues visited by the specified user, along with how many visits and when they were last there. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory extends Temboo_Choreography
{
    /**
     * Returns a list of all venues visited by the specified user, along with how many visits and when they were last there. 
     *
     * @param Temboo_Session $session The session that owns this VenueHistory Choreo.
     * @return Foursquare_Users_VenueHistory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/VenueHistory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VenueHistory Choreo.
     *
     * @param Foursquare_Users_VenueHistory_Inputs|array $inputs (optional) Inputs as Foursquare_Users_VenueHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_VenueHistory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_VenueHistory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_VenueHistory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_VenueHistory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueHistory Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VenueHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_VenueHistory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueHistory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimeStamp input for this VenueHistory Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results after the seconds entered since epoch time.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setAfterTimeStamp($value)
    {
        return $this->set('AfterTimeStamp', $value);
    }

    /**
     * Set the value for the BeforeTimeStamp input for this VenueHistory Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results prior to the seconds specified. Useful for paging backward in time.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setBeforeTimeStamp($value)
    {
        return $this->set('BeforeTimeStamp', $value);
    }

    /**
     * Set the value for the CategoryID input for this VenueHistory Choreo.
     *
     * @param string $value (optional, string) Limits returned venues to those in this category. If specifying a top-level category, all sub-categories will also match the query.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setCategoryID($value)
    {
        return $this->set('CategoryID', $value);
    }

    /**
     * Set the value for the OauthToken input for this VenueHistory Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueHistory Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this VenueHistory Choreo.
     *
     * @param string $value (optional, string) Only 'self' is supported at this moment by the Foursquare API. Defaults to: self.
     * @return Foursquare_Users_VenueHistory_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the VenueHistory Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueHistory Choreo.
     *
     * @param Temboo_Session $session The session that owns this VenueHistory execution.
     * @param Foursquare_Users_VenueHistory $choreo The choreography object for this execution.
     * @param Foursquare_Users_VenueHistory_Inputs|array $inputs (optional) Inputs as Foursquare_Users_VenueHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_VenueHistory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_VenueHistory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueHistory execution.
     *
     * @return Foursquare_Users_VenueHistory_Results New results object.
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
     * Wraps results in appropriate results class for this VenueHistory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_VenueHistory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_VenueHistory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VenueHistory Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_VenueHistory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VenueHistory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_VenueHistory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VenueHistory execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	public function getVenues() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "venues"), "items"), "venue");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Venue_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns a list of specials near the current location.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials extends Temboo_Choreography
{
    /**
     * Returns a list of specials near the current location.
     *
     * @param Temboo_Session $session The session that owns this SearchSpecials Choreo.
     * @return Foursquare_Specials_SearchSpecials New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Specials/SearchSpecials/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchSpecials Choreo.
     *
     * @param Foursquare_Specials_SearchSpecials_Inputs|array $inputs (optional) Inputs as Foursquare_Specials_SearchSpecials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Specials_SearchSpecials_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Specials_SearchSpecials_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchSpecials Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Specials_SearchSpecials_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Specials_SearchSpecials_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchSpecials Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchSpecials Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Specials_SearchSpecials_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchSpecials input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Accuracy of latitude and longitude, in meters.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's altitude, in meters.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the ClientID input for this SearchSpecials Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this SearchSpecials Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchSpecials Choreo.
     *
     * @param float $value (conditional, decimal) The latitude point of the user's location.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchSpecials Choreo.
     *
     * @param float $value (conditional, decimal) The longitude point of the user's location.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this SearchSpecials Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Radius input for this SearchSpecials Choreo.
     *
     * @param int $value (optional, integer) Limit results to venues within this many meters of the specified location. Defaults to a city-wide area.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchSpecials Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Specials_SearchSpecials_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchSpecials Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchSpecials Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchSpecials execution.
     * @param Foursquare_Specials_SearchSpecials $choreo The choreography object for this execution.
     * @param Foursquare_Specials_SearchSpecials_Inputs|array $inputs (optional) Inputs as Foursquare_Specials_SearchSpecials_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Specials_SearchSpecials_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Specials_SearchSpecials $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchSpecials execution.
     *
     * @return Foursquare_Specials_SearchSpecials_Results New results object.
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
     * Wraps results in appropriate results class for this SearchSpecials execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Specials_SearchSpecials_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Specials_SearchSpecials_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchSpecials Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Specials_SearchSpecials_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchSpecials Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Specials_SearchSpecials_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchSpecials execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get specials offered by venues
	*/

	public function getSpecialsList() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "specials"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_SpecialsList_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns badges for a given user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges extends Temboo_Choreography
{
    /**
     * Returns badges for a given user.
     *
     * @param Temboo_Session $session The session that owns this Badges Choreo.
     * @return Foursquare_Users_Badges New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Badges/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Badges Choreo.
     *
     * @param Foursquare_Users_Badges_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Badges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Badges_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Badges_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Badges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Badges_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Badges_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Badges Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Badges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Badges_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Badges input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Badges Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Badges Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this Badges Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get badges for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_Badges_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the Badges Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Badges Choreo.
     *
     * @param Temboo_Session $session The session that owns this Badges execution.
     * @param Foursquare_Users_Badges $choreo The choreography object for this execution.
     * @param Foursquare_Users_Badges_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Badges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Badges_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Badges $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Badges execution.
     *
     * @return Foursquare_Users_Badges_Results New results object.
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
     * Wraps results in appropriate results class for this Badges execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Badges_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Badges_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Badges Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Badges_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Badges Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Badges_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Badges execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get badge ids and badge images
	*/

	public function getSets() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "sets"), "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Set_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Updates a given list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList extends Temboo_Choreography
{
    /**
     * Updates a given list.
     *
     * @param Temboo_Session $session The session that owns this UpdateList Choreo.
     * @return Foursquare_Lists_UpdateList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/UpdateList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateList Choreo.
     *
     * @param Foursquare_Lists_UpdateList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_UpdateList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_UpdateList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Collaborative input for this UpdateList Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating that this list can be edited by friends. Set to 1 for true. Defaults to 0 (false).
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setCollaborative($value)
    {
        return $this->set('Collaborative', $value);
    }

    /**
     * Set the value for the Description input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The description of the list.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ListID input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The id of the list to update.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the Name input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The name of the list.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OauthToken input for this UpdateList Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The id of a photo that should be set as the list photo.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateList Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_UpdateList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateList Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateList execution.
     * @param Foursquare_Lists_UpdateList $choreo The choreography object for this execution.
     * @param Foursquare_Lists_UpdateList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_UpdateList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateList execution.
     *
     * @return Foursquare_Lists_UpdateList_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_UpdateList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_UpdateList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_UpdateList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get get list details
	*/

	public function getList() {
		return new Foursquare_List_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "list"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Allows a user to follow a list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList extends Temboo_Choreography
{
    /**
     * Allows a user to follow a list.
     *
     * @param Temboo_Session $session The session that owns this FollowList Choreo.
     * @return Foursquare_Lists_FollowList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/FollowList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FollowList Choreo.
     *
     * @param Foursquare_Lists_FollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_FollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_FollowList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_FollowList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FollowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_FollowList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_FollowList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FollowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_FollowList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FollowList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListID input for this FollowList Choreo.
     *
     * @param string $value (required, string) The id of a user-created list.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this FollowList Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FollowList Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_FollowList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FollowList Choreo.
     *
     * @param Temboo_Session $session The session that owns this FollowList execution.
     * @param Foursquare_Lists_FollowList $choreo The choreography object for this execution.
     * @param Foursquare_Lists_FollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_FollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_FollowList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_FollowList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FollowList execution.
     *
     * @return Foursquare_Lists_FollowList_Results New results object.
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
     * Wraps results in appropriate results class for this FollowList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_FollowList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_FollowList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_FollowList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FollowList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_FollowList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FollowList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the list created by the authenticated user
	*/

	public function getList() {
		return new Foursquare_List_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "list"));
	}
}

/**
 * Replies to a user about their check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Reply extends Temboo_Choreography
{
    /**
     * Replies to a user about their check-in.
     *
     * @param Temboo_Session $session The session that owns this Reply Choreo.
     * @return Foursquare_Checkins_Reply New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/Reply/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Reply Choreo.
     *
     * @param Foursquare_Checkins_Reply_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Reply_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Reply_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_Reply_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Reply Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Reply_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_Reply_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Reply Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Reply_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Reply Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Reply_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Reply input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_Reply_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_Reply_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this Reply Choreo.
     *
     * @param string $value (required, string) The ID of the check-in to add a post to.
     * @return Foursquare_Checkins_Reply_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the ContentID input for this Reply Choreo.
     *
     * @param string $value (optional, string) An ID for the reply to be used in a native link. Can be up to 50 characters. The URL input must also be specified when using this parameter.
     * @return Foursquare_Checkins_Reply_Inputs For method chaining.
     */
    public function setContentID($value)
    {
        return $this->set('ContentID', $value);
    }

    /**
     * Set the value for the OauthToken input for this Reply Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_Reply_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Reply Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_Reply_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this Reply Choreo.
     *
     * @param string $value (required, string) The text of the post. Max length is 200 characters.
     * @return Foursquare_Checkins_Reply_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the URL input for this Reply Choreo.
     *
     * @param string $value (optional, string) A URL linking to more details. The following URL schemes are supported: http, https, foursquare, mailto, tel, and sms.
     * @return Foursquare_Checkins_Reply_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the Reply Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Reply_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Reply Choreo.
     *
     * @param Temboo_Session $session The session that owns this Reply execution.
     * @param Foursquare_Checkins_Reply $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_Reply_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Reply_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Reply_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_Reply $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Reply execution.
     *
     * @return Foursquare_Checkins_Reply_Results New results object.
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
     * Wraps results in appropriate results class for this Reply execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_Reply_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_Reply_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Reply Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Reply_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Reply Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_Reply_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Reply execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the reply to a checkin
	*/

	public function getReply() {
		return new Foursquare_Reply_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "reply"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Foursquare_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Foursquare_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Foursquare_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Foursquare after registering your application.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return Foursquare_OAuth_InitializeOAuth_Inputs For method chaining.
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
 * @subpackage Foursquare
 */
class Foursquare_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Foursquare_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Foursquare_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Foursquare_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Foursquare_OAuth_InitializeOAuth_Results New results object.
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
     * @return Foursquare_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_OAuth_InitializeOAuth_Results New instance.
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
     * Retrieve the value for the "AuthorizeURL" output from this InitializeOAuth execution.
     *
     * @return string (string) (Deprecated) Please refer to the AuthorizationURL output variable in your code. This output variable will be removed soon.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizeURL()
    {
        return $this->get('AuthorizeURL');
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
}

/**
 * Denies a pending friend request from another user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest extends Temboo_Choreography
{
    /**
     * Denies a pending friend request from another user.
     *
     * @param Temboo_Session $session The session that owns this DenyFriendRequest Choreo.
     * @return Foursquare_Users_DenyFriendRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/DenyFriendRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DenyFriendRequest Choreo.
     *
     * @param Foursquare_Users_DenyFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_DenyFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_DenyFriendRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_DenyFriendRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DenyFriendRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_DenyFriendRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_DenyFriendRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DenyFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DenyFriendRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_DenyFriendRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DenyFriendRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this DenyFriendRequest Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DenyFriendRequest Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this DenyFriendRequest Choreo.
     *
     * @param string $value (required, string) The user ID of a pending friend.
     * @return Foursquare_Users_DenyFriendRequest_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the DenyFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DenyFriendRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this DenyFriendRequest execution.
     * @param Foursquare_Users_DenyFriendRequest $choreo The choreography object for this execution.
     * @param Foursquare_Users_DenyFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_DenyFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_DenyFriendRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_DenyFriendRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DenyFriendRequest execution.
     *
     * @return Foursquare_Users_DenyFriendRequest_Results New results object.
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
     * Wraps results in appropriate results class for this DenyFriendRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_DenyFriendRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_DenyFriendRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DenyFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_DenyFriendRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DenyFriendRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_DenyFriendRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DenyFriendRequest execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "user"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Return the user's Leaderboard
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard extends Temboo_Choreography
{
    /**
     * Return the user's Leaderboard
     *
     * @param Temboo_Session $session The session that owns this Leaderboard Choreo.
     * @return Foursquare_Users_Leaderboard New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Leaderboard/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Leaderboard Choreo.
     *
     * @param Foursquare_Users_Leaderboard_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Leaderboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Leaderboard_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Leaderboard_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Leaderboard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Leaderboard_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Leaderboard_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Leaderboard Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Leaderboard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Leaderboard_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Leaderboard input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Neighbors input for this Leaderboard Choreo.
     *
     * @param int $value (optional, integer) The number of friends' scores to return that are adjacent to your score, in ranked order.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setNeighbors($value)
    {
        return $this->set('Neighbors', $value);
    }

    /**
     * Set the value for the OauthToken input for this Leaderboard Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Leaderboard Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Leaderboard_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Leaderboard Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Leaderboard Choreo.
     *
     * @param Temboo_Session $session The session that owns this Leaderboard execution.
     * @param Foursquare_Users_Leaderboard $choreo The choreography object for this execution.
     * @param Foursquare_Users_Leaderboard_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Leaderboard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Leaderboard_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Leaderboard $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Leaderboard execution.
     *
     * @return Foursquare_Users_Leaderboard_Results New results object.
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
     * Wraps results in appropriate results class for this Leaderboard execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Leaderboard_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Leaderboard_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Leaderboard Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Leaderboard_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Leaderboard Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Leaderboard_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Leaderboard execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get leaderboard items
	*/

	public function getLeaderboardItems() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "leaderboard"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_LeaderboardItem_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Retrieve a list of check-ins for an authenticated user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser extends Temboo_Choreography
{
    /**
     * Retrieve a list of check-ins for an authenticated user.
     *
     * @param Temboo_Session $session The session that owns this CheckinsByUser Choreo.
     * @return Foursquare_Users_CheckinsByUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/CheckinsByUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CheckinsByUser Choreo.
     *
     * @param Foursquare_Users_CheckinsByUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_CheckinsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_CheckinsByUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_CheckinsByUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CheckinsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_CheckinsByUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_CheckinsByUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CheckinsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CheckinsByUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_CheckinsByUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CheckinsByUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimeStamp input for this CheckinsByUser Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results after the seconds entered since epoch time.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setAfterTimeStamp($value)
    {
        return $this->set('AfterTimeStamp', $value);
    }

    /**
     * Set the value for the BeforeTimeStamp input for this CheckinsByUser Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results prior to the seconds specified. Useful for paging backward in time.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setBeforeTimeStamp($value)
    {
        return $this->set('BeforeTimeStamp', $value);
    }

    /**
     * Set the value for the Limit input for this CheckinsByUser Choreo.
     *
     * @param int $value (optional, integer) The total number of results to be returned, up to 250.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this CheckinsByUser Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this CheckinsByUser Choreo.
     *
     * @param int $value (optional, integer) The number of results to skip. Used to page through results.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CheckinsByUser Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this CheckinsByUser Choreo.
     *
     * @param string $value (optional, string) Only 'self' is supported at this moment by the Foursquare API. Defaults to: self.
     * @return Foursquare_Users_CheckinsByUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the CheckinsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CheckinsByUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this CheckinsByUser execution.
     * @param Foursquare_Users_CheckinsByUser $choreo The choreography object for this execution.
     * @param Foursquare_Users_CheckinsByUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_CheckinsByUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_CheckinsByUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_CheckinsByUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CheckinsByUser execution.
     *
     * @return Foursquare_Users_CheckinsByUser_Results New results object.
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
     * Wraps results in appropriate results class for this CheckinsByUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_CheckinsByUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_CheckinsByUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CheckinsByUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_CheckinsByUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CheckinsByUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_CheckinsByUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CheckinsByUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get user checkins
	*/

	public function getCheckins() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "checkins"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Checkin_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Allows a user to add a new photo to a check-in, tip, or a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto extends Temboo_Choreography
{
    /**
     * Allows a user to add a new photo to a check-in, tip, or a venue.
     *
     * @param Temboo_Session $session The session that owns this AddPhoto Choreo.
     * @return Foursquare_Photos_AddPhoto New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Photos/AddPhoto/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddPhoto Choreo.
     *
     * @param Foursquare_Photos_AddPhoto_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_AddPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_AddPhoto_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Photos_AddPhoto_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddPhoto Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_AddPhoto_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Photos_AddPhoto_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddPhoto Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddPhoto Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_AddPhoto_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddPhoto input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this AddPhoto Choreo.
     *
     * @param int $value (optional, integer) Vertical accuracy of the user's location, in meters.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this AddPhoto Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the Broadcast input for this AddPhoto Choreo.
     *
     * @param string $value (optional, string) Whether to broadcast this photo. Set to "twitter" if you want to send to twitter, "facebook "if you want to send to facebook, or "twitter,facebook" if you want to send to both.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setBroadcast($value)
    {
        return $this->set('Broadcast', $value);
    }

    /**
     * Set the value for the CheckinID input for this AddPhoto Choreo.
     *
     * @param mixed $value (conditional, any) The ID of the checkin to attach a photo to. One of the id fields (CheckinID, TipID, or VenueID) must be specified.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the ImageFile input for this AddPhoto Choreo.
     *
     * @param string $value (conditional, string) The base64 encoded image contents. Required unless using the VaultFile alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setImageFile($value)
    {
        return $this->set('ImageFile', $value);
    }

    /**
     * Set the value for the LLAccuracy input for this AddPhoto Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's latitude and longitude, in meters.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setLLAccuracy($value)
    {
        return $this->set('LLAccuracy', $value);
    }

    /**
     * Set the value for the Latitude input for this AddPhoto Choreo.
     *
     * @param float $value (optional, decimal) Laitude of the user's location.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this AddPhoto Choreo.
     *
     * @param float $value (optional, decimal) Longitude of the user's location.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddPhoto Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddPhoto Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this AddPhoto Choreo.
     *
     * @param string $value (conditional, string) The ID of the tip to attach a photo to. One of the id fields (CheckinID, TipID, or VenueID) must be specified.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }

    /**
     * Set the value for the VenueID input for this AddPhoto Choreo.
     *
     * @param string $value (conditional, string) The ID of the venue to attach a photo to. One of the id fields (CheckinID, TipID, or VenueID) must be specified.
     * @return Foursquare_Photos_AddPhoto_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }

}


/**
 * Execution object for the AddPhoto Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddPhoto Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddPhoto execution.
     * @param Foursquare_Photos_AddPhoto $choreo The choreography object for this execution.
     * @param Foursquare_Photos_AddPhoto_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_AddPhoto_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_AddPhoto_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Photos_AddPhoto $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddPhoto execution.
     *
     * @return Foursquare_Photos_AddPhoto_Results New results object.
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
     * Wraps results in appropriate results class for this AddPhoto execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Photos_AddPhoto_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Photos_AddPhoto_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddPhoto Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_AddPhoto_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddPhoto Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Photos_AddPhoto_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddPhoto execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get photo details
	*/

	public function getPhoto() {
		return new Foursquare_Photo_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "photo"));
	}
}

/**
 * Returns the lists that a tip appears on.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed extends Temboo_Choreography
{
    /**
     * Returns the lists that a tip appears on.
     *
     * @param Temboo_Session $session The session that owns this Listed Choreo.
     * @return Foursquare_Tips_Listed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/Listed/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Listed Choreo.
     *
     * @param Foursquare_Tips_Listed_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Listed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Listed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_Listed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Listed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Listed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_Listed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Listed Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Listed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Listed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Listed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Group input for this Listed Choreo.
     *
     * @param string $value (optional, string) Accepted values are: created, edited, followed, friends, other. If no acting user is present, only other is supported.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setGroup($value)
    {
        return $this->set('Group', $value);
    }

    /**
     * Set the value for the OauthToken input for this Listed Choreo.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Listed Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this Listed Choreo.
     *
     * @param string $value (required, string) The id of a tip to get lists for.
     * @return Foursquare_Tips_Listed_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }
}


/**
 * Execution object for the Listed Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Listed Choreo.
     *
     * @param Temboo_Session $session The session that owns this Listed execution.
     * @param Foursquare_Tips_Listed $choreo The choreography object for this execution.
     * @param Foursquare_Tips_Listed_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Listed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Listed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_Listed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Listed execution.
     *
     * @return Foursquare_Tips_Listed_Results New results object.
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
     * Wraps results in appropriate results class for this Listed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_Listed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_Listed_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Listed Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Listed_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Listed Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_Listed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Listed execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the groups of lists for the authenticated user
	*/

	public function getListGroups() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "lists"), "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_ListGroup_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Removes a comment to a specified check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment extends Temboo_Choreography
{
    /**
     * Removes a comment to a specified check-in.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment Choreo.
     * @return Foursquare_Checkins_DeleteComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/DeleteComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteComment Choreo.
     *
     * @param Foursquare_Checkins_DeleteComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_DeleteComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_DeleteComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_DeleteComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_DeleteComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_DeleteComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The ID of the check-in associated with the comment you want to remove.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the CommentID input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The id of the comment to remove.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setCommentID($value)
    {
        return $this->set('CommentID', $value);
    }

    /**
     * Set the value for the OauthToken input for this DeleteComment Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteComment Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_DeleteComment_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteComment execution.
     * @param Foursquare_Checkins_DeleteComment $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_DeleteComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_DeleteComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_DeleteComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_DeleteComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteComment execution.
     *
     * @return Foursquare_Checkins_DeleteComment_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_DeleteComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_DeleteComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_DeleteComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_DeleteComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteComment execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the checkin associated with the deleted comment
	*/

	public function getCheckin() {
		return new Foursquare_Checkin_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "checkin"));
	}
}

/**
 * Returns photos from a user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser extends Temboo_Choreography
{
    /**
     * Returns photos from a user.
     *
     * @param Temboo_Session $session The session that owns this PhotosFromUser Choreo.
     * @return Foursquare_Users_PhotosFromUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/PhotosFromUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PhotosFromUser Choreo.
     *
     * @param Foursquare_Users_PhotosFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PhotosFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PhotosFromUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_PhotosFromUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotosFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PhotosFromUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_PhotosFromUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotosFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PhotosFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_PhotosFromUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotosFromUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this PhotosFromUser Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 500.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this PhotosFromUser Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this PhotosFromUser Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PhotosFromUser Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this PhotosFromUser Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get badges for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_PhotosFromUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the PhotosFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotosFromUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this PhotosFromUser execution.
     * @param Foursquare_Users_PhotosFromUser $choreo The choreography object for this execution.
     * @param Foursquare_Users_PhotosFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_PhotosFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_PhotosFromUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_PhotosFromUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotosFromUser execution.
     *
     * @return Foursquare_Users_PhotosFromUser_Results New results object.
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
     * Wraps results in appropriate results class for this PhotosFromUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_PhotosFromUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_PhotosFromUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PhotosFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_PhotosFromUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PhotosFromUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_PhotosFromUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PhotosFromUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get user photos
	*/

	public function getPhotos() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "photos"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Photo_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns an array of users have done this tip.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done extends Temboo_Choreography
{
    /**
     * Returns an array of users have done this tip.
     *
     * @param Temboo_Session $session The session that owns this Done Choreo.
     * @return Foursquare_Tips_Done New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/Done/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Done Choreo.
     *
     * @param Foursquare_Tips_Done_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Done_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Done_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_Done_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Done Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Done_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_Done_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Done Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Done Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_Done_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Done input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this Done Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 200.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this Done Choreo.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this Done Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Done Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the TipID input for this Done Choreo.
     *
     * @param string $value (required, string) The id of a tip to get users who have marked the tip as done.
     * @return Foursquare_Tips_Done_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }
}


/**
 * Execution object for the Done Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Done Choreo.
     *
     * @param Temboo_Session $session The session that owns this Done execution.
     * @param Foursquare_Tips_Done $choreo The choreography object for this execution.
     * @param Foursquare_Tips_Done_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_Done_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_Done_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_Done $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Done execution.
     *
     * @return Foursquare_Tips_Done_Results New results object.
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
     * Wraps results in appropriate results class for this Done execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_Done_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_Done_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Done Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_Done_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Done Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_Done_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Done execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	The users that have marked this tip done
	*/

	public function getDone() {
		return new Foursquare_Done_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "done"));
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Approves a pending friend request from another user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest extends Temboo_Choreography
{
    /**
     * Approves a pending friend request from another user.
     *
     * @param Temboo_Session $session The session that owns this ApproveFriendRequest Choreo.
     * @return Foursquare_Users_ApproveFriendRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/ApproveFriendRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ApproveFriendRequest Choreo.
     *
     * @param Foursquare_Users_ApproveFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ApproveFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ApproveFriendRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_ApproveFriendRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ApproveFriendRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_ApproveFriendRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ApproveFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ApproveFriendRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ApproveFriendRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this ApproveFriendRequest Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ApproveFriendRequest Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ApproveFriendRequest Choreo.
     *
     * @param string $value (required, string) The user ID of a pending friend.
     * @return Foursquare_Users_ApproveFriendRequest_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ApproveFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ApproveFriendRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this ApproveFriendRequest execution.
     * @param Foursquare_Users_ApproveFriendRequest $choreo The choreography object for this execution.
     * @param Foursquare_Users_ApproveFriendRequest_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ApproveFriendRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ApproveFriendRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_ApproveFriendRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ApproveFriendRequest execution.
     *
     * @return Foursquare_Users_ApproveFriendRequest_Results New results object.
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
     * Wraps results in appropriate results class for this ApproveFriendRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_ApproveFriendRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ApproveFriendRequest Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ApproveFriendRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ApproveFriendRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_ApproveFriendRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ApproveFriendRequest execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "user"));
	}
}

/**
 * This choreo returns tips for a particular venue written by other Foursquare users.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue extends Temboo_Choreography
{
    /**
     * This choreo returns tips for a particular venue written by other Foursquare users.
     *
     * @param Temboo_Session $session The session that owns this TipsFromVenue Choreo.
     * @return Foursquare_Venues_TipsFromVenue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/TipsFromVenue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TipsFromVenue Choreo.
     *
     * @param Foursquare_Venues_TipsFromVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TipsFromVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TipsFromVenue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_TipsFromVenue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TipsFromVenue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TipsFromVenue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_TipsFromVenue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TipsFromVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TipsFromVenue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_TipsFromVenue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TipsFromVenue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this TipsFromVenue Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this TipsFromVenue Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Limit input for this TipsFromVenue Choreo.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this TipsFromVenue Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this TipsFromVenue Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TipsFromVenue Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this TipsFromVenue Choreo.
     *
     * @param string $value (optional, string) Enter: recent or popular.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the VenueID input for this TipsFromVenue Choreo.
     *
     * @param string $value (required, string) The venue you want tips for.
     * @return Foursquare_Venues_TipsFromVenue_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the TipsFromVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TipsFromVenue Choreo.
     *
     * @param Temboo_Session $session The session that owns this TipsFromVenue execution.
     * @param Foursquare_Venues_TipsFromVenue $choreo The choreography object for this execution.
     * @param Foursquare_Venues_TipsFromVenue_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_TipsFromVenue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_TipsFromVenue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_TipsFromVenue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TipsFromVenue execution.
     *
     * @return Foursquare_Venues_TipsFromVenue_Results New results object.
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
     * Wraps results in appropriate results class for this TipsFromVenue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_TipsFromVenue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_TipsFromVenue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TipsFromVenue Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_TipsFromVenue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TipsFromVenue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_TipsFromVenue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TipsFromVenue execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the tips for this venue
	*/

	public function getTips() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "tips"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Tip_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns friends and a total count of users who have liked a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Likes extends Temboo_Choreography
{
    /**
     * Returns friends and a total count of users who have liked a venue.
     *
     * @param Temboo_Session $session The session that owns this Likes Choreo.
     * @return Foursquare_Venues_Likes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Likes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Likes Choreo.
     *
     * @param Foursquare_Venues_Likes_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Likes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Likes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Likes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Likes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Likes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Likes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Likes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Likes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Likes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this Likes Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Likes Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this Likes Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Likes Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this Likes Choreo.
     *
     * @param string $value (required, string) The ID of the venue to retrieve likes for.
     * @return Foursquare_Venues_Likes_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Likes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Likes Choreo.
     *
     * @param Temboo_Session $session The session that owns this Likes execution.
     * @param Foursquare_Venues_Likes $choreo The choreography object for this execution.
     * @param Foursquare_Venues_Likes_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Likes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Likes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Likes execution.
     *
     * @return Foursquare_Venues_Likes_Results New results object.
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
     * Wraps results in appropriate results class for this Likes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Likes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Likes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Likes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Likes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Likes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Likes execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get likes for this venue
	*/

	public function getLikes() {
		return new Foursquare_Likes_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "likes"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Adds a comment to a specified check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment extends Temboo_Choreography
{
    /**
     * Adds a comment to a specified check-in.
     *
     * @param Temboo_Session $session The session that owns this AddComment Choreo.
     * @return Foursquare_Checkins_AddComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/AddComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddComment Choreo.
     *
     * @param Foursquare_Checkins_AddComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_AddComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_AddComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_AddComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this AddComment Choreo.
     *
     * @param string $value (required, string) The ID of the check-in that you want to create a comment for.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddComment Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddComment Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddComment Choreo.
     *
     * @param string $value (required, string) The text of the comment, up to 200 characters.
     * @return Foursquare_Checkins_AddComment_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddComment execution.
     * @param Foursquare_Checkins_AddComment $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_AddComment_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_AddComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_AddComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_AddComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddComment execution.
     *
     * @return Foursquare_Checkins_AddComment_Results New results object.
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
     * Wraps results in appropriate results class for this AddComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_AddComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_AddComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddComment Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_AddComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_AddComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddComment execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the information about the comment created
	*/

	public function getComment() {
		return new Foursquare_Comment_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "comment"));
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns a list of venues similar to the specified venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar extends Temboo_Choreography
{
    /**
     * Returns a list of venues similar to the specified venue.
     *
     * @param Temboo_Session $session The session that owns this Similar Choreo.
     * @return Foursquare_Venues_Similar New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Similar/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Similar Choreo.
     *
     * @param Foursquare_Venues_Similar_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Similar_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Similar_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Similar_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Similar Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Similar_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Similar_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Similar Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Similar Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Similar_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Similar input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Similar Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Similar Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this Similar Choreo.
     *
     * @param string $value (required, string) The id for the venue you want similar venues for.
     * @return Foursquare_Venues_Similar_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the Similar Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Similar Choreo.
     *
     * @param Temboo_Session $session The session that owns this Similar execution.
     * @param Foursquare_Venues_Similar $choreo The choreography object for this execution.
     * @param Foursquare_Venues_Similar_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Similar_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Similar_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Similar $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Similar execution.
     *
     * @return Foursquare_Venues_Similar_Results New results object.
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
     * Wraps results in appropriate results class for this Similar execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Similar_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Similar_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Similar Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Similar_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Similar Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Similar_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Similar execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get similar venues
	*/

	public function getVenues() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "similarVenues"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Venue_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns friends and a total count of users who have liked a check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Likes extends Temboo_Choreography
{
    /**
     * Returns friends and a total count of users who have liked a check-in.
     *
     * @param Temboo_Session $session The session that owns this Likes Choreo.
     * @return Foursquare_Checkins_Likes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/Likes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Likes Choreo.
     *
     * @param Foursquare_Checkins_Likes_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Likes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_Likes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Likes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Likes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_Likes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Likes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Likes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Likes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Likes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this Likes Choreo.
     *
     * @param string $value (required, string) The ID of the check-in to retrieve likes for.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the ClientID input for this Likes Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Likes Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this Likes Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Likes Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_Likes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Likes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Likes Choreo.
     *
     * @param Temboo_Session $session The session that owns this Likes execution.
     * @param Foursquare_Checkins_Likes $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_Likes_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Likes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Likes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_Likes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Likes execution.
     *
     * @return Foursquare_Checkins_Likes_Results New results object.
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
     * Wraps results in appropriate results class for this Likes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_Likes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_Likes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Likes Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Likes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Likes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_Likes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Likes execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get likes for the checkin
	*/

	public function getLikes() {
		return new Foursquare_Likes_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "likes"));
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Allows a user to delete an item from a list.

 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem extends Temboo_Choreography
{
    /**
     * Allows a user to delete an item from a list.

     *
     * @param Temboo_Session $session The session that owns this DeleteItem Choreo.
     * @return Foursquare_Lists_DeleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/DeleteItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteItem Choreo.
     *
     * @param Foursquare_Lists_DeleteItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_DeleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_DeleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_DeleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_DeleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_DeleteItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this DeleteItem Choreo.
     *
     * @param string $value (required, string) The id of the item to delete.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ListID input for this DeleteItem Choreo.
     *
     * @param string $value (required, string) This can be a user-created list id or one of tips, todos, or dones.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this DeleteItem Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteItem Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_DeleteItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteItem execution.
     * @param Foursquare_Lists_DeleteItem $choreo The choreography object for this execution.
     * @param Foursquare_Lists_DeleteItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_DeleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_DeleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteItem execution.
     *
     * @return Foursquare_Lists_DeleteItem_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_DeleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_DeleteItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_DeleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_DeleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteItem execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the item that was deleted
	*/

	public function getItem() {
		return new Foursquare_Item_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "item"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Obtain a list of venues near the current location. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues extends Temboo_Choreography
{
    /**
     * Obtain a list of venues near the current location. 
     *
     * @param Temboo_Session $session The session that owns this SearchVenues Choreo.
     * @return Foursquare_Venues_SearchVenues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/SearchVenues/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchVenues Choreo.
     *
     * @param Foursquare_Venues_SearchVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_SearchVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_SearchVenues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_SearchVenues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchVenues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_SearchVenues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_SearchVenues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchVenues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_SearchVenues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchVenues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this SearchVenues Choreo.
     *
     * @param int $value (optional, integer) Accuracy of latitude and longitude, in meters. Currently, this parameter   does not affect search results.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this SearchVenues Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's altitude, in meters. Currently, this parameter does not affect search results.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this SearchVenues Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters. Currently, this parameter does not affect search results.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the ClientID input for this SearchVenues Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this SearchVenues Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Intent input for this SearchVenues Choreo.
     *
     * @param string $value (optional, string) Indicates your intent when performing the search.  Enter: checkin (default), match (requires Query and Latitude/Longitude to be provided).
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setIntent($value)
    {
        return $this->set('Intent', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchVenues Choreo.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchVenues Choreo.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchVenues Choreo.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this SearchVenues Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Query input for this SearchVenues Choreo.
     *
     * @param string $value (optional, string) Your search string.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchVenues Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_SearchVenues_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchVenues Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchVenues execution.
     * @param Foursquare_Venues_SearchVenues $choreo The choreography object for this execution.
     * @param Foursquare_Venues_SearchVenues_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_SearchVenues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_SearchVenues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_SearchVenues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchVenues execution.
     *
     * @return Foursquare_Venues_SearchVenues_Results New results object.
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
     * Wraps results in appropriate results class for this SearchVenues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_SearchVenues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_SearchVenues_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchVenues Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_SearchVenues_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchVenues Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_SearchVenues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchVenues execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get trending venues
	*/

	public function getVenues() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "venues");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Venue_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns a list of recommended venues near the current location.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore extends Temboo_Choreography
{
    /**
     * Returns a list of recommended venues near the current location.
     *
     * @param Temboo_Session $session The session that owns this Explore Choreo.
     * @return Foursquare_Venues_Explore New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Explore/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Explore Choreo.
     *
     * @param Foursquare_Venues_Explore_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Explore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Explore_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Explore_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Explore Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Explore_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Explore_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Explore Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Explore Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Explore_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Explore input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Accuracy of latitude and longitude, in meters.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's altitude, in meters.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the ClientID input for this Explore Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Explore Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Intent input for this Explore Choreo.
     *
     * @param string $value (optional, string) Limit results to venues when set to "specials".
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setIntent($value)
    {
        return $this->set('Intent', $value);
    }

    /**
     * Set the value for the Latitude input for this Explore Choreo.
     *
     * @param float $value (conditional, decimal) The latitude point of the user's location. Required unless the Near parameter is provided.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Number of results to retun, up to 50.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this Explore Choreo.
     *
     * @param float $value (conditional, decimal) The longitude point of the user's location. Required unless the Near parameter is provided.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Near input for this Explore Choreo.
     *
     * @param string $value (conditional, string) A string naming a place in the world. If the near string is not geocodable, returns a failed_geocode error. Required unless provided Latitude and Longitude.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setNear($value)
    {
        return $this->set('Near', $value);
    }

    /**
     * Set the value for the Novelty input for this Explore Choreo.
     *
     * @param string $value (optional, string) Pass new or old to limit results to places the acting user hasn't been or has been, respectively. Omitting this parameter returns a mixture of both new and old.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setNovelty($value)
    {
        return $this->set('Novelty', $value);
    }

    /**
     * Set the value for the OauthToken input for this Explore Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Query input for this Explore Choreo.
     *
     * @param string $value (optional, string) A search term to be applied against tips, category, etc. at a venue.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the Radius input for this Explore Choreo.
     *
     * @param int $value (optional, integer) Radius to search within, in meters. If radius is not specified, a suggested radius will be used depending on the density of venues in the area.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Explore Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Section input for this Explore Choreo.
     *
     * @param string $value (optional, string) One of food, drinks, coffee, shops, arts, or outdoors. Choosing one of these limits results to venues with categories matching these terms.
     * @return Foursquare_Venues_Explore_Inputs For method chaining.
     */
    public function setSection($value)
    {
        return $this->set('Section', $value);
    }
}


/**
 * Execution object for the Explore Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Explore Choreo.
     *
     * @param Temboo_Session $session The session that owns this Explore execution.
     * @param Foursquare_Venues_Explore $choreo The choreography object for this execution.
     * @param Foursquare_Venues_Explore_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Explore_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Explore_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Explore $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Explore execution.
     *
     * @return Foursquare_Venues_Explore_Results New results object.
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
     * Wraps results in appropriate results class for this Explore execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Explore_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Explore_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Explore Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Explore_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Explore Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Explore_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Explore execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	public function getRecommendations() {
		return new Foursquare_Recommendations_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "response"));
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Obtain details about venues, including location, mayorship, tags, tips, specials and category.  Users who have authenticated via their oauth_token credential, also receive information about who is at the location being queried.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail extends Temboo_Choreography
{
    /**
     * Obtain details about venues, including location, mayorship, tags, tips, specials and category.  Users who have authenticated via their oauth_token credential, also receive information about who is at the location being queried.
     *
     * @param Temboo_Session $session The session that owns this VenueDetail Choreo.
     * @return Foursquare_Venues_VenueDetail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/VenueDetail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VenueDetail Choreo.
     *
     * @param Foursquare_Venues_VenueDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueDetail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_VenueDetail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VenueDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueDetail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_VenueDetail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VenueDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VenueDetail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_VenueDetail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VenueDetail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this VenueDetail Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client ID, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this VenueDetail Choreo.
     *
     * @param string $value (conditional, string) Your Foursquare client secret, obtained after registering at Foursquare. Required unless using the OauthToken input.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the OauthToken input for this VenueDetail Choreo.
     *
     * @param string $value (conditional, string) The Foursquare API Oauth token string. Required unless specifying the ClientID and ClientSecret.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this VenueDetail Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this VenueDetail Choreo.
     *
     * @param string $value (required, string) The ID associated with the venue you want to retrieve details for.
     * @return Foursquare_Venues_VenueDetail_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the VenueDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VenueDetail Choreo.
     *
     * @param Temboo_Session $session The session that owns this VenueDetail execution.
     * @param Foursquare_Venues_VenueDetail $choreo The choreography object for this execution.
     * @param Foursquare_Venues_VenueDetail_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_VenueDetail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_VenueDetail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_VenueDetail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VenueDetail execution.
     *
     * @return Foursquare_Venues_VenueDetail_Results New results object.
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
     * Wraps results in appropriate results class for this VenueDetail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_VenueDetail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_VenueDetail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VenueDetail Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_VenueDetail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VenueDetail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_VenueDetail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VenueDetail execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get venue details
	*/

	public function getVenue() {
		return new Foursquare_Venue_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "venue"));
	}
}

/**
 * Returns a count and items of users following the specified list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers extends Temboo_Choreography
{
    /**
     * Returns a count and items of users following the specified list.
     *
     * @param Temboo_Session $session The session that owns this ListFollowers Choreo.
     * @return Foursquare_Lists_ListFollowers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/ListFollowers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFollowers Choreo.
     *
     * @param Foursquare_Lists_ListFollowers_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListFollowers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_ListFollowers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListFollowers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_ListFollowers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFollowers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_ListFollowers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFollowers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListID input for this ListFollowers Choreo.
     *
     * @param string $value (required, string) The id of a user-created list.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this ListFollowers Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListFollowers Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_ListFollowers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFollowers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFollowers execution.
     * @param Foursquare_Lists_ListFollowers $choreo The choreography object for this execution.
     * @param Foursquare_Lists_ListFollowers_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_ListFollowers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_ListFollowers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_ListFollowers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFollowers execution.
     *
     * @return Foursquare_Lists_ListFollowers_Results New results object.
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
     * Wraps results in appropriate results class for this ListFollowers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_ListFollowers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_ListFollowers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFollowers Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_ListFollowers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFollowers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_ListFollowers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListFollowers execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the followers of this list
	*/

	public function getListFollowers() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "followers");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_ListFollower_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns tips from a user.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser extends Temboo_Choreography
{
    /**
     * Returns tips from a user.
     *
     * @param Temboo_Session $session The session that owns this TipsFromUser Choreo.
     * @return Foursquare_Users_TipsFromUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/TipsFromUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TipsFromUser Choreo.
     *
     * @param Foursquare_Users_TipsFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_TipsFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_TipsFromUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_TipsFromUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TipsFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_TipsFromUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_TipsFromUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TipsFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TipsFromUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_TipsFromUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TipsFromUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Latitude input for this TipsFromUser Choreo.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this TipsFromUser Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 500.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this TipsFromUser Choreo.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this TipsFromUser Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this TipsFromUser Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TipsFromUser Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this TipsFromUser Choreo.
     *
     * @param string $value (optional, string) Enter: recent, nearby, or popular. NEARBY requires geolat and geolong to be provided.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the UserID input for this TipsFromUser Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get tips for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_TipsFromUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the TipsFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TipsFromUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this TipsFromUser execution.
     * @param Foursquare_Users_TipsFromUser $choreo The choreography object for this execution.
     * @param Foursquare_Users_TipsFromUser_Inputs|array $inputs (optional) Inputs as Foursquare_Users_TipsFromUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_TipsFromUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_TipsFromUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TipsFromUser execution.
     *
     * @return Foursquare_Users_TipsFromUser_Results New results object.
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
     * Wraps results in appropriate results class for this TipsFromUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_TipsFromUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_TipsFromUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TipsFromUser Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_TipsFromUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TipsFromUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_TipsFromUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TipsFromUser execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get tips for this user
	*/

	public function getList() {
		return new Foursquare_List_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "list"));
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Returns a user's mayorships.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships extends Temboo_Choreography
{
    /**
     * Returns a user's mayorships.
     *
     * @param Temboo_Session $session The session that owns this Mayorships Choreo.
     * @return Foursquare_Users_Mayorships New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/Mayorships/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Mayorships Choreo.
     *
     * @param Foursquare_Users_Mayorships_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Mayorships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Mayorships_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_Mayorships_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Mayorships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Mayorships_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_Mayorships_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Mayorships Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Mayorships Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_Mayorships_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Mayorships input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Mayorships Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Mayorships Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this Mayorships Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get mayorships for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_Mayorships_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the Mayorships Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Mayorships Choreo.
     *
     * @param Temboo_Session $session The session that owns this Mayorships execution.
     * @param Foursquare_Users_Mayorships $choreo The choreography object for this execution.
     * @param Foursquare_Users_Mayorships_Inputs|array $inputs (optional) Inputs as Foursquare_Users_Mayorships_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_Mayorships_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_Mayorships $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Mayorships execution.
     *
     * @return Foursquare_Users_Mayorships_Results New results object.
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
     * Wraps results in appropriate results class for this Mayorships execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_Mayorships_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_Mayorships_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Mayorships Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_Mayorships_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Mayorships Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_Mayorships_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Mayorships execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the venues that the user is mayor of
	*/

	public function getMayorships() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "mayorships"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Mayorship_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Completes the OAuth process by retrieving a Foursquare access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Foursquare access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Foursquare_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Foursquare_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Foursquare_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Foursquare after registering your application.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Foursquare after registering your application.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Foursquare_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Foursquare
 */
class Foursquare_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Foursquare_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Foursquare_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Foursquare_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Foursquare_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Foursquare_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The access token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
}

/**
 * Retrieve a list of a user's friends.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends extends Temboo_Choreography
{
    /**
     * Retrieve a list of a user's friends.
     *
     * @param Temboo_Session $session The session that owns this ListFriends Choreo.
     * @return Foursquare_Users_ListFriends New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Users/ListFriends/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListFriends Choreo.
     *
     * @param Foursquare_Users_ListFriends_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ListFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ListFriends_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Users_ListFriends_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ListFriends_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Users_ListFriends_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListFriends Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Users_ListFriends_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListFriends input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this ListFriends Choreo.
     *
     * @param int $value (optional, integer) The number of results returned, up to 500.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this ListFriends Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this ListFriends Choreo.
     *
     * @param int $value (optional, integer) Specify an offest to page through results.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListFriends Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the UserID input for this ListFriends Choreo.
     *
     * @param string $value (optional, string) Identity of the user to get friends for. Defaults to "self" to get lists of the acting user.
     * @return Foursquare_Users_ListFriends_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the ListFriends Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListFriends Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListFriends execution.
     * @param Foursquare_Users_ListFriends $choreo The choreography object for this execution.
     * @param Foursquare_Users_ListFriends_Inputs|array $inputs (optional) Inputs as Foursquare_Users_ListFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Users_ListFriends_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Users_ListFriends $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListFriends execution.
     *
     * @return Foursquare_Users_ListFriends_Results New results object.
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
     * Wraps results in appropriate results class for this ListFriends execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Users_ListFriends_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Users_ListFriends_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListFriends Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Users_ListFriends_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListFriends Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Users_ListFriends_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListFriends execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get friends
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "friends"), "items"));
	}
}

/**
 * Returns details of a check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails extends Temboo_Choreography
{
    /**
     * Returns details of a check-in.
     *
     * @param Temboo_Session $session The session that owns this CheckinDetails Choreo.
     * @return Foursquare_Checkins_CheckinDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/CheckinDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CheckinDetails Choreo.
     *
     * @param Foursquare_Checkins_CheckinDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CheckinDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CheckinDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_CheckinDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CheckinDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CheckinDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_CheckinDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CheckinDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CheckinDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CheckinDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CheckinDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this CheckinDetails Choreo.
     *
     * @param string $value (required, string) The ID of the check-in to retrieve additional information for.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the OauthToken input for this CheckinDetails Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CheckinDetails Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Signature input for this CheckinDetails Choreo.
     *
     * @param string $value (optional, string) When check-ins are sent to public feeds such as Twitter, foursquare appends a signature to them (s=XXXXXX). The same value can be used here.
     * @return Foursquare_Checkins_CheckinDetails_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }
}


/**
 * Execution object for the CheckinDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CheckinDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this CheckinDetails execution.
     * @param Foursquare_Checkins_CheckinDetails $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_CheckinDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CheckinDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CheckinDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_CheckinDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CheckinDetails execution.
     *
     * @return Foursquare_Checkins_CheckinDetails_Results New results object.
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
     * Wraps results in appropriate results class for this CheckinDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_CheckinDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_CheckinDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CheckinDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CheckinDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CheckinDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_CheckinDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CheckinDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get information about this checkin
	*/

	public function getCheckin() {
		return new Foursquare_Checkin_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "checkin"));
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Creates a new list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList extends Temboo_Choreography
{
    /**
     * Creates a new list.
     *
     * @param Temboo_Session $session The session that owns this AddList Choreo.
     * @return Foursquare_Lists_AddList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/AddList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddList Choreo.
     *
     * @param Foursquare_Lists_AddList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_AddList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_AddList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_AddList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Collaborative input for this AddList Choreo.
     *
     * @param bool $value (optional, boolean) A flag indicating that this list can be edited by friends. Set to 1 for true. Defaults to 0 (false).
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setCollaborative($value)
    {
        return $this->set('Collaborative', $value);
    }

    /**
     * Set the value for the Description input for this AddList Choreo.
     *
     * @param string $value (optional, string) The description of the list.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Name input for this AddList Choreo.
     *
     * @param string $value (required, string) The name of the list.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddList Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this AddList Choreo.
     *
     * @param string $value (optional, string) The id of a photo that should be set as the list photo.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddList Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_AddList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the AddList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddList Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddList execution.
     * @param Foursquare_Lists_AddList $choreo The choreography object for this execution.
     * @param Foursquare_Lists_AddList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_AddList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_AddList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_AddList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddList execution.
     *
     * @return Foursquare_Lists_AddList_Results New results object.
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
     * Wraps results in appropriate results class for this AddList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_AddList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_AddList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_AddList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_AddList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the list created by the authenticated user
	*/

	public function getList() {
		return new Foursquare_List_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "list"));
	}
}

/**
 * Allows a user to unfollow a list.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList extends Temboo_Choreography
{
    /**
     * Allows a user to unfollow a list.
     *
     * @param Temboo_Session $session The session that owns this UnfollowList Choreo.
     * @return Foursquare_Lists_UnfollowList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/UnfollowList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UnfollowList Choreo.
     *
     * @param Foursquare_Lists_UnfollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UnfollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UnfollowList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_UnfollowList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UnfollowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UnfollowList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_UnfollowList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UnfollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UnfollowList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UnfollowList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UnfollowList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListID input for this UnfollowList Choreo.
     *
     * @param string $value (required, string) The id of a user-created list.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this UnfollowList Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UnfollowList Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_UnfollowList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the UnfollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UnfollowList Choreo.
     *
     * @param Temboo_Session $session The session that owns this UnfollowList execution.
     * @param Foursquare_Lists_UnfollowList $choreo The choreography object for this execution.
     * @param Foursquare_Lists_UnfollowList_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UnfollowList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UnfollowList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_UnfollowList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UnfollowList execution.
     *
     * @return Foursquare_Lists_UnfollowList_Results New results object.
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
     * Wraps results in appropriate results class for this UnfollowList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_UnfollowList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_UnfollowList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UnfollowList Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UnfollowList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UnfollowList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_UnfollowList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UnfollowList execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get get list details
	*/

	public function getList() {
		return new Foursquare_List_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "list"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Allows the authenticated user to like or unlike a check-in.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Like extends Temboo_Choreography
{
    /**
     * Allows the authenticated user to like or unlike a check-in.
     *
     * @param Temboo_Session $session The session that owns this Like Choreo.
     * @return Foursquare_Checkins_Like New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/Like/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Like Choreo.
     *
     * @param Foursquare_Checkins_Like_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Like_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Like_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_Like_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Like Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Like_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_Like_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Like_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Like Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_Like_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Like input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CheckinID input for this Like Choreo.
     *
     * @param string $value (required, string) The ID of the check-in to like or unlike.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setCheckinID($value)
    {
        return $this->set('CheckinID', $value);
    }

    /**
     * Set the value for the OauthToken input for this Like Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Like Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Set input for this Like Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 (the default) to like this check-in. Set to 0 to undo a previous like.
     * @return Foursquare_Checkins_Like_Inputs For method chaining.
     */
    public function setSet($value)
    {
        return $this->set('Set', $value);
    }
}


/**
 * Execution object for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Like_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Like Choreo.
     *
     * @param Temboo_Session $session The session that owns this Like execution.
     * @param Foursquare_Checkins_Like $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_Like_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_Like_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_Like_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_Like $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Like execution.
     *
     * @return Foursquare_Checkins_Like_Results New results object.
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
     * Wraps results in appropriate results class for this Like execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_Like_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_Like_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_Like_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Like Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_Like_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Like execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get likes for this checkin
	*/

	public function getLikes() {
		return new Foursquare_Likes_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "likes"));
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Returns a list of recent friends' check-ins.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins extends Temboo_Choreography
{
    /**
     * Returns a list of recent friends' check-ins.
     *
     * @param Temboo_Session $session The session that owns this RecentCheckins Choreo.
     * @return Foursquare_Checkins_RecentCheckins New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/RecentCheckins/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RecentCheckins Choreo.
     *
     * @param Foursquare_Checkins_RecentCheckins_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_RecentCheckins_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_RecentCheckins_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_RecentCheckins_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RecentCheckins Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_RecentCheckins_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_RecentCheckins_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RecentCheckins Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RecentCheckins Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_RecentCheckins_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RecentCheckins input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimeStamp input for this RecentCheckins Choreo.
     *
     * @param int $value (optional, integer) Seconds after which to look for check-ins, e.g. for looking for new check-ins since the last fetch.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setAfterTimeStamp($value)
    {
        return $this->set('AfterTimeStamp', $value);
    }

    /**
     * Set the value for the Latitude input for this RecentCheckins Choreo.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this RecentCheckins Choreo.
     *
     * @param int $value (optional, integer) Number of results to return, up to 100.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this RecentCheckins Choreo.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this RecentCheckins Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RecentCheckins Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_RecentCheckins_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the RecentCheckins Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RecentCheckins Choreo.
     *
     * @param Temboo_Session $session The session that owns this RecentCheckins execution.
     * @param Foursquare_Checkins_RecentCheckins $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_RecentCheckins_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_RecentCheckins_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_RecentCheckins_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_RecentCheckins $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RecentCheckins execution.
     *
     * @return Foursquare_Checkins_RecentCheckins_Results New results object.
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
     * Wraps results in appropriate results class for this RecentCheckins execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_RecentCheckins_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_RecentCheckins_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RecentCheckins Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_RecentCheckins_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RecentCheckins Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_RecentCheckins_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RecentCheckins execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get recent checkins
	*/

	public function getRecent() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "recent");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Recent_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
}

/**
 * Retrieves a count of how many people are at a given venue. For authenticated users, friends and friends-of-friends at the venue are also returned.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow extends Temboo_Choreography
{
    /**
     * Retrieves a count of how many people are at a given venue. For authenticated users, friends and friends-of-friends at the venue are also returned.
     *
     * @param Temboo_Session $session The session that owns this HereNow Choreo.
     * @return Foursquare_Venues_HereNow New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/HereNow/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HereNow Choreo.
     *
     * @param Foursquare_Venues_HereNow_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_HereNow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_HereNow_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_HereNow_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HereNow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_HereNow_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_HereNow_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HereNow Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HereNow Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_HereNow_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HereNow input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AfterTimestamp input for this HereNow Choreo.
     *
     * @param string $value (optional, date) Retrieve the first results to follow this timestamp (an epoch timestamp in seconds).
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setAfterTimestamp($value)
    {
        return $this->set('AfterTimestamp', $value);
    }

    /**
     * Set the value for the Limit input for this HereNow Choreo.
     *
     * @param int $value (optional, integer) The number of results to return, up to 500.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the OauthToken input for this HereNow Choreo.
     *
     * @param string $value (required, string) The Foursquare API Oauth token string.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this HereNow Choreo.
     *
     * @param int $value (optional, integer) Used to page through results.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this HereNow Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the VenueID input for this HereNow Choreo.
     *
     * @param string $value (required, string) The ID associated with the venue you want to retrieve details for.
     * @return Foursquare_Venues_HereNow_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the HereNow Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HereNow Choreo.
     *
     * @param Temboo_Session $session The session that owns this HereNow execution.
     * @param Foursquare_Venues_HereNow $choreo The choreography object for this execution.
     * @param Foursquare_Venues_HereNow_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_HereNow_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_HereNow_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_HereNow $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HereNow execution.
     *
     * @return Foursquare_Venues_HereNow_Results New results object.
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
     * Wraps results in appropriate results class for this HereNow execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_HereNow_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_HereNow_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HereNow Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_HereNow_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HereNow Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_HereNow_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this HereNow execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the list of people here now
	*/

	public function getHereNowList() {
		return new Foursquare_HereNowList_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "hereNow"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Allows you to add a new tip at a venue. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips extends Temboo_Choreography
{
    /**
     * Allows you to add a new tip at a venue. 
     *
     * @param Temboo_Session $session The session that owns this AddTips Choreo.
     * @return Foursquare_Tips_AddTips New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/AddTips/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddTips Choreo.
     *
     * @param Foursquare_Tips_AddTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_AddTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_AddTips_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_AddTips_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddTips Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_AddTips_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_AddTips_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddTips Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_AddTips_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddTips input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Broadcast input for this AddTips Choreo.
     *
     * @param string $value (optional, string) Whether to broadcast this tip. Set to "twitter" if you want to send to twitter, "facebook" if you want to send to facebook, or "twitter,facebook" if you want to send to both.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setBroadcast($value)
    {
        return $this->set('Broadcast', $value);
    }

    /**
     * Set the value for the OauthToken input for this AddTips Choreo.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddTips Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this AddTips Choreo.
     *
     * @param string $value (required, string) The text of the tip, up to 200 characters.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the URL input for this AddTips Choreo.
     *
     * @param string $value (optional, string) A URL related to this tip.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the VenueID input for this AddTips Choreo.
     *
     * @param string $value (required, string) The venue where you want to add this tip.
     * @return Foursquare_Tips_AddTips_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the AddTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddTips Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddTips execution.
     * @param Foursquare_Tips_AddTips $choreo The choreography object for this execution.
     * @param Foursquare_Tips_AddTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_AddTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_AddTips_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_AddTips $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddTips execution.
     *
     * @return Foursquare_Tips_AddTips_Results New results object.
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
     * Wraps results in appropriate results class for this AddTips execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_AddTips_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_AddTips_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_AddTips_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddTips Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_AddTips_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddTips execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get details for this tip
	*/

	public function getTipDetails() {
		return new Foursquare_TipDetails_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "tip"));
	}
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Allows you to create a check-in with Foursquare.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin extends Temboo_Choreography
{
    /**
     * Allows you to create a check-in with Foursquare.
     *
     * @param Temboo_Session $session The session that owns this CreateCheckin Choreo.
     * @return Foursquare_Checkins_CreateCheckin New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Checkins/CreateCheckin/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateCheckin Choreo.
     *
     * @param Foursquare_Checkins_CreateCheckin_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CreateCheckin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CreateCheckin_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Checkins_CreateCheckin_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCheckin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CreateCheckin_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Checkins_CreateCheckin_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCheckin Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateCheckin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Checkins_CreateCheckin_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCheckin input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccuracyOfCoordinates input for this CreateCheckin Choreo.
     *
     * @param int $value (optional, integer) Accuracy of the user's latitude and longitude, in meters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setAccuracyOfCoordinates($value)
    {
        return $this->set('AccuracyOfCoordinates', $value);
    }

    /**
     * Set the value for the AltitudeAccuracy input for this CreateCheckin Choreo.
     *
     * @param int $value (optional, integer) Vertical accuracy of the user's location, in meters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setAltitudeAccuracy($value)
    {
        return $this->set('AltitudeAccuracy', $value);
    }

    /**
     * Set the value for the Altitude input for this CreateCheckin Choreo.
     *
     * @param int $value (optional, integer) Altitude of the user's location, in meters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setAltitude($value)
    {
        return $this->set('Altitude', $value);
    }

    /**
     * Set the value for the Broadcast input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) Who to broadcast this check-in to. Can be a comma-delimited list: private, public, facebook, twitter, or followers. Defaults to 'public'.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setBroadcast($value)
    {
        return $this->set('Broadcast', $value);
    }

    /**
     * Set the value for the EventID input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) The event the user is checking in to. A venueId for a venue with this eventId must also be specified in the request.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setEventID($value)
    {
        return $this->set('EventID', $value);
    }

    /**
     * Set the value for the Latitude input for this CreateCheckin Choreo.
     *
     * @param float $value (optional, decimal) The latitude point of the user's location.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this CreateCheckin Choreo.
     *
     * @param float $value (optional, decimal) The longitude point of the user's location.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this CreateCheckin Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Shout input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) A message about your check-in. The maximum length of this field is 140 characters.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setShout($value)
    {
        return $this->set('Shout', $value);
    }

    /**
     * Set the value for the VenueID input for this CreateCheckin Choreo.
     *
     * @param string $value (required, string) The venue where the user is checking in. No venueid is needed if shouting or just providing a venue name.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }

    /**
     * Set the value for the Venue input for this CreateCheckin Choreo.
     *
     * @param string $value (optional, string) If you are not shouting, but you don't have a venue ID or prefer a 'venueless' checkin, pass the venue name as a string using this parameter.
     * @return Foursquare_Checkins_CreateCheckin_Inputs For method chaining.
     */
    public function setVenue($value)
    {
        return $this->set('Venue', $value);
    }
}


/**
 * Execution object for the CreateCheckin Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCheckin Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateCheckin execution.
     * @param Foursquare_Checkins_CreateCheckin $choreo The choreography object for this execution.
     * @param Foursquare_Checkins_CreateCheckin_Inputs|array $inputs (optional) Inputs as Foursquare_Checkins_CreateCheckin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Checkins_CreateCheckin_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Checkins_CreateCheckin $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCheckin execution.
     *
     * @return Foursquare_Checkins_CreateCheckin_Results New results object.
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
     * Wraps results in appropriate results class for this CreateCheckin execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Checkins_CreateCheckin_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Checkins_CreateCheckin_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateCheckin Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Checkins_CreateCheckin_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateCheckin Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Checkins_CreateCheckin_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateCheckin execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the checkin object
	*/

	public function getCheckin() {
		return new Foursquare_Checkin_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "checkin"));
	}
}

/**
 * Get a list of tips near the specified area.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips extends Temboo_Choreography
{
    /**
     * Get a list of tips near the specified area.
     *
     * @param Temboo_Session $session The session that owns this SearchNearbyTips Choreo.
     * @return Foursquare_Tips_SearchNearbyTips New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Tips/SearchNearbyTips/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchNearbyTips Choreo.
     *
     * @param Foursquare_Tips_SearchNearbyTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_SearchNearbyTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_SearchNearbyTips_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Tips_SearchNearbyTips_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchNearbyTips Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Tips_SearchNearbyTips_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchNearbyTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchNearbyTips Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchNearbyTips input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Filter input for this SearchNearbyTips Choreo.
     *
     * @param string $value (optional, string) Filter results.  If set to 'friends', the choreo returns tips from friends.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchNearbyTips Choreo.
     *
     * @param float $value (required, decimal) The latitude point of the user's location.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this SearchNearbyTips Choreo.
     *
     * @param int $value (optional, integer) Number of results to be returned by the search, up to 500.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchNearbyTips Choreo.
     *
     * @param float $value (required, decimal) The longitude point of the user's location.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the OauthToken input for this SearchNearbyTips Choreo.
     *
     * @param string $value (required, string) Your Foursquare API Oauth token string.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the Offset input for this SearchNearbyTips Choreo.
     *
     * @param int $value (optional, integer) Use to page through the list of results.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Query input for this SearchNearbyTips Choreo.
     *
     * @param string $value (optional, string) Only find tips matching the given term. Cannot be used in conjunction with 'friends' filter.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchNearbyTips Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Tips_SearchNearbyTips_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchNearbyTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchNearbyTips Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchNearbyTips execution.
     * @param Foursquare_Tips_SearchNearbyTips $choreo The choreography object for this execution.
     * @param Foursquare_Tips_SearchNearbyTips_Inputs|array $inputs (optional) Inputs as Foursquare_Tips_SearchNearbyTips_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Tips_SearchNearbyTips_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Tips_SearchNearbyTips $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchNearbyTips execution.
     *
     * @return Foursquare_Tips_SearchNearbyTips_Results New results object.
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
     * Wraps results in appropriate results class for this SearchNearbyTips execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Tips_SearchNearbyTips_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchNearbyTips Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Tips_SearchNearbyTips_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchNearbyTips Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Tips_SearchNearbyTips_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchNearbyTips execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get tips nearby the specified location
	*/

	public function getTips() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "tips");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_TipDetails_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
}

/**
 * Allows the authenticated user to like or unlike a venue.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Like extends Temboo_Choreography
{
    /**
     * Allows the authenticated user to like or unlike a venue.
     *
     * @param Temboo_Session $session The session that owns this Like Choreo.
     * @return Foursquare_Venues_Like New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Venues/Like/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Like Choreo.
     *
     * @param Foursquare_Venues_Like_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Like_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Like_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Venues_Like_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Like Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Like_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Venues_Like_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Like_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Like Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Venues_Like_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Like input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this Like Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Like Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Set input for this Like Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 (the default) to like this checkin. Set to 0 to undo a previous like.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setSet($value)
    {
        return $this->set('Set', $value);
    }

    /**
     * Set the value for the VenueID input for this Like Choreo.
     *
     * @param string $value (required, string) The ID of the venue to like or unlike.
     * @return Foursquare_Venues_Like_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Like_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Like Choreo.
     *
     * @param Temboo_Session $session The session that owns this Like execution.
     * @param Foursquare_Venues_Like $choreo The choreography object for this execution.
     * @param Foursquare_Venues_Like_Inputs|array $inputs (optional) Inputs as Foursquare_Venues_Like_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Venues_Like_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Venues_Like $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Like execution.
     *
     * @return Foursquare_Venues_Like_Results New results object.
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
     * Wraps results in appropriate results class for this Like execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Venues_Like_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Venues_Like_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Like Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Venues_Like_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Like Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Venues_Like_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Like execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get likes for this venue
	*/

	public function getLikes() {
		return new Foursquare_Likes_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "likes"));
	}
}

/**
 * Allows you to add or remove photos and tips from items on user-created lists.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem extends Temboo_Choreography
{
    /**
     * Allows you to add or remove photos and tips from items on user-created lists.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem Choreo.
     * @return Foursquare_Lists_UpdateItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Lists/UpdateItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateItem Choreo.
     *
     * @param Foursquare_Lists_UpdateItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Lists_UpdateItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Lists_UpdateItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Lists_UpdateItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ItemID input for this UpdateItem Choreo.
     *
     * @param string $value (required, string) The id of an item on a list that you wish to update.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setItemID($value)
    {
        return $this->set('ItemID', $value);
    }

    /**
     * Set the value for the ListID input for this UpdateItem Choreo.
     *
     * @param string $value (required, string) The ID of a user-created list to update
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setListID($value)
    {
        return $this->set('ListID', $value);
    }

    /**
     * Set the value for the OauthToken input for this UpdateItem Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) If present and non-empty, adds a photo to this item. If present and empty, will remove the photo on this item. If the photo was a private checkin photo, it will be promoted to a public venue photo.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Text input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) If present, this creates a public tip on the venue and replaces any existing tip on the item. Cannot be used in conjuction with TipID or PhotoID.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the TipID input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) The id of a tip to add to the list. Cannot be used in conjunction with the Text and URL inputs. Note that one of the following must be specified: VenueID, TipID, ItemListID, or ItemID.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setTipID($value)
    {
        return $this->set('TipID', $value);
    }

    /**
     * Set the value for the URL input for this UpdateItem Choreo.
     *
     * @param string $value (optional, string) If adding a new tip using the Text input, this can associate a url with the tip.
     * @return Foursquare_Lists_UpdateItem_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the UpdateItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateItem execution.
     * @param Foursquare_Lists_UpdateItem $choreo The choreography object for this execution.
     * @param Foursquare_Lists_UpdateItem_Inputs|array $inputs (optional) Inputs as Foursquare_Lists_UpdateItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Lists_UpdateItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Lists_UpdateItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateItem execution.
     *
     * @return Foursquare_Lists_UpdateItem_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Lists_UpdateItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Lists_UpdateItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateItem Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Lists_UpdateItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Lists_UpdateItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateItem execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get the item that was updated
	*/

	public function getItem() {
		return new Foursquare_Item_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "item"));
	}
}

/**
 * Retrieves details of a photo. 
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails extends Temboo_Choreography
{
    /**
     * Retrieves details of a photo. 
     *
     * @param Temboo_Session $session The session that owns this PhotoDetails Choreo.
     * @return Foursquare_Photos_PhotoDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Foursquare/Photos/PhotoDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PhotoDetails Choreo.
     *
     * @param Foursquare_Photos_PhotoDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_PhotoDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_PhotoDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Foursquare_Photos_PhotoDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PhotoDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_PhotoDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Foursquare_Photos_PhotoDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PhotoDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PhotoDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Foursquare_Photos_PhotoDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PhotoDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the OauthToken input for this PhotoDetails Choreo.
     *
     * @param string $value (required, string) The FourSquare API Oauth token string.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setOauthToken($value)
    {
        return $this->set('OauthToken', $value);
    }

    /**
     * Set the value for the PhotoID input for this PhotoDetails Choreo.
     *
     * @param string $value (required, string) The ID of the photo to get details for.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setPhotoID($value)
    {
        return $this->set('PhotoID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this PhotoDetails Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Foursquare_Photos_PhotoDetails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the PhotoDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PhotoDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this PhotoDetails execution.
     * @param Foursquare_Photos_PhotoDetails $choreo The choreography object for this execution.
     * @param Foursquare_Photos_PhotoDetails_Inputs|array $inputs (optional) Inputs as Foursquare_Photos_PhotoDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Foursquare_Photos_PhotoDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Foursquare_Photos_PhotoDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PhotoDetails execution.
     *
     * @return Foursquare_Photos_PhotoDetails_Results New results object.
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
     * Wraps results in appropriate results class for this PhotoDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Foursquare_Photos_PhotoDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Foursquare_Photos_PhotoDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PhotoDetails Choreo.
 *
 * @package Temboo
 * @subpackage Foursquare
 */
class Foursquare_Photos_PhotoDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PhotoDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Foursquare_Photos_PhotoDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PhotoDetails execution.
     *
     * @return string The response from Foursquare. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get the response status code
	*/

	public function getMeta() {
		return new Foursquare_Meta_output(Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "meta"));
	}
	/*
	Get the count of unread notifications for the authenticated user
	*/

	public function getNotifications() {
		$listEntries = Temboo_Results::getSubItemByKey(json_decode($this->get('Response'), true), "notifications");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Notification_output($entry));
			}
		}
		return $resultArray;
	}
	/*
	Get photo details
	*/

	public function getPhoto() {
		return new Foursquare_Photo_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(json_decode($this->get('Response'), true), "response"), "photo"));
	}
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


/*
 Contains badges associated with the checkin

*/

class Foursquare_Badge_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A unique identifier for this badge
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Get the badge image information
	*/

	public function getBadgeImage() {
		return new Foursquare_BadgeImage_output(Temboo_Results::getSubItemByKey($this->base, "image"));
	}

	/*
	The badge description
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	A canonical ID for this badge
	*/

	public function getBadgeId() {
		return Temboo_Results::getSubItemByKey($this->base, "badgeId");
	}

	/*
	The name of the badge
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}
}



/*
 Contains the image information for badges
    
*/

class Foursquare_BadgeImage_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getSizes() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "sizes");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}

	/*
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	*/

	public function getPrefix() {
		return Temboo_Results::getSubItemByKey($this->base, "prefix");
	}
}



/*
 Contains the count of the number of times the acting user has been here. Absent if there is no acting user
*/

class Foursquare_BeenHere_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The number of times the acting user has been at the venue
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}
}



/*
  Contains information about the categories that have been applied to this foursquare object

*/

class Foursquare_Category_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The plural name for the category
	*/

	public function getPluralName() {
		return Temboo_Results::getSubItemByKey($this->base, "pluralName");
	}

	/*
	*/

	public function getParents() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "parents");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}

	/*
	The id of the category
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The icon for this category
	*/

	public function getIcon() {
		return Temboo_Results::getSubItemByKey($this->base, "icon");
	}

	/*
	Whether or not this category is tagged as the primary category
	*/

	public function getPrimary() {
		return Temboo_Results::getSubItemByKey($this->base, "primary");
	}

	/*
	The name of the category
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	The short name for the category
	*/

	public function getShortName() {
		return Temboo_Results::getSubItemByKey($this->base, "shortName");
	}
}



/*
 A checkin object

*/

class Foursquare_Checkin_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get likes for this checkin
	*/

	public function getLikes() {
		return new Foursquare_Likes_output(Temboo_Results::getSubItemByKey($this->base, "likes"));
	}

	/*
	The id the checkin
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The type of foursquare object. One of checkin, shout, or venueless.
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	public function getBadges() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "badges"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Badge_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The timezone associated with this checkin
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}

	/*
	Whether or not the checkin has been liked
	*/

	public function getLike() {
		return Temboo_Results::getSubItemByKey($this->base, "like");
	}

	/*
	Get the venue for this checkin
	*/

	public function getVenue() {
		return new Foursquare_Venue_output(Temboo_Results::getSubItemByKey($this->base, "venue"));
	}

	/*
	Get the source information for the app that created the checkin
	*/

	public function getSource() {
		return new Foursquare_Source_output(Temboo_Results::getSubItemByKey($this->base, "source"));
	}

	public function getComments() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "comments"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Comment_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Get information about overlapping checkins
	*/

	public function getOverlaps() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "overlaps"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Overlap_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	A string representation of the time zone where this check-in occurred
	*/

	public function getTimeZoneOffset() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZoneOffset");
	}

	/*
	Get the posts for this checkin. May not be present.
	*/

	public function getPosts() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "posts"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Post_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The epoch timestamp for when the checkin was created
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	Get photos for this checkin
	*/

	public function getPhotos() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "photos"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Photo_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The message from check-in
	*/

	public function getShout() {
		return Temboo_Results::getSubItemByKey($this->base, "shout");
	}

	/*
	Get the user associated with this checkin
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	Get scores for this checkin
	*/

	public function getScores() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "score"), "scores");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Score_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 Contains the collaborators for this item

*/

class Foursquare_Collaborator_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Contains the user objects that are collaborators
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "users"));
	}
}



/*
 A list of comments objects

*/

class Foursquare_Comment_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get the user that left this comment
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	*/

	public function getText() {
		return Temboo_Results::getSubItemByKey($this->base, "text");
	}

	/*
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}
}



/*
 An object containing twitter, phone, and formattedPhone of the user or venue contact. All can be present, and all can be absent from the response.

*/

class Foursquare_Contact_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The facebook id of the contact
	*/

	public function getFacebook() {
		return Temboo_Results::getSubItemByKey($this->base, "facebook");
	}

	/*
	The email address of the contact
	*/

	public function getEmail() {
		return Temboo_Results::getSubItemByKey($this->base, "email");
	}

	/*
	The unformatted phone number of the contact
	*/

	public function getPhone() {
		return Temboo_Results::getSubItemByKey($this->base, "phone");
	}

	/*
	The formatted phone number of the contact
	*/

	public function getFormattedPhone() {
		return Temboo_Results::getSubItemByKey($this->base, "formattedPhone");
	}

	/*
	The twitter handle of the contact
	*/

	public function getTwitter() {
		return Temboo_Results::getSubItemByKey($this->base, "twitter");
	}
}



/*
 Contains a count of tips that are done

*/

class Foursquare_Done_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get groups of people that have marked this tip done
	*/

	public function getPeopleGroup() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_PeopleGroup_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The number of tips that are done
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}
}



/*
 Contains details about venue events
  
*/

class Foursquare_Event_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The date of the even as an epoch timestamp
	*/

	public function getDate() {
		return Temboo_Results::getSubItemByKey($this->base, "date");
	}

	/*
	Get stats for the event
	*/

	public function getStats() {
		return new Foursquare_Stats_output(Temboo_Results::getSubItemByKey($this->base, "stats"));
	}

	/*
	The url for the event
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The name of the event
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	Get categories for this event
	*/

	public function getCategories() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "categories");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Category_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Get foreign ids
	*/

	public function getForeignIds() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "foreignIds"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_ForeignIds_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Get the people at this event now
	*/

	public function getHereNow() {
		return new Foursquare_HereNow_output(Temboo_Results::getSubItemByKey($this->base, "hereNow"));
	}

	/*
	The event id
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Whether or not this is an all day event
	*/

	public function getAllDay() {
		return Temboo_Results::getSubItemByKey($this->base, "allDay");
	}

	/*
	The event timezone
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}
}



/*
 An object containing the count of followers for the item

*/

class Foursquare_Followers_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The number of followers for this todo
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}
}



/*
 Contains the domain and id of the third party provider
    
*/

class Foursquare_ForeignIds_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The id of the 3rd party provider
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The domain of the 3rd party provider
	*/

	public function getDomain() {
		return Temboo_Results::getSubItemByKey($this->base, "domain");
	}
}



/*
 Contains information about who is here now

*/

class Foursquare_HereNow_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A summary of people here now
	*/

	public function getSummary() {
		return Temboo_Results::getSubItemByKey($this->base, "summary");
	}

	/*
	The number of people here now
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	Contains friends and others as types
	*/

	public function getPeopleGroups() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_PeopleGroup_output($entry));
			}
		}
		return $resultArray;
	}
}



/*

    
*/

class Foursquare_HereNowItem_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The id of the checkin
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The timezone associated with the checkin
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}

	/*
	When the checkin was created in epoch format
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	The type of checkin
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	Whether or not this checkin is from the mayor
	*/

	public function getIsMayor() {
		return Temboo_Results::getSubItemByKey($this->base, "isMayor");
	}

	/*
	The timezone offset associated with the checkin
	*/

	public function getTimeZoneOffset() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZoneOffset");
	}

	/*
	Get the user details
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}
}



/*
 Contains a count and list of people at this venue right now
  
*/

class Foursquare_HereNowList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The total number of people here now
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	Get checkins and user info for people here now
	*/

	public function getHereNowItems() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_HereNowItem_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 Contains the hours during the week that the venue is open along with any named hours segments in a human-readable format
  
*/

class Foursquare_Hours_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Whether or not the venue is open
	*/

	public function getIsOpen() {
		return Temboo_Results::getSubItemByKey($this->base, "isOpen");
	}

	/*
	The venue status
	*/

	public function getStatus() {
		return Temboo_Results::getSubItemByKey($this->base, "status");
	}

	/*
	Get the timeframe information for the venue including days of operation
	*/

	public function getTimeframes() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "timeframes");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Timeframe_output($entry));
			}
		}
		return $resultArray;
	}
}



/*

        
*/

class Foursquare_Image_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The beginning portion of the image url used to contruct the complete image url
	*/

	public function getPrefix() {
		return Temboo_Results::getSubItemByKey($this->base, "prefix");
	}

	/*
	The name of the image used to contruct the complete image url
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	The available image sizes used to construct the complete image url
	*/

	public function getSizes() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "sizes");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}
}



/*
 Contains information about insights related to this checkin
    
*/

class Foursquare_Insight_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The url for the appropriate foursquare icon
	*/

	public function getImage() {
		return Temboo_Results::getSubItemByKey($this->base, "image");
	}

	/*
	The title of the insight
	*/

	public function getTitle() {
		return Temboo_Results::getSubItemByKey($this->base, "title");
	}

	/*
	The type of insight
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	Get the points information for the insight
	*/

	public function getPoints() {
		return new Foursquare_Points_output(Temboo_Results::getSubItemByKey($this->base, "points"));
	}
}



/*
 A list item object

*/

class Foursquare_Item_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get the tip for this item
	*/

	public function getTip() {
		return new Foursquare_Tip_output(Temboo_Results::getSubItemByKey($this->base, "tip"));
	}

	/*
	Whether or not this item has been done
	*/

	public function getDone() {
		return Temboo_Results::getSubItemByKey($this->base, "done");
	}

	/*
	Get lists for the authenticated user
	*/

	public function getListed() {
		return new Foursquare_Listed_output(Temboo_Results::getSubItemByKey($this->base, "listed"));
	}

	/*
	Whether or not this item is a todo
	*/

	public function getTodo() {
		return Temboo_Results::getSubItemByKey($this->base, "todo");
	}

	/*
	The id of the item
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	How many times the venue is has been visited
	*/

	public function getVisitedCount() {
		return Temboo_Results::getSubItemByKey($this->base, "visitedCount");
	}

	/*
	Get the venue that this item is for
	*/

	public function getVenue() {
		return new Foursquare_Venue_output(Temboo_Results::getSubItemByKey($this->base, "venue"));
	}
}



/*
 Contains a list of words that are suggested for the user to input as refinements
    
*/

class Foursquare_Keywords_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The display name of the keyword
	*/

	public function getDisplayName() {
		return Temboo_Results::getSubItemByKey($this->base, "displayName");
	}

	/*
	The suggested keyword
	*/

	public function getKeyword() {
		return Temboo_Results::getSubItemByKey($this->base, "keyword");
	}
}



/*
 A leaderboard object
    
*/

class Foursquare_Leaderboard_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The leaderboard rank
	*/

	public function getRank() {
		return Temboo_Results::getSubItemByKey($this->base, "rank");
	}

	/*
	Get the user for this leaderboard
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	Get leaderboard scores
	*/

	public function getLeaderboardScores() {
		return new Foursquare_LeaderboardScores_output(Temboo_Results::getSubItemByKey($this->base, "scores"));
	}
}



/*
 Contains leaderboard items for the authenticated user
  
*/

class Foursquare_LeaderboardItem_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getRank() {
		return Temboo_Results::getSubItemByKey($this->base, "rank");
	}

	/*
	Get the user on this leaderboard
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	Get statitics related to the leaderboard score
	*/

	public function getLeaderboardScores() {
		return new Foursquare_LeaderboardScores_output(Temboo_Results::getSubItemByKey($this->base, "scores"));
	}
}



/*
 Cotains leaderboard scores for the authenticated user
      
*/

class Foursquare_LeaderboardScores_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The user's total checkin count over the past 7 days
	*/

	public function getCheckinsCount() {
		return Temboo_Results::getSubItemByKey($this->base, "checkinsCount");
	}

	/*
	If the user has never scored more than a certain number of points, then this field is returned (current value is 50)
	*/

	public function getGoal() {
		return Temboo_Results::getSubItemByKey($this->base, "goal");
	}

	/*
	The highest 7-day score the user has ever achieved
	*/

	public function getMax() {
		return Temboo_Results::getSubItemByKey($this->base, "max");
	}

	/*
	The user's total score over the past 7 days
	*/

	public function getRecent() {
		return Temboo_Results::getSubItemByKey($this->base, "recent");
	}
}



/*
 Contains a count and group of people who liked an object

*/

class Foursquare_Likes_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The count of users liked the object
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	The summary of likes
	*/

	public function getSummary() {
		return Temboo_Results::getSubItemByKey($this->base, "summary");
	}

	/*
	Contains groups of friends and others that have liked an object
	*/

	public function getPeopleGroups() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_PeopleGroup_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 A list object

*/

class Foursquare_List_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get the list items
	*/

	public function getItems() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "listItems"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Item_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Whether or not there are followers of the list
	*/

	public function getFollowing() {
		return Temboo_Results::getSubItemByKey($this->base, "following");
	}

	/*
	The type of list
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	The id of the list
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Whether or not the list is editable
	*/

	public function getEditable() {
		return Temboo_Results::getSubItemByKey($this->base, "editable");
	}

	/*
	Get collaborators for this list
	*/

	public function getCollaborators() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "collaborators"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Collaborator_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The canonical URL for the list
	*/

	public function getCanonicalUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "canonicalUrl");
	}

	/*
	Get the count of followers
	*/

	public function getFollowers() {
		return new Foursquare_Followers_output(Temboo_Results::getSubItemByKey($this->base, "followers"));
	}

	/*
	The description of the list
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	Get categories for the list
	*/

	public function getCategories() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "categories"), "item");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Category_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Get the user who created this list
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	The list url
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The name of the list
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	Whether not the list is editable by others
	*/

	public function getPublic() {
		return Temboo_Results::getSubItemByKey($this->base, "public");
	}

	/*
	The count of visits
	*/

	public function getVisitedCount() {
		return Temboo_Results::getSubItemByKey($this->base, "visitedCount");
	}

	/*
	The count of items that are done
	*/

	public function getDoneCount() {
		return Temboo_Results::getSubItemByKey($this->base, "doneCount");
	}

	/*
	The venue count for this list
	*/

	public function getVenueCount() {
		return Temboo_Results::getSubItemByKey($this->base, "venueCount");
	}

	/*
	Whether or not the list has collaborators
	*/

	public function getCollaborative() {
		return Temboo_Results::getSubItemByKey($this->base, "collaborative");
	}
}



/*
 Contains the followers of the list
  
*/

class Foursquare_ListFollower_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	public function getTipsCount() {
		return new Foursquare_TipsCount_output(Temboo_Results::getSubItemByKey($this->base, "tips"));
	}

	/*
	The gender of the user who is following the list
	*/

	public function getGender() {
		return Temboo_Results::getSubItemByKey($this->base, "gender");
	}

	/*
	The canonical URL for the user following the list
	*/

	public function getCanonicalUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "canonicalUrl");
	}

	/*
	The id of the user who is following the list
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The last name of the user who is following the list
	*/

	public function getLastName() {
		return Temboo_Results::getSubItemByKey($this->base, "lastName");
	}

	/*
	The first name of the user following the list
	*/

	public function getFirstName() {
		return Temboo_Results::getSubItemByKey($this->base, "firstName");
	}

	/*
	The url to the photo of the follower
	*/

	public function getPhoto() {
		return Temboo_Results::getSubItemByKey($this->base, "photo");
	}

	/*
	The home city of the user who is following the list
	*/

	public function getHomeCity() {
		return Temboo_Results::getSubItemByKey($this->base, "homeCity");
	}
}



/*
 Contains groups of list including created, edited, followed, friends, or other

*/

class Foursquare_ListGroup_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get lists
	*/

	public function getLists() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_List_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The type of group
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	The count of groups returned
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}
}



/*
 Contains a count of lists that contain this venue

*/

class Foursquare_Listed_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A summary field for the listed items
	*/

	public function getSummary() {
		return Temboo_Results::getSubItemByKey($this->base, "summary");
	}

	/*
	A count of lists
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	public function getListedItems() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_ListedItems_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 Contains list objects for the authenitcated user
  
*/

class Foursquare_ListedItems_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Whether or not the list is public
	*/

	public function getPublic() {
		return Temboo_Results::getSubItemByKey($this->base, "public");
	}

	/*
	The description of the list
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	Whether or not this list is editable by the owner's friends
	*/

	public function getCollaborative() {
		return Temboo_Results::getSubItemByKey($this->base, "collaborative");
	}

	/*
	The epoch timestamp for when this list was created
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	Get the list items
	*/

	public function getItems() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "listItems"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Item_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The name of the list
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	The id of this item
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Get the follower count for this list item
	*/

	public function getFollowers() {
		return new Foursquare_Followers_output(Temboo_Results::getSubItemByKey($this->base, "followers"));
	}

	/*
	An epoch timestamp representing the last update time for the list
	*/

	public function getUpdatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "updatedAt");
	}

	/*
	Whether or not this item is editable
	*/

	public function getEditable() {
		return Temboo_Results::getSubItemByKey($this->base, "editable");
	}

	/*
	Get the user who created the list
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	The url for the list
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The canonical url for the list
	*/

	public function getCanonicalUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "canonicalUrl");
	}
}



/*
 Contains location information for the venue

*/

class Foursquare_Location_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The cross street of the venue
	*/

	public function getCrossStreet() {
		return Temboo_Results::getSubItemByKey($this->base, "crossStreet");
	}

	/*
	The city that the venue is in
	*/

	public function getCity() {
		return Temboo_Results::getSubItemByKey($this->base, "city");
	}

	/*
	The state that the venue is in
	*/

	public function getState() {
		return Temboo_Results::getSubItemByKey($this->base, "state");
	}

	/*
	The longitude coordinate for the venue
	*/

	public function getLng() {
		return Temboo_Results::getSubItemByKey($this->base, "lng");
	}

	/*
	The venue address
	*/

	public function getAddress() {
		return Temboo_Results::getSubItemByKey($this->base, "address");
	}

	/*
	The latitude coordinate for the venue
	*/

	public function getLat() {
		return Temboo_Results::getSubItemByKey($this->base, "lat");
	}

	/*
	The country abbreviation field for the venue address
	*/

	public function getCc() {
		return Temboo_Results::getSubItemByKey($this->base, "cc");
	}

	/*
	The country field for the venue address
	*/

	public function getCountry() {
		return Temboo_Results::getSubItemByKey($this->base, "country");
	}

	/*
	The postal code of the venue
	*/

	public function getPostalCode() {
		return Temboo_Results::getSubItemByKey($this->base, "postalCode");
	}
}



/*
 An object containing information about the mayor of a venue

*/

class Foursquare_Mayor_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	Contains the user information for the venue mayor
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}
}



/*
 Contains venues that this user is mayor of
  
*/

class Foursquare_Mayorship_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	public function getVenue() {
		return new Foursquare_Venue_output(Temboo_Results::getSubItemByKey($this->base, "venue"));
	}
}



/*
 An object containing url and mobileUrl that display the menu information for this venue

*/

class Foursquare_Menu_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The url for the menu
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The mobile url of the menu
	*/

	public function getMobileUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "mobileUrl");
	}

	/*
	The type of menu
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}



/*
 An object containing the status code from Foursquare

*/

class Foursquare_Meta_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The response status code from Foursquare
	*/

	public function getCode() {
		return Temboo_Results::getSubItemByKey($this->base, "code");
	}
}



/*
 Contains notifications of different types including insights, notificationTray, mayorship, score, message, leaderboard, etc.

*/

class Foursquare_Notification_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get an individual notification item
	*/

	public function getNotificationItem() {
		return new Foursquare_NotificationItem_output(Temboo_Results::getSubItemByKey($this->base, "item"));
	}

	/*
	The type of notification
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}



/*
 Contains
  
*/

class Foursquare_NotificationItem_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get the user information for this notification item
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	The number of unread notifications
	*/

	public function getUnreadCount() {
		return Temboo_Results::getSubItemByKey($this->base, "unreadCount");
	}

	/*
	Get insights
	*/

	public function getInsights() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "insights"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Insight_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The number of checkins
	*/

	public function getCheckins() {
		return Temboo_Results::getSubItemByKey($this->base, "checkins");
	}

	/*
	The url for the user image
	*/

	public function getImage() {
		return Temboo_Results::getSubItemByKey($this->base, "image");
	}

	/*
	Get the leadboard object for the authenticated user
	*/

	public function getLeaderboard() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "leaderboard");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Leaderboard_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The total number of items
	*/

	public function getTotal() {
		return Temboo_Results::getSubItemByKey($this->base, "total");
	}

	/*
	Get the scores for this checkin
	*/

	public function getScores() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "item"), "scores");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Score_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The notification message
	*/

	public function getMessage() {
		return Temboo_Results::getSubItemByKey($this->base, "message");
	}

	/*
	The type of notification item
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}



/*
 The segments of the days in this timeframe in which the venue is open
      
*/

class Foursquare_Open_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The time the venue opens in HHMM (24hr) format
	*/

	public function getStart() {
		return Temboo_Results::getSubItemByKey($this->base, "start");
	}

	/*
	The time the venue closes in HHMM (24hr) format
	*/

	public function getEnd() {
		return Temboo_Results::getSubItemByKey($this->base, "end");
	}

	/*
	The human readable version the open and close times
	*/

	public function getRenderedTime() {
		return Temboo_Results::getSubItemByKey($this->base, "renderedTime");
	}
}



/*
 Contains information about overlapping checkins
  
*/

class Foursquare_Overlap_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The timezone for the overlapping checkin
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}

	/*
	The id of the overlapping ehckin
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Get the users overlapping with the checkin
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	The timezone offset for the checkin
	*/

	public function getTimeZoneOffset() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZoneOffset");
	}

	/*
	The epoch timestamp for the overlapping checkin
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	The type of foursquare object
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}



/*
 An object containing the count of page updates
  
*/

class Foursquare_PageUpdates_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The count of updates
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}
}



/*
 Contains friends and others as types

*/

class Foursquare_PeopleGroup_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The name of the group
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	The number of people here
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	The group type
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	Get users in this group
	*/

	public function getUsers() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_User_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 Contains a photo object

*/

class Foursquare_Photo_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get the venue associated with this photo
	*/

	public function getVenue() {
		return new Foursquare_Venue_output(Temboo_Results::getSubItemByKey($this->base, "venue"));
	}

	/*
	The start of the URL for this photo
	*/

	public function getPrefix() {
		return Temboo_Results::getSubItemByKey($this->base, "prefix");
	}

	/*
	The end of the URL for this photo
	*/

	public function getSuffix() {
		return Temboo_Results::getSubItemByKey($this->base, "suffix");
	}

	/*
	Get the tip for this photo
	*/

	public function getTip() {
		return new Foursquare_Tip_output(Temboo_Results::getSubItemByKey($this->base, "tip"));
	}

	/*
	The height of the photo in pixels
	*/

	public function getHeight() {
		return Temboo_Results::getSubItemByKey($this->base, "height");
	}

	/*
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	Get the user that took this photo
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	The width of this photo in pixels
	*/

	public function getWidth() {
		return Temboo_Results::getSubItemByKey($this->base, "width");
	}

	/*
	Get the source information for this photo
	*/

	public function getSource() {
		return new Foursquare_Source_output(Temboo_Results::getSubItemByKey($this->base, "source"));
	}

	public function getSizes() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "sizes"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Size_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	*/

	public function getVisibility() {
		return Temboo_Results::getSubItemByKey($this->base, "visibility");
	}
}



/*
 Contains checkin photos and venue photos

*/

class Foursquare_PhotoGroup_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	Get a photo associated with the venue
	*/

	public function getPhotos() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Photo_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The name of the photo group
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	The photo group type
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}



/*
 Contains information for points for the insight
      
*/

class Foursquare_Points_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	public function getImage() {
		return new Foursquare_Image_output(Temboo_Results::getSubItemByKey($this->base, "image"));
	}

	/*
	A foursquare generated message about the checkin
	*/

	public function getMessage() {
		return Temboo_Results::getSubItemByKey($this->base, "message");
	}

	/*
	The number of points
	*/

	public function getPoints() {
		return Temboo_Results::getSubItemByKey($this->base, "points");
	}
}



/*
 Contains information about the checkin post including the id, text, timestamp, and source information

*/

class Foursquare_Post_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The text of the post
	*/

	public function getText() {
		return Temboo_Results::getSubItemByKey($this->base, "text");
	}

	/*
	Get the source for this post
	*/

	public function getSource() {
		return new Foursquare_Source_output(Temboo_Results::getSubItemByKey($this->base, "source"));
	}

	/*
	The id of the post created
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The timestamp that the post was created in epoch format
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}
}



/*
 Contains price information for this venue
  
*/

class Foursquare_Price_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The message for pricing
	*/

	public function getMessage() {
		return Temboo_Results::getSubItemByKey($this->base, "message");
	}

	/*
	The pricing tier
	*/

	public function getTier() {
		return Temboo_Results::getSubItemByKey($this->base, "tier");
	}
}



/*
 Contains information about why this place may be of interest to the acting user
        
*/

class Foursquare_Reason_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The message text for the reason
	*/

	public function getMessage() {
		return Temboo_Results::getSubItemByKey($this->base, "message");
	}

	/*
	The reason type
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}



/*
 Contains recent checkins for the authenticated user
  
*/

class Foursquare_Recent_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get photos for recent checkins
	*/

	public function getPhotos() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "photos"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Photo_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The timezone associated with this checkin
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}

	/*
	Get the venue that was checked into
	*/

	public function getVenue() {
		return new Foursquare_Venue_output(Temboo_Results::getSubItemByKey($this->base, "venue"));
	}

	/*
	The epoch timestamp for when the checkin created
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	Get the source information for this checkin
	*/

	public function getSource() {
		return new Foursquare_Source_output(Temboo_Results::getSubItemByKey($this->base, "source"));
	}

	/*
	Get the user for this checkin
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	The checkin id
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	String representation of the time zone where this check-in occurred
	*/

	public function getTimeZoneOffset() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZoneOffset");
	}

	/*
	The type of checkin. One of checkin, shout, or venueless.
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}



/*

    
*/

class Foursquare_RecommendationGroup_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The group type
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	public function getRecommendationItem() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_RecommendationItem_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The name of the group
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}
}



/*

      
*/

class Foursquare_RecommendationItem_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get suggested tips
	*/

	public function getTips() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "tips");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new _FoursquareTip_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Get reasons why this place may be of interest to the acting user
	*/

	public function getReasons() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "reasons"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Reason_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Get suggested venues
	*/

	public function getVenue() {
		return new Foursquare_Venue_output(Temboo_Results::getSubItemByKey($this->base, "venue"));
	}
}



/*
*/

class Foursquare_Recommendations_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get keyword suggestions
	*/

	public function getKeywords() {
		return new Foursquare_Keywords_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "keywords"), "items"));
	}

	/*
	A message to the user based on their current context
	*/

	public function getHeaderMessage() {
		return Temboo_Results::getSubItemByKey($this->base, "headerMessage");
	}

	/*
	A full text name for the location the user searched
	*/

	public function getHeaderFullLocation() {
		return Temboo_Results::getSubItemByKey($this->base, "headerFullLocation");
	}

	public function getRecommendationGroups() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_RecommendationGroup_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Get warnings about the request
	*/

	public function getWarning() {
		return new Foursquare_Warning_output(Temboo_Results::getSubItemByKey($this->base, "warning"));
	}

	/*
	A text name for the location the user searched
	*/

	public function getHeaderLocation() {
		return Temboo_Results::getSubItemByKey($this->base, "headerLocation");
	}

	/*
	When no radius is specified, this represents the radius that was used for the query (based upon the density of venues in the query area)
	*/

	public function getSuggestedRadius() {
		return Temboo_Results::getSubItemByKey($this->base, "suggestedRadius");
	}

	/*
	More granular location information
	*/

	public function getHeaderLocationGranularity() {
		return Temboo_Results::getSubItemByKey($this->base, "headerLocationGranularity");
	}
}



/*
 Contains a reply object

*/

class Foursquare_Reply_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The url the reply
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The text of the reply
	*/

	public function getText() {
		return Temboo_Results::getSubItemByKey($this->base, "text");
	}

	/*
	The reply id
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Get the source that created this reply
	*/

	public function getSource() {
		return new Foursquare_Source_output(Temboo_Results::getSubItemByKey($this->base, "source"));
	}

	/*
	The epoch timestamp for the reply
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}
}



/*
 Contains the scores for this checkin

*/

class Foursquare_Score_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getIcon() {
		return Temboo_Results::getSubItemByKey($this->base, "icon");
	}

	/*
	*/

	public function getPoints() {
		return Temboo_Results::getSubItemByKey($this->base, "points");
	}

	/*
	*/

	public function getMessage() {
		return Temboo_Results::getSubItemByKey($this->base, "message");
	}
}



/*
 Contains the named segments of the days in this timeframe in which the venue is open
      
*/

class Foursquare_Segment_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The time as HHMM (24hr) at which the segment ends
	*/

	public function getEnd() {
		return Temboo_Results::getSubItemByKey($this->base, "end");
	}

	/*
	The time as HHMM (24hr) at which the segment begins
	*/

	public function getStart() {
		return Temboo_Results::getSubItemByKey($this->base, "start");
	}
}



/*
 Contains badge IDs and badge image information
  
*/

class Foursquare_Set_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get badge image info
	*/

	public function getBadgeImage() {
		return new Foursquare_BadgeImage_output(Temboo_Results::getSubItemByKey($this->base, "image"));
	}

	/*
	Contains badge ids
	*/

	public function getBadgeIDs() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}

	/*
	The badge type
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	The name of the badge
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}
}



/*
 Available sizes for an image

*/

class Foursquare_Size_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The height of an image
	*/

	public function getHeight() {
		return Temboo_Results::getSubItemByKey($this->base, "height");
	}

	/*
	The url for an image
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The width of the image
	*/

	public function getWidth() {
		return Temboo_Results::getSubItemByKey($this->base, "width");
	}
}



/*
 An object containing the source information about this object

*/

class Foursquare_Source_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The detail url for the application that created the object
	*/

	public function getDetailUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "detailUrl");
	}

	/*
	The icon for the application that create the object
	*/

	public function getIcon() {
		return Temboo_Results::getSubItemByKey($this->base, "icon");
	}

	/*
	The link to the photo of the application that created the object
	*/

	public function getPhoto() {
		return Temboo_Results::getSubItemByKey($this->base, "photo");
	}

	/*
	The id of the application that created the object
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The url for the application that created the object
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The name of the application that created the object
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}
}



/*
 Contains specials offered by a venue

*/

class Foursquare_Special_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getFinePrint() {
		return Temboo_Results::getSubItemByKey($this->base, "finePrint");
	}

	/*
	*/

	public function getIcon() {
		return Temboo_Results::getSubItemByKey($this->base, "icon");
	}

	/*
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	*/

	public function getMessage() {
		return Temboo_Results::getSubItemByKey($this->base, "message");
	}

	/*
	*/

	public function getProvider() {
		return Temboo_Results::getSubItemByKey($this->base, "provider");
	}

	/*
	*/

	public function getRedemption() {
		return Temboo_Results::getSubItemByKey($this->base, "redemption");
	}

	/*
	*/

	public function getTitle() {
		return Temboo_Results::getSubItemByKey($this->base, "title");
	}

	/*
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}



/*
 Contains a list of specials
  
*/

class Foursquare_SpecialsList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The icon name
	*/

	public function getIcon() {
		return Temboo_Results::getSubItemByKey($this->base, "icon");
	}

	/*
	The title of the special
	*/

	public function getTitle() {
		return Temboo_Results::getSubItemByKey($this->base, "title");
	}

	/*
	The special id
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The fine print of the special
	*/

	public function getFinePrint() {
		return Temboo_Results::getSubItemByKey($this->base, "finePrint");
	}

	/*
	The special description
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	The special type
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	The provider of the special
	*/

	public function getProvider() {
		return Temboo_Results::getSubItemByKey($this->base, "provider");
	}

	/*
	Get the likes for the special
	*/

	public function getLikes() {
		return new Foursquare_Likes_output(Temboo_Results::getSubItemByKey($this->base, "likes"));
	}

	/*
	The message text for this special
	*/

	public function getMessage() {
		return Temboo_Results::getSubItemByKey($this->base, "message");
	}

	/*
	The redemption type
	*/

	public function getRedemption() {
		return Temboo_Results::getSubItemByKey($this->base, "redemption");
	}

	/*
	Get the venue offering the special
	*/

	public function getVenue() {
		return new Foursquare_Venue_output(Temboo_Results::getSubItemByKey($this->base, "venue"));
	}
}



/*
 Contains statistics for the venue including checkinsCount, tipCount, and userCount

*/

class Foursquare_Stats_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The number of tips for this venue
	*/

	public function getTipCount() {
		return Temboo_Results::getSubItemByKey($this->base, "tipCount");
	}

	/*
	The total number of users that have checked into this venue
	*/

	public function getUsersCount() {
		return Temboo_Results::getSubItemByKey($this->base, "usersCount");
	}

	/*
	The total number of checkins for this venue
	*/

	public function getCheckinsCount() {
		return Temboo_Results::getSubItemByKey($this->base, "checkinsCount");
	}
}



/*
 An object containing the days
    
*/

class Foursquare_Timeframe_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get segment information for the venue
	*/

	public function getSegments() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "segments");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Segment_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Days represented as integers with Monday = 1,..., Sunday = 7 on which these hours apply
	*/

	public function getDays() {
		return Temboo_Results::getSubItemByKey($this->base, "days");
	}

	/*
	Indicates if this timeframe includes today
	*/

	public function getIncludesToday() {
		return Temboo_Results::getSubItemByKey($this->base, "includesToday");
	}

	/*
	Get the start, end, and rendered time for the venue
	*/

	public function getOpen() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "open");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Open_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 Contains information about tips associated with a venue

*/

class Foursquare_Tip_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The text of the tip
	*/

	public function getText() {
		return Temboo_Results::getSubItemByKey($this->base, "text");
	}

	/*
	Get the user that created this tip
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	Get the count of tips that have been done
	*/

	public function getDone() {
		return new Foursquare_Done_output(Temboo_Results::getSubItemByKey($this->base, "done"));
	}

	/*
	Get to count of todos for this tip
	*/

	public function getTodo() {
		return new Foursquare_Todo_output(Temboo_Results::getSubItemByKey($this->base, "todo"));
	}

	/*
	The id of the tip
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Get the photos for this tip
	*/

	public function getPhoto() {
		return new Foursquare_Photo_output(Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "items"), "photo"));
	}

	/*
	The url for the tip
	*/

	public function getCanonicalUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "canonicalUrl");
	}

	/*
	The date that this tip was created in epoch format
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	Get the likes for this tip
	*/

	public function getLikes() {
		return new Foursquare_Likes_output(Temboo_Results::getSubItemByKey($this->base, "likes"));
	}

	/*
	The tip url
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The url to the photo
	*/

	public function getPhotourl() {
		return Temboo_Results::getSubItemByKey($this->base, "photourl");
	}
}



/*
 Contains tip details including users that have marked a tip done and users that have marked a tip as a todo

*/

class Foursquare_TipDetails_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get information about people that have indicated this tip as a todo
	*/

	public function getTodo() {
		return new Foursquare_Todo_output(Temboo_Results::getSubItemByKey($this->base, "todo"));
	}

	/*
	Get the info for user who have marked this tip done
	*/

	public function getDone() {
		return new Foursquare_Done_output(Temboo_Results::getSubItemByKey($this->base, "done"));
	}

	/*
	Get the user that created this tip
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	Get the venue associated with this tip
	*/

	public function getVenue() {
		return new Foursquare_Venue_output(Temboo_Results::getSubItemByKey($this->base, "venue"));
	}

	/*
	Whether or not the tip has been liked
	*/

	public function getLike() {
		return Temboo_Results::getSubItemByKey($this->base, "like");
	}

	/*
	The url for the tip
	*/

	public function getCanonicalUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "canonicalUrl");
	}

	/*
	The actual tip
	*/

	public function getText() {
		return Temboo_Results::getSubItemByKey($this->base, "text");
	}

	/*
	The id of this tip
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Get the the count of tip
	*/

	public function getListed() {
		return new Foursquare_Listed_output(Temboo_Results::getSubItemByKey($this->base, "listed"));
	}

	/*
	An epoch timestamp when the tip was created
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	Get the likes for this tip
	*/

	public function getLikes() {
		return new Foursquare_Likes_output(Temboo_Results::getSubItemByKey($this->base, "likes"));
	}
}



/*
 Contains tips from others and friends
  
*/

class Foursquare_TipGroup_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get tips for the venue
	*/

	public function getTips() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Tip_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	The type of tip
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	The name of the tip group
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}
}



/*
 Contains the total count of tips for this user

*/

class Foursquare_TipsCount_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}
}



/*
 An object containing the count of ToDos for this tip

*/

class Foursquare_Todo_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get the groups of people that want to do this tip
	*/

	public function getPeopleGroup() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_PeopleGroup_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}
}



/*
 Contains categories of todos associated with the venue
    
*/

class Foursquare_TodoCategory_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The short name of the todo category
	*/

	public function getShortName() {
		return Temboo_Results::getSubItemByKey($this->base, "shortName");
	}

	/*
	The icon for the todo category
	*/

	public function getIcon() {
		return Temboo_Results::getSubItemByKey($this->base, "icon");
	}

	/*
	The id of the todo category
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The name of the todo category
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	The plural name of the todo category
	*/

	public function getPluralName() {
		return Temboo_Results::getSubItemByKey($this->base, "pluralName");
	}
}



/*
 Contains information about a todo list for the venue
  
*/

class Foursquare_Todos_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The count of todos marked done
	*/

	public function getDoneCount() {
		return Temboo_Results::getSubItemByKey($this->base, "doneCount");
	}

	/*
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	public function getTodoCategories() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey(Temboo_Results::getSubArrayByKey($this->base, "categories"), "items"), "category");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_TodoCategory_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Whether or not other users have edited this todo
	*/

	public function getCollaborative() {
		return Temboo_Results::getSubItemByKey($this->base, "collaborative");
	}

	/*
	The type of todo
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	Whether or not this todo is public
	*/

	public function getPublic() {
		return Temboo_Results::getSubItemByKey($this->base, "public");
	}

	/*
	The venue count for the todo
	*/

	public function getVenueCount() {
		return Temboo_Results::getSubItemByKey($this->base, "venueCount");
	}

	/*
	Get collaborators for the todo item
	*/

	public function getCollaborators() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "collaborators"), "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Collaborator_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The count of visits
	*/

	public function getVisitedCount() {
		return Temboo_Results::getSubItemByKey($this->base, "visitedCount");
	}

	/*
	The name of the todo item
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	A description of the todo
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	Whether or not the acting user is following the list
	*/

	public function getFollowing() {
		return Temboo_Results::getSubItemByKey($this->base, "following");
	}

	/*
	The url of the todo
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The user that created the todo for this venue
	*/

	public function getUser() {
		return new Foursquare_User_output(Temboo_Results::getSubItemByKey($this->base, "user"));
	}

	/*
	Whether or not this todo is editable
	*/

	public function getEditable() {
		return Temboo_Results::getSubItemByKey($this->base, "editable");
	}

	/*
	The canonical url for the todo
	*/

	public function getCanonicalUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "canonicalUrl");
	}

	/*
	Get the number of followers for this to do
	*/

	public function getFollowers() {
		return new Foursquare_Followers_output(Temboo_Results::getSubItemByKey($this->base, "followers"));
	}
}



/*
 A user object

*/

class Foursquare_User_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getGender() {
		return Temboo_Results::getSubItemByKey($this->base, "gender");
	}

	/*
	*/

	public function getPhoto() {
		return Temboo_Results::getSubItemByKey($this->base, "photo");
	}

	/*
	Contains the total count of tips and groups with friends and others
	*/

	public function getTipsCount() {
		return new Foursquare_TipsCount_output(Temboo_Results::getSubItemByKey($this->base, "tips"));
	}

	/*
	*/

	public function getLastName() {
		return Temboo_Results::getSubItemByKey($this->base, "lastName");
	}

	/*
	*/

	public function getFirstName() {
		return Temboo_Results::getSubItemByKey($this->base, "firstName");
	}

	/*
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	public function getListGroup() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "lists"), "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_ListGroup_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The bio of the user
	*/

	public function getBio() {
		return Temboo_Results::getSubItemByKey($this->base, "bio");
	}

	/*
	*/

	public function getHomeCity() {
		return Temboo_Results::getSubItemByKey($this->base, "homeCity");
	}

	/*
	An object containing twitter, phone, and formattedPhone of the user
	*/

	public function getContact() {
		return new Foursquare_Contact_output(Temboo_Results::getSubItemByKey($this->base, "contact"));
	}
}



/*
 An containing information about foursquare venue

*/

class Foursquare_Venue_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Contains tags for this venue
	*/

	public function getTags() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "tags");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}

	/*
	Contain information about photos for this venue
	*/

	public function getPhotoGroups() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "photos"), "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_PhotoGroup_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Get price information for this venue
	*/

	public function getPrice() {
		return new Foursquare_Price_output(Temboo_Results::getSubItemByKey($this->base, "price"));
	}

	/*
	Contains information about specials offered by the venue
	*/

	public function getSpecials() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "specials");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Special_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	*/

	public function getCanonicalUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "canonicalUrl");
	}

	/*
	Contains information about who is here now
	*/

	public function getHereNow() {
		return new Foursquare_HereNow_output(Temboo_Results::getSubItemByKey($this->base, "hereNow"));
	}

	/*
	The name of the venue
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	Whether or not a menu is available for this venue
	*/

	public function getHasMenu() {
		return Temboo_Results::getSubItemByKey($this->base, "hasMenu");
	}

	/*
	The venue rating
	*/

	public function getRating() {
		return Temboo_Results::getSubItemByKey($this->base, "rating");
	}

	/*
	The url for this venue
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	The count of users who have liked this object, and groups containing any friends and others who have liked it
	*/

	public function getLikes() {
		return new Foursquare_Likes_output(Temboo_Results::getSubItemByKey($this->base, "likes"));
	}

	/*
	Get the count of page updates
	*/

	public function getPageUpdates() {
		return new Foursquare_PageUpdates_output(Temboo_Results::getSubItemByKey($this->base, "pageUpdates"));
	}

	/*
	The short url for the venue
	*/

	public function getShortUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "shortUrl");
	}

	/*
	An object containing the location information for the venue
	*/

	public function getLocation() {
		return new Foursquare_Location_output(Temboo_Results::getSubItemByKey($this->base, "location"));
	}

	/*
	A grouped response of lists that contain this venue
	*/

	public function getListed() {
		return new Foursquare_Listed_output(Temboo_Results::getSubItemByKey($this->base, "listed"));
	}

	/*
	The id of the venue
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	public function getTodos() {
		return new Foursquare_Todos_output(Temboo_Results::getSubItemByKey($this->base, "todos"));
	}

	/*
	Get the hours that the venue is open
	*/

	public function getHours() {
		return new Foursquare_Hours_output(Temboo_Results::getSubItemByKey($this->base, "hours"));
	}

	/*
	Contains count of the number of times the acting user has been here. Absent if there is no acting user
	*/

	public function getBeenHere() {
		return new Foursquare_BeenHere_output(Temboo_Results::getSubItemByKey($this->base, "beenHere"));
	}

	/*
	An object containing url and mobileUrl that display the menu information for this venue
	*/

	public function getMenu() {
		return new Foursquare_Menu_output(Temboo_Results::getSubItemByKey($this->base, "menu"));
	}

	/*
	Whether or not the venue has been verified
	*/

	public function getVerified() {
		return Temboo_Results::getSubItemByKey($this->base, "verified");
	}

	/*
	An object containing information about the mayor of the venue
	*/

	public function getMayor() {
		return new Foursquare_Mayor_output(Temboo_Results::getSubItemByKey($this->base, "mayor"));
	}

	/*
	The date the venue was created in epoch format
	*/

	public function getCreatedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "createdAt");
	}

	/*
	An object containing twitter, phone, and formattedPhone of the user or venue contact. All can be present, and all can be absent from the response.
	*/

	public function getContact() {
		return new Foursquare_Contact_output(Temboo_Results::getSubItemByKey($this->base, "contact"));
	}

	/*
	Contains statistics for the venue including checkinsCount, tipCount, and userCount
	*/

	public function getStats() {
		return new Foursquare_Stats_output(Temboo_Results::getSubItemByKey($this->base, "stats"));
	}

	/*
	The timezone for this venue
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}

	/*
	Get tips from others and friends
	*/

	public function getTipGroups() {
		$listEntries = Temboo_Results::getSubItemByKey(Temboo_Results::getSubArrayByKey($this->base, "tips"), "groups");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_TipGroup_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Categories that have been applied to this venue
	*/

	public function getCategories() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "categories");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Foursquare_Category_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 Contains an object with a text field that contains a warning message
    
*/

class Foursquare_Warning_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The warning message
	*/

	public function getText() {
		return Temboo_Results::getSubItemByKey($this->base, "text");
	}
}




?>
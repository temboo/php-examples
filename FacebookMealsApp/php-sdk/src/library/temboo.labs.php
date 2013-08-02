<?php

/**
 * Temboo PHP SDK Labs classes
 *
 * Execute Choreographies from the Temboo Labs bundle.
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
 * @subpackage Labs
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves information from multiple APIs about places near a set of coordinates retrieved from Google Latitude.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByGoogleLat extends Temboo_Choreography
{
    /**
     * Retrieves information from multiple APIs about places near a set of coordinates retrieved from Google Latitude.
     *
     * @param Temboo_Session $session The session that owns this ByGoogleLat Choreo.
     * @return Labs_GetPlaces_ByGoogleLat New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GetPlaces/ByGoogleLat/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByGoogleLat Choreo.
     *
     * @param Labs_GetPlaces_ByGoogleLat_Inputs|array $inputs (optional) Inputs as Labs_GetPlaces_ByGoogleLat_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetPlaces_ByGoogleLat_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GetPlaces_ByGoogleLat_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByGoogleLat Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetPlaces_ByGoogleLat_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GetPlaces_ByGoogleLat_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByGoogleLat Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByGoogleLat_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByGoogleLat Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetPlaces_ByGoogleLat_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByGoogleLat input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GetPlaces_ByGoogleLat_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GetPlaces_ByGoogleLat_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this ByGoogleLat Choreo.
     *
     * @param string $value (required, json) A JSON dictionary of credentials for the APIs you wish to access. See Choreo documentation for formatting examples.
     * @return Labs_GetPlaces_ByGoogleLat_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Limit input for this ByGoogleLat Choreo.
     *
     * @param int $value (optional, integer) Limits the number of Foursquare venues returned.
     * @return Labs_GetPlaces_ByGoogleLat_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Query input for this ByGoogleLat Choreo.
     *
     * @param string $value (optional, string) This keyword input can be used to narrow search results for Google Places and Foursquare.
     * @return Labs_GetPlaces_ByGoogleLat_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ByGoogleLat Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are json (the default) and xml.
     * @return Labs_GetPlaces_ByGoogleLat_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Type input for this ByGoogleLat Choreo.
     *
     * @param string $value (optional, string) Filters results by type of place, such as: bar, dentist, etc. This is used to filter results for Google Places and Yelp.
     * @return Labs_GetPlaces_ByGoogleLat_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the ByGoogleLat Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByGoogleLat_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByGoogleLat Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByGoogleLat execution.
     * @param Labs_GetPlaces_ByGoogleLat $choreo The choreography object for this execution.
     * @param Labs_GetPlaces_ByGoogleLat_Inputs|array $inputs (optional) Inputs as Labs_GetPlaces_ByGoogleLat_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetPlaces_ByGoogleLat_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GetPlaces_ByGoogleLat $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByGoogleLat execution.
     *
     * @return Labs_GetPlaces_ByGoogleLat_Results New results object.
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
     * Wraps results in appropriate results class for this ByGoogleLat execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GetPlaces_ByGoogleLat_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GetPlaces_ByGoogleLat_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByGoogleLat Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByGoogleLat_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByGoogleLat Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GetPlaces_ByGoogleLat_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByGoogleLat execution.
     *
     * @return string Contains the merged results from the API responses.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about places near a set of coordinates from multiple sources in one API call.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByCoordinates extends Temboo_Choreography
{
    /**
     * Retrieves information about places near a set of coordinates from multiple sources in one API call.
     *
     * @param Temboo_Session $session The session that owns this ByCoordinates Choreo.
     * @return Labs_GetPlaces_ByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GetPlaces/ByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByCoordinates Choreo.
     *
     * @param Labs_GetPlaces_ByCoordinates_Inputs|array $inputs (optional) Inputs as Labs_GetPlaces_ByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetPlaces_ByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GetPlaces_ByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetPlaces_ByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GetPlaces_ByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetPlaces_ByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GetPlaces_ByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GetPlaces_ByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this ByCoordinates Choreo.
     *
     * @param string $value (required, json) A JSON dictionary of credentials for the APIs you wish to access. See Choreo documentation for formatting examples.
     * @return Labs_GetPlaces_ByCoordinates_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Latitude input for this ByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitude of the user's location.
     * @return Labs_GetPlaces_ByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this ByCoordinates Choreo.
     *
     * @param int $value (optional, integer) Limits the number of Foursquare venue results.
     * @return Labs_GetPlaces_ByCoordinates_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this ByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude of the user's location.
     * @return Labs_GetPlaces_ByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Query input for this ByCoordinates Choreo.
     *
     * @param string $value (optional, string) This keyword input can be used to narrow search results for Google Places and Foursquare.
     * @return Labs_GetPlaces_ByCoordinates_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ByCoordinates Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are json (the default) and xml.
     * @return Labs_GetPlaces_ByCoordinates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Type input for this ByCoordinates Choreo.
     *
     * @param string $value (optional, string) Filters results by type of place, such as: bar, dentist, etc. This is used to filter results for Google Places and Yelp.
     * @return Labs_GetPlaces_ByCoordinates_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the ByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByCoordinates execution.
     * @param Labs_GetPlaces_ByCoordinates $choreo The choreography object for this execution.
     * @param Labs_GetPlaces_ByCoordinates_Inputs|array $inputs (optional) Inputs as Labs_GetPlaces_ByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetPlaces_ByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GetPlaces_ByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByCoordinates execution.
     *
     * @return Labs_GetPlaces_ByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this ByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GetPlaces_ByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GetPlaces_ByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GetPlaces_ByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByCoordinates execution.
     *
     * @return string Contains the merged results from the API responses.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches Foursquare recent check-ins and the Facebook social graph with a given set of Geo coordinates
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_GetNearbyContacts extends Temboo_Choreography
{
    /**
     * Searches Foursquare recent check-ins and the Facebook social graph with a given set of Geo coordinates
     *
     * @param Temboo_Session $session The session that owns this GetNearbyContacts Choreo.
     * @return Labs_Social_GetNearbyContacts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/Social/GetNearbyContacts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetNearbyContacts Choreo.
     *
     * @param Labs_Social_GetNearbyContacts_Inputs|array $inputs (optional) Inputs as Labs_Social_GetNearbyContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_Social_GetNearbyContacts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_Social_GetNearbyContacts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNearbyContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_Social_GetNearbyContacts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_Social_GetNearbyContacts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNearbyContacts Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_GetNearbyContacts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetNearbyContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_Social_GetNearbyContacts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNearbyContacts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_Social_GetNearbyContacts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_Social_GetNearbyContacts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this GetNearbyContacts Choreo.
     *
     * @param string $value (required, json) A JSON dictionary containing Facebook and Foursquare credentials.
     * @return Labs_Social_GetNearbyContacts_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the AfterTimestamp input for this GetNearbyContacts Choreo.
     *
     * @param string $value (optional, date) Seconds after which to look for checkins, e.g. for looking for new checkins since the last fetch.
     * @return Labs_Social_GetNearbyContacts_Inputs For method chaining.
     */
    public function setAfterTimestamp($value)
    {
        return $this->set('AfterTimestamp', $value);
    }

    /**
     * Set the value for the Latitude input for this GetNearbyContacts Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate of the location to search for.
     * @return Labs_Social_GetNearbyContacts_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this GetNearbyContacts Choreo.
     *
     * @param int $value (optional, integer) Used to page through results. Limits the number of records returned in the API responses.
     * @return Labs_Social_GetNearbyContacts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this GetNearbyContacts Choreo.
     *
     * @param float $value (conditional, decimal) The longitude coordinate of the location to search for.
     * @return Labs_Social_GetNearbyContacts_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Offset input for this GetNearbyContacts Choreo.
     *
     * @param int $value (optional, integer) Used to page through Facebook results. Returns results starting from the specified number.
     * @return Labs_Social_GetNearbyContacts_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the GetNearbyContacts Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_GetNearbyContacts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNearbyContacts Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetNearbyContacts execution.
     * @param Labs_Social_GetNearbyContacts $choreo The choreography object for this execution.
     * @param Labs_Social_GetNearbyContacts_Inputs|array $inputs (optional) Inputs as Labs_Social_GetNearbyContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_Social_GetNearbyContacts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_Social_GetNearbyContacts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNearbyContacts execution.
     *
     * @return Labs_Social_GetNearbyContacts_Results New results object.
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
     * Wraps results in appropriate results class for this GetNearbyContacts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_Social_GetNearbyContacts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_Social_GetNearbyContacts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetNearbyContacts Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_GetNearbyContacts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetNearbyContacts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_Social_GetNearbyContacts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetNearbyContacts execution.
     *
     * @return string (json) A merged result of Foursquare and Facebook location based searches.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information from multiple APIs about places near a specified street address.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByAddress extends Temboo_Choreography
{
    /**
     * Retrieves information from multiple APIs about places near a specified street address.
     *
     * @param Temboo_Session $session The session that owns this ByAddress Choreo.
     * @return Labs_GetPlaces_ByAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GetPlaces/ByAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByAddress Choreo.
     *
     * @param Labs_GetPlaces_ByAddress_Inputs|array $inputs (optional) Inputs as Labs_GetPlaces_ByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetPlaces_ByAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GetPlaces_ByAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetPlaces_ByAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GetPlaces_ByAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetPlaces_ByAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GetPlaces_ByAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GetPlaces_ByAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this ByAddress Choreo.
     *
     * @param string $value (conditional, json) 
     * @return Labs_GetPlaces_ByAddress_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Address input for this ByAddress Choreo.
     *
     * @param string $value (required, string) The street address to use in the search. This can be a single address, or an array of addresses. See documentation for formatting examples.
     * @return Labs_GetPlaces_ByAddress_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the Limit input for this ByAddress Choreo.
     *
     * @param int $value (optional, integer) Limits the number of Foursquare venues results.
     * @return Labs_GetPlaces_ByAddress_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Query input for this ByAddress Choreo.
     *
     * @param string $value (optional, string) This keyword input can be used to narrow search results for Google Places and Foursquare.
     * @return Labs_GetPlaces_ByAddress_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ByAddress Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are json (the default) and xml.
     * @return Labs_GetPlaces_ByAddress_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Type input for this ByAddress Choreo.
     *
     * @param string $value (optional, string) Filters results by type of place, such as: bar, dentist, etc. This is used to filter results for Google Places and Yelp.
     * @return Labs_GetPlaces_ByAddress_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the ByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByAddress execution.
     * @param Labs_GetPlaces_ByAddress $choreo The choreography object for this execution.
     * @param Labs_GetPlaces_ByAddress_Inputs|array $inputs (optional) Inputs as Labs_GetPlaces_ByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetPlaces_ByAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GetPlaces_ByAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByAddress execution.
     *
     * @return Labs_GetPlaces_ByAddress_Results New results object.
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
     * Wraps results in appropriate results class for this ByAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GetPlaces_ByAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GetPlaces_ByAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GetPlaces_ByAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByAddress execution.
     *
     * @return string Contains the merged results for search.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a host of information about the district and representatives of a specified location.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_Civic extends Temboo_Choreography
{
    /**
     * Retrieves a host of information about the district and representatives of a specified location.
     *
     * @param Temboo_Session $session The session that owns this Civic Choreo.
     * @return Labs_GoodCitizen_Civic New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GoodCitizen/Civic/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Civic Choreo.
     *
     * @param Labs_GoodCitizen_Civic_Inputs|array $inputs (optional) Inputs as Labs_GoodCitizen_Civic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GoodCitizen_Civic_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GoodCitizen_Civic_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Civic Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GoodCitizen_Civic_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GoodCitizen_Civic_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Civic Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_Civic_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Civic Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GoodCitizen_Civic_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Civic input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GoodCitizen_Civic_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GoodCitizen_Civic_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this Civic Choreo.
     *
     * @param string $value (optional, json) The JSON dictionary for the Sulight Labs credentials required to operate this choreo. LittleSis credentials are optional. See docs for the format of this input.
     * @return Labs_GoodCitizen_Civic_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Latitude input for this Civic Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate of your location.
     * @return Labs_GoodCitizen_Civic_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this Civic Choreo.
     *
     * @param int $value (optional, integer) Set the number of records to return for the bills, votes, and relationships of each legislator. Defaults to 5.
     * @return Labs_GoodCitizen_Civic_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this Civic Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate of your locaion.
     * @return Labs_GoodCitizen_Civic_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }
}


/**
 * Execution object for the Civic Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_Civic_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Civic Choreo.
     *
     * @param Temboo_Session $session The session that owns this Civic execution.
     * @param Labs_GoodCitizen_Civic $choreo The choreography object for this execution.
     * @param Labs_GoodCitizen_Civic_Inputs|array $inputs (optional) Inputs as Labs_GoodCitizen_Civic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GoodCitizen_Civic_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GoodCitizen_Civic $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Civic execution.
     *
     * @return Labs_GoodCitizen_Civic_Results New results object.
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
     * Wraps results in appropriate results class for this Civic execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GoodCitizen_Civic_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GoodCitizen_Civic_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Civic Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_Civic_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Civic Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GoodCitizen_Civic_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Civic execution.
     *
     * @return string (string) The response from the Civic Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a host of eco-conscious environmental information for a specified location based on zip code.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_EcoByZip extends Temboo_Choreography
{
    /**
     * Returns a host of eco-conscious environmental information for a specified location based on zip code.
     *
     * @param Temboo_Session $session The session that owns this EcoByZip Choreo.
     * @return Labs_GoodCitizen_EcoByZip New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GoodCitizen/EcoByZip/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EcoByZip Choreo.
     *
     * @param Labs_GoodCitizen_EcoByZip_Inputs|array $inputs (optional) Inputs as Labs_GoodCitizen_EcoByZip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GoodCitizen_EcoByZip_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GoodCitizen_EcoByZip_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EcoByZip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GoodCitizen_EcoByZip_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GoodCitizen_EcoByZip_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EcoByZip Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_EcoByZip_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EcoByZip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GoodCitizen_EcoByZip_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EcoByZip input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GoodCitizen_EcoByZip_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GoodCitizen_EcoByZip_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this EcoByZip Choreo.
     *
     * @param string $value (optional, string) A JSON dictionary containing credentials for Genability. See Choreo documentation for formatting examples.
     * @return Labs_GoodCitizen_EcoByZip_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Limit input for this EcoByZip Choreo.
     *
     * @param int $value (optional, integer) The number of facility records to search for in the Envirofacts database.
     * @return Labs_GoodCitizen_EcoByZip_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Zip input for this EcoByZip Choreo.
     *
     * @param int $value (required, integer) The zip code for the user's current location.
     * @return Labs_GoodCitizen_EcoByZip_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the EcoByZip Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_EcoByZip_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EcoByZip Choreo.
     *
     * @param Temboo_Session $session The session that owns this EcoByZip execution.
     * @param Labs_GoodCitizen_EcoByZip $choreo The choreography object for this execution.
     * @param Labs_GoodCitizen_EcoByZip_Inputs|array $inputs (optional) Inputs as Labs_GoodCitizen_EcoByZip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GoodCitizen_EcoByZip_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GoodCitizen_EcoByZip $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EcoByZip execution.
     *
     * @return Labs_GoodCitizen_EcoByZip_Results New results object.
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
     * Wraps results in appropriate results class for this EcoByZip execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GoodCitizen_EcoByZip_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GoodCitizen_EcoByZip_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EcoByZip Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_EcoByZip_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EcoByZip Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GoodCitizen_EcoByZip_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EcoByZip execution.
     *
     * @return string (json) The response from the Eco Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves weather and UV index data based on coordinates returned from a Foursquare recent check-in.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByFoursquare extends Temboo_Choreography
{
    /**
     * Retrieves weather and UV index data based on coordinates returned from a Foursquare recent check-in.
     *
     * @param Temboo_Session $session The session that owns this ByFoursquare Choreo.
     * @return Labs_GetWeather_ByFoursquare New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GetWeather/ByFoursquare/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByFoursquare Choreo.
     *
     * @param Labs_GetWeather_ByFoursquare_Inputs|array $inputs (optional) Inputs as Labs_GetWeather_ByFoursquare_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetWeather_ByFoursquare_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GetWeather_ByFoursquare_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByFoursquare Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetWeather_ByFoursquare_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GetWeather_ByFoursquare_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByFoursquare Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByFoursquare_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByFoursquare Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetWeather_ByFoursquare_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByFoursquare input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GetWeather_ByFoursquare_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GetWeather_ByFoursquare_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this ByFoursquare Choreo.
     *
     * @param string $value (required, json) A JSON dictionary containing your Foursquare and Yahoo credentials. See Choreo documentation for formatting examples.
     * @return Labs_GetWeather_ByFoursquare_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Shout input for this ByFoursquare Choreo.
     *
     * @param string $value (optional, string) A message about your check-in. The maximum length of this field is 140 characters.
     * @return Labs_GetWeather_ByFoursquare_Inputs For method chaining.
     */
    public function setShout($value)
    {
        return $this->set('Shout', $value);
    }

    /**
     * Set the value for the VenueID input for this ByFoursquare Choreo.
     *
     * @param string $value (optional, string) The venue where the user is checking in. Required if creating a Foursquare checkin.
     * @return Labs_GetWeather_ByFoursquare_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the ByFoursquare Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByFoursquare_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByFoursquare Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByFoursquare execution.
     * @param Labs_GetWeather_ByFoursquare $choreo The choreography object for this execution.
     * @param Labs_GetWeather_ByFoursquare_Inputs|array $inputs (optional) Inputs as Labs_GetWeather_ByFoursquare_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetWeather_ByFoursquare_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GetWeather_ByFoursquare $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByFoursquare execution.
     *
     * @return Labs_GetWeather_ByFoursquare_Results New results object.
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
     * Wraps results in appropriate results class for this ByFoursquare execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GetWeather_ByFoursquare_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GetWeather_ByFoursquare_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByFoursquare Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByFoursquare_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByFoursquare Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GetWeather_ByFoursquare_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByFoursquare execution.
     *
     * @return string (json) Contains weather information based on the coordinates returned from the Foursquare checkin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information from multiple APIs about places near a set of coordinates retrieved from Foursquare.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByFoursquare extends Temboo_Choreography
{
    /**
     * Retrieves information from multiple APIs about places near a set of coordinates retrieved from Foursquare.
     *
     * @param Temboo_Session $session The session that owns this ByFoursquare Choreo.
     * @return Labs_GetPlaces_ByFoursquare New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GetPlaces/ByFoursquare/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByFoursquare Choreo.
     *
     * @param Labs_GetPlaces_ByFoursquare_Inputs|array $inputs (optional) Inputs as Labs_GetPlaces_ByFoursquare_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetPlaces_ByFoursquare_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GetPlaces_ByFoursquare_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByFoursquare Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetPlaces_ByFoursquare_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GetPlaces_ByFoursquare_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByFoursquare Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByFoursquare_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByFoursquare Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetPlaces_ByFoursquare_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByFoursquare input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GetPlaces_ByFoursquare_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GetPlaces_ByFoursquare_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this ByFoursquare Choreo.
     *
     * @param string $value (required, json) A JSON dictionary of credentials for the APIs you wish to access. See Choreo documentation for formatting examples.
     * @return Labs_GetPlaces_ByFoursquare_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Limit input for this ByFoursquare Choreo.
     *
     * @param int $value (optional, integer) Limits the number of Foursquare venues returned.
     * @return Labs_GetPlaces_ByFoursquare_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Query input for this ByFoursquare Choreo.
     *
     * @param string $value (optional, string) This keyword input can be used to narrow search results for Google Places and Foursquare.
     * @return Labs_GetPlaces_ByFoursquare_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ByFoursquare Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are json (the default) and xml.
     * @return Labs_GetPlaces_ByFoursquare_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Shout input for this ByFoursquare Choreo.
     *
     * @param string $value (optional, string) A message about your check-in. The maximum length of this field is 140 characters.
     * @return Labs_GetPlaces_ByFoursquare_Inputs For method chaining.
     */
    public function setShout($value)
    {
        return $this->set('Shout', $value);
    }

    /**
     * Set the value for the Type input for this ByFoursquare Choreo.
     *
     * @param string $value (optional, string) Filters results by type of place, such as: bar, dentist, etc. This is used to filter results for Google Places and Yelp.
     * @return Labs_GetPlaces_ByFoursquare_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the VenueID input for this ByFoursquare Choreo.
     *
     * @param string $value (optional, string) The venue where the user is checking in. Required if creating a Foursquare checkin.
     * @return Labs_GetPlaces_ByFoursquare_Inputs For method chaining.
     */
    public function setVenueID($value)
    {
        return $this->set('VenueID', $value);
    }
}


/**
 * Execution object for the ByFoursquare Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByFoursquare_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByFoursquare Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByFoursquare execution.
     * @param Labs_GetPlaces_ByFoursquare $choreo The choreography object for this execution.
     * @param Labs_GetPlaces_ByFoursquare_Inputs|array $inputs (optional) Inputs as Labs_GetPlaces_ByFoursquare_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetPlaces_ByFoursquare_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GetPlaces_ByFoursquare $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByFoursquare execution.
     *
     * @return Labs_GetPlaces_ByFoursquare_Results New results object.
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
     * Wraps results in appropriate results class for this ByFoursquare execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GetPlaces_ByFoursquare_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GetPlaces_ByFoursquare_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByFoursquare Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetPlaces_ByFoursquare_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByFoursquare Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GetPlaces_ByFoursquare_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByFoursquare execution.
     *
     * @return string (json) Contains weather information based on the coordinates returned from the Foursquare checkin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves your social contacts from multiple APIs in one API call.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_GetContacts extends Temboo_Choreography
{
    /**
     * Retrieves your social contacts from multiple APIs in one API call.
     *
     * @param Temboo_Session $session The session that owns this GetContacts Choreo.
     * @return Labs_Social_GetContacts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/Social/GetContacts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetContacts Choreo.
     *
     * @param Labs_Social_GetContacts_Inputs|array $inputs (optional) Inputs as Labs_Social_GetContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_Social_GetContacts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_Social_GetContacts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_Social_GetContacts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_Social_GetContacts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetContacts Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_GetContacts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_Social_GetContacts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetContacts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_Social_GetContacts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_Social_GetContacts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this GetContacts Choreo.
     *
     * @param string $value (conditional, json) A list of credentials for the APIs you wish to access. See Choreo documentation for formatting examples.
     * @return Labs_Social_GetContacts_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the ScreenName input for this GetContacts Choreo.
     *
     * @param string $value (conditional, string) The Twitter screen name to retrieve followers for.
     * @return Labs_Social_GetContacts_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }
}


/**
 * Execution object for the GetContacts Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_GetContacts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetContacts Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetContacts execution.
     * @param Labs_Social_GetContacts $choreo The choreography object for this execution.
     * @param Labs_Social_GetContacts_Inputs|array $inputs (optional) Inputs as Labs_Social_GetContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_Social_GetContacts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_Social_GetContacts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetContacts execution.
     *
     * @return Labs_Social_GetContacts_Results New results object.
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
     * Wraps results in appropriate results class for this GetContacts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_Social_GetContacts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_Social_GetContacts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetContacts Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_GetContacts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetContacts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_Social_GetContacts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetContacts execution.
     *
     * @return string (json) Contains the merged results from the API responses.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves weather and UV index data for a given Geo point using the Yahoo Weather and EnviroFacts APIs.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByAddress extends Temboo_Choreography
{
    /**
     * Retrieves weather and UV index data for a given Geo point using the Yahoo Weather and EnviroFacts APIs.
     *
     * @param Temboo_Session $session The session that owns this ByAddress Choreo.
     * @return Labs_GetWeather_ByAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GetWeather/ByAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByAddress Choreo.
     *
     * @param Labs_GetWeather_ByAddress_Inputs|array $inputs (optional) Inputs as Labs_GetWeather_ByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetWeather_ByAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GetWeather_ByAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetWeather_ByAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GetWeather_ByAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetWeather_ByAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GetWeather_ByAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GetWeather_ByAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this ByAddress Choreo.
     *
     * @param string $value (optional, json) A JSON dictionary containing a Yahoo App ID. See Choreo documentation for formatting examples.
     * @return Labs_GetWeather_ByAddress_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Address input for this ByAddress Choreo.
     *
     * @param string $value (required, string) The street address of the location to get weather for.
     * @return Labs_GetWeather_ByAddress_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }
}


/**
 * Execution object for the ByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByAddress execution.
     * @param Labs_GetWeather_ByAddress $choreo The choreography object for this execution.
     * @param Labs_GetWeather_ByAddress_Inputs|array $inputs (optional) Inputs as Labs_GetWeather_ByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetWeather_ByAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GetWeather_ByAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByAddress execution.
     *
     * @return Labs_GetWeather_ByAddress_Results New results object.
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
     * Wraps results in appropriate results class for this ByAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GetWeather_ByAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GetWeather_ByAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GetWeather_ByAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByAddress execution.
     *
     * @return string (json) Contains combined weather data from Yahoo Weather and EnviroFacts.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Shares a post across multiple social networks such as Facebook, Tumblr, and Twitter.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_UpdateAllStatuses extends Temboo_Choreography
{
    /**
     * Shares a post across multiple social networks such as Facebook, Tumblr, and Twitter.
     *
     * @param Temboo_Session $session The session that owns this UpdateAllStatuses Choreo.
     * @return Labs_Social_UpdateAllStatuses New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/Social/UpdateAllStatuses/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateAllStatuses Choreo.
     *
     * @param Labs_Social_UpdateAllStatuses_Inputs|array $inputs (optional) Inputs as Labs_Social_UpdateAllStatuses_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_Social_UpdateAllStatuses_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_Social_UpdateAllStatuses_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateAllStatuses Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_Social_UpdateAllStatuses_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_Social_UpdateAllStatuses_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateAllStatuses Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_UpdateAllStatuses_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateAllStatuses Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_Social_UpdateAllStatuses_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateAllStatuses input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_Social_UpdateAllStatuses_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_Social_UpdateAllStatuses_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this UpdateAllStatuses Choreo.
     *
     * @param string $value (required, json) A list of credentials for the APIs you wish to access. See Choreo documentation for formatting examples.
     * @return Labs_Social_UpdateAllStatuses_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Message input for this UpdateAllStatuses Choreo.
     *
     * @param string $value (required, string) The message to be posted across social networks.
     * @return Labs_Social_UpdateAllStatuses_Inputs For method chaining.
     */
    public function setMessage($value)
    {
        return $this->set('Message', $value);
    }
}


/**
 * Execution object for the UpdateAllStatuses Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_UpdateAllStatuses_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateAllStatuses Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateAllStatuses execution.
     * @param Labs_Social_UpdateAllStatuses $choreo The choreography object for this execution.
     * @param Labs_Social_UpdateAllStatuses_Inputs|array $inputs (optional) Inputs as Labs_Social_UpdateAllStatuses_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_Social_UpdateAllStatuses_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_Social_UpdateAllStatuses $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateAllStatuses execution.
     *
     * @return Labs_Social_UpdateAllStatuses_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateAllStatuses execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_Social_UpdateAllStatuses_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_Social_UpdateAllStatuses_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateAllStatuses Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_Social_UpdateAllStatuses_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateAllStatuses Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_Social_UpdateAllStatuses_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateAllStatuses execution.
     *
     * @return string (json) A list of results for each API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves weather and UV index data for a given Geo point using the Yahoo Weather and EnviroFacts APIs.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByCoordinates extends Temboo_Choreography
{
    /**
     * Retrieves weather and UV index data for a given Geo point using the Yahoo Weather and EnviroFacts APIs.
     *
     * @param Temboo_Session $session The session that owns this ByCoordinates Choreo.
     * @return Labs_GetWeather_ByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GetWeather/ByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByCoordinates Choreo.
     *
     * @param Labs_GetWeather_ByCoordinates_Inputs|array $inputs (optional) Inputs as Labs_GetWeather_ByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetWeather_ByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GetWeather_ByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetWeather_ByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GetWeather_ByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetWeather_ByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GetWeather_ByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GetWeather_ByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this ByCoordinates Choreo.
     *
     * @param string $value (optional, json) A JSON dictionary containing a Yahoo App ID. See Choreo documentation for formatting examples.
     * @return Labs_GetWeather_ByCoordinates_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Latitude input for this ByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate to use when looking up weather information.
     * @return Labs_GetWeather_ByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this ByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate to use when looking up weather information.
     * @return Labs_GetWeather_ByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }
}


/**
 * Execution object for the ByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByCoordinates execution.
     * @param Labs_GetWeather_ByCoordinates $choreo The choreography object for this execution.
     * @param Labs_GetWeather_ByCoordinates_Inputs|array $inputs (optional) Inputs as Labs_GetWeather_ByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetWeather_ByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GetWeather_ByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByCoordinates execution.
     *
     * @return Labs_GetWeather_ByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this ByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GetWeather_ByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GetWeather_ByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GetWeather_ByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByCoordinates execution.
     *
     * @return string (json) Contains combined weather data from Yahoo Weather and EnviroFacts.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a host of eco-conscious environmental information for a specified location based on Lattitude and Longitude inputs.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_EcoByCoordinates extends Temboo_Choreography
{
    /**
     * Returns a host of eco-conscious environmental information for a specified location based on Lattitude and Longitude inputs.
     *
     * @param Temboo_Session $session The session that owns this EcoByCoordinates Choreo.
     * @return Labs_GoodCitizen_EcoByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GoodCitizen/EcoByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this EcoByCoordinates Choreo.
     *
     * @param Labs_GoodCitizen_EcoByCoordinates_Inputs|array $inputs (optional) Inputs as Labs_GoodCitizen_EcoByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GoodCitizen_EcoByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GoodCitizen_EcoByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EcoByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GoodCitizen_EcoByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GoodCitizen_EcoByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EcoByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_EcoByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the EcoByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GoodCitizen_EcoByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EcoByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GoodCitizen_EcoByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GoodCitizen_EcoByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this EcoByCoordinates Choreo.
     *
     * @param string $value (optional, string) A JSON dictionary containing credentials for Genability. See Choreo documentation for formatting examples.
     * @return Labs_GoodCitizen_EcoByCoordinates_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }

    /**
     * Set the value for the Latitude input for this EcoByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate for the user's current location.
     * @return Labs_GoodCitizen_EcoByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this EcoByCoordinates Choreo.
     *
     * @param int $value (optional, integer) The number of facility records to search for in the Envirofacts database.
     * @return Labs_GoodCitizen_EcoByCoordinates_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this EcoByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate for the user's current location.
     * @return Labs_GoodCitizen_EcoByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }
}


/**
 * Execution object for the EcoByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_EcoByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EcoByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this EcoByCoordinates execution.
     * @param Labs_GoodCitizen_EcoByCoordinates $choreo The choreography object for this execution.
     * @param Labs_GoodCitizen_EcoByCoordinates_Inputs|array $inputs (optional) Inputs as Labs_GoodCitizen_EcoByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GoodCitizen_EcoByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GoodCitizen_EcoByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EcoByCoordinates execution.
     *
     * @return Labs_GoodCitizen_EcoByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this EcoByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GoodCitizen_EcoByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GoodCitizen_EcoByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the EcoByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GoodCitizen_EcoByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the EcoByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GoodCitizen_EcoByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this EcoByCoordinates execution.
     *
     * @return string (json) The response from the Eco Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves weather and UV index data based on coordinates returned from Google Latitude.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByGoogleLat extends Temboo_Choreography
{
    /**
     * Retrieves weather and UV index data based on coordinates returned from Google Latitude.
     *
     * @param Temboo_Session $session The session that owns this ByGoogleLat Choreo.
     * @return Labs_GetWeather_ByGoogleLat New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Labs/GetWeather/ByGoogleLat/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByGoogleLat Choreo.
     *
     * @param Labs_GetWeather_ByGoogleLat_Inputs|array $inputs (optional) Inputs as Labs_GetWeather_ByGoogleLat_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetWeather_ByGoogleLat_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Labs_GetWeather_ByGoogleLat_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByGoogleLat Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetWeather_ByGoogleLat_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Labs_GetWeather_ByGoogleLat_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByGoogleLat Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByGoogleLat_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByGoogleLat Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Labs_GetWeather_ByGoogleLat_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByGoogleLat input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Labs_GetWeather_ByGoogleLat_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Labs_GetWeather_ByGoogleLat_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APICredentials input for this ByGoogleLat Choreo.
     *
     * @param string $value (required, json) A JSON dictionary containing your Google Latitude and Yahoo credentials. See Choreo documentation for formatting examples.
     * @return Labs_GetWeather_ByGoogleLat_Inputs For method chaining.
     */
    public function setAPICredentials($value)
    {
        return $this->set('APICredentials', $value);
    }
}


/**
 * Execution object for the ByGoogleLat Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByGoogleLat_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByGoogleLat Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByGoogleLat execution.
     * @param Labs_GetWeather_ByGoogleLat $choreo The choreography object for this execution.
     * @param Labs_GetWeather_ByGoogleLat_Inputs|array $inputs (optional) Inputs as Labs_GetWeather_ByGoogleLat_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Labs_GetWeather_ByGoogleLat_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Labs_GetWeather_ByGoogleLat $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByGoogleLat execution.
     *
     * @return Labs_GetWeather_ByGoogleLat_Results New results object.
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
     * Wraps results in appropriate results class for this ByGoogleLat execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Labs_GetWeather_ByGoogleLat_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Labs_GetWeather_ByGoogleLat_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByGoogleLat Choreo.
 *
 * @package Temboo
 * @subpackage Labs
 */
class Labs_GetWeather_ByGoogleLat_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByGoogleLat Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Labs_GetWeather_ByGoogleLat_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByGoogleLat execution.
     *
     * @return string (json) Contains weather information based on the coordinates returned from Google Latitude.
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
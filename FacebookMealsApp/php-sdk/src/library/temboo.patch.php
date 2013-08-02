<?php

/**
 * Temboo PHP SDK Patch classes
 *
 * Execute Choreographies from the Temboo Patch bundle.
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
 * @subpackage Patch
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Return the most recent stories from a specified U.S. city.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByCity extends Temboo_Choreography
{
    /**
     * Return the most recent stories from a specified U.S. city.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByCity Choreo.
     * @return Patch_FindStoriesByCity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Patch/FindStoriesByCity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindStoriesByCity Choreo.
     *
     * @param Patch_FindStoriesByCity_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByCity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByCity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Patch_FindStoriesByCity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindStoriesByCity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByCity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Patch_FindStoriesByCity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindStoriesByCity Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByCity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindStoriesByCity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByCity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindStoriesByCity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindStoriesByCity Choreo.
     *
     * @param string $value (required, string) A valid API key provided by Patch.
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindStoriesByCity Choreo.
     *
     * @param string $value (required, string) The API shared secret provided by Patch.
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the City input for this FindStoriesByCity Choreo.
     *
     * @param string $value (required, string) The name of the city to return stories for.
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Keyword input for this FindStoriesByCity Choreo.
     *
     * @param string $value (optional, string) Specify one or more words or phrases to find in the story title, story summary, and topic tags of the stories to return.
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function setKeyword($value)
    {
        return $this->set('Keyword', $value);
    }

    /**
     * Set the value for the Limit input for this FindStoriesByCity Choreo.
     *
     * @param int $value (optional, integer) Specify how many stories to return, between 1 and 100. The default is 10.
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaximumAge input for this FindStoriesByCity Choreo.
     *
     * @param int $value (optional, integer) Specify the maximum age in days of the stories to return, between 1 and 30. The default is 10.
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function setMaximumAge($value)
    {
        return $this->set('MaximumAge', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindStoriesByCity Choreo.
     *
     * @param string $value (optional, string) Specify "xml" to convert the Patch JSON response to XML. The default is "json".
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this FindStoriesByCity Choreo.
     *
     * @param string $value (required, string) The U.S. state name or abbreviation corresponding to the city to return stories for.
     * @return Patch_FindStoriesByCity_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the FindStoriesByCity Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByCity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindStoriesByCity Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByCity execution.
     * @param Patch_FindStoriesByCity $choreo The choreography object for this execution.
     * @param Patch_FindStoriesByCity_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByCity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByCity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Patch_FindStoriesByCity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindStoriesByCity execution.
     *
     * @return Patch_FindStoriesByCity_Results New results object.
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
     * Wraps results in appropriate results class for this FindStoriesByCity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Patch_FindStoriesByCity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Patch_FindStoriesByCity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindStoriesByCity Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByCity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindStoriesByCity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Patch_FindStoriesByCity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindStoriesByCity execution.
     *
     * @return string (json) The response returned from Patch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return the most recent stories from a specified U.S. latitude and longitude.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByCoordinates extends Temboo_Choreography
{
    /**
     * Return the most recent stories from a specified U.S. latitude and longitude.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByCoordinates Choreo.
     * @return Patch_FindStoriesByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Patch/FindStoriesByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindStoriesByCoordinates Choreo.
     *
     * @param Patch_FindStoriesByCoordinates_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Patch_FindStoriesByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindStoriesByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Patch_FindStoriesByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindStoriesByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindStoriesByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindStoriesByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindStoriesByCoordinates Choreo.
     *
     * @param string $value (required, string) A valid API key provided by Patch.
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindStoriesByCoordinates Choreo.
     *
     * @param string $value (required, string) The API shared secret provided by Patch.
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Keyword input for this FindStoriesByCoordinates Choreo.
     *
     * @param string $value (optional, string) Specify one or more words or phrases to find in the story title, story summary, and topic tags of the stories to return.
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setKeyword($value)
    {
        return $this->set('Keyword', $value);
    }

    /**
     * Set the value for the Latitude input for this FindStoriesByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitiude for the area from which to retrieve stories. For example, "40.740512".
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this FindStoriesByCoordinates Choreo.
     *
     * @param int $value (optional, integer) Specify how many stories to return, between 1 and 100. The default is 10.
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this FindStoriesByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude for the area from which to retrieve stories. For example, "-73.991479".
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaximumAge input for this FindStoriesByCoordinates Choreo.
     *
     * @param int $value (optional, integer) Specify the maximum age in days of the stories to return, between 1 and 30. The default is 10.
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setMaximumAge($value)
    {
        return $this->set('MaximumAge', $value);
    }

    /**
     * Set the value for the Radius input for this FindStoriesByCoordinates Choreo.
     *
     * @param int $value (optional, integer) Specify a radius in feet in which to search the specified coordinates, between 500 and 26,400. The default is 1,000 feet.
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setRadius($value)
    {
        return $this->set('Radius', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindStoriesByCoordinates Choreo.
     *
     * @param string $value (optional, string) Specify "xml" to convert the Patch JSON response to XML. The default is "json".
     * @return Patch_FindStoriesByCoordinates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FindStoriesByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindStoriesByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByCoordinates execution.
     * @param Patch_FindStoriesByCoordinates $choreo The choreography object for this execution.
     * @param Patch_FindStoriesByCoordinates_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Patch_FindStoriesByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindStoriesByCoordinates execution.
     *
     * @return Patch_FindStoriesByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this FindStoriesByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Patch_FindStoriesByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Patch_FindStoriesByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindStoriesByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindStoriesByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Patch_FindStoriesByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindStoriesByCoordinates execution.
     *
     * @return string (json) The response returned from Patch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return the most recent stories from a specified U.S. neighborhood.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByNeighborhood extends Temboo_Choreography
{
    /**
     * Return the most recent stories from a specified U.S. neighborhood.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByNeighborhood Choreo.
     * @return Patch_FindStoriesByNeighborhood New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Patch/FindStoriesByNeighborhood/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindStoriesByNeighborhood Choreo.
     *
     * @param Patch_FindStoriesByNeighborhood_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByNeighborhood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByNeighborhood_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Patch_FindStoriesByNeighborhood_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindStoriesByNeighborhood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByNeighborhood_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Patch_FindStoriesByNeighborhood_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindStoriesByNeighborhood Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByNeighborhood_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindStoriesByNeighborhood Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByNeighborhood_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindStoriesByNeighborhood input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindStoriesByNeighborhood Choreo.
     *
     * @param string $value (required, string) A valid API key provided by Patch.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindStoriesByNeighborhood Choreo.
     *
     * @param string $value (required, string) The API shared secret provided by Patch.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the City input for this FindStoriesByNeighborhood Choreo.
     *
     * @param string $value (required, string) The name of the city to return stories for.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Keyword input for this FindStoriesByNeighborhood Choreo.
     *
     * @param string $value (optional, string) Specify one or more words or phrases to find in the story title, story summary, and topic tags of the stories to return.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setKeyword($value)
    {
        return $this->set('Keyword', $value);
    }

    /**
     * Set the value for the Limit input for this FindStoriesByNeighborhood Choreo.
     *
     * @param int $value (optional, integer) Specify how many stories to return, between 1 and 100. The default is 10.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaximumAge input for this FindStoriesByNeighborhood Choreo.
     *
     * @param int $value (optional, integer) Specify the maximum age in days of the stories to return, between 1 and 30. The default is 10.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setMaximumAge($value)
    {
        return $this->set('MaximumAge', $value);
    }

    /**
     * Set the value for the Neighborhood input for this FindStoriesByNeighborhood Choreo.
     *
     * @param string $value (required, string) The name of the neighborhood in the corresponding city to return stories for. Common values include "downtown", "midtown", etc.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setNeighborhood($value)
    {
        return $this->set('Neighborhood', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindStoriesByNeighborhood Choreo.
     *
     * @param string $value (optional, string) Specify "xml" to convert the Patch JSON response to XML. The default is "json".
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this FindStoriesByNeighborhood Choreo.
     *
     * @param string $value (required, string) The U.S. state name or abbreviation corresponding to the city to return stories for.
     * @return Patch_FindStoriesByNeighborhood_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the FindStoriesByNeighborhood Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByNeighborhood_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindStoriesByNeighborhood Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByNeighborhood execution.
     * @param Patch_FindStoriesByNeighborhood $choreo The choreography object for this execution.
     * @param Patch_FindStoriesByNeighborhood_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByNeighborhood_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByNeighborhood_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Patch_FindStoriesByNeighborhood $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindStoriesByNeighborhood execution.
     *
     * @return Patch_FindStoriesByNeighborhood_Results New results object.
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
     * Wraps results in appropriate results class for this FindStoriesByNeighborhood execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Patch_FindStoriesByNeighborhood_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Patch_FindStoriesByNeighborhood_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindStoriesByNeighborhood Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByNeighborhood_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindStoriesByNeighborhood Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Patch_FindStoriesByNeighborhood_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindStoriesByNeighborhood execution.
     *
     * @return string (json) The response returned from Patch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return the most recent stories from a specified U.S. state.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByState extends Temboo_Choreography
{
    /**
     * Return the most recent stories from a specified U.S. state.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByState Choreo.
     * @return Patch_FindStoriesByState New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Patch/FindStoriesByState/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindStoriesByState Choreo.
     *
     * @param Patch_FindStoriesByState_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByState_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByState_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Patch_FindStoriesByState_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindStoriesByState Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByState_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Patch_FindStoriesByState_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindStoriesByState Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByState_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindStoriesByState Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByState_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindStoriesByState input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Patch_FindStoriesByState_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Patch_FindStoriesByState_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindStoriesByState Choreo.
     *
     * @param string $value (required, string) A valid API key provided by Patch.
     * @return Patch_FindStoriesByState_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindStoriesByState Choreo.
     *
     * @param string $value (required, string) The API shared secret provided by Patch.
     * @return Patch_FindStoriesByState_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Keyword input for this FindStoriesByState Choreo.
     *
     * @param string $value (optional, string) Specify one or more words or phrases to find in the story title, story summary, and topic tags of the stories to return.
     * @return Patch_FindStoriesByState_Inputs For method chaining.
     */
    public function setKeyword($value)
    {
        return $this->set('Keyword', $value);
    }

    /**
     * Set the value for the Limit input for this FindStoriesByState Choreo.
     *
     * @param int $value (optional, integer) Specify how many stories to return, between 1 and 100. The default is 10.
     * @return Patch_FindStoriesByState_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaximumAge input for this FindStoriesByState Choreo.
     *
     * @param int $value (optional, integer) Specify the maximum age in days of the stories to return, between 1 and 30. The default is 10.
     * @return Patch_FindStoriesByState_Inputs For method chaining.
     */
    public function setMaximumAge($value)
    {
        return $this->set('MaximumAge', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindStoriesByState Choreo.
     *
     * @param string $value (optional, string) Specify "xml" to convert the Patch JSON response to XML. The default is "json".
     * @return Patch_FindStoriesByState_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this FindStoriesByState Choreo.
     *
     * @param string $value (required, string) The U.S. state name or abbreviation for the stories to return.
     * @return Patch_FindStoriesByState_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the FindStoriesByState Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByState_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindStoriesByState Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByState execution.
     * @param Patch_FindStoriesByState $choreo The choreography object for this execution.
     * @param Patch_FindStoriesByState_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByState_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByState_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Patch_FindStoriesByState $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindStoriesByState execution.
     *
     * @return Patch_FindStoriesByState_Results New results object.
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
     * Wraps results in appropriate results class for this FindStoriesByState execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Patch_FindStoriesByState_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Patch_FindStoriesByState_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindStoriesByState Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByState_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindStoriesByState Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Patch_FindStoriesByState_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindStoriesByState execution.
     *
     * @return string (json) The response returned from Patch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return Patch location information for a specified U.S. region.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindLocationByName extends Temboo_Choreography
{
    /**
     * Return Patch location information for a specified U.S. region.
     *
     * @param Temboo_Session $session The session that owns this FindLocationByName Choreo.
     * @return Patch_FindLocationByName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Patch/FindLocationByName/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindLocationByName Choreo.
     *
     * @param Patch_FindLocationByName_Inputs|array $inputs (optional) Inputs as Patch_FindLocationByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindLocationByName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Patch_FindLocationByName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindLocationByName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindLocationByName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Patch_FindLocationByName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindLocationByName Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindLocationByName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindLocationByName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindLocationByName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindLocationByName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Patch_FindLocationByName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Patch_FindLocationByName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindLocationByName Choreo.
     *
     * @param string $value (required, string) A valid API key provided by Patch.
     * @return Patch_FindLocationByName_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindLocationByName Choreo.
     *
     * @param string $value (required, string) The API shared secret provided by Patch.
     * @return Patch_FindLocationByName_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Limit input for this FindLocationByName Choreo.
     *
     * @param int $value (optional, integer) Specify a maximum number of locations to return, between 1 and 100. The default is 10.
     * @return Patch_FindLocationByName_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the RegionName input for this FindLocationByName Choreo.
     *
     * @param string $value (required, string) Enter a state, city, neighborhood, district (county), locality (borough), or metro area name; a place name, such as a business, landmark, or park; or a ZIP code. Separate multiple names with commas.
     * @return Patch_FindLocationByName_Inputs For method chaining.
     */
    public function setRegionName($value)
    {
        return $this->set('RegionName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindLocationByName Choreo.
     *
     * @param string $value (optional, string) Specify "xml" to convert the Patch JSON response to XML, or "json" (the default) to not convert.
     * @return Patch_FindLocationByName_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FindLocationByName Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindLocationByName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindLocationByName Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindLocationByName execution.
     * @param Patch_FindLocationByName $choreo The choreography object for this execution.
     * @param Patch_FindLocationByName_Inputs|array $inputs (optional) Inputs as Patch_FindLocationByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindLocationByName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Patch_FindLocationByName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindLocationByName execution.
     *
     * @return Patch_FindLocationByName_Results New results object.
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
     * Wraps results in appropriate results class for this FindLocationByName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Patch_FindLocationByName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Patch_FindLocationByName_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindLocationByName Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindLocationByName_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindLocationByName Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Patch_FindLocationByName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Coordinates" output from this FindLocationByName execution.
     *
     * @return string (string) The concatenated location latitude and longitude returned by Patch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCoordinates()
    {
        return $this->get('Coordinates');
    }
    /**
     * Retrieve the value for the "Latitude" output from this FindLocationByName execution.
     *
     * @return float (decimal) The latitude for the location returned by Patch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLatitude()
    {
        return $this->get('Latitude');
    }
    /**
     * Retrieve the value for the "LocationID" output from this FindLocationByName execution.
     *
     * @return string (string) 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLocationID()
    {
        return $this->get('LocationID');
    }
    /**
     * Retrieve the value for the "Longitude" output from this FindLocationByName execution.
     *
     * @return float (decimal) The longitude for the location returned by Patch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getLongitude()
    {
        return $this->get('Longitude');
    }
    /**
     * Retrieve the value for the "Response" output from this FindLocationByName execution.
     *
     * @return string (json) The response returned from Patch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return the most recent stories from a specified U.S. ZIP code.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByZIPCode extends Temboo_Choreography
{
    /**
     * Return the most recent stories from a specified U.S. ZIP code.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByZIPCode Choreo.
     * @return Patch_FindStoriesByZIPCode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Patch/FindStoriesByZIPCode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindStoriesByZIPCode Choreo.
     *
     * @param Patch_FindStoriesByZIPCode_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByZIPCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByZIPCode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Patch_FindStoriesByZIPCode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindStoriesByZIPCode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByZIPCode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Patch_FindStoriesByZIPCode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindStoriesByZIPCode Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByZIPCode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindStoriesByZIPCode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByZIPCode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindStoriesByZIPCode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Patch_FindStoriesByZIPCode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Patch_FindStoriesByZIPCode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindStoriesByZIPCode Choreo.
     *
     * @param string $value (required, string) A valid API key provided by Patch.
     * @return Patch_FindStoriesByZIPCode_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindStoriesByZIPCode Choreo.
     *
     * @param string $value (required, string) The API shared secret provided by Patch.
     * @return Patch_FindStoriesByZIPCode_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Keyword input for this FindStoriesByZIPCode Choreo.
     *
     * @param string $value (optional, string) Specify one or more words or phrases to find in the story title, story summary, and topic tags of the stories to return.
     * @return Patch_FindStoriesByZIPCode_Inputs For method chaining.
     */
    public function setKeyword($value)
    {
        return $this->set('Keyword', $value);
    }

    /**
     * Set the value for the Limit input for this FindStoriesByZIPCode Choreo.
     *
     * @param int $value (optional, integer) Specify how many stories to return, between 1 and 100. The default is 10.
     * @return Patch_FindStoriesByZIPCode_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaximumAge input for this FindStoriesByZIPCode Choreo.
     *
     * @param int $value (optional, integer) Specify the maximum age in days of the stories to return, between 1 and 30. The default is 10.
     * @return Patch_FindStoriesByZIPCode_Inputs For method chaining.
     */
    public function setMaximumAge($value)
    {
        return $this->set('MaximumAge', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindStoriesByZIPCode Choreo.
     *
     * @param string $value (optional, string) Specify "xml" to convert the Patch JSON response to XML. The default is "json".
     * @return Patch_FindStoriesByZIPCode_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ZIPCode input for this FindStoriesByZIPCode Choreo.
     *
     * @param string $value (required, string) The ZIP code to return stories from.
     * @return Patch_FindStoriesByZIPCode_Inputs For method chaining.
     */
    public function setZIPCode($value)
    {
        return $this->set('ZIPCode', $value);
    }
}


/**
 * Execution object for the FindStoriesByZIPCode Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByZIPCode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindStoriesByZIPCode Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByZIPCode execution.
     * @param Patch_FindStoriesByZIPCode $choreo The choreography object for this execution.
     * @param Patch_FindStoriesByZIPCode_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByZIPCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByZIPCode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Patch_FindStoriesByZIPCode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindStoriesByZIPCode execution.
     *
     * @return Patch_FindStoriesByZIPCode_Results New results object.
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
     * Wraps results in appropriate results class for this FindStoriesByZIPCode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Patch_FindStoriesByZIPCode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Patch_FindStoriesByZIPCode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindStoriesByZIPCode Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByZIPCode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindStoriesByZIPCode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Patch_FindStoriesByZIPCode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindStoriesByZIPCode execution.
     *
     * @return string (json) The response returned from Patch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return the most recent stories from a specified U.S. city, state, ZIP code, or neighborhood using its Patch ID.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByID extends Temboo_Choreography
{
    /**
     * Return the most recent stories from a specified U.S. city, state, ZIP code, or neighborhood using its Patch ID.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByID Choreo.
     * @return Patch_FindStoriesByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Patch/FindStoriesByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindStoriesByID Choreo.
     *
     * @param Patch_FindStoriesByID_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Patch_FindStoriesByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindStoriesByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Patch_FindStoriesByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindStoriesByID Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindStoriesByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Patch_FindStoriesByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindStoriesByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Patch_FindStoriesByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Patch_FindStoriesByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FindStoriesByID Choreo.
     *
     * @param string $value (required, string) A valid API key provided by Patch.
     * @return Patch_FindStoriesByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APISecret input for this FindStoriesByID Choreo.
     *
     * @param string $value (required, string) The API shared secret provided by Patch.
     * @return Patch_FindStoriesByID_Inputs For method chaining.
     */
    public function setAPISecret($value)
    {
        return $this->set('APISecret', $value);
    }

    /**
     * Set the value for the Keyword input for this FindStoriesByID Choreo.
     *
     * @param string $value (optional, string) Specify one or more words or phrases to find in the story title, story summary, and topic tags of the stories to return.
     * @return Patch_FindStoriesByID_Inputs For method chaining.
     */
    public function setKeyword($value)
    {
        return $this->set('Keyword', $value);
    }

    /**
     * Set the value for the Limit input for this FindStoriesByID Choreo.
     *
     * @param int $value (optional, integer) Specify how many stories to return, between 1 and 100. The default is 10.
     * @return Patch_FindStoriesByID_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LocationID input for this FindStoriesByID Choreo.
     *
     * @param string $value (required, string) The UUID for a state, city, ZIP code, or neighborhood, assigned by Patch. Separate multiple IDs with commas but no spaces.
     * @return Patch_FindStoriesByID_Inputs For method chaining.
     */
    public function setLocationID($value)
    {
        return $this->set('LocationID', $value);
    }

    /**
     * Set the value for the MaximumAge input for this FindStoriesByID Choreo.
     *
     * @param int $value (optional, integer) Specify the maximum age in days of the stories to return, between 1 and 30. The default is 10.
     * @return Patch_FindStoriesByID_Inputs For method chaining.
     */
    public function setMaximumAge($value)
    {
        return $this->set('MaximumAge', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindStoriesByID Choreo.
     *
     * @param bool $value (optional, boolean) Specify "xml" to convert the Patch JSON response to XML. The default is "json".
     * @return Patch_FindStoriesByID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FindStoriesByID Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindStoriesByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindStoriesByID execution.
     * @param Patch_FindStoriesByID $choreo The choreography object for this execution.
     * @param Patch_FindStoriesByID_Inputs|array $inputs (optional) Inputs as Patch_FindStoriesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Patch_FindStoriesByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Patch_FindStoriesByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindStoriesByID execution.
     *
     * @return Patch_FindStoriesByID_Results New results object.
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
     * Wraps results in appropriate results class for this FindStoriesByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Patch_FindStoriesByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Patch_FindStoriesByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindStoriesByID Choreo.
 *
 * @package Temboo
 * @subpackage Patch
 */
class Patch_FindStoriesByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindStoriesByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Patch_FindStoriesByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindStoriesByID execution.
     *
     * @return string (json) The response returned from Patch.
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
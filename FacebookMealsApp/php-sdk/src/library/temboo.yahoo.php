<?php

/**
 * Temboo PHP SDK Yahoo classes
 *
 * Execute Choreographies from the Temboo Yahoo bundle.
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
 * @subpackage Yahoo
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves the Yahoo! Weather RSS Feed for any specified location.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeather extends Temboo_Choreography
{
    /**
     * Retrieves the Yahoo! Weather RSS Feed for any specified location.
     *
     * @param Temboo_Session $session The session that owns this GetWeather Choreo.
     * @return Yahoo_Weather_GetWeather New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yahoo/Weather/GetWeather/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetWeather Choreo.
     *
     * @param Yahoo_Weather_GetWeather_Inputs|array $inputs (optional) Inputs as Yahoo_Weather_GetWeather_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_Weather_GetWeather_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yahoo_Weather_GetWeather_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWeather Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_Weather_GetWeather_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yahoo_Weather_GetWeather_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWeather Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeather_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetWeather Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_Weather_GetWeather_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWeather input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yahoo_Weather_GetWeather_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yahoo_Weather_GetWeather_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Units input for this GetWeather Choreo.
     *
     * @param string $value (optional, string) The unit of temperature in the response. Acceptable inputs: f for Fahrenheit or c for Celsius. Defaults to f. When c is specified, all units measurements returned are changed to metric.
     * @return Yahoo_Weather_GetWeather_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }

    /**
     * Set the value for the WOEID input for this GetWeather Choreo.
     *
     * @param int $value (required, integer) Where On Earth ID for the desired location. This unique integer can be found by first running the GetWeatherByCoordinates Choreo.
     * @return Yahoo_Weather_GetWeather_Inputs For method chaining.
     */
    public function setWOEID($value)
    {
        return $this->set('WOEID', $value);
    }
}


/**
 * Execution object for the GetWeather Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeather_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWeather Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetWeather execution.
     * @param Yahoo_Weather_GetWeather $choreo The choreography object for this execution.
     * @param Yahoo_Weather_GetWeather_Inputs|array $inputs (optional) Inputs as Yahoo_Weather_GetWeather_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_Weather_GetWeather_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yahoo_Weather_GetWeather $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWeather execution.
     *
     * @return Yahoo_Weather_GetWeather_Results New results object.
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
     * Wraps results in appropriate results class for this GetWeather execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yahoo_Weather_GetWeather_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yahoo_Weather_GetWeather_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetWeather Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeather_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetWeather Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yahoo_Weather_GetWeather_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetWeather execution.
     *
     * @return string (xml) The response from Yahoo! Weather.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves complete location information from a specified pair of latitude and longitude coordinates.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_PlaceFinder_FindByCoordinates extends Temboo_Choreography
{
    /**
     * Retrieves complete location information from a specified pair of latitude and longitude coordinates.
     *
     * @param Temboo_Session $session The session that owns this FindByCoordinates Choreo.
     * @return Yahoo_PlaceFinder_FindByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yahoo/PlaceFinder/FindByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindByCoordinates Choreo.
     *
     * @param Yahoo_PlaceFinder_FindByCoordinates_Inputs|array $inputs (optional) Inputs as Yahoo_PlaceFinder_FindByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yahoo_PlaceFinder_FindByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yahoo_PlaceFinder_FindByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_PlaceFinder_FindByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this FindByCoordinates Choreo.
     *
     * @param string $value (optional, string) The App ID provided by Yahoo!
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the GeocodeFlags input for this FindByCoordinates Choreo.
     *
     * @param string $value (optional, string) Affects how geocoding is performed for the request. Valid value are: A, C, L, Q, or R. See documentation for more details on this parameter.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs For method chaining.
     */
    public function setGeocodeFlags($value)
    {
        return $this->set('GeocodeFlags', $value);
    }

    /**
     * Set the value for the Latitude input for this FindByCoordinates Choreo.
     *
     * @param string $value (required, string) The latitude coordinate of the location you want to find.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this FindByCoordinates Choreo.
     *
     * @param string $value (required, string) The longitude coordinate of the location you want to find.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the ResponseFlags input for this FindByCoordinates Choreo.
     *
     * @param string $value (optional, string) Determines which data elements are returned in the response. Valid values are: B, C, D, E, G, I, J, Q, R, T, U, W, X. See documentation for details on this parameter.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs For method chaining.
     */
    public function setResponseFlags($value)
    {
        return $this->set('ResponseFlags', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindByCoordinates Choreo.
     *
     * @param string $value (optional, string) You can specify json to get this output format in JSON. Otherwise, the default output will be in XML.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FindByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_PlaceFinder_FindByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindByCoordinates execution.
     * @param Yahoo_PlaceFinder_FindByCoordinates $choreo The choreography object for this execution.
     * @param Yahoo_PlaceFinder_FindByCoordinates_Inputs|array $inputs (optional) Inputs as Yahoo_PlaceFinder_FindByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yahoo_PlaceFinder_FindByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindByCoordinates execution.
     *
     * @return Yahoo_PlaceFinder_FindByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this FindByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yahoo_PlaceFinder_FindByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_PlaceFinder_FindByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yahoo_PlaceFinder_FindByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindByCoordinates execution.
     *
     * @return string The response from Yahoo! PlaceFinder.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves complete geocoding information for a location by specifying an address or partial address.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_PlaceFinder_FindByAddress extends Temboo_Choreography
{
    /**
     * Retrieves complete geocoding information for a location by specifying an address or partial address.
     *
     * @param Temboo_Session $session The session that owns this FindByAddress Choreo.
     * @return Yahoo_PlaceFinder_FindByAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yahoo/PlaceFinder/FindByAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FindByAddress Choreo.
     *
     * @param Yahoo_PlaceFinder_FindByAddress_Inputs|array $inputs (optional) Inputs as Yahoo_PlaceFinder_FindByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_PlaceFinder_FindByAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yahoo_PlaceFinder_FindByAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FindByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_PlaceFinder_FindByAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yahoo_PlaceFinder_FindByAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FindByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_PlaceFinder_FindByAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FindByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_PlaceFinder_FindByAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FindByAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yahoo_PlaceFinder_FindByAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yahoo_PlaceFinder_FindByAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Address input for this FindByAddress Choreo.
     *
     * @param string $value (required, string) The address to be searched.
     * @return Yahoo_PlaceFinder_FindByAddress_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the AppID input for this FindByAddress Choreo.
     *
     * @param string $value (optional, string) The App ID provided by Yahoo!
     * @return Yahoo_PlaceFinder_FindByAddress_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the GeocodeFlags input for this FindByAddress Choreo.
     *
     * @param string $value (optional, string) Affects how geocoding is performed for the request. Valid value are: A, C, L, Q, or R. See documentation for more details on this parameter.
     * @return Yahoo_PlaceFinder_FindByAddress_Inputs For method chaining.
     */
    public function setGeocodeFlags($value)
    {
        return $this->set('GeocodeFlags', $value);
    }

    /**
     * Set the value for the ResponseFlags input for this FindByAddress Choreo.
     *
     * @param string $value (optional, string) Determines which data elements are returned in the response. Valid values are: B, C, D, E, G, I, J, Q, R, T, U, W, X. See documentation for details on this parameter.
     * @return Yahoo_PlaceFinder_FindByAddress_Inputs For method chaining.
     */
    public function setResponseFlags($value)
    {
        return $this->set('ResponseFlags', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FindByAddress Choreo.
     *
     * @param string $value (optional, string) You can specify json to get this output format in JSON. Otherwise, the default output will be in XML.
     * @return Yahoo_PlaceFinder_FindByAddress_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the FindByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_PlaceFinder_FindByAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FindByAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this FindByAddress execution.
     * @param Yahoo_PlaceFinder_FindByAddress $choreo The choreography object for this execution.
     * @param Yahoo_PlaceFinder_FindByAddress_Inputs|array $inputs (optional) Inputs as Yahoo_PlaceFinder_FindByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_PlaceFinder_FindByAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yahoo_PlaceFinder_FindByAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FindByAddress execution.
     *
     * @return Yahoo_PlaceFinder_FindByAddress_Results New results object.
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
     * Wraps results in appropriate results class for this FindByAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yahoo_PlaceFinder_FindByAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yahoo_PlaceFinder_FindByAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FindByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_PlaceFinder_FindByAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FindByAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yahoo_PlaceFinder_FindByAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FindByAddress execution.
     *
     * @return string The response from Yahoo! PlaceFinder.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the Yahoo Weather RSS Feed for any specified location by address.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeatherByAddress extends Temboo_Choreography
{
    /**
     * Retrieves the Yahoo Weather RSS Feed for any specified location by address.
     *
     * @param Temboo_Session $session The session that owns this GetWeatherByAddress Choreo.
     * @return Yahoo_Weather_GetWeatherByAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yahoo/Weather/GetWeatherByAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetWeatherByAddress Choreo.
     *
     * @param Yahoo_Weather_GetWeatherByAddress_Inputs|array $inputs (optional) Inputs as Yahoo_Weather_GetWeatherByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_Weather_GetWeatherByAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yahoo_Weather_GetWeatherByAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWeatherByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_Weather_GetWeatherByAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yahoo_Weather_GetWeatherByAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWeatherByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeatherByAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetWeatherByAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_Weather_GetWeatherByAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWeatherByAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yahoo_Weather_GetWeatherByAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yahoo_Weather_GetWeatherByAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Address input for this GetWeatherByAddress Choreo.
     *
     * @param string $value (required, string) The address to be searched.
     * @return Yahoo_Weather_GetWeatherByAddress_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the AppID input for this GetWeatherByAddress Choreo.
     *
     * @param string $value (optional, string) The App ID provided by Yahoo!
     * @return Yahoo_Weather_GetWeatherByAddress_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Units input for this GetWeatherByAddress Choreo.
     *
     * @param string $value (optional, string) The unit of temperature in the response. Acceptable inputs: f for Fahrenheit or c for Celsius. Defaults to f. When c is specified, all units measurements returned are changed to metric.
     * @return Yahoo_Weather_GetWeatherByAddress_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }
}


/**
 * Execution object for the GetWeatherByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeatherByAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWeatherByAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetWeatherByAddress execution.
     * @param Yahoo_Weather_GetWeatherByAddress $choreo The choreography object for this execution.
     * @param Yahoo_Weather_GetWeatherByAddress_Inputs|array $inputs (optional) Inputs as Yahoo_Weather_GetWeatherByAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_Weather_GetWeatherByAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yahoo_Weather_GetWeatherByAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWeatherByAddress execution.
     *
     * @return Yahoo_Weather_GetWeatherByAddress_Results New results object.
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
     * Wraps results in appropriate results class for this GetWeatherByAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yahoo_Weather_GetWeatherByAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yahoo_Weather_GetWeatherByAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetWeatherByAddress Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeatherByAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetWeatherByAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yahoo_Weather_GetWeatherByAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetWeatherByAddress execution.
     *
     * @return string (xml) The response from Yahoo Weather.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "WOEID" output from this GetWeatherByAddress execution.
     *
     * @return int (integer) The unique Where On Earth ID of the location.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getWOEID()
    {
        return $this->get('WOEID');
    }
}

/**
 * Retrieves the most recent Yahoo! Finance Company or Industry news items as an RSS feed.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Finance_GetNews extends Temboo_Choreography
{
    /**
     * Retrieves the most recent Yahoo! Finance Company or Industry news items as an RSS feed.
     *
     * @param Temboo_Session $session The session that owns this GetNews Choreo.
     * @return Yahoo_Finance_GetNews New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yahoo/Finance/GetNews/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetNews Choreo.
     *
     * @param Yahoo_Finance_GetNews_Inputs|array $inputs (optional) Inputs as Yahoo_Finance_GetNews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_Finance_GetNews_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yahoo_Finance_GetNews_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_Finance_GetNews_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yahoo_Finance_GetNews_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNews Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Finance_GetNews_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetNews Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_Finance_GetNews_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNews input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yahoo_Finance_GetNews_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yahoo_Finance_GetNews_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Company input for this GetNews Choreo.
     *
     * @param string $value (required, string) Ticker symbol for one or more companies to search, separated by commas (e.g. YHOO,DIS to include news about Yahoo! and Disney).
     * @return Yahoo_Finance_GetNews_Inputs For method chaining.
     */
    public function setCompany($value)
    {
        return $this->set('Company', $value);
    }

    /**
     * Set the value for the NewsType input for this GetNews Choreo.
     *
     * @param string $value (required, string) Enter the type of news items you want to see in the RSS feed: headline or industry. 
     * @return Yahoo_Finance_GetNews_Inputs For method chaining.
     */
    public function setNewsType($value)
    {
        return $this->set('NewsType', $value);
    }
}


/**
 * Execution object for the GetNews Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Finance_GetNews_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNews Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetNews execution.
     * @param Yahoo_Finance_GetNews $choreo The choreography object for this execution.
     * @param Yahoo_Finance_GetNews_Inputs|array $inputs (optional) Inputs as Yahoo_Finance_GetNews_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_Finance_GetNews_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yahoo_Finance_GetNews $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNews execution.
     *
     * @return Yahoo_Finance_GetNews_Results New results object.
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
     * Wraps results in appropriate results class for this GetNews execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yahoo_Finance_GetNews_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yahoo_Finance_GetNews_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetNews Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Finance_GetNews_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetNews Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yahoo_Finance_GetNews_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetNews execution.
     *
     * @return string (xml) The response from Yahoo! Finance.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the Yahoo Weather RSS Feed for any specified location by geo-coordinates.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeatherByCoordinates extends Temboo_Choreography
{
    /**
     * Retrieves the Yahoo Weather RSS Feed for any specified location by geo-coordinates.
     *
     * @param Temboo_Session $session The session that owns this GetWeatherByCoordinates Choreo.
     * @return Yahoo_Weather_GetWeatherByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Yahoo/Weather/GetWeatherByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetWeatherByCoordinates Choreo.
     *
     * @param Yahoo_Weather_GetWeatherByCoordinates_Inputs|array $inputs (optional) Inputs as Yahoo_Weather_GetWeatherByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Yahoo_Weather_GetWeatherByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWeatherByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Yahoo_Weather_GetWeatherByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWeatherByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeatherByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetWeatherByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWeatherByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetWeatherByCoordinates Choreo.
     *
     * @param string $value (optional, string) The App ID provided by Yahoo!
     * @return Yahoo_Weather_GetWeatherByCoordinates_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Latitude input for this GetWeatherByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate of the location you want to search.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GetWeatherByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate of the location you want to search.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Units input for this GetWeatherByCoordinates Choreo.
     *
     * @param string $value (optional, string) The unit of temperature in the response. Acceptable inputs: f for Fahrenheit or c for Celsius. Defaults to f. When c is specified, all units measurements returned are changed to metric.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Inputs For method chaining.
     */
    public function setUnits($value)
    {
        return $this->set('Units', $value);
    }
}


/**
 * Execution object for the GetWeatherByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeatherByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWeatherByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetWeatherByCoordinates execution.
     * @param Yahoo_Weather_GetWeatherByCoordinates $choreo The choreography object for this execution.
     * @param Yahoo_Weather_GetWeatherByCoordinates_Inputs|array $inputs (optional) Inputs as Yahoo_Weather_GetWeatherByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Yahoo_Weather_GetWeatherByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWeatherByCoordinates execution.
     *
     * @return Yahoo_Weather_GetWeatherByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this GetWeatherByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Yahoo_Weather_GetWeatherByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetWeatherByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage Yahoo
 */
class Yahoo_Weather_GetWeatherByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetWeatherByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Yahoo_Weather_GetWeatherByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetWeatherByCoordinates execution.
     *
     * @return string (xml) The response from Yahoo Weather.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "WOEID" output from this GetWeatherByCoordinates execution.
     *
     * @return int (integer) The unique Where On Earth ID of the location.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getWOEID()
    {
        return $this->get('WOEID');
    }
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


?>
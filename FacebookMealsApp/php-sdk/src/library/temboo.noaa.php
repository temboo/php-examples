<?php

/**
 * Temboo PHP SDK NOAA classes
 *
 * Execute Choreographies from the Temboo NOAA bundle.
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
 * @subpackage NOAA
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieve DWML-encoded NDFD data for a specified zipcode (in 50 U.S. States and Puerto Rico).
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByZipcode extends Temboo_Choreography
{
    /**
     * Retrieve DWML-encoded NDFD data for a specified zipcode (in 50 U.S. States and Puerto Rico).
     *
     * @param Temboo_Session $session The session that owns this WeatherByZipcode Choreo.
     * @return NOAA_WeatherByZipcode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NOAA/WeatherByZipcode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WeatherByZipcode Choreo.
     *
     * @param NOAA_WeatherByZipcode_Inputs|array $inputs (optional) Inputs as NOAA_WeatherByZipcode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherByZipcode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NOAA_WeatherByZipcode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WeatherByZipcode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherByZipcode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NOAA_WeatherByZipcode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WeatherByZipcode Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByZipcode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WeatherByZipcode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherByZipcode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WeatherByZipcode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NOAA_WeatherByZipcode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NOAA_WeatherByZipcode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the EndDate input for this WeatherByZipcode Choreo.
     *
     * @param string $value (optional, date) Enter today's date, or some future date in UTC format. Format: 2004-04-27T12:00. Defaults to NOW if not provided.
     * @return NOAA_WeatherByZipcode_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the NDFDParameterName input for this WeatherByZipcode Choreo.
     *
     * @param string $value (optional, string) Enter an additional weather parameter in the following format: phail=phail. Use only if Product is set to: glance.
     * @return NOAA_WeatherByZipcode_Inputs For method chaining.
     */
    public function setNDFDParameterName($value)
    {
        return $this->set('NDFDParameterName', $value);
    }

    /**
     * Set the value for the Product input for this WeatherByZipcode Choreo.
     *
     * @param string $value (required, string) Enter one of two parameters: time-series (to return all data between the Begin and End time parameters); glance for a subset of 5 often used parameters
     * @return NOAA_WeatherByZipcode_Inputs For method chaining.
     */
    public function setProduct($value)
    {
        return $this->set('Product', $value);
    }

    /**
     * Set the value for the StartDate input for this WeatherByZipcode Choreo.
     *
     * @param string $value (optional, date) Enter the start time for retrieval of NDWD information in UTC format. If null, the earliest date in the database is returned.  Format: 2004-04-27T12:00.
     * @return NOAA_WeatherByZipcode_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Unit input for this WeatherByZipcode Choreo.
     *
     * @param string $value (optional, string) Enter the unit format the data will be displayed in. Default is: e, for Standard English (U.S. Standard).  Or: m, for Metric (SI Units).
     * @return NOAA_WeatherByZipcode_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }

    /**
     * Set the value for the ZipCodeList input for this WeatherByZipcode Choreo.
     *
     * @param int $value (required, integer) Enter the zipcode for which NDFD weather information will be retrieved.
     * @return NOAA_WeatherByZipcode_Inputs For method chaining.
     */
    public function setZipCodeList($value)
    {
        return $this->set('ZipCodeList', $value);
    }
}


/**
 * Execution object for the WeatherByZipcode Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByZipcode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WeatherByZipcode Choreo.
     *
     * @param Temboo_Session $session The session that owns this WeatherByZipcode execution.
     * @param NOAA_WeatherByZipcode $choreo The choreography object for this execution.
     * @param NOAA_WeatherByZipcode_Inputs|array $inputs (optional) Inputs as NOAA_WeatherByZipcode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherByZipcode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NOAA_WeatherByZipcode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WeatherByZipcode execution.
     *
     * @return NOAA_WeatherByZipcode_Results New results object.
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
     * Wraps results in appropriate results class for this WeatherByZipcode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NOAA_WeatherByZipcode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NOAA_WeatherByZipcode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WeatherByZipcode Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByZipcode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WeatherByZipcode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NOAA_WeatherByZipcode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this WeatherByZipcode execution.
     *
     * @return string (xml) Response from NDFD servers.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve weather information for a specific list of cities.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCitiesUnsummarized extends Temboo_Choreography
{
    /**
     * Retrieve weather information for a specific list of cities.
     *
     * @param Temboo_Session $session The session that owns this WeatherByCitiesUnsummarized Choreo.
     * @return NOAA_WeatherByCitiesUnsummarized New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NOAA/WeatherByCitiesUnsummarized/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WeatherByCitiesUnsummarized Choreo.
     *
     * @param NOAA_WeatherByCitiesUnsummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherByCitiesUnsummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherByCitiesUnsummarized_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NOAA_WeatherByCitiesUnsummarized_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WeatherByCitiesUnsummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NOAA_WeatherByCitiesUnsummarized_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WeatherByCitiesUnsummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCitiesUnsummarized_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WeatherByCitiesUnsummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WeatherByCitiesUnsummarized input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CitiesLevel input for this WeatherByCitiesUnsummarized Choreo.
     *
     * @param int $value (required, integer) Enter a city grouping number. For example: enter 1, to obtain weather information for primary U.S. cities. See documentation for additional numbers.
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs For method chaining.
     */
    public function setCitiesLevel($value)
    {
        return $this->set('CitiesLevel', $value);
    }

    /**
     * Set the value for the EndDate input for this WeatherByCitiesUnsummarized Choreo.
     *
     * @param string $value (required, date) Enter the end time for retrieval of NDWD information in UTC format. Time must be today's date, or a future date.  Format: 2004-04-27T12:00.
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the NDFDParameterName input for this WeatherByCitiesUnsummarized Choreo.
     *
     * @param string $value (optional, string) Enter an additional weather parameter in the following format: phail=phail. Use only if Product is set to: glance.
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs For method chaining.
     */
    public function setNDFDParameterName($value)
    {
        return $this->set('NDFDParameterName', $value);
    }

    /**
     * Set the value for the Product input for this WeatherByCitiesUnsummarized Choreo.
     *
     * @param string $value (required, string) Enter one of two parameters: time-series (to return all data between the Begin and End time parameters); glance for a subset of 5 often used parameters
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs For method chaining.
     */
    public function setProduct($value)
    {
        return $this->set('Product', $value);
    }

    /**
     * Set the value for the StartDate input for this WeatherByCitiesUnsummarized Choreo.
     *
     * @param string $value (optional, date) Enter the start time for retrieval of NDWD information in UTC format. If null, the earliest date in the database is returned. Format: 2004-04-27T12:00.
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Unit input for this WeatherByCitiesUnsummarized Choreo.
     *
     * @param string $value (optional, string) Enter the unit format the data will be displayed in. Default is: e, for Standard English (U.S. Standard).  Or: m, for Metric (SI Units).
     * @return NOAA_WeatherByCitiesUnsummarized_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the WeatherByCitiesUnsummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCitiesUnsummarized_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WeatherByCitiesUnsummarized Choreo.
     *
     * @param Temboo_Session $session The session that owns this WeatherByCitiesUnsummarized execution.
     * @param NOAA_WeatherByCitiesUnsummarized $choreo The choreography object for this execution.
     * @param NOAA_WeatherByCitiesUnsummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherByCitiesUnsummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherByCitiesUnsummarized_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NOAA_WeatherByCitiesUnsummarized $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WeatherByCitiesUnsummarized execution.
     *
     * @return NOAA_WeatherByCitiesUnsummarized_Results New results object.
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
     * Wraps results in appropriate results class for this WeatherByCitiesUnsummarized execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NOAA_WeatherByCitiesUnsummarized_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NOAA_WeatherByCitiesUnsummarized_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WeatherByCitiesUnsummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCitiesUnsummarized_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WeatherByCitiesUnsummarized Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NOAA_WeatherByCitiesUnsummarized_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this WeatherByCitiesUnsummarized execution.
     *
     * @return string (xml) Response from NDFD servers.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve weather information for a rectangle defined by a center point and distances in the latitudinal and longitudinal directions.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCenterPointSubgridSummarized extends Temboo_Choreography
{
    /**
     * Retrieve weather information for a rectangle defined by a center point and distances in the latitudinal and longitudinal directions.
     *
     * @param Temboo_Session $session The session that owns this WeatherByCenterPointSubgridSummarized Choreo.
     * @return NOAA_WeatherByCenterPointSubgridSummarized New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NOAA/WeatherByCenterPointSubgridSummarized/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param NOAA_WeatherByCenterPointSubgridSummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherByCenterPointSubgridSummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NOAA_WeatherByCenterPointSubgridSummarized_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NOAA_WeatherByCenterPointSubgridSummarized_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WeatherByCenterPointSubgridSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCenterPointSubgridSummarized_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WeatherByCenterPointSubgridSummarized input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CenterPointLatitude input for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param float $value (required, decimal) Enter the latitude specifying the rectangle or the grid center that defines the area being queried. North latitude is positive.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setCenterPointLatitude($value)
    {
        return $this->set('CenterPointLatitude', $value);
    }

    /**
     * Set the value for the CenterPointLongitude input for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param float $value (required, decimal) Enter the longitute specifying the rectangle or the grid center that defines the area being queried. West longitude is negative.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setCenterPointLongitude($value)
    {
        return $this->set('CenterPointLongitude', $value);
    }

    /**
     * Set the value for the Format input for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param string $value (required, string) Specify a timespan for which NDFD data will be summarized. Enter: 24 hourly, for a 24 hour summary, or: 12 hourly, for a 12 hour weather summary.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the LatitudeDistance input for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param float $value (required, decimal) Specify the distance from the center point in the latitudinal direction to the rectangle's East/West oriented sides.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setLatitudeDistance($value)
    {
        return $this->set('LatitudeDistance', $value);
    }

    /**
     * Set the value for the LongitudeDistance input for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param float $value (required, decimal) Specify the distance from the center point in the longitudinal direction to the rectangle's North/South oriented side.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setLongitudeDistance($value)
    {
        return $this->set('LongitudeDistance', $value);
    }

    /**
     * Set the value for the NumberOfDays input for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param int $value (optional, integer) Specify the number of days to retieve data for. If null, data from the earliest date in the dabase is returned.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setNumberOfDays($value)
    {
        return $this->set('NumberOfDays', $value);
    }

    /**
     * Set the value for the SquareResolution input for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param float $value (optional, decimal) Enter desired data resolution in kilometers.  Default is 5km.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setSquareResolution($value)
    {
        return $this->set('SquareResolution', $value);
    }

    /**
     * Set the value for the StartDate input for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param string $value (required, date) Enter the start time for retrieval of NDWD data in following format: 2004-04-27 If null, the earliest date in the database is returned.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Unit input for this WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param string $value (optional, string) Enter the unit format the data will be displayed in. Default is: e, for Standard English (U.S. Standard).  Or: m, for Metric (SI Units).
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the WeatherByCenterPointSubgridSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCenterPointSubgridSummarized_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param Temboo_Session $session The session that owns this WeatherByCenterPointSubgridSummarized execution.
     * @param NOAA_WeatherByCenterPointSubgridSummarized $choreo The choreography object for this execution.
     * @param NOAA_WeatherByCenterPointSubgridSummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherByCenterPointSubgridSummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NOAA_WeatherByCenterPointSubgridSummarized $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WeatherByCenterPointSubgridSummarized execution.
     *
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Results New results object.
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
     * Wraps results in appropriate results class for this WeatherByCenterPointSubgridSummarized execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NOAA_WeatherByCenterPointSubgridSummarized_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WeatherByCenterPointSubgridSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCenterPointSubgridSummarized_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WeatherByCenterPointSubgridSummarized Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NOAA_WeatherByCenterPointSubgridSummarized_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this WeatherByCenterPointSubgridSummarized execution.
     *
     * @return string (xml) Response from NDFD servers.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve weather information for a single point defined by latitude and longitude coordinates.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForSinglePointSummarized extends Temboo_Choreography
{
    /**
     * Retrieve weather information for a single point defined by latitude and longitude coordinates.
     *
     * @param Temboo_Session $session The session that owns this WeatherForSinglePointSummarized Choreo.
     * @return NOAA_WeatherForSinglePointSummarized New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NOAA/WeatherForSinglePointSummarized/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WeatherForSinglePointSummarized Choreo.
     *
     * @param NOAA_WeatherForSinglePointSummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherForSinglePointSummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherForSinglePointSummarized_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NOAA_WeatherForSinglePointSummarized_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WeatherForSinglePointSummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherForSinglePointSummarized_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NOAA_WeatherForSinglePointSummarized_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WeatherForSinglePointSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForSinglePointSummarized_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WeatherForSinglePointSummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherForSinglePointSummarized_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WeatherForSinglePointSummarized input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NOAA_WeatherForSinglePointSummarized_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NOAA_WeatherForSinglePointSummarized_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this WeatherForSinglePointSummarized Choreo.
     *
     * @param string $value (required, string) Specify a timespan for which NDFD data will be summarized. Enter: 24 hourly, for a 24 hour summary, or: 12 hourly, for a 12 hour weather summary.
     * @return NOAA_WeatherForSinglePointSummarized_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the Latitude input for this WeatherForSinglePointSummarized Choreo.
     *
     * @param float $value (required, decimal) Enter the latitude coordinates of the point for which weather data is requested. North latitude is positive.
     * @return NOAA_WeatherForSinglePointSummarized_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this WeatherForSinglePointSummarized Choreo.
     *
     * @param float $value (required, decimal) Enter the longitude coordinate of the point for which weather data is requested. West longitude is negative.
     * @return NOAA_WeatherForSinglePointSummarized_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the NumberOfDays input for this WeatherForSinglePointSummarized Choreo.
     *
     * @param int $value (optional, integer) Specify the number of days to retieve data for. If null, data from the earliest date in the dabase is returned.
     * @return NOAA_WeatherForSinglePointSummarized_Inputs For method chaining.
     */
    public function setNumberOfDays($value)
    {
        return $this->set('NumberOfDays', $value);
    }

    /**
     * Set the value for the StartDate input for this WeatherForSinglePointSummarized Choreo.
     *
     * @param string $value (optional, date) Enter the start time for retrieval of NDWD information in UTC format. If null, the earliest date in the database is returned. Format: 2004-04-27T12:00.
     * @return NOAA_WeatherForSinglePointSummarized_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Unit input for this WeatherForSinglePointSummarized Choreo.
     *
     * @param string $value (optional, string) Enter the unit format the data will be displayed in. Default is: e, for Standard English (U.S. Standard).  Or: m, for Metric (SI Units).
     * @return NOAA_WeatherForSinglePointSummarized_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the WeatherForSinglePointSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForSinglePointSummarized_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WeatherForSinglePointSummarized Choreo.
     *
     * @param Temboo_Session $session The session that owns this WeatherForSinglePointSummarized execution.
     * @param NOAA_WeatherForSinglePointSummarized $choreo The choreography object for this execution.
     * @param NOAA_WeatherForSinglePointSummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherForSinglePointSummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherForSinglePointSummarized_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NOAA_WeatherForSinglePointSummarized $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WeatherForSinglePointSummarized execution.
     *
     * @return NOAA_WeatherForSinglePointSummarized_Results New results object.
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
     * Wraps results in appropriate results class for this WeatherForSinglePointSummarized execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NOAA_WeatherForSinglePointSummarized_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NOAA_WeatherForSinglePointSummarized_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WeatherForSinglePointSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForSinglePointSummarized_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WeatherForSinglePointSummarized Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NOAA_WeatherForSinglePointSummarized_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this WeatherForSinglePointSummarized execution.
     *
     * @return string (xml) Response from NDFD servers.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve unsummarized latitude and longitude data for a specified list of cities.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_ListCityCoordinatesUnsummarized extends Temboo_Choreography
{
    /**
     * Retrieve unsummarized latitude and longitude data for a specified list of cities.
     *
     * @param Temboo_Session $session The session that owns this ListCityCoordinatesUnsummarized Choreo.
     * @return NOAA_ListCityCoordinatesUnsummarized New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NOAA/ListCityCoordinatesUnsummarized/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCityCoordinatesUnsummarized Choreo.
     *
     * @param NOAA_ListCityCoordinatesUnsummarized_Inputs|array $inputs (optional) Inputs as NOAA_ListCityCoordinatesUnsummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_ListCityCoordinatesUnsummarized_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NOAA_ListCityCoordinatesUnsummarized_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCityCoordinatesUnsummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_ListCityCoordinatesUnsummarized_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NOAA_ListCityCoordinatesUnsummarized_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCityCoordinatesUnsummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_ListCityCoordinatesUnsummarized_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCityCoordinatesUnsummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_ListCityCoordinatesUnsummarized_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCityCoordinatesUnsummarized input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NOAA_ListCityCoordinatesUnsummarized_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NOAA_ListCityCoordinatesUnsummarized_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CitiesLevel input for this ListCityCoordinatesUnsummarized Choreo.
     *
     * @param int $value (integer) Enter a city grouping number to retrieve its latitude and longitude coordinates. For example: enter 1, to obtain information for primary U.S. cities.
     * @return NOAA_ListCityCoordinatesUnsummarized_Inputs For method chaining.
     */
    public function setCitiesLevel($value)
    {
        return $this->set('CitiesLevel', $value);
    }
}


/**
 * Execution object for the ListCityCoordinatesUnsummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_ListCityCoordinatesUnsummarized_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCityCoordinatesUnsummarized Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCityCoordinatesUnsummarized execution.
     * @param NOAA_ListCityCoordinatesUnsummarized $choreo The choreography object for this execution.
     * @param NOAA_ListCityCoordinatesUnsummarized_Inputs|array $inputs (optional) Inputs as NOAA_ListCityCoordinatesUnsummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_ListCityCoordinatesUnsummarized_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NOAA_ListCityCoordinatesUnsummarized $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCityCoordinatesUnsummarized execution.
     *
     * @return NOAA_ListCityCoordinatesUnsummarized_Results New results object.
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
     * Wraps results in appropriate results class for this ListCityCoordinatesUnsummarized execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NOAA_ListCityCoordinatesUnsummarized_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NOAA_ListCityCoordinatesUnsummarized_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCityCoordinatesUnsummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_ListCityCoordinatesUnsummarized_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCityCoordinatesUnsummarized Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NOAA_ListCityCoordinatesUnsummarized_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListCityCoordinatesUnsummarized execution.
     *
     * @return string (XML) Response from NDFD servers.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve weather information for all points on a line defined by a set of latitude and longitude coordinates.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForPointsOnLineSummarized extends Temboo_Choreography
{
    /**
     * Retrieve weather information for all points on a line defined by a set of latitude and longitude coordinates.
     *
     * @param Temboo_Session $session The session that owns this WeatherForPointsOnLineSummarized Choreo.
     * @return NOAA_WeatherForPointsOnLineSummarized New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NOAA/WeatherForPointsOnLineSummarized/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param NOAA_WeatherForPointsOnLineSummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherForPointsOnLineSummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherForPointsOnLineSummarized_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NOAA_WeatherForPointsOnLineSummarized_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NOAA_WeatherForPointsOnLineSummarized_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WeatherForPointsOnLineSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForPointsOnLineSummarized_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WeatherForPointsOnLineSummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WeatherForPointsOnLineSummarized input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Endpoint1Latitude input for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param int $value (required, integer) Enter the latitude of the first endpoint of the line for which weather data is requested. North latitude is positive.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function setEndpoint1Latitude($value)
    {
        return $this->set('Endpoint1Latitude', $value);
    }

    /**
     * Set the value for the Endpoint1Longitude input for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param int $value (required, integer) Enter the longitude of the first endpoint of the line for which weather data is requested. West longitude is negative.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function setEndpoint1Longitude($value)
    {
        return $this->set('Endpoint1Longitude', $value);
    }

    /**
     * Set the value for the Endpoint2Latitude input for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param int $value (required, integer) Enter the latitude of the second endpoint of the line for which weather data is requested. North latitude is positive.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function setEndpoint2Latitude($value)
    {
        return $this->set('Endpoint2Latitude', $value);
    }

    /**
     * Set the value for the Endpoint2Longitude input for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param int $value (required, integer) Enter the longitude of the second endpoint of the line for which weather data is requested. West longitude is negative.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function setEndpoint2Longitude($value)
    {
        return $this->set('Endpoint2Longitude', $value);
    }

    /**
     * Set the value for the Format input for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param string $value (required, string) Specify a timespan for which NDFD data will be summarized. Enter: 24 hourly, for a 24 hour summary, or: 12 hourly, for a 12 hour weather summary.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the NumberOfDays input for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param int $value (optional, integer) Specify the number of days to retieve data for. If null, data from the earliest date in the dabase is returned.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function setNumberOfDays($value)
    {
        return $this->set('NumberOfDays', $value);
    }

    /**
     * Set the value for the StartDate input for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param string $value (optional, date) Enter the start time for retrieval of NDWD information in UTC format. If null, the earliest date in the database is returned. Format: 2004-04-27T12:00.
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Unit input for this WeatherForPointsOnLineSummarized Choreo.
     *
     * @param string $value (optional, string) Enter the unit format the data will be displayed in. Default is: e, for Standard English (U.S. Standard).  Or: m, for Metric (SI Units).
     * @return NOAA_WeatherForPointsOnLineSummarized_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the WeatherForPointsOnLineSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForPointsOnLineSummarized_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WeatherForPointsOnLineSummarized Choreo.
     *
     * @param Temboo_Session $session The session that owns this WeatherForPointsOnLineSummarized execution.
     * @param NOAA_WeatherForPointsOnLineSummarized $choreo The choreography object for this execution.
     * @param NOAA_WeatherForPointsOnLineSummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherForPointsOnLineSummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherForPointsOnLineSummarized_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NOAA_WeatherForPointsOnLineSummarized $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WeatherForPointsOnLineSummarized execution.
     *
     * @return NOAA_WeatherForPointsOnLineSummarized_Results New results object.
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
     * Wraps results in appropriate results class for this WeatherForPointsOnLineSummarized execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NOAA_WeatherForPointsOnLineSummarized_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NOAA_WeatherForPointsOnLineSummarized_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WeatherForPointsOnLineSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForPointsOnLineSummarized_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WeatherForPointsOnLineSummarized Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NOAA_WeatherForPointsOnLineSummarized_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this WeatherForPointsOnLineSummarized execution.
     *
     * @return string (xml) Response from NDFD servers.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve weather information for a specific list of cities.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCitiesSummarized extends Temboo_Choreography
{
    /**
     * Retrieve weather information for a specific list of cities.
     *
     * @param Temboo_Session $session The session that owns this WeatherByCitiesSummarized Choreo.
     * @return NOAA_WeatherByCitiesSummarized New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NOAA/WeatherByCitiesSummarized/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WeatherByCitiesSummarized Choreo.
     *
     * @param NOAA_WeatherByCitiesSummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherByCitiesSummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherByCitiesSummarized_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NOAA_WeatherByCitiesSummarized_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WeatherByCitiesSummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherByCitiesSummarized_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NOAA_WeatherByCitiesSummarized_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WeatherByCitiesSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCitiesSummarized_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WeatherByCitiesSummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherByCitiesSummarized_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WeatherByCitiesSummarized input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NOAA_WeatherByCitiesSummarized_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NOAA_WeatherByCitiesSummarized_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CitiesLevel input for this WeatherByCitiesSummarized Choreo.
     *
     * @param int $value (required, integer) Enter a city grouping number. For example: enter 1, to obtain weather information for primary U.S. cities. See documentation for additional numbers.
     * @return NOAA_WeatherByCitiesSummarized_Inputs For method chaining.
     */
    public function setCitiesLevel($value)
    {
        return $this->set('CitiesLevel', $value);
    }

    /**
     * Set the value for the Format input for this WeatherByCitiesSummarized Choreo.
     *
     * @param string $value (required, string) Specify a timespan for which NDFD data will be summarized. Enter: 24 hourly, for a 24 hour summary, or: 12 hourly, for a 12 hour weather summary.
     * @return NOAA_WeatherByCitiesSummarized_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the NumberOfDays input for this WeatherByCitiesSummarized Choreo.
     *
     * @param int $value (optional, integer) Specify the number of days to retieve data for. If null, data from the earliest date in the dabase is returned.
     * @return NOAA_WeatherByCitiesSummarized_Inputs For method chaining.
     */
    public function setNumberOfDays($value)
    {
        return $this->set('NumberOfDays', $value);
    }

    /**
     * Set the value for the StartDate input for this WeatherByCitiesSummarized Choreo.
     *
     * @param string $value (optional, date) Enter the start time for retrieval of NDWD information in UTC format. If null, the earliest date in the database is returned. Format: 2004-04-27T12:00.
     * @return NOAA_WeatherByCitiesSummarized_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Unit input for this WeatherByCitiesSummarized Choreo.
     *
     * @param string $value (optional, string) Enter the unit format the data will be displayed in. Default is: e, for Standard English (U.S. Standard).  Or: m, for Metric (SI Units).
     * @return NOAA_WeatherByCitiesSummarized_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the WeatherByCitiesSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCitiesSummarized_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WeatherByCitiesSummarized Choreo.
     *
     * @param Temboo_Session $session The session that owns this WeatherByCitiesSummarized execution.
     * @param NOAA_WeatherByCitiesSummarized $choreo The choreography object for this execution.
     * @param NOAA_WeatherByCitiesSummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherByCitiesSummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherByCitiesSummarized_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NOAA_WeatherByCitiesSummarized $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WeatherByCitiesSummarized execution.
     *
     * @return NOAA_WeatherByCitiesSummarized_Results New results object.
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
     * Wraps results in appropriate results class for this WeatherByCitiesSummarized execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NOAA_WeatherByCitiesSummarized_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NOAA_WeatherByCitiesSummarized_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WeatherByCitiesSummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherByCitiesSummarized_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WeatherByCitiesSummarized Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NOAA_WeatherByCitiesSummarized_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this WeatherByCitiesSummarized execution.
     *
     * @return string (xml) Response from NDFD servers.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve unsummarized weather information for a single point defined by latitude and longitude coordinates.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForSinglePointUnsummarized extends Temboo_Choreography
{
    /**
     * Retrieve unsummarized weather information for a single point defined by latitude and longitude coordinates.
     *
     * @param Temboo_Session $session The session that owns this WeatherForSinglePointUnsummarized Choreo.
     * @return NOAA_WeatherForSinglePointUnsummarized New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NOAA/WeatherForSinglePointUnsummarized/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this WeatherForSinglePointUnsummarized Choreo.
     *
     * @param NOAA_WeatherForSinglePointUnsummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherForSinglePointUnsummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherForSinglePointUnsummarized_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NOAA_WeatherForSinglePointUnsummarized_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this WeatherForSinglePointUnsummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NOAA_WeatherForSinglePointUnsummarized_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the WeatherForSinglePointUnsummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForSinglePointUnsummarized_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the WeatherForSinglePointUnsummarized Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this WeatherForSinglePointUnsummarized input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the EndDate input for this WeatherForSinglePointUnsummarized Choreo.
     *
     * @param string $value (optional, date) Enter the end time for retrieval of NDWD information in UTC format. If null, the last available time in the database is returned. Format: 2004-04-27T12:00.
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Latitude input for this WeatherForSinglePointUnsummarized Choreo.
     *
     * @param float $value (required, decimal) Enter the latitude coordinate of the point for which weather data is requested. North latitude is positive.
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this WeatherForSinglePointUnsummarized Choreo.
     *
     * @param float $value (required, decimal) Enter the longitude coordinate of the point for which weather data is requested. West longitude is negative.
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Product input for this WeatherForSinglePointUnsummarized Choreo.
     *
     * @param string $value (required, string) Enter one of two parameters: time-series (to return all data between the Begin and End time parameters); glance for a subset of 5 often used parameters
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs For method chaining.
     */
    public function setProduct($value)
    {
        return $this->set('Product', $value);
    }

    /**
     * Set the value for the StartDate input for this WeatherForSinglePointUnsummarized Choreo.
     *
     * @param string $value (optional, date) Enter the start time for retrieval of NDWD information in UTC format. If null, the earliest time in the database is returned. Format: 2004-04-27T12:00.
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Unit input for this WeatherForSinglePointUnsummarized Choreo.
     *
     * @param string $value (optional, string) Enter the unit format the data will be displayed in. Default is: e, for Standard English (U.S. Standard).  Or: m, for Metric (SI Units).
     * @return NOAA_WeatherForSinglePointUnsummarized_Inputs For method chaining.
     */
    public function setUnit($value)
    {
        return $this->set('Unit', $value);
    }
}


/**
 * Execution object for the WeatherForSinglePointUnsummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForSinglePointUnsummarized_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the WeatherForSinglePointUnsummarized Choreo.
     *
     * @param Temboo_Session $session The session that owns this WeatherForSinglePointUnsummarized execution.
     * @param NOAA_WeatherForSinglePointUnsummarized $choreo The choreography object for this execution.
     * @param NOAA_WeatherForSinglePointUnsummarized_Inputs|array $inputs (optional) Inputs as NOAA_WeatherForSinglePointUnsummarized_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_WeatherForSinglePointUnsummarized_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NOAA_WeatherForSinglePointUnsummarized $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this WeatherForSinglePointUnsummarized execution.
     *
     * @return NOAA_WeatherForSinglePointUnsummarized_Results New results object.
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
     * Wraps results in appropriate results class for this WeatherForSinglePointUnsummarized execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NOAA_WeatherForSinglePointUnsummarized_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NOAA_WeatherForSinglePointUnsummarized_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the WeatherForSinglePointUnsummarized Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_WeatherForSinglePointUnsummarized_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the WeatherForSinglePointUnsummarized Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NOAA_WeatherForSinglePointUnsummarized_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this WeatherForSinglePointUnsummarized execution.
     *
     * @return string (xml) Response from NDFD servers.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve latitude and longitude data for a specified zipcode (in 50 U.S. States and Puerto Rico).
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_ListCoordinatesForZipcode extends Temboo_Choreography
{
    /**
     * Retrieve latitude and longitude data for a specified zipcode (in 50 U.S. States and Puerto Rico).
     *
     * @param Temboo_Session $session The session that owns this ListCoordinatesForZipcode Choreo.
     * @return NOAA_ListCoordinatesForZipcode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/NOAA/ListCoordinatesForZipcode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCoordinatesForZipcode Choreo.
     *
     * @param NOAA_ListCoordinatesForZipcode_Inputs|array $inputs (optional) Inputs as NOAA_ListCoordinatesForZipcode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_ListCoordinatesForZipcode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new NOAA_ListCoordinatesForZipcode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCoordinatesForZipcode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_ListCoordinatesForZipcode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new NOAA_ListCoordinatesForZipcode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCoordinatesForZipcode Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_ListCoordinatesForZipcode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCoordinatesForZipcode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return NOAA_ListCoordinatesForZipcode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCoordinatesForZipcode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return NOAA_ListCoordinatesForZipcode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return NOAA_ListCoordinatesForZipcode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ListZipCodeList input for this ListCoordinatesForZipcode Choreo.
     *
     * @param int $value (integer) Enter the zipcode for which latitude and longitude coordinates will be retrieved.
     * @return NOAA_ListCoordinatesForZipcode_Inputs For method chaining.
     */
    public function setListZipCodeList($value)
    {
        return $this->set('ListZipCodeList', $value);
    }
}


/**
 * Execution object for the ListCoordinatesForZipcode Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_ListCoordinatesForZipcode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCoordinatesForZipcode Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCoordinatesForZipcode execution.
     * @param NOAA_ListCoordinatesForZipcode $choreo The choreography object for this execution.
     * @param NOAA_ListCoordinatesForZipcode_Inputs|array $inputs (optional) Inputs as NOAA_ListCoordinatesForZipcode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return NOAA_ListCoordinatesForZipcode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, NOAA_ListCoordinatesForZipcode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCoordinatesForZipcode execution.
     *
     * @return NOAA_ListCoordinatesForZipcode_Results New results object.
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
     * Wraps results in appropriate results class for this ListCoordinatesForZipcode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return NOAA_ListCoordinatesForZipcode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new NOAA_ListCoordinatesForZipcode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCoordinatesForZipcode Choreo.
 *
 * @package Temboo
 * @subpackage NOAA
 */
class NOAA_ListCoordinatesForZipcode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCoordinatesForZipcode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return NOAA_ListCoordinatesForZipcode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListCoordinatesForZipcode execution.
     *
     * @return string (XML) Response from NDFD servers.
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
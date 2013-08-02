<?php

/**
 * Temboo PHP SDK DataGov classes
 *
 * Execute Choreographies from the Temboo DataGov bundle.
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
 * @subpackage DataGov
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieve demographic data for a specified geography type and geography ID.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsByTypeAndID extends Temboo_Choreography
{
    /**
     * Retrieve demographic data for a specified geography type and geography ID.
     *
     * @param Temboo_Session $session The session that owns this GetDemographicsByTypeAndID Choreo.
     * @return DataGov_GetDemographicsByTypeAndID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DataGov/GetDemographicsByTypeAndID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDemographicsByTypeAndID Choreo.
     *
     * @param DataGov_GetDemographicsByTypeAndID_Inputs|array $inputs (optional) Inputs as DataGov_GetDemographicsByTypeAndID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetDemographicsByTypeAndID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DataGov_GetDemographicsByTypeAndID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDemographicsByTypeAndID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetDemographicsByTypeAndID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DataGov_GetDemographicsByTypeAndID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDemographicsByTypeAndID Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsByTypeAndID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDemographicsByTypeAndID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetDemographicsByTypeAndID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDemographicsByTypeAndID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DataGov_GetDemographicsByTypeAndID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DataGov_GetDemographicsByTypeAndID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DataVersion input for this GetDemographicsByTypeAndID Choreo.
     *
     * @param string $value (optional, string) Specify the census data version to search, such as "jun2011" (the default).
     * @return DataGov_GetDemographicsByTypeAndID_Inputs For method chaining.
     */
    public function setDataVersion($value)
    {
        return $this->set('DataVersion', $value);
    }

    /**
     * Set the value for the GeographyIDs input for this GetDemographicsByTypeAndID Choreo.
     *
     * @param int $value (conditional, integer) The geography IDs to search for. Separate multiple IDs by commas; a maximum of 10 IDs are allowed.
     * @return DataGov_GetDemographicsByTypeAndID_Inputs For method chaining.
     */
    public function setGeographyIDs($value)
    {
        return $this->set('GeographyIDs', $value);
    }

    /**
     * Set the value for the GeographyType input for this GetDemographicsByTypeAndID Choreo.
     *
     * @param string $value (required, string) Specify one of the following geography type values: "state", "county", "tract", "block", "congdistrict", "statehouse", "statesenate", "censusplace", or "msa" (metropolitan statistical area).
     * @return DataGov_GetDemographicsByTypeAndID_Inputs For method chaining.
     */
    public function setGeographyType($value)
    {
        return $this->set('GeographyType', $value);
    }
}


/**
 * Execution object for the GetDemographicsByTypeAndID Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsByTypeAndID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDemographicsByTypeAndID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDemographicsByTypeAndID execution.
     * @param DataGov_GetDemographicsByTypeAndID $choreo The choreography object for this execution.
     * @param DataGov_GetDemographicsByTypeAndID_Inputs|array $inputs (optional) Inputs as DataGov_GetDemographicsByTypeAndID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetDemographicsByTypeAndID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DataGov_GetDemographicsByTypeAndID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDemographicsByTypeAndID execution.
     *
     * @return DataGov_GetDemographicsByTypeAndID_Results New results object.
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
     * Wraps results in appropriate results class for this GetDemographicsByTypeAndID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DataGov_GetDemographicsByTypeAndID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DataGov_GetDemographicsByTypeAndID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDemographicsByTypeAndID Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsByTypeAndID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDemographicsByTypeAndID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DataGov_GetDemographicsByTypeAndID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDemographicsByTypeAndID execution.
     *
     * @return string (xml) The response returned from the API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the U.S. census ID for a specified geography type and name.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetCensusIDByTypeAndName extends Temboo_Choreography
{
    /**
     * Retrieve the U.S. census ID for a specified geography type and name.
     *
     * @param Temboo_Session $session The session that owns this GetCensusIDByTypeAndName Choreo.
     * @return DataGov_GetCensusIDByTypeAndName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DataGov/GetCensusIDByTypeAndName/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCensusIDByTypeAndName Choreo.
     *
     * @param DataGov_GetCensusIDByTypeAndName_Inputs|array $inputs (optional) Inputs as DataGov_GetCensusIDByTypeAndName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetCensusIDByTypeAndName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DataGov_GetCensusIDByTypeAndName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCensusIDByTypeAndName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetCensusIDByTypeAndName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DataGov_GetCensusIDByTypeAndName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCensusIDByTypeAndName Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetCensusIDByTypeAndName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCensusIDByTypeAndName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetCensusIDByTypeAndName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCensusIDByTypeAndName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DataGov_GetCensusIDByTypeAndName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DataGov_GetCensusIDByTypeAndName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the GeographyName input for this GetCensusIDByTypeAndName Choreo.
     *
     * @param string $value (required, string) Specify the geography name for the correspnding type, with at least three leading characters. For example, for the geography type "state" you could enter "ore" for Oregon.
     * @return DataGov_GetCensusIDByTypeAndName_Inputs For method chaining.
     */
    public function setGeographyName($value)
    {
        return $this->set('GeographyName', $value);
    }

    /**
     * Set the value for the GeographyType input for this GetCensusIDByTypeAndName Choreo.
     *
     * @param string $value (required, string) Specify one of the following geography type values: "state", "county", "tract", "block", "congdistrict", "statehouse", "statesenate", "censusplace", or "msa" (metropolitan statistical area).
     * @return DataGov_GetCensusIDByTypeAndName_Inputs For method chaining.
     */
    public function setGeographyType($value)
    {
        return $this->set('GeographyType', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetCensusIDByTypeAndName Choreo.
     *
     * @param int $value (required, integer) Specify the maximum number of results to return. Defaults to 50.
     * @return DataGov_GetCensusIDByTypeAndName_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }
}


/**
 * Execution object for the GetCensusIDByTypeAndName Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetCensusIDByTypeAndName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCensusIDByTypeAndName Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCensusIDByTypeAndName execution.
     * @param DataGov_GetCensusIDByTypeAndName $choreo The choreography object for this execution.
     * @param DataGov_GetCensusIDByTypeAndName_Inputs|array $inputs (optional) Inputs as DataGov_GetCensusIDByTypeAndName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetCensusIDByTypeAndName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DataGov_GetCensusIDByTypeAndName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCensusIDByTypeAndName execution.
     *
     * @return DataGov_GetCensusIDByTypeAndName_Results New results object.
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
     * Wraps results in appropriate results class for this GetCensusIDByTypeAndName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DataGov_GetCensusIDByTypeAndName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DataGov_GetCensusIDByTypeAndName_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCensusIDByTypeAndName Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetCensusIDByTypeAndName_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCensusIDByTypeAndName Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DataGov_GetCensusIDByTypeAndName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "CensusID" output from this GetCensusIDByTypeAndName execution.
     *
     * @return int (integer) The ID retrieved from the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCensusID()
    {
        return $this->get('CensusID');
    }
    /**
     * Retrieve the value for the "Response" output from this GetCensusIDByTypeAndName execution.
     *
     * @return string (xml) The response returned from the API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve demographic information for specified geographical coordinates.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsByCoordinates extends Temboo_Choreography
{
    /**
     * Retrieve demographic information for specified geographical coordinates.
     *
     * @param Temboo_Session $session The session that owns this GetDemographicsByCoordinates Choreo.
     * @return DataGov_GetDemographicsByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DataGov/GetDemographicsByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDemographicsByCoordinates Choreo.
     *
     * @param DataGov_GetDemographicsByCoordinates_Inputs|array $inputs (optional) Inputs as DataGov_GetDemographicsByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetDemographicsByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DataGov_GetDemographicsByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDemographicsByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetDemographicsByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DataGov_GetDemographicsByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDemographicsByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDemographicsByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetDemographicsByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDemographicsByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DataGov_GetDemographicsByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DataGov_GetDemographicsByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DataVersion input for this GetDemographicsByCoordinates Choreo.
     *
     * @param string $value (optional, string) Specify the data version to search, such as "jun2011" (the default).
     * @return DataGov_GetDemographicsByCoordinates_Inputs For method chaining.
     */
    public function setDataVersion($value)
    {
        return $this->set('DataVersion', $value);
    }

    /**
     * Set the value for the Latitude input for this GetDemographicsByCoordinates Choreo.
     *
     * @param float $value (required, decimal) Specify a latitude to search for, such as "41.486857".
     * @return DataGov_GetDemographicsByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GetDemographicsByCoordinates Choreo.
     *
     * @param float $value (required, decimal) Specify a longitude to search for, such as "-71.294392".
     * @return DataGov_GetDemographicsByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }
}


/**
 * Execution object for the GetDemographicsByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDemographicsByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDemographicsByCoordinates execution.
     * @param DataGov_GetDemographicsByCoordinates $choreo The choreography object for this execution.
     * @param DataGov_GetDemographicsByCoordinates_Inputs|array $inputs (optional) Inputs as DataGov_GetDemographicsByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetDemographicsByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DataGov_GetDemographicsByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDemographicsByCoordinates execution.
     *
     * @return DataGov_GetDemographicsByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this GetDemographicsByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DataGov_GetDemographicsByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DataGov_GetDemographicsByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDemographicsByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDemographicsByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DataGov_GetDemographicsByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDemographicsByCoordinates execution.
     *
     * @return string (xml) The response returned from the API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve demographic information for the entire nation.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsForNation extends Temboo_Choreography
{
    /**
     * Retrieve demographic information for the entire nation.
     *
     * @param Temboo_Session $session The session that owns this GetDemographicsForNation Choreo.
     * @return DataGov_GetDemographicsForNation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DataGov/GetDemographicsForNation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDemographicsForNation Choreo.
     *
     * @param DataGov_GetDemographicsForNation_Inputs|array $inputs (optional) Inputs as DataGov_GetDemographicsForNation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetDemographicsForNation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DataGov_GetDemographicsForNation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDemographicsForNation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetDemographicsForNation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DataGov_GetDemographicsForNation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDemographicsForNation Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsForNation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDemographicsForNation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetDemographicsForNation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDemographicsForNation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DataGov_GetDemographicsForNation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DataGov_GetDemographicsForNation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DataVersion input for this GetDemographicsForNation Choreo.
     *
     * @param string $value (optional, string) Specify the census data version to search, such as "jun2011" (the default).
     * @return DataGov_GetDemographicsForNation_Inputs For method chaining.
     */
    public function setDataVersion($value)
    {
        return $this->set('DataVersion', $value);
    }
}


/**
 * Execution object for the GetDemographicsForNation Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsForNation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDemographicsForNation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDemographicsForNation execution.
     * @param DataGov_GetDemographicsForNation $choreo The choreography object for this execution.
     * @param DataGov_GetDemographicsForNation_Inputs|array $inputs (optional) Inputs as DataGov_GetDemographicsForNation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetDemographicsForNation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DataGov_GetDemographicsForNation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDemographicsForNation execution.
     *
     * @return DataGov_GetDemographicsForNation_Results New results object.
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
     * Wraps results in appropriate results class for this GetDemographicsForNation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DataGov_GetDemographicsForNation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DataGov_GetDemographicsForNation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDemographicsForNation Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetDemographicsForNation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDemographicsForNation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DataGov_GetDemographicsForNation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDemographicsForNation execution.
     *
     * @return string (xml) The response returned from the API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the U.S. census block geography ID for a specified latitude and longitude. 
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetCensusIDByCoordinates extends Temboo_Choreography
{
    /**
     * Retrieve the U.S. census block geography ID for a specified latitude and longitude. 
     *
     * @param Temboo_Session $session The session that owns this GetCensusIDByCoordinates Choreo.
     * @return DataGov_GetCensusIDByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DataGov/GetCensusIDByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCensusIDByCoordinates Choreo.
     *
     * @param DataGov_GetCensusIDByCoordinates_Inputs|array $inputs (optional) Inputs as DataGov_GetCensusIDByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetCensusIDByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DataGov_GetCensusIDByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCensusIDByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetCensusIDByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DataGov_GetCensusIDByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCensusIDByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetCensusIDByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCensusIDByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DataGov_GetCensusIDByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCensusIDByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DataGov_GetCensusIDByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DataGov_GetCensusIDByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the GeographyType input for this GetCensusIDByCoordinates Choreo.
     *
     * @param string $value (required, string) Specify one of the following geography type values: "state", "county", "tract", "block", "congdistrict", "statehouse", "statesenate", "censusplace", or "msa" (metropolitan statistical area).
     * @return DataGov_GetCensusIDByCoordinates_Inputs For method chaining.
     */
    public function setGeographyType($value)
    {
        return $this->set('GeographyType', $value);
    }

    /**
     * Set the value for the Latitude input for this GetCensusIDByCoordinates Choreo.
     *
     * @param float $value (required, decimal) Specify a latitude to search for, such as "41.486857".
     * @return DataGov_GetCensusIDByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GetCensusIDByCoordinates Choreo.
     *
     * @param float $value (required, decimal) Specify a longitude to search for, such as "-71.294392".
     * @return DataGov_GetCensusIDByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }
}


/**
 * Execution object for the GetCensusIDByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetCensusIDByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCensusIDByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCensusIDByCoordinates execution.
     * @param DataGov_GetCensusIDByCoordinates $choreo The choreography object for this execution.
     * @param DataGov_GetCensusIDByCoordinates_Inputs|array $inputs (optional) Inputs as DataGov_GetCensusIDByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DataGov_GetCensusIDByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DataGov_GetCensusIDByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCensusIDByCoordinates execution.
     *
     * @return DataGov_GetCensusIDByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this GetCensusIDByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DataGov_GetCensusIDByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DataGov_GetCensusIDByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCensusIDByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage DataGov
 */
class DataGov_GetCensusIDByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCensusIDByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DataGov_GetCensusIDByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "CensusID" output from this GetCensusIDByCoordinates execution.
     *
     * @return int (integer) The ID retrieved from the API call.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCensusID()
    {
        return $this->get('CensusID');
    }
    /**
     * Retrieve the value for the "Response" output from this GetCensusIDByCoordinates execution.
     *
     * @return string (xml) The response returned from the API.
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
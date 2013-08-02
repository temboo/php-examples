<?php

/**
 * Temboo PHP SDK Genability classes
 *
 * Execute Choreographies from the Temboo Genability bundle.
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
 * @subpackage Genability
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns an individual Property Key using a given key name.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetPropertyKey extends Temboo_Choreography
{
    /**
     * Returns an individual Property Key using a given key name.
     *
     * @param Temboo_Session $session The session that owns this GetPropertyKey Choreo.
     * @return Genability_TariffData_GetPropertyKey New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetPropertyKey/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPropertyKey Choreo.
     *
     * @param Genability_TariffData_GetPropertyKey_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetPropertyKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetPropertyKey_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetPropertyKey_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPropertyKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetPropertyKey_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetPropertyKey_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPropertyKey Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetPropertyKey_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPropertyKey Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetPropertyKey_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPropertyKey input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetPropertyKey_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetPropertyKey_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetPropertyKey Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetPropertyKey_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetPropertyKey Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetPropertyKey_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the KeyName input for this GetPropertyKey Choreo.
     *
     * @param string $value (required, string) The key name for the property key you want to return.
     * @return Genability_TariffData_GetPropertyKey_Inputs For method chaining.
     */
    public function setKeyName($value)
    {
        return $this->set('KeyName', $value);
    }
}


/**
 * Execution object for the GetPropertyKey Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetPropertyKey_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPropertyKey Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPropertyKey execution.
     * @param Genability_TariffData_GetPropertyKey $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetPropertyKey_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetPropertyKey_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetPropertyKey_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetPropertyKey $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPropertyKey execution.
     *
     * @return Genability_TariffData_GetPropertyKey_Results New results object.
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
     * Wraps results in appropriate results class for this GetPropertyKey execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetPropertyKey_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetPropertyKey_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPropertyKey Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetPropertyKey_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPropertyKey Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetPropertyKey_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPropertyKey execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Territory objects based a specified search criteria.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTerritories extends Temboo_Choreography
{
    /**
     * Returns a list of Territory objects based a specified search criteria.
     *
     * @param Temboo_Session $session The session that owns this GetTerritories Choreo.
     * @return Genability_TariffData_GetTerritories New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetTerritories/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTerritories Choreo.
     *
     * @param Genability_TariffData_GetTerritories_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTerritories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTerritories_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetTerritories_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTerritories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTerritories_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetTerritories_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTerritories Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTerritories_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTerritories Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTerritories_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTerritories input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTerritories Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetTerritories Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the ContainsItemType input for this GetTerritories Choreo.
     *
     * @param string $value (optional, string) Filters the result set to include a particular type of territory. Valid values are: CITY, ZIPCODE, STATE, COUNTY.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setContainsItemType($value)
    {
        return $this->set('ContainsItemType', $value);
    }

    /**
     * Set the value for the ContainsItemValue input for this GetTerritories Choreo.
     *
     * @param string $value (optional, string) Used in combination with the ContainsItemType value. Filters the Types by this value.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setContainsItemValue($value)
    {
        return $this->set('ContainsItemValue', $value);
    }

    /**
     * Set the value for the EndsWith input for this GetTerritories Choreo.
     *
     * @param string $value (optional, string) When true, the search will only return results that end with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setEndsWith($value)
    {
        return $this->set('EndsWith', $value);
    }

    /**
     * Set the value for the IsRegex input for this GetTerritories Choreo.
     *
     * @param bool $value (optional, boolean) When true, the provided search string will be regarded as a regular expression and the search will return results matching the regular expression.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setIsRegex($value)
    {
        return $this->set('IsRegex', $value);
    }

    /**
     * Set the value for the LSEID input for this GetTerritories Choreo.
     *
     * @param int $value (optional, integer) Filters the result set to only include territories within this LSE ID.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setLSEID($value)
    {
        return $this->set('LSEID', $value);
    }

    /**
     * Set the value for the MasterTariffID input for this GetTerritories Choreo.
     *
     * @param int $value (optional, integer) For tariffs with prices varying by geographic location, this will return the list of those territories covered by this tariff.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setMasterTariffID($value)
    {
        return $this->set('MasterTariffID', $value);
    }

    /**
     * Set the value for the PageCount input for this GetTerritories Choreo.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 25.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetTerritories Choreo.
     *
     * @param int $value (optional, integer) The page number to begin the result set from. Defaults to 1.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }

    /**
     * Set the value for the PopulateItems input for this GetTerritories Choreo.
     *
     * @param bool $value (optional, boolean) If set to "true", returns a list of territory items for each territory in the result set.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setPopulateItems($value)
    {
        return $this->set('PopulateItems', $value);
    }

    /**
     * Set the value for the PopulateLSES input for this GetTerritories Choreo.
     *
     * @param string $value (optional, string) If set to "true", the response includes a list of TerritoryLses which are all the LSEs providing service in this territory.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setPopulateLSES($value)
    {
        return $this->set('PopulateLSES', $value);
    }

    /**
     * Set the value for the SearchOn input for this GetTerritories Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to query on. When searchOn is specified, the text provided in the search string field will be searched within these fields.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setSearchOn($value)
    {
        return $this->set('SearchOn', $value);
    }

    /**
     * Set the value for the Search input for this GetTerritories Choreo.
     *
     * @param string $value (optional, string) The string of text to search on. This can also be a regular expression, in which case you should set the 'isRegex' flag to true.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setSearch($value)
    {
        return $this->set('Search', $value);
    }

    /**
     * Set the value for the SortOn input for this GetTerritories Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to sort on.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setSortOn($value)
    {
        return $this->set('SortOn', $value);
    }

    /**
     * Set the value for the SortOrder input for this GetTerritories Choreo.
     *
     * @param string $value (optional, string) Comma separated list of ordering. Possible values are 'ASC' and 'DESC'. Default is 'ASC'. This list corresponds to the field list used in the SortOn input.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartsWith input for this GetTerritories Choreo.
     *
     * @param bool $value (optional, boolean) When true, the search will only return results that begin with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setStartsWith($value)
    {
        return $this->set('StartsWith', $value);
    }

    /**
     * Set the value for the UsageTypes input for this GetTerritories Choreo.
     *
     * @param string $value (optional, string) Filters the result set to only include territories of the specified usageType. valid values are: SERVICE, TARIFF.
     * @return Genability_TariffData_GetTerritories_Inputs For method chaining.
     */
    public function setUsageTypes($value)
    {
        return $this->set('UsageTypes', $value);
    }
}


/**
 * Execution object for the GetTerritories Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTerritories_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTerritories Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTerritories execution.
     * @param Genability_TariffData_GetTerritories $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetTerritories_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTerritories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTerritories_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetTerritories $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTerritories execution.
     *
     * @return Genability_TariffData_GetTerritories_Results New results object.
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
     * Wraps results in appropriate results class for this GetTerritories execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetTerritories_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetTerritories_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTerritories Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTerritories_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTerritories Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetTerritories_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTerritories execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the details for a given zip code.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetZipCodeDetails extends Temboo_Choreography
{
    /**
     * Returns the details for a given zip code.
     *
     * @param Temboo_Session $session The session that owns this GetZipCodeDetails Choreo.
     * @return Genability_TariffData_GetZipCodeDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetZipCodeDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetZipCodeDetails Choreo.
     *
     * @param Genability_TariffData_GetZipCodeDetails_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetZipCodeDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetZipCodeDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetZipCodeDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetZipCodeDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetZipCodeDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetZipCodeDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetZipCodeDetails Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetZipCodeDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetZipCodeDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetZipCodeDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetZipCodeDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetZipCodeDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetZipCodeDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetZipCodeDetails Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetZipCodeDetails_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetZipCodeDetails Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetZipCodeDetails_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the PageCount input for this GetZipCodeDetails Choreo.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 25.
     * @return Genability_TariffData_GetZipCodeDetails_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetZipCodeDetails Choreo.
     *
     * @param int $value (optional, integer) The page number to begin the result set from. Defaults to 1.
     * @return Genability_TariffData_GetZipCodeDetails_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }

    /**
     * Set the value for the ZipCode input for this GetZipCodeDetails Choreo.
     *
     * @param string $value (optional, string) A zip code to search with.
     * @return Genability_TariffData_GetZipCodeDetails_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the GetZipCodeDetails Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetZipCodeDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetZipCodeDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetZipCodeDetails execution.
     * @param Genability_TariffData_GetZipCodeDetails $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetZipCodeDetails_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetZipCodeDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetZipCodeDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetZipCodeDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetZipCodeDetails execution.
     *
     * @return Genability_TariffData_GetZipCodeDetails_Results New results object.
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
     * Wraps results in appropriate results class for this GetZipCodeDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetZipCodeDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetZipCodeDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetZipCodeDetails Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetZipCodeDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetZipCodeDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetZipCodeDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetZipCodeDetails execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a place object and associated facts and metrics with a given zip code.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetMetricsForZipCode extends Temboo_Choreography
{
    /**
     * Returns a place object and associated facts and metrics with a given zip code.
     *
     * @param Temboo_Session $session The session that owns this GetMetricsForZipCode Choreo.
     * @return Genability_TariffData_GetMetricsForZipCode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetMetricsForZipCode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMetricsForZipCode Choreo.
     *
     * @param Genability_TariffData_GetMetricsForZipCode_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetMetricsForZipCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetMetricsForZipCode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetMetricsForZipCode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMetricsForZipCode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetMetricsForZipCode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetMetricsForZipCode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMetricsForZipCode Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetMetricsForZipCode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMetricsForZipCode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetMetricsForZipCode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMetricsForZipCode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetMetricsForZipCode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetMetricsForZipCode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetMetricsForZipCode Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetMetricsForZipCode_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetMetricsForZipCode Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetMetricsForZipCode_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the ZipCode input for this GetMetricsForZipCode Choreo.
     *
     * @param string $value (optional, string) The zip code for the place object you want to return.
     * @return Genability_TariffData_GetMetricsForZipCode_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the GetMetricsForZipCode Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetMetricsForZipCode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMetricsForZipCode Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMetricsForZipCode execution.
     * @param Genability_TariffData_GetMetricsForZipCode $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetMetricsForZipCode_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetMetricsForZipCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetMetricsForZipCode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetMetricsForZipCode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMetricsForZipCode execution.
     *
     * @return Genability_TariffData_GetMetricsForZipCode_Results New results object.
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
     * Wraps results in appropriate results class for this GetMetricsForZipCode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetMetricsForZipCode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetMetricsForZipCode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMetricsForZipCode Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetMetricsForZipCode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMetricsForZipCode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetMetricsForZipCode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMetricsForZipCode execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns an individual Tariff object with a given id.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTariff extends Temboo_Choreography
{
    /**
     * Returns an individual Tariff object with a given id.
     *
     * @param Temboo_Session $session The session that owns this GetTariff Choreo.
     * @return Genability_TariffData_GetTariff New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetTariff/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTariff Choreo.
     *
     * @param Genability_TariffData_GetTariff_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTariff_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTariff_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetTariff_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTariff Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTariff_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetTariff_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTariff Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTariff_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTariff Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTariff_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTariff input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetTariff_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetTariff_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTariff Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetTariff_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetTariff Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetTariff_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the MasterTariffID input for this GetTariff Choreo.
     *
     * @param int $value (required, integer) The master tariff id. This can be retrieved in the output of the GetTariffs Choreo.
     * @return Genability_TariffData_GetTariff_Inputs For method chaining.
     */
    public function setMasterTariffID($value)
    {
        return $this->set('MasterTariffID', $value);
    }

    /**
     * Set the value for the PopulateProperties input for this GetTariff Choreo.
     *
     * @param bool $value (optional, boolean) Set to "true" to populate the properties for the returned Tariffs.
     * @return Genability_TariffData_GetTariff_Inputs For method chaining.
     */
    public function setPopulateProperties($value)
    {
        return $this->set('PopulateProperties', $value);
    }

    /**
     * Set the value for the PopulateRates input for this GetTariff Choreo.
     *
     * @param bool $value (optional, boolean) Set to "true" to populate the rate details for the returned Tariffs.
     * @return Genability_TariffData_GetTariff_Inputs For method chaining.
     */
    public function setPopulateRates($value)
    {
        return $this->set('PopulateRates', $value);
    }
}


/**
 * Execution object for the GetTariff Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTariff_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTariff Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTariff execution.
     * @param Genability_TariffData_GetTariff $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetTariff_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTariff_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTariff_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetTariff $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTariff execution.
     *
     * @return Genability_TariffData_GetTariff_Results New results object.
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
     * Wraps results in appropriate results class for this GetTariff execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetTariff_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetTariff_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTariff Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTariff_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTariff Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetTariff_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTariff execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve summarized rates of a specified electricity tariff, in addition to changes in rates over a specified time span.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetTariffPrice extends Temboo_Choreography
{
    /**
     * Retrieve summarized rates of a specified electricity tariff, in addition to changes in rates over a specified time span.
     *
     * @param Temboo_Session $session The session that owns this GetTariffPrice Choreo.
     * @return Genability_PricingAndCalc_GetTariffPrice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/PricingAndCalc/GetTariffPrice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTariffPrice Choreo.
     *
     * @param Genability_PricingAndCalc_GetTariffPrice_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_GetTariffPrice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_GetTariffPrice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_PricingAndCalc_GetTariffPrice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTariffPrice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_PricingAndCalc_GetTariffPrice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTariffPrice Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetTariffPrice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTariffPrice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTariffPrice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this GetTariffPrice Choreo.
     *
     * @param string $value (optional, string) The Genability ID for an account. This is optional if MasterTariffID is set.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the AppID input for this GetTariffPrice Choreo.
     *
     * @param string $value (required, string) The App ID provided by Genability.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetTariffPrice Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the ConsumptionAmount input for this GetTariffPrice Choreo.
     *
     * @param float $value (optional, decimal) Specify a monthly consumption in kWh. By default the highest banded level of consumption is used.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setConsumptionAmount($value)
    {
        return $this->set('ConsumptionAmount', $value);
    }

    /**
     * Set the value for the DemandAmount input for this GetTariffPrice Choreo.
     *
     * @param float $value (optional, decimal) Specify a monthly demand in kWh. By default the highest banded level of demand is used.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setDemandAmount($value)
    {
        return $this->set('DemandAmount', $value);
    }

    /**
     * Set the value for the FromDateTime input for this GetTariffPrice Choreo.
     *
     * @param string $value (required, string) The date and time of the requested start of the price query. Must be in ISO 8601 format.  Example: 2012-06-12T00:00:00.0-0700
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setFromDateTime($value)
    {
        return $this->set('FromDateTime', $value);
    }

    /**
     * Set the value for the MasterTariffID input for this GetTariffPrice Choreo.
     *
     * @param string $value (optional, string) A Genability tariff ID. This variable is not required, if AccountID is set.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setMasterTariffID($value)
    {
        return $this->set('MasterTariffID', $value);
    }

    /**
     * Set the value for the PageCount input for this GetTariffPrice Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defailt is set to: 25.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetTariffPrice Choreo.
     *
     * @param int $value (optional, integer) The page number to start to display results from. If unspecified, the first page of results will be returned.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }

    /**
     * Set the value for the TerritoryID input for this GetTariffPrice Choreo.
     *
     * @param string $value (optional, string) Return rate changes for the specified Territory.
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setTerritoryID($value)
    {
        return $this->set('TerritoryID', $value);
    }

    /**
     * Set the value for the ToDateTime input for this GetTariffPrice Choreo.
     *
     * @param string $value (optional, string) The date and time of the requested start of the price query. Must be in ISO 8601 format.  Example: 2012-06-12T00:00:00.0-0700
     * @return Genability_PricingAndCalc_GetTariffPrice_Inputs For method chaining.
     */
    public function setToDateTime($value)
    {
        return $this->set('ToDateTime', $value);
    }
}


/**
 * Execution object for the GetTariffPrice Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetTariffPrice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTariffPrice Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTariffPrice execution.
     * @param Genability_PricingAndCalc_GetTariffPrice $choreo The choreography object for this execution.
     * @param Genability_PricingAndCalc_GetTariffPrice_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_GetTariffPrice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_GetTariffPrice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_PricingAndCalc_GetTariffPrice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTariffPrice execution.
     *
     * @return Genability_PricingAndCalc_GetTariffPrice_Results New results object.
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
     * Wraps results in appropriate results class for this GetTariffPrice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_PricingAndCalc_GetTariffPrice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_PricingAndCalc_GetTariffPrice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTariffPrice Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetTariffPrice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTariffPrice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_PricingAndCalc_GetTariffPrice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTariffPrice execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Property Keys based on a specified search criteria.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetPropertyKeys extends Temboo_Choreography
{
    /**
     * Returns a list of Property Keys based on a specified search criteria.
     *
     * @param Temboo_Session $session The session that owns this GetPropertyKeys Choreo.
     * @return Genability_TariffData_GetPropertyKeys New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetPropertyKeys/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPropertyKeys Choreo.
     *
     * @param Genability_TariffData_GetPropertyKeys_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetPropertyKeys_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetPropertyKeys_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetPropertyKeys_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPropertyKeys Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetPropertyKeys_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetPropertyKeys_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPropertyKeys Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetPropertyKeys_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPropertyKeys Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetPropertyKeys_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPropertyKeys input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetPropertyKeys_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetPropertyKeys_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetPropertyKeys Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetPropertyKeys_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetPropertyKeys Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetPropertyKeys_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the EntityID input for this GetPropertyKeys Choreo.
     *
     * @param string $value (optional, string) Filters the result so that only Properties that belong to this EntityID are returned. When specified, EntityType must also be specified.
     * @return Genability_TariffData_GetPropertyKeys_Inputs For method chaining.
     */
    public function setEntityID($value)
    {
        return $this->set('EntityID', $value);
    }

    /**
     * Set the value for the EntityType input for this GetPropertyKeys Choreo.
     *
     * @param string $value (optional, string) Filters the result so that only Properties that belong to this EntityType are returned. When specified, EntityID must also be specified.
     * @return Genability_TariffData_GetPropertyKeys_Inputs For method chaining.
     */
    public function setEntityType($value)
    {
        return $this->set('EntityType', $value);
    }

    /**
     * Set the value for the PageCount input for this GetPropertyKeys Choreo.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 25.
     * @return Genability_TariffData_GetPropertyKeys_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetPropertyKeys Choreo.
     *
     * @param int $value (optional, integer) The page number to begin the result set from. Defaults to 1.
     * @return Genability_TariffData_GetPropertyKeys_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }
}


/**
 * Execution object for the GetPropertyKeys Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetPropertyKeys_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPropertyKeys Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPropertyKeys execution.
     * @param Genability_TariffData_GetPropertyKeys $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetPropertyKeys_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetPropertyKeys_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetPropertyKeys_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetPropertyKeys $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPropertyKeys execution.
     *
     * @return Genability_TariffData_GetPropertyKeys_Results New results object.
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
     * Wraps results in appropriate results class for this GetPropertyKeys execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetPropertyKeys_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetPropertyKeys_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPropertyKeys Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetPropertyKeys_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPropertyKeys Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetPropertyKeys_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPropertyKeys execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all the Intervals for a Time of Use Group within a given date range.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTimeOfUseGroupIntervals extends Temboo_Choreography
{
    /**
     * Returns all the Intervals for a Time of Use Group within a given date range.
     *
     * @param Temboo_Session $session The session that owns this GetTimeOfUseGroupIntervals Choreo.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetTimeOfUseGroupIntervals/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetTimeOfUseGroupIntervals_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTimeOfUseGroupIntervals Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTimeOfUseGroupIntervals Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTimeOfUseGroupIntervals input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param string $value (required, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the FromDateTime input for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param string $value (optional, date) The starting date and time of the requested Intervals (in ISO 8601 format). Defaults to current date if not specified.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function setFromDateTime($value)
    {
        return $this->set('FromDateTime', $value);
    }

    /**
     * Set the value for the LSEID input for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param int $value (required, integer) Used to retrieve a TOU Group for a specific LSE.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function setLSEID($value)
    {
        return $this->set('LSEID', $value);
    }

    /**
     * Set the value for the PageCount input for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 25.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param int $value (optional, integer) The page number to begin the result set from. Defaults to 1.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }

    /**
     * Set the value for the TOUGroupID input for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param int $value (required, integer) Used to retrieve a TOU Group by its ID.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function setTOUGroupID($value)
    {
        return $this->set('TOUGroupID', $value);
    }

    /**
     * Set the value for the ToDateTime input for this GetTimeOfUseGroupIntervals Choreo.
     *
     * @param string $value (optional, date) The ending date and time of the requested Intervals (in ISO 8601 format). If not specified, defaults to one week ahead of the current date.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs For method chaining.
     */
    public function setToDateTime($value)
    {
        return $this->set('ToDateTime', $value);
    }
}


/**
 * Execution object for the GetTimeOfUseGroupIntervals Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTimeOfUseGroupIntervals_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTimeOfUseGroupIntervals Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTimeOfUseGroupIntervals execution.
     * @param Genability_TariffData_GetTimeOfUseGroupIntervals $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTimeOfUseGroupIntervals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetTimeOfUseGroupIntervals $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTimeOfUseGroupIntervals execution.
     *
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Results New results object.
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
     * Wraps results in appropriate results class for this GetTimeOfUseGroupIntervals execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetTimeOfUseGroupIntervals_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTimeOfUseGroupIntervals Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTimeOfUseGroupIntervals_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTimeOfUseGroupIntervals Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetTimeOfUseGroupIntervals_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTimeOfUseGroupIntervals execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Tariff objects based a specified search criteria.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTariffs extends Temboo_Choreography
{
    /**
     * Returns a list of Tariff objects based a specified search criteria.
     *
     * @param Temboo_Session $session The session that owns this GetTariffs Choreo.
     * @return Genability_TariffData_GetTariffs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetTariffs/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTariffs Choreo.
     *
     * @param Genability_TariffData_GetTariffs_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTariffs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTariffs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetTariffs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTariffs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTariffs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetTariffs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTariffs Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTariffs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTariffs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTariffs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTariffs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this GetTariffs Choreo.
     *
     * @param string $value (optional, string) The unique ID of the Account to find tariffs for. Values passed in will override those from the Account.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the AppID input for this GetTariffs Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetTariffs Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the CustomerClasses input for this GetTariffs Choreo.
     *
     * @param string $value (optional, string) Returns only these customer classes. Valid values are: RESIDENTIAL, GENERAL.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setCustomerClasses($value)
    {
        return $this->set('CustomerClasses', $value);
    }

    /**
     * Set the value for the EffectiveOn input for this GetTariffs Choreo.
     *
     * @param string $value (optional, date) Returns only tariffs that are effective on this date.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setEffectiveOn($value)
    {
        return $this->set('EffectiveOn', $value);
    }

    /**
     * Set the value for the EndsWith input for this GetTariffs Choreo.
     *
     * @param string $value (optional, string) When true, the search will only return results that end with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setEndsWith($value)
    {
        return $this->set('EndsWith', $value);
    }

    /**
     * Set the value for the FromDateTime input for this GetTariffs Choreo.
     *
     * @param string $value (optional, date) Returns only tariffs that are effective on or after this date.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setFromDateTime($value)
    {
        return $this->set('FromDateTime', $value);
    }

    /**
     * Set the value for the IsRegex input for this GetTariffs Choreo.
     *
     * @param bool $value (optional, boolean) When true, the provided search string will be regarded as a regular expression and the search will return results matching the regular expression.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setIsRegex($value)
    {
        return $this->set('IsRegex', $value);
    }

    /**
     * Set the value for the LSEID input for this GetTariffs Choreo.
     *
     * @param int $value (optional, integer) Filter tariffs for a specific LSE.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setLSEID($value)
    {
        return $this->set('LSEID', $value);
    }

    /**
     * Set the value for the PageCount input for this GetTariffs Choreo.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 25.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetTariffs Choreo.
     *
     * @param int $value (optional, integer) The page number to begin the result set from. Defaults to 1.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }

    /**
     * Set the value for the PopulateProperties input for this GetTariffs Choreo.
     *
     * @param bool $value (optional, boolean) Set to "true" to populate the properties for the returned Tariffs.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setPopulateProperties($value)
    {
        return $this->set('PopulateProperties', $value);
    }

    /**
     * Set the value for the PopulateRates input for this GetTariffs Choreo.
     *
     * @param bool $value (optional, boolean) Set to "true" to populate the rate details for the returned Tariffs.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setPopulateRates($value)
    {
        return $this->set('PopulateRates', $value);
    }

    /**
     * Set the value for the SearchOn input for this GetTariffs Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to query on. When searchOn is specified, the text provided in the search string field will be searched within these fields.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setSearchOn($value)
    {
        return $this->set('SearchOn', $value);
    }

    /**
     * Set the value for the Search input for this GetTariffs Choreo.
     *
     * @param string $value (optional, string) The string of text to search on. This can also be a regular expression, in which case you should set the 'isRegex' flag to true.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setSearch($value)
    {
        return $this->set('Search', $value);
    }

    /**
     * Set the value for the SortOn input for this GetTariffs Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to sort on.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setSortOn($value)
    {
        return $this->set('SortOn', $value);
    }

    /**
     * Set the value for the SortOrder input for this GetTariffs Choreo.
     *
     * @param string $value (optional, string) Comma separated list of ordering. Possible values are 'ASC' and 'DESC'. Default is 'ASC'. This list corresponds to the field list used in the SortOn input.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartsWith input for this GetTariffs Choreo.
     *
     * @param bool $value (optional, boolean) When true, the search will only return results that begin with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setStartsWith($value)
    {
        return $this->set('StartsWith', $value);
    }

    /**
     * Set the value for the TariffTypes input for this GetTariffs Choreo.
     *
     * @param string $value (optional, string) Returns only these tariff types. Valid values are: DEFAULT, ALTERNATIVE, OPTIONAL_EXTRA, RIDER.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setTariffTypes($value)
    {
        return $this->set('TariffTypes', $value);
    }

    /**
     * Set the value for the ToDateTime input for this GetTariffs Choreo.
     *
     * @param string $value (optional, date) Returns only tariffs that are effective on or before this date.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setToDateTime($value)
    {
        return $this->set('ToDateTime', $value);
    }

    /**
     * Set the value for the ZipCode input for this GetTariffs Choreo.
     *
     * @param string $value (optional, string) Return tariffs for a given zip or post code.
     * @return Genability_TariffData_GetTariffs_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the GetTariffs Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTariffs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTariffs Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTariffs execution.
     * @param Genability_TariffData_GetTariffs $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetTariffs_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTariffs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTariffs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetTariffs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTariffs execution.
     *
     * @return Genability_TariffData_GetTariffs_Results New results object.
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
     * Wraps results in appropriate results class for this GetTariffs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetTariffs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetTariffs_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTariffs Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTariffs_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTariffs Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetTariffs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTariffs execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve inputs required to run a calculation for the specified tariff, within a specified period of time.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_CalculateTariffInputMetaData extends Temboo_Choreography
{
    /**
     * Retrieve inputs required to run a calculation for the specified tariff, within a specified period of time.
     *
     * @param Temboo_Session $session The session that owns this CalculateTariffInputMetaData Choreo.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/PricingAndCalc/CalculateTariffInputMetaData/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CalculateTariffInputMetaData Choreo.
     *
     * @param Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_PricingAndCalc_CalculateTariffInputMetaData_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CalculateTariffInputMetaData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CalculateTariffInputMetaData Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CalculateTariffInputMetaData Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CalculateTariffInputMetaData input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (required, string) The App ID provided by Genability.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the BillingPeriod input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (optional, string) Specify whether results retireved should be based on a billing period, or not.  Default is set to: false.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setBillingPeriod($value)
    {
        return $this->set('BillingPeriod', $value);
    }

    /**
     * Set the value for the CityLimits input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (optional, string) Specify whether electricity pricing information should be restricted to city limits, or not.  Example input value: Inside.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setCityLimits($value)
    {
        return $this->set('CityLimits', $value);
    }

    /**
     * Set the value for the ConnectionType input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (optional, string) The connection type.  For example: Primary.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setConnectionType($value)
    {
        return $this->set('ConnectionType', $value);
    }

    /**
     * Set the value for the FromDateTime input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (required, string) The date and time of the requested start of the price query. Must be in ISO 8601 format.  Example: 2012-06-12T00:00:00.0-0700
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setFromDateTime($value)
    {
        return $this->set('FromDateTime', $value);
    }

    /**
     * Set the value for the GroupBy input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (optional, string) Specify how calculation details are displayed.  For example retrieved details can be grouped by month, or year. Options include: Daily, Weekly, Month, Year.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setGroupBy($value)
    {
        return $this->set('GroupBy', $value);
    }

    /**
     * Set the value for the KeyName input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (optional, string) An applicability value.  If an error is returned, indicating the need for an extra applicability parameter, use this variable to set the parameter name.  For example: territoryID.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setKeyName($value)
    {
        return $this->set('KeyName', $value);
    }

    /**
     * Set the value for the KeyValue input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (conditional, string) The value for the specified KeyName variable. For example if KeyName is set to territoryID, you could provide 3385 for the KeyValue input.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setKeyValue($value)
    {
        return $this->set('KeyValue', $value);
    }

    /**
     * Set the value for the MasterTariffID input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (required, string) A Genability tariff ID.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setMasterTariffID($value)
    {
        return $this->set('MasterTariffID', $value);
    }

    /**
     * Set the value for the ToDateTime input for this CalculateTariffInputMetaData Choreo.
     *
     * @param string $value (required, string) The date and time of the requested start of the price query. Must be in ISO 8601 format.  Example: 2012-06-12T00:00:00.0-0700
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs For method chaining.
     */
    public function setToDateTime($value)
    {
        return $this->set('ToDateTime', $value);
    }
}


/**
 * Execution object for the CalculateTariffInputMetaData Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_CalculateTariffInputMetaData_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CalculateTariffInputMetaData Choreo.
     *
     * @param Temboo_Session $session The session that owns this CalculateTariffInputMetaData execution.
     * @param Genability_PricingAndCalc_CalculateTariffInputMetaData $choreo The choreography object for this execution.
     * @param Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_CalculateTariffInputMetaData_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_PricingAndCalc_CalculateTariffInputMetaData $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CalculateTariffInputMetaData execution.
     *
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Results New results object.
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
     * Wraps results in appropriate results class for this CalculateTariffInputMetaData execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_PricingAndCalc_CalculateTariffInputMetaData_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CalculateTariffInputMetaData Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_CalculateTariffInputMetaData_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CalculateTariffInputMetaData Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_PricingAndCalc_CalculateTariffInputMetaData_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CalculateTariffInputMetaData execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a Load Serving Entity with a given ID.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetLoadServingEntity extends Temboo_Choreography
{
    /**
     * Returns a Load Serving Entity with a given ID.
     *
     * @param Temboo_Session $session The session that owns this GetLoadServingEntity Choreo.
     * @return Genability_TariffData_GetLoadServingEntity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetLoadServingEntity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLoadServingEntity Choreo.
     *
     * @param Genability_TariffData_GetLoadServingEntity_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetLoadServingEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetLoadServingEntity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetLoadServingEntity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLoadServingEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetLoadServingEntity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetLoadServingEntity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLoadServingEntity Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetLoadServingEntity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLoadServingEntity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetLoadServingEntity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLoadServingEntity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetLoadServingEntity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetLoadServingEntity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetLoadServingEntity Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetLoadServingEntity_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetLoadServingEntity Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetLoadServingEntity_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the LSEID input for this GetLoadServingEntity Choreo.
     *
     * @param int $value (required, integer) The id of a particular Load Serving Entity to return.
     * @return Genability_TariffData_GetLoadServingEntity_Inputs For method chaining.
     */
    public function setLSEID($value)
    {
        return $this->set('LSEID', $value);
    }
}


/**
 * Execution object for the GetLoadServingEntity Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetLoadServingEntity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLoadServingEntity Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLoadServingEntity execution.
     * @param Genability_TariffData_GetLoadServingEntity $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetLoadServingEntity_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetLoadServingEntity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetLoadServingEntity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetLoadServingEntity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLoadServingEntity execution.
     *
     * @return Genability_TariffData_GetLoadServingEntity_Results New results object.
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
     * Wraps results in appropriate results class for this GetLoadServingEntity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetLoadServingEntity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetLoadServingEntity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLoadServingEntity Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetLoadServingEntity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLoadServingEntity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetLoadServingEntity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLoadServingEntity execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the consumption price of a specified Tariff over a given date range.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetPrice extends Temboo_Choreography
{
    /**
     * Retrieves the consumption price of a specified Tariff over a given date range.
     *
     * @param Temboo_Session $session The session that owns this GetPrice Choreo.
     * @return Genability_PricingAndCalc_GetPrice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/PricingAndCalc/GetPrice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPrice Choreo.
     *
     * @param Genability_PricingAndCalc_GetPrice_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_GetPrice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_GetPrice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_PricingAndCalc_GetPrice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPrice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_GetPrice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_PricingAndCalc_GetPrice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPrice Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetPrice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPrice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_GetPrice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPrice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this GetPrice Choreo.
     *
     * @param string $value (optional, string) A Genability ID for an account. More info on Accounts is available here: http://developer.genability.com/documentation/api-reference/account-api/account
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the AppID input for this GetPrice Choreo.
     *
     * @param string $value (required, string) The App ID provided by Genability.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetPrice Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the ConsumptionAmount input for this GetPrice Choreo.
     *
     * @param float $value (optional, decimal) Specify a monthly consumption in kWh. By default the highest banded level of consumption is used.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setConsumptionAmount($value)
    {
        return $this->set('ConsumptionAmount', $value);
    }

    /**
     * Set the value for the DemandAmount input for this GetPrice Choreo.
     *
     * @param float $value (optional, decimal) Specify a monthly demand in kWh. By default the highest banded level of demand is used.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setDemandAmount($value)
    {
        return $this->set('DemandAmount', $value);
    }

    /**
     * Set the value for the FromDateTime input for this GetPrice Choreo.
     *
     * @param string $value (required, string) The date and time of the requested start of the price query. Must be in ISO 8601 format.  Example: 2012-06-12T00:00:00.0-0700
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setFromDateTime($value)
    {
        return $this->set('FromDateTime', $value);
    }

    /**
     * Set the value for the MasterTariffID input for this GetPrice Choreo.
     *
     * @param string $value (optional, string) A Genability tariff ID. Not required, if AccountID is specified.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setMasterTariffID($value)
    {
        return $this->set('MasterTariffID', $value);
    }

    /**
     * Set the value for the PageCount input for this GetPrice Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defailt is set to: 25.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetPrice Choreo.
     *
     * @param int $value (optional, integer) The page number to start to display results from. If unspecified, the first page of results will be returned.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }

    /**
     * Set the value for the ProfileID input for this GetPrice Choreo.
     *
     * @param string $value (optional, string) The Genability ID of a profile. This ID can be passed instead of consumptionAmount or demandAmount.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setProfileID($value)
    {
        return $this->set('ProfileID', $value);
    }

    /**
     * Set the value for the ProviderAccountID input for this GetPrice Choreo.
     *
     * @param string $value (optional, string) A unique ID for an Account. Same as AccountId, however your unique ID can be used instead of the Genability Account ID.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setProviderAccountID($value)
    {
        return $this->set('ProviderAccountID', $value);
    }

    /**
     * Set the value for the TerritoryID input for this GetPrice Choreo.
     *
     * @param string $value (optional, string) Return rate changes for the specified Territory.
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setTerritoryID($value)
    {
        return $this->set('TerritoryID', $value);
    }

    /**
     * Set the value for the ToDateTime input for this GetPrice Choreo.
     *
     * @param string $value (optional, string) The date and time of the requested start of the price query. Must be in ISO 8601 format.  Example: 2012-06-12T00:00:00.0-0700
     * @return Genability_PricingAndCalc_GetPrice_Inputs For method chaining.
     */
    public function setToDateTime($value)
    {
        return $this->set('ToDateTime', $value);
    }
}


/**
 * Execution object for the GetPrice Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetPrice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPrice Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPrice execution.
     * @param Genability_PricingAndCalc_GetPrice $choreo The choreography object for this execution.
     * @param Genability_PricingAndCalc_GetPrice_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_GetPrice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_GetPrice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_PricingAndCalc_GetPrice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPrice execution.
     *
     * @return Genability_PricingAndCalc_GetPrice_Results New results object.
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
     * Wraps results in appropriate results class for this GetPrice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_PricingAndCalc_GetPrice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_PricingAndCalc_GetPrice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPrice Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetPrice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPrice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_PricingAndCalc_GetPrice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPrice execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Season Groups for a given Load Serving Entity.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetSeasonGroups extends Temboo_Choreography
{
    /**
     * Returns a list of Season Groups for a given Load Serving Entity.
     *
     * @param Temboo_Session $session The session that owns this GetSeasonGroups Choreo.
     * @return Genability_TariffData_GetSeasonGroups New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetSeasonGroups/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSeasonGroups Choreo.
     *
     * @param Genability_TariffData_GetSeasonGroups_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetSeasonGroups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetSeasonGroups_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetSeasonGroups_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSeasonGroups Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetSeasonGroups_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetSeasonGroups_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSeasonGroups Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetSeasonGroups_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSeasonGroups Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetSeasonGroups_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSeasonGroups input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetSeasonGroups Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetSeasonGroups Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the EndsWith input for this GetSeasonGroups Choreo.
     *
     * @param string $value (optional, string) When true, the search will only return results that end with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setEndsWith($value)
    {
        return $this->set('EndsWith', $value);
    }

    /**
     * Set the value for the IsRegex input for this GetSeasonGroups Choreo.
     *
     * @param bool $value (optional, boolean) When true, the provided search string will be regarded as a regular expression and the search will return results matching the regular expression.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setIsRegex($value)
    {
        return $this->set('IsRegex', $value);
    }

    /**
     * Set the value for the LSEID input for this GetSeasonGroups Choreo.
     *
     * @param int $value (required, integer) The LSE Id whose Seasons to return.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setLSEID($value)
    {
        return $this->set('LSEID', $value);
    }

    /**
     * Set the value for the PageCount input for this GetSeasonGroups Choreo.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 25.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetSeasonGroups Choreo.
     *
     * @param int $value (optional, integer) The page number to begin the result set from. Defaults to 1.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }

    /**
     * Set the value for the SearchOn input for this GetSeasonGroups Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to query on. When searchOn is specified, the text provided in the search string field will be searched within these fields.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setSearchOn($value)
    {
        return $this->set('SearchOn', $value);
    }

    /**
     * Set the value for the Search input for this GetSeasonGroups Choreo.
     *
     * @param string $value (optional, string) The string of text to search on. This can also be a regular expression, in which case you should set the 'isRegex' flag to true.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setSearch($value)
    {
        return $this->set('Search', $value);
    }

    /**
     * Set the value for the SortOn input for this GetSeasonGroups Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to sort on.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setSortOn($value)
    {
        return $this->set('SortOn', $value);
    }

    /**
     * Set the value for the SortOrder input for this GetSeasonGroups Choreo.
     *
     * @param string $value (optional, string) Comma separated list of ordering. Possible values are 'ASC' and 'DESC'. Default is 'ASC'. This list corresponds to the field list used in the SortOn input.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartsWith input for this GetSeasonGroups Choreo.
     *
     * @param bool $value (optional, boolean) When true, the search will only return results that begin with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetSeasonGroups_Inputs For method chaining.
     */
    public function setStartsWith($value)
    {
        return $this->set('StartsWith', $value);
    }
}


/**
 * Execution object for the GetSeasonGroups Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetSeasonGroups_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSeasonGroups Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSeasonGroups execution.
     * @param Genability_TariffData_GetSeasonGroups $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetSeasonGroups_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetSeasonGroups_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetSeasonGroups_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetSeasonGroups $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSeasonGroups execution.
     *
     * @return Genability_TariffData_GetSeasonGroups_Results New results object.
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
     * Wraps results in appropriate results class for this GetSeasonGroups execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetSeasonGroups_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetSeasonGroups_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSeasonGroups Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetSeasonGroups_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSeasonGroups Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetSeasonGroups_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSeasonGroups execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Calculate electricity costs based on a POSTed calculation criteria. 
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_RunNewPriceCalculation extends Temboo_Choreography
{
    /**
     * Calculate electricity costs based on a POSTed calculation criteria. 
     *
     * @param Temboo_Session $session The session that owns this RunNewPriceCalculation Choreo.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/PricingAndCalc/RunNewPriceCalculation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RunNewPriceCalculation Choreo.
     *
     * @param Genability_PricingAndCalc_RunNewPriceCalculation_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_RunNewPriceCalculation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_PricingAndCalc_RunNewPriceCalculation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RunNewPriceCalculation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_PricingAndCalc_RunNewPriceCalculation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RunNewPriceCalculation Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_RunNewPriceCalculation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RunNewPriceCalculation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RunNewPriceCalculation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the POSTData input for this RunNewPriceCalculation Choreo.
     *
     * @param string $value (required, json) The POST payload in JSON format.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Inputs For method chaining.
     */
    public function setPOSTData($value)
    {
        return $this->set('POSTData', $value);
    }

    /**
     * Set the value for the AppID input for this RunNewPriceCalculation Choreo.
     *
     * @param string $value (required, string) The App ID provided by Genability.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this RunNewPriceCalculation Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the MasterTariffID input for this RunNewPriceCalculation Choreo.
     *
     * @param string $value (required, string) A Genability tariff ID.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Inputs For method chaining.
     */
    public function setMasterTariffID($value)
    {
        return $this->set('MasterTariffID', $value);
    }
}


/**
 * Execution object for the RunNewPriceCalculation Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_RunNewPriceCalculation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RunNewPriceCalculation Choreo.
     *
     * @param Temboo_Session $session The session that owns this RunNewPriceCalculation execution.
     * @param Genability_PricingAndCalc_RunNewPriceCalculation $choreo The choreography object for this execution.
     * @param Genability_PricingAndCalc_RunNewPriceCalculation_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_RunNewPriceCalculation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_PricingAndCalc_RunNewPriceCalculation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RunNewPriceCalculation execution.
     *
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Results New results object.
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
     * Wraps results in appropriate results class for this RunNewPriceCalculation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_PricingAndCalc_RunNewPriceCalculation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RunNewPriceCalculation Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_RunNewPriceCalculation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RunNewPriceCalculation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_PricingAndCalc_RunNewPriceCalculation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RunNewPriceCalculation execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of LoadServingEntity objects based a specified search criteria.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetLoadServingEntities extends Temboo_Choreography
{
    /**
     * Returns a list of LoadServingEntity objects based a specified search criteria.
     *
     * @param Temboo_Session $session The session that owns this GetLoadServingEntities Choreo.
     * @return Genability_TariffData_GetLoadServingEntities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetLoadServingEntities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLoadServingEntities Choreo.
     *
     * @param Genability_TariffData_GetLoadServingEntities_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetLoadServingEntities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetLoadServingEntities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetLoadServingEntities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLoadServingEntities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetLoadServingEntities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLoadServingEntities Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetLoadServingEntities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLoadServingEntities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLoadServingEntities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this GetLoadServingEntities Choreo.
     *
     * @param string $value (optional, string) The unique ID of the Account to find LSEs for. When passed in, the search will look for a territoryId on the Account and use that to find all LSEs that provide service within that territory.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the AppID input for this GetLoadServingEntities Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetLoadServingEntities Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the EndsWith input for this GetLoadServingEntities Choreo.
     *
     * @param string $value (optional, string) When true, the search will only return results that end with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setEndsWith($value)
    {
        return $this->set('EndsWith', $value);
    }

    /**
     * Set the value for the IsRegex input for this GetLoadServingEntities Choreo.
     *
     * @param bool $value (optional, boolean) When true, the provided search string will be regarded as a regular expression and the search will return results matching the regular expression.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setIsRegex($value)
    {
        return $this->set('IsRegex', $value);
    }

    /**
     * Set the value for the PageCount input for this GetLoadServingEntities Choreo.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 25.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetLoadServingEntities Choreo.
     *
     * @param int $value (optional, integer) The page number to begin the result set from. Defaults to 1.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }

    /**
     * Set the value for the SearchOn input for this GetLoadServingEntities Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to query on. When searchOn is specified, the text provided in the search string field will be searched within these fields.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setSearchOn($value)
    {
        return $this->set('SearchOn', $value);
    }

    /**
     * Set the value for the Search input for this GetLoadServingEntities Choreo.
     *
     * @param string $value (optional, string) The string of text to search on. This can also be a regular expression, in which case you should set the 'isRegex' flag to true.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setSearch($value)
    {
        return $this->set('Search', $value);
    }

    /**
     * Set the value for the SortOn input for this GetLoadServingEntities Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to sort on.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setSortOn($value)
    {
        return $this->set('SortOn', $value);
    }

    /**
     * Set the value for the SortOrder input for this GetLoadServingEntities Choreo.
     *
     * @param string $value (optional, string) Comma separated list of ordering. Possible values are 'ASC' and 'DESC'. Default is 'ASC'. This list corresponds to the field list used in the SortOn input.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartsWith input for this GetLoadServingEntities Choreo.
     *
     * @param bool $value (optional, boolean) When true, the search will only return results that begin with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetLoadServingEntities_Inputs For method chaining.
     */
    public function setStartsWith($value)
    {
        return $this->set('StartsWith', $value);
    }
}


/**
 * Execution object for the GetLoadServingEntities Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetLoadServingEntities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLoadServingEntities Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLoadServingEntities execution.
     * @param Genability_TariffData_GetLoadServingEntities $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetLoadServingEntities_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetLoadServingEntities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetLoadServingEntities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetLoadServingEntities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLoadServingEntities execution.
     *
     * @return Genability_TariffData_GetLoadServingEntities_Results New results object.
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
     * Wraps results in appropriate results class for this GetLoadServingEntities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetLoadServingEntities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetLoadServingEntities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLoadServingEntities Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetLoadServingEntities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLoadServingEntities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetLoadServingEntities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLoadServingEntities execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a territoryID, by using a consumer's zipcode, LSE ID and master tariff ID.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetTerritoryIDFromZipcode extends Temboo_Choreography
{
    /**
     * Get a territoryID, by using a consumer's zipcode, LSE ID and master tariff ID.
     *
     * @param Temboo_Session $session The session that owns this GetTerritoryIDFromZipcode Choreo.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/PricingAndCalc/GetTerritoryIDFromZipcode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTerritoryIDFromZipcode Choreo.
     *
     * @param Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTerritoryIDFromZipcode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTerritoryIDFromZipcode Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTerritoryIDFromZipcode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTerritoryIDFromZipcode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTerritoryIDFromZipcode Choreo.
     *
     * @param string $value (required, string) The App ID provided by Genability.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetTerritoryIDFromZipcode Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the LSEID input for this GetTerritoryIDFromZipcode Choreo.
     *
     * @param string $value (required, string) An LSE ID.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs For method chaining.
     */
    public function setLSEID($value)
    {
        return $this->set('LSEID', $value);
    }

    /**
     * Set the value for the MasterTariffID input for this GetTerritoryIDFromZipcode Choreo.
     *
     * @param string $value (required, string) A Genability tariff ID.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs For method chaining.
     */
    public function setMasterTariffID($value)
    {
        return $this->set('MasterTariffID', $value);
    }

    /**
     * Set the value for the Zipcode input for this GetTerritoryIDFromZipcode Choreo.
     *
     * @param int $value (required, integer) A zip code for which a territory ID is to be retrieved.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs For method chaining.
     */
    public function setZipcode($value)
    {
        return $this->set('Zipcode', $value);
    }
}


/**
 * Execution object for the GetTerritoryIDFromZipcode Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTerritoryIDFromZipcode Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTerritoryIDFromZipcode execution.
     * @param Genability_PricingAndCalc_GetTerritoryIDFromZipcode $choreo The choreography object for this execution.
     * @param Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs|array $inputs (optional) Inputs as Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_PricingAndCalc_GetTerritoryIDFromZipcode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTerritoryIDFromZipcode execution.
     *
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Results New results object.
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
     * Wraps results in appropriate results class for this GetTerritoryIDFromZipcode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTerritoryIDFromZipcode Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTerritoryIDFromZipcode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_PricingAndCalc_GetTerritoryIDFromZipcode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTerritoryIDFromZipcode execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a an individual Territory objects with a given id.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTerritory extends Temboo_Choreography
{
    /**
     * Returns a an individual Territory objects with a given id.
     *
     * @param Temboo_Session $session The session that owns this GetTerritory Choreo.
     * @return Genability_TariffData_GetTerritory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetTerritory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTerritory Choreo.
     *
     * @param Genability_TariffData_GetTerritory_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTerritory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTerritory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetTerritory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTerritory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTerritory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetTerritory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTerritory Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTerritory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTerritory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTerritory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTerritory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetTerritory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetTerritory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTerritory Choreo.
     *
     * @param string $value (conditional, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetTerritory_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetTerritory Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetTerritory_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the PopulateItems input for this GetTerritory Choreo.
     *
     * @param bool $value (optional, boolean) If set to "true", returns a list of territory items for each territory in the result set.
     * @return Genability_TariffData_GetTerritory_Inputs For method chaining.
     */
    public function setPopulateItems($value)
    {
        return $this->set('PopulateItems', $value);
    }

    /**
     * Set the value for the TerritoryID input for this GetTerritory Choreo.
     *
     * @param int $value (required, integer) The id for the territory to retrieve. This can be retrieved in the output of the GetTerritories Choreo.
     * @return Genability_TariffData_GetTerritory_Inputs For method chaining.
     */
    public function setTerritoryID($value)
    {
        return $this->set('TerritoryID', $value);
    }
}


/**
 * Execution object for the GetTerritory Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTerritory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTerritory Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTerritory execution.
     * @param Genability_TariffData_GetTerritory $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetTerritory_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTerritory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTerritory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetTerritory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTerritory execution.
     *
     * @return Genability_TariffData_GetTerritory_Results New results object.
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
     * Wraps results in appropriate results class for this GetTerritory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetTerritory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetTerritory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTerritory Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTerritory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTerritory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetTerritory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTerritory execution.
     *
     * @return string (json) The response from Genability.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a particular Time of Use Group with a given touGroupId and lseId.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTimeOfUseGroup extends Temboo_Choreography
{
    /**
     * Returns a particular Time of Use Group with a given touGroupId and lseId.
     *
     * @param Temboo_Session $session The session that owns this GetTimeOfUseGroup Choreo.
     * @return Genability_TariffData_GetTimeOfUseGroup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Genability/TariffData/GetTimeOfUseGroup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTimeOfUseGroup Choreo.
     *
     * @param Genability_TariffData_GetTimeOfUseGroup_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTimeOfUseGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTimeOfUseGroup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Genability_TariffData_GetTimeOfUseGroup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTimeOfUseGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Genability_TariffData_GetTimeOfUseGroup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTimeOfUseGroup Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTimeOfUseGroup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTimeOfUseGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTimeOfUseGroup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this GetTimeOfUseGroup Choreo.
     *
     * @param string $value (required, string) The App ID provided by Genability.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the AppKey input for this GetTimeOfUseGroup Choreo.
     *
     * @param string $value (required, string) The App Key provided by Genability.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setAppKey($value)
    {
        return $this->set('AppKey', $value);
    }

    /**
     * Set the value for the EndsWith input for this GetTimeOfUseGroup Choreo.
     *
     * @param string $value (optional, string) When true, the search will only return results that end with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setEndsWith($value)
    {
        return $this->set('EndsWith', $value);
    }

    /**
     * Set the value for the IsRegex input for this GetTimeOfUseGroup Choreo.
     *
     * @param bool $value (optional, boolean) When true, the provided search string will be regarded as a regular expression and the search will return results matching the regular expression.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setIsRegex($value)
    {
        return $this->set('IsRegex', $value);
    }

    /**
     * Set the value for the LSEID input for this GetTimeOfUseGroup Choreo.
     *
     * @param int $value (conditional, integer) Used to retrieve a TOU Group for a specific LSE.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setLSEID($value)
    {
        return $this->set('LSEID', $value);
    }

    /**
     * Set the value for the PageCount input for this GetTimeOfUseGroup Choreo.
     *
     * @param int $value (optional, integer) The number of results to return. Defaults to 25.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setPageCount($value)
    {
        return $this->set('PageCount', $value);
    }

    /**
     * Set the value for the PageStart input for this GetTimeOfUseGroup Choreo.
     *
     * @param int $value (optional, integer) The page number to begin the result set from. Defaults to 1.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setPageStart($value)
    {
        return $this->set('PageStart', $value);
    }

    /**
     * Set the value for the SearchOn input for this GetTimeOfUseGroup Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to query on. When searchOn is specified, the text provided in the search string field will be searched within these fields.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setSearchOn($value)
    {
        return $this->set('SearchOn', $value);
    }

    /**
     * Set the value for the Search input for this GetTimeOfUseGroup Choreo.
     *
     * @param string $value (optional, string) The string of text to search on. This can also be a regular expression, in which case you should set the 'isRegex' flag to true.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setSearch($value)
    {
        return $this->set('Search', $value);
    }

    /**
     * Set the value for the SortOn input for this GetTimeOfUseGroup Choreo.
     *
     * @param string $value (optional, string) Comma separated list of fields to sort on.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setSortOn($value)
    {
        return $this->set('SortOn', $value);
    }

    /**
     * Set the value for the SortOrder input for this GetTimeOfUseGroup Choreo.
     *
     * @param string $value (optional, string) Comma separated list of ordering. Possible values are 'ASC' and 'DESC'. Default is 'ASC'. This list corresponds to the field list used in the SortOn input.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartsWith input for this GetTimeOfUseGroup Choreo.
     *
     * @param bool $value (optional, boolean) When true, the search will only return results that begin with the specified search string. Otherwise, any match of the search string will be returned as a result.
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setStartsWith($value)
    {
        return $this->set('StartsWith', $value);
    }

    /**
     * Set the value for the TOUGroupID input for this GetTimeOfUseGroup Choreo.
     *
     * @param int $value (conditional, integer) Used to retrieve a TOU Group by its ID (required when LSE ID is provided).
     * @return Genability_TariffData_GetTimeOfUseGroup_Inputs For method chaining.
     */
    public function setTOUGroupID($value)
    {
        return $this->set('TOUGroupID', $value);
    }
}


/**
 * Execution object for the GetTimeOfUseGroup Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTimeOfUseGroup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTimeOfUseGroup Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTimeOfUseGroup execution.
     * @param Genability_TariffData_GetTimeOfUseGroup $choreo The choreography object for this execution.
     * @param Genability_TariffData_GetTimeOfUseGroup_Inputs|array $inputs (optional) Inputs as Genability_TariffData_GetTimeOfUseGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Genability_TariffData_GetTimeOfUseGroup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Genability_TariffData_GetTimeOfUseGroup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTimeOfUseGroup execution.
     *
     * @return Genability_TariffData_GetTimeOfUseGroup_Results New results object.
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
     * Wraps results in appropriate results class for this GetTimeOfUseGroup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Genability_TariffData_GetTimeOfUseGroup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Genability_TariffData_GetTimeOfUseGroup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTimeOfUseGroup Choreo.
 *
 * @package Temboo
 * @subpackage Genability
 */
class Genability_TariffData_GetTimeOfUseGroup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTimeOfUseGroup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Genability_TariffData_GetTimeOfUseGroup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTimeOfUseGroup execution.
     *
     * @return string (json) The response from Genability.
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
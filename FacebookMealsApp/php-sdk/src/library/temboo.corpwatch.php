<?php

/**
 * Temboo PHP SDK CorpWatch classes
 *
 * Execute Choreographies from the Temboo CorpWatch bundle.
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
 * @subpackage CorpWatch
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * For a given ID of the highest-level owning parent of a family of corporations, retrieves all of the companies that are "below" it in the hierarchy.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_TopParent extends Temboo_Choreography
{
    /**
     * For a given ID of the highest-level owning parent of a family of corporations, retrieves all of the companies that are "below" it in the hierarchy.
     *
     * @param Temboo_Session $session The session that owns this TopParent Choreo.
     * @return CorpWatch_Relationships_TopParent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Relationships/TopParent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopParent Choreo.
     *
     * @param CorpWatch_Relationships_TopParent_Inputs|array $inputs (optional) Inputs as CorpWatch_Relationships_TopParent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Relationships_TopParent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Relationships_TopParent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopParent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Relationships_TopParent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Relationships_TopParent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopParent Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_TopParent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopParent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Relationships_TopParent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopParent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Relationships_TopParent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Relationships_TopParent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopParent Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Relationships_TopParent_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CWID input for this TopParent Choreo.
     *
     * @param string $value (required, string) The CWID of the highest-level owning parent of a family of corprorations (or Top Parent). Most company records contain a field for top_parent_id.
     * @return CorpWatch_Relationships_TopParent_Inputs For method chaining.
     */
    public function setCWID($value)
    {
        return $this->set('CWID', $value);
    }

    /**
     * Set the value for the Index input for this TopParent Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Relationships_TopParent_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this TopParent Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Relationships_TopParent_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this TopParent Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Relationships_TopParent_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Year input for this TopParent Choreo.
     *
     * @param int $value (optional, integer) If a year is specified, only subsidiaries for that year will be returned and the data in the company objects returned will be set appropriately for the request year. Defaults to most recent.
     * @return CorpWatch_Relationships_TopParent_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the TopParent Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_TopParent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopParent Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopParent execution.
     * @param CorpWatch_Relationships_TopParent $choreo The choreography object for this execution.
     * @param CorpWatch_Relationships_TopParent_Inputs|array $inputs (optional) Inputs as CorpWatch_Relationships_TopParent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Relationships_TopParent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Relationships_TopParent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopParent execution.
     *
     * @return CorpWatch_Relationships_TopParent_Results New results object.
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
     * Wraps results in appropriate results class for this TopParent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Relationships_TopParent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Relationships_TopParent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopParent Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_TopParent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopParent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Relationships_TopParent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopParent execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of locations of companies matching the given query.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListLocations extends Temboo_Choreography
{
    /**
     * Returns a list of locations of companies matching the given query.
     *
     * @param Temboo_Session $session The session that owns this ListLocations Choreo.
     * @return CorpWatch_Lists_ListLocations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Lists/ListLocations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListLocations Choreo.
     *
     * @param CorpWatch_Lists_ListLocations_Inputs|array $inputs (optional) Inputs as CorpWatch_Lists_ListLocations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Lists_ListLocations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Lists_ListLocations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListLocations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Lists_ListLocations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Lists_ListLocations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListLocations Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListLocations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListLocations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Lists_ListLocations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListLocations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListLocations Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Address input for this ListLocations Choreo.
     *
     * @param string $value (optional, string) Enter an address fragment to search for. This can be either a street address, city, or state/subregion.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the CountryCode input for this ListLocations Choreo.
     *
     * @param string $value (optional, string) Enter an ISO-3166 formatted country code. 
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the Index input for this ListLocations Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this ListLocations Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaxYear input for this ListLocations Choreo.
     *
     * @param int $value (optional, integer) Indicate desired year of the most recent appearance in SEC filing data (e.g. indicating 2007 will search for companies that ceased filing in 2007).
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setMaxYear($value)
    {
        return $this->set('MaxYear', $value);
    }

    /**
     * Set the value for the MinYear input for this ListLocations Choreo.
     *
     * @param int $value (optional, integer) Indicate desired year of the earliest appearance in SEC filing data (e.g. indicating 2004 will search for companies that started filing in 2004).
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setMinYear($value)
    {
        return $this->set('MinYear', $value);
    }

    /**
     * Set the value for the PostalCode input for this ListLocations Choreo.
     *
     * @param int $value (optional, integer) Enter a postal code to be searched.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the ResponseType input for this ListLocations Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Type input for this ListLocations Choreo.
     *
     * @param string $value (optional, string) Indicates the origin of the location information found. Acceptable values: relation_loc, business, mailing, state_of_incorp. See documentation for more info.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Year input for this ListLocations Choreo.
     *
     * @param int $value (optional, integer) If a year is specified, only records for that year will be returned and the data in the company objects returned will be set appropriately for the request year. Defaults to most recent.
     * @return CorpWatch_Lists_ListLocations_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the ListLocations Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListLocations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListLocations Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListLocations execution.
     * @param CorpWatch_Lists_ListLocations $choreo The choreography object for this execution.
     * @param CorpWatch_Lists_ListLocations_Inputs|array $inputs (optional) Inputs as CorpWatch_Lists_ListLocations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Lists_ListLocations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Lists_ListLocations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListLocations execution.
     *
     * @return CorpWatch_Lists_ListLocations_Results New results object.
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
     * Wraps results in appropriate results class for this ListLocations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Lists_ListLocations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Lists_ListLocations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListLocations Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListLocations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListLocations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Lists_ListLocations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListLocations execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of mailing addresses, business addresses, and jurisdiction of incorporation associated with a given company.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyLocations extends Temboo_Choreography
{
    /**
     * Returns a list of mailing addresses, business addresses, and jurisdiction of incorporation associated with a given company.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyLocations Choreo.
     * @return CorpWatch_Company_GetCompanyLocations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Company/GetCompanyLocations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyLocations Choreo.
     *
     * @param CorpWatch_Company_GetCompanyLocations_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyLocations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyLocations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Company_GetCompanyLocations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyLocations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyLocations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Company_GetCompanyLocations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyLocations Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyLocations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyLocations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyLocations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyLocations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Company_GetCompanyLocations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Company_GetCompanyLocations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyLocations Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Company_GetCompanyLocations_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CWID input for this GetCompanyLocations Choreo.
     *
     * @param string $value (required, string) CoprWatch ID for the company. Format looks like: cw_8484.
     * @return CorpWatch_Company_GetCompanyLocations_Inputs For method chaining.
     */
    public function setCWID($value)
    {
        return $this->set('CWID', $value);
    }

    /**
     * Set the value for the Index input for this GetCompanyLocations Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Company_GetCompanyLocations_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this GetCompanyLocations Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Company_GetCompanyLocations_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetCompanyLocations Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Company_GetCompanyLocations_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetCompanyLocations Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyLocations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyLocations Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyLocations execution.
     * @param CorpWatch_Company_GetCompanyLocations $choreo The choreography object for this execution.
     * @param CorpWatch_Company_GetCompanyLocations_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyLocations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyLocations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Company_GetCompanyLocations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyLocations execution.
     *
     * @return CorpWatch_Company_GetCompanyLocations_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyLocations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyLocations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Company_GetCompanyLocations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyLocations Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyLocations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyLocations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyLocations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyLocations execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the official SEC documents from which a company's information was extracted in order to check the accuracy of data.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyFilings extends Temboo_Choreography
{
    /**
     * Returns the official SEC documents from which a company's information was extracted in order to check the accuracy of data.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyFilings Choreo.
     * @return CorpWatch_Company_GetCompanyFilings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Company/GetCompanyFilings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyFilings Choreo.
     *
     * @param CorpWatch_Company_GetCompanyFilings_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyFilings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyFilings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Company_GetCompanyFilings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyFilings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyFilings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Company_GetCompanyFilings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyFilings Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyFilings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyFilings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyFilings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyFilings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Company_GetCompanyFilings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Company_GetCompanyFilings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyFilings Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Company_GetCompanyFilings_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CWID input for this GetCompanyFilings Choreo.
     *
     * @param string $value (required, string) CoprWatch ID for the company. Format looks like: cw_8484.
     * @return CorpWatch_Company_GetCompanyFilings_Inputs For method chaining.
     */
    public function setCWID($value)
    {
        return $this->set('CWID', $value);
    }

    /**
     * Set the value for the Index input for this GetCompanyFilings Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Company_GetCompanyFilings_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this GetCompanyFilings Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Company_GetCompanyFilings_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetCompanyFilings Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Company_GetCompanyFilings_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetCompanyFilings Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyFilings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyFilings Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyFilings execution.
     * @param CorpWatch_Company_GetCompanyFilings $choreo The choreography object for this execution.
     * @param CorpWatch_Company_GetCompanyFilings_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyFilings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyFilings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Company_GetCompanyFilings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyFilings execution.
     *
     * @return CorpWatch_Company_GetCompanyFilings_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyFilings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyFilings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Company_GetCompanyFilings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyFilings Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyFilings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyFilings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyFilings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyFilings execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a complete set of basic records for a given company, covering all the years for which information is available.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyHistory extends Temboo_Choreography
{
    /**
     * Returns a complete set of basic records for a given company, covering all the years for which information is available.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyHistory Choreo.
     * @return CorpWatch_Company_GetCompanyHistory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Company/GetCompanyHistory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyHistory Choreo.
     *
     * @param CorpWatch_Company_GetCompanyHistory_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyHistory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Company_GetCompanyHistory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyHistory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Company_GetCompanyHistory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyHistory Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyHistory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyHistory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyHistory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Company_GetCompanyHistory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Company_GetCompanyHistory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyHistory Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Company_GetCompanyHistory_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CWID input for this GetCompanyHistory Choreo.
     *
     * @param string $value (required, string) CoprWatch ID for the company. Format looks like: cw_8484.
     * @return CorpWatch_Company_GetCompanyHistory_Inputs For method chaining.
     */
    public function setCWID($value)
    {
        return $this->set('CWID', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetCompanyHistory Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Company_GetCompanyHistory_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetCompanyHistory Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyHistory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyHistory Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyHistory execution.
     * @param CorpWatch_Company_GetCompanyHistory $choreo The choreography object for this execution.
     * @param CorpWatch_Company_GetCompanyHistory_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyHistory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Company_GetCompanyHistory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyHistory execution.
     *
     * @return CorpWatch_Company_GetCompanyHistory_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyHistory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyHistory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Company_GetCompanyHistory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyHistory Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyHistory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyHistory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyHistory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyHistory execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of companies according to several search parameters such as industry, location, date range, company name, etc.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Search_CompoundSearch extends Temboo_Choreography
{
    /**
     * Returns a list of companies according to several search parameters such as industry, location, date range, company name, etc.
     *
     * @param Temboo_Session $session The session that owns this CompoundSearch Choreo.
     * @return CorpWatch_Search_CompoundSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Search/CompoundSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CompoundSearch Choreo.
     *
     * @param CorpWatch_Search_CompoundSearch_Inputs|array $inputs (optional) Inputs as CorpWatch_Search_CompoundSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Search_CompoundSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Search_CompoundSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompoundSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Search_CompoundSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Search_CompoundSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompoundSearch Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Search_CompoundSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CompoundSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Search_CompoundSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompoundSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CompoundSearch Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Address input for this CompoundSearch Choreo.
     *
     * @param string $value (conditional, string) Specific fragment of an address to be searched, such as "empire" or "Main Street."
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the CountryCode input for this CompoundSearch Choreo.
     *
     * @param string $value (optional, string) Two-letter country code (e.g. VI for Virgin Islands).
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the Index input for this CompoundSearch Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the IndustryCode input for this CompoundSearch Choreo.
     *
     * @param int $value (conditional, integer) Standard Industrial Classification (SIC) code.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setIndustryCode($value)
    {
        return $this->set('IndustryCode', $value);
    }

    /**
     * Set the value for the IndustrySector input for this CompoundSearch Choreo.
     *
     * @param int $value (conditional, integer) Standard Industrial Classification (SIC) sector code.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setIndustrySector($value)
    {
        return $this->set('IndustrySector', $value);
    }

    /**
     * Set the value for the Limit input for this CompoundSearch Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Match input for this CompoundSearch Choreo.
     *
     * @param int $value (optional, integer) By default search terms match against complete words. Use 1 to return cases where the search string matches anywhere in the Name or Address field. Performance is significantly affected when enabled.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setMatch($value)
    {
        return $this->set('Match', $value);
    }

    /**
     * Set the value for the MaxYear input for this CompoundSearch Choreo.
     *
     * @param int $value (optional, integer) Indicate desired year of the most recent appearance in SEC filing data (e.g. indicating 2007 will search for companies that ceased filing in 2007).
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setMaxYear($value)
    {
        return $this->set('MaxYear', $value);
    }

    /**
     * Set the value for the MinYear input for this CompoundSearch Choreo.
     *
     * @param int $value (optional, integer) Indicate desired year of the most recent appearance in SEC filing data (e.g. indicating 2007 will search for companies that ceased filing in 2007).
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setMinYear($value)
    {
        return $this->set('MinYear', $value);
    }

    /**
     * Set the value for the Name input for this CompoundSearch Choreo.
     *
     * @param string $value (conditional, string) Company name to search. Words in the search query must match to full words in the name. See documentation for more details.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the NumChildren input for this CompoundSearch Choreo.
     *
     * @param int $value (optional, integer) Limit results to those with a specified number of listed subsidiaries, or "children." (Only immediate relationships are counted.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setNumChildren($value)
    {
        return $this->set('NumChildren', $value);
    }

    /**
     * Set the value for the NumParents input for this CompoundSearch Choreo.
     *
     * @param int $value (optional, integer) Limit results to those with a specified number of listed parent companies (only immediate relationships are counted).
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setNumParents($value)
    {
        return $this->set('NumParents', $value);
    }

    /**
     * Set the value for the ResponseType input for this CompoundSearch Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the SourceType input for this CompoundSearch Choreo.
     *
     * @param string $value (optional, string) Indicate "filers" to restrict results to those of companies that appeared as a filer on SEC documents, or "relationships" for companies that only appear as subsidiaries on filings.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setSourceType($value)
    {
        return $this->set('SourceType', $value);
    }

    /**
     * Set the value for the SubdivisionCode input for this CompoundSearch Choreo.
     *
     * @param string $value (optional, string) Two-letter abbreviation for the subdivision of the area to be searched (e.g. "OR" for Oregon when CountryCode is set to "US").
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setSubdivisionCode($value)
    {
        return $this->set('SubdivisionCode', $value);
    }

    /**
     * Set the value for the TopParent input for this CompoundSearch Choreo.
     *
     * @param int $value (optional, integer) Limit results by he CWID of the highest-level owning parent of a family of corprorations (or Top Parent). Most company records contain a field for top_parent_id.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setTopParent($value)
    {
        return $this->set('TopParent', $value);
    }

    /**
     * Set the value for the Year input for this CompoundSearch Choreo.
     *
     * @param int $value (optional, integer) If a year is specified, only records for that year will be returned and the data in the company objects returned will be set appropriately for the request year. Defaults to most recent.
     * @return CorpWatch_Search_CompoundSearch_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the CompoundSearch Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Search_CompoundSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompoundSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this CompoundSearch execution.
     * @param CorpWatch_Search_CompoundSearch $choreo The choreography object for this execution.
     * @param CorpWatch_Search_CompoundSearch_Inputs|array $inputs (optional) Inputs as CorpWatch_Search_CompoundSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Search_CompoundSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Search_CompoundSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompoundSearch execution.
     *
     * @return CorpWatch_Search_CompoundSearch_Results New results object.
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
     * Wraps results in appropriate results class for this CompoundSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Search_CompoundSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Search_CompoundSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CompoundSearch Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Search_CompoundSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CompoundSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Search_CompoundSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CompoundSearch execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of names (companies or individuals) matching a given name query.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListNames extends Temboo_Choreography
{
    /**
     * Returns a list of names (companies or individuals) matching a given name query.
     *
     * @param Temboo_Session $session The session that owns this ListNames Choreo.
     * @return CorpWatch_Lists_ListNames New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Lists/ListNames/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListNames Choreo.
     *
     * @param CorpWatch_Lists_ListNames_Inputs|array $inputs (optional) Inputs as CorpWatch_Lists_ListNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Lists_ListNames_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Lists_ListNames_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Lists_ListNames_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Lists_ListNames_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListNames Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListNames_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Lists_ListNames_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListNames input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListNames Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this ListNames Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this ListNames Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaxYear input for this ListNames Choreo.
     *
     * @param int $value (optional, integer) Indicate desired year of the most recent appearance in SEC filing data (e.g. indicating 2007 will search for companies that ceased filing in 2007).
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setMaxYear($value)
    {
        return $this->set('MaxYear', $value);
    }

    /**
     * Set the value for the MinYear input for this ListNames Choreo.
     *
     * @param int $value (optional, integer) Indicate desired year of the earliest appearance in SEC filing data (e.g. indicating 2004 will search for companies that started filing in 2004).
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setMinYear($value)
    {
        return $this->set('MinYear', $value);
    }

    /**
     * Set the value for the Name input for this ListNames Choreo.
     *
     * @param string $value (required, string) Name to be searched.
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseType input for this ListNames Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Source input for this ListNames Choreo.
     *
     * @param string $value (optional, string) Indicates how the name was derived. See documentation for more information on this parameter.
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setSource($value)
    {
        return $this->set('Source', $value);
    }

    /**
     * Set the value for the Year input for this ListNames Choreo.
     *
     * @param int $value (optional, integer) If a year is specified, only records for that year will be returned and the data in the company objects returned will be set appropriately for the request year. Defaults to most recent.
     * @return CorpWatch_Lists_ListNames_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the ListNames Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListNames_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListNames Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListNames execution.
     * @param CorpWatch_Lists_ListNames $choreo The choreography object for this execution.
     * @param CorpWatch_Lists_ListNames_Inputs|array $inputs (optional) Inputs as CorpWatch_Lists_ListNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Lists_ListNames_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Lists_ListNames $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListNames execution.
     *
     * @return CorpWatch_Lists_ListNames_Results New results object.
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
     * Wraps results in appropriate results class for this ListNames execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Lists_ListNames_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Lists_ListNames_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListNames Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListNames_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListNames Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Lists_ListNames_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListNames execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a complete list of company names associated with a given company record, including its aliases, former names, and normalized forms.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyNames extends Temboo_Choreography
{
    /**
     * Returns a complete list of company names associated with a given company record, including its aliases, former names, and normalized forms.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyNames Choreo.
     * @return CorpWatch_Company_GetCompanyNames New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Company/GetCompanyNames/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyNames Choreo.
     *
     * @param CorpWatch_Company_GetCompanyNames_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyNames_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Company_GetCompanyNames_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyNames_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Company_GetCompanyNames_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyNames Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyNames_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyNames Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyNames_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyNames input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Company_GetCompanyNames_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Company_GetCompanyNames_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyNames Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Company_GetCompanyNames_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CWID input for this GetCompanyNames Choreo.
     *
     * @param string $value (required, string) CoprWatch ID for the company. Format looks like: cw_8484.
     * @return CorpWatch_Company_GetCompanyNames_Inputs For method chaining.
     */
    public function setCWID($value)
    {
        return $this->set('CWID', $value);
    }

    /**
     * Set the value for the Index input for this GetCompanyNames Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Company_GetCompanyNames_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this GetCompanyNames Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Company_GetCompanyNames_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetCompanyNames Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Company_GetCompanyNames_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetCompanyNames Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyNames_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyNames Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyNames execution.
     * @param CorpWatch_Company_GetCompanyNames $choreo The choreography object for this execution.
     * @param CorpWatch_Company_GetCompanyNames_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyNames_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyNames_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Company_GetCompanyNames $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyNames execution.
     *
     * @return CorpWatch_Company_GetCompanyNames_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyNames execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyNames_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Company_GetCompanyNames_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyNames Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyNames_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyNames Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyNames_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyNames execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of principal owning companies, or "parents," of a company.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_CompanyParents extends Temboo_Choreography
{
    /**
     * Returns a list of principal owning companies, or "parents," of a company.
     *
     * @param Temboo_Session $session The session that owns this CompanyParents Choreo.
     * @return CorpWatch_Relationships_CompanyParents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Relationships/CompanyParents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CompanyParents Choreo.
     *
     * @param CorpWatch_Relationships_CompanyParents_Inputs|array $inputs (optional) Inputs as CorpWatch_Relationships_CompanyParents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Relationships_CompanyParents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Relationships_CompanyParents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompanyParents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Relationships_CompanyParents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Relationships_CompanyParents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompanyParents Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_CompanyParents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CompanyParents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Relationships_CompanyParents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompanyParents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Relationships_CompanyParents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Relationships_CompanyParents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CompanyParents Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Relationships_CompanyParents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CWID input for this CompanyParents Choreo.
     *
     * @param string $value (required, string) CoprWatch ID for the company. Format looks like: cw_8484.
     * @return CorpWatch_Relationships_CompanyParents_Inputs For method chaining.
     */
    public function setCWID($value)
    {
        return $this->set('CWID', $value);
    }

    /**
     * Set the value for the Index input for this CompanyParents Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Relationships_CompanyParents_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this CompanyParents Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Relationships_CompanyParents_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this CompanyParents Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Relationships_CompanyParents_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Year input for this CompanyParents Choreo.
     *
     * @param int $value (optional, integer) If a year is specified, only parents for that year will be returned and the data in the company objects returned will be set appropriately for the request year. Defaults to most recent.
     * @return CorpWatch_Relationships_CompanyParents_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the CompanyParents Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_CompanyParents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompanyParents Choreo.
     *
     * @param Temboo_Session $session The session that owns this CompanyParents execution.
     * @param CorpWatch_Relationships_CompanyParents $choreo The choreography object for this execution.
     * @param CorpWatch_Relationships_CompanyParents_Inputs|array $inputs (optional) Inputs as CorpWatch_Relationships_CompanyParents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Relationships_CompanyParents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Relationships_CompanyParents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompanyParents execution.
     *
     * @return CorpWatch_Relationships_CompanyParents_Results New results object.
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
     * Wraps results in appropriate results class for this CompanyParents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Relationships_CompanyParents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Relationships_CompanyParents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CompanyParents Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_CompanyParents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CompanyParents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Relationships_CompanyParents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CompanyParents execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a company record for a given SEC CIK identification number.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByCIK extends Temboo_Choreography
{
    /**
     * Returns a company record for a given SEC CIK identification number.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyByCIK Choreo.
     * @return CorpWatch_Company_GetCompanyByCIK New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Company/GetCompanyByCIK/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyByCIK Choreo.
     *
     * @param CorpWatch_Company_GetCompanyByCIK_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyByCIK_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyByCIK_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Company_GetCompanyByCIK_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyByCIK Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Company_GetCompanyByCIK_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyByCIK Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByCIK_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyByCIK Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyByCIK input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyByCIK Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CIK input for this GetCompanyByCIK Choreo.
     *
     * @param string $value (required, string) The SEC's CIK identification number.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs For method chaining.
     */
    public function setCIK($value)
    {
        return $this->set('CIK', $value);
    }

    /**
     * Set the value for the Index input for this GetCompanyByCIK Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this GetCompanyByCIK Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetCompanyByCIK Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Year input for this GetCompanyByCIK Choreo.
     *
     * @param int $value (optional, integer) If a year is specified, only records for that year will be returned and the data in the company objects returned will be set appropriately for the request year. Defaults to most recent.
     * @return CorpWatch_Company_GetCompanyByCIK_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the GetCompanyByCIK Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByCIK_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyByCIK Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyByCIK execution.
     * @param CorpWatch_Company_GetCompanyByCIK $choreo The choreography object for this execution.
     * @param CorpWatch_Company_GetCompanyByCIK_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyByCIK_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyByCIK_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Company_GetCompanyByCIK $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyByCIK execution.
     *
     * @return CorpWatch_Company_GetCompanyByCIK_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyByCIK execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyByCIK_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Company_GetCompanyByCIK_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyByCIK Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByCIK_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyByCIK Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyByCIK_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyByCIK execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns basic information for a specifiied company.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByCWID extends Temboo_Choreography
{
    /**
     * Returns basic information for a specifiied company.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyByCWID Choreo.
     * @return CorpWatch_Company_GetCompanyByCWID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Company/GetCompanyByCWID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyByCWID Choreo.
     *
     * @param CorpWatch_Company_GetCompanyByCWID_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyByCWID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyByCWID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Company_GetCompanyByCWID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyByCWID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyByCWID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Company_GetCompanyByCWID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyByCWID Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByCWID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyByCWID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyByCWID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyByCWID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Company_GetCompanyByCWID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Company_GetCompanyByCWID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyByCWID Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Company_GetCompanyByCWID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CWID input for this GetCompanyByCWID Choreo.
     *
     * @param string $value (required, string) CoprWatch ID for the company. Format looks like: cw_8484.
     * @return CorpWatch_Company_GetCompanyByCWID_Inputs For method chaining.
     */
    public function setCWID($value)
    {
        return $this->set('CWID', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetCompanyByCWID Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Company_GetCompanyByCWID_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Year input for this GetCompanyByCWID Choreo.
     *
     * @param int $value (optional, integer) Specify the year for which you want company information. When none is specified, returns the most recent record available for that company.
     * @return CorpWatch_Company_GetCompanyByCWID_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the GetCompanyByCWID Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByCWID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyByCWID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyByCWID execution.
     * @param CorpWatch_Company_GetCompanyByCWID $choreo The choreography object for this execution.
     * @param CorpWatch_Company_GetCompanyByCWID_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyByCWID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyByCWID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Company_GetCompanyByCWID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyByCWID execution.
     *
     * @return CorpWatch_Company_GetCompanyByCWID_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyByCWID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyByCWID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Company_GetCompanyByCWID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyByCWID Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByCWID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyByCWID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyByCWID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyByCWID execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a complete list of ISO-3166 standard country and subdivision codes.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListCountryCodes extends Temboo_Choreography
{
    /**
     * Returns a complete list of ISO-3166 standard country and subdivision codes.
     *
     * @param Temboo_Session $session The session that owns this ListCountryCodes Choreo.
     * @return CorpWatch_Lists_ListCountryCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Lists/ListCountryCodes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCountryCodes Choreo.
     *
     * @param CorpWatch_Lists_ListCountryCodes_Inputs|array $inputs (optional) Inputs as CorpWatch_Lists_ListCountryCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Lists_ListCountryCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Lists_ListCountryCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCountryCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Lists_ListCountryCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Lists_ListCountryCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCountryCodes Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListCountryCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCountryCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Lists_ListCountryCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCountryCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Lists_ListCountryCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Lists_ListCountryCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListCountryCodes Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Lists_ListCountryCodes_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this ListCountryCodes Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Lists_ListCountryCodes_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this ListCountryCodes Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Lists_ListCountryCodes_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this ListCountryCodes Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Lists_ListCountryCodes_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the ListCountryCodes Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListCountryCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCountryCodes Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCountryCodes execution.
     * @param CorpWatch_Lists_ListCountryCodes $choreo The choreography object for this execution.
     * @param CorpWatch_Lists_ListCountryCodes_Inputs|array $inputs (optional) Inputs as CorpWatch_Lists_ListCountryCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Lists_ListCountryCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Lists_ListCountryCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCountryCodes execution.
     *
     * @return CorpWatch_Lists_ListCountryCodes_Results New results object.
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
     * Wraps results in appropriate results class for this ListCountryCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Lists_ListCountryCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Lists_ListCountryCodes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCountryCodes Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListCountryCodes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCountryCodes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Lists_ListCountryCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListCountryCodes execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a company record for a given IRS Employer Identification Number (tax ID).
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByEIN extends Temboo_Choreography
{
    /**
     * Returns a company record for a given IRS Employer Identification Number (tax ID).
     *
     * @param Temboo_Session $session The session that owns this GetCompanyByEIN Choreo.
     * @return CorpWatch_Company_GetCompanyByEIN New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Company/GetCompanyByEIN/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCompanyByEIN Choreo.
     *
     * @param CorpWatch_Company_GetCompanyByEIN_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyByEIN_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyByEIN_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Company_GetCompanyByEIN_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCompanyByEIN Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Company_GetCompanyByEIN_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCompanyByEIN Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByEIN_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCompanyByEIN Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCompanyByEIN input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCompanyByEIN Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EIN input for this GetCompanyByEIN Choreo.
     *
     * @param string $value (required, string) The IRS Employer Identification Number (tax ID) of a company.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs For method chaining.
     */
    public function setEIN($value)
    {
        return $this->set('EIN', $value);
    }

    /**
     * Set the value for the Index input for this GetCompanyByEIN Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this GetCompanyByEIN Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetCompanyByEIN Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Year input for this GetCompanyByEIN Choreo.
     *
     * @param int $value (optional, integer) If a year is specified, only records for that year will be returned and the data in the company objects returned will be set appropriately for the request year. Defaults to most recent.
     * @return CorpWatch_Company_GetCompanyByEIN_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the GetCompanyByEIN Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByEIN_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCompanyByEIN Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCompanyByEIN execution.
     * @param CorpWatch_Company_GetCompanyByEIN $choreo The choreography object for this execution.
     * @param CorpWatch_Company_GetCompanyByEIN_Inputs|array $inputs (optional) Inputs as CorpWatch_Company_GetCompanyByEIN_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Company_GetCompanyByEIN_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Company_GetCompanyByEIN $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCompanyByEIN execution.
     *
     * @return CorpWatch_Company_GetCompanyByEIN_Results New results object.
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
     * Wraps results in appropriate results class for this GetCompanyByEIN execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyByEIN_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Company_GetCompanyByEIN_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCompanyByEIN Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Company_GetCompanyByEIN_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCompanyByEIN Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Company_GetCompanyByEIN_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCompanyByEIN execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a complete list of all Standard Industrial Classification (SIC) codes and sectors.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListIndustryCodes extends Temboo_Choreography
{
    /**
     * Returns a complete list of all Standard Industrial Classification (SIC) codes and sectors.
     *
     * @param Temboo_Session $session The session that owns this ListIndustryCodes Choreo.
     * @return CorpWatch_Lists_ListIndustryCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Lists/ListIndustryCodes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListIndustryCodes Choreo.
     *
     * @param CorpWatch_Lists_ListIndustryCodes_Inputs|array $inputs (optional) Inputs as CorpWatch_Lists_ListIndustryCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Lists_ListIndustryCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Lists_ListIndustryCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListIndustryCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Lists_ListIndustryCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Lists_ListIndustryCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListIndustryCodes Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListIndustryCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListIndustryCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Lists_ListIndustryCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListIndustryCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Lists_ListIndustryCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Lists_ListIndustryCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListIndustryCodes Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Lists_ListIndustryCodes_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this ListIndustryCodes Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Lists_ListIndustryCodes_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this ListIndustryCodes Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Lists_ListIndustryCodes_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this ListIndustryCodes Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Lists_ListIndustryCodes_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the ListIndustryCodes Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListIndustryCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListIndustryCodes Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListIndustryCodes execution.
     * @param CorpWatch_Lists_ListIndustryCodes $choreo The choreography object for this execution.
     * @param CorpWatch_Lists_ListIndustryCodes_Inputs|array $inputs (optional) Inputs as CorpWatch_Lists_ListIndustryCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Lists_ListIndustryCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Lists_ListIndustryCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListIndustryCodes execution.
     *
     * @return CorpWatch_Lists_ListIndustryCodes_Results New results object.
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
     * Wraps results in appropriate results class for this ListIndustryCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Lists_ListIndustryCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Lists_ListIndustryCodes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListIndustryCodes Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Lists_ListIndustryCodes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListIndustryCodes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Lists_ListIndustryCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListIndustryCodes execution.
     *
     * @return string The response from CorpWatch.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of the subsidiaries, or "children," of a company.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_CompanyChildren extends Temboo_Choreography
{
    /**
     * Returns a list of the subsidiaries, or "children," of a company.
     *
     * @param Temboo_Session $session The session that owns this CompanyChildren Choreo.
     * @return CorpWatch_Relationships_CompanyChildren New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CorpWatch/Relationships/CompanyChildren/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CompanyChildren Choreo.
     *
     * @param CorpWatch_Relationships_CompanyChildren_Inputs|array $inputs (optional) Inputs as CorpWatch_Relationships_CompanyChildren_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Relationships_CompanyChildren_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CorpWatch_Relationships_CompanyChildren_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CompanyChildren Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Relationships_CompanyChildren_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CorpWatch_Relationships_CompanyChildren_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CompanyChildren Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_CompanyChildren_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CompanyChildren Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CorpWatch_Relationships_CompanyChildren_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CompanyChildren input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CorpWatch_Relationships_CompanyChildren_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CorpWatch_Relationships_CompanyChildren_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CompanyChildren Choreo.
     *
     * @param string $value (optional, string) The APIKey from CorpWatch if you have one.
     * @return CorpWatch_Relationships_CompanyChildren_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CWID input for this CompanyChildren Choreo.
     *
     * @param string $value (required, string) CoprWatch ID for the company. Format looks like: cw_8484.
     * @return CorpWatch_Relationships_CompanyChildren_Inputs For method chaining.
     */
    public function setCWID($value)
    {
        return $this->set('CWID', $value);
    }

    /**
     * Set the value for the Index input for this CompanyChildren Choreo.
     *
     * @param int $value (optional, integer) Set the index number of the first result to be returned. The index of the first result is 0.
     * @return CorpWatch_Relationships_CompanyChildren_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Limit input for this CompanyChildren Choreo.
     *
     * @param int $value (optional, integer) The number of results to be returned. Defaults to 100. Maximum is 5000.
     * @return CorpWatch_Relationships_CompanyChildren_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this CompanyChildren Choreo.
     *
     * @param string $value (optional, string) Specify json or xml for the type of response to be returned. Defaults to xml.
     * @return CorpWatch_Relationships_CompanyChildren_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Year input for this CompanyChildren Choreo.
     *
     * @param int $value (conditional, integer) If a year is specified, only subsidiaries for that year will be returned and the data in the company objects returned will be set appropriately for the request year. Defaults to 2012 (most recent yr).
     * @return CorpWatch_Relationships_CompanyChildren_Inputs For method chaining.
     */
    public function setYear($value)
    {
        return $this->set('Year', $value);
    }
}


/**
 * Execution object for the CompanyChildren Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_CompanyChildren_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CompanyChildren Choreo.
     *
     * @param Temboo_Session $session The session that owns this CompanyChildren execution.
     * @param CorpWatch_Relationships_CompanyChildren $choreo The choreography object for this execution.
     * @param CorpWatch_Relationships_CompanyChildren_Inputs|array $inputs (optional) Inputs as CorpWatch_Relationships_CompanyChildren_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CorpWatch_Relationships_CompanyChildren_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CorpWatch_Relationships_CompanyChildren $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CompanyChildren execution.
     *
     * @return CorpWatch_Relationships_CompanyChildren_Results New results object.
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
     * Wraps results in appropriate results class for this CompanyChildren execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CorpWatch_Relationships_CompanyChildren_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CorpWatch_Relationships_CompanyChildren_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CompanyChildren Choreo.
 *
 * @package Temboo
 * @subpackage CorpWatch
 */
class CorpWatch_Relationships_CompanyChildren_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CompanyChildren Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CorpWatch_Relationships_CompanyChildren_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CompanyChildren execution.
     *
     * @return string The response from CorpWatch.
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
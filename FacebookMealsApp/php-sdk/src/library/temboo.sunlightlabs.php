<?php

/**
 * Temboo PHP SDK SunlightLabs classes
 *
 * Execute Choreographies from the Temboo SunlightLabs bundle.
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
 * @subpackage SunlightLabs
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns a list of all committees that a specified member serves on, including subcommittes.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetCommitteesByLegislator extends Temboo_Choreography
{
    /**
     * Returns a list of all committees that a specified member serves on, including subcommittes.
     *
     * @param Temboo_Session $session The session that owns this GetCommitteesByLegislator Choreo.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/Committee/GetCommitteesByLegislator/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCommitteesByLegislator Choreo.
     *
     * @param SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCommitteesByLegislator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCommitteesByLegislator Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCommitteesByLegislator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCommitteesByLegislator input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCommitteesByLegislator Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BioGuideID input for this GetCommitteesByLegislator Choreo.
     *
     * @param string $value (required, string) A legislator's bioguide_id. Note that this can be retrieved by running the Choreos within the Congress.Legislator bundle.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs For method chaining.
     */
    public function setBioGuideID($value)
    {
        return $this->set('BioGuideID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCommitteesByLegislator Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetCommitteesByLegislator Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCommitteesByLegislator Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCommitteesByLegislator execution.
     * @param SunlightLabs_Congress_Committee_GetCommitteesByLegislator $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_Committee_GetCommitteesByLegislator $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCommitteesByLegislator execution.
     *
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Results New results object.
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
     * Wraps results in appropriate results class for this GetCommitteesByLegislator execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCommitteesByLegislator Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCommitteesByLegislator Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_Committee_GetCommitteesByLegislator_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCommitteesByLegislator execution.
     *
     * @return string The response from the Sunlight Congress API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of all committees for a given chamber along with their subcommittees.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetList extends Temboo_Choreography
{
    /**
     * Returns a list of all committees for a given chamber along with their subcommittees.
     *
     * @param Temboo_Session $session The session that owns this GetList Choreo.
     * @return SunlightLabs_Congress_Committee_GetList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/Committee/GetList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetList Choreo.
     *
     * @param SunlightLabs_Congress_Committee_GetList_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Committee_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Committee_GetList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_Committee_GetList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Committee_GetList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_Committee_GetList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Committee_GetList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_Congress_Committee_GetList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_Committee_GetList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetList Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_Committee_GetList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Chamber input for this GetList Choreo.
     *
     * @param string $value (required, string) A chamber to list committees for. Valid values are: House, Senate, or Joint.
     * @return SunlightLabs_Congress_Committee_GetList_Inputs For method chaining.
     */
    public function setChamber($value)
    {
        return $this->set('Chamber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetList Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_Committee_GetList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetList execution.
     * @param SunlightLabs_Congress_Committee_GetList $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_Committee_GetList_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Committee_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Committee_GetList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_Committee_GetList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetList execution.
     *
     * @return SunlightLabs_Congress_Committee_GetList_Results New results object.
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
     * Wraps results in appropriate results class for this GetList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_Congress_Committee_GetList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_Committee_GetList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_Committee_GetList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetList execution.
     *
     * @return string The response from the Sunlight Congress API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of the top phrases in the Congressional Record, which are searchable by day, month, state, or legislator.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_Phrases extends Temboo_Choreography
{
    /**
     * Returns a list of the top phrases in the Congressional Record, which are searchable by day, month, state, or legislator.
     *
     * @param Temboo_Session $session The session that owns this Phrases Choreo.
     * @return SunlightLabs_CapitolWords_Phrases New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/CapitolWords/Phrases/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Phrases Choreo.
     *
     * @param SunlightLabs_CapitolWords_Phrases_Inputs|array $inputs (optional) Inputs as SunlightLabs_CapitolWords_Phrases_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_CapitolWords_Phrases_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_CapitolWords_Phrases_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Phrases Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_CapitolWords_Phrases_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Phrases Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_Phrases_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Phrases Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Phrases input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Phrases Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Chamber input for this Phrases Choreo.
     *
     * @param string $value (optional, string) Limit results to a particular chamber. Valid values: house, senate, extensions.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setChamber($value)
    {
        return $this->set('Chamber', $value);
    }

    /**
     * Set the value for the Date input for this Phrases Choreo.
     *
     * @param string $value (optional, string) Show results for only the given date. Format: YYYY-MM-DD
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the EndDate input for this Phrases Choreo.
     *
     * @param string $value (optional, string) Limit results to those on or before the given date. Format: YYYY-MM-DD.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the EntityType input for this Phrases Choreo.
     *
     * @param string $value (required, string) The entity type to get top phrases for. Acceptable values: date, month, state, legislator.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setEntityType($value)
    {
        return $this->set('EntityType', $value);
    }

    /**
     * Set the value for the EntityValue input for this Phrases Choreo.
     *
     * @param string $value (required, string) The value of the entity to get top phrases for. Acceptable formats as follows for each EntityType: (date) 2011-11-09, (month) 201111, (state) NY. For the legislator EntityType, enter Bioguide ID here.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setEntityValue($value)
    {
        return $this->set('EntityValue', $value);
    }

    /**
     * Set the value for the Length input for this Phrases Choreo.
     *
     * @param int $value (optional, integer) The length of the phrase, in words, to search for (up to 5).
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setLength($value)
    {
        return $this->set('Length', $value);
    }

    /**
     * Set the value for the Page input for this Phrases Choreo.
     *
     * @param int $value (optional, integer) The page of results to show. 100 results are shown at a time. To see more results use the page parameter.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Party input for this Phrases Choreo.
     *
     * @param string $value (optional, string) Limit results to members of congress from a given party. Valid values: R, D, I.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setParty($value)
    {
        return $this->set('Party', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Phrases Choreo.
     *
     * @param string $value (optional, string) Output formats inlcude json and xml. Defaults to json.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this Phrases Choreo.
     *
     * @param string $value (optional, string) The metric and direction to sort by. Acceptable values: tfidf asc (default), tfidf desc, count asc, count desc.
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartDate input for this Phrases Choreo.
     *
     * @param string $value (optional, string) Limit results to those on or after the given date. Format: YYYY-MM-DD
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the State input for this Phrases Choreo.
     *
     * @param string $value (optional, string) Limit results to members from a particular state. Format: 2-letter state abbreviation (e.g. MD, RI, NY)
     * @return SunlightLabs_CapitolWords_Phrases_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the Phrases Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_Phrases_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Phrases Choreo.
     *
     * @param Temboo_Session $session The session that owns this Phrases execution.
     * @param SunlightLabs_CapitolWords_Phrases $choreo The choreography object for this execution.
     * @param SunlightLabs_CapitolWords_Phrases_Inputs|array $inputs (optional) Inputs as SunlightLabs_CapitolWords_Phrases_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_CapitolWords_Phrases_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_CapitolWords_Phrases $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Phrases execution.
     *
     * @return SunlightLabs_CapitolWords_Phrases_Results New results object.
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
     * Wraps results in appropriate results class for this Phrases execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_CapitolWords_Phrases_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_CapitolWords_Phrases_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Phrases Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_Phrases_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Phrases Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_CapitolWords_Phrases_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Phrases execution.
     *
     * @return string (json) The response from CapitolWords.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Provides a fuzzy-matching text search of the legislators.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_Search extends Temboo_Choreography
{
    /**
     * Provides a fuzzy-matching text search of the legislators.
     *
     * @param Temboo_Session $session The session that owns this Search Choreo.
     * @return SunlightLabs_Congress_Legislator_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/Legislator/Search/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Search Choreo.
     *
     * @param SunlightLabs_Congress_Legislator_Search_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_Legislator_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_Legislator_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_Search_Inputs New instance.
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
     * @return SunlightLabs_Congress_Legislator_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_Legislator_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Search Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_Legislator_Search_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AllLegislators input for this Search Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating to search for all legislators even when they are no longer in office.
     * @return SunlightLabs_Congress_Legislator_Search_Inputs For method chaining.
     */
    public function setAllLegislators($value)
    {
        return $this->set('AllLegislators', $value);
    }

    /**
     * Set the value for the Name input for this Search Choreo.
     *
     * @param string $value (required, string) A name to search for.
     * @return SunlightLabs_Congress_Legislator_Search_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Search Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_Legislator_Search_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Search Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search Choreo.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param SunlightLabs_Congress_Legislator_Search $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_Legislator_Search_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_Legislator_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return SunlightLabs_Congress_Legislator_Search_Results New results object.
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
     * @return SunlightLabs_Congress_Legislator_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_Legislator_Search_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_Search_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Search Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_Legislator_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string The response from the Sunlight Congress API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Congressional Record documents in which the given phrase appears.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_FullTextSearch extends Temboo_Choreography
{
    /**
     * Returns a list of Congressional Record documents in which the given phrase appears.
     *
     * @param Temboo_Session $session The session that owns this FullTextSearch Choreo.
     * @return SunlightLabs_CapitolWords_FullTextSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/CapitolWords/FullTextSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FullTextSearch Choreo.
     *
     * @param SunlightLabs_CapitolWords_FullTextSearch_Inputs|array $inputs (optional) Inputs as SunlightLabs_CapitolWords_FullTextSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_CapitolWords_FullTextSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FullTextSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_CapitolWords_FullTextSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FullTextSearch Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_FullTextSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FullTextSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FullTextSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FullTextSearch Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BioguideID input for this FullTextSearch Choreo.
     *
     * @param string $value (optional, string) Limit results to the member of Congress with the given Bioguide ID. The Bioguide ID of any current or past congressonal member can be found at bioguide.congress.gov.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setBioguideID($value)
    {
        return $this->set('BioguideID', $value);
    }

    /**
     * Set the value for the CRPages input for this FullTextSearch Choreo.
     *
     * @param string $value (optional, string) The pages in the Congressional Record to search.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setCRPages($value)
    {
        return $this->set('CRPages', $value);
    }

    /**
     * Set the value for the Chamber input for this FullTextSearch Choreo.
     *
     * @param string $value (optional, string) Limit results to a particular chamber. Valid values: house, senate, extensions.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setChamber($value)
    {
        return $this->set('Chamber', $value);
    }

    /**
     * Set the value for the Date input for this FullTextSearch Choreo.
     *
     * @param string $value (optional, string) Show results for only the given date. Format: YYYY-MM-DD
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the EndDate input for this FullTextSearch Choreo.
     *
     * @param string $value (optional, string) Limit results to those on or before the given date. Format: YYYY-MM-DD.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Page input for this FullTextSearch Choreo.
     *
     * @param int $value (optional, integer) The page of results to show. 100 shown at a time.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Party input for this FullTextSearch Choreo.
     *
     * @param string $value (optional, string) Limit results to members of congress from a given party. Valid values: R, D, I.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setParty($value)
    {
        return $this->set('Party', $value);
    }

    /**
     * Set the value for the Phrase input for this FullTextSearch Choreo.
     *
     * @param string $value (required, string) A phrase to search the body of each Congressional Record document for. Either Phrase or Title inputs are required.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setPhrase($value)
    {
        return $this->set('Phrase', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this FullTextSearch Choreo.
     *
     * @param string $value (optional, string) Output formats inlcude json and xml. Defaults to json.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this FullTextSearch Choreo.
     *
     * @param string $value (optional, string) Limit results to those on or after the given date. Format: YYYY-MM-DD
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the State input for this FullTextSearch Choreo.
     *
     * @param string $value (optional, string) Limit results to members from a particular state. Format: 2-letter state abbreviation (e.g. MD, RI, NY)
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Title input for this FullTextSearch Choreo.
     *
     * @param int $value (optional, integer) A phrase to search the title of each Congressional Record document for. Either Phrase or Title are required.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }
}


/**
 * Execution object for the FullTextSearch Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_FullTextSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FullTextSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this FullTextSearch execution.
     * @param SunlightLabs_CapitolWords_FullTextSearch $choreo The choreography object for this execution.
     * @param SunlightLabs_CapitolWords_FullTextSearch_Inputs|array $inputs (optional) Inputs as SunlightLabs_CapitolWords_FullTextSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_CapitolWords_FullTextSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FullTextSearch execution.
     *
     * @return SunlightLabs_CapitolWords_FullTextSearch_Results New results object.
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
     * Wraps results in appropriate results class for this FullTextSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_CapitolWords_FullTextSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FullTextSearch Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_FullTextSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FullTextSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_CapitolWords_FullTextSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FullTextSearch execution.
     *
     * @return string (json) The response from CapitolWords.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of legislators that meet a specified search criteria.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetList extends Temboo_Choreography
{
    /**
     * Returns a list of legislators that meet a specified search criteria.
     *
     * @param Temboo_Session $session The session that owns this GetList Choreo.
     * @return SunlightLabs_Congress_Legislator_GetList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/Legislator/GetList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetList Choreo.
     *
     * @param SunlightLabs_Congress_Legislator_GetList_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_GetList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_Legislator_GetList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_Legislator_GetList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetList Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AllLegislators input for this GetList Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating to search for all legislators even when they are no longer in office.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setAllLegislators($value)
    {
        return $this->set('AllLegislators', $value);
    }

    /**
     * Set the value for the BioguideID input for this GetList Choreo.
     *
     * @param string $value (optional, string) The bioguide_id of the legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setBioguideID($value)
    {
        return $this->set('BioguideID', $value);
    }

    /**
     * Set the value for the CRPID input for this GetList Choreo.
     *
     * @param string $value (optional, string) The crp_id associated with a legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setCRPID($value)
    {
        return $this->set('CRPID', $value);
    }

    /**
     * Set the value for the District input for this GetList Choreo.
     *
     * @param int $value (optional, integer) Narrows the search result by district number.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setDistrict($value)
    {
        return $this->set('District', $value);
    }

    /**
     * Set the value for the FECID input for this GetList Choreo.
     *
     * @param string $value (optional, string) The fec_id associated with the legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setFECID($value)
    {
        return $this->set('FECID', $value);
    }

    /**
     * Set the value for the FacebookID input for this GetList Choreo.
     *
     * @param string $value (optional, string) The facebook id of a legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setFacebookID($value)
    {
        return $this->set('FacebookID', $value);
    }

    /**
     * Set the value for the FirstName input for this GetList Choreo.
     *
     * @param string $value (optional, string) The first name of a legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the Gender input for this GetList Choreo.
     *
     * @param string $value (optional, string) Narrows the search result by gender.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setGender($value)
    {
        return $this->set('Gender', $value);
    }

    /**
     * Set the value for the GovTrackID input for this GetList Choreo.
     *
     * @param string $value (optional, string) The govetrack_id associated with a legistlator to return.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setGovTrackID($value)
    {
        return $this->set('GovTrackID', $value);
    }

    /**
     * Set the value for the InOffice input for this GetList Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not the individual is in office currently. Valid values are true or false.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setInOffice($value)
    {
        return $this->set('InOffice', $value);
    }

    /**
     * Set the value for the LastName input for this GetList Choreo.
     *
     * @param string $value (optional, string) The last name of the legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Party input for this GetList Choreo.
     *
     * @param string $value (optional, string) Narrows the search result by party (i.e. "D" or "R").
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setParty($value)
    {
        return $this->set('Party', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetList Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this GetList Choreo.
     *
     * @param string $value (optional, string) A state abbreviation to narrow the search results.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Title input for this GetList Choreo.
     *
     * @param string $value (optional, string) The title associated with the individual to return.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the TwitterID input for this GetList Choreo.
     *
     * @param string $value (optional, string) The twitter id of the legislator to return (note, this can be a twitter screen name).
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setTwitterID($value)
    {
        return $this->set('TwitterID', $value);
    }

    /**
     * Set the value for the VoteSmartID input for this GetList Choreo.
     *
     * @param int $value (optional, integer) The votesmart_id of a legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetList_Inputs For method chaining.
     */
    public function setVoteSmartID($value)
    {
        return $this->set('VoteSmartID', $value);
    }
}


/**
 * Execution object for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetList execution.
     * @param SunlightLabs_Congress_Legislator_GetList $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_Legislator_GetList_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_GetList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_GetList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_Legislator_GetList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetList execution.
     *
     * @return SunlightLabs_Congress_Legislator_GetList_Results New results object.
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
     * Wraps results in appropriate results class for this GetList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_Congress_Legislator_GetList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_Legislator_GetList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetList Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_Legislator_GetList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetList execution.
     *
     * @return string The response from the Sunlight Congress API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the top sources of a given phrase, which can be sorted either by legislator, state, party, bioguide ID, volume, or chambers.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_TopPhraseSources extends Temboo_Choreography
{
    /**
     * Returns the top sources of a given phrase, which can be sorted either by legislator, state, party, bioguide ID, volume, or chambers.
     *
     * @param Temboo_Session $session The session that owns this TopPhraseSources Choreo.
     * @return SunlightLabs_CapitolWords_TopPhraseSources New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/CapitolWords/TopPhraseSources/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopPhraseSources Choreo.
     *
     * @param SunlightLabs_CapitolWords_TopPhraseSources_Inputs|array $inputs (optional) Inputs as SunlightLabs_CapitolWords_TopPhraseSources_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_CapitolWords_TopPhraseSources_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopPhraseSources Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_CapitolWords_TopPhraseSources_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopPhraseSources Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_TopPhraseSources_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopPhraseSources Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopPhraseSources input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this TopPhraseSources Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Chamber input for this TopPhraseSources Choreo.
     *
     * @param string $value (optional, string) Limit results to a particular chamber. Valid values: house, senate, extensions.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setChamber($value)
    {
        return $this->set('Chamber', $value);
    }

    /**
     * Set the value for the Date input for this TopPhraseSources Choreo.
     *
     * @param string $value (optional, string) Show results for only the given date. Format: YYYY-MM-DD
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the EndDate input for this TopPhraseSources Choreo.
     *
     * @param string $value (optional, string) Limit results to those on or before the given date. Format: YYYY-MM-DD.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Entity input for this TopPhraseSources Choreo.
     *
     * @param string $value (required, string) The type of entity for which to return top results. Acceptable inputs: legislator, state, party, bioguide_id, volume, chamber. So 'legislator' returns the top legislators who say the given phrase.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setEntity($value)
    {
        return $this->set('Entity', $value);
    }

    /**
     * Set the value for the MinCount input for this TopPhraseSources Choreo.
     *
     * @param int $value (optional, integer) Only returns results where mentions are at or above the supplied threshold.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setMinCount($value)
    {
        return $this->set('MinCount', $value);
    }

    /**
     * Set the value for the Page input for this TopPhraseSources Choreo.
     *
     * @param int $value (optional, integer) The page number to return.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the Party input for this TopPhraseSources Choreo.
     *
     * @param string $value (optional, string) Limit results to members of congress from a given party. Valid values: R, D, I.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setParty($value)
    {
        return $this->set('Party', $value);
    }

    /**
     * Set the value for the PerPage input for this TopPhraseSources Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setPerPage($value)
    {
        return $this->set('PerPage', $value);
    }

    /**
     * Set the value for the Phrase input for this TopPhraseSources Choreo.
     *
     * @param string $value (required, string) The phrase to search for.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setPhrase($value)
    {
        return $this->set('Phrase', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TopPhraseSources Choreo.
     *
     * @param string $value (optional, string) Output formats inlcude json and xml. Defaults to json.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Sort input for this TopPhraseSources Choreo.
     *
     * @param string $value (optional, string) The metric on which to sort top results. Acceptable inputs: tfidf or count. Defaults to tfidf.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartDate input for this TopPhraseSources Choreo.
     *
     * @param string $value (optional, string) Limit results to those on or after the given date. Format: YYYY-MM-DD
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the State input for this TopPhraseSources Choreo.
     *
     * @param string $value (optional, string) Limit results to members from a particular state. Format: 2-letter state abbreviation (e.g. MD, RI, NY)
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the TopPhraseSources Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_TopPhraseSources_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopPhraseSources Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopPhraseSources execution.
     * @param SunlightLabs_CapitolWords_TopPhraseSources $choreo The choreography object for this execution.
     * @param SunlightLabs_CapitolWords_TopPhraseSources_Inputs|array $inputs (optional) Inputs as SunlightLabs_CapitolWords_TopPhraseSources_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_CapitolWords_TopPhraseSources $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopPhraseSources execution.
     *
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Results New results object.
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
     * Wraps results in appropriate results class for this TopPhraseSources execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_CapitolWords_TopPhraseSources_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopPhraseSources Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_TopPhraseSources_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopPhraseSources Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_CapitolWords_TopPhraseSources_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopPhraseSources execution.
     *
     * @return string (json) The response from CapitolWords.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all districts that overlap the area for a given zip code.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_District_GetDistrictsByZip extends Temboo_Choreography
{
    /**
     * Returns all districts that overlap the area for a given zip code.
     *
     * @param Temboo_Session $session The session that owns this GetDistrictsByZip Choreo.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/District/GetDistrictsByZip/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDistrictsByZip Choreo.
     *
     * @param SunlightLabs_Congress_District_GetDistrictsByZip_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_District_GetDistrictsByZip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_District_GetDistrictsByZip_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDistrictsByZip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_District_GetDistrictsByZip_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDistrictsByZip Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_District_GetDistrictsByZip_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDistrictsByZip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDistrictsByZip input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetDistrictsByZip Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetDistrictsByZip Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Zip input for this GetDistrictsByZip Choreo.
     *
     * @param string $value (required, string) The zip code for the districts to return.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the GetDistrictsByZip Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_District_GetDistrictsByZip_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDistrictsByZip Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDistrictsByZip execution.
     * @param SunlightLabs_Congress_District_GetDistrictsByZip $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_District_GetDistrictsByZip_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_District_GetDistrictsByZip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_District_GetDistrictsByZip $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDistrictsByZip execution.
     *
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Results New results object.
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
     * Wraps results in appropriate results class for this GetDistrictsByZip execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_District_GetDistrictsByZip_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDistrictsByZip Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_District_GetDistrictsByZip_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDistrictsByZip Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_District_GetDistrictsByZip_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDistrictsByZip execution.
     *
     * @return string The response from the Sunlight Congress API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the popularity of a given phrase in the Congressional Record over time.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_Dates extends Temboo_Choreography
{
    /**
     * Returns the popularity of a given phrase in the Congressional Record over time.
     *
     * @param Temboo_Session $session The session that owns this Dates Choreo.
     * @return SunlightLabs_CapitolWords_Dates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/CapitolWords/Dates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Dates Choreo.
     *
     * @param SunlightLabs_CapitolWords_Dates_Inputs|array $inputs (optional) Inputs as SunlightLabs_CapitolWords_Dates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_CapitolWords_Dates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_CapitolWords_Dates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Dates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_CapitolWords_Dates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_CapitolWords_Dates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Dates Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_Dates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Dates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_CapitolWords_Dates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Dates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Dates Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BioguideID input for this Dates Choreo.
     *
     * @param string $value (optional, string) Limit results to the member of Congress with the given Bioguide ID. The Bioguide ID of any current or past congressional member can be found at bioguide.congress.gov.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setBioguideID($value)
    {
        return $this->set('BioguideID', $value);
    }

    /**
     * Set the value for the Chamber input for this Dates Choreo.
     *
     * @param string $value (optional, string) Limit results to a particular chamber. Valid values: house, senate, extensions.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setChamber($value)
    {
        return $this->set('Chamber', $value);
    }

    /**
     * Set the value for the Date input for this Dates Choreo.
     *
     * @param string $value (optional, string) Show results for only the given date. Format: YYYY-MM-DD
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the EndDate input for this Dates Choreo.
     *
     * @param string $value (optional, string) Limit results to those on or before the given date. Format: YYYY-MM-DD.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Granularity input for this Dates Choreo.
     *
     * @param string $value (optional, string) The length of time covered by each result. Valid values: year, month, day. Defaults to day.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setGranularity($value)
    {
        return $this->set('Granularity', $value);
    }

    /**
     * Set the value for the MinCount input for this Dates Choreo.
     *
     * @param bool $value (optional, boolean) Only returns results where mentions are at or above the supplied threshold.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setMinCount($value)
    {
        return $this->set('MinCount', $value);
    }

    /**
     * Set the value for the Party input for this Dates Choreo.
     *
     * @param string $value (optional, string) Limit results to members of congress from a given party. Valid values: R, D, I.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setParty($value)
    {
        return $this->set('Party', $value);
    }

    /**
     * Set the value for the Percentages input for this Dates Choreo.
     *
     * @param string $value (optional, string) Include the percentage of mentions versus total words in the result objects. Valid values: true, false. Defaults to false.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setPercentages($value)
    {
        return $this->set('Percentages', $value);
    }

    /**
     * Set the value for the Phrase input for this Dates Choreo.
     *
     * @param string $value (required, string) The phrase to search for.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setPhrase($value)
    {
        return $this->set('Phrase', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Dates Choreo.
     *
     * @param string $value (optional, string) Output formats inlcude json and xml. Defaults to json.
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this Dates Choreo.
     *
     * @param string $value (optional, string) Limit results to those on or after the given date. Format: YYYY-MM-DD
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the State input for this Dates Choreo.
     *
     * @param string $value (optional, string) Limit results to members from a particular state. Format: 2-letter state abbreviation (e.g. MD, RI, NY)
     * @return SunlightLabs_CapitolWords_Dates_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }
}


/**
 * Execution object for the Dates Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_Dates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Dates Choreo.
     *
     * @param Temboo_Session $session The session that owns this Dates execution.
     * @param SunlightLabs_CapitolWords_Dates $choreo The choreography object for this execution.
     * @param SunlightLabs_CapitolWords_Dates_Inputs|array $inputs (optional) Inputs as SunlightLabs_CapitolWords_Dates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_CapitolWords_Dates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_CapitolWords_Dates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Dates execution.
     *
     * @return SunlightLabs_CapitolWords_Dates_Results New results object.
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
     * Wraps results in appropriate results class for this Dates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_CapitolWords_Dates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_CapitolWords_Dates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Dates Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_CapitolWords_Dates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Dates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_CapitolWords_Dates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Dates execution.
     *
     * @return string (json) The response from CapitolWords.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns details for a committee by id.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetCommittee extends Temboo_Choreography
{
    /**
     * Returns details for a committee by id.
     *
     * @param Temboo_Session $session The session that owns this GetCommittee Choreo.
     * @return SunlightLabs_Congress_Committee_GetCommittee New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/Committee/GetCommittee/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCommittee Choreo.
     *
     * @param SunlightLabs_Congress_Committee_GetCommittee_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Committee_GetCommittee_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_Committee_GetCommittee_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCommittee Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_Committee_GetCommittee_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCommittee Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetCommittee_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCommittee Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCommittee input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCommittee Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this GetCommittee Choreo.
     *
     * @param string $value (required, string) The id of a committee to return.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCommittee Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetCommittee Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetCommittee_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCommittee Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCommittee execution.
     * @param SunlightLabs_Congress_Committee_GetCommittee $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_Committee_GetCommittee_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Committee_GetCommittee_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_Committee_GetCommittee $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCommittee execution.
     *
     * @return SunlightLabs_Congress_Committee_GetCommittee_Results New results object.
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
     * Wraps results in appropriate results class for this GetCommittee execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_Committee_GetCommittee_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCommittee Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Committee_GetCommittee_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCommittee Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_Committee_GetCommittee_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCommittee execution.
     *
     * @return string The response from the Sunlight Congress API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all legislators that currently represent some portion of a given zipcode.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetByZip extends Temboo_Choreography
{
    /**
     * Returns all legislators that currently represent some portion of a given zipcode.
     *
     * @param Temboo_Session $session The session that owns this GetByZip Choreo.
     * @return SunlightLabs_Congress_Legislator_GetByZip New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/Legislator/GetByZip/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetByZip Choreo.
     *
     * @param SunlightLabs_Congress_Legislator_GetByZip_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_GetByZip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_Legislator_GetByZip_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetByZip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_Legislator_GetByZip_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetByZip Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetByZip_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetByZip Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetByZip input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetByZip Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetByZip Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Zip input for this GetByZip Choreo.
     *
     * @param string $value (required, string) A valid zip code used to return all legislators that currently represent some portion of a zip code.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the GetByZip Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetByZip_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetByZip Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetByZip execution.
     * @param SunlightLabs_Congress_Legislator_GetByZip $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_Legislator_GetByZip_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_GetByZip_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_Legislator_GetByZip $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetByZip execution.
     *
     * @return SunlightLabs_Congress_Legislator_GetByZip_Results New results object.
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
     * Wraps results in appropriate results class for this GetByZip execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_Legislator_GetByZip_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetByZip Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetByZip_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetByZip Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_Legislator_GetByZip_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetByZip execution.
     *
     * @return string The response from the Sunlight Congress API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to search for information on an individual legislator.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetLegislator extends Temboo_Choreography
{
    /**
     * Allows you to search for information on an individual legislator.
     *
     * @param Temboo_Session $session The session that owns this GetLegislator Choreo.
     * @return SunlightLabs_Congress_Legislator_GetLegislator New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/Legislator/GetLegislator/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLegislator Choreo.
     *
     * @param SunlightLabs_Congress_Legislator_GetLegislator_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_GetLegislator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_Legislator_GetLegislator_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLegislator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_Legislator_GetLegislator_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLegislator Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetLegislator_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLegislator Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLegislator input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetLegislator Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AllLegislators input for this GetLegislator Choreo.
     *
     * @param bool $value (optional, boolean) A boolean flag indicating to search for all legislators even when they are no longer in office.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setAllLegislators($value)
    {
        return $this->set('AllLegislators', $value);
    }

    /**
     * Set the value for the BioguideID input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) The bioguide_id of the legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setBioguideID($value)
    {
        return $this->set('BioguideID', $value);
    }

    /**
     * Set the value for the CRPID input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) The crp_id associated with a legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setCRPID($value)
    {
        return $this->set('CRPID', $value);
    }

    /**
     * Set the value for the District input for this GetLegislator Choreo.
     *
     * @param int $value (optional, integer) Narrows the search result by district number.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setDistrict($value)
    {
        return $this->set('District', $value);
    }

    /**
     * Set the value for the FECID input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) The fec_id associated with the legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setFECID($value)
    {
        return $this->set('FECID', $value);
    }

    /**
     * Set the value for the FacebookID input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) The facebook id of a legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setFacebookID($value)
    {
        return $this->set('FacebookID', $value);
    }

    /**
     * Set the value for the FirstName input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) The first name of a legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the Gender input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) Narrows the search result by gender.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setGender($value)
    {
        return $this->set('Gender', $value);
    }

    /**
     * Set the value for the GovTrackID input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) The govetrack_id associated with a legistlator to return.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setGovTrackID($value)
    {
        return $this->set('GovTrackID', $value);
    }

    /**
     * Set the value for the InOffice input for this GetLegislator Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not the individual is in office currently. Valid values are true or false.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setInOffice($value)
    {
        return $this->set('InOffice', $value);
    }

    /**
     * Set the value for the LastName input for this GetLegislator Choreo.
     *
     * @param string $value (conditional, string) The last name of the legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Party input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) Narrows the search result by party (i.e. "D" or "R").
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setParty($value)
    {
        return $this->set('Party', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) A state abbreviation to narrow the search results.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Title input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) The title associated with the individual to return.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the TwitterID input for this GetLegislator Choreo.
     *
     * @param string $value (optional, string) The twitter id of the legislator to return (note, this can be a twitter screen name).
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setTwitterID($value)
    {
        return $this->set('TwitterID', $value);
    }

    /**
     * Set the value for the VoteSmartID input for this GetLegislator Choreo.
     *
     * @param int $value (optional, integer) The votesmart_id of a legislator to return.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Inputs For method chaining.
     */
    public function setVoteSmartID($value)
    {
        return $this->set('VoteSmartID', $value);
    }
}


/**
 * Execution object for the GetLegislator Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetLegislator_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLegislator Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLegislator execution.
     * @param SunlightLabs_Congress_Legislator_GetLegislator $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_Legislator_GetLegislator_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_GetLegislator_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_Legislator_GetLegislator $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLegislator execution.
     *
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Results New results object.
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
     * Wraps results in appropriate results class for this GetLegislator execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_Legislator_GetLegislator_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLegislator Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetLegislator_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLegislator Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_Legislator_GetLegislator_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLegislator execution.
     *
     * @return string The response from the Sunlight Congress API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all legislators that currently represent an area (district or state) that contains a given Geo point. 
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetByCoordinates extends Temboo_Choreography
{
    /**
     * Returns all legislators that currently represent an area (district or state) that contains a given Geo point. 
     *
     * @param Temboo_Session $session The session that owns this GetByCoordinates Choreo.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/Legislator/GetByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetByCoordinates Choreo.
     *
     * @param SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_Legislator_GetByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetByCoordinates Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Latitude input for this GetByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate of the area that a legislator represents.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GetByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate of the area that a legislator represents.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetByCoordinates Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetByCoordinates execution.
     * @param SunlightLabs_Congress_Legislator_GetByCoordinates $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_Legislator_GetByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_Legislator_GetByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetByCoordinates execution.
     *
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this GetByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_Legislator_GetByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_Legislator_GetByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_Legislator_GetByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetByCoordinates execution.
     *
     * @return string The response from the Sunlight Congress API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the district that a set of latitude/longitude coordinates falls within.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_District_GetDistrictsByCoordinates extends Temboo_Choreography
{
    /**
     * Returns the district that a set of latitude/longitude coordinates falls within.
     *
     * @param Temboo_Session $session The session that owns this GetDistrictsByCoordinates Choreo.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SunlightLabs/Congress/District/GetDistrictsByCoordinates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDistrictsByCoordinates Choreo.
     *
     * @param SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SunlightLabs_Congress_District_GetDistrictsByCoordinates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDistrictsByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDistrictsByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDistrictsByCoordinates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDistrictsByCoordinates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetDistrictsByCoordinates Choreo.
     *
     * @param string $value (required, string) The API Key provided by Sunlight Labs.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Latitude input for this GetDistrictsByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The latitude coordinate of the area that a legislator represents.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this GetDistrictsByCoordinates Choreo.
     *
     * @param float $value (required, decimal) The longitude coordinate of the area that a legislator represents.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetDistrictsByCoordinates Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetDistrictsByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_District_GetDistrictsByCoordinates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDistrictsByCoordinates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDistrictsByCoordinates execution.
     * @param SunlightLabs_Congress_District_GetDistrictsByCoordinates $choreo The choreography object for this execution.
     * @param SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs|array $inputs (optional) Inputs as SunlightLabs_Congress_District_GetDistrictsByCoordinates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SunlightLabs_Congress_District_GetDistrictsByCoordinates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDistrictsByCoordinates execution.
     *
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Results New results object.
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
     * Wraps results in appropriate results class for this GetDistrictsByCoordinates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SunlightLabs_Congress_District_GetDistrictsByCoordinates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDistrictsByCoordinates Choreo.
 *
 * @package Temboo
 * @subpackage SunlightLabs
 */
class SunlightLabs_Congress_District_GetDistrictsByCoordinates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDistrictsByCoordinates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SunlightLabs_Congress_District_GetDistrictsByCoordinates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDistrictsByCoordinates execution.
     *
     * @return string The response from the Sunlight Congress API.
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
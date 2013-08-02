<?php

/**
 * Temboo PHP SDK DonorsChoose classes
 *
 * Execute Choreographies from the Temboo DonorsChoose bundle.
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
 * @subpackage DonorsChoose
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Allows you to projects subjects by keyword.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_SearchProjectsByKeyword extends Temboo_Choreography
{
    /**
     * Allows you to projects subjects by keyword.
     *
     * @param Temboo_Session $session The session that owns this SearchProjectsByKeyword Choreo.
     * @return DonorsChoose_SearchProjectsByKeyword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DonorsChoose/SearchProjectsByKeyword/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchProjectsByKeyword Choreo.
     *
     * @param DonorsChoose_SearchProjectsByKeyword_Inputs|array $inputs (optional) Inputs as DonorsChoose_SearchProjectsByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_SearchProjectsByKeyword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DonorsChoose_SearchProjectsByKeyword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchProjectsByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_SearchProjectsByKeyword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DonorsChoose_SearchProjectsByKeyword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchProjectsByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_SearchProjectsByKeyword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchProjectsByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_SearchProjectsByKeyword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchProjectsByKeyword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DonorsChoose_SearchProjectsByKeyword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DonorsChoose_SearchProjectsByKeyword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchProjectsByKeyword Choreo.
     *
     * @param string $value (optional, string) The APIKey provided by DonorsChoose.org. Defaults to the test  APIKey 'DONORSCHOOSE'.
     * @return DonorsChoose_SearchProjectsByKeyword_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Keyword input for this SearchProjectsByKeyword Choreo.
     *
     * @param string $value (required, string) Allows you to search for subjects using keyword search
     * @return DonorsChoose_SearchProjectsByKeyword_Inputs For method chaining.
     */
    public function setKeyword($value)
    {
        return $this->set('Keyword', $value);
    }

    /**
     * Set the value for the Max input for this SearchProjectsByKeyword Choreo.
     *
     * @param int $value (optional, integer) The max number of projects to return. Can return up to 50 rows at a time. Defaults to 10 when left empty.
     * @return DonorsChoose_SearchProjectsByKeyword_Inputs For method chaining.
     */
    public function setMax($value)
    {
        return $this->set('Max', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SearchProjectsByKeyword Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return DonorsChoose_SearchProjectsByKeyword_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the SearchProjectsByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_SearchProjectsByKeyword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchProjectsByKeyword Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchProjectsByKeyword execution.
     * @param DonorsChoose_SearchProjectsByKeyword $choreo The choreography object for this execution.
     * @param DonorsChoose_SearchProjectsByKeyword_Inputs|array $inputs (optional) Inputs as DonorsChoose_SearchProjectsByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_SearchProjectsByKeyword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DonorsChoose_SearchProjectsByKeyword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchProjectsByKeyword execution.
     *
     * @return DonorsChoose_SearchProjectsByKeyword_Results New results object.
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
     * Wraps results in appropriate results class for this SearchProjectsByKeyword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DonorsChoose_SearchProjectsByKeyword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DonorsChoose_SearchProjectsByKeyword_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchProjectsByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_SearchProjectsByKeyword_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchProjectsByKeyword Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DonorsChoose_SearchProjectsByKeyword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchProjectsByKeyword execution.
     *
     * @return string The response from DonorsChoose.org
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns results for projects within the Health and Sports category.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_HealthAndSports extends Temboo_Choreography
{
    /**
     * Returns results for projects within the Health and Sports category.
     *
     * @param Temboo_Session $session The session that owns this HealthAndSports Choreo.
     * @return DonorsChoose_HealthAndSports New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DonorsChoose/HealthAndSports/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HealthAndSports Choreo.
     *
     * @param DonorsChoose_HealthAndSports_Inputs|array $inputs (optional) Inputs as DonorsChoose_HealthAndSports_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_HealthAndSports_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DonorsChoose_HealthAndSports_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HealthAndSports Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_HealthAndSports_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DonorsChoose_HealthAndSports_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HealthAndSports Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_HealthAndSports_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HealthAndSports Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_HealthAndSports_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HealthAndSports input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DonorsChoose_HealthAndSports_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DonorsChoose_HealthAndSports_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this HealthAndSports Choreo.
     *
     * @param string $value (optional, string) The APIKey provided by DonorsChoose.org. Defaults to the test  APIKey 'DONORSCHOOSE'.
     * @return DonorsChoose_HealthAndSports_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this HealthAndSports Choreo.
     *
     * @param int $value (optional, integer) The number of the first row to return in the result. For example, if index=10, the results could show rows 10-59.
     * @return DonorsChoose_HealthAndSports_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Max input for this HealthAndSports Choreo.
     *
     * @param int $value (optional, integer) The max number of projects to return. Can return up to 50 rows at a time. Defaults to 10 when left empty.
     * @return DonorsChoose_HealthAndSports_Inputs For method chaining.
     */
    public function setMax($value)
    {
        return $this->set('Max', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this HealthAndSports Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return DonorsChoose_HealthAndSports_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShowCounts input for this HealthAndSports Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to return facet counts in the response
     * @return DonorsChoose_HealthAndSports_Inputs For method chaining.
     */
    public function setShowCounts($value)
    {
        return $this->set('ShowCounts', $value);
    }

    /**
     * Set the value for the ShowSynopsis input for this HealthAndSports Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to show the synopsis for each project listing
     * @return DonorsChoose_HealthAndSports_Inputs For method chaining.
     */
    public function setShowSynopsis($value)
    {
        return $this->set('ShowSynopsis', $value);
    }

    /**
     * Set the value for the Subject input for this HealthAndSports Choreo.
     *
     * @param string $value (optional, string) Enter a sub-category of Health & Sports. When left empty, all Health & Sports projects are returned.
     * @return DonorsChoose_HealthAndSports_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }
}


/**
 * Execution object for the HealthAndSports Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_HealthAndSports_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HealthAndSports Choreo.
     *
     * @param Temboo_Session $session The session that owns this HealthAndSports execution.
     * @param DonorsChoose_HealthAndSports $choreo The choreography object for this execution.
     * @param DonorsChoose_HealthAndSports_Inputs|array $inputs (optional) Inputs as DonorsChoose_HealthAndSports_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_HealthAndSports_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DonorsChoose_HealthAndSports $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HealthAndSports execution.
     *
     * @return DonorsChoose_HealthAndSports_Results New results object.
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
     * Wraps results in appropriate results class for this HealthAndSports execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DonorsChoose_HealthAndSports_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DonorsChoose_HealthAndSports_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HealthAndSports Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_HealthAndSports_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HealthAndSports Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DonorsChoose_HealthAndSports_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this HealthAndSports execution.
     *
     * @return string The response from DonorsChoose.org
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns results for projects within the Special Needs category.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_SpecialNeeds extends Temboo_Choreography
{
    /**
     * Returns results for projects within the Special Needs category.
     *
     * @param Temboo_Session $session The session that owns this SpecialNeeds Choreo.
     * @return DonorsChoose_SpecialNeeds New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DonorsChoose/SpecialNeeds/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SpecialNeeds Choreo.
     *
     * @param DonorsChoose_SpecialNeeds_Inputs|array $inputs (optional) Inputs as DonorsChoose_SpecialNeeds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_SpecialNeeds_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DonorsChoose_SpecialNeeds_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SpecialNeeds Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_SpecialNeeds_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DonorsChoose_SpecialNeeds_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SpecialNeeds Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_SpecialNeeds_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SpecialNeeds Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_SpecialNeeds_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SpecialNeeds input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DonorsChoose_SpecialNeeds_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DonorsChoose_SpecialNeeds_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SpecialNeeds Choreo.
     *
     * @param string $value (optional, string) The APIKey provided by DonorsChoose.org. Defaults to the test  APIKey 'DONORSCHOOSE'.
     * @return DonorsChoose_SpecialNeeds_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this SpecialNeeds Choreo.
     *
     * @param int $value (optional, integer) The number of the first row to return in the result. For example, if index=10, the results could show rows 10-59.
     * @return DonorsChoose_SpecialNeeds_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Max input for this SpecialNeeds Choreo.
     *
     * @param int $value (optional, integer) The max number of projects to return. Can return up to 50 rows at a time. Defaults to 10 when left empty.
     * @return DonorsChoose_SpecialNeeds_Inputs For method chaining.
     */
    public function setMax($value)
    {
        return $this->set('Max', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SpecialNeeds Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return DonorsChoose_SpecialNeeds_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShowSynopsis input for this SpecialNeeds Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to show the synopsis for each project listing
     * @return DonorsChoose_SpecialNeeds_Inputs For method chaining.
     */
    public function setShowSynopsis($value)
    {
        return $this->set('ShowSynopsis', $value);
    }
}


/**
 * Execution object for the SpecialNeeds Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_SpecialNeeds_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SpecialNeeds Choreo.
     *
     * @param Temboo_Session $session The session that owns this SpecialNeeds execution.
     * @param DonorsChoose_SpecialNeeds $choreo The choreography object for this execution.
     * @param DonorsChoose_SpecialNeeds_Inputs|array $inputs (optional) Inputs as DonorsChoose_SpecialNeeds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_SpecialNeeds_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DonorsChoose_SpecialNeeds $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SpecialNeeds execution.
     *
     * @return DonorsChoose_SpecialNeeds_Results New results object.
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
     * Wraps results in appropriate results class for this SpecialNeeds execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DonorsChoose_SpecialNeeds_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DonorsChoose_SpecialNeeds_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SpecialNeeds Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_SpecialNeeds_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SpecialNeeds Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DonorsChoose_SpecialNeeds_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SpecialNeeds execution.
     *
     * @return string The response from DonorsChoose.org
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns results for projects within the Math and Science category.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_MathAndScience extends Temboo_Choreography
{
    /**
     * Returns results for projects within the Math and Science category.
     *
     * @param Temboo_Session $session The session that owns this MathAndScience Choreo.
     * @return DonorsChoose_MathAndScience New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DonorsChoose/MathAndScience/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MathAndScience Choreo.
     *
     * @param DonorsChoose_MathAndScience_Inputs|array $inputs (optional) Inputs as DonorsChoose_MathAndScience_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_MathAndScience_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DonorsChoose_MathAndScience_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MathAndScience Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_MathAndScience_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DonorsChoose_MathAndScience_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MathAndScience Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_MathAndScience_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MathAndScience Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_MathAndScience_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MathAndScience input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DonorsChoose_MathAndScience_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DonorsChoose_MathAndScience_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this MathAndScience Choreo.
     *
     * @param string $value (optional, string) The APIKey provided by DonorsChoose.org. Defaults to the test  APIKey 'DONORSCHOOSE'.
     * @return DonorsChoose_MathAndScience_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this MathAndScience Choreo.
     *
     * @param int $value (optional, integer) The number of the first row to return in the result. For example, if index=10, the results could show rows 10-59.
     * @return DonorsChoose_MathAndScience_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Max input for this MathAndScience Choreo.
     *
     * @param int $value (optional, integer) The max number of projects to return. Can return up to 50 rows at a time. Defaults to 10 when left empty.
     * @return DonorsChoose_MathAndScience_Inputs For method chaining.
     */
    public function setMax($value)
    {
        return $this->set('Max', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this MathAndScience Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return DonorsChoose_MathAndScience_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShowSynopsis input for this MathAndScience Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to show the synopsis for each project listing
     * @return DonorsChoose_MathAndScience_Inputs For method chaining.
     */
    public function setShowSynopsis($value)
    {
        return $this->set('ShowSynopsis', $value);
    }

    /**
     * Set the value for the Subject input for this MathAndScience Choreo.
     *
     * @param string $value (optional, string) Enter a sub-category of Math & Science. When left empty, all Math & Science projects are returned.
     * @return DonorsChoose_MathAndScience_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }
}


/**
 * Execution object for the MathAndScience Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_MathAndScience_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MathAndScience Choreo.
     *
     * @param Temboo_Session $session The session that owns this MathAndScience execution.
     * @param DonorsChoose_MathAndScience $choreo The choreography object for this execution.
     * @param DonorsChoose_MathAndScience_Inputs|array $inputs (optional) Inputs as DonorsChoose_MathAndScience_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_MathAndScience_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DonorsChoose_MathAndScience $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MathAndScience execution.
     *
     * @return DonorsChoose_MathAndScience_Results New results object.
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
     * Wraps results in appropriate results class for this MathAndScience execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DonorsChoose_MathAndScience_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DonorsChoose_MathAndScience_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MathAndScience Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_MathAndScience_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MathAndScience Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DonorsChoose_MathAndScience_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this MathAndScience execution.
     *
     * @return string The response from DonorsChoose.org
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns results for projects within the Literacy and Language category.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_LiteracyAndLanguage extends Temboo_Choreography
{
    /**
     * Returns results for projects within the Literacy and Language category.
     *
     * @param Temboo_Session $session The session that owns this LiteracyAndLanguage Choreo.
     * @return DonorsChoose_LiteracyAndLanguage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DonorsChoose/LiteracyAndLanguage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LiteracyAndLanguage Choreo.
     *
     * @param DonorsChoose_LiteracyAndLanguage_Inputs|array $inputs (optional) Inputs as DonorsChoose_LiteracyAndLanguage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_LiteracyAndLanguage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DonorsChoose_LiteracyAndLanguage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LiteracyAndLanguage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_LiteracyAndLanguage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DonorsChoose_LiteracyAndLanguage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LiteracyAndLanguage Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_LiteracyAndLanguage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LiteracyAndLanguage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_LiteracyAndLanguage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LiteracyAndLanguage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DonorsChoose_LiteracyAndLanguage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DonorsChoose_LiteracyAndLanguage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this LiteracyAndLanguage Choreo.
     *
     * @param string $value (optional, string) The APIKey provided by DonorsChoose.org. Defaults to the test  APIKey 'DONORSCHOOSE'.
     * @return DonorsChoose_LiteracyAndLanguage_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this LiteracyAndLanguage Choreo.
     *
     * @param int $value (optional, integer) The number of the first row to return in the result. For example, if index=10, the results could show rows 10-59.
     * @return DonorsChoose_LiteracyAndLanguage_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Max input for this LiteracyAndLanguage Choreo.
     *
     * @param int $value (optional, integer) The max number of projects to return. Can return up to 50 rows at a time. Defaults to 10 when left empty.
     * @return DonorsChoose_LiteracyAndLanguage_Inputs For method chaining.
     */
    public function setMax($value)
    {
        return $this->set('Max', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LiteracyAndLanguage Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return DonorsChoose_LiteracyAndLanguage_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShowCounts input for this LiteracyAndLanguage Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to return facet counts in the response
     * @return DonorsChoose_LiteracyAndLanguage_Inputs For method chaining.
     */
    public function setShowCounts($value)
    {
        return $this->set('ShowCounts', $value);
    }

    /**
     * Set the value for the ShowSynopsis input for this LiteracyAndLanguage Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to show the synopsis for each project listing
     * @return DonorsChoose_LiteracyAndLanguage_Inputs For method chaining.
     */
    public function setShowSynopsis($value)
    {
        return $this->set('ShowSynopsis', $value);
    }

    /**
     * Set the value for the Subject input for this LiteracyAndLanguage Choreo.
     *
     * @param string $value (optional, string) Enter a sub-category of Literacy & Language. When left empty, all Literacy & Language projects are returned.
     * @return DonorsChoose_LiteracyAndLanguage_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }
}


/**
 * Execution object for the LiteracyAndLanguage Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_LiteracyAndLanguage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LiteracyAndLanguage Choreo.
     *
     * @param Temboo_Session $session The session that owns this LiteracyAndLanguage execution.
     * @param DonorsChoose_LiteracyAndLanguage $choreo The choreography object for this execution.
     * @param DonorsChoose_LiteracyAndLanguage_Inputs|array $inputs (optional) Inputs as DonorsChoose_LiteracyAndLanguage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_LiteracyAndLanguage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DonorsChoose_LiteracyAndLanguage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LiteracyAndLanguage execution.
     *
     * @return DonorsChoose_LiteracyAndLanguage_Results New results object.
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
     * Wraps results in appropriate results class for this LiteracyAndLanguage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DonorsChoose_LiteracyAndLanguage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DonorsChoose_LiteracyAndLanguage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LiteracyAndLanguage Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_LiteracyAndLanguage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LiteracyAndLanguage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DonorsChoose_LiteracyAndLanguage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LiteracyAndLanguage execution.
     *
     * @return string The response from DonorsChoose.org
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns results for projects within the History and Civics category.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_HistoryAndCivics extends Temboo_Choreography
{
    /**
     * Returns results for projects within the History and Civics category.
     *
     * @param Temboo_Session $session The session that owns this HistoryAndCivics Choreo.
     * @return DonorsChoose_HistoryAndCivics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DonorsChoose/HistoryAndCivics/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HistoryAndCivics Choreo.
     *
     * @param DonorsChoose_HistoryAndCivics_Inputs|array $inputs (optional) Inputs as DonorsChoose_HistoryAndCivics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_HistoryAndCivics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DonorsChoose_HistoryAndCivics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HistoryAndCivics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_HistoryAndCivics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DonorsChoose_HistoryAndCivics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HistoryAndCivics Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_HistoryAndCivics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HistoryAndCivics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_HistoryAndCivics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HistoryAndCivics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DonorsChoose_HistoryAndCivics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DonorsChoose_HistoryAndCivics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this HistoryAndCivics Choreo.
     *
     * @param string $value (optional, string) The APIKey provided by DonorsChoose.org. Defaults to the test  APIKey 'DONORSCHOOSE'.
     * @return DonorsChoose_HistoryAndCivics_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this HistoryAndCivics Choreo.
     *
     * @param int $value (optional, integer) The number of the first row to return in the result. For example, if index=10, the results could show rows 10-59.
     * @return DonorsChoose_HistoryAndCivics_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Max input for this HistoryAndCivics Choreo.
     *
     * @param int $value (optional, integer) The max number of projects to return. Can return up to 50 rows at a time. Defaults to 10 when left empty.
     * @return DonorsChoose_HistoryAndCivics_Inputs For method chaining.
     */
    public function setMax($value)
    {
        return $this->set('Max', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this HistoryAndCivics Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return DonorsChoose_HistoryAndCivics_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShowCounts input for this HistoryAndCivics Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to return facet counts in the response
     * @return DonorsChoose_HistoryAndCivics_Inputs For method chaining.
     */
    public function setShowCounts($value)
    {
        return $this->set('ShowCounts', $value);
    }

    /**
     * Set the value for the ShowSynopsis input for this HistoryAndCivics Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to show the synopsis for each project listing
     * @return DonorsChoose_HistoryAndCivics_Inputs For method chaining.
     */
    public function setShowSynopsis($value)
    {
        return $this->set('ShowSynopsis', $value);
    }

    /**
     * Set the value for the Subject input for this HistoryAndCivics Choreo.
     *
     * @param string $value (optional, string) Enter a sub-category of History & Civics. When left empty, all History & Civics projects are returned.
     * @return DonorsChoose_HistoryAndCivics_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }
}


/**
 * Execution object for the HistoryAndCivics Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_HistoryAndCivics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HistoryAndCivics Choreo.
     *
     * @param Temboo_Session $session The session that owns this HistoryAndCivics execution.
     * @param DonorsChoose_HistoryAndCivics $choreo The choreography object for this execution.
     * @param DonorsChoose_HistoryAndCivics_Inputs|array $inputs (optional) Inputs as DonorsChoose_HistoryAndCivics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_HistoryAndCivics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DonorsChoose_HistoryAndCivics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HistoryAndCivics execution.
     *
     * @return DonorsChoose_HistoryAndCivics_Results New results object.
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
     * Wraps results in appropriate results class for this HistoryAndCivics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DonorsChoose_HistoryAndCivics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DonorsChoose_HistoryAndCivics_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HistoryAndCivics Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_HistoryAndCivics_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HistoryAndCivics Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DonorsChoose_HistoryAndCivics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this HistoryAndCivics execution.
     *
     * @return string The response from DonorsChoose.org
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Makes a donation to a specified DonorsChoose.org project.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_DonateToProject extends Temboo_Choreography
{
    /**
     * Makes a donation to a specified DonorsChoose.org project.
     *
     * @param Temboo_Session $session The session that owns this DonateToProject Choreo.
     * @return DonorsChoose_DonateToProject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DonorsChoose/DonateToProject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DonateToProject Choreo.
     *
     * @param DonorsChoose_DonateToProject_Inputs|array $inputs (optional) Inputs as DonorsChoose_DonateToProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_DonateToProject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DonorsChoose_DonateToProject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DonateToProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_DonateToProject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DonorsChoose_DonateToProject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DonateToProject Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_DonateToProject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DonateToProject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_DonateToProject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DonateToProject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DonateToProject Choreo.
     *
     * @param string $value (required, string) The APIKey provided by DonorsChoose.org.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIPassword input for this DonateToProject Choreo.
     *
     * @param string $value (required, string) Your DonorsChoose.org API password. This is only required when performing transactions.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setAPIPassword($value)
    {
        return $this->set('APIPassword', $value);
    }

    /**
     * Set the value for the Address1 input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) Line one of the donor's address.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setAddress1($value)
    {
        return $this->set('Address1', $value);
    }

    /**
     * Set the value for the Address2 input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) Line two of the donor's address.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setAddress2($value)
    {
        return $this->set('Address2', $value);
    }

    /**
     * Set the value for the Amount input for this DonateToProject Choreo.
     *
     * @param int $value (required, integer) The donation amount. Must be a whole number.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Callback input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) To wrap the response in a callback function, include the name in this input.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setCallback($value)
    {
        return $this->set('Callback', $value);
    }

    /**
     * Set the value for the City input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) The donor's city.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Email input for this DonateToProject Choreo.
     *
     * @param string $value (required, string) The email address of the person who is making the donation.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FirstName input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) The first name of the donor.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the LastName input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) The last name of the donor.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the ProposalId input for this DonateToProject Choreo.
     *
     * @param int $value (required, integer) The ID of the project that will receive the donation.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setProposalId($value)
    {
        return $this->set('ProposalId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Salutation input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) Hwo the donor wants to be acknowledged on donorschoose.org.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setSalutation($value)
    {
        return $this->set('Salutation', $value);
    }

    /**
     * Set the value for the State input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) The donor's state.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Zip input for this DonateToProject Choreo.
     *
     * @param string $value (optional, string) The donor's five-digit zip code.
     * @return DonorsChoose_DonateToProject_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the DonateToProject Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_DonateToProject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DonateToProject Choreo.
     *
     * @param Temboo_Session $session The session that owns this DonateToProject execution.
     * @param DonorsChoose_DonateToProject $choreo The choreography object for this execution.
     * @param DonorsChoose_DonateToProject_Inputs|array $inputs (optional) Inputs as DonorsChoose_DonateToProject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_DonateToProject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DonorsChoose_DonateToProject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DonateToProject execution.
     *
     * @return DonorsChoose_DonateToProject_Results New results object.
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
     * Wraps results in appropriate results class for this DonateToProject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DonorsChoose_DonateToProject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DonorsChoose_DonateToProject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DonateToProject Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_DonateToProject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DonateToProject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DonorsChoose_DonateToProject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DonateToProject execution.
     *
     * @return string The response from DonorsChoose.org.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns results for projects within the Music and The Arts category.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_MusicAndTheArts extends Temboo_Choreography
{
    /**
     * Returns results for projects within the Music and The Arts category.
     *
     * @param Temboo_Session $session The session that owns this MusicAndTheArts Choreo.
     * @return DonorsChoose_MusicAndTheArts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DonorsChoose/MusicAndTheArts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MusicAndTheArts Choreo.
     *
     * @param DonorsChoose_MusicAndTheArts_Inputs|array $inputs (optional) Inputs as DonorsChoose_MusicAndTheArts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_MusicAndTheArts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DonorsChoose_MusicAndTheArts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MusicAndTheArts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_MusicAndTheArts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DonorsChoose_MusicAndTheArts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MusicAndTheArts Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_MusicAndTheArts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MusicAndTheArts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_MusicAndTheArts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MusicAndTheArts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DonorsChoose_MusicAndTheArts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DonorsChoose_MusicAndTheArts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this MusicAndTheArts Choreo.
     *
     * @param string $value (optional, string) The APIKey provided by DonorsChoose.org. Defaults to the test  APIKey 'DONORSCHOOSE'.
     * @return DonorsChoose_MusicAndTheArts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this MusicAndTheArts Choreo.
     *
     * @param int $value (optional, integer) The number of the first row to return in the result. For example, if index=10, the results could show rows 10-59.
     * @return DonorsChoose_MusicAndTheArts_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Max input for this MusicAndTheArts Choreo.
     *
     * @param int $value (optional, integer) The max number of projects to return. Can return up to 50 rows at a time. Defaults to 10 when left empty.
     * @return DonorsChoose_MusicAndTheArts_Inputs For method chaining.
     */
    public function setMax($value)
    {
        return $this->set('Max', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this MusicAndTheArts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return DonorsChoose_MusicAndTheArts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShowCounts input for this MusicAndTheArts Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to return facet counts in the response
     * @return DonorsChoose_MusicAndTheArts_Inputs For method chaining.
     */
    public function setShowCounts($value)
    {
        return $this->set('ShowCounts', $value);
    }

    /**
     * Set the value for the ShowSynopsis input for this MusicAndTheArts Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to show the synopsis for each project listing
     * @return DonorsChoose_MusicAndTheArts_Inputs For method chaining.
     */
    public function setShowSynopsis($value)
    {
        return $this->set('ShowSynopsis', $value);
    }

    /**
     * Set the value for the Subject input for this MusicAndTheArts Choreo.
     *
     * @param string $value (optional, string) Enter a sub-category of Music & The Arts. When left empty, all Art & Music projects are returned.
     * @return DonorsChoose_MusicAndTheArts_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }
}


/**
 * Execution object for the MusicAndTheArts Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_MusicAndTheArts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MusicAndTheArts Choreo.
     *
     * @param Temboo_Session $session The session that owns this MusicAndTheArts execution.
     * @param DonorsChoose_MusicAndTheArts $choreo The choreography object for this execution.
     * @param DonorsChoose_MusicAndTheArts_Inputs|array $inputs (optional) Inputs as DonorsChoose_MusicAndTheArts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_MusicAndTheArts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DonorsChoose_MusicAndTheArts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MusicAndTheArts execution.
     *
     * @return DonorsChoose_MusicAndTheArts_Results New results object.
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
     * Wraps results in appropriate results class for this MusicAndTheArts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DonorsChoose_MusicAndTheArts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DonorsChoose_MusicAndTheArts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MusicAndTheArts Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_MusicAndTheArts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MusicAndTheArts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DonorsChoose_MusicAndTheArts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this MusicAndTheArts execution.
     *
     * @return string The response from DonorsChoose.org
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns results for projects within the Applied Learning category.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_AppliedLearning extends Temboo_Choreography
{
    /**
     * Returns results for projects within the Applied Learning category.
     *
     * @param Temboo_Session $session The session that owns this AppliedLearning Choreo.
     * @return DonorsChoose_AppliedLearning New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DonorsChoose/AppliedLearning/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AppliedLearning Choreo.
     *
     * @param DonorsChoose_AppliedLearning_Inputs|array $inputs (optional) Inputs as DonorsChoose_AppliedLearning_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_AppliedLearning_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DonorsChoose_AppliedLearning_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AppliedLearning Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_AppliedLearning_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DonorsChoose_AppliedLearning_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AppliedLearning Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_AppliedLearning_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AppliedLearning Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DonorsChoose_AppliedLearning_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AppliedLearning input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DonorsChoose_AppliedLearning_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DonorsChoose_AppliedLearning_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AppliedLearning Choreo.
     *
     * @param string $value (optional, string) The APIKey provided by DonorsChoose.org. Defaults to the test  APIKey 'DONORSCHOOSE'.
     * @return DonorsChoose_AppliedLearning_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Index input for this AppliedLearning Choreo.
     *
     * @param int $value (optional, integer) The number of the first row to return in the result. For example, if index=10, the results could show rows 10-59.
     * @return DonorsChoose_AppliedLearning_Inputs For method chaining.
     */
    public function setIndex($value)
    {
        return $this->set('Index', $value);
    }

    /**
     * Set the value for the Max input for this AppliedLearning Choreo.
     *
     * @param int $value (optional, integer) The max number of projects to return. Can return up to 50 rows at a time. Defaults to 10 when left empty.
     * @return DonorsChoose_AppliedLearning_Inputs For method chaining.
     */
    public function setMax($value)
    {
        return $this->set('Max', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AppliedLearning Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Can be set to xml or json. Defaults to xml.
     * @return DonorsChoose_AppliedLearning_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShowCounts input for this AppliedLearning Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to return facet counts in the response
     * @return DonorsChoose_AppliedLearning_Inputs For method chaining.
     */
    public function setShowCounts($value)
    {
        return $this->set('ShowCounts', $value);
    }

    /**
     * Set the value for the ShowSynopsis input for this AppliedLearning Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to show the synopsis for each project listing
     * @return DonorsChoose_AppliedLearning_Inputs For method chaining.
     */
    public function setShowSynopsis($value)
    {
        return $this->set('ShowSynopsis', $value);
    }

    /**
     * Set the value for the Subject input for this AppliedLearning Choreo.
     *
     * @param string $value (optional, string) Enter a sub-category of Applied Learning. When left empty, all Applied Learning projects are returned.
     * @return DonorsChoose_AppliedLearning_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }
}


/**
 * Execution object for the AppliedLearning Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_AppliedLearning_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AppliedLearning Choreo.
     *
     * @param Temboo_Session $session The session that owns this AppliedLearning execution.
     * @param DonorsChoose_AppliedLearning $choreo The choreography object for this execution.
     * @param DonorsChoose_AppliedLearning_Inputs|array $inputs (optional) Inputs as DonorsChoose_AppliedLearning_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DonorsChoose_AppliedLearning_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DonorsChoose_AppliedLearning $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AppliedLearning execution.
     *
     * @return DonorsChoose_AppliedLearning_Results New results object.
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
     * Wraps results in appropriate results class for this AppliedLearning execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DonorsChoose_AppliedLearning_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DonorsChoose_AppliedLearning_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AppliedLearning Choreo.
 *
 * @package Temboo
 * @subpackage DonorsChoose
 */
class DonorsChoose_AppliedLearning_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AppliedLearning Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DonorsChoose_AppliedLearning_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AppliedLearning execution.
     *
     * @return string The response from DonorsChoose.org
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
<?php

/**
 * Temboo PHP SDK DailyMed classes
 *
 * Execute Choreographies from the Temboo DailyMed bundle.
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
 * @subpackage DailyMed
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns the records available in the DailyMed database associated with a given drug.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_Query extends Temboo_Choreography
{
    /**
     * Returns the records available in the DailyMed database associated with a given drug.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return DailyMed_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DailyMed/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param DailyMed_Query_Inputs|array $inputs (optional) Inputs as DailyMed_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DailyMed_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DailyMed_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DailyMed_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DailyMed_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DailyMed_Query_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Query input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DailyMed_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DailyMed_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Components input for this Query Choreo.
     *
     * @param string $value (optional, string) Enter the DailyMed components you want returned as a comma delimited string. When left blank, the full DailyMed record is returned. See documentation for more information on components.
     * @return DailyMed_Query_Inputs For method chaining.
     */
    public function setComponents($value)
    {
        return $this->set('Components', $value);
    }

    /**
     * Set the value for the SetID input for this Query Choreo.
     *
     * @param string $value (required, string) The unique ID assigned by DailyMed to each drug. You can find the SetID of a drug by first running the SearchByName or SearchByNDC Choreos.
     * @return DailyMed_Query_Inputs For method chaining.
     */
    public function setSetID($value)
    {
        return $this->set('SetID', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param DailyMed_Query $choreo The choreography object for this execution.
     * @param DailyMed_Query_Inputs|array $inputs (optional) Inputs as DailyMed_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DailyMed_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DailyMed_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return DailyMed_Query_Results New results object.
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
     * Wraps results in appropriate results class for this Query execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DailyMed_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DailyMed_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DailyMed_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (xml) The response from DailyMed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of drugs in the DailyMed database associated with a given National Drug Code (NDC).
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_SearchByNDC extends Temboo_Choreography
{
    /**
     * Returns a list of drugs in the DailyMed database associated with a given National Drug Code (NDC).
     *
     * @param Temboo_Session $session The session that owns this SearchByNDC Choreo.
     * @return DailyMed_SearchByNDC New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DailyMed/SearchByNDC/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByNDC Choreo.
     *
     * @param DailyMed_SearchByNDC_Inputs|array $inputs (optional) Inputs as DailyMed_SearchByNDC_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DailyMed_SearchByNDC_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DailyMed_SearchByNDC_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByNDC Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DailyMed_SearchByNDC_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DailyMed_SearchByNDC_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByNDC Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_SearchByNDC_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByNDC Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DailyMed_SearchByNDC_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByNDC input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DailyMed_SearchByNDC_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DailyMed_SearchByNDC_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the NDC input for this SearchByNDC Choreo.
     *
     * @param string $value (required, string) National Drug Code. This is a unique 10-digit numeric identifier assigned to each medication by the Food and Drug Administration (FDA).
     * @return DailyMed_SearchByNDC_Inputs For method chaining.
     */
    public function setNDC($value)
    {
        return $this->set('NDC', $value);
    }

    /**
     * Set the value for the OutputFormat input for this SearchByNDC Choreo.
     *
     * @param string $value (optional, string) Defaults to XML format when nothing is specified. Acceptable values: xml or json.
     * @return DailyMed_SearchByNDC_Inputs For method chaining.
     */
    public function setOutputFormat($value)
    {
        return $this->set('OutputFormat', $value);
    }
}


/**
 * Execution object for the SearchByNDC Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_SearchByNDC_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByNDC Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByNDC execution.
     * @param DailyMed_SearchByNDC $choreo The choreography object for this execution.
     * @param DailyMed_SearchByNDC_Inputs|array $inputs (optional) Inputs as DailyMed_SearchByNDC_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DailyMed_SearchByNDC_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DailyMed_SearchByNDC $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByNDC execution.
     *
     * @return DailyMed_SearchByNDC_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByNDC execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DailyMed_SearchByNDC_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DailyMed_SearchByNDC_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByNDC Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_SearchByNDC_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByNDC Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DailyMed_SearchByNDC_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByNDC execution.
     *
     * @return string The response from DailyMed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of drugs in the DailyMed database associated with a given drug name.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_SearchByName extends Temboo_Choreography
{
    /**
     * Returns a list of drugs in the DailyMed database associated with a given drug name.
     *
     * @param Temboo_Session $session The session that owns this SearchByName Choreo.
     * @return DailyMed_SearchByName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DailyMed/SearchByName/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchByName Choreo.
     *
     * @param DailyMed_SearchByName_Inputs|array $inputs (optional) Inputs as DailyMed_SearchByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DailyMed_SearchByName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DailyMed_SearchByName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchByName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DailyMed_SearchByName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DailyMed_SearchByName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchByName Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_SearchByName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchByName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DailyMed_SearchByName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchByName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DailyMed_SearchByName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DailyMed_SearchByName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DrugName input for this SearchByName Choreo.
     *
     * @param string $value (required, string) The name of the drug you want to find.
     * @return DailyMed_SearchByName_Inputs For method chaining.
     */
    public function setDrugName($value)
    {
        return $this->set('DrugName', $value);
    }

    /**
     * Set the value for the LabelType input for this SearchByName Choreo.
     *
     * @param string $value (optional, string) Filter results by a specified type. Acceptable values: rxonly, otc, human, human/rxonly, human/otc, animal. See documentation for more information.
     * @return DailyMed_SearchByName_Inputs For method chaining.
     */
    public function setLabelType($value)
    {
        return $this->set('LabelType', $value);
    }

    /**
     * Set the value for the OutputFormat input for this SearchByName Choreo.
     *
     * @param string $value (optional, string) Defaults to XML format when nothing is specified. Acceptable values: xml or json.
     * @return DailyMed_SearchByName_Inputs For method chaining.
     */
    public function setOutputFormat($value)
    {
        return $this->set('OutputFormat', $value);
    }
}


/**
 * Execution object for the SearchByName Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_SearchByName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchByName Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchByName execution.
     * @param DailyMed_SearchByName $choreo The choreography object for this execution.
     * @param DailyMed_SearchByName_Inputs|array $inputs (optional) Inputs as DailyMed_SearchByName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DailyMed_SearchByName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DailyMed_SearchByName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchByName execution.
     *
     * @return DailyMed_SearchByName_Results New results object.
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
     * Wraps results in appropriate results class for this SearchByName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DailyMed_SearchByName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DailyMed_SearchByName_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchByName Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_SearchByName_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchByName Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DailyMed_SearchByName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchByName execution.
     *
     * @return string The response from DailyMed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns imprint data associated with a given National Drug Code (NDC) in the DailyMed database.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_GetComponents extends Temboo_Choreography
{
    /**
     * Returns imprint data associated with a given National Drug Code (NDC) in the DailyMed database.
     *
     * @param Temboo_Session $session The session that owns this GetComponents Choreo.
     * @return DailyMed_GetComponents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DailyMed/GetComponents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetComponents Choreo.
     *
     * @param DailyMed_GetComponents_Inputs|array $inputs (optional) Inputs as DailyMed_GetComponents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DailyMed_GetComponents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DailyMed_GetComponents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetComponents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DailyMed_GetComponents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DailyMed_GetComponents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetComponents Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_GetComponents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetComponents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DailyMed_GetComponents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetComponents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return DailyMed_GetComponents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DailyMed_GetComponents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the SetID input for this GetComponents Choreo.
     *
     * @param string $value (required, string) The unique ID assigned by DailyMed to each drug. You can find the SetID of a drug by first running the SearchByName or SearchByNDC Choreos.
     * @return DailyMed_GetComponents_Inputs For method chaining.
     */
    public function setSetID($value)
    {
        return $this->set('SetID', $value);
    }
}


/**
 * Execution object for the GetComponents Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_GetComponents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetComponents Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetComponents execution.
     * @param DailyMed_GetComponents $choreo The choreography object for this execution.
     * @param DailyMed_GetComponents_Inputs|array $inputs (optional) Inputs as DailyMed_GetComponents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DailyMed_GetComponents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DailyMed_GetComponents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetComponents execution.
     *
     * @return DailyMed_GetComponents_Results New results object.
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
     * Wraps results in appropriate results class for this GetComponents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return DailyMed_GetComponents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DailyMed_GetComponents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetComponents Choreo.
 *
 * @package Temboo
 * @subpackage DailyMed
 */
class DailyMed_GetComponents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetComponents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DailyMed_GetComponents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetComponents execution.
     *
     * @return string (xml) The response from DailyMed.
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
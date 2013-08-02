<?php

/**
 * Temboo PHP SDK DuckDuckGo classes
 *
 * Execute Choreographies from the Temboo DuckDuckGo bundle.
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
 * @subpackage DuckDuckGo
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Access DuckDuckGo web search functionality.  
 *
 * @package Temboo
 * @subpackage DuckDuckGo
 */
class DuckDuckGo_Query extends Temboo_Choreography
{
    /**
     * Access DuckDuckGo web search functionality.  
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return DuckDuckGo_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/DuckDuckGo/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param DuckDuckGo_Query_Inputs|array $inputs (optional) Inputs as DuckDuckGo_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DuckDuckGo_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new DuckDuckGo_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DuckDuckGo_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new DuckDuckGo_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage DuckDuckGo
 */
class DuckDuckGo_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return DuckDuckGo_Query_Inputs New instance.
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
     * @return DuckDuckGo_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return DuckDuckGo_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Format input for this Query Choreo.
     *
     * @param string $value (optional, string) Enter: xml, or json.  Default is set to xml.
     * @return DuckDuckGo_Query_Inputs For method chaining.
     */
    public function setFormat($value)
    {
        return $this->set('Format', $value);
    }

    /**
     * Set the value for the NoHTML input for this Query Choreo.
     *
     * @param int $value (optional, integer) Enter 1 to remove HTML from text. Set only if Format=json.
     * @return DuckDuckGo_Query_Inputs For method chaining.
     */
    public function setNoHTML($value)
    {
        return $this->set('NoHTML', $value);
    }

    /**
     * Set the value for the NoRedirect input for this Query Choreo.
     *
     * @param int $value (optional, integer) Enter 1 to skip HTTP redirects.  This is useful for !bang commands. Set only if Format=json.
     * @return DuckDuckGo_Query_Inputs For method chaining.
     */
    public function setNoRedirect($value)
    {
        return $this->set('NoRedirect', $value);
    }

    /**
     * Set the value for the PrettyPrint input for this Query Choreo.
     *
     * @param int $value (optional, integer) Enter 1 to pretty-print the JSON output.
     * @return DuckDuckGo_Query_Inputs For method chaining.
     */
    public function setPrettyPrint($value)
    {
        return $this->set('PrettyPrint', $value);
    }

    /**
     * Set the value for the Query input for this Query Choreo.
     *
     * @param string $value (required, string) Enter a search query.
     * @return DuckDuckGo_Query_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the SkipDisambiguation input for this Query Choreo.
     *
     * @param int $value (optional, integer) Enter 1 to skip disambiguation. Set only if Format=json.
     * @return DuckDuckGo_Query_Inputs For method chaining.
     */
    public function setSkipDisambiguation($value)
    {
        return $this->set('SkipDisambiguation', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage DuckDuckGo
 */
class DuckDuckGo_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param DuckDuckGo_Query $choreo The choreography object for this execution.
     * @param DuckDuckGo_Query_Inputs|array $inputs (optional) Inputs as DuckDuckGo_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return DuckDuckGo_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, DuckDuckGo_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return DuckDuckGo_Query_Results New results object.
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
     * @return DuckDuckGo_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new DuckDuckGo_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage DuckDuckGo
 */
class DuckDuckGo_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return DuckDuckGo_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string The response from DuckDuckGo in XML or JSON format.
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
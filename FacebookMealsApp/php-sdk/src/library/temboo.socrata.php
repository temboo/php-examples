<?php

/**
 * Temboo PHP SDK Socrata classes
 *
 * Execute Choreographies from the Temboo Socrata bundle.
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
 * @subpackage Socrata
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Performs queries against data on the Socrata Platform.
 *
 * @package Temboo
 * @subpackage Socrata
 */
class Socrata_SODA_Query extends Temboo_Choreography
{
    /**
     * Performs queries against data on the Socrata Platform.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return Socrata_SODA_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Socrata/SODA/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param Socrata_SODA_Query_Inputs|array $inputs (optional) Inputs as Socrata_SODA_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Socrata_SODA_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Socrata_SODA_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Socrata_SODA_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Socrata_SODA_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Socrata
 */
class Socrata_SODA_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Socrata_SODA_Query_Inputs New instance.
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
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppToken input for this Query Choreo.
     *
     * @param string $value (optional, string) The App Token provided by Socrata.
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setAppToken($value)
    {
        return $this->set('AppToken', $value);
    }

    /**
     * Set the value for the Domain input for this Query Choreo.
     *
     * @param string $value (required, string) The domain used in the request (i.e. soda.demo.socrata.com).
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setDomain($value)
    {
        return $this->set('Domain', $value);
    }

    /**
     * Set the value for the Group input for this Query Choreo.
     *
     * @param string $value (optional, string) Groups results based on the column name provided.
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setGroup($value)
    {
        return $this->set('Group', $value);
    }

    /**
     * Set the value for the Limit input for this Query Choreo.
     *
     * @param string $value (optional, string) The maximum number of results to return. Used in combination with the Offset input for pagination. Defaults to 100.
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this Query Choreo.
     *
     * @param string $value (optional, string) Indicates the starting point of the result set. Used in combination with the Limit input for pagination. Defaults to 0.
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Order input for this Query Choreo.
     *
     * @param string $value (optional, string) Determines how results will be sorted. This input can take a column name, and can sort in either ascending or descending order (i.e. datetime asc).
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setOrder($value)
    {
        return $this->set('Order', $value);
    }

    /**
     * Set the value for the Resource input for this Query Choreo.
     *
     * @param string $value (required, string) The unique identifier for a dataset to retrieve (i.e 4tka-6guv or earthquakes).
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setResource($value)
    {
        return $this->set('Resource', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Query Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), xml, csv, and rdf.
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Search input for this Query Choreo.
     *
     * @param string $value (optional, string) A search clause. This wll do a full text search for a value.
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setSearch($value)
    {
        return $this->set('Search', $value);
    }

    /**
     * Set the value for the Select input for this Query Choreo.
     *
     * @param string $value (optional, string) Indicates which columns to return. If not specified, all columns will be returned.
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setSelect($value)
    {
        return $this->set('Select', $value);
    }

    /**
     * Set the value for the Where input for this Query Choreo.
     *
     * @param string $value (optional, string) Filters the results using a WHERE clause.
     * @return Socrata_SODA_Query_Inputs For method chaining.
     */
    public function setWhere($value)
    {
        return $this->set('Where', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Socrata
 */
class Socrata_SODA_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Socrata_SODA_Query $choreo The choreography object for this execution.
     * @param Socrata_SODA_Query_Inputs|array $inputs (optional) Inputs as Socrata_SODA_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Socrata_SODA_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Socrata_SODA_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Socrata_SODA_Query_Results New results object.
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
     * @return Socrata_SODA_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Socrata_SODA_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Socrata
 */
class Socrata_SODA_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Socrata_SODA_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Fields" output from this Query execution.
     *
     * @return string (json) This lists the fields returned in this response in a JSON array.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getFields()
    {
        return $this->get('Fields');
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string The response form Socrata.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Types" output from this Query execution.
     *
     * @return string (json) This is a list of SODA2 types in a JSON array. These will match up in the same order as the fields in X-SODA2-Fields.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTypes()
    {
        return $this->get('Types');
    }
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


?>
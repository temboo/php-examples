<?php

/**
 * Temboo PHP SDK GoodGuide classes
 *
 * Execute Choreographies from the Temboo GoodGuide bundle.
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
 * @subpackage GoodGuide
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves information about products based on the product's UPC code.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_QueryByUPC extends Temboo_Choreography
{
    /**
     * Retrieves information about products based on the product's UPC code.
     *
     * @param Temboo_Session $session The session that owns this QueryByUPC Choreo.
     * @return GoodGuide_QueryByUPC New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GoodGuide/QueryByUPC/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this QueryByUPC Choreo.
     *
     * @param GoodGuide_QueryByUPC_Inputs|array $inputs (optional) Inputs as GoodGuide_QueryByUPC_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GoodGuide_QueryByUPC_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GoodGuide_QueryByUPC_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this QueryByUPC Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GoodGuide_QueryByUPC_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GoodGuide_QueryByUPC_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the QueryByUPC Choreo.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_QueryByUPC_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the QueryByUPC Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GoodGuide_QueryByUPC_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this QueryByUPC input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GoodGuide_QueryByUPC_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GoodGuide_QueryByUPC_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIFormat input for this QueryByUPC Choreo.
     *
     * @param string $value (optional, string) The response type supplied by GoodGuides. Default is simple. Other acceptable inputs are reference and badge.
     * @return GoodGuide_QueryByUPC_Inputs For method chaining.
     */
    public function setAPIFormat($value)
    {
        return $this->set('APIFormat', $value);
    }

    /**
     * Set the value for the APIKey input for this QueryByUPC Choreo.
     *
     * @param string $value (required, string) The API Key provided by GoodGuide.
     * @return GoodGuide_QueryByUPC_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the UPC input for this QueryByUPC Choreo.
     *
     * @param string $value (required, string) The UPC number of the product. This consists of 12 numerical barcode digits uniquely assigned to most products sold in North America.
     * @return GoodGuide_QueryByUPC_Inputs For method chaining.
     */
    public function setUPC($value)
    {
        return $this->set('UPC', $value);
    }
}


/**
 * Execution object for the QueryByUPC Choreo.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_QueryByUPC_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the QueryByUPC Choreo.
     *
     * @param Temboo_Session $session The session that owns this QueryByUPC execution.
     * @param GoodGuide_QueryByUPC $choreo The choreography object for this execution.
     * @param GoodGuide_QueryByUPC_Inputs|array $inputs (optional) Inputs as GoodGuide_QueryByUPC_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GoodGuide_QueryByUPC_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GoodGuide_QueryByUPC $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this QueryByUPC execution.
     *
     * @return GoodGuide_QueryByUPC_Results New results object.
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
     * Wraps results in appropriate results class for this QueryByUPC execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GoodGuide_QueryByUPC_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GoodGuide_QueryByUPC_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the QueryByUPC Choreo.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_QueryByUPC_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the QueryByUPC Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GoodGuide_QueryByUPC_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this QueryByUPC execution.
     *
     * @return string (xml) The response from GoodGuide.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Queries the GoodGuide API by keyword and retrieves information on GoodGuide products.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_Query extends Temboo_Choreography
{
    /**
     * Queries the GoodGuide API by keyword and retrieves information on GoodGuide products.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return GoodGuide_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GoodGuide/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param GoodGuide_Query_Inputs|array $inputs (optional) Inputs as GoodGuide_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GoodGuide_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GoodGuide_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GoodGuide_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GoodGuide_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GoodGuide_Query_Inputs New instance.
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
     * @return GoodGuide_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GoodGuide_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIFormat input for this Query Choreo.
     *
     * @param string $value (optional, string) The response type supplied by GoodGuides. Default is reference. Other acceptable inputs are simple and badge.
     * @return GoodGuide_Query_Inputs For method chaining.
     */
    public function setAPIFormat($value)
    {
        return $this->set('APIFormat', $value);
    }

    /**
     * Set the value for the APIKey input for this Query Choreo.
     *
     * @param string $value (required, string) The API Key provided by GoodGuide.
     * @return GoodGuide_Query_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Count input for this Query Choreo.
     *
     * @param int $value (optional, integer) The number of entries to return. Default is 20. Up to 50 entries can be returned at once.
     * @return GoodGuide_Query_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Query input for this Query Choreo.
     *
     * @param string $value (required, string) A text string used in the keyword search. By default, queries return product data only. Use the EntityType input to query other types of entities.
     * @return GoodGuide_Query_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the SortBy input for this Query Choreo.
     *
     * @param string $value (optional, string) Acceptable values: best_match (for keyword searches, this is the default); rating (the overall GoodGuide rating); and name (sorted alphabetically).
     * @return GoodGuide_Query_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this Query Choreo.
     *
     * @param string $value (optional, string) Acceptable values: 'desc' to sort descending (default for sort_by=rating and sort_by is best_match); 'asc' to sort ascending (default for sort_by is name).
     * @return GoodGuide_Query_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param GoodGuide_Query $choreo The choreography object for this execution.
     * @param GoodGuide_Query_Inputs|array $inputs (optional) Inputs as GoodGuide_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GoodGuide_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GoodGuide_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return GoodGuide_Query_Results New results object.
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
     * @return GoodGuide_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GoodGuide_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GoodGuide_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (xml) The response from GoodGuide.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about products based on a GoodGuide product ID.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_QueryByID extends Temboo_Choreography
{
    /**
     * Retrieves information about products based on a GoodGuide product ID.
     *
     * @param Temboo_Session $session The session that owns this QueryByID Choreo.
     * @return GoodGuide_QueryByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/GoodGuide/QueryByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this QueryByID Choreo.
     *
     * @param GoodGuide_QueryByID_Inputs|array $inputs (optional) Inputs as GoodGuide_QueryByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GoodGuide_QueryByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new GoodGuide_QueryByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this QueryByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GoodGuide_QueryByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new GoodGuide_QueryByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the QueryByID Choreo.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_QueryByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the QueryByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return GoodGuide_QueryByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this QueryByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return GoodGuide_QueryByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return GoodGuide_QueryByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIFormat input for this QueryByID Choreo.
     *
     * @param string $value (optional, string) The response type supplied by GoodGuide. Default is simple. Other acceptable inputs are reference and badge.
     * @return GoodGuide_QueryByID_Inputs For method chaining.
     */
    public function setAPIFormat($value)
    {
        return $this->set('APIFormat', $value);
    }

    /**
     * Set the value for the APIKey input for this QueryByID Choreo.
     *
     * @param string $value (required, string) The API Key provided by GoodGuide.
     * @return GoodGuide_QueryByID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this QueryByID Choreo.
     *
     * @param string $value (required, string) GoodGuide ID number of product.
     * @return GoodGuide_QueryByID_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the QueryByID Choreo.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_QueryByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the QueryByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this QueryByID execution.
     * @param GoodGuide_QueryByID $choreo The choreography object for this execution.
     * @param GoodGuide_QueryByID_Inputs|array $inputs (optional) Inputs as GoodGuide_QueryByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return GoodGuide_QueryByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, GoodGuide_QueryByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this QueryByID execution.
     *
     * @return GoodGuide_QueryByID_Results New results object.
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
     * Wraps results in appropriate results class for this QueryByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return GoodGuide_QueryByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new GoodGuide_QueryByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the QueryByID Choreo.
 *
 * @package Temboo
 * @subpackage GoodGuide
 */
class GoodGuide_QueryByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the QueryByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return GoodGuide_QueryByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this QueryByID execution.
     *
     * @return string (xml) The response from GoodGuide.
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
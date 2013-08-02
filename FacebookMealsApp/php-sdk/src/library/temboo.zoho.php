<?php

/**
 * Temboo PHP SDK Zoho classes
 *
 * Execute Choreographies from the Temboo Zoho bundle.
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
 * @subpackage Zoho
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Lists all the spreadsheets that have been made "public" from a user's Zoho Sheet  Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListPublicSpreadsheets extends Temboo_Choreography
{
    /**
     * Lists all the spreadsheets that have been made "public" from a user's Zoho Sheet  Account.
     *
     * @param Temboo_Session $session The session that owns this ListPublicSpreadsheets Choreo.
     * @return Zoho_Sheet_ListPublicSpreadsheets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Sheet/ListPublicSpreadsheets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPublicSpreadsheets Choreo.
     *
     * @param Zoho_Sheet_ListPublicSpreadsheets_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_ListPublicSpreadsheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Sheet_ListPublicSpreadsheets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPublicSpreadsheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Sheet_ListPublicSpreadsheets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPublicSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListPublicSpreadsheets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPublicSpreadsheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPublicSpreadsheets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPublicSpreadsheets Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListPublicSpreadsheets Choreo.
     *
     * @param int $value (optional, integer) Sets the number of documents to be listed.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LoginID input for this ListPublicSpreadsheets Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the OrderBy input for this ListPublicSpreadsheets Choreo.
     *
     * @param string $value (optional, string) Order documents by createdTime, lastModifiedTime or name.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this ListPublicSpreadsheets Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPublicSpreadsheets Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to xml.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListPublicSpreadsheets Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartFrom input for this ListPublicSpreadsheets Choreo.
     *
     * @param int $value (optional, integer) Sets the initial document number from which the documents will be listed.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Inputs For method chaining.
     */
    public function setStartFrom($value)
    {
        return $this->set('StartFrom', $value);
    }
}


/**
 * Execution object for the ListPublicSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListPublicSpreadsheets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPublicSpreadsheets Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPublicSpreadsheets execution.
     * @param Zoho_Sheet_ListPublicSpreadsheets $choreo The choreography object for this execution.
     * @param Zoho_Sheet_ListPublicSpreadsheets_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_ListPublicSpreadsheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Sheet_ListPublicSpreadsheets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPublicSpreadsheets execution.
     *
     * @return Zoho_Sheet_ListPublicSpreadsheets_Results New results object.
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
     * Wraps results in appropriate results class for this ListPublicSpreadsheets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Sheet_ListPublicSpreadsheets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPublicSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListPublicSpreadsheets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPublicSpreadsheets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Sheet_ListPublicSpreadsheets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPublicSpreadsheets execution.
     *
     * @return string The response from Zoho. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves data by owner of the authentication token specified.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetMyRecords extends Temboo_Choreography
{
    /**
     * Retrieves data by owner of the authentication token specified.
     *
     * @param Temboo_Session $session The session that owns this GetMyRecords Choreo.
     * @return Zoho_CRM_GetMyRecords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/GetMyRecords/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMyRecords Choreo.
     *
     * @param Zoho_CRM_GetMyRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetMyRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetMyRecords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_GetMyRecords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMyRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetMyRecords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_GetMyRecords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMyRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetMyRecords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMyRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetMyRecords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMyRecords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthenticationToken input for this GetMyRecords Choreo.
     *
     * @param string $value (required, string) A valid authentication token. Permanent authentication tokens can be generated by the GenerateAuthToken Choreo.
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setAuthenticationToken($value)
    {
        return $this->set('AuthenticationToken', $value);
    }

    /**
     * Set the value for the FromIndex input for this GetMyRecords Choreo.
     *
     * @param int $value (optional, integer) The beginning index of the result set to return. Defaults to 1.
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setFromIndex($value)
    {
        return $this->set('FromIndex', $value);
    }

    /**
     * Set the value for the LastModifiedTime input for this GetMyRecords Choreo.
     *
     * @param string $value (optional, date) Used to return records with a created or modified date that is after the specified time.  (i.e. 2010-04-21 11:09:23)
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setLastModifiedTime($value)
    {
        return $this->set('LastModifiedTime', $value);
    }

    /**
     * Set the value for the Module input for this GetMyRecords Choreo.
     *
     * @param string $value (optional, string) The Zoho module you want to access. Defaults to Leads.
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setModule($value)
    {
        return $this->set('Module', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetMyRecords Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid formats are: json and xml (the default).
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SelectColumns input for this GetMyRecords Choreo.
     *
     * @param string $value (optional, string) The columns to return separated by commas (i.e. First Name,Last Name,Email). When left empty, only IDs are returned.
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setSelectColumns($value)
    {
        return $this->set('SelectColumns', $value);
    }

    /**
     * Set the value for the SortColumnString input for this GetMyRecords Choreo.
     *
     * @param int $value (optional, integer) Used to specify a column to sort by
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setSortColumnString($value)
    {
        return $this->set('SortColumnString', $value);
    }

    /**
     * Set the value for the SortOrderString input for this GetMyRecords Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setSortOrderString($value)
    {
        return $this->set('SortOrderString', $value);
    }

    /**
     * Set the value for the ToIndex input for this GetMyRecords Choreo.
     *
     * @param int $value (optional, integer) The ending index of the result set to return. Defaults to 20. Max is 200.
     * @return Zoho_CRM_GetMyRecords_Inputs For method chaining.
     */
    public function setToIndex($value)
    {
        return $this->set('ToIndex', $value);
    }
}


/**
 * Execution object for the GetMyRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetMyRecords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMyRecords Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMyRecords execution.
     * @param Zoho_CRM_GetMyRecords $choreo The choreography object for this execution.
     * @param Zoho_CRM_GetMyRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetMyRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetMyRecords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_GetMyRecords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMyRecords execution.
     *
     * @return Zoho_CRM_GetMyRecords_Results New results object.
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
     * Wraps results in appropriate results class for this GetMyRecords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_GetMyRecords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_GetMyRecords_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMyRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetMyRecords_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMyRecords Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_GetMyRecords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMyRecords execution.
     *
     * @return string The response from Zoho. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all users data specified in the API request.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetRecords extends Temboo_Choreography
{
    /**
     * Retrieves all users data specified in the API request.
     *
     * @param Temboo_Session $session The session that owns this GetRecords Choreo.
     * @return Zoho_CRM_GetRecords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/GetRecords/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecords Choreo.
     *
     * @param Zoho_CRM_GetRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetRecords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_GetRecords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetRecords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_GetRecords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetRecords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetRecords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthenticationToken input for this GetRecords Choreo.
     *
     * @param string $value (required, string) A valid authentication token. Permanent authentication tokens can be generated by the GenerateAuthToken Choreo.
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setAuthenticationToken($value)
    {
        return $this->set('AuthenticationToken', $value);
    }

    /**
     * Set the value for the FromIndex input for this GetRecords Choreo.
     *
     * @param int $value (optional, integer) The beginning index of the result set to return. Defaults to 1.
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setFromIndex($value)
    {
        return $this->set('FromIndex', $value);
    }

    /**
     * Set the value for the LastModifiedTime input for this GetRecords Choreo.
     *
     * @param string $value (optional, date) Used to return records with a created or modified date that is after the specified time.  (i.e. 2010-04-21 11:09:23)
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setLastModifiedTime($value)
    {
        return $this->set('LastModifiedTime', $value);
    }

    /**
     * Set the value for the Module input for this GetRecords Choreo.
     *
     * @param string $value (optional, string) The Zoho module you want to access. Defaults to 'Leads'.
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setModule($value)
    {
        return $this->set('Module', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRecords Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid formats are: json and xml (the default).
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SelectColumns input for this GetRecords Choreo.
     *
     * @param string $value (optional, string) The columns to return separated by commas (i.e. First Name,Last Name,Email). When left empty, only IDs are returned.
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setSelectColumns($value)
    {
        return $this->set('SelectColumns', $value);
    }

    /**
     * Set the value for the SortColumnString input for this GetRecords Choreo.
     *
     * @param string $value (optional, string) Used to specify a column to sort by (in ascending order)
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setSortColumnString($value)
    {
        return $this->set('SortColumnString', $value);
    }

    /**
     * Set the value for the SortOrderString input for this GetRecords Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setSortOrderString($value)
    {
        return $this->set('SortOrderString', $value);
    }

    /**
     * Set the value for the ToIndex input for this GetRecords Choreo.
     *
     * @param int $value (optional, integer) The ending index of the result set to return. Defaults to 20. Max is 200.
     * @return Zoho_CRM_GetRecords_Inputs For method chaining.
     */
    public function setToIndex($value)
    {
        return $this->set('ToIndex', $value);
    }
}


/**
 * Execution object for the GetRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetRecords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecords Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecords execution.
     * @param Zoho_CRM_GetRecords $choreo The choreography object for this execution.
     * @param Zoho_CRM_GetRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetRecords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_GetRecords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecords execution.
     *
     * @return Zoho_CRM_GetRecords_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_GetRecords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_GetRecords_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetRecords_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecords Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_GetRecords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecords execution.
     *
     * @return string The response from Zoho. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Downloads a specified spreadsheet in a user's Zoho Sheet Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_DownloadSpreadsheet extends Temboo_Choreography
{
    /**
     * Downloads a specified spreadsheet in a user's Zoho Sheet Account.
     *
     * @param Temboo_Session $session The session that owns this DownloadSpreadsheet Choreo.
     * @return Zoho_Sheet_DownloadSpreadsheet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Sheet/DownloadSpreadsheet/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DownloadSpreadsheet Choreo.
     *
     * @param Zoho_Sheet_DownloadSpreadsheet_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_DownloadSpreadsheet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_DownloadSpreadsheet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Sheet_DownloadSpreadsheet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DownloadSpreadsheet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_DownloadSpreadsheet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Sheet_DownloadSpreadsheet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DownloadSpreadsheet Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_DownloadSpreadsheet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DownloadSpreadsheet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_DownloadSpreadsheet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DownloadSpreadsheet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Sheet_DownloadSpreadsheet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Sheet_DownloadSpreadsheet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DownloadSpreadsheet Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Sheet_DownloadSpreadsheet_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the BookId input for this DownloadSpreadsheet Choreo.
     *
     * @param int $value (required, integer) Specifies the unique spreadsheet id to download.
     * @return Zoho_Sheet_DownloadSpreadsheet_Inputs For method chaining.
     */
    public function setBookId($value)
    {
        return $this->set('BookId', $value);
    }

    /**
     * Set the value for the DownloadFormat input for this DownloadSpreadsheet Choreo.
     *
     * @param string $value (required, string) Specifies the file format in which the documents need to be downloaded. Possible values for documents: xls, xlsx, ods, sxc, pdf, html, csv, tsv.
     * @return Zoho_Sheet_DownloadSpreadsheet_Inputs For method chaining.
     */
    public function setDownloadFormat($value)
    {
        return $this->set('DownloadFormat', $value);
    }

    /**
     * Set the value for the LoginID input for this DownloadSpreadsheet Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Sheet_DownloadSpreadsheet_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the Password input for this DownloadSpreadsheet Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Sheet_DownloadSpreadsheet_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the DownloadSpreadsheet Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_DownloadSpreadsheet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DownloadSpreadsheet Choreo.
     *
     * @param Temboo_Session $session The session that owns this DownloadSpreadsheet execution.
     * @param Zoho_Sheet_DownloadSpreadsheet $choreo The choreography object for this execution.
     * @param Zoho_Sheet_DownloadSpreadsheet_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_DownloadSpreadsheet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_DownloadSpreadsheet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Sheet_DownloadSpreadsheet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DownloadSpreadsheet execution.
     *
     * @return Zoho_Sheet_DownloadSpreadsheet_Results New results object.
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
     * Wraps results in appropriate results class for this DownloadSpreadsheet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Sheet_DownloadSpreadsheet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Sheet_DownloadSpreadsheet_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DownloadSpreadsheet Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_DownloadSpreadsheet_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DownloadSpreadsheet Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Sheet_DownloadSpreadsheet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DownloadSpreadsheet execution.
     *
     * @return string The response from Zoho. Corresponds to the DownloadFormat input.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all the spreadsheets associated with a user's Zoho Sheet Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListAllSpreadsheets extends Temboo_Choreography
{
    /**
     * Lists all the spreadsheets associated with a user's Zoho Sheet Account.
     *
     * @param Temboo_Session $session The session that owns this ListAllSpreadsheets Choreo.
     * @return Zoho_Sheet_ListAllSpreadsheets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Sheet/ListAllSpreadsheets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllSpreadsheets Choreo.
     *
     * @param Zoho_Sheet_ListAllSpreadsheets_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_ListAllSpreadsheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_ListAllSpreadsheets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Sheet_ListAllSpreadsheets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllSpreadsheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Sheet_ListAllSpreadsheets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListAllSpreadsheets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllSpreadsheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllSpreadsheets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllSpreadsheets Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListAllSpreadsheets Choreo.
     *
     * @param int $value (optional, integer) Sets the number of documents to be listed.
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LoginID input for this ListAllSpreadsheets Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the OrderBy input for this ListAllSpreadsheets Choreo.
     *
     * @param string $value (optional, string) Order documents by createdTime, lastModifiedTime or name.
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this ListAllSpreadsheets Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListAllSpreadsheets Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to xml.
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListAllSpreadsheets Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartFrom input for this ListAllSpreadsheets Choreo.
     *
     * @param int $value (optional, integer) Sets the initial document number from which the documents will be listed.
     * @return Zoho_Sheet_ListAllSpreadsheets_Inputs For method chaining.
     */
    public function setStartFrom($value)
    {
        return $this->set('StartFrom', $value);
    }
}


/**
 * Execution object for the ListAllSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListAllSpreadsheets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllSpreadsheets Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllSpreadsheets execution.
     * @param Zoho_Sheet_ListAllSpreadsheets $choreo The choreography object for this execution.
     * @param Zoho_Sheet_ListAllSpreadsheets_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_ListAllSpreadsheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_ListAllSpreadsheets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Sheet_ListAllSpreadsheets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllSpreadsheets execution.
     *
     * @return Zoho_Sheet_ListAllSpreadsheets_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllSpreadsheets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Sheet_ListAllSpreadsheets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Sheet_ListAllSpreadsheets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListAllSpreadsheets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllSpreadsheets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Sheet_ListAllSpreadsheets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllSpreadsheets execution.
     *
     * @return string The response from Zoho. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all the spreadsheets that have been "shared" to a user's Zoho Sheet Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListSharedSpreadsheets extends Temboo_Choreography
{
    /**
     * Lists all the spreadsheets that have been "shared" to a user's Zoho Sheet Account.
     *
     * @param Temboo_Session $session The session that owns this ListSharedSpreadsheets Choreo.
     * @return Zoho_Sheet_ListSharedSpreadsheets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Sheet/ListSharedSpreadsheets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListSharedSpreadsheets Choreo.
     *
     * @param Zoho_Sheet_ListSharedSpreadsheets_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_ListSharedSpreadsheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Sheet_ListSharedSpreadsheets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListSharedSpreadsheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Sheet_ListSharedSpreadsheets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListSharedSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListSharedSpreadsheets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListSharedSpreadsheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListSharedSpreadsheets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListSharedSpreadsheets Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListSharedSpreadsheets Choreo.
     *
     * @param int $value (optional, integer) Sets the number of documents to be listed.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LoginID input for this ListSharedSpreadsheets Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the OrderBy input for this ListSharedSpreadsheets Choreo.
     *
     * @param string $value (optional, string) Order documents by createdTime, lastModifiedTime or name.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this ListSharedSpreadsheets Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListSharedSpreadsheets Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to xml.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListSharedSpreadsheets Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartFrom input for this ListSharedSpreadsheets Choreo.
     *
     * @param int $value (optional, integer) Sets the initial document number from which the documents will be listed.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Inputs For method chaining.
     */
    public function setStartFrom($value)
    {
        return $this->set('StartFrom', $value);
    }
}


/**
 * Execution object for the ListSharedSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListSharedSpreadsheets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListSharedSpreadsheets Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListSharedSpreadsheets execution.
     * @param Zoho_Sheet_ListSharedSpreadsheets $choreo The choreography object for this execution.
     * @param Zoho_Sheet_ListSharedSpreadsheets_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_ListSharedSpreadsheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Sheet_ListSharedSpreadsheets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListSharedSpreadsheets execution.
     *
     * @return Zoho_Sheet_ListSharedSpreadsheets_Results New results object.
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
     * Wraps results in appropriate results class for this ListSharedSpreadsheets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Sheet_ListSharedSpreadsheets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListSharedSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListSharedSpreadsheets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListSharedSpreadsheets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Sheet_ListSharedSpreadsheets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListSharedSpreadsheets execution.
     *
     * @return string The response from Zoho. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all the documents that have been made "public" from a user's Zoho Writer Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListPublicDocuments extends Temboo_Choreography
{
    /**
     * Lists all the documents that have been made "public" from a user's Zoho Writer Account.
     *
     * @param Temboo_Session $session The session that owns this ListPublicDocuments Choreo.
     * @return Zoho_Writer_ListPublicDocuments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Writer/ListPublicDocuments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPublicDocuments Choreo.
     *
     * @param Zoho_Writer_ListPublicDocuments_Inputs|array $inputs (optional) Inputs as Zoho_Writer_ListPublicDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_ListPublicDocuments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Writer_ListPublicDocuments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPublicDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_ListPublicDocuments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Writer_ListPublicDocuments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPublicDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListPublicDocuments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPublicDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_ListPublicDocuments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPublicDocuments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListPublicDocuments Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListPublicDocuments Choreo.
     *
     * @param int $value (optional, integer) Sets the number of documents to be listed.
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LoginID input for this ListPublicDocuments Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the OrderBy input for this ListPublicDocuments Choreo.
     *
     * @param string $value (optional, string) Order documents by createdTime, lastModifiedTime or name.
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this ListPublicDocuments Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPublicDocuments Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to xml.
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListPublicDocuments Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartFrom input for this ListPublicDocuments Choreo.
     *
     * @param int $value (optional, integer) Sets the initial document number from which the documents will be listed.
     * @return Zoho_Writer_ListPublicDocuments_Inputs For method chaining.
     */
    public function setStartFrom($value)
    {
        return $this->set('StartFrom', $value);
    }
}


/**
 * Execution object for the ListPublicDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListPublicDocuments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPublicDocuments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPublicDocuments execution.
     * @param Zoho_Writer_ListPublicDocuments $choreo The choreography object for this execution.
     * @param Zoho_Writer_ListPublicDocuments_Inputs|array $inputs (optional) Inputs as Zoho_Writer_ListPublicDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_ListPublicDocuments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Writer_ListPublicDocuments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPublicDocuments execution.
     *
     * @return Zoho_Writer_ListPublicDocuments_Results New results object.
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
     * Wraps results in appropriate results class for this ListPublicDocuments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Writer_ListPublicDocuments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Writer_ListPublicDocuments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPublicDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListPublicDocuments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPublicDocuments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Writer_ListPublicDocuments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPublicDocuments execution.
     *
     * @return string The response from Zoho. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Downloads a specified document in a user's Zoho Writer Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_DownloadDocument extends Temboo_Choreography
{
    /**
     * Downloads a specified document in a user's Zoho Writer Account.
     *
     * @param Temboo_Session $session The session that owns this DownloadDocument Choreo.
     * @return Zoho_Writer_DownloadDocument New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Writer/DownloadDocument/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DownloadDocument Choreo.
     *
     * @param Zoho_Writer_DownloadDocument_Inputs|array $inputs (optional) Inputs as Zoho_Writer_DownloadDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_DownloadDocument_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Writer_DownloadDocument_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DownloadDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_DownloadDocument_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Writer_DownloadDocument_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DownloadDocument Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_DownloadDocument_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DownloadDocument Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_DownloadDocument_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DownloadDocument input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Writer_DownloadDocument_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Writer_DownloadDocument_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DownloadDocument Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Writer_DownloadDocument_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DocumentId input for this DownloadDocument Choreo.
     *
     * @param int $value (required, integer) Specifies the unique document id to download.
     * @return Zoho_Writer_DownloadDocument_Inputs For method chaining.
     */
    public function setDocumentId($value)
    {
        return $this->set('DocumentId', $value);
    }

    /**
     * Set the value for the DownloadFormat input for this DownloadDocument Choreo.
     *
     * @param string $value (required, string) Specifies the file format in which the documents need to be downloaded. Possible values for documents: doc, docx, pdf, html, sxw, odt, rtf.
     * @return Zoho_Writer_DownloadDocument_Inputs For method chaining.
     */
    public function setDownloadFormat($value)
    {
        return $this->set('DownloadFormat', $value);
    }

    /**
     * Set the value for the LoginID input for this DownloadDocument Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Writer_DownloadDocument_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the Password input for this DownloadDocument Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Writer_DownloadDocument_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the DownloadDocument Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_DownloadDocument_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DownloadDocument Choreo.
     *
     * @param Temboo_Session $session The session that owns this DownloadDocument execution.
     * @param Zoho_Writer_DownloadDocument $choreo The choreography object for this execution.
     * @param Zoho_Writer_DownloadDocument_Inputs|array $inputs (optional) Inputs as Zoho_Writer_DownloadDocument_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_DownloadDocument_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Writer_DownloadDocument $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DownloadDocument execution.
     *
     * @return Zoho_Writer_DownloadDocument_Results New results object.
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
     * Wraps results in appropriate results class for this DownloadDocument execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Writer_DownloadDocument_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Writer_DownloadDocument_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DownloadDocument Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_DownloadDocument_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DownloadDocument Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Writer_DownloadDocument_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DownloadDocument execution.
     *
     * @return string The response from Zoho. Corresponds to the DownloadFormat input.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lets you to search your Zoho CRM account for records based on Zoho's search expressions.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetSearchRecords extends Temboo_Choreography
{
    /**
     * Lets you to search your Zoho CRM account for records based on Zoho's search expressions.
     *
     * @param Temboo_Session $session The session that owns this GetSearchRecords Choreo.
     * @return Zoho_CRM_GetSearchRecords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/GetSearchRecords/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSearchRecords Choreo.
     *
     * @param Zoho_CRM_GetSearchRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetSearchRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetSearchRecords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_GetSearchRecords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSearchRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetSearchRecords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_GetSearchRecords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSearchRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetSearchRecords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSearchRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetSearchRecords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSearchRecords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthenticationToken input for this GetSearchRecords Choreo.
     *
     * @param string $value (required, string) A valid authentication token. Permanent authentication tokens can be generated by the GenerateAuthToken Choreo.
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setAuthenticationToken($value)
    {
        return $this->set('AuthenticationToken', $value);
    }

    /**
     * Set the value for the FromIndex input for this GetSearchRecords Choreo.
     *
     * @param int $value (optional, integer) The beginning index of the result set to return. Defaults to 1.
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setFromIndex($value)
    {
        return $this->set('FromIndex', $value);
    }

    /**
     * Set the value for the Module input for this GetSearchRecords Choreo.
     *
     * @param string $value (optional, string) The Zoho module you want to access. Defaults to 'Leads'.
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setModule($value)
    {
        return $this->set('Module', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSearchRecords Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid formats are: json and xml (the default).
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SearchColumn input for this GetSearchRecords Choreo.
     *
     * @param string $value (required, string) Specify the name of the column you want to search (i.e. Email)
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setSearchColumn($value)
    {
        return $this->set('SearchColumn', $value);
    }

    /**
     * Set the value for the SearchExpression input for this GetSearchRecords Choreo.
     *
     * @param string $value (required, string) Specify an expression to use in your search (i.e. =, <>, contains, starts with, ends with, doesn't contain, <, >, <=, =>)
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setSearchExpression($value)
    {
        return $this->set('SearchExpression', $value);
    }

    /**
     * Set the value for the SearchString input for this GetSearchRecords Choreo.
     *
     * @param string $value (required, string) Specify a search string to use in the search (i.e. *gmail.com*)
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setSearchString($value)
    {
        return $this->set('SearchString', $value);
    }

    /**
     * Set the value for the SelectColumns input for this GetSearchRecords Choreo.
     *
     * @param string $value (optional, string) The columns to return separated by commas (i.e. First Name,Last Name,Email). When left empty, only IDs are returned.
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setSelectColumns($value)
    {
        return $this->set('SelectColumns', $value);
    }

    /**
     * Set the value for the ToIndex input for this GetSearchRecords Choreo.
     *
     * @param int $value (optional, integer) The ending index of the result set to return. Defaults to 20. Max is 200.
     * @return Zoho_CRM_GetSearchRecords_Inputs For method chaining.
     */
    public function setToIndex($value)
    {
        return $this->set('ToIndex', $value);
    }
}


/**
 * Execution object for the GetSearchRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetSearchRecords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSearchRecords Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSearchRecords execution.
     * @param Zoho_CRM_GetSearchRecords $choreo The choreography object for this execution.
     * @param Zoho_CRM_GetSearchRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetSearchRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetSearchRecords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_GetSearchRecords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSearchRecords execution.
     *
     * @return Zoho_CRM_GetSearchRecords_Results New results object.
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
     * Wraps results in appropriate results class for this GetSearchRecords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_GetSearchRecords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_GetSearchRecords_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSearchRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetSearchRecords_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSearchRecords Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_GetSearchRecords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSearchRecords execution.
     *
     * @return string The response from Zoho. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Inserts records into your Zoho CRM account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_InsertRecords extends Temboo_Choreography
{
    /**
     * Inserts records into your Zoho CRM account.
     *
     * @param Temboo_Session $session The session that owns this InsertRecords Choreo.
     * @return Zoho_CRM_InsertRecords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/InsertRecords/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InsertRecords Choreo.
     *
     * @param Zoho_CRM_InsertRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_InsertRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_InsertRecords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_InsertRecords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InsertRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_InsertRecords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_InsertRecords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InsertRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_InsertRecords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InsertRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_InsertRecords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InsertRecords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AnnualRevenue input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Annual Revenue field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setAnnualRevenue($value)
    {
        return $this->set('AnnualRevenue', $value);
    }

    /**
     * Set the value for the AuthenticationToken input for this InsertRecords Choreo.
     *
     * @param string $value (required, string) A valid authentication token. Permanent authentication tokens can be generated by the GenerateAuthToken Choreo.
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setAuthenticationToken($value)
    {
        return $this->set('AuthenticationToken', $value);
    }

    /**
     * Set the value for the CampaignSource input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Campaign Source field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setCampaignSource($value)
    {
        return $this->set('CampaignSource', $value);
    }

    /**
     * Set the value for the City input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the City field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Company input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Company field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setCompany($value)
    {
        return $this->set('Company', $value);
    }

    /**
     * Set the value for the Country input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Country field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Description input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Description field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the EmailOptOut input for this InsertRecords Choreo.
     *
     * @param bool $value (optional, boolean) Corresponds to the Email Opt Out field in Zoho. Defaults to 0 for false.
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setEmailOptOut($value)
    {
        return $this->set('EmailOptOut', $value);
    }

    /**
     * Set the value for the Email input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Email field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Fax input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Fax field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setFax($value)
    {
        return $this->set('Fax', $value);
    }

    /**
     * Set the value for the FirstName input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the First Name field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the Industry input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Industry field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setIndustry($value)
    {
        return $this->set('Industry', $value);
    }

    /**
     * Set the value for the LastName input for this InsertRecords Choreo.
     *
     * @param string $value (required, string) Corresponds to the Last Name field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the LeadOwner input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Lead Owner field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setLeadOwner($value)
    {
        return $this->set('LeadOwner', $value);
    }

    /**
     * Set the value for the LeadSource input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Lead Source field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setLeadSource($value)
    {
        return $this->set('LeadSource', $value);
    }

    /**
     * Set the value for the LeadStatus input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Lead Status field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setLeadStatus($value)
    {
        return $this->set('LeadStatus', $value);
    }

    /**
     * Set the value for the Mobile input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Mobile field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setMobile($value)
    {
        return $this->set('Mobile', $value);
    }

    /**
     * Set the value for the Module input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) The Zoho module you want to access. Defaults to 'Leads'.
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setModule($value)
    {
        return $this->set('Module', $value);
    }

    /**
     * Set the value for the NumOfEmployees input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Num Of Employees field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setNumOfEmployees($value)
    {
        return $this->set('NumOfEmployees', $value);
    }

    /**
     * Set the value for the Phone input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Phone field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the Rating input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Rating field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setRating($value)
    {
        return $this->set('Rating', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid formats are: json and xml (the default).
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Salutation input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Salutation field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setSalutation($value)
    {
        return $this->set('Salutation', $value);
    }

    /**
     * Set the value for the SkypeID input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Skype ID field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setSkypeID($value)
    {
        return $this->set('SkypeID', $value);
    }

    /**
     * Set the value for the State input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the State field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Street input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Street field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setStreet($value)
    {
        return $this->set('Street', $value);
    }

    /**
     * Set the value for the Title input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Title field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the Website input for this InsertRecords Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Website field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setWebsite($value)
    {
        return $this->set('Website', $value);
    }

    /**
     * Set the value for the ZipCode input for this InsertRecords Choreo.
     *
     * @param int $value (optional, integer) Corresponds to the Zip Code field in Zoho
     * @return Zoho_CRM_InsertRecords_Inputs For method chaining.
     */
    public function setZipCode($value)
    {
        return $this->set('ZipCode', $value);
    }
}


/**
 * Execution object for the InsertRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_InsertRecords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InsertRecords Choreo.
     *
     * @param Temboo_Session $session The session that owns this InsertRecords execution.
     * @param Zoho_CRM_InsertRecords $choreo The choreography object for this execution.
     * @param Zoho_CRM_InsertRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_InsertRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_InsertRecords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_InsertRecords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InsertRecords execution.
     *
     * @return Zoho_CRM_InsertRecords_Results New results object.
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
     * Wraps results in appropriate results class for this InsertRecords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_InsertRecords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_InsertRecords_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InsertRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_InsertRecords_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InsertRecords Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_InsertRecords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this InsertRecords execution.
     *
     * @return string The response from Zoho. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates an authentication token.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GenerateAuthToken extends Temboo_Choreography
{
    /**
     * Generates an authentication token.
     *
     * @param Temboo_Session $session The session that owns this GenerateAuthToken Choreo.
     * @return Zoho_CRM_GenerateAuthToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/GenerateAuthToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GenerateAuthToken Choreo.
     *
     * @param Zoho_CRM_GenerateAuthToken_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GenerateAuthToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GenerateAuthToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_GenerateAuthToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GenerateAuthToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GenerateAuthToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_GenerateAuthToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GenerateAuthToken Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GenerateAuthToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GenerateAuthToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GenerateAuthToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GenerateAuthToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_GenerateAuthToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_GenerateAuthToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this GenerateAuthToken Choreo.
     *
     * @param string $value (required, string) Your Zoho password.
     * @return Zoho_CRM_GenerateAuthToken_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GenerateAuthToken Choreo.
     *
     * @param string $value (required, string) Your Zoho CRM username.
     * @return Zoho_CRM_GenerateAuthToken_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GenerateAuthToken Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GenerateAuthToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GenerateAuthToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this GenerateAuthToken execution.
     * @param Zoho_CRM_GenerateAuthToken $choreo The choreography object for this execution.
     * @param Zoho_CRM_GenerateAuthToken_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GenerateAuthToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GenerateAuthToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_GenerateAuthToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GenerateAuthToken execution.
     *
     * @return Zoho_CRM_GenerateAuthToken_Results New results object.
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
     * Wraps results in appropriate results class for this GenerateAuthToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_GenerateAuthToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_GenerateAuthToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GenerateAuthToken Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GenerateAuthToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GenerateAuthToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_GenerateAuthToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthenticationToken" output from this GenerateAuthToken execution.
     *
     * @return string (string) The authentication token returned from Zoho.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthenticationToken()
    {
        return $this->get('AuthenticationToken');
    }
}

/**
 * Lists all the documents associated with a user's Zoho Writer Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListAllDocuments extends Temboo_Choreography
{
    /**
     * Lists all the documents associated with a user's Zoho Writer Account.
     *
     * @param Temboo_Session $session The session that owns this ListAllDocuments Choreo.
     * @return Zoho_Writer_ListAllDocuments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Writer/ListAllDocuments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllDocuments Choreo.
     *
     * @param Zoho_Writer_ListAllDocuments_Inputs|array $inputs (optional) Inputs as Zoho_Writer_ListAllDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_ListAllDocuments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Writer_ListAllDocuments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_ListAllDocuments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Writer_ListAllDocuments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListAllDocuments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_ListAllDocuments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllDocuments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllDocuments Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListAllDocuments Choreo.
     *
     * @param int $value (optional, integer) Sets the number of documents to be listed.
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LoginID input for this ListAllDocuments Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the OrderBy input for this ListAllDocuments Choreo.
     *
     * @param string $value (optional, string) Order documents by createdTime, lastModifiedTime or name.
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this ListAllDocuments Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListAllDocuments Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to xml.
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListAllDocuments Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartFrom input for this ListAllDocuments Choreo.
     *
     * @param int $value (optional, integer) Sets the initial document number from which the documents will be listed.
     * @return Zoho_Writer_ListAllDocuments_Inputs For method chaining.
     */
    public function setStartFrom($value)
    {
        return $this->set('StartFrom', $value);
    }
}


/**
 * Execution object for the ListAllDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListAllDocuments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllDocuments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllDocuments execution.
     * @param Zoho_Writer_ListAllDocuments $choreo The choreography object for this execution.
     * @param Zoho_Writer_ListAllDocuments_Inputs|array $inputs (optional) Inputs as Zoho_Writer_ListAllDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_ListAllDocuments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Writer_ListAllDocuments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllDocuments execution.
     *
     * @return Zoho_Writer_ListAllDocuments_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllDocuments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Writer_ListAllDocuments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Writer_ListAllDocuments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListAllDocuments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllDocuments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Writer_ListAllDocuments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllDocuments execution.
     *
     * @return string The response from Zoho. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all the documents that have been "trashed" from a user's Zoho Writer Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListTrashedDocuments extends Temboo_Choreography
{
    /**
     * Lists all the documents that have been "trashed" from a user's Zoho Writer Account.
     *
     * @param Temboo_Session $session The session that owns this ListTrashedDocuments Choreo.
     * @return Zoho_Writer_ListTrashedDocuments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Writer/ListTrashedDocuments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTrashedDocuments Choreo.
     *
     * @param Zoho_Writer_ListTrashedDocuments_Inputs|array $inputs (optional) Inputs as Zoho_Writer_ListTrashedDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_ListTrashedDocuments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Writer_ListTrashedDocuments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTrashedDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_ListTrashedDocuments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Writer_ListTrashedDocuments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTrashedDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListTrashedDocuments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTrashedDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_ListTrashedDocuments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTrashedDocuments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListTrashedDocuments Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListTrashedDocuments Choreo.
     *
     * @param int $value (optional, integer) Sets the number of documents to be listed.
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LoginID input for this ListTrashedDocuments Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the OrderBy input for this ListTrashedDocuments Choreo.
     *
     * @param string $value (optional, string) Order documents by createdTime, lastModifiedTime or name.
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this ListTrashedDocuments Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListTrashedDocuments Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to xml.
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListTrashedDocuments Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartFrom input for this ListTrashedDocuments Choreo.
     *
     * @param int $value (optional, integer) Sets the initial document number from which the documents will be listed.
     * @return Zoho_Writer_ListTrashedDocuments_Inputs For method chaining.
     */
    public function setStartFrom($value)
    {
        return $this->set('StartFrom', $value);
    }
}


/**
 * Execution object for the ListTrashedDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListTrashedDocuments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTrashedDocuments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTrashedDocuments execution.
     * @param Zoho_Writer_ListTrashedDocuments $choreo The choreography object for this execution.
     * @param Zoho_Writer_ListTrashedDocuments_Inputs|array $inputs (optional) Inputs as Zoho_Writer_ListTrashedDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_ListTrashedDocuments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Writer_ListTrashedDocuments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTrashedDocuments execution.
     *
     * @return Zoho_Writer_ListTrashedDocuments_Results New results object.
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
     * Wraps results in appropriate results class for this ListTrashedDocuments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Writer_ListTrashedDocuments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Writer_ListTrashedDocuments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTrashedDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListTrashedDocuments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTrashedDocuments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Writer_ListTrashedDocuments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTrashedDocuments execution.
     *
     * @return string The response from Zoho. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all the documents that have been "shared" to a user's Zoho Writer Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListSharedDocuments extends Temboo_Choreography
{
    /**
     * Lists all the documents that have been "shared" to a user's Zoho Writer Account.
     *
     * @param Temboo_Session $session The session that owns this ListSharedDocuments Choreo.
     * @return Zoho_Writer_ListSharedDocuments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Writer/ListSharedDocuments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListSharedDocuments Choreo.
     *
     * @param Zoho_Writer_ListSharedDocuments_Inputs|array $inputs (optional) Inputs as Zoho_Writer_ListSharedDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_ListSharedDocuments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Writer_ListSharedDocuments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListSharedDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_ListSharedDocuments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Writer_ListSharedDocuments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListSharedDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListSharedDocuments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListSharedDocuments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Writer_ListSharedDocuments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListSharedDocuments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListSharedDocuments Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListSharedDocuments Choreo.
     *
     * @param int $value (optional, integer) Sets the number of documents to be listed.
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LoginID input for this ListSharedDocuments Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the OrderBy input for this ListSharedDocuments Choreo.
     *
     * @param string $value (optional, string) Order documents by createdTime, lastModifiedTime or name.
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this ListSharedDocuments Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListSharedDocuments Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to xml.
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListSharedDocuments Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartFrom input for this ListSharedDocuments Choreo.
     *
     * @param int $value (optional, integer) Sets the initial document number from which the documents will be listed.
     * @return Zoho_Writer_ListSharedDocuments_Inputs For method chaining.
     */
    public function setStartFrom($value)
    {
        return $this->set('StartFrom', $value);
    }
}


/**
 * Execution object for the ListSharedDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListSharedDocuments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListSharedDocuments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListSharedDocuments execution.
     * @param Zoho_Writer_ListSharedDocuments $choreo The choreography object for this execution.
     * @param Zoho_Writer_ListSharedDocuments_Inputs|array $inputs (optional) Inputs as Zoho_Writer_ListSharedDocuments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Writer_ListSharedDocuments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Writer_ListSharedDocuments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListSharedDocuments execution.
     *
     * @return Zoho_Writer_ListSharedDocuments_Results New results object.
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
     * Wraps results in appropriate results class for this ListSharedDocuments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Writer_ListSharedDocuments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Writer_ListSharedDocuments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListSharedDocuments Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Writer_ListSharedDocuments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListSharedDocuments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Writer_ListSharedDocuments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListSharedDocuments execution.
     *
     * @return string The response from Zoho. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves data with respect to the Custom View in Zoho CRM.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetCVRecord extends Temboo_Choreography
{
    /**
     * Retrieves data with respect to the Custom View in Zoho CRM.
     *
     * @param Temboo_Session $session The session that owns this GetCVRecord Choreo.
     * @return Zoho_CRM_GetCVRecord New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/GetCVRecord/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCVRecord Choreo.
     *
     * @param Zoho_CRM_GetCVRecord_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetCVRecord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetCVRecord_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_GetCVRecord_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCVRecord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetCVRecord_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_GetCVRecord_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCVRecord Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetCVRecord_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCVRecord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetCVRecord_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCVRecord input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_GetCVRecord_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_GetCVRecord_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthenticationToken input for this GetCVRecord Choreo.
     *
     * @param string $value (required, string) A valid authentication token. Permanent authentication tokens can be generated by the GenerateAuthToken Choreo.
     * @return Zoho_CRM_GetCVRecord_Inputs For method chaining.
     */
    public function setAuthenticationToken($value)
    {
        return $this->set('AuthenticationToken', $value);
    }

    /**
     * Set the value for the CVName input for this GetCVRecord Choreo.
     *
     * @param string $value (optional, string) Used to retrieve records from a specific customer view. Defaults to 'All Open Leads'.
     * @return Zoho_CRM_GetCVRecord_Inputs For method chaining.
     */
    public function setCVName($value)
    {
        return $this->set('CVName', $value);
    }

    /**
     * Set the value for the FromIndex input for this GetCVRecord Choreo.
     *
     * @param int $value (optional, integer) The beginning index of the result set to return. Defaults to 1.
     * @return Zoho_CRM_GetCVRecord_Inputs For method chaining.
     */
    public function setFromIndex($value)
    {
        return $this->set('FromIndex', $value);
    }

    /**
     * Set the value for the LastModifiedDate input for this GetCVRecord Choreo.
     *
     * @param string $value (optional, date) Used to return records with a created or modified date that is after the specified time.  (i.e. 2010-04-21 11:09:23)
     * @return Zoho_CRM_GetCVRecord_Inputs For method chaining.
     */
    public function setLastModifiedDate($value)
    {
        return $this->set('LastModifiedDate', $value);
    }

    /**
     * Set the value for the Module input for this GetCVRecord Choreo.
     *
     * @param string $value (optional, string) The Zoho module you want to access. Defaults to Leads.
     * @return Zoho_CRM_GetCVRecord_Inputs For method chaining.
     */
    public function setModule($value)
    {
        return $this->set('Module', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCVRecord Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid formats are: json and xml (the default).
     * @return Zoho_CRM_GetCVRecord_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ToIndex input for this GetCVRecord Choreo.
     *
     * @param int $value (optional, integer) The ending index of the result set to return. Defaults to 20. Max is 200.
     * @return Zoho_CRM_GetCVRecord_Inputs For method chaining.
     */
    public function setToIndex($value)
    {
        return $this->set('ToIndex', $value);
    }
}


/**
 * Execution object for the GetCVRecord Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetCVRecord_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCVRecord Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCVRecord execution.
     * @param Zoho_CRM_GetCVRecord $choreo The choreography object for this execution.
     * @param Zoho_CRM_GetCVRecord_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetCVRecord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetCVRecord_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_GetCVRecord $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCVRecord execution.
     *
     * @return Zoho_CRM_GetCVRecord_Results New results object.
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
     * Wraps results in appropriate results class for this GetCVRecord execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_GetCVRecord_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_GetCVRecord_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCVRecord Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetCVRecord_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCVRecord Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_GetCVRecord_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCVRecord execution.
     *
     * @return string The response from Zoho. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves records from your Zoho CRM account by ID.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetRecordsById extends Temboo_Choreography
{
    /**
     * Retrieves records from your Zoho CRM account by ID.
     *
     * @param Temboo_Session $session The session that owns this GetRecordsById Choreo.
     * @return Zoho_CRM_GetRecordsById New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/GetRecordsById/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecordsById Choreo.
     *
     * @param Zoho_CRM_GetRecordsById_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetRecordsById_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetRecordsById_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_GetRecordsById_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecordsById Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetRecordsById_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_GetRecordsById_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecordsById Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetRecordsById_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecordsById Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetRecordsById_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecordsById input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_GetRecordsById_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_GetRecordsById_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthenticationToken input for this GetRecordsById Choreo.
     *
     * @param string $value (required, string) A valid authentication token. Permanent authentication tokens can be generated by the GenerateAuthToken Choreo.
     * @return Zoho_CRM_GetRecordsById_Inputs For method chaining.
     */
    public function setAuthenticationToken($value)
    {
        return $this->set('AuthenticationToken', $value);
    }

    /**
     * Set the value for the ID input for this GetRecordsById Choreo.
     *
     * @param int $value (required, integer) The ID for the Zoho record to lookup
     * @return Zoho_CRM_GetRecordsById_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Module input for this GetRecordsById Choreo.
     *
     * @param string $value (optional, string) The Zoho module you want to access. Defaults to 'Leads'.
     * @return Zoho_CRM_GetRecordsById_Inputs For method chaining.
     */
    public function setModule($value)
    {
        return $this->set('Module', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRecordsById Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid formats are: json and xml (the default).
     * @return Zoho_CRM_GetRecordsById_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetRecordsById Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetRecordsById_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecordsById Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecordsById execution.
     * @param Zoho_CRM_GetRecordsById $choreo The choreography object for this execution.
     * @param Zoho_CRM_GetRecordsById_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetRecordsById_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetRecordsById_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_GetRecordsById $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecordsById execution.
     *
     * @return Zoho_CRM_GetRecordsById_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecordsById execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_GetRecordsById_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_GetRecordsById_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecordsById Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetRecordsById_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecordsById Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_GetRecordsById_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecordsById execution.
     *
     * @return string The response from Zoho. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified record from a Zoho CRM account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_DeleteRecords extends Temboo_Choreography
{
    /**
     * Deletes a specified record from a Zoho CRM account.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecords Choreo.
     * @return Zoho_CRM_DeleteRecords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/DeleteRecords/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteRecords Choreo.
     *
     * @param Zoho_CRM_DeleteRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_DeleteRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_DeleteRecords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_DeleteRecords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_DeleteRecords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_DeleteRecords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_DeleteRecords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_DeleteRecords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRecords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_DeleteRecords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_DeleteRecords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthenticationToken input for this DeleteRecords Choreo.
     *
     * @param string $value (required, string) A valid authentication token. Permanent authentication tokens can be generated by the GenerateAuthToken Choreo.
     * @return Zoho_CRM_DeleteRecords_Inputs For method chaining.
     */
    public function setAuthenticationToken($value)
    {
        return $this->set('AuthenticationToken', $value);
    }

    /**
     * Set the value for the ID input for this DeleteRecords Choreo.
     *
     * @param int $value (required, integer) The ID for the record you want to delete
     * @return Zoho_CRM_DeleteRecords_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the Module input for this DeleteRecords Choreo.
     *
     * @param string $value (optional, string) The Zoho module you want to access. Defaults to Leads.
     * @return Zoho_CRM_DeleteRecords_Inputs For method chaining.
     */
    public function setModule($value)
    {
        return $this->set('Module', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteRecords Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid formats are: json and xml (the default).
     * @return Zoho_CRM_DeleteRecords_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the DeleteRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_DeleteRecords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRecords Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecords execution.
     * @param Zoho_CRM_DeleteRecords $choreo The choreography object for this execution.
     * @param Zoho_CRM_DeleteRecords_Inputs|array $inputs (optional) Inputs as Zoho_CRM_DeleteRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_DeleteRecords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_DeleteRecords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRecords execution.
     *
     * @return Zoho_CRM_DeleteRecords_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteRecords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_DeleteRecords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_DeleteRecords_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteRecords Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_DeleteRecords_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteRecords Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_DeleteRecords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteRecords execution.
     *
     * @return string The response from Zoho. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Converts a lead to a potential, account, or contact in your Zoho CRM account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_ConvertLead extends Temboo_Choreography
{
    /**
     * Converts a lead to a potential, account, or contact in your Zoho CRM account.
     *
     * @param Temboo_Session $session The session that owns this ConvertLead Choreo.
     * @return Zoho_CRM_ConvertLead New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/ConvertLead/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ConvertLead Choreo.
     *
     * @param Zoho_CRM_ConvertLead_Inputs|array $inputs (optional) Inputs as Zoho_CRM_ConvertLead_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_ConvertLead_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_ConvertLead_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConvertLead Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_ConvertLead_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_ConvertLead_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConvertLead Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_ConvertLead_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ConvertLead Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_ConvertLead_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConvertLead input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Amount input for this ConvertLead Choreo.
     *
     * @param float $value (conditional, decimal) Corresponds to the Amount field in Zoho. Required if CreatePotential is set to 1.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the AssignTo input for this ConvertLead Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Assign To field in Zoho
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setAssignTo($value)
    {
        return $this->set('AssignTo', $value);
    }

    /**
     * Set the value for the AuthenticationToken input for this ConvertLead Choreo.
     *
     * @param string $value (required, string) A valid authentication token. Permanent authentication tokens can be generated by the GenerateAuthToken Choreo.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setAuthenticationToken($value)
    {
        return $this->set('AuthenticationToken', $value);
    }

    /**
     * Set the value for the ClosingDate input for this ConvertLead Choreo.
     *
     * @param string $value (conditional, date) Corresponds to the Closing Date field in Zoho. Formatted like MM/dd/yyyy. Required if CreatePotential is set to 1.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setClosingDate($value)
    {
        return $this->set('ClosingDate', $value);
    }

    /**
     * Set the value for the ContactRole input for this ConvertLead Choreo.
     *
     * @param string $value (conditional, string) Corresponds to the Contact Role field in Zoho. Required if CreatePotential is set to 1.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setContactRole($value)
    {
        return $this->set('ContactRole', $value);
    }

    /**
     * Set the value for the CreatePotential input for this ConvertLead Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to create a potential
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setCreatePotential($value)
    {
        return $this->set('CreatePotential', $value);
    }

    /**
     * Set the value for the ID input for this ConvertLead Choreo.
     *
     * @param int $value (required, integer) The ID for the lead that you wish to convert to a potential
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the NotifyLeadOwner input for this ConvertLead Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to notifiy the lead owner. Defaults to 0 for false.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setNotifyLeadOwner($value)
    {
        return $this->set('NotifyLeadOwner', $value);
    }

    /**
     * Set the value for the NotifyNewEntityOwner input for this ConvertLead Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to notify the new entity owner. Defaults to 0 for false.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setNotifyNewEntityOwner($value)
    {
        return $this->set('NotifyNewEntityOwner', $value);
    }

    /**
     * Set the value for the PotentialName input for this ConvertLead Choreo.
     *
     * @param string $value (conditional, string) Corresponds to the Potential Name field in Zoho. Required if CreatePotential is set to 1.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setPotentialName($value)
    {
        return $this->set('PotentialName', $value);
    }

    /**
     * Set the value for the PotentialStage input for this ConvertLead Choreo.
     *
     * @param string $value (conditional, string) Corresponds to the Potential Stage field in Zoho. Required if CreatePotential is set to 1.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setPotentialStage($value)
    {
        return $this->set('PotentialStage', $value);
    }

    /**
     * Set the value for the Probability input for this ConvertLead Choreo.
     *
     * @param int $value (conditional, integer) Corresponds to the Probability field in Zoho. Required if CreatePotential is set to 1.
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setProbability($value)
    {
        return $this->set('Probability', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ConvertLead Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid formats are: json and xml (the default).
     * @return Zoho_CRM_ConvertLead_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ConvertLead Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_ConvertLead_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConvertLead Choreo.
     *
     * @param Temboo_Session $session The session that owns this ConvertLead execution.
     * @param Zoho_CRM_ConvertLead $choreo The choreography object for this execution.
     * @param Zoho_CRM_ConvertLead_Inputs|array $inputs (optional) Inputs as Zoho_CRM_ConvertLead_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_ConvertLead_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_ConvertLead $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConvertLead execution.
     *
     * @return Zoho_CRM_ConvertLead_Results New results object.
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
     * Wraps results in appropriate results class for this ConvertLead execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_ConvertLead_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_ConvertLead_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ConvertLead Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_ConvertLead_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ConvertLead Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_ConvertLead_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ConvertLead execution.
     *
     * @return string The response from Zoho. Format corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists all the spreadsheets that have been "trashed" from a user's Zoho Sheet Account.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListTrashedSpreadsheets extends Temboo_Choreography
{
    /**
     * Lists all the spreadsheets that have been "trashed" from a user's Zoho Sheet Account.
     *
     * @param Temboo_Session $session The session that owns this ListTrashedSpreadsheets Choreo.
     * @return Zoho_Sheet_ListTrashedSpreadsheets New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/Sheet/ListTrashedSpreadsheets/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTrashedSpreadsheets Choreo.
     *
     * @param Zoho_Sheet_ListTrashedSpreadsheets_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_ListTrashedSpreadsheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_Sheet_ListTrashedSpreadsheets_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTrashedSpreadsheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_Sheet_ListTrashedSpreadsheets_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTrashedSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListTrashedSpreadsheets_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTrashedSpreadsheets Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTrashedSpreadsheets input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListTrashedSpreadsheets Choreo.
     *
     * @param string $value (required, string) The API Key provided by Zoho
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListTrashedSpreadsheets Choreo.
     *
     * @param int $value (optional, integer) Sets the number of documents to be listed.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the LoginID input for this ListTrashedSpreadsheets Choreo.
     *
     * @param string $value (required, string) Your Zoho username (or login id)
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function setLoginID($value)
    {
        return $this->set('LoginID', $value);
    }

    /**
     * Set the value for the OrderBy input for this ListTrashedSpreadsheets Choreo.
     *
     * @param string $value (optional, string) Order documents by createdTime, lastModifiedTime or name.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this ListTrashedSpreadsheets Choreo.
     *
     * @param string $value (required, password) Your Zoho password
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListTrashedSpreadsheets Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to xml.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListTrashedSpreadsheets Choreo.
     *
     * @param string $value (optional, string) Sorting order: asc or desc. Default sort order is set to ascending.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartFrom input for this ListTrashedSpreadsheets Choreo.
     *
     * @param int $value (optional, integer) Sets the initial document number from which the documents will be listed.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Inputs For method chaining.
     */
    public function setStartFrom($value)
    {
        return $this->set('StartFrom', $value);
    }
}


/**
 * Execution object for the ListTrashedSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListTrashedSpreadsheets_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTrashedSpreadsheets Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTrashedSpreadsheets execution.
     * @param Zoho_Sheet_ListTrashedSpreadsheets $choreo The choreography object for this execution.
     * @param Zoho_Sheet_ListTrashedSpreadsheets_Inputs|array $inputs (optional) Inputs as Zoho_Sheet_ListTrashedSpreadsheets_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_Sheet_ListTrashedSpreadsheets $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTrashedSpreadsheets execution.
     *
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Results New results object.
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
     * Wraps results in appropriate results class for this ListTrashedSpreadsheets execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_Sheet_ListTrashedSpreadsheets_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTrashedSpreadsheets Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_Sheet_ListTrashedSpreadsheets_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTrashedSpreadsheets Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_Sheet_ListTrashedSpreadsheets_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTrashedSpreadsheets execution.
     *
     * @return string The response from Zoho. Corresponds to the ResponseFormat input. Defaults to XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves records from your Zoho CRM account and searches by predefined columns.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetSearchRecordsByPDC extends Temboo_Choreography
{
    /**
     * Retrieves records from your Zoho CRM account and searches by predefined columns.
     *
     * @param Temboo_Session $session The session that owns this GetSearchRecordsByPDC Choreo.
     * @return Zoho_CRM_GetSearchRecordsByPDC New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Zoho/CRM/GetSearchRecordsByPDC/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSearchRecordsByPDC Choreo.
     *
     * @param Zoho_CRM_GetSearchRecordsByPDC_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetSearchRecordsByPDC_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Zoho_CRM_GetSearchRecordsByPDC_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSearchRecordsByPDC Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Zoho_CRM_GetSearchRecordsByPDC_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSearchRecordsByPDC Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetSearchRecordsByPDC_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSearchRecordsByPDC Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSearchRecordsByPDC input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AuthenticationToken input for this GetSearchRecordsByPDC Choreo.
     *
     * @param string $value (required, string) A valid authentication token. Permanent authentication tokens can be generated by the GenerateAuthToken Choreo.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function setAuthenticationToken($value)
    {
        return $this->set('AuthenticationToken', $value);
    }

    /**
     * Set the value for the FromIndex input for this GetSearchRecordsByPDC Choreo.
     *
     * @param int $value (optional, integer) The beginning index of the result set to return. Defaults to 1.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function setFromIndex($value)
    {
        return $this->set('FromIndex', $value);
    }

    /**
     * Set the value for the Module input for this GetSearchRecordsByPDC Choreo.
     *
     * @param string $value (required, string) The Zoho module you want to access. Defaults to 'Leads'.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function setModule($value)
    {
        return $this->set('Module', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSearchRecordsByPDC Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid formats are: json and xml (the default).
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SearchColumn input for this GetSearchRecordsByPDC Choreo.
     *
     * @param string $value (required, string) The column name you want to search (such as "email", the column names used in this method are in lowercase)
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function setSearchColumn($value)
    {
        return $this->set('SearchColumn', $value);
    }

    /**
     * Set the value for the SearchValue input for this GetSearchRecordsByPDC Choreo.
     *
     * @param string $value (required, string) Specify a search value for the column you're searching
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function setSearchValue($value)
    {
        return $this->set('SearchValue', $value);
    }

    /**
     * Set the value for the SelectColumns input for this GetSearchRecordsByPDC Choreo.
     *
     * @param string $value (optional, string) The columns to return separated by commas (i.e. First Name,Last Name,Email). When left empty, only IDs are returned.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function setSelectColumns($value)
    {
        return $this->set('SelectColumns', $value);
    }

    /**
     * Set the value for the ToIndex input for this GetSearchRecordsByPDC Choreo.
     *
     * @param int $value (optional, integer) The ending index of the result set to return. Defaults to 20. Max is 200.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Inputs For method chaining.
     */
    public function setToIndex($value)
    {
        return $this->set('ToIndex', $value);
    }
}


/**
 * Execution object for the GetSearchRecordsByPDC Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetSearchRecordsByPDC_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSearchRecordsByPDC Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSearchRecordsByPDC execution.
     * @param Zoho_CRM_GetSearchRecordsByPDC $choreo The choreography object for this execution.
     * @param Zoho_CRM_GetSearchRecordsByPDC_Inputs|array $inputs (optional) Inputs as Zoho_CRM_GetSearchRecordsByPDC_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Zoho_CRM_GetSearchRecordsByPDC $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSearchRecordsByPDC execution.
     *
     * @return Zoho_CRM_GetSearchRecordsByPDC_Results New results object.
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
     * Wraps results in appropriate results class for this GetSearchRecordsByPDC execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Zoho_CRM_GetSearchRecordsByPDC_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSearchRecordsByPDC Choreo.
 *
 * @package Temboo
 * @subpackage Zoho
 */
class Zoho_CRM_GetSearchRecordsByPDC_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSearchRecordsByPDC Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Zoho_CRM_GetSearchRecordsByPDC_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSearchRecordsByPDC execution.
     *
     * @return string The response from Zoho. Format corresponds to the ResponseFormat input. Defaults to xml.
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
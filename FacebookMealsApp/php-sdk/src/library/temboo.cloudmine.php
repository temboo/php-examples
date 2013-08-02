<?php

/**
 * Temboo PHP SDK CloudMine classes
 *
 * Execute Choreographies from the Temboo CloudMine bundle.
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
 * @subpackage CloudMine
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Allows you to update or create key/value pairs.

 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectSet extends Temboo_Choreography
{
    /**
     * Allows you to update or create key/value pairs.

     *
     * @param Temboo_Session $session The session that owns this ObjectSet Choreo.
     * @return CloudMine_ObjectStorage_ObjectSet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/ObjectStorage/ObjectSet/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ObjectSet Choreo.
     *
     * @param CloudMine_ObjectStorage_ObjectSet_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectSet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectSet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_ObjectStorage_ObjectSet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ObjectSet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectSet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_ObjectStorage_ObjectSet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ObjectSet Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectSet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ObjectSet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectSet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ObjectSet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_ObjectStorage_ObjectSet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_ObjectStorage_ObjectSet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Data input for this ObjectSet Choreo.
     *
     * @param string $value (required, json) A valid JSON object containing key/value pairs.
     * @return CloudMine_ObjectStorage_ObjectSet_Inputs For method chaining.
     */
    public function setData($value)
    {
        return $this->set('Data', $value);
    }

    /**
     * Set the value for the APIKey input for this ObjectSet Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectSet_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this ObjectSet Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectSet_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the SessionToken input for this ObjectSet Choreo.
     *
     * @param string $value (conditional, string) The session token for an existing user (returned by the AccountLogin Choreo). This is only required if your app is performing this operation on behalf of another user.
     * @return CloudMine_ObjectStorage_ObjectSet_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }
}


/**
 * Execution object for the ObjectSet Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectSet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ObjectSet Choreo.
     *
     * @param Temboo_Session $session The session that owns this ObjectSet execution.
     * @param CloudMine_ObjectStorage_ObjectSet $choreo The choreography object for this execution.
     * @param CloudMine_ObjectStorage_ObjectSet_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectSet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectSet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_ObjectStorage_ObjectSet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ObjectSet execution.
     *
     * @return CloudMine_ObjectStorage_ObjectSet_Results New results object.
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
     * Wraps results in appropriate results class for this ObjectSet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectSet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_ObjectStorage_ObjectSet_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ObjectSet Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectSet_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ObjectSet Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectSet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ObjectSet execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all users that have been created for your application.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_GetUsers extends Temboo_Choreography
{
    /**
     * Retrieves a list of all users that have been created for your application.
     *
     * @param Temboo_Session $session The session that owns this GetUsers Choreo.
     * @return CloudMine_UserAccountManagement_GetUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/UserAccountManagement/GetUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUsers Choreo.
     *
     * @param CloudMine_UserAccountManagement_GetUsers_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_GetUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_GetUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_UserAccountManagement_GetUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_GetUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_UserAccountManagement_GetUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUsers Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_GetUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_GetUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_UserAccountManagement_GetUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_UserAccountManagement_GetUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetUsers Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_GetUsers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this GetUsers Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_GetUsers_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }
}


/**
 * Execution object for the GetUsers Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_GetUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUsers execution.
     * @param CloudMine_UserAccountManagement_GetUsers $choreo The choreography object for this execution.
     * @param CloudMine_UserAccountManagement_GetUsers_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_GetUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_GetUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_UserAccountManagement_GetUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUsers execution.
     *
     * @return CloudMine_UserAccountManagement_GetUsers_Results New results object.
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
     * Wraps results in appropriate results class for this GetUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_GetUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_UserAccountManagement_GetUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUsers Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_GetUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_GetUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUsers execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes one or more specified keys.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectDelete extends Temboo_Choreography
{
    /**
     * Deletes one or more specified keys.
     *
     * @param Temboo_Session $session The session that owns this ObjectDelete Choreo.
     * @return CloudMine_ObjectStorage_ObjectDelete New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/ObjectStorage/ObjectDelete/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ObjectDelete Choreo.
     *
     * @param CloudMine_ObjectStorage_ObjectDelete_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectDelete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectDelete_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_ObjectStorage_ObjectDelete_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ObjectDelete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectDelete_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_ObjectStorage_ObjectDelete_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ObjectDelete Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectDelete_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ObjectDelete Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectDelete_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ObjectDelete input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_ObjectStorage_ObjectDelete_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_ObjectStorage_ObjectDelete_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ObjectDelete Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectDelete_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the All input for this ObjectDelete Choreo.
     *
     * @param bool $value (conditional, boolean) Indicates that all keys should be deleted if the Keys input is left empty. Set to "true" to delete all keys.
     * @return CloudMine_ObjectStorage_ObjectDelete_Inputs For method chaining.
     */
    public function setAll($value)
    {
        return $this->set('All', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this ObjectDelete Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectDelete_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the Keys input for this ObjectDelete Choreo.
     *
     * @param string $value (conditional, string) A comma separated list of keys to delete. Required unless specifying "true" for the All parameter.
     * @return CloudMine_ObjectStorage_ObjectDelete_Inputs For method chaining.
     */
    public function setKeys($value)
    {
        return $this->set('Keys', $value);
    }

    /**
     * Set the value for the SessionToken input for this ObjectDelete Choreo.
     *
     * @param string $value (conditional, string) The session token for an existing user (returned by the AccountLogin Choreo). This is only required if your app is performing this operation on behalf of another user.
     * @return CloudMine_ObjectStorage_ObjectDelete_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }
}


/**
 * Execution object for the ObjectDelete Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectDelete_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ObjectDelete Choreo.
     *
     * @param Temboo_Session $session The session that owns this ObjectDelete execution.
     * @param CloudMine_ObjectStorage_ObjectDelete $choreo The choreography object for this execution.
     * @param CloudMine_ObjectStorage_ObjectDelete_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectDelete_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectDelete_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_ObjectStorage_ObjectDelete $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ObjectDelete execution.
     *
     * @return CloudMine_ObjectStorage_ObjectDelete_Results New results object.
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
     * Wraps results in appropriate results class for this ObjectDelete execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectDelete_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_ObjectStorage_ObjectDelete_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ObjectDelete Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectDelete_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ObjectDelete Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectDelete_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ObjectDelete execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to update, merge, or create key/value pairs.

 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectUpdate extends Temboo_Choreography
{
    /**
     * Allows you to update, merge, or create key/value pairs.

     *
     * @param Temboo_Session $session The session that owns this ObjectUpdate Choreo.
     * @return CloudMine_ObjectStorage_ObjectUpdate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/ObjectStorage/ObjectUpdate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ObjectUpdate Choreo.
     *
     * @param CloudMine_ObjectStorage_ObjectUpdate_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_ObjectStorage_ObjectUpdate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ObjectUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_ObjectStorage_ObjectUpdate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ObjectUpdate Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectUpdate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ObjectUpdate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ObjectUpdate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Data input for this ObjectUpdate Choreo.
     *
     * @param string $value (required, json) A valid JSON object containing key/value pairs.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Inputs For method chaining.
     */
    public function setData($value)
    {
        return $this->set('Data', $value);
    }

    /**
     * Set the value for the APIKey input for this ObjectUpdate Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this ObjectUpdate Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the SessionToken input for this ObjectUpdate Choreo.
     *
     * @param string $value (conditional, string) The session token for an existing user (returned by the AccountLogin Choreo). This is only required if your app is performing this operation on behalf of another user.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }
}


/**
 * Execution object for the ObjectUpdate Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectUpdate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ObjectUpdate Choreo.
     *
     * @param Temboo_Session $session The session that owns this ObjectUpdate execution.
     * @param CloudMine_ObjectStorage_ObjectUpdate $choreo The choreography object for this execution.
     * @param CloudMine_ObjectStorage_ObjectUpdate_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectUpdate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_ObjectStorage_ObjectUpdate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ObjectUpdate execution.
     *
     * @return CloudMine_ObjectStorage_ObjectUpdate_Results New results object.
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
     * Wraps results in appropriate results class for this ObjectUpdate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_ObjectStorage_ObjectUpdate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ObjectUpdate Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectUpdate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ObjectUpdate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectUpdate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ObjectUpdate execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves one or more objects from Cloudmine.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectGet extends Temboo_Choreography
{
    /**
     * Retrieves one or more objects from Cloudmine.
     *
     * @param Temboo_Session $session The session that owns this ObjectGet Choreo.
     * @return CloudMine_ObjectStorage_ObjectGet New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/ObjectStorage/ObjectGet/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ObjectGet Choreo.
     *
     * @param CloudMine_ObjectStorage_ObjectGet_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectGet_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_ObjectStorage_ObjectGet_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ObjectGet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_ObjectStorage_ObjectGet_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ObjectGet Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectGet_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ObjectGet Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ObjectGet input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ObjectGet Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this ObjectGet Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the Count input for this ObjectGet Choreo.
     *
     * @param bool $value (optional, boolean) Returns a count of the results in the response if set to true. Valid values are true and false.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Keys input for this ObjectGet Choreo.
     *
     * @param string $value (optional, string) A comma separated list of keys to return. If not specified, all key/value pairs are returned.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs For method chaining.
     */
    public function setKeys($value)
    {
        return $this->set('Keys', $value);
    }

    /**
     * Set the value for the Limit input for this ObjectGet Choreo.
     *
     * @param int $value (optional, integer) Limits the number of results returned. Use -1 for no limit. Use 0 for no results, and with Count=true to just get the number of available results. This defaults to 50.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the SessionToken input for this ObjectGet Choreo.
     *
     * @param string $value (conditional, string) The session token for an existing user (returned by the AccountLogin Choreo). This is only required if your app is performing this operation on behalf of another user.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }

    /**
     * Set the value for the Skip input for this ObjectGet Choreo.
     *
     * @param int $value (optional, integer) Indicates to start results after skiping this number objects. Used to page through results.
     * @return CloudMine_ObjectStorage_ObjectGet_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }
}


/**
 * Execution object for the ObjectGet Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectGet_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ObjectGet Choreo.
     *
     * @param Temboo_Session $session The session that owns this ObjectGet execution.
     * @param CloudMine_ObjectStorage_ObjectGet $choreo The choreography object for this execution.
     * @param CloudMine_ObjectStorage_ObjectGet_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectGet_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectGet_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_ObjectStorage_ObjectGet $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ObjectGet execution.
     *
     * @return CloudMine_ObjectStorage_ObjectGet_Results New results object.
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
     * Wraps results in appropriate results class for this ObjectGet execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectGet_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_ObjectStorage_ObjectGet_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ObjectGet Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectGet_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ObjectGet Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectGet_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ObjectGet execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes one or more files from the CloudMine server using the keys provided.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_DeleteFile extends Temboo_Choreography
{
    /**
     * Deletes one or more files from the CloudMine server using the keys provided.
     *
     * @param Temboo_Session $session The session that owns this DeleteFile Choreo.
     * @return CloudMine_FileStorage_DeleteFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/FileStorage/DeleteFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteFile Choreo.
     *
     * @param CloudMine_FileStorage_DeleteFile_Inputs|array $inputs (optional) Inputs as CloudMine_FileStorage_DeleteFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_FileStorage_DeleteFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_FileStorage_DeleteFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_FileStorage_DeleteFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_FileStorage_DeleteFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFile Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_DeleteFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_FileStorage_DeleteFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_FileStorage_DeleteFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_FileStorage_DeleteFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteFile Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_FileStorage_DeleteFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this DeleteFile Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_FileStorage_DeleteFile_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the Keys input for this DeleteFile Choreo.
     *
     * @param string $value (required, string) A comma-separated list of keys to delete.
     * @return CloudMine_FileStorage_DeleteFile_Inputs For method chaining.
     */
    public function setKeys($value)
    {
        return $this->set('Keys', $value);
    }

    /**
     * Set the value for the SessionToken input for this DeleteFile Choreo.
     *
     * @param string $value (conditional, string) The session token for an existing user (returned by the AccountLogin Choreo). This is only required if your app is performing this operation on behalf of another user.
     * @return CloudMine_FileStorage_DeleteFile_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }

}


/**
 * Execution object for the DeleteFile Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_DeleteFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteFile execution.
     * @param CloudMine_FileStorage_DeleteFile $choreo The choreography object for this execution.
     * @param CloudMine_FileStorage_DeleteFile_Inputs|array $inputs (optional) Inputs as CloudMine_FileStorage_DeleteFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_FileStorage_DeleteFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_FileStorage_DeleteFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFile execution.
     *
     * @return CloudMine_FileStorage_DeleteFile_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_FileStorage_DeleteFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_FileStorage_DeleteFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteFile Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_DeleteFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_FileStorage_DeleteFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteFile execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to query key/value pair objects.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectSearch extends Temboo_Choreography
{
    /**
     * Allows you to query key/value pair objects.
     *
     * @param Temboo_Session $session The session that owns this ObjectSearch Choreo.
     * @return CloudMine_ObjectStorage_ObjectSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/ObjectStorage/ObjectSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ObjectSearch Choreo.
     *
     * @param CloudMine_ObjectStorage_ObjectSearch_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_ObjectStorage_ObjectSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ObjectSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_ObjectStorage_ObjectSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ObjectSearch Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ObjectSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ObjectSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ObjectSearch Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this ObjectSearch Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the Count input for this ObjectSearch Choreo.
     *
     * @param bool $value (optional, boolean) Returns a count of the results in the response if set to true. Valid values are true and false.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Limit input for this ObjectSearch Choreo.
     *
     * @param int $value (optional, integer) Limits the number of results returned. Use -1 for no limit. Use 0 for no results, and with Count=true to just get the number of available results. This defaults to 50.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Query input for this ObjectSearch Choreo.
     *
     * @param string $value (required, string) The query for your search. See Choreo documentation for information on appropriate query syntax.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the SessionToken input for this ObjectSearch Choreo.
     *
     * @param string $value (conditional, string) The session token for an existing user (returned by the AccountLogin Choreo). This is only required if your app is performing this operation on behalf of another user.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }

    /**
     * Set the value for the Skip input for this ObjectSearch Choreo.
     *
     * @param int $value (optional, integer) Indicates to start results after skiping this number objects. Used to page through results.
     * @return CloudMine_ObjectStorage_ObjectSearch_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }
}


/**
 * Execution object for the ObjectSearch Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ObjectSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this ObjectSearch execution.
     * @param CloudMine_ObjectStorage_ObjectSearch $choreo The choreography object for this execution.
     * @param CloudMine_ObjectStorage_ObjectSearch_Inputs|array $inputs (optional) Inputs as CloudMine_ObjectStorage_ObjectSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_ObjectStorage_ObjectSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_ObjectStorage_ObjectSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ObjectSearch execution.
     *
     * @return CloudMine_ObjectStorage_ObjectSearch_Results New results object.
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
     * Wraps results in appropriate results class for this ObjectSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_ObjectStorage_ObjectSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ObjectSearch Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_ObjectStorage_ObjectSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ObjectSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_ObjectStorage_ObjectSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ObjectSearch execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to update or create a file on the CloudMine server.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_SetFile extends Temboo_Choreography
{
    /**
     * Allows you to update or create a file on the CloudMine server.
     *
     * @param Temboo_Session $session The session that owns this SetFile Choreo.
     * @return CloudMine_FileStorage_SetFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/FileStorage/SetFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SetFile Choreo.
     *
     * @param CloudMine_FileStorage_SetFile_Inputs|array $inputs (optional) Inputs as CloudMine_FileStorage_SetFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_FileStorage_SetFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_FileStorage_SetFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SetFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_FileStorage_SetFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_FileStorage_SetFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SetFile Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_SetFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SetFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_FileStorage_SetFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SetFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_FileStorage_SetFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_FileStorage_SetFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SetFile Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_FileStorage_SetFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this SetFile Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_FileStorage_SetFile_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the ContentType input for this SetFile Choreo.
     *
     * @param string $value (optional, string) The Content-Type of the file you are creating or updating. This defaults to application/octet-stream.
     * @return CloudMine_FileStorage_SetFile_Inputs For method chaining.
     */
    public function setContentType($value)
    {
        return $this->set('ContentType', $value);
    }

    /**
     * Set the value for the FileContents input for this SetFile Choreo.
     *
     * @param string $value (conditional, string) The Base64 encoded contents of the file.
     * @return CloudMine_FileStorage_SetFile_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the Key input for this SetFile Choreo.
     *
     * @param string $value (optional, string) A key for the file you are uploading. If provided, the file will be stored with this key; otherwise, a key will be generated and returned.
     * @return CloudMine_FileStorage_SetFile_Inputs For method chaining.
     */
    public function setKey($value)
    {
        return $this->set('Key', $value);
    }

    /**
     * Set the value for the SessionToken input for this SetFile Choreo.
     *
     * @param string $value (conditional, string) The session token for an existing user (returned by the AccountLogin Choreo). This is only required if your app is performing this operation on behalf of another user.
     * @return CloudMine_FileStorage_SetFile_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }

}


/**
 * Execution object for the SetFile Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_SetFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SetFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this SetFile execution.
     * @param CloudMine_FileStorage_SetFile $choreo The choreography object for this execution.
     * @param CloudMine_FileStorage_SetFile_Inputs|array $inputs (optional) Inputs as CloudMine_FileStorage_SetFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_FileStorage_SetFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_FileStorage_SetFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SetFile execution.
     *
     * @return CloudMine_FileStorage_SetFile_Results New results object.
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
     * Wraps results in appropriate results class for this SetFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_FileStorage_SetFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_FileStorage_SetFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SetFile Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_SetFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SetFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_FileStorage_SetFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SetFile execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a user account with a given username and password.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_CreateAccount extends Temboo_Choreography
{
    /**
     * Creates a user account with a given username and password.
     *
     * @param Temboo_Session $session The session that owns this CreateAccount Choreo.
     * @return CloudMine_UserAccountManagement_CreateAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/UserAccountManagement/CreateAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateAccount Choreo.
     *
     * @param CloudMine_UserAccountManagement_CreateAccount_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_CreateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_CreateAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_UserAccountManagement_CreateAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_UserAccountManagement_CreateAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateAccount Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_CreateAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the Latitude input for this CreateAccount Choreo.
     *
     * @param float $value (optional, decimal) The latitude coordinate of the user's location. If provide, Longitude is also required.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this CreateAccount Choreo.
     *
     * @param float $value (optional, decimal) The longitude coordinate of the user's location. If provide, Latitude is also required.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Name input for this CreateAccount Choreo.
     *
     * @param string $value (optional, string) A name to associated with the user profile information.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Password input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The password for the account that is being created.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The username for the account that is being created.
     * @return CloudMine_UserAccountManagement_CreateAccount_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateAccount Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_CreateAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateAccount execution.
     * @param CloudMine_UserAccountManagement_CreateAccount $choreo The choreography object for this execution.
     * @param CloudMine_UserAccountManagement_CreateAccount_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_CreateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_CreateAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_UserAccountManagement_CreateAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateAccount execution.
     *
     * @return CloudMine_UserAccountManagement_CreateAccount_Results New results object.
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
     * Wraps results in appropriate results class for this CreateAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_CreateAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_UserAccountManagement_CreateAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateAccount Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_CreateAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_CreateAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateAccount execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Authenticates a user and returns a session token in order to create and query against user-level objects.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_AccountLogin extends Temboo_Choreography
{
    /**
     * Authenticates a user and returns a session token in order to create and query against user-level objects.
     *
     * @param Temboo_Session $session The session that owns this AccountLogin Choreo.
     * @return CloudMine_UserAccountManagement_AccountLogin New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/UserAccountManagement/AccountLogin/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AccountLogin Choreo.
     *
     * @param CloudMine_UserAccountManagement_AccountLogin_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_AccountLogin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_AccountLogin_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_UserAccountManagement_AccountLogin_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AccountLogin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_AccountLogin_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_UserAccountManagement_AccountLogin_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AccountLogin Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_AccountLogin_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AccountLogin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_AccountLogin_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AccountLogin input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_UserAccountManagement_AccountLogin_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_UserAccountManagement_AccountLogin_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AccountLogin Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_AccountLogin_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this AccountLogin Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_AccountLogin_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the Password input for this AccountLogin Choreo.
     *
     * @param string $value (required, string) The password for the user that needs to authenticate.
     * @return CloudMine_UserAccountManagement_AccountLogin_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this AccountLogin Choreo.
     *
     * @param string $value (required, string) The username for the user that needs to authenticate.
     * @return CloudMine_UserAccountManagement_AccountLogin_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the AccountLogin Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_AccountLogin_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AccountLogin Choreo.
     *
     * @param Temboo_Session $session The session that owns this AccountLogin execution.
     * @param CloudMine_UserAccountManagement_AccountLogin $choreo The choreography object for this execution.
     * @param CloudMine_UserAccountManagement_AccountLogin_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_AccountLogin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_AccountLogin_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_UserAccountManagement_AccountLogin $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AccountLogin execution.
     *
     * @return CloudMine_UserAccountManagement_AccountLogin_Results New results object.
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
     * Wraps results in appropriate results class for this AccountLogin execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_AccountLogin_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_UserAccountManagement_AccountLogin_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AccountLogin Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_AccountLogin_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AccountLogin Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_AccountLogin_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AccountLogin execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to search for users using CloudMine's search query language syntax.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_SearchUsers extends Temboo_Choreography
{
    /**
     * Allows you to search for users using CloudMine's search query language syntax.
     *
     * @param Temboo_Session $session The session that owns this SearchUsers Choreo.
     * @return CloudMine_UserAccountManagement_SearchUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/UserAccountManagement/SearchUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchUsers Choreo.
     *
     * @param CloudMine_UserAccountManagement_SearchUsers_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_SearchUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_SearchUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_UserAccountManagement_SearchUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_SearchUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_UserAccountManagement_SearchUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchUsers Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_SearchUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_SearchUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_UserAccountManagement_SearchUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_UserAccountManagement_SearchUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchUsers Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_SearchUsers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this SearchUsers Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_SearchUsers_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the Query input for this SearchUsers Choreo.
     *
     * @param string $value (required, string) Search query for which users to retrieve.
     * @return CloudMine_UserAccountManagement_SearchUsers_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the SessionToken input for this SearchUsers Choreo.
     *
     * @param string $value (required, string) The session token for an existing user (returned by the AccountLogin Choreo).
     * @return CloudMine_UserAccountManagement_SearchUsers_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }
}


/**
 * Execution object for the SearchUsers Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_SearchUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchUsers execution.
     * @param CloudMine_UserAccountManagement_SearchUsers $choreo The choreography object for this execution.
     * @param CloudMine_UserAccountManagement_SearchUsers_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_SearchUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_SearchUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_UserAccountManagement_SearchUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchUsers execution.
     *
     * @return CloudMine_UserAccountManagement_SearchUsers_Results New results object.
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
     * Wraps results in appropriate results class for this SearchUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_SearchUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_UserAccountManagement_SearchUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchUsers Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_SearchUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_SearchUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchUsers execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows a user who has forgotten their password to trigger a password reset email.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_PasswordReset extends Temboo_Choreography
{
    /**
     * Allows a user who has forgotten their password to trigger a password reset email.
     *
     * @param Temboo_Session $session The session that owns this PasswordReset Choreo.
     * @return CloudMine_UserAccountManagement_PasswordReset New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/UserAccountManagement/PasswordReset/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PasswordReset Choreo.
     *
     * @param CloudMine_UserAccountManagement_PasswordReset_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_PasswordReset_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_PasswordReset_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_UserAccountManagement_PasswordReset_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PasswordReset Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_PasswordReset_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_UserAccountManagement_PasswordReset_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PasswordReset Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_PasswordReset_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PasswordReset Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_PasswordReset_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PasswordReset input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_UserAccountManagement_PasswordReset_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_UserAccountManagement_PasswordReset_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PasswordReset Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_PasswordReset_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this PasswordReset Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_PasswordReset_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the Username input for this PasswordReset Choreo.
     *
     * @param string $value (required, string) The username/email for the user that needs to reset their password.
     * @return CloudMine_UserAccountManagement_PasswordReset_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the PasswordReset Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_PasswordReset_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PasswordReset Choreo.
     *
     * @param Temboo_Session $session The session that owns this PasswordReset execution.
     * @param CloudMine_UserAccountManagement_PasswordReset $choreo The choreography object for this execution.
     * @param CloudMine_UserAccountManagement_PasswordReset_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_PasswordReset_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_PasswordReset_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_UserAccountManagement_PasswordReset $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PasswordReset execution.
     *
     * @return CloudMine_UserAccountManagement_PasswordReset_Results New results object.
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
     * Wraps results in appropriate results class for this PasswordReset execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_PasswordReset_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_UserAccountManagement_PasswordReset_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PasswordReset Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_PasswordReset_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PasswordReset Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_PasswordReset_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PasswordReset execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to invalidate a user's session token.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_AccountLogout extends Temboo_Choreography
{
    /**
     * Allows you to invalidate a user's session token.
     *
     * @param Temboo_Session $session The session that owns this AccountLogout Choreo.
     * @return CloudMine_UserAccountManagement_AccountLogout New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/UserAccountManagement/AccountLogout/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AccountLogout Choreo.
     *
     * @param CloudMine_UserAccountManagement_AccountLogout_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_AccountLogout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_AccountLogout_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_UserAccountManagement_AccountLogout_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AccountLogout Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_AccountLogout_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_UserAccountManagement_AccountLogout_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AccountLogout Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_AccountLogout_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AccountLogout Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_AccountLogout_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AccountLogout input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_UserAccountManagement_AccountLogout_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_UserAccountManagement_AccountLogout_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AccountLogout Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_AccountLogout_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this AccountLogout Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_AccountLogout_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the SessionToken input for this AccountLogout Choreo.
     *
     * @param string $value (required, string) The session token obtained from the AccountLogin Choreo.
     * @return CloudMine_UserAccountManagement_AccountLogout_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }
}


/**
 * Execution object for the AccountLogout Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_AccountLogout_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AccountLogout Choreo.
     *
     * @param Temboo_Session $session The session that owns this AccountLogout execution.
     * @param CloudMine_UserAccountManagement_AccountLogout $choreo The choreography object for this execution.
     * @param CloudMine_UserAccountManagement_AccountLogout_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_AccountLogout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_AccountLogout_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_UserAccountManagement_AccountLogout $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AccountLogout execution.
     *
     * @return CloudMine_UserAccountManagement_AccountLogout_Results New results object.
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
     * Wraps results in appropriate results class for this AccountLogout execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_AccountLogout_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_UserAccountManagement_AccountLogout_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AccountLogout Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_AccountLogout_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AccountLogout Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_AccountLogout_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AccountLogout execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a user's password.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_PasswordChange extends Temboo_Choreography
{
    /**
     * Updates a user's password.
     *
     * @param Temboo_Session $session The session that owns this PasswordChange Choreo.
     * @return CloudMine_UserAccountManagement_PasswordChange New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/UserAccountManagement/PasswordChange/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PasswordChange Choreo.
     *
     * @param CloudMine_UserAccountManagement_PasswordChange_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_PasswordChange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_PasswordChange_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_UserAccountManagement_PasswordChange_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PasswordChange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_PasswordChange_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_UserAccountManagement_PasswordChange_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PasswordChange Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_PasswordChange_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PasswordChange Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_UserAccountManagement_PasswordChange_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PasswordChange input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_UserAccountManagement_PasswordChange_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_UserAccountManagement_PasswordChange_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PasswordChange Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_PasswordChange_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this PasswordChange Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_UserAccountManagement_PasswordChange_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the NewPassword input for this PasswordChange Choreo.
     *
     * @param string $value (required, string) The user's new password.
     * @return CloudMine_UserAccountManagement_PasswordChange_Inputs For method chaining.
     */
    public function setNewPassword($value)
    {
        return $this->set('NewPassword', $value);
    }

    /**
     * Set the value for the Password input for this PasswordChange Choreo.
     *
     * @param string $value (required, string) The password for the user that needs to authenticate.
     * @return CloudMine_UserAccountManagement_PasswordChange_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this PasswordChange Choreo.
     *
     * @param string $value (required, string) The username for the user that needs to authenticate.
     * @return CloudMine_UserAccountManagement_PasswordChange_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the PasswordChange Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_PasswordChange_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PasswordChange Choreo.
     *
     * @param Temboo_Session $session The session that owns this PasswordChange execution.
     * @param CloudMine_UserAccountManagement_PasswordChange $choreo The choreography object for this execution.
     * @param CloudMine_UserAccountManagement_PasswordChange_Inputs|array $inputs (optional) Inputs as CloudMine_UserAccountManagement_PasswordChange_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_UserAccountManagement_PasswordChange_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_UserAccountManagement_PasswordChange $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PasswordChange execution.
     *
     * @return CloudMine_UserAccountManagement_PasswordChange_Results New results object.
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
     * Wraps results in appropriate results class for this PasswordChange execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_PasswordChange_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_UserAccountManagement_PasswordChange_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PasswordChange Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_UserAccountManagement_PasswordChange_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PasswordChange Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_UserAccountManagement_PasswordChange_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PasswordChange execution.
     *
     * @return string (json) The response from CloudMine.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a file from the CloudMine server with a given key.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_GetFile extends Temboo_Choreography
{
    /**
     * Retrieves a file from the CloudMine server with a given key.
     *
     * @param Temboo_Session $session The session that owns this GetFile Choreo.
     * @return CloudMine_FileStorage_GetFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/CloudMine/FileStorage/GetFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFile Choreo.
     *
     * @param CloudMine_FileStorage_GetFile_Inputs|array $inputs (optional) Inputs as CloudMine_FileStorage_GetFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_FileStorage_GetFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new CloudMine_FileStorage_GetFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_FileStorage_GetFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new CloudMine_FileStorage_GetFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFile Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_GetFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return CloudMine_FileStorage_GetFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return CloudMine_FileStorage_GetFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return CloudMine_FileStorage_GetFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetFile Choreo.
     *
     * @param string $value (required, string) The API Key provided by CloudMine after registering your app.
     * @return CloudMine_FileStorage_GetFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ApplicationIdentifier input for this GetFile Choreo.
     *
     * @param string $value (required, string) The application identifier provided by CloudMine after registering your app.
     * @return CloudMine_FileStorage_GetFile_Inputs For method chaining.
     */
    public function setApplicationIdentifier($value)
    {
        return $this->set('ApplicationIdentifier', $value);
    }

    /**
     * Set the value for the Key input for this GetFile Choreo.
     *
     * @param string $value (required, string) The key whose value you want.
     * @return CloudMine_FileStorage_GetFile_Inputs For method chaining.
     */
    public function setKey($value)
    {
        return $this->set('Key', $value);
    }

    /**
     * Set the value for the SessionToken input for this GetFile Choreo.
     *
     * @param string $value (conditional, string) The session token for an existing user (returned by the AccountLogin Choreo). This is only required if your app is performing this operation on behalf of another user.
     * @return CloudMine_FileStorage_GetFile_Inputs For method chaining.
     */
    public function setSessionToken($value)
    {
        return $this->set('SessionToken', $value);
    }

}


/**
 * Execution object for the GetFile Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_GetFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFile execution.
     * @param CloudMine_FileStorage_GetFile $choreo The choreography object for this execution.
     * @param CloudMine_FileStorage_GetFile_Inputs|array $inputs (optional) Inputs as CloudMine_FileStorage_GetFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return CloudMine_FileStorage_GetFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, CloudMine_FileStorage_GetFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFile execution.
     *
     * @return CloudMine_FileStorage_GetFile_Results New results object.
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
     * Wraps results in appropriate results class for this GetFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return CloudMine_FileStorage_GetFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new CloudMine_FileStorage_GetFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFile Choreo.
 *
 * @package Temboo
 * @subpackage CloudMine
 */
class CloudMine_FileStorage_GetFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return CloudMine_FileStorage_GetFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFile execution.
     *
     * @return string (json) The response from CloudMine.
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
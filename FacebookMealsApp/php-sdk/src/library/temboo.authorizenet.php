<?php

/**
 * Temboo PHP SDK AuthorizeNet classes
 *
 * Execute Choreographies from the Temboo AuthorizeNet bundle.
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
 * @subpackage AuthorizeNet
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Returns data about a settled batch including: Batch ID, Settlement Time, and Settlement State, and Batch Statistics by payment type.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList extends Temboo_Choreography
{
    /**
     * Returns data about a settled batch including: Batch ID, Settlement Time, and Settlement State, and Batch Statistics by payment type.
     *
     * @param Temboo_Session $session The session that owns this GetSettledBatchList Choreo.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetSettledBatchList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSettledBatchList Choreo.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSettledBatchList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSettledBatchList Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSettledBatchList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSettledBatchList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetSettledBatchList Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetSettledBatchList Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the FirstSettlementDate input for this GetSettledBatchList Choreo.
     *
     * @param string $value (required, date) Can be an epoch timestamp in milliseconds or formatted like 2010-12-01T00:00:00Z.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setFirstSettlementDate($value)
    {
        return $this->set('FirstSettlementDate', $value);
    }

    /**
     * Set the value for the IncludeStatistics input for this GetSettledBatchList Choreo.
     *
     * @param bool $value (optional, boolean) When 1 is specified, batch statistics by payment type are returned. Defaults to 1.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setIncludeStatistics($value)
    {
        return $this->set('IncludeStatistics', $value);
    }

    /**
     * Set the value for the LastSettlementDate input for this GetSettledBatchList Choreo.
     *
     * @param string $value (required, date) Can be an epoch timestamp in milliseconds or formatted like 2010-12-01T00:00:00Z.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setLastSettlementDate($value)
    {
        return $this->set('LastSettlementDate', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetSettledBatchList Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetSettledBatchList Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSettledBatchList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSettledBatchList execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList $choreo The choreography object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSettledBatchList execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results New results object.
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
     * Wraps results in appropriate results class for this GetSettledBatchList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSettledBatchList Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSettledBatchList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetSettledBatchList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSettledBatchList execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an existing customer profile by id with relevant payment profiles and shipping addresses.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfile extends Temboo_Choreography
{
    /**
     * Retrieves an existing customer profile by id with relevant payment profiles and shipping addresses.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerProfile Choreo.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/CustomerInformationManager/GetCustomerProfile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCustomerProfile Choreo.
     *
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCustomerProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCustomerProfile Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCustomerProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCustomerProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetCustomerProfile Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the CustomerProfileId input for this GetCustomerProfile Choreo.
     *
     * @param int $value (required, integer) The id of the customer who's profile you want to return.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setCustomerProfileId($value)
    {
        return $this->set('CustomerProfileId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetCustomerProfile Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetCustomerProfile Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetCustomerProfile Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCustomerProfile Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerProfile execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfile $choreo The choreography object for this execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_CustomerInformationManager_GetCustomerProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCustomerProfile execution.
     *
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results New results object.
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
     * Wraps results in appropriate results class for this GetCustomerProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCustomerProfile Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCustomerProfile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCustomerProfile execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves all existing customer profile IDs.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds extends Temboo_Choreography
{
    /**
     * Retrieves all existing customer profile IDs.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerProfileIds Choreo.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/CustomerInformationManager/GetCustomerProfileIds/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCustomerProfileIds Choreo.
     *
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCustomerProfileIds Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCustomerProfileIds Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCustomerProfileIds Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCustomerProfileIds input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetCustomerProfileIds Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetCustomerProfileIds Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetCustomerProfileIds Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetCustomerProfileIds Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCustomerProfileIds Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerProfileIds execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds $choreo The choreography object for this execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCustomerProfileIds execution.
     *
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results New results object.
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
     * Wraps results in appropriate results class for this GetCustomerProfileIds execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCustomerProfileIds Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCustomerProfileIds Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerProfileIds_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCustomerProfileIds execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns transaction details for a specified transaction ID.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails extends Temboo_Choreography
{
    /**
     * Returns transaction details for a specified transaction ID.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionDetails Choreo.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetTransactionDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTransactionDetails Choreo.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTransactionDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTransactionDetails Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTransactionDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTransactionDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetTransactionDetails Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetTransactionDetails Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionId input for this GetTransactionDetails Choreo.
     *
     * @param int $value (required, integer) The id of the transaction that you want to retrieve information for.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setTransactionId($value)
    {
        return $this->set('TransactionId', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetTransactionDetails Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetTransactionDetails Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTransactionDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionDetails execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails $choreo The choreography object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTransactionDetails execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results New results object.
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
     * Wraps results in appropriate results class for this GetTransactionDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTransactionDetails Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTransactionDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTransactionDetails execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns batch statistics by payment type for a specified batch ID.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics extends Temboo_Choreography
{
    /**
     * Returns batch statistics by payment type for a specified batch ID.
     *
     * @param Temboo_Session $session The session that owns this GetBatchStatistics Choreo.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetBatchStatistics/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBatchStatistics Choreo.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBatchStatistics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBatchStatistics Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBatchStatistics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBatchStatistics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetBatchStatistics Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the BatchId input for this GetBatchStatistics Choreo.
     *
     * @param int $value (required, integer) The id of the batch that you want to retrieve a list of transactions for.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setBatchId($value)
    {
        return $this->set('BatchId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetBatchStatistics Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetBatchStatistics Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetBatchStatistics Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBatchStatistics Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBatchStatistics execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics $choreo The choreography object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBatchStatistics execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results New results object.
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
     * Wraps results in appropriate results class for this GetBatchStatistics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBatchStatistics Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBatchStatistics Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetBatchStatistics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBatchStatistics execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Cancels an existing subscription.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CancelSubscription extends Temboo_Choreography
{
    /**
     * Cancels an existing subscription.
     *
     * @param Temboo_Session $session The session that owns this CancelSubscription Choreo.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/AutomatedRecurringBilling/CancelSubscription/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CancelSubscription Choreo.
     *
     * @param AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CancelSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CancelSubscription Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CancelSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CancelSubscription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this CancelSubscription Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this CancelSubscription Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the RefId input for this CancelSubscription Choreo.
     *
     * @param string $value (optional, string) The merchant assigned reference id for the subscription.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setRefId($value)
    {
        return $this->set('RefId', $value);
    }

    /**
     * Set the value for the SubscriptionId input for this CancelSubscription Choreo.
     *
     * @param int $value (required, integer) The id of the subscription that you want to cancel.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setSubscriptionId($value)
    {
        return $this->set('SubscriptionId', $value);
    }

    /**
     * Set the value for the TransactionKey input for this CancelSubscription Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the CancelSubscription Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CancelSubscription Choreo.
     *
     * @param Temboo_Session $session The session that owns this CancelSubscription execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_CancelSubscription $choreo The choreography object for this execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_AutomatedRecurringBilling_CancelSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CancelSubscription execution.
     *
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results New results object.
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
     * Wraps results in appropriate results class for this CancelSubscription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CancelSubscription Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CancelSubscription Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_CancelSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CancelSubscription execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of transactions and their details for a specified batch ID.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionList extends Temboo_Choreography
{
    /**
     * Returns a list of transactions and their details for a specified batch ID.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionList Choreo.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetTransactionList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTransactionList Choreo.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTransactionList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTransactionList Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTransactionList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTransactionList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetTransactionList Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the BatchId input for this GetTransactionList Choreo.
     *
     * @param int $value (required, integer) The id of the batch that you want to retrieve a list of transactions for.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setBatchId($value)
    {
        return $this->set('BatchId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetTransactionList Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetTransactionList Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetTransactionList Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTransactionList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionList execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionList $choreo The choreography object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetTransactionList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTransactionList execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results New results object.
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
     * Wraps results in appropriate results class for this GetTransactionList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTransactionList Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTransactionList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetTransactionList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTransactionList execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns status information for a specified subscription.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus extends Temboo_Choreography
{
    /**
     * Returns status information for a specified subscription.
     *
     * @param Temboo_Session $session The session that owns this GetSubscriptionStatus Choreo.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/AutomatedRecurringBilling/GetSubscriptionStatus/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetSubscriptionStatus Choreo.
     *
     * @param AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSubscriptionStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSubscriptionStatus Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetSubscriptionStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSubscriptionStatus input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetSubscriptionStatus Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetSubscriptionStatus Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the RefId input for this GetSubscriptionStatus Choreo.
     *
     * @param string $value (optional, string) The merchant assigned reference id for the subscription.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setRefId($value)
    {
        return $this->set('RefId', $value);
    }

    /**
     * Set the value for the SubscriptionId input for this GetSubscriptionStatus Choreo.
     *
     * @param int $value (required, integer) The id of the subscription that you want to retrieve the status for.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setSubscriptionId($value)
    {
        return $this->set('SubscriptionId', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetSubscriptionStatus Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetSubscriptionStatus Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSubscriptionStatus Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetSubscriptionStatus execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus $choreo The choreography object for this execution.
     * @param AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs|array $inputs (optional) Inputs as AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSubscriptionStatus execution.
     *
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results New results object.
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
     * Wraps results in appropriate results class for this GetSubscriptionStatus execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetSubscriptionStatus Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetSubscriptionStatus Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_AutomatedRecurringBilling_GetSubscriptionStatus_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetSubscriptionStatus execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a payment profile associated with an existing customer profile.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile extends Temboo_Choreography
{
    /**
     * Retrieves a payment profile associated with an existing customer profile.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerPaymentProfile Choreo.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/CustomerInformationManager/GetCustomerPaymentProfile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCustomerPaymentProfile Choreo.
     *
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCustomerPaymentProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCustomerPaymentProfile Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCustomerPaymentProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCustomerPaymentProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetCustomerPaymentProfile Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the CustomerPaymentProfileId input for this GetCustomerPaymentProfile Choreo.
     *
     * @param int $value (required, integer) The id for the payment profile you want to retrieve.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setCustomerPaymentProfileId($value)
    {
        return $this->set('CustomerPaymentProfileId', $value);
    }

    /**
     * Set the value for the CustomerProfileId input for this GetCustomerPaymentProfile Choreo.
     *
     * @param int $value (required, integer) The id of the customer who's payment profile you want to return.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setCustomerProfileId($value)
    {
        return $this->set('CustomerProfileId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetCustomerPaymentProfile Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetCustomerPaymentProfile Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetCustomerPaymentProfile Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCustomerPaymentProfile Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerPaymentProfile execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile $choreo The choreography object for this execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCustomerPaymentProfile execution.
     *
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results New results object.
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
     * Wraps results in appropriate results class for this GetCustomerPaymentProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCustomerPaymentProfile Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCustomerPaymentProfile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerPaymentProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCustomerPaymentProfile execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns limited details for unsettled transactions.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList extends Temboo_Choreography
{
    /**
     * Returns limited details for unsettled transactions.
     *
     * @param Temboo_Session $session The session that owns this GetUnsettledTransactionList Choreo.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/TransactionDetailsAPI/GetUnsettledTransactionList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUnsettledTransactionList Choreo.
     *
     * @param AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUnsettledTransactionList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUnsettledTransactionList Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUnsettledTransactionList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUnsettledTransactionList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetUnsettledTransactionList Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetUnsettledTransactionList Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetUnsettledTransactionList Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetUnsettledTransactionList Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUnsettledTransactionList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUnsettledTransactionList execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList $choreo The choreography object for this execution.
     * @param AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs|array $inputs (optional) Inputs as AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUnsettledTransactionList execution.
     *
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results New results object.
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
     * Wraps results in appropriate results class for this GetUnsettledTransactionList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUnsettledTransactionList Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUnsettledTransactionList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_TransactionDetailsAPI_GetUnsettledTransactionList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUnsettledTransactionList execution.
     *
     * @return string (xml) The response from Authorize.net.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a customer shipping address for an existing customer profile.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress extends Temboo_Choreography
{
    /**
     * Retrieves a customer shipping address for an existing customer profile.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerShippingAddress Choreo.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AuthorizeNet/CustomerInformationManager/GetCustomerShippingAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCustomerShippingAddress Choreo.
     *
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCustomerShippingAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCustomerShippingAddress Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCustomerShippingAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCustomerShippingAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APILoginId input for this GetCustomerShippingAddress Choreo.
     *
     * @param string $value (required, string) The API Login Id provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setAPILoginId($value)
    {
        return $this->set('APILoginId', $value);
    }

    /**
     * Set the value for the CustomerAddressId input for this GetCustomerShippingAddress Choreo.
     *
     * @param int $value (required, integer) The id for the shipping profile you want to retrieve.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setCustomerAddressId($value)
    {
        return $this->set('CustomerAddressId', $value);
    }

    /**
     * Set the value for the CustomerProfileId input for this GetCustomerShippingAddress Choreo.
     *
     * @param int $value (required, integer) The id of the customer who's shipping address you want to return.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setCustomerProfileId($value)
    {
        return $this->set('CustomerProfileId', $value);
    }

    /**
     * Set the value for the Endpoint input for this GetCustomerShippingAddress Choreo.
     *
     * @param string $value (optional, string) Set to api.authorize.net when running in production. Defaults to apitest.authorize.net for sandbox testing.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the TransactionKey input for this GetCustomerShippingAddress Choreo.
     *
     * @param string $value (required, string) The TransactionKey provided by Authorize.net when signing up for a developer account.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs For method chaining.
     */
    public function setTransactionKey($value)
    {
        return $this->set('TransactionKey', $value);
    }
}


/**
 * Execution object for the GetCustomerShippingAddress Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCustomerShippingAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCustomerShippingAddress execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress $choreo The choreography object for this execution.
     * @param AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs|array $inputs (optional) Inputs as AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCustomerShippingAddress execution.
     *
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results New results object.
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
     * Wraps results in appropriate results class for this GetCustomerShippingAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCustomerShippingAddress Choreo.
 *
 * @package Temboo
 * @subpackage AuthorizeNet
 */
class AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCustomerShippingAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AuthorizeNet_CustomerInformationManager_GetCustomerShippingAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCustomerShippingAddress execution.
     *
     * @return string (xml) The response from Authorize.net.
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
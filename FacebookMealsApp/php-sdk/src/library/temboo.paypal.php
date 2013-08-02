<?php

/**
 * Temboo PHP SDK PayPal classes
 *
 * Execute Choreographies from the Temboo PayPal bundle.
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
 * @subpackage PayPal
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves the available balance for a PayPal account.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_GetBalance extends Temboo_Choreography
{
    /**
     * Retrieves the available balance for a PayPal account.
     *
     * @param Temboo_Session $session The session that owns this GetBalance Choreo.
     * @return PayPal_Merchant_GetBalance New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Merchant/GetBalance/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBalance Choreo.
     *
     * @param PayPal_Merchant_GetBalance_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_GetBalance_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Merchant_GetBalance_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBalance Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_GetBalance_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Merchant_GetBalance_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBalance Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_GetBalance_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBalance Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_GetBalance_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBalance input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Merchant_GetBalance_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Merchant_GetBalance_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this GetBalance Choreo.
     *
     * @param string $value (required, password) The API Password provided by PayPal.
     * @return PayPal_Merchant_GetBalance_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Signature input for this GetBalance Choreo.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_Merchant_GetBalance_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the UseSandbox input for this GetBalance Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Merchant_GetBalance_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this GetBalance Choreo.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_Merchant_GetBalance_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetBalance Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_GetBalance_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBalance Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBalance execution.
     * @param PayPal_Merchant_GetBalance $choreo The choreography object for this execution.
     * @param PayPal_Merchant_GetBalance_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_GetBalance_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Merchant_GetBalance $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBalance execution.
     *
     * @return PayPal_Merchant_GetBalance_Results New results object.
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
     * Wraps results in appropriate results class for this GetBalance execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Merchant_GetBalance_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Merchant_GetBalance_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBalance Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_GetBalance_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBalance Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Merchant_GetBalance_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBalance execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows your application to refund a completed payment.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_SaleTransactions_RefundSale extends Temboo_Choreography
{
    /**
     * Allows your application to refund a completed payment.
     *
     * @param Temboo_Session $session The session that owns this RefundSale Choreo.
     * @return PayPal_SaleTransactions_RefundSale New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/SaleTransactions/RefundSale/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RefundSale Choreo.
     *
     * @param PayPal_SaleTransactions_RefundSale_Inputs|array $inputs (optional) Inputs as PayPal_SaleTransactions_RefundSale_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_SaleTransactions_RefundSale_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_SaleTransactions_RefundSale_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefundSale Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_SaleTransactions_RefundSale_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_SaleTransactions_RefundSale_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefundSale Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_SaleTransactions_RefundSale_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RefundSale Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_SaleTransactions_RefundSale_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RefundSale input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RefundSale Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this RefundSale Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this RefundSale Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Currency input for this RefundSale Choreo.
     *
     * @param string $value (required, string) The currency associated with the sale (i.e. USD).
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the SaleID input for this RefundSale Choreo.
     *
     * @param string $value (required, string) The id of the sale to retrieve.
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function setSaleID($value)
    {
        return $this->set('SaleID', $value);
    }

    /**
     * Set the value for the Scope input for this RefundSale Choreo.
     *
     * @param string $value (optional, string) A space delimited list of resource URL endpoints that the token should have access for. This is only used when providing the ClientID and Client Secret in order to generate a new access token.
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the Total input for this RefundSale Choreo.
     *
     * @param float $value (required, decimal) The total amount to refund.
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function setTotal($value)
    {
        return $this->set('Total', $value);
    }

    /**
     * Set the value for the UseSandbox input for this RefundSale Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_SaleTransactions_RefundSale_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the RefundSale Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_SaleTransactions_RefundSale_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefundSale Choreo.
     *
     * @param Temboo_Session $session The session that owns this RefundSale execution.
     * @param PayPal_SaleTransactions_RefundSale $choreo The choreography object for this execution.
     * @param PayPal_SaleTransactions_RefundSale_Inputs|array $inputs (optional) Inputs as PayPal_SaleTransactions_RefundSale_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_SaleTransactions_RefundSale_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_SaleTransactions_RefundSale $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefundSale execution.
     *
     * @return PayPal_SaleTransactions_RefundSale_Results New results object.
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
     * Wraps results in appropriate results class for this RefundSale execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_SaleTransactions_RefundSale_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_SaleTransactions_RefundSale_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RefundSale Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_SaleTransactions_RefundSale_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RefundSale Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_SaleTransactions_RefundSale_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this RefundSale execution.
     *
     * @return string (string) The new access token retrieved from PayPal when providing the Client ID and Client Secret.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "RefundID" output from this RefundSale execution.
     *
     * @return string (string) The id of the refund. This can be used to lookup the refund later if needed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRefundID()
    {
        return $this->get('RefundID');
    }
    /**
     * Retrieve the value for the "Response" output from this RefundSale execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Verifies that a PayPal payment from the Adaptive Payments API has been successfully completed.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyPayPalPayment extends Temboo_Choreography
{
    /**
     * Verifies that a PayPal payment from the Adaptive Payments API has been successfully completed.
     *
     * @param Temboo_Session $session The session that owns this VerifyPayPalPayment Choreo.
     * @return PayPal_Payments_VerifyPayPalPayment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Payments/VerifyPayPalPayment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VerifyPayPalPayment Choreo.
     *
     * @param PayPal_Payments_VerifyPayPalPayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_VerifyPayPalPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_VerifyPayPalPayment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Payments_VerifyPayPalPayment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VerifyPayPalPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Payments_VerifyPayPalPayment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VerifyPayPalPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyPayPalPayment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VerifyPayPalPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VerifyPayPalPayment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this VerifyPayPalPayment Choreo.
     *
     * @param string $value (conditional, string) Your PayPal AppID (or the default AppID for the PayPal sandbox: APP-80W284485P519543T). This is used to authenticate PayPal's Adaptive Payments API.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Password input for this VerifyPayPalPayment Choreo.
     *
     * @param string $value (conditional, string) The API Password provided by PayPal. This is used to authenticate PayPal's Adaptive Payments API.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProofOfPayment input for this VerifyPayPalPayment Choreo.
     *
     * @param string $value (required, json) The proof of payment received from the client SDK. This can be a proof of payment received from the Adaptive Payment API or the REST API.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs For method chaining.
     */
    public function setProofOfPayment($value)
    {
        return $this->set('ProofOfPayment', $value);
    }

    /**
     * Set the value for the Signature input for this VerifyPayPalPayment Choreo.
     *
     * @param string $value (conditional, string) The API Signature provided by PayPal. This is used to authenticate PayPal's Adaptive Payments API.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the UseSandbox input for this VerifyPayPalPayment Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this VerifyPayPalPayment Choreo.
     *
     * @param string $value (conditional, string) The API Username provided by PayPal. This is used to authenticate PayPal's Adaptive Payments API.
     * @return PayPal_Payments_VerifyPayPalPayment_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the VerifyPayPalPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyPayPalPayment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VerifyPayPalPayment Choreo.
     *
     * @param Temboo_Session $session The session that owns this VerifyPayPalPayment execution.
     * @param PayPal_Payments_VerifyPayPalPayment $choreo The choreography object for this execution.
     * @param PayPal_Payments_VerifyPayPalPayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_VerifyPayPalPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_VerifyPayPalPayment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Payments_VerifyPayPalPayment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VerifyPayPalPayment execution.
     *
     * @return PayPal_Payments_VerifyPayPalPayment_Results New results object.
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
     * Wraps results in appropriate results class for this VerifyPayPalPayment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Payments_VerifyPayPalPayment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Payments_VerifyPayPalPayment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VerifyPayPalPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyPayPalPayment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VerifyPayPalPayment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Payments_VerifyPayPalPayment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "FailureDescription" output from this VerifyPayPalPayment execution.
     *
     * @return string (json) When the payment details indicate that the payment status is not complete, this will contain a JSON dictionary of payment status descriptions.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getFailureDescription()
    {
        return $this->get('FailureDescription');
    }
    /**
     * Retrieve the value for the "Response" output from this VerifyPayPalPayment execution.
     *
     * @return string (json) The response from PayPal. This includes the full response from retrieving payment details from the AdaptivePayments API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "VerificationStatus" output from this VerifyPayPalPayment execution.
     *
     * @return string (string) The status of the payment verification. This will set to either "verified" or "unverified" depending on the status of the payment details.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getVerificationStatus()
    {
        return $this->get('VerificationStatus');
    }
}

/**
 * Retrieves an Access Token from PayPal.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_OAuth_GetAccessToken extends Temboo_Choreography
{
    /**
     * Retrieves an Access Token from PayPal.
     *
     * @param Temboo_Session $session The session that owns this GetAccessToken Choreo.
     * @return PayPal_OAuth_GetAccessToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/OAuth/GetAccessToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAccessToken Choreo.
     *
     * @param PayPal_OAuth_GetAccessToken_Inputs|array $inputs (optional) Inputs as PayPal_OAuth_GetAccessToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_OAuth_GetAccessToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_OAuth_GetAccessToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAccessToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_OAuth_GetAccessToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_OAuth_GetAccessToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAccessToken Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_OAuth_GetAccessToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAccessToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_OAuth_GetAccessToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAccessToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_OAuth_GetAccessToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_OAuth_GetAccessToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this GetAccessToken Choreo.
     *
     * @param string $value (required, string) The Client ID provided by PayPal.
     * @return PayPal_OAuth_GetAccessToken_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetAccessToken Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by PayPal.
     * @return PayPal_OAuth_GetAccessToken_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Scope input for this GetAccessToken Choreo.
     *
     * @param string $value (optional, string) A space delimited list of resource URL endpoints that the token should have access for (i.e. https://api.paypal.com/v1/payments/.*).
     * @return PayPal_OAuth_GetAccessToken_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the UseSandbox input for this GetAccessToken Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Defaults to 0.
     * @return PayPal_OAuth_GetAccessToken_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the GetAccessToken Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_OAuth_GetAccessToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAccessToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAccessToken execution.
     * @param PayPal_OAuth_GetAccessToken $choreo The choreography object for this execution.
     * @param PayPal_OAuth_GetAccessToken_Inputs|array $inputs (optional) Inputs as PayPal_OAuth_GetAccessToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_OAuth_GetAccessToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_OAuth_GetAccessToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAccessToken execution.
     *
     * @return PayPal_OAuth_GetAccessToken_Results New results object.
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
     * Wraps results in appropriate results class for this GetAccessToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_OAuth_GetAccessToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_OAuth_GetAccessToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAccessToken Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_OAuth_GetAccessToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAccessToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_OAuth_GetAccessToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this GetAccessToken execution.
     *
     * @return string (string) The access token retrieved from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "Expires" output from this GetAccessToken execution.
     *
     * @return int (integer) The expiration time of the access token retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getExpires()
    {
        return $this->get('Expires');
    }
    /**
     * Retrieve the value for the "Response" output from this GetAccessToken execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates multiple payments from your PayPal Premier account or Business account to existing PayPal account holders.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_MassPayments extends Temboo_Choreography
{
    /**
     * Generates multiple payments from your PayPal Premier account or Business account to existing PayPal account holders.
     *
     * @param Temboo_Session $session The session that owns this MassPayments Choreo.
     * @return PayPal_Merchant_MassPayments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Merchant/MassPayments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MassPayments Choreo.
     *
     * @param PayPal_Merchant_MassPayments_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_MassPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_MassPayments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Merchant_MassPayments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MassPayments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_MassPayments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Merchant_MassPayments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MassPayments Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_MassPayments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MassPayments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_MassPayments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MassPayments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Merchant_MassPayments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Merchant_MassPayments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the InputFile input for this MassPayments Choreo.
     *
     * @param mixed $value (required, any) An input file containing the payments to process. This data can either be in CSV or XML format. The format should be indicated using the InputFormat input. See Choreo documentation for schema details.
     * @return PayPal_Merchant_MassPayments_Inputs For method chaining.
     */
    public function setInputFile($value)
    {
        return $this->set('InputFile', $value);
    }

    /**
     * Set the value for the EmailSubject input for this MassPayments Choreo.
     *
     * @param string $value (optional, string) The subject line of the email that PayPal sends when the transaction is completed. This is the same for all recipients. Character length and limitations: 255 single-byte alphanumeric characters.
     * @return PayPal_Merchant_MassPayments_Inputs For method chaining.
     */
    public function setEmailSubject($value)
    {
        return $this->set('EmailSubject', $value);
    }

    /**
     * Set the value for the InputFormat input for this MassPayments Choreo.
     *
     * @param string $value (required, string) The type of input you are providing for this mass payment. Accepted values are "csv" or "xml". See Choreo documentation for expected schema details.
     * @return PayPal_Merchant_MassPayments_Inputs For method chaining.
     */
    public function setInputFormat($value)
    {
        return $this->set('InputFormat', $value);
    }

    /**
     * Set the value for the Password input for this MassPayments Choreo.
     *
     * @param string $value (required, password) The API Password provided by PayPal.
     * @return PayPal_Merchant_MassPayments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Signature input for this MassPayments Choreo.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_Merchant_MassPayments_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the UseSandbox input for this MassPayments Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Merchant_MassPayments_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this MassPayments Choreo.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_Merchant_MassPayments_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

}


/**
 * Execution object for the MassPayments Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_MassPayments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MassPayments Choreo.
     *
     * @param Temboo_Session $session The session that owns this MassPayments execution.
     * @param PayPal_Merchant_MassPayments $choreo The choreography object for this execution.
     * @param PayPal_Merchant_MassPayments_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_MassPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_MassPayments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Merchant_MassPayments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MassPayments execution.
     *
     * @return PayPal_Merchant_MassPayments_Results New results object.
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
     * Wraps results in appropriate results class for this MassPayments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Merchant_MassPayments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Merchant_MassPayments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MassPayments Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_MassPayments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MassPayments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Merchant_MassPayments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Result" output from this MassPayments execution.
     *
     * @return string The MassPayment result from PayPal returned in the same format you've submitted.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResult()
    {
        return $this->get('Result');
    }
}

/**
 * Verifies that a credit card payment from the PayPal REST API has been completed successfully.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyCreditCardPayment extends Temboo_Choreography
{
    /**
     * Verifies that a credit card payment from the PayPal REST API has been completed successfully.
     *
     * @param Temboo_Session $session The session that owns this VerifyCreditCardPayment Choreo.
     * @return PayPal_Payments_VerifyCreditCardPayment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Payments/VerifyCreditCardPayment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VerifyCreditCardPayment Choreo.
     *
     * @param PayPal_Payments_VerifyCreditCardPayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_VerifyCreditCardPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_VerifyCreditCardPayment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Payments_VerifyCreditCardPayment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VerifyCreditCardPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_VerifyCreditCardPayment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Payments_VerifyCreditCardPayment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VerifyCreditCardPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyCreditCardPayment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VerifyCreditCardPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_VerifyCreditCardPayment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VerifyCreditCardPayment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Payments_VerifyCreditCardPayment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Payments_VerifyCreditCardPayment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this VerifyCreditCardPayment Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_Payments_VerifyCreditCardPayment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this VerifyCreditCardPayment Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. This is used to authenticate PayPal's REST API.
     * @return PayPal_Payments_VerifyCreditCardPayment_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this VerifyCreditCardPayment Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. This is used to authenticate PayPal's REST API.
     * @return PayPal_Payments_VerifyCreditCardPayment_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ProofOfPayment input for this VerifyCreditCardPayment Choreo.
     *
     * @param string $value (conditional, json) The proof of payment received from the client SDK. This can be a proof of payment received from the Adaptive Payment API or the REST API.
     * @return PayPal_Payments_VerifyCreditCardPayment_Inputs For method chaining.
     */
    public function setProofOfPayment($value)
    {
        return $this->set('ProofOfPayment', $value);
    }

    /**
     * Set the value for the UseSandbox input for this VerifyCreditCardPayment Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Payments_VerifyCreditCardPayment_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the VerifyCreditCardPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyCreditCardPayment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VerifyCreditCardPayment Choreo.
     *
     * @param Temboo_Session $session The session that owns this VerifyCreditCardPayment execution.
     * @param PayPal_Payments_VerifyCreditCardPayment $choreo The choreography object for this execution.
     * @param PayPal_Payments_VerifyCreditCardPayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_VerifyCreditCardPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_VerifyCreditCardPayment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Payments_VerifyCreditCardPayment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VerifyCreditCardPayment execution.
     *
     * @return PayPal_Payments_VerifyCreditCardPayment_Results New results object.
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
     * Wraps results in appropriate results class for this VerifyCreditCardPayment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Payments_VerifyCreditCardPayment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Payments_VerifyCreditCardPayment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VerifyCreditCardPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyCreditCardPayment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VerifyCreditCardPayment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Payments_VerifyCreditCardPayment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "FailureDescription" output from this VerifyCreditCardPayment execution.
     *
     * @return string (json) When the payment details indicate that the payment status is not complete, this will contain a JSON dictionary of payment status descriptions.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getFailureDescription()
    {
        return $this->get('FailureDescription');
    }
    /**
     * Retrieve the value for the "Response" output from this VerifyCreditCardPayment execution.
     *
     * @return string (json) The response from PayPal. This includes the full response from retrieving payment details from the Rest API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "VerificationStatus" output from this VerifyCreditCardPayment execution.
     *
     * @return string (string) The status of the payment verification. This will set to either "verified" or "unverified" depending on the status of the payment details.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getVerificationStatus()
    {
        return $this->get('VerificationStatus');
    }
}

/**
 * Retrieves the available balance for a PayPal account.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_MakeIndividualPayment extends Temboo_Choreography
{
    /**
     * Retrieves the available balance for a PayPal account.
     *
     * @param Temboo_Session $session The session that owns this MakeIndividualPayment Choreo.
     * @return PayPal_Merchant_MakeIndividualPayment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Merchant/MakeIndividualPayment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MakeIndividualPayment Choreo.
     *
     * @param PayPal_Merchant_MakeIndividualPayment_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_MakeIndividualPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_MakeIndividualPayment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Merchant_MakeIndividualPayment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MakeIndividualPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Merchant_MakeIndividualPayment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MakeIndividualPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_MakeIndividualPayment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MakeIndividualPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MakeIndividualPayment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CurrencyCode input for this MakeIndividualPayment Choreo.
     *
     * @param string $value (optional, string) The currency code associated with the PaymentAmount. Defaults to "USD".
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setCurrencyCode($value)
    {
        return $this->set('CurrencyCode', $value);
    }

    /**
     * Set the value for the EmailAddress input for this MakeIndividualPayment Choreo.
     *
     * @param string $value (required, string) The email address used to identify the recipient of the payment.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the EmailSubject input for this MakeIndividualPayment Choreo.
     *
     * @param string $value (optional, string) The subject line of the email that PayPal sends when the transaction is completed. Character length and limitations: 255 single-byte alphanumeric characters.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setEmailSubject($value)
    {
        return $this->set('EmailSubject', $value);
    }

    /**
     * Set the value for the Password input for this MakeIndividualPayment Choreo.
     *
     * @param string $value (required, password) The API Password provided by PayPal.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PaymentAmount input for this MakeIndividualPayment Choreo.
     *
     * @param float $value (required, decimal) The amount to be paid.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setPaymentAmount($value)
    {
        return $this->set('PaymentAmount', $value);
    }

    /**
     * Set the value for the Signature input for this MakeIndividualPayment Choreo.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the UseSandbox input for this MakeIndividualPayment Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this MakeIndividualPayment Choreo.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_Merchant_MakeIndividualPayment_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the MakeIndividualPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_MakeIndividualPayment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MakeIndividualPayment Choreo.
     *
     * @param Temboo_Session $session The session that owns this MakeIndividualPayment execution.
     * @param PayPal_Merchant_MakeIndividualPayment $choreo The choreography object for this execution.
     * @param PayPal_Merchant_MakeIndividualPayment_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_MakeIndividualPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_MakeIndividualPayment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Merchant_MakeIndividualPayment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MakeIndividualPayment execution.
     *
     * @return PayPal_Merchant_MakeIndividualPayment_Results New results object.
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
     * Wraps results in appropriate results class for this MakeIndividualPayment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Merchant_MakeIndividualPayment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Merchant_MakeIndividualPayment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MakeIndividualPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_MakeIndividualPayment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MakeIndividualPayment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Merchant_MakeIndividualPayment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Acknowledged" output from this MakeIndividualPayment execution.
     *
     * @return string (string) Indicates the status of the request. Should contain "Sucess" or "Failure".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAcknowledged()
    {
        return $this->get('Acknowledged');
    }
    /**
     * Retrieve the value for the "CorrelationId" output from this MakeIndividualPayment execution.
     *
     * @return string (string) A unique id returned by PayPal for this payment.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCorrelationId()
    {
        return $this->get('CorrelationId');
    }
    /**
     * Retrieve the value for the "ErrorMessage" output from this MakeIndividualPayment execution.
     *
     * @return string (string) This will contain any error message returned by PayPal during this operation.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getErrorMessage()
    {
        return $this->get('ErrorMessage');
    }
    /**
     * Retrieve the value for the "Response" output from this MakeIndividualPayment execution.
     *
     * @return string (string) The full response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Timestamp" output from this MakeIndividualPayment execution.
     *
     * @return string (date) The timestamp associated with the payment request.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTimestamp()
    {
        return $this->get('Timestamp');
    }
}

/**
 * Creates a new PayPal payment which can then be approved and executed.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_AcceptPayPalPayment extends Temboo_Choreography
{
    /**
     * Creates a new PayPal payment which can then be approved and executed.
     *
     * @param Temboo_Session $session The session that owns this AcceptPayPalPayment Choreo.
     * @return PayPal_Payments_AcceptPayPalPayment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Payments/AcceptPayPalPayment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AcceptPayPalPayment Choreo.
     *
     * @param PayPal_Payments_AcceptPayPalPayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_AcceptPayPalPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_AcceptPayPalPayment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Payments_AcceptPayPalPayment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AcceptPayPalPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Payments_AcceptPayPalPayment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AcceptPayPalPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_AcceptPayPalPayment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AcceptPayPalPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AcceptPayPalPayment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this AcceptPayPalPayment Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the CancelURL input for this AcceptPayPalPayment Choreo.
     *
     * @param string $value (required, string) URL to which the customer is returned if they do not approve the use of PayPal to pay you.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setCancelURL($value)
    {
        return $this->set('CancelURL', $value);
    }

    /**
     * Set the value for the ClientID input for this AcceptPayPalPayment Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this AcceptPayPalPayment Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Currency input for this AcceptPayPalPayment Choreo.
     *
     * @param string $value (required, string) The currency for the payment (i.e.  USD).
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the Description input for this AcceptPayPalPayment Choreo.
     *
     * @param string $value (optional, string) A description for this payment.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the ReturnURL input for this AcceptPayPalPayment Choreo.
     *
     * @param string $value (required, string) The URL to which the customer's browser is returned after choosing to pay with PayPal.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setReturnURL($value)
    {
        return $this->set('ReturnURL', $value);
    }

    /**
     * Set the value for the Scope input for this AcceptPayPalPayment Choreo.
     *
     * @param string $value (optional, string) A space delimited list of resource URL endpoints that the token should have access for. This is only used when providing the ClientID and Client Secret in order to generate a new access token.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the Total input for this AcceptPayPalPayment Choreo.
     *
     * @param float $value (required, decimal) The total of the payment.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setTotal($value)
    {
        return $this->set('Total', $value);
    }

    /**
     * Set the value for the UseSandbox input for this AcceptPayPalPayment Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Payments_AcceptPayPalPayment_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the AcceptPayPalPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_AcceptPayPalPayment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AcceptPayPalPayment Choreo.
     *
     * @param Temboo_Session $session The session that owns this AcceptPayPalPayment execution.
     * @param PayPal_Payments_AcceptPayPalPayment $choreo The choreography object for this execution.
     * @param PayPal_Payments_AcceptPayPalPayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_AcceptPayPalPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_AcceptPayPalPayment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Payments_AcceptPayPalPayment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AcceptPayPalPayment execution.
     *
     * @return PayPal_Payments_AcceptPayPalPayment_Results New results object.
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
     * Wraps results in appropriate results class for this AcceptPayPalPayment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Payments_AcceptPayPalPayment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Payments_AcceptPayPalPayment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AcceptPayPalPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_AcceptPayPalPayment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AcceptPayPalPayment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Payments_AcceptPayPalPayment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ApprovalURL" output from this AcceptPayPalPayment execution.
     *
     * @return string (string) The approval url that the application should redirect the user to in order to approve the payment.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getApprovalURL()
    {
        return $this->get('ApprovalURL');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this AcceptPayPalPayment execution.
     *
     * @return string (string) The new access token retrieved from PayPal when providing the Client ID and Client Secret.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "PaymentID" output from this AcceptPayPalPayment execution.
     *
     * @return string (string) The id of the payment that was created. This is used to execute the payment after the buyer has approved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPaymentID()
    {
        return $this->get('PaymentID');
    }
    /**
     * Retrieve the value for the "Response" output from this AcceptPayPalPayment execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a specific payment resource by ID.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_LookupPayment extends Temboo_Choreography
{
    /**
     * Retrieves a specific payment resource by ID.
     *
     * @param Temboo_Session $session The session that owns this LookupPayment Choreo.
     * @return PayPal_Payments_LookupPayment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Payments/LookupPayment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LookupPayment Choreo.
     *
     * @param PayPal_Payments_LookupPayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_LookupPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_LookupPayment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Payments_LookupPayment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LookupPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_LookupPayment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Payments_LookupPayment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LookupPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_LookupPayment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LookupPayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_LookupPayment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LookupPayment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Payments_LookupPayment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Payments_LookupPayment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this LookupPayment Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_Payments_LookupPayment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this LookupPayment Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Payments_LookupPayment_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this LookupPayment Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Payments_LookupPayment_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the PaymentID input for this LookupPayment Choreo.
     *
     * @param string $value (required, string) The id of the payment to retrieve.
     * @return PayPal_Payments_LookupPayment_Inputs For method chaining.
     */
    public function setPaymentID($value)
    {
        return $this->set('PaymentID', $value);
    }

    /**
     * Set the value for the Scope input for this LookupPayment Choreo.
     *
     * @param string $value (optional, string) A space delimited list of resource URL endpoints that the token should have access for. This is only used when providing the ClientID and Client Secret in order to generate a new access token.
     * @return PayPal_Payments_LookupPayment_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the UseSandbox input for this LookupPayment Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Payments_LookupPayment_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the LookupPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_LookupPayment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LookupPayment Choreo.
     *
     * @param Temboo_Session $session The session that owns this LookupPayment execution.
     * @param PayPal_Payments_LookupPayment $choreo The choreography object for this execution.
     * @param PayPal_Payments_LookupPayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_LookupPayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_LookupPayment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Payments_LookupPayment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LookupPayment execution.
     *
     * @return PayPal_Payments_LookupPayment_Results New results object.
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
     * Wraps results in appropriate results class for this LookupPayment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Payments_LookupPayment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Payments_LookupPayment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LookupPayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_LookupPayment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LookupPayment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Payments_LookupPayment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Currency" output from this LookupPayment execution.
     *
     * @return string (string) The payment currency.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCurrency()
    {
        return $this->get('Currency');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this LookupPayment execution.
     *
     * @return string (string) The new access token retrieved from PayPal when providing the Client ID and Client Secret.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "PaymentState" output from this LookupPayment execution.
     *
     * @return string (string) The state of the payment.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPaymentState()
    {
        return $this->get('PaymentState');
    }
    /**
     * Retrieve the value for the "Response" output from this LookupPayment execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "SaleState" output from this LookupPayment execution.
     *
     * @return string (string) The state of the sale.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSaleState()
    {
        return $this->get('SaleState');
    }
    /**
     * Retrieve the value for the "Total" output from this LookupPayment execution.
     *
     * @return float (decimal) The total amount of the payment.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTotal()
    {
        return $this->get('Total');
    }
}

/**
 * Retrieves details about a specific refund.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Refunds_LookupRefund extends Temboo_Choreography
{
    /**
     * Retrieves details about a specific refund.
     *
     * @param Temboo_Session $session The session that owns this LookupRefund Choreo.
     * @return PayPal_Refunds_LookupRefund New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Refunds/LookupRefund/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LookupRefund Choreo.
     *
     * @param PayPal_Refunds_LookupRefund_Inputs|array $inputs (optional) Inputs as PayPal_Refunds_LookupRefund_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Refunds_LookupRefund_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Refunds_LookupRefund_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LookupRefund Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Refunds_LookupRefund_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Refunds_LookupRefund_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LookupRefund Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Refunds_LookupRefund_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LookupRefund Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Refunds_LookupRefund_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LookupRefund input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Refunds_LookupRefund_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Refunds_LookupRefund_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this LookupRefund Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_Refunds_LookupRefund_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this LookupRefund Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Refunds_LookupRefund_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this LookupRefund Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Refunds_LookupRefund_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the RefundID input for this LookupRefund Choreo.
     *
     * @param string $value (required, string) The id of the refund to retrieve.
     * @return PayPal_Refunds_LookupRefund_Inputs For method chaining.
     */
    public function setRefundID($value)
    {
        return $this->set('RefundID', $value);
    }

    /**
     * Set the value for the Scope input for this LookupRefund Choreo.
     *
     * @param string $value (optional, string) A space delimited list of resource URL endpoints that the token should have access for. This is only used when providing the ClientID and Client Secret in order to generate a new access token.
     * @return PayPal_Refunds_LookupRefund_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the UseSandbox input for this LookupRefund Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Refunds_LookupRefund_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the LookupRefund Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Refunds_LookupRefund_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LookupRefund Choreo.
     *
     * @param Temboo_Session $session The session that owns this LookupRefund execution.
     * @param PayPal_Refunds_LookupRefund $choreo The choreography object for this execution.
     * @param PayPal_Refunds_LookupRefund_Inputs|array $inputs (optional) Inputs as PayPal_Refunds_LookupRefund_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Refunds_LookupRefund_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Refunds_LookupRefund $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LookupRefund execution.
     *
     * @return PayPal_Refunds_LookupRefund_Results New results object.
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
     * Wraps results in appropriate results class for this LookupRefund execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Refunds_LookupRefund_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Refunds_LookupRefund_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LookupRefund Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Refunds_LookupRefund_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LookupRefund Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Refunds_LookupRefund_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this LookupRefund execution.
     *
     * @return string (string) The new access token retrieved from PayPal when providing the Client ID and Client Secret.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this LookupRefund execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Issue a refund to a PayPal buyer by specifying a transaction ID.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_RefundTransaction extends Temboo_Choreography
{
    /**
     * Issue a refund to a PayPal buyer by specifying a transaction ID.
     *
     * @param Temboo_Session $session The session that owns this RefundTransaction Choreo.
     * @return PayPal_Merchant_RefundTransaction New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Merchant/RefundTransaction/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RefundTransaction Choreo.
     *
     * @param PayPal_Merchant_RefundTransaction_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_RefundTransaction_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_RefundTransaction_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Merchant_RefundTransaction_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefundTransaction Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_RefundTransaction_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Merchant_RefundTransaction_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefundTransaction Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_RefundTransaction_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RefundTransaction Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_RefundTransaction_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RefundTransaction input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Amount input for this RefundTransaction Choreo.
     *
     * @param float $value (optional, decimal) Refund amount. Amount is required if RefundType is set to Partial. If RefundType is set to Full, leave input blank.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the CurrencyCode input for this RefundTransaction Choreo.
     *
     * @param string $value (optional, string) A three-character currency code (i.e. USD). Required for partial refunds. Leave this field blank for full refunds. Defaults to USD.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setCurrencyCode($value)
    {
        return $this->set('CurrencyCode', $value);
    }

    /**
     * Set the value for the InvoiceID input for this RefundTransaction Choreo.
     *
     * @param string $value (optional, string) Your own invoice or tracking number. Character length limitation is 127 alphanumeric characters.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setInvoiceID($value)
    {
        return $this->set('InvoiceID', $value);
    }

    /**
     * Set the value for the Note input for this RefundTransaction Choreo.
     *
     * @param string $value (optional, string) Custom note about the refund. Character length limitation is 255 alphanumeric characters.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setNote($value)
    {
        return $this->set('Note', $value);
    }

    /**
     * Set the value for the Password input for this RefundTransaction Choreo.
     *
     * @param string $value (required, password) The API Password provided by PayPal.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RefundType input for this RefundTransaction Choreo.
     *
     * @param string $value (required, string) The refund type must be set to Full or Partial.  This flag effects what values some other input variables should have. Defaults to Full.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setRefundType($value)
    {
        return $this->set('RefundType', $value);
    }

    /**
     * Set the value for the Signature input for this RefundTransaction Choreo.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the TransactionID input for this RefundTransaction Choreo.
     *
     * @param string $value (required, string) The ID for the transaction you want to retrieve data for.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the UseSandbox input for this RefundTransaction Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this RefundTransaction Choreo.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_Merchant_RefundTransaction_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the RefundTransaction Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_RefundTransaction_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefundTransaction Choreo.
     *
     * @param Temboo_Session $session The session that owns this RefundTransaction execution.
     * @param PayPal_Merchant_RefundTransaction $choreo The choreography object for this execution.
     * @param PayPal_Merchant_RefundTransaction_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_RefundTransaction_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_RefundTransaction_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Merchant_RefundTransaction $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefundTransaction execution.
     *
     * @return PayPal_Merchant_RefundTransaction_Results New results object.
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
     * Wraps results in appropriate results class for this RefundTransaction execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Merchant_RefundTransaction_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Merchant_RefundTransaction_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RefundTransaction Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_RefundTransaction_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RefundTransaction Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Merchant_RefundTransaction_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RefundTransaction execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of payments.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_ListPayments extends Temboo_Choreography
{
    /**
     * Retrieves a list of payments.
     *
     * @param Temboo_Session $session The session that owns this ListPayments Choreo.
     * @return PayPal_Payments_ListPayments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Payments/ListPayments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPayments Choreo.
     *
     * @param PayPal_Payments_ListPayments_Inputs|array $inputs (optional) Inputs as PayPal_Payments_ListPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_ListPayments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Payments_ListPayments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPayments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_ListPayments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Payments_ListPayments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPayments Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_ListPayments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPayments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_ListPayments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPayments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListPayments Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListPayments Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListPayments Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Count input for this ListPayments Choreo.
     *
     * @param int $value (optional, integer) Number of items to return. Default is 10 with a maximum value of 20.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Scope input for this ListPayments Choreo.
     *
     * @param string $value (optional, string) A space delimited list of resource URL endpoints that the token should have access for. This is only used when providing the ClientID and Client Secret in order to generate a new access token.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the SortBy input for this ListPayments Choreo.
     *
     * @param string $value (optional, string) The field to sort results by. Valid values are: create_time and update_time.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this ListPayments Choreo.
     *
     * @param string $value (optional, string) The sort order of the results. Valid values are asc and desc (the default).
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the StartID input for this ListPayments Choreo.
     *
     * @param string $value (optional, string) The resource ID that indicates the starting resource to return. When results are paged, you can use the next_id response value as the StartID to continue with the next set of results.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setStartID($value)
    {
        return $this->set('StartID', $value);
    }

    /**
     * Set the value for the StartIndex input for this ListPayments Choreo.
     *
     * @param int $value (optional, integer) The start index of the resources to be returned. Used to jump to a specific position in the results.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UseSandbox input for this ListPayments Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Payments_ListPayments_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the ListPayments Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_ListPayments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPayments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPayments execution.
     * @param PayPal_Payments_ListPayments $choreo The choreography object for this execution.
     * @param PayPal_Payments_ListPayments_Inputs|array $inputs (optional) Inputs as PayPal_Payments_ListPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_ListPayments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Payments_ListPayments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPayments execution.
     *
     * @return PayPal_Payments_ListPayments_Results New results object.
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
     * Wraps results in appropriate results class for this ListPayments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Payments_ListPayments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Payments_ListPayments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPayments Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_ListPayments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPayments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Payments_ListPayments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListPayments execution.
     *
     * @return string (string) The new access token retrieved from PayPal when providing the Client ID and Client Secret.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListPayments execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves details about a sale transaction.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_SaleTransactions_LookupSale extends Temboo_Choreography
{
    /**
     * Retrieves details about a sale transaction.
     *
     * @param Temboo_Session $session The session that owns this LookupSale Choreo.
     * @return PayPal_SaleTransactions_LookupSale New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/SaleTransactions/LookupSale/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LookupSale Choreo.
     *
     * @param PayPal_SaleTransactions_LookupSale_Inputs|array $inputs (optional) Inputs as PayPal_SaleTransactions_LookupSale_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_SaleTransactions_LookupSale_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_SaleTransactions_LookupSale_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LookupSale Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_SaleTransactions_LookupSale_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_SaleTransactions_LookupSale_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LookupSale Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_SaleTransactions_LookupSale_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LookupSale Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_SaleTransactions_LookupSale_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LookupSale input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_SaleTransactions_LookupSale_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_SaleTransactions_LookupSale_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this LookupSale Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_SaleTransactions_LookupSale_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this LookupSale Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_SaleTransactions_LookupSale_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this LookupSale Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_SaleTransactions_LookupSale_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the SaleID input for this LookupSale Choreo.
     *
     * @param string $value (required, string) The id of the sale to retrieve.
     * @return PayPal_SaleTransactions_LookupSale_Inputs For method chaining.
     */
    public function setSaleID($value)
    {
        return $this->set('SaleID', $value);
    }

    /**
     * Set the value for the Scope input for this LookupSale Choreo.
     *
     * @param string $value (optional, string) A space delimited list of resource URL endpoints that the token should have access for. This is only used when providing the ClientID and Client Secret in order to generate a new access token.
     * @return PayPal_SaleTransactions_LookupSale_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the UseSandbox input for this LookupSale Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_SaleTransactions_LookupSale_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the LookupSale Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_SaleTransactions_LookupSale_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LookupSale Choreo.
     *
     * @param Temboo_Session $session The session that owns this LookupSale execution.
     * @param PayPal_SaleTransactions_LookupSale $choreo The choreography object for this execution.
     * @param PayPal_SaleTransactions_LookupSale_Inputs|array $inputs (optional) Inputs as PayPal_SaleTransactions_LookupSale_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_SaleTransactions_LookupSale_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_SaleTransactions_LookupSale $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LookupSale execution.
     *
     * @return PayPal_SaleTransactions_LookupSale_Results New results object.
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
     * Wraps results in appropriate results class for this LookupSale execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_SaleTransactions_LookupSale_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_SaleTransactions_LookupSale_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LookupSale Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_SaleTransactions_LookupSale_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LookupSale Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_SaleTransactions_LookupSale_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this LookupSale execution.
     *
     * @return string (string) The new access token retrieved from PayPal when providing the Client ID and Client Secret.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this LookupSale execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Executes a PayPal payment that has been accepted and approved.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_ExecutePayment extends Temboo_Choreography
{
    /**
     * Executes a PayPal payment that has been accepted and approved.
     *
     * @param Temboo_Session $session The session that owns this ExecutePayment Choreo.
     * @return PayPal_Payments_ExecutePayment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Payments/ExecutePayment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ExecutePayment Choreo.
     *
     * @param PayPal_Payments_ExecutePayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_ExecutePayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_ExecutePayment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Payments_ExecutePayment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExecutePayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_ExecutePayment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Payments_ExecutePayment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExecutePayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_ExecutePayment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ExecutePayment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_ExecutePayment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExecutePayment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Payments_ExecutePayment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Payments_ExecutePayment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the PayerID input for this ExecutePayment Choreo.
     *
     * @param string $value (required, string) The id of the user who is making a payment.
     * @return PayPal_Payments_ExecutePayment_Inputs For method chaining.
     */
    public function setPayerID($value)
    {
        return $this->set('PayerID', $value);
    }

    /**
     * Set the value for the AccessToken input for this ExecutePayment Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_Payments_ExecutePayment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ExecutePayment Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Payments_ExecutePayment_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ExecutePayment Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Payments_ExecutePayment_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the PaymentID input for this ExecutePayment Choreo.
     *
     * @param string $value (required, string) The id of the payment to execute.
     * @return PayPal_Payments_ExecutePayment_Inputs For method chaining.
     */
    public function setPaymentID($value)
    {
        return $this->set('PaymentID', $value);
    }

    /**
     * Set the value for the Scope input for this ExecutePayment Choreo.
     *
     * @param string $value (optional, string) A space delimited list of resource URL endpoints that the token should have access for. This is only used when providing the ClientID and Client Secret in order to generate a new access token.
     * @return PayPal_Payments_ExecutePayment_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the UseSandbox input for this ExecutePayment Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Payments_ExecutePayment_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the ExecutePayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_ExecutePayment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExecutePayment Choreo.
     *
     * @param Temboo_Session $session The session that owns this ExecutePayment execution.
     * @param PayPal_Payments_ExecutePayment $choreo The choreography object for this execution.
     * @param PayPal_Payments_ExecutePayment_Inputs|array $inputs (optional) Inputs as PayPal_Payments_ExecutePayment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_ExecutePayment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Payments_ExecutePayment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExecutePayment execution.
     *
     * @return PayPal_Payments_ExecutePayment_Results New results object.
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
     * Wraps results in appropriate results class for this ExecutePayment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Payments_ExecutePayment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Payments_ExecutePayment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ExecutePayment Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_ExecutePayment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ExecutePayment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Payments_ExecutePayment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ExecutePayment execution.
     *
     * @return string (string) The new access token retrieved from PayPal when providing the Client ID and Client Secret.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ExecutePayment execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "SaleID" output from this ExecutePayment execution.
     *
     * @return string (string) The id of the sale that was just executed. This can be used to Lookup the sales transaction if needed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSaleID()
    {
        return $this->get('SaleID');
    }
}

/**
 * Retrieves transaction history for transactions that meet a specified criteria.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_TransactionSearch extends Temboo_Choreography
{
    /**
     * Retrieves transaction history for transactions that meet a specified criteria.
     *
     * @param Temboo_Session $session The session that owns this TransactionSearch Choreo.
     * @return PayPal_Merchant_TransactionSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Merchant/TransactionSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TransactionSearch Choreo.
     *
     * @param PayPal_Merchant_TransactionSearch_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_TransactionSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_TransactionSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Merchant_TransactionSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TransactionSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_TransactionSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Merchant_TransactionSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TransactionSearch Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_TransactionSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TransactionSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_TransactionSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TransactionSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Account input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by credit card number.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setAccount($value)
    {
        return $this->set('Account', $value);
    }

    /**
     * Set the value for the AuctionItemNumber input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by auction item number of the purchased item.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setAuctionItemNumber($value)
    {
        return $this->set('AuctionItemNumber', $value);
    }

    /**
     * Set the value for the CurrencyCode input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by currency code (i.e. USD).
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setCurrencyCode($value)
    {
        return $this->set('CurrencyCode', $value);
    }

    /**
     * Set the value for the Email input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by email.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, date) The latest transaction date to return. Must be an epoch timestamp in milliseconds or formatted in UTC like: 2011-05-19T00:00:00Z.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the InvoiceNumber input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by invoice number.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setInvoiceNumber($value)
    {
        return $this->set('InvoiceNumber', $value);
    }

    /**
     * Set the value for the Password input for this TransactionSearch Choreo.
     *
     * @param string $value (required, password) The API Password provided by PayPal.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ReceiptId input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by the PayPal receipt ID.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setReceiptId($value)
    {
        return $this->set('ReceiptId', $value);
    }

    /**
     * Set the value for the Receiver input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by the email address of the receiver.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setReceiver($value)
    {
        return $this->set('Receiver', $value);
    }

    /**
     * Set the value for the Signature input for this TransactionSearch Choreo.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the StartDate input for this TransactionSearch Choreo.
     *
     * @param string $value (required, date) The earliest transaction date to return. Must be an epoch timestamp in milliseconds or formatted in UTC like: 2011-05-19T00:00:00Z.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the TransactionAmount input for this TransactionSearch Choreo.
     *
     * @param float $value (optional, decimal) Search by transaction amount.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setTransactionAmount($value)
    {
        return $this->set('TransactionAmount', $value);
    }

    /**
     * Set the value for the TransactionClass input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by classification of transaction (i.e. All, Sent, Recieved, etc).
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setTransactionClass($value)
    {
        return $this->set('TransactionClass', $value);
    }

    /**
     * Set the value for the TransactionId input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by the transaction ID
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setTransactionId($value)
    {
        return $this->set('TransactionId', $value);
    }

    /**
     * Set the value for the TransactionStatus input for this TransactionSearch Choreo.
     *
     * @param string $value (optional, string) Search by transaction status (i.e. Pending, Processing, Success, Denied, Reversed).
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setTransactionStatus($value)
    {
        return $this->set('TransactionStatus', $value);
    }

    /**
     * Set the value for the UseSandbox input for this TransactionSearch Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this TransactionSearch Choreo.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_Merchant_TransactionSearch_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the TransactionSearch Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_TransactionSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TransactionSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this TransactionSearch execution.
     * @param PayPal_Merchant_TransactionSearch $choreo The choreography object for this execution.
     * @param PayPal_Merchant_TransactionSearch_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_TransactionSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_TransactionSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Merchant_TransactionSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TransactionSearch execution.
     *
     * @return PayPal_Merchant_TransactionSearch_Results New results object.
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
     * Wraps results in appropriate results class for this TransactionSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Merchant_TransactionSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Merchant_TransactionSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TransactionSearch Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_TransactionSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TransactionSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Merchant_TransactionSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TransactionSearch execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a specific transaction.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_GetTransactionDetails extends Temboo_Choreography
{
    /**
     * Retrieves information about a specific transaction.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionDetails Choreo.
     * @return PayPal_Merchant_GetTransactionDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Merchant/GetTransactionDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTransactionDetails Choreo.
     *
     * @param PayPal_Merchant_GetTransactionDetails_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_GetTransactionDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_GetTransactionDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Merchant_GetTransactionDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTransactionDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_GetTransactionDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Merchant_GetTransactionDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTransactionDetails Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_GetTransactionDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTransactionDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_GetTransactionDetails_Inputs New instance.
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
     * @return PayPal_Merchant_GetTransactionDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Merchant_GetTransactionDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this GetTransactionDetails Choreo.
     *
     * @param string $value (required, password) The API Password provided by PayPal.
     * @return PayPal_Merchant_GetTransactionDetails_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Signature input for this GetTransactionDetails Choreo.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_Merchant_GetTransactionDetails_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the TransactionID input for this GetTransactionDetails Choreo.
     *
     * @param string $value (required, string) The ID for the transaction you want to retrieve data for.
     * @return PayPal_Merchant_GetTransactionDetails_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the UseSandbox input for this GetTransactionDetails Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Merchant_GetTransactionDetails_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this GetTransactionDetails Choreo.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_Merchant_GetTransactionDetails_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetTransactionDetails Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_GetTransactionDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTransactionDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTransactionDetails execution.
     * @param PayPal_Merchant_GetTransactionDetails $choreo The choreography object for this execution.
     * @param PayPal_Merchant_GetTransactionDetails_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_GetTransactionDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_GetTransactionDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Merchant_GetTransactionDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTransactionDetails execution.
     *
     * @return PayPal_Merchant_GetTransactionDetails_Results New results object.
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
     * @return PayPal_Merchant_GetTransactionDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Merchant_GetTransactionDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTransactionDetails Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_GetTransactionDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTransactionDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Merchant_GetTransactionDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTransactionDetails execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Verifies that a payment has been successfully completed.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyAllPayments extends Temboo_Choreography
{
    /**
     * Verifies that a payment has been successfully completed.
     *
     * @param Temboo_Session $session The session that owns this VerifyAllPayments Choreo.
     * @return PayPal_Payments_VerifyAllPayments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Payments/VerifyAllPayments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VerifyAllPayments Choreo.
     *
     * @param PayPal_Payments_VerifyAllPayments_Inputs|array $inputs (optional) Inputs as PayPal_Payments_VerifyAllPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_VerifyAllPayments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Payments_VerifyAllPayments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VerifyAllPayments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_VerifyAllPayments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Payments_VerifyAllPayments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VerifyAllPayments Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyAllPayments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VerifyAllPayments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Payments_VerifyAllPayments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VerifyAllPayments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this VerifyAllPayments Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the AppID input for this VerifyAllPayments Choreo.
     *
     * @param string $value (conditional, string) Your PayPal AppID (or the default AppID for the PayPal sandbox: APP-80W284485P519543T). This is used to authenticate PayPal's Adaptive Payments API.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the ClientID input for this VerifyAllPayments Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. This is used to authenticate PayPal's REST API.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this VerifyAllPayments Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. This is used to authenticate PayPal's REST API.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Password input for this VerifyAllPayments Choreo.
     *
     * @param string $value (conditional, string) The API Password provided by PayPal. This is used to authenticate PayPal's Adaptive Payments API.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ProofOfPayment input for this VerifyAllPayments Choreo.
     *
     * @param string $value (required, json) The proof of payment received from the client SDK. This can be a proof of payment received from the Adaptive Payment API or the REST API.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setProofOfPayment($value)
    {
        return $this->set('ProofOfPayment', $value);
    }

    /**
     * Set the value for the Signature input for this VerifyAllPayments Choreo.
     *
     * @param string $value (conditional, string) The API Signature provided by PayPal. This is used to authenticate PayPal's Adaptive Payments API.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the UseSandbox input for this VerifyAllPayments Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this VerifyAllPayments Choreo.
     *
     * @param string $value (conditional, string) The API Username provided by PayPal. This is used to authenticate PayPal's Adaptive Payments API.
     * @return PayPal_Payments_VerifyAllPayments_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the VerifyAllPayments Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyAllPayments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VerifyAllPayments Choreo.
     *
     * @param Temboo_Session $session The session that owns this VerifyAllPayments execution.
     * @param PayPal_Payments_VerifyAllPayments $choreo The choreography object for this execution.
     * @param PayPal_Payments_VerifyAllPayments_Inputs|array $inputs (optional) Inputs as PayPal_Payments_VerifyAllPayments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Payments_VerifyAllPayments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Payments_VerifyAllPayments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VerifyAllPayments execution.
     *
     * @return PayPal_Payments_VerifyAllPayments_Results New results object.
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
     * Wraps results in appropriate results class for this VerifyAllPayments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Payments_VerifyAllPayments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Payments_VerifyAllPayments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VerifyAllPayments Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Payments_VerifyAllPayments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VerifyAllPayments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Payments_VerifyAllPayments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "FailureDescription" output from this VerifyAllPayments execution.
     *
     * @return string (json) When the payment details indicate that the payment status is not complete, this will contain a JSON dictionary of payment status descriptions.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getFailureDescription()
    {
        return $this->get('FailureDescription');
    }
    /**
     * Retrieve the value for the "Response" output from this VerifyAllPayments execution.
     *
     * @return string (json) The response from PayPal. This includes the full response from retrieving payment details from either the AdaptivePayments API or the Rest API.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "VerificationStatus" output from this VerifyAllPayments execution.
     *
     * @return string (string) The status of the payment verification. This will set to either "verified" or "unverified" depending on the status of the payment details.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getVerificationStatus()
    {
        return $this->get('VerificationStatus');
    }
}

/**
 * Retrieves information about a specific payment.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AdaptivePayments_PaymentDetails extends Temboo_Choreography
{
    /**
     * Retrieves information about a specific payment.
     *
     * @param Temboo_Session $session The session that owns this PaymentDetails Choreo.
     * @return PayPal_AdaptivePayments_PaymentDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/AdaptivePayments/PaymentDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PaymentDetails Choreo.
     *
     * @param PayPal_AdaptivePayments_PaymentDetails_Inputs|array $inputs (optional) Inputs as PayPal_AdaptivePayments_PaymentDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_AdaptivePayments_PaymentDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_AdaptivePayments_PaymentDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PaymentDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_AdaptivePayments_PaymentDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PaymentDetails Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AdaptivePayments_PaymentDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PaymentDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PaymentDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AppID input for this PaymentDetails Choreo.
     *
     * @param string $value (required, string) Your PayPal AppID (or the default AppID for the PayPal sandbox).
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the Password input for this PaymentDetails Choreo.
     *
     * @param string $value (required, password) The API Password provided by PayPal.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PayKey input for this PaymentDetails Choreo.
     *
     * @param string $value (conditional, string) The pay key that identifies the payment for which you want to retrieve details. This is the pay key returned in the response of the Pay method.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function setPayKey($value)
    {
        return $this->set('PayKey', $value);
    }

    /**
     * Set the value for the Signature input for this PaymentDetails Choreo.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the TrackingID input for this PaymentDetails Choreo.
     *
     * @param string $value (optional, string) The tracking ID that was specified for this payment in the PayRequest message.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function setTrackingID($value)
    {
        return $this->set('TrackingID', $value);
    }

    /**
     * Set the value for the TransactionID input for this PaymentDetails Choreo.
     *
     * @param string $value (optional, string) The PayPal transaction ID associated with the payment. The Instant Payment Notification message associated with the payment contains the transaction ID.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }

    /**
     * Set the value for the UseSandbox input for this PaymentDetails Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this PaymentDetails Choreo.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_AdaptivePayments_PaymentDetails_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the PaymentDetails Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AdaptivePayments_PaymentDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PaymentDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this PaymentDetails execution.
     * @param PayPal_AdaptivePayments_PaymentDetails $choreo The choreography object for this execution.
     * @param PayPal_AdaptivePayments_PaymentDetails_Inputs|array $inputs (optional) Inputs as PayPal_AdaptivePayments_PaymentDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_AdaptivePayments_PaymentDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_AdaptivePayments_PaymentDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PaymentDetails execution.
     *
     * @return PayPal_AdaptivePayments_PaymentDetails_Results New results object.
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
     * Wraps results in appropriate results class for this PaymentDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_AdaptivePayments_PaymentDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_AdaptivePayments_PaymentDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PaymentDetails Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AdaptivePayments_PaymentDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PaymentDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_AdaptivePayments_PaymentDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccountID" output from this PaymentDetails execution.
     *
     * @return string (string) The account id of the payment reciever.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccountID()
    {
        return $this->get('AccountID');
    }
    /**
     * Retrieve the value for the "Amount" output from this PaymentDetails execution.
     *
     * @return float (decimal) The payment amount.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAmount()
    {
        return $this->get('Amount');
    }
    /**
     * Retrieve the value for the "CurrencyCode" output from this PaymentDetails execution.
     *
     * @return string (string) The currency code for the payment.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCurrencyCode()
    {
        return $this->get('CurrencyCode');
    }
    /**
     * Retrieve the value for the "Email" output from this PaymentDetails execution.
     *
     * @return string (string) The receiver email address.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getEmail()
    {
        return $this->get('Email');
    }
    /**
     * Retrieve the value for the "Response" output from this PaymentDetails execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Status" output from this PaymentDetails execution.
     *
     * @return string (string) The status of the payment.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getStatus()
    {
        return $this->get('Status');
    }
    /**
     * Retrieve the value for the "TransactionStatus" output from this PaymentDetails execution.
     *
     * @return string (string) The transaction status of the payment.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getTransactionStatus()
    {
        return $this->get('TransactionStatus');
    }
}

/**
 * Converts a payment amount from one currency to another.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AdaptivePayments_ConvertCurrency extends Temboo_Choreography
{
    /**
     * Converts a payment amount from one currency to another.
     *
     * @param Temboo_Session $session The session that owns this ConvertCurrency Choreo.
     * @return PayPal_AdaptivePayments_ConvertCurrency New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/AdaptivePayments/ConvertCurrency/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ConvertCurrency Choreo.
     *
     * @param PayPal_AdaptivePayments_ConvertCurrency_Inputs|array $inputs (optional) Inputs as PayPal_AdaptivePayments_ConvertCurrency_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_AdaptivePayments_ConvertCurrency_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ConvertCurrency Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_AdaptivePayments_ConvertCurrency_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ConvertCurrency Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AdaptivePayments_ConvertCurrency_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ConvertCurrency Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ConvertCurrency input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Amount input for this ConvertCurrency Choreo.
     *
     * @param float $value (required, decimal) The amount that should be converted to a new currency.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the AppID input for this ConvertCurrency Choreo.
     *
     * @param string $value (required, string) Your PayPal AppID (or the default AppID for the PayPal sandbox).
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function setAppID($value)
    {
        return $this->set('AppID', $value);
    }

    /**
     * Set the value for the ConvertToCurrency input for this ConvertCurrency Choreo.
     *
     * @param string $value (required, string) The currency code that you want to convert to (i.e. GBP).
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function setConvertToCurrency($value)
    {
        return $this->set('ConvertToCurrency', $value);
    }

    /**
     * Set the value for the CurrencyCode input for this ConvertCurrency Choreo.
     *
     * @param string $value (required, string) The currency code that you want to convert. (i.e. USD).
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function setCurrencyCode($value)
    {
        return $this->set('CurrencyCode', $value);
    }

    /**
     * Set the value for the Password input for this ConvertCurrency Choreo.
     *
     * @param string $value (required, password) The API Password provided by PayPal.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Signature input for this ConvertCurrency Choreo.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the UseSandbox input for this ConvertCurrency Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this ConvertCurrency Choreo.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ConvertCurrency Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AdaptivePayments_ConvertCurrency_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ConvertCurrency Choreo.
     *
     * @param Temboo_Session $session The session that owns this ConvertCurrency execution.
     * @param PayPal_AdaptivePayments_ConvertCurrency $choreo The choreography object for this execution.
     * @param PayPal_AdaptivePayments_ConvertCurrency_Inputs|array $inputs (optional) Inputs as PayPal_AdaptivePayments_ConvertCurrency_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_AdaptivePayments_ConvertCurrency $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ConvertCurrency execution.
     *
     * @return PayPal_AdaptivePayments_ConvertCurrency_Results New results object.
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
     * Wraps results in appropriate results class for this ConvertCurrency execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_AdaptivePayments_ConvertCurrency_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ConvertCurrency Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_AdaptivePayments_ConvertCurrency_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ConvertCurrency Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_AdaptivePayments_ConvertCurrency_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ConvertCurrency execution.
     *
     * @return string (json) The response from PayPal.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Confirms whether a postal address and postal code match those of the specified PayPal account holder.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_AddressVerify extends Temboo_Choreography
{
    /**
     * Confirms whether a postal address and postal code match those of the specified PayPal account holder.
     *
     * @param Temboo_Session $session The session that owns this AddressVerify Choreo.
     * @return PayPal_Merchant_AddressVerify New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Merchant/AddressVerify/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddressVerify Choreo.
     *
     * @param PayPal_Merchant_AddressVerify_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_AddressVerify_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_AddressVerify_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Merchant_AddressVerify_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddressVerify Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_AddressVerify_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Merchant_AddressVerify_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddressVerify Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_AddressVerify_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddressVerify Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Merchant_AddressVerify_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddressVerify input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Merchant_AddressVerify_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Merchant_AddressVerify_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Email input for this AddressVerify Choreo.
     *
     * @param string $value (required, string) The email address of a PayPal member to verify.
     * @return PayPal_Merchant_AddressVerify_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this AddressVerify Choreo.
     *
     * @param string $value (required, password) The API Password provided by PayPal.
     * @return PayPal_Merchant_AddressVerify_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PostalCode input for this AddressVerify Choreo.
     *
     * @param string $value (required, string) The postal code to verify.
     * @return PayPal_Merchant_AddressVerify_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the Signature input for this AddressVerify Choreo.
     *
     * @param string $value (required, string) The API Signature provided by PayPal.
     * @return PayPal_Merchant_AddressVerify_Inputs For method chaining.
     */
    public function setSignature($value)
    {
        return $this->set('Signature', $value);
    }

    /**
     * Set the value for the Street input for this AddressVerify Choreo.
     *
     * @param string $value (required, string) The first line of the billing or shipping address to verify.
     * @return PayPal_Merchant_AddressVerify_Inputs For method chaining.
     */
    public function setStreet($value)
    {
        return $this->set('Street', $value);
    }

    /**
     * Set the value for the UseSandbox input for this AddressVerify Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Merchant_AddressVerify_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }

    /**
     * Set the value for the Username input for this AddressVerify Choreo.
     *
     * @param string $value (required, string) The API Username provided by PayPal.
     * @return PayPal_Merchant_AddressVerify_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the AddressVerify Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_AddressVerify_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddressVerify Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddressVerify execution.
     * @param PayPal_Merchant_AddressVerify $choreo The choreography object for this execution.
     * @param PayPal_Merchant_AddressVerify_Inputs|array $inputs (optional) Inputs as PayPal_Merchant_AddressVerify_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Merchant_AddressVerify_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Merchant_AddressVerify $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddressVerify execution.
     *
     * @return PayPal_Merchant_AddressVerify_Results New results object.
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
     * Wraps results in appropriate results class for this AddressVerify execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Merchant_AddressVerify_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Merchant_AddressVerify_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddressVerify Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Merchant_AddressVerify_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddressVerify Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Merchant_AddressVerify_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddressVerify execution.
     *
     * @return string (string) Response from PayPal formatted in name/value pairs.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves details for a specific stored credit card.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Vault_LookupCreditCard extends Temboo_Choreography
{
    /**
     * Retrieves details for a specific stored credit card.
     *
     * @param Temboo_Session $session The session that owns this LookupCreditCard Choreo.
     * @return PayPal_Vault_LookupCreditCard New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/PayPal/Vault/LookupCreditCard/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LookupCreditCard Choreo.
     *
     * @param PayPal_Vault_LookupCreditCard_Inputs|array $inputs (optional) Inputs as PayPal_Vault_LookupCreditCard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Vault_LookupCreditCard_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new PayPal_Vault_LookupCreditCard_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LookupCreditCard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Vault_LookupCreditCard_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new PayPal_Vault_LookupCreditCard_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LookupCreditCard Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Vault_LookupCreditCard_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LookupCreditCard Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return PayPal_Vault_LookupCreditCard_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LookupCreditCard input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return PayPal_Vault_LookupCreditCard_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return PayPal_Vault_LookupCreditCard_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this LookupCreditCard Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved from PayPal. Required unless providing the ClientID and ClientSecret which can be used to generate a new access token.
     * @return PayPal_Vault_LookupCreditCard_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this LookupCreditCard Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Vault_LookupCreditCard_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this LookupCreditCard Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by PayPal. Required unless a valid Access Token is provided.
     * @return PayPal_Vault_LookupCreditCard_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the CreditCardID input for this LookupCreditCard Choreo.
     *
     * @param string $value (required, string) The id of the credit card to retrieve.
     * @return PayPal_Vault_LookupCreditCard_Inputs For method chaining.
     */
    public function setCreditCardID($value)
    {
        return $this->set('CreditCardID', $value);
    }

    /**
     * Set the value for the Scope input for this LookupCreditCard Choreo.
     *
     * @param string $value (optional, string) A space delimited list of resource URL endpoints that the token should have access for. This is only used when providing the ClientID and Client Secret in order to generate a new access token.
     * @return PayPal_Vault_LookupCreditCard_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }

    /**
     * Set the value for the UseSandbox input for this LookupCreditCard Choreo.
     *
     * @param bool $value (optional, boolean) Set to 1 to indicate that you're testing against the PayPal sandbox instead of production. Set to 0 (the default) when moving to production.
     * @return PayPal_Vault_LookupCreditCard_Inputs For method chaining.
     */
    public function setUseSandbox($value)
    {
        return $this->set('UseSandbox', $value);
    }
}


/**
 * Execution object for the LookupCreditCard Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Vault_LookupCreditCard_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LookupCreditCard Choreo.
     *
     * @param Temboo_Session $session The session that owns this LookupCreditCard execution.
     * @param PayPal_Vault_LookupCreditCard $choreo The choreography object for this execution.
     * @param PayPal_Vault_LookupCreditCard_Inputs|array $inputs (optional) Inputs as PayPal_Vault_LookupCreditCard_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return PayPal_Vault_LookupCreditCard_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, PayPal_Vault_LookupCreditCard $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LookupCreditCard execution.
     *
     * @return PayPal_Vault_LookupCreditCard_Results New results object.
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
     * Wraps results in appropriate results class for this LookupCreditCard execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return PayPal_Vault_LookupCreditCard_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new PayPal_Vault_LookupCreditCard_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LookupCreditCard Choreo.
 *
 * @package Temboo
 * @subpackage PayPal
 */
class PayPal_Vault_LookupCreditCard_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LookupCreditCard Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return PayPal_Vault_LookupCreditCard_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this LookupCreditCard execution.
     *
     * @return string (string) The new access token retrieved from PayPal when providing the Client ID and Client Secret.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this LookupCreditCard execution.
     *
     * @return string (json) The response from PayPal.
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
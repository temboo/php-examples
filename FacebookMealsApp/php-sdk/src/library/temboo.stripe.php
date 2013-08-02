<?php

/**
 * Temboo PHP SDK Stripe classes
 *
 * Execute Choreographies from the Temboo Stripe bundle.
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
 * @subpackage Stripe
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves the details of an existing charge.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_RetrieveCharge extends Temboo_Choreography
{
    /**
     * Retrieves the details of an existing charge.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCharge Choreo.
     * @return Stripe_Charges_RetrieveCharge New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Charges/RetrieveCharge/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveCharge Choreo.
     *
     * @param Stripe_Charges_RetrieveCharge_Inputs|array $inputs (optional) Inputs as Stripe_Charges_RetrieveCharge_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_RetrieveCharge_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Charges_RetrieveCharge_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveCharge Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_RetrieveCharge_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Charges_RetrieveCharge_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveCharge Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_RetrieveCharge_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveCharge Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_RetrieveCharge_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveCharge input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Charges_RetrieveCharge_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Charges_RetrieveCharge_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveCharge Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Charges_RetrieveCharge_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ChargeID input for this RetrieveCharge Choreo.
     *
     * @param string $value (required, string) The unique identifier of the charge you want to retrieve
     * @return Stripe_Charges_RetrieveCharge_Inputs For method chaining.
     */
    public function setChargeID($value)
    {
        return $this->set('ChargeID', $value);
    }
}


/**
 * Execution object for the RetrieveCharge Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_RetrieveCharge_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveCharge Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCharge execution.
     * @param Stripe_Charges_RetrieveCharge $choreo The choreography object for this execution.
     * @param Stripe_Charges_RetrieveCharge_Inputs|array $inputs (optional) Inputs as Stripe_Charges_RetrieveCharge_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_RetrieveCharge_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Charges_RetrieveCharge $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveCharge execution.
     *
     * @return Stripe_Charges_RetrieveCharge_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveCharge execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Charges_RetrieveCharge_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Charges_RetrieveCharge_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveCharge Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_RetrieveCharge_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveCharge Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Charges_RetrieveCharge_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveCharge execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A stripe charge
	*/

	public function getCharge() {
		return new Stripe_Charge_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves a card token based on a given id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Tokens_RetrieveCardToken extends Temboo_Choreography
{
    /**
     * Retrieves a card token based on a given id.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCardToken Choreo.
     * @return Stripe_Tokens_RetrieveCardToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Tokens/RetrieveCardToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveCardToken Choreo.
     *
     * @param Stripe_Tokens_RetrieveCardToken_Inputs|array $inputs (optional) Inputs as Stripe_Tokens_RetrieveCardToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Tokens_RetrieveCardToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Tokens_RetrieveCardToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveCardToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Tokens_RetrieveCardToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Tokens_RetrieveCardToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveCardToken Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Tokens_RetrieveCardToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveCardToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Tokens_RetrieveCardToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveCardToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Tokens_RetrieveCardToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Tokens_RetrieveCardToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveCardToken Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Tokens_RetrieveCardToken_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the TokenID input for this RetrieveCardToken Choreo.
     *
     * @param string $value (required, string) The unique identifier of the token you want to retrieve
     * @return Stripe_Tokens_RetrieveCardToken_Inputs For method chaining.
     */
    public function setTokenID($value)
    {
        return $this->set('TokenID', $value);
    }
}


/**
 * Execution object for the RetrieveCardToken Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Tokens_RetrieveCardToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveCardToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCardToken execution.
     * @param Stripe_Tokens_RetrieveCardToken $choreo The choreography object for this execution.
     * @param Stripe_Tokens_RetrieveCardToken_Inputs|array $inputs (optional) Inputs as Stripe_Tokens_RetrieveCardToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Tokens_RetrieveCardToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Tokens_RetrieveCardToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveCardToken execution.
     *
     * @return Stripe_Tokens_RetrieveCardToken_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveCardToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Tokens_RetrieveCardToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Tokens_RetrieveCardToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveCardToken Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Tokens_RetrieveCardToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveCardToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Tokens_RetrieveCardToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveCardToken execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Reference to Stripe Token object
	*/

	public function getToken() {
		return new Stripe_Token_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves a full list of line items contained in an invoice.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveInvoiceLineItems extends Temboo_Choreography
{
    /**
     * Retrieves a full list of line items contained in an invoice.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoiceLineItems Choreo.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Invoices/RetrieveInvoiceLineItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveInvoiceLineItems Choreo.
     *
     * @param Stripe_Invoices_RetrieveInvoiceLineItems_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_RetrieveInvoiceLineItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Invoices_RetrieveInvoiceLineItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveInvoiceLineItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Invoices_RetrieveInvoiceLineItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveInvoiceLineItems Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveInvoiceLineItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveInvoiceLineItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveInvoiceLineItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveInvoiceLineItems Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Count input for this RetrieveInvoiceLineItems Choreo.
     *
     * @param int $value (optional, integer) The number of line items to return
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the CustomerID input for this RetrieveInvoiceLineItems Choreo.
     *
     * @param string $value (optional, string) In the case of upcoming invoices, the customer of the upcoming invoice is required. In other cases it is ignored.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }

    /**
     * Set the value for the InvoiceID input for this RetrieveInvoiceLineItems Choreo.
     *
     * @param string $value (required, string) The id of the invoice containing the line items to return
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Inputs For method chaining.
     */
    public function setInvoiceID($value)
    {
        return $this->set('InvoiceID', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveInvoiceLineItems Choreo.
     *
     * @param int $value (optional, integer) The offset into the list of line items to start returning from, with 0 being the most recent
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the RetrieveInvoiceLineItems Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveInvoiceLineItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveInvoiceLineItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoiceLineItems execution.
     * @param Stripe_Invoices_RetrieveInvoiceLineItems $choreo The choreography object for this execution.
     * @param Stripe_Invoices_RetrieveInvoiceLineItems_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_RetrieveInvoiceLineItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Invoices_RetrieveInvoiceLineItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveInvoiceLineItems execution.
     *
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveInvoiceLineItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Invoices_RetrieveInvoiceLineItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveInvoiceLineItems Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveInvoiceLineItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveInvoiceLineItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Invoices_RetrieveInvoiceLineItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveInvoiceLineItems execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A list of InvoiceItems
	*/

	public function getInvoiceItemList() {
		return new Stripe_InvoiceItemList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Updates the name of an existing plan.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_UpdatePlan extends Temboo_Choreography
{
    /**
     * Updates the name of an existing plan.
     *
     * @param Temboo_Session $session The session that owns this UpdatePlan Choreo.
     * @return Stripe_Plans_UpdatePlan New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Plans/UpdatePlan/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdatePlan Choreo.
     *
     * @param Stripe_Plans_UpdatePlan_Inputs|array $inputs (optional) Inputs as Stripe_Plans_UpdatePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_UpdatePlan_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Plans_UpdatePlan_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdatePlan Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_UpdatePlan_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Plans_UpdatePlan_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdatePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_UpdatePlan_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdatePlan Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_UpdatePlan_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdatePlan input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Plans_UpdatePlan_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Plans_UpdatePlan_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdatePlan Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Plans_UpdatePlan_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the PlanID input for this UpdatePlan Choreo.
     *
     * @param string $value (required, string) The unique identifier of the plan you want to update
     * @return Stripe_Plans_UpdatePlan_Inputs For method chaining.
     */
    public function setPlanID($value)
    {
        return $this->set('PlanID', $value);
    }

    /**
     * Set the value for the PlanName input for this UpdatePlan Choreo.
     *
     * @param string $value (conditional, string) The new name of the plan which will be displayed in the Stripe web interface.
     * @return Stripe_Plans_UpdatePlan_Inputs For method chaining.
     */
    public function setPlanName($value)
    {
        return $this->set('PlanName', $value);
    }
}


/**
 * Execution object for the UpdatePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_UpdatePlan_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdatePlan Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdatePlan execution.
     * @param Stripe_Plans_UpdatePlan $choreo The choreography object for this execution.
     * @param Stripe_Plans_UpdatePlan_Inputs|array $inputs (optional) Inputs as Stripe_Plans_UpdatePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_UpdatePlan_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Plans_UpdatePlan $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdatePlan execution.
     *
     * @return Stripe_Plans_UpdatePlan_Results New results object.
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
     * Wraps results in appropriate results class for this UpdatePlan execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Plans_UpdatePlan_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Plans_UpdatePlan_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdatePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_UpdatePlan_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdatePlan Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Plans_UpdatePlan_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdatePlan execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A subscription plan contains the pricing information for different products and feature levels on your site. For example, you might have a $10/month plan for basic features and a different $20/month plan for premium features.
	*/

	public function getPlan() {
		return new Stripe_Plan_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Creates a new customer record using a Stripe generated token that represents the customer's credit card information.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_CreateCustomerWithToken extends Temboo_Choreography
{
    /**
     * Creates a new customer record using a Stripe generated token that represents the customer's credit card information.
     *
     * @param Temboo_Session $session The session that owns this CreateCustomerWithToken Choreo.
     * @return Stripe_Customers_CreateCustomerWithToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Customers/CreateCustomerWithToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateCustomerWithToken Choreo.
     *
     * @param Stripe_Customers_CreateCustomerWithToken_Inputs|array $inputs (optional) Inputs as Stripe_Customers_CreateCustomerWithToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_CreateCustomerWithToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Customers_CreateCustomerWithToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCustomerWithToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Customers_CreateCustomerWithToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCustomerWithToken Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_CreateCustomerWithToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateCustomerWithToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCustomerWithToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateCustomerWithToken Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccountBalance input for this CreateCustomerWithToken Choreo.
     *
     * @param int $value (optional, integer) The amount in cents for the starting account balance. A negative amount represents a credit that will be used before charging the customer's card; a positive amount will be added to the next invoice.
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setAccountBalance($value)
    {
        return $this->set('AccountBalance', $value);
    }

    /**
     * Set the value for the Coupon input for this CreateCustomerWithToken Choreo.
     *
     * @param string $value (optional, string) If you provide a coupon code, it can be specified here
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setCoupon($value)
    {
        return $this->set('Coupon', $value);
    }

    /**
     * Set the value for the Description input for this CreateCustomerWithToken Choreo.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be associated with the customer object
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Email input for this CreateCustomerWithToken Choreo.
     *
     * @param string $value (optional, string) The customer's email address
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Plan input for this CreateCustomerWithToken Choreo.
     *
     * @param string $value (optional, string) The unique identifier of the plan to subscribe the customer to
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setPlan($value)
    {
        return $this->set('Plan', $value);
    }

    /**
     * Set the value for the Quantity input for this CreateCustomerWithToken Choreo.
     *
     * @param int $value (optional, integer) The quantity you'd like to apply to the subscription you're creating. This parameter applies to the plan amount associated with the customer.
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setQuantity($value)
    {
        return $this->set('Quantity', $value);
    }

    /**
     * Set the value for the Token input for this CreateCustomerWithToken Choreo.
     *
     * @param string $value (conditional, string) The token associated with a set of credit card details
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the TrialEnd input for this CreateCustomerWithToken Choreo.
     *
     * @param string $value (optional, date) Epoch timestamp in seconds for the end of the trial period. The customer won't be charged during the trial period. Timestamp should be in UTC.
     * @return Stripe_Customers_CreateCustomerWithToken_Inputs For method chaining.
     */
    public function setTrialEnd($value)
    {
        return $this->set('TrialEnd', $value);
    }
}


/**
 * Execution object for the CreateCustomerWithToken Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_CreateCustomerWithToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCustomerWithToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateCustomerWithToken execution.
     * @param Stripe_Customers_CreateCustomerWithToken $choreo The choreography object for this execution.
     * @param Stripe_Customers_CreateCustomerWithToken_Inputs|array $inputs (optional) Inputs as Stripe_Customers_CreateCustomerWithToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_CreateCustomerWithToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Customers_CreateCustomerWithToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCustomerWithToken execution.
     *
     * @return Stripe_Customers_CreateCustomerWithToken_Results New results object.
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
     * Wraps results in appropriate results class for this CreateCustomerWithToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Customers_CreateCustomerWithToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Customers_CreateCustomerWithToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateCustomerWithToken Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_CreateCustomerWithToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateCustomerWithToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Customers_CreateCustomerWithToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateCustomerWithToken execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Customer objects allow you to perform recurring charges and track multiple charges that are associated with the same customer. The API allows you to create, delete, and update your customers. You can retrieve individual customers as well as a list of all your customers.
	*/

	public function getCustomer() {
		return new Stripe_Customer_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves a coupon with specified coupon id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_RetrieveCoupon extends Temboo_Choreography
{
    /**
     * Retrieves a coupon with specified coupon id.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCoupon Choreo.
     * @return Stripe_Coupons_RetrieveCoupon New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Coupons/RetrieveCoupon/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveCoupon Choreo.
     *
     * @param Stripe_Coupons_RetrieveCoupon_Inputs|array $inputs (optional) Inputs as Stripe_Coupons_RetrieveCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Coupons_RetrieveCoupon_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Coupons_RetrieveCoupon_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Coupons_RetrieveCoupon_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Coupons_RetrieveCoupon_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveCoupon Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_RetrieveCoupon_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Coupons_RetrieveCoupon_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveCoupon input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Coupons_RetrieveCoupon_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Coupons_RetrieveCoupon_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveCoupon Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Coupons_RetrieveCoupon_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CouponID input for this RetrieveCoupon Choreo.
     *
     * @param string $value (required, string) The unique identifier of the coupon you want to retrieve
     * @return Stripe_Coupons_RetrieveCoupon_Inputs For method chaining.
     */
    public function setCouponID($value)
    {
        return $this->set('CouponID', $value);
    }
}


/**
 * Execution object for the RetrieveCoupon Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_RetrieveCoupon_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveCoupon Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCoupon execution.
     * @param Stripe_Coupons_RetrieveCoupon $choreo The choreography object for this execution.
     * @param Stripe_Coupons_RetrieveCoupon_Inputs|array $inputs (optional) Inputs as Stripe_Coupons_RetrieveCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Coupons_RetrieveCoupon_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Coupons_RetrieveCoupon $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveCoupon execution.
     *
     * @return Stripe_Coupons_RetrieveCoupon_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveCoupon execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Coupons_RetrieveCoupon_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Coupons_RetrieveCoupon_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveCoupon Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_RetrieveCoupon_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveCoupon Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Coupons_RetrieveCoupon_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveCoupon execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A coupon contains information about a percent-off discount you might want to apply to a customer. Coupons only apply to invoices created for recurring subscriptions and invoice items; they do not apply to one-off charges.
	*/

	public function getCoupon() {
		return new Stripe_Coupon_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of all plans. 
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_ListAllPlans extends Temboo_Choreography
{
    /**
     * Returns a list of all plans. 
     *
     * @param Temboo_Session $session The session that owns this ListAllPlans Choreo.
     * @return Stripe_Plans_ListAllPlans New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Plans/ListAllPlans/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllPlans Choreo.
     *
     * @param Stripe_Plans_ListAllPlans_Inputs|array $inputs (optional) Inputs as Stripe_Plans_ListAllPlans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_ListAllPlans_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Plans_ListAllPlans_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllPlans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_ListAllPlans_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Plans_ListAllPlans_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllPlans Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_ListAllPlans_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllPlans Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_ListAllPlans_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllPlans input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Plans_ListAllPlans_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Plans_ListAllPlans_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllPlans Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Plans_ListAllPlans_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllPlans Choreo.
     *
     * @param int $value (optional, integer) The limit of plans to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_Plans_ListAllPlans_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllPlans Choreo.
     *
     * @param int $value (optional, integer) Stripe will return a list of plans starting at the specified offset. Defaults to 0.
     * @return Stripe_Plans_ListAllPlans_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllPlans Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_ListAllPlans_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllPlans Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllPlans execution.
     * @param Stripe_Plans_ListAllPlans $choreo The choreography object for this execution.
     * @param Stripe_Plans_ListAllPlans_Inputs|array $inputs (optional) Inputs as Stripe_Plans_ListAllPlans_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_ListAllPlans_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Plans_ListAllPlans $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllPlans execution.
     *
     * @return Stripe_Plans_ListAllPlans_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllPlans execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Plans_ListAllPlans_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Plans_ListAllPlans_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllPlans Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_ListAllPlans_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllPlans Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Plans_ListAllPlans_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllPlans execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A list of plans
	*/

	public function getPlanList() {
		return new Stripe_PlanList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of all charges or a list of charges for a specified customer.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_ListAllCharges extends Temboo_Choreography
{
    /**
     * Returns a list of all charges or a list of charges for a specified customer.
     *
     * @param Temboo_Session $session The session that owns this ListAllCharges Choreo.
     * @return Stripe_Charges_ListAllCharges New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Charges/ListAllCharges/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllCharges Choreo.
     *
     * @param Stripe_Charges_ListAllCharges_Inputs|array $inputs (optional) Inputs as Stripe_Charges_ListAllCharges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_ListAllCharges_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Charges_ListAllCharges_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllCharges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_ListAllCharges_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Charges_ListAllCharges_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllCharges Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_ListAllCharges_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllCharges Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_ListAllCharges_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllCharges input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Charges_ListAllCharges_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Charges_ListAllCharges_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllCharges Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Charges_ListAllCharges_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllCharges Choreo.
     *
     * @param int $value (optional, integer) The limit of charges to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_Charges_ListAllCharges_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the CustomerID input for this ListAllCharges Choreo.
     *
     * @param string $value (optional, string) The unique identifier of the customer whose charges to return. If not specified, all charges will be returned.
     * @return Stripe_Charges_ListAllCharges_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllCharges Choreo.
     *
     * @param int $value (optional, integer) Stripe will return a list of charges starting at the specified offset. Defaults to 0.
     * @return Stripe_Charges_ListAllCharges_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllCharges Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_ListAllCharges_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllCharges Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllCharges execution.
     * @param Stripe_Charges_ListAllCharges $choreo The choreography object for this execution.
     * @param Stripe_Charges_ListAllCharges_Inputs|array $inputs (optional) Inputs as Stripe_Charges_ListAllCharges_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_ListAllCharges_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Charges_ListAllCharges $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllCharges execution.
     *
     * @return Stripe_Charges_ListAllCharges_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllCharges execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Charges_ListAllCharges_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Charges_ListAllCharges_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllCharges Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_ListAllCharges_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllCharges Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Charges_ListAllCharges_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllCharges execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A list of all charges
	*/

	public function getChargeList() {
		return new Stripe_ChargeList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Creates a coupon that can be redeemed by customers for a discount.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_CreateCoupon extends Temboo_Choreography
{
    /**
     * Creates a coupon that can be redeemed by customers for a discount.
     *
     * @param Temboo_Session $session The session that owns this CreateCoupon Choreo.
     * @return Stripe_Coupons_CreateCoupon New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Coupons/CreateCoupon/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateCoupon Choreo.
     *
     * @param Stripe_Coupons_CreateCoupon_Inputs|array $inputs (optional) Inputs as Stripe_Coupons_CreateCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Coupons_CreateCoupon_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Coupons_CreateCoupon_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Coupons_CreateCoupon_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Coupons_CreateCoupon_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateCoupon Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_CreateCoupon_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Coupons_CreateCoupon_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateCoupon input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Coupons_CreateCoupon_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Coupons_CreateCoupon_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateCoupon Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Coupons_CreateCoupon_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CouponID input for this CreateCoupon Choreo.
     *
     * @param string $value (optional, string) The unique identifier of your choice for the coupon. If not specified, a random code will be generated by Stripe.
     * @return Stripe_Coupons_CreateCoupon_Inputs For method chaining.
     */
    public function setCouponID($value)
    {
        return $this->set('CouponID', $value);
    }

    /**
     * Set the value for the DurationInMonths input for this CreateCoupon Choreo.
     *
     * @param int $value (optional, integer) If Duration is set to 'repeating', specify the number of months the discount will be valid.
     * @return Stripe_Coupons_CreateCoupon_Inputs For method chaining.
     */
    public function setDurationInMonths($value)
    {
        return $this->set('DurationInMonths', $value);
    }

    /**
     * Set the value for the Duration input for this CreateCoupon Choreo.
     *
     * @param string $value (required, string) Indicates how long the discount will be in effect. Valid values are: forever, once, repeating.
     * @return Stripe_Coupons_CreateCoupon_Inputs For method chaining.
     */
    public function setDuration($value)
    {
        return $this->set('Duration', $value);
    }

    /**
     * Set the value for the MaxRedemptions input for this CreateCoupon Choreo.
     *
     * @param int $value (optional, integer) Specify the number times the coupon can be used.
     * @return Stripe_Coupons_CreateCoupon_Inputs For method chaining.
     */
    public function setMaxRedemptions($value)
    {
        return $this->set('MaxRedemptions', $value);
    }

    /**
     * Set the value for the PercentOff input for this CreateCoupon Choreo.
     *
     * @param int $value (required, integer) A integer between 1 and 100 that represents the discount that the coupon will apply when used by a customer
     * @return Stripe_Coupons_CreateCoupon_Inputs For method chaining.
     */
    public function setPercentOff($value)
    {
        return $this->set('PercentOff', $value);
    }

    /**
     * Set the value for the RedeemBy input for this CreateCoupon Choreo.
     *
     * @param string $value (optional, date) An epoch timestamp in seconds representing the the last time at which the coupon can be used. Specify timestamp in UTC.
     * @return Stripe_Coupons_CreateCoupon_Inputs For method chaining.
     */
    public function setRedeemBy($value)
    {
        return $this->set('RedeemBy', $value);
    }
}


/**
 * Execution object for the CreateCoupon Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_CreateCoupon_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateCoupon Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateCoupon execution.
     * @param Stripe_Coupons_CreateCoupon $choreo The choreography object for this execution.
     * @param Stripe_Coupons_CreateCoupon_Inputs|array $inputs (optional) Inputs as Stripe_Coupons_CreateCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Coupons_CreateCoupon_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Coupons_CreateCoupon $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateCoupon execution.
     *
     * @return Stripe_Coupons_CreateCoupon_Results New results object.
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
     * Wraps results in appropriate results class for this CreateCoupon execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Coupons_CreateCoupon_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Coupons_CreateCoupon_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateCoupon Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_CreateCoupon_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateCoupon Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Coupons_CreateCoupon_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateCoupon execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A coupon contains information about a percent-off discount you might want to apply to a customer. Coupons only apply to invoices created for recurring subscriptions and invoice items; they do not apply to one-off charges.
	*/

	public function getCoupon() {
		return new Stripe_Coupon_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Updates an existing invoice.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_UpdateInvoice extends Temboo_Choreography
{
    /**
     * Updates an existing invoice.
     *
     * @param Temboo_Session $session The session that owns this UpdateInvoice Choreo.
     * @return Stripe_Invoices_UpdateInvoice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Invoices/UpdateInvoice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateInvoice Choreo.
     *
     * @param Stripe_Invoices_UpdateInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_UpdateInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_UpdateInvoice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Invoices_UpdateInvoice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_UpdateInvoice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Invoices_UpdateInvoice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_UpdateInvoice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_UpdateInvoice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateInvoice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Invoices_UpdateInvoice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Invoices_UpdateInvoice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateInvoice Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Invoices_UpdateInvoice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Closed input for this UpdateInvoice Choreo.
     *
     * @param bool $value (conditional, boolean) Whether or not the invoice should be closed or not. To close an invoice, set this to "true".
     * @return Stripe_Invoices_UpdateInvoice_Inputs For method chaining.
     */
    public function setClosed($value)
    {
        return $this->set('Closed', $value);
    }

    /**
     * Set the value for the InvoiceID input for this UpdateInvoice Choreo.
     *
     * @param string $value (required, string) The id of the invoice to update.
     * @return Stripe_Invoices_UpdateInvoice_Inputs For method chaining.
     */
    public function setInvoiceID($value)
    {
        return $this->set('InvoiceID', $value);
    }
}


/**
 * Execution object for the UpdateInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_UpdateInvoice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateInvoice Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateInvoice execution.
     * @param Stripe_Invoices_UpdateInvoice $choreo The choreography object for this execution.
     * @param Stripe_Invoices_UpdateInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_UpdateInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_UpdateInvoice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Invoices_UpdateInvoice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateInvoice execution.
     *
     * @return Stripe_Invoices_UpdateInvoice_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateInvoice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Invoices_UpdateInvoice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Invoices_UpdateInvoice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_UpdateInvoice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateInvoice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Invoices_UpdateInvoice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateInvoice execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A reference to the Stripe Invoice object
	*/

	public function getInvoice() {
		return new Stripe_Invoice_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of all customers. 
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_ListAllCustomers extends Temboo_Choreography
{
    /**
     * Returns a list of all customers. 
     *
     * @param Temboo_Session $session The session that owns this ListAllCustomers Choreo.
     * @return Stripe_Customers_ListAllCustomers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Customers/ListAllCustomers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllCustomers Choreo.
     *
     * @param Stripe_Customers_ListAllCustomers_Inputs|array $inputs (optional) Inputs as Stripe_Customers_ListAllCustomers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_ListAllCustomers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Customers_ListAllCustomers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllCustomers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_ListAllCustomers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Customers_ListAllCustomers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllCustomers Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_ListAllCustomers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllCustomers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_ListAllCustomers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllCustomers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Customers_ListAllCustomers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Customers_ListAllCustomers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllCustomers Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Customers_ListAllCustomers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllCustomers Choreo.
     *
     * @param int $value (optional, integer) The limit of customers to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_Customers_ListAllCustomers_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllCustomers Choreo.
     *
     * @param int $value (optional, integer) Stripe will return a list of customers starting at the specified offset. Defaults to 0.
     * @return Stripe_Customers_ListAllCustomers_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllCustomers Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_ListAllCustomers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllCustomers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllCustomers execution.
     * @param Stripe_Customers_ListAllCustomers $choreo The choreography object for this execution.
     * @param Stripe_Customers_ListAllCustomers_Inputs|array $inputs (optional) Inputs as Stripe_Customers_ListAllCustomers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_ListAllCustomers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Customers_ListAllCustomers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllCustomers execution.
     *
     * @return Stripe_Customers_ListAllCustomers_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllCustomers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Customers_ListAllCustomers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Customers_ListAllCustomers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllCustomers Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_ListAllCustomers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllCustomers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Customers_ListAllCustomers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllCustomers execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A list of your customers
	*/

	public function getCustomerList() {
		return new Stripe_CustomerList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Deletes a specified customer record.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_DeleteCustomer extends Temboo_Choreography
{
    /**
     * Deletes a specified customer record.
     *
     * @param Temboo_Session $session The session that owns this DeleteCustomer Choreo.
     * @return Stripe_Customers_DeleteCustomer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Customers/DeleteCustomer/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteCustomer Choreo.
     *
     * @param Stripe_Customers_DeleteCustomer_Inputs|array $inputs (optional) Inputs as Stripe_Customers_DeleteCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_DeleteCustomer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Customers_DeleteCustomer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteCustomer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_DeleteCustomer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Customers_DeleteCustomer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_DeleteCustomer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteCustomer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_DeleteCustomer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteCustomer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Customers_DeleteCustomer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Customers_DeleteCustomer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteCustomer Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Customers_DeleteCustomer_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CustomerID input for this DeleteCustomer Choreo.
     *
     * @param string $value (required, string) The unique identifier of the customer you want to delete
     * @return Stripe_Customers_DeleteCustomer_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }
}


/**
 * Execution object for the DeleteCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_DeleteCustomer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteCustomer Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteCustomer execution.
     * @param Stripe_Customers_DeleteCustomer $choreo The choreography object for this execution.
     * @param Stripe_Customers_DeleteCustomer_Inputs|array $inputs (optional) Inputs as Stripe_Customers_DeleteCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_DeleteCustomer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Customers_DeleteCustomer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteCustomer execution.
     *
     * @return Stripe_Customers_DeleteCustomer_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteCustomer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Customers_DeleteCustomer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Customers_DeleteCustomer_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_DeleteCustomer_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteCustomer Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Customers_DeleteCustomer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteCustomer execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	*/

	public function getDeleteResults() {
		return new Stripe_DeleteResults_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Creates a subscription plan
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_CreatePlan extends Temboo_Choreography
{
    /**
     * Creates a subscription plan
     *
     * @param Temboo_Session $session The session that owns this CreatePlan Choreo.
     * @return Stripe_Plans_CreatePlan New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Plans/CreatePlan/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreatePlan Choreo.
     *
     * @param Stripe_Plans_CreatePlan_Inputs|array $inputs (optional) Inputs as Stripe_Plans_CreatePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_CreatePlan_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Plans_CreatePlan_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreatePlan Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_CreatePlan_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Plans_CreatePlan_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreatePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_CreatePlan_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreatePlan Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_CreatePlan_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreatePlan input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Plans_CreatePlan_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Plans_CreatePlan_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreatePlan Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Plans_CreatePlan_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Amount input for this CreatePlan Choreo.
     *
     * @param int $value (required, integer) The amount in cents to charge on a recurring basis for subscribers of this plan
     * @return Stripe_Plans_CreatePlan_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this CreatePlan Choreo.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_Plans_CreatePlan_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the Interval input for this CreatePlan Choreo.
     *
     * @param string $value (required, string) Indicates billing frequency. Valid values are: month or year.
     * @return Stripe_Plans_CreatePlan_Inputs For method chaining.
     */
    public function setInterval($value)
    {
        return $this->set('Interval', $value);
    }

    /**
     * Set the value for the PlanID input for this CreatePlan Choreo.
     *
     * @param string $value (required, string) The unique identifier of the plan you want to create
     * @return Stripe_Plans_CreatePlan_Inputs For method chaining.
     */
    public function setPlanID($value)
    {
        return $this->set('PlanID', $value);
    }

    /**
     * Set the value for the PlanName input for this CreatePlan Choreo.
     *
     * @param string $value (required, string) The name of the plan which will be displayed in the Stripe web interface.
     * @return Stripe_Plans_CreatePlan_Inputs For method chaining.
     */
    public function setPlanName($value)
    {
        return $this->set('PlanName', $value);
    }

    /**
     * Set the value for the TrialPeriodDays input for this CreatePlan Choreo.
     *
     * @param int $value (optional, integer) The number of days in a trial period (customer will not be billed until the trial period is over)
     * @return Stripe_Plans_CreatePlan_Inputs For method chaining.
     */
    public function setTrialPeriodDays($value)
    {
        return $this->set('TrialPeriodDays', $value);
    }
}


/**
 * Execution object for the CreatePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_CreatePlan_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreatePlan Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreatePlan execution.
     * @param Stripe_Plans_CreatePlan $choreo The choreography object for this execution.
     * @param Stripe_Plans_CreatePlan_Inputs|array $inputs (optional) Inputs as Stripe_Plans_CreatePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_CreatePlan_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Plans_CreatePlan $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreatePlan execution.
     *
     * @return Stripe_Plans_CreatePlan_Results New results object.
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
     * Wraps results in appropriate results class for this CreatePlan execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Plans_CreatePlan_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Plans_CreatePlan_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreatePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_CreatePlan_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreatePlan Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Plans_CreatePlan_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreatePlan execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A subscription plan contains the pricing information for different products and feature levels on your site. For example, you might have a $10/month plan for basic features and a different $20/month plan for premium features.
	*/

	public function getPlan() {
		return new Stripe_Plan_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Creates a new invoice for a customer.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_CreateInvoice extends Temboo_Choreography
{
    /**
     * Creates a new invoice for a customer.
     *
     * @param Temboo_Session $session The session that owns this CreateInvoice Choreo.
     * @return Stripe_Invoices_CreateInvoice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Invoices/CreateInvoice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateInvoice Choreo.
     *
     * @param Stripe_Invoices_CreateInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_CreateInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_CreateInvoice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Invoices_CreateInvoice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_CreateInvoice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Invoices_CreateInvoice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_CreateInvoice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_CreateInvoice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateInvoice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Invoices_CreateInvoice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Invoices_CreateInvoice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateInvoice Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Invoices_CreateInvoice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CustomerID input for this CreateInvoice Choreo.
     *
     * @param string $value (required, string) The id of the customer to create an invoice for.
     * @return Stripe_Invoices_CreateInvoice_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }
}


/**
 * Execution object for the CreateInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_CreateInvoice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateInvoice Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateInvoice execution.
     * @param Stripe_Invoices_CreateInvoice $choreo The choreography object for this execution.
     * @param Stripe_Invoices_CreateInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_CreateInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_CreateInvoice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Invoices_CreateInvoice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateInvoice execution.
     *
     * @return Stripe_Invoices_CreateInvoice_Results New results object.
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
     * Wraps results in appropriate results class for this CreateInvoice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Invoices_CreateInvoice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Invoices_CreateInvoice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_CreateInvoice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateInvoice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Invoices_CreateInvoice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateInvoice execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	a reference to a Stripe Invoice object
	*/

	public function getInvoice() {
		return new Stripe_Invoice_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of all invoices or a list of invoices for a specified customer.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_ListAllInvoices extends Temboo_Choreography
{
    /**
     * Returns a list of all invoices or a list of invoices for a specified customer.
     *
     * @param Temboo_Session $session The session that owns this ListAllInvoices Choreo.
     * @return Stripe_Invoices_ListAllInvoices New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Invoices/ListAllInvoices/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllInvoices Choreo.
     *
     * @param Stripe_Invoices_ListAllInvoices_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_ListAllInvoices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_ListAllInvoices_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Invoices_ListAllInvoices_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllInvoices Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_ListAllInvoices_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Invoices_ListAllInvoices_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllInvoices Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_ListAllInvoices_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllInvoices Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_ListAllInvoices_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllInvoices input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Invoices_ListAllInvoices_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Invoices_ListAllInvoices_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllInvoices Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Invoices_ListAllInvoices_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllInvoices Choreo.
     *
     * @param int $value (optional, integer) The limit of invoices to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_Invoices_ListAllInvoices_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the CustomerID input for this ListAllInvoices Choreo.
     *
     * @param string $value (optional, string) The unique identifier of the customer whose invoice to return. If not specified, all invoices will be returned.
     * @return Stripe_Invoices_ListAllInvoices_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllInvoices Choreo.
     *
     * @param int $value (optional, integer) Stripe will return a list of invoices starting at the specified offset. Defaults to 0.
     * @return Stripe_Invoices_ListAllInvoices_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllInvoices Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_ListAllInvoices_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllInvoices Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllInvoices execution.
     * @param Stripe_Invoices_ListAllInvoices $choreo The choreography object for this execution.
     * @param Stripe_Invoices_ListAllInvoices_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_ListAllInvoices_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_ListAllInvoices_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Invoices_ListAllInvoices $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllInvoices execution.
     *
     * @return Stripe_Invoices_ListAllInvoices_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllInvoices execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Invoices_ListAllInvoices_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Invoices_ListAllInvoices_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllInvoices Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_ListAllInvoices_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllInvoices Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Invoices_ListAllInvoices_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllInvoices execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A list of invoices
	*/

	public function getInvoiceList() {
		return new Stripe_InvoiceList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves plan details with a specified plan id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_RetrievePlan extends Temboo_Choreography
{
    /**
     * Retrieves plan details with a specified plan id.
     *
     * @param Temboo_Session $session The session that owns this RetrievePlan Choreo.
     * @return Stripe_Plans_RetrievePlan New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Plans/RetrievePlan/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrievePlan Choreo.
     *
     * @param Stripe_Plans_RetrievePlan_Inputs|array $inputs (optional) Inputs as Stripe_Plans_RetrievePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_RetrievePlan_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Plans_RetrievePlan_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrievePlan Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_RetrievePlan_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Plans_RetrievePlan_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrievePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_RetrievePlan_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrievePlan Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_RetrievePlan_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrievePlan input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Plans_RetrievePlan_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Plans_RetrievePlan_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrievePlan Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Plans_RetrievePlan_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the PlanID input for this RetrievePlan Choreo.
     *
     * @param string $value (required, string) The unique identifier of the plan you want to retrieve
     * @return Stripe_Plans_RetrievePlan_Inputs For method chaining.
     */
    public function setPlanID($value)
    {
        return $this->set('PlanID', $value);
    }
}


/**
 * Execution object for the RetrievePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_RetrievePlan_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrievePlan Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrievePlan execution.
     * @param Stripe_Plans_RetrievePlan $choreo The choreography object for this execution.
     * @param Stripe_Plans_RetrievePlan_Inputs|array $inputs (optional) Inputs as Stripe_Plans_RetrievePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_RetrievePlan_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Plans_RetrievePlan $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrievePlan execution.
     *
     * @return Stripe_Plans_RetrievePlan_Results New results object.
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
     * Wraps results in appropriate results class for this RetrievePlan execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Plans_RetrievePlan_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Plans_RetrievePlan_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrievePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_RetrievePlan_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrievePlan Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Plans_RetrievePlan_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrievePlan execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A subscription plan contains the pricing information for different products and feature levels on your site. For example, you might have a $10/month plan for basic features and a different $20/month plan for premium features.
	*/

	public function getPlan() {
		return new Stripe_Plan_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of events that have happened in your account.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Events_ListAllEvents extends Temboo_Choreography
{
    /**
     * Returns a list of events that have happened in your account.
     *
     * @param Temboo_Session $session The session that owns this ListAllEvents Choreo.
     * @return Stripe_Events_ListAllEvents New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Events/ListAllEvents/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllEvents Choreo.
     *
     * @param Stripe_Events_ListAllEvents_Inputs|array $inputs (optional) Inputs as Stripe_Events_ListAllEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Events_ListAllEvents_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Events_ListAllEvents_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Events_ListAllEvents_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Events_ListAllEvents_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllEvents Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Events_ListAllEvents_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllEvents Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Events_ListAllEvents_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllEvents input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllEvents Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllEvents Choreo.
     *
     * @param int $value (optional, integer) A limit on the number of events to be returned. Count can range between 1 and 100 items.
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Created input for this ListAllEvents Choreo.
     *
     * @param string $value (optional, date) Filters the result based on the event created date (a UTC timestamp).
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setCreated($value)
    {
        return $this->set('Created', $value);
    }

    /**
     * Set the value for the GreaterThanEqualTo input for this ListAllEvents Choreo.
     *
     * @param string $value (optional, date) Returns events that have been created after or equal to this UTC timestamp.
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setGreaterThanEqualTo($value)
    {
        return $this->set('GreaterThanEqualTo', $value);
    }

    /**
     * Set the value for the GreaterThan input for this ListAllEvents Choreo.
     *
     * @param string $value (optional, date) Returns events that have been created after this UTC timestamp.
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setGreaterThan($value)
    {
        return $this->set('GreaterThan', $value);
    }

    /**
     * Set the value for the LessThanEqualTo input for this ListAllEvents Choreo.
     *
     * @param string $value (optional, date) Return events that were created before or equal to this UTC timestamp.
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setLessThanEqualTo($value)
    {
        return $this->set('LessThanEqualTo', $value);
    }

    /**
     * Set the value for the LessThan input for this ListAllEvents Choreo.
     *
     * @param string $value (optional, date) Return events that were created before this UTC timestamp.
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setLessThan($value)
    {
        return $this->set('LessThan', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllEvents Choreo.
     *
     * @param int $value (optional, integer) An offset into your events array. The API will return the requested number of events starting at that offset.
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the Type input for this ListAllEvents Choreo.
     *
     * @param string $value (optional, string) A string containing a specific event name, or group of events using * as a wildcard. This will return a filtered result including only events with a matching event property.
     * @return Stripe_Events_ListAllEvents_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the ListAllEvents Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Events_ListAllEvents_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllEvents Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllEvents execution.
     * @param Stripe_Events_ListAllEvents $choreo The choreography object for this execution.
     * @param Stripe_Events_ListAllEvents_Inputs|array $inputs (optional) Inputs as Stripe_Events_ListAllEvents_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Events_ListAllEvents_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Events_ListAllEvents $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllEvents execution.
     *
     * @return Stripe_Events_ListAllEvents_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllEvents execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Events_ListAllEvents_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Events_ListAllEvents_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllEvents Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Events_ListAllEvents_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllEvents Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Events_ListAllEvents_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllEvents execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a a list of your coupons.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_ListAllCoupons extends Temboo_Choreography
{
    /**
     * Retrieves a a list of your coupons.
     *
     * @param Temboo_Session $session The session that owns this ListAllCoupons Choreo.
     * @return Stripe_Coupons_ListAllCoupons New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Coupons/ListAllCoupons/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllCoupons Choreo.
     *
     * @param Stripe_Coupons_ListAllCoupons_Inputs|array $inputs (optional) Inputs as Stripe_Coupons_ListAllCoupons_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Coupons_ListAllCoupons_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Coupons_ListAllCoupons_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllCoupons Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Coupons_ListAllCoupons_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Coupons_ListAllCoupons_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllCoupons Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_ListAllCoupons_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllCoupons Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Coupons_ListAllCoupons_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllCoupons input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Coupons_ListAllCoupons_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Coupons_ListAllCoupons_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllCoupons Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Coupons_ListAllCoupons_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllCoupons Choreo.
     *
     * @param int $value (optional, integer) A limit on the number of coupons to be returned. Valid values are 1 through 100.
     * @return Stripe_Coupons_ListAllCoupons_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllCoupons Choreo.
     *
     * @param int $value (optional, integer) An offset into your coupons array. The API will return the requested number of coupons starting at that the specified offset.
     * @return Stripe_Coupons_ListAllCoupons_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllCoupons Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_ListAllCoupons_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllCoupons Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllCoupons execution.
     * @param Stripe_Coupons_ListAllCoupons $choreo The choreography object for this execution.
     * @param Stripe_Coupons_ListAllCoupons_Inputs|array $inputs (optional) Inputs as Stripe_Coupons_ListAllCoupons_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Coupons_ListAllCoupons_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Coupons_ListAllCoupons $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllCoupons execution.
     *
     * @return Stripe_Coupons_ListAllCoupons_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllCoupons execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Coupons_ListAllCoupons_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Coupons_ListAllCoupons_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllCoupons Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_ListAllCoupons_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllCoupons Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Coupons_ListAllCoupons_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllCoupons execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	an array of Coupons
	*/

	public function getCouponList() {
		return new Stripe_CouponList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Subscribes a customer to a specified plan.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Subscriptions_UpdateSubscription extends Temboo_Choreography
{
    /**
     * Subscribes a customer to a specified plan.
     *
     * @param Temboo_Session $session The session that owns this UpdateSubscription Choreo.
     * @return Stripe_Subscriptions_UpdateSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Subscriptions/UpdateSubscription/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateSubscription Choreo.
     *
     * @param Stripe_Subscriptions_UpdateSubscription_Inputs|array $inputs (optional) Inputs as Stripe_Subscriptions_UpdateSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Subscriptions_UpdateSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Subscriptions_UpdateSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Subscriptions_UpdateSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Subscriptions_UpdateSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateSubscription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateSubscription Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Coupon input for this UpdateSubscription Choreo.
     *
     * @param string $value (optional, string) If you provide a coupon code, it can be specified here
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs For method chaining.
     */
    public function setCoupon($value)
    {
        return $this->set('Coupon', $value);
    }

    /**
     * Set the value for the CustomerID input for this UpdateSubscription Choreo.
     *
     * @param string $value (required, string) The unique identifier of the customer you want to subscribe to a plan
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }

    /**
     * Set the value for the Plan input for this UpdateSubscription Choreo.
     *
     * @param string $value (required, string) The unique identifier of the plan to subscribe the customer to
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs For method chaining.
     */
    public function setPlan($value)
    {
        return $this->set('Plan', $value);
    }

    /**
     * Set the value for the Prorate input for this UpdateSubscription Choreo.
     *
     * @param bool $value (optional, boolean) When set to 1, Stripe will prorate switching plans during a billing cycle. When set to 0, this feature is disabled. Defaults to 1.
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs For method chaining.
     */
    public function setProrate($value)
    {
        return $this->set('Prorate', $value);
    }

    /**
     * Set the value for the Token input for this UpdateSubscription Choreo.
     *
     * @param string $value (optional, string) The token associated with a set of credit card details. This can be used as an alternative to specifying credit card details.
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the TrialEnd input for this UpdateSubscription Choreo.
     *
     * @param string $value (optional, date) A timestamp representing the end of the trial period in UTC. The customer will not be charged during the trial period.
     * @return Stripe_Subscriptions_UpdateSubscription_Inputs For method chaining.
     */
    public function setTrialEnd($value)
    {
        return $this->set('TrialEnd', $value);
    }
}


/**
 * Execution object for the UpdateSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Subscriptions_UpdateSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateSubscription Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateSubscription execution.
     * @param Stripe_Subscriptions_UpdateSubscription $choreo The choreography object for this execution.
     * @param Stripe_Subscriptions_UpdateSubscription_Inputs|array $inputs (optional) Inputs as Stripe_Subscriptions_UpdateSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Subscriptions_UpdateSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Subscriptions_UpdateSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateSubscription execution.
     *
     * @return Stripe_Subscriptions_UpdateSubscription_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateSubscription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Subscriptions_UpdateSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Subscriptions_UpdateSubscription_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Subscriptions_UpdateSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateSubscription Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Subscriptions_UpdateSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateSubscription execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Subscriptions allow you to charge a customer's card on a recurring basis. A subscription ties a customer to a particular plan you've created.
	*/

	public function getSubscription() {
		return new Stripe_Subscription_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Creates a new charge object in order to charge a credit card for an existing customer.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_CreateNewChargeForExistingCustomer extends Temboo_Choreography
{
    /**
     * Creates a new charge object in order to charge a credit card for an existing customer.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeForExistingCustomer Choreo.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Charges/CreateNewChargeForExistingCustomer/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateNewChargeForExistingCustomer Choreo.
     *
     * @param Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs|array $inputs (optional) Inputs as Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Charges_CreateNewChargeForExistingCustomer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateNewChargeForExistingCustomer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateNewChargeForExistingCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateNewChargeForExistingCustomer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateNewChargeForExistingCustomer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateNewChargeForExistingCustomer Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Amount input for this CreateNewChargeForExistingCustomer Choreo.
     *
     * @param int $value (required, integer) The amount to charge a customer in cents
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this CreateNewChargeForExistingCustomer Choreo.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the CustomerID input for this CreateNewChargeForExistingCustomer Choreo.
     *
     * @param string $value (required, string) The id for the customer to charge
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }

    /**
     * Set the value for the Description input for this CreateNewChargeForExistingCustomer Choreo.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be associated with the charge as a description
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }
}


/**
 * Execution object for the CreateNewChargeForExistingCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_CreateNewChargeForExistingCustomer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateNewChargeForExistingCustomer Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeForExistingCustomer execution.
     * @param Stripe_Charges_CreateNewChargeForExistingCustomer $choreo The choreography object for this execution.
     * @param Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs|array $inputs (optional) Inputs as Stripe_Charges_CreateNewChargeForExistingCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Charges_CreateNewChargeForExistingCustomer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateNewChargeForExistingCustomer execution.
     *
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Results New results object.
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
     * Wraps results in appropriate results class for this CreateNewChargeForExistingCustomer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Charges_CreateNewChargeForExistingCustomer_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateNewChargeForExistingCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_CreateNewChargeForExistingCustomer_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateNewChargeForExistingCustomer Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Charges_CreateNewChargeForExistingCustomer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateNewChargeForExistingCustomer execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	To charge a credit or a debit card, you create a new charge object. You can retrieve and refund individual charges as well as list all charges. Charges are identified by a unique random ID.
	*/

	public function getCharge() {
		return new Stripe_Charge_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Returns a list of all invoice items or a list of invoice items for a specified customer.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_ListAllInvoiceItems extends Temboo_Choreography
{
    /**
     * Returns a list of all invoice items or a list of invoice items for a specified customer.
     *
     * @param Temboo_Session $session The session that owns this ListAllInvoiceItems Choreo.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/InvoiceItems/ListAllInvoiceItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllInvoiceItems Choreo.
     *
     * @param Stripe_InvoiceItems_ListAllInvoiceItems_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_ListAllInvoiceItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_InvoiceItems_ListAllInvoiceItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllInvoiceItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_InvoiceItems_ListAllInvoiceItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllInvoiceItems Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_ListAllInvoiceItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllInvoiceItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllInvoiceItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllInvoiceItems Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Count input for this ListAllInvoiceItems Choreo.
     *
     * @param int $value (optional, integer) The limit of invoice items to be returned. Can range from 1 to 100. Defaults to 10.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the CustomerID input for this ListAllInvoiceItems Choreo.
     *
     * @param string $value (optional, string) The unique identifier of the customer whose invoice items to return. If not specified, all invoice items will be returned.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }

    /**
     * Set the value for the Offset input for this ListAllInvoiceItems Choreo.
     *
     * @param int $value (optional, integer) Stripe will return a list of invoice items starting at the specified offset. Defaults to 0.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }
}


/**
 * Execution object for the ListAllInvoiceItems Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_ListAllInvoiceItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllInvoiceItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllInvoiceItems execution.
     * @param Stripe_InvoiceItems_ListAllInvoiceItems $choreo The choreography object for this execution.
     * @param Stripe_InvoiceItems_ListAllInvoiceItems_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_ListAllInvoiceItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_InvoiceItems_ListAllInvoiceItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllInvoiceItems execution.
     *
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllInvoiceItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_InvoiceItems_ListAllInvoiceItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllInvoiceItems Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_ListAllInvoiceItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllInvoiceItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_InvoiceItems_ListAllInvoiceItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllInvoiceItems execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A list of InvoiceItems
	*/

	public function getInvoiceItemList() {
		return new Stripe_InvoiceItemList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Updates the amount or description of an existing invoice item.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_UpdateInvoiceItem extends Temboo_Choreography
{
    /**
     * Updates the amount or description of an existing invoice item.
     *
     * @param Temboo_Session $session The session that owns this UpdateInvoiceItem Choreo.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/InvoiceItems/UpdateInvoiceItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateInvoiceItem Choreo.
     *
     * @param Stripe_InvoiceItems_UpdateInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_UpdateInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_InvoiceItems_UpdateInvoiceItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateInvoiceItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_InvoiceItems_UpdateInvoiceItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_UpdateInvoiceItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateInvoiceItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateInvoiceItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateInvoiceItem Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Amount input for this UpdateInvoiceItem Choreo.
     *
     * @param int $value (required, integer) The amount in cents of the charge to be included in the customer's next invoice
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this UpdateInvoiceItem Choreo.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the Description input for this UpdateInvoiceItem Choreo.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be included with the invoice item
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the InvoiceItemID input for this UpdateInvoiceItem Choreo.
     *
     * @param string $value (required, string) The unique identifier of the invoice item you want to update
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Inputs For method chaining.
     */
    public function setInvoiceItemID($value)
    {
        return $this->set('InvoiceItemID', $value);
    }
}


/**
 * Execution object for the UpdateInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_UpdateInvoiceItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateInvoiceItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateInvoiceItem execution.
     * @param Stripe_InvoiceItems_UpdateInvoiceItem $choreo The choreography object for this execution.
     * @param Stripe_InvoiceItems_UpdateInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_UpdateInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_InvoiceItems_UpdateInvoiceItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateInvoiceItem execution.
     *
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateInvoiceItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_InvoiceItems_UpdateInvoiceItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_UpdateInvoiceItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateInvoiceItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_InvoiceItems_UpdateInvoiceItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateInvoiceItem execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Sometimes you want to add a charge or credit to a customer but only actually charge the customer's card at the end of a regular billing cycle. This is useful for combining several charges to minimize per-transaction fees or having Stripe tabulate your usage-based billing totals.
	*/

	public function getInvoiceItem() {
		return new Stripe_InvoiceItem_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves the details of an existing customer record.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_RetrieveCustomer extends Temboo_Choreography
{
    /**
     * Retrieves the details of an existing customer record.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCustomer Choreo.
     * @return Stripe_Customers_RetrieveCustomer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Customers/RetrieveCustomer/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveCustomer Choreo.
     *
     * @param Stripe_Customers_RetrieveCustomer_Inputs|array $inputs (optional) Inputs as Stripe_Customers_RetrieveCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_RetrieveCustomer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Customers_RetrieveCustomer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveCustomer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_RetrieveCustomer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Customers_RetrieveCustomer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_RetrieveCustomer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveCustomer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_RetrieveCustomer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveCustomer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Customers_RetrieveCustomer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Customers_RetrieveCustomer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveCustomer Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Customers_RetrieveCustomer_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CustomerID input for this RetrieveCustomer Choreo.
     *
     * @param string $value (required, string) The unique identifier of the customer you want to retrieve
     * @return Stripe_Customers_RetrieveCustomer_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }
}


/**
 * Execution object for the RetrieveCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_RetrieveCustomer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveCustomer Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveCustomer execution.
     * @param Stripe_Customers_RetrieveCustomer $choreo The choreography object for this execution.
     * @param Stripe_Customers_RetrieveCustomer_Inputs|array $inputs (optional) Inputs as Stripe_Customers_RetrieveCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_RetrieveCustomer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Customers_RetrieveCustomer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveCustomer execution.
     *
     * @return Stripe_Customers_RetrieveCustomer_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveCustomer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Customers_RetrieveCustomer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Customers_RetrieveCustomer_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_RetrieveCustomer_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveCustomer Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Customers_RetrieveCustomer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveCustomer execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Customer objects allow you to perform recurring charges and track multiple charges that are associated with the same customer. The API allows you to create, delete, and update your customers. You can retrieve individual customers as well as a list of all your customers.
	*/

	public function getCustomer() {
		return new Stripe_Customer_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Issues a refund of an existing credit card charge.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_RefundCharge extends Temboo_Choreography
{
    /**
     * Issues a refund of an existing credit card charge.
     *
     * @param Temboo_Session $session The session that owns this RefundCharge Choreo.
     * @return Stripe_Charges_RefundCharge New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Charges/RefundCharge/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RefundCharge Choreo.
     *
     * @param Stripe_Charges_RefundCharge_Inputs|array $inputs (optional) Inputs as Stripe_Charges_RefundCharge_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_RefundCharge_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Charges_RefundCharge_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RefundCharge Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_RefundCharge_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Charges_RefundCharge_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RefundCharge Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_RefundCharge_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RefundCharge Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_RefundCharge_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RefundCharge input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Charges_RefundCharge_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Charges_RefundCharge_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RefundCharge Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Charges_RefundCharge_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Amount input for this RefundCharge Choreo.
     *
     * @param int $value (optional, integer) The amount to refund to the customer in cents. When left empty, the entire charge is refunded.
     * @return Stripe_Charges_RefundCharge_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the ChargeID input for this RefundCharge Choreo.
     *
     * @param string $value (required, string) The unique identifier of the charge to be refunded
     * @return Stripe_Charges_RefundCharge_Inputs For method chaining.
     */
    public function setChargeID($value)
    {
        return $this->set('ChargeID', $value);
    }
}


/**
 * Execution object for the RefundCharge Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_RefundCharge_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RefundCharge Choreo.
     *
     * @param Temboo_Session $session The session that owns this RefundCharge execution.
     * @param Stripe_Charges_RefundCharge $choreo The choreography object for this execution.
     * @param Stripe_Charges_RefundCharge_Inputs|array $inputs (optional) Inputs as Stripe_Charges_RefundCharge_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_RefundCharge_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Charges_RefundCharge $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RefundCharge execution.
     *
     * @return Stripe_Charges_RefundCharge_Results New results object.
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
     * Wraps results in appropriate results class for this RefundCharge execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Charges_RefundCharge_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Charges_RefundCharge_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RefundCharge Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_RefundCharge_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RefundCharge Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Charges_RefundCharge_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RefundCharge execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	To charge a credit or a debit card, you create a new charge object. You can retrieve and refund individual charges as well as list all charges. Charges are identified by a unique random ID.
	*/

	public function getCharge() {
		return new Stripe_Charge_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves invoice items with a specified id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_RetrieveInvoiceItem extends Temboo_Choreography
{
    /**
     * Retrieves invoice items with a specified id.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoiceItem Choreo.
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/InvoiceItems/RetrieveInvoiceItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveInvoiceItem Choreo.
     *
     * @param Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_InvoiceItems_RetrieveInvoiceItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveInvoiceItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveInvoiceItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveInvoiceItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveInvoiceItem Choreo.
     *
     * @param string $value (required, string) The secret API Key provided by Stripe
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the InvoiceItemID input for this RetrieveInvoiceItem Choreo.
     *
     * @param string $value (required, string) The unique identifier of the invoice item you want to retrieve
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs For method chaining.
     */
    public function setInvoiceItemID($value)
    {
        return $this->set('InvoiceItemID', $value);
    }
}


/**
 * Execution object for the RetrieveInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_RetrieveInvoiceItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveInvoiceItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoiceItem execution.
     * @param Stripe_InvoiceItems_RetrieveInvoiceItem $choreo The choreography object for this execution.
     * @param Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_RetrieveInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_InvoiceItems_RetrieveInvoiceItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveInvoiceItem execution.
     *
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveInvoiceItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_InvoiceItems_RetrieveInvoiceItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_RetrieveInvoiceItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveInvoiceItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_InvoiceItems_RetrieveInvoiceItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveInvoiceItem execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Sometimes you want to add a charge or credit to a customer but only actually charge the customer's card at the end of a regular billing cycle. This is useful for combining several charges to minimize per-transaction fees or having Stripe tabulate your usage-based billing totals.
	*/

	public function getInvoiceItem() {
		return new Stripe_InvoiceItem_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves the details of an event.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Events_RetrieveEvent extends Temboo_Choreography
{
    /**
     * Retrieves the details of an event.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEvent Choreo.
     * @return Stripe_Events_RetrieveEvent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Events/RetrieveEvent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEvent Choreo.
     *
     * @param Stripe_Events_RetrieveEvent_Inputs|array $inputs (optional) Inputs as Stripe_Events_RetrieveEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Events_RetrieveEvent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Events_RetrieveEvent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Events_RetrieveEvent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Events_RetrieveEvent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEvent Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Events_RetrieveEvent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Events_RetrieveEvent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEvent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Events_RetrieveEvent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Events_RetrieveEvent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveEvent Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Events_RetrieveEvent_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EventID input for this RetrieveEvent Choreo.
     *
     * @param string $value (required, string) The id of the event to return.
     * @return Stripe_Events_RetrieveEvent_Inputs For method chaining.
     */
    public function setEventID($value)
    {
        return $this->set('EventID', $value);
    }
}


/**
 * Execution object for the RetrieveEvent Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Events_RetrieveEvent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEvent Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEvent execution.
     * @param Stripe_Events_RetrieveEvent $choreo The choreography object for this execution.
     * @param Stripe_Events_RetrieveEvent_Inputs|array $inputs (optional) Inputs as Stripe_Events_RetrieveEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Events_RetrieveEvent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Events_RetrieveEvent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEvent execution.
     *
     * @return Stripe_Events_RetrieveEvent_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEvent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Events_RetrieveEvent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Events_RetrieveEvent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEvent Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Events_RetrieveEvent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEvent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Events_RetrieveEvent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEvent execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows your application to attempt to collect payment on an invoice outside of the normal recurring payment schedule.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_PayInvoice extends Temboo_Choreography
{
    /**
     * Allows your application to attempt to collect payment on an invoice outside of the normal recurring payment schedule.
     *
     * @param Temboo_Session $session The session that owns this PayInvoice Choreo.
     * @return Stripe_Invoices_PayInvoice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Invoices/PayInvoice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PayInvoice Choreo.
     *
     * @param Stripe_Invoices_PayInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_PayInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_PayInvoice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Invoices_PayInvoice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PayInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_PayInvoice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Invoices_PayInvoice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PayInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_PayInvoice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PayInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_PayInvoice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PayInvoice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Invoices_PayInvoice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Invoices_PayInvoice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this PayInvoice Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Invoices_PayInvoice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the InvoiceID input for this PayInvoice Choreo.
     *
     * @param string $value (required, string) The id of the invoice to pay.
     * @return Stripe_Invoices_PayInvoice_Inputs For method chaining.
     */
    public function setInvoiceID($value)
    {
        return $this->set('InvoiceID', $value);
    }
}


/**
 * Execution object for the PayInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_PayInvoice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PayInvoice Choreo.
     *
     * @param Temboo_Session $session The session that owns this PayInvoice execution.
     * @param Stripe_Invoices_PayInvoice $choreo The choreography object for this execution.
     * @param Stripe_Invoices_PayInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_PayInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_PayInvoice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Invoices_PayInvoice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PayInvoice execution.
     *
     * @return Stripe_Invoices_PayInvoice_Results New results object.
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
     * Wraps results in appropriate results class for this PayInvoice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Invoices_PayInvoice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Invoices_PayInvoice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PayInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_PayInvoice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PayInvoice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Invoices_PayInvoice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PayInvoice execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A reference to the Stripe Invoice object
	*/

	public function getInvoice() {
		return new Stripe_Invoice_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Deletes a specified invoice item.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_DeleteInvoiceItem extends Temboo_Choreography
{
    /**
     * Deletes a specified invoice item.
     *
     * @param Temboo_Session $session The session that owns this DeleteInvoiceItem Choreo.
     * @return Stripe_InvoiceItems_DeleteInvoiceItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/InvoiceItems/DeleteInvoiceItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteInvoiceItem Choreo.
     *
     * @param Stripe_InvoiceItems_DeleteInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_DeleteInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_InvoiceItems_DeleteInvoiceItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteInvoiceItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_InvoiceItems_DeleteInvoiceItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_DeleteInvoiceItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteInvoiceItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteInvoiceItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteInvoiceItem Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the InvoiceItemID input for this DeleteInvoiceItem Choreo.
     *
     * @param string $value (required, string) The unique identifier of the invoice item you want to delete
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Inputs For method chaining.
     */
    public function setInvoiceItemID($value)
    {
        return $this->set('InvoiceItemID', $value);
    }
}


/**
 * Execution object for the DeleteInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_DeleteInvoiceItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteInvoiceItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteInvoiceItem execution.
     * @param Stripe_InvoiceItems_DeleteInvoiceItem $choreo The choreography object for this execution.
     * @param Stripe_InvoiceItems_DeleteInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_DeleteInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_InvoiceItems_DeleteInvoiceItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteInvoiceItem execution.
     *
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteInvoiceItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_InvoiceItems_DeleteInvoiceItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_DeleteInvoiceItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteInvoiceItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_InvoiceItems_DeleteInvoiceItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteInvoiceItem execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	*/

	public function getDeleteResults() {
		return new Stripe_DeleteResults_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Charges a credit card by creating a new charge object using a card token that is associated with the credit card details.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_CreateNewChargeWithToken extends Temboo_Choreography
{
    /**
     * Charges a credit card by creating a new charge object using a card token that is associated with the credit card details.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeWithToken Choreo.
     * @return Stripe_Charges_CreateNewChargeWithToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Charges/CreateNewChargeWithToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateNewChargeWithToken Choreo.
     *
     * @param Stripe_Charges_CreateNewChargeWithToken_Inputs|array $inputs (optional) Inputs as Stripe_Charges_CreateNewChargeWithToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_CreateNewChargeWithToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Charges_CreateNewChargeWithToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateNewChargeWithToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_CreateNewChargeWithToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Charges_CreateNewChargeWithToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateNewChargeWithToken Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_CreateNewChargeWithToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateNewChargeWithToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Charges_CreateNewChargeWithToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateNewChargeWithToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Charges_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Charges_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateNewChargeWithToken Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Charges_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Amount input for this CreateNewChargeWithToken Choreo.
     *
     * @param int $value (required, integer) The amount to charge a customer in cents
     * @return Stripe_Charges_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this CreateNewChargeWithToken Choreo.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_Charges_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the Description input for this CreateNewChargeWithToken Choreo.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be associated with the charge as a description
     * @return Stripe_Charges_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Token input for this CreateNewChargeWithToken Choreo.
     *
     * @param string $value (required, string) The token associated with a set of credit card details. This can be generated with the CreateCardToken Choreo.
     * @return Stripe_Charges_CreateNewChargeWithToken_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the CreateNewChargeWithToken Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_CreateNewChargeWithToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateNewChargeWithToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateNewChargeWithToken execution.
     * @param Stripe_Charges_CreateNewChargeWithToken $choreo The choreography object for this execution.
     * @param Stripe_Charges_CreateNewChargeWithToken_Inputs|array $inputs (optional) Inputs as Stripe_Charges_CreateNewChargeWithToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Charges_CreateNewChargeWithToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Charges_CreateNewChargeWithToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateNewChargeWithToken execution.
     *
     * @return Stripe_Charges_CreateNewChargeWithToken_Results New results object.
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
     * Wraps results in appropriate results class for this CreateNewChargeWithToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Charges_CreateNewChargeWithToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Charges_CreateNewChargeWithToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateNewChargeWithToken Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Charges_CreateNewChargeWithToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateNewChargeWithToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Charges_CreateNewChargeWithToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateNewChargeWithToken execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	To charge a credit or a debit card, you create a new charge object. You can retrieve and refund individual charges as well as list all charges. Charges are identified by a unique random ID.
	*/

	public function getCharge() {
		return new Stripe_Charge_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Cancels an existing subscription.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Subscriptions_CancelSubscription extends Temboo_Choreography
{
    /**
     * Cancels an existing subscription.
     *
     * @param Temboo_Session $session The session that owns this CancelSubscription Choreo.
     * @return Stripe_Subscriptions_CancelSubscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Subscriptions/CancelSubscription/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CancelSubscription Choreo.
     *
     * @param Stripe_Subscriptions_CancelSubscription_Inputs|array $inputs (optional) Inputs as Stripe_Subscriptions_CancelSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Subscriptions_CancelSubscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Subscriptions_CancelSubscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CancelSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Subscriptions_CancelSubscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Subscriptions_CancelSubscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CancelSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Subscriptions_CancelSubscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CancelSubscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Subscriptions_CancelSubscription_Inputs New instance.
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
     * @return Stripe_Subscriptions_CancelSubscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Subscriptions_CancelSubscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CancelSubscription Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Subscriptions_CancelSubscription_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AtPeriodEnd input for this CancelSubscription Choreo.
     *
     * @param bool $value (optional, boolean) Delays the cancellation of the subscription until the end of the current period when set to 1. Defaults to 0.
     * @return Stripe_Subscriptions_CancelSubscription_Inputs For method chaining.
     */
    public function setAtPeriodEnd($value)
    {
        return $this->set('AtPeriodEnd', $value);
    }

    /**
     * Set the value for the CustomerID input for this CancelSubscription Choreo.
     *
     * @param string $value (required, string) The id of the customer whose subscription you want to cancel
     * @return Stripe_Subscriptions_CancelSubscription_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }
}


/**
 * Execution object for the CancelSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Subscriptions_CancelSubscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CancelSubscription Choreo.
     *
     * @param Temboo_Session $session The session that owns this CancelSubscription execution.
     * @param Stripe_Subscriptions_CancelSubscription $choreo The choreography object for this execution.
     * @param Stripe_Subscriptions_CancelSubscription_Inputs|array $inputs (optional) Inputs as Stripe_Subscriptions_CancelSubscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Subscriptions_CancelSubscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Subscriptions_CancelSubscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CancelSubscription execution.
     *
     * @return Stripe_Subscriptions_CancelSubscription_Results New results object.
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
     * @return Stripe_Subscriptions_CancelSubscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Subscriptions_CancelSubscription_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CancelSubscription Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Subscriptions_CancelSubscription_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CancelSubscription Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Subscriptions_CancelSubscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CancelSubscription execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	a Stripe Subscription
	*/

	public function getSubscription() {
		return new Stripe_Subscription_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Deletes a specified coupon.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_DeleteCoupon extends Temboo_Choreography
{
    /**
     * Deletes a specified coupon.
     *
     * @param Temboo_Session $session The session that owns this DeleteCoupon Choreo.
     * @return Stripe_Coupons_DeleteCoupon New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Coupons/DeleteCoupon/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteCoupon Choreo.
     *
     * @param Stripe_Coupons_DeleteCoupon_Inputs|array $inputs (optional) Inputs as Stripe_Coupons_DeleteCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Coupons_DeleteCoupon_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Coupons_DeleteCoupon_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Coupons_DeleteCoupon_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Coupons_DeleteCoupon_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteCoupon Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_DeleteCoupon_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteCoupon Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Coupons_DeleteCoupon_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteCoupon input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Coupons_DeleteCoupon_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Coupons_DeleteCoupon_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteCoupon Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Coupons_DeleteCoupon_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CouponID input for this DeleteCoupon Choreo.
     *
     * @param string $value (required, string) The unique identifier of the coupon you wish to delete
     * @return Stripe_Coupons_DeleteCoupon_Inputs For method chaining.
     */
    public function setCouponID($value)
    {
        return $this->set('CouponID', $value);
    }
}


/**
 * Execution object for the DeleteCoupon Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_DeleteCoupon_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteCoupon Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteCoupon execution.
     * @param Stripe_Coupons_DeleteCoupon $choreo The choreography object for this execution.
     * @param Stripe_Coupons_DeleteCoupon_Inputs|array $inputs (optional) Inputs as Stripe_Coupons_DeleteCoupon_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Coupons_DeleteCoupon_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Coupons_DeleteCoupon $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteCoupon execution.
     *
     * @return Stripe_Coupons_DeleteCoupon_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteCoupon execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Coupons_DeleteCoupon_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Coupons_DeleteCoupon_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteCoupon Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Coupons_DeleteCoupon_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteCoupon Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Coupons_DeleteCoupon_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteCoupon execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	*/

	public function getDeleteResults() {
		return new Stripe_DeleteResults_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Adds a charge or credit to the customer's next invoice.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_CreateInvoiceItem extends Temboo_Choreography
{
    /**
     * Adds a charge or credit to the customer's next invoice.
     *
     * @param Temboo_Session $session The session that owns this CreateInvoiceItem Choreo.
     * @return Stripe_InvoiceItems_CreateInvoiceItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/InvoiceItems/CreateInvoiceItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateInvoiceItem Choreo.
     *
     * @param Stripe_InvoiceItems_CreateInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_CreateInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_InvoiceItems_CreateInvoiceItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateInvoiceItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_InvoiceItems_CreateInvoiceItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_CreateInvoiceItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateInvoiceItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateInvoiceItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateInvoiceItem Choreo.
     *
     * @param string $value (required, string) The API Key providied by Stripe
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Amount input for this CreateInvoiceItem Choreo.
     *
     * @param int $value (required, integer) The amount in cents of the charge to be included in the customer's next invoice
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the Currency input for this CreateInvoiceItem Choreo.
     *
     * @param string $value (optional, string) 3-letter ISO code for currency. Defaults to 'usd' which is currently the only supported currency.
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setCurrency($value)
    {
        return $this->set('Currency', $value);
    }

    /**
     * Set the value for the CustomerID input for this CreateInvoiceItem Choreo.
     *
     * @param string $value (required, string) The unique identifier of the customer you want to create an invoice item for
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }

    /**
     * Set the value for the Description input for this CreateInvoiceItem Choreo.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be included with the invoice item
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }
}


/**
 * Execution object for the CreateInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_CreateInvoiceItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateInvoiceItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateInvoiceItem execution.
     * @param Stripe_InvoiceItems_CreateInvoiceItem $choreo The choreography object for this execution.
     * @param Stripe_InvoiceItems_CreateInvoiceItem_Inputs|array $inputs (optional) Inputs as Stripe_InvoiceItems_CreateInvoiceItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_InvoiceItems_CreateInvoiceItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateInvoiceItem execution.
     *
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Results New results object.
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
     * Wraps results in appropriate results class for this CreateInvoiceItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_InvoiceItems_CreateInvoiceItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateInvoiceItem Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_InvoiceItems_CreateInvoiceItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateInvoiceItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_InvoiceItems_CreateInvoiceItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateInvoiceItem execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Sometimes you want to add a charge or credit to a customer but only actually charge the customer's card at the end of a regular billing cycle. This is useful for combining several charges to minimize per-transaction fees or having Stripe tabulate your usage-based billing totals.
	*/

	public function getInvoiceItem() {
		return new Stripe_InvoiceItem_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves a customer's upcoming invoice.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveUpcomingInvoice extends Temboo_Choreography
{
    /**
     * Retrieves a customer's upcoming invoice.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUpcomingInvoice Choreo.
     * @return Stripe_Invoices_RetrieveUpcomingInvoice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Invoices/RetrieveUpcomingInvoice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveUpcomingInvoice Choreo.
     *
     * @param Stripe_Invoices_RetrieveUpcomingInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_RetrieveUpcomingInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Invoices_RetrieveUpcomingInvoice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveUpcomingInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Invoices_RetrieveUpcomingInvoice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveUpcomingInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveUpcomingInvoice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveUpcomingInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveUpcomingInvoice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveUpcomingInvoice Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CustomerID input for this RetrieveUpcomingInvoice Choreo.
     *
     * @param string $value (required, string) The unique identifier of the customer whose upcoming invoice to return
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }
}


/**
 * Execution object for the RetrieveUpcomingInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveUpcomingInvoice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveUpcomingInvoice Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUpcomingInvoice execution.
     * @param Stripe_Invoices_RetrieveUpcomingInvoice $choreo The choreography object for this execution.
     * @param Stripe_Invoices_RetrieveUpcomingInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_RetrieveUpcomingInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Invoices_RetrieveUpcomingInvoice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveUpcomingInvoice execution.
     *
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveUpcomingInvoice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Invoices_RetrieveUpcomingInvoice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveUpcomingInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveUpcomingInvoice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveUpcomingInvoice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Invoices_RetrieveUpcomingInvoice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveUpcomingInvoice execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A reference to the Stripe Invoice object
	*/

	public function getInvoice() {
		return new Stripe_Invoice_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Deletes a specified plan.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_DeletePlan extends Temboo_Choreography
{
    /**
     * Deletes a specified plan.
     *
     * @param Temboo_Session $session The session that owns this DeletePlan Choreo.
     * @return Stripe_Plans_DeletePlan New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Plans/DeletePlan/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeletePlan Choreo.
     *
     * @param Stripe_Plans_DeletePlan_Inputs|array $inputs (optional) Inputs as Stripe_Plans_DeletePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_DeletePlan_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Plans_DeletePlan_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeletePlan Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_DeletePlan_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Plans_DeletePlan_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeletePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_DeletePlan_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeletePlan Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Plans_DeletePlan_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeletePlan input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Plans_DeletePlan_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Plans_DeletePlan_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeletePlan Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Plans_DeletePlan_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the PlanID input for this DeletePlan Choreo.
     *
     * @param string $value (required, string) The unique identifier of the plan you want to delete
     * @return Stripe_Plans_DeletePlan_Inputs For method chaining.
     */
    public function setPlanID($value)
    {
        return $this->set('PlanID', $value);
    }
}


/**
 * Execution object for the DeletePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_DeletePlan_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeletePlan Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeletePlan execution.
     * @param Stripe_Plans_DeletePlan $choreo The choreography object for this execution.
     * @param Stripe_Plans_DeletePlan_Inputs|array $inputs (optional) Inputs as Stripe_Plans_DeletePlan_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Plans_DeletePlan_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Plans_DeletePlan $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeletePlan execution.
     *
     * @return Stripe_Plans_DeletePlan_Results New results object.
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
     * Wraps results in appropriate results class for this DeletePlan execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Plans_DeletePlan_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Plans_DeletePlan_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeletePlan Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Plans_DeletePlan_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeletePlan Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Plans_DeletePlan_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeletePlan execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	*/

	public function getDeleteResults() {
		return new Stripe_DeleteResults_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves the details of the account.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Account_RetrieveAccountDetails extends Temboo_Choreography
{
    /**
     * Retrieves the details of the account.
     *
     * @param Temboo_Session $session The session that owns this RetrieveAccountDetails Choreo.
     * @return Stripe_Account_RetrieveAccountDetails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Account/RetrieveAccountDetails/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveAccountDetails Choreo.
     *
     * @param Stripe_Account_RetrieveAccountDetails_Inputs|array $inputs (optional) Inputs as Stripe_Account_RetrieveAccountDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Account_RetrieveAccountDetails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Account_RetrieveAccountDetails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveAccountDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Account_RetrieveAccountDetails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Account_RetrieveAccountDetails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveAccountDetails Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Account_RetrieveAccountDetails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveAccountDetails Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Account_RetrieveAccountDetails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveAccountDetails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Account_RetrieveAccountDetails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Account_RetrieveAccountDetails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveAccountDetails Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Account_RetrieveAccountDetails_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }
}


/**
 * Execution object for the RetrieveAccountDetails Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Account_RetrieveAccountDetails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveAccountDetails Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveAccountDetails execution.
     * @param Stripe_Account_RetrieveAccountDetails $choreo The choreography object for this execution.
     * @param Stripe_Account_RetrieveAccountDetails_Inputs|array $inputs (optional) Inputs as Stripe_Account_RetrieveAccountDetails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Account_RetrieveAccountDetails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Account_RetrieveAccountDetails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveAccountDetails execution.
     *
     * @return Stripe_Account_RetrieveAccountDetails_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveAccountDetails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Account_RetrieveAccountDetails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Account_RetrieveAccountDetails_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveAccountDetails Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Account_RetrieveAccountDetails_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveAccountDetails Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Account_RetrieveAccountDetails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveAccountDetails execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Object representing your Stripe Account
	*/

	public function getAccountDetails() {
		return new Stripe_AccountDetails_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Updates a specified customer record.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_UpdateCustomer extends Temboo_Choreography
{
    /**
     * Updates a specified customer record.
     *
     * @param Temboo_Session $session The session that owns this UpdateCustomer Choreo.
     * @return Stripe_Customers_UpdateCustomer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Customers/UpdateCustomer/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateCustomer Choreo.
     *
     * @param Stripe_Customers_UpdateCustomer_Inputs|array $inputs (optional) Inputs as Stripe_Customers_UpdateCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_UpdateCustomer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Customers_UpdateCustomer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateCustomer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_UpdateCustomer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Customers_UpdateCustomer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_UpdateCustomer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateCustomer Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Customers_UpdateCustomer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateCustomer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Customers_UpdateCustomer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Customers_UpdateCustomer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateCustomer Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Customers_UpdateCustomer_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccountBalance input for this UpdateCustomer Choreo.
     *
     * @param int $value (optional, integer) The amount in cents for the starting account balance. A negative amount represents a credit that will be used before charging the customer's card; a positive amount will be added to the next invoice.
     * @return Stripe_Customers_UpdateCustomer_Inputs For method chaining.
     */
    public function setAccountBalance($value)
    {
        return $this->set('AccountBalance', $value);
    }

    /**
     * Set the value for the Coupon input for this UpdateCustomer Choreo.
     *
     * @param string $value (optional, string) If you provide a coupon code, it can be specified here
     * @return Stripe_Customers_UpdateCustomer_Inputs For method chaining.
     */
    public function setCoupon($value)
    {
        return $this->set('Coupon', $value);
    }

    /**
     * Set the value for the CustomerID input for this UpdateCustomer Choreo.
     *
     * @param string $value (required, string) The unique identifier of the customer you want to update
     * @return Stripe_Customers_UpdateCustomer_Inputs For method chaining.
     */
    public function setCustomerID($value)
    {
        return $this->set('CustomerID', $value);
    }

    /**
     * Set the value for the Description input for this UpdateCustomer Choreo.
     *
     * @param string $value (optional, string) An arbitrary string of text that will be associated with the charge as a description
     * @return Stripe_Customers_UpdateCustomer_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Email input for this UpdateCustomer Choreo.
     *
     * @param string $value (optional, string) The customer's email address
     * @return Stripe_Customers_UpdateCustomer_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Token input for this UpdateCustomer Choreo.
     *
     * @param string $value (optional, string) The token associated with a set of credit card details.
     * @return Stripe_Customers_UpdateCustomer_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the UpdateCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_UpdateCustomer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateCustomer Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateCustomer execution.
     * @param Stripe_Customers_UpdateCustomer $choreo The choreography object for this execution.
     * @param Stripe_Customers_UpdateCustomer_Inputs|array $inputs (optional) Inputs as Stripe_Customers_UpdateCustomer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Customers_UpdateCustomer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Customers_UpdateCustomer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateCustomer execution.
     *
     * @return Stripe_Customers_UpdateCustomer_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateCustomer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Customers_UpdateCustomer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Customers_UpdateCustomer_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateCustomer Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Customers_UpdateCustomer_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateCustomer Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Customers_UpdateCustomer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateCustomer execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Customer objects allow you to perform recurring charges and track multiple charges that are associated with the same customer. The API allows you to create, delete, and update your customers. You can retrieve individual customers as well as a list of all your customers.
	*/

	public function getCustomer() {
		return new Stripe_Customer_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves invoice details using the invoice id.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveInvoice extends Temboo_Choreography
{
    /**
     * Retrieves invoice details using the invoice id.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoice Choreo.
     * @return Stripe_Invoices_RetrieveInvoice New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Stripe/Invoices/RetrieveInvoice/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveInvoice Choreo.
     *
     * @param Stripe_Invoices_RetrieveInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_RetrieveInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_RetrieveInvoice_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Stripe_Invoices_RetrieveInvoice_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_RetrieveInvoice_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Stripe_Invoices_RetrieveInvoice_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveInvoice_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveInvoice Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Stripe_Invoices_RetrieveInvoice_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveInvoice input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Stripe_Invoices_RetrieveInvoice_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Stripe_Invoices_RetrieveInvoice_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveInvoice Choreo.
     *
     * @param string $value (required, string) The API Key provided by Stripe
     * @return Stripe_Invoices_RetrieveInvoice_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the InvoiceID input for this RetrieveInvoice Choreo.
     *
     * @param string $value (required, string) The unique identifier of the invoice you want to retrieve
     * @return Stripe_Invoices_RetrieveInvoice_Inputs For method chaining.
     */
    public function setInvoiceID($value)
    {
        return $this->set('InvoiceID', $value);
    }
}


/**
 * Execution object for the RetrieveInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveInvoice_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveInvoice Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvoice execution.
     * @param Stripe_Invoices_RetrieveInvoice $choreo The choreography object for this execution.
     * @param Stripe_Invoices_RetrieveInvoice_Inputs|array $inputs (optional) Inputs as Stripe_Invoices_RetrieveInvoice_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Stripe_Invoices_RetrieveInvoice_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Stripe_Invoices_RetrieveInvoice $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveInvoice execution.
     *
     * @return Stripe_Invoices_RetrieveInvoice_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveInvoice execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Stripe_Invoices_RetrieveInvoice_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Stripe_Invoices_RetrieveInvoice_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveInvoice Choreo.
 *
 * @package Temboo
 * @subpackage Stripe
 */
class Stripe_Invoices_RetrieveInvoice_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveInvoice Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Stripe_Invoices_RetrieveInvoice_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveInvoice execution.
     *
     * @return string (json) The response from Stripe
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	A reference to the Stripe Invoice object
	*/

	public function getInvoice() {
		return new Stripe_Invoice_output(json_decode($this->get('Response'), true));
	}
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


/*
 This is an object representing your Stripe account. You can retrieve it to see properties on the account like its current e-mail address or if the account is enabled yet to make live charges.

*/

class Stripe_AccountDetails_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The primary user's email address
	*/

	public function getEmail() {
		return Temboo_Results::getSubItemByKey($this->base, "email");
	}

	/*
	Whether or not the account can create live charges
	*/

	public function getChargeEnabled() {
		return Temboo_Results::getSubItemByKey($this->base, "charge_enabled");
	}

	/*
	Whether or not account details have been submitted yet
	*/

	public function getDetailsSubmitted() {
		return Temboo_Results::getSubItemByKey($this->base, "details_submitted");
	}

	/*
	The currencies this account can submit when creating charges
	*/

	public function getCurrenciesSupported() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "currencies_supported");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}

	/*
	A unique identifier for the account
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Value is "account"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	The text that will appear on credit card statements
	*/

	public function getStatementDescriptor() {
		return Temboo_Results::getSubItemByKey($this->base, "statement_descriptor");
	}
}



/*
 Object describing the card used to make the charge

*/

class Stripe_Card_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Two-letter ISO code representing the country of the card (as accurately as we can determine it). You could use this attribute to get a sense of the international breakdown of cards you've collected.
	*/

	public function getCountry() {
		return Temboo_Results::getSubItemByKey($this->base, "country");
	}

	/*
	If address_line1 was provided, results of the check: pass, fail, or unchecked.
	*/

	public function getAddressLine1Check() {
		return Temboo_Results::getSubItemByKey($this->base, "address_line1_check");
	}

	/*
	Last 4 digits of the card's number.
	*/

	public function getLast4() {
		return Temboo_Results::getSubItemByKey($this->base, "last4");
	}

	/*
	line 2 of the address
	*/

	public function getAddressLine2() {
		return Temboo_Results::getSubItemByKey($this->base, "address_line2");
	}

	/*
	line 1 of the address
	*/

	public function getAddressLine1() {
		return Temboo_Results::getSubItemByKey($this->base, "address_line1");
	}

	/*
	If address_zip was provided, results of the check: pass, fail, or unchecked.
	*/

	public function getAddressZipCheck() {
		return Temboo_Results::getSubItemByKey($this->base, "address_zip_check");
	}

	/*
	Credit card type (visa/mastercard)
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	Uniquely identifies this particular card number. You can use this attribute to check whether two customers who've signed up with you are using the same card number, for example.
	*/

	public function getFingerprint() {
		return Temboo_Results::getSubItemByKey($this->base, "fingerprint");
	}

	/*
	Card's expiration year. (yyyy).
	*/

	public function getExpYear() {
		return Temboo_Results::getSubItemByKey($this->base, "exp_year");
	}

	/*
	Cardholder name
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	billing address city, if provided when creating card
	*/

	public function getAddressCity() {
		return Temboo_Results::getSubItemByKey($this->base, "address_city");
	}

	/*
	Card's expiration month.
	*/

	public function getExpMonth() {
		return Temboo_Results::getSubItemByKey($this->base, "exp_month");
	}

	/*
	zip code
	*/

	public function getAddressZip() {
		return Temboo_Results::getSubItemByKey($this->base, "address_zip");
	}

	/*
	Billing address country, if provided when creating card
	*/

	public function getAddressCountry() {
		return Temboo_Results::getSubItemByKey($this->base, "address_country");
	}

	/*
	*/

	public function getAddressState() {
		return Temboo_Results::getSubItemByKey($this->base, "address_state");
	}

	/*
	Value is always "card"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}
}



/*
 To charge a credit or a debit card, you create a new charge object. You can retrieve and refund individual charges as well as list all charges. Charges are identified by a unique random ID.

*/

class Stripe_Charge_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	(3-letter ISO currency code)
	*/

	public function getCurrency() {
		return Temboo_Results::getSubItemByKey($this->base, "currency");
	}

	/*
	Whether or not payment was successfully collected for this invoice. An invoice can be paid (most commonly) with a charge or with credit from the customer's account balance.
	*/

	public function getPaid() {
		return Temboo_Results::getSubItemByKey($this->base, "paid");
	}

	/*
	description of the Charge
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	Whether or not the charge has been fully refunded. If the charge is only partially refunded, this attribute will still be false.
	*/

	public function getRefunded() {
		return Temboo_Results::getSubItemByKey($this->base, "refunded");
	}

	/*
	ID of the invoice this charge is for if one exists
	*/

	public function getInvoice() {
		return Temboo_Results::getSubItemByKey($this->base, "invoice");
	}

	/*
	Message to user further explaining reason for charge failure if available
	*/

	public function getFailureMessage() {
		return Temboo_Results::getSubItemByKey($this->base, "failure_message");
	}

	/*
	The fee details for this charge
	*/

	public function getFeeDetails() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "fee_details");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Stripe_FeeDetails_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Disputed amount. Usually the amount of the charge, but can differ (usually because of currency fluctuation or because only part of the order is disputed).
	*/

	public function getDisputed() {
		return Temboo_Results::getSubItemByKey($this->base, "disputed");
	}

	/*
	If the charge was created without capturing, this boolean represents whether or not it is still uncaptured or has since been captured.
	*/

	public function getCaptured() {
		return Temboo_Results::getSubItemByKey($this->base, "captured");
	}

	/*
	The unique ID of the charge
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	timestamp
	*/

	public function getCreated() {
		return Temboo_Results::getSubItemByKey($this->base, "created");
	}

	/*
	Amount (in the currency specified)
	*/

	public function getAmount() {
		return Temboo_Results::getSubItemByKey($this->base, "amount");
	}

	/*
	ID of the customer this charge is for if one exists
	*/

	public function getCustomer() {
		return Temboo_Results::getSubItemByKey($this->base, "customer");
	}

	/*
	In livemode, credit card transactions are actually processed.  In testmode, transactions don't go through the credit card network.
	*/

	public function getLivemode() {
		return Temboo_Results::getSubItemByKey($this->base, "livemode");
	}

	/*
	value is always "charge"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	The fee (in cents) paid for this charge
	*/

	public function getFee() {
		return Temboo_Results::getSubItemByKey($this->base, "fee");
	}

	/*
	Details about the dispute if the charge has been disputed
	*/

	public function getDispute() {
		return new Stripe_Dispute_output(Temboo_Results::getSubItemByKey($this->base, "dispute"));
	}

	/*
	Object describing the card used to make the charge
	*/

	public function getCard() {
		return new Stripe_Card_output(Temboo_Results::getSubItemByKey($this->base, "card"));
	}
}



/*
 Returns a list of charges you've previously created. The charges are returned in sorted order, with the most recent charges appearing first.

*/

class Stripe_ChargeList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Value is always "list"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	The Stripe Charge object
	*/

	public function getCharges() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "data");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Stripe_Charge_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	URL to the REST API call
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	A limit on the number of objects to be returned. Count can range between 1 and 100 items.
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}
}



/*
 class Coupon coupon /_ // A coupon contains information about a percent-off discount you might want to apply to a customer. Coupons only apply to invoices created for recurring subscriptions and invoice items; they do not apply to one-off charges.


*/

class Stripe_Coupon_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Date after which the coupon can no longer be redeemed
	*/

	public function getRedeemBy() {
		return Temboo_Results::getSubItemByKey($this->base, "redeem_by");
	}

	/*
	Maximum number of times this coupon can be redeemed by a customer before it is no longer valid.
	*/

	public function getMaxRedemptions() {
		return Temboo_Results::getSubItemByKey($this->base, "max_redemptions");
	}

	/*
	If duration is repeating, the number of months the coupon applies. Null if coupon duration is forever or once.
	*/

	public function getDurationInMonths() {
		return Temboo_Results::getSubItemByKey($this->base, "duration_in_months");
	}

	/*
	One of forever, once, and repeating. Describes how long a customer who applies this coupon will get the discount.
	*/

	public function getDuration() {
		return Temboo_Results::getSubItemByKey($this->base, "duration");
	}

	/*
	(3-letter ISO currency code) If amount_off has been set, the currency of the amount to take off.
	*/

	public function getCurrency() {
		return Temboo_Results::getSubItemByKey($this->base, "currency");
	}

	/*
	Percent that will be taken off the subtotal of any invoices for this customer for the duration of the coupon. For example, a coupon with percent_off of 50 will make a $100 invoice $50 instead.
	*/

	public function getPercentOff() {
		return Temboo_Results::getSubItemByKey($this->base, "percent_off");
	}

	/*
	In livemode, credit card transactions are actually processed.  In testmode, transactions don't go through the credit card network.
	*/

	public function getLivemode() {
		return Temboo_Results::getSubItemByKey($this->base, "livemode");
	}

	/*
	Number of times this coupon has been applied to a customer.
	*/

	public function getTimesRedeemed() {
		return Temboo_Results::getSubItemByKey($this->base, "times_redeemed");
	}

	/*
	Value is always "coupon"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	the ID of coupon
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Amount (in the currency specified)
	*/

	public function getAmountOff() {
		return Temboo_Results::getSubItemByKey($this->base, "amount_off");
	}
}



/*
 A associative array with a data property that contains an array of up to count coupons, starting at index offset. Each entry in the array is a separate coupon object. If no more coupons are available, the resulting array will be empty. This request should never return an error.

*/

class Stripe_CouponList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	a Stripe Coupon object
	*/

	public function getCoupons() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "data");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Stripe_Coupon_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	A limit on the number of objects to be returned. Count can range between 1 and 100 items.
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	url of the REST API call
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	Value is always "list"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}
}



/*


*/

class Stripe_Customer_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getNextRecurringCharge() {
		return new Stripe_NextRecurringCharge_output(Temboo_Results::getSubItemByKey($this->base, "next_recurring_charge"));
	}

	/*
	description of the Customer
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	In livemode, credit card transactions are actually processed.  In testmode, transactions don't go through the credit card network.
	*/

	public function getLivemode() {
		return Temboo_Results::getSubItemByKey($this->base, "livemode");
	}

	/*
	Object describing the current card on the customer, if there is one.
	*/

	public function getActiveCard() {
		return new Stripe_Card_output(Temboo_Results::getSubItemByKey($this->base, "active_card"));
	}

	/*
	Current balance, if any, being stored on the customer's account. If negative, the customer has credit to apply to the next invoice. If positive, the customer has an amount owed that will be added to the next invoice. The balance does not refer to any unpaid invoices; it solely takes into account amounts that have yet to be successfully applied to any invoice. This balance is only taken into account for recurring charges.
	*/

	public function getAccountBalance() {
		return Temboo_Results::getSubItemByKey($this->base, "account_balance");
	}

	/*
	timestamp of when Customer was created
	*/

	public function getCreated() {
		return Temboo_Results::getSubItemByKey($this->base, "created");
	}

	/*
	Object describing the Subscription type
	*/

	public function getSubscription() {
		return new Stripe_Subscription_output(Temboo_Results::getSubItemByKey($this->base, "subscription"));
	}

	/*
	Value is always "customer"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	ID of the Customer
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	e-mail address of the Customer
	*/

	public function getEmail() {
		return Temboo_Results::getSubItemByKey($this->base, "email");
	}
}



/*
 Returns a list of your customers. The customers are returned sorted by creation date, with the most recently created customers appearing first.

*/

class Stripe_CustomerList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A limit on the number of objects to be returned. Count can range between 1 and 100 items.
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	a Stripe Customer object.
	*/

	public function getCustomers() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "data");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Stripe_Customer_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	url of the REST API call
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	Value is always "list".
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}
}



/*
  An object with the deleted object's ID and a deleted flag upon success. An error is returned otherwise, such as if the object has already been deleted.

*/

class Stripe_DeleteResults_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	ID of the deleted object
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	A delete flag showing true on success.
	*/

	public function getDeleted() {
		return Temboo_Results::getSubItemByKey($this->base, "deleted");
	}
}



/*
 A dispute occurs when a customer questions your charge with their bank or credit card company. When a customer disputes your charge, you're given the opportunity to respond to the dispute with evidence that shows the charge is legitimate. You can find more information about the dispute process in our

*/

class Stripe_Dispute_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Date dispute was opened
	*/

	public function getCreated() {
		return Temboo_Results::getSubItemByKey($this->base, "created");
	}

	/*
	Disputed amount. Usually the amount of the charge, but can differ (usually because of currency fluctuation or because only part of the order is disputed).
	*/

	public function getAmount() {
		return Temboo_Results::getSubItemByKey($this->base, "amount");
	}

	/*
	Reason given by cardholder for dispute. Possible values are duplicate, fraudulent, subscription_canceled, product_unacceptable, product_not_received, unrecognized, credit_not_processed, general.
	*/

	public function getReason() {
		return Temboo_Results::getSubItemByKey($this->base, "reason");
	}

	/*
	ID of the charge that was disputed
	*/

	public function getCharge() {
		return Temboo_Results::getSubItemByKey($this->base, "charge");
	}

	/*
	Date by which evidence must be submitted in order to successfully challenge dispute.
	*/

	public function getEvidenceDueBy() {
		return Temboo_Results::getSubItemByKey($this->base, "evidence_due_by");
	}

	/*
	always "dispute"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	In livemode, credit card transactions are actually processed.  In testmode, transactions don't go through the credit card network.
	*/

	public function getLivemode() {
		return Temboo_Results::getSubItemByKey($this->base, "livemode");
	}

	/*
	(3-letter ISO currency code)
	*/

	public function getCurrency() {
		return Temboo_Results::getSubItemByKey($this->base, "currency");
	}

	/*
	Current status of dispute. Possible values are won, lost, needs_response, under_review.
	*/

	public function getStatus() {
		return Temboo_Results::getSubItemByKey($this->base, "status");
	}

	/*
	Evidence that you have submitted to demonstrate the charge is legitimate (proof of delivery, IP addresses of logins, text of invoices, etc.). 1000 characters maximum.
	*/

	public function getEvidence() {
		return Temboo_Results::getSubItemByKey($this->base, "evidence");
	}
}



/*
 Detailed breakdown of fees (in cents) paid for this charge  
*/

class Stripe_FeeDetails_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	value always "stripe_fee"
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	Amount in cents refunded (can be less than the amount attribute on the charge if a partial refund was issued)
	*/

	public function getAmountRefunded() {
		return Temboo_Results::getSubItemByKey($this->base, "amount_refunded");
	}

	/*
	(3-letter ISO currency code)
	*/

	public function getCurrency() {
		return Temboo_Results::getSubItemByKey($this->base, "currency");
	}

	/*
	description of the fee
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	*/

	public function getApplication() {
		return Temboo_Results::getSubItemByKey($this->base, "application");
	}

	/*
	Amount (in the currency specified)
	*/

	public function getAmount() {
		return Temboo_Results::getSubItemByKey($this->base, "amount");
	}
}



/*
  Invoices are statements of what a customer owes for a particular billing period, including subscriptions, invoice items, and any automatic proration adjustments if necessary. Once an invoice is created, payment is automatically attempted. Note that the payment, while automatic, does not happen exactly at the time of invoice creation. If you have configured webhooks, the invoice will wait until one hour after the last webhook is successfully sent (or the last webhook times out after failing). Any customer credit on the account is applied before determining how much is due for that invoice (the amount that will be actually charged). If the amount due for the invoice is less than 50 cents (the minimum for a charge), we add the amount to the customer's running account balance to be added to the next invoice. If this amount is negative, it will act as a credit to offset the next invoice. Note that the customer account balance does not include unpaid invoices; it only includes balances that need to be taken into account when calculating the amount due for the next invoice.

*/

class Stripe_Invoice_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Value is always "invoice"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	timestamp
	*/

	public function getDate() {
		return Temboo_Results::getSubItemByKey($this->base, "date");
	}

	/*
	timestamp.  Start of the usage period the invoice covers
	*/

	public function getPeriodStart() {
		return Temboo_Results::getSubItemByKey($this->base, "period_start");
	}

	/*
	Starting customer balance before attempting to pay invoice. If the invoice has not been attempted yet, this will be the current customer balance.
	*/

	public function getStartingBalance() {
		return Temboo_Results::getSubItemByKey($this->base, "starting_balance");
	}

	/*
	Final amount due at this time for this invoice. If the invoice's total is smaller than the minimum charge amount, for example, or if there is account credit that can be applied to the invoice, the amount_due may be 0. If there is a positive starting_balance for the invoice (the customer owes money), the amount_due will also take that into account. The charge that gets generated for the invoice will be for the amount specified in amount_due.
	*/

	public function getAmountDue() {
		return Temboo_Results::getSubItemByKey($this->base, "amount_due");
	}

	/*
	Number of automatic payment attempts made for this invoice. Does not include manual attempts to pay the invoice.
	*/

	public function getAttemptCount() {
		return Temboo_Results::getSubItemByKey($this->base, "attempt_count");
	}

	/*
	Whether or not an attempt has been made to pay the invoice. An invoice is not attempted until 1 hour after the invoice.created webhook, for example, so you might not want to display that invoice as unpaid to your users.
	*/

	public function getAttempted() {
		return Temboo_Results::getSubItemByKey($this->base, "attempted");
	}

	/*
	timestamp
	*/

	public function getNextPaymentAttempt() {
		return Temboo_Results::getSubItemByKey($this->base, "next_payment_attempt");
	}

	/*
	(3-letter ISO currency code)
	*/

	public function getCurrency() {
		return Temboo_Results::getSubItemByKey($this->base, "currency");
	}

	/*
	Total of all subscriptions, invoice items, and prorations on the invoice before any discount is applied
	*/

	public function getSubtotal() {
		return Temboo_Results::getSubItemByKey($this->base, "subtotal");
	}

	/*
	ID of the charge
	*/

	public function getCharge() {
		return Temboo_Results::getSubItemByKey($this->base, "charge");
	}

	/*
	Whether or not the invoice is still trying to collect payment. An invoice is closed if it's either paid or it has been marked closed. A closed invoice will no longer attempt to collect payment.
	*/

	public function getClosed() {
		return Temboo_Results::getSubItemByKey($this->base, "closed");
	}

	/*
	Total after discount
	*/

	public function getTotal() {
		return Temboo_Results::getSubItemByKey($this->base, "total");
	}

	/*
	Ending customer balance after attempting to pay invoice. If the invoice has not been attempted yet, this will be nu
	*/

	public function getEndingBalance() {
		return Temboo_Results::getSubItemByKey($this->base, "ending_balance");
	}

	/*
	In livemode, credit card transactions are actually processed.  In testmode, transactions don't go through the credit card network.
	*/

	public function getLivemode() {
		return Temboo_Results::getSubItemByKey($this->base, "livemode");
	}

	/*
	Whether or not payment was successfully collected for this invoice. An invoice can be paid (most commonly) with a charge or with credit from the customer's account balance.
	*/

	public function getPaid() {
		return Temboo_Results::getSubItemByKey($this->base, "paid");
	}

	/*
	ID of the Invoice
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	*/

	public function getLines() {
		return new Stripe_Lines_output(Temboo_Results::getSubItemByKey($this->base, "lines"));
	}

	/*
	timestamp.  End of the usage period the invoice covers
	*/

	public function getPeriodEnd() {
		return Temboo_Results::getSubItemByKey($this->base, "period_end");
	}

	/*
	ID of the customer
	*/

	public function getCustomer() {
		return Temboo_Results::getSubItemByKey($this->base, "customer");
	}
}



/*
 An Invoice Line Item

*/

class Stripe_InvoiceItem_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	In livemode, credit card transactions are actually processed.  In testmode, transactions don't go through the credit card network.
	*/

	public function getLivemode() {
		return Temboo_Results::getSubItemByKey($this->base, "livemode");
	}

	/*
	Amount (in the currency specified)
	*/

	public function getAmount() {
		return Temboo_Results::getSubItemByKey($this->base, "amount");
	}

	/*
	The plan of the subscription, if the line item is a subscription
	*/

	public function getPlan() {
		return new Stripe_Plan_output(Temboo_Results::getSubItemByKey($this->base, "plan"));
	}

	/*
	Whether or not this is a proration
	*/

	public function getProration() {
		return Temboo_Results::getSubItemByKey($this->base, "proration");
	}

	/*
	ID of the invoice
	*/

	public function getInvoice() {
		return Temboo_Results::getSubItemByKey($this->base, "invoice");
	}

	/*
	(3-letter ISO currency code)
	*/

	public function getCurrency() {
		return Temboo_Results::getSubItemByKey($this->base, "currency");
	}

	/*
	timestamp
	*/

	public function getDate() {
		return Temboo_Results::getSubItemByKey($this->base, "date");
	}

	/*
	The ID of the source of this line item, either an invoice item or a subscription
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The period this InvoiceItme covers
	*/

	public function getPeriod() {
		return new Stripe_Period_output(Temboo_Results::getSubItemByKey($this->base, "period"));
	}

	/*
	A text description of the line item
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	ID of the Customer
	*/

	public function getCustomer() {
		return Temboo_Results::getSubItemByKey($this->base, "customer");
	}

	/*
	value is always "invoiceitem"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}
}



/*
 A List of InvoiceItems

*/

class Stripe_InvoiceItemList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	url to the REST API call
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	value is always "list"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	a reference to a Stripe Invoice Item object
	*/

	public function getInvoiceItems() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "data");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Stripe_InvoiceItem_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	A limit on the number of objects to be returned. Count can range between 1 and 100 items.
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}
}



/*
 A associative array with a data property that contains an array of invoice objects. Returns an error if the customer ID is invalid.

*/

class Stripe_InvoiceList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A reference to a Stripe Invoice object
	*/

	public function getInvoices() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "data");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Stripe_Invoice_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	A limit on the number of objects to be returned. Count can range between 1 and 100 items.
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	Value is always "list"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	url to the REST API call
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}
}



/*

  
*/

class Stripe_Lines_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	*/

	public function getInvoiceItems() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "invoiceitems");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Stripe_InvoiceItem_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	*/

	public function getSubscriptions() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "subscriptions");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Stripe_Subscription_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 Object describing the amount and date of the next recurring charge
  
*/

class Stripe_NextRecurringCharge_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	timestamp
	*/

	public function getDate() {
		return Temboo_Results::getSubItemByKey($this->base, "date");
	}

	/*
	Amount (in the currency specified)
	*/

	public function getAmount() {
		return Temboo_Results::getSubItemByKey($this->base, "amount");
	}
}



/*
 Covers a billing period for a Subscription or InvoiceItem

*/

class Stripe_Period_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	timestamp of the end of billing period.
	*/

	public function getEnd() {
		return Temboo_Results::getSubItemByKey($this->base, "end");
	}

	/*
	timestamp of the start of the billing period.
	*/

	public function getStart() {
		return Temboo_Results::getSubItemByKey($this->base, "start");
	}
}



/*
 class Plan plan /_ // A subscription plan contains the pricing information for different products and feature levels on your site. For example, you might have a $10/month plan for basic features and a different $20/month plan for premium features.


*/

class Stripe_Plan_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	(3-letter ISO currency code) Currency in which subscription will be charged
	*/

	public function getCurrency() {
		return Temboo_Results::getSubItemByKey($this->base, "currency");
	}

	/*
	the ID of the Plan
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Value is always "plan"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	The number of the unit specified in the interval parameter. For example, you could specify an interval_count of 3 and an interval of 'month' for quarterly billing (every 3 months).
	*/

	public function getIntervalCount() {
		return Temboo_Results::getSubItemByKey($this->base, "interval_count");
	}

	/*
	The amount in cents to be charged on the interval specified
	*/

	public function getAmount() {
		return Temboo_Results::getSubItemByKey($this->base, "amount");
	}

	/*
	Number of trial period days granted when subscribing a customer to this plan. Null if the plan has no trial period
	*/

	public function getTrialPeriodDays() {
		return Temboo_Results::getSubItemByKey($this->base, "trial_period_days");
	}

	/*
	One of month or year. The frequency with which a subscription should be billed.
	*/

	public function getInterval() {
		return Temboo_Results::getSubItemByKey($this->base, "interval");
	}

	/*
	In livemode, credit card transactions are actually processed.  In testmode, transactions don't go through the credit card network.
	*/

	public function getLivemode() {
		return Temboo_Results::getSubItemByKey($this->base, "livemode");
	}

	/*
	Display name of the plan
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}
}



/*
 A associative array with a data property that contains an array of up to count plans, starting at index offset. Each entry in the array is a separate plan object. If no more plans are available, the resulting array will be empty. This request should never return an error.

*/

class Stripe_PlanList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Value is always "list"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	url to the REST API call
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}

	/*
	A limit on the number of objects to be returned. Count can range between 1 and 100 items.
	*/

	public function getCount() {
		return Temboo_Results::getSubItemByKey($this->base, "count");
	}

	/*
	A Stripe Plan Object
	*/

	public function getPlans() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "data");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Stripe_Plan_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 Subscriptions allow you to charge a customer's card on a recurring basis. A subscription ties a customer to a particular plan you've created.

*/

class Stripe_Subscription_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	If the subscription has a trial, the beginning of that trial.
	*/

	public function getTrialStart() {
		return Temboo_Results::getSubItemByKey($this->base, "trial_start");
	}

	/*
	timestamp.  Date the subscription started
	*/

	public function getStart() {
		return Temboo_Results::getSubItemByKey($this->base, "start");
	}

	/*
	Start of the current period that the subscription has been invoiced for
	*/

	public function getCurrentPeriodStart() {
		return Temboo_Results::getSubItemByKey($this->base, "current_period_start");
	}

	/*
	ID of the subscription
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	If the subscription has ended (either because it was canceled or because the customer was switched to a subscription to a new plan), the date the subscription ended
	*/

	public function getEndedAt() {
		return Temboo_Results::getSubItemByKey($this->base, "ended_at");
	}

	/*
	If the subscription has been canceled, the date of that cancellation. If the subscription was canceled with cancel_at_period_end, canceled_at will still reflect the date of the initial cancellation request, not the end of the subscription period when the subscription is automatically moved to a canceled state.
	*/

	public function getCanceledAt() {
		return Temboo_Results::getSubItemByKey($this->base, "canceled_at");
	}

	/*
	End of the current period that the subscription has been invoiced for. At the end of this period, a new invoice will be created.
	*/

	public function getCurrentPeriodEnd() {
		return Temboo_Results::getSubItemByKey($this->base, "current_period_end");
	}

	/*
	Possible values are trialing, active, past_due, canceled, or unpaid. A subscription still in its trial period is trialing and moves to active when the trial period is over. When payment to renew the subscription fails, the subscription becomes past_due. After Stripe has exhausted all payment retry attempts, the subscription ends up with a status of either canceled or unpaid depending on your retry settings. Note that when a subscription has a status of unpaid, any future invoices will not be attempted until the customer's card details are updated.
	*/

	public function getStatus() {
		return Temboo_Results::getSubItemByKey($this->base, "status");
	}

	/*
	the Type of the object
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}

	/*
	(3-letter ISO currency code)
	*/

	public function getCurrency() {
		return Temboo_Results::getSubItemByKey($this->base, "currency");
	}

	/*
	The period this subscription covers
	*/

	public function getPeriod() {
		return new Stripe_Period_output(Temboo_Results::getSubItemByKey($this->base, "period"));
	}

	/*
	If the subscription has been canceled with the at_period_end flag set to true, cancel_at_period_end on the subscription will be true. You can use this attribute to determine whether a subscription that has a status of active is scheduled to be canceled at the end of the current period.
	*/

	public function getCancelAtPeriodEnd() {
		return Temboo_Results::getSubItemByKey($this->base, "cancel_at_period_end");
	}

	/*
	description of the Subscription
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	Whether or not this is a proration
	*/

	public function getProration() {
		return Temboo_Results::getSubItemByKey($this->base, "proration");
	}

	/*
	Amount (in the currency specified)
	*/

	public function getAmount() {
		return Temboo_Results::getSubItemByKey($this->base, "amount");
	}

	/*
	If the subscription has a trial, the end of that trial.
	*/

	public function getTrialEnd() {
		return Temboo_Results::getSubItemByKey($this->base, "trial_end");
	}

	/*
	number of subscriptions
	*/

	public function getQuantity() {
		return Temboo_Results::getSubItemByKey($this->base, "quantity");
	}

	/*
	Value always "subscription"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	Object describing the customer
	*/

	public function getCustomer() {
		return Temboo_Results::getSubItemByKey($this->base, "customer");
	}

	/*
	Object describing the plan the customer is subscribed to
	*/

	public function getPlan() {
		return new Stripe_Plan_output(Temboo_Results::getSubItemByKey($this->base, "plan"));
	}
}



/*
  Often you want to be able to charge credit cards without having to hold sensitive card information on your own servers. Stripe.js makes this easy in the browser, but you can use the same technique in other environments with our card token API. Card tokens can be created with your publishable API key, which can safely be embedded in downloadable applications like iPhone and Android apps. You can then use a token anywhere in our API that a card is accepted. Note that tokens are not meant to be stored or used more than once -- to store payment details for use later, you should create a Customer object.

*/

class Stripe_Token_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Object describing the card used to make the charge
	*/

	public function getCreated() {
		return Temboo_Results::getSubItemByKey($this->base, "created");
	}

	/*
	Value is always "token"
	*/

	public function getObject() {
		return Temboo_Results::getSubItemByKey($this->base, "object");
	}

	/*
	In livemode, credit card transactions are actually processed.  In testmode, transactions don't go through the credit card network.
	*/

	public function getLivemode() {
		return Temboo_Results::getSubItemByKey($this->base, "livemode");
	}

	/*
	ID of the Token
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Amount (in the currency specified)
	*/

	public function getAmount() {
		return Temboo_Results::getSubItemByKey($this->base, "amount");
	}

	/*
	Object describing the card used to make the charge
	*/

	public function getCard() {
		return new Stripe_Card_output(Temboo_Results::getSubItemByKey($this->base, "card"));
	}

	/*
	Whether or not this token has already been used (tokens can be used only once)
	*/

	public function getUsed() {
		return Temboo_Results::getSubItemByKey($this->base, "used");
	}

	/*
	(3-letter ISO currency code)
	*/

	public function getCurrency() {
		return Temboo_Results::getSubItemByKey($this->base, "currency");
	}
}




?>
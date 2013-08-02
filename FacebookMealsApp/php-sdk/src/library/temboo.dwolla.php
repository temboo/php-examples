<?php

/**
 * Temboo PHP SDK Dwolla classes
 *
 * Execute Choreographies from the Temboo Dwolla bundle.
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
 * @subpackage Dwolla
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves nearby Dwolla spots within the range of the provided latitude and longitude.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_NearbyContacts extends Temboo_Choreography
{
    /**
     * Retrieves nearby Dwolla spots within the range of the provided latitude and longitude.
     *
     * @param Temboo_Session $session The session that owns this NearbyContacts Choreo.
     * @return Dwolla_Contacts_NearbyContacts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Contacts/NearbyContacts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this NearbyContacts Choreo.
     *
     * @param Dwolla_Contacts_NearbyContacts_Inputs|array $inputs (optional) Inputs as Dwolla_Contacts_NearbyContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Contacts_NearbyContacts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Contacts_NearbyContacts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this NearbyContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Contacts_NearbyContacts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Contacts_NearbyContacts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the NearbyContacts Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_NearbyContacts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the NearbyContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Contacts_NearbyContacts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this NearbyContacts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientID input for this NearbyContacts Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Dwolla (AKA the Consumer Key).
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this NearbyContacts Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Dwolla (AKA the Consumer Secret).
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Latitude input for this NearbyContacts Choreo.
     *
     * @param float $value (required, decimal) Current latitude.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Limit input for this NearbyContacts Choreo.
     *
     * @param int $value (optional, integer) Number of spots to retrieve. Defaults to 10.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Longitude input for this NearbyContacts Choreo.
     *
     * @param float $value (required, decimal) Current longitude.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the Range input for this NearbyContacts Choreo.
     *
     * @param int $value (optional, integer) Range to retrieve spots for in miles.
     * @return Dwolla_Contacts_NearbyContacts_Inputs For method chaining.
     */
    public function setRange($value)
    {
        return $this->set('Range', $value);
    }
}


/**
 * Execution object for the NearbyContacts Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_NearbyContacts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the NearbyContacts Choreo.
     *
     * @param Temboo_Session $session The session that owns this NearbyContacts execution.
     * @param Dwolla_Contacts_NearbyContacts $choreo The choreography object for this execution.
     * @param Dwolla_Contacts_NearbyContacts_Inputs|array $inputs (optional) Inputs as Dwolla_Contacts_NearbyContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Contacts_NearbyContacts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Contacts_NearbyContacts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this NearbyContacts execution.
     *
     * @return Dwolla_Contacts_NearbyContacts_Results New results object.
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
     * Wraps results in appropriate results class for this NearbyContacts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Contacts_NearbyContacts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Contacts_NearbyContacts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the NearbyContacts Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_NearbyContacts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the NearbyContacts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Contacts_NearbyContacts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this NearbyContacts execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Use this method to send funds to a destination user, from the user associated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Send extends Temboo_Choreography
{
    /**
     * Use this method to send funds to a destination user, from the user associated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Send Choreo.
     * @return Dwolla_Transactions_Send New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/Send/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Send Choreo.
     *
     * @param Dwolla_Transactions_Send_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Send_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Send_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_Send_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Send Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Send_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_Send_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Send Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Send_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Send Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Send_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Send input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Send Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Amount input for this Send Choreo.
     *
     * @param float $value (required, decimal) Amount of funds to transfer to the destination user.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the AssumeCosts input for this Send Choreo.
     *
     * @param bool $value (required, boolean) Set to true if the user will assume the Dwolla fee. Set to false if the destination user will assume the Dwolla fee. Does not affect facilitator fees. Defaults to false.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setAssumeCosts($value)
    {
        return $this->set('AssumeCosts', $value);
    }

    /**
     * Set the value for the DestinationId input for this Send Choreo.
     *
     * @param string $value (required, string) Identification of the user to send funds to. Must be the Dwolla identifier, Facebook identifier, Twitter identifier, phone number, or email address.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setDestinationId($value)
    {
        return $this->set('DestinationId', $value);
    }

    /**
     * Set the value for the DestinationType input for this Send Choreo.
     *
     * @param string $value (optional, string) Type of destination user. Defaults to Dwolla. Can be Dwolla, Facebook, Twitter, Email, or Phone.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setDestinationType($value)
    {
        return $this->set('DestinationType', $value);
    }

    /**
     * Set the value for the FacillitatorAmount input for this Send Choreo.
     *
     * @param string $value (required, string) Amount of the facilitator fee to override. Only applicable if the facilitator fee feature is enabled. If set to 0, facilitator fee is disabled for transaction. Cannot exceed 25% of the 'amount'.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setFacillitatorAmount($value)
    {
        return $this->set('FacillitatorAmount', $value);
    }

    /**
     * Set the value for the FundsSource input for this Send Choreo.
     *
     * @param string $value (required, string) Id of funding source to send funds from. Defaults to Balance.  Balance sourced transfers process immediately. Non-balanced sourced transfers may process immediately or take up to five business days.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setFundsSource($value)
    {
        return $this->set('FundsSource', $value);
    }

    /**
     * Set the value for the Notes input for this Send Choreo.
     *
     * @param string $value (required, multiline) Note to attach to the transaction. Limited to 250 characters.
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setNotes($value)
    {
        return $this->set('Notes', $value);
    }

    /**
     * Set the value for the Pin input for this Send Choreo.
     *
     * @param int $value (required, integer) User's PIN associated with their account
     * @return Dwolla_Transactions_Send_Inputs For method chaining.
     */
    public function setPin($value)
    {
        return $this->set('Pin', $value);
    }
}


/**
 * Execution object for the Send Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Send_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Send Choreo.
     *
     * @param Temboo_Session $session The session that owns this Send execution.
     * @param Dwolla_Transactions_Send $choreo The choreography object for this execution.
     * @param Dwolla_Transactions_Send_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Send_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Send_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_Send $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Send execution.
     *
     * @return Dwolla_Transactions_Send_Results New results object.
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
     * Wraps results in appropriate results class for this Send execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_Send_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_Send_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Send Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Send_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Send Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_Send_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Send execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of transactions for the user associated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Listing extends Temboo_Choreography
{
    /**
     * Retrieves a list of transactions for the user associated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Listing Choreo.
     * @return Dwolla_Transactions_Listing New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/Listing/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Listing Choreo.
     *
     * @param Dwolla_Transactions_Listing_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Listing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Listing_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_Listing_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Listing Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Listing_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_Listing_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Listing Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Listing_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Listing Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Listing_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Listing input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Listing Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this Listing Choreo.
     *
     * @param int $value (optional, integer) Number of transactions to retrieve. Defaults to 10. Can be between 1 and 200 transactions.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the SinceDate input for this Listing Choreo.
     *
     * @param string $value (optional, string) Earliest date and time for which to retrieve transactions. Defaults to 7 days prior to current date and time in UTC.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setSinceDate($value)
    {
        return $this->set('SinceDate', $value);
    }

    /**
     * Set the value for the Skip input for this Listing Choreo.
     *
     * @param int $value (optional, integer) Number of transactions to skip. Defaults to 0.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Types input for this Listing Choreo.
     *
     * @param string $value (optional, string) Transaction types to retrieve. Must be delimited by a '|'. Options are money_sent, money_received, deposit, withdrawal, and fee. Defaults to include all transaction types.
     * @return Dwolla_Transactions_Listing_Inputs For method chaining.
     */
    public function setTypes($value)
    {
        return $this->set('Types', $value);
    }
}


/**
 * Execution object for the Listing Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Listing_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Listing Choreo.
     *
     * @param Temboo_Session $session The session that owns this Listing execution.
     * @param Dwolla_Transactions_Listing $choreo The choreography object for this execution.
     * @param Dwolla_Transactions_Listing_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Listing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Listing_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_Listing $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Listing execution.
     *
     * @return Dwolla_Transactions_Listing_Results New results object.
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
     * Wraps results in appropriate results class for this Listing execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_Listing_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_Listing_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Listing Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Listing_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Listing Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_Listing_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Listing execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the account information for the user associated with the given authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Account extends Temboo_Choreography
{
    /**
     * Retrieves the account information for the user associated with the given authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Account Choreo.
     * @return Dwolla_Users_Account New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Users/Account/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Account Choreo.
     *
     * @param Dwolla_Users_Account_Inputs|array $inputs (optional) Inputs as Dwolla_Users_Account_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Users_Account_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Users_Account_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Account Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Users_Account_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Users_Account_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Account Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Account_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Account Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Users_Account_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Account input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Users_Account_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Users_Account_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Account Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Users_Account_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the Account Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Account_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Account Choreo.
     *
     * @param Temboo_Session $session The session that owns this Account execution.
     * @param Dwolla_Users_Account $choreo The choreography object for this execution.
     * @param Dwolla_Users_Account_Inputs|array $inputs (optional) Inputs as Dwolla_Users_Account_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Users_Account_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Users_Account $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Account execution.
     *
     * @return Dwolla_Users_Account_Results New results object.
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
     * Wraps results in appropriate results class for this Account execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Users_Account_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Users_Account_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Account Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Account_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Account Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Users_Account_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Account execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the account information for the user associated with the given authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Stats extends Temboo_Choreography
{
    /**
     * Retrieves the account information for the user associated with the given authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Stats Choreo.
     * @return Dwolla_Transactions_Stats New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/Stats/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Stats Choreo.
     *
     * @param Dwolla_Transactions_Stats_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Stats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Stats_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_Stats_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Stats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Stats_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_Stats_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Stats Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Stats_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Stats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Stats_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Stats input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Stats Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EndDate input for this Stats Choreo.
     *
     * @param string $value (optional, string) Ending date and time to for which to process transactions stats. Defaults to current date and time in UTC.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the StartDate input for this Stats Choreo.
     *
     * @param string $value (optional, string) Starting date and time to for which to process transactions stats. Defaults to 0300 of the current day in UTC.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Types input for this Stats Choreo.
     *
     * @param string $value (optional, string) Types of status to retrieve. Must be comma delimited. Options are TransactionsCount and TransactionsTotal. Defaults to include all stats.
     * @return Dwolla_Transactions_Stats_Inputs For method chaining.
     */
    public function setTypes($value)
    {
        return $this->set('Types', $value);
    }
}


/**
 * Execution object for the Stats Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Stats_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Stats Choreo.
     *
     * @param Temboo_Session $session The session that owns this Stats execution.
     * @param Dwolla_Transactions_Stats $choreo The choreography object for this execution.
     * @param Dwolla_Transactions_Stats_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Stats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Stats_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_Stats $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Stats execution.
     *
     * @return Dwolla_Transactions_Stats_Results New results object.
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
     * Wraps results in appropriate results class for this Stats execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_Stats_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_Stats_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Stats Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Stats_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Stats Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_Stats_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Stats execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Dwolla access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Dwolla access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Dwolla_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Dwolla_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Dwolla_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FinalizeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Dwolla after registering your application.
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Dwolla after registering your application.
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Dwolla_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }
}


/**
 * Execution object for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Dwolla_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Dwolla_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Dwolla_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Dwolla_OAuth_FinalizeOAuth_Results New results object.
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
     * Wraps results in appropriate results class for this FinalizeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The access token for the user that has granted access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
}

/**
 * Retrieves a list of verified funding sources for the user associated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesListing extends Temboo_Choreography
{
    /**
     * Retrieves a list of verified funding sources for the user associated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this FundingSourcesListing Choreo.
     * @return Dwolla_FundingSources_FundingSourcesListing New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/FundingSources/FundingSourcesListing/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FundingSourcesListing Choreo.
     *
     * @param Dwolla_FundingSources_FundingSourcesListing_Inputs|array $inputs (optional) Inputs as Dwolla_FundingSources_FundingSourcesListing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_FundingSources_FundingSourcesListing_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_FundingSources_FundingSourcesListing_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FundingSourcesListing Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_FundingSources_FundingSourcesListing_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FundingSourcesListing Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesListing_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FundingSourcesListing Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FundingSourcesListing input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this FundingSourcesListing Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_FundingSources_FundingSourcesListing_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the FundingSourcesListing Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesListing_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FundingSourcesListing Choreo.
     *
     * @param Temboo_Session $session The session that owns this FundingSourcesListing execution.
     * @param Dwolla_FundingSources_FundingSourcesListing $choreo The choreography object for this execution.
     * @param Dwolla_FundingSources_FundingSourcesListing_Inputs|array $inputs (optional) Inputs as Dwolla_FundingSources_FundingSourcesListing_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_FundingSources_FundingSourcesListing_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_FundingSources_FundingSourcesListing $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FundingSourcesListing execution.
     *
     * @return Dwolla_FundingSources_FundingSourcesListing_Results New results object.
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
     * Wraps results in appropriate results class for this FundingSourcesListing execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_FundingSources_FundingSourcesListing_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_FundingSources_FundingSourcesListing_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FundingSourcesListing Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesListing_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FundingSourcesListing Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_FundingSources_FundingSourcesListing_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FundingSourcesListing execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates an authorization URL and callback ID that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL and callback ID that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Dwolla_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Dwolla_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Dwolla_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_OAuth_InitializeOAuth_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this InitializeOAuth input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dwolla_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dwolla_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Dwolla_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Dwolla after registering your application.
     * @return Dwolla_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Dwolla_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return Dwolla_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the Scope input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) Lists which access permissions the app requires. Multiple scopes - separated by '|' (ex of all: "AccountInfoFull|Contacts|Transactions|Balance|Send|Request|Funding" ). For more info see docs.
     * @return Dwolla_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setScope($value)
    {
        return $this->set('Scope', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Dwolla_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Dwolla_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Dwolla_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Dwolla_OAuth_InitializeOAuth_Results New results object.
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
     * Wraps results in appropriate results class for this InitializeOAuth execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the application's user needs to go to in order to grant access to your application.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAuthorizationURL()
    {
        return $this->get('AuthorizationURL');
    }
    /**
     * Retrieve the value for the "CallbackID" output from this InitializeOAuth execution.
     *
     * @return string (string) An ID used to retrieve the callback data that Temboo stores once your application's user authorizes.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getCallbackID()
    {
        return $this->get('CallbackID');
    }
}

/**
 * Retrieves the account balance for the user associated with the given authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Balance_GetBalance extends Temboo_Choreography
{
    /**
     * Retrieves the account balance for the user associated with the given authorized access token.
     *
     * @param Temboo_Session $session The session that owns this GetBalance Choreo.
     * @return Dwolla_Balance_GetBalance New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Balance/GetBalance/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBalance Choreo.
     *
     * @param Dwolla_Balance_GetBalance_Inputs|array $inputs (optional) Inputs as Dwolla_Balance_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Balance_GetBalance_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Balance_GetBalance_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBalance Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Balance_GetBalance_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Balance_GetBalance_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBalance Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Balance_GetBalance_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBalance Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Balance_GetBalance_Inputs New instance.
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
     * @return Dwolla_Balance_GetBalance_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Balance_GetBalance_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetBalance Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Balance_GetBalance_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the GetBalance Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Balance_GetBalance_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBalance Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBalance execution.
     * @param Dwolla_Balance_GetBalance $choreo The choreography object for this execution.
     * @param Dwolla_Balance_GetBalance_Inputs|array $inputs (optional) Inputs as Dwolla_Balance_GetBalance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Balance_GetBalance_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Balance_GetBalance $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBalance execution.
     *
     * @return Dwolla_Balance_GetBalance_Results New results object.
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
     * @return Dwolla_Balance_GetBalance_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Balance_GetBalance_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBalance Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Balance_GetBalance_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBalance Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Balance_GetBalance_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBalance execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the Dwolla account information for the user associated with the specified consumer credentials and Dwolla account identifier.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Basic extends Temboo_Choreography
{
    /**
     * Retrieves the Dwolla account information for the user associated with the specified consumer credentials and Dwolla account identifier.
     *
     * @param Temboo_Session $session The session that owns this Basic Choreo.
     * @return Dwolla_Users_Basic New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Users/Basic/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Basic Choreo.
     *
     * @param Dwolla_Users_Basic_Inputs|array $inputs (optional) Inputs as Dwolla_Users_Basic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Users_Basic_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Users_Basic_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Basic Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Users_Basic_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Users_Basic_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Basic Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Basic_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Basic Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Users_Basic_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Basic input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountIdentifier input for this Basic Choreo.
     *
     * @param string $value (required, string) Dwolla account identifier or email address of the Dwolla account.
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function setAccountIdentifier($value)
    {
        return $this->set('AccountIdentifier', $value);
    }

    /**
     * Set the value for the ClientID input for this Basic Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Dwolla (AKA the Consumer Key).
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Basic Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Dwolla (AKA the Consumer Secret).
     * @return Dwolla_Users_Basic_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }
}


/**
 * Execution object for the Basic Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Basic_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Basic Choreo.
     *
     * @param Temboo_Session $session The session that owns this Basic execution.
     * @param Dwolla_Users_Basic $choreo The choreography object for this execution.
     * @param Dwolla_Users_Basic_Inputs|array $inputs (optional) Inputs as Dwolla_Users_Basic_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Users_Basic_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Users_Basic $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Basic execution.
     *
     * @return Dwolla_Users_Basic_Results New results object.
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
     * Wraps results in appropriate results class for this Basic execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Users_Basic_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Users_Basic_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Basic Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Users_Basic_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Basic Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Users_Basic_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Basic execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the information for contacts for the user assoicated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_UserContacts extends Temboo_Choreography
{
    /**
     * Retrieves the information for contacts for the user assoicated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this UserContacts Choreo.
     * @return Dwolla_Contacts_UserContacts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Contacts/UserContacts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UserContacts Choreo.
     *
     * @param Dwolla_Contacts_UserContacts_Inputs|array $inputs (optional) Inputs as Dwolla_Contacts_UserContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Contacts_UserContacts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Contacts_UserContacts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Contacts_UserContacts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Contacts_UserContacts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserContacts Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_UserContacts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UserContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Contacts_UserContacts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserContacts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UserContacts Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Limit input for this UserContacts Choreo.
     *
     * @param int $value (optional, integer) Number of contacts to retrieve. Defaults to 10. Can be between 1 and 200 contacts.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Search input for this UserContacts Choreo.
     *
     * @param string $value (optional, string) Search term used to search the contacts.
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setSearch($value)
    {
        return $this->set('Search', $value);
    }

    /**
     * Set the value for the Types input for this UserContacts Choreo.
     *
     * @param string $value (optional, string) Type of accounts to retrieve, in the form of a comma-separated list (e.g. "Facebook,Dwolla")
     * @return Dwolla_Contacts_UserContacts_Inputs For method chaining.
     */
    public function setTypes($value)
    {
        return $this->set('Types', $value);
    }
}


/**
 * Execution object for the UserContacts Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_UserContacts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserContacts Choreo.
     *
     * @param Temboo_Session $session The session that owns this UserContacts execution.
     * @param Dwolla_Contacts_UserContacts $choreo The choreography object for this execution.
     * @param Dwolla_Contacts_UserContacts_Inputs|array $inputs (optional) Inputs as Dwolla_Contacts_UserContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Contacts_UserContacts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Contacts_UserContacts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserContacts execution.
     *
     * @return Dwolla_Contacts_UserContacts_Results New results object.
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
     * Wraps results in appropriate results class for this UserContacts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Contacts_UserContacts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Contacts_UserContacts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UserContacts Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Contacts_UserContacts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UserContacts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Contacts_UserContacts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UserContacts execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the account information for the user associated with the given authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesByID extends Temboo_Choreography
{
    /**
     * Retrieves the account information for the user associated with the given authorized access token.
     *
     * @param Temboo_Session $session The session that owns this FundingSourcesByID Choreo.
     * @return Dwolla_FundingSources_FundingSourcesByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/FundingSources/FundingSourcesByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FundingSourcesByID Choreo.
     *
     * @param Dwolla_FundingSources_FundingSourcesByID_Inputs|array $inputs (optional) Inputs as Dwolla_FundingSources_FundingSourcesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_FundingSources_FundingSourcesByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_FundingSources_FundingSourcesByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FundingSourcesByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_FundingSources_FundingSourcesByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FundingSourcesByID Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FundingSourcesByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FundingSourcesByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this FundingSourcesByID Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the FundingID input for this FundingSourcesByID Choreo.
     *
     * @param string $value (required, string) Funding source identifier of the funding source being requested.
     * @return Dwolla_FundingSources_FundingSourcesByID_Inputs For method chaining.
     */
    public function setFundingID($value)
    {
        return $this->set('FundingID', $value);
    }
}


/**
 * Execution object for the FundingSourcesByID Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FundingSourcesByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this FundingSourcesByID execution.
     * @param Dwolla_FundingSources_FundingSourcesByID $choreo The choreography object for this execution.
     * @param Dwolla_FundingSources_FundingSourcesByID_Inputs|array $inputs (optional) Inputs as Dwolla_FundingSources_FundingSourcesByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_FundingSources_FundingSourcesByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_FundingSources_FundingSourcesByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FundingSourcesByID execution.
     *
     * @return Dwolla_FundingSources_FundingSourcesByID_Results New results object.
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
     * Wraps results in appropriate results class for this FundingSourcesByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_FundingSources_FundingSourcesByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_FundingSources_FundingSourcesByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FundingSourcesByID Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_FundingSources_FundingSourcesByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FundingSourcesByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_FundingSources_FundingSourcesByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FundingSourcesByID execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Use this method to request funds from a source user, originating from the user associated with the authorized access token.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Request extends Temboo_Choreography
{
    /**
     * Use this method to request funds from a source user, originating from the user associated with the authorized access token.
     *
     * @param Temboo_Session $session The session that owns this Request Choreo.
     * @return Dwolla_Transactions_Request New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/Request/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Request Choreo.
     *
     * @param Dwolla_Transactions_Request_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Request_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Request_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_Request_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Request Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Request_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_Request_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Request Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Request_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Request Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_Request_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Request input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Request Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Amount input for this Request Choreo.
     *
     * @param float $value (required, decimal) Amount of funds to request from the source user.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setAmount($value)
    {
        return $this->set('Amount', $value);
    }

    /**
     * Set the value for the FacillitatorAmount input for this Request Choreo.
     *
     * @param float $value (optional, decimal) Amount of the facilitator fee to override. Only applicable if the facilitator fee feature is enabled. If set to 0, facilitator fee is disabled for transaction. Cannot exceed 25% of the 'amount'.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setFacillitatorAmount($value)
    {
        return $this->set('FacillitatorAmount', $value);
    }

    /**
     * Set the value for the Notes input for this Request Choreo.
     *
     * @param string $value (optional, multiline) Note to attach to the transaction. Limited to 250 characters.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setNotes($value)
    {
        return $this->set('Notes', $value);
    }

    /**
     * Set the value for the Pin input for this Request Choreo.
     *
     * @param int $value (required, integer) User's PIN associated with their account.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setPin($value)
    {
        return $this->set('Pin', $value);
    }

    /**
     * Set the value for the SourceID input for this Request Choreo.
     *
     * @param string $value (required, string) Identification of the user to request funds from. Must be the Dwolla identifier, Facebook identifier, Twitter screename, phone number, or email address.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setSourceID($value)
    {
        return $this->set('SourceID', $value);
    }

    /**
     * Set the value for the SourceType input for this Request Choreo.
     *
     * @param string $value (optional, string) Type of destination user. Defaults to Dwolla. Can be Dwolla, Facebook, Twitter, Email, or Phone.
     * @return Dwolla_Transactions_Request_Inputs For method chaining.
     */
    public function setSourceType($value)
    {
        return $this->set('SourceType', $value);
    }
}


/**
 * Execution object for the Request Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Request_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Request Choreo.
     *
     * @param Temboo_Session $session The session that owns this Request execution.
     * @param Dwolla_Transactions_Request $choreo The choreography object for this execution.
     * @param Dwolla_Transactions_Request_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_Request_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_Request_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_Request $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Request execution.
     *
     * @return Dwolla_Transactions_Request_Results New results object.
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
     * Wraps results in appropriate results class for this Request execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_Request_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_Request_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Request Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_Request_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Request Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_Request_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Request execution.
     *
     * @return string (json) The response from Dwolla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the account information about the specified transaction by Transaction ID.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_ByID extends Temboo_Choreography
{
    /**
     * Retrieves the account information about the specified transaction by Transaction ID.
     *
     * @param Temboo_Session $session The session that owns this ByID Choreo.
     * @return Dwolla_Transactions_ByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Dwolla/Transactions/ByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByID Choreo.
     *
     * @param Dwolla_Transactions_ByID_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_ByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_ByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Dwolla_Transactions_ByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_ByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Dwolla_Transactions_ByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByID Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_ByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Dwolla_Transactions_ByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Dwolla_Transactions_ByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Dwolla_Transactions_ByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ByID Choreo.
     *
     * @param string $value (required, string) A valid OAuth token.
     * @return Dwolla_Transactions_ByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the TransactionID input for this ByID Choreo.
     *
     * @param int $value (required, integer) Transaction identifier of the transaction being requested.
     * @return Dwolla_Transactions_ByID_Inputs For method chaining.
     */
    public function setTransactionID($value)
    {
        return $this->set('TransactionID', $value);
    }
}


/**
 * Execution object for the ByID Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_ByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByID execution.
     * @param Dwolla_Transactions_ByID $choreo The choreography object for this execution.
     * @param Dwolla_Transactions_ByID_Inputs|array $inputs (optional) Inputs as Dwolla_Transactions_ByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Dwolla_Transactions_ByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Dwolla_Transactions_ByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByID execution.
     *
     * @return Dwolla_Transactions_ByID_Results New results object.
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
     * Wraps results in appropriate results class for this ByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Dwolla_Transactions_ByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Dwolla_Transactions_ByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByID Choreo.
 *
 * @package Temboo
 * @subpackage Dwolla
 */
class Dwolla_Transactions_ByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Dwolla_Transactions_ByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByID execution.
     *
     * @return string (json) The response from Dwolla.
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
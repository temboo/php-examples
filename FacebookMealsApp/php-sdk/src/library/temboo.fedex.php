<?php

/**
 * Temboo PHP SDK FedEx classes
 *
 * Execute Choreographies from the Temboo FedEx bundle.
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
 * @subpackage FedEx
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves the nearest FedEx locations for a specified address.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_FedExLocatorRequest extends Temboo_Choreography
{
    /**
     * Retrieves the nearest FedEx locations for a specified address.
     *
     * @param Temboo_Session $session The session that owns this FedExLocatorRequest Choreo.
     * @return FedEx_FedExLocatorRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/FedExLocatorRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FedExLocatorRequest Choreo.
     *
     * @param FedEx_FedExLocatorRequest_Inputs|array $inputs (optional) Inputs as FedEx_FedExLocatorRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_FedExLocatorRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_FedExLocatorRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FedExLocatorRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_FedExLocatorRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_FedExLocatorRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FedExLocatorRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_FedExLocatorRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FedExLocatorRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_FedExLocatorRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FedExLocatorRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this FedExLocatorRequest Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this FedExLocatorRequest Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key provided by FedEx Web Services
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the City input for this FedExLocatorRequest Choreo.
     *
     * @param string $value (required, string) The city to use in the locator request
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the CountryCode input for this FedExLocatorRequest Choreo.
     *
     * @param string $value (required, string) The country code to use in the locator request
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the MeterNumber input for this FedExLocatorRequest Choreo.
     *
     * @param string $value (required, string) The Production Meter Number provided by FedEx Web Services
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the Password input for this FedExLocatorRequest Choreo.
     *
     * @param string $value (required, password) The Production Password provided by FedEx Web Services
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PostalCode input for this FedExLocatorRequest Choreo.
     *
     * @param string $value (required, string) The postal code to use in the locator request
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the StateOrProvinceCode input for this FedExLocatorRequest Choreo.
     *
     * @param string $value (required, string) The state or province code to use in the locator request
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setStateOrProvinceCode($value)
    {
        return $this->set('StateOrProvinceCode', $value);
    }

    /**
     * Set the value for the Street input for this FedExLocatorRequest Choreo.
     *
     * @param string $value (required, string) The street to use in the locator request
     * @return FedEx_FedExLocatorRequest_Inputs For method chaining.
     */
    public function setStreet($value)
    {
        return $this->set('Street', $value);
    }
}


/**
 * Execution object for the FedExLocatorRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_FedExLocatorRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FedExLocatorRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this FedExLocatorRequest execution.
     * @param FedEx_FedExLocatorRequest $choreo The choreography object for this execution.
     * @param FedEx_FedExLocatorRequest_Inputs|array $inputs (optional) Inputs as FedEx_FedExLocatorRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_FedExLocatorRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_FedExLocatorRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FedExLocatorRequest execution.
     *
     * @return FedEx_FedExLocatorRequest_Results New results object.
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
     * Wraps results in appropriate results class for this FedExLocatorRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_FedExLocatorRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_FedExLocatorRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FedExLocatorRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_FedExLocatorRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FedExLocatorRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_FedExLocatorRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "BusinessAddress" output from this FedExLocatorRequest execution.
     *
     * @return string (string) The Business Address parsed from the FedEx response
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getBusinessAddress()
    {
        return $this->get('BusinessAddress');
    }
    /**
     * Retrieve the value for the "BusinessName" output from this FedExLocatorRequest execution.
     *
     * @return string (string) The Business Name parsed from the FedEx response
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getBusinessName()
    {
        return $this->get('BusinessName');
    }
    /**
     * Retrieve the value for the "Response" output from this FedExLocatorRequest execution.
     *
     * @return string (xml) The response from FedEx
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves location information from FedEx Web Services for a specified postal code.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_PostalCodeInquiryRequest extends Temboo_Choreography
{
    /**
     * Retrieves location information from FedEx Web Services for a specified postal code.
     *
     * @param Temboo_Session $session The session that owns this PostalCodeInquiryRequest Choreo.
     * @return FedEx_PostalCodeInquiryRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/PostalCodeInquiryRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PostalCodeInquiryRequest Choreo.
     *
     * @param FedEx_PostalCodeInquiryRequest_Inputs|array $inputs (optional) Inputs as FedEx_PostalCodeInquiryRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_PostalCodeInquiryRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_PostalCodeInquiryRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PostalCodeInquiryRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_PostalCodeInquiryRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_PostalCodeInquiryRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PostalCodeInquiryRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_PostalCodeInquiryRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PostalCodeInquiryRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_PostalCodeInquiryRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PostalCodeInquiryRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_PostalCodeInquiryRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_PostalCodeInquiryRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this PostalCodeInquiryRequest Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number
     * @return FedEx_PostalCodeInquiryRequest_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this PostalCodeInquiryRequest Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key provided by FedEx Web Services
     * @return FedEx_PostalCodeInquiryRequest_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the CountryCode input for this PostalCodeInquiryRequest Choreo.
     *
     * @param string $value (required, string) The country code to use in the inquiry request
     * @return FedEx_PostalCodeInquiryRequest_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the MeterNumber input for this PostalCodeInquiryRequest Choreo.
     *
     * @param string $value (required, string) The Production Meter Number provided by FedEx Web Services
     * @return FedEx_PostalCodeInquiryRequest_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the Password input for this PostalCodeInquiryRequest Choreo.
     *
     * @param string $value (required, password) The Production Password provided by FedEx Web Services
     * @return FedEx_PostalCodeInquiryRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PostalCode input for this PostalCodeInquiryRequest Choreo.
     *
     * @param string $value (required, string) The postal code to use in the inquiry request
     * @return FedEx_PostalCodeInquiryRequest_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }
}


/**
 * Execution object for the PostalCodeInquiryRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_PostalCodeInquiryRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PostalCodeInquiryRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this PostalCodeInquiryRequest execution.
     * @param FedEx_PostalCodeInquiryRequest $choreo The choreography object for this execution.
     * @param FedEx_PostalCodeInquiryRequest_Inputs|array $inputs (optional) Inputs as FedEx_PostalCodeInquiryRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_PostalCodeInquiryRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_PostalCodeInquiryRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PostalCodeInquiryRequest execution.
     *
     * @return FedEx_PostalCodeInquiryRequest_Results New results object.
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
     * Wraps results in appropriate results class for this PostalCodeInquiryRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_PostalCodeInquiryRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_PostalCodeInquiryRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PostalCodeInquiryRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_PostalCodeInquiryRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PostalCodeInquiryRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_PostalCodeInquiryRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PostalCodeInquiryRequest execution.
     *
     * @return string (xml) The response from FedEx
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves available shipping options and delivery dates for a specified origin and destination.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_ServiceAvailabilityRequest extends Temboo_Choreography
{
    /**
     * Retrieves available shipping options and delivery dates for a specified origin and destination.
     *
     * @param Temboo_Session $session The session that owns this ServiceAvailabilityRequest Choreo.
     * @return FedEx_ServiceAvailabilityRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/ServiceAvailabilityRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ServiceAvailabilityRequest Choreo.
     *
     * @param FedEx_ServiceAvailabilityRequest_Inputs|array $inputs (optional) Inputs as FedEx_ServiceAvailabilityRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_ServiceAvailabilityRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_ServiceAvailabilityRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ServiceAvailabilityRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_ServiceAvailabilityRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_ServiceAvailabilityRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ServiceAvailabilityRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_ServiceAvailabilityRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ServiceAvailabilityRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_ServiceAvailabilityRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ServiceAvailabilityRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this ServiceAvailabilityRequest Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this ServiceAvailabilityRequest Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key provided by FedEx Web Services
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the DestinationCountryCode input for this ServiceAvailabilityRequest Choreo.
     *
     * @param string $value (required, string) The destination country code to use as an input to the service availability request
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function setDestinationCountryCode($value)
    {
        return $this->set('DestinationCountryCode', $value);
    }

    /**
     * Set the value for the DestinationPostalCode input for this ServiceAvailabilityRequest Choreo.
     *
     * @param string $value (required, string) The destination postal code to use as an input to the service availability request
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function setDestinationPostalCode($value)
    {
        return $this->set('DestinationPostalCode', $value);
    }

    /**
     * Set the value for the MeterNumber input for this ServiceAvailabilityRequest Choreo.
     *
     * @param string $value (required, string) The Production Meter Number provided by FedEx Web Services
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the OriginCountryCode input for this ServiceAvailabilityRequest Choreo.
     *
     * @param string $value (required, string) The origin country code to use as an input to the service availability request
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function setOriginCountryCode($value)
    {
        return $this->set('OriginCountryCode', $value);
    }

    /**
     * Set the value for the Password input for this ServiceAvailabilityRequest Choreo.
     *
     * @param string $value (required, password) The Production Password provided by FedEx Web Services
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ShipDate input for this ServiceAvailabilityRequest Choreo.
     *
     * @param string $value (required, date) The date to use for the service availability request (epoch timestamp in milliseconds or formatted like yyyy-MM-dd)
     * @return FedEx_ServiceAvailabilityRequest_Inputs For method chaining.
     */
    public function setShipDate($value)
    {
        return $this->set('ShipDate', $value);
    }
}


/**
 * Execution object for the ServiceAvailabilityRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_ServiceAvailabilityRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ServiceAvailabilityRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this ServiceAvailabilityRequest execution.
     * @param FedEx_ServiceAvailabilityRequest $choreo The choreography object for this execution.
     * @param FedEx_ServiceAvailabilityRequest_Inputs|array $inputs (optional) Inputs as FedEx_ServiceAvailabilityRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_ServiceAvailabilityRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_ServiceAvailabilityRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ServiceAvailabilityRequest execution.
     *
     * @return FedEx_ServiceAvailabilityRequest_Results New results object.
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
     * Wraps results in appropriate results class for this ServiceAvailabilityRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_ServiceAvailabilityRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_ServiceAvailabilityRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ServiceAvailabilityRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_ServiceAvailabilityRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ServiceAvailabilityRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_ServiceAvailabilityRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ServiceAvailabilityRequest execution.
     *
     * @return string (xml) The response from FedEx
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves package information for a specified tracking number.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingRequest extends Temboo_Choreography
{
    /**
     * Retrieves package information for a specified tracking number.
     *
     * @param Temboo_Session $session The session that owns this TrackingRequest Choreo.
     * @return FedEx_TrackingRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/TrackingRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TrackingRequest Choreo.
     *
     * @param FedEx_TrackingRequest_Inputs|array $inputs (optional) Inputs as FedEx_TrackingRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_TrackingRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_TrackingRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TrackingRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_TrackingRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_TrackingRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TrackingRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TrackingRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_TrackingRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TrackingRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_TrackingRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_TrackingRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this TrackingRequest Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number
     * @return FedEx_TrackingRequest_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this TrackingRequest Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key provided by FedEx Web Services
     * @return FedEx_TrackingRequest_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the MeterNumber input for this TrackingRequest Choreo.
     *
     * @param string $value (required, string) The Production Meter Number provided by FedEx Web Services
     * @return FedEx_TrackingRequest_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the Password input for this TrackingRequest Choreo.
     *
     * @param string $value (required, password) The Production Password provided by FedEx Web Services
     * @return FedEx_TrackingRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the TrackingNumber input for this TrackingRequest Choreo.
     *
     * @param string $value (required, string) The package tracking number to use in the request
     * @return FedEx_TrackingRequest_Inputs For method chaining.
     */
    public function setTrackingNumber($value)
    {
        return $this->set('TrackingNumber', $value);
    }
}


/**
 * Execution object for the TrackingRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TrackingRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this TrackingRequest execution.
     * @param FedEx_TrackingRequest $choreo The choreography object for this execution.
     * @param FedEx_TrackingRequest_Inputs|array $inputs (optional) Inputs as FedEx_TrackingRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_TrackingRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_TrackingRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TrackingRequest execution.
     *
     * @return FedEx_TrackingRequest_Results New results object.
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
     * Wraps results in appropriate results class for this TrackingRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_TrackingRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_TrackingRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TrackingRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_TrackingRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TrackingRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_TrackingRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TrackingRequest execution.
     *
     * @return string (xml) The response from FedEx
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "StatusDescription" output from this TrackingRequest execution.
     *
     * @return string (string) The status description for the package which is parsed from the FedEx response
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getStatusDescription()
    {
        return $this->get('StatusDescription');
    }
}

/**
 * Allows you to submit an address for validation to FedEx Web Services.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_AddressValidationRequest extends Temboo_Choreography
{
    /**
     * Allows you to submit an address for validation to FedEx Web Services.
     *
     * @param Temboo_Session $session The session that owns this AddressValidationRequest Choreo.
     * @return FedEx_AddressValidationRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FedEx/AddressValidationRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddressValidationRequest Choreo.
     *
     * @param FedEx_AddressValidationRequest_Inputs|array $inputs (optional) Inputs as FedEx_AddressValidationRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_AddressValidationRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FedEx_AddressValidationRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddressValidationRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_AddressValidationRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FedEx_AddressValidationRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddressValidationRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_AddressValidationRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddressValidationRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FedEx_AddressValidationRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddressValidationRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountNumber input for this AddressValidationRequest Choreo.
     *
     * @param string $value (required, string) Your FedEx Account Number
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setAccountNumber($value)
    {
        return $this->set('AccountNumber', $value);
    }

    /**
     * Set the value for the AuthenticationKey input for this AddressValidationRequest Choreo.
     *
     * @param string $value (required, string) The Production Authentication Key provided by FedEx Web Services
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setAuthenticationKey($value)
    {
        return $this->set('AuthenticationKey', $value);
    }

    /**
     * Set the value for the City input for this AddressValidationRequest Choreo.
     *
     * @param string $value (required, string) The city to use in the address validation request
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the CountryCode input for this AddressValidationRequest Choreo.
     *
     * @param string $value (required, string) The country code to use in the address validation request
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the MeterNumber input for this AddressValidationRequest Choreo.
     *
     * @param string $value (required, string) The Production Meter Number provided by FedEx Web Services
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setMeterNumber($value)
    {
        return $this->set('MeterNumber', $value);
    }

    /**
     * Set the value for the Password input for this AddressValidationRequest Choreo.
     *
     * @param string $value (required, password) The Production Password provided by FedEx Web Services
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PostalCode input for this AddressValidationRequest Choreo.
     *
     * @param string $value (required, string) The postal code to use in the address validation request
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the State input for this AddressValidationRequest Choreo.
     *
     * @param string $value (required, string) The state to use in the address validation request
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Street input for this AddressValidationRequest Choreo.
     *
     * @param string $value (required, string) The street to use in the address validation request
     * @return FedEx_AddressValidationRequest_Inputs For method chaining.
     */
    public function setStreet($value)
    {
        return $this->set('Street', $value);
    }
}


/**
 * Execution object for the AddressValidationRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_AddressValidationRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddressValidationRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddressValidationRequest execution.
     * @param FedEx_AddressValidationRequest $choreo The choreography object for this execution.
     * @param FedEx_AddressValidationRequest_Inputs|array $inputs (optional) Inputs as FedEx_AddressValidationRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FedEx_AddressValidationRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FedEx_AddressValidationRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddressValidationRequest execution.
     *
     * @return FedEx_AddressValidationRequest_Results New results object.
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
     * Wraps results in appropriate results class for this AddressValidationRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FedEx_AddressValidationRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FedEx_AddressValidationRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddressValidationRequest Choreo.
 *
 * @package Temboo
 * @subpackage FedEx
 */
class FedEx_AddressValidationRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddressValidationRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FedEx_AddressValidationRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "DeliveryPointValidation" output from this AddressValidationRequest execution.
     *
     * @return string (string) The Delivery Point Validation parsed from the FedEx response
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getDeliveryPointValidation()
    {
        return $this->get('DeliveryPointValidation');
    }
    /**
     * Retrieve the value for the "Response" output from this AddressValidationRequest execution.
     *
     * @return string (xml) The response from FedEx
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
<?php

/**
 * Temboo PHP SDK USPS classes
 *
 * Execute Choreographies from the Temboo USPS bundle.
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
 * @subpackage USPS
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Lookup city and state using incomplete address information.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_CityStateLookup extends Temboo_Choreography
{
    /**
     * Lookup city and state using incomplete address information.
     *
     * @param Temboo_Session $session The session that owns this CityStateLookup Choreo.
     * @return USPS_AddressInformationAPI_CityStateLookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/USPS/AddressInformationAPI/CityStateLookup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CityStateLookup Choreo.
     *
     * @param USPS_AddressInformationAPI_CityStateLookup_Inputs|array $inputs (optional) Inputs as USPS_AddressInformationAPI_CityStateLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_AddressInformationAPI_CityStateLookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new USPS_AddressInformationAPI_CityStateLookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CityStateLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_AddressInformationAPI_CityStateLookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new USPS_AddressInformationAPI_CityStateLookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CityStateLookup Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_CityStateLookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CityStateLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_AddressInformationAPI_CityStateLookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CityStateLookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return USPS_AddressInformationAPI_CityStateLookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return USPS_AddressInformationAPI_CityStateLookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Endpoint input for this CityStateLookup Choreo.
     *
     * @param string $value (optional, string) If you are accessing the production server, set to 'production'. Defaults to 'testing' which indicates that you are using the sandbox.
     * @return USPS_AddressInformationAPI_CityStateLookup_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Password input for this CityStateLookup Choreo.
     *
     * @param string $value (required, password) The password assigned by USPS
     * @return USPS_AddressInformationAPI_CityStateLookup_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UserId input for this CityStateLookup Choreo.
     *
     * @param string $value (required, string) Alphanumeric ID assigned by USPS
     * @return USPS_AddressInformationAPI_CityStateLookup_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }

    /**
     * Set the value for the Zip input for this CityStateLookup Choreo.
     *
     * @param int $value (required, integer) Maximum characters allowed: 5
     * @return USPS_AddressInformationAPI_CityStateLookup_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the CityStateLookup Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_CityStateLookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CityStateLookup Choreo.
     *
     * @param Temboo_Session $session The session that owns this CityStateLookup execution.
     * @param USPS_AddressInformationAPI_CityStateLookup $choreo The choreography object for this execution.
     * @param USPS_AddressInformationAPI_CityStateLookup_Inputs|array $inputs (optional) Inputs as USPS_AddressInformationAPI_CityStateLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_AddressInformationAPI_CityStateLookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, USPS_AddressInformationAPI_CityStateLookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CityStateLookup execution.
     *
     * @return USPS_AddressInformationAPI_CityStateLookup_Results New results object.
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
     * Wraps results in appropriate results class for this CityStateLookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return USPS_AddressInformationAPI_CityStateLookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new USPS_AddressInformationAPI_CityStateLookup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CityStateLookup Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_CityStateLookup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CityStateLookup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return USPS_AddressInformationAPI_CityStateLookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CityStateLookup execution.
     *
     * @return string (xml) The response from USPS Web Service
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Request USPS Priority Mail shipping information for a given origin and destination.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_PriorityMailServiceRequest extends Temboo_Choreography
{
    /**
     * Request USPS Priority Mail shipping information for a given origin and destination.
     *
     * @param Temboo_Session $session The session that owns this PriorityMailServiceRequest Choreo.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/USPS/DeliveryInformationAPI/PriorityMailServiceRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PriorityMailServiceRequest Choreo.
     *
     * @param USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PriorityMailServiceRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PriorityMailServiceRequest Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PriorityMailServiceRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PriorityMailServiceRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the DestinationZip input for this PriorityMailServiceRequest Choreo.
     *
     * @param int $value (required, integer) First 3 digits of a 5-digit zip code
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs For method chaining.
     */
    public function setDestinationZip($value)
    {
        return $this->set('DestinationZip', $value);
    }

    /**
     * Set the value for the Endpoint input for this PriorityMailServiceRequest Choreo.
     *
     * @param string $value (optional, string) If you are accessing the production server, set to 'production'. Defaults to 'testing' which indicates that you are using the sandbox.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the OriginZip input for this PriorityMailServiceRequest Choreo.
     *
     * @param int $value (required, integer) First 3 digits of a 5-digit zip code
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs For method chaining.
     */
    public function setOriginZip($value)
    {
        return $this->set('OriginZip', $value);
    }

    /**
     * Set the value for the Password input for this PriorityMailServiceRequest Choreo.
     *
     * @param string $value (required, password) The password assigned by USPS
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UserId input for this PriorityMailServiceRequest Choreo.
     *
     * @param string $value (required, string) Alphanumeric ID assigned by USPS.  Required value.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the PriorityMailServiceRequest Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PriorityMailServiceRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this PriorityMailServiceRequest execution.
     * @param USPS_DeliveryInformationAPI_PriorityMailServiceRequest $choreo The choreography object for this execution.
     * @param USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, USPS_DeliveryInformationAPI_PriorityMailServiceRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PriorityMailServiceRequest execution.
     *
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Results New results object.
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
     * Wraps results in appropriate results class for this PriorityMailServiceRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PriorityMailServiceRequest Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PriorityMailServiceRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_PriorityMailServiceRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PriorityMailServiceRequest execution.
     *
     * @return string (xml) The response from USPS Web Service
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Request USPS Parcel Post, Bound Printed Matter, Library Mail, or Media Mail shipping information for a given origin and destination.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_PackageServicesRequest extends Temboo_Choreography
{
    /**
     * Request USPS Parcel Post, Bound Printed Matter, Library Mail, or Media Mail shipping information for a given origin and destination.
     *
     * @param Temboo_Session $session The session that owns this PackageServicesRequest Choreo.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/USPS/DeliveryInformationAPI/PackageServicesRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this PackageServicesRequest Choreo.
     *
     * @param USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new USPS_DeliveryInformationAPI_PackageServicesRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this PackageServicesRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the PackageServicesRequest Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the PackageServicesRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this PackageServicesRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Response input for this PackageServicesRequest Choreo.
     *
     * @param string $value (required, xml) The response from USPS Web Service
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs For method chaining.
     */
    public function setResponse($value)
    {
        return $this->set('Response', $value);
    }

    /**
     * Set the value for the DestinationZip input for this PackageServicesRequest Choreo.
     *
     * @param int $value (required, integer) First 3 digits of a 5-digit zip code.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs For method chaining.
     */
    public function setDestinationZip($value)
    {
        return $this->set('DestinationZip', $value);
    }

    /**
     * Set the value for the Endpoint input for this PackageServicesRequest Choreo.
     *
     * @param string $value (optional, string) If you are accessing the production server, set to 'production'. Defaults to 'testing' which indicates that you are using the sandbox.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the OriginZip input for this PackageServicesRequest Choreo.
     *
     * @param int $value (required, integer) First 3 digits of a 5-digit zip code.  Required value.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs For method chaining.
     */
    public function setOriginZip($value)
    {
        return $this->set('OriginZip', $value);
    }

    /**
     * Set the value for the Password input for this PackageServicesRequest Choreo.
     *
     * @param string $value (required, password) The password assigned by USPS
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UserId input for this PackageServicesRequest Choreo.
     *
     * @param string $value (required, string) Alphanumeric ID assigned by USPS
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the PackageServicesRequest Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_PackageServicesRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the PackageServicesRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this PackageServicesRequest execution.
     * @param USPS_DeliveryInformationAPI_PackageServicesRequest $choreo The choreography object for this execution.
     * @param USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_PackageServicesRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, USPS_DeliveryInformationAPI_PackageServicesRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this PackageServicesRequest execution.
     *
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Results New results object.
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
     * Wraps results in appropriate results class for this PackageServicesRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new USPS_DeliveryInformationAPI_PackageServicesRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the PackageServicesRequest Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_PackageServicesRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the PackageServicesRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_PackageServicesRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this PackageServicesRequest execution.
     *
     * @return string (required, xml) The response from USPS Web Service
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lookup zip codes using incomplete address information.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_ZipCodeLookup extends Temboo_Choreography
{
    /**
     * Lookup zip codes using incomplete address information.
     *
     * @param Temboo_Session $session The session that owns this ZipCodeLookup Choreo.
     * @return USPS_AddressInformationAPI_ZipCodeLookup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/USPS/AddressInformationAPI/ZipCodeLookup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ZipCodeLookup Choreo.
     *
     * @param USPS_AddressInformationAPI_ZipCodeLookup_Inputs|array $inputs (optional) Inputs as USPS_AddressInformationAPI_ZipCodeLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new USPS_AddressInformationAPI_ZipCodeLookup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ZipCodeLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new USPS_AddressInformationAPI_ZipCodeLookup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ZipCodeLookup Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_ZipCodeLookup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ZipCodeLookup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ZipCodeLookup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ApyOrSuite input for this ZipCodeLookup Choreo.
     *
     * @param string $value (optional, string) Used to provide an apartment or suite number, if applicable. Maximum characters allowed: 38.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function setApyOrSuite($value)
    {
        return $this->set('ApyOrSuite', $value);
    }

    /**
     * Set the value for the City input for this ZipCodeLookup Choreo.
     *
     * @param string $value (required, string) Maximum characters allowed: 15.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Endpoint input for this ZipCodeLookup Choreo.
     *
     * @param string $value (optional, string) If you are accessing the production server, set to 'production'. Defaults to 'testing' which indicates that you are using the sandbox.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the FirmName input for this ZipCodeLookup Choreo.
     *
     * @param string $value (optional, string) Maximum characters allowed: 38.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function setFirmName($value)
    {
        return $this->set('FirmName', $value);
    }

    /**
     * Set the value for the Password input for this ZipCodeLookup Choreo.
     *
     * @param string $value (required, password) The password assigned by USPS
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the State input for this ZipCodeLookup Choreo.
     *
     * @param string $value (required, string) Maximum characters allowed: 2.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the StreetAddress input for this ZipCodeLookup Choreo.
     *
     * @param string $value (required, string) Street address.  Maximum characters allowed: 38.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function setStreetAddress($value)
    {
        return $this->set('StreetAddress', $value);
    }

    /**
     * Set the value for the UserId input for this ZipCodeLookup Choreo.
     *
     * @param string $value (required, string) Alphanumeric ID assigned by USPS
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the ZipCodeLookup Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_ZipCodeLookup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ZipCodeLookup Choreo.
     *
     * @param Temboo_Session $session The session that owns this ZipCodeLookup execution.
     * @param USPS_AddressInformationAPI_ZipCodeLookup $choreo The choreography object for this execution.
     * @param USPS_AddressInformationAPI_ZipCodeLookup_Inputs|array $inputs (optional) Inputs as USPS_AddressInformationAPI_ZipCodeLookup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, USPS_AddressInformationAPI_ZipCodeLookup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ZipCodeLookup execution.
     *
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Results New results object.
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
     * Wraps results in appropriate results class for this ZipCodeLookup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new USPS_AddressInformationAPI_ZipCodeLookup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ZipCodeLookup Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_ZipCodeLookup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ZipCodeLookup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return USPS_AddressInformationAPI_ZipCodeLookup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ZipCodeLookup execution.
     *
     * @return string (xml) The response from USPS Web Service
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Request USPS Express Mail shipping information for a given origin and destination.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_ExpressMailServiceRequest extends Temboo_Choreography
{
    /**
     * Request USPS Express Mail shipping information for a given origin and destination.
     *
     * @param Temboo_Session $session The session that owns this ExpressMailServiceRequest Choreo.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/USPS/DeliveryInformationAPI/ExpressMailServiceRequest/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ExpressMailServiceRequest Choreo.
     *
     * @param USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ExpressMailServiceRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ExpressMailServiceRequest Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ExpressMailServiceRequest Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ExpressMailServiceRequest input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Date input for this ExpressMailServiceRequest Choreo.
     *
     * @param string $value (required, date) Date the package is to be shipped. Must take the form 'MM/DD/YYYY'.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the DestinationZip input for this ExpressMailServiceRequest Choreo.
     *
     * @param int $value (required, integer) Five digit zip code.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs For method chaining.
     */
    public function setDestinationZip($value)
    {
        return $this->set('DestinationZip', $value);
    }

    /**
     * Set the value for the Endpoint input for this ExpressMailServiceRequest Choreo.
     *
     * @param string $value (optional, string) If you are accessing the production server, set to 'production'. Defaults to 'testing' which indicates that you are using the sandbox.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the OriginZip input for this ExpressMailServiceRequest Choreo.
     *
     * @param int $value (required, integer) Three or five digit zip code.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs For method chaining.
     */
    public function setOriginZip($value)
    {
        return $this->set('OriginZip', $value);
    }

    /**
     * Set the value for the Password input for this ExpressMailServiceRequest Choreo.
     *
     * @param string $value (required, password) The password assigned by USPS
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UserId input for this ExpressMailServiceRequest Choreo.
     *
     * @param string $value (required, string) Alphanumeric ID assigned by USPS
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the ExpressMailServiceRequest Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ExpressMailServiceRequest Choreo.
     *
     * @param Temboo_Session $session The session that owns this ExpressMailServiceRequest execution.
     * @param USPS_DeliveryInformationAPI_ExpressMailServiceRequest $choreo The choreography object for this execution.
     * @param USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, USPS_DeliveryInformationAPI_ExpressMailServiceRequest $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ExpressMailServiceRequest execution.
     *
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Results New results object.
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
     * Wraps results in appropriate results class for this ExpressMailServiceRequest execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ExpressMailServiceRequest Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ExpressMailServiceRequest Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_ExpressMailServiceRequest_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ExpressMailServiceRequest execution.
     *
     * @return string (xml) The response from USPS Web Service
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Validates and supplements incomplete address information.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_ValidateAddress extends Temboo_Choreography
{
    /**
     * Validates and supplements incomplete address information.
     *
     * @param Temboo_Session $session The session that owns this ValidateAddress Choreo.
     * @return USPS_AddressInformationAPI_ValidateAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/USPS/AddressInformationAPI/ValidateAddress/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ValidateAddress Choreo.
     *
     * @param USPS_AddressInformationAPI_ValidateAddress_Inputs|array $inputs (optional) Inputs as USPS_AddressInformationAPI_ValidateAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_AddressInformationAPI_ValidateAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new USPS_AddressInformationAPI_ValidateAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ValidateAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new USPS_AddressInformationAPI_ValidateAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ValidateAddress Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_ValidateAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ValidateAddress Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ValidateAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AptOrSuite input for this ValidateAddress Choreo.
     *
     * @param string $value (optional, string) Used to provide an apartment or suite number, if applicable. Maximum characters allowed: 38.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setAptOrSuite($value)
    {
        return $this->set('AptOrSuite', $value);
    }

    /**
     * Set the value for the City input for this ValidateAddress Choreo.
     *
     * @param string $value (optional, string) Maximum characters allowed: 15. Either City and State or Zip are required.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Endpoint input for this ValidateAddress Choreo.
     *
     * @param string $value (optional, string) If you are accessing the production server, set to 'production'. Defaults to 'testing' which indicates that you are using the sandbox.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the FirmName input for this ValidateAddress Choreo.
     *
     * @param string $value (optional, string) Maximum characters allowed: 38.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setFirmName($value)
    {
        return $this->set('FirmName', $value);
    }

    /**
     * Set the value for the Password input for this ValidateAddress Choreo.
     *
     * @param string $value (required, password) The password assigned by USPS
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the State input for this ValidateAddress Choreo.
     *
     * @param string $value (optional, string) Maximum characters allowed: 2. Either City and State or Zip are required.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the StreetAddress input for this ValidateAddress Choreo.
     *
     * @param string $value (required, string) Street address. Maximum characters allowed: 38.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setStreetAddress($value)
    {
        return $this->set('StreetAddress', $value);
    }

    /**
     * Set the value for the Urbanization input for this ValidateAddress Choreo.
     *
     * @param string $value (optional, string) Maximum characters allowed: 28. For Puerto Rico addresses only.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setUrbanization($value)
    {
        return $this->set('Urbanization', $value);
    }

    /**
     * Set the value for the UserId input for this ValidateAddress Choreo.
     *
     * @param string $value (required, string) Alphanumeric ID assigned by USPS
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }

    /**
     * Set the value for the Zip4DigitCode input for this ValidateAddress Choreo.
     *
     * @param int $value (optional, integer) Maximum characters allowed: 4
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setZip4DigitCode($value)
    {
        return $this->set('Zip4DigitCode', $value);
    }

    /**
     * Set the value for the Zip input for this ValidateAddress Choreo.
     *
     * @param int $value (optional, integer) Maximum characters allowed: 5. Either City and State or Zip are required.
     * @return USPS_AddressInformationAPI_ValidateAddress_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the ValidateAddress Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_ValidateAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ValidateAddress Choreo.
     *
     * @param Temboo_Session $session The session that owns this ValidateAddress execution.
     * @param USPS_AddressInformationAPI_ValidateAddress $choreo The choreography object for this execution.
     * @param USPS_AddressInformationAPI_ValidateAddress_Inputs|array $inputs (optional) Inputs as USPS_AddressInformationAPI_ValidateAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_AddressInformationAPI_ValidateAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, USPS_AddressInformationAPI_ValidateAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ValidateAddress execution.
     *
     * @return USPS_AddressInformationAPI_ValidateAddress_Results New results object.
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
     * Wraps results in appropriate results class for this ValidateAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return USPS_AddressInformationAPI_ValidateAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new USPS_AddressInformationAPI_ValidateAddress_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ValidateAddress Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_AddressInformationAPI_ValidateAddress_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ValidateAddress Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return USPS_AddressInformationAPI_ValidateAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ValidateAddress execution.
     *
     * @return string (xml) The response from USPS Web Service
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Track a package sent via USPS and return tracking information with details in separate XML tags.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_TrackConfirmFields extends Temboo_Choreography
{
    /**
     * Track a package sent via USPS and return tracking information with details in separate XML tags.
     *
     * @param Temboo_Session $session The session that owns this TrackConfirmFields Choreo.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/USPS/DeliveryInformationAPI/TrackConfirmFields/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TrackConfirmFields Choreo.
     *
     * @param USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new USPS_DeliveryInformationAPI_TrackConfirmFields_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TrackConfirmFields Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TrackConfirmFields Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TrackConfirmFields Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TrackConfirmFields input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Endpoint input for this TrackConfirmFields Choreo.
     *
     * @param string $value (optional, string) If you are accessing the production server, set to 'production'. Defaults to 'testing' which indicates that you are using the sandbox.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Password input for this TrackConfirmFields Choreo.
     *
     * @param string $value (required, password) The password assigned by USPS
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the TrackID input for this TrackConfirmFields Choreo.
     *
     * @param string $value (required, string) The tracking number.  Can be alphanumeric characters.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs For method chaining.
     */
    public function setTrackID($value)
    {
        return $this->set('TrackID', $value);
    }

    /**
     * Set the value for the UserId input for this TrackConfirmFields Choreo.
     *
     * @param string $value (required, string) Alphanumeric ID assigned by USPS
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the TrackConfirmFields Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_TrackConfirmFields_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TrackConfirmFields Choreo.
     *
     * @param Temboo_Session $session The session that owns this TrackConfirmFields execution.
     * @param USPS_DeliveryInformationAPI_TrackConfirmFields $choreo The choreography object for this execution.
     * @param USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_TrackConfirmFields_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, USPS_DeliveryInformationAPI_TrackConfirmFields $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TrackConfirmFields execution.
     *
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Results New results object.
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
     * Wraps results in appropriate results class for this TrackConfirmFields execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new USPS_DeliveryInformationAPI_TrackConfirmFields_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TrackConfirmFields Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_TrackConfirmFields_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TrackConfirmFields Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_TrackConfirmFields_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TrackConfirmFields execution.
     *
     * @return string (xml) The response from USPS Web Service
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Request tracking information for a package with a given tracking id.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_TrackConfirm extends Temboo_Choreography
{
    /**
     * Request tracking information for a package with a given tracking id.
     *
     * @param Temboo_Session $session The session that owns this TrackConfirm Choreo.
     * @return USPS_DeliveryInformationAPI_TrackConfirm New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/USPS/DeliveryInformationAPI/TrackConfirm/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TrackConfirm Choreo.
     *
     * @param USPS_DeliveryInformationAPI_TrackConfirm_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_TrackConfirm_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new USPS_DeliveryInformationAPI_TrackConfirm_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TrackConfirm Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new USPS_DeliveryInformationAPI_TrackConfirm_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TrackConfirm Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_TrackConfirm_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TrackConfirm Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TrackConfirm input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Endpoint input for this TrackConfirm Choreo.
     *
     * @param string $value (optional, string) If you are accessing the production server, set to 'production'. Defaults to 'testing' which indicates that you are using the sandbox.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Inputs For method chaining.
     */
    public function setEndpoint($value)
    {
        return $this->set('Endpoint', $value);
    }

    /**
     * Set the value for the Password input for this TrackConfirm Choreo.
     *
     * @param string $value (required, password) The password assigned by USPS
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the TrackID input for this TrackConfirm Choreo.
     *
     * @param string $value (required, string) The tracking number.  Can be alphanumeric characters.  Required value.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Inputs For method chaining.
     */
    public function setTrackID($value)
    {
        return $this->set('TrackID', $value);
    }

    /**
     * Set the value for the UserId input for this TrackConfirm Choreo.
     *
     * @param string $value (required, string) Alphanumeric ID assigned by USPS
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Inputs For method chaining.
     */
    public function setUserId($value)
    {
        return $this->set('UserId', $value);
    }
}


/**
 * Execution object for the TrackConfirm Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_TrackConfirm_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TrackConfirm Choreo.
     *
     * @param Temboo_Session $session The session that owns this TrackConfirm execution.
     * @param USPS_DeliveryInformationAPI_TrackConfirm $choreo The choreography object for this execution.
     * @param USPS_DeliveryInformationAPI_TrackConfirm_Inputs|array $inputs (optional) Inputs as USPS_DeliveryInformationAPI_TrackConfirm_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, USPS_DeliveryInformationAPI_TrackConfirm $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TrackConfirm execution.
     *
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Results New results object.
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
     * Wraps results in appropriate results class for this TrackConfirm execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new USPS_DeliveryInformationAPI_TrackConfirm_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TrackConfirm Choreo.
 *
 * @package Temboo
 * @subpackage USPS
 */
class USPS_DeliveryInformationAPI_TrackConfirm_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TrackConfirm Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return USPS_DeliveryInformationAPI_TrackConfirm_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TrackConfirm execution.
     *
     * @return string (xml) The response from USPS Web Service
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
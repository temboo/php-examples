<?php

/**
 * Temboo PHP SDK Twilio classes
 *
 * Execute Choreographies from the Temboo Twilio bundle.
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
 * @subpackage Twilio
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves an individual recording.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_GetRecording extends Temboo_Choreography
{
    /**
     * Retrieves an individual recording.
     *
     * @param Temboo_Session $session The session that owns this GetRecording Choreo.
     * @return Twilio_Recordings_GetRecording New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Recordings/GetRecording/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecording Choreo.
     *
     * @param Twilio_Recordings_GetRecording_Inputs|array $inputs (optional) Inputs as Twilio_Recordings_GetRecording_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Recordings_GetRecording_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Recordings_GetRecording_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecording Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Recordings_GetRecording_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Recordings_GetRecording_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecording Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_GetRecording_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecording Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Recordings_GetRecording_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecording input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Recordings_GetRecording_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Recordings_GetRecording_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetRecording Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Recordings_GetRecording_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetRecording Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Recordings_GetRecording_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the RecordingSID input for this GetRecording Choreo.
     *
     * @param string $value (required, string) The id of the recording to retrieve.
     * @return Twilio_Recordings_GetRecording_Inputs For method chaining.
     */
    public function setRecordingSID($value)
    {
        return $this->set('RecordingSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetRecording Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), xml, wav, and mp3.
     * @return Twilio_Recordings_GetRecording_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetRecording Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the recording. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Recordings_GetRecording_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetRecording Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_GetRecording_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecording Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecording execution.
     * @param Twilio_Recordings_GetRecording $choreo The choreography object for this execution.
     * @param Twilio_Recordings_GetRecording_Inputs|array $inputs (optional) Inputs as Twilio_Recordings_GetRecording_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Recordings_GetRecording_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Recordings_GetRecording $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecording execution.
     *
     * @return Twilio_Recordings_GetRecording_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecording execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Recordings_GetRecording_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Recordings_GetRecording_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecording Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_GetRecording_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecording Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Recordings_GetRecording_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecording execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Attempts to update an existing short code resource.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_UpdateShortCode extends Temboo_Choreography
{
    /**
     * Attempts to update an existing short code resource.
     *
     * @param Temboo_Session $session The session that owns this UpdateShortCode Choreo.
     * @return Twilio_ShortCodes_UpdateShortCode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/ShortCodes/UpdateShortCode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateShortCode Choreo.
     *
     * @param Twilio_ShortCodes_UpdateShortCode_Inputs|array $inputs (optional) Inputs as Twilio_ShortCodes_UpdateShortCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ShortCodes_UpdateShortCode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_ShortCodes_UpdateShortCode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateShortCode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_ShortCodes_UpdateShortCode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateShortCode Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_UpdateShortCode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateShortCode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateShortCode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIVersion input for this UpdateShortCode Choreo.
     *
     * @param string $value (optional, string) SMSs to this short code will start a new TwiML session with this API version. Either 2010-04-01 or 2008-08-01.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setAPIVersion($value)
    {
        return $this->set('APIVersion', $value);
    }

    /**
     * Set the value for the AccountSID input for this UpdateShortCode Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this UpdateShortCode Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this UpdateShortCode Choreo.
     *
     * @param string $value (optional, string) A human readable description of the short code, with maximum length 64 characters.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateShortCode Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShortCodeSID input for this UpdateShortCode Choreo.
     *
     * @param string $value (required, string) The id of the short code to update.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setShortCodeSID($value)
    {
        return $this->set('ShortCodeSID', $value);
    }

    /**
     * Set the value for the SmsFallbackMethod input for this UpdateShortCode Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsFallbackUrl. Either GET or POST.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setSmsFallbackMethod($value)
    {
        return $this->set('SmsFallbackMethod', $value);
    }

    /**
     * Set the value for the SmsFallbackURL input for this UpdateShortCode Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs requesting or executing the TwiML at the SmsUrl.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setSmsFallbackURL($value)
    {
        return $this->set('SmsFallbackURL', $value);
    }

    /**
     * Set the value for the SmsMethod input for this UpdateShortCode Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsUrl. Either GET or POST.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setSmsMethod($value)
    {
        return $this->set('SmsMethod', $value);
    }

    /**
     * Set the value for the SmsURL input for this UpdateShortCode Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio should request when somebody sends an SMS to the short code.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setSmsURL($value)
    {
        return $this->set('SmsURL', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this UpdateShortCode Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with short code. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_ShortCodes_UpdateShortCode_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the UpdateShortCode Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_UpdateShortCode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateShortCode Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateShortCode execution.
     * @param Twilio_ShortCodes_UpdateShortCode $choreo The choreography object for this execution.
     * @param Twilio_ShortCodes_UpdateShortCode_Inputs|array $inputs (optional) Inputs as Twilio_ShortCodes_UpdateShortCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ShortCodes_UpdateShortCode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_ShortCodes_UpdateShortCode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateShortCode execution.
     *
     * @return Twilio_ShortCodes_UpdateShortCode_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateShortCode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_ShortCodes_UpdateShortCode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_ShortCodes_UpdateShortCode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateShortCode Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_UpdateShortCode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateShortCode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_ShortCodes_UpdateShortCode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateShortCode execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates the name or status of a Twilio subaccount.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_UpdateAccount extends Temboo_Choreography
{
    /**
     * Updates the name or status of a Twilio subaccount.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccount Choreo.
     * @return Twilio_Accounts_UpdateAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Accounts/UpdateAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateAccount Choreo.
     *
     * @param Twilio_Accounts_UpdateAccount_Inputs|array $inputs (optional) Inputs as Twilio_Accounts_UpdateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Accounts_UpdateAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Accounts_UpdateAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Accounts_UpdateAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Accounts_UpdateAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateAccount Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_UpdateAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Accounts_UpdateAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this UpdateAccount Choreo.
     *
     * @param string $value (required, string) The AccountSID provided by Twilio.
     * @return Twilio_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this UpdateAccount Choreo.
     *
     * @param string $value (required, string) The authorization token provided by Twilio.
     * @return Twilio_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) Updates the human-readable description of this account.
     * @return Twilio_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are json (the default) and xml.
     * @return Twilio_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Status input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) Updates the status of this account. Valid values are: closed, suspended, or active.
     * @return Twilio_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount to update. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the UpdateAccount Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_UpdateAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccount execution.
     * @param Twilio_Accounts_UpdateAccount $choreo The choreography object for this execution.
     * @param Twilio_Accounts_UpdateAccount_Inputs|array $inputs (optional) Inputs as Twilio_Accounts_UpdateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Accounts_UpdateAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Accounts_UpdateAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateAccount execution.
     *
     * @return Twilio_Accounts_UpdateAccount_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Accounts_UpdateAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Accounts_UpdateAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateAccount Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_UpdateAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Accounts_UpdateAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateAccount execution.
     *
     * @return string (json) The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of toll-free available phone numbers that match the specified filters.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_AvailablePhoneNumbers_TollFreeList extends Temboo_Choreography
{
    /**
     * Returns a list of toll-free available phone numbers that match the specified filters.
     *
     * @param Temboo_Session $session The session that owns this TollFreeList Choreo.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/AvailablePhoneNumbers/TollFreeList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TollFreeList Choreo.
     *
     * @param Twilio_AvailablePhoneNumbers_TollFreeList_Inputs|array $inputs (optional) Inputs as Twilio_AvailablePhoneNumbers_TollFreeList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_AvailablePhoneNumbers_TollFreeList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TollFreeList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_AvailablePhoneNumbers_TollFreeList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TollFreeList Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_AvailablePhoneNumbers_TollFreeList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TollFreeList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TollFreeList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this TollFreeList Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AreaCode input for this TollFreeList Choreo.
     *
     * @param int $value (optional, integer) Find phone numbers in the specified area code. (US and Canada only).
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function setAreaCode($value)
    {
        return $this->set('AreaCode', $value);
    }

    /**
     * Set the value for the AuthToken input for this TollFreeList Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Contains input for this TollFreeList Choreo.
     *
     * @param string $value (optional, string) A pattern to match phone numbers on. Valid characters are '*' and [0-9a-zA-Z]. The '*' character will match any single digit.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function setContains($value)
    {
        return $this->set('Contains', $value);
    }

    /**
     * Set the value for the IsoCountryCode input for this TollFreeList Choreo.
     *
     * @param string $value (optional, string) The country code to search within. Defaults to US.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function setIsoCountryCode($value)
    {
        return $this->set('IsoCountryCode', $value);
    }

    /**
     * Set the value for the PageSize input for this TollFreeList Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this TollFreeList Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this TollFreeList Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the TollFreeList Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_AvailablePhoneNumbers_TollFreeList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TollFreeList Choreo.
     *
     * @param Temboo_Session $session The session that owns this TollFreeList execution.
     * @param Twilio_AvailablePhoneNumbers_TollFreeList $choreo The choreography object for this execution.
     * @param Twilio_AvailablePhoneNumbers_TollFreeList_Inputs|array $inputs (optional) Inputs as Twilio_AvailablePhoneNumbers_TollFreeList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_AvailablePhoneNumbers_TollFreeList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TollFreeList execution.
     *
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Results New results object.
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
     * Wraps results in appropriate results class for this TollFreeList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_AvailablePhoneNumbers_TollFreeList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TollFreeList Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_AvailablePhoneNumbers_TollFreeList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TollFreeList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_AvailablePhoneNumbers_TollFreeList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TollFreeList execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing Twilio phone number.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_UpdatePhoneNumber extends Temboo_Choreography
{
    /**
     * Updates an existing Twilio phone number.
     *
     * @param Temboo_Session $session The session that owns this UpdatePhoneNumber Choreo.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/IncomingPhoneNumbers/UpdatePhoneNumber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdatePhoneNumber Choreo.
     *
     * @param Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdatePhoneNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdatePhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdatePhoneNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdatePhoneNumber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIVersion input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) Calls to this phone number will start a new TwiML session with this API version. Either 2010-04-01 or 2008-08-01.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setAPIVersion($value)
    {
        return $this->set('APIVersion', $value);
    }

    /**
     * Set the value for the AccountSID input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) A human readable description of the new incoming phone number resource, with maximum length 64 characters.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the IncomingPhoneNumberSID input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (required, string) The id of the incoming phone number to update.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setIncomingPhoneNumberSID($value)
    {
        return $this->set('IncomingPhoneNumberSID', $value);
    }

    /**
     * Set the value for the NewAccountSID input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The unique 34 character id of the account to which you wish to transfer this phone number.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setNewAccountSID($value)
    {
        return $this->set('NewAccountSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SmsApplicationSID input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The 34 character sid of the application Twilio should use to handle SMSs sent to this number.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setSmsApplicationSID($value)
    {
        return $this->set('SmsApplicationSID', $value);
    }

    /**
     * Set the value for the SmsFallbackMethod input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsFallbackUrl. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setSmsFallbackMethod($value)
    {
        return $this->set('SmsFallbackMethod', $value);
    }

    /**
     * Set the value for the SmsFallbackURL input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs requesting or executing the TwiML defined by SmsUrl.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setSmsFallbackURL($value)
    {
        return $this->set('SmsFallbackURL', $value);
    }

    /**
     * Set the value for the SmsMethod input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsUrl. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setSmsMethod($value)
    {
        return $this->set('SmsMethod', $value);
    }

    /**
     * Set the value for the SmsURL input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio should request when somebody sends an SMS to the new phone number.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setSmsURL($value)
    {
        return $this->set('SmsURL', $value);
    }

    /**
     * Set the value for the StatusCallbackMethod input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method Twilio will use to make requests to the StatusCallback URL. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setStatusCallbackMethod($value)
    {
        return $this->set('StatusCallbackMethod', $value);
    }

    /**
     * Set the value for the StatusCallback input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio will request to pass status parameters (such as call ended) to your application.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setStatusCallback($value)
    {
        return $this->set('StatusCallback', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the phone number. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }

    /**
     * Set the value for the VoiceApplicationSID input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The 34 character sid of the application Twilio should use to handle phone calls to this number.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setVoiceApplicationSID($value)
    {
        return $this->set('VoiceApplicationSID', $value);
    }

    /**
     * Set the value for the VoiceCallerIDLookup input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) Do a lookup of a caller's name from the CNAM database and post it to your app. Either true or false.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setVoiceCallerIDLookup($value)
    {
        return $this->set('VoiceCallerIDLookup', $value);
    }

    /**
     * Set the value for the VoiceFallbackMethod input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the VoiceFallbackURL. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setVoiceFallbackMethod($value)
    {
        return $this->set('VoiceFallbackMethod', $value);
    }

    /**
     * Set the value for the VoiceFallbackURL input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs requesting or executing the TwiML defined by VoiceURL.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setVoiceFallbackURL($value)
    {
        return $this->set('VoiceFallbackURL', $value);
    }

    /**
     * Set the value for the VoiceMethod input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the VoiceURL. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setVoiceMethod($value)
    {
        return $this->set('VoiceMethod', $value);
    }

    /**
     * Set the value for the VoiceURL input for this UpdatePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio should request when somebody dials the phone number.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs For method chaining.
     */
    public function setVoiceURL($value)
    {
        return $this->set('VoiceURL', $value);
    }
}


/**
 * Execution object for the UpdatePhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdatePhoneNumber Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdatePhoneNumber execution.
     * @param Twilio_IncomingPhoneNumbers_UpdatePhoneNumber $choreo The choreography object for this execution.
     * @param Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_IncomingPhoneNumbers_UpdatePhoneNumber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdatePhoneNumber execution.
     *
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Results New results object.
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
     * Wraps results in appropriate results class for this UpdatePhoneNumber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdatePhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdatePhoneNumber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_UpdatePhoneNumber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdatePhoneNumber execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Twilio phone numbers purchased from Twilio or ported to Twilio.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_ListPhoneNumbers extends Temboo_Choreography
{
    /**
     * Returns a list of Twilio phone numbers purchased from Twilio or ported to Twilio.
     *
     * @param Temboo_Session $session The session that owns this ListPhoneNumbers Choreo.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/IncomingPhoneNumbers/ListPhoneNumbers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListPhoneNumbers Choreo.
     *
     * @param Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListPhoneNumbers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListPhoneNumbers Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListPhoneNumbers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListPhoneNumbers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListPhoneNumbers Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListPhoneNumbers Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this ListPhoneNumbers Choreo.
     *
     * @param string $value (optional, string) Only return the incoming phone number resources with friendly names that exactly match this name.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the PageSize input for this ListPhoneNumbers Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListPhoneNumbers Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PhoneNumber input for this ListPhoneNumbers Choreo.
     *
     * @param string $value (optional, string) Only return the incoming phone number resources that match this pattern. You can specify partial numbers and use '*' as a wildcard for any digit.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function setPhoneNumber($value)
    {
        return $this->set('PhoneNumber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListPhoneNumbers Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListPhoneNumbers Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the list of phone numbers. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListPhoneNumbers Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListPhoneNumbers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListPhoneNumbers execution.
     * @param Twilio_IncomingPhoneNumbers_ListPhoneNumbers $choreo The choreography object for this execution.
     * @param Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_IncomingPhoneNumbers_ListPhoneNumbers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListPhoneNumbers execution.
     *
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Results New results object.
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
     * Wraps results in appropriate results class for this ListPhoneNumbers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListPhoneNumbers Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListPhoneNumbers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_ListPhoneNumbers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListPhoneNumbers execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of queues within a Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_ListQueues extends Temboo_Choreography
{
    /**
     * Returns a list of queues within a Twilio account.
     *
     * @param Temboo_Session $session The session that owns this ListQueues Choreo.
     * @return Twilio_Queues_ListQueues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Queues/ListQueues/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListQueues Choreo.
     *
     * @param Twilio_Queues_ListQueues_Inputs|array $inputs (optional) Inputs as Twilio_Queues_ListQueues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_ListQueues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Queues_ListQueues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListQueues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_ListQueues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Queues_ListQueues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListQueues Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_ListQueues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListQueues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_ListQueues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListQueues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Queues_ListQueues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Queues_ListQueues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListQueues Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Queues_ListQueues_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListQueues Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Queues_ListQueues_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the PageSize input for this ListQueues Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_Queues_ListQueues_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListQueues Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_Queues_ListQueues_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListQueues Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Queues_ListQueues_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListQueues Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the list of queues to retrieve. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Queues_ListQueues_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListQueues Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_ListQueues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListQueues Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListQueues execution.
     * @param Twilio_Queues_ListQueues $choreo The choreography object for this execution.
     * @param Twilio_Queues_ListQueues_Inputs|array $inputs (optional) Inputs as Twilio_Queues_ListQueues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_ListQueues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Queues_ListQueues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListQueues execution.
     *
     * @return Twilio_Queues_ListQueues_Results New results object.
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
     * Wraps results in appropriate results class for this ListQueues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Queues_ListQueues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Queues_ListQueues_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListQueues Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_ListQueues_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListQueues Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Queues_ListQueues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListQueues execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves general account information associated with the Twilio credentials provided.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_GetAccount extends Temboo_Choreography
{
    /**
     * Retrieves general account information associated with the Twilio credentials provided.
     *
     * @param Temboo_Session $session The session that owns this GetAccount Choreo.
     * @return Twilio_Accounts_GetAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Accounts/GetAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAccount Choreo.
     *
     * @param Twilio_Accounts_GetAccount_Inputs|array $inputs (optional) Inputs as Twilio_Accounts_GetAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Accounts_GetAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Accounts_GetAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Accounts_GetAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Accounts_GetAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAccount Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_GetAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Accounts_GetAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Accounts_GetAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Accounts_GetAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetAccount Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Accounts_GetAccount_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetAccount Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Accounts_GetAccount_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetAccount Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Accounts_GetAccount_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetAccount Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount to retrieve. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Accounts_GetAccount_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetAccount Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_GetAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAccount execution.
     * @param Twilio_Accounts_GetAccount $choreo The choreography object for this execution.
     * @param Twilio_Accounts_GetAccount_Inputs|array $inputs (optional) Inputs as Twilio_Accounts_GetAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Accounts_GetAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Accounts_GetAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAccount execution.
     *
     * @return Twilio_Accounts_GetAccount_Results New results object.
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
     * Wraps results in appropriate results class for this GetAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Accounts_GetAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Accounts_GetAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAccount Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_GetAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Accounts_GetAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAccount execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an individual outgoing caller id resource.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_GetCallerID extends Temboo_Choreography
{
    /**
     * Retrieves an individual outgoing caller id resource.
     *
     * @param Temboo_Session $session The session that owns this GetCallerID Choreo.
     * @return Twilio_OutgoingCallerIDs_GetCallerID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/OutgoingCallerIDs/GetCallerID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCallerID Choreo.
     *
     * @param Twilio_OutgoingCallerIDs_GetCallerID_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_GetCallerID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_OutgoingCallerIDs_GetCallerID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCallerID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_OutgoingCallerIDs_GetCallerID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_GetCallerID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCallerID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCallerID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetCallerID Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetCallerID Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the OutgoingCallerSID input for this GetCallerID Choreo.
     *
     * @param string $value (required, string) The id of the outgoing caller to retrieve.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Inputs For method chaining.
     */
    public function setOutgoingCallerSID($value)
    {
        return $this->set('OutgoingCallerSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCallerID Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetCallerID Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the outgoing caller id. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_GetCallerID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCallerID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCallerID execution.
     * @param Twilio_OutgoingCallerIDs_GetCallerID $choreo The choreography object for this execution.
     * @param Twilio_OutgoingCallerIDs_GetCallerID_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_GetCallerID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_OutgoingCallerIDs_GetCallerID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCallerID execution.
     *
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Results New results object.
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
     * Wraps results in appropriate results class for this GetCallerID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_OutgoingCallerIDs_GetCallerID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_GetCallerID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCallerID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_GetCallerID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCallerID execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns an individual phone number purchased from Twilio or ported to Twilio.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_GetPhoneNumber extends Temboo_Choreography
{
    /**
     * Returns an individual phone number purchased from Twilio or ported to Twilio.
     *
     * @param Temboo_Session $session The session that owns this GetPhoneNumber Choreo.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/IncomingPhoneNumbers/GetPhoneNumber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPhoneNumber Choreo.
     *
     * @param Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_IncomingPhoneNumbers_GetPhoneNumber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPhoneNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPhoneNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPhoneNumber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetPhoneNumber Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetPhoneNumber Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the IncomingPhoneNumberSID input for this GetPhoneNumber Choreo.
     *
     * @param string $value (required, string) The id of the incoming phone number to retrieve.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs For method chaining.
     */
    public function setIncomingPhoneNumberSID($value)
    {
        return $this->set('IncomingPhoneNumberSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the phone number. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetPhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_GetPhoneNumber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPhoneNumber Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPhoneNumber execution.
     * @param Twilio_IncomingPhoneNumbers_GetPhoneNumber $choreo The choreography object for this execution.
     * @param Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_GetPhoneNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_IncomingPhoneNumbers_GetPhoneNumber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPhoneNumber execution.
     *
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Results New results object.
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
     * Wraps results in appropriate results class for this GetPhoneNumber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_IncomingPhoneNumbers_GetPhoneNumber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_GetPhoneNumber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPhoneNumber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_GetPhoneNumber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPhoneNumber execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of recordings generated during a call.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListRecordings extends Temboo_Choreography
{
    /**
     * Returns a list of recordings generated during a call.
     *
     * @param Temboo_Session $session The session that owns this ListRecordings Choreo.
     * @return Twilio_Calls_ListRecordings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Calls/ListRecordings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListRecordings Choreo.
     *
     * @param Twilio_Calls_ListRecordings_Inputs|array $inputs (optional) Inputs as Twilio_Calls_ListRecordings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_ListRecordings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Calls_ListRecordings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListRecordings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_ListRecordings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Calls_ListRecordings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListRecordings Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListRecordings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListRecordings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_ListRecordings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListRecordings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Calls_ListRecordings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Calls_ListRecordings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListRecordings Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Calls_ListRecordings_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListRecordings Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Calls_ListRecordings_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the CallSID input for this ListRecordings Choreo.
     *
     * @param string $value (required, string) The unique id of the call to retrieve a list of recordings for.
     * @return Twilio_Calls_ListRecordings_Inputs For method chaining.
     */
    public function setCallSID($value)
    {
        return $this->set('CallSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListRecordings Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Calls_ListRecordings_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListRecordings Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the call. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Calls_ListRecordings_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListRecordings Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListRecordings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListRecordings Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListRecordings execution.
     * @param Twilio_Calls_ListRecordings $choreo The choreography object for this execution.
     * @param Twilio_Calls_ListRecordings_Inputs|array $inputs (optional) Inputs as Twilio_Calls_ListRecordings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_ListRecordings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Calls_ListRecordings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListRecordings execution.
     *
     * @return Twilio_Calls_ListRecordings_Results New results object.
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
     * Wraps results in appropriate results class for this ListRecordings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Calls_ListRecordings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Calls_ListRecordings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListRecordings Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListRecordings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListRecordings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Calls_ListRecordings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListRecordings execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get comprehensive log information for a specified Notification SID. 
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_GetNotification extends Temboo_Choreography
{
    /**
     * Get comprehensive log information for a specified Notification SID. 
     *
     * @param Temboo_Session $session The session that owns this GetNotification Choreo.
     * @return Twilio_Notifications_GetNotification New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Notifications/GetNotification/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetNotification Choreo.
     *
     * @param Twilio_Notifications_GetNotification_Inputs|array $inputs (optional) Inputs as Twilio_Notifications_GetNotification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Notifications_GetNotification_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Notifications_GetNotification_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNotification Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Notifications_GetNotification_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Notifications_GetNotification_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNotification Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_GetNotification_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetNotification Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Notifications_GetNotification_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNotification input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Notifications_GetNotification_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Notifications_GetNotification_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetNotification Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Notifications_GetNotification_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetNotification Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Notifications_GetNotification_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the NotificationSID input for this GetNotification Choreo.
     *
     * @param string $value (required, string) Enter the SID of the notification resource to be retrieved.
     * @return Twilio_Notifications_GetNotification_Inputs For method chaining.
     */
    public function setNotificationSID($value)
    {
        return $this->set('NotificationSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetNotification Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Notifications_GetNotification_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetNotification Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount to get the notification for. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Notifications_GetNotification_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetNotification Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_GetNotification_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNotification Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetNotification execution.
     * @param Twilio_Notifications_GetNotification $choreo The choreography object for this execution.
     * @param Twilio_Notifications_GetNotification_Inputs|array $inputs (optional) Inputs as Twilio_Notifications_GetNotification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Notifications_GetNotification_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Notifications_GetNotification $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNotification execution.
     *
     * @return Twilio_Notifications_GetNotification_Results New results object.
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
     * Wraps results in appropriate results class for this GetNotification execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Notifications_GetNotification_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Notifications_GetNotification_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetNotification Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_GetNotification_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetNotification Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Notifications_GetNotification_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetNotification execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the single Call with a given id.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_GetCall extends Temboo_Choreography
{
    /**
     * Returns the single Call with a given id.
     *
     * @param Temboo_Session $session The session that owns this GetCall Choreo.
     * @return Twilio_Calls_GetCall New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Calls/GetCall/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetCall Choreo.
     *
     * @param Twilio_Calls_GetCall_Inputs|array $inputs (optional) Inputs as Twilio_Calls_GetCall_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_GetCall_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Calls_GetCall_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCall Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_GetCall_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Calls_GetCall_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCall Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_GetCall_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetCall Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_GetCall_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCall input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Calls_GetCall_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Calls_GetCall_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetCall Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Calls_GetCall_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetCall Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Calls_GetCall_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the CallSID input for this GetCall Choreo.
     *
     * @param string $value (required, string) The unique id of the call to retrieve.
     * @return Twilio_Calls_GetCall_Inputs For method chaining.
     */
    public function setCallSID($value)
    {
        return $this->set('CallSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCall Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Calls_GetCall_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetCall Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the call. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Calls_GetCall_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetCall Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_GetCall_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCall Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetCall execution.
     * @param Twilio_Calls_GetCall $choreo The choreography object for this execution.
     * @param Twilio_Calls_GetCall_Inputs|array $inputs (optional) Inputs as Twilio_Calls_GetCall_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_GetCall_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Calls_GetCall $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCall execution.
     *
     * @return Twilio_Calls_GetCall_Results New results object.
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
     * Wraps results in appropriate results class for this GetCall execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Calls_GetCall_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Calls_GetCall_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetCall Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_GetCall_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetCall Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Calls_GetCall_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetCall execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates the status of a conference participant.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_UpdateParticipant extends Temboo_Choreography
{
    /**
     * Updates the status of a conference participant.
     *
     * @param Temboo_Session $session The session that owns this UpdateParticipant Choreo.
     * @return Twilio_Conferences_UpdateParticipant New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Conferences/UpdateParticipant/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateParticipant Choreo.
     *
     * @param Twilio_Conferences_UpdateParticipant_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_UpdateParticipant_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_UpdateParticipant_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Conferences_UpdateParticipant_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateParticipant Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_UpdateParticipant_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Conferences_UpdateParticipant_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateParticipant Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_UpdateParticipant_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateParticipant Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_UpdateParticipant_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateParticipant input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Conferences_UpdateParticipant_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Conferences_UpdateParticipant_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this UpdateParticipant Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_UpdateParticipant_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this UpdateParticipant Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_UpdateParticipant_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the CallSID input for this UpdateParticipant Choreo.
     *
     * @param string $value (required, string) The call id associated with the participant to update.
     * @return Twilio_Conferences_UpdateParticipant_Inputs For method chaining.
     */
    public function setCallSID($value)
    {
        return $this->set('CallSID', $value);
    }

    /**
     * Set the value for the ConferenceSID input for this UpdateParticipant Choreo.
     *
     * @param string $value (required, string) The id of the conference that the participant is in.
     * @return Twilio_Conferences_UpdateParticipant_Inputs For method chaining.
     */
    public function setConferenceSID($value)
    {
        return $this->set('ConferenceSID', $value);
    }

    /**
     * Set the value for the Muted input for this UpdateParticipant Choreo.
     *
     * @param string $value (required, string) Specifying true will mute the participant, while false will un-mute. Anything other than true or false is interpreted as false.
     * @return Twilio_Conferences_UpdateParticipant_Inputs For method chaining.
     */
    public function setMuted($value)
    {
        return $this->set('Muted', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateParticipant Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Conferences_UpdateParticipant_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this UpdateParticipant Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the conference. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Conferences_UpdateParticipant_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the UpdateParticipant Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_UpdateParticipant_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateParticipant Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateParticipant execution.
     * @param Twilio_Conferences_UpdateParticipant $choreo The choreography object for this execution.
     * @param Twilio_Conferences_UpdateParticipant_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_UpdateParticipant_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_UpdateParticipant_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Conferences_UpdateParticipant $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateParticipant execution.
     *
     * @return Twilio_Conferences_UpdateParticipant_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateParticipant execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Conferences_UpdateParticipant_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Conferences_UpdateParticipant_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateParticipant Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_UpdateParticipant_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateParticipant Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Conferences_UpdateParticipant_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateParticipant execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of conferences within an account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_ListConferences extends Temboo_Choreography
{
    /**
     * Returns a list of conferences within an account.
     *
     * @param Temboo_Session $session The session that owns this ListConferences Choreo.
     * @return Twilio_Conferences_ListConferences New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Conferences/ListConferences/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListConferences Choreo.
     *
     * @param Twilio_Conferences_ListConferences_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_ListConferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_ListConferences_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Conferences_ListConferences_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListConferences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_ListConferences_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Conferences_ListConferences_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListConferences Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_ListConferences_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListConferences Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_ListConferences_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListConferences input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListConferences Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListConferences Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the DateCreated input for this ListConferences Choreo.
     *
     * @param string $value (optional, string) Only show conferences that started on this date, given as YYYY-MM-DD. You can also specify operators such as <=YYYY-MM-DD.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setDateCreated($value)
    {
        return $this->set('DateCreated', $value);
    }

    /**
     * Set the value for the DateUpdated input for this ListConferences Choreo.
     *
     * @param string $value (optional, string) Only returns conferences that were last updated on this date, given as YYYY-MM-DD. You can also specify operators such as <=YYYY-MM-DD.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setDateUpdated($value)
    {
        return $this->set('DateUpdated', $value);
    }

    /**
     * Set the value for the FriendlyName input for this ListConferences Choreo.
     *
     * @param string $value (optional, string) Returns conferences who's FriendlyName is the exact match of this string.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the PageSize input for this ListConferences Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListConferences Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListConferences Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Status input for this ListConferences Choreo.
     *
     * @param string $value (optional, string) Only returns conferences currently in with this status. May be init, in-progress, or completed.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListConferences Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the list of conferences. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Conferences_ListConferences_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListConferences Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_ListConferences_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListConferences Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListConferences execution.
     * @param Twilio_Conferences_ListConferences $choreo The choreography object for this execution.
     * @param Twilio_Conferences_ListConferences_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_ListConferences_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_ListConferences_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Conferences_ListConferences $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListConferences execution.
     *
     * @return Twilio_Conferences_ListConferences_Results New results object.
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
     * Wraps results in appropriate results class for this ListConferences execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Conferences_ListConferences_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Conferences_ListConferences_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListConferences Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_ListConferences_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListConferences Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Conferences_ListConferences_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListConferences execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates the details for an individual Connect App associated with a Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_UpdateConnectApp extends Temboo_Choreography
{
    /**
     * Updates the details for an individual Connect App associated with a Twilio account.
     *
     * @param Temboo_Session $session The session that owns this UpdateConnectApp Choreo.
     * @return Twilio_ConnectApps_UpdateConnectApp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/ConnectApps/UpdateConnectApp/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateConnectApp Choreo.
     *
     * @param Twilio_ConnectApps_UpdateConnectApp_Inputs|array $inputs (optional) Inputs as Twilio_ConnectApps_UpdateConnectApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ConnectApps_UpdateConnectApp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_ConnectApps_UpdateConnectApp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateConnectApp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_ConnectApps_UpdateConnectApp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateConnectApp Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_UpdateConnectApp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateConnectApp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateConnectApp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this UpdateConnectApp Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this UpdateConnectApp Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the AuthorizeRedirectURL input for this UpdateConnectApp Choreo.
     *
     * @param string $value (optional, string) The URL the user's browser will redirect to after Twilio authenticates the user and obtains authorization for this Connect App.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setAuthorizeRedirectURL($value)
    {
        return $this->set('AuthorizeRedirectURL', $value);
    }

    /**
     * Set the value for the CompanyName input for this UpdateConnectApp Choreo.
     *
     * @param string $value (optional, string) The company name for this Connect App.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setCompanyName($value)
    {
        return $this->set('CompanyName', $value);
    }

    /**
     * Set the value for the ConnectAppSID input for this UpdateConnectApp Choreo.
     *
     * @param string $value (required, string) The id of the Connect App to update.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setConnectAppSID($value)
    {
        return $this->set('ConnectAppSID', $value);
    }

    /**
     * Set the value for the DeauthorizeCallbackMethod input for this UpdateConnectApp Choreo.
     *
     * @param string $value (optional, string) The HTTP method to be used when making a request to the DeauthorizeCallbackUrl. Either GET or POST.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setDeauthorizeCallbackMethod($value)
    {
        return $this->set('DeauthorizeCallbackMethod', $value);
    }

    /**
     * Set the value for the DeauthorizeCallbackURL input for this UpdateConnectApp Choreo.
     *
     * @param string $value (optional, string) The URL to which Twilio will send a request when a user de-authorizes this Connect App.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setDeauthorizeCallbackURL($value)
    {
        return $this->set('DeauthorizeCallbackURL', $value);
    }

    /**
     * Set the value for the Description input for this UpdateConnectApp Choreo.
     *
     * @param string $value (optional, string) A more detailed human readable description of the Connect App.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the FriendlyName input for this UpdateConnectApp Choreo.
     *
     * @param string $value (optional, string) A human readable description of the Connect App, with maximum length 64 characters.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the HomepageURL input for this UpdateConnectApp Choreo.
     *
     * @param string $value (optional, string) The public URL where users can obtain more information about this Connect App.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setHomepageURL($value)
    {
        return $this->set('HomepageURL', $value);
    }

    /**
     * Set the value for the Permissions input for this UpdateConnectApp Choreo.
     *
     * @param string $value (optional, string) A comma-separated list of permssions you will request from users of this ConnectApp. Valid permssions are get-all or post-all.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setPermissions($value)
    {
        return $this->set('Permissions', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateConnectApp Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_ConnectApps_UpdateConnectApp_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the UpdateConnectApp Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_UpdateConnectApp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateConnectApp Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateConnectApp execution.
     * @param Twilio_ConnectApps_UpdateConnectApp $choreo The choreography object for this execution.
     * @param Twilio_ConnectApps_UpdateConnectApp_Inputs|array $inputs (optional) Inputs as Twilio_ConnectApps_UpdateConnectApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ConnectApps_UpdateConnectApp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_ConnectApps_UpdateConnectApp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateConnectApp execution.
     *
     * @return Twilio_ConnectApps_UpdateConnectApp_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateConnectApp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_ConnectApps_UpdateConnectApp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_ConnectApps_UpdateConnectApp_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateConnectApp Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_UpdateConnectApp_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateConnectApp Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_ConnectApps_UpdateConnectApp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateConnectApp execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of recordings for the specified account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_ListRecordings extends Temboo_Choreography
{
    /**
     * Returns a list of recordings for the specified account.
     *
     * @param Temboo_Session $session The session that owns this ListRecordings Choreo.
     * @return Twilio_Recordings_ListRecordings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Recordings/ListRecordings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListRecordings Choreo.
     *
     * @param Twilio_Recordings_ListRecordings_Inputs|array $inputs (optional) Inputs as Twilio_Recordings_ListRecordings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Recordings_ListRecordings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Recordings_ListRecordings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListRecordings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Recordings_ListRecordings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Recordings_ListRecordings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListRecordings Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_ListRecordings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListRecordings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Recordings_ListRecordings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListRecordings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Recordings_ListRecordings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Recordings_ListRecordings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListRecordings Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Recordings_ListRecordings_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListRecordings Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Recordings_ListRecordings_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the PageSize input for this ListRecordings Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_Recordings_ListRecordings_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListRecordings Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_Recordings_ListRecordings_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListRecordings Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Recordings_ListRecordings_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListRecordings Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the recording. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Recordings_ListRecordings_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListRecordings Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_ListRecordings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListRecordings Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListRecordings execution.
     * @param Twilio_Recordings_ListRecordings $choreo The choreography object for this execution.
     * @param Twilio_Recordings_ListRecordings_Inputs|array $inputs (optional) Inputs as Twilio_Recordings_ListRecordings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Recordings_ListRecordings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Recordings_ListRecordings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListRecordings execution.
     *
     * @return Twilio_Recordings_ListRecordings_Results New results object.
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
     * Wraps results in appropriate results class for this ListRecordings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Recordings_ListRecordings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Recordings_ListRecordings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListRecordings Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_ListRecordings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListRecordings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Recordings_ListRecordings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListRecordings execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes an application from your Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_DeleteApplication extends Temboo_Choreography
{
    /**
     * Deletes an application from your Twilio account.
     *
     * @param Temboo_Session $session The session that owns this DeleteApplication Choreo.
     * @return Twilio_Applications_DeleteApplication New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Applications/DeleteApplication/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteApplication Choreo.
     *
     * @param Twilio_Applications_DeleteApplication_Inputs|array $inputs (optional) Inputs as Twilio_Applications_DeleteApplication_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_DeleteApplication_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Applications_DeleteApplication_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteApplication Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_DeleteApplication_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Applications_DeleteApplication_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_DeleteApplication_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteApplication Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_DeleteApplication_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteApplication input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Applications_DeleteApplication_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Applications_DeleteApplication_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this DeleteApplication Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Applications_DeleteApplication_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the ApplicationSID input for this DeleteApplication Choreo.
     *
     * @param string $value (required, string) The id of the application to retrieve.
     * @return Twilio_Applications_DeleteApplication_Inputs For method chaining.
     */
    public function setApplicationSID($value)
    {
        return $this->set('ApplicationSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this DeleteApplication Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Applications_DeleteApplication_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteApplication Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Applications_DeleteApplication_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the DeleteApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_DeleteApplication_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteApplication Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteApplication execution.
     * @param Twilio_Applications_DeleteApplication $choreo The choreography object for this execution.
     * @param Twilio_Applications_DeleteApplication_Inputs|array $inputs (optional) Inputs as Twilio_Applications_DeleteApplication_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_DeleteApplication_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Applications_DeleteApplication $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteApplication execution.
     *
     * @return Twilio_Applications_DeleteApplication_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteApplication execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Applications_DeleteApplication_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Applications_DeleteApplication_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_DeleteApplication_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteApplication Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Applications_DeleteApplication_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteApplication execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a an individual transcription of a recorded call.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Transcriptions_GetTranscription extends Temboo_Choreography
{
    /**
     * Returns a an individual transcription of a recorded call.
     *
     * @param Temboo_Session $session The session that owns this GetTranscription Choreo.
     * @return Twilio_Transcriptions_GetTranscription New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Transcriptions/GetTranscription/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTranscription Choreo.
     *
     * @param Twilio_Transcriptions_GetTranscription_Inputs|array $inputs (optional) Inputs as Twilio_Transcriptions_GetTranscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Transcriptions_GetTranscription_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Transcriptions_GetTranscription_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTranscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Transcriptions_GetTranscription_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Transcriptions_GetTranscription_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTranscription Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Transcriptions_GetTranscription_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTranscription Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Transcriptions_GetTranscription_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTranscription input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Transcriptions_GetTranscription_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Transcriptions_GetTranscription_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetTranscription Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Transcriptions_GetTranscription_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetTranscription Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Transcriptions_GetTranscription_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetTranscription Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Transcriptions_GetTranscription_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetTranscription Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the transcription. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Transcriptions_GetTranscription_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }

    /**
     * Set the value for the TranscriptionSID input for this GetTranscription Choreo.
     *
     * @param string $value (required, string) The id of the transcription to retrieve.
     * @return Twilio_Transcriptions_GetTranscription_Inputs For method chaining.
     */
    public function setTranscriptionSID($value)
    {
        return $this->set('TranscriptionSID', $value);
    }
}


/**
 * Execution object for the GetTranscription Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Transcriptions_GetTranscription_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTranscription Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTranscription execution.
     * @param Twilio_Transcriptions_GetTranscription $choreo The choreography object for this execution.
     * @param Twilio_Transcriptions_GetTranscription_Inputs|array $inputs (optional) Inputs as Twilio_Transcriptions_GetTranscription_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Transcriptions_GetTranscription_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Transcriptions_GetTranscription $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTranscription execution.
     *
     * @return Twilio_Transcriptions_GetTranscription_Results New results object.
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
     * Wraps results in appropriate results class for this GetTranscription execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Transcriptions_GetTranscription_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Transcriptions_GetTranscription_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTranscription Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Transcriptions_GetTranscription_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTranscription Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Transcriptions_GetTranscription_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTranscription execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a notification from the account log.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_DeleteNotification extends Temboo_Choreography
{
    /**
     * Delete a notification from the account log.
     *
     * @param Temboo_Session $session The session that owns this DeleteNotification Choreo.
     * @return Twilio_Notifications_DeleteNotification New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Notifications/DeleteNotification/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteNotification Choreo.
     *
     * @param Twilio_Notifications_DeleteNotification_Inputs|array $inputs (optional) Inputs as Twilio_Notifications_DeleteNotification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Notifications_DeleteNotification_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Notifications_DeleteNotification_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteNotification Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Notifications_DeleteNotification_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Notifications_DeleteNotification_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteNotification Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_DeleteNotification_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteNotification Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Notifications_DeleteNotification_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteNotification input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Notifications_DeleteNotification_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Notifications_DeleteNotification_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this DeleteNotification Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Notifications_DeleteNotification_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this DeleteNotification Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Notifications_DeleteNotification_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the NotificationSID input for this DeleteNotification Choreo.
     *
     * @param string $value (required, string) Enter the SID of the notification resource to be deleted.
     * @return Twilio_Notifications_DeleteNotification_Inputs For method chaining.
     */
    public function setNotificationSID($value)
    {
        return $this->set('NotificationSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteNotification Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Notifications_DeleteNotification_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this DeleteNotification Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount to delete the notification from. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Notifications_DeleteNotification_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the DeleteNotification Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_DeleteNotification_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteNotification Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteNotification execution.
     * @param Twilio_Notifications_DeleteNotification $choreo The choreography object for this execution.
     * @param Twilio_Notifications_DeleteNotification_Inputs|array $inputs (optional) Inputs as Twilio_Notifications_DeleteNotification_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Notifications_DeleteNotification_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Notifications_DeleteNotification $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteNotification execution.
     *
     * @return Twilio_Notifications_DeleteNotification_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteNotification execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Notifications_DeleteNotification_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Notifications_DeleteNotification_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteNotification Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_DeleteNotification_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteNotification Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Notifications_DeleteNotification_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteNotification execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns an individual conference.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_GetConference extends Temboo_Choreography
{
    /**
     * Returns an individual conference.
     *
     * @param Temboo_Session $session The session that owns this GetConference Choreo.
     * @return Twilio_Conferences_GetConference New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Conferences/GetConference/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetConference Choreo.
     *
     * @param Twilio_Conferences_GetConference_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_GetConference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_GetConference_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Conferences_GetConference_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetConference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_GetConference_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Conferences_GetConference_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetConference Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_GetConference_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetConference Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_GetConference_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetConference input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Conferences_GetConference_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Conferences_GetConference_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetConference Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_GetConference_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetConference Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_GetConference_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ConferenceSID input for this GetConference Choreo.
     *
     * @param string $value (required, string) The id of the conference to retrieve.
     * @return Twilio_Conferences_GetConference_Inputs For method chaining.
     */
    public function setConferenceSID($value)
    {
        return $this->set('ConferenceSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetConference Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Conferences_GetConference_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetConference Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the conference. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Conferences_GetConference_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetConference Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_GetConference_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetConference Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetConference execution.
     * @param Twilio_Conferences_GetConference $choreo The choreography object for this execution.
     * @param Twilio_Conferences_GetConference_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_GetConference_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_GetConference_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Conferences_GetConference $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetConference execution.
     *
     * @return Twilio_Conferences_GetConference_Results New results object.
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
     * Wraps results in appropriate results class for this GetConference execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Conferences_GetConference_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Conferences_GetConference_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetConference Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_GetConference_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetConference Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Conferences_GetConference_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetConference execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of local available phone numbers that match the specified filters.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_AvailablePhoneNumbers_LocalList extends Temboo_Choreography
{
    /**
     * Returns a list of local available phone numbers that match the specified filters.
     *
     * @param Temboo_Session $session The session that owns this LocalList Choreo.
     * @return Twilio_AvailablePhoneNumbers_LocalList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/AvailablePhoneNumbers/LocalList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this LocalList Choreo.
     *
     * @param Twilio_AvailablePhoneNumbers_LocalList_Inputs|array $inputs (optional) Inputs as Twilio_AvailablePhoneNumbers_LocalList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_AvailablePhoneNumbers_LocalList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LocalList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_AvailablePhoneNumbers_LocalList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LocalList Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_AvailablePhoneNumbers_LocalList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the LocalList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LocalList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this LocalList Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AreaCode input for this LocalList Choreo.
     *
     * @param int $value (optional, integer) Find phone numbers in the specified area code. (US and Canada only).
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setAreaCode($value)
    {
        return $this->set('AreaCode', $value);
    }

    /**
     * Set the value for the AuthToken input for this LocalList Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Contains input for this LocalList Choreo.
     *
     * @param string $value (optional, string) A pattern to match phone numbers on. Valid characters are '*' and [0-9a-zA-Z]. The '*' character will match any single digit.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setContains($value)
    {
        return $this->set('Contains', $value);
    }

    /**
     * Set the value for the Distance input for this LocalList Choreo.
     *
     * @param int $value (optional, integer) Specifies the search radius for Latitude, Longitude, and NearNumber quires in miles. If not specified this defaults to 25 miles.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the InLata input for this LocalList Choreo.
     *
     * @param string $value (optional, string) Limit results to a specific Local access and transport area (LATA). Given a phone number, search within the same LATA as that number.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setInLata($value)
    {
        return $this->set('InLata', $value);
    }

    /**
     * Set the value for the InPostalCode input for this LocalList Choreo.
     *
     * @param int $value (optional, integer) Limit results to a particular postal code. Given a phone number, search within the same postal code as that number. (US and Canada only).
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setInPostalCode($value)
    {
        return $this->set('InPostalCode', $value);
    }

    /**
     * Set the value for the InRateCenter input for this LocalList Choreo.
     *
     * @param string $value (optional, string) Limit results to a specific rate center, or given a phone number search within the same rate center as that number. Requires InLata to be set as well.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setInRateCenter($value)
    {
        return $this->set('InRateCenter', $value);
    }

    /**
     * Set the value for the InRegion input for this LocalList Choreo.
     *
     * @param string $value (optional, string) Limit results to a particular region (i.e. State/Province). Given a phone number, search within the same Region as that number. (US and Canada only).
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setInRegion($value)
    {
        return $this->set('InRegion', $value);
    }

    /**
     * Set the value for the IsoCountryCode input for this LocalList Choreo.
     *
     * @param string $value (optional, string) The country code to search within. Defaults to US.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setIsoCountryCode($value)
    {
        return $this->set('IsoCountryCode', $value);
    }

    /**
     * Set the value for the Latitude input for this LocalList Choreo.
     *
     * @param float $value (optional, decimal) Finds numbers close to this Latitude coordinate. Longitude is also required when searching by coordinates.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this LocalList Choreo.
     *
     * @param string $value (optional, string) Finds numbers close this Longitude. Latitude is also required when searching by coordinates.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the NearNumber input for this LocalList Choreo.
     *
     * @param string $value (optional, string) Searches numbers near  this phone number.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setNearNumber($value)
    {
        return $this->set('NearNumber', $value);
    }

    /**
     * Set the value for the PageSize input for this LocalList Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this LocalList Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this LocalList Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the LocalList Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_AvailablePhoneNumbers_LocalList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LocalList Choreo.
     *
     * @param Temboo_Session $session The session that owns this LocalList execution.
     * @param Twilio_AvailablePhoneNumbers_LocalList $choreo The choreography object for this execution.
     * @param Twilio_AvailablePhoneNumbers_LocalList_Inputs|array $inputs (optional) Inputs as Twilio_AvailablePhoneNumbers_LocalList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_AvailablePhoneNumbers_LocalList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LocalList execution.
     *
     * @return Twilio_AvailablePhoneNumbers_LocalList_Results New results object.
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
     * Wraps results in appropriate results class for this LocalList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_AvailablePhoneNumbers_LocalList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the LocalList Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_AvailablePhoneNumbers_LocalList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the LocalList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_AvailablePhoneNumbers_LocalList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this LocalList execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Return a list of all notifications generated for a specified account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_ListNotifications extends Temboo_Choreography
{
    /**
     * Return a list of all notifications generated for a specified account.
     *
     * @param Temboo_Session $session The session that owns this ListNotifications Choreo.
     * @return Twilio_Notifications_ListNotifications New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Notifications/ListNotifications/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListNotifications Choreo.
     *
     * @param Twilio_Notifications_ListNotifications_Inputs|array $inputs (optional) Inputs as Twilio_Notifications_ListNotifications_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Notifications_ListNotifications_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Notifications_ListNotifications_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListNotifications Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Notifications_ListNotifications_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Notifications_ListNotifications_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListNotifications Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_ListNotifications_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListNotifications Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Notifications_ListNotifications_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListNotifications input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListNotifications Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListNotifications Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the LogLevel input for this ListNotifications Choreo.
     *
     * @param int $value (optional, integer) Specify the log level by entering: 0 for ERROR, 1 for WARNING.
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function setLogLevel($value)
    {
        return $this->set('LogLevel', $value);
    }

    /**
     * Set the value for the MessageDate input for this ListNotifications Choreo.
     *
     * @param string $value (optional, string) Filter notifications by date.  Dates should be formatted as follows: YYYY-MM-DD.  Dates before, at, or after a specified date can be entered using inequality operators: >=YYYY-MM-DD
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function setMessageDate($value)
    {
        return $this->set('MessageDate', $value);
    }

    /**
     * Set the value for the PageSize input for this ListNotifications Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListNotifications Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListNotifications Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListNotifications Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount to list notifications for. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Notifications_ListNotifications_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListNotifications Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_ListNotifications_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListNotifications Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListNotifications execution.
     * @param Twilio_Notifications_ListNotifications $choreo The choreography object for this execution.
     * @param Twilio_Notifications_ListNotifications_Inputs|array $inputs (optional) Inputs as Twilio_Notifications_ListNotifications_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Notifications_ListNotifications_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Notifications_ListNotifications $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListNotifications execution.
     *
     * @return Twilio_Notifications_ListNotifications_Results New results object.
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
     * Wraps results in appropriate results class for this ListNotifications execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Notifications_ListNotifications_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Notifications_ListNotifications_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListNotifications Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Notifications_ListNotifications_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListNotifications Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Notifications_ListNotifications_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListNotifications execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing application within your account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_UpdateApplication extends Temboo_Choreography
{
    /**
     * Updates an existing application within your account.
     *
     * @param Temboo_Session $session The session that owns this UpdateApplication Choreo.
     * @return Twilio_Applications_UpdateApplication New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Applications/UpdateApplication/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateApplication Choreo.
     *
     * @param Twilio_Applications_UpdateApplication_Inputs|array $inputs (optional) Inputs as Twilio_Applications_UpdateApplication_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_UpdateApplication_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Applications_UpdateApplication_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateApplication Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_UpdateApplication_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Applications_UpdateApplication_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_UpdateApplication_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateApplication Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_UpdateApplication_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateApplication input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIVersion input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) Requests to this application's URLs will start a new TwiML session with this API version. Either 2010-04-01 or 2008-08-01. Defaults to your account's default API version.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setAPIVersion($value)
    {
        return $this->set('APIVersion', $value);
    }

    /**
     * Set the value for the AccountSID input for this UpdateApplication Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the ApplicationSID input for this UpdateApplication Choreo.
     *
     * @param string $value (required, string) The id of the application to update.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setApplicationSID($value)
    {
        return $this->set('ApplicationSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this UpdateApplication Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) A human readable description of the new application. Maximum 64 characters.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SmsFallbackMethod input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsFallbackUrl. Must be either GET or POST. Defaults to POST.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setSmsFallbackMethod($value)
    {
        return $this->set('SmsFallbackMethod', $value);
    }

    /**
     * Set the value for the SmsFallbackURL input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs requesting or executing the TwiML defined by SmsUrl.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setSmsFallbackURL($value)
    {
        return $this->set('SmsFallbackURL', $value);
    }

    /**
     * Set the value for the SmsMethod input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsUrl. Must be either GET or POST. Defaults to POST.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setSmsMethod($value)
    {
        return $this->set('SmsMethod', $value);
    }

    /**
     * Set the value for the SmsStatusCallback input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) Twilio will make a POST request to this URL to pass status parameters (such as sent or failed) to your application.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setSmsStatusCallback($value)
    {
        return $this->set('SmsStatusCallback', $value);
    }

    /**
     * Set the value for the SmsURL input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio should request when somebody sends an SMS to a phone number assigned to this application.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setSmsURL($value)
    {
        return $this->set('SmsURL', $value);
    }

    /**
     * Set the value for the StatusCallbackMethod input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method Twilio will use to make requests to the StatusCallback URL. Either GET or POST. Defaults to POST.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setStatusCallbackMethod($value)
    {
        return $this->set('StatusCallbackMethod', $value);
    }

    /**
     * Set the value for the StatusCallback input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio will request to pass status parameters (such as call ended) to your application.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setStatusCallback($value)
    {
        return $this->set('StatusCallback', $value);
    }

    /**
     * Set the value for the VoiceApplicationSID input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The 34 character sid of the application Twilio should use to handle phone calls to this number.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setVoiceApplicationSID($value)
    {
        return $this->set('VoiceApplicationSID', $value);
    }

    /**
     * Set the value for the VoiceCallerIDLookup input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) Do a lookup of a caller's name from the CNAM database and post it to your app. Either true or false. Defaults to false.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setVoiceCallerIDLookup($value)
    {
        return $this->set('VoiceCallerIDLookup', $value);
    }

    /**
     * Set the value for the VoiceFallbackMethod input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the VoiceFallbackUrl. Either GET or POST. Defaults to POST.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setVoiceFallbackMethod($value)
    {
        return $this->set('VoiceFallbackMethod', $value);
    }

    /**
     * Set the value for the VoiceFallbackURL input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs requesting or executing the TwiML at Url.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setVoiceFallbackURL($value)
    {
        return $this->set('VoiceFallbackURL', $value);
    }

    /**
     * Set the value for the VoiceMethod input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the VoiceUrl. Must be either GET or POST. Defaults to POST.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setVoiceMethod($value)
    {
        return $this->set('VoiceMethod', $value);
    }

    /**
     * Set the value for the VoiceURL input for this UpdateApplication Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio should request when somebody dials a phone number assigned to this application.
     * @return Twilio_Applications_UpdateApplication_Inputs For method chaining.
     */
    public function setVoiceURL($value)
    {
        return $this->set('VoiceURL', $value);
    }
}


/**
 * Execution object for the UpdateApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_UpdateApplication_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateApplication Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateApplication execution.
     * @param Twilio_Applications_UpdateApplication $choreo The choreography object for this execution.
     * @param Twilio_Applications_UpdateApplication_Inputs|array $inputs (optional) Inputs as Twilio_Applications_UpdateApplication_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_UpdateApplication_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Applications_UpdateApplication $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateApplication execution.
     *
     * @return Twilio_Applications_UpdateApplication_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateApplication execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Applications_UpdateApplication_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Applications_UpdateApplication_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_UpdateApplication_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateApplication Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Applications_UpdateApplication_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateApplication execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes an individual phone from Twilio.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_DeletePhoneNumber extends Temboo_Choreography
{
    /**
     * Deletes an individual phone from Twilio.
     *
     * @param Temboo_Session $session The session that owns this DeletePhoneNumber Choreo.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/IncomingPhoneNumbers/DeletePhoneNumber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeletePhoneNumber Choreo.
     *
     * @param Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeletePhoneNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeletePhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeletePhoneNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeletePhoneNumber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this DeletePhoneNumber Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this DeletePhoneNumber Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the IncomingPhoneNumberSID input for this DeletePhoneNumber Choreo.
     *
     * @param string $value (required, string) The id of the incoming phone number to retrieve.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs For method chaining.
     */
    public function setIncomingPhoneNumberSID($value)
    {
        return $this->set('IncomingPhoneNumberSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeletePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this DeletePhoneNumber Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the phone number. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the DeletePhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeletePhoneNumber Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeletePhoneNumber execution.
     * @param Twilio_IncomingPhoneNumbers_DeletePhoneNumber $choreo The choreography object for this execution.
     * @param Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_IncomingPhoneNumbers_DeletePhoneNumber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeletePhoneNumber execution.
     *
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Results New results object.
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
     * Wraps results in appropriate results class for this DeletePhoneNumber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeletePhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeletePhoneNumber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_DeletePhoneNumber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeletePhoneNumber execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Initiates a call from the specified Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_MakeCall extends Temboo_Choreography
{
    /**
     * Initiates a call from the specified Twilio account.
     *
     * @param Temboo_Session $session The session that owns this MakeCall Choreo.
     * @return Twilio_Calls_MakeCall New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Calls/MakeCall/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this MakeCall Choreo.
     *
     * @param Twilio_Calls_MakeCall_Inputs|array $inputs (optional) Inputs as Twilio_Calls_MakeCall_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_MakeCall_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Calls_MakeCall_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this MakeCall Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_MakeCall_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Calls_MakeCall_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the MakeCall Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_MakeCall_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the MakeCall Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_MakeCall_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this MakeCall input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this MakeCall Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the ApplicationSID input for this MakeCall Choreo.
     *
     * @param string $value (conditional, string) The 34 character sid of the application Twilio should use to handle this phone call. Required unless providing the URL parameter.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setApplicationSID($value)
    {
        return $this->set('ApplicationSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this MakeCall Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FallbackMethod input for this MakeCall Choreo.
     *
     * @param string $value (optional, string) 
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setFallbackMethod($value)
    {
        return $this->set('FallbackMethod', $value);
    }

    /**
     * Set the value for the FallbackURL input for this MakeCall Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs making a request to the URL provided. This is ignored when ApplicationSID is provided.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setFallbackURL($value)
    {
        return $this->set('FallbackURL', $value);
    }

    /**
     * Set the value for the From input for this MakeCall Choreo.
     *
     * @param string $value (required, string) The Twilio phone number or client identifier to use as the caller id.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the IfMachine input for this MakeCall Choreo.
     *
     * @param string $value (optional, string) Indicates if Twilio should to try and determine if a machine (like voicemail) or a human has answered the call. Possible values are "Continue" and "Hangup".
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setIfMachine($value)
    {
        return $this->set('IfMachine', $value);
    }

    /**
     * Set the value for the Method input for this MakeCall Choreo.
     *
     * @param string $value (optional, string) This the HTTP method Twilio will use when making its request to the URL (when the URL input is provided). Defaults to POST. This is ignored when ApplicationSID is provided.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setMethod($value)
    {
        return $this->set('Method', $value);
    }

    /**
     * Set the value for the Record input for this MakeCall Choreo.
     *
     * @param bool $value (optional, boolean) Set this parameter to 'true' to record the entirety of a phone call.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setRecord($value)
    {
        return $this->set('Record', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this MakeCall Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SendDigits input for this MakeCall Choreo.
     *
     * @param string $value (optional, string) A string of keys to dial after connecting to the number. Valid digits in the string include: any digit (0-9), '#', '*' and 'w' (to insert a half second pause).
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setSendDigits($value)
    {
        return $this->set('SendDigits', $value);
    }

    /**
     * Set the value for the StatusCallbackMethod input for this MakeCall Choreo.
     *
     * @param string $value (optional, string) The HTTP method Twilio should use when requesting the StatusCallback URL. Defaults to POST. If an ApplicationSid parameter is present, this parameter is ignored.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setStatusCallbackMethod($value)
    {
        return $this->set('StatusCallbackMethod', $value);
    }

    /**
     * Set the value for the StatusCallback input for this MakeCall Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request when the call ends to notify your app. This is ignored when ApplicationSID is provided.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setStatusCallback($value)
    {
        return $this->set('StatusCallback', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this MakeCall Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with this call. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }

    /**
     * Set the value for the Timeout input for this MakeCall Choreo.
     *
     * @param int $value (optional, integer) The integer number of seconds that Twilio should allow the phone to ring before assuming there is no answer. Default is 60 seconds, the maximum is 999 seconds.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setTimeout($value)
    {
        return $this->set('Timeout', $value);
    }

    /**
     * Set the value for the To input for this MakeCall Choreo.
     *
     * @param string $value (required, string) The phone number or client identifier to call.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the URL input for this MakeCall Choreo.
     *
     * @param string $value (conditional, string) The fully qualified URL that should be consulted when the call connects. Required unless providing the ApplicationSID parameter.
     * @return Twilio_Calls_MakeCall_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }
}


/**
 * Execution object for the MakeCall Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_MakeCall_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the MakeCall Choreo.
     *
     * @param Temboo_Session $session The session that owns this MakeCall execution.
     * @param Twilio_Calls_MakeCall $choreo The choreography object for this execution.
     * @param Twilio_Calls_MakeCall_Inputs|array $inputs (optional) Inputs as Twilio_Calls_MakeCall_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_MakeCall_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Calls_MakeCall $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this MakeCall execution.
     *
     * @return Twilio_Calls_MakeCall_Results New results object.
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
     * Wraps results in appropriate results class for this MakeCall execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Calls_MakeCall_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Calls_MakeCall_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the MakeCall Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_MakeCall_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the MakeCall Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Calls_MakeCall_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this MakeCall execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a Twilio subaccount.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_CreateAccount extends Temboo_Choreography
{
    /**
     * Creates a Twilio subaccount.
     *
     * @param Temboo_Session $session The session that owns this CreateAccount Choreo.
     * @return Twilio_Accounts_CreateAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Accounts/CreateAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateAccount Choreo.
     *
     * @param Twilio_Accounts_CreateAccount_Inputs|array $inputs (optional) Inputs as Twilio_Accounts_CreateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Accounts_CreateAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Accounts_CreateAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Accounts_CreateAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Accounts_CreateAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateAccount Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_CreateAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Accounts_CreateAccount_Inputs New instance.
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
     * @return Twilio_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The AccountSID provided by Twilio.
     * @return Twilio_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The authorization token provided by Twilio.
     * @return Twilio_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this CreateAccount Choreo.
     *
     * @param string $value (optional, string) Enter a name for the subaccount being created.
     * @return Twilio_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateAccount Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are json (the default) and xml.
     * @return Twilio_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the CreateAccount Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_CreateAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateAccount execution.
     * @param Twilio_Accounts_CreateAccount $choreo The choreography object for this execution.
     * @param Twilio_Accounts_CreateAccount_Inputs|array $inputs (optional) Inputs as Twilio_Accounts_CreateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Accounts_CreateAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Accounts_CreateAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateAccount execution.
     *
     * @return Twilio_Accounts_CreateAccount_Results New results object.
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
     * @return Twilio_Accounts_CreateAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Accounts_CreateAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateAccount Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_CreateAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Accounts_CreateAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateAccount execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves details for an individual participant of a conference.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_GetParticipant extends Temboo_Choreography
{
    /**
     * Retrieves details for an individual participant of a conference.
     *
     * @param Temboo_Session $session The session that owns this GetParticipant Choreo.
     * @return Twilio_Conferences_GetParticipant New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Conferences/GetParticipant/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetParticipant Choreo.
     *
     * @param Twilio_Conferences_GetParticipant_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_GetParticipant_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_GetParticipant_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Conferences_GetParticipant_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetParticipant Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_GetParticipant_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Conferences_GetParticipant_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetParticipant Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_GetParticipant_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetParticipant Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_GetParticipant_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetParticipant input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Conferences_GetParticipant_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Conferences_GetParticipant_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetParticipant Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_GetParticipant_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetParticipant Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_GetParticipant_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the CallSID input for this GetParticipant Choreo.
     *
     * @param string $value (required, string) The call id associated with the participant to retrieve.
     * @return Twilio_Conferences_GetParticipant_Inputs For method chaining.
     */
    public function setCallSID($value)
    {
        return $this->set('CallSID', $value);
    }

    /**
     * Set the value for the ConferencesSID input for this GetParticipant Choreo.
     *
     * @param string $value (required, string) The id of the conference that the participant is in.
     * @return Twilio_Conferences_GetParticipant_Inputs For method chaining.
     */
    public function setConferencesSID($value)
    {
        return $this->set('ConferencesSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetParticipant Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Conferences_GetParticipant_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetParticipant Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the conference. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Conferences_GetParticipant_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetParticipant Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_GetParticipant_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetParticipant Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetParticipant execution.
     * @param Twilio_Conferences_GetParticipant $choreo The choreography object for this execution.
     * @param Twilio_Conferences_GetParticipant_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_GetParticipant_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_GetParticipant_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Conferences_GetParticipant $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetParticipant execution.
     *
     * @return Twilio_Conferences_GetParticipant_Results New results object.
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
     * Wraps results in appropriate results class for this GetParticipant execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Conferences_GetParticipant_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Conferences_GetParticipant_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetParticipant Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_GetParticipant_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetParticipant Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Conferences_GetParticipant_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetParticipant execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of members in a given queue.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_ListQueueMembers extends Temboo_Choreography
{
    /**
     * Retrieves a list of members in a given queue.
     *
     * @param Temboo_Session $session The session that owns this ListQueueMembers Choreo.
     * @return Twilio_Queues_ListQueueMembers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Queues/ListQueueMembers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListQueueMembers Choreo.
     *
     * @param Twilio_Queues_ListQueueMembers_Inputs|array $inputs (optional) Inputs as Twilio_Queues_ListQueueMembers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_ListQueueMembers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Queues_ListQueueMembers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListQueueMembers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_ListQueueMembers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Queues_ListQueueMembers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListQueueMembers Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_ListQueueMembers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListQueueMembers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_ListQueueMembers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListQueueMembers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Queues_ListQueueMembers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Queues_ListQueueMembers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListQueueMembers Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Queues_ListQueueMembers_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListQueueMembers Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Queues_ListQueueMembers_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the QueueSID input for this ListQueueMembers Choreo.
     *
     * @param string $value (required, string) The id of the queue that the members belong to.
     * @return Twilio_Queues_ListQueueMembers_Inputs For method chaining.
     */
    public function setQueueSID($value)
    {
        return $this->set('QueueSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListQueueMembers Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Queues_ListQueueMembers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListQueueMembers Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the queue members to retrieve. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Queues_ListQueueMembers_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListQueueMembers Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_ListQueueMembers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListQueueMembers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListQueueMembers execution.
     * @param Twilio_Queues_ListQueueMembers $choreo The choreography object for this execution.
     * @param Twilio_Queues_ListQueueMembers_Inputs|array $inputs (optional) Inputs as Twilio_Queues_ListQueueMembers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_ListQueueMembers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Queues_ListQueueMembers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListQueueMembers execution.
     *
     * @return Twilio_Queues_ListQueueMembers_Results New results object.
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
     * Wraps results in appropriate results class for this ListQueueMembers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Queues_ListQueueMembers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Queues_ListQueueMembers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListQueueMembers Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_ListQueueMembers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListQueueMembers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Queues_ListQueueMembers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListQueueMembers execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new queue within a Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_CreateQueue extends Temboo_Choreography
{
    /**
     * Creates a new queue within a Twilio account.
     *
     * @param Temboo_Session $session The session that owns this CreateQueue Choreo.
     * @return Twilio_Queues_CreateQueue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Queues/CreateQueue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateQueue Choreo.
     *
     * @param Twilio_Queues_CreateQueue_Inputs|array $inputs (optional) Inputs as Twilio_Queues_CreateQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_CreateQueue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Queues_CreateQueue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_CreateQueue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Queues_CreateQueue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateQueue Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_CreateQueue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_CreateQueue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateQueue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Queues_CreateQueue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Queues_CreateQueue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this CreateQueue Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Queues_CreateQueue_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this CreateQueue Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Queues_CreateQueue_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this CreateQueue Choreo.
     *
     * @param string $value (required, string) A unique identifier for this queue.
     * @return Twilio_Queues_CreateQueue_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the MaxSize input for this CreateQueue Choreo.
     *
     * @param int $value (optional, integer) The maximum size of this queue. The default is 100. The maximum is 1000.
     * @return Twilio_Queues_CreateQueue_Inputs For method chaining.
     */
    public function setMaxSize($value)
    {
        return $this->set('MaxSize', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateQueue Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Queues_CreateQueue_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this CreateQueue Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount that the queue should be associated with. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Queues_CreateQueue_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the CreateQueue Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_CreateQueue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateQueue Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateQueue execution.
     * @param Twilio_Queues_CreateQueue $choreo The choreography object for this execution.
     * @param Twilio_Queues_CreateQueue_Inputs|array $inputs (optional) Inputs as Twilio_Queues_CreateQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_CreateQueue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Queues_CreateQueue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateQueue execution.
     *
     * @return Twilio_Queues_CreateQueue_Results New results object.
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
     * Wraps results in appropriate results class for this CreateQueue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Queues_CreateQueue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Queues_CreateQueue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateQueue Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_CreateQueue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateQueue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Queues_CreateQueue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateQueue execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes an individual queue.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_DeleteQueue extends Temboo_Choreography
{
    /**
     * Deletes an individual queue.
     *
     * @param Temboo_Session $session The session that owns this DeleteQueue Choreo.
     * @return Twilio_Queues_DeleteQueue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Queues/DeleteQueue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteQueue Choreo.
     *
     * @param Twilio_Queues_DeleteQueue_Inputs|array $inputs (optional) Inputs as Twilio_Queues_DeleteQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_DeleteQueue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Queues_DeleteQueue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_DeleteQueue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Queues_DeleteQueue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteQueue Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_DeleteQueue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_DeleteQueue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteQueue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Queues_DeleteQueue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Queues_DeleteQueue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this DeleteQueue Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Queues_DeleteQueue_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this DeleteQueue Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Queues_DeleteQueue_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the QueueSID input for this DeleteQueue Choreo.
     *
     * @param string $value (required, string) The id of the queue to delete.
     * @return Twilio_Queues_DeleteQueue_Inputs For method chaining.
     */
    public function setQueueSID($value)
    {
        return $this->set('QueueSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteQueue Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Queues_DeleteQueue_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this DeleteQueue Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the queue. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Queues_DeleteQueue_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the DeleteQueue Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_DeleteQueue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteQueue Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteQueue execution.
     * @param Twilio_Queues_DeleteQueue $choreo The choreography object for this execution.
     * @param Twilio_Queues_DeleteQueue_Inputs|array $inputs (optional) Inputs as Twilio_Queues_DeleteQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_DeleteQueue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Queues_DeleteQueue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteQueue execution.
     *
     * @return Twilio_Queues_DeleteQueue_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteQueue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Queues_DeleteQueue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Queues_DeleteQueue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteQueue Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_DeleteQueue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteQueue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Queues_DeleteQueue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteQueue execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes an individual partipant from a conference.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_DeleteParticipant extends Temboo_Choreography
{
    /**
     * Removes an individual partipant from a conference.
     *
     * @param Temboo_Session $session The session that owns this DeleteParticipant Choreo.
     * @return Twilio_Conferences_DeleteParticipant New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Conferences/DeleteParticipant/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteParticipant Choreo.
     *
     * @param Twilio_Conferences_DeleteParticipant_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_DeleteParticipant_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_DeleteParticipant_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Conferences_DeleteParticipant_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteParticipant Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_DeleteParticipant_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Conferences_DeleteParticipant_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteParticipant Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_DeleteParticipant_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteParticipant Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Conferences_DeleteParticipant_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteParticipant input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Conferences_DeleteParticipant_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Conferences_DeleteParticipant_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this DeleteParticipant Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_DeleteParticipant_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this DeleteParticipant Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Conferences_DeleteParticipant_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the CallSID input for this DeleteParticipant Choreo.
     *
     * @param string $value (required, string) The call id associated with the participant to delete.
     * @return Twilio_Conferences_DeleteParticipant_Inputs For method chaining.
     */
    public function setCallSID($value)
    {
        return $this->set('CallSID', $value);
    }

    /**
     * Set the value for the ConferenceSID input for this DeleteParticipant Choreo.
     *
     * @param string $value (required, string) The id of the conference that the participant is in.
     * @return Twilio_Conferences_DeleteParticipant_Inputs For method chaining.
     */
    public function setConferenceSID($value)
    {
        return $this->set('ConferenceSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteParticipant Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Conferences_DeleteParticipant_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this DeleteParticipant Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the conference. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Conferences_DeleteParticipant_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the DeleteParticipant Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_DeleteParticipant_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteParticipant Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteParticipant execution.
     * @param Twilio_Conferences_DeleteParticipant $choreo The choreography object for this execution.
     * @param Twilio_Conferences_DeleteParticipant_Inputs|array $inputs (optional) Inputs as Twilio_Conferences_DeleteParticipant_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Conferences_DeleteParticipant_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Conferences_DeleteParticipant $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteParticipant execution.
     *
     * @return Twilio_Conferences_DeleteParticipant_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteParticipant execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Conferences_DeleteParticipant_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Conferences_DeleteParticipant_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteParticipant Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Conferences_DeleteParticipant_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteParticipant Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Conferences_DeleteParticipant_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteParticipant execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sends an SMS to a specified phone number using the Twilio API.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_SendSMS extends Temboo_Choreography
{
    /**
     * Sends an SMS to a specified phone number using the Twilio API.
     *
     * @param Temboo_Session $session The session that owns this SendSMS Choreo.
     * @return Twilio_SMSMessages_SendSMS New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/SMSMessages/SendSMS/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SendSMS Choreo.
     *
     * @param Twilio_SMSMessages_SendSMS_Inputs|array $inputs (optional) Inputs as Twilio_SMSMessages_SendSMS_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_SMSMessages_SendSMS_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_SMSMessages_SendSMS_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendSMS Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_SMSMessages_SendSMS_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_SMSMessages_SendSMS_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendSMS Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_SendSMS_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SendSMS Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_SMSMessages_SendSMS_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendSMS input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_SMSMessages_SendSMS_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_SMSMessages_SendSMS_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this SendSMS Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_SMSMessages_SendSMS_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this SendSMS Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_SMSMessages_SendSMS_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the Body input for this SendSMS Choreo.
     *
     * @param string $value (required, string) The text of your SMS message.
     * @return Twilio_SMSMessages_SendSMS_Inputs For method chaining.
     */
    public function setBody($value)
    {
        return $this->set('Body', $value);
    }

    /**
     * Set the value for the From input for this SendSMS Choreo.
     *
     * @param string $value (required, string) The purchased Twilio phone number (or Twilio Sandbox number) to send the message from.
     * @return Twilio_SMSMessages_SendSMS_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SendSMS Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_SMSMessages_SendSMS_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this SendSMS Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount to send the message from. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_SMSMessages_SendSMS_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }

    /**
     * Set the value for the To input for this SendSMS Choreo.
     *
     * @param string $value (required, string) The destination phone number for the SMS message.
     * @return Twilio_SMSMessages_SendSMS_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the SendSMS Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_SendSMS_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendSMS Choreo.
     *
     * @param Temboo_Session $session The session that owns this SendSMS execution.
     * @param Twilio_SMSMessages_SendSMS $choreo The choreography object for this execution.
     * @param Twilio_SMSMessages_SendSMS_Inputs|array $inputs (optional) Inputs as Twilio_SMSMessages_SendSMS_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_SMSMessages_SendSMS_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_SMSMessages_SendSMS $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendSMS execution.
     *
     * @return Twilio_SMSMessages_SendSMS_Results New results object.
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
     * Wraps results in appropriate results class for this SendSMS execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_SMSMessages_SendSMS_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_SMSMessages_SendSMS_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SendSMS Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_SendSMS_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SendSMS Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_SMSMessages_SendSMS_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SendSMS execution.
     *
     * @return string The Twilio response.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new application within your account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_CreateApplication extends Temboo_Choreography
{
    /**
     * Creates a new application within your account.
     *
     * @param Temboo_Session $session The session that owns this CreateApplication Choreo.
     * @return Twilio_Applications_CreateApplication New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Applications/CreateApplication/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateApplication Choreo.
     *
     * @param Twilio_Applications_CreateApplication_Inputs|array $inputs (optional) Inputs as Twilio_Applications_CreateApplication_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_CreateApplication_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Applications_CreateApplication_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateApplication Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_CreateApplication_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Applications_CreateApplication_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_CreateApplication_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateApplication Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_CreateApplication_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateApplication input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIVersion input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) Requests to this application's URLs will start a new TwiML session with this API version. Either 2010-04-01 or 2008-08-01. Defaults to your account's default API version.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setAPIVersion($value)
    {
        return $this->set('APIVersion', $value);
    }

    /**
     * Set the value for the AccountSID input for this CreateApplication Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this CreateApplication Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this CreateApplication Choreo.
     *
     * @param string $value (required, string) A human readable description of the new application. Maximum 64 characters.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SmsFallbackMethod input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsFallbackUrl. Must be either GET or POST. Defaults to POST.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setSmsFallbackMethod($value)
    {
        return $this->set('SmsFallbackMethod', $value);
    }

    /**
     * Set the value for the SmsFallbackURL input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs requesting or executing the TwiML defined by SmsUrl.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setSmsFallbackURL($value)
    {
        return $this->set('SmsFallbackURL', $value);
    }

    /**
     * Set the value for the SmsMethod input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsUrl. Must be either GET or POST. Defaults to POST.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setSmsMethod($value)
    {
        return $this->set('SmsMethod', $value);
    }

    /**
     * Set the value for the SmsStatusCallback input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) Twilio will make a POST request to this URL to pass status parameters (such as sent or failed) to your application.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setSmsStatusCallback($value)
    {
        return $this->set('SmsStatusCallback', $value);
    }

    /**
     * Set the value for the SmsURL input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio should request when somebody sends an SMS to a phone number assigned to this application.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setSmsURL($value)
    {
        return $this->set('SmsURL', $value);
    }

    /**
     * Set the value for the StatusCallbackMethod input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method Twilio will use to make requests to the StatusCallback URL. Either GET or POST. Defaults to POST.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setStatusCallbackMethod($value)
    {
        return $this->set('StatusCallbackMethod', $value);
    }

    /**
     * Set the value for the StatusCallback input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio will request to pass status parameters (such as call ended) to your application.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setStatusCallback($value)
    {
        return $this->set('StatusCallback', $value);
    }

    /**
     * Set the value for the VoiceApplicationSID input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The 34 character sid of the application Twilio should use to handle phone calls to this number.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setVoiceApplicationSID($value)
    {
        return $this->set('VoiceApplicationSID', $value);
    }

    /**
     * Set the value for the VoiceCallerIDLookup input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) Do a lookup of a caller's name from the CNAM database and post it to your app. Either true or false. Defaults to false.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setVoiceCallerIDLookup($value)
    {
        return $this->set('VoiceCallerIDLookup', $value);
    }

    /**
     * Set the value for the VoiceFallbackMethod input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the VoiceFallbackUrl. Either GET or POST. Defaults to POST.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setVoiceFallbackMethod($value)
    {
        return $this->set('VoiceFallbackMethod', $value);
    }

    /**
     * Set the value for the VoiceFallbackURL input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs requesting or executing the TwiML at Url.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setVoiceFallbackURL($value)
    {
        return $this->set('VoiceFallbackURL', $value);
    }

    /**
     * Set the value for the VoiceMethod input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the VoiceUrl. Must be either GET or POST. Defaults to POST.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setVoiceMethod($value)
    {
        return $this->set('VoiceMethod', $value);
    }

    /**
     * Set the value for the VoiceURL input for this CreateApplication Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio should request when somebody dials a phone number assigned to this application.
     * @return Twilio_Applications_CreateApplication_Inputs For method chaining.
     */
    public function setVoiceURL($value)
    {
        return $this->set('VoiceURL', $value);
    }
}


/**
 * Execution object for the CreateApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_CreateApplication_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateApplication Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateApplication execution.
     * @param Twilio_Applications_CreateApplication $choreo The choreography object for this execution.
     * @param Twilio_Applications_CreateApplication_Inputs|array $inputs (optional) Inputs as Twilio_Applications_CreateApplication_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_CreateApplication_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Applications_CreateApplication $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateApplication execution.
     *
     * @return Twilio_Applications_CreateApplication_Results New results object.
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
     * Wraps results in appropriate results class for this CreateApplication execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Applications_CreateApplication_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Applications_CreateApplication_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_CreateApplication_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateApplication Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Applications_CreateApplication_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateApplication execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a new caller id to a Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_AddCallerID extends Temboo_Choreography
{
    /**
     * Adds a new caller id to a Twilio account.
     *
     * @param Temboo_Session $session The session that owns this AddCallerID Choreo.
     * @return Twilio_OutgoingCallerIDs_AddCallerID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/OutgoingCallerIDs/AddCallerID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddCallerID Choreo.
     *
     * @param Twilio_OutgoingCallerIDs_AddCallerID_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_AddCallerID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_OutgoingCallerIDs_AddCallerID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddCallerID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_OutgoingCallerIDs_AddCallerID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_AddCallerID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddCallerID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddCallerID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this AddCallerID Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this AddCallerID Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the PhoneNumber input for this AddCallerID Choreo.
     *
     * @param string $value (required, string) The phone number to verify. Should be formatted with a '+' and country code e.g., +16175551212. US formatted numbers are also accepted e.g., (415) 555-1212, 415-555-1212.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Inputs For method chaining.
     */
    public function setPhoneNumber($value)
    {
        return $this->set('PhoneNumber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddCallerID Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this AddCallerID Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the outgoing caller id. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the AddCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_AddCallerID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddCallerID Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddCallerID execution.
     * @param Twilio_OutgoingCallerIDs_AddCallerID $choreo The choreography object for this execution.
     * @param Twilio_OutgoingCallerIDs_AddCallerID_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_AddCallerID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_OutgoingCallerIDs_AddCallerID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddCallerID execution.
     *
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Results New results object.
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
     * Wraps results in appropriate results class for this AddCallerID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_OutgoingCallerIDs_AddCallerID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_AddCallerID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddCallerID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_AddCallerID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddCallerID execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Twilio applications associated with your account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_ListApplications extends Temboo_Choreography
{
    /**
     * Returns a list of Twilio applications associated with your account.
     *
     * @param Temboo_Session $session The session that owns this ListApplications Choreo.
     * @return Twilio_Applications_ListApplications New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Applications/ListApplications/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListApplications Choreo.
     *
     * @param Twilio_Applications_ListApplications_Inputs|array $inputs (optional) Inputs as Twilio_Applications_ListApplications_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_ListApplications_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Applications_ListApplications_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListApplications Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_ListApplications_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Applications_ListApplications_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListApplications Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_ListApplications_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListApplications Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_ListApplications_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListApplications input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Applications_ListApplications_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Applications_ListApplications_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListApplications Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Applications_ListApplications_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListApplications Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Applications_ListApplications_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this ListApplications Choreo.
     *
     * @param string $value (optional, string) Only return applications with friendly names that exactly match this name.
     * @return Twilio_Applications_ListApplications_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the PageSize input for this ListApplications Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_Applications_ListApplications_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListApplications Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_Applications_ListApplications_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListApplications Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Applications_ListApplications_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListApplications Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_ListApplications_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListApplications Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListApplications execution.
     * @param Twilio_Applications_ListApplications $choreo The choreography object for this execution.
     * @param Twilio_Applications_ListApplications_Inputs|array $inputs (optional) Inputs as Twilio_Applications_ListApplications_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_ListApplications_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Applications_ListApplications $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListApplications execution.
     *
     * @return Twilio_Applications_ListApplications_Results New results object.
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
     * Wraps results in appropriate results class for this ListApplications execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Applications_ListApplications_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Applications_ListApplications_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListApplications Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_ListApplications_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListApplications Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Applications_ListApplications_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListApplications execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Outgoing Caller IDs for a Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_ListCallerIDs extends Temboo_Choreography
{
    /**
     * Returns a list of Outgoing Caller IDs for a Twilio account.
     *
     * @param Temboo_Session $session The session that owns this ListCallerIDs Choreo.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/OutgoingCallerIDs/ListCallerIDs/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCallerIDs Choreo.
     *
     * @param Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_OutgoingCallerIDs_ListCallerIDs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCallerIDs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCallerIDs Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCallerIDs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCallerIDs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListCallerIDs Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListCallerIDs Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this ListCallerIDs Choreo.
     *
     * @param string $value (optional, string) Only show the caller id resource that exactly matches this name.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the PageSize input for this ListCallerIDs Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListCallerIDs Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the PhoneNumber input for this ListCallerIDs Choreo.
     *
     * @param string $value (optional, string) Only return the caller id resource that exactly matches this phone number.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function setPhoneNumber($value)
    {
        return $this->set('PhoneNumber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListCallerIDs Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListCallerIDs Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the outgoing caller id. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListCallerIDs Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_ListCallerIDs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCallerIDs Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCallerIDs execution.
     * @param Twilio_OutgoingCallerIDs_ListCallerIDs $choreo The choreography object for this execution.
     * @param Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_ListCallerIDs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_OutgoingCallerIDs_ListCallerIDs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCallerIDs execution.
     *
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Results New results object.
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
     * Wraps results in appropriate results class for this ListCallerIDs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_OutgoingCallerIDs_ListCallerIDs_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCallerIDs Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_ListCallerIDs_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCallerIDs Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_ListCallerIDs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListCallerIDs execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Twilio short codes which can send and receive SMS messages with mobile phones.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_ListShortCodes extends Temboo_Choreography
{
    /**
     * Returns a list of Twilio short codes which can send and receive SMS messages with mobile phones.
     *
     * @param Temboo_Session $session The session that owns this ListShortCodes Choreo.
     * @return Twilio_ShortCodes_ListShortCodes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/ShortCodes/ListShortCodes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListShortCodes Choreo.
     *
     * @param Twilio_ShortCodes_ListShortCodes_Inputs|array $inputs (optional) Inputs as Twilio_ShortCodes_ListShortCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ShortCodes_ListShortCodes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_ShortCodes_ListShortCodes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListShortCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_ShortCodes_ListShortCodes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListShortCodes Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_ListShortCodes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListShortCodes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListShortCodes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListShortCodes Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListShortCodes Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this ListShortCodes Choreo.
     *
     * @param string $value (optional, string) Only return the short code resources with friendly names that exactly match this name.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the PageSize input for this ListShortCodes Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListShortCodes Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListShortCodes Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShortCode input for this ListShortCodes Choreo.
     *
     * @param string $value (optional, string) Only return the short code resources that match this pattern. You can specify partial numbers and use '*' as a wildcard for any digit.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function setShortCode($value)
    {
        return $this->set('ShortCode', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListShortCodes Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the list of short codes. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_ShortCodes_ListShortCodes_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListShortCodes Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_ListShortCodes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListShortCodes Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListShortCodes execution.
     * @param Twilio_ShortCodes_ListShortCodes $choreo The choreography object for this execution.
     * @param Twilio_ShortCodes_ListShortCodes_Inputs|array $inputs (optional) Inputs as Twilio_ShortCodes_ListShortCodes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ShortCodes_ListShortCodes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_ShortCodes_ListShortCodes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListShortCodes execution.
     *
     * @return Twilio_ShortCodes_ListShortCodes_Results New results object.
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
     * Wraps results in appropriate results class for this ListShortCodes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_ShortCodes_ListShortCodes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_ShortCodes_ListShortCodes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListShortCodes Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_ListShortCodes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListShortCodes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_ShortCodes_ListShortCodes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListShortCodes execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing caller id.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_UpdateCallerID extends Temboo_Choreography
{
    /**
     * Updates an existing caller id.
     *
     * @param Temboo_Session $session The session that owns this UpdateCallerID Choreo.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/OutgoingCallerIDs/UpdateCallerID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateCallerID Choreo.
     *
     * @param Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_OutgoingCallerIDs_UpdateCallerID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateCallerID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateCallerID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateCallerID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this UpdateCallerID Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this UpdateCallerID Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this UpdateCallerID Choreo.
     *
     * @param string $value (conditional, string) A human readable description of a Caller ID, with maximum length of 64 characters. Defaults to a nicely formatted version of the phone number.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the OutgoingCallerSID input for this UpdateCallerID Choreo.
     *
     * @param string $value (required, string) The id of the outgoing caller to retrieve.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs For method chaining.
     */
    public function setOutgoingCallerSID($value)
    {
        return $this->set('OutgoingCallerSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateCallerID Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this UpdateCallerID Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the outgoing caller id. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the UpdateCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_UpdateCallerID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateCallerID Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateCallerID execution.
     * @param Twilio_OutgoingCallerIDs_UpdateCallerID $choreo The choreography object for this execution.
     * @param Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_UpdateCallerID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_OutgoingCallerIDs_UpdateCallerID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateCallerID execution.
     *
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateCallerID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_OutgoingCallerIDs_UpdateCallerID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_UpdateCallerID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateCallerID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_UpdateCallerID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateCallerID execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a recording from your account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_DeleteRecording extends Temboo_Choreography
{
    /**
     * Deletes a recording from your account.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecording Choreo.
     * @return Twilio_Recordings_DeleteRecording New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Recordings/DeleteRecording/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteRecording Choreo.
     *
     * @param Twilio_Recordings_DeleteRecording_Inputs|array $inputs (optional) Inputs as Twilio_Recordings_DeleteRecording_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Recordings_DeleteRecording_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Recordings_DeleteRecording_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRecording Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Recordings_DeleteRecording_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Recordings_DeleteRecording_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRecording Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_DeleteRecording_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteRecording Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Recordings_DeleteRecording_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRecording input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Recordings_DeleteRecording_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Recordings_DeleteRecording_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this DeleteRecording Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Recordings_DeleteRecording_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this DeleteRecording Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Recordings_DeleteRecording_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the RecordingSID input for this DeleteRecording Choreo.
     *
     * @param string $value (required, string) The id of the recording to delete.
     * @return Twilio_Recordings_DeleteRecording_Inputs For method chaining.
     */
    public function setRecordingSID($value)
    {
        return $this->set('RecordingSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteRecording Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default), and xml.
     * @return Twilio_Recordings_DeleteRecording_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this DeleteRecording Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the recording. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Recordings_DeleteRecording_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the DeleteRecording Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_DeleteRecording_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRecording Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecording execution.
     * @param Twilio_Recordings_DeleteRecording $choreo The choreography object for this execution.
     * @param Twilio_Recordings_DeleteRecording_Inputs|array $inputs (optional) Inputs as Twilio_Recordings_DeleteRecording_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Recordings_DeleteRecording_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Recordings_DeleteRecording $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRecording execution.
     *
     * @return Twilio_Recordings_DeleteRecording_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteRecording execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Recordings_DeleteRecording_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Recordings_DeleteRecording_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteRecording Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Recordings_DeleteRecording_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteRecording Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Recordings_DeleteRecording_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteRecording execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Purchases a new phone number for your Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_AddPhoneNumber extends Temboo_Choreography
{
    /**
     * Purchases a new phone number for your Twilio account.
     *
     * @param Temboo_Session $session The session that owns this AddPhoneNumber Choreo.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/IncomingPhoneNumbers/AddPhoneNumber/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddPhoneNumber Choreo.
     *
     * @param Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_IncomingPhoneNumbers_AddPhoneNumber_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddPhoneNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddPhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddPhoneNumber Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddPhoneNumber input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIVersion input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) Calls to this phone number will start a new TwiML session with this API version. Either 2010-04-01 or 2008-08-01.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setAPIVersion($value)
    {
        return $this->set('APIVersion', $value);
    }

    /**
     * Set the value for the AccountSID input for this AddPhoneNumber Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AreaCode input for this AddPhoneNumber Choreo.
     *
     * @param int $value (conditional, integer) The desired area code for your new incoming phone number. Required unless specifying the complete PhoneNumber.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setAreaCode($value)
    {
        return $this->set('AreaCode', $value);
    }

    /**
     * Set the value for the AuthToken input for this AddPhoneNumber Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) A human readable description of the new incoming phone number resource, with maximum length 64 characters.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the PhoneNumber input for this AddPhoneNumber Choreo.
     *
     * @param string $value (conditional, string) The phone number you want to purchase. Required unless provided the AreaCode.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setPhoneNumber($value)
    {
        return $this->set('PhoneNumber', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SmsApplicationSID input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The 34 character sid of the application Twilio should use to handle SMSs sent to this number.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setSmsApplicationSID($value)
    {
        return $this->set('SmsApplicationSID', $value);
    }

    /**
     * Set the value for the SmsFallbackMethod input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsFallbackUrl. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setSmsFallbackMethod($value)
    {
        return $this->set('SmsFallbackMethod', $value);
    }

    /**
     * Set the value for the SmsFallbackURL input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs requesting or executing the TwiML defined by SmsUrl.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setSmsFallbackURL($value)
    {
        return $this->set('SmsFallbackURL', $value);
    }

    /**
     * Set the value for the SmsMethod input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the SmsUrl. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setSmsMethod($value)
    {
        return $this->set('SmsMethod', $value);
    }

    /**
     * Set the value for the SmsURL input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio should request when somebody sends an SMS to the new phone number.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setSmsURL($value)
    {
        return $this->set('SmsURL', $value);
    }

    /**
     * Set the value for the StatusCallbackMethod input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method Twilio will use to make requests to the StatusCallback URL. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setStatusCallbackMethod($value)
    {
        return $this->set('StatusCallbackMethod', $value);
    }

    /**
     * Set the value for the StatusCallback input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio will request to pass status parameters (such as call ended) to your application.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setStatusCallback($value)
    {
        return $this->set('StatusCallback', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the phone number. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }

    /**
     * Set the value for the VoiceApplicationSID input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The 34 character sid of the application Twilio should use to handle phone calls to this number.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setVoiceApplicationSID($value)
    {
        return $this->set('VoiceApplicationSID', $value);
    }

    /**
     * Set the value for the VoiceCallerIDLookup input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) Do a lookup of a caller's name from the CNAM database and post it to your app. Either true or false.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setVoiceCallerIDLookup($value)
    {
        return $this->set('VoiceCallerIDLookup', $value);
    }

    /**
     * Set the value for the VoiceFallbackMethod input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the VoiceFallbackURL. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setVoiceFallbackMethod($value)
    {
        return $this->set('VoiceFallbackMethod', $value);
    }

    /**
     * Set the value for the VoiceFallbackURL input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) A URL that Twilio will request if an error occurs requesting or executing the TwiML defined by VoiceURL.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setVoiceFallbackURL($value)
    {
        return $this->set('VoiceFallbackURL', $value);
    }

    /**
     * Set the value for the VoiceMethod input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The HTTP method that should be used to request the VoiceURL. Either GET or POST.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setVoiceMethod($value)
    {
        return $this->set('VoiceMethod', $value);
    }

    /**
     * Set the value for the VoiceURL input for this AddPhoneNumber Choreo.
     *
     * @param string $value (optional, string) The URL that Twilio should request when somebody dials the phone number.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs For method chaining.
     */
    public function setVoiceURL($value)
    {
        return $this->set('VoiceURL', $value);
    }
}


/**
 * Execution object for the AddPhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_AddPhoneNumber_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddPhoneNumber Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddPhoneNumber execution.
     * @param Twilio_IncomingPhoneNumbers_AddPhoneNumber $choreo The choreography object for this execution.
     * @param Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs|array $inputs (optional) Inputs as Twilio_IncomingPhoneNumbers_AddPhoneNumber_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_IncomingPhoneNumbers_AddPhoneNumber $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddPhoneNumber execution.
     *
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Results New results object.
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
     * Wraps results in appropriate results class for this AddPhoneNumber execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_IncomingPhoneNumbers_AddPhoneNumber_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddPhoneNumber Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_IncomingPhoneNumbers_AddPhoneNumber_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddPhoneNumber Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_IncomingPhoneNumbers_AddPhoneNumber_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddPhoneNumber execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the details for an individual Connect App associated with a Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_GetConnectApp extends Temboo_Choreography
{
    /**
     * Retrieves the details for an individual Connect App associated with a Twilio account.
     *
     * @param Temboo_Session $session The session that owns this GetConnectApp Choreo.
     * @return Twilio_ConnectApps_GetConnectApp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/ConnectApps/GetConnectApp/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetConnectApp Choreo.
     *
     * @param Twilio_ConnectApps_GetConnectApp_Inputs|array $inputs (optional) Inputs as Twilio_ConnectApps_GetConnectApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ConnectApps_GetConnectApp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_ConnectApps_GetConnectApp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetConnectApp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ConnectApps_GetConnectApp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_ConnectApps_GetConnectApp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetConnectApp Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_GetConnectApp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetConnectApp Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ConnectApps_GetConnectApp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetConnectApp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_ConnectApps_GetConnectApp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_ConnectApps_GetConnectApp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetConnectApp Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_ConnectApps_GetConnectApp_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetConnectApp Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_ConnectApps_GetConnectApp_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ConnectAppSID input for this GetConnectApp Choreo.
     *
     * @param string $value (required, string) The id of the Connect App to retrieve.
     * @return Twilio_ConnectApps_GetConnectApp_Inputs For method chaining.
     */
    public function setConnectAppSID($value)
    {
        return $this->set('ConnectAppSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetConnectApp Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_ConnectApps_GetConnectApp_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetConnectApp Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_GetConnectApp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetConnectApp Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetConnectApp execution.
     * @param Twilio_ConnectApps_GetConnectApp $choreo The choreography object for this execution.
     * @param Twilio_ConnectApps_GetConnectApp_Inputs|array $inputs (optional) Inputs as Twilio_ConnectApps_GetConnectApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ConnectApps_GetConnectApp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_ConnectApps_GetConnectApp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetConnectApp execution.
     *
     * @return Twilio_ConnectApps_GetConnectApp_Results New results object.
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
     * Wraps results in appropriate results class for this GetConnectApp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_ConnectApps_GetConnectApp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_ConnectApps_GetConnectApp_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetConnectApp Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_GetConnectApp_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetConnectApp Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_ConnectApps_GetConnectApp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetConnectApp execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of notifications generated during a call.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListNotifications extends Temboo_Choreography
{
    /**
     * Returns a list of notifications generated during a call.
     *
     * @param Temboo_Session $session The session that owns this ListNotifications Choreo.
     * @return Twilio_Calls_ListNotifications New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Calls/ListNotifications/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListNotifications Choreo.
     *
     * @param Twilio_Calls_ListNotifications_Inputs|array $inputs (optional) Inputs as Twilio_Calls_ListNotifications_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_ListNotifications_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Calls_ListNotifications_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListNotifications Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_ListNotifications_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Calls_ListNotifications_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListNotifications Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListNotifications_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListNotifications Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_ListNotifications_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListNotifications input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Calls_ListNotifications_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Calls_ListNotifications_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListNotifications Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Calls_ListNotifications_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListNotifications Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Calls_ListNotifications_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the CallSID input for this ListNotifications Choreo.
     *
     * @param string $value (required, string) The unique id of the call to retrieve a list of notifications for.
     * @return Twilio_Calls_ListNotifications_Inputs For method chaining.
     */
    public function setCallSID($value)
    {
        return $this->set('CallSID', $value);
    }

    /**
     * Set the value for the PageSize input for this ListNotifications Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_Calls_ListNotifications_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListNotifications Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_Calls_ListNotifications_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListNotifications Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Calls_ListNotifications_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListNotifications Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the call. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Calls_ListNotifications_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListNotifications Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListNotifications_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListNotifications Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListNotifications execution.
     * @param Twilio_Calls_ListNotifications $choreo The choreography object for this execution.
     * @param Twilio_Calls_ListNotifications_Inputs|array $inputs (optional) Inputs as Twilio_Calls_ListNotifications_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_ListNotifications_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Calls_ListNotifications $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListNotifications execution.
     *
     * @return Twilio_Calls_ListNotifications_Results New results object.
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
     * Wraps results in appropriate results class for this ListNotifications execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Calls_ListNotifications_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Calls_ListNotifications_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListNotifications Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListNotifications_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListNotifications Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Calls_ListNotifications_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListNotifications execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of phone calls made to and from the specified account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListCalls extends Temboo_Choreography
{
    /**
     * Retrieves a list of phone calls made to and from the specified account.
     *
     * @param Temboo_Session $session The session that owns this ListCalls Choreo.
     * @return Twilio_Calls_ListCalls New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Calls/ListCalls/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListCalls Choreo.
     *
     * @param Twilio_Calls_ListCalls_Inputs|array $inputs (optional) Inputs as Twilio_Calls_ListCalls_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_ListCalls_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Calls_ListCalls_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListCalls Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_ListCalls_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Calls_ListCalls_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListCalls Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListCalls_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListCalls Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Calls_ListCalls_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListCalls input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListCalls Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListCalls Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the From input for this ListCalls Choreo.
     *
     * @param string $value (optional, string) Fillters results for calls from this phone number or Client identifier.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the PageSize input for this ListCalls Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListCalls Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ParentCallSID input for this ListCalls Choreo.
     *
     * @param string $value (optional, string) Filters results for calls spawned by the call with this Sid.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setParentCallSID($value)
    {
        return $this->set('ParentCallSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListCalls Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartTime input for this ListCalls Choreo.
     *
     * @param string $value (optional, string) Filters results for calls that started on this date, given as YYYY-MM-DD. Also supports operators such as >= or <=.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setStartTime($value)
    {
        return $this->set('StartTime', $value);
    }

    /**
     * Set the value for the Status input for this ListCalls Choreo.
     *
     * @param string $value (optional, string) Fillters results for calls currently in this status. Valid values are: queued, ringing, in-progress, completed, failed, busy, or no-answer.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListCalls Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount to retrieve calls for. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }

    /**
     * Set the value for the To input for this ListCalls Choreo.
     *
     * @param string $value (optional, string) Fillters results for calls to this phone number or Client identifier.
     * @return Twilio_Calls_ListCalls_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the ListCalls Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListCalls_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListCalls Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListCalls execution.
     * @param Twilio_Calls_ListCalls $choreo The choreography object for this execution.
     * @param Twilio_Calls_ListCalls_Inputs|array $inputs (optional) Inputs as Twilio_Calls_ListCalls_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Calls_ListCalls_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Calls_ListCalls $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListCalls execution.
     *
     * @return Twilio_Calls_ListCalls_Results New results object.
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
     * Wraps results in appropriate results class for this ListCalls execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Calls_ListCalls_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Calls_ListCalls_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListCalls Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Calls_ListCalls_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListCalls Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Calls_ListCalls_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListCalls execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a specific SMS from Twilio by allowing you to specify a message ID.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_GetMessage extends Temboo_Choreography
{
    /**
     * Retrieves a specific SMS from Twilio by allowing you to specify a message ID.
     *
     * @param Temboo_Session $session The session that owns this GetMessage Choreo.
     * @return Twilio_SMSMessages_GetMessage New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/SMSMessages/GetMessage/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMessage Choreo.
     *
     * @param Twilio_SMSMessages_GetMessage_Inputs|array $inputs (optional) Inputs as Twilio_SMSMessages_GetMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_SMSMessages_GetMessage_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_SMSMessages_GetMessage_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_SMSMessages_GetMessage_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_SMSMessages_GetMessage_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_GetMessage_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMessage Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_SMSMessages_GetMessage_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMessage input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_SMSMessages_GetMessage_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_SMSMessages_GetMessage_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetMessage Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_SMSMessages_GetMessage_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetMessage Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_SMSMessages_GetMessage_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetMessage Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_SMSMessages_GetMessage_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SMSMessageSID input for this GetMessage Choreo.
     *
     * @param string $value (required, string) The unique ID for the Twilio message you want to retrieve.
     * @return Twilio_SMSMessages_GetMessage_Inputs For method chaining.
     */
    public function setSMSMessageSID($value)
    {
        return $this->set('SMSMessageSID', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetMessage Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount to retrieve messages for. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_SMSMessages_GetMessage_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_GetMessage_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMessage Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMessage execution.
     * @param Twilio_SMSMessages_GetMessage $choreo The choreography object for this execution.
     * @param Twilio_SMSMessages_GetMessage_Inputs|array $inputs (optional) Inputs as Twilio_SMSMessages_GetMessage_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_SMSMessages_GetMessage_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_SMSMessages_GetMessage $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMessage execution.
     *
     * @return Twilio_SMSMessages_GetMessage_Results New results object.
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
     * Wraps results in appropriate results class for this GetMessage execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_SMSMessages_GetMessage_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_SMSMessages_GetMessage_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMessage Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_GetMessage_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMessage Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_SMSMessages_GetMessage_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMessage execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes an existing caller id.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_DeleteCallerID extends Temboo_Choreography
{
    /**
     * Deletes an existing caller id.
     *
     * @param Temboo_Session $session The session that owns this DeleteCallerID Choreo.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/OutgoingCallerIDs/DeleteCallerID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteCallerID Choreo.
     *
     * @param Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_OutgoingCallerIDs_DeleteCallerID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteCallerID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteCallerID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteCallerID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this DeleteCallerID Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this DeleteCallerID Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the OutgoingCallerSID input for this DeleteCallerID Choreo.
     *
     * @param string $value (required, string) The id of the outgoing caller to retrieve.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs For method chaining.
     */
    public function setOutgoingCallerSID($value)
    {
        return $this->set('OutgoingCallerSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteCallerID Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this DeleteCallerID Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the outgoing caller id. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the DeleteCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_DeleteCallerID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteCallerID Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteCallerID execution.
     * @param Twilio_OutgoingCallerIDs_DeleteCallerID $choreo The choreography object for this execution.
     * @param Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs|array $inputs (optional) Inputs as Twilio_OutgoingCallerIDs_DeleteCallerID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_OutgoingCallerIDs_DeleteCallerID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteCallerID execution.
     *
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteCallerID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_OutgoingCallerIDs_DeleteCallerID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteCallerID Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_OutgoingCallerIDs_DeleteCallerID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteCallerID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_OutgoingCallerIDs_DeleteCallerID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteCallerID execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of Connect Apps within your Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_ListConnectApps extends Temboo_Choreography
{
    /**
     * Returns a list of Connect Apps within your Twilio account.
     *
     * @param Temboo_Session $session The session that owns this ListConnectApps Choreo.
     * @return Twilio_ConnectApps_ListConnectApps New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/ConnectApps/ListConnectApps/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListConnectApps Choreo.
     *
     * @param Twilio_ConnectApps_ListConnectApps_Inputs|array $inputs (optional) Inputs as Twilio_ConnectApps_ListConnectApps_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ConnectApps_ListConnectApps_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_ConnectApps_ListConnectApps_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListConnectApps Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ConnectApps_ListConnectApps_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_ConnectApps_ListConnectApps_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListConnectApps Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_ListConnectApps_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListConnectApps Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ConnectApps_ListConnectApps_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListConnectApps input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_ConnectApps_ListConnectApps_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_ConnectApps_ListConnectApps_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListConnectApps Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_ConnectApps_ListConnectApps_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListConnectApps Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_ConnectApps_ListConnectApps_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the PageSize input for this ListConnectApps Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_ConnectApps_ListConnectApps_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListConnectApps Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_ConnectApps_ListConnectApps_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListConnectApps Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_ConnectApps_ListConnectApps_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListConnectApps Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_ListConnectApps_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListConnectApps Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListConnectApps execution.
     * @param Twilio_ConnectApps_ListConnectApps $choreo The choreography object for this execution.
     * @param Twilio_ConnectApps_ListConnectApps_Inputs|array $inputs (optional) Inputs as Twilio_ConnectApps_ListConnectApps_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ConnectApps_ListConnectApps_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_ConnectApps_ListConnectApps $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListConnectApps execution.
     *
     * @return Twilio_ConnectApps_ListConnectApps_Results New results object.
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
     * Wraps results in appropriate results class for this ListConnectApps execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_ConnectApps_ListConnectApps_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_ConnectApps_ListConnectApps_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListConnectApps Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ConnectApps_ListConnectApps_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListConnectApps Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_ConnectApps_ListConnectApps_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListConnectApps execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of the subaccounts belonging to the main account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_ListAccounts extends Temboo_Choreography
{
    /**
     * Retrieves a list of the subaccounts belonging to the main account.
     *
     * @param Temboo_Session $session The session that owns this ListAccounts Choreo.
     * @return Twilio_Accounts_ListAccounts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Accounts/ListAccounts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAccounts Choreo.
     *
     * @param Twilio_Accounts_ListAccounts_Inputs|array $inputs (optional) Inputs as Twilio_Accounts_ListAccounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Accounts_ListAccounts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Accounts_ListAccounts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAccounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Accounts_ListAccounts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Accounts_ListAccounts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAccounts Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_ListAccounts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAccounts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Accounts_ListAccounts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAccounts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Accounts_ListAccounts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Accounts_ListAccounts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListAccounts Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Accounts_ListAccounts_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListAccounts Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Accounts_ListAccounts_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the FriendlyName input for this ListAccounts Choreo.
     *
     * @param string $value (optional, string) Filters the results for accounts with friendly names that exactly match this value.
     * @return Twilio_Accounts_ListAccounts_Inputs For method chaining.
     */
    public function setFriendlyName($value)
    {
        return $this->set('FriendlyName', $value);
    }

    /**
     * Set the value for the PageSize input for this ListAccounts Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_Accounts_ListAccounts_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListAccounts Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_Accounts_ListAccounts_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListAccounts Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Accounts_ListAccounts_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Status input for this ListAccounts Choreo.
     *
     * @param string $value (optional, string) Filters results for accounts that have a particular status. Valid values are: closed, suspended, or active.
     * @return Twilio_Accounts_ListAccounts_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }
}


/**
 * Execution object for the ListAccounts Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_ListAccounts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAccounts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAccounts execution.
     * @param Twilio_Accounts_ListAccounts $choreo The choreography object for this execution.
     * @param Twilio_Accounts_ListAccounts_Inputs|array $inputs (optional) Inputs as Twilio_Accounts_ListAccounts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Accounts_ListAccounts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Accounts_ListAccounts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAccounts execution.
     *
     * @return Twilio_Accounts_ListAccounts_Results New results object.
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
     * Wraps results in appropriate results class for this ListAccounts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Accounts_ListAccounts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Accounts_ListAccounts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAccounts Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Accounts_ListAccounts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAccounts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Accounts_ListAccounts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAccounts execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves an individual short code resource.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_GetShortCode extends Temboo_Choreography
{
    /**
     * Retrieves an individual short code resource.
     *
     * @param Temboo_Session $session The session that owns this GetShortCode Choreo.
     * @return Twilio_ShortCodes_GetShortCode New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/ShortCodes/GetShortCode/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetShortCode Choreo.
     *
     * @param Twilio_ShortCodes_GetShortCode_Inputs|array $inputs (optional) Inputs as Twilio_ShortCodes_GetShortCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ShortCodes_GetShortCode_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_ShortCodes_GetShortCode_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetShortCode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ShortCodes_GetShortCode_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_ShortCodes_GetShortCode_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetShortCode Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_GetShortCode_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetShortCode Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_ShortCodes_GetShortCode_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetShortCode input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_ShortCodes_GetShortCode_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_ShortCodes_GetShortCode_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetShortCode Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_ShortCodes_GetShortCode_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetShortCode Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_ShortCodes_GetShortCode_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetShortCode Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_ShortCodes_GetShortCode_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the ShortCodeSID input for this GetShortCode Choreo.
     *
     * @param string $value (required, string) The id of the short code to retrieve.
     * @return Twilio_ShortCodes_GetShortCode_Inputs For method chaining.
     */
    public function setShortCodeSID($value)
    {
        return $this->set('ShortCodeSID', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetShortCode Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with short code. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_ShortCodes_GetShortCode_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetShortCode Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_GetShortCode_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetShortCode Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetShortCode execution.
     * @param Twilio_ShortCodes_GetShortCode $choreo The choreography object for this execution.
     * @param Twilio_ShortCodes_GetShortCode_Inputs|array $inputs (optional) Inputs as Twilio_ShortCodes_GetShortCode_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_ShortCodes_GetShortCode_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_ShortCodes_GetShortCode $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetShortCode execution.
     *
     * @return Twilio_ShortCodes_GetShortCode_Results New results object.
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
     * Wraps results in appropriate results class for this GetShortCode execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_ShortCodes_GetShortCode_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_ShortCodes_GetShortCode_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetShortCode Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_ShortCodes_GetShortCode_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetShortCode Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_ShortCodes_GetShortCode_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetShortCode execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves details for an individual queue.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_GetQueue extends Temboo_Choreography
{
    /**
     * Retrieves details for an individual queue.
     *
     * @param Temboo_Session $session The session that owns this GetQueue Choreo.
     * @return Twilio_Queues_GetQueue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Queues/GetQueue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetQueue Choreo.
     *
     * @param Twilio_Queues_GetQueue_Inputs|array $inputs (optional) Inputs as Twilio_Queues_GetQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_GetQueue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Queues_GetQueue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_GetQueue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Queues_GetQueue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetQueue Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_GetQueue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Queues_GetQueue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetQueue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Queues_GetQueue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Queues_GetQueue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetQueue Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Queues_GetQueue_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetQueue Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Queues_GetQueue_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the QueueSID input for this GetQueue Choreo.
     *
     * @param string $value (required, string) The id of the queue to retrieve.
     * @return Twilio_Queues_GetQueue_Inputs For method chaining.
     */
    public function setQueueSID($value)
    {
        return $this->set('QueueSID', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetQueue Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Queues_GetQueue_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this GetQueue Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the queue to retrieve. If not specified, the main AccountSID used to authenticate is used in the request.
     * @return Twilio_Queues_GetQueue_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the GetQueue Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_GetQueue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetQueue Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetQueue execution.
     * @param Twilio_Queues_GetQueue $choreo The choreography object for this execution.
     * @param Twilio_Queues_GetQueue_Inputs|array $inputs (optional) Inputs as Twilio_Queues_GetQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Queues_GetQueue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Queues_GetQueue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetQueue execution.
     *
     * @return Twilio_Queues_GetQueue_Results New results object.
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
     * Wraps results in appropriate results class for this GetQueue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Queues_GetQueue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Queues_GetQueue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetQueue Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Queues_GetQueue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetQueue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Queues_GetQueue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetQueue execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the details for an individual application associated with your Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_GetApplication extends Temboo_Choreography
{
    /**
     * Returns the details for an individual application associated with your Twilio account.
     *
     * @param Temboo_Session $session The session that owns this GetApplication Choreo.
     * @return Twilio_Applications_GetApplication New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Applications/GetApplication/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetApplication Choreo.
     *
     * @param Twilio_Applications_GetApplication_Inputs|array $inputs (optional) Inputs as Twilio_Applications_GetApplication_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_GetApplication_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Applications_GetApplication_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetApplication Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_GetApplication_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Applications_GetApplication_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_GetApplication_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetApplication Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Applications_GetApplication_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetApplication input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Applications_GetApplication_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Applications_GetApplication_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this GetApplication Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Applications_GetApplication_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the ApplicationSID input for this GetApplication Choreo.
     *
     * @param string $value (required, string) The id of the application to retrieve.
     * @return Twilio_Applications_GetApplication_Inputs For method chaining.
     */
    public function setApplicationSID($value)
    {
        return $this->set('ApplicationSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this GetApplication Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Applications_GetApplication_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetApplication Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Applications_GetApplication_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the GetApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_GetApplication_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetApplication Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetApplication execution.
     * @param Twilio_Applications_GetApplication $choreo The choreography object for this execution.
     * @param Twilio_Applications_GetApplication_Inputs|array $inputs (optional) Inputs as Twilio_Applications_GetApplication_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Applications_GetApplication_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Applications_GetApplication $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetApplication execution.
     *
     * @return Twilio_Applications_GetApplication_Results New results object.
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
     * Wraps results in appropriate results class for this GetApplication execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Applications_GetApplication_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Applications_GetApplication_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetApplication Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Applications_GetApplication_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetApplication Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Applications_GetApplication_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetApplication execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns a list of transcriptions for the specified account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Transcriptions_ListTranscriptions extends Temboo_Choreography
{
    /**
     * Returns a list of transcriptions for the specified account.
     *
     * @param Temboo_Session $session The session that owns this ListTranscriptions Choreo.
     * @return Twilio_Transcriptions_ListTranscriptions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/Transcriptions/ListTranscriptions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListTranscriptions Choreo.
     *
     * @param Twilio_Transcriptions_ListTranscriptions_Inputs|array $inputs (optional) Inputs as Twilio_Transcriptions_ListTranscriptions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Transcriptions_ListTranscriptions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_Transcriptions_ListTranscriptions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListTranscriptions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_Transcriptions_ListTranscriptions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListTranscriptions Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Transcriptions_ListTranscriptions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListTranscriptions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListTranscriptions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListTranscriptions Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListTranscriptions Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the PageSize input for this ListTranscriptions Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListTranscriptions Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListTranscriptions Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListTranscriptions Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount associated with the transcription. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_Transcriptions_ListTranscriptions_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }
}


/**
 * Execution object for the ListTranscriptions Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Transcriptions_ListTranscriptions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListTranscriptions Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListTranscriptions execution.
     * @param Twilio_Transcriptions_ListTranscriptions $choreo The choreography object for this execution.
     * @param Twilio_Transcriptions_ListTranscriptions_Inputs|array $inputs (optional) Inputs as Twilio_Transcriptions_ListTranscriptions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_Transcriptions_ListTranscriptions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_Transcriptions_ListTranscriptions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListTranscriptions execution.
     *
     * @return Twilio_Transcriptions_ListTranscriptions_Results New results object.
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
     * Wraps results in appropriate results class for this ListTranscriptions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_Transcriptions_ListTranscriptions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_Transcriptions_ListTranscriptions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListTranscriptions Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_Transcriptions_ListTranscriptions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListTranscriptions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_Transcriptions_ListTranscriptions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListTranscriptions execution.
     *
     * @return string The response from Twilio.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of SMS messages from your Twilio account.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_ListMessages extends Temboo_Choreography
{
    /**
     * Retrieves a list of SMS messages from your Twilio account.
     *
     * @param Temboo_Session $session The session that owns this ListMessages Choreo.
     * @return Twilio_SMSMessages_ListMessages New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Twilio/SMSMessages/ListMessages/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMessages Choreo.
     *
     * @param Twilio_SMSMessages_ListMessages_Inputs|array $inputs (optional) Inputs as Twilio_SMSMessages_ListMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_SMSMessages_ListMessages_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Twilio_SMSMessages_ListMessages_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_SMSMessages_ListMessages_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Twilio_SMSMessages_ListMessages_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMessages Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_ListMessages_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMessages Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Twilio_SMSMessages_ListMessages_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMessages input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountSID input for this ListMessages Choreo.
     *
     * @param string $value (required, string) The AccountSID provided when you signed up for a Twilio account.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setAccountSID($value)
    {
        return $this->set('AccountSID', $value);
    }

    /**
     * Set the value for the AuthToken input for this ListMessages Choreo.
     *
     * @param string $value (required, string) The authorization token provided when you signed up for a Twilio account.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setAuthToken($value)
    {
        return $this->set('AuthToken', $value);
    }

    /**
     * Set the value for the DateSent input for this ListMessages Choreo.
     *
     * @param string $value (optional, date) A date in YYYY-MM-DD format. If you use this input, the Choreo will retrieve only messages sent on this date.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setDateSent($value)
    {
        return $this->set('DateSent', $value);
    }

    /**
     * Set the value for the From input for this ListMessages Choreo.
     *
     * @param string $value (optional, string) If used, the Choreo will only retrieve messages sent from this phone number.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the PageSize input for this ListMessages Choreo.
     *
     * @param int $value (optional, integer) The number of results per page.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this ListMessages Choreo.
     *
     * @param int $value (optional, integer) The page of results to retrieve. Defaults to 0.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListMessages Choreo.
     *
     * @param string $value (optional, string) The format that the response should be in. Valid values are: json (the default) and xml.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SubAccountSID input for this ListMessages Choreo.
     *
     * @param string $value (optional, string) The SID of the subaccount to retrieve the message from. If not specified, the main AccountSID used to authenticate is used in request.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setSubAccountSID($value)
    {
        return $this->set('SubAccountSID', $value);
    }

    /**
     * Set the value for the To input for this ListMessages Choreo.
     *
     * @param string $value (optional, string) If used, the Choreo will only retrieve messages sent to this phone number.
     * @return Twilio_SMSMessages_ListMessages_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }
}


/**
 * Execution object for the ListMessages Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_ListMessages_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMessages Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMessages execution.
     * @param Twilio_SMSMessages_ListMessages $choreo The choreography object for this execution.
     * @param Twilio_SMSMessages_ListMessages_Inputs|array $inputs (optional) Inputs as Twilio_SMSMessages_ListMessages_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Twilio_SMSMessages_ListMessages_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Twilio_SMSMessages_ListMessages $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMessages execution.
     *
     * @return Twilio_SMSMessages_ListMessages_Results New results object.
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
     * Wraps results in appropriate results class for this ListMessages execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Twilio_SMSMessages_ListMessages_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Twilio_SMSMessages_ListMessages_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMessages Choreo.
 *
 * @package Temboo
 * @subpackage Twilio
 */
class Twilio_SMSMessages_ListMessages_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMessages Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Twilio_SMSMessages_ListMessages_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListMessages execution.
     *
     * @return string The response from Twilio.
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
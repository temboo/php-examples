<?php

/**
 * Temboo PHP SDK Salesforce classes
 *
 * Execute Choreographies from the Temboo Salesforce bundle.
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
 * @subpackage Salesforce
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Creates a new Salesforce Object such as an Account, Contact, or Lead.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_CreateObject extends Temboo_Choreography
{
    /**
     * Creates a new Salesforce Object such as an Account, Contact, or Lead.
     *
     * @param Temboo_Session $session The session that owns this CreateObject Choreo.
     * @return Salesforce_Objects_CreateObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/CreateObject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateObject Choreo.
     *
     * @param Salesforce_Objects_CreateObject_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_CreateObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_CreateObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_CreateObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_CreateObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_CreateObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_CreateObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_CreateObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the SObject input for this CreateObject Choreo.
     *
     * @param string $value (required, json) A JSON string containing the SObject properties you wish to set.
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function setSObject($value)
    {
        return $this->set('SObject', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateObject Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this CreateObject Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this CreateObject Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this CreateObject Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this CreateObject Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateObject Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SObjectName input for this CreateObject Choreo.
     *
     * @param string $value (conditional, string) The name of the Salesforce object type being created (e.g. Account, Contact, Lead, etc).
     * @return Salesforce_Objects_CreateObject_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the CreateObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_CreateObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateObject Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateObject execution.
     * @param Salesforce_Objects_CreateObject $choreo The choreography object for this execution.
     * @param Salesforce_Objects_CreateObject_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_CreateObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_CreateObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_CreateObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateObject execution.
     *
     * @return Salesforce_Objects_CreateObject_Results New results object.
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
     * Wraps results in appropriate results class for this CreateObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_CreateObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_CreateObject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_CreateObject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateObject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_CreateObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ID" output from this CreateObject execution.
     *
     * @return string (string) The id of the object that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getID()
    {
        return $this->get('ID');
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this CreateObject execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this CreateObject execution.
     *
     * @return string The response from Google. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Represents a Google Calendar Resource.
	*/

	public function getCalendar() {
		return new Google_Calendar_Calendar_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Completes the OAuth process by retrieving a Salesforce access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Salesforce access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Salesforce_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Salesforce_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Salesforce_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Foursquare after registering your application.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Foursquare after registering your application.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Salesforce_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Salesforce
 */
class Salesforce_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Salesforce_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Salesforce_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Salesforce_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Salesforce_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Salesforce_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_OAuth_FinalizeOAuth_Results New instance.
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
    /**
     * Retrieve the value for the "RefreshToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) A token that may be used to obtain a new access token when the short-lived access token expires.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getRefreshToken()
    {
        return $this->get('RefreshToken');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Salesforce_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Salesforce_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Salesforce_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Google after registering your application.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the Display input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Tailors the login page to the user's device type. Currently the only values supported are:  page, popup and touch.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setDisplay($value)
    {
        return $this->set('Display', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the Immediate input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Avoid interacting with the user.  false - Prompt the user for login and approval (default),  true - If the user is currently logged in and has previously given approval, the approval step is skipped.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setImmediate($value)
    {
        return $this->set('Immediate', $value);
    }

    /**
     * Set the value for the Scope input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A space separated list of scope values.  Supported values are: api, chatter_api, full, id, refresh_token, visualforce, web.  defaults to: id, api, refresh_token.
     * @return Salesforce_OAuth_InitializeOAuth_Inputs For method chaining.
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
 * @subpackage Salesforce
 */
class Salesforce_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Salesforce_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Salesforce_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Salesforce_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Salesforce_OAuth_InitializeOAuth_Results New results object.
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
     * @return Salesforce_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_OAuth_InitializeOAuth_Results New instance.
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
 * Describes the individual metadata at all levels for the specified object.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DescribeObject extends Temboo_Choreography
{
    /**
     * Describes the individual metadata at all levels for the specified object.
     *
     * @param Temboo_Session $session The session that owns this DescribeObject Choreo.
     * @return Salesforce_Objects_DescribeObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/DescribeObject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DescribeObject Choreo.
     *
     * @param Salesforce_Objects_DescribeObject_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_DescribeObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_DescribeObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_DescribeObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DescribeObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_DescribeObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_DescribeObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DescribeObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DescribeObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DescribeObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_DescribeObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DescribeObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_DescribeObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_DescribeObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DescribeObject Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_DescribeObject_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this DescribeObject Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DescribeObject_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this DescribeObject Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DescribeObject_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this DescribeObject Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_DescribeObject_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this DescribeObject Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_DescribeObject_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SObjectName input for this DescribeObject Choreo.
     *
     * @param string $value (required, string) The name of the SObject to retrieve (e.g. Contact, Lead, Account, etc).
     * @return Salesforce_Objects_DescribeObject_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the DescribeObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DescribeObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DescribeObject Choreo.
     *
     * @param Temboo_Session $session The session that owns this DescribeObject execution.
     * @param Salesforce_Objects_DescribeObject $choreo The choreography object for this execution.
     * @param Salesforce_Objects_DescribeObject_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_DescribeObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_DescribeObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_DescribeObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DescribeObject execution.
     *
     * @return Salesforce_Objects_DescribeObject_Results New results object.
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
     * Wraps results in appropriate results class for this DescribeObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_DescribeObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_DescribeObject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DescribeObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_DescribeObject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DescribeObject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_DescribeObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this DescribeObject execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this DescribeObject execution.
     *
     * @return string (json) The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Retrieves the individual metadata for the specified object.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetObject extends Temboo_Choreography
{
    /**
     * Retrieves the individual metadata for the specified object.
     *
     * @param Temboo_Session $session The session that owns this GetObject Choreo.
     * @return Salesforce_Objects_GetObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/GetObject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetObject Choreo.
     *
     * @param Salesforce_Objects_GetObject_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_GetObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_GetObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_GetObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_GetObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_GetObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_GetObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_GetObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_GetObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetObject Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_GetObject_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetObject Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetObject_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this GetObject Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetObject_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this GetObject Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_GetObject_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this GetObject Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_GetObject_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SObjectName input for this GetObject Choreo.
     *
     * @param string $value (required, string) The name of the SObject to retrieve (e.g. Contact, Lead, Account, etc).
     * @return Salesforce_Objects_GetObject_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the GetObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetObject Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetObject execution.
     * @param Salesforce_Objects_GetObject $choreo The choreography object for this execution.
     * @param Salesforce_Objects_GetObject_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_GetObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_GetObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_GetObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetObject execution.
     *
     * @return Salesforce_Objects_GetObject_Results New results object.
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
     * Wraps results in appropriate results class for this GetObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_GetObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_GetObject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_GetObject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetObject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_GetObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this GetObject execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this GetObject execution.
     *
     * @return string (json) The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Executes the specified SOSL search.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Search_Search extends Temboo_Choreography
{
    /**
     * Executes the specified SOSL search.
     *
     * @param Temboo_Session $session The session that owns this Search Choreo.
     * @return Salesforce_Search_Search New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Search/Search/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Search Choreo.
     *
     * @param Salesforce_Search_Search_Inputs|array $inputs (optional) Inputs as Salesforce_Search_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Search_Search_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Search_Search_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Search_Search_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Search_Search_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Search_Search_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Search Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Search_Search_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Search input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Search_Search_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Search_Search_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Search Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Search_Search_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this Search Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Search_Search_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Search Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Search_Search_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this Search Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Search_Search_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this Search Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Search_Search_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SOSL input for this Search Choreo.
     *
     * @param string $value (required, string) The SOSL statement used to retrieve the set of records matching a specific criteria (e.g. select FirstName, LastName from Lead limit 1).
     * @return Salesforce_Search_Search_Inputs For method chaining.
     */
    public function setSOSL($value)
    {
        return $this->set('SOSL', $value);
    }
}


/**
 * Execution object for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Search_Search_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Search Choreo.
     *
     * @param Temboo_Session $session The session that owns this Search execution.
     * @param Salesforce_Search_Search $choreo The choreography object for this execution.
     * @param Salesforce_Search_Search_Inputs|array $inputs (optional) Inputs as Salesforce_Search_Search_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Search_Search_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Search_Search $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Search execution.
     *
     * @return Salesforce_Search_Search_Results New results object.
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
     * Wraps results in appropriate results class for this Search execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Search_Search_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Search_Search_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Search Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Search_Search_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Search Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Search_Search_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Search execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "NextRecordsURL" output from this Search execution.
     *
     * @return string (string) URL for the next batch of records
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextRecordsURL()
    {
        return $this->get('NextRecordsURL');
    }
    /**
     * Retrieve the value for the "Response" output from this Search execution.
     *
     * @return string (json) The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Lists the available objects and their metadata for your organization's data.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_ListObjects extends Temboo_Choreography
{
    /**
     * Lists the available objects and their metadata for your organization's data.
     *
     * @param Temboo_Session $session The session that owns this ListObjects Choreo.
     * @return Salesforce_Objects_ListObjects New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/ListObjects/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListObjects Choreo.
     *
     * @param Salesforce_Objects_ListObjects_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_ListObjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_ListObjects_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_ListObjects_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListObjects Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_ListObjects_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_ListObjects_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListObjects Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_ListObjects_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListObjects Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_ListObjects_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListObjects input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_ListObjects_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_ListObjects_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this ListObjects Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_ListObjects_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this ListObjects Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_ListObjects_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this ListObjects Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_ListObjects_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this ListObjects Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_ListObjects_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this ListObjects Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_ListObjects_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }
}


/**
 * Execution object for the ListObjects Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_ListObjects_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListObjects Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListObjects execution.
     * @param Salesforce_Objects_ListObjects $choreo The choreography object for this execution.
     * @param Salesforce_Objects_ListObjects_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_ListObjects_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_ListObjects_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_ListObjects $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListObjects execution.
     *
     * @return Salesforce_Objects_ListObjects_Results New results object.
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
     * Wraps results in appropriate results class for this ListObjects execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_ListObjects_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_ListObjects_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListObjects Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_ListObjects_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListObjects Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_ListObjects_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this ListObjects execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this ListObjects execution.
     *
     * @return string (json) The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Executes the specified SOQL query.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_QueryId extends Temboo_Choreography
{
    /**
     * Executes the specified SOQL query.
     *
     * @param Temboo_Session $session The session that owns this QueryId Choreo.
     * @return Salesforce_Queries_QueryId New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Queries/QueryId/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this QueryId Choreo.
     *
     * @param Salesforce_Queries_QueryId_Inputs|array $inputs (optional) Inputs as Salesforce_Queries_QueryId_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Queries_QueryId_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Queries_QueryId_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this QueryId Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Queries_QueryId_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Queries_QueryId_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the QueryId Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_QueryId_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the QueryId Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Queries_QueryId_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this QueryId input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Queries_QueryId_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Queries_QueryId_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this QueryId Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Queries_QueryId_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this QueryId Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_QueryId_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this QueryId Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_QueryId_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this QueryId Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Queries_QueryId_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the QueryID input for this QueryId Choreo.
     *
     * @param string $value (required, string) The identifier found within the NextRecordsURL field.
     * @return Salesforce_Queries_QueryId_Inputs For method chaining.
     */
    public function setQueryID($value)
    {
        return $this->set('QueryID', $value);
    }

    /**
     * Set the value for the RefreshToken input for this QueryId Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_QueryId_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SOQL input for this QueryId Choreo.
     *
     * @param string $value (required, string) The SOQL statement used to retrieve the set of records matching a specific criteria (e.g. select FirstName, LastName from Lead limit 1).
     * @return Salesforce_Queries_QueryId_Inputs For method chaining.
     */
    public function setSOQL($value)
    {
        return $this->set('SOQL', $value);
    }
}


/**
 * Execution object for the QueryId Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_QueryId_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the QueryId Choreo.
     *
     * @param Temboo_Session $session The session that owns this QueryId execution.
     * @param Salesforce_Queries_QueryId $choreo The choreography object for this execution.
     * @param Salesforce_Queries_QueryId_Inputs|array $inputs (optional) Inputs as Salesforce_Queries_QueryId_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Queries_QueryId_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Queries_QueryId $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this QueryId execution.
     *
     * @return Salesforce_Queries_QueryId_Results New results object.
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
     * Wraps results in appropriate results class for this QueryId execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Queries_QueryId_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Queries_QueryId_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the QueryId Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_QueryId_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the QueryId Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Queries_QueryId_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this QueryId execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this QueryId execution.
     *
     * @return string (json) The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Lists summary information about each Salesforce version currently available, including the version, label, and a link to each version's root.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Versions_Versions extends Temboo_Choreography
{
    /**
     * Lists summary information about each Salesforce version currently available, including the version, label, and a link to each version's root.
     *
     * @param Temboo_Session $session The session that owns this Versions Choreo.
     * @return Salesforce_Versions_Versions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Versions/Versions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Versions Choreo.
     *
     * @param Salesforce_Versions_Versions_Inputs|array $inputs (optional) Inputs as Salesforce_Versions_Versions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Versions_Versions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Versions_Versions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Versions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Versions_Versions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Versions_Versions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Versions Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Versions_Versions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Versions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Versions_Versions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Versions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Versions_Versions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Versions_Versions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the InstanceName input for this Versions Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Versions_Versions_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Versions Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Salesforce_Versions_Versions_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Versions Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Versions_Versions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Versions Choreo.
     *
     * @param Temboo_Session $session The session that owns this Versions execution.
     * @param Salesforce_Versions_Versions $choreo The choreography object for this execution.
     * @param Salesforce_Versions_Versions_Inputs|array $inputs (optional) Inputs as Salesforce_Versions_Versions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Versions_Versions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Versions_Versions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Versions execution.
     *
     * @return Salesforce_Versions_Versions_Results New results object.
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
     * Wraps results in appropriate results class for this Versions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Versions_Versions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Versions_Versions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Versions Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Versions_Versions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Versions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Versions_Versions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Versions execution.
     *
     * @return string The response from Google. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Executes the specified SOQL query.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_Query extends Temboo_Choreography
{
    /**
     * Executes the specified SOQL query.
     *
     * @param Temboo_Session $session The session that owns this Query Choreo.
     * @return Salesforce_Queries_Query New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Queries/Query/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Query Choreo.
     *
     * @param Salesforce_Queries_Query_Inputs|array $inputs (optional) Inputs as Salesforce_Queries_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Queries_Query_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Queries_Query_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Queries_Query_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Queries_Query_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_Query_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Query Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Queries_Query_Inputs New instance.
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
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this Query Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this Query Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this Query Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Salesforce. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the InstanceName input for this Query Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this Query Choreo.
     *
     * @param string $value (conditional, string) An OAuth refresh token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the SOQL input for this Query Choreo.
     *
     * @param string $value (required, string) The SOQL statement used to retrieve the set of records matching a specific criteria (e.g. select FirstName, LastName from Lead limit 1).
     * @return Salesforce_Queries_Query_Inputs For method chaining.
     */
    public function setSOQL($value)
    {
        return $this->set('SOQL', $value);
    }
}


/**
 * Execution object for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_Query_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Query Choreo.
     *
     * @param Temboo_Session $session The session that owns this Query execution.
     * @param Salesforce_Queries_Query $choreo The choreography object for this execution.
     * @param Salesforce_Queries_Query_Inputs|array $inputs (optional) Inputs as Salesforce_Queries_Query_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Queries_Query_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Queries_Query $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Query execution.
     *
     * @return Salesforce_Queries_Query_Results New results object.
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
     * @return Salesforce_Queries_Query_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Queries_Query_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Query Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Queries_Query_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Query Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Queries_Query_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this Query execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "NextRecordsURL" output from this Query execution.
     *
     * @return string (string) URL for the next batch of records
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNextRecordsURL()
    {
        return $this->get('NextRecordsURL');
    }
    /**
     * Retrieve the value for the "Response" output from this Query execution.
     *
     * @return string (json) The response from Salesforce.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Get a list of files
	*/

	public function getFileList() {
		return new Google_Drive_FileList_output(json_decode($this->get('Response'), true));
	}
}

/**
 * Creates a new Salesforce Object such as an Account, Contact, or Lead.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_UpdateObject extends Temboo_Choreography
{
    /**
     * Creates a new Salesforce Object such as an Account, Contact, or Lead.
     *
     * @param Temboo_Session $session The session that owns this UpdateObject Choreo.
     * @return Salesforce_Objects_UpdateObject New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Salesforce/Objects/UpdateObject/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateObject Choreo.
     *
     * @param Salesforce_Objects_UpdateObject_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_UpdateObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_UpdateObject_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Salesforce_Objects_UpdateObject_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_UpdateObject_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Salesforce_Objects_UpdateObject_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_UpdateObject_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateObject Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Salesforce_Objects_UpdateObject_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateObject input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the SObject input for this UpdateObject Choreo.
     *
     * @param string $value (required, json) A JSON string containing the SObject properties you wish to set.
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setSObject($value)
    {
        return $this->set('SObject', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateObject Choreo.
     *
     * @param string $value (optional, string) A valid access token retrieved during the OAuth process. This is required unless you provide the ClientID, ClientSecret, and RefreshToken to generate a new access token.
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this UpdateObject Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Google. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this UpdateObject Choreo.
     *
     * @param string $value (conditional, string) The Client Secret provided by Google. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the ID input for this UpdateObject Choreo.
     *
     * @param string $value (required, string) The id of the object to be updated
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the InstanceName input for this UpdateObject Choreo.
     *
     * @param string $value (required, string) The server url prefix that indicates which instance your Salesforce account is on (e.g. na1, na2, na3, etc).
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setInstanceName($value)
    {
        return $this->set('InstanceName', $value);
    }

    /**
     * Set the value for the RefreshToken input for this UpdateObject Choreo.
     *
     * @param string $value (conditional, string) An OAuth Refresh Token used to generate a new access token when the original token is expired. Required unless providing a valid AccessToken.
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setRefreshToken($value)
    {
        return $this->set('RefreshToken', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateObject Choreo.
     *
     * @param string $value (optional, string) The format that response should be in. Can be set to xml or json. Defaults to json.
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SObjectName input for this UpdateObject Choreo.
     *
     * @param string $value (conditional, string) The name of the Salesforce object type being created (e.g. Account, Contact, Lead, etc).
     * @return Salesforce_Objects_UpdateObject_Inputs For method chaining.
     */
    public function setSObjectName($value)
    {
        return $this->set('SObjectName', $value);
    }
}


/**
 * Execution object for the UpdateObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_UpdateObject_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateObject Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateObject execution.
     * @param Salesforce_Objects_UpdateObject $choreo The choreography object for this execution.
     * @param Salesforce_Objects_UpdateObject_Inputs|array $inputs (optional) Inputs as Salesforce_Objects_UpdateObject_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Salesforce_Objects_UpdateObject_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Salesforce_Objects_UpdateObject $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateObject execution.
     *
     * @return Salesforce_Objects_UpdateObject_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateObject execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Salesforce_Objects_UpdateObject_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Salesforce_Objects_UpdateObject_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateObject Choreo.
 *
 * @package Temboo
 * @subpackage Salesforce
 */
class Salesforce_Objects_UpdateObject_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateObject Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Salesforce_Objects_UpdateObject_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "NewAccessToken" output from this UpdateObject execution.
     *
     * @return string (string) Contains a new AccessToken when the RefreshToken is provided.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNewAccessToken()
    {
        return $this->get('NewAccessToken');
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateObject execution.
     *
     * @return string The response from Google. Corresponds to the ResponseFormat input. Defaults to JSON.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
	/*
	Represents a Google Calendar Resource.
	*/

	public function getCalendar() {
		return new Google_Calendar_Calendar_output(json_decode($this->get('Response'), true));
	}
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


/*
 The attendees of the event.
  
*/

class Google_Calendar_Attendees_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The attendee's email address, if available. This field must be present when adding an attendee.
	*/

	public function getEmail() {
		return Temboo_Results::getSubItemByKey($this->base, "email");
	}

	/*
	The attendee's response status: "needsAction" - The attendee has not responded to the invitation, "declined" - The attendee has declined the invitation, "tentative" - The attendee has tentatively accepted the invitation, "accepted" - The attendee has accepted the invitation.
	*/

	public function getResponseStatus() {
		return Temboo_Results::getSubItemByKey($this->base, "responseStatus");
	}
}



/*
 Represents a Google Calendar
  
*/

class Google_Calendar_Calendar_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Identifier of the calendar.
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Description of the calendar.
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	Type of the resource ("calendar#calendar").
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	Geographic location of the calendar as free-form text
	*/

	public function getLocation() {
		return Temboo_Results::getSubItemByKey($this->base, "location");
	}

	/*
	Title of the calendar.
	*/

	public function getSummary() {
		return Temboo_Results::getSubItemByKey($this->base, "summary");
	}

	/*
	ETag of the resource.
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	The time zone of the calendar.
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}
}



/*
 Represents a Google Calendar List Entry
  
*/

class Google_Calendar_CalendarListEntry_output extends Google_Calendar_Calendar_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The default reminders that the authenticated user has for this calendar.
	*/

	public function getDefaultReminders() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "defaultReminders");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Calendar_DefaultReminders_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The effective access role that the authenticated user has on the calendar: "freeBusyReader" - Provides read access to free/busy information, "reader" - Provides read access to the calendar. Private events will appear to users with reader access, but event details will be hidden, "writer" - Provides read and write access to the calendar. Private events will appear to users with writer access, and event details will be visible, "owner" - Provides ownership of the calendar. This role has all of the permissions of the writer role with the additional ability to see and manipulate ACLs.
	*/

	public function getAccessRole() {
		return Temboo_Results::getSubItemByKey($this->base, "accessRole");
	}

	/*
	Whether the calendar content shows up in the calendar UI.
	*/

	public function getSelected() {
		return Temboo_Results::getSubItemByKey($this->base, "selected");
	}

	/*
	Type of the resource ("calendar#calendarListEntry").
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The main color of the calendar in the format '#0088aa'. This property supersedes the index-based colorId property
	*/

	public function getBackgroundColor() {
		return Temboo_Results::getSubItemByKey($this->base, "backgroundColor");
	}

	/*
	The foreground color of the calendar in the format '#ffffff'. This property supersedes the index-based colorId property.
	*/

	public function getForegroundColor() {
		return Temboo_Results::getSubItemByKey($this->base, "foregroundColor");
	}

	/*
	The color of the calendar. This is an ID referring to an entry in the "calendar" section of the colors definition (see the "colors" endpoint).
	*/

	public function getColorId() {
		return Temboo_Results::getSubItemByKey($this->base, "colorId");
	}
}



/*
 The creator of the event
  
*/

class Google_Calendar_Creator_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The creator's email address, if available.
	*/

	public function getEmail() {
		return Temboo_Results::getSubItemByKey($this->base, "email");
	}
}



/*
 Default reminders
  
*/

class Google_Calendar_DefaultReminders_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Number of minutes before the start of the event when the reminder should trigger.
	*/

	public function getMinutes() {
		return Temboo_Results::getSubItemByKey($this->base, "minutes");
	}

	/*
	The method used by this reminder: "email" - Reminders are sent via email, "sms" - Reminders are sent via SMS, "popup" - Reminders are sent via a UI popup.
	*/

	public function getMethod() {
		return Temboo_Results::getSubItemByKey($this->base, "method");
	}
}



/*
 The (exclusive) end time of the event. For a recurring event, this is the end time of the first instance.
  
*/

class Google_Calendar_End_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The time, as a combined date-time value (formatted according to RFC 3339). A time zone offset is required unless a time zone is explicitly specified in 'timeZone'.
	*/

	public function getDateTime() {
		return Temboo_Results::getSubItemByKey($this->base, "dateTime");
	}

	/*
	The name of the time zone in which the time is specified (e.g. "Europe/Zurich"). Optional. The default is the time zone of the calendar.
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}
}



/*
 A single event on a calendar containing information such as the title of event, start and end times, and attendees.
  
*/

class Google_Calendar_Event_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The (exclusive) end time of the event. For a recurring event, this is the end time of the first instance.
	*/

	public function getEnd() {
		return new Google_Calendar_End_output(Temboo_Results::getSubItemByKey($this->base, "end"));
	}

	/*
	Identifier of the event.
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Description of the event.
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	Last modification time of the event (as a RFC 3339 timestamp).
	*/

	public function getUpdated() {
		return Temboo_Results::getSubItemByKey($this->base, "updated");
	}

	/*
	Event ID in the iCalendar format.
	*/

	public function getICalUID() {
		return Temboo_Results::getSubItemByKey($this->base, "iCalUID");
	}

	/*
	Status of the event: "confirmed" - The event is confirmed. This is the default status, "tentative" - The event is tentatively confirmed, "cancelled" - The event is cancelled.
	*/

	public function getStatus() {
		return Temboo_Results::getSubItemByKey($this->base, "status");
	}

	/*
	The creator of the event.
	*/

	public function getCreator() {
		return new Google_Calendar_Creator_output(Temboo_Results::getSubItemByKey($this->base, "creator"));
	}

	/*
	The (inclusive) start time of the event. For a recurring event, this is the start time of the first instance.
	*/

	public function getStart() {
		return new Google_Calendar_Start_output(Temboo_Results::getSubItemByKey($this->base, "start"));
	}

	/*
	ETag of the resource.
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	Whether the organizer corresponds to the calendar on which this copy of the event appears
	*/

	public function getOrganizer() {
		return new Google_Calendar_Organizer_output(Temboo_Results::getSubItemByKey($this->base, "organizer"));
	}

	/*
	Geographic location of the event as free-form text.
	*/

	public function getLocation() {
		return Temboo_Results::getSubItemByKey($this->base, "location");
	}

	/*
	Sequence number as per iCalendar.
	*/

	public function getSequence() {
		return Temboo_Results::getSubItemByKey($this->base, "sequence");
	}

	/*
	List of RRULE, EXRULE, RDATE and EXDATE lines for a recurring event. This field is omitted for single events or instances of recurring events.
	*/

	public function getRecurrence() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "recurrence");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}

	/*
	Creation time of the event (as a RFC 3339 timestamp).
	*/

	public function getCreated() {
		return Temboo_Results::getSubItemByKey($this->base, "created");
	}

	/*
	An absolute link to this event in the Google Calendar Web UI.
	*/

	public function getHtmlLink() {
		return Temboo_Results::getSubItemByKey($this->base, "htmlLink");
	}

	/*
	The attendees of the event.
	*/

	public function getAttendees() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "attendees");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Calendar_Attendees_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	If the event doesn't use the default reminders, this lists the reminders specific to the event, or, if not set, indicates that no reminders are set for this event.
	*/

	public function getReminders() {
		return new Google_Calendar_Reminders_output(Temboo_Results::getSubItemByKey($this->base, "reminders"));
	}

	/*
	Title of the event.
	*/

	public function getSummary() {
		return Temboo_Results::getSubItemByKey($this->base, "summary");
	}

	/*
	Type of the resource ("calendar#event").
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}
}



/*
 A listing of Google Calendar Events

*/

class Google_Calendar_EventList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Description of the calendar.
	*/

	public function getDescription() {
		return Temboo_Results::getSubItemByKey($this->base, "description");
	}

	/*
	Type of the collection ("calendar#events").
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The time zone of the calendar.
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}

	/*
	The user's access role for this calendar: "none" - The user has no access, "freeBusyReader" - The user has read access to free/busy information, "reader" - The user has read access to the calendar. Private events will appear to users with reader access, but event details will be hidden, "writer" - The user has read and write access to the calendar. Private events will appear to users with writer access, and event details will be visible, "owner" - The user has ownership of the calendar. This role has all of the permissions of the writer role with the additional ability to see and manipulate ACLs.
	*/

	public function getAccessRole() {
		return Temboo_Results::getSubItemByKey($this->base, "accessRole");
	}

	/*
	ETag of the collection.
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	*/

	public function getDefaultReminders() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "defaultReminders");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Calendar_DefaultReminders_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Last modification time of the calendar (as a RFC 3339 timestamp)
	*/

	public function getUpdated() {
		return Temboo_Results::getSubItemByKey($this->base, "updated");
	}

	/*
	Title of the calendar
	*/

	public function getSummary() {
		return Temboo_Results::getSubItemByKey($this->base, "summary");
	}

	/*
	A list of Google Calendar Events.
	*/

	public function getEvents() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Calendar_Event_output($entry));
			}
		}
		return $resultArray;
	}
}



/*
 The organizer of the event. If the organizer is also an attendee, this is indicated with a separate entry in 'attendees' with the 'organizer' field set to True.
  
*/

class Google_Calendar_Organizer_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The organizer's email address, if available.
	*/

	public function getEmail() {
		return Temboo_Results::getSubItemByKey($this->base, "email");
	}

	/*
	The organizer's name, if available.
	*/

	public function getDisplayName() {
		return Temboo_Results::getSubItemByKey($this->base, "displayName");
	}

	/*
	Whether the organizer corresponds to the calendar on which this copy of the event appears.  The default is False.
	*/

	public function getSelf() {
		return Temboo_Results::getSubItemByKey($this->base, "self");
	}
}



/*
 f the event doesn't use the default reminders, this lists the reminders specific to the event, or, if not set, indicates that no reminders are set for this event.
    
*/

class Google_Calendar_Overrides_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Number of minutes before the start of the event when the reminder should trigger.
	*/

	public function getMinutes() {
		return Temboo_Results::getSubItemByKey($this->base, "minutes");
	}

	/*
	The method used by this reminder: "email" - Reminders are sent via email, "sms" - Reminders are sent via SMS, "popup" - Reminders are sent via a UI popup.
	*/

	public function getMethod() {
		return Temboo_Results::getSubItemByKey($this->base, "method");
	}
}



/*
 Information about the event's reminders for the authenticated user.
  
*/

class Google_Calendar_Reminders_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	If the event doesn't use the default reminders, this lists the reminders specific to the event, or, if not set, indicates that no reminders are set for this event.
	*/

	public function getOverrides() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "overrides");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Calendar_Overrides_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	Whether the default reminders of the calendar apply to the event.
	*/

	public function getUseDefault() {
		return Temboo_Results::getSubItemByKey($this->base, "useDefault");
	}
}



/*
 Represents a Google Calendar user property setting.
  
*/

class Google_Calendar_Setting_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Type of the resource ("calendar#setting").
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	Value of the user setting. The format of the value depends on the ID of the setting.
	*/

	public function getValue() {
		return Temboo_Results::getSubItemByKey($this->base, "value");
	}

	/*
	Type of the resource ("calendar#setting").
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	Name of the user setting.
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}
}



/*
 A listing of all Google Calendar Settings

*/

class Google_Calendar_SettingList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A list of all Google Calendar Settings.
	*/

	public function getSettings() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Calendar_Setting_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	ETag of the resource.
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}
}



/*
 The (inclusive) start time of the event. For a recurring event, this is the start time of the first instance.
  
*/

class Google_Calendar_Start_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The time, as a combined date-time value (formatted according to RFC 3339). A time zone offset is required unless a time zone is explicitly specified in 'timeZone'.
	*/

	public function getDateTime() {
		return Temboo_Results::getSubItemByKey($this->base, "dateTime");
	}

	/*
	The name of the time zone in which the time is specified (e.g. "Europe/Zurich"). Optional. The default is the time zone of the calendar.
	*/

	public function getTimeZone() {
		return Temboo_Results::getSubItemByKey($this->base, "timeZone");
	}
}



/*
 An object representing the user who wrote this comment

*/

class Google_Drive_Author_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A plain text displayable name for this user
	*/

	public function getDisplayName() {
		return Temboo_Results::getSubItemByKey($this->base, "displayName");
	}

	/*
	Whether this user is the same as the authenticated user of which the request was made on behalf
	*/

	public function getIsAuthenticatedUser() {
		return Temboo_Results::getSubItemByKey($this->base, "isAuthenticatedUser");
	}

	/*
	This is always drive#user
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	Get the user's profile picture
	*/

	public function getPicture() {
		return new Google_Drive_Picture_output(Temboo_Results::getSubItemByKey($this->base, "picture"));
	}
}



/*
 An object representing a change for a Google Drive resource

*/

class Google_Drive_Change_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Whether the file has been deleted
	*/

	public function getDeleted() {
		return Temboo_Results::getSubItemByKey($this->base, "deleted");
	}

	/*
	The ID of the file associated with this change
	*/

	public function getFileId() {
		return Temboo_Results::getSubItemByKey($this->base, "fileId");
	}

	/*
	The ID of the change
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	This is always drive#change
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link back to this change
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 A listing of changes in Google Drive

*/

class Google_Drive_ChangeList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	A Google Drive change resource
	*/

	public function getChanges() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Change_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	This is always drive#changeList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The current largest change ID
	*/

	public function getLargestChangeId() {
		return Temboo_Results::getSubItemByKey($this->base, "largestChangeId");
	}

	/*
	A link to the next page of changes
	*/

	public function getNextLink() {
		return Temboo_Results::getSubItemByKey($this->base, "nextLink");
	}

	/*
	The page token for the next page of changes
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 A specific child reference

*/

class Google_Drive_Child_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link to the child
	*/

	public function getChildLink() {
		return Temboo_Results::getSubItemByKey($this->base, "childLink");
	}

	/*
	The ID of the child
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	This is always drive#childReference
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link back to this reference
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
  A listing of child resources

*/

class Google_Drive_ChildList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	A Google Drive child resource
	*/

	public function getChildren() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Child_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	This is always drive#childList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link to the next page of children
	*/

	public function getNextLink() {
		return Temboo_Results::getSubItemByKey($this->base, "nextLink");
	}

	/*
	The page token for the next page of children
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 An object representing a comment on a file

*/

class Google_Drive_Comment_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get the user who wronte this comment
	*/

	public function getAuthor() {
		return new Google_Drive_Author_output(Temboo_Results::getSubItemByKey($this->base, "author"));
	}

	/*
	The ID of the comment
	*/

	public function getCommentId() {
		return Temboo_Results::getSubItemByKey($this->base, "commentId");
	}

	/*
	The plain text content used to create this comment
	*/

	public function getContent() {
		return Temboo_Results::getSubItemByKey($this->base, "content");
	}

	/*
	The date when this comment was first created (formatted RFC 3339 timestamp)
	*/

	public function getCreatedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "createdDate");
	}

	/*
	Whether this comment has been deleted
	*/

	public function getDeleted() {
		return Temboo_Results::getSubItemByKey($this->base, "deleted");
	}

	/*
	The file which this comment is addressing
	*/

	public function getFileId() {
		return Temboo_Results::getSubItemByKey($this->base, "fileId");
	}

	/*
	The title of the file which this comment is addressing
	*/

	public function getFileTitle() {
		return Temboo_Results::getSubItemByKey($this->base, "fileTitle");
	}

	/*
	HTML formatted content for this comment
	*/

	public function getHtmlContent() {
		return Temboo_Results::getSubItemByKey($this->base, "htmlContent");
	}

	/*
	This is always drive#comment
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The date when this comment or any of its replies were last modified (formatted RFC 3339 timestamp)
	*/

	public function getModifiedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedDate");
	}

	/*
	Get replies for this comment
	*/

	public function getReplies() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "replies");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Reply_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The status of this comment (open or resolved)
	*/

	public function getStatus() {
		return Temboo_Results::getSubItemByKey($this->base, "status");
	}
}



/*
 A list of comments for a file

*/

class Google_Drive_CommentList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A Google Drive comment resource
	*/

	public function getComments() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Comment_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	This is always drive#commentList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The page token for the next page of comments
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}
}



/*
 Links for exporting Google Docs to specific formats

*/

class Google_Drive_ExportLinks_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link to the file in pdf format
	*/

	public function getPdfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/pdf");
	}

	/*
	A link to the file in rtf format
	*/

	public function getRtfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/rtf");
	}

	/*
	A link to the file in odt format
	*/

	public function getOdtLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/vnd.oasis.opendocument.text");
	}

	/*
	A link to the file in xlsx format
	*/

	public function getXlsxLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	}

	/*
	A link to the file in docx format
	*/

	public function getDocxLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
	}

	/*
	A link to the file in ods format
	*/

	public function getOdsLink() {
		return Temboo_Results::getSubItemByKey($this->base, "application/x-vnd.oasis.opendocument.spreadsheet");
	}

	/*
	A link to the file in html format
	*/

	public function getHtmlLink() {
		return Temboo_Results::getSubItemByKey($this->base, "text/html");
	}

	/*
	A link to the file in txt format
	*/

	public function getTxtLink() {
		return Temboo_Results::getSubItemByKey($this->base, "text/plain");
	}
}



/*
 A complete Google Drive file resource

*/

class Google_Drive_File_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A link for opening the file in using a relevant Google editor or viewer
	*/

	public function getAlternateLink() {
		return Temboo_Results::getSubItemByKey($this->base, "alternateLink");
	}

	/*
	Create time for this file (formatted ISO8601 timestamp)
	*/

	public function getCreatedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "createdDate");
	}

	/*
	Whether the file can be edited by the current user
	*/

	public function getEditable() {
		return Temboo_Results::getSubItemByKey($this->base, "editable");
	}

	/*
	A link for embedding the file
	*/

	public function getEmbedLink() {
		return Temboo_Results::getSubItemByKey($this->base, "embedLink");
	}

	/*
	ETag of the file
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	A Link for exporting Google Docs to specific formats
	*/

	public function getExportLinks() {
		return new Google_Drive_ExportLinks_output(Temboo_Results::getSubItemByKey($this->base, "exportLinks"));
	}

	/*
	A link to the file's icon
	*/

	public function getIconLink() {
		return Temboo_Results::getSubItemByKey($this->base, "iconLink");
	}

	/*
	The ID of the file
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The type of file (this is always drive#file)
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	public function getLabels() {
		return new Google_Drive_Labels_output(Temboo_Results::getSubItemByKey($this->base, "labels"));
	}

	/*
	Name of the last user to modify this file. This will only be populated if a user has edited this file
	*/

	public function getLastModifyingUserName() {
		return Temboo_Results::getSubItemByKey($this->base, "lastModifyingUserName");
	}

	/*
	Last time this file was viewed by the user (formatted RFC 3339 timestamp)
	*/

	public function getLastViewedByMeDate() {
		return Temboo_Results::getSubItemByKey($this->base, "lastViewedByMeDate");
	}

	/*
	The mimetype of the file
	*/

	public function getMimeType() {
		return Temboo_Results::getSubItemByKey($this->base, "mimeType");
	}

	/*
	Last time this file was modified by the user (formatted RFC 3339 timestamp)
	*/

	public function getModifiedByMeDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedByMeDate");
	}

	/*
	Last time this file was modified by anyone (formatted RFC 3339 timestamp)
	*/

	public function getModifiedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedDate");
	}

	/*
	Name(s) of the owner(s) of this file
	*/

	public function getOwnerNames() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "ownerNames");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, $entry);
			}
		}
		return $resultArray;
	}

	/*
	A parent folder which contain this file
	*/

	public function getParents() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "parents");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Parent_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The number of quota bytes used by this file
	*/

	public function getQuotaBytesUsed() {
		return Temboo_Results::getSubItemByKey($this->base, "quotaBytesUsed");
	}

	/*
	A link back to this file
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	Whether or not this file is shared
	*/

	public function getShared() {
		return Temboo_Results::getSubItemByKey($this->base, "shared");
	}

	/*
	Time at which this file was shared with the user (formatted RFC 3339 timestamp)
	*/

	public function getSharedWithMeDate() {
		return Temboo_Results::getSubItemByKey($this->base, "sharedWithMeDate");
	}

	/*
	A link to the file's thumbnail
	*/

	public function getThumbnailLink() {
		return Temboo_Results::getSubItemByKey($this->base, "thumbnailLink");
	}

	/*
	The title of the this file
	*/

	public function getTitle() {
		return Temboo_Results::getSubItemByKey($this->base, "title");
	}

	/*
	The permissions for the authenticated user on this file.
	*/

	public function getUserPermission() {
		return new Google_Drive_UserPermission_output(Temboo_Results::getSubItemByKey($this->base, "userPermission"));
	}

	/*
	Whether writers can share the document with other users
	*/

	public function getWritersCanShare() {
		return Temboo_Results::getSubItemByKey($this->base, "writersCanShare");
	}
}



/*
 A listing of files in Google Drive

*/

class Google_Drive_FileList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	A Google Drive file resource
	*/

	public function getFiles() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_File_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The type of resource (this is always rive#fileList)
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link to the next page of files
	*/

	public function getNextLink() {
		return Temboo_Results::getSubItemByKey($this->base, "nextLink");
	}

	/*
	The page token for the next page of files
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 A label for the file
  
*/

class Google_Drive_Labels_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Whether or not the file is hidden
	*/

	public function getHidden() {
		return Temboo_Results::getSubItemByKey($this->base, "hidden");
	}

	/*
	Whether or not the file is restricted
	*/

	public function getRestricted() {
		return Temboo_Results::getSubItemByKey($this->base, "restricted");
	}

	/*
	Whether or not the file is starred
	*/

	public function getStarred() {
		return Temboo_Results::getSubItemByKey($this->base, "starred");
	}

	/*
	Whether or not the file is trashed
	*/

	public function getTrashed() {
		return Temboo_Results::getSubItemByKey($this->base, "trashed");
	}

	/*
	Whether or not the file is viewed
	*/

	public function getViewed() {
		return Temboo_Results::getSubItemByKey($this->base, "viewed");
	}
}



/*
 An object containing a parent resource

*/

class Google_Drive_Parent_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The id of the folder
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	Whether or not this folder is the root
	*/

	public function getIsRoot() {
		return Temboo_Results::getSubItemByKey($this->base, "isRoot");
	}

	/*
	The type of resource
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The link to the parent
	*/

	public function getParentLink() {
		return Temboo_Results::getSubItemByKey($this->base, "parentLink");
	}

	/*
	A link back to this reference
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 A list of parent resources

*/

class Google_Drive_ParentList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	A Google Drive parent resource
	*/

	public function getParents() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Parent_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	The type of resource (this is always drive#parentList)
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 An object representing a permission resource

*/

class Google_Drive_Permission_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the permission
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	The ID of the permission
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	This is always drive#permission
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The name for this permission
	*/

	public function getName() {
		return Temboo_Results::getSubItemByKey($this->base, "name");
	}

	/*
	The primary role for this user. Allowed values are: owner, reader, and writer
	*/

	public function getRole() {
		return Temboo_Results::getSubItemByKey($this->base, "role");
	}

	/*
	A link back to this permission
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	The account type. Allowed values are: user, group, domain, and anyone
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}



/*
 A list of permission for a file

*/

class Google_Drive_PermissionList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	A Google Drive permission resource
	*/

	public function getPermissions() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Permission_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	This is always drive#permissionList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 An object representing the user's profile picture
  
*/

class Google_Drive_Picture_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	A URL that points to a profile picture of this user
	*/

	public function getUrl() {
		return Temboo_Results::getSubItemByKey($this->base, "url");
	}
}



/*
 An object representing a reply to a comment

*/

class Google_Drive_Reply_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get the user who wronte this comment
	*/

	public function getAuthor() {
		return new Google_Drive_Author_output(Temboo_Results::getSubItemByKey($this->base, "author"));
	}

	/*
	The plain text content used to create this reply
	*/

	public function getContent() {
		return Temboo_Results::getSubItemByKey($this->base, "content");
	}

	/*
	The date when this reply was first created (formatted RFC 3339 timestamp)
	*/

	public function getCreatedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "createdDate");
	}

	/*
	Whether this reply has been deleted
	*/

	public function getDeleted() {
		return Temboo_Results::getSubItemByKey($this->base, "deleted");
	}

	/*
	HTML formatted content for this reply
	*/

	public function getHtmlContent() {
		return Temboo_Results::getSubItemByKey($this->base, "htmlContent");
	}

	/*
	This is always drive#commentReply
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The date when this reply was last modified (formatted RFC 3339 timestamp)
	*/

	public function getModifiedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedDate");
	}

	/*
	The ID of the reply
	*/

	public function getReplyId() {
		return Temboo_Results::getSubItemByKey($this->base, "replyId");
	}
}



/*
 A list of replies to a specified comment on a file

*/

class Google_Drive_ReplyList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	Get a reply to a Google Drive comment
	*/

	public function getReplies() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Reply_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	This is always drive#commentReplyList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link to the next page of replies
	*/

	public function getNextLink() {
		return Temboo_Results::getSubItemByKey($this->base, "nextLink");
	}

	/*
	The page token for the next page of replies
	*/

	public function getNextPageToken() {
		return Temboo_Results::getSubItemByKey($this->base, "nextPageToken");
	}
}



/*
 An object representing a revision of a file

*/

class Google_Drive_Revision_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the revision
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	Get links for exporting Google Docs to specific formats
	*/

	public function getExportLinks() {
		return new Google_Drive_ExportLinks_output(Temboo_Results::getSubItemByKey($this->base, "exportLinks"));
	}

	/*
	The ID of the revision
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	This is always drive#revision
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	Name of the last user to modify this revision
	*/

	public function getLastModifyingUserName() {
		return Temboo_Results::getSubItemByKey($this->base, "lastModifyingUserName");
	}

	/*
	The MIME type of the revision
	*/

	public function getMimeType() {
		return Temboo_Results::getSubItemByKey($this->base, "mimeType");
	}

	/*
	Last time this revision was modified (formatted RFC 3339 timestamp)
	*/

	public function getModifiedDate() {
		return Temboo_Results::getSubItemByKey($this->base, "modifiedDate");
	}

	/*
	Whether this revision is published
	*/

	public function getPublished() {
		return Temboo_Results::getSubItemByKey($this->base, "published");
	}

	/*
	A link back to this revision
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 A list of a file's revisions

*/

class Google_Drive_RevisionList_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the list
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	Get a revision for a file
	*/

	public function getRevisions() {
		$listEntries = Temboo_Results::getSubItemByKey($this->base, "items");
		$resultArray = array();
		if(!is_null($listEntries)) {
			foreach ($listEntries as $entry) {
		    	array_push($resultArray, new Google_Drive_Revision_output($entry));
			}
		}
		return $resultArray;
	}

	/*
	This is always drive#revisionList
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	A link back to this list
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}
}



/*
 An object containing a permission resource

*/

class Google_Drive_UserPermission_output 
{
	public function __construct($base) {
		$this->base = $base;
	}
	
	protected function getBase() {
		return $this->base;
	}
	/*
	The ETag of the permission
	*/

	public function getEtag() {
		return Temboo_Results::getSubItemByKey($this->base, "etag");
	}

	/*
	The ID of the permission
	*/

	public function getId() {
		return Temboo_Results::getSubItemByKey($this->base, "id");
	}

	/*
	The type of resource (this is always drive#permission)
	*/

	public function getKind() {
		return Temboo_Results::getSubItemByKey($this->base, "kind");
	}

	/*
	The primary role for this user. Allowed values are: owner, reader, writer
	*/

	public function getRole() {
		return Temboo_Results::getSubItemByKey($this->base, "role");
	}

	/*
	A link back to this permission
	*/

	public function getSelfLink() {
		return Temboo_Results::getSubItemByKey($this->base, "selfLink");
	}

	/*
	The account type. Allowed values are: user, group, domain, anyone
	*/

	public function getType() {
		return Temboo_Results::getSubItemByKey($this->base, "type");
	}
}




?>
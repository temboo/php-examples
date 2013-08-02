<?php

/**
 * Temboo PHP SDK Netflix classes
 *
 * Execute Choreographies from the Temboo Netflix bundle.
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
 * @subpackage Netflix
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Netflix_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Netflix_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Netflix_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Netflix_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Netflix_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Netflix_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Netflix_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Netflix_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant access to your application.
     * @return Netflix_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }

    /**
     * Set the value for the SharedSecret input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Netflix_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Netflix_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Netflix_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Netflix_OAuth_InitializeOAuth_Results New results object.
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
     * @return Netflix_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_OAuth_InitializeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AuthorizationURL" output from this InitializeOAuth execution.
     *
     * @return string (string) The authorization URL that the user needs to go to in order to grant access to your application.
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
    /**
     * Retrieve the value for the "OAuthTokenSecret" output from this InitializeOAuth execution.
     *
     * @return string (string) The temporary OAuth Token Secret that can be exchanged for permanent tokens using the FinalizeOAuth Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getOAuthTokenSecret()
    {
        return $this->get('OAuthTokenSecret');
    }
}

/**
 * Completes the OAuth process by retrieving a Netflix access token, token secret, and user ID for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Netflix access token, token secret, and user ID for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Netflix_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Netflix_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Netflix_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the callback data after the user authorizes.
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the OAuthTokenSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The OAuth Token Secret retrieved during the OAuth process. This is returned by the InitializeOAuth Choreo.
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setOAuthTokenSecret($value)
    {
        return $this->set('OAuthTokenSecret', $value);
    }

    /**
     * Set the value for the SharedSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Netflix_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Netflix
 */
class Netflix_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Netflix_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Netflix_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Netflix_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Netflix_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Netflix_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_OAuth_FinalizeOAuth_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "AccessTokenSecret" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token Secret retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessTokenSecret()
    {
        return $this->get('AccessTokenSecret');
    }
    /**
     * Retrieve the value for the "AccessToken" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Access Token retrieved during the OAuth process.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getAccessToken()
    {
        return $this->get('AccessToken');
    }
    /**
     * Retrieve the value for the "UserID" output from this FinalizeOAuth execution.
     *
     * @return string (string) The Netflix Subscriber ID (encrypted) associated with the access token that is being retrieved.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getUserID()
    {
        return $this->get('UserID');
    }
}

/**
 * Retrieves the contents of a subscriber's disc queue.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetDiscQueue extends Temboo_Choreography
{
    /**
     * Retrieves the contents of a subscriber's disc queue.
     *
     * @param Temboo_Session $session The session that owns this GetDiscQueue Choreo.
     * @return Netflix_GetDiscQueue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetDiscQueue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDiscQueue Choreo.
     *
     * @param Netflix_GetDiscQueue_Inputs|array $inputs (optional) Inputs as Netflix_GetDiscQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetDiscQueue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetDiscQueue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDiscQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetDiscQueue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetDiscQueue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDiscQueue Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetDiscQueue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDiscQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetDiscQueue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDiscQueue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetDiscQueue Choreo.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetDiscQueue Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetDiscQueue Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetDiscQueue Choreo.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetDiscQueue Choreo.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the Sort input for this GetDiscQueue Choreo.
     *
     * @param string $value (optional, string) Use this to specify the sort order for the queue entries. Sort order may be by queue_sequence, date_added, or alphabetical. The default sort order, if you do not specify one, is queue_sequence.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetDiscQueue Choreo.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UpdatedMin input for this GetDiscQueue Choreo.
     *
     * @param string $value (optional, date) If set, the response will include only those items with updated timestamps greater than or equal to the timestamp provided. Specify this value either in Unix time format (seconds since epoch).
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setUpdatedMin($value)
    {
        return $this->set('UpdatedMin', $value);
    }

    /**
     * Set the value for the UserID input for this GetDiscQueue Choreo.
     *
     * @param string $value (required, string) The ID associated with the user whose queue information you want to retrieve.
     * @return Netflix_GetDiscQueue_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetDiscQueue Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetDiscQueue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDiscQueue Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDiscQueue execution.
     * @param Netflix_GetDiscQueue $choreo The choreography object for this execution.
     * @param Netflix_GetDiscQueue_Inputs|array $inputs (optional) Inputs as Netflix_GetDiscQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetDiscQueue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetDiscQueue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDiscQueue execution.
     *
     * @return Netflix_GetDiscQueue_Results New results object.
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
     * Wraps results in appropriate results class for this GetDiscQueue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetDiscQueue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetDiscQueue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDiscQueue Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetDiscQueue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDiscQueue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetDiscQueue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDiscQueue execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of a subscriber's queues.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetQueues extends Temboo_Choreography
{
    /**
     * Retrieves a list of a subscriber's queues.
     *
     * @param Temboo_Session $session The session that owns this GetQueues Choreo.
     * @return Netflix_GetQueues New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetQueues/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetQueues Choreo.
     *
     * @param Netflix_GetQueues_Inputs|array $inputs (optional) Inputs as Netflix_GetQueues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetQueues_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetQueues_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetQueues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetQueues_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetQueues_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetQueues Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetQueues_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetQueues Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetQueues_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetQueues input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetQueues Choreo.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetQueues Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetQueues Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetQueues Choreo.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetQueues Choreo.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the Sort input for this GetQueues Choreo.
     *
     * @param string $value (optional, string) Use this to specify the sort order for the queue entries. Sort order may be by queue_sequence, date_added, or alphabetical. The default sort order, if you do not specify one, is queue_sequence.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetQueues Choreo.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UpdatedMin input for this GetQueues Choreo.
     *
     * @param string $value (optional, date) If set, the response will include only those items with updated timestamps greater than or equal to the timestamp provided. Specify this value either in Unix time format (seconds since epoch).
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setUpdatedMin($value)
    {
        return $this->set('UpdatedMin', $value);
    }

    /**
     * Set the value for the UserID input for this GetQueues Choreo.
     *
     * @param string $value (required, string) The ID associated with the user whose queue information you want to retrieve.
     * @return Netflix_GetQueues_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetQueues Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetQueues_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetQueues Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetQueues execution.
     * @param Netflix_GetQueues $choreo The choreography object for this execution.
     * @param Netflix_GetQueues_Inputs|array $inputs (optional) Inputs as Netflix_GetQueues_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetQueues_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetQueues $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetQueues execution.
     *
     * @return Netflix_GetQueues_Results New results object.
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
     * Wraps results in appropriate results class for this GetQueues execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetQueues_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetQueues_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetQueues Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetQueues_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetQueues Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetQueues_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetQueues execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for a title in the instant-watch title catalog.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_SearchTitleCatalog extends Temboo_Choreography
{
    /**
     * Searches for a title in the instant-watch title catalog.
     *
     * @param Temboo_Session $session The session that owns this SearchTitleCatalog Choreo.
     * @return Netflix_SearchTitleCatalog New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/SearchTitleCatalog/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchTitleCatalog Choreo.
     *
     * @param Netflix_SearchTitleCatalog_Inputs|array $inputs (optional) Inputs as Netflix_SearchTitleCatalog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_SearchTitleCatalog_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_SearchTitleCatalog_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchTitleCatalog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_SearchTitleCatalog_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_SearchTitleCatalog_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchTitleCatalog Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_SearchTitleCatalog_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchTitleCatalog Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_SearchTitleCatalog_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchTitleCatalog input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchTitleCatalog Choreo.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this SearchTitleCatalog Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this SearchTitleCatalog Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this SearchTitleCatalog Choreo.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this SearchTitleCatalog Choreo.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the StartIndex input for this SearchTitleCatalog Choreo.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the Term input for this SearchTitleCatalog Choreo.
     *
     * @param string $value (required, string) Enter a word or phrase to search for in the instant-watch catalog. The Netflix API searches for matching titles and synopses in the catalog.
     * @return Netflix_SearchTitleCatalog_Inputs For method chaining.
     */
    public function setTerm($value)
    {
        return $this->set('Term', $value);
    }
}


/**
 * Execution object for the SearchTitleCatalog Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_SearchTitleCatalog_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchTitleCatalog Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchTitleCatalog execution.
     * @param Netflix_SearchTitleCatalog $choreo The choreography object for this execution.
     * @param Netflix_SearchTitleCatalog_Inputs|array $inputs (optional) Inputs as Netflix_SearchTitleCatalog_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_SearchTitleCatalog_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_SearchTitleCatalog $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchTitleCatalog execution.
     *
     * @return Netflix_SearchTitleCatalog_Results New results object.
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
     * Wraps results in appropriate results class for this SearchTitleCatalog execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_SearchTitleCatalog_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_SearchTitleCatalog_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchTitleCatalog Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_SearchTitleCatalog_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchTitleCatalog Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_SearchTitleCatalog_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchTitleCatalog execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the contents of a subscriber's instant-watch queue.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetInstantQueue extends Temboo_Choreography
{
    /**
     * Retrieves the contents of a subscriber's instant-watch queue.
     *
     * @param Temboo_Session $session The session that owns this GetInstantQueue Choreo.
     * @return Netflix_GetInstantQueue New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetInstantQueue/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetInstantQueue Choreo.
     *
     * @param Netflix_GetInstantQueue_Inputs|array $inputs (optional) Inputs as Netflix_GetInstantQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetInstantQueue_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetInstantQueue_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetInstantQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetInstantQueue_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetInstantQueue_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetInstantQueue Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetInstantQueue_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetInstantQueue Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetInstantQueue_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetInstantQueue input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetInstantQueue Choreo.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetInstantQueue Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetInstantQueue Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetInstantQueue Choreo.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetInstantQueue Choreo.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the Sort input for this GetInstantQueue Choreo.
     *
     * @param string $value (optional, string) Use this to specify the sort order for the queue entries. Sort order may be by queue_sequence, date_added, or alphabetical. The default sort order, if you do not specify one, is queue_sequence.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setSort($value)
    {
        return $this->set('Sort', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetInstantQueue Choreo.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UpdatedMin input for this GetInstantQueue Choreo.
     *
     * @param string $value (optional, date) If set, the response will include only those items with updated timestamps greater than or equal to the timestamp provided. Specify this value either in Unix time format (seconds since epoch).
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setUpdatedMin($value)
    {
        return $this->set('UpdatedMin', $value);
    }

    /**
     * Set the value for the UserID input for this GetInstantQueue Choreo.
     *
     * @param string $value (required, string) The ID associated with the user whose queue information you want to retrieve.
     * @return Netflix_GetInstantQueue_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetInstantQueue Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetInstantQueue_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetInstantQueue Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetInstantQueue execution.
     * @param Netflix_GetInstantQueue $choreo The choreography object for this execution.
     * @param Netflix_GetInstantQueue_Inputs|array $inputs (optional) Inputs as Netflix_GetInstantQueue_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetInstantQueue_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetInstantQueue $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetInstantQueue execution.
     *
     * @return Netflix_GetInstantQueue_Results New results object.
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
     * Wraps results in appropriate results class for this GetInstantQueue execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetInstantQueue_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetInstantQueue_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetInstantQueue Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetInstantQueue_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetInstantQueue Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetInstantQueue_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetInstantQueue execution.
     *
     * @return string (xml) The response from Netflix.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of catalog title recommendations for a subscriber.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecommendations extends Temboo_Choreography
{
    /**
     * Retrieves a list of catalog title recommendations for a subscriber.
     *
     * @param Temboo_Session $session The session that owns this GetRecommendations Choreo.
     * @return Netflix_GetRecommendations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Netflix/GetRecommendations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecommendations Choreo.
     *
     * @param Netflix_GetRecommendations_Inputs|array $inputs (optional) Inputs as Netflix_GetRecommendations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetRecommendations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Netflix_GetRecommendations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecommendations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetRecommendations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Netflix_GetRecommendations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecommendations Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecommendations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecommendations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Netflix_GetRecommendations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecommendations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRecommendations Choreo.
     *
     * @param string $value (required, string) The API Key provided by Netflix (AKA the OAuth Consumer Key).
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccessTokenSecret input for this GetRecommendations Choreo.
     *
     * @param string $value (required, string) The Access Token Secret retrieved during the OAuth process.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setAccessTokenSecret($value)
    {
        return $this->set('AccessTokenSecret', $value);
    }

    /**
     * Set the value for the AccessToken input for this GetRecommendations Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved during the OAuth process.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MaxResults input for this GetRecommendations Choreo.
     *
     * @param int $value (optional, integer) Set this to the maximum number of results to return. This number cannot be greater than 500. If you do not specify max_results, the default value is 25
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setMaxResults($value)
    {
        return $this->set('MaxResults', $value);
    }

    /**
     * Set the value for the SharedSecret input for this GetRecommendations Choreo.
     *
     * @param string $value (required, string) The Shared Secret provided by Netflix (AKA the OAuth Consumer Secret).
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setSharedSecret($value)
    {
        return $this->set('SharedSecret', $value);
    }

    /**
     * Set the value for the StartIndex input for this GetRecommendations Choreo.
     *
     * @param int $value (optional, integer) The offset number of the results from the query.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setStartIndex($value)
    {
        return $this->set('StartIndex', $value);
    }

    /**
     * Set the value for the UserID input for this GetRecommendations Choreo.
     *
     * @param string $value (required, string) The ID associated with the user whose recommendations you want to retrieve.
     * @return Netflix_GetRecommendations_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetRecommendations Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecommendations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecommendations Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecommendations execution.
     * @param Netflix_GetRecommendations $choreo The choreography object for this execution.
     * @param Netflix_GetRecommendations_Inputs|array $inputs (optional) Inputs as Netflix_GetRecommendations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Netflix_GetRecommendations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Netflix_GetRecommendations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecommendations execution.
     *
     * @return Netflix_GetRecommendations_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecommendations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Netflix_GetRecommendations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Netflix_GetRecommendations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecommendations Choreo.
 *
 * @package Temboo
 * @subpackage Netflix
 */
class Netflix_GetRecommendations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecommendations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Netflix_GetRecommendations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecommendations execution.
     *
     * @return string (xml) The response from Netflix.
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
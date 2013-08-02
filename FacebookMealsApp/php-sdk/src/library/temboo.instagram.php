<?php

/**
 * Temboo PHP SDK Instagram classes
 *
 * Execute Choreographies from the Temboo Instagram bundle.
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
 * @subpackage Instagram
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves the authenticated user's list of media they've liked.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetLikedMediaForUser extends Temboo_Choreography
{
    /**
     * Retrieves the authenticated user's list of media they've liked.
     *
     * @param Temboo_Session $session The session that owns this GetLikedMediaForUser Choreo.
     * @return Instagram_GetLikedMediaForUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetLikedMediaForUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLikedMediaForUser Choreo.
     *
     * @param Instagram_GetLikedMediaForUser_Inputs|array $inputs (optional) Inputs as Instagram_GetLikedMediaForUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetLikedMediaForUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetLikedMediaForUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLikedMediaForUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetLikedMediaForUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetLikedMediaForUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLikedMediaForUser Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetLikedMediaForUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLikedMediaForUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetLikedMediaForUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLikedMediaForUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetLikedMediaForUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetLikedMediaForUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLikedMediaForUser Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth 2.0 process.
     * @return Instagram_GetLikedMediaForUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Count input for this GetLikedMediaForUser Choreo.
     *
     * @param int $value (optional, integer) Count of media to return.
     * @return Instagram_GetLikedMediaForUser_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the MaxID input for this GetLikedMediaForUser Choreo.
     *
     * @param int $value (optional, integer) Returns media liked before this id.
     * @return Instagram_GetLikedMediaForUser_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the UserID input for this GetLikedMediaForUser Choreo.
     *
     * @param string $value (optional, string) The ID of the user that you want to retrieve. Defaults to 'self' which will return the user associated with the access token.
     * @return Instagram_GetLikedMediaForUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetLikedMediaForUser Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetLikedMediaForUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLikedMediaForUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLikedMediaForUser execution.
     * @param Instagram_GetLikedMediaForUser $choreo The choreography object for this execution.
     * @param Instagram_GetLikedMediaForUser_Inputs|array $inputs (optional) Inputs as Instagram_GetLikedMediaForUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetLikedMediaForUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetLikedMediaForUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLikedMediaForUser execution.
     *
     * @return Instagram_GetLikedMediaForUser_Results New results object.
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
     * Wraps results in appropriate results class for this GetLikedMediaForUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetLikedMediaForUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetLikedMediaForUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLikedMediaForUser Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetLikedMediaForUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLikedMediaForUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetLikedMediaForUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLikedMediaForUser execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the most recent media published by a user.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetRecentMediaForUser extends Temboo_Choreography
{
    /**
     * Retrieves the most recent media published by a user.
     *
     * @param Temboo_Session $session The session that owns this GetRecentMediaForUser Choreo.
     * @return Instagram_GetRecentMediaForUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetRecentMediaForUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecentMediaForUser Choreo.
     *
     * @param Instagram_GetRecentMediaForUser_Inputs|array $inputs (optional) Inputs as Instagram_GetRecentMediaForUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetRecentMediaForUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetRecentMediaForUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentMediaForUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetRecentMediaForUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetRecentMediaForUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentMediaForUser Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetRecentMediaForUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecentMediaForUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetRecentMediaForUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentMediaForUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetRecentMediaForUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetRecentMediaForUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetRecentMediaForUser Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth 2.0 process.
     * @return Instagram_GetRecentMediaForUser_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Count input for this GetRecentMediaForUser Choreo.
     *
     * @param int $value (optional, integer) Count of media to return.
     * @return Instagram_GetRecentMediaForUser_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the MaxID input for this GetRecentMediaForUser Choreo.
     *
     * @param int $value (optional, integer) Return media liked before this id.
     * @return Instagram_GetRecentMediaForUser_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the MinID input for this GetRecentMediaForUser Choreo.
     *
     * @param int $value (optional, integer) Returns media later than this min_id.
     * @return Instagram_GetRecentMediaForUser_Inputs For method chaining.
     */
    public function setMinID($value)
    {
        return $this->set('MinID', $value);
    }

    /**
     * Set the value for the MinTimestamp input for this GetRecentMediaForUser Choreo.
     *
     * @param string $value (optional, date) Returns media after this UNIX timestamp.
     * @return Instagram_GetRecentMediaForUser_Inputs For method chaining.
     */
    public function setMinTimestamp($value)
    {
        return $this->set('MinTimestamp', $value);
    }

    /**
     * Set the value for the UserID input for this GetRecentMediaForUser Choreo.
     *
     * @param string $value (optional, string) The ID of the user that you want to retrieve. Defaults to 'self' which will return the user associated with the access token.
     * @return Instagram_GetRecentMediaForUser_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetRecentMediaForUser Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetRecentMediaForUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentMediaForUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecentMediaForUser execution.
     * @param Instagram_GetRecentMediaForUser $choreo The choreography object for this execution.
     * @param Instagram_GetRecentMediaForUser_Inputs|array $inputs (optional) Inputs as Instagram_GetRecentMediaForUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetRecentMediaForUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetRecentMediaForUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentMediaForUser execution.
     *
     * @return Instagram_GetRecentMediaForUser_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecentMediaForUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetRecentMediaForUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetRecentMediaForUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecentMediaForUser Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetRecentMediaForUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecentMediaForUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetRecentMediaForUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecentMediaForUser execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return Instagram_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param Instagram_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Instagram_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return Instagram_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Instagram_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Instagram_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Instagram_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Instagram after registering your application.
     * @return Instagram_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return Instagram_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return Instagram_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setForwardingURL($value)
    {
        return $this->set('ForwardingURL', $value);
    }
}


/**
 * Execution object for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param Instagram_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param Instagram_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as Instagram_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return Instagram_OAuth_InitializeOAuth_Results New results object.
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
     * @return Instagram_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_OAuth_InitializeOAuth_Results New instance.
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
 * Retrieves a list of what media is most popular at the moment.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetPopularMedia extends Temboo_Choreography
{
    /**
     * Retrieves a list of what media is most popular at the moment.
     *
     * @param Temboo_Session $session The session that owns this GetPopularMedia Choreo.
     * @return Instagram_GetPopularMedia New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetPopularMedia/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPopularMedia Choreo.
     *
     * @param Instagram_GetPopularMedia_Inputs|array $inputs (optional) Inputs as Instagram_GetPopularMedia_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetPopularMedia_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetPopularMedia_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPopularMedia Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetPopularMedia_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetPopularMedia_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPopularMedia Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetPopularMedia_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPopularMedia Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetPopularMedia_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPopularMedia input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetPopularMedia_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetPopularMedia_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetPopularMedia Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_GetPopularMedia_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetPopularMedia Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_GetPopularMedia_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }
}


/**
 * Execution object for the GetPopularMedia Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetPopularMedia_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPopularMedia Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPopularMedia execution.
     * @param Instagram_GetPopularMedia $choreo The choreography object for this execution.
     * @param Instagram_GetPopularMedia_Inputs|array $inputs (optional) Inputs as Instagram_GetPopularMedia_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetPopularMedia_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetPopularMedia $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPopularMedia execution.
     *
     * @return Instagram_GetPopularMedia_Results New results object.
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
     * Wraps results in appropriate results class for this GetPopularMedia execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetPopularMedia_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetPopularMedia_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPopularMedia Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetPopularMedia_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPopularMedia Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetPopularMedia_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPopularMedia execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of recently tagged media.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_RecentlyTaggedMedia extends Temboo_Choreography
{
    /**
     * Retrieves a list of recently tagged media.
     *
     * @param Temboo_Session $session The session that owns this RecentlyTaggedMedia Choreo.
     * @return Instagram_RecentlyTaggedMedia New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/RecentlyTaggedMedia/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RecentlyTaggedMedia Choreo.
     *
     * @param Instagram_RecentlyTaggedMedia_Inputs|array $inputs (optional) Inputs as Instagram_RecentlyTaggedMedia_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_RecentlyTaggedMedia_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_RecentlyTaggedMedia_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RecentlyTaggedMedia Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_RecentlyTaggedMedia_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_RecentlyTaggedMedia_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RecentlyTaggedMedia Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_RecentlyTaggedMedia_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RecentlyTaggedMedia Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_RecentlyTaggedMedia_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RecentlyTaggedMedia input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_RecentlyTaggedMedia_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_RecentlyTaggedMedia_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RecentlyTaggedMedia Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_RecentlyTaggedMedia_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this RecentlyTaggedMedia Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_RecentlyTaggedMedia_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the MaxID input for this RecentlyTaggedMedia Choreo.
     *
     * @param int $value (optional, integer) Returns media earlier than this max_id.
     * @return Instagram_RecentlyTaggedMedia_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the MinID input for this RecentlyTaggedMedia Choreo.
     *
     * @param int $value (optional, integer) Returns media later than this min_id.
     * @return Instagram_RecentlyTaggedMedia_Inputs For method chaining.
     */
    public function setMinID($value)
    {
        return $this->set('MinID', $value);
    }

    /**
     * Set the value for the TagName input for this RecentlyTaggedMedia Choreo.
     *
     * @param string $value (required, string) Enter a valid tag identifier, such as: nofliter
     * @return Instagram_RecentlyTaggedMedia_Inputs For method chaining.
     */
    public function setTagName($value)
    {
        return $this->set('TagName', $value);
    }
}


/**
 * Execution object for the RecentlyTaggedMedia Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_RecentlyTaggedMedia_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RecentlyTaggedMedia Choreo.
     *
     * @param Temboo_Session $session The session that owns this RecentlyTaggedMedia execution.
     * @param Instagram_RecentlyTaggedMedia $choreo The choreography object for this execution.
     * @param Instagram_RecentlyTaggedMedia_Inputs|array $inputs (optional) Inputs as Instagram_RecentlyTaggedMedia_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_RecentlyTaggedMedia_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_RecentlyTaggedMedia $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RecentlyTaggedMedia execution.
     *
     * @return Instagram_RecentlyTaggedMedia_Results New results object.
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
     * Wraps results in appropriate results class for this RecentlyTaggedMedia execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_RecentlyTaggedMedia_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_RecentlyTaggedMedia_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RecentlyTaggedMedia Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_RecentlyTaggedMedia_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RecentlyTaggedMedia Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_RecentlyTaggedMedia_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RecentlyTaggedMedia execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the list of users that this user is following.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_UserFollows extends Temboo_Choreography
{
    /**
     * Retrieve the list of users that this user is following.
     *
     * @param Temboo_Session $session The session that owns this UserFollows Choreo.
     * @return Instagram_UserFollows New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/UserFollows/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UserFollows Choreo.
     *
     * @param Instagram_UserFollows_Inputs|array $inputs (optional) Inputs as Instagram_UserFollows_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_UserFollows_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_UserFollows_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserFollows Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_UserFollows_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_UserFollows_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserFollows Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_UserFollows_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UserFollows Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_UserFollows_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserFollows input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_UserFollows_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_UserFollows_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UserFollows Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth 2.0 process.
     * @return Instagram_UserFollows_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the UserID input for this UserFollows Choreo.
     *
     * @param string $value (required, string) The ID of the user that you want to retrieve. Defaults to 'self' which will return the user associated with the access token.
     * @return Instagram_UserFollows_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UserFollows Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_UserFollows_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserFollows Choreo.
     *
     * @param Temboo_Session $session The session that owns this UserFollows execution.
     * @param Instagram_UserFollows $choreo The choreography object for this execution.
     * @param Instagram_UserFollows_Inputs|array $inputs (optional) Inputs as Instagram_UserFollows_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_UserFollows_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_UserFollows $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserFollows execution.
     *
     * @return Instagram_UserFollows_Results New results object.
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
     * Wraps results in appropriate results class for this UserFollows execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_UserFollows_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_UserFollows_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UserFollows Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_UserFollows_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UserFollows Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_UserFollows_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UserFollows execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a comment on a specified media object. 
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_CreateMediaComment extends Temboo_Choreography
{
    /**
     * Creates a comment on a specified media object. 
     *
     * @param Temboo_Session $session The session that owns this CreateMediaComment Choreo.
     * @return Instagram_CreateMediaComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/CreateMediaComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateMediaComment Choreo.
     *
     * @param Instagram_CreateMediaComment_Inputs|array $inputs (optional) Inputs as Instagram_CreateMediaComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_CreateMediaComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_CreateMediaComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateMediaComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_CreateMediaComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_CreateMediaComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateMediaComment Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_CreateMediaComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateMediaComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_CreateMediaComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateMediaComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_CreateMediaComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_CreateMediaComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this CreateMediaComment Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth 2.0 process.
     * @return Instagram_CreateMediaComment_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the MediaID input for this CreateMediaComment Choreo.
     *
     * @param int $value (required, integer) The ID of the media object that you want to get comments for. For example, a valid MediaID could be 3.
     * @return Instagram_CreateMediaComment_Inputs For method chaining.
     */
    public function setMediaID($value)
    {
        return $this->set('MediaID', $value);
    }

    /**
     * Set the value for the Text input for this CreateMediaComment Choreo.
     *
     * @param string $value (required, string) The text to post as a comment on the media.
     * @return Instagram_CreateMediaComment_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }
}


/**
 * Execution object for the CreateMediaComment Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_CreateMediaComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateMediaComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateMediaComment execution.
     * @param Instagram_CreateMediaComment $choreo The choreography object for this execution.
     * @param Instagram_CreateMediaComment_Inputs|array $inputs (optional) Inputs as Instagram_CreateMediaComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_CreateMediaComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_CreateMediaComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateMediaComment execution.
     *
     * @return Instagram_CreateMediaComment_Results New results object.
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
     * Wraps results in appropriate results class for this CreateMediaComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_CreateMediaComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_CreateMediaComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateMediaComment Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_CreateMediaComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateMediaComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_CreateMediaComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateMediaComment execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of recent media objects from a given location.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetRecentMediaForLocation extends Temboo_Choreography
{
    /**
     * Retrieves a list of recent media objects from a given location.
     *
     * @param Temboo_Session $session The session that owns this GetRecentMediaForLocation Choreo.
     * @return Instagram_GetRecentMediaForLocation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetRecentMediaForLocation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecentMediaForLocation Choreo.
     *
     * @param Instagram_GetRecentMediaForLocation_Inputs|array $inputs (optional) Inputs as Instagram_GetRecentMediaForLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetRecentMediaForLocation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetRecentMediaForLocation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentMediaForLocation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetRecentMediaForLocation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetRecentMediaForLocation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentMediaForLocation Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetRecentMediaForLocation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecentMediaForLocation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetRecentMediaForLocation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentMediaForLocation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetRecentMediaForLocation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetRecentMediaForLocation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetRecentMediaForLocation Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_GetRecentMediaForLocation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetRecentMediaForLocation Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_GetRecentMediaForLocation_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the LocationID input for this GetRecentMediaForLocation Choreo.
     *
     * @param int $value (required, integer) The ID for the location that you want to retrieve information for.
     * @return Instagram_GetRecentMediaForLocation_Inputs For method chaining.
     */
    public function setLocationID($value)
    {
        return $this->set('LocationID', $value);
    }

    /**
     * Set the value for the MaxID input for this GetRecentMediaForLocation Choreo.
     *
     * @param int $value (optional, integer) Returns media after this max_id.
     * @return Instagram_GetRecentMediaForLocation_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the MaxTimestamp input for this GetRecentMediaForLocation Choreo.
     *
     * @param string $value (optional, date) Returns media before this UNIX timestamp.
     * @return Instagram_GetRecentMediaForLocation_Inputs For method chaining.
     */
    public function setMaxTimestamp($value)
    {
        return $this->set('MaxTimestamp', $value);
    }

    /**
     * Set the value for the MinID input for this GetRecentMediaForLocation Choreo.
     *
     * @param int $value (optional, integer) Returns media before this min_id.
     * @return Instagram_GetRecentMediaForLocation_Inputs For method chaining.
     */
    public function setMinID($value)
    {
        return $this->set('MinID', $value);
    }

    /**
     * Set the value for the MinTimestamp input for this GetRecentMediaForLocation Choreo.
     *
     * @param string $value (optional, date) Returns media after this UNIX timestamp.
     * @return Instagram_GetRecentMediaForLocation_Inputs For method chaining.
     */
    public function setMinTimestamp($value)
    {
        return $this->set('MinTimestamp', $value);
    }
}


/**
 * Execution object for the GetRecentMediaForLocation Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetRecentMediaForLocation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentMediaForLocation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecentMediaForLocation execution.
     * @param Instagram_GetRecentMediaForLocation $choreo The choreography object for this execution.
     * @param Instagram_GetRecentMediaForLocation_Inputs|array $inputs (optional) Inputs as Instagram_GetRecentMediaForLocation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetRecentMediaForLocation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetRecentMediaForLocation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentMediaForLocation execution.
     *
     * @return Instagram_GetRecentMediaForLocation_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecentMediaForLocation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetRecentMediaForLocation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetRecentMediaForLocation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecentMediaForLocation Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetRecentMediaForLocation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecentMediaForLocation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetRecentMediaForLocation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecentMediaForLocation execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve the list of users following this user.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_UserIsFollowedBy extends Temboo_Choreography
{
    /**
     * Retrieve the list of users following this user.
     *
     * @param Temboo_Session $session The session that owns this UserIsFollowedBy Choreo.
     * @return Instagram_UserIsFollowedBy New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/UserIsFollowedBy/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UserIsFollowedBy Choreo.
     *
     * @param Instagram_UserIsFollowedBy_Inputs|array $inputs (optional) Inputs as Instagram_UserIsFollowedBy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_UserIsFollowedBy_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_UserIsFollowedBy_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UserIsFollowedBy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_UserIsFollowedBy_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_UserIsFollowedBy_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UserIsFollowedBy Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_UserIsFollowedBy_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UserIsFollowedBy Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_UserIsFollowedBy_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UserIsFollowedBy input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_UserIsFollowedBy_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_UserIsFollowedBy_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this UserIsFollowedBy Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_UserIsFollowedBy_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this UserIsFollowedBy Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_UserIsFollowedBy_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the UserID input for this UserIsFollowedBy Choreo.
     *
     * @param string $value (required, string) The ID of the user that you want to retrieve. Defaults to 'self' which will return the user associated with the access token.
     * @return Instagram_UserIsFollowedBy_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the UserIsFollowedBy Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_UserIsFollowedBy_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UserIsFollowedBy Choreo.
     *
     * @param Temboo_Session $session The session that owns this UserIsFollowedBy execution.
     * @param Instagram_UserIsFollowedBy $choreo The choreography object for this execution.
     * @param Instagram_UserIsFollowedBy_Inputs|array $inputs (optional) Inputs as Instagram_UserIsFollowedBy_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_UserIsFollowedBy_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_UserIsFollowedBy $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UserIsFollowedBy execution.
     *
     * @return Instagram_UserIsFollowedBy_Results New results object.
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
     * Wraps results in appropriate results class for this UserIsFollowedBy execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_UserIsFollowedBy_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_UserIsFollowedBy_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UserIsFollowedBy Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_UserIsFollowedBy_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UserIsFollowedBy Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_UserIsFollowedBy_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UserIsFollowedBy execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a tag object.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_TagName extends Temboo_Choreography
{
    /**
     * Retrieves information about a tag object.
     *
     * @param Temboo_Session $session The session that owns this TagName Choreo.
     * @return Instagram_TagName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/TagName/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TagName Choreo.
     *
     * @param Instagram_TagName_Inputs|array $inputs (optional) Inputs as Instagram_TagName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_TagName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_TagName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TagName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_TagName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_TagName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TagName Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_TagName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TagName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_TagName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TagName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_TagName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_TagName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this TagName Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_TagName_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this TagName Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_TagName_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the TagName input for this TagName Choreo.
     *
     * @param string $value (required, string) Enter a valid tag identifier, such as: nofliter
     * @return Instagram_TagName_Inputs For method chaining.
     */
    public function setTagName($value)
    {
        return $this->set('TagName', $value);
    }
}


/**
 * Execution object for the TagName Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_TagName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TagName Choreo.
     *
     * @param Temboo_Session $session The session that owns this TagName execution.
     * @param Instagram_TagName $choreo The choreography object for this execution.
     * @param Instagram_TagName_Inputs|array $inputs (optional) Inputs as Instagram_TagName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_TagName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_TagName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TagName execution.
     *
     * @return Instagram_TagName_Results New results object.
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
     * Wraps results in appropriate results class for this TagName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_TagName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_TagName_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TagName Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_TagName_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TagName Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_TagName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TagName execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the authenticated user's feed.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetUserFeed extends Temboo_Choreography
{
    /**
     * Retrieves the authenticated user's feed.
     *
     * @param Temboo_Session $session The session that owns this GetUserFeed Choreo.
     * @return Instagram_GetUserFeed New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetUserFeed/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUserFeed Choreo.
     *
     * @param Instagram_GetUserFeed_Inputs|array $inputs (optional) Inputs as Instagram_GetUserFeed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetUserFeed_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetUserFeed_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserFeed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetUserFeed_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetUserFeed_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserFeed Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetUserFeed_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUserFeed Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetUserFeed_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserFeed input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetUserFeed_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetUserFeed_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetUserFeed Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth 2.0 process.
     * @return Instagram_GetUserFeed_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the Count input for this GetUserFeed Choreo.
     *
     * @param int $value (optional, integer) Count of media to return.
     * @return Instagram_GetUserFeed_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the MaxID input for this GetUserFeed Choreo.
     *
     * @param int $value (optional, integer) Returns media earlier than this max_id.
     * @return Instagram_GetUserFeed_Inputs For method chaining.
     */
    public function setMaxID($value)
    {
        return $this->set('MaxID', $value);
    }

    /**
     * Set the value for the MinID input for this GetUserFeed Choreo.
     *
     * @param int $value (optional, integer) Returns media later than this min_id.
     * @return Instagram_GetUserFeed_Inputs For method chaining.
     */
    public function setMinID($value)
    {
        return $this->set('MinID', $value);
    }

    /**
     * Set the value for the UserID input for this GetUserFeed Choreo.
     *
     * @param string $value (optional, string) The ID of the user that you want to retrieve. Defaults to 'self' which will return the user associated with the access token.
     * @return Instagram_GetUserFeed_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetUserFeed Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetUserFeed_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserFeed Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUserFeed execution.
     * @param Instagram_GetUserFeed $choreo The choreography object for this execution.
     * @param Instagram_GetUserFeed_Inputs|array $inputs (optional) Inputs as Instagram_GetUserFeed_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetUserFeed_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetUserFeed $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserFeed execution.
     *
     * @return Instagram_GetUserFeed_Results New results object.
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
     * Wraps results in appropriate results class for this GetUserFeed execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetUserFeed_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetUserFeed_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUserFeed Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetUserFeed_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUserFeed Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetUserFeed_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUserFeed execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a full list of comments for a specified media object.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaComments extends Temboo_Choreography
{
    /**
     * Retrieves a full list of comments for a specified media object.
     *
     * @param Temboo_Session $session The session that owns this GetMediaComments Choreo.
     * @return Instagram_GetMediaComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetMediaComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMediaComments Choreo.
     *
     * @param Instagram_GetMediaComments_Inputs|array $inputs (optional) Inputs as Instagram_GetMediaComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetMediaComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetMediaComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMediaComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetMediaComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetMediaComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMediaComments Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMediaComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetMediaComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMediaComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetMediaComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetMediaComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetMediaComments Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_GetMediaComments_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetMediaComments Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_GetMediaComments_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the MediaID input for this GetMediaComments Choreo.
     *
     * @param int $value (required, integer) The ID of the media object that you want to get comments for. For example, a valid MediaID could be 3.
     * @return Instagram_GetMediaComments_Inputs For method chaining.
     */
    public function setMediaID($value)
    {
        return $this->set('MediaID', $value);
    }
}


/**
 * Execution object for the GetMediaComments Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMediaComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMediaComments execution.
     * @param Instagram_GetMediaComments $choreo The choreography object for this execution.
     * @param Instagram_GetMediaComments_Inputs|array $inputs (optional) Inputs as Instagram_GetMediaComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetMediaComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetMediaComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMediaComments execution.
     *
     * @return Instagram_GetMediaComments_Results New results object.
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
     * Wraps results in appropriate results class for this GetMediaComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetMediaComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetMediaComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMediaComments Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMediaComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetMediaComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMediaComments execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a location.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetLocationInformation extends Temboo_Choreography
{
    /**
     * Retrieves information about a location.
     *
     * @param Temboo_Session $session The session that owns this GetLocationInformation Choreo.
     * @return Instagram_GetLocationInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetLocationInformation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetLocationInformation Choreo.
     *
     * @param Instagram_GetLocationInformation_Inputs|array $inputs (optional) Inputs as Instagram_GetLocationInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetLocationInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetLocationInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetLocationInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetLocationInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetLocationInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetLocationInformation Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetLocationInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetLocationInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetLocationInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetLocationInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetLocationInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetLocationInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetLocationInformation Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_GetLocationInformation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetLocationInformation Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_GetLocationInformation_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the LocationID input for this GetLocationInformation Choreo.
     *
     * @param int $value (required, integer) The ID for the location that you want to retrieve information for.
     * @return Instagram_GetLocationInformation_Inputs For method chaining.
     */
    public function setLocationID($value)
    {
        return $this->set('LocationID', $value);
    }
}


/**
 * Execution object for the GetLocationInformation Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetLocationInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetLocationInformation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetLocationInformation execution.
     * @param Instagram_GetLocationInformation $choreo The choreography object for this execution.
     * @param Instagram_GetLocationInformation_Inputs|array $inputs (optional) Inputs as Instagram_GetLocationInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetLocationInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetLocationInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetLocationInformation execution.
     *
     * @return Instagram_GetLocationInformation_Results New results object.
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
     * Wraps results in appropriate results class for this GetLocationInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetLocationInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetLocationInformation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetLocationInformation Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetLocationInformation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetLocationInformation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetLocationInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetLocationInformation execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information about a specified media object.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaByID extends Temboo_Choreography
{
    /**
     * Retrieves information about a specified media object.
     *
     * @param Temboo_Session $session The session that owns this GetMediaByID Choreo.
     * @return Instagram_GetMediaByID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetMediaByID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMediaByID Choreo.
     *
     * @param Instagram_GetMediaByID_Inputs|array $inputs (optional) Inputs as Instagram_GetMediaByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetMediaByID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetMediaByID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMediaByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetMediaByID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetMediaByID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMediaByID Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaByID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMediaByID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetMediaByID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMediaByID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetMediaByID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetMediaByID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetMediaByID Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_GetMediaByID_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetMediaByID Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_GetMediaByID_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the MediaID input for this GetMediaByID Choreo.
     *
     * @param int $value (required, integer) The ID of the media object you want to retrieve. For example, a valid MediaID could be 3.
     * @return Instagram_GetMediaByID_Inputs For method chaining.
     */
    public function setMediaID($value)
    {
        return $this->set('MediaID', $value);
    }
}


/**
 * Execution object for the GetMediaByID Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaByID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMediaByID Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMediaByID execution.
     * @param Instagram_GetMediaByID $choreo The choreography object for this execution.
     * @param Instagram_GetMediaByID_Inputs|array $inputs (optional) Inputs as Instagram_GetMediaByID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetMediaByID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetMediaByID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMediaByID execution.
     *
     * @return Instagram_GetMediaByID_Results New results object.
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
     * Wraps results in appropriate results class for this GetMediaByID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetMediaByID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetMediaByID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMediaByID Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaByID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMediaByID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetMediaByID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMediaByID execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches for locations by geographic coordinates. 
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_SearchLocations extends Temboo_Choreography
{
    /**
     * Searches for locations by geographic coordinates. 
     *
     * @param Temboo_Session $session The session that owns this SearchLocations Choreo.
     * @return Instagram_SearchLocations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/SearchLocations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchLocations Choreo.
     *
     * @param Instagram_SearchLocations_Inputs|array $inputs (optional) Inputs as Instagram_SearchLocations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_SearchLocations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_SearchLocations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchLocations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_SearchLocations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_SearchLocations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchLocations Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_SearchLocations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchLocations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_SearchLocations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchLocations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_SearchLocations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_SearchLocations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this SearchLocations Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_SearchLocations_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this SearchLocations Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_SearchLocations_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the Distance input for this SearchLocations Choreo.
     *
     * @param int $value (optional, integer) The distance to search. Default is 1000m (distance=1000), max distance is 5000.
     * @return Instagram_SearchLocations_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the FoursquareID input for this SearchLocations Choreo.
     *
     * @param string $value (conditional, string) Returns a location mapped off of a foursquare v2 api location id. If used, you are not required to provide values for Latitude or Longitude.
     * @return Instagram_SearchLocations_Inputs For method chaining.
     */
    public function setFoursquareID($value)
    {
        return $this->set('FoursquareID', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchLocations Choreo.
     *
     * @param float $value (conditional, decimal) Latitude of the center search coordinate. If used, Longitude is required.
     * @return Instagram_SearchLocations_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchLocations Choreo.
     *
     * @param float $value (conditional, decimal) Longitude of the center search coordinate. If used, Latitude is required.
     * @return Instagram_SearchLocations_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }
}


/**
 * Execution object for the SearchLocations Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_SearchLocations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchLocations Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchLocations execution.
     * @param Instagram_SearchLocations $choreo The choreography object for this execution.
     * @param Instagram_SearchLocations_Inputs|array $inputs (optional) Inputs as Instagram_SearchLocations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_SearchLocations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_SearchLocations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchLocations execution.
     *
     * @return Instagram_SearchLocations_Results New results object.
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
     * Wraps results in appropriate results class for this SearchLocations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_SearchLocations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_SearchLocations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchLocations Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_SearchLocations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchLocations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_SearchLocations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchLocations execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Completes the OAuth process by retrieving a Instagram access token for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a Instagram access token for a user, after they have visited the authorization URL returned by the InitializeOAuth Choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return Instagram_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param Instagram_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Instagram_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return Instagram_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Instagram_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Instagram_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return Instagram_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return Instagram_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by Instagram after registering your application.
     * @return Instagram_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by Instagram after registering your application.
     * @return Instagram_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return Instagram_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage Instagram
 */
class Instagram_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param Instagram_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param Instagram_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as Instagram_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return Instagram_OAuth_FinalizeOAuth_Results New results object.
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
     * @return Instagram_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_OAuth_FinalizeOAuth_Results New instance.
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
     * Retrieve the value for the "Response" output from this FinalizeOAuth execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves basic information about a user.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetUserInformation extends Temboo_Choreography
{
    /**
     * Retrieves basic information about a user.
     *
     * @param Temboo_Session $session The session that owns this GetUserInformation Choreo.
     * @return Instagram_GetUserInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetUserInformation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUserInformation Choreo.
     *
     * @param Instagram_GetUserInformation_Inputs|array $inputs (optional) Inputs as Instagram_GetUserInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetUserInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetUserInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUserInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetUserInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetUserInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUserInformation Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetUserInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUserInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetUserInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUserInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetUserInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetUserInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetUserInformation Choreo.
     *
     * @param string $value (required, string) The access token retrieved during the OAuth 2.0 process.
     * @return Instagram_GetUserInformation_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the UserID input for this GetUserInformation Choreo.
     *
     * @param string $value (optional, string) The ID of the user that you want to retrieve. Defaults to 'self' which will return the user associated with the access token.
     * @return Instagram_GetUserInformation_Inputs For method chaining.
     */
    public function setUserID($value)
    {
        return $this->set('UserID', $value);
    }
}


/**
 * Execution object for the GetUserInformation Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetUserInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUserInformation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUserInformation execution.
     * @param Instagram_GetUserInformation $choreo The choreography object for this execution.
     * @param Instagram_GetUserInformation_Inputs|array $inputs (optional) Inputs as Instagram_GetUserInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetUserInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetUserInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUserInformation execution.
     *
     * @return Instagram_GetUserInformation_Results New results object.
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
     * Wraps results in appropriate results class for this GetUserInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetUserInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetUserInformation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUserInformation Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetUserInformation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUserInformation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetUserInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUserInformation execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to search for media in a given area.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_SearchMedia extends Temboo_Choreography
{
    /**
     * Allows you to search for media in a given area.
     *
     * @param Temboo_Session $session The session that owns this SearchMedia Choreo.
     * @return Instagram_SearchMedia New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/SearchMedia/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchMedia Choreo.
     *
     * @param Instagram_SearchMedia_Inputs|array $inputs (optional) Inputs as Instagram_SearchMedia_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_SearchMedia_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_SearchMedia_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchMedia Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_SearchMedia_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_SearchMedia_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchMedia Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_SearchMedia_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchMedia Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_SearchMedia_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchMedia input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_SearchMedia_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_SearchMedia_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this SearchMedia Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_SearchMedia_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this SearchMedia Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_SearchMedia_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the Distance input for this SearchMedia Choreo.
     *
     * @param int $value (optional, integer) The distance in meters. Defaults to 1000. Max is 5000.
     * @return Instagram_SearchMedia_Inputs For method chaining.
     */
    public function setDistance($value)
    {
        return $this->set('Distance', $value);
    }

    /**
     * Set the value for the Latitude input for this SearchMedia Choreo.
     *
     * @param float $value (required, decimal) Latitude of the center search coordinate.
     * @return Instagram_SearchMedia_Inputs For method chaining.
     */
    public function setLatitude($value)
    {
        return $this->set('Latitude', $value);
    }

    /**
     * Set the value for the Longitude input for this SearchMedia Choreo.
     *
     * @param float $value (required, decimal) Longitude of the center search coordinate.
     * @return Instagram_SearchMedia_Inputs For method chaining.
     */
    public function setLongitude($value)
    {
        return $this->set('Longitude', $value);
    }

    /**
     * Set the value for the MaxTimestamp input for this SearchMedia Choreo.
     *
     * @param string $value (optional, date) A unix timestamp. All media returned will be taken earlier than this timestamp.
     * @return Instagram_SearchMedia_Inputs For method chaining.
     */
    public function setMaxTimestamp($value)
    {
        return $this->set('MaxTimestamp', $value);
    }

    /**
     * Set the value for the MinTimestamp input for this SearchMedia Choreo.
     *
     * @param string $value (optional, date) A unix timestamp. All media returned will be taken later than this timestamp.
     * @return Instagram_SearchMedia_Inputs For method chaining.
     */
    public function setMinTimestamp($value)
    {
        return $this->set('MinTimestamp', $value);
    }
}


/**
 * Execution object for the SearchMedia Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_SearchMedia_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchMedia Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchMedia execution.
     * @param Instagram_SearchMedia $choreo The choreography object for this execution.
     * @param Instagram_SearchMedia_Inputs|array $inputs (optional) Inputs as Instagram_SearchMedia_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_SearchMedia_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_SearchMedia $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchMedia execution.
     *
     * @return Instagram_SearchMedia_Results New results object.
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
     * Wraps results in appropriate results class for this SearchMedia execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_SearchMedia_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_SearchMedia_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchMedia Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_SearchMedia_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchMedia Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_SearchMedia_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchMedia execution.
     *
     * @return string (json) The response from Instagram.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of what media is most popular at the moment, sorted by Likes.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaByLikes extends Temboo_Choreography
{
    /**
     * Retrieves a list of what media is most popular at the moment, sorted by Likes.
     *
     * @param Temboo_Session $session The session that owns this GetMediaByLikes Choreo.
     * @return Instagram_GetMediaByLikes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instagram/GetMediaByLikes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetMediaByLikes Choreo.
     *
     * @param Instagram_GetMediaByLikes_Inputs|array $inputs (optional) Inputs as Instagram_GetMediaByLikes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetMediaByLikes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instagram_GetMediaByLikes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetMediaByLikes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetMediaByLikes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instagram_GetMediaByLikes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetMediaByLikes Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaByLikes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetMediaByLikes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instagram_GetMediaByLikes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetMediaByLikes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instagram_GetMediaByLikes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instagram_GetMediaByLikes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this GetMediaByLikes Choreo.
     *
     * @param string $value (conditional, string) The access token retrieved during the OAuth 2.0 process. Required unless you provide the ClientID.
     * @return Instagram_GetMediaByLikes_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ClientID input for this GetMediaByLikes Choreo.
     *
     * @param string $value (conditional, string) The Client ID provided by Instagram after registering your application. Required unless you provide the AccessToken.
     * @return Instagram_GetMediaByLikes_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the MediaID input for this GetMediaByLikes Choreo.
     *
     * @param int $value (required, integer) The ID of the media object you want to retrieve. For example, a valid MediaID could be 3.
     * @return Instagram_GetMediaByLikes_Inputs For method chaining.
     */
    public function setMediaID($value)
    {
        return $this->set('MediaID', $value);
    }
}


/**
 * Execution object for the GetMediaByLikes Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaByLikes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetMediaByLikes Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetMediaByLikes execution.
     * @param Instagram_GetMediaByLikes $choreo The choreography object for this execution.
     * @param Instagram_GetMediaByLikes_Inputs|array $inputs (optional) Inputs as Instagram_GetMediaByLikes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instagram_GetMediaByLikes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instagram_GetMediaByLikes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetMediaByLikes execution.
     *
     * @return Instagram_GetMediaByLikes_Results New results object.
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
     * Wraps results in appropriate results class for this GetMediaByLikes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instagram_GetMediaByLikes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instagram_GetMediaByLikes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetMediaByLikes Choreo.
 *
 * @package Temboo
 * @subpackage Instagram
 */
class Instagram_GetMediaByLikes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetMediaByLikes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instagram_GetMediaByLikes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetMediaByLikes execution.
     *
     * @return string (json) The response from Instagram.
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
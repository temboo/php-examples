<?php

/**
 * Temboo PHP SDK RunKeeper classes
 *
 * Execute Choreographies from the Temboo RunKeeper bundle.
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
 * @subpackage RunKeeper
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Completes the OAuth process by retrieving a RunKeeper access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_OAuth_FinalizeOAuth extends Temboo_Choreography
{
    /**
     * Completes the OAuth process by retrieving a RunKeeper access token for a user, after they have visited the authorization URL returned by the InitializeOAuth choreo and clicked "allow."
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth Choreo.
     * @return RunKeeper_OAuth_FinalizeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/OAuth/FinalizeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FinalizeOAuth Choreo.
     *
     * @param RunKeeper_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as RunKeeper_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_OAuth_FinalizeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_OAuth_FinalizeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_OAuth_FinalizeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_OAuth_FinalizeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FinalizeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs New instance.
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
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this FinalizeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the CallbackID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The callback token returned by the InitializeOAuth Choreo. Used to retrieve the authorization code after the user authorizes.
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setCallbackID($value)
    {
        return $this->set('CallbackID', $value);
    }

    /**
     * Set the value for the ClientID input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by RunKeeper after registering your application.
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the ClientSecret input for this FinalizeOAuth Choreo.
     *
     * @param string $value (required, string) The Client Secret provided by RunKeeper after registering your application.
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs For method chaining.
     */
    public function setClientSecret($value)
    {
        return $this->set('ClientSecret', $value);
    }

    /**
     * Set the value for the Timeout input for this FinalizeOAuth Choreo.
     *
     * @param int $value (optional, integer) The amount of time (in seconds) to poll your Temboo callback URL to see if your app's user has allowed or denied the request for access. Defaults to 20. Max is 60.
     * @return RunKeeper_OAuth_FinalizeOAuth_Inputs For method chaining.
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
 * @subpackage RunKeeper
 */
class RunKeeper_OAuth_FinalizeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FinalizeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this FinalizeOAuth execution.
     * @param RunKeeper_OAuth_FinalizeOAuth $choreo The choreography object for this execution.
     * @param RunKeeper_OAuth_FinalizeOAuth_Inputs|array $inputs (optional) Inputs as RunKeeper_OAuth_FinalizeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_OAuth_FinalizeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_OAuth_FinalizeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FinalizeOAuth execution.
     *
     * @return RunKeeper_OAuth_FinalizeOAuth_Results New results object.
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
     * @return RunKeeper_OAuth_FinalizeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_OAuth_FinalizeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FinalizeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_OAuth_FinalizeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FinalizeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_OAuth_FinalizeOAuth_Results New instance.
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
 * Returns the feed for a user's personal records.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_PersonalRecords_RetrieveRecords extends Temboo_Choreography
{
    /**
     * Returns the feed for a user's personal records.
     *
     * @param Temboo_Session $session The session that owns this RetrieveRecords Choreo.
     * @return RunKeeper_PersonalRecords_RetrieveRecords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/PersonalRecords/RetrieveRecords/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveRecords Choreo.
     *
     * @param RunKeeper_PersonalRecords_RetrieveRecords_Inputs|array $inputs (optional) Inputs as RunKeeper_PersonalRecords_RetrieveRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_PersonalRecords_RetrieveRecords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_PersonalRecords_RetrieveRecords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveRecords Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_PersonalRecords_RetrieveRecords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveRecords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveRecords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveRecords Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the RetrieveRecords Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_PersonalRecords_RetrieveRecords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveRecords Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveRecords execution.
     * @param RunKeeper_PersonalRecords_RetrieveRecords $choreo The choreography object for this execution.
     * @param RunKeeper_PersonalRecords_RetrieveRecords_Inputs|array $inputs (optional) Inputs as RunKeeper_PersonalRecords_RetrieveRecords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_PersonalRecords_RetrieveRecords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveRecords execution.
     *
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveRecords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_PersonalRecords_RetrieveRecords_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveRecords Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_PersonalRecords_RetrieveRecords_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveRecords Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_PersonalRecords_RetrieveRecords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveRecords execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a nutrition entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_RetrieveEntry extends Temboo_Choreography
{
    /**
     * Retrieves a nutrition entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry Choreo.
     * @return RunKeeper_Nutrition_RetrieveEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Nutrition/RetrieveEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntry Choreo.
     *
     * @param RunKeeper_Nutrition_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_RetrieveEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Nutrition_RetrieveEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_RetrieveEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Nutrition_RetrieveEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_RetrieveEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_RetrieveEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Nutrition_RetrieveEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Nutrition_RetrieveEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Nutrition_RetrieveEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the nutrition entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /nutrition/-12985593-1350950400000).
     * @return RunKeeper_Nutrition_RetrieveEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_RetrieveEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry execution.
     * @param RunKeeper_Nutrition_RetrieveEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Nutrition_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_RetrieveEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Nutrition_RetrieveEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntry execution.
     *
     * @return RunKeeper_Nutrition_RetrieveEntry_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Nutrition_RetrieveEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Nutrition_RetrieveEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_RetrieveEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Nutrition_RetrieveEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntry execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Records a newly-completed strength training activity, or begins recording an activity still in progress.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RecordActivity extends Temboo_Choreography
{
    /**
     * Records a newly-completed strength training activity, or begins recording an activity still in progress.
     *
     * @param Temboo_Session $session The session that owns this RecordActivity Choreo.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/StrengthTrainingActivities/RecordActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RecordActivity Choreo.
     *
     * @param RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_StrengthTrainingActivities_RecordActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RecordActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RecordActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RecordActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RecordActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Activity input for this RecordActivity Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the activity to create. See documentation for formatting examples.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs For method chaining.
     */
    public function setActivity($value)
    {
        return $this->set('Activity', $value);
    }

    /**
     * Set the value for the AccessToken input for this RecordActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the RecordActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RecordActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RecordActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this RecordActivity execution.
     * @param RunKeeper_StrengthTrainingActivities_RecordActivity $choreo The choreography object for this execution.
     * @param RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_RecordActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_StrengthTrainingActivities_RecordActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RecordActivity execution.
     *
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Results New results object.
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
     * Wraps results in appropriate results class for this RecordActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_StrengthTrainingActivities_RecordActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RecordActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RecordActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RecordActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_RecordActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RecordActivity execution.
     *
     * @return bool (boolean) Contains the string "true" when an activity is created successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URI" output from this RecordActivity execution.
     *
     * @return string (string) The activity uri that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURI()
    {
        return $this->get('URI');
    }
}

/**
 * Updates a body measurement entry in a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_UpdateEntry extends Temboo_Choreography
{
    /**
     * Updates a body measurement entry in a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry Choreo.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/GeneralMeasurements/UpdateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateEntry Choreo.
     *
     * @param RunKeeper_GeneralMeasurements_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_GeneralMeasurements_UpdateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_GeneralMeasurements_UpdateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_UpdateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this UpdateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the fields to be updated in the body measurement entry. See documentation for formatting examples.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the body measurement entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /generalMeasurements/24085455).
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_UpdateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry execution.
     * @param RunKeeper_GeneralMeasurements_UpdateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_GeneralMeasurements_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_GeneralMeasurements_UpdateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateEntry execution.
     *
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_GeneralMeasurements_UpdateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_UpdateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_UpdateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateEntry execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the feed for a user's general body measurements.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_RetrieveEntries extends Temboo_Choreography
{
    /**
     * Returns the feed for a user's general body measurements.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries Choreo.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/GeneralMeasurements/RetrieveEntries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntries Choreo.
     *
     * @param RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_GeneralMeasurements_RetrieveEntries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntries Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PageSize input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The number entries to return per page. Defaults to 25.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The page of entries to return. This parameter is used in combination with the PageSize input to page through results. Defaults to 0 (the first page).
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_RetrieveEntries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntries Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries execution.
     * @param RunKeeper_GeneralMeasurements_RetrieveEntries $choreo The choreography object for this execution.
     * @param RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_GeneralMeasurements_RetrieveEntries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntries execution.
     *
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_GeneralMeasurements_RetrieveEntries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_RetrieveEntries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Next" output from this RetrieveEntries execution.
     *
     * @return int (integer) The next page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNext()
    {
        return $this->get('Next');
    }
    /**
     * Retrieve the value for the "Previous" output from this RetrieveEntries execution.
     *
     * @return int (integer) The previous page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPrevious()
    {
        return $this->get('Previous');
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntries execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the available resources for a specific user and the URIs for accessing them. 
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Users_RetrieveUserInfo extends Temboo_Choreography
{
    /**
     * Returns the available resources for a specific user and the URIs for accessing them. 
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserInfo Choreo.
     * @return RunKeeper_Users_RetrieveUserInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Users/RetrieveUserInfo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveUserInfo Choreo.
     *
     * @param RunKeeper_Users_RetrieveUserInfo_Inputs|array $inputs (optional) Inputs as RunKeeper_Users_RetrieveUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Users_RetrieveUserInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Users_RetrieveUserInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveUserInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Users_RetrieveUserInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Users_RetrieveUserInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveUserInfo Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Users_RetrieveUserInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveUserInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Users_RetrieveUserInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveUserInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Users_RetrieveUserInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Users_RetrieveUserInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveUserInfo Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Users_RetrieveUserInfo_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the RetrieveUserInfo Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Users_RetrieveUserInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveUserInfo Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUserInfo execution.
     * @param RunKeeper_Users_RetrieveUserInfo $choreo The choreography object for this execution.
     * @param RunKeeper_Users_RetrieveUserInfo_Inputs|array $inputs (optional) Inputs as RunKeeper_Users_RetrieveUserInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Users_RetrieveUserInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Users_RetrieveUserInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveUserInfo execution.
     *
     * @return RunKeeper_Users_RetrieveUserInfo_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveUserInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Users_RetrieveUserInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Users_RetrieveUserInfo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveUserInfo Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Users_RetrieveUserInfo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveUserInfo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Users_RetrieveUserInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveUserInfo execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a page from a user’s strength training activity history.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RetrieveActivity extends Temboo_Choreography
{
    /**
     * Retrieves a page from a user’s strength training activity history.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivity Choreo.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/StrengthTrainingActivities/RetrieveActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveActivity Choreo.
     *
     * @param RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_StrengthTrainingActivities_RetrieveActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this RetrieveActivity Choreo.
     *
     * @param int $value (required, integer) This can be the individual id of the activity, or you can pass the full uri for the activity as returned from RetrieveActivities response (i.e. /strengthTrainingActivities/125927913).
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }
}


/**
 * Execution object for the RetrieveActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RetrieveActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivity execution.
     * @param RunKeeper_StrengthTrainingActivities_RetrieveActivity $choreo The choreography object for this execution.
     * @param RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_RetrieveActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_StrengthTrainingActivities_RetrieveActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveActivity execution.
     *
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_StrengthTrainingActivities_RetrieveActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RetrieveActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveActivity execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the feed for a user's background activities.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RetrieveActivities extends Temboo_Choreography
{
    /**
     * Returns the feed for a user's background activities.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivities Choreo.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/BackgroundActivities/RetrieveActivities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveActivities Choreo.
     *
     * @param RunKeeper_BackgroundActivities_RetrieveActivities_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_RetrieveActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_BackgroundActivities_RetrieveActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_BackgroundActivities_RetrieveActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveActivities Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RetrieveActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveActivities Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PageSize input for this RetrieveActivities Choreo.
     *
     * @param int $value (optional, integer) The number entries to return per page. Defaults to 25.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this RetrieveActivities Choreo.
     *
     * @param int $value (optional, integer) The page of entries to return. This parameter is used in combination with the PageSize input to page through results. Defaults to 0 (the first page).
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetrieveActivities Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RetrieveActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveActivities Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivities execution.
     * @param RunKeeper_BackgroundActivities_RetrieveActivities $choreo The choreography object for this execution.
     * @param RunKeeper_BackgroundActivities_RetrieveActivities_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_RetrieveActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_BackgroundActivities_RetrieveActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveActivities execution.
     *
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_BackgroundActivities_RetrieveActivities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveActivities Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RetrieveActivities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveActivities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_RetrieveActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Next" output from this RetrieveActivities execution.
     *
     * @return int (integer) The next page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNext()
    {
        return $this->get('Next');
    }
    /**
     * Retrieve the value for the "Previous" output from this RetrieveActivities execution.
     *
     * @return int (integer) The previous page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPrevious()
    {
        return $this->get('Previous');
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveActivities execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes an individual diabetes measurement entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_DeleteEntry extends Temboo_Choreography
{
    /**
     * Removes an individual diabetes measurement entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry Choreo.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/DiabetesMeasurements/DeleteEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteEntry Choreo.
     *
     * @param RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_DiabetesMeasurements_DeleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the diabetes measurement entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /diabetes/12985593).
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_DeleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry execution.
     * @param RunKeeper_DiabetesMeasurements_DeleteEntry $choreo The choreography object for this execution.
     * @param RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_DiabetesMeasurements_DeleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteEntry execution.
     *
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_DiabetesMeasurements_DeleteEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_DeleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_DeleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteEntry execution.
     *
     * @return bool (boolean) Contains the string "true" when an entry is deleted successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a new sleep activity to a user's feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_CreateEntry extends Temboo_Choreography
{
    /**
     * Adds a new sleep activity to a user's feed.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry Choreo.
     * @return RunKeeper_Sleep_CreateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Sleep/CreateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateEntry Choreo.
     *
     * @param RunKeeper_Sleep_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_CreateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Sleep_CreateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_CreateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Sleep_CreateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_CreateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_CreateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Sleep_CreateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Sleep_CreateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this CreateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the entry to create. See documentation for formatting examples.
     * @return RunKeeper_Sleep_CreateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Sleep_CreateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_CreateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry execution.
     * @param RunKeeper_Sleep_CreateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Sleep_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_CreateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Sleep_CreateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateEntry execution.
     *
     * @return RunKeeper_Sleep_CreateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this CreateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Sleep_CreateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Sleep_CreateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_CreateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Sleep_CreateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateEntry execution.
     *
     * @return bool (boolean) Contains the string 'true" when a new entry is created successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URI" output from this CreateEntry execution.
     *
     * @return string (string) The entry uri that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURI()
    {
        return $this->get('URI');
    }
}

/**
 * Adds a nutrition entry to a user's feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_CreateEntry extends Temboo_Choreography
{
    /**
     * Adds a nutrition entry to a user's feed.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry Choreo.
     * @return RunKeeper_Nutrition_CreateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Nutrition/CreateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateEntry Choreo.
     *
     * @param RunKeeper_Nutrition_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_CreateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Nutrition_CreateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_CreateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Nutrition_CreateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_CreateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_CreateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Nutrition_CreateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Nutrition_CreateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this CreateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the entry to create. See documentation for formatting examples.
     * @return RunKeeper_Nutrition_CreateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Nutrition_CreateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_CreateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry execution.
     * @param RunKeeper_Nutrition_CreateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Nutrition_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_CreateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Nutrition_CreateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateEntry execution.
     *
     * @return RunKeeper_Nutrition_CreateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this CreateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Nutrition_CreateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Nutrition_CreateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_CreateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Nutrition_CreateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateEntry execution.
     *
     * @return bool (boolean) Contains the string 'true" when a new entry is created successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URI" output from this CreateEntry execution.
     *
     * @return string (string) The entry uri that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURI()
    {
        return $this->get('URI');
    }
}

/**
 * Returns the friends in a user's network.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Friends_RetrieveFriends extends Temboo_Choreography
{
    /**
     * Returns the friends in a user's network.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFriends Choreo.
     * @return RunKeeper_Friends_RetrieveFriends New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Friends/RetrieveFriends/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveFriends Choreo.
     *
     * @param RunKeeper_Friends_RetrieveFriends_Inputs|array $inputs (optional) Inputs as RunKeeper_Friends_RetrieveFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Friends_RetrieveFriends_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Friends_RetrieveFriends_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Friends_RetrieveFriends_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Friends_RetrieveFriends_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveFriends Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Friends_RetrieveFriends_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveFriends Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Friends_RetrieveFriends_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveFriends input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Friends_RetrieveFriends_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Friends_RetrieveFriends_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveFriends Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Friends_RetrieveFriends_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PageSize input for this RetrieveFriends Choreo.
     *
     * @param int $value (optional, integer) The number entries to return per page. Defaults to 25.
     * @return RunKeeper_Friends_RetrieveFriends_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this RetrieveFriends Choreo.
     *
     * @param int $value (optional, integer) The page of entries to return. This parameter is used in combination with the PageSize input to page through results. Defaults to 0 (the first page).
     * @return RunKeeper_Friends_RetrieveFriends_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetrieveFriends Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Friends_RetrieveFriends_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveFriends Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveFriends execution.
     * @param RunKeeper_Friends_RetrieveFriends $choreo The choreography object for this execution.
     * @param RunKeeper_Friends_RetrieveFriends_Inputs|array $inputs (optional) Inputs as RunKeeper_Friends_RetrieveFriends_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Friends_RetrieveFriends_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Friends_RetrieveFriends $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveFriends execution.
     *
     * @return RunKeeper_Friends_RetrieveFriends_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveFriends execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Friends_RetrieveFriends_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Friends_RetrieveFriends_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveFriends Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Friends_RetrieveFriends_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveFriends Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Friends_RetrieveFriends_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Next" output from this RetrieveFriends execution.
     *
     * @return int (integer) The next page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNext()
    {
        return $this->get('Next');
    }
    /**
     * Retrieve the value for the "Previous" output from this RetrieveFriends execution.
     *
     * @return int (integer) The previous page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPrevious()
    {
        return $this->get('Previous');
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveFriends execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a nutrition entry in a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_UpdateEntry extends Temboo_Choreography
{
    /**
     * Updates a nutrition entry in a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry Choreo.
     * @return RunKeeper_Nutrition_UpdateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Nutrition/UpdateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateEntry Choreo.
     *
     * @param RunKeeper_Nutrition_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_UpdateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Nutrition_UpdateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_UpdateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Nutrition_UpdateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_UpdateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_UpdateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Nutrition_UpdateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Nutrition_UpdateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this UpdateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the fields to be updated in the sleep entry. See documentation for formatting examples.
     * @return RunKeeper_Nutrition_UpdateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Nutrition_UpdateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the nutrition entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /nutrition/-12985593-1350950400000).
     * @return RunKeeper_Nutrition_UpdateEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_UpdateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry execution.
     * @param RunKeeper_Nutrition_UpdateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Nutrition_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_UpdateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Nutrition_UpdateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateEntry execution.
     *
     * @return RunKeeper_Nutrition_UpdateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Nutrition_UpdateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Nutrition_UpdateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_UpdateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Nutrition_UpdateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateEntry execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a past strength training activity.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_UpdateActivity extends Temboo_Choreography
{
    /**
     * Updates a past strength training activity.
     *
     * @param Temboo_Session $session The session that owns this UpdateActivity Choreo.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/StrengthTrainingActivities/UpdateActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateActivity Choreo.
     *
     * @param RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_StrengthTrainingActivities_UpdateActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Activity input for this UpdateActivity Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the activity to update. See documentation for formatting examples.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setActivity($value)
    {
        return $this->set('Activity', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this UpdateActivity Choreo.
     *
     * @param int $value (required, integer) This can be the individual id of the activity, or you can pass the full uri for the activity as returned from RetrieveActivities response (i.e. /strengthTrainingActivities/125927913).
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }
}


/**
 * Execution object for the UpdateActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_UpdateActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateActivity execution.
     * @param RunKeeper_StrengthTrainingActivities_UpdateActivity $choreo The choreography object for this execution.
     * @param RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_UpdateActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_StrengthTrainingActivities_UpdateActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateActivity execution.
     *
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_StrengthTrainingActivities_UpdateActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_UpdateActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_UpdateActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateActivity execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a weight entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_RetrieveEntry extends Temboo_Choreography
{
    /**
     * Retrieves a weight entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry Choreo.
     * @return RunKeeper_Weight_RetrieveEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Weight/RetrieveEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntry Choreo.
     *
     * @param RunKeeper_Weight_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_RetrieveEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Weight_RetrieveEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_RetrieveEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Weight_RetrieveEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_RetrieveEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_RetrieveEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Weight_RetrieveEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Weight_RetrieveEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Weight_RetrieveEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the weight entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /weight/24085455).
     * @return RunKeeper_Weight_RetrieveEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_RetrieveEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry execution.
     * @param RunKeeper_Weight_RetrieveEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Weight_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_RetrieveEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Weight_RetrieveEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntry execution.
     *
     * @return RunKeeper_Weight_RetrieveEntry_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Weight_RetrieveEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Weight_RetrieveEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_RetrieveEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Weight_RetrieveEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntry execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a sleep entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_RetrieveEntry extends Temboo_Choreography
{
    /**
     * Retrieves a sleep entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry Choreo.
     * @return RunKeeper_Sleep_RetrieveEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Sleep/RetrieveEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntry Choreo.
     *
     * @param RunKeeper_Sleep_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_RetrieveEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Sleep_RetrieveEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_RetrieveEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Sleep_RetrieveEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_RetrieveEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_RetrieveEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Sleep_RetrieveEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Sleep_RetrieveEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Sleep_RetrieveEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the sleep entry, or you can pass the full uri for the entry as returned from the RetrieveEntries response (i.e. /sleep/-12985593-1347998400000).
     * @return RunKeeper_Sleep_RetrieveEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_RetrieveEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry execution.
     * @param RunKeeper_Sleep_RetrieveEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Sleep_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_RetrieveEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Sleep_RetrieveEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntry execution.
     *
     * @return RunKeeper_Sleep_RetrieveEntry_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Sleep_RetrieveEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Sleep_RetrieveEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_RetrieveEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Sleep_RetrieveEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntry execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Records a newly-completed activity, or begins recording an activity still in progress.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RecordActivity extends Temboo_Choreography
{
    /**
     * Records a newly-completed activity, or begins recording an activity still in progress.
     *
     * @param Temboo_Session $session The session that owns this RecordActivity Choreo.
     * @return RunKeeper_FitnessActivities_RecordActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/FitnessActivities/RecordActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RecordActivity Choreo.
     *
     * @param RunKeeper_FitnessActivities_RecordActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_RecordActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_RecordActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_FitnessActivities_RecordActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RecordActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_RecordActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_FitnessActivities_RecordActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RecordActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RecordActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RecordActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_RecordActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RecordActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_FitnessActivities_RecordActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_FitnessActivities_RecordActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Activity input for this RecordActivity Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the activity to create. See documentation for formatting examples.
     * @return RunKeeper_FitnessActivities_RecordActivity_Inputs For method chaining.
     */
    public function setActivity($value)
    {
        return $this->set('Activity', $value);
    }

    /**
     * Set the value for the AccessToken input for this RecordActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_FitnessActivities_RecordActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the RecordActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RecordActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RecordActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this RecordActivity execution.
     * @param RunKeeper_FitnessActivities_RecordActivity $choreo The choreography object for this execution.
     * @param RunKeeper_FitnessActivities_RecordActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_RecordActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_RecordActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_FitnessActivities_RecordActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RecordActivity execution.
     *
     * @return RunKeeper_FitnessActivities_RecordActivity_Results New results object.
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
     * Wraps results in appropriate results class for this RecordActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_RecordActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_FitnessActivities_RecordActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RecordActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RecordActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RecordActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_RecordActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RecordActivity execution.
     *
     * @return bool (boolean) Contains the string "true" when an activity is created successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URI" output from this RecordActivity execution.
     *
     * @return string (string) The activity uri that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURI()
    {
        return $this->get('URI');
    }
}

/**
 * Retrieves a page from a user’s background activity feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RetrieveActivity extends Temboo_Choreography
{
    /**
     * Retrieves a page from a user’s background activity feed.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivity Choreo.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/BackgroundActivities/RetrieveActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveActivity Choreo.
     *
     * @param RunKeeper_BackgroundActivities_RetrieveActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_RetrieveActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_BackgroundActivities_RetrieveActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_BackgroundActivities_RetrieveActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RetrieveActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this RetrieveActivity Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the activity, or you can pass the full uri for the activity as returned from the RetrieveActivities Choreo (i.e. /backgroundActivities/-12985593-1347998400000).
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }
}


/**
 * Execution object for the RetrieveActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RetrieveActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivity execution.
     * @param RunKeeper_BackgroundActivities_RetrieveActivity $choreo The choreography object for this execution.
     * @param RunKeeper_BackgroundActivities_RetrieveActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_RetrieveActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_BackgroundActivities_RetrieveActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveActivity execution.
     *
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_BackgroundActivities_RetrieveActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RetrieveActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_RetrieveActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveActivity execution.
     *
     * @return string (json) The response from RunKeeper.
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
 * @subpackage RunKeeper
 */
class RunKeeper_OAuth_InitializeOAuth extends Temboo_Choreography
{
    /**
     * Generates an authorization URL that an application can use to complete the first step in the OAuth process.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth Choreo.
     * @return RunKeeper_OAuth_InitializeOAuth New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/OAuth/InitializeOAuth/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this InitializeOAuth Choreo.
     *
     * @param RunKeeper_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as RunKeeper_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_OAuth_InitializeOAuth_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_OAuth_InitializeOAuth_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_OAuth_InitializeOAuth_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_OAuth_InitializeOAuth_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the InitializeOAuth Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs New instance.
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
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the AppKeyName input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyName($value)
    {
        return $this->set('AppKeyName', $value);
    }

    /**
     * Set the value for the AppKeyValue input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) Deprecated (retained for backward compatibility only).
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setAppKeyValue($value)
    {
        return $this->set('AppKeyValue', $value);
    }

    /**
     * Set the value for the ClientID input for this InitializeOAuth Choreo.
     *
     * @param string $value (required, string) The Client ID provided by RunKeeper after registering your application.
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setClientID($value)
    {
        return $this->set('ClientID', $value);
    }

    /**
     * Set the value for the CustomCallbackID input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) A unique identifier that you can pass to eliminate the need to wait for a Temboo generated CallbackID. Callback identifiers may only contain numbers, letters, periods, and hyphens.
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs For method chaining.
     */
    public function setCustomCallbackID($value)
    {
        return $this->set('CustomCallbackID', $value);
    }

    /**
     * Set the value for the ForwardingURL input for this InitializeOAuth Choreo.
     *
     * @param string $value (optional, string) The URL that Temboo will redirect your users to after they grant your application access.
     * @return RunKeeper_OAuth_InitializeOAuth_Inputs For method chaining.
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
 * @subpackage RunKeeper
 */
class RunKeeper_OAuth_InitializeOAuth_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the InitializeOAuth Choreo.
     *
     * @param Temboo_Session $session The session that owns this InitializeOAuth execution.
     * @param RunKeeper_OAuth_InitializeOAuth $choreo The choreography object for this execution.
     * @param RunKeeper_OAuth_InitializeOAuth_Inputs|array $inputs (optional) Inputs as RunKeeper_OAuth_InitializeOAuth_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_OAuth_InitializeOAuth_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_OAuth_InitializeOAuth $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this InitializeOAuth execution.
     *
     * @return RunKeeper_OAuth_InitializeOAuth_Results New results object.
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
     * @return RunKeeper_OAuth_InitializeOAuth_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_OAuth_InitializeOAuth_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the InitializeOAuth Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_OAuth_InitializeOAuth_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the InitializeOAuth Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_OAuth_InitializeOAuth_Results New instance.
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
 * Returns a user's profile information including the user’s identity, geographical location, and fitness goals.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Profile_RetrieveProfile extends Temboo_Choreography
{
    /**
     * Returns a user's profile information including the user’s identity, geographical location, and fitness goals.
     *
     * @param Temboo_Session $session The session that owns this RetrieveProfile Choreo.
     * @return RunKeeper_Profile_RetrieveProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Profile/RetrieveProfile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveProfile Choreo.
     *
     * @param RunKeeper_Profile_RetrieveProfile_Inputs|array $inputs (optional) Inputs as RunKeeper_Profile_RetrieveProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Profile_RetrieveProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Profile_RetrieveProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Profile_RetrieveProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Profile_RetrieveProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveProfile Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Profile_RetrieveProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Profile_RetrieveProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Profile_RetrieveProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Profile_RetrieveProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveProfile Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Profile_RetrieveProfile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the RetrieveProfile Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Profile_RetrieveProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveProfile Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveProfile execution.
     * @param RunKeeper_Profile_RetrieveProfile $choreo The choreography object for this execution.
     * @param RunKeeper_Profile_RetrieveProfile_Inputs|array $inputs (optional) Inputs as RunKeeper_Profile_RetrieveProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Profile_RetrieveProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Profile_RetrieveProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveProfile execution.
     *
     * @return RunKeeper_Profile_RetrieveProfile_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Profile_RetrieveProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Profile_RetrieveProfile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveProfile Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Profile_RetrieveProfile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveProfile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Profile_RetrieveProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveProfile execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a body measurement entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_RetrieveEntry extends Temboo_Choreography
{
    /**
     * Retrieves a body measurement entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry Choreo.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/GeneralMeasurements/RetrieveEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntry Choreo.
     *
     * @param RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_GeneralMeasurements_RetrieveEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the body measurement entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /generalMeasurements/24220709).
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_RetrieveEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry execution.
     * @param RunKeeper_GeneralMeasurements_RetrieveEntry $choreo The choreography object for this execution.
     * @param RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_GeneralMeasurements_RetrieveEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntry execution.
     *
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_GeneralMeasurements_RetrieveEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_RetrieveEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_RetrieveEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntry execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the feed for a user's diabetes measurements.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_RetrieveEntries extends Temboo_Choreography
{
    /**
     * Returns the feed for a user's diabetes measurements.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries Choreo.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/DiabetesMeasurements/RetrieveEntries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntries Choreo.
     *
     * @param RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_DiabetesMeasurements_RetrieveEntries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntries Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PageSize input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The number entries to return per page. Defaults to 25.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The page of entries to return. This parameter is used in combination with the PageSize input to page through results. Defaults to 0 (the first page).
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_RetrieveEntries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntries Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries execution.
     * @param RunKeeper_DiabetesMeasurements_RetrieveEntries $choreo The choreography object for this execution.
     * @param RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_DiabetesMeasurements_RetrieveEntries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntries execution.
     *
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_DiabetesMeasurements_RetrieveEntries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_RetrieveEntries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Next" output from this RetrieveEntries execution.
     *
     * @return int (integer) The next page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNext()
    {
        return $this->get('Next');
    }
    /**
     * Retrieve the value for the "Previous" output from this RetrieveEntries execution.
     *
     * @return int (integer) The previous page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPrevious()
    {
        return $this->get('Previous');
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntries execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the feed for a user's strength training activities.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RetrieveActivities extends Temboo_Choreography
{
    /**
     * Returns the feed for a user's strength training activities.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivities Choreo.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/StrengthTrainingActivities/RetrieveActivities/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveActivities Choreo.
     *
     * @param RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_StrengthTrainingActivities_RetrieveActivities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveActivities Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveActivities Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveActivities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveActivities Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PageSize input for this RetrieveActivities Choreo.
     *
     * @param int $value (optional, integer) The number entries to return per page. Defaults to 25.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this RetrieveActivities Choreo.
     *
     * @param int $value (optional, integer) The page of entries to return. This parameter is used in combination with the PageSize input to page through results. Defaults to 0 (the first page).
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetrieveActivities Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RetrieveActivities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveActivities Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivities execution.
     * @param RunKeeper_StrengthTrainingActivities_RetrieveActivities $choreo The choreography object for this execution.
     * @param RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_RetrieveActivities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_StrengthTrainingActivities_RetrieveActivities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveActivities execution.
     *
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveActivities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_StrengthTrainingActivities_RetrieveActivities_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveActivities Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_RetrieveActivities_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveActivities Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_RetrieveActivities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Next" output from this RetrieveActivities execution.
     *
     * @return int (integer) The next page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNext()
    {
        return $this->get('Next');
    }
    /**
     * Retrieve the value for the "Previous" output from this RetrieveActivities execution.
     *
     * @return int (integer) The previous page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPrevious()
    {
        return $this->get('Previous');
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveActivities execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the feed for a user's weight entries.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_RetrieveEntries extends Temboo_Choreography
{
    /**
     * Returns the feed for a user's weight entries.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries Choreo.
     * @return RunKeeper_Weight_RetrieveEntries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Weight/RetrieveEntries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntries Choreo.
     *
     * @param RunKeeper_Weight_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_RetrieveEntries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Weight_RetrieveEntries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_RetrieveEntries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Weight_RetrieveEntries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_RetrieveEntries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_RetrieveEntries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Weight_RetrieveEntries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Weight_RetrieveEntries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntries Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Weight_RetrieveEntries_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PageSize input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The number entries to return per page. Defaults to 25.
     * @return RunKeeper_Weight_RetrieveEntries_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The page of entries to return. This parameter is used in combination with the PageSize input to page through results. Defaults to 0 (the first page).
     * @return RunKeeper_Weight_RetrieveEntries_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_RetrieveEntries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntries Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries execution.
     * @param RunKeeper_Weight_RetrieveEntries $choreo The choreography object for this execution.
     * @param RunKeeper_Weight_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_RetrieveEntries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Weight_RetrieveEntries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntries execution.
     *
     * @return RunKeeper_Weight_RetrieveEntries_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Weight_RetrieveEntries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Weight_RetrieveEntries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_RetrieveEntries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Weight_RetrieveEntries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Next" output from this RetrieveEntries execution.
     *
     * @return int (integer) The next page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNext()
    {
        return $this->get('Next');
    }
    /**
     * Retrieve the value for the "Previous" output from this RetrieveEntries execution.
     *
     * @return int (integer) The previous page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPrevious()
    {
        return $this->get('Previous');
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntries execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a weight entry in a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_UpdateEntry extends Temboo_Choreography
{
    /**
     * Updates a weight entry in a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry Choreo.
     * @return RunKeeper_Weight_UpdateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Weight/UpdateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateEntry Choreo.
     *
     * @param RunKeeper_Weight_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_UpdateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Weight_UpdateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_UpdateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Weight_UpdateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_UpdateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_UpdateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Weight_UpdateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Weight_UpdateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this UpdateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the fields to be updated in the weight entry. See documentation for formatting examples.
     * @return RunKeeper_Weight_UpdateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Weight_UpdateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the weight entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /weight/24085455).
     * @return RunKeeper_Weight_UpdateEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_UpdateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry execution.
     * @param RunKeeper_Weight_UpdateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Weight_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_UpdateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Weight_UpdateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateEntry execution.
     *
     * @return RunKeeper_Weight_UpdateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Weight_UpdateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Weight_UpdateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_UpdateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Weight_UpdateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateEntry execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a user’s settings.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Settings_UpdateSettings extends Temboo_Choreography
{
    /**
     * Updates a user’s settings.
     *
     * @param Temboo_Session $session The session that owns this UpdateSettings Choreo.
     * @return RunKeeper_Settings_UpdateSettings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Settings/UpdateSettings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateSettings Choreo.
     *
     * @param RunKeeper_Settings_UpdateSettings_Inputs|array $inputs (optional) Inputs as RunKeeper_Settings_UpdateSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Settings_UpdateSettings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Settings_UpdateSettings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Settings_UpdateSettings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Settings_UpdateSettings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateSettings Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Settings_UpdateSettings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Settings_UpdateSettings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateSettings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Settings_UpdateSettings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Settings_UpdateSettings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Settings input for this UpdateSettings Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the settings to update. See documentation for formatting examples.
     * @return RunKeeper_Settings_UpdateSettings_Inputs For method chaining.
     */
    public function setSettings($value)
    {
        return $this->set('Settings', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateSettings Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Settings_UpdateSettings_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the UpdateSettings Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Settings_UpdateSettings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateSettings Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateSettings execution.
     * @param RunKeeper_Settings_UpdateSettings $choreo The choreography object for this execution.
     * @param RunKeeper_Settings_UpdateSettings_Inputs|array $inputs (optional) Inputs as RunKeeper_Settings_UpdateSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Settings_UpdateSettings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Settings_UpdateSettings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateSettings execution.
     *
     * @return RunKeeper_Settings_UpdateSettings_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateSettings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Settings_UpdateSettings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Settings_UpdateSettings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateSettings Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Settings_UpdateSettings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateSettings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Settings_UpdateSettings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateSettings execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Records a newly-completed background activity, or begins recording an activity still in progress.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RecordActivity extends Temboo_Choreography
{
    /**
     * Records a newly-completed background activity, or begins recording an activity still in progress.
     *
     * @param Temboo_Session $session The session that owns this RecordActivity Choreo.
     * @return RunKeeper_BackgroundActivities_RecordActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/BackgroundActivities/RecordActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RecordActivity Choreo.
     *
     * @param RunKeeper_BackgroundActivities_RecordActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_RecordActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_BackgroundActivities_RecordActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RecordActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_BackgroundActivities_RecordActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RecordActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RecordActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RecordActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RecordActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Activity input for this RecordActivity Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the activity to create. See documentation for formatting examples.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Inputs For method chaining.
     */
    public function setActivity($value)
    {
        return $this->set('Activity', $value);
    }

    /**
     * Set the value for the AccessToken input for this RecordActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the RecordActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RecordActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RecordActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this RecordActivity execution.
     * @param RunKeeper_BackgroundActivities_RecordActivity $choreo The choreography object for this execution.
     * @param RunKeeper_BackgroundActivities_RecordActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_RecordActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_BackgroundActivities_RecordActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RecordActivity execution.
     *
     * @return RunKeeper_BackgroundActivities_RecordActivity_Results New results object.
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
     * Wraps results in appropriate results class for this RecordActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_BackgroundActivities_RecordActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RecordActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_RecordActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RecordActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_RecordActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RecordActivity execution.
     *
     * @return bool (boolean) Contains the string 'true" when a new activity is created successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URI" output from this RecordActivity execution.
     *
     * @return string (string) The activity uri that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURI()
    {
        return $this->get('URI');
    }
}

/**
 * Adds a weight entry to a user's feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_CreateEntry extends Temboo_Choreography
{
    /**
     * Adds a weight entry to a user's feed.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry Choreo.
     * @return RunKeeper_Weight_CreateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Weight/CreateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateEntry Choreo.
     *
     * @param RunKeeper_Weight_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_CreateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Weight_CreateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_CreateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Weight_CreateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_CreateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_CreateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Weight_CreateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Weight_CreateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this CreateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the entry to create. See documentation for formatting examples.
     * @return RunKeeper_Weight_CreateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Weight_CreateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_CreateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry execution.
     * @param RunKeeper_Weight_CreateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Weight_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_CreateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Weight_CreateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateEntry execution.
     *
     * @return RunKeeper_Weight_CreateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this CreateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Weight_CreateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Weight_CreateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_CreateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Weight_CreateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateEntry execution.
     *
     * @return bool (boolean) Contains the string 'true" when a new entry is created successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URI" output from this CreateEntry execution.
     *
     * @return string (string) The entry uri that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURI()
    {
        return $this->get('URI');
    }
}

/**
 * Returns a feed of a user's fitness activities.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RetrieveActivites extends Temboo_Choreography
{
    /**
     * Returns a feed of a user's fitness activities.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivites Choreo.
     * @return RunKeeper_FitnessActivities_RetrieveActivites New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/FitnessActivities/RetrieveActivites/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveActivites Choreo.
     *
     * @param RunKeeper_FitnessActivities_RetrieveActivites_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_RetrieveActivites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_FitnessActivities_RetrieveActivites_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveActivites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_FitnessActivities_RetrieveActivites_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveActivites Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RetrieveActivites_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveActivites Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveActivites input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveActivites Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PageSize input for this RetrieveActivites Choreo.
     *
     * @param int $value (optional, integer) The number entries to return per page. Defaults to 25.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this RetrieveActivites Choreo.
     *
     * @param int $value (optional, integer) The page of entries to return. This parameter is used in combination with the PageSize input to page through results. Defaults to 0 (the first page).
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetrieveActivites Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RetrieveActivites_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveActivites Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivites execution.
     * @param RunKeeper_FitnessActivities_RetrieveActivites $choreo The choreography object for this execution.
     * @param RunKeeper_FitnessActivities_RetrieveActivites_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_RetrieveActivites_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_FitnessActivities_RetrieveActivites $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveActivites execution.
     *
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveActivites execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_FitnessActivities_RetrieveActivites_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveActivites Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RetrieveActivites_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveActivites Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_RetrieveActivites_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Next" output from this RetrieveActivites execution.
     *
     * @return int (integer) The next page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNext()
    {
        return $this->get('Next');
    }
    /**
     * Retrieve the value for the "Previous" output from this RetrieveActivites execution.
     *
     * @return int (integer) The previous page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPrevious()
    {
        return $this->get('Previous');
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveActivites execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Update's a user's profile.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Profile_UpdateProfile extends Temboo_Choreography
{
    /**
     * Update's a user's profile.
     *
     * @param Temboo_Session $session The session that owns this UpdateProfile Choreo.
     * @return RunKeeper_Profile_UpdateProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Profile/UpdateProfile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateProfile Choreo.
     *
     * @param RunKeeper_Profile_UpdateProfile_Inputs|array $inputs (optional) Inputs as RunKeeper_Profile_UpdateProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Profile_UpdateProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Profile_UpdateProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Profile_UpdateProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Profile_UpdateProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateProfile Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Profile_UpdateProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateProfile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Profile_UpdateProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Profile_UpdateProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Profile_UpdateProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Profile input for this UpdateProfile Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the profile fields to update. See documentation for formatting examples.
     * @return RunKeeper_Profile_UpdateProfile_Inputs For method chaining.
     */
    public function setProfile($value)
    {
        return $this->set('Profile', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateProfile Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Profile_UpdateProfile_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the UpdateProfile Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Profile_UpdateProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateProfile Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateProfile execution.
     * @param RunKeeper_Profile_UpdateProfile $choreo The choreography object for this execution.
     * @param RunKeeper_Profile_UpdateProfile_Inputs|array $inputs (optional) Inputs as RunKeeper_Profile_UpdateProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Profile_UpdateProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Profile_UpdateProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateProfile execution.
     *
     * @return RunKeeper_Profile_UpdateProfile_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Profile_UpdateProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Profile_UpdateProfile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateProfile Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Profile_UpdateProfile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateProfile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Profile_UpdateProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateProfile execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a user’s settings including a user's sharing and display preferences.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Settings_RetrieveSettings extends Temboo_Choreography
{
    /**
     * Retrieves a user’s settings including a user's sharing and display preferences.
     *
     * @param Temboo_Session $session The session that owns this RetrieveSettings Choreo.
     * @return RunKeeper_Settings_RetrieveSettings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Settings/RetrieveSettings/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveSettings Choreo.
     *
     * @param RunKeeper_Settings_RetrieveSettings_Inputs|array $inputs (optional) Inputs as RunKeeper_Settings_RetrieveSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Settings_RetrieveSettings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Settings_RetrieveSettings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Settings_RetrieveSettings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Settings_RetrieveSettings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveSettings Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Settings_RetrieveSettings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveSettings Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Settings_RetrieveSettings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveSettings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Settings_RetrieveSettings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Settings_RetrieveSettings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveSettings Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Settings_RetrieveSettings_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the RetrieveSettings Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Settings_RetrieveSettings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveSettings Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveSettings execution.
     * @param RunKeeper_Settings_RetrieveSettings $choreo The choreography object for this execution.
     * @param RunKeeper_Settings_RetrieveSettings_Inputs|array $inputs (optional) Inputs as RunKeeper_Settings_RetrieveSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Settings_RetrieveSettings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Settings_RetrieveSettings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveSettings execution.
     *
     * @return RunKeeper_Settings_RetrieveSettings_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveSettings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Settings_RetrieveSettings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Settings_RetrieveSettings_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveSettings Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Settings_RetrieveSettings_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveSettings Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Settings_RetrieveSettings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveSettings execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes an individual background activity from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_DeleteActivity extends Temboo_Choreography
{
    /**
     * Removes an individual background activity from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivity Choreo.
     * @return RunKeeper_BackgroundActivities_DeleteActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/BackgroundActivities/DeleteActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteActivity Choreo.
     *
     * @param RunKeeper_BackgroundActivities_DeleteActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_DeleteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_BackgroundActivities_DeleteActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_BackgroundActivities_DeleteActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_DeleteActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this DeleteActivity Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the activity, or you can pass the full uri for the activity as returned from the RetrieveActivities Choreo (i.e. /backgroundActivities/-12985593-1347998400000).
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }
}


/**
 * Execution object for the DeleteActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_DeleteActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivity execution.
     * @param RunKeeper_BackgroundActivities_DeleteActivity $choreo The choreography object for this execution.
     * @param RunKeeper_BackgroundActivities_DeleteActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_DeleteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_BackgroundActivities_DeleteActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteActivity execution.
     *
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_BackgroundActivities_DeleteActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_DeleteActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_DeleteActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteActivity execution.
     *
     * @return bool (boolean) Contains the string "true" when activities are successfully deleted.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a body measurement entry to a user's feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_CreateEntry extends Temboo_Choreography
{
    /**
     * Adds a body measurement entry to a user's feed.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry Choreo.
     * @return RunKeeper_GeneralMeasurements_CreateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/GeneralMeasurements/CreateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateEntry Choreo.
     *
     * @param RunKeeper_GeneralMeasurements_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_GeneralMeasurements_CreateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_GeneralMeasurements_CreateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_CreateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this CreateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the body measurement entry to create. See documentation for formatting examples.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_CreateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry execution.
     * @param RunKeeper_GeneralMeasurements_CreateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_GeneralMeasurements_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_GeneralMeasurements_CreateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateEntry execution.
     *
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this CreateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_GeneralMeasurements_CreateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_CreateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_CreateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateEntry execution.
     *
     * @return bool (boolean) Contains the string 'true" when a new entry is created successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URI" output from this CreateEntry execution.
     *
     * @return string (string) The entry uri that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURI()
    {
        return $this->get('URI');
    }
}

/**
 * Removes an individual sleep entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_DeleteEntry extends Temboo_Choreography
{
    /**
     * Removes an individual sleep entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry Choreo.
     * @return RunKeeper_Sleep_DeleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Sleep/DeleteEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteEntry Choreo.
     *
     * @param RunKeeper_Sleep_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_DeleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Sleep_DeleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_DeleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Sleep_DeleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_DeleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_DeleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Sleep_DeleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Sleep_DeleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Sleep_DeleteEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the sleep entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /sleep/-12985593-1351022400000).
     * @return RunKeeper_Sleep_DeleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_DeleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry execution.
     * @param RunKeeper_Sleep_DeleteEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Sleep_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_DeleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Sleep_DeleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteEntry execution.
     *
     * @return RunKeeper_Sleep_DeleteEntry_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Sleep_DeleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Sleep_DeleteEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_DeleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Sleep_DeleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteEntry execution.
     *
     * @return bool (boolean) Contains the string "true" when an entry is deleted successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the feed for a user's sleep entries.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_RetrieveEntries extends Temboo_Choreography
{
    /**
     * Returns the feed for a user's sleep entries.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries Choreo.
     * @return RunKeeper_Sleep_RetrieveEntries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Sleep/RetrieveEntries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntries Choreo.
     *
     * @param RunKeeper_Sleep_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_RetrieveEntries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Sleep_RetrieveEntries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_RetrieveEntries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Sleep_RetrieveEntries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_RetrieveEntries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_RetrieveEntries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Sleep_RetrieveEntries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Sleep_RetrieveEntries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntries Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Sleep_RetrieveEntries_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PageSize input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The number entries to return per page. Defaults to 25.
     * @return RunKeeper_Sleep_RetrieveEntries_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The page of entries to return. This parameter is used in combination with the PageSize input to page through results. Defaults to 0 (the first page).
     * @return RunKeeper_Sleep_RetrieveEntries_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_RetrieveEntries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntries Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries execution.
     * @param RunKeeper_Sleep_RetrieveEntries $choreo The choreography object for this execution.
     * @param RunKeeper_Sleep_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_RetrieveEntries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Sleep_RetrieveEntries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntries execution.
     *
     * @return RunKeeper_Sleep_RetrieveEntries_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Sleep_RetrieveEntries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Sleep_RetrieveEntries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_RetrieveEntries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Sleep_RetrieveEntries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Next" output from this RetrieveEntries execution.
     *
     * @return int (integer) The next page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNext()
    {
        return $this->get('Next');
    }
    /**
     * Retrieve the value for the "Previous" output from this RetrieveEntries execution.
     *
     * @return int (integer) The previous page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPrevious()
    {
        return $this->get('Previous');
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntries execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes an individual strength training activity from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_DeleteActivity extends Temboo_Choreography
{
    /**
     * Removes an individual strength training activity from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivity Choreo.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/StrengthTrainingActivities/DeleteActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteActivity Choreo.
     *
     * @param RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_StrengthTrainingActivities_DeleteActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this DeleteActivity Choreo.
     *
     * @param int $value (required, integer) This can be the individual id of the activity, or you can pass the full uri for the activity as returned from RetrieveActivities response (i.e. /strengthTrainingActivities/125927913).
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }
}


/**
 * Execution object for the DeleteActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_DeleteActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivity execution.
     * @param RunKeeper_StrengthTrainingActivities_DeleteActivity $choreo The choreography object for this execution.
     * @param RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_StrengthTrainingActivities_DeleteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_StrengthTrainingActivities_DeleteActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteActivity execution.
     *
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_StrengthTrainingActivities_DeleteActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_StrengthTrainingActivities_DeleteActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_StrengthTrainingActivities_DeleteActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteActivity execution.
     *
     * @return bool (boolean) Contains the string "true" when an activity is deleted successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a page of a user’s activity history or information for a past activity.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RetrieveActivity extends Temboo_Choreography
{
    /**
     * Retrieves a page of a user’s activity history or information for a past activity.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivity Choreo.
     * @return RunKeeper_FitnessActivities_RetrieveActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/FitnessActivities/RetrieveActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveActivity Choreo.
     *
     * @param RunKeeper_FitnessActivities_RetrieveActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_RetrieveActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_FitnessActivities_RetrieveActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_FitnessActivities_RetrieveActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RetrieveActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this RetrieveActivity Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the activity, or you can pass the full uri for the activity as returned from the RetrieveActivites Choreo (i.e. /fitnessActivities/125927913).
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }
}


/**
 * Execution object for the RetrieveActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RetrieveActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveActivity execution.
     * @param RunKeeper_FitnessActivities_RetrieveActivity $choreo The choreography object for this execution.
     * @param RunKeeper_FitnessActivities_RetrieveActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_RetrieveActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_FitnessActivities_RetrieveActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveActivity execution.
     *
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_FitnessActivities_RetrieveActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_RetrieveActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_RetrieveActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveActivity execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes an individual nutrition entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_DeleteEntry extends Temboo_Choreography
{
    /**
     * Removes an individual nutrition entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry Choreo.
     * @return RunKeeper_Nutrition_DeleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Nutrition/DeleteEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteEntry Choreo.
     *
     * @param RunKeeper_Nutrition_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_DeleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Nutrition_DeleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_DeleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Nutrition_DeleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_DeleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_DeleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Nutrition_DeleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Nutrition_DeleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Nutrition_DeleteEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the nutrition entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /nutrition/-12985593-1350864000000).
     * @return RunKeeper_Nutrition_DeleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_DeleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry execution.
     * @param RunKeeper_Nutrition_DeleteEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Nutrition_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_DeleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Nutrition_DeleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteEntry execution.
     *
     * @return RunKeeper_Nutrition_DeleteEntry_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Nutrition_DeleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Nutrition_DeleteEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_DeleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Nutrition_DeleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteEntry execution.
     *
     * @return bool (boolean) Contains the string "true" when an entry is deleted successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a diabetes measurement entry to a user's feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_CreateEntry extends Temboo_Choreography
{
    /**
     * Adds a diabetes measurement entry to a user's feed.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry Choreo.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/DiabetesMeasurements/CreateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateEntry Choreo.
     *
     * @param RunKeeper_DiabetesMeasurements_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_DiabetesMeasurements_CreateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_DiabetesMeasurements_CreateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_CreateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this CreateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the diabetes measurement entry to create. See documentation for formatting examples.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this CreateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }
}


/**
 * Execution object for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_CreateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateEntry execution.
     * @param RunKeeper_DiabetesMeasurements_CreateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_DiabetesMeasurements_CreateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_CreateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_DiabetesMeasurements_CreateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateEntry execution.
     *
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this CreateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_DiabetesMeasurements_CreateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_CreateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_CreateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateEntry execution.
     *
     * @return bool (boolean) Contains the string 'true" when a new entry is created successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "URI" output from this CreateEntry execution.
     *
     * @return string (string) The entry uri that was created.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getURI()
    {
        return $this->get('URI');
    }
}

/**
 * Updates a background activity in a user's feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_UpdateActivity extends Temboo_Choreography
{
    /**
     * Updates a background activity in a user's feed.
     *
     * @param Temboo_Session $session The session that owns this UpdateActivity Choreo.
     * @return RunKeeper_BackgroundActivities_UpdateActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/BackgroundActivities/UpdateActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateActivity Choreo.
     *
     * @param RunKeeper_BackgroundActivities_UpdateActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_UpdateActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_BackgroundActivities_UpdateActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_BackgroundActivities_UpdateActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_UpdateActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Activity input for this UpdateActivity Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the activity to update. See documentation for formatting examples.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setActivity($value)
    {
        return $this->set('Activity', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this UpdateActivity Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the activity, or you can pass the full uri for the activity as returned from the RetrieveActivities Choreo (i.e. /backgroundActivities/-12985593-1351022400000).
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }
}


/**
 * Execution object for the UpdateActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_UpdateActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateActivity execution.
     * @param RunKeeper_BackgroundActivities_UpdateActivity $choreo The choreography object for this execution.
     * @param RunKeeper_BackgroundActivities_UpdateActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_BackgroundActivities_UpdateActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_BackgroundActivities_UpdateActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateActivity execution.
     *
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_BackgroundActivities_UpdateActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_BackgroundActivities_UpdateActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_BackgroundActivities_UpdateActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateActivity execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes an individual activity from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_DeleteActivity extends Temboo_Choreography
{
    /**
     * Removes an individual activity from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivity Choreo.
     * @return RunKeeper_FitnessActivities_DeleteActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/FitnessActivities/DeleteActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteActivity Choreo.
     *
     * @param RunKeeper_FitnessActivities_DeleteActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_DeleteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_DeleteActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_FitnessActivities_DeleteActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_DeleteActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_FitnessActivities_DeleteActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_DeleteActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_DeleteActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_FitnessActivities_DeleteActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_FitnessActivities_DeleteActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_FitnessActivities_DeleteActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this DeleteActivity Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the activity, or you can pass the full uri for the activity as returned from the RetrieveActivites Choreo (i.e. /fitnessActivities/125927913).
     * @return RunKeeper_FitnessActivities_DeleteActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }
}


/**
 * Execution object for the DeleteActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_DeleteActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteActivity execution.
     * @param RunKeeper_FitnessActivities_DeleteActivity $choreo The choreography object for this execution.
     * @param RunKeeper_FitnessActivities_DeleteActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_DeleteActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_DeleteActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_FitnessActivities_DeleteActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteActivity execution.
     *
     * @return RunKeeper_FitnessActivities_DeleteActivity_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_DeleteActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_FitnessActivities_DeleteActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_DeleteActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_DeleteActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteActivity execution.
     *
     * @return bool (boolean) Contains the string "true" when an activity is deleted successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes an individual body measurement entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_DeleteEntry extends Temboo_Choreography
{
    /**
     * Removes an individual body measurement entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry Choreo.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/GeneralMeasurements/DeleteEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteEntry Choreo.
     *
     * @param RunKeeper_GeneralMeasurements_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_GeneralMeasurements_DeleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_GeneralMeasurements_DeleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_DeleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the body measurement entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /generalMeasurements/-12985593-1351036800000).
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_DeleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry execution.
     * @param RunKeeper_GeneralMeasurements_DeleteEntry $choreo The choreography object for this execution.
     * @param RunKeeper_GeneralMeasurements_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_GeneralMeasurements_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_GeneralMeasurements_DeleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteEntry execution.
     *
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_GeneralMeasurements_DeleteEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_GeneralMeasurements_DeleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_GeneralMeasurements_DeleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteEntry execution.
     *
     * @return bool (boolean) Contains the string "true" when an entry is deleted successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Removes an individual weight entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_DeleteEntry extends Temboo_Choreography
{
    /**
     * Removes an individual weight entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry Choreo.
     * @return RunKeeper_Weight_DeleteEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Weight/DeleteEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteEntry Choreo.
     *
     * @param RunKeeper_Weight_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_DeleteEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Weight_DeleteEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_DeleteEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Weight_DeleteEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_DeleteEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Weight_DeleteEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Weight_DeleteEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Weight_DeleteEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Weight_DeleteEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this DeleteEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the weight entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /weight/20775350).
     * @return RunKeeper_Weight_DeleteEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_DeleteEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteEntry execution.
     * @param RunKeeper_Weight_DeleteEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Weight_DeleteEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Weight_DeleteEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Weight_DeleteEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Weight_DeleteEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteEntry execution.
     *
     * @return RunKeeper_Weight_DeleteEntry_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Weight_DeleteEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Weight_DeleteEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Weight_DeleteEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Weight_DeleteEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteEntry execution.
     *
     * @return bool (boolean) Contains the string "true" when an entry is deleted successfully.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a diabetes measurement entry in a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_UpdateEntry extends Temboo_Choreography
{
    /**
     * Updates a diabetes measurement entry in a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry Choreo.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/DiabetesMeasurements/UpdateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateEntry Choreo.
     *
     * @param RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_DiabetesMeasurements_UpdateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this UpdateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the fields to be updated in the diabetes entry. See documentation for formatting examples.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the diabetes entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /diabetes/24085455).
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_UpdateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry execution.
     * @param RunKeeper_DiabetesMeasurements_UpdateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_DiabetesMeasurements_UpdateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateEntry execution.
     *
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_DiabetesMeasurements_UpdateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_UpdateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_UpdateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateEntry execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a past activity.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_UpdateActivity extends Temboo_Choreography
{
    /**
     * Updates a past activity.
     *
     * @param Temboo_Session $session The session that owns this UpdateActivity Choreo.
     * @return RunKeeper_FitnessActivities_UpdateActivity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/FitnessActivities/UpdateActivity/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateActivity Choreo.
     *
     * @param RunKeeper_FitnessActivities_UpdateActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_UpdateActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_FitnessActivities_UpdateActivity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_FitnessActivities_UpdateActivity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_UpdateActivity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateActivity Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateActivity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Activity input for this UpdateActivity Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the activity to update. See documentation for formatting examples.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setActivity($value)
    {
        return $this->set('Activity', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateActivity Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the ActivityID input for this UpdateActivity Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the activity, or you can pass the full uri for the activity as returned from the RetrieveActivites Choreo (i.e. /fitnessActivities/125927913).
     * @return RunKeeper_FitnessActivities_UpdateActivity_Inputs For method chaining.
     */
    public function setActivityID($value)
    {
        return $this->set('ActivityID', $value);
    }
}


/**
 * Execution object for the UpdateActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_UpdateActivity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateActivity Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateActivity execution.
     * @param RunKeeper_FitnessActivities_UpdateActivity $choreo The choreography object for this execution.
     * @param RunKeeper_FitnessActivities_UpdateActivity_Inputs|array $inputs (optional) Inputs as RunKeeper_FitnessActivities_UpdateActivity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_FitnessActivities_UpdateActivity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateActivity execution.
     *
     * @return RunKeeper_FitnessActivities_UpdateActivity_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateActivity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_FitnessActivities_UpdateActivity_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateActivity Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_FitnessActivities_UpdateActivity_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateActivity Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_FitnessActivities_UpdateActivity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateActivity execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a diabetes measurement entry from a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_RetrieveEntry extends Temboo_Choreography
{
    /**
     * Retrieves a diabetes measurement entry from a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry Choreo.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/DiabetesMeasurements/RetrieveEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntry Choreo.
     *
     * @param RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_DiabetesMeasurements_RetrieveEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this RetrieveEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the diabetes measurement entry, or you can pass the full uri for the entry as returned from the RetrieveEntries Choreo (i.e. /diabetes/24220709).
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_RetrieveEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntry execution.
     * @param RunKeeper_DiabetesMeasurements_RetrieveEntry $choreo The choreography object for this execution.
     * @param RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_DiabetesMeasurements_RetrieveEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_DiabetesMeasurements_RetrieveEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntry execution.
     *
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_DiabetesMeasurements_RetrieveEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_DiabetesMeasurements_RetrieveEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_DiabetesMeasurements_RetrieveEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntry execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns the feed for a user's nutrition entries.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_RetrieveEntries extends Temboo_Choreography
{
    /**
     * Returns the feed for a user's nutrition entries.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries Choreo.
     * @return RunKeeper_Nutrition_RetrieveEntries New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Nutrition/RetrieveEntries/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveEntries Choreo.
     *
     * @param RunKeeper_Nutrition_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_RetrieveEntries_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Nutrition_RetrieveEntries_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_RetrieveEntries_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Nutrition_RetrieveEntries_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_RetrieveEntries_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveEntries Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Nutrition_RetrieveEntries_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveEntries input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Nutrition_RetrieveEntries_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Nutrition_RetrieveEntries_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccessToken input for this RetrieveEntries Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Nutrition_RetrieveEntries_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the PageSize input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The number entries to return per page. Defaults to 25.
     * @return RunKeeper_Nutrition_RetrieveEntries_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Page input for this RetrieveEntries Choreo.
     *
     * @param int $value (optional, integer) The page of entries to return. This parameter is used in combination with the PageSize input to page through results. Defaults to 0 (the first page).
     * @return RunKeeper_Nutrition_RetrieveEntries_Inputs For method chaining.
     */
    public function setPage($value)
    {
        return $this->set('Page', $value);
    }
}


/**
 * Execution object for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_RetrieveEntries_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveEntries Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveEntries execution.
     * @param RunKeeper_Nutrition_RetrieveEntries $choreo The choreography object for this execution.
     * @param RunKeeper_Nutrition_RetrieveEntries_Inputs|array $inputs (optional) Inputs as RunKeeper_Nutrition_RetrieveEntries_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Nutrition_RetrieveEntries_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Nutrition_RetrieveEntries $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveEntries execution.
     *
     * @return RunKeeper_Nutrition_RetrieveEntries_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveEntries execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Nutrition_RetrieveEntries_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Nutrition_RetrieveEntries_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveEntries Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Nutrition_RetrieveEntries_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveEntries Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Nutrition_RetrieveEntries_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Next" output from this RetrieveEntries execution.
     *
     * @return int (integer) The next page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getNext()
    {
        return $this->get('Next');
    }
    /**
     * Retrieve the value for the "Previous" output from this RetrieveEntries execution.
     *
     * @return int (integer) The previous page of entries that is available. This value can be passed into the Page input while paging through entries.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getPrevious()
    {
        return $this->get('Previous');
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveEntries execution.
     *
     * @return string (json) The response from RunKeeper.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates a sleep entry in a user’s feed.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_UpdateEntry extends Temboo_Choreography
{
    /**
     * Updates a sleep entry in a user’s feed.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry Choreo.
     * @return RunKeeper_Sleep_UpdateEntry New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RunKeeper/Sleep/UpdateEntry/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateEntry Choreo.
     *
     * @param RunKeeper_Sleep_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_UpdateEntry_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RunKeeper_Sleep_UpdateEntry_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_UpdateEntry_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RunKeeper_Sleep_UpdateEntry_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_UpdateEntry_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateEntry Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RunKeeper_Sleep_UpdateEntry_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateEntry input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RunKeeper_Sleep_UpdateEntry_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return RunKeeper_Sleep_UpdateEntry_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Entry input for this UpdateEntry Choreo.
     *
     * @param string $value (required, json) A JSON string containing the key/value pairs for the fields to be updated in the sleep entry. See documentation for formatting examples.
     * @return RunKeeper_Sleep_UpdateEntry_Inputs For method chaining.
     */
    public function setEntry($value)
    {
        return $this->set('Entry', $value);
    }

    /**
     * Set the value for the AccessToken input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) The Access Token retrieved after the final step in the OAuth2 process.
     * @return RunKeeper_Sleep_UpdateEntry_Inputs For method chaining.
     */
    public function setAccessToken($value)
    {
        return $this->set('AccessToken', $value);
    }

    /**
     * Set the value for the EntryID input for this UpdateEntry Choreo.
     *
     * @param string $value (required, string) This can be the individual id of the sleep entry, or you can pass the full uri for the entry as returned from the RetrieveEntries response (i.e. /sleep/-12985593-1347998400000).
     * @return RunKeeper_Sleep_UpdateEntry_Inputs For method chaining.
     */
    public function setEntryID($value)
    {
        return $this->set('EntryID', $value);
    }
}


/**
 * Execution object for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_UpdateEntry_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateEntry Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateEntry execution.
     * @param RunKeeper_Sleep_UpdateEntry $choreo The choreography object for this execution.
     * @param RunKeeper_Sleep_UpdateEntry_Inputs|array $inputs (optional) Inputs as RunKeeper_Sleep_UpdateEntry_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RunKeeper_Sleep_UpdateEntry_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RunKeeper_Sleep_UpdateEntry $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateEntry execution.
     *
     * @return RunKeeper_Sleep_UpdateEntry_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateEntry execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RunKeeper_Sleep_UpdateEntry_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RunKeeper_Sleep_UpdateEntry_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateEntry Choreo.
 *
 * @package Temboo
 * @subpackage RunKeeper
 */
class RunKeeper_Sleep_UpdateEntry_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateEntry Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RunKeeper_Sleep_UpdateEntry_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateEntry execution.
     *
     * @return string (json) The response from RunKeeper.
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
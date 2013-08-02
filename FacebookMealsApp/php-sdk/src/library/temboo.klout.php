<?php

/**
 * Temboo PHP SDK Klout classes
 *
 * Execute Choreographies from the Temboo Klout bundle.
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
 * @subpackage Klout
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves a user's Klout Score and deltas.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Score extends Temboo_Choreography
{
    /**
     * Retrieves a user's Klout Score and deltas.
     *
     * @param Temboo_Session $session The session that owns this Score Choreo.
     * @return Klout_User_Score New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/User/Score/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Score Choreo.
     *
     * @param Klout_User_Score_Inputs|array $inputs (optional) Inputs as Klout_User_Score_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_User_Score_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_User_Score_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Score Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_User_Score_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_User_Score_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Score Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Score_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Score Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_User_Score_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Score input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_User_Score_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Klout_User_Score_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Score Choreo.
     *
     * @param string $value (required, string) The API Key provided by Klout.
     * @return Klout_User_Score_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the KloutID input for this Score Choreo.
     *
     * @param string $value (required, string) The id for a Klout user to retrieve a score for.
     * @return Klout_User_Score_Inputs For method chaining.
     */
    public function setKloutID($value)
    {
        return $this->set('KloutID', $value);
    }
}


/**
 * Execution object for the Score Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Score_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Score Choreo.
     *
     * @param Temboo_Session $session The session that owns this Score execution.
     * @param Klout_User_Score $choreo The choreography object for this execution.
     * @param Klout_User_Score_Inputs|array $inputs (optional) Inputs as Klout_User_Score_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_User_Score_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_User_Score $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Score execution.
     *
     * @return Klout_User_Score_Results New results object.
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
     * Wraps results in appropriate results class for this Score execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_User_Score_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_User_Score_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Score Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Score_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Score Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_User_Score_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Score execution.
     *
     * @return string (json) The response from Klout.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a user's influencers and influencees.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Influence extends Temboo_Choreography
{
    /**
     * Retrieves a user's influencers and influencees.
     *
     * @param Temboo_Session $session The session that owns this Influence Choreo.
     * @return Klout_User_Influence New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/User/Influence/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Influence Choreo.
     *
     * @param Klout_User_Influence_Inputs|array $inputs (optional) Inputs as Klout_User_Influence_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_User_Influence_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_User_Influence_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Influence Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_User_Influence_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_User_Influence_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Influence Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Influence_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Influence Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_User_Influence_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Influence input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_User_Influence_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Klout_User_Influence_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Influence Choreo.
     *
     * @param string $value (required, string) The API Key provided by Klout.
     * @return Klout_User_Influence_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the KloutID input for this Influence Choreo.
     *
     * @param string $value (required, string) The id for a Klout user to retrieve influencers and influencees for.
     * @return Klout_User_Influence_Inputs For method chaining.
     */
    public function setKloutID($value)
    {
        return $this->set('KloutID', $value);
    }
}


/**
 * Execution object for the Influence Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Influence_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Influence Choreo.
     *
     * @param Temboo_Session $session The session that owns this Influence execution.
     * @param Klout_User_Influence $choreo The choreography object for this execution.
     * @param Klout_User_Influence_Inputs|array $inputs (optional) Inputs as Klout_User_Influence_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_User_Influence_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_User_Influence $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Influence execution.
     *
     * @return Klout_User_Influence_Results New results object.
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
     * Wraps results in appropriate results class for this Influence execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_User_Influence_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_User_Influence_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Influence Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Influence_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Influence Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_User_Influence_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Influence execution.
     *
     * @return string (json) The response from Klout.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Performs a lookup for a user's identity using a Twitter screen name.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByTwitterScreenName extends Temboo_Choreography
{
    /**
     * Performs a lookup for a user's identity using a Twitter screen name.
     *
     * @param Temboo_Session $session The session that owns this ByTwitterScreenName Choreo.
     * @return Klout_Identity_ByTwitterScreenName New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/Identity/ByTwitterScreenName/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByTwitterScreenName Choreo.
     *
     * @param Klout_Identity_ByTwitterScreenName_Inputs|array $inputs (optional) Inputs as Klout_Identity_ByTwitterScreenName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_Identity_ByTwitterScreenName_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_Identity_ByTwitterScreenName_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByTwitterScreenName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_Identity_ByTwitterScreenName_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_Identity_ByTwitterScreenName_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByTwitterScreenName Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByTwitterScreenName_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByTwitterScreenName Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_Identity_ByTwitterScreenName_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByTwitterScreenName input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_Identity_ByTwitterScreenName_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Klout_Identity_ByTwitterScreenName_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ByTwitterScreenName Choreo.
     *
     * @param string $value (required, string) The API Key provided by Klout.
     * @return Klout_Identity_ByTwitterScreenName_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ScreenName input for this ByTwitterScreenName Choreo.
     *
     * @param string $value (required, string) The screen name for a Twitter user.
     * @return Klout_Identity_ByTwitterScreenName_Inputs For method chaining.
     */
    public function setScreenName($value)
    {
        return $this->set('ScreenName', $value);
    }
}


/**
 * Execution object for the ByTwitterScreenName Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByTwitterScreenName_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByTwitterScreenName Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByTwitterScreenName execution.
     * @param Klout_Identity_ByTwitterScreenName $choreo The choreography object for this execution.
     * @param Klout_Identity_ByTwitterScreenName_Inputs|array $inputs (optional) Inputs as Klout_Identity_ByTwitterScreenName_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_Identity_ByTwitterScreenName_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_Identity_ByTwitterScreenName $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByTwitterScreenName execution.
     *
     * @return Klout_Identity_ByTwitterScreenName_Results New results object.
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
     * Wraps results in appropriate results class for this ByTwitterScreenName execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_Identity_ByTwitterScreenName_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_Identity_ByTwitterScreenName_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByTwitterScreenName Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByTwitterScreenName_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByTwitterScreenName Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_Identity_ByTwitterScreenName_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByTwitterScreenName execution.
     *
     * @return string (json) The response from Klout.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a specified Klout user.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_ShowUser extends Temboo_Choreography
{
    /**
     * Retrieves information for a specified Klout user.
     *
     * @param Temboo_Session $session The session that owns this ShowUser Choreo.
     * @return Klout_User_ShowUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/User/ShowUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowUser Choreo.
     *
     * @param Klout_User_ShowUser_Inputs|array $inputs (optional) Inputs as Klout_User_ShowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_User_ShowUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_User_ShowUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_User_ShowUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_User_ShowUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowUser Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_ShowUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_User_ShowUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_User_ShowUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Klout_User_ShowUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ShowUser Choreo.
     *
     * @param string $value (required, string) The API Key provided by Klout.
     * @return Klout_User_ShowUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the KloutID input for this ShowUser Choreo.
     *
     * @param string $value (required, string) The id for a Klout user to retrieve.
     * @return Klout_User_ShowUser_Inputs For method chaining.
     */
    public function setKloutID($value)
    {
        return $this->set('KloutID', $value);
    }
}


/**
 * Execution object for the ShowUser Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_ShowUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowUser execution.
     * @param Klout_User_ShowUser $choreo The choreography object for this execution.
     * @param Klout_User_ShowUser_Inputs|array $inputs (optional) Inputs as Klout_User_ShowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_User_ShowUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_User_ShowUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowUser execution.
     *
     * @return Klout_User_ShowUser_Results New results object.
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
     * Wraps results in appropriate results class for this ShowUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_User_ShowUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_User_ShowUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowUser Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_ShowUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_User_ShowUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowUser execution.
     *
     * @return string (json) The response from Klout.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Performs a lookup for a user's identity using a Klout ID.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByKloutID extends Temboo_Choreography
{
    /**
     * Performs a lookup for a user's identity using a Klout ID.
     *
     * @param Temboo_Session $session The session that owns this ByKloutID Choreo.
     * @return Klout_Identity_ByKloutID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/Identity/ByKloutID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByKloutID Choreo.
     *
     * @param Klout_Identity_ByKloutID_Inputs|array $inputs (optional) Inputs as Klout_Identity_ByKloutID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_Identity_ByKloutID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_Identity_ByKloutID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByKloutID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_Identity_ByKloutID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_Identity_ByKloutID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByKloutID Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByKloutID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByKloutID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_Identity_ByKloutID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByKloutID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_Identity_ByKloutID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Klout_Identity_ByKloutID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ByKloutID Choreo.
     *
     * @param string $value (required, string) The API Key provided by Klout.
     * @return Klout_Identity_ByKloutID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the KloutID input for this ByKloutID Choreo.
     *
     * @param int $value (required, integer) The numeric ID for a Klout user.
     * @return Klout_Identity_ByKloutID_Inputs For method chaining.
     */
    public function setKloutID($value)
    {
        return $this->set('KloutID', $value);
    }
}


/**
 * Execution object for the ByKloutID Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByKloutID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByKloutID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByKloutID execution.
     * @param Klout_Identity_ByKloutID $choreo The choreography object for this execution.
     * @param Klout_Identity_ByKloutID_Inputs|array $inputs (optional) Inputs as Klout_Identity_ByKloutID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_Identity_ByKloutID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_Identity_ByKloutID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByKloutID execution.
     *
     * @return Klout_Identity_ByKloutID_Results New results object.
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
     * Wraps results in appropriate results class for this ByKloutID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_Identity_ByKloutID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_Identity_ByKloutID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByKloutID Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByKloutID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByKloutID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_Identity_ByKloutID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByKloutID execution.
     *
     * @return string (json) The response from Klout.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a user's topics. 
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Topics extends Temboo_Choreography
{
    /**
     * Retrieves a user's topics. 
     *
     * @param Temboo_Session $session The session that owns this Topics Choreo.
     * @return Klout_User_Topics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/User/Topics/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Topics Choreo.
     *
     * @param Klout_User_Topics_Inputs|array $inputs (optional) Inputs as Klout_User_Topics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_User_Topics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_User_Topics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Topics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_User_Topics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_User_Topics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Topics Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Topics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Topics Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_User_Topics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Topics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_User_Topics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Klout_User_Topics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Topics Choreo.
     *
     * @param string $value (required, string) The API Key provided by Klout.
     * @return Klout_User_Topics_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the KloutID input for this Topics Choreo.
     *
     * @param string $value (required, string) The id for a Klout user to retrieve topics for.
     * @return Klout_User_Topics_Inputs For method chaining.
     */
    public function setKloutID($value)
    {
        return $this->set('KloutID', $value);
    }
}


/**
 * Execution object for the Topics Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Topics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Topics Choreo.
     *
     * @param Temboo_Session $session The session that owns this Topics execution.
     * @param Klout_User_Topics $choreo The choreography object for this execution.
     * @param Klout_User_Topics_Inputs|array $inputs (optional) Inputs as Klout_User_Topics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_User_Topics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_User_Topics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Topics execution.
     *
     * @return Klout_User_Topics_Results New results object.
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
     * Wraps results in appropriate results class for this Topics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_User_Topics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_User_Topics_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Topics Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_User_Topics_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Topics Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_User_Topics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Topics execution.
     *
     * @return string (json) The response from Klout.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Performs a lookup for a user's identity using a Google+ ID.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByGooglePlusID extends Temboo_Choreography
{
    /**
     * Performs a lookup for a user's identity using a Google+ ID.
     *
     * @param Temboo_Session $session The session that owns this ByGooglePlusID Choreo.
     * @return Klout_Identity_ByGooglePlusID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/Identity/ByGooglePlusID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByGooglePlusID Choreo.
     *
     * @param Klout_Identity_ByGooglePlusID_Inputs|array $inputs (optional) Inputs as Klout_Identity_ByGooglePlusID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_Identity_ByGooglePlusID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_Identity_ByGooglePlusID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByGooglePlusID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_Identity_ByGooglePlusID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_Identity_ByGooglePlusID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByGooglePlusID Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByGooglePlusID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByGooglePlusID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_Identity_ByGooglePlusID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByGooglePlusID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_Identity_ByGooglePlusID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Klout_Identity_ByGooglePlusID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ByGooglePlusID Choreo.
     *
     * @param string $value (required, string) The API Key provided by Klout.
     * @return Klout_Identity_ByGooglePlusID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the GooglePlusID input for this ByGooglePlusID Choreo.
     *
     * @param int $value (required, integer) The numeric ID for a Google+ user.
     * @return Klout_Identity_ByGooglePlusID_Inputs For method chaining.
     */
    public function setGooglePlusID($value)
    {
        return $this->set('GooglePlusID', $value);
    }
}


/**
 * Execution object for the ByGooglePlusID Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByGooglePlusID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByGooglePlusID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByGooglePlusID execution.
     * @param Klout_Identity_ByGooglePlusID $choreo The choreography object for this execution.
     * @param Klout_Identity_ByGooglePlusID_Inputs|array $inputs (optional) Inputs as Klout_Identity_ByGooglePlusID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_Identity_ByGooglePlusID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_Identity_ByGooglePlusID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByGooglePlusID execution.
     *
     * @return Klout_Identity_ByGooglePlusID_Results New results object.
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
     * Wraps results in appropriate results class for this ByGooglePlusID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_Identity_ByGooglePlusID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_Identity_ByGooglePlusID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByGooglePlusID Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByGooglePlusID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByGooglePlusID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_Identity_ByGooglePlusID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByGooglePlusID execution.
     *
     * @return string (json) The response from Klout.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Performs a lookup for a user's identity using a Twitter ID.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByTwitterID extends Temboo_Choreography
{
    /**
     * Performs a lookup for a user's identity using a Twitter ID.
     *
     * @param Temboo_Session $session The session that owns this ByTwitterID Choreo.
     * @return Klout_Identity_ByTwitterID New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Klout/Identity/ByTwitterID/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ByTwitterID Choreo.
     *
     * @param Klout_Identity_ByTwitterID_Inputs|array $inputs (optional) Inputs as Klout_Identity_ByTwitterID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_Identity_ByTwitterID_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Klout_Identity_ByTwitterID_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ByTwitterID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_Identity_ByTwitterID_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Klout_Identity_ByTwitterID_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ByTwitterID Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByTwitterID_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ByTwitterID Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Klout_Identity_ByTwitterID_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ByTwitterID input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Klout_Identity_ByTwitterID_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Klout_Identity_ByTwitterID_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ByTwitterID Choreo.
     *
     * @param string $value (required, string) The API Key provided by Klout.
     * @return Klout_Identity_ByTwitterID_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the TwitterID input for this ByTwitterID Choreo.
     *
     * @param int $value (required, integer) The numeric ID for a Twitter user.
     * @return Klout_Identity_ByTwitterID_Inputs For method chaining.
     */
    public function setTwitterID($value)
    {
        return $this->set('TwitterID', $value);
    }
}


/**
 * Execution object for the ByTwitterID Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByTwitterID_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ByTwitterID Choreo.
     *
     * @param Temboo_Session $session The session that owns this ByTwitterID execution.
     * @param Klout_Identity_ByTwitterID $choreo The choreography object for this execution.
     * @param Klout_Identity_ByTwitterID_Inputs|array $inputs (optional) Inputs as Klout_Identity_ByTwitterID_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Klout_Identity_ByTwitterID_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Klout_Identity_ByTwitterID $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ByTwitterID execution.
     *
     * @return Klout_Identity_ByTwitterID_Results New results object.
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
     * Wraps results in appropriate results class for this ByTwitterID execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Klout_Identity_ByTwitterID_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Klout_Identity_ByTwitterID_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ByTwitterID Choreo.
 *
 * @package Temboo
 * @subpackage Klout
 */
class Klout_Identity_ByTwitterID_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ByTwitterID Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Klout_Identity_ByTwitterID_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ByTwitterID execution.
     *
     * @return string (json) The response from Klout.
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
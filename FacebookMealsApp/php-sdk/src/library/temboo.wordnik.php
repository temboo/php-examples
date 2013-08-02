<?php

/**
 * Temboo PHP SDK Wordnik classes
 *
 * Execute Choreographies from the Temboo Wordnik bundle.
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
 * @subpackage Wordnik
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves the word lists for the specified user.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetWordLists extends Temboo_Choreography
{
    /**
     * Retrieves the word lists for the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetWordLists Choreo.
     * @return Wordnik_Account_GetWordLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Account/GetWordLists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetWordLists Choreo.
     *
     * @param Wordnik_Account_GetWordLists_Inputs|array $inputs (optional) Inputs as Wordnik_Account_GetWordLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Account_GetWordLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Account_GetWordLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWordLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Account_GetWordLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Account_GetWordLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWordLists Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetWordLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetWordLists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Account_GetWordLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWordLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Account_GetWordLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Account_GetWordLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWordLists Choreo.
     *
     * @param string $value (required, string) The API Key obtained from Wordnik.
     * @return Wordnik_Account_GetWordLists_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetWordLists Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return. Defaults to 50.
     * @return Wordnik_Account_GetWordLists_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Password input for this GetWordLists Choreo.
     *
     * @param string $value (required, string) The Password of the Wordnik account.
     * @return Wordnik_Account_GetWordLists_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetWordLists Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Account_GetWordLists_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Skip input for this GetWordLists Choreo.
     *
     * @param int $value (optional, integer) Number of results to skip. Defaults to 0.
     * @return Wordnik_Account_GetWordLists_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Username input for this GetWordLists Choreo.
     *
     * @param string $value (required, string) The Username of the Wordnik account.
     * @return Wordnik_Account_GetWordLists_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetWordLists Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetWordLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWordLists Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetWordLists execution.
     * @param Wordnik_Account_GetWordLists $choreo The choreography object for this execution.
     * @param Wordnik_Account_GetWordLists_Inputs|array $inputs (optional) Inputs as Wordnik_Account_GetWordLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Account_GetWordLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Account_GetWordLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWordLists execution.
     *
     * @return Wordnik_Account_GetWordLists_Results New results object.
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
     * Wraps results in appropriate results class for this GetWordLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Account_GetWordLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Account_GetWordLists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetWordLists Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetWordLists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetWordLists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Account_GetWordLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetWordLists execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the audio pronunciation of a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetAudio extends Temboo_Choreography
{
    /**
     * Retrieves the audio pronunciation of a given word.
     *
     * @param Temboo_Session $session The session that owns this GetAudio Choreo.
     * @return Wordnik_Word_GetAudio New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Word/GetAudio/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAudio Choreo.
     *
     * @param Wordnik_Word_GetAudio_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetAudio_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetAudio_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Word_GetAudio_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAudio Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetAudio_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Word_GetAudio_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAudio Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetAudio_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAudio Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetAudio_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAudio input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Word_GetAudio_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Word_GetAudio_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetAudio Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Word_GetAudio_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cannonical input for this GetAudio Choreo.
     *
     * @param string $value (optional, string) If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested. Defaults to false.
     * @return Wordnik_Word_GetAudio_Inputs For method chaining.
     */
    public function setCannonical($value)
    {
        return $this->set('Cannonical', $value);
    }

    /**
     * Set the value for the Limit input for this GetAudio Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return. Defaults to 50.
     * @return Wordnik_Word_GetAudio_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetAudio Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Word_GetAudio_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Word input for this GetAudio Choreo.
     *
     * @param string $value (required, string) The word you want to look up on Wordnik.
     * @return Wordnik_Word_GetAudio_Inputs For method chaining.
     */
    public function setWord($value)
    {
        return $this->set('Word', $value);
    }
}


/**
 * Execution object for the GetAudio Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetAudio_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAudio Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAudio execution.
     * @param Wordnik_Word_GetAudio $choreo The choreography object for this execution.
     * @param Wordnik_Word_GetAudio_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetAudio_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetAudio_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Word_GetAudio $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAudio execution.
     *
     * @return Wordnik_Word_GetAudio_Results New results object.
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
     * Wraps results in appropriate results class for this GetAudio execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Word_GetAudio_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Word_GetAudio_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAudio Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetAudio_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAudio Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Word_GetAudio_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAudio execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the top example of a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetTopExample extends Temboo_Choreography
{
    /**
     * Retrieves the top example of a given word.
     *
     * @param Temboo_Session $session The session that owns this GetTopExample Choreo.
     * @return Wordnik_Word_GetTopExample New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Word/GetTopExample/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTopExample Choreo.
     *
     * @param Wordnik_Word_GetTopExample_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetTopExample_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetTopExample_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Word_GetTopExample_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTopExample Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetTopExample_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Word_GetTopExample_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTopExample Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetTopExample_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTopExample Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetTopExample_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTopExample input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Word_GetTopExample_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Word_GetTopExample_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetTopExample Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Word_GetTopExample_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cannonical input for this GetTopExample Choreo.
     *
     * @param string $value (optional, string) If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested. Defaults to false.
     * @return Wordnik_Word_GetTopExample_Inputs For method chaining.
     */
    public function setCannonical($value)
    {
        return $this->set('Cannonical', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetTopExample Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Word_GetTopExample_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Word input for this GetTopExample Choreo.
     *
     * @param string $value (required, string) The word you want to look up on Wordnik.
     * @return Wordnik_Word_GetTopExample_Inputs For method chaining.
     */
    public function setWord($value)
    {
        return $this->set('Word', $value);
    }
}


/**
 * Execution object for the GetTopExample Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetTopExample_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTopExample Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTopExample execution.
     * @param Wordnik_Word_GetTopExample $choreo The choreography object for this execution.
     * @param Wordnik_Word_GetTopExample_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetTopExample_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetTopExample_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Word_GetTopExample $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTopExample execution.
     *
     * @return Wordnik_Word_GetTopExample_Results New results object.
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
     * Wraps results in appropriate results class for this GetTopExample execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Word_GetTopExample_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Word_GetTopExample_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTopExample Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetTopExample_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTopExample Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Word_GetTopExample_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTopExample execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the word frequency of a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetFrequency extends Temboo_Choreography
{
    /**
     * Retrieves the word frequency of a given word.
     *
     * @param Temboo_Session $session The session that owns this GetFrequency Choreo.
     * @return Wordnik_Word_GetFrequency New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Word/GetFrequency/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetFrequency Choreo.
     *
     * @param Wordnik_Word_GetFrequency_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetFrequency_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetFrequency_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Word_GetFrequency_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetFrequency Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetFrequency_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Word_GetFrequency_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetFrequency Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetFrequency_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetFrequency Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetFrequency_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetFrequency input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Word_GetFrequency_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Word_GetFrequency_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetFrequency Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Word_GetFrequency_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cannonical input for this GetFrequency Choreo.
     *
     * @param string $value (optional, string) If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested. Defaults to false.
     * @return Wordnik_Word_GetFrequency_Inputs For method chaining.
     */
    public function setCannonical($value)
    {
        return $this->set('Cannonical', $value);
    }

    /**
     * Set the value for the EndYear input for this GetFrequency Choreo.
     *
     * @param int $value (optional, integer) End year for which to return word use frequencies. Defaults to 2012.
     * @return Wordnik_Word_GetFrequency_Inputs For method chaining.
     */
    public function setEndYear($value)
    {
        return $this->set('EndYear', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetFrequency Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Word_GetFrequency_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the StartYear input for this GetFrequency Choreo.
     *
     * @param int $value (optional, integer) Start year for which to return word use frequencies. Defaults to 1800.
     * @return Wordnik_Word_GetFrequency_Inputs For method chaining.
     */
    public function setStartYear($value)
    {
        return $this->set('StartYear', $value);
    }

    /**
     * Set the value for the Word input for this GetFrequency Choreo.
     *
     * @param string $value (required, string) The word you want to look up on Wordnik.
     * @return Wordnik_Word_GetFrequency_Inputs For method chaining.
     */
    public function setWord($value)
    {
        return $this->set('Word', $value);
    }
}


/**
 * Execution object for the GetFrequency Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetFrequency_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetFrequency Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetFrequency execution.
     * @param Wordnik_Word_GetFrequency $choreo The choreography object for this execution.
     * @param Wordnik_Word_GetFrequency_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetFrequency_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetFrequency_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Word_GetFrequency $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetFrequency execution.
     *
     * @return Wordnik_Word_GetFrequency_Results New results object.
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
     * Wraps results in appropriate results class for this GetFrequency execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Word_GetFrequency_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Word_GetFrequency_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetFrequency Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetFrequency_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetFrequency Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Word_GetFrequency_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetFrequency execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the definition of a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetDefinitions extends Temboo_Choreography
{
    /**
     * Retrieves the definition of a given word.
     *
     * @param Temboo_Session $session The session that owns this GetDefinitions Choreo.
     * @return Wordnik_Word_GetDefinitions New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Word/GetDefinitions/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetDefinitions Choreo.
     *
     * @param Wordnik_Word_GetDefinitions_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetDefinitions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetDefinitions_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Word_GetDefinitions_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetDefinitions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetDefinitions_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Word_GetDefinitions_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetDefinitions Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetDefinitions_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetDefinitions Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetDefinitions_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetDefinitions input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetDefinitions Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cannonical input for this GetDefinitions Choreo.
     *
     * @param string $value (optional, string) If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested. Defaults to false.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function setCannonical($value)
    {
        return $this->set('Cannonical', $value);
    }

    /**
     * Set the value for the Dictionaries input for this GetDefinitions Choreo.
     *
     * @param string $value (optional, string) Source dictionary to return definitions from. Defaults to all, which returns definitions from all sources. See docs fro full list of acceptable values.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function setDictionaries($value)
    {
        return $this->set('Dictionaries', $value);
    }

    /**
     * Set the value for the Limit input for this GetDefinitions Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the PartOfSpeech input for this GetDefinitions Choreo.
     *
     * @param string $value (optional, string) Returns only definitions for particular parts of speech when this input is specified. Acceptable values include: adjective, noun, etc. See docs for full list.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function setPartOfSpeech($value)
    {
        return $this->set('PartOfSpeech', $value);
    }

    /**
     * Set the value for the RelatedWords input for this GetDefinitions Choreo.
     *
     * @param string $value (optional, string) Returns related words with definitions when true. Defaults to false.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function setRelatedWords($value)
    {
        return $this->set('RelatedWords', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetDefinitions Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Word input for this GetDefinitions Choreo.
     *
     * @param string $value (required, string) The word you want to look up on Wordnik.
     * @return Wordnik_Word_GetDefinitions_Inputs For method chaining.
     */
    public function setWord($value)
    {
        return $this->set('Word', $value);
    }
}


/**
 * Execution object for the GetDefinitions Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetDefinitions_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetDefinitions Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetDefinitions execution.
     * @param Wordnik_Word_GetDefinitions $choreo The choreography object for this execution.
     * @param Wordnik_Word_GetDefinitions_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetDefinitions_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetDefinitions_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Word_GetDefinitions $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetDefinitions execution.
     *
     * @return Wordnik_Word_GetDefinitions_Results New results object.
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
     * Wraps results in appropriate results class for this GetDefinitions execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Word_GetDefinitions_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Word_GetDefinitions_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetDefinitions Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetDefinitions_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetDefinitions Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Word_GetDefinitions_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetDefinitions execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches words.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_SearchWords extends Temboo_Choreography
{
    /**
     * Searches words.
     *
     * @param Temboo_Session $session The session that owns this SearchWords Choreo.
     * @return Wordnik_Words_SearchWords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Words/SearchWords/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchWords Choreo.
     *
     * @param Wordnik_Words_SearchWords_Inputs|array $inputs (optional) Inputs as Wordnik_Words_SearchWords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_SearchWords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Words_SearchWords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchWords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_SearchWords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Words_SearchWords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchWords Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_SearchWords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchWords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_SearchWords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchWords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchWords Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the CaseSensitive input for this SearchWords Choreo.
     *
     * @param string $value (optional, string) Makes the query case-insensitive when false. Defaults to true, so queries are case-sensitive.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setCaseSensitive($value)
    {
        return $this->set('CaseSensitive', $value);
    }

    /**
     * Set the value for the ExcludePartOfSpeech input for this SearchWords Choreo.
     *
     * @param string $value (optional, string) Excludes the specified comma-delimited parts of speech from the results returned. Acceptable values include: adjective, noun, etc. See docs for full list.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setExcludePartOfSpeech($value)
    {
        return $this->set('ExcludePartOfSpeech', $value);
    }

    /**
     * Set the value for the IncludePartOfSpeech input for this SearchWords Choreo.
     *
     * @param string $value (optional, string) Only includes the specified comma-delimited parts of speech. Acceptable values include: adjective, noun, etc. See docs for full list.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setIncludePartOfSpeech($value)
    {
        return $this->set('IncludePartOfSpeech', $value);
    }

    /**
     * Set the value for the Limit input for this SearchWords Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return. Defaults to 10.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaxCorpus input for this SearchWords Choreo.
     *
     * @param int $value (optional, integer) Results include a corpus frequency count for each word returned. When this input is specified, results are limited to words with a corpus frequency count below the given number.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setMaxCorpus($value)
    {
        return $this->set('MaxCorpus', $value);
    }

    /**
     * Set the value for the MaxEntries input for this SearchWords Choreo.
     *
     * @param int $value (optional, integer) Limits the results to words that have fewer than the given numner of dictionary entries.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setMaxEntries($value)
    {
        return $this->set('MaxEntries', $value);
    }

    /**
     * Set the value for the MaxLength input for this SearchWords Choreo.
     *
     * @param int $value (optional, integer) Maximum word length.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setMaxLength($value)
    {
        return $this->set('MaxLength', $value);
    }

    /**
     * Set the value for the MinCorpus input for this SearchWords Choreo.
     *
     * @param int $value (optional, integer) Results include a corpus frequency count for each word returned. When this input is specified, results are limited to words with a corpus frequency count above the given number.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setMinCorpus($value)
    {
        return $this->set('MinCorpus', $value);
    }

    /**
     * Set the value for the MinEntries input for this SearchWords Choreo.
     *
     * @param int $value (optional, integer) Limits the results to words that have more than the given numner of dictionary entries.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setMinEntries($value)
    {
        return $this->set('MinEntries', $value);
    }

    /**
     * Set the value for the MinLength input for this SearchWords Choreo.
     *
     * @param int $value (optional, integer) ‪Minimum word length.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setMinLength($value)
    {
        return $this->set('MinLength', $value);
    }

    /**
     * Set the value for the Query input for this SearchWords Choreo.
     *
     * @param string $value (required, string) Word or fragment to query for in Wordnik.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseType input for this SearchWords Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Skip input for this SearchWords Choreo.
     *
     * @param int $value (optional, integer) Number of results to skip.
     * @return Wordnik_Words_SearchWords_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }
}


/**
 * Execution object for the SearchWords Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_SearchWords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchWords Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchWords execution.
     * @param Wordnik_Words_SearchWords $choreo The choreography object for this execution.
     * @param Wordnik_Words_SearchWords_Inputs|array $inputs (optional) Inputs as Wordnik_Words_SearchWords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_SearchWords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Words_SearchWords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchWords execution.
     *
     * @return Wordnik_Words_SearchWords_Results New results object.
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
     * Wraps results in appropriate results class for this SearchWords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Words_SearchWords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Words_SearchWords_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchWords Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_SearchWords_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchWords Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Words_SearchWords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchWords execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a given word list.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_DeleteWordList extends Temboo_Choreography
{
    /**
     * Deletes a given word list.
     *
     * @param Temboo_Session $session The session that owns this DeleteWordList Choreo.
     * @return Wordnik_WordList_DeleteWordList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/WordList/DeleteWordList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteWordList Choreo.
     *
     * @param Wordnik_WordList_DeleteWordList_Inputs|array $inputs (optional) Inputs as Wordnik_WordList_DeleteWordList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_WordList_DeleteWordList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_WordList_DeleteWordList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteWordList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_WordList_DeleteWordList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_WordList_DeleteWordList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_DeleteWordList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteWordList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_WordList_DeleteWordList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteWordList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_WordList_DeleteWordList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_WordList_DeleteWordList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteWordList Choreo.
     *
     * @param string $value (required, string) The API Key obtained from Wordnik.
     * @return Wordnik_WordList_DeleteWordList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this DeleteWordList Choreo.
     *
     * @param string $value (required, string) The Password of the Wordnik account.
     * @return Wordnik_WordList_DeleteWordList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this DeleteWordList Choreo.
     *
     * @param string $value (required, string) The Username of the Wordnik account.
     * @return Wordnik_WordList_DeleteWordList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WordList input for this DeleteWordList Choreo.
     *
     * @param string $value (required, string) The perma-link of the WordLIst to delete.
     * @return Wordnik_WordList_DeleteWordList_Inputs For method chaining.
     */
    public function setWordList($value)
    {
        return $this->set('WordList', $value);
    }
}


/**
 * Execution object for the DeleteWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_DeleteWordList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteWordList Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteWordList execution.
     * @param Wordnik_WordList_DeleteWordList $choreo The choreography object for this execution.
     * @param Wordnik_WordList_DeleteWordList_Inputs|array $inputs (optional) Inputs as Wordnik_WordList_DeleteWordList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_WordList_DeleteWordList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_WordList_DeleteWordList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteWordList execution.
     *
     * @return Wordnik_WordList_DeleteWordList_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteWordList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_WordList_DeleteWordList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_WordList_DeleteWordList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_DeleteWordList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteWordList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_WordList_DeleteWordList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteWordList execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtains the status of the user's current API Key.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetKeyStatus extends Temboo_Choreography
{
    /**
     * Obtains the status of the user's current API Key.
     *
     * @param Temboo_Session $session The session that owns this GetKeyStatus Choreo.
     * @return Wordnik_Account_GetKeyStatus New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Account/GetKeyStatus/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetKeyStatus Choreo.
     *
     * @param Wordnik_Account_GetKeyStatus_Inputs|array $inputs (optional) Inputs as Wordnik_Account_GetKeyStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Account_GetKeyStatus_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Account_GetKeyStatus_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetKeyStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Account_GetKeyStatus_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Account_GetKeyStatus_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetKeyStatus Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetKeyStatus_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetKeyStatus Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Account_GetKeyStatus_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetKeyStatus input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Account_GetKeyStatus_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Account_GetKeyStatus_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetKeyStatus Choreo.
     *
     * @param string $value (required, string) The API Key obtained from Wordnik.
     * @return Wordnik_Account_GetKeyStatus_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetKeyStatus Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Account_GetKeyStatus_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetKeyStatus Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetKeyStatus_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetKeyStatus Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetKeyStatus execution.
     * @param Wordnik_Account_GetKeyStatus $choreo The choreography object for this execution.
     * @param Wordnik_Account_GetKeyStatus_Inputs|array $inputs (optional) Inputs as Wordnik_Account_GetKeyStatus_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Account_GetKeyStatus_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Account_GetKeyStatus $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetKeyStatus execution.
     *
     * @return Wordnik_Account_GetKeyStatus_Results New results object.
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
     * Wraps results in appropriate results class for this GetKeyStatus execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Account_GetKeyStatus_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Account_GetKeyStatus_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetKeyStatus Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetKeyStatus_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetKeyStatus Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Account_GetKeyStatus_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetKeyStatus execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of random words.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_RandomWords extends Temboo_Choreography
{
    /**
     * Retrieves a list of random words.
     *
     * @param Temboo_Session $session The session that owns this RandomWords Choreo.
     * @return Wordnik_Words_RandomWords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Words/RandomWords/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RandomWords Choreo.
     *
     * @param Wordnik_Words_RandomWords_Inputs|array $inputs (optional) Inputs as Wordnik_Words_RandomWords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_RandomWords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Words_RandomWords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RandomWords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_RandomWords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Words_RandomWords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RandomWords Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_RandomWords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RandomWords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_RandomWords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RandomWords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RandomWords Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ExcludePartOfSpeech input for this RandomWords Choreo.
     *
     * @param string $value (optional, string) Excludes the specified comma-delimited parts of speech from the results returned. Acceptable values include: adjective, noun, etc. See docs for full list.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setExcludePartOfSpeech($value)
    {
        return $this->set('ExcludePartOfSpeech', $value);
    }

    /**
     * Set the value for the HasDefinition input for this RandomWords Choreo.
     *
     * @param string $value (optional, string) Only returns words that have dictionary definitions when true. Otherwise false. Defaults to true.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setHasDefinition($value)
    {
        return $this->set('HasDefinition', $value);
    }

    /**
     * Set the value for the IncludePartOfSpeech input for this RandomWords Choreo.
     *
     * @param string $value (optional, string) Only includes the specified comma-delimited parts of speech. Acceptable values include: adjective, noun, etc. See docs for full list.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setIncludePartOfSpeech($value)
    {
        return $this->set('IncludePartOfSpeech', $value);
    }

    /**
     * Set the value for the Limit input for this RandomWords Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return. Defaults to 10.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaxCorpus input for this RandomWords Choreo.
     *
     * @param int $value (optional, integer) Results include a corpus frequency count for each word returned. When this input is specified, results are limited to words with a corpus frequency count below the given number.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setMaxCorpus($value)
    {
        return $this->set('MaxCorpus', $value);
    }

    /**
     * Set the value for the MaxDictionaries input for this RandomWords Choreo.
     *
     * @param int $value (optional, integer) Maximum number of dictionaries in which the words appear.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setMaxDictionaries($value)
    {
        return $this->set('MaxDictionaries', $value);
    }

    /**
     * Set the value for the MaxLength input for this RandomWords Choreo.
     *
     * @param int $value (optional, integer) Maximum word length.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setMaxLength($value)
    {
        return $this->set('MaxLength', $value);
    }

    /**
     * Set the value for the MinCorpus input for this RandomWords Choreo.
     *
     * @param int $value (optional, integer) Results include a corpus frequency count for each word returned. When this input is specified, results are limited to words with a corpus frequency count above the given number.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setMinCorpus($value)
    {
        return $this->set('MinCorpus', $value);
    }

    /**
     * Set the value for the MinDictionaries input for this RandomWords Choreo.
     *
     * @param int $value (optional, integer) Minimum number of dictionaries in which the words appear.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setMinDictionaries($value)
    {
        return $this->set('MinDictionaries', $value);
    }

    /**
     * Set the value for the MinLength input for this RandomWords Choreo.
     *
     * @param int $value (optional, integer) ‪Minimum word length.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setMinLength($value)
    {
        return $this->set('MinLength', $value);
    }

    /**
     * Set the value for the ResponseType input for this RandomWords Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the SortBy input for this RandomWords Choreo.
     *
     * @param string $value (optional, string) Results can be sorted by: alpha, count, or length.
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this RandomWords Choreo.
     *
     * @param string $value (optional, string) Indicate the order to sort, either asc (ascending) or desc (descending).
     * @return Wordnik_Words_RandomWords_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }
}


/**
 * Execution object for the RandomWords Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_RandomWords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RandomWords Choreo.
     *
     * @param Temboo_Session $session The session that owns this RandomWords execution.
     * @param Wordnik_Words_RandomWords $choreo The choreography object for this execution.
     * @param Wordnik_Words_RandomWords_Inputs|array $inputs (optional) Inputs as Wordnik_Words_RandomWords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_RandomWords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Words_RandomWords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RandomWords execution.
     *
     * @return Wordnik_Words_RandomWords_Results New results object.
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
     * Wraps results in appropriate results class for this RandomWords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Words_RandomWords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Words_RandomWords_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RandomWords Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_RandomWords_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RandomWords Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Words_RandomWords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RandomWords execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a random word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_RandomWord extends Temboo_Choreography
{
    /**
     * Retrieves a random word.
     *
     * @param Temboo_Session $session The session that owns this RandomWord Choreo.
     * @return Wordnik_Words_RandomWord New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Words/RandomWord/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RandomWord Choreo.
     *
     * @param Wordnik_Words_RandomWord_Inputs|array $inputs (optional) Inputs as Wordnik_Words_RandomWord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_RandomWord_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Words_RandomWord_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RandomWord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_RandomWord_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Words_RandomWord_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RandomWord Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_RandomWord_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RandomWord Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_RandomWord_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RandomWord input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RandomWord Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ExcludePartOfSpeech input for this RandomWord Choreo.
     *
     * @param string $value (optional, string) Excludes the specified comma-delimited parts of speech from the results returned. Acceptable values include: adjective, noun, etc. See docs for full list.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setExcludePartOfSpeech($value)
    {
        return $this->set('ExcludePartOfSpeech', $value);
    }

    /**
     * Set the value for the HasDefinition input for this RandomWord Choreo.
     *
     * @param string $value (optional, string) Only returns words that have dictionary definitions when true. Otherwise false. Defaults to true.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setHasDefinition($value)
    {
        return $this->set('HasDefinition', $value);
    }

    /**
     * Set the value for the IncludePartOfSpeech input for this RandomWord Choreo.
     *
     * @param string $value (optional, string) Only includes the specified comma-delimited parts of speech. Acceptable values include: adjective, noun, etc. See docs for full list.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setIncludePartOfSpeech($value)
    {
        return $this->set('IncludePartOfSpeech', $value);
    }

    /**
     * Set the value for the Limit input for this RandomWord Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return. Defaults to 10.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaxCorpus input for this RandomWord Choreo.
     *
     * @param int $value (optional, integer) Results include a corpus frequency count for each word returned. When this input is specified, results are limited to words with a corpus frequency count below the given number.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setMaxCorpus($value)
    {
        return $this->set('MaxCorpus', $value);
    }

    /**
     * Set the value for the MaxDictionaries input for this RandomWord Choreo.
     *
     * @param int $value (optional, integer) Maximum number of dictionaries in which the words appear.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setMaxDictionaries($value)
    {
        return $this->set('MaxDictionaries', $value);
    }

    /**
     * Set the value for the MaxLength input for this RandomWord Choreo.
     *
     * @param int $value (optional, integer) Maximum word length.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setMaxLength($value)
    {
        return $this->set('MaxLength', $value);
    }

    /**
     * Set the value for the MinCorpus input for this RandomWord Choreo.
     *
     * @param int $value (optional, integer) Results include a corpus frequency count for each word returned. When this input is specified, results are limited to words with a corpus frequency count above the given number.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setMinCorpus($value)
    {
        return $this->set('MinCorpus', $value);
    }

    /**
     * Set the value for the MinDictionaries input for this RandomWord Choreo.
     *
     * @param int $value (optional, integer) Minimum number of dictionaries in which the words appear.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setMinDictionaries($value)
    {
        return $this->set('MinDictionaries', $value);
    }

    /**
     * Set the value for the MinLength input for this RandomWord Choreo.
     *
     * @param int $value (optional, integer) ‪Minimum word length.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setMinLength($value)
    {
        return $this->set('MinLength', $value);
    }

    /**
     * Set the value for the ResponseType input for this RandomWord Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Words_RandomWord_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the RandomWord Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_RandomWord_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RandomWord Choreo.
     *
     * @param Temboo_Session $session The session that owns this RandomWord execution.
     * @param Wordnik_Words_RandomWord $choreo The choreography object for this execution.
     * @param Wordnik_Words_RandomWord_Inputs|array $inputs (optional) Inputs as Wordnik_Words_RandomWord_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_RandomWord_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Words_RandomWord $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RandomWord execution.
     *
     * @return Wordnik_Words_RandomWord_Results New results object.
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
     * Wraps results in appropriate results class for this RandomWord execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Words_RandomWord_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Words_RandomWord_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RandomWord Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_RandomWord_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RandomWord Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Words_RandomWord_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RandomWord execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtains an authentication token for use in other Wordnik Choreos.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetAuthToken extends Temboo_Choreography
{
    /**
     * Obtains an authentication token for use in other Wordnik Choreos.
     *
     * @param Temboo_Session $session The session that owns this GetAuthToken Choreo.
     * @return Wordnik_Account_GetAuthToken New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Account/GetAuthToken/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAuthToken Choreo.
     *
     * @param Wordnik_Account_GetAuthToken_Inputs|array $inputs (optional) Inputs as Wordnik_Account_GetAuthToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Account_GetAuthToken_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Account_GetAuthToken_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAuthToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Account_GetAuthToken_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Account_GetAuthToken_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAuthToken Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetAuthToken_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAuthToken Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Account_GetAuthToken_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAuthToken input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Account_GetAuthToken_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Account_GetAuthToken_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetAuthToken Choreo.
     *
     * @param string $value (required, string) The API Key obtained from Wordnik.
     * @return Wordnik_Account_GetAuthToken_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this GetAuthToken Choreo.
     *
     * @param string $value (required, string) Password of the Wordnik account.
     * @return Wordnik_Account_GetAuthToken_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetAuthToken Choreo.
     *
     * @param string $value (required, string) Username of the Wordnik account.
     * @return Wordnik_Account_GetAuthToken_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAuthToken Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetAuthToken_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAuthToken Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAuthToken execution.
     * @param Wordnik_Account_GetAuthToken $choreo The choreography object for this execution.
     * @param Wordnik_Account_GetAuthToken_Inputs|array $inputs (optional) Inputs as Wordnik_Account_GetAuthToken_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Account_GetAuthToken_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Account_GetAuthToken $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAuthToken execution.
     *
     * @return Wordnik_Account_GetAuthToken_Results New results object.
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
     * Wraps results in appropriate results class for this GetAuthToken execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Account_GetAuthToken_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Account_GetAuthToken_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAuthToken Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetAuthToken_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAuthToken Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Account_GetAuthToken_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Token" output from this GetAuthToken execution.
     *
     * @return string The Token obtained from running this Choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Creates a new word list for the specified user.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordLists_CreateWordList extends Temboo_Choreography
{
    /**
     * Creates a new word list for the specified user.
     *
     * @param Temboo_Session $session The session that owns this CreateWordList Choreo.
     * @return Wordnik_WordLists_CreateWordList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/WordLists/CreateWordList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateWordList Choreo.
     *
     * @param Wordnik_WordLists_CreateWordList_Inputs|array $inputs (optional) Inputs as Wordnik_WordLists_CreateWordList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_WordLists_CreateWordList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_WordLists_CreateWordList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateWordList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_WordLists_CreateWordList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_WordLists_CreateWordList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordLists_CreateWordList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateWordList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_WordLists_CreateWordList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateWordList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_WordLists_CreateWordList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_WordLists_CreateWordList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateWordList Choreo.
     *
     * @param string $value (required, string) The API Key obtained from Wordnik.
     * @return Wordnik_WordLists_CreateWordList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ListDescription input for this CreateWordList Choreo.
     *
     * @param string $value (required, string) A description of the list to create.
     * @return Wordnik_WordLists_CreateWordList_Inputs For method chaining.
     */
    public function setListDescription($value)
    {
        return $this->set('ListDescription', $value);
    }

    /**
     * Set the value for the ListName input for this CreateWordList Choreo.
     *
     * @param string $value (required, string) Name of list to create.
     * @return Wordnik_WordLists_CreateWordList_Inputs For method chaining.
     */
    public function setListName($value)
    {
        return $this->set('ListName', $value);
    }

    /**
     * Set the value for the ListStatus input for this CreateWordList Choreo.
     *
     * @param string $value (optional, string) Determines whether the list to cretae is public or private. Acceptable values: PUBLIC or PRIVATE.
     * @return Wordnik_WordLists_CreateWordList_Inputs For method chaining.
     */
    public function setListStatus($value)
    {
        return $this->set('ListStatus', $value);
    }

    /**
     * Set the value for the Password input for this CreateWordList Choreo.
     *
     * @param string $value (required, string) The Password of the Wordnik account.
     * @return Wordnik_WordLists_CreateWordList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this CreateWordList Choreo.
     *
     * @param string $value (required, string) The Username of the Wordnik account.
     * @return Wordnik_WordLists_CreateWordList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordLists_CreateWordList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateWordList Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateWordList execution.
     * @param Wordnik_WordLists_CreateWordList $choreo The choreography object for this execution.
     * @param Wordnik_WordLists_CreateWordList_Inputs|array $inputs (optional) Inputs as Wordnik_WordLists_CreateWordList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_WordLists_CreateWordList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_WordLists_CreateWordList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateWordList execution.
     *
     * @return Wordnik_WordLists_CreateWordList_Results New results object.
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
     * Wraps results in appropriate results class for this CreateWordList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_WordLists_CreateWordList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_WordLists_CreateWordList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordLists_CreateWordList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateWordList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_WordLists_CreateWordList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateWordList execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a reverse dictionary search for a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_ReverseDictionary extends Temboo_Choreography
{
    /**
     * Retrieves a reverse dictionary search for a given word.
     *
     * @param Temboo_Session $session The session that owns this ReverseDictionary Choreo.
     * @return Wordnik_Words_ReverseDictionary New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Words/ReverseDictionary/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ReverseDictionary Choreo.
     *
     * @param Wordnik_Words_ReverseDictionary_Inputs|array $inputs (optional) Inputs as Wordnik_Words_ReverseDictionary_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_ReverseDictionary_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Words_ReverseDictionary_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ReverseDictionary Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_ReverseDictionary_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Words_ReverseDictionary_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ReverseDictionary Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_ReverseDictionary_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ReverseDictionary Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_ReverseDictionary_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ReverseDictionary input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ReverseDictionary Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ExcludePartOfSpeech input for this ReverseDictionary Choreo.
     *
     * @param string $value (optional, string) Excludes the specified comma-delimited parts of speech from the results returned. Acceptable values include: adjective, noun, etc. See docs for full list.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setExcludePartOfSpeech($value)
    {
        return $this->set('ExcludePartOfSpeech', $value);
    }

    /**
     * Set the value for the ExcludeSource input for this ReverseDictionary Choreo.
     *
     * @param string $value (optional, string) Exclude these comma-delimited source dictionaries: ahd, century, wiktionary,webster, wordnet.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setExcludeSource($value)
    {
        return $this->set('ExcludeSource', $value);
    }

    /**
     * Set the value for the ExpandTerms input for this ReverseDictionary Choreo.
     *
     * @param mixed $value (optional, any) Expand terms by either: synonym or hypernym.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setExpandTerms($value)
    {
        return $this->set('ExpandTerms', $value);
    }

    /**
     * Set the value for the IncludePartOfSpeech input for this ReverseDictionary Choreo.
     *
     * @param string $value (optional, string) Only includes the specified comma-delimited parts of speech. Acceptable values include: adjective, noun, etc. See docs for full list.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setIncludePartOfSpeech($value)
    {
        return $this->set('IncludePartOfSpeech', $value);
    }

    /**
     * Set the value for the IncludeSource input for this ReverseDictionary Choreo.
     *
     * @param string $value (optional, string) Only include these comma-delimited source dictionaries: ahd, century, wiktionary,webster, wordnet.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setIncludeSource($value)
    {
        return $this->set('IncludeSource', $value);
    }

    /**
     * Set the value for the Limit input for this ReverseDictionary Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return. Defaults to 10.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the MaxCorpus input for this ReverseDictionary Choreo.
     *
     * @param int $value (optional, integer) Results include a corpus frequency count for each word returned. When this input is specified, results are limited to words with a corpus frequency count below the given number.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setMaxCorpus($value)
    {
        return $this->set('MaxCorpus', $value);
    }

    /**
     * Set the value for the MaxLength input for this ReverseDictionary Choreo.
     *
     * @param int $value (optional, integer) Maximum word length.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setMaxLength($value)
    {
        return $this->set('MaxLength', $value);
    }

    /**
     * Set the value for the MinCorpus input for this ReverseDictionary Choreo.
     *
     * @param int $value (optional, integer) Results include a corpus frequency count for each word returned. When this input is specified, results are limited to words with a corpus frequency count above the given number.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setMinCorpus($value)
    {
        return $this->set('MinCorpus', $value);
    }

    /**
     * Set the value for the MinLength input for this ReverseDictionary Choreo.
     *
     * @param int $value (optional, integer) ‪Minimum word length.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setMinLength($value)
    {
        return $this->set('MinLength', $value);
    }

    /**
     * Set the value for the Query input for this ReverseDictionary Choreo.
     *
     * @param string $value (required, string) Word or fragment to query for in Wordnik.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setQuery($value)
    {
        return $this->set('Query', $value);
    }

    /**
     * Set the value for the ResponseType input for this ReverseDictionary Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Skip input for this ReverseDictionary Choreo.
     *
     * @param int $value (optional, integer) Number of results to skip.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the SortBy input for this ReverseDictionary Choreo.
     *
     * @param string $value (optional, string) Results can be sorted by: alpha, count, or length.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this ReverseDictionary Choreo.
     *
     * @param string $value (optional, string) Indicate the order to sort, either asc (ascending) or desc (descending).
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the WordSense input for this ReverseDictionary Choreo.
     *
     * @param string $value (optional, string) Restricts words and finds the closest sense to the one indicated.
     * @return Wordnik_Words_ReverseDictionary_Inputs For method chaining.
     */
    public function setWordSense($value)
    {
        return $this->set('WordSense', $value);
    }
}


/**
 * Execution object for the ReverseDictionary Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_ReverseDictionary_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ReverseDictionary Choreo.
     *
     * @param Temboo_Session $session The session that owns this ReverseDictionary execution.
     * @param Wordnik_Words_ReverseDictionary $choreo The choreography object for this execution.
     * @param Wordnik_Words_ReverseDictionary_Inputs|array $inputs (optional) Inputs as Wordnik_Words_ReverseDictionary_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_ReverseDictionary_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Words_ReverseDictionary $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ReverseDictionary execution.
     *
     * @return Wordnik_Words_ReverseDictionary_Results New results object.
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
     * Wraps results in appropriate results class for this ReverseDictionary execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Words_ReverseDictionary_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Words_ReverseDictionary_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ReverseDictionary Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_ReverseDictionary_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ReverseDictionary Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Words_ReverseDictionary_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ReverseDictionary execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the hyphenation of a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetHyphenation extends Temboo_Choreography
{
    /**
     * Retrieves the hyphenation of a given word.
     *
     * @param Temboo_Session $session The session that owns this GetHyphenation Choreo.
     * @return Wordnik_Word_GetHyphenation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Word/GetHyphenation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetHyphenation Choreo.
     *
     * @param Wordnik_Word_GetHyphenation_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetHyphenation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetHyphenation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Word_GetHyphenation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetHyphenation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetHyphenation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Word_GetHyphenation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetHyphenation Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetHyphenation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetHyphenation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetHyphenation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetHyphenation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Word_GetHyphenation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Word_GetHyphenation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetHyphenation Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Word_GetHyphenation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cannonical input for this GetHyphenation Choreo.
     *
     * @param string $value (optional, string) If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested. Defaults to false.
     * @return Wordnik_Word_GetHyphenation_Inputs For method chaining.
     */
    public function setCannonical($value)
    {
        return $this->set('Cannonical', $value);
    }

    /**
     * Set the value for the Dictionary input for this GetHyphenation Choreo.
     *
     * @param string $value (optional, string) Source dictionary to return pronunciation from. Acceptable values: ahd, century, cmu, macmillan, wiktionary,webster, wordnet.
     * @return Wordnik_Word_GetHyphenation_Inputs For method chaining.
     */
    public function setDictionary($value)
    {
        return $this->set('Dictionary', $value);
    }

    /**
     * Set the value for the Limit input for this GetHyphenation Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return. Defaults to 50.
     * @return Wordnik_Word_GetHyphenation_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetHyphenation Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Word_GetHyphenation_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Word input for this GetHyphenation Choreo.
     *
     * @param string $value (required, string) The word you want to look up on Wordnik.
     * @return Wordnik_Word_GetHyphenation_Inputs For method chaining.
     */
    public function setWord($value)
    {
        return $this->set('Word', $value);
    }
}


/**
 * Execution object for the GetHyphenation Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetHyphenation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetHyphenation Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetHyphenation execution.
     * @param Wordnik_Word_GetHyphenation $choreo The choreography object for this execution.
     * @param Wordnik_Word_GetHyphenation_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetHyphenation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetHyphenation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Word_GetHyphenation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetHyphenation execution.
     *
     * @return Wordnik_Word_GetHyphenation_Results New results object.
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
     * Wraps results in appropriate results class for this GetHyphenation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Word_GetHyphenation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Word_GetHyphenation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetHyphenation Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetHyphenation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetHyphenation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Word_GetHyphenation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetHyphenation execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a word list by its ID.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_GetWordList extends Temboo_Choreography
{
    /**
     * Retrieves a word list by its ID.
     *
     * @param Temboo_Session $session The session that owns this GetWordList Choreo.
     * @return Wordnik_WordList_GetWordList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/WordList/GetWordList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetWordList Choreo.
     *
     * @param Wordnik_WordList_GetWordList_Inputs|array $inputs (optional) Inputs as Wordnik_WordList_GetWordList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_WordList_GetWordList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_WordList_GetWordList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWordList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_WordList_GetWordList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_WordList_GetWordList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_GetWordList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetWordList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_WordList_GetWordList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWordList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_WordList_GetWordList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_WordList_GetWordList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWordList Choreo.
     *
     * @param string $value (required, string) The API Key obtained from Wordnik.
     * @return Wordnik_WordList_GetWordList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this GetWordList Choreo.
     *
     * @param string $value (required, string) The Password of the Wordnik account.
     * @return Wordnik_WordList_GetWordList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetWordList Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_WordList_GetWordList_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Username input for this GetWordList Choreo.
     *
     * @param string $value (required, string) The Username of the Wordnik account.
     * @return Wordnik_WordList_GetWordList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WordList input for this GetWordList Choreo.
     *
     * @param string $value (required, string) The perma-link for the Word List to retrieve.
     * @return Wordnik_WordList_GetWordList_Inputs For method chaining.
     */
    public function setWordList($value)
    {
        return $this->set('WordList', $value);
    }
}


/**
 * Execution object for the GetWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_GetWordList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWordList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetWordList execution.
     * @param Wordnik_WordList_GetWordList $choreo The choreography object for this execution.
     * @param Wordnik_WordList_GetWordList_Inputs|array $inputs (optional) Inputs as Wordnik_WordList_GetWordList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_WordList_GetWordList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_WordList_GetWordList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWordList execution.
     *
     * @return Wordnik_WordList_GetWordList_Results New results object.
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
     * Wraps results in appropriate results class for this GetWordList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_WordList_GetWordList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_WordList_GetWordList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_GetWordList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetWordList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_WordList_GetWordList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetWordList execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the pronuciation of a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetPronunciations extends Temboo_Choreography
{
    /**
     * Retrieves the pronuciation of a given word.
     *
     * @param Temboo_Session $session The session that owns this GetPronunciations Choreo.
     * @return Wordnik_Word_GetPronunciations New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Word/GetPronunciations/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetPronunciations Choreo.
     *
     * @param Wordnik_Word_GetPronunciations_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetPronunciations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetPronunciations_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Word_GetPronunciations_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetPronunciations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetPronunciations_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Word_GetPronunciations_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetPronunciations Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetPronunciations_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetPronunciations Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetPronunciations_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetPronunciations input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Word_GetPronunciations_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Word_GetPronunciations_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetPronunciations Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Word_GetPronunciations_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cannonical input for this GetPronunciations Choreo.
     *
     * @param string $value (optional, string) If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested. Defaults to false.
     * @return Wordnik_Word_GetPronunciations_Inputs For method chaining.
     */
    public function setCannonical($value)
    {
        return $this->set('Cannonical', $value);
    }

    /**
     * Set the value for the Dictionary input for this GetPronunciations Choreo.
     *
     * @param string $value (optional, string) Source dictionary to return pronunciation from. Acceptable values: ahd, century, cmu, macmillan, wiktionary,webster, wordnet.
     * @return Wordnik_Word_GetPronunciations_Inputs For method chaining.
     */
    public function setDictionary($value)
    {
        return $this->set('Dictionary', $value);
    }

    /**
     * Set the value for the Limit input for this GetPronunciations Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return. Defaults to 50.
     * @return Wordnik_Word_GetPronunciations_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetPronunciations Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Word_GetPronunciations_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the TypeFormat input for this GetPronunciations Choreo.
     *
     * @param string $value (optional, string) Text pronunciation type. Acceptable values: ahd, arpabet, gcide-diacritical, IPA.
     * @return Wordnik_Word_GetPronunciations_Inputs For method chaining.
     */
    public function setTypeFormat($value)
    {
        return $this->set('TypeFormat', $value);
    }

    /**
     * Set the value for the Word input for this GetPronunciations Choreo.
     *
     * @param string $value (required, string) The word you want to look up on Wordnik.
     * @return Wordnik_Word_GetPronunciations_Inputs For method chaining.
     */
    public function setWord($value)
    {
        return $this->set('Word', $value);
    }
}


/**
 * Execution object for the GetPronunciations Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetPronunciations_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetPronunciations Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetPronunciations execution.
     * @param Wordnik_Word_GetPronunciations $choreo The choreography object for this execution.
     * @param Wordnik_Word_GetPronunciations_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetPronunciations_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetPronunciations_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Word_GetPronunciations $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetPronunciations execution.
     *
     * @return Wordnik_Word_GetPronunciations_Results New results object.
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
     * Wraps results in appropriate results class for this GetPronunciations execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Word_GetPronunciations_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Word_GetPronunciations_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetPronunciations Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetPronunciations_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetPronunciations Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Word_GetPronunciations_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetPronunciations execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrievs the words in a word list.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_GetWordsInWordList extends Temboo_Choreography
{
    /**
     * Retrievs the words in a word list.
     *
     * @param Temboo_Session $session The session that owns this GetWordsInWordList Choreo.
     * @return Wordnik_WordList_GetWordsInWordList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/WordList/GetWordsInWordList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetWordsInWordList Choreo.
     *
     * @param Wordnik_WordList_GetWordsInWordList_Inputs|array $inputs (optional) Inputs as Wordnik_WordList_GetWordsInWordList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_WordList_GetWordsInWordList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_WordList_GetWordsInWordList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWordsInWordList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_WordList_GetWordsInWordList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWordsInWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_GetWordsInWordList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetWordsInWordList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWordsInWordList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWordsInWordList Choreo.
     *
     * @param string $value (required, string) The API Key obtained from Wordnik.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this GetWordsInWordList Choreo.
     *
     * @param int $value (optional, integer) Limits teh number of results returned. Defaults to 100.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Password input for this GetWordsInWordList Choreo.
     *
     * @param string $value (required, string) The Password of the Wordnik user account.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetWordsInWordList Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Skip input for this GetWordsInWordList Choreo.
     *
     * @param int $value (optional, integer) Number of results to skip. Defaults to 0.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the SortBy input for this GetWordsInWordList Choreo.
     *
     * @param string $value (optional, string) Sorts the results by either alpha (alphabetically) or createDate (the date created). Defaults to createDate.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setSortBy($value)
    {
        return $this->set('SortBy', $value);
    }

    /**
     * Set the value for the SortOrder input for this GetWordsInWordList Choreo.
     *
     * @param string $value (optional, string) The direction to sort results by either asc (ascending) or desc (descending). Defaults to desc.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setSortOrder($value)
    {
        return $this->set('SortOrder', $value);
    }

    /**
     * Set the value for the Username input for this GetWordsInWordList Choreo.
     *
     * @param string $value (required, string) The Username of the Wordnik user.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the WordList input for this GetWordsInWordList Choreo.
     *
     * @param string $value (required, string) The perma-link for the Word List to retrieve.
     * @return Wordnik_WordList_GetWordsInWordList_Inputs For method chaining.
     */
    public function setWordList($value)
    {
        return $this->set('WordList', $value);
    }
}


/**
 * Execution object for the GetWordsInWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_GetWordsInWordList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWordsInWordList Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetWordsInWordList execution.
     * @param Wordnik_WordList_GetWordsInWordList $choreo The choreography object for this execution.
     * @param Wordnik_WordList_GetWordsInWordList_Inputs|array $inputs (optional) Inputs as Wordnik_WordList_GetWordsInWordList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_WordList_GetWordsInWordList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_WordList_GetWordsInWordList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWordsInWordList execution.
     *
     * @return Wordnik_WordList_GetWordsInWordList_Results New results object.
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
     * Wraps results in appropriate results class for this GetWordsInWordList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_WordList_GetWordsInWordList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_WordList_GetWordsInWordList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetWordsInWordList Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_WordList_GetWordsInWordList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetWordsInWordList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_WordList_GetWordsInWordList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetWordsInWordList execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the related words of a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetRelatedWords extends Temboo_Choreography
{
    /**
     * Retrieves the related words of a given word.
     *
     * @param Temboo_Session $session The session that owns this GetRelatedWords Choreo.
     * @return Wordnik_Word_GetRelatedWords New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Word/GetRelatedWords/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRelatedWords Choreo.
     *
     * @param Wordnik_Word_GetRelatedWords_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetRelatedWords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetRelatedWords_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Word_GetRelatedWords_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRelatedWords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetRelatedWords_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Word_GetRelatedWords_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRelatedWords Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetRelatedWords_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRelatedWords Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetRelatedWords_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRelatedWords input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Word_GetRelatedWords_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Word_GetRelatedWords_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetRelatedWords Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Word_GetRelatedWords_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cannonical input for this GetRelatedWords Choreo.
     *
     * @param string $value (optional, string) If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested. Defaults to false.
     * @return Wordnik_Word_GetRelatedWords_Inputs For method chaining.
     */
    public function setCannonical($value)
    {
        return $this->set('Cannonical', $value);
    }

    /**
     * Set the value for the LimitPerType input for this GetRelatedWords Choreo.
     *
     * @param int $value (optional, integer) Limits the amount of results returned for each relationship type included in the output. Defaults to 10.
     * @return Wordnik_Word_GetRelatedWords_Inputs For method chaining.
     */
    public function setLimitPerType($value)
    {
        return $this->set('LimitPerType', $value);
    }

    /**
     * Set the value for the RelationshipType input for this GetRelatedWords Choreo.
     *
     * @param string $value (optional, string) Limits the total results per type of relationship. Acceptable values inlcude adjective, noun, etc. See docs for complete list.
     * @return Wordnik_Word_GetRelatedWords_Inputs For method chaining.
     */
    public function setRelationshipType($value)
    {
        return $this->set('RelationshipType', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetRelatedWords Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Word_GetRelatedWords_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Word input for this GetRelatedWords Choreo.
     *
     * @param string $value (required, string) The word you want to look up on Wordnik.
     * @return Wordnik_Word_GetRelatedWords_Inputs For method chaining.
     */
    public function setWord($value)
    {
        return $this->set('Word', $value);
    }
}


/**
 * Execution object for the GetRelatedWords Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetRelatedWords_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRelatedWords Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRelatedWords execution.
     * @param Wordnik_Word_GetRelatedWords $choreo The choreography object for this execution.
     * @param Wordnik_Word_GetRelatedWords_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetRelatedWords_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetRelatedWords_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Word_GetRelatedWords $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRelatedWords execution.
     *
     * @return Wordnik_Word_GetRelatedWords_Results New results object.
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
     * Wraps results in appropriate results class for this GetRelatedWords execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Word_GetRelatedWords_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Word_GetRelatedWords_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRelatedWords Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetRelatedWords_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRelatedWords Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Word_GetRelatedWords_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRelatedWords execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the examples of a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetExamples extends Temboo_Choreography
{
    /**
     * Retrieves the examples of a given word.
     *
     * @param Temboo_Session $session The session that owns this GetExamples Choreo.
     * @return Wordnik_Word_GetExamples New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Word/GetExamples/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetExamples Choreo.
     *
     * @param Wordnik_Word_GetExamples_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetExamples_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetExamples_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Word_GetExamples_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetExamples Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetExamples_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Word_GetExamples_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetExamples Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetExamples_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetExamples Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetExamples_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetExamples input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Word_GetExamples_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Word_GetExamples_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetExamples Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Word_GetExamples_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cannonical input for this GetExamples Choreo.
     *
     * @param string $value (optional, string) If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested. Defaults to false.
     * @return Wordnik_Word_GetExamples_Inputs For method chaining.
     */
    public function setCannonical($value)
    {
        return $this->set('Cannonical', $value);
    }

    /**
     * Set the value for the Duplicates input for this GetExamples Choreo.
     *
     * @param string $value (optional, string) Shows duplicate examples from different sources when set to true. Defaults to false.
     * @return Wordnik_Word_GetExamples_Inputs For method chaining.
     */
    public function setDuplicates($value)
    {
        return $this->set('Duplicates', $value);
    }

    /**
     * Set the value for the Limit input for this GetExamples Choreo.
     *
     * @param int $value (optional, integer) Maximum number of results to return.
     * @return Wordnik_Word_GetExamples_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetExamples Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Word_GetExamples_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Skip input for this GetExamples Choreo.
     *
     * @param int $value (optional, integer) Results to skip. Defaults to 0.
     * @return Wordnik_Word_GetExamples_Inputs For method chaining.
     */
    public function setSkip($value)
    {
        return $this->set('Skip', $value);
    }

    /**
     * Set the value for the Word input for this GetExamples Choreo.
     *
     * @param string $value (required, string) The word you want to look up on Wordnik.
     * @return Wordnik_Word_GetExamples_Inputs For method chaining.
     */
    public function setWord($value)
    {
        return $this->set('Word', $value);
    }
}


/**
 * Execution object for the GetExamples Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetExamples_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetExamples Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetExamples execution.
     * @param Wordnik_Word_GetExamples $choreo The choreography object for this execution.
     * @param Wordnik_Word_GetExamples_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetExamples_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetExamples_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Word_GetExamples $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetExamples execution.
     *
     * @return Wordnik_Word_GetExamples_Results New results object.
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
     * Wraps results in appropriate results class for this GetExamples execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Word_GetExamples_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Word_GetExamples_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetExamples Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetExamples_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetExamples Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Word_GetExamples_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetExamples execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information on the specified user.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetUser extends Temboo_Choreography
{
    /**
     * Retrieves information on the specified user.
     *
     * @param Temboo_Session $session The session that owns this GetUser Choreo.
     * @return Wordnik_Account_GetUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Account/GetUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetUser Choreo.
     *
     * @param Wordnik_Account_GetUser_Inputs|array $inputs (optional) Inputs as Wordnik_Account_GetUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Account_GetUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Account_GetUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Account_GetUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Account_GetUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUser Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Account_GetUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Account_GetUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Account_GetUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetUser Choreo.
     *
     * @param string $value (required, string) The API Key obtained from Wordnik.
     * @return Wordnik_Account_GetUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this GetUser Choreo.
     *
     * @param string $value (required, string) Password of the Wordnik account. 
     * @return Wordnik_Account_GetUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetUser Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Account_GetUser_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Username input for this GetUser Choreo.
     *
     * @param string $value (required, string) Username of the Wordnik account.
     * @return Wordnik_Account_GetUser_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetUser Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetUser execution.
     * @param Wordnik_Account_GetUser $choreo The choreography object for this execution.
     * @param Wordnik_Account_GetUser_Inputs|array $inputs (optional) Inputs as Wordnik_Account_GetUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Account_GetUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Account_GetUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUser execution.
     *
     * @return Wordnik_Account_GetUser_Results New results object.
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
     * Wraps results in appropriate results class for this GetUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Account_GetUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Account_GetUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetUser Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Account_GetUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Account_GetUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetUser execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the etymology of a given word.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetEtymology extends Temboo_Choreography
{
    /**
     * Retrieves the etymology of a given word.
     *
     * @param Temboo_Session $session The session that owns this GetEtymology Choreo.
     * @return Wordnik_Word_GetEtymology New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Word/GetEtymology/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetEtymology Choreo.
     *
     * @param Wordnik_Word_GetEtymology_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetEtymology_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetEtymology_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Word_GetEtymology_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetEtymology Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetEtymology_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Word_GetEtymology_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetEtymology Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetEtymology_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetEtymology Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Word_GetEtymology_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetEtymology input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Word_GetEtymology_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Word_GetEtymology_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetEtymology Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Word_GetEtymology_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Cannonical input for this GetEtymology Choreo.
     *
     * @param string $value (optional, string) If true will try to return the correct word root ('cats' -> 'cat'). If false returns exactly what was requested. Defaults to false.
     * @return Wordnik_Word_GetEtymology_Inputs For method chaining.
     */
    public function setCannonical($value)
    {
        return $this->set('Cannonical', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetEtymology Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Word_GetEtymology_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }

    /**
     * Set the value for the Word input for this GetEtymology Choreo.
     *
     * @param string $value (required, string) The word you want to look up on Wordnik.
     * @return Wordnik_Word_GetEtymology_Inputs For method chaining.
     */
    public function setWord($value)
    {
        return $this->set('Word', $value);
    }
}


/**
 * Execution object for the GetEtymology Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetEtymology_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetEtymology Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetEtymology execution.
     * @param Wordnik_Word_GetEtymology $choreo The choreography object for this execution.
     * @param Wordnik_Word_GetEtymology_Inputs|array $inputs (optional) Inputs as Wordnik_Word_GetEtymology_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Word_GetEtymology_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Word_GetEtymology $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetEtymology execution.
     *
     * @return Wordnik_Word_GetEtymology_Results New results object.
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
     * Wraps results in appropriate results class for this GetEtymology execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Word_GetEtymology_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Word_GetEtymology_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetEtymology Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Word_GetEtymology_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetEtymology Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Word_GetEtymology_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetEtymology execution.
     *
     * @return string The response from Wordnik.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the word of the day for specified dates.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_GetWordOfTheDay extends Temboo_Choreography
{
    /**
     * Retrieves the word of the day for specified dates.
     *
     * @param Temboo_Session $session The session that owns this GetWordOfTheDay Choreo.
     * @return Wordnik_Words_GetWordOfTheDay New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Wordnik/Words/GetWordOfTheDay/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetWordOfTheDay Choreo.
     *
     * @param Wordnik_Words_GetWordOfTheDay_Inputs|array $inputs (optional) Inputs as Wordnik_Words_GetWordOfTheDay_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_GetWordOfTheDay_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Wordnik_Words_GetWordOfTheDay_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetWordOfTheDay Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_GetWordOfTheDay_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Wordnik_Words_GetWordOfTheDay_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetWordOfTheDay Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_GetWordOfTheDay_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetWordOfTheDay Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Wordnik_Words_GetWordOfTheDay_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetWordOfTheDay input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Wordnik_Words_GetWordOfTheDay_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Wordnik_Words_GetWordOfTheDay_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetWordOfTheDay Choreo.
     *
     * @param string $value (required, string) The API Key from Wordnik.
     * @return Wordnik_Words_GetWordOfTheDay_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Date input for this GetWordOfTheDay Choreo.
     *
     * @param string $value (required, string) The date of the Word of the Day to retrieve, in yyyy-MM-dd format.
     * @return Wordnik_Words_GetWordOfTheDay_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the ResponseType input for this GetWordOfTheDay Choreo.
     *
     * @param string $value (optional, string) Response can be either JSON or XML. Defaults to JSON.
     * @return Wordnik_Words_GetWordOfTheDay_Inputs For method chaining.
     */
    public function setResponseType($value)
    {
        return $this->set('ResponseType', $value);
    }
}


/**
 * Execution object for the GetWordOfTheDay Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_GetWordOfTheDay_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetWordOfTheDay Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetWordOfTheDay execution.
     * @param Wordnik_Words_GetWordOfTheDay $choreo The choreography object for this execution.
     * @param Wordnik_Words_GetWordOfTheDay_Inputs|array $inputs (optional) Inputs as Wordnik_Words_GetWordOfTheDay_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Wordnik_Words_GetWordOfTheDay_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Wordnik_Words_GetWordOfTheDay $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetWordOfTheDay execution.
     *
     * @return Wordnik_Words_GetWordOfTheDay_Results New results object.
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
     * Wraps results in appropriate results class for this GetWordOfTheDay execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Wordnik_Words_GetWordOfTheDay_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Wordnik_Words_GetWordOfTheDay_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetWordOfTheDay Choreo.
 *
 * @package Temboo
 * @subpackage Wordnik
 */
class Wordnik_Words_GetWordOfTheDay_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetWordOfTheDay Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Wordnik_Words_GetWordOfTheDay_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetWordOfTheDay execution.
     *
     * @return string The response from Wordnik.
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
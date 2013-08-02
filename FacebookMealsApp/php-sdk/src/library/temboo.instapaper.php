<?php

/**
 * Temboo PHP SDK Instapaper classes
 *
 * Execute Choreographies from the Temboo Instapaper bundle.
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
 * @subpackage Instapaper
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Add a document to an Instapaper account.
 *
 * @package Temboo
 * @subpackage Instapaper
 */
class Instapaper_AddURL extends Temboo_Choreography
{
    /**
     * Add a document to an Instapaper account.
     *
     * @param Temboo_Session $session The session that owns this AddURL Choreo.
     * @return Instapaper_AddURL New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instapaper/AddURL/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddURL Choreo.
     *
     * @param Instapaper_AddURL_Inputs|array $inputs (optional) Inputs as Instapaper_AddURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instapaper_AddURL_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instapaper_AddURL_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instapaper_AddURL_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instapaper_AddURL_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddURL Choreo.
 *
 * @package Temboo
 * @subpackage Instapaper
 */
class Instapaper_AddURL_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddURL Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instapaper_AddURL_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddURL input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instapaper_AddURL_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instapaper_AddURL_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this AddURL Choreo.
     *
     * @param string $value (required, string) Your Instapaper password.
     * @return Instapaper_AddURL_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Selection input for this AddURL Choreo.
     *
     * @param string $value (optional, string) Enter a description of the URL being added.
     * @return Instapaper_AddURL_Inputs For method chaining.
     */
    public function setSelection($value)
    {
        return $this->set('Selection', $value);
    }

    /**
     * Set the value for the Title input for this AddURL Choreo.
     *
     * @param string $value (optional, string) Enter a titile for the uploaded URL. If no title is provided, Instapaper will crawl the URL to detect a title.
     * @return Instapaper_AddURL_Inputs For method chaining.
     */
    public function setTitle($value)
    {
        return $this->set('Title', $value);
    }

    /**
     * Set the value for the URL input for this AddURL Choreo.
     *
     * @param string $value (required, string) Enter the URL of the document that is being added to an Instapaper account.
     * @return Instapaper_AddURL_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Username input for this AddURL Choreo.
     *
     * @param string $value (required, string) Your Instapaper username.
     * @return Instapaper_AddURL_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the AddURL Choreo.
 *
 * @package Temboo
 * @subpackage Instapaper
 */
class Instapaper_AddURL_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddURL Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddURL execution.
     * @param Instapaper_AddURL $choreo The choreography object for this execution.
     * @param Instapaper_AddURL_Inputs|array $inputs (optional) Inputs as Instapaper_AddURL_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instapaper_AddURL_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instapaper_AddURL $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddURL execution.
     *
     * @return Instapaper_AddURL_Results New results object.
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
     * Wraps results in appropriate results class for this AddURL execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instapaper_AddURL_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instapaper_AddURL_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddURL Choreo.
 *
 * @package Temboo
 * @subpackage Instapaper
 */
class Instapaper_AddURL_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddURL Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instapaper_AddURL_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddURL execution.
     *
     * @return int (integer) The response from Instapaper. Successful reqests will return a 201 status code.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Validate an Instapaper account.
 *
 * @package Temboo
 * @subpackage Instapaper
 */
class Instapaper_Authenticate extends Temboo_Choreography
{
    /**
     * Validate an Instapaper account.
     *
     * @param Temboo_Session $session The session that owns this Authenticate Choreo.
     * @return Instapaper_Authenticate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Instapaper/Authenticate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Authenticate Choreo.
     *
     * @param Instapaper_Authenticate_Inputs|array $inputs (optional) Inputs as Instapaper_Authenticate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instapaper_Authenticate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Instapaper_Authenticate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Authenticate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instapaper_Authenticate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Instapaper_Authenticate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Authenticate Choreo.
 *
 * @package Temboo
 * @subpackage Instapaper
 */
class Instapaper_Authenticate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Authenticate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Instapaper_Authenticate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Authenticate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Instapaper_Authenticate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Instapaper_Authenticate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this Authenticate Choreo.
     *
     * @param string $value (required, string) Your Instapaper password.
     * @return Instapaper_Authenticate_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this Authenticate Choreo.
     *
     * @param string $value (required, string) Your Instapaper username.
     * @return Instapaper_Authenticate_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the Authenticate Choreo.
 *
 * @package Temboo
 * @subpackage Instapaper
 */
class Instapaper_Authenticate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Authenticate Choreo.
     *
     * @param Temboo_Session $session The session that owns this Authenticate execution.
     * @param Instapaper_Authenticate $choreo The choreography object for this execution.
     * @param Instapaper_Authenticate_Inputs|array $inputs (optional) Inputs as Instapaper_Authenticate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Instapaper_Authenticate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Instapaper_Authenticate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Authenticate execution.
     *
     * @return Instapaper_Authenticate_Results New results object.
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
     * Wraps results in appropriate results class for this Authenticate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Instapaper_Authenticate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Instapaper_Authenticate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Authenticate Choreo.
 *
 * @package Temboo
 * @subpackage Instapaper
 */
class Instapaper_Authenticate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Authenticate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Instapaper_Authenticate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Authenticate execution.
     *
     * @return string (xml) The response from Instapaper. Successful reqests will return a 200 status code.
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
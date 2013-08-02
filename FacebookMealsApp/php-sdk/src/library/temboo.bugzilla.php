<?php

/**
 * Temboo PHP SDK Bugzilla classes
 *
 * Execute Choreographies from the Temboo Bugzilla bundle.
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
 * @subpackage Bugzilla
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieve attachments associated with a specifig Bug ID.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveAttachment extends Temboo_Choreography
{
    /**
     * Retrieve attachments associated with a specifig Bug ID.
     *
     * @param Temboo_Session $session The session that owns this RetrieveAttachment Choreo.
     * @return Bugzilla_RetrieveAttachment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bugzilla/RetrieveAttachment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveAttachment Choreo.
     *
     * @param Bugzilla_RetrieveAttachment_Inputs|array $inputs (optional) Inputs as Bugzilla_RetrieveAttachment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_RetrieveAttachment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bugzilla_RetrieveAttachment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveAttachment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_RetrieveAttachment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bugzilla_RetrieveAttachment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveAttachment Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveAttachment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveAttachment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_RetrieveAttachment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveAttachment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bugzilla_RetrieveAttachment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Bugzilla_RetrieveAttachment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AttachmentID input for this RetrieveAttachment Choreo.
     *
     * @param int $value (required, integer) Enter an attachment ID, for which information will be retrieved.
     * @return Bugzilla_RetrieveAttachment_Inputs For method chaining.
     */
    public function setAttachmentID($value)
    {
        return $this->set('AttachmentID', $value);
    }

    /**
     * Set the value for the AttachmentsWithData input for this RetrieveAttachment Choreo.
     *
     * @param int $value (optional, integer) Enter 1 to obtain full bug attachments data.  If null, only attachments fields will be returned with no associated data.
     * @return Bugzilla_RetrieveAttachment_Inputs For method chaining.
     */
    public function setAttachmentsWithData($value)
    {
        return $this->set('AttachmentsWithData', $value);
    }

    /**
     * Set the value for the Password input for this RetrieveAttachment Choreo.
     *
     * @param string $value (optional, password) Your Bugzilla password.
     * @return Bugzilla_RetrieveAttachment_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this RetrieveAttachment Choreo.
     *
     * @param string $value (optional, string) The base URL for the Bugzilla server to access. Defaults to https://api-dev.bugzilla.mozilla.org/latest. To access the test server, set to https://api-dev.bugzilla.mozilla.org/test/latest.
     * @return Bugzilla_RetrieveAttachment_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Username input for this RetrieveAttachment Choreo.
     *
     * @param string $value (optional, string) Your Bugzilla username.
     * @return Bugzilla_RetrieveAttachment_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the RetrieveAttachment Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveAttachment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveAttachment Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveAttachment execution.
     * @param Bugzilla_RetrieveAttachment $choreo The choreography object for this execution.
     * @param Bugzilla_RetrieveAttachment_Inputs|array $inputs (optional) Inputs as Bugzilla_RetrieveAttachment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_RetrieveAttachment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bugzilla_RetrieveAttachment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveAttachment execution.
     *
     * @return Bugzilla_RetrieveAttachment_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveAttachment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bugzilla_RetrieveAttachment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bugzilla_RetrieveAttachment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveAttachment Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveAttachment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveAttachment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bugzilla_RetrieveAttachment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveAttachment execution.
     *
     * @return string (json) The response from Bugzilla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve detailed bug history.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListBugHistory extends Temboo_Choreography
{
    /**
     * Retrieve detailed bug history.
     *
     * @param Temboo_Session $session The session that owns this ListBugHistory Choreo.
     * @return Bugzilla_ListBugHistory New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bugzilla/ListBugHistory/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListBugHistory Choreo.
     *
     * @param Bugzilla_ListBugHistory_Inputs|array $inputs (optional) Inputs as Bugzilla_ListBugHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_ListBugHistory_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bugzilla_ListBugHistory_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListBugHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_ListBugHistory_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bugzilla_ListBugHistory_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListBugHistory Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListBugHistory_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListBugHistory Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_ListBugHistory_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListBugHistory input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bugzilla_ListBugHistory_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Bugzilla_ListBugHistory_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BugID input for this ListBugHistory Choreo.
     *
     * @param int $value (required, integer) Enter a Bug ID, for which information will be retrieved.
     * @return Bugzilla_ListBugHistory_Inputs For method chaining.
     */
    public function setBugID($value)
    {
        return $this->set('BugID', $value);
    }

    /**
     * Set the value for the Password input for this ListBugHistory Choreo.
     *
     * @param string $value (optional, password) Your Bugzilla password.
     * @return Bugzilla_ListBugHistory_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ListBugHistory Choreo.
     *
     * @param string $value (optional, string) The base URL for the Bugzilla server to access. Defaults to https://api-dev.bugzilla.mozilla.org/latest. To access the test server, set to https://api-dev.bugzilla.mozilla.org/test/latest.
     * @return Bugzilla_ListBugHistory_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Username input for this ListBugHistory Choreo.
     *
     * @param string $value (optional, string) Your Bugzilla username.
     * @return Bugzilla_ListBugHistory_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListBugHistory Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListBugHistory_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListBugHistory Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListBugHistory execution.
     * @param Bugzilla_ListBugHistory $choreo The choreography object for this execution.
     * @param Bugzilla_ListBugHistory_Inputs|array $inputs (optional) Inputs as Bugzilla_ListBugHistory_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_ListBugHistory_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bugzilla_ListBugHistory $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListBugHistory execution.
     *
     * @return Bugzilla_ListBugHistory_Results New results object.
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
     * Wraps results in appropriate results class for this ListBugHistory execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bugzilla_ListBugHistory_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bugzilla_ListBugHistory_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListBugHistory Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListBugHistory_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListBugHistory Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bugzilla_ListBugHistory_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListBugHistory execution.
     *
     * @return string (json) The response from Bugzilla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve detailed information for a specifed Bug ID.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveBug extends Temboo_Choreography
{
    /**
     * Retrieve detailed information for a specifed Bug ID.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBug Choreo.
     * @return Bugzilla_RetrieveBug New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bugzilla/RetrieveBug/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveBug Choreo.
     *
     * @param Bugzilla_RetrieveBug_Inputs|array $inputs (optional) Inputs as Bugzilla_RetrieveBug_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_RetrieveBug_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bugzilla_RetrieveBug_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveBug Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_RetrieveBug_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bugzilla_RetrieveBug_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveBug Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveBug_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveBug Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_RetrieveBug_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveBug input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bugzilla_RetrieveBug_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Bugzilla_RetrieveBug_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BugID input for this RetrieveBug Choreo.
     *
     * @param int $value (required, integer) Enter a Bug ID, for which information will be retrieved.
     * @return Bugzilla_RetrieveBug_Inputs For method chaining.
     */
    public function setBugID($value)
    {
        return $this->set('BugID', $value);
    }

    /**
     * Set the value for the IncludeFields input for this RetrieveBug Choreo.
     *
     * @param string $value (optional, string) Enter additional parameters to expand the scope of information returned.  For full bug fetch: _all; Or, a comma-separated list: _default, comments, history, attachments.data
     * @return Bugzilla_RetrieveBug_Inputs For method chaining.
     */
    public function setIncludeFields($value)
    {
        return $this->set('IncludeFields', $value);
    }

    /**
     * Set the value for the Password input for this RetrieveBug Choreo.
     *
     * @param string $value (optional, password) Your Bugzilla password.
     * @return Bugzilla_RetrieveBug_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this RetrieveBug Choreo.
     *
     * @param string $value (optional, string) The base URL for the Bugzilla server to access. Defaults to https://api-dev.bugzilla.mozilla.org/latest. To access the test server, set to https://api-dev.bugzilla.mozilla.org/test/latest.
     * @return Bugzilla_RetrieveBug_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Username input for this RetrieveBug Choreo.
     *
     * @param string $value (optional, string) Your Bugzilla username.
     * @return Bugzilla_RetrieveBug_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the RetrieveBug Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveBug_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveBug Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveBug execution.
     * @param Bugzilla_RetrieveBug $choreo The choreography object for this execution.
     * @param Bugzilla_RetrieveBug_Inputs|array $inputs (optional) Inputs as Bugzilla_RetrieveBug_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_RetrieveBug_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bugzilla_RetrieveBug $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveBug execution.
     *
     * @return Bugzilla_RetrieveBug_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveBug execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bugzilla_RetrieveBug_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bugzilla_RetrieveBug_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveBug Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveBug_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveBug Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bugzilla_RetrieveBug_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveBug execution.
     *
     * @return string (json) The response from Bugzilla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve user info.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveUser extends Temboo_Choreography
{
    /**
     * Retrieve user info.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUser Choreo.
     * @return Bugzilla_RetrieveUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bugzilla/RetrieveUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RetrieveUser Choreo.
     *
     * @param Bugzilla_RetrieveUser_Inputs|array $inputs (optional) Inputs as Bugzilla_RetrieveUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_RetrieveUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bugzilla_RetrieveUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_RetrieveUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bugzilla_RetrieveUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveUser Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RetrieveUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_RetrieveUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bugzilla_RetrieveUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Bugzilla_RetrieveUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this RetrieveUser Choreo.
     *
     * @param string $value (optional, password) Your Bugzilla password.
     * @return Bugzilla_RetrieveUser_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the QueryUserID input for this RetrieveUser Choreo.
     *
     * @param string $value (required, string) Enter the user ID for which information is to be returned. Valid input formats include: email address, or numeric user ID.  If searching by numeric ID, authentication is requred.
     * @return Bugzilla_RetrieveUser_Inputs For method chaining.
     */
    public function setQueryUserID($value)
    {
        return $this->set('QueryUserID', $value);
    }

    /**
     * Set the value for the Server input for this RetrieveUser Choreo.
     *
     * @param string $value (optional, string) The base URL for the Bugzilla server to access. Defaults to https://api-dev.bugzilla.mozilla.org/latest. To access the test server, set to https://api-dev.bugzilla.mozilla.org/test/latest.
     * @return Bugzilla_RetrieveUser_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Username input for this RetrieveUser Choreo.
     *
     * @param string $value (optional, string) Your Bugzilla username.
     * @return Bugzilla_RetrieveUser_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the RetrieveUser Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this RetrieveUser execution.
     * @param Bugzilla_RetrieveUser $choreo The choreography object for this execution.
     * @param Bugzilla_RetrieveUser_Inputs|array $inputs (optional) Inputs as Bugzilla_RetrieveUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_RetrieveUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bugzilla_RetrieveUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveUser execution.
     *
     * @return Bugzilla_RetrieveUser_Results New results object.
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
     * Wraps results in appropriate results class for this RetrieveUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bugzilla_RetrieveUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bugzilla_RetrieveUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RetrieveUser Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_RetrieveUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RetrieveUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bugzilla_RetrieveUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RetrieveUser execution.
     *
     * @return string (json) The response from Bugzilla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for bugs listed by Mozilla product name.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_SearchForBugs extends Temboo_Choreography
{
    /**
     * Search for bugs listed by Mozilla product name.
     *
     * @param Temboo_Session $session The session that owns this SearchForBugs Choreo.
     * @return Bugzilla_SearchForBugs New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bugzilla/SearchForBugs/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchForBugs Choreo.
     *
     * @param Bugzilla_SearchForBugs_Inputs|array $inputs (optional) Inputs as Bugzilla_SearchForBugs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_SearchForBugs_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bugzilla_SearchForBugs_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchForBugs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_SearchForBugs_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bugzilla_SearchForBugs_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchForBugs Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_SearchForBugs_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchForBugs Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_SearchForBugs_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchForBugs input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bugzilla_SearchForBugs_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Bugzilla_SearchForBugs_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BugChangeDate input for this SearchForBugs Choreo.
     *
     * @param string $value (optional, string) Retrieve bugs that were changed within a certain date range. For example: 25d will return all bugs changed from 25 days ago untill today.  Or: 3h, to return all bugs entered with 3 hours.
     * @return Bugzilla_SearchForBugs_Inputs For method chaining.
     */
    public function setBugChangeDate($value)
    {
        return $this->set('BugChangeDate', $value);
    }

    /**
     * Set the value for the Password input for this SearchForBugs Choreo.
     *
     * @param string $value (optional, password) Your Bugzilla password.
     * @return Bugzilla_SearchForBugs_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Priority input for this SearchForBugs Choreo.
     *
     * @param int $value (optional, integer) Filter results by priority: For example: enter P1, to get Priority 1 bugs assoicated with a Product.
     * @return Bugzilla_SearchForBugs_Inputs For method chaining.
     */
    public function setPriority($value)
    {
        return $this->set('Priority', $value);
    }

    /**
     * Set the value for the Product input for this SearchForBugs Choreo.
     *
     * @param string $value (required, string) Enter the Mozilla product for which bugs will be retrieved. For example: Bugzilla
     * @return Bugzilla_SearchForBugs_Inputs For method chaining.
     */
    public function setProduct($value)
    {
        return $this->set('Product', $value);
    }

    /**
     * Set the value for the Server input for this SearchForBugs Choreo.
     *
     * @param string $value (optional, string) The base URL for the Bugzilla server to access. Defaults to https://api-dev.bugzilla.mozilla.org/latest. To access the test server, set to https://api-dev.bugzilla.mozilla.org/test/latest.
     * @return Bugzilla_SearchForBugs_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Severity input for this SearchForBugs Choreo.
     *
     * @param string $value (optional, string) Filter results by severity. For example: blocker
     * @return Bugzilla_SearchForBugs_Inputs For method chaining.
     */
    public function setSeverity($value)
    {
        return $this->set('Severity', $value);
    }

    /**
     * Set the value for the Username input for this SearchForBugs Choreo.
     *
     * @param string $value (required, string) Your Bugzilla username.
     * @return Bugzilla_SearchForBugs_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the SearchForBugs Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_SearchForBugs_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchForBugs Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchForBugs execution.
     * @param Bugzilla_SearchForBugs $choreo The choreography object for this execution.
     * @param Bugzilla_SearchForBugs_Inputs|array $inputs (optional) Inputs as Bugzilla_SearchForBugs_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_SearchForBugs_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bugzilla_SearchForBugs $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchForBugs execution.
     *
     * @return Bugzilla_SearchForBugs_Results New results object.
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
     * Wraps results in appropriate results class for this SearchForBugs execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bugzilla_SearchForBugs_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bugzilla_SearchForBugs_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchForBugs Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_SearchForBugs_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchForBugs Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bugzilla_SearchForBugs_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchForBugs execution.
     *
     * @return string (json) The response from Bugzilla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * List attachments associated with a specifig Bug ID.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListAttachmentsForBug extends Temboo_Choreography
{
    /**
     * List attachments associated with a specifig Bug ID.
     *
     * @param Temboo_Session $session The session that owns this ListAttachmentsForBug Choreo.
     * @return Bugzilla_ListAttachmentsForBug New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bugzilla/ListAttachmentsForBug/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAttachmentsForBug Choreo.
     *
     * @param Bugzilla_ListAttachmentsForBug_Inputs|array $inputs (optional) Inputs as Bugzilla_ListAttachmentsForBug_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_ListAttachmentsForBug_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bugzilla_ListAttachmentsForBug_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAttachmentsForBug Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_ListAttachmentsForBug_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bugzilla_ListAttachmentsForBug_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAttachmentsForBug Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListAttachmentsForBug_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAttachmentsForBug Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_ListAttachmentsForBug_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAttachmentsForBug input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bugzilla_ListAttachmentsForBug_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Bugzilla_ListAttachmentsForBug_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AttachmentsWithData input for this ListAttachmentsForBug Choreo.
     *
     * @param int $value (optional, integer) Enter 1 to obtain full bug attachments data.  If null, only attachments fields will be returned with no associated data.
     * @return Bugzilla_ListAttachmentsForBug_Inputs For method chaining.
     */
    public function setAttachmentsWithData($value)
    {
        return $this->set('AttachmentsWithData', $value);
    }

    /**
     * Set the value for the BugID input for this ListAttachmentsForBug Choreo.
     *
     * @param int $value (required, integer) Enter a Bug ID, for which information will be retrieved.
     * @return Bugzilla_ListAttachmentsForBug_Inputs For method chaining.
     */
    public function setBugID($value)
    {
        return $this->set('BugID', $value);
    }

    /**
     * Set the value for the Password input for this ListAttachmentsForBug Choreo.
     *
     * @param string $value (optional, password) Your Bugzilla password.
     * @return Bugzilla_ListAttachmentsForBug_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ListAttachmentsForBug Choreo.
     *
     * @param string $value (optional, string) The base URL for the Bugzilla server to access. Defaults to https://api-dev.bugzilla.mozilla.org/latest. To access the test server, set to https://api-dev.bugzilla.mozilla.org/test/latest.
     * @return Bugzilla_ListAttachmentsForBug_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Username input for this ListAttachmentsForBug Choreo.
     *
     * @param string $value (optional, string) Your Bugzilla username.
     * @return Bugzilla_ListAttachmentsForBug_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListAttachmentsForBug Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListAttachmentsForBug_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAttachmentsForBug Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAttachmentsForBug execution.
     * @param Bugzilla_ListAttachmentsForBug $choreo The choreography object for this execution.
     * @param Bugzilla_ListAttachmentsForBug_Inputs|array $inputs (optional) Inputs as Bugzilla_ListAttachmentsForBug_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_ListAttachmentsForBug_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bugzilla_ListAttachmentsForBug $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAttachmentsForBug execution.
     *
     * @return Bugzilla_ListAttachmentsForBug_Results New results object.
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
     * Wraps results in appropriate results class for this ListAttachmentsForBug execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bugzilla_ListAttachmentsForBug_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bugzilla_ListAttachmentsForBug_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAttachmentsForBug Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListAttachmentsForBug_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAttachmentsForBug Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bugzilla_ListAttachmentsForBug_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAttachmentsForBug execution.
     *
     * @return string (json) The response from Bugzilla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for a specified Bugzilla user.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_SearchForUsers extends Temboo_Choreography
{
    /**
     * Search for a specified Bugzilla user.
     *
     * @param Temboo_Session $session The session that owns this SearchForUsers Choreo.
     * @return Bugzilla_SearchForUsers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bugzilla/SearchForUsers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchForUsers Choreo.
     *
     * @param Bugzilla_SearchForUsers_Inputs|array $inputs (optional) Inputs as Bugzilla_SearchForUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_SearchForUsers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bugzilla_SearchForUsers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchForUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_SearchForUsers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bugzilla_SearchForUsers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchForUsers Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_SearchForUsers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchForUsers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_SearchForUsers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchForUsers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bugzilla_SearchForUsers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Bugzilla_SearchForUsers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this SearchForUsers Choreo.
     *
     * @param string $value (required, password) Your Bugzilla password.
     * @return Bugzilla_SearchForUsers_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the SearchForUser input for this SearchForUsers Choreo.
     *
     * @param string $value (required, string) Enter the usename to be querried.
     * @return Bugzilla_SearchForUsers_Inputs For method chaining.
     */
    public function setSearchForUser($value)
    {
        return $this->set('SearchForUser', $value);
    }

    /**
     * Set the value for the Server input for this SearchForUsers Choreo.
     *
     * @param string $value (optional, string) The base URL for the Bugzilla server to access. Defaults to https://api-dev.bugzilla.mozilla.org/latest. To access the test server, set to https://api-dev.bugzilla.mozilla.org/test/latest.
     * @return Bugzilla_SearchForUsers_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Username input for this SearchForUsers Choreo.
     *
     * @param string $value (required, string) Your Bugzilla username.
     * @return Bugzilla_SearchForUsers_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the SearchForUsers Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_SearchForUsers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchForUsers Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchForUsers execution.
     * @param Bugzilla_SearchForUsers $choreo The choreography object for this execution.
     * @param Bugzilla_SearchForUsers_Inputs|array $inputs (optional) Inputs as Bugzilla_SearchForUsers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_SearchForUsers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bugzilla_SearchForUsers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchForUsers execution.
     *
     * @return Bugzilla_SearchForUsers_Results New results object.
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
     * Wraps results in appropriate results class for this SearchForUsers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bugzilla_SearchForUsers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bugzilla_SearchForUsers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchForUsers Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_SearchForUsers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchForUsers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bugzilla_SearchForUsers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchForUsers execution.
     *
     * @return string (json) The response from Bugzilla.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve comments for a specifed Bug ID.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListBugComments extends Temboo_Choreography
{
    /**
     * Retrieve comments for a specifed Bug ID.
     *
     * @param Temboo_Session $session The session that owns this ListBugComments Choreo.
     * @return Bugzilla_ListBugComments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Bugzilla/ListBugComments/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListBugComments Choreo.
     *
     * @param Bugzilla_ListBugComments_Inputs|array $inputs (optional) Inputs as Bugzilla_ListBugComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_ListBugComments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Bugzilla_ListBugComments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListBugComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_ListBugComments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Bugzilla_ListBugComments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListBugComments Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListBugComments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListBugComments Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Bugzilla_ListBugComments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListBugComments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Bugzilla_ListBugComments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Bugzilla_ListBugComments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the BugID input for this ListBugComments Choreo.
     *
     * @param int $value (required, integer) Enter a Bug ID, for which information will be retrieved.
     * @return Bugzilla_ListBugComments_Inputs For method chaining.
     */
    public function setBugID($value)
    {
        return $this->set('BugID', $value);
    }

    /**
     * Set the value for the Password input for this ListBugComments Choreo.
     *
     * @param string $value (optional, password) Your Bugzilla password.
     * @return Bugzilla_ListBugComments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Server input for this ListBugComments Choreo.
     *
     * @param string $value (optional, string) The base URL for the Bugzilla server to access. Defaults to https://api-dev.bugzilla.mozilla.org/latest. To access the test server, set to https://api-dev.bugzilla.mozilla.org/test/latest.
     * @return Bugzilla_ListBugComments_Inputs For method chaining.
     */
    public function setServer($value)
    {
        return $this->set('Server', $value);
    }

    /**
     * Set the value for the Username input for this ListBugComments Choreo.
     *
     * @param string $value (optional, string) Your Bugzilla username.
     * @return Bugzilla_ListBugComments_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListBugComments Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListBugComments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListBugComments Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListBugComments execution.
     * @param Bugzilla_ListBugComments $choreo The choreography object for this execution.
     * @param Bugzilla_ListBugComments_Inputs|array $inputs (optional) Inputs as Bugzilla_ListBugComments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Bugzilla_ListBugComments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Bugzilla_ListBugComments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListBugComments execution.
     *
     * @return Bugzilla_ListBugComments_Results New results object.
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
     * Wraps results in appropriate results class for this ListBugComments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Bugzilla_ListBugComments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Bugzilla_ListBugComments_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListBugComments Choreo.
 *
 * @package Temboo
 * @subpackage Bugzilla
 */
class Bugzilla_ListBugComments_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListBugComments Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Bugzilla_ListBugComments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListBugComments execution.
     *
     * @return string (json) The response from Bugzilla.
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
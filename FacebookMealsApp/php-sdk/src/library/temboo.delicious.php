<?php

/**
 * Temboo PHP SDK Delicious classes
 *
 * Execute Choreographies from the Temboo Delicious bundle.
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
 * @subpackage Delicious
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Deletes a bookmarked link from a Delicious account.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_DeleteBookmark extends Temboo_Choreography
{
    /**
     * Deletes a bookmarked link from a Delicious account.
     *
     * @param Temboo_Session $session The session that owns this DeleteBookmark Choreo.
     * @return Delicious_DeleteBookmark New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/DeleteBookmark/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteBookmark Choreo.
     *
     * @param Delicious_DeleteBookmark_Inputs|array $inputs (optional) Inputs as Delicious_DeleteBookmark_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_DeleteBookmark_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_DeleteBookmark_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteBookmark Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_DeleteBookmark_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_DeleteBookmark_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteBookmark Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_DeleteBookmark_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteBookmark Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_DeleteBookmark_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteBookmark input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_DeleteBookmark_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_DeleteBookmark_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this DeleteBookmark Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_DeleteBookmark_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the URL input for this DeleteBookmark Choreo.
     *
     * @param string $value (required, string) The URL for the posted link to delete.
     * @return Delicious_DeleteBookmark_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Username input for this DeleteBookmark Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_DeleteBookmark_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteBookmark Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_DeleteBookmark_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteBookmark Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteBookmark execution.
     * @param Delicious_DeleteBookmark $choreo The choreography object for this execution.
     * @param Delicious_DeleteBookmark_Inputs|array $inputs (optional) Inputs as Delicious_DeleteBookmark_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_DeleteBookmark_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_DeleteBookmark $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteBookmark execution.
     *
     * @return Delicious_DeleteBookmark_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteBookmark execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_DeleteBookmark_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_DeleteBookmark_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteBookmark Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_DeleteBookmark_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteBookmark Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_DeleteBookmark_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteBookmark execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Returns all links posted to a Delicious account.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetAllBookmarks extends Temboo_Choreography
{
    /**
     * Returns all links posted to a Delicious account.
     *
     * @param Temboo_Session $session The session that owns this GetAllBookmarks Choreo.
     * @return Delicious_GetAllBookmarks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/GetAllBookmarks/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAllBookmarks Choreo.
     *
     * @param Delicious_GetAllBookmarks_Inputs|array $inputs (optional) Inputs as Delicious_GetAllBookmarks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetAllBookmarks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_GetAllBookmarks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllBookmarks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetAllBookmarks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_GetAllBookmarks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllBookmarks Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetAllBookmarks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAllBookmarks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetAllBookmarks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllBookmarks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_GetAllBookmarks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_GetAllBookmarks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Count input for this GetAllBookmarks Choreo.
     *
     * @param int $value (optional, integer) The number of bookmarks to return. Defaults to 15.
     * @return Delicious_GetAllBookmarks_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the FromDate input for this GetAllBookmarks Choreo.
     *
     * @param string $value (optional, date) Return only bookmarks posted on this date and later. Enter in YYYY-MM-DDThh:mm:ssZ format.
     * @return Delicious_GetAllBookmarks_Inputs For method chaining.
     */
    public function setFromDate($value)
    {
        return $this->set('FromDate', $value);
    }

    /**
     * Set the value for the Meta input for this GetAllBookmarks Choreo.
     *
     * @param string $value (optional, string) Specify "1" to include a change-detection signature for each item returned. Defaults to "0", or no meta attributes retained.
     * @return Delicious_GetAllBookmarks_Inputs For method chaining.
     */
    public function setMeta($value)
    {
        return $this->set('Meta', $value);
    }

    /**
     * Set the value for the Password input for this GetAllBookmarks Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_GetAllBookmarks_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Tag input for this GetAllBookmarks Choreo.
     *
     * @param string $value (optional, string) Return only bookmrks tagged with this keyword.
     * @return Delicious_GetAllBookmarks_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }

    /**
     * Set the value for the ToDate input for this GetAllBookmarks Choreo.
     *
     * @param string $value (optional, date) Return only bookmarks posted on this date and earlier. Enter in YYYY-MM-DDThh:mm:ssZ format.
     * @return Delicious_GetAllBookmarks_Inputs For method chaining.
     */
    public function setToDate($value)
    {
        return $this->set('ToDate', $value);
    }

    /**
     * Set the value for the Username input for this GetAllBookmarks Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_GetAllBookmarks_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetAllBookmarks Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetAllBookmarks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllBookmarks Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAllBookmarks execution.
     * @param Delicious_GetAllBookmarks $choreo The choreography object for this execution.
     * @param Delicious_GetAllBookmarks_Inputs|array $inputs (optional) Inputs as Delicious_GetAllBookmarks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetAllBookmarks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_GetAllBookmarks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllBookmarks execution.
     *
     * @return Delicious_GetAllBookmarks_Results New results object.
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
     * Wraps results in appropriate results class for this GetAllBookmarks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_GetAllBookmarks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_GetAllBookmarks_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAllBookmarks Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetAllBookmarks_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAllBookmarks Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_GetAllBookmarks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAllBookmarks execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes a specified tag.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_DeleteTag extends Temboo_Choreography
{
    /**
     * Deletes a specified tag.
     *
     * @param Temboo_Session $session The session that owns this DeleteTag Choreo.
     * @return Delicious_DeleteTag New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/DeleteTag/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteTag Choreo.
     *
     * @param Delicious_DeleteTag_Inputs|array $inputs (optional) Inputs as Delicious_DeleteTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_DeleteTag_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_DeleteTag_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteTag Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_DeleteTag_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_DeleteTag_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteTag Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_DeleteTag_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteTag Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_DeleteTag_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteTag input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_DeleteTag_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_DeleteTag_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this DeleteTag Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_DeleteTag_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Tag input for this DeleteTag Choreo.
     *
     * @param string $value (required, string) The tag to delete.
     * @return Delicious_DeleteTag_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }

    /**
     * Set the value for the Username input for this DeleteTag Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_DeleteTag_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteTag Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_DeleteTag_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteTag Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteTag execution.
     * @param Delicious_DeleteTag $choreo The choreography object for this execution.
     * @param Delicious_DeleteTag_Inputs|array $inputs (optional) Inputs as Delicious_DeleteTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_DeleteTag_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_DeleteTag $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteTag execution.
     *
     * @return Delicious_DeleteTag_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteTag execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_DeleteTag_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_DeleteTag_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteTag Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_DeleteTag_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteTag Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_DeleteTag_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteTag execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all tags and the number of bookmarks that use them.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetTags extends Temboo_Choreography
{
    /**
     * Retrieves a list of all tags and the number of bookmarks that use them.
     *
     * @param Temboo_Session $session The session that owns this GetTags Choreo.
     * @return Delicious_GetTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/GetTags/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetTags Choreo.
     *
     * @param Delicious_GetTags_Inputs|array $inputs (optional) Inputs as Delicious_GetTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_GetTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_GetTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetTags Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_GetTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_GetTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this GetTags Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_GetTags_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetTags Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_GetTags_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetTags Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetTags Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetTags execution.
     * @param Delicious_GetTags $choreo The choreography object for this execution.
     * @param Delicious_GetTags_Inputs|array $inputs (optional) Inputs as Delicious_GetTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_GetTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetTags execution.
     *
     * @return Delicious_GetTags_Results New results object.
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
     * Wraps results in appropriate results class for this GetTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_GetTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_GetTags_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetTags Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetTags_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetTags Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_GetTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetTags execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a link bookmark to a Delicious account.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_AddBookmark extends Temboo_Choreography
{
    /**
     * Adds a link bookmark to a Delicious account.
     *
     * @param Temboo_Session $session The session that owns this AddBookmark Choreo.
     * @return Delicious_AddBookmark New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/AddBookmark/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddBookmark Choreo.
     *
     * @param Delicious_AddBookmark_Inputs|array $inputs (optional) Inputs as Delicious_AddBookmark_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_AddBookmark_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_AddBookmark_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddBookmark Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_AddBookmark_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_AddBookmark_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddBookmark Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_AddBookmark_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddBookmark Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_AddBookmark_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddBookmark input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Description input for this AddBookmark Choreo.
     *
     * @param string $value (required, string) A description for the link to post.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function setDescription($value)
    {
        return $this->set('Description', $value);
    }

    /**
     * Set the value for the Notes input for this AddBookmark Choreo.
     *
     * @param string $value (optional, string) Descriptive notes for the posted link.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function setNotes($value)
    {
        return $this->set('Notes', $value);
    }

    /**
     * Set the value for the Password input for this AddBookmark Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Replace input for this AddBookmark Choreo.
     *
     * @param int $value (optional, integer) Specify "1" to replace the post if the URL has already been posted. Set to "0" (don't replace) by default.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function setReplace($value)
    {
        return $this->set('Replace', $value);
    }

    /**
     * Set the value for the Shared input for this AddBookmark Choreo.
     *
     * @param int $value (optional, integer) Specify "1" to make the posted link private. Set to "0" (shared) by default.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function setShared($value)
    {
        return $this->set('Shared', $value);
    }

    /**
     * Set the value for the Tags input for this AddBookmark Choreo.
     *
     * @param string $value (optional, string) Add keyword tags to the posted link. Separate multiple tags with commas.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the URL input for this AddBookmark Choreo.
     *
     * @param string $value (required, string) The URL for the link to post.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Username input for this AddBookmark Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_AddBookmark_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the AddBookmark Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_AddBookmark_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddBookmark Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddBookmark execution.
     * @param Delicious_AddBookmark $choreo The choreography object for this execution.
     * @param Delicious_AddBookmark_Inputs|array $inputs (optional) Inputs as Delicious_AddBookmark_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_AddBookmark_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_AddBookmark $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddBookmark execution.
     *
     * @return Delicious_AddBookmark_Results New results object.
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
     * Wraps results in appropriate results class for this AddBookmark execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_AddBookmark_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_AddBookmark_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddBookmark Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_AddBookmark_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddBookmark Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_AddBookmark_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddBookmark execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of the most recently posted bookmarks.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetRecentBookmarks extends Temboo_Choreography
{
    /**
     * Retrieve a list of the most recently posted bookmarks.
     *
     * @param Temboo_Session $session The session that owns this GetRecentBookmarks Choreo.
     * @return Delicious_GetRecentBookmarks New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/GetRecentBookmarks/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetRecentBookmarks Choreo.
     *
     * @param Delicious_GetRecentBookmarks_Inputs|array $inputs (optional) Inputs as Delicious_GetRecentBookmarks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetRecentBookmarks_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_GetRecentBookmarks_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetRecentBookmarks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetRecentBookmarks_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_GetRecentBookmarks_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetRecentBookmarks Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetRecentBookmarks_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetRecentBookmarks Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetRecentBookmarks_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetRecentBookmarks input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_GetRecentBookmarks_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_GetRecentBookmarks_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Count input for this GetRecentBookmarks Choreo.
     *
     * @param int $value (optional, integer) Specify the number of bookmarks to retrieve, up the maximum of 100. The default is 15.
     * @return Delicious_GetRecentBookmarks_Inputs For method chaining.
     */
    public function setCount($value)
    {
        return $this->set('Count', $value);
    }

    /**
     * Set the value for the Password input for this GetRecentBookmarks Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_GetRecentBookmarks_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Tags input for this GetRecentBookmarks Choreo.
     *
     * @param string $value (optional, string) Return only items tagged with the specified keyword.
     * @return Delicious_GetRecentBookmarks_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Username input for this GetRecentBookmarks Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_GetRecentBookmarks_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetRecentBookmarks Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetRecentBookmarks_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetRecentBookmarks Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetRecentBookmarks execution.
     * @param Delicious_GetRecentBookmarks $choreo The choreography object for this execution.
     * @param Delicious_GetRecentBookmarks_Inputs|array $inputs (optional) Inputs as Delicious_GetRecentBookmarks_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetRecentBookmarks_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_GetRecentBookmarks $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetRecentBookmarks execution.
     *
     * @return Delicious_GetRecentBookmarks_Results New results object.
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
     * Wraps results in appropriate results class for this GetRecentBookmarks execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_GetRecentBookmarks_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_GetRecentBookmarks_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetRecentBookmarks Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetRecentBookmarks_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetRecentBookmarks Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_GetRecentBookmarks_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetRecentBookmarks execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Renames a specified tag.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_RenameTag extends Temboo_Choreography
{
    /**
     * Renames a specified tag.
     *
     * @param Temboo_Session $session The session that owns this RenameTag Choreo.
     * @return Delicious_RenameTag New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/RenameTag/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RenameTag Choreo.
     *
     * @param Delicious_RenameTag_Inputs|array $inputs (optional) Inputs as Delicious_RenameTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_RenameTag_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_RenameTag_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RenameTag Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_RenameTag_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_RenameTag_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RenameTag Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_RenameTag_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RenameTag Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_RenameTag_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RenameTag input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_RenameTag_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_RenameTag_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the NewTag input for this RenameTag Choreo.
     *
     * @param string $value (required, string) The new tag name.
     * @return Delicious_RenameTag_Inputs For method chaining.
     */
    public function setNewTag($value)
    {
        return $this->set('NewTag', $value);
    }

    /**
     * Set the value for the OldTag input for this RenameTag Choreo.
     *
     * @param string $value (required, string) The existing tag to rename.
     * @return Delicious_RenameTag_Inputs For method chaining.
     */
    public function setOldTag($value)
    {
        return $this->set('OldTag', $value);
    }

    /**
     * Set the value for the Password input for this RenameTag Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_RenameTag_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this RenameTag Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_RenameTag_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the RenameTag Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_RenameTag_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RenameTag Choreo.
     *
     * @param Temboo_Session $session The session that owns this RenameTag execution.
     * @param Delicious_RenameTag $choreo The choreography object for this execution.
     * @param Delicious_RenameTag_Inputs|array $inputs (optional) Inputs as Delicious_RenameTag_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_RenameTag_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_RenameTag $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RenameTag execution.
     *
     * @return Delicious_RenameTag_Results New results object.
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
     * Wraps results in appropriate results class for this RenameTag execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_RenameTag_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_RenameTag_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RenameTag Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_RenameTag_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RenameTag Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_RenameTag_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RenameTag execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of suggested tags for a specifed URL.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_SuggestTags extends Temboo_Choreography
{
    /**
     * Retrieves a list of suggested tags for a specifed URL.
     *
     * @param Temboo_Session $session The session that owns this SuggestTags Choreo.
     * @return Delicious_SuggestTags New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/SuggestTags/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SuggestTags Choreo.
     *
     * @param Delicious_SuggestTags_Inputs|array $inputs (optional) Inputs as Delicious_SuggestTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_SuggestTags_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_SuggestTags_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SuggestTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_SuggestTags_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_SuggestTags_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SuggestTags Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_SuggestTags_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SuggestTags Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_SuggestTags_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SuggestTags input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_SuggestTags_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_SuggestTags_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this SuggestTags Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_SuggestTags_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the URL input for this SuggestTags Choreo.
     *
     * @param string $value (required, string) The URL for which to provide tagging suggestions.
     * @return Delicious_SuggestTags_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Username input for this SuggestTags Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_SuggestTags_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the SuggestTags Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_SuggestTags_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SuggestTags Choreo.
     *
     * @param Temboo_Session $session The session that owns this SuggestTags execution.
     * @param Delicious_SuggestTags $choreo The choreography object for this execution.
     * @param Delicious_SuggestTags_Inputs|array $inputs (optional) Inputs as Delicious_SuggestTags_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_SuggestTags_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_SuggestTags $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SuggestTags execution.
     *
     * @return Delicious_SuggestTags_Results New results object.
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
     * Wraps results in appropriate results class for this SuggestTags execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_SuggestTags_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_SuggestTags_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SuggestTags Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_SuggestTags_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SuggestTags Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_SuggestTags_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SuggestTags execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all bookmarks' change detection signatures.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetChangeSignatures extends Temboo_Choreography
{
    /**
     * Retrieves a list of all bookmarks' change detection signatures.
     *
     * @param Temboo_Session $session The session that owns this GetChangeSignatures Choreo.
     * @return Delicious_GetChangeSignatures New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/GetChangeSignatures/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetChangeSignatures Choreo.
     *
     * @param Delicious_GetChangeSignatures_Inputs|array $inputs (optional) Inputs as Delicious_GetChangeSignatures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetChangeSignatures_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_GetChangeSignatures_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetChangeSignatures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetChangeSignatures_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_GetChangeSignatures_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetChangeSignatures Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetChangeSignatures_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetChangeSignatures Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetChangeSignatures_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetChangeSignatures input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_GetChangeSignatures_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_GetChangeSignatures_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this GetChangeSignatures Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_GetChangeSignatures_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetChangeSignatures Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_GetChangeSignatures_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetChangeSignatures Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetChangeSignatures_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetChangeSignatures Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetChangeSignatures execution.
     * @param Delicious_GetChangeSignatures $choreo The choreography object for this execution.
     * @param Delicious_GetChangeSignatures_Inputs|array $inputs (optional) Inputs as Delicious_GetChangeSignatures_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetChangeSignatures_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_GetChangeSignatures $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetChangeSignatures execution.
     *
     * @return Delicious_GetChangeSignatures_Results New results object.
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
     * Wraps results in appropriate results class for this GetChangeSignatures execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_GetChangeSignatures_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_GetChangeSignatures_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetChangeSignatures Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetChangeSignatures_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetChangeSignatures Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_GetChangeSignatures_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetChangeSignatures execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of dates, with the number of bookmarks posted for each date.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetBookmarkDates extends Temboo_Choreography
{
    /**
     * Retrieve a list of dates, with the number of bookmarks posted for each date.
     *
     * @param Temboo_Session $session The session that owns this GetBookmarkDates Choreo.
     * @return Delicious_GetBookmarkDates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/GetBookmarkDates/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBookmarkDates Choreo.
     *
     * @param Delicious_GetBookmarkDates_Inputs|array $inputs (optional) Inputs as Delicious_GetBookmarkDates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetBookmarkDates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_GetBookmarkDates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBookmarkDates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetBookmarkDates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_GetBookmarkDates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBookmarkDates Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetBookmarkDates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBookmarkDates Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetBookmarkDates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBookmarkDates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_GetBookmarkDates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_GetBookmarkDates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Password input for this GetBookmarkDates Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_GetBookmarkDates_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Tags input for this GetBookmarkDates Choreo.
     *
     * @param string $value (optional, string) Return only items tagged with the specified keyword.
     * @return Delicious_GetBookmarkDates_Inputs For method chaining.
     */
    public function setTags($value)
    {
        return $this->set('Tags', $value);
    }

    /**
     * Set the value for the Username input for this GetBookmarkDates Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_GetBookmarkDates_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetBookmarkDates Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetBookmarkDates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBookmarkDates Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBookmarkDates execution.
     * @param Delicious_GetBookmarkDates $choreo The choreography object for this execution.
     * @param Delicious_GetBookmarkDates_Inputs|array $inputs (optional) Inputs as Delicious_GetBookmarkDates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetBookmarkDates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_GetBookmarkDates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBookmarkDates execution.
     *
     * @return Delicious_GetBookmarkDates_Results New results object.
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
     * Wraps results in appropriate results class for this GetBookmarkDates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_GetBookmarkDates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_GetBookmarkDates_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBookmarkDates Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetBookmarkDates_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBookmarkDates Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_GetBookmarkDates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBookmarkDates execution.
     *
     * @return string (xml) The response returned from Delicious.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves one or more bookmarked links posted on a single day.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetBookmark extends Temboo_Choreography
{
    /**
     * Retrieves one or more bookmarked links posted on a single day.
     *
     * @param Temboo_Session $session The session that owns this GetBookmark Choreo.
     * @return Delicious_GetBookmark New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Delicious/GetBookmark/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetBookmark Choreo.
     *
     * @param Delicious_GetBookmark_Inputs|array $inputs (optional) Inputs as Delicious_GetBookmark_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetBookmark_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Delicious_GetBookmark_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBookmark Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetBookmark_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Delicious_GetBookmark_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBookmark Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetBookmark_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetBookmark Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Delicious_GetBookmark_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBookmark input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Delicious_GetBookmark_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Delicious_GetBookmark_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ChangeSignature input for this GetBookmark Choreo.
     *
     * @param string $value (optional, string) Return only bookmarks with the URL MD5 signatures you enter, regardless of posting date. Separate multiple signatures with spaces.
     * @return Delicious_GetBookmark_Inputs For method chaining.
     */
    public function setChangeSignature($value)
    {
        return $this->set('ChangeSignature', $value);
    }

    /**
     * Set the value for the Date input for this GetBookmark Choreo.
     *
     * @param string $value (optional, date) Return only bookmarks posted on a date specified here. Enter in YYYY-MM-DDThh:mm:ssZ format. Defaults to the most recent date.
     * @return Delicious_GetBookmark_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Meta input for this GetBookmark Choreo.
     *
     * @param string $value (optional, string) Specify "1" to include a change-detection signature for each item returned. Defaults to "0", or no meta attributes retained.
     * @return Delicious_GetBookmark_Inputs For method chaining.
     */
    public function setMeta($value)
    {
        return $this->set('Meta', $value);
    }

    /**
     * Set the value for the Password input for this GetBookmark Choreo.
     *
     * @param string $value (required, password) The password that corresponds to the specified Delicious account username.
     * @return Delicious_GetBookmark_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Tag input for this GetBookmark Choreo.
     *
     * @param string $value (optional, string) Return only items tagged with the specified keyword. Separate multiple tags with spaces.
     * @return Delicious_GetBookmark_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }

    /**
     * Set the value for the URL input for this GetBookmark Choreo.
     *
     * @param string $value (optional, string) Return only items with the specified URL, regardless of posting date.
     * @return Delicious_GetBookmark_Inputs For method chaining.
     */
    public function setURL($value)
    {
        return $this->set('URL', $value);
    }

    /**
     * Set the value for the Username input for this GetBookmark Choreo.
     *
     * @param string $value (required, string) A valid Delicious account username.
     * @return Delicious_GetBookmark_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetBookmark Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetBookmark_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBookmark Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetBookmark execution.
     * @param Delicious_GetBookmark $choreo The choreography object for this execution.
     * @param Delicious_GetBookmark_Inputs|array $inputs (optional) Inputs as Delicious_GetBookmark_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Delicious_GetBookmark_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Delicious_GetBookmark $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBookmark execution.
     *
     * @return Delicious_GetBookmark_Results New results object.
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
     * Wraps results in appropriate results class for this GetBookmark execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Delicious_GetBookmark_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Delicious_GetBookmark_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetBookmark Choreo.
 *
 * @package Temboo
 * @subpackage Delicious
 */
class Delicious_GetBookmark_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetBookmark Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Delicious_GetBookmark_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetBookmark execution.
     *
     * @return string (xml) The response returned from Delicious.
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
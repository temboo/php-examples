<?php

/**
 * Temboo PHP SDK FilesAnywhere classes
 *
 * Execute Choreographies from the Temboo FilesAnywhere bundle.
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
 * @subpackage FilesAnywhere
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Lists file property information.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_FileProperties extends Temboo_Choreography
{
    /**
     * Lists file property information.
     *
     * @param Temboo_Session $session The session that owns this FileProperties Choreo.
     * @return FilesAnywhere_FileProperties New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/FileProperties/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FileProperties Choreo.
     *
     * @param FilesAnywhere_FileProperties_Inputs|array $inputs (optional) Inputs as FilesAnywhere_FileProperties_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_FileProperties_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_FileProperties_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FileProperties Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_FileProperties_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_FileProperties_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FileProperties Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_FileProperties_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FileProperties Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_FileProperties_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FileProperties input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_FileProperties_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_FileProperties_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this FileProperties Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_FileProperties_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this FileProperties Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_FileProperties_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Path input for this FileProperties Choreo.
     *
     * @param string $value (required, string) The path to the file you want to retrieve properties for (i.e. \JOHNSMITH\MyFolder\MyFile.txt).
     * @return FilesAnywhere_FileProperties_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Token input for this FileProperties Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_FileProperties_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Username input for this FileProperties Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_FileProperties_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the FileProperties Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_FileProperties_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FileProperties Choreo.
     *
     * @param Temboo_Session $session The session that owns this FileProperties execution.
     * @param FilesAnywhere_FileProperties $choreo The choreography object for this execution.
     * @param FilesAnywhere_FileProperties_Inputs|array $inputs (optional) Inputs as FilesAnywhere_FileProperties_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_FileProperties_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_FileProperties $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FileProperties execution.
     *
     * @return FilesAnywhere_FileProperties_Results New results object.
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
     * Wraps results in appropriate results class for this FileProperties execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_FileProperties_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_FileProperties_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FileProperties Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_FileProperties_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FileProperties Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_FileProperties_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FileProperties execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this FileProperties execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Logout a user.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AccountLogout extends Temboo_Choreography
{
    /**
     * Logout a user.
     *
     * @param Temboo_Session $session The session that owns this AccountLogout Choreo.
     * @return FilesAnywhere_AccountLogout New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/AccountLogout/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AccountLogout Choreo.
     *
     * @param FilesAnywhere_AccountLogout_Inputs|array $inputs (optional) Inputs as FilesAnywhere_AccountLogout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_AccountLogout_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_AccountLogout_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AccountLogout Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_AccountLogout_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_AccountLogout_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AccountLogout Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AccountLogout_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AccountLogout Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_AccountLogout_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AccountLogout input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_AccountLogout_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_AccountLogout_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Token input for this AccountLogout Choreo.
     *
     * @param string $value (required, string) The token retrieved from authentication.  Can be passed from the AccountLogin Choreo.
     * @return FilesAnywhere_AccountLogout_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the AccountLogout Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AccountLogout_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AccountLogout Choreo.
     *
     * @param Temboo_Session $session The session that owns this AccountLogout execution.
     * @param FilesAnywhere_AccountLogout $choreo The choreography object for this execution.
     * @param FilesAnywhere_AccountLogout_Inputs|array $inputs (optional) Inputs as FilesAnywhere_AccountLogout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_AccountLogout_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_AccountLogout $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AccountLogout execution.
     *
     * @return FilesAnywhere_AccountLogout_Results New results object.
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
     * Wraps results in appropriate results class for this AccountLogout execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_AccountLogout_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_AccountLogout_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AccountLogout Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AccountLogout_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AccountLogout Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_AccountLogout_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AccountLogout execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Lists files within a specified directory in your FilesAnywhere account.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ListItems extends Temboo_Choreography
{
    /**
     * Lists files within a specified directory in your FilesAnywhere account.
     *
     * @param Temboo_Session $session The session that owns this ListItems Choreo.
     * @return FilesAnywhere_ListItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/ListItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListItems Choreo.
     *
     * @param FilesAnywhere_ListItems_Inputs|array $inputs (optional) Inputs as FilesAnywhere_ListItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_ListItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_ListItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_ListItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_ListItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListItems Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ListItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_ListItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_ListItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_ListItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListItems Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ListItems_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the PageNum input for this ListItems Choreo.
     *
     * @param int $value (optional, integer) The page number to return. Can be used to page through large result sets. Defaults to 1.
     * @return FilesAnywhere_ListItems_Inputs For method chaining.
     */
    public function setPageNum($value)
    {
        return $this->set('PageNum', $value);
    }

    /**
     * Set the value for the PageSize input for this ListItems Choreo.
     *
     * @param int $value (optional, integer) The number of results to return per page. Defaults to 10.
     * @return FilesAnywhere_ListItems_Inputs For method chaining.
     */
    public function setPageSize($value)
    {
        return $this->set('PageSize', $value);
    }

    /**
     * Set the value for the Password input for this ListItems Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ListItems_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Path input for this ListItems Choreo.
     *
     * @param string $value (required, string) The path to the folder that you want to list items for (i.e. \JOHNSMITH\MyFolder).
     * @return FilesAnywhere_ListItems_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Token input for this ListItems Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_ListItems_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Username input for this ListItems Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ListItems_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListItems Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ListItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListItems execution.
     * @param FilesAnywhere_ListItems $choreo The choreography object for this execution.
     * @param FilesAnywhere_ListItems_Inputs|array $inputs (optional) Inputs as FilesAnywhere_ListItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_ListItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_ListItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListItems execution.
     *
     * @return FilesAnywhere_ListItems_Results New results object.
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
     * Wraps results in appropriate results class for this ListItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_ListItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_ListItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListItems Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ListItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_ListItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListItems execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this ListItems execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Downloads a file from a specified directory in your FilesAnywhere account, and returns the content as Base64 encoded data.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_DownloadBase64EncodedFile extends Temboo_Choreography
{
    /**
     * Downloads a file from a specified directory in your FilesAnywhere account, and returns the content as Base64 encoded data.
     *
     * @param Temboo_Session $session The session that owns this DownloadBase64EncodedFile Choreo.
     * @return FilesAnywhere_DownloadBase64EncodedFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/DownloadBase64EncodedFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DownloadBase64EncodedFile Choreo.
     *
     * @param FilesAnywhere_DownloadBase64EncodedFile_Inputs|array $inputs (optional) Inputs as FilesAnywhere_DownloadBase64EncodedFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_DownloadBase64EncodedFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DownloadBase64EncodedFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_DownloadBase64EncodedFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DownloadBase64EncodedFile Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_DownloadBase64EncodedFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DownloadBase64EncodedFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DownloadBase64EncodedFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DownloadBase64EncodedFile Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this DownloadBase64EncodedFile Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Path input for this DownloadBase64EncodedFile Choreo.
     *
     * @param string $value (required, string) The path to the file you want to download (i.e. \JOHNSMITH\MyFolder\MyFile.txt).
     * @return FilesAnywhere_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Token input for this DownloadBase64EncodedFile Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Username input for this DownloadBase64EncodedFile Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DownloadBase64EncodedFile Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_DownloadBase64EncodedFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DownloadBase64EncodedFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this DownloadBase64EncodedFile execution.
     * @param FilesAnywhere_DownloadBase64EncodedFile $choreo The choreography object for this execution.
     * @param FilesAnywhere_DownloadBase64EncodedFile_Inputs|array $inputs (optional) Inputs as FilesAnywhere_DownloadBase64EncodedFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_DownloadBase64EncodedFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DownloadBase64EncodedFile execution.
     *
     * @return FilesAnywhere_DownloadBase64EncodedFile_Results New results object.
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
     * Wraps results in appropriate results class for this DownloadBase64EncodedFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_DownloadBase64EncodedFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DownloadBase64EncodedFile Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_DownloadBase64EncodedFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DownloadBase64EncodedFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_DownloadBase64EncodedFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DownloadBase64EncodedFile execution.
     *
     * @return string (string) The response from FilesAnywhere. The response contains the Base64 encoded content of the file you are downloading.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this DownloadBase64EncodedFile execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Deletes a file from a specified directory in your FilesAnywhere account.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_DeleteItem extends Temboo_Choreography
{
    /**
     * Deletes a file from a specified directory in your FilesAnywhere account.
     *
     * @param Temboo_Session $session The session that owns this DeleteItem Choreo.
     * @return FilesAnywhere_DeleteItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/DeleteItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteItem Choreo.
     *
     * @param FilesAnywhere_DeleteItem_Inputs|array $inputs (optional) Inputs as FilesAnywhere_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_DeleteItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_DeleteItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_DeleteItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_DeleteItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_DeleteItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_DeleteItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_DeleteItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_DeleteItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteItem Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_DeleteItem_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this DeleteItem Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_DeleteItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Path input for this DeleteItem Choreo.
     *
     * @param string $value (required, string) The path to the file you want to delete (i.e. \JOHNSMITH\MyFolder\MyFile.txt).
     * @return FilesAnywhere_DeleteItem_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Token input for this DeleteItem Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_DeleteItem_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Type input for this DeleteItem Choreo.
     *
     * @param string $value (optional, string) The type of item you are deleting. Can be set to 'file' or 'folder'. Defaults to 'file'.
     * @return FilesAnywhere_DeleteItem_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Username input for this DeleteItem Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_DeleteItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_DeleteItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteItem execution.
     * @param FilesAnywhere_DeleteItem $choreo The choreography object for this execution.
     * @param FilesAnywhere_DeleteItem_Inputs|array $inputs (optional) Inputs as FilesAnywhere_DeleteItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_DeleteItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_DeleteItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteItem execution.
     *
     * @return FilesAnywhere_DeleteItem_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_DeleteItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_DeleteItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteItem Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_DeleteItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_DeleteItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteItem execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this DeleteItem execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Get the comments list of an item.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ItemCommentsList extends Temboo_Choreography
{
    /**
     * Get the comments list of an item.
     *
     * @param Temboo_Session $session The session that owns this ItemCommentsList Choreo.
     * @return FilesAnywhere_ItemCommentsList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/ItemCommentsList/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ItemCommentsList Choreo.
     *
     * @param FilesAnywhere_ItemCommentsList_Inputs|array $inputs (optional) Inputs as FilesAnywhere_ItemCommentsList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_ItemCommentsList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_ItemCommentsList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ItemCommentsList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_ItemCommentsList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_ItemCommentsList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ItemCommentsList Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ItemCommentsList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ItemCommentsList Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_ItemCommentsList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ItemCommentsList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_ItemCommentsList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_ItemCommentsList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ItemCommentsList Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ItemCommentsList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ItemPath input for this ItemCommentsList Choreo.
     *
     * @param string $value (required, string) Enter the path to the item in the following format: \USERNAME\file.txt
     * @return FilesAnywhere_ItemCommentsList_Inputs For method chaining.
     */
    public function setItemPath($value)
    {
        return $this->set('ItemPath', $value);
    }

    /**
     * Set the value for the Password input for this ItemCommentsList Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ItemCommentsList_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Token input for this ItemCommentsList Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_ItemCommentsList_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Username input for this ItemCommentsList Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ItemCommentsList_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ItemCommentsList Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ItemCommentsList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ItemCommentsList Choreo.
     *
     * @param Temboo_Session $session The session that owns this ItemCommentsList execution.
     * @param FilesAnywhere_ItemCommentsList $choreo The choreography object for this execution.
     * @param FilesAnywhere_ItemCommentsList_Inputs|array $inputs (optional) Inputs as FilesAnywhere_ItemCommentsList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_ItemCommentsList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_ItemCommentsList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ItemCommentsList execution.
     *
     * @return FilesAnywhere_ItemCommentsList_Results New results object.
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
     * Wraps results in appropriate results class for this ItemCommentsList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_ItemCommentsList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_ItemCommentsList_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ItemCommentsList Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ItemCommentsList_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ItemCommentsList Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_ItemCommentsList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ItemCommentsList execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this ItemCommentsList execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Create a new folder.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_CreateFolder extends Temboo_Choreography
{
    /**
     * Create a new folder.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder Choreo.
     * @return FilesAnywhere_CreateFolder New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/CreateFolder/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateFolder Choreo.
     *
     * @param FilesAnywhere_CreateFolder_Inputs|array $inputs (optional) Inputs as FilesAnywhere_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_CreateFolder_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_CreateFolder_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_CreateFolder_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_CreateFolder_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_CreateFolder_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateFolder Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_CreateFolder_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateFolder input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_CreateFolder_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_CreateFolder_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateFolder Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_CreateFolder_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the NewFolderName input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) Enter a name for the new folder.
     * @return FilesAnywhere_CreateFolder_Inputs For method chaining.
     */
    public function setNewFolderName($value)
    {
        return $this->set('NewFolderName', $value);
    }

    /**
     * Set the value for the Password input for this CreateFolder Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_CreateFolder_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Path input for this CreateFolder Choreo.
     *
     * @param string $value (required, string) The path to the folder you want to create (i.e. \JOHNSMITH\MyFolder).
     * @return FilesAnywhere_CreateFolder_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Token input for this CreateFolder Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_CreateFolder_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Username input for this CreateFolder Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_CreateFolder_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_CreateFolder_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateFolder Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateFolder execution.
     * @param FilesAnywhere_CreateFolder $choreo The choreography object for this execution.
     * @param FilesAnywhere_CreateFolder_Inputs|array $inputs (optional) Inputs as FilesAnywhere_CreateFolder_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_CreateFolder_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_CreateFolder $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateFolder execution.
     *
     * @return FilesAnywhere_CreateFolder_Results New results object.
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
     * Wraps results in appropriate results class for this CreateFolder execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_CreateFolder_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_CreateFolder_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateFolder Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_CreateFolder_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateFolder Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_CreateFolder_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateFolder execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this CreateFolder execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Add a comment to an item.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AddItemComment extends Temboo_Choreography
{
    /**
     * Add a comment to an item.
     *
     * @param Temboo_Session $session The session that owns this AddItemComment Choreo.
     * @return FilesAnywhere_AddItemComment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/AddItemComment/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddItemComment Choreo.
     *
     * @param FilesAnywhere_AddItemComment_Inputs|array $inputs (optional) Inputs as FilesAnywhere_AddItemComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_AddItemComment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_AddItemComment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddItemComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_AddItemComment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_AddItemComment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddItemComment Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AddItemComment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddItemComment Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_AddItemComment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddItemComment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddItemComment Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Comment input for this AddItemComment Choreo.
     *
     * @param string $value (required, string) Enter item comment.
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function setComment($value)
    {
        return $this->set('Comment', $value);
    }

    /**
     * Set the value for the FullName input for this AddItemComment Choreo.
     *
     * @param string $value (required, string) Provide the full name of the user entering the comment.
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function setFullName($value)
    {
        return $this->set('FullName', $value);
    }

    /**
     * Set the value for the ParentID input for this AddItemComment Choreo.
     *
     * @param int $value (required, integer) Specify the ID of the parent comment.
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function setParentID($value)
    {
        return $this->set('ParentID', $value);
    }

    /**
     * Set the value for the Password input for this AddItemComment Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Path input for this AddItemComment Choreo.
     *
     * @param string $value (required, string) Enter the path to the item in the following format: \USERNAME\file.txt
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Token input for this AddItemComment Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Username input for this AddItemComment Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_AddItemComment_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the AddItemComment Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AddItemComment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddItemComment Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddItemComment execution.
     * @param FilesAnywhere_AddItemComment $choreo The choreography object for this execution.
     * @param FilesAnywhere_AddItemComment_Inputs|array $inputs (optional) Inputs as FilesAnywhere_AddItemComment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_AddItemComment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_AddItemComment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddItemComment execution.
     *
     * @return FilesAnywhere_AddItemComment_Results New results object.
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
     * Wraps results in appropriate results class for this AddItemComment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_AddItemComment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_AddItemComment_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddItemComment Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AddItemComment_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddItemComment Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_AddItemComment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddItemComment execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this AddItemComment execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Rename an item.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_RenameItem extends Temboo_Choreography
{
    /**
     * Rename an item.
     *
     * @param Temboo_Session $session The session that owns this RenameItem Choreo.
     * @return FilesAnywhere_RenameItem New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/RenameItem/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this RenameItem Choreo.
     *
     * @param FilesAnywhere_RenameItem_Inputs|array $inputs (optional) Inputs as FilesAnywhere_RenameItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_RenameItem_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_RenameItem_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RenameItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_RenameItem_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_RenameItem_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RenameItem Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_RenameItem_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the RenameItem Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_RenameItem_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RenameItem input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_RenameItem_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_RenameItem_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RenameItem Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_RenameItem_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the NewName input for this RenameItem Choreo.
     *
     * @param string $value (required, string) Enter the new name for the item.
     * @return FilesAnywhere_RenameItem_Inputs For method chaining.
     */
    public function setNewName($value)
    {
        return $this->set('NewName', $value);
    }

    /**
     * Set the value for the Password input for this RenameItem Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_RenameItem_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Path input for this RenameItem Choreo.
     *
     * @param string $value (required, string) The path to the file you want to rename (i.e. \JOHNSMITH\MyFolder\MyFile.txt).
     * @return FilesAnywhere_RenameItem_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Token input for this RenameItem Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_RenameItem_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Type input for this RenameItem Choreo.
     *
     * @param string $value (required, string) Specify the type of file being renamed by entering: folder, OR, file.
     * @return FilesAnywhere_RenameItem_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

    /**
     * Set the value for the Username input for this RenameItem Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_RenameItem_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the RenameItem Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_RenameItem_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RenameItem Choreo.
     *
     * @param Temboo_Session $session The session that owns this RenameItem execution.
     * @param FilesAnywhere_RenameItem $choreo The choreography object for this execution.
     * @param FilesAnywhere_RenameItem_Inputs|array $inputs (optional) Inputs as FilesAnywhere_RenameItem_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_RenameItem_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_RenameItem $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RenameItem execution.
     *
     * @return FilesAnywhere_RenameItem_Results New results object.
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
     * Wraps results in appropriate results class for this RenameItem execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_RenameItem_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_RenameItem_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the RenameItem Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_RenameItem_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the RenameItem Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_RenameItem_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this RenameItem execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this RenameItem execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Generate a URL from which a file can be viewed.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ViewFile extends Temboo_Choreography
{
    /**
     * Generate a URL from which a file can be viewed.
     *
     * @param Temboo_Session $session The session that owns this ViewFile Choreo.
     * @return FilesAnywhere_ViewFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/ViewFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ViewFile Choreo.
     *
     * @param FilesAnywhere_ViewFile_Inputs|array $inputs (optional) Inputs as FilesAnywhere_ViewFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_ViewFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_ViewFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ViewFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_ViewFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_ViewFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ViewFile Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ViewFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ViewFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_ViewFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ViewFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_ViewFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_ViewFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ViewFile Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ViewFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this ViewFile Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ViewFile_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Path input for this ViewFile Choreo.
     *
     * @param string $value (required, string) Enter the path to the item being viewed in the following format: \USERNAME\file.txt
     * @return FilesAnywhere_ViewFile_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Token input for this ViewFile Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_ViewFile_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Username input for this ViewFile Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ViewFile_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ViewFile Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ViewFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ViewFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this ViewFile execution.
     * @param FilesAnywhere_ViewFile $choreo The choreography object for this execution.
     * @param FilesAnywhere_ViewFile_Inputs|array $inputs (optional) Inputs as FilesAnywhere_ViewFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_ViewFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_ViewFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ViewFile execution.
     *
     * @return FilesAnywhere_ViewFile_Results New results object.
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
     * Wraps results in appropriate results class for this ViewFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_ViewFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_ViewFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ViewFile Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ViewFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ViewFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_ViewFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ViewFile execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this ViewFile execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * List user volumes.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ListUserVolumes extends Temboo_Choreography
{
    /**
     * List user volumes.
     *
     * @param Temboo_Session $session The session that owns this ListUserVolumes Choreo.
     * @return FilesAnywhere_ListUserVolumes New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/ListUserVolumes/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUserVolumes Choreo.
     *
     * @param FilesAnywhere_ListUserVolumes_Inputs|array $inputs (optional) Inputs as FilesAnywhere_ListUserVolumes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_ListUserVolumes_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_ListUserVolumes_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUserVolumes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_ListUserVolumes_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_ListUserVolumes_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUserVolumes Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ListUserVolumes_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUserVolumes Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_ListUserVolumes_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUserVolumes input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_ListUserVolumes_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_ListUserVolumes_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListUserVolumes Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ListUserVolumes_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this ListUserVolumes Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ListUserVolumes_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Token input for this ListUserVolumes Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_ListUserVolumes_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Username input for this ListUserVolumes Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_ListUserVolumes_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

}


/**
 * Execution object for the ListUserVolumes Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ListUserVolumes_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUserVolumes Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUserVolumes execution.
     * @param FilesAnywhere_ListUserVolumes $choreo The choreography object for this execution.
     * @param FilesAnywhere_ListUserVolumes_Inputs|array $inputs (optional) Inputs as FilesAnywhere_ListUserVolumes_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_ListUserVolumes_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_ListUserVolumes $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUserVolumes execution.
     *
     * @return FilesAnywhere_ListUserVolumes_Results New results object.
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
     * Wraps results in appropriate results class for this ListUserVolumes execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_ListUserVolumes_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_ListUserVolumes_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUserVolumes Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_ListUserVolumes_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUserVolumes Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_ListUserVolumes_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUserVolumes execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this ListUserVolumes execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Uploads a file to a specified directory in your FilesAnywhere account.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_UploadFile extends Temboo_Choreography
{
    /**
     * Uploads a file to a specified directory in your FilesAnywhere account.
     *
     * @param Temboo_Session $session The session that owns this UploadFile Choreo.
     * @return FilesAnywhere_UploadFile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/UploadFile/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UploadFile Choreo.
     *
     * @param FilesAnywhere_UploadFile_Inputs|array $inputs (optional) Inputs as FilesAnywhere_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_UploadFile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_UploadFile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UploadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_UploadFile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_UploadFile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_UploadFile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UploadFile Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_UploadFile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UploadFile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_UploadFile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_UploadFile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UploadFile Choreo.
     *
     * @param string $value (conditional, string) The API Key provided by FilesAnywhere. Required unless supplying a valid Token input.
     * @return FilesAnywhere_UploadFile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the FileContents input for this UploadFile Choreo.
     *
     * @param string $value (optional, string) The base64 encoded file contents of the file you want to upload. Required unless using the VaultFile alias (an advanced option used when running Choreos in the Temboo Designer).
     * @return FilesAnywhere_UploadFile_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the Password input for this UploadFile Choreo.
     *
     * @param string $value (conditional, password) Your FilesAnywhere password. Required unless supplying a valid Token input.
     * @return FilesAnywhere_UploadFile_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Path input for this UploadFile Choreo.
     *
     * @param string $value (required, string) The file path that you want to use for the upload (i.e. \JOHNSMITH\MyFolder\MyFile.txt)
     * @return FilesAnywhere_UploadFile_Inputs For method chaining.
     */
    public function setPath($value)
    {
        return $this->set('Path', $value);
    }

    /**
     * Set the value for the Token input for this UploadFile Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @return FilesAnywhere_UploadFile_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }

    /**
     * Set the value for the Username input for this UploadFile Choreo.
     *
     * @param string $value (conditional, string) Your FilesAnywhere username. Required unless supplying a valid Token input.
     * @return FilesAnywhere_UploadFile_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

}


/**
 * Execution object for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_UploadFile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UploadFile Choreo.
     *
     * @param Temboo_Session $session The session that owns this UploadFile execution.
     * @param FilesAnywhere_UploadFile $choreo The choreography object for this execution.
     * @param FilesAnywhere_UploadFile_Inputs|array $inputs (optional) Inputs as FilesAnywhere_UploadFile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_UploadFile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_UploadFile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UploadFile execution.
     *
     * @return FilesAnywhere_UploadFile_Results New results object.
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
     * Wraps results in appropriate results class for this UploadFile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_UploadFile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_UploadFile_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UploadFile Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_UploadFile_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UploadFile Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_UploadFile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UploadFile execution.
     *
     * @return string (xml) The response from FilesAnywhere
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this UploadFile execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when APIKey, Username, and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Retrieves an authentication token from FilesAnywhere.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AccountLogin extends Temboo_Choreography
{
    /**
     * Retrieves an authentication token from FilesAnywhere.
     *
     * @param Temboo_Session $session The session that owns this AccountLogin Choreo.
     * @return FilesAnywhere_AccountLogin New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/FilesAnywhere/AccountLogin/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AccountLogin Choreo.
     *
     * @param FilesAnywhere_AccountLogin_Inputs|array $inputs (optional) Inputs as FilesAnywhere_AccountLogin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_AccountLogin_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new FilesAnywhere_AccountLogin_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AccountLogin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_AccountLogin_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new FilesAnywhere_AccountLogin_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AccountLogin Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AccountLogin_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AccountLogin Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return FilesAnywhere_AccountLogin_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AccountLogin input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return FilesAnywhere_AccountLogin_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return FilesAnywhere_AccountLogin_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AccountLogin Choreo.
     *
     * @param string $value (required, string) The API Key provided by FilesAnywhere.
     * @return FilesAnywhere_AccountLogin_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AllowedIPList input for this AccountLogin Choreo.
     *
     * @param string $value (optional, string) List of allowed IP addresses.  Multiple IP addresses can be separated by commas.
     * @return FilesAnywhere_AccountLogin_Inputs For method chaining.
     */
    public function setAllowedIPList($value)
    {
        return $this->set('AllowedIPList', $value);
    }

    /**
     * Set the value for the ClientEncryptParam input for this AccountLogin Choreo.
     *
     * @param string $value (optional, string) Used to return an encrypted password to use for subsequent logins.
     * @return FilesAnywhere_AccountLogin_Inputs For method chaining.
     */
    public function setClientEncryptParam($value)
    {
        return $this->set('ClientEncryptParam', $value);
    }

    /**
     * Set the value for the OrgID input for this AccountLogin Choreo.
     *
     * @param int $value (optional, integer) Defaults to 0 for a FilesAnywhere Web account.  Use 50 for a FilesAnywhere WebAdvanced account.
     * @return FilesAnywhere_AccountLogin_Inputs For method chaining.
     */
    public function setOrgID($value)
    {
        return $this->set('OrgID', $value);
    }

    /**
     * Set the value for the Password input for this AccountLogin Choreo.
     *
     * @param string $value (required, password) Your FilesAnywhere password.
     * @return FilesAnywhere_AccountLogin_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this AccountLogin Choreo.
     *
     * @param string $value (required, string) Your FilesAnywhere username.
     * @return FilesAnywhere_AccountLogin_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the AccountLogin Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AccountLogin_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AccountLogin Choreo.
     *
     * @param Temboo_Session $session The session that owns this AccountLogin execution.
     * @param FilesAnywhere_AccountLogin $choreo The choreography object for this execution.
     * @param FilesAnywhere_AccountLogin_Inputs|array $inputs (optional) Inputs as FilesAnywhere_AccountLogin_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return FilesAnywhere_AccountLogin_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, FilesAnywhere_AccountLogin $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AccountLogin execution.
     *
     * @return FilesAnywhere_AccountLogin_Results New results object.
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
     * Wraps results in appropriate results class for this AccountLogin execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return FilesAnywhere_AccountLogin_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new FilesAnywhere_AccountLogin_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AccountLogin Choreo.
 *
 * @package Temboo
 * @subpackage FilesAnywhere
 */
class FilesAnywhere_AccountLogin_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AccountLogin Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return FilesAnywhere_AccountLogin_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AccountLogin execution.
     *
     * @return string (xml) The response from FilesAnywhere.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this AccountLogin execution.
     *
     * @return string (string) The token value parsed from the FilesAnywhere response.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}


/******************************************************************************
Begin output wrapper classes
******************************************************************************/


?>
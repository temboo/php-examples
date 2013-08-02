<?php

/**
 * Temboo PHP SDK OneLogin classes
 *
 * Execute Choreographies from the Temboo OneLogin bundle.
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
 * @subpackage OneLogin
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves information for a single role.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Roles_ShowRole extends Temboo_Choreography
{
    /**
     * Retrieves information for a single role.
     *
     * @param Temboo_Session $session The session that owns this ShowRole Choreo.
     * @return OneLogin_Roles_ShowRole New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Roles/ShowRole/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowRole Choreo.
     *
     * @param OneLogin_Roles_ShowRole_Inputs|array $inputs (optional) Inputs as OneLogin_Roles_ShowRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Roles_ShowRole_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Roles_ShowRole_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Roles_ShowRole_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Roles_ShowRole_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowRole Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Roles_ShowRole_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowRole Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Roles_ShowRole_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowRole input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Roles_ShowRole_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Roles_ShowRole_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ShowRole Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Roles_ShowRole_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this ShowRole Choreo.
     *
     * @param int $value (required, integer) The id the role you want to return.
     * @return OneLogin_Roles_ShowRole_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the ShowRole Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Roles_ShowRole_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowRole Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowRole execution.
     * @param OneLogin_Roles_ShowRole $choreo The choreography object for this execution.
     * @param OneLogin_Roles_ShowRole_Inputs|array $inputs (optional) Inputs as OneLogin_Roles_ShowRole_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Roles_ShowRole_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Roles_ShowRole $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowRole execution.
     *
     * @return OneLogin_Roles_ShowRole_Results New results object.
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
     * Wraps results in appropriate results class for this ShowRole execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Roles_ShowRole_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Roles_ShowRole_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowRole Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Roles_ShowRole_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowRole Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Roles_ShowRole_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowRole execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing user.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_UpdateUser extends Temboo_Choreography
{
    /**
     * Updates an existing user.
     *
     * @param Temboo_Session $session The session that owns this UpdateUser Choreo.
     * @return OneLogin_Users_UpdateUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Users/UpdateUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateUser Choreo.
     *
     * @param OneLogin_Users_UpdateUser_Inputs|array $inputs (optional) Inputs as OneLogin_Users_UpdateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_UpdateUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Users_UpdateUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_UpdateUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Users_UpdateUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_UpdateUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_UpdateUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateUser Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Address input for this UpdateUser Choreo.
     *
     * @param string $value (conditional, string) The street address for the new account.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the Email input for this UpdateUser Choreo.
     *
     * @param string $value (conditional, string) The email address for the new user.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FirstName input for this UpdateUser Choreo.
     *
     * @param string $value (conditional, string) The first name of the new user.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the GroupID input for this UpdateUser Choreo.
     *
     * @param string $value (optional, string) The group id associated with the new user.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setGroupID($value)
    {
        return $this->set('GroupID', $value);
    }

    /**
     * Set the value for the ID input for this UpdateUser Choreo.
     *
     * @param int $value (required, integer) The id of the user you want to update.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the LastName input for this UpdateUser Choreo.
     *
     * @param string $value (conditional, string) The last name of the new user.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the OpenIDName input for this UpdateUser Choreo.
     *
     * @param string $value (conditional, string) The open id name.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setOpenIDName($value)
    {
        return $this->set('OpenIDName', $value);
    }

    /**
     * Set the value for the Phone input for this UpdateUser Choreo.
     *
     * @param string $value (conditional, string) The phone number of the new user.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the Role input for this UpdateUser Choreo.
     *
     * @param string $value (optional, string) Updates a user's role.
     * @return OneLogin_Users_UpdateUser_Inputs For method chaining.
     */
    public function setRole($value)
    {
        return $this->set('Role', $value);
    }
}


/**
 * Execution object for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_UpdateUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateUser execution.
     * @param OneLogin_Users_UpdateUser $choreo The choreography object for this execution.
     * @param OneLogin_Users_UpdateUser_Inputs|array $inputs (optional) Inputs as OneLogin_Users_UpdateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_UpdateUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Users_UpdateUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateUser execution.
     *
     * @return OneLogin_Users_UpdateUser_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Users_UpdateUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Users_UpdateUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_UpdateUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Users_UpdateUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateUser execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a single group.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Groups_ShowGroup extends Temboo_Choreography
{
    /**
     * Retrieves information for a single group.
     *
     * @param Temboo_Session $session The session that owns this ShowGroup Choreo.
     * @return OneLogin_Groups_ShowGroup New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Groups/ShowGroup/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowGroup Choreo.
     *
     * @param OneLogin_Groups_ShowGroup_Inputs|array $inputs (optional) Inputs as OneLogin_Groups_ShowGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Groups_ShowGroup_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Groups_ShowGroup_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Groups_ShowGroup_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Groups_ShowGroup_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowGroup Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Groups_ShowGroup_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowGroup Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Groups_ShowGroup_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowGroup input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Groups_ShowGroup_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Groups_ShowGroup_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ShowGroup Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Groups_ShowGroup_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this ShowGroup Choreo.
     *
     * @param int $value (required, integer) The id the group you want to return.
     * @return OneLogin_Groups_ShowGroup_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the ShowGroup Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Groups_ShowGroup_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowGroup Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowGroup execution.
     * @param OneLogin_Groups_ShowGroup $choreo The choreography object for this execution.
     * @param OneLogin_Groups_ShowGroup_Inputs|array $inputs (optional) Inputs as OneLogin_Groups_ShowGroup_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Groups_ShowGroup_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Groups_ShowGroup $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowGroup execution.
     *
     * @return OneLogin_Groups_ShowGroup_Results New results object.
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
     * Wraps results in appropriate results class for this ShowGroup execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Groups_ShowGroup_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Groups_ShowGroup_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowGroup Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Groups_ShowGroup_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowGroup Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Groups_ShowGroup_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowGroup execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all accounts.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_ListAll extends Temboo_Choreography
{
    /**
     * Retrieves a list of all accounts.
     *
     * @param Temboo_Session $session The session that owns this ListAll Choreo.
     * @return OneLogin_Accounts_ListAll New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Accounts/ListAll/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAll Choreo.
     *
     * @param OneLogin_Accounts_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Accounts_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Accounts_ListAll_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Accounts_ListAll_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Accounts_ListAll_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Accounts_ListAll_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_ListAll_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Accounts_ListAll_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAll input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Accounts_ListAll_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Accounts_ListAll_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAll Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Accounts_ListAll_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }
}


/**
 * Execution object for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_ListAll_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAll Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAll execution.
     * @param OneLogin_Accounts_ListAll $choreo The choreography object for this execution.
     * @param OneLogin_Accounts_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Accounts_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Accounts_ListAll_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Accounts_ListAll $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAll execution.
     *
     * @return OneLogin_Accounts_ListAll_Results New results object.
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
     * Wraps results in appropriate results class for this ListAll execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Accounts_ListAll_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Accounts_ListAll_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_ListAll_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAll Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Accounts_ListAll_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAll execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all events (aka activities).
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_ListAll extends Temboo_Choreography
{
    /**
     * Retrieves a list of all events (aka activities).
     *
     * @param Temboo_Session $session The session that owns this ListAll Choreo.
     * @return OneLogin_Events_ListAll New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Events/ListAll/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAll Choreo.
     *
     * @param OneLogin_Events_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Events_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Events_ListAll_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Events_ListAll_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Events_ListAll_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Events_ListAll_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_ListAll_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Events_ListAll_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAll input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Events_ListAll_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Events_ListAll_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAll Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Events_ListAll_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }
}


/**
 * Execution object for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_ListAll_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAll Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAll execution.
     * @param OneLogin_Events_ListAll $choreo The choreography object for this execution.
     * @param OneLogin_Events_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Events_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Events_ListAll_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Events_ListAll $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAll execution.
     *
     * @return OneLogin_Events_ListAll_Results New results object.
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
     * Wraps results in appropriate results class for this ListAll execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Events_ListAll_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Events_ListAll_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_ListAll_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAll Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Events_ListAll_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAll execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a single event.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_ShowEvent extends Temboo_Choreography
{
    /**
     * Retrieves information for a single event.
     *
     * @param Temboo_Session $session The session that owns this ShowEvent Choreo.
     * @return OneLogin_Events_ShowEvent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Events/ShowEvent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowEvent Choreo.
     *
     * @param OneLogin_Events_ShowEvent_Inputs|array $inputs (optional) Inputs as OneLogin_Events_ShowEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Events_ShowEvent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Events_ShowEvent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Events_ShowEvent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Events_ShowEvent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowEvent Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_ShowEvent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Events_ShowEvent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowEvent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Events_ShowEvent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Events_ShowEvent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ShowEvent Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Events_ShowEvent_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this ShowEvent Choreo.
     *
     * @param int $value (required, integer) The id the event you want to return.
     * @return OneLogin_Events_ShowEvent_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the ShowEvent Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_ShowEvent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowEvent Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowEvent execution.
     * @param OneLogin_Events_ShowEvent $choreo The choreography object for this execution.
     * @param OneLogin_Events_ShowEvent_Inputs|array $inputs (optional) Inputs as OneLogin_Events_ShowEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Events_ShowEvent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Events_ShowEvent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowEvent execution.
     *
     * @return OneLogin_Events_ShowEvent_Results New results object.
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
     * Wraps results in appropriate results class for this ShowEvent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Events_ShowEvent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Events_ShowEvent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowEvent Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_ShowEvent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowEvent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Events_ShowEvent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowEvent execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all groups.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Groups_ListAll extends Temboo_Choreography
{
    /**
     * Retrieves a list of all groups.
     *
     * @param Temboo_Session $session The session that owns this ListAll Choreo.
     * @return OneLogin_Groups_ListAll New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Groups/ListAll/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAll Choreo.
     *
     * @param OneLogin_Groups_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Groups_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Groups_ListAll_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Groups_ListAll_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Groups_ListAll_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Groups_ListAll_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Groups_ListAll_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Groups_ListAll_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAll input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Groups_ListAll_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Groups_ListAll_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAll Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Groups_ListAll_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }
}


/**
 * Execution object for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Groups_ListAll_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAll Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAll execution.
     * @param OneLogin_Groups_ListAll $choreo The choreography object for this execution.
     * @param OneLogin_Groups_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Groups_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Groups_ListAll_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Groups_ListAll $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAll execution.
     *
     * @return OneLogin_Groups_ListAll_Results New results object.
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
     * Wraps results in appropriate results class for this ListAll execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Groups_ListAll_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Groups_ListAll_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Groups_ListAll_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAll Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Groups_ListAll_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAll execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a single user.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_ShowUser extends Temboo_Choreography
{
    /**
     * Retrieves information for a single user.
     *
     * @param Temboo_Session $session The session that owns this ShowUser Choreo.
     * @return OneLogin_Users_ShowUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Users/ShowUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowUser Choreo.
     *
     * @param OneLogin_Users_ShowUser_Inputs|array $inputs (optional) Inputs as OneLogin_Users_ShowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_ShowUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Users_ShowUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_ShowUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Users_ShowUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_ShowUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_ShowUser_Inputs New instance.
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
     * @return OneLogin_Users_ShowUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Users_ShowUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ShowUser Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Users_ShowUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this ShowUser Choreo.
     *
     * @param int $value (required, integer) The id the user you want to return.
     * @return OneLogin_Users_ShowUser_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the ShowUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_ShowUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowUser execution.
     * @param OneLogin_Users_ShowUser $choreo The choreography object for this execution.
     * @param OneLogin_Users_ShowUser_Inputs|array $inputs (optional) Inputs as OneLogin_Users_ShowUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_ShowUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Users_ShowUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowUser execution.
     *
     * @return OneLogin_Users_ShowUser_Results New results object.
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
     * @return OneLogin_Users_ShowUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Users_ShowUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_ShowUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Users_ShowUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowUser execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new account.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_CreateAccount extends Temboo_Choreography
{
    /**
     * Creates a new account.
     *
     * @param Temboo_Session $session The session that owns this CreateAccount Choreo.
     * @return OneLogin_Accounts_CreateAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Accounts/CreateAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateAccount Choreo.
     *
     * @param OneLogin_Accounts_CreateAccount_Inputs|array $inputs (optional) Inputs as OneLogin_Accounts_CreateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Accounts_CreateAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Accounts_CreateAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Accounts_CreateAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Accounts_CreateAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateAccount Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_CreateAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Accounts_CreateAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccountName input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The account name.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Address input for this CreateAccount Choreo.
     *
     * @param string $value (optional, string) The street address for the new account.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the City input for this CreateAccount Choreo.
     *
     * @param string $value (optional, string) The city associated with the address.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Country input for this CreateAccount Choreo.
     *
     * @param string $value (optional, string) The country associated with the address of the new account.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Email input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The email address for the new account.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FirstName input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The first name on the new account.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the LastName input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) The last name on the new account.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Phone input for this CreateAccount Choreo.
     *
     * @param string $value (optional, string) The phone number for the new account.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the Plan input for this CreateAccount Choreo.
     *
     * @param string $value (required, string) Indicates which plan the new account has (i.e. enterprise).
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setPlan($value)
    {
        return $this->set('Plan', $value);
    }

    /**
     * Set the value for the State input for this CreateAccount Choreo.
     *
     * @param string $value (optional, string) The state associated with the address of the new account.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Zip input for this CreateAccount Choreo.
     *
     * @param string $value (optional, string) The postal code associated with the address of the new account.
     * @return OneLogin_Accounts_CreateAccount_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the CreateAccount Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_CreateAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateAccount execution.
     * @param OneLogin_Accounts_CreateAccount $choreo The choreography object for this execution.
     * @param OneLogin_Accounts_CreateAccount_Inputs|array $inputs (optional) Inputs as OneLogin_Accounts_CreateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Accounts_CreateAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Accounts_CreateAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateAccount execution.
     *
     * @return OneLogin_Accounts_CreateAccount_Results New results object.
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
     * Wraps results in appropriate results class for this CreateAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Accounts_CreateAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Accounts_CreateAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateAccount Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_CreateAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Accounts_CreateAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateAccount execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all users.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_ListAll extends Temboo_Choreography
{
    /**
     * Retrieves a list of all users.
     *
     * @param Temboo_Session $session The session that owns this ListAll Choreo.
     * @return OneLogin_Users_ListAll New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Users/ListAll/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAll Choreo.
     *
     * @param OneLogin_Users_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Users_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_ListAll_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Users_ListAll_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_ListAll_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Users_ListAll_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_ListAll_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_ListAll_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAll input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Users_ListAll_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Users_ListAll_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAll Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Users_ListAll_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }
}


/**
 * Execution object for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_ListAll_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAll Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAll execution.
     * @param OneLogin_Users_ListAll $choreo The choreography object for this execution.
     * @param OneLogin_Users_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Users_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_ListAll_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Users_ListAll $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAll execution.
     *
     * @return OneLogin_Users_ListAll_Results New results object.
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
     * Wraps results in appropriate results class for this ListAll execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Users_ListAll_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Users_ListAll_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_ListAll_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAll Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Users_ListAll_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAll execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves information for a single account.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_ShowAccount extends Temboo_Choreography
{
    /**
     * Retrieves information for a single account.
     *
     * @param Temboo_Session $session The session that owns this ShowAccount Choreo.
     * @return OneLogin_Accounts_ShowAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Accounts/ShowAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ShowAccount Choreo.
     *
     * @param OneLogin_Accounts_ShowAccount_Inputs|array $inputs (optional) Inputs as OneLogin_Accounts_ShowAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Accounts_ShowAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Accounts_ShowAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Accounts_ShowAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Accounts_ShowAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowAccount Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_ShowAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ShowAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Accounts_ShowAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Accounts_ShowAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Accounts_ShowAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ShowAccount Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Accounts_ShowAccount_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this ShowAccount Choreo.
     *
     * @param int $value (required, integer) The id the account you want to return.
     * @return OneLogin_Accounts_ShowAccount_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the ShowAccount Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_ShowAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this ShowAccount execution.
     * @param OneLogin_Accounts_ShowAccount $choreo The choreography object for this execution.
     * @param OneLogin_Accounts_ShowAccount_Inputs|array $inputs (optional) Inputs as OneLogin_Accounts_ShowAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Accounts_ShowAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Accounts_ShowAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowAccount execution.
     *
     * @return OneLogin_Accounts_ShowAccount_Results New results object.
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
     * Wraps results in appropriate results class for this ShowAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Accounts_ShowAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Accounts_ShowAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ShowAccount Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_ShowAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ShowAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Accounts_ShowAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ShowAccount execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deletes an existing user.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_DeleteUser extends Temboo_Choreography
{
    /**
     * Deletes an existing user.
     *
     * @param Temboo_Session $session The session that owns this DeleteUser Choreo.
     * @return OneLogin_Users_DeleteUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Users/DeleteUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this DeleteUser Choreo.
     *
     * @param OneLogin_Users_DeleteUser_Inputs|array $inputs (optional) Inputs as OneLogin_Users_DeleteUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_DeleteUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Users_DeleteUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_DeleteUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Users_DeleteUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_DeleteUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the DeleteUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_DeleteUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Users_DeleteUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Users_DeleteUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteUser Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Users_DeleteUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ID input for this DeleteUser Choreo.
     *
     * @param int $value (required, integer) The id the user you want to delete.
     * @return OneLogin_Users_DeleteUser_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }
}


/**
 * Execution object for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_DeleteUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this DeleteUser execution.
     * @param OneLogin_Users_DeleteUser $choreo The choreography object for this execution.
     * @param OneLogin_Users_DeleteUser_Inputs|array $inputs (optional) Inputs as OneLogin_Users_DeleteUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_DeleteUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Users_DeleteUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteUser execution.
     *
     * @return OneLogin_Users_DeleteUser_Results New results object.
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
     * Wraps results in appropriate results class for this DeleteUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Users_DeleteUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Users_DeleteUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the DeleteUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_DeleteUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the DeleteUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Users_DeleteUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this DeleteUser execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all roles.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Roles_ListAll extends Temboo_Choreography
{
    /**
     * Retrieves a list of all roles.
     *
     * @param Temboo_Session $session The session that owns this ListAll Choreo.
     * @return OneLogin_Roles_ListAll New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Roles/ListAll/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAll Choreo.
     *
     * @param OneLogin_Roles_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Roles_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Roles_ListAll_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Roles_ListAll_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Roles_ListAll_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Roles_ListAll_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Roles_ListAll_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAll Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Roles_ListAll_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAll input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Roles_ListAll_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Roles_ListAll_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAll Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Roles_ListAll_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }
}


/**
 * Execution object for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Roles_ListAll_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAll Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAll execution.
     * @param OneLogin_Roles_ListAll $choreo The choreography object for this execution.
     * @param OneLogin_Roles_ListAll_Inputs|array $inputs (optional) Inputs as OneLogin_Roles_ListAll_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Roles_ListAll_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Roles_ListAll $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAll execution.
     *
     * @return OneLogin_Roles_ListAll_Results New results object.
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
     * Wraps results in appropriate results class for this ListAll execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Roles_ListAll_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Roles_ListAll_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAll Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Roles_ListAll_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAll Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Roles_ListAll_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAll execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing account.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_UpdateAccount extends Temboo_Choreography
{
    /**
     * Updates an existing account.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccount Choreo.
     * @return OneLogin_Accounts_UpdateAccount New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Accounts/UpdateAccount/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateAccount Choreo.
     *
     * @param OneLogin_Accounts_UpdateAccount_Inputs|array $inputs (optional) Inputs as OneLogin_Accounts_UpdateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Accounts_UpdateAccount_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Accounts_UpdateAccount_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Accounts_UpdateAccount_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Accounts_UpdateAccount_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateAccount Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_UpdateAccount_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateAccount Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Accounts_UpdateAccount_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateAccount input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateAccount Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the AccountName input for this UpdateAccount Choreo.
     *
     * @param string $value (required, string) The account name.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setAccountName($value)
    {
        return $this->set('AccountName', $value);
    }

    /**
     * Set the value for the Address input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) The street address for the new account.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the City input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) The city associated with the address.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Country input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) The country associated with the address of the new account.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Email input for this UpdateAccount Choreo.
     *
     * @param string $value (required, string) The email address for the new account.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FirstName input for this UpdateAccount Choreo.
     *
     * @param string $value (required, string) The first name on the new account.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the ID input for this UpdateAccount Choreo.
     *
     * @param int $value (required, integer) The id of the account to update.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setID($value)
    {
        return $this->set('ID', $value);
    }

    /**
     * Set the value for the LastName input for this UpdateAccount Choreo.
     *
     * @param string $value (required, string) The last name on the new account.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Phone input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) The phone number for the new account.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the Plan input for this UpdateAccount Choreo.
     *
     * @param string $value (required, string) Indicates which plan the new account has (i.e. enterprise).
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setPlan($value)
    {
        return $this->set('Plan', $value);
    }

    /**
     * Set the value for the State input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) The state associated with the address of the new account.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Zip input for this UpdateAccount Choreo.
     *
     * @param string $value (optional, string) The postal code associated with the address of the new account.
     * @return OneLogin_Accounts_UpdateAccount_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }
}


/**
 * Execution object for the UpdateAccount Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_UpdateAccount_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateAccount Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccount execution.
     * @param OneLogin_Accounts_UpdateAccount $choreo The choreography object for this execution.
     * @param OneLogin_Accounts_UpdateAccount_Inputs|array $inputs (optional) Inputs as OneLogin_Accounts_UpdateAccount_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Accounts_UpdateAccount_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Accounts_UpdateAccount $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateAccount execution.
     *
     * @return OneLogin_Accounts_UpdateAccount_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateAccount execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Accounts_UpdateAccount_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Accounts_UpdateAccount_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateAccount Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Accounts_UpdateAccount_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateAccount Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Accounts_UpdateAccount_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateAccount execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new event.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_CreateEvent extends Temboo_Choreography
{
    /**
     * Creates a new event.
     *
     * @param Temboo_Session $session The session that owns this CreateEvent Choreo.
     * @return OneLogin_Events_CreateEvent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Events/CreateEvent/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateEvent Choreo.
     *
     * @param OneLogin_Events_CreateEvent_Inputs|array $inputs (optional) Inputs as OneLogin_Events_CreateEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Events_CreateEvent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Events_CreateEvent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Events_CreateEvent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Events_CreateEvent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateEvent Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_CreateEvent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateEvent Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Events_CreateEvent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateEvent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Events_CreateEvent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Events_CreateEvent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateEvent Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Events_CreateEvent_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EventTypeID input for this CreateEvent Choreo.
     *
     * @param int $value (required, integer) The id for the type of event you want to create. Note that depending on the event type id specified, you may need to provide the ObjectName and ObjectID that is being affected.
     * @return OneLogin_Events_CreateEvent_Inputs For method chaining.
     */
    public function setEventTypeID($value)
    {
        return $this->set('EventTypeID', $value);
    }

    /**
     * Set the value for the ObjectID input for this CreateEvent Choreo.
     *
     * @param int $value (conditional, integer) The object id that is being affected. Required for certain event types. When specified, ObjectName must also be provided.
     * @return OneLogin_Events_CreateEvent_Inputs For method chaining.
     */
    public function setObjectID($value)
    {
        return $this->set('ObjectID', $value);
    }

    /**
     * Set the value for the ObjectName input for this CreateEvent Choreo.
     *
     * @param string $value (conditional, string) The object name that is being affected (i.e. user-id). Required for certain event types. When specified, ObjectID must also be provided.
     * @return OneLogin_Events_CreateEvent_Inputs For method chaining.
     */
    public function setObjectName($value)
    {
        return $this->set('ObjectName', $value);
    }
}


/**
 * Execution object for the CreateEvent Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_CreateEvent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateEvent Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateEvent execution.
     * @param OneLogin_Events_CreateEvent $choreo The choreography object for this execution.
     * @param OneLogin_Events_CreateEvent_Inputs|array $inputs (optional) Inputs as OneLogin_Events_CreateEvent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Events_CreateEvent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Events_CreateEvent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateEvent execution.
     *
     * @return OneLogin_Events_CreateEvent_Results New results object.
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
     * Wraps results in appropriate results class for this CreateEvent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Events_CreateEvent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Events_CreateEvent_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateEvent Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Events_CreateEvent_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateEvent Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Events_CreateEvent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateEvent execution.
     *
     * @return string (xml) The response from OneLogin.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a new user.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_CreateUser extends Temboo_Choreography
{
    /**
     * Creates a new user.
     *
     * @param Temboo_Session $session The session that owns this CreateUser Choreo.
     * @return OneLogin_Users_CreateUser New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/OneLogin/Users/CreateUser/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateUser Choreo.
     *
     * @param OneLogin_Users_CreateUser_Inputs|array $inputs (optional) Inputs as OneLogin_Users_CreateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_CreateUser_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new OneLogin_Users_CreateUser_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_CreateUser_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new OneLogin_Users_CreateUser_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_CreateUser_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateUser Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return OneLogin_Users_CreateUser_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateUser input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateUser Choreo.
     *
     * @param string $value (required, string) The API Key provided by OneLogin.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Address input for this CreateUser Choreo.
     *
     * @param string $value (conditional, string) The street address for the new account.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the Email input for this CreateUser Choreo.
     *
     * @param string $value (conditional, string) The email address for the new user.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the FirstName input for this CreateUser Choreo.
     *
     * @param string $value (conditional, string) The first name of the new user.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the GroupID input for this CreateUser Choreo.
     *
     * @param string $value (optional, string) The group id associated with the new user.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function setGroupID($value)
    {
        return $this->set('GroupID', $value);
    }

    /**
     * Set the value for the LastName input for this CreateUser Choreo.
     *
     * @param string $value (conditional, string) The last name of the new user.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the OpenIDName input for this CreateUser Choreo.
     *
     * @param string $value (conditional, string) The open id name.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function setOpenIDName($value)
    {
        return $this->set('OpenIDName', $value);
    }

    /**
     * Set the value for the Phone input for this CreateUser Choreo.
     *
     * @param string $value (conditional, string) The phone number of the new user.
     * @return OneLogin_Users_CreateUser_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }
}


/**
 * Execution object for the CreateUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_CreateUser_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateUser Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateUser execution.
     * @param OneLogin_Users_CreateUser $choreo The choreography object for this execution.
     * @param OneLogin_Users_CreateUser_Inputs|array $inputs (optional) Inputs as OneLogin_Users_CreateUser_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return OneLogin_Users_CreateUser_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, OneLogin_Users_CreateUser $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateUser execution.
     *
     * @return OneLogin_Users_CreateUser_Results New results object.
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
     * Wraps results in appropriate results class for this CreateUser execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return OneLogin_Users_CreateUser_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new OneLogin_Users_CreateUser_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateUser Choreo.
 *
 * @package Temboo
 * @subpackage OneLogin
 */
class OneLogin_Users_CreateUser_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateUser Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return OneLogin_Users_CreateUser_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateUser execution.
     *
     * @return string (xml) The response from OneLogin.
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
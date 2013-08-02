<?php

/**
 * Temboo PHP SDK ConstantContact classes
 *
 * Execute Choreographies from the Temboo ConstantContact bundle.
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
 * @subpackage ConstantContact
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Allows you to search Constant Contact by email to retrieve a contact's information.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_SearchContactsByEmail extends Temboo_Choreography
{
    /**
     * Allows you to search Constant Contact by email to retrieve a contact's information.
     *
     * @param Temboo_Session $session The session that owns this SearchContactsByEmail Choreo.
     * @return ConstantContact_SearchContactsByEmail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ConstantContact/SearchContactsByEmail/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchContactsByEmail Choreo.
     *
     * @param ConstantContact_SearchContactsByEmail_Inputs|array $inputs (optional) Inputs as ConstantContact_SearchContactsByEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_SearchContactsByEmail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ConstantContact_SearchContactsByEmail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchContactsByEmail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_SearchContactsByEmail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ConstantContact_SearchContactsByEmail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchContactsByEmail Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_SearchContactsByEmail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchContactsByEmail Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_SearchContactsByEmail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchContactsByEmail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ConstantContact_SearchContactsByEmail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ConstantContact_SearchContactsByEmail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchContactsByEmail Choreo.
     *
     * @param string $value (required, string) The API Key provided by Constant Contact.
     * @return ConstantContact_SearchContactsByEmail_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EmailAddress input for this SearchContactsByEmail Choreo.
     *
     * @param string $value (required, string) The email address to use in your search.
     * @return ConstantContact_SearchContactsByEmail_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the Password input for this SearchContactsByEmail Choreo.
     *
     * @param string $value (required, password) Your Constant Contact password.
     * @return ConstantContact_SearchContactsByEmail_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UserName input for this SearchContactsByEmail Choreo.
     *
     * @param string $value (required, string) Your Constant Contact username.
     * @return ConstantContact_SearchContactsByEmail_Inputs For method chaining.
     */
    public function setUserName($value)
    {
        return $this->set('UserName', $value);
    }
}


/**
 * Execution object for the SearchContactsByEmail Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_SearchContactsByEmail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchContactsByEmail Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchContactsByEmail execution.
     * @param ConstantContact_SearchContactsByEmail $choreo The choreography object for this execution.
     * @param ConstantContact_SearchContactsByEmail_Inputs|array $inputs (optional) Inputs as ConstantContact_SearchContactsByEmail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_SearchContactsByEmail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ConstantContact_SearchContactsByEmail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchContactsByEmail execution.
     *
     * @return ConstantContact_SearchContactsByEmail_Results New results object.
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
     * Wraps results in appropriate results class for this SearchContactsByEmail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ConstantContact_SearchContactsByEmail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ConstantContact_SearchContactsByEmail_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchContactsByEmail Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_SearchContactsByEmail_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchContactsByEmail Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ConstantContact_SearchContactsByEmail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchContactsByEmail execution.
     *
     * @return string (xml) The response from Constant Contact.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves contact information from Constant Contact by specifying the contact ID.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_ObtainContactInformation extends Temboo_Choreography
{
    /**
     * Retrieves contact information from Constant Contact by specifying the contact ID.
     *
     * @param Temboo_Session $session The session that owns this ObtainContactInformation Choreo.
     * @return ConstantContact_ObtainContactInformation New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ConstantContact/ObtainContactInformation/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ObtainContactInformation Choreo.
     *
     * @param ConstantContact_ObtainContactInformation_Inputs|array $inputs (optional) Inputs as ConstantContact_ObtainContactInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_ObtainContactInformation_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ConstantContact_ObtainContactInformation_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ObtainContactInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_ObtainContactInformation_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ConstantContact_ObtainContactInformation_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ObtainContactInformation Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_ObtainContactInformation_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ObtainContactInformation Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_ObtainContactInformation_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ObtainContactInformation input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ConstantContact_ObtainContactInformation_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ConstantContact_ObtainContactInformation_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ObtainContactInformation Choreo.
     *
     * @param string $value (required, string) The API Key provided by Constant Contact.
     * @return ConstantContact_ObtainContactInformation_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ContactId input for this ObtainContactInformation Choreo.
     *
     * @param int $value (required, integer) The ID for the contact you want to retrieve information for.
     * @return ConstantContact_ObtainContactInformation_Inputs For method chaining.
     */
    public function setContactId($value)
    {
        return $this->set('ContactId', $value);
    }

    /**
     * Set the value for the Password input for this ObtainContactInformation Choreo.
     *
     * @param string $value (required, password) Your Constant Contact password.
     * @return ConstantContact_ObtainContactInformation_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UserName input for this ObtainContactInformation Choreo.
     *
     * @param string $value (required, string) Your Constant Contact username.
     * @return ConstantContact_ObtainContactInformation_Inputs For method chaining.
     */
    public function setUserName($value)
    {
        return $this->set('UserName', $value);
    }
}


/**
 * Execution object for the ObtainContactInformation Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_ObtainContactInformation_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ObtainContactInformation Choreo.
     *
     * @param Temboo_Session $session The session that owns this ObtainContactInformation execution.
     * @param ConstantContact_ObtainContactInformation $choreo The choreography object for this execution.
     * @param ConstantContact_ObtainContactInformation_Inputs|array $inputs (optional) Inputs as ConstantContact_ObtainContactInformation_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_ObtainContactInformation_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ConstantContact_ObtainContactInformation $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ObtainContactInformation execution.
     *
     * @return ConstantContact_ObtainContactInformation_Results New results object.
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
     * Wraps results in appropriate results class for this ObtainContactInformation execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ConstantContact_ObtainContactInformation_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ConstantContact_ObtainContactInformation_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ObtainContactInformation Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_ObtainContactInformation_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ObtainContactInformation Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ConstantContact_ObtainContactInformation_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ObtainContactInformation execution.
     *
     * @return string (xml) The response from Constant Contact.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Searches your Constant Contact list by last updated date.  Use this Choreo for synchronizing your lists with other systems. 
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_SearchContactsByUpdatedSince extends Temboo_Choreography
{
    /**
     * Searches your Constant Contact list by last updated date.  Use this Choreo for synchronizing your lists with other systems. 
     *
     * @param Temboo_Session $session The session that owns this SearchContactsByUpdatedSince Choreo.
     * @return ConstantContact_SearchContactsByUpdatedSince New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ConstantContact/SearchContactsByUpdatedSince/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SearchContactsByUpdatedSince Choreo.
     *
     * @param ConstantContact_SearchContactsByUpdatedSince_Inputs|array $inputs (optional) Inputs as ConstantContact_SearchContactsByUpdatedSince_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_SearchContactsByUpdatedSince_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ConstantContact_SearchContactsByUpdatedSince_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SearchContactsByUpdatedSince Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_SearchContactsByUpdatedSince_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ConstantContact_SearchContactsByUpdatedSince_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SearchContactsByUpdatedSince Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_SearchContactsByUpdatedSince_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SearchContactsByUpdatedSince Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_SearchContactsByUpdatedSince_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SearchContactsByUpdatedSince input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ConstantContact_SearchContactsByUpdatedSince_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ConstantContact_SearchContactsByUpdatedSince_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SearchContactsByUpdatedSince Choreo.
     *
     * @param string $value (required, string) The API Key provided by Constant Contact.
     * @return ConstantContact_SearchContactsByUpdatedSince_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ListType input for this SearchContactsByUpdatedSince Choreo.
     *
     * @param string $value (optional, string) The list type to query.  Supported values for this parameter are: active, removed and do-not-mail. Defaults to 'active'.
     * @return ConstantContact_SearchContactsByUpdatedSince_Inputs For method chaining.
     */
    public function setListType($value)
    {
        return $this->set('ListType', $value);
    }

    /**
     * Set the value for the Password input for this SearchContactsByUpdatedSince Choreo.
     *
     * @param string $value (required, password) Your Constant Contact password.
     * @return ConstantContact_SearchContactsByUpdatedSince_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UpdatedSince input for this SearchContactsByUpdatedSince Choreo.
     *
     * @param string $value (required, date) Epoch timestamp in milliseconds or formatted like 2009-12-01T01:00:00.000Z. Used to query for modified records.
     * @return ConstantContact_SearchContactsByUpdatedSince_Inputs For method chaining.
     */
    public function setUpdatedSince($value)
    {
        return $this->set('UpdatedSince', $value);
    }

    /**
     * Set the value for the UserName input for this SearchContactsByUpdatedSince Choreo.
     *
     * @param string $value (required, string) Your Constant Contact username.
     * @return ConstantContact_SearchContactsByUpdatedSince_Inputs For method chaining.
     */
    public function setUserName($value)
    {
        return $this->set('UserName', $value);
    }
}


/**
 * Execution object for the SearchContactsByUpdatedSince Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_SearchContactsByUpdatedSince_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SearchContactsByUpdatedSince Choreo.
     *
     * @param Temboo_Session $session The session that owns this SearchContactsByUpdatedSince execution.
     * @param ConstantContact_SearchContactsByUpdatedSince $choreo The choreography object for this execution.
     * @param ConstantContact_SearchContactsByUpdatedSince_Inputs|array $inputs (optional) Inputs as ConstantContact_SearchContactsByUpdatedSince_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_SearchContactsByUpdatedSince_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ConstantContact_SearchContactsByUpdatedSince $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SearchContactsByUpdatedSince execution.
     *
     * @return ConstantContact_SearchContactsByUpdatedSince_Results New results object.
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
     * Wraps results in appropriate results class for this SearchContactsByUpdatedSince execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ConstantContact_SearchContactsByUpdatedSince_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ConstantContact_SearchContactsByUpdatedSince_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SearchContactsByUpdatedSince Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_SearchContactsByUpdatedSince_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SearchContactsByUpdatedSince Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ConstantContact_SearchContactsByUpdatedSince_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SearchContactsByUpdatedSince execution.
     *
     * @return string (xml) The response from Constant Contact.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a list of all contacts from Constant Contact.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_ListAllContacts extends Temboo_Choreography
{
    /**
     * Retrieves a list of all contacts from Constant Contact.
     *
     * @param Temboo_Session $session The session that owns this ListAllContacts Choreo.
     * @return ConstantContact_ListAllContacts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ConstantContact/ListAllContacts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListAllContacts Choreo.
     *
     * @param ConstantContact_ListAllContacts_Inputs|array $inputs (optional) Inputs as ConstantContact_ListAllContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_ListAllContacts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ConstantContact_ListAllContacts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_ListAllContacts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ConstantContact_ListAllContacts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllContacts Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_ListAllContacts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListAllContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_ListAllContacts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllContacts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ConstantContact_ListAllContacts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ConstantContact_ListAllContacts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllContacts Choreo.
     *
     * @param string $value (required, string) The API Key provided by Constant Contact.
     * @return ConstantContact_ListAllContacts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Password input for this ListAllContacts Choreo.
     *
     * @param string $value (required, password) Your Constant Contact password.
     * @return ConstantContact_ListAllContacts_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UserName input for this ListAllContacts Choreo.
     *
     * @param string $value (required, string) Your Constant Contact username.
     * @return ConstantContact_ListAllContacts_Inputs For method chaining.
     */
    public function setUserName($value)
    {
        return $this->set('UserName', $value);
    }
}


/**
 * Execution object for the ListAllContacts Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_ListAllContacts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllContacts Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListAllContacts execution.
     * @param ConstantContact_ListAllContacts $choreo The choreography object for this execution.
     * @param ConstantContact_ListAllContacts_Inputs|array $inputs (optional) Inputs as ConstantContact_ListAllContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_ListAllContacts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ConstantContact_ListAllContacts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllContacts execution.
     *
     * @return ConstantContact_ListAllContacts_Results New results object.
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
     * Wraps results in appropriate results class for this ListAllContacts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ConstantContact_ListAllContacts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ConstantContact_ListAllContacts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListAllContacts Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_ListAllContacts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListAllContacts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ConstantContact_ListAllContacts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListAllContacts execution.
     *
     * @return string (xml) The response from Constant Contact.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Updates an existing contact in your Constant Contact system when you supply a contact ID to the Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_UpdateContact extends Temboo_Choreography
{
    /**
     * Updates an existing contact in your Constant Contact system when you supply a contact ID to the Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateContact Choreo.
     * @return ConstantContact_UpdateContact New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ConstantContact/UpdateContact/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this UpdateContact Choreo.
     *
     * @param ConstantContact_UpdateContact_Inputs|array $inputs (optional) Inputs as ConstantContact_UpdateContact_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_UpdateContact_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ConstantContact_UpdateContact_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateContact Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_UpdateContact_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ConstantContact_UpdateContact_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateContact Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_UpdateContact_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the UpdateContact Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_UpdateContact_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateContact input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ConstantContact_UpdateContact_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ConstantContact_UpdateContact_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the UpdatedContactXML input for this UpdateContact Choreo.
     *
     * @param string $value (required, xml) This input should be the updated XML returned from the ObtainContactInformation Choreo.
     * @return ConstantContact_UpdateContact_Inputs For method chaining.
     */
    public function setUpdatedContactXML($value)
    {
        return $this->set('UpdatedContactXML', $value);
    }

    /**
     * Set the value for the APIKey input for this UpdateContact Choreo.
     *
     * @param string $value (required, string) The API Key provided by Constant Contact.
     * @return ConstantContact_UpdateContact_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ContactId input for this UpdateContact Choreo.
     *
     * @param int $value (required, integer) The id for the contact you want to update.
     * @return ConstantContact_UpdateContact_Inputs For method chaining.
     */
    public function setContactId($value)
    {
        return $this->set('ContactId', $value);
    }

    /**
     * Set the value for the ListId input for this UpdateContact Choreo.
     *
     * @param int $value (required, integer) The ID for the list that you want to update
     * @return ConstantContact_UpdateContact_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the Password input for this UpdateContact Choreo.
     *
     * @param string $value (required, password) Your Constant Contact password.
     * @return ConstantContact_UpdateContact_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UserName input for this UpdateContact Choreo.
     *
     * @param string $value (required, string) You Constant Contact username.
     * @return ConstantContact_UpdateContact_Inputs For method chaining.
     */
    public function setUserName($value)
    {
        return $this->set('UserName', $value);
    }
}


/**
 * Execution object for the UpdateContact Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_UpdateContact_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateContact Choreo.
     *
     * @param Temboo_Session $session The session that owns this UpdateContact execution.
     * @param ConstantContact_UpdateContact $choreo The choreography object for this execution.
     * @param ConstantContact_UpdateContact_Inputs|array $inputs (optional) Inputs as ConstantContact_UpdateContact_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_UpdateContact_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ConstantContact_UpdateContact $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateContact execution.
     *
     * @return ConstantContact_UpdateContact_Results New results object.
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
     * Wraps results in appropriate results class for this UpdateContact execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ConstantContact_UpdateContact_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ConstantContact_UpdateContact_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the UpdateContact Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_UpdateContact_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the UpdateContact Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ConstantContact_UpdateContact_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this UpdateContact execution.
     *
     * @return string (xml) The response from Constant Contact. Note that a successful update returns no content.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a contact in your Constant Contact account.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_CreateContact extends Temboo_Choreography
{
    /**
     * Creates a contact in your Constant Contact account.
     *
     * @param Temboo_Session $session The session that owns this CreateContact Choreo.
     * @return ConstantContact_CreateContact New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ConstantContact/CreateContact/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CreateContact Choreo.
     *
     * @param ConstantContact_CreateContact_Inputs|array $inputs (optional) Inputs as ConstantContact_CreateContact_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_CreateContact_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ConstantContact_CreateContact_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateContact Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_CreateContact_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ConstantContact_CreateContact_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateContact Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_CreateContact_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CreateContact Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_CreateContact_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateContact input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateContact Choreo.
     *
     * @param string $value (required, string) The API Key provided by Constant Contact.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Addr1 input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The first line of the contact's address.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setAddr1($value)
    {
        return $this->set('Addr1', $value);
    }

    /**
     * Set the value for the Addr2 input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The second line of the contact's address.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setAddr2($value)
    {
        return $this->set('Addr2', $value);
    }

    /**
     * Set the value for the Addr3 input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The third line of the contact's address.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setAddr3($value)
    {
        return $this->set('Addr3', $value);
    }

    /**
     * Set the value for the City input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The city portion of the contact's address.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the CompanyName input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The company name for the contact.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setCompanyName($value)
    {
        return $this->set('CompanyName', $value);
    }

    /**
     * Set the value for the CountryCode input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The country code associated with the contact's address.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setCountryCode($value)
    {
        return $this->set('CountryCode', $value);
    }

    /**
     * Set the value for the CountryName input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) Corresponds to the Country Name field in Constant Contact
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setCountryName($value)
    {
        return $this->set('CountryName', $value);
    }

    /**
     * Set the value for the EmailAddress input for this CreateContact Choreo.
     *
     * @param string $value (required, string) The email address for the contact.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the EmailType input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The email type that the contact should receive.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setEmailType($value)
    {
        return $this->set('EmailType', $value);
    }

    /**
     * Set the value for the FirstName input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The first name of the contact.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the HomePhone input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The contact's home phone.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setHomePhone($value)
    {
        return $this->set('HomePhone', $value);
    }

    /**
     * Set the value for the JobTitle input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The contact's job title.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setJobTitle($value)
    {
        return $this->set('JobTitle', $value);
    }

    /**
     * Set the value for the LastName input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The last name of the contact.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the ListId input for this CreateContact Choreo.
     *
     * @param int $value (required, integer) The ID for the list that you want to add the contact to.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the MiddleName input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The middle name of the contact.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setMiddleName($value)
    {
        return $this->set('MiddleName', $value);
    }

    /**
     * Set the value for the Name input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The full name of the contact.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the Note input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) A note associated with the contact.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setNote($value)
    {
        return $this->set('Note', $value);
    }

    /**
     * Set the value for the Password input for this CreateContact Choreo.
     *
     * @param string $value (required, password) Your Constant Contact password.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PostalCode input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The postal code for the contact's address.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setPostalCode($value)
    {
        return $this->set('PostalCode', $value);
    }

    /**
     * Set the value for the StateCode input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The state code for the contact's address.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setStateCode($value)
    {
        return $this->set('StateCode', $value);
    }

    /**
     * Set the value for the StateName input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) Corresponds to the State Name field in Constant Contact
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setStateName($value)
    {
        return $this->set('StateName', $value);
    }

    /**
     * Set the value for the Status input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The status of the contact (i.e. Active).
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }

    /**
     * Set the value for the SubPostalCode input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The sub postal code for the contact.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setSubPostalCode($value)
    {
        return $this->set('SubPostalCode', $value);
    }

    /**
     * Set the value for the UserName input for this CreateContact Choreo.
     *
     * @param string $value (required, string) Your Constant Contact username.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setUserName($value)
    {
        return $this->set('UserName', $value);
    }

    /**
     * Set the value for the WorkPhone input for this CreateContact Choreo.
     *
     * @param string $value (optional, string) The contact's work phone.
     * @return ConstantContact_CreateContact_Inputs For method chaining.
     */
    public function setWorkPhone($value)
    {
        return $this->set('WorkPhone', $value);
    }
}


/**
 * Execution object for the CreateContact Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_CreateContact_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateContact Choreo.
     *
     * @param Temboo_Session $session The session that owns this CreateContact execution.
     * @param ConstantContact_CreateContact $choreo The choreography object for this execution.
     * @param ConstantContact_CreateContact_Inputs|array $inputs (optional) Inputs as ConstantContact_CreateContact_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_CreateContact_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ConstantContact_CreateContact $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateContact execution.
     *
     * @return ConstantContact_CreateContact_Results New results object.
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
     * Wraps results in appropriate results class for this CreateContact execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ConstantContact_CreateContact_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ConstantContact_CreateContact_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CreateContact Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_CreateContact_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CreateContact Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ConstantContact_CreateContact_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CreateContact execution.
     *
     * @return string (xml) The response from Constant Contact.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates multiple contacts in your Constant Contact list via the Activities bulk API.  The Choreo can use Excel or CSV files for the bulk upload.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_AddMultipleContacts extends Temboo_Choreography
{
    /**
     * Creates multiple contacts in your Constant Contact list via the Activities bulk API.  The Choreo can use Excel or CSV files for the bulk upload.
     *
     * @param Temboo_Session $session The session that owns this AddMultipleContacts Choreo.
     * @return ConstantContact_AddMultipleContacts New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/ConstantContact/AddMultipleContacts/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AddMultipleContacts Choreo.
     *
     * @param ConstantContact_AddMultipleContacts_Inputs|array $inputs (optional) Inputs as ConstantContact_AddMultipleContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_AddMultipleContacts_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new ConstantContact_AddMultipleContacts_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddMultipleContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_AddMultipleContacts_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new ConstantContact_AddMultipleContacts_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddMultipleContacts Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_AddMultipleContacts_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AddMultipleContacts Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return ConstantContact_AddMultipleContacts_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddMultipleContacts input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return ConstantContact_AddMultipleContacts_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return ConstantContact_AddMultipleContacts_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this AddMultipleContacts Choreo.
     *
     * @param string $value (conditional, multiline) The file contents of the list you want to upload. Should be in CSV format.
     * @return ConstantContact_AddMultipleContacts_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the APIKey input for this AddMultipleContacts Choreo.
     *
     * @param string $value (required, string) The API Key provided by Constant Contact.
     * @return ConstantContact_AddMultipleContacts_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ListId input for this AddMultipleContacts Choreo.
     *
     * @param int $value (required, integer) The numberic id for the list that you want to add contacts to.
     * @return ConstantContact_AddMultipleContacts_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the Password input for this AddMultipleContacts Choreo.
     *
     * @param string $value (required, password) Your Constant Contact password.
     * @return ConstantContact_AddMultipleContacts_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the UserName input for this AddMultipleContacts Choreo.
     *
     * @param string $value (required, string) Your Constant Contact username.
     * @return ConstantContact_AddMultipleContacts_Inputs For method chaining.
     */
    public function setUserName($value)
    {
        return $this->set('UserName', $value);
    }

}


/**
 * Execution object for the AddMultipleContacts Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_AddMultipleContacts_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddMultipleContacts Choreo.
     *
     * @param Temboo_Session $session The session that owns this AddMultipleContacts execution.
     * @param ConstantContact_AddMultipleContacts $choreo The choreography object for this execution.
     * @param ConstantContact_AddMultipleContacts_Inputs|array $inputs (optional) Inputs as ConstantContact_AddMultipleContacts_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return ConstantContact_AddMultipleContacts_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, ConstantContact_AddMultipleContacts $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddMultipleContacts execution.
     *
     * @return ConstantContact_AddMultipleContacts_Results New results object.
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
     * Wraps results in appropriate results class for this AddMultipleContacts execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return ConstantContact_AddMultipleContacts_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new ConstantContact_AddMultipleContacts_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AddMultipleContacts Choreo.
 *
 * @package Temboo
 * @subpackage ConstantContact
 */
class ConstantContact_AddMultipleContacts_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AddMultipleContacts Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return ConstantContact_AddMultipleContacts_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AddMultipleContacts execution.
     *
     * @return string (xml) The response from Constant Contact.
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
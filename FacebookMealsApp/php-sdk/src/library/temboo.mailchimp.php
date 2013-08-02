<?php

/**
 * Temboo PHP SDK MailChimp classes
 *
 * Execute Choreographies from the Temboo MailChimp bundle.
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
 * @subpackage MailChimp
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Get information for a member of a MailChimp list.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMemberInfo extends Temboo_Choreography
{
    /**
     * Get information for a member of a MailChimp list.
     *
     * @param Temboo_Session $session The session that owns this ListMemberInfo Choreo.
     * @return MailChimp_ListMemberInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListMemberInfo/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMemberInfo Choreo.
     *
     * @param MailChimp_ListMemberInfo_Inputs|array $inputs (optional) Inputs as MailChimp_ListMemberInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMemberInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListMemberInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMemberInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMemberInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListMemberInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMemberInfo Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMemberInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMemberInfo Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMemberInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMemberInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListMemberInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListMemberInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListMemberInfo Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp.
     * @return MailChimp_ListMemberInfo_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EmailAddress input for this ListMemberInfo Choreo.
     *
     * @param string $value (required, string) The email address to use when searching for a Mailchimp member.
     * @return MailChimp_ListMemberInfo_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the ListId input for this ListMemberInfo Choreo.
     *
     * @param string $value (required, string) The id of the Mailchimp list associated with the member you want to retrieve.
     * @return MailChimp_ListMemberInfo_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListMemberInfo Choreo.
     *
     * @param string $value (optional, string) Indicates the desired format for the response. Accepted values are "json" or "xml" (the default).
     * @return MailChimp_ListMemberInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListMemberInfo Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMemberInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMemberInfo Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMemberInfo execution.
     * @param MailChimp_ListMemberInfo $choreo The choreography object for this execution.
     * @param MailChimp_ListMemberInfo_Inputs|array $inputs (optional) Inputs as MailChimp_ListMemberInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMemberInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListMemberInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMemberInfo execution.
     *
     * @return MailChimp_ListMemberInfo_Results New results object.
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
     * Wraps results in appropriate results class for this ListMemberInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListMemberInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListMemberInfo_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMemberInfo Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMemberInfo_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMemberInfo Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListMemberInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListMemberInfo execution.
     *
     * @return string The response from Mailchimp. Corresponds to the format specified in the ResponseFormat parameter. Defaults to "xml".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds or updates multiple subscribers in a given CSV file.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchSubscribeCSV extends Temboo_Choreography
{
    /**
     * Adds or updates multiple subscribers in a given CSV file.
     *
     * @param Temboo_Session $session The session that owns this ListBatchSubscribeCSV Choreo.
     * @return MailChimp_ListBatchSubscribeCSV New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListBatchSubscribeCSV/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListBatchSubscribeCSV Choreo.
     *
     * @param MailChimp_ListBatchSubscribeCSV_Inputs|array $inputs (optional) Inputs as MailChimp_ListBatchSubscribeCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListBatchSubscribeCSV_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListBatchSubscribeCSV_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListBatchSubscribeCSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListBatchSubscribeCSV_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListBatchSubscribeCSV Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchSubscribeCSV_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListBatchSubscribeCSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListBatchSubscribeCSV input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CSVFile input for this ListBatchSubscribeCSV Choreo.
     *
     * @param string $value (conditional, multiline) The list of subscriber email addresses to unsubscribe in CSV format.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function setCSVFile($value)
    {
        return $this->set('CSVFile', $value);
    }

    /**
     * Set the value for the APIKey input for this ListBatchSubscribeCSV Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DoubleOptIn input for this ListBatchSubscribeCSV Choreo.
     *
     * @param bool $value (conditional, boolean) Flag to control whether a double opt-in confirmation message is sent. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function setDoubleOptIn($value)
    {
        return $this->set('DoubleOptIn', $value);
    }

    /**
     * Set the value for the EmailType input for this ListBatchSubscribeCSV Choreo.
     *
     * @param string $value (optional, string) Must be one of 'text', 'html', or 'mobile'. Defaults to html.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function setEmailType($value)
    {
        return $this->set('EmailType', $value);
    }

    /**
     * Set the value for the ListId input for this ListBatchSubscribeCSV Choreo.
     *
     * @param string $value (required, string) The id of the Mailchimp list associated with the email addresses to subscribe.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the ReplaceInterests input for this ListBatchSubscribeCSV Choreo.
     *
     * @param bool $value (optional, boolean) A flag to determine whether to replace the interest groups with the groups provided or add the provided groups to the member's interest groups. Specify '1' (true) or '0' (false). Defaults to 1.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function setReplaceInterests($value)
    {
        return $this->set('ReplaceInterests', $value);
    }

    /**
     * Set the value for the SupressErrors input for this ListBatchSubscribeCSV Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to suppress errors that arise from attempting to add/update a subscriber. Defaults to 0 (false). Set to 1 (true) to supress errors.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function setSupressErrors($value)
    {
        return $this->set('SupressErrors', $value);
    }

    /**
     * Set the value for the UpdateExisting input for this ListBatchSubscribeCSV Choreo.
     *
     * @param bool $value (conditional, boolean) Indicates that if the email already exists, this request will perform an update instead of an insert. Specify '1' (true) or '0' (false). Defaults to 1.
     * @return MailChimp_ListBatchSubscribeCSV_Inputs For method chaining.
     */
    public function setUpdateExisting($value)
    {
        return $this->set('UpdateExisting', $value);
    }

}


/**
 * Execution object for the ListBatchSubscribeCSV Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchSubscribeCSV_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListBatchSubscribeCSV Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListBatchSubscribeCSV execution.
     * @param MailChimp_ListBatchSubscribeCSV $choreo The choreography object for this execution.
     * @param MailChimp_ListBatchSubscribeCSV_Inputs|array $inputs (optional) Inputs as MailChimp_ListBatchSubscribeCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListBatchSubscribeCSV_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListBatchSubscribeCSV $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListBatchSubscribeCSV execution.
     *
     * @return MailChimp_ListBatchSubscribeCSV_Results New results object.
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
     * Wraps results in appropriate results class for this ListBatchSubscribeCSV execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListBatchSubscribeCSV_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListBatchSubscribeCSV_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListBatchSubscribeCSV Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchSubscribeCSV_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListBatchSubscribeCSV Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListBatchSubscribeCSV_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ErrorList" output from this ListBatchSubscribeCSV execution.
     *
     * @return string (multiline) A list of emails that were not successfully subscribed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getErrorList()
    {
        return $this->get('ErrorList');
    }
    /**
     * Retrieve the value for the "SuccessList" output from this ListBatchSubscribeCSV execution.
     *
     * @return string (multiline) A list of email successfully subscribed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSuccessList()
    {
        return $this->get('SuccessList');
    }
}

/**
 * Unsubscribes one or more members listed in a CSV file from a MailChimp list.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchUnsubscribeCSV extends Temboo_Choreography
{
    /**
     * Unsubscribes one or more members listed in a CSV file from a MailChimp list.
     *
     * @param Temboo_Session $session The session that owns this ListBatchUnsubscribeCSV Choreo.
     * @return MailChimp_ListBatchUnsubscribeCSV New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListBatchUnsubscribeCSV/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListBatchUnsubscribeCSV Choreo.
     *
     * @param MailChimp_ListBatchUnsubscribeCSV_Inputs|array $inputs (optional) Inputs as MailChimp_ListBatchUnsubscribeCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListBatchUnsubscribeCSV_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListBatchUnsubscribeCSV_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListBatchUnsubscribeCSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListBatchUnsubscribeCSV_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListBatchUnsubscribeCSV Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchUnsubscribeCSV_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListBatchUnsubscribeCSV Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListBatchUnsubscribeCSV input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CSVFile input for this ListBatchUnsubscribeCSV Choreo.
     *
     * @param string $value (conditional, multiline) The list of subscriber email addresses to unsubscribe in CSV format.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs For method chaining.
     */
    public function setCSVFile($value)
    {
        return $this->set('CSVFile', $value);
    }

    /**
     * Set the value for the APIKey input for this ListBatchUnsubscribeCSV Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DeleteMember input for this ListBatchUnsubscribeCSV Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to completely delete the member from your list instead of just unsubscribing. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs For method chaining.
     */
    public function setDeleteMember($value)
    {
        return $this->set('DeleteMember', $value);
    }

    /**
     * Set the value for the ListId input for this ListBatchUnsubscribeCSV Choreo.
     *
     * @param string $value (required, string) The id of the Mailchimp list associated with the email addresses to unsubscribe.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the SendGoodbye input for this ListBatchUnsubscribeCSV Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to send the goodbye email to the email address. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs For method chaining.
     */
    public function setSendGoodbye($value)
    {
        return $this->set('SendGoodbye', $value);
    }

    /**
     * Set the value for the SendNotify input for this ListBatchUnsubscribeCSV Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to send the unsubscribe notification email to the address defined in the list email notification settings. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs For method chaining.
     */
    public function setSendNotify($value)
    {
        return $this->set('SendNotify', $value);
    }

    /**
     * Set the value for the SupressErrors input for this ListBatchUnsubscribeCSV Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to suppress errors that arise from attempting to unsubscribe an email address. Defaults to 0 (false). Set to 1 (true) to supress errors.
     * @return MailChimp_ListBatchUnsubscribeCSV_Inputs For method chaining.
     */
    public function setSupressErrors($value)
    {
        return $this->set('SupressErrors', $value);
    }

}


/**
 * Execution object for the ListBatchUnsubscribeCSV Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchUnsubscribeCSV_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListBatchUnsubscribeCSV Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListBatchUnsubscribeCSV execution.
     * @param MailChimp_ListBatchUnsubscribeCSV $choreo The choreography object for this execution.
     * @param MailChimp_ListBatchUnsubscribeCSV_Inputs|array $inputs (optional) Inputs as MailChimp_ListBatchUnsubscribeCSV_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListBatchUnsubscribeCSV_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListBatchUnsubscribeCSV $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListBatchUnsubscribeCSV execution.
     *
     * @return MailChimp_ListBatchUnsubscribeCSV_Results New results object.
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
     * Wraps results in appropriate results class for this ListBatchUnsubscribeCSV execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListBatchUnsubscribeCSV_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListBatchUnsubscribeCSV_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListBatchUnsubscribeCSV Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchUnsubscribeCSV_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListBatchUnsubscribeCSV Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListBatchUnsubscribeCSV_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ErrorList" output from this ListBatchUnsubscribeCSV execution.
     *
     * @return string (multiline) A list of emails that were not successfully unsubscribed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getErrorList()
    {
        return $this->get('ErrorList');
    }
    /**
     * Retrieve the value for the "SuccessList" output from this ListBatchUnsubscribeCSV execution.
     *
     * @return string (multiline) A list of email successfully unsubscribed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSuccessList()
    {
        return $this->get('SuccessList');
    }
}

/**
 * Test connection to MailChimp services.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_Ping extends Temboo_Choreography
{
    /**
     * Test connection to MailChimp services.
     *
     * @param Temboo_Session $session The session that owns this Ping Choreo.
     * @return MailChimp_Ping New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/Ping/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Ping Choreo.
     *
     * @param MailChimp_Ping_Inputs|array $inputs (optional) Inputs as MailChimp_Ping_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_Ping_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_Ping_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Ping Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_Ping_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_Ping_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Ping Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_Ping_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Ping Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_Ping_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Ping input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_Ping_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_Ping_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Ping Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp
     * @return MailChimp_Ping_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }
}


/**
 * Execution object for the Ping Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_Ping_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Ping Choreo.
     *
     * @param Temboo_Session $session The session that owns this Ping execution.
     * @param MailChimp_Ping $choreo The choreography object for this execution.
     * @param MailChimp_Ping_Inputs|array $inputs (optional) Inputs as MailChimp_Ping_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_Ping_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_Ping $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Ping execution.
     *
     * @return MailChimp_Ping_Results New results object.
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
     * Wraps results in appropriate results class for this Ping execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_Ping_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_Ping_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Ping Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_Ping_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Ping Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_Ping_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Ping execution.
     *
     * @return string (string) The response from Mailchimp.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds a subscriber to a MailChimp list.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListSubscribe extends Temboo_Choreography
{
    /**
     * Adds a subscriber to a MailChimp list.
     *
     * @param Temboo_Session $session The session that owns this ListSubscribe Choreo.
     * @return MailChimp_ListSubscribe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListSubscribe/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListSubscribe Choreo.
     *
     * @param MailChimp_ListSubscribe_Inputs|array $inputs (optional) Inputs as MailChimp_ListSubscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListSubscribe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListSubscribe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListSubscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListSubscribe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListSubscribe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListSubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListSubscribe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListSubscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListSubscribe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListSubscribe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListSubscribe Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DoubleOptIn input for this ListSubscribe Choreo.
     *
     * @param bool $value (optional, boolean) Flag to control whether a double opt-in confirmation message is sent. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setDoubleOptIn($value)
    {
        return $this->set('DoubleOptIn', $value);
    }

    /**
     * Set the value for the EmailAddress input for this ListSubscribe Choreo.
     *
     * @param string $value (conditional, string) The email address for the subscriber you want to create. Required unless the email address is included in the MergeVars input as part of your JSON object.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the EmailType input for this ListSubscribe Choreo.
     *
     * @param string $value (optional, string) Must be one of 'text', 'html', or 'mobile'. Defaults to html.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setEmailType($value)
    {
        return $this->set('EmailType', $value);
    }

    /**
     * Set the value for the ListId input for this ListSubscribe Choreo.
     *
     * @param string $value (required, string) The id of the list that the subsbriber will be added to.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the MergeVars input for this ListSubscribe Choreo.
     *
     * @param string $value (conditional, json) A JSON object of the merge fields for this subscriber. If the subscriber email address is not provided for the EmailAddress input, it must be specified here.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setMergeVars($value)
    {
        return $this->set('MergeVars', $value);
    }

    /**
     * Set the value for the ReplaceInterests input for this ListSubscribe Choreo.
     *
     * @param bool $value (optional, boolean) A flag to determine whether to replace the interest groups with the groups provided or add the provided groups to the member's interest groups. Specify '1' (true) or '0' (false). Defaults to 1.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setReplaceInterests($value)
    {
        return $this->set('ReplaceInterests', $value);
    }

    /**
     * Set the value for the SendWelcome input for this ListSubscribe Choreo.
     *
     * @param bool $value (optional, boolean) If double_optin is false and this flag is true, a welcome email will be sent. Note that this does not apply when updating records. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setSendWelcome($value)
    {
        return $this->set('SendWelcome', $value);
    }

    /**
     * Set the value for the UpdateExisting input for this ListSubscribe Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that if the email already exists, this request will perform an update instead of an insert. Specify '1' (true) or '0' (false). Defaults to 1.
     * @return MailChimp_ListSubscribe_Inputs For method chaining.
     */
    public function setUpdateExisting($value)
    {
        return $this->set('UpdateExisting', $value);
    }
}


/**
 * Execution object for the ListSubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListSubscribe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListSubscribe Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListSubscribe execution.
     * @param MailChimp_ListSubscribe $choreo The choreography object for this execution.
     * @param MailChimp_ListSubscribe_Inputs|array $inputs (optional) Inputs as MailChimp_ListSubscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListSubscribe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListSubscribe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListSubscribe execution.
     *
     * @return MailChimp_ListSubscribe_Results New results object.
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
     * Wraps results in appropriate results class for this ListSubscribe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListSubscribe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListSubscribe_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListSubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListSubscribe_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListSubscribe Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListSubscribe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListSubscribe execution.
     *
     * @return string The response from Mailchimp. Returns the string "true" for success and an error description for failures.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get field names from a MailChimp list.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVars extends Temboo_Choreography
{
    /**
     * Get field names from a MailChimp list.
     *
     * @param Temboo_Session $session The session that owns this ListMergeVars Choreo.
     * @return MailChimp_ListMergeVars New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListMergeVars/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMergeVars Choreo.
     *
     * @param MailChimp_ListMergeVars_Inputs|array $inputs (optional) Inputs as MailChimp_ListMergeVars_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMergeVars_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListMergeVars_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMergeVars Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMergeVars_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListMergeVars_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMergeVars Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVars_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMergeVars Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMergeVars_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMergeVars input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListMergeVars_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListMergeVars_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListMergeVars Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp.
     * @return MailChimp_ListMergeVars_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ListId input for this ListMergeVars Choreo.
     *
     * @param string $value (required, string) The id of the Mailchimp list associated with the merge vars to retrieve.
     * @return MailChimp_ListMergeVars_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListMergeVars Choreo.
     *
     * @param string $value (optional, string) Indicates the desired format for the response. Accepted values are "json" or "xml" (the default).
     * @return MailChimp_ListMergeVars_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the ListMergeVars Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVars_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMergeVars Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMergeVars execution.
     * @param MailChimp_ListMergeVars $choreo The choreography object for this execution.
     * @param MailChimp_ListMergeVars_Inputs|array $inputs (optional) Inputs as MailChimp_ListMergeVars_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMergeVars_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListMergeVars $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMergeVars execution.
     *
     * @return MailChimp_ListMergeVars_Results New results object.
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
     * Wraps results in appropriate results class for this ListMergeVars execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListMergeVars_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListMergeVars_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMergeVars Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVars_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMergeVars Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListMergeVars_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListMergeVars execution.
     *
     * @return string The response from Mailchimp. Corresponds to the format specified in the ResponseFormat parameter. Defaults to "xml".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Adds or updates multiple Mailchimp list subscribers.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchSubscribe extends Temboo_Choreography
{
    /**
     * Adds or updates multiple Mailchimp list subscribers.
     *
     * @param Temboo_Session $session The session that owns this ListBatchSubscribe Choreo.
     * @return MailChimp_ListBatchSubscribe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListBatchSubscribe/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListBatchSubscribe Choreo.
     *
     * @param MailChimp_ListBatchSubscribe_Inputs|array $inputs (optional) Inputs as MailChimp_ListBatchSubscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListBatchSubscribe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListBatchSubscribe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListBatchSubscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListBatchSubscribe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListBatchSubscribe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListBatchSubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchSubscribe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListBatchSubscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListBatchSubscribe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListBatchSubscribe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListBatchSubscribe Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DoubleOptIn input for this ListBatchSubscribe Choreo.
     *
     * @param bool $value (optional, boolean) Flag to control whether a double opt-in confirmation message is sent. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setDoubleOptIn($value)
    {
        return $this->set('DoubleOptIn', $value);
    }

    /**
     * Set the value for the EmailType input for this ListBatchSubscribe Choreo.
     *
     * @param string $value (optional, string) Must be one of 'text', 'html', or 'mobile'. Defaults to html.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setEmailType($value)
    {
        return $this->set('EmailType', $value);
    }

    /**
     * Set the value for the ListId input for this ListBatchSubscribe Choreo.
     *
     * @param string $value (required, string) The id of the Mailchimp list the subscribers will be added to.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the ReplaceInterests input for this ListBatchSubscribe Choreo.
     *
     * @param bool $value (optional, boolean) A flag to determine whether to replace the interest groups with the groups provided or add the provided groups to the member's interest groups. Specify '1' (true) or '0' (false). Defaults to 1.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setReplaceInterests($value)
    {
        return $this->set('ReplaceInterests', $value);
    }

    /**
     * Set the value for the SendWelcome input for this ListBatchSubscribe Choreo.
     *
     * @param bool $value (optional, boolean) If double_optin is false and this flag is true, a welcome email will be sent. Note that this does not apply when updating records. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setSendWelcome($value)
    {
        return $this->set('SendWelcome', $value);
    }

    /**
     * Set the value for the Subscribers input for this ListBatchSubscribe Choreo.
     *
     * @param string $value (required, json) An array of JSON objects containing the subscribers to insert. See Choreo documentation for the specific format for this JSON input.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setSubscribers($value)
    {
        return $this->set('Subscribers', $value);
    }

    /**
     * Set the value for the SupressErrors input for this ListBatchSubscribe Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to suppress errors that arise from attempting to add/update a subscriber. Defaults to 0 (false). Set to 1 (true) to supress errors.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setSupressErrors($value)
    {
        return $this->set('SupressErrors', $value);
    }

    /**
     * Set the value for the UpdateExisting input for this ListBatchSubscribe Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that if the email already exists, this request will perform an update instead of an insert. Specify '1' (true) or '0' (false). Defaults to 1.
     * @return MailChimp_ListBatchSubscribe_Inputs For method chaining.
     */
    public function setUpdateExisting($value)
    {
        return $this->set('UpdateExisting', $value);
    }
}


/**
 * Execution object for the ListBatchSubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchSubscribe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListBatchSubscribe Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListBatchSubscribe execution.
     * @param MailChimp_ListBatchSubscribe $choreo The choreography object for this execution.
     * @param MailChimp_ListBatchSubscribe_Inputs|array $inputs (optional) Inputs as MailChimp_ListBatchSubscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListBatchSubscribe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListBatchSubscribe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListBatchSubscribe execution.
     *
     * @return MailChimp_ListBatchSubscribe_Results New results object.
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
     * Wraps results in appropriate results class for this ListBatchSubscribe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListBatchSubscribe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListBatchSubscribe_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListBatchSubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchSubscribe_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListBatchSubscribe Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListBatchSubscribe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ErrorList" output from this ListBatchSubscribe execution.
     *
     * @return string (json) A list of emails that were not successfully subscribed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getErrorList()
    {
        return $this->get('ErrorList');
    }
    /**
     * Retrieve the value for the "SuccessList" output from this ListBatchSubscribe execution.
     *
     * @return string (json) A list of email successfully subscribed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSuccessList()
    {
        return $this->get('SuccessList');
    }
}

/**
 * Get all lists from a MailChimp account.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_Lists extends Temboo_Choreography
{
    /**
     * Get all lists from a MailChimp account.
     *
     * @param Temboo_Session $session The session that owns this Lists Choreo.
     * @return MailChimp_Lists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/Lists/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Lists Choreo.
     *
     * @param MailChimp_Lists_Inputs|array $inputs (optional) Inputs as MailChimp_Lists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_Lists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_Lists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Lists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_Lists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_Lists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Lists Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_Lists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Lists Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_Lists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Lists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_Lists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_Lists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this Lists Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp
     * @return MailChimp_Lists_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this Lists Choreo.
     *
     * @param string $value (optional, string) Indicates the desired format for the response. Accepted values are "json" or "xml" (the default).
     * @return MailChimp_Lists_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }
}


/**
 * Execution object for the Lists Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_Lists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Lists Choreo.
     *
     * @param Temboo_Session $session The session that owns this Lists execution.
     * @param MailChimp_Lists $choreo The choreography object for this execution.
     * @param MailChimp_Lists_Inputs|array $inputs (optional) Inputs as MailChimp_Lists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_Lists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_Lists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Lists execution.
     *
     * @return MailChimp_Lists_Results New results object.
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
     * Wraps results in appropriate results class for this Lists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_Lists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_Lists_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Lists Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_Lists_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Lists Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_Lists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Lists execution.
     *
     * @return string The response from Mailchimp. Corresponds to the format specified in the ResponseFormat parameter. Defaults to "xml".
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Remove a field name from a MailChimp list.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVarDel extends Temboo_Choreography
{
    /**
     * Remove a field name from a MailChimp list.
     *
     * @param Temboo_Session $session The session that owns this ListMergeVarDel Choreo.
     * @return MailChimp_ListMergeVarDel New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListMergeVarDel/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMergeVarDel Choreo.
     *
     * @param MailChimp_ListMergeVarDel_Inputs|array $inputs (optional) Inputs as MailChimp_ListMergeVarDel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMergeVarDel_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListMergeVarDel_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMergeVarDel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMergeVarDel_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListMergeVarDel_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMergeVarDel Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVarDel_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMergeVarDel Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMergeVarDel_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMergeVarDel input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListMergeVarDel_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListMergeVarDel_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListMergeVarDel Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp.
     * @return MailChimp_ListMergeVarDel_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the ListId input for this ListMergeVarDel Choreo.
     *
     * @param string $value (required, string) The id of the Mailchimp list associated with the merge var you want to delete.
     * @return MailChimp_ListMergeVarDel_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the Tag input for this ListMergeVarDel Choreo.
     *
     * @param string $value (required, string) Provide a valid merge var tag. A merge var tag can be retrieved by calling listMergeVars() or by logging in to your account.
     * @return MailChimp_ListMergeVarDel_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }
}


/**
 * Execution object for the ListMergeVarDel Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVarDel_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMergeVarDel Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMergeVarDel execution.
     * @param MailChimp_ListMergeVarDel $choreo The choreography object for this execution.
     * @param MailChimp_ListMergeVarDel_Inputs|array $inputs (optional) Inputs as MailChimp_ListMergeVarDel_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMergeVarDel_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListMergeVarDel $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMergeVarDel execution.
     *
     * @return MailChimp_ListMergeVarDel_Results New results object.
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
     * Wraps results in appropriate results class for this ListMergeVarDel execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListMergeVarDel_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListMergeVarDel_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMergeVarDel Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVarDel_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMergeVarDel Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListMergeVarDel_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListMergeVarDel execution.
     *
     * @return string The response from Mailchimp. Returns the string "true" for success and an error description for failures.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Update information for a member of a MailChimp list.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListUpdateMember extends Temboo_Choreography
{
    /**
     * Update information for a member of a MailChimp list.
     *
     * @param Temboo_Session $session The session that owns this ListUpdateMember Choreo.
     * @return MailChimp_ListUpdateMember New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListUpdateMember/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUpdateMember Choreo.
     *
     * @param MailChimp_ListUpdateMember_Inputs|array $inputs (optional) Inputs as MailChimp_ListUpdateMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListUpdateMember_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListUpdateMember_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUpdateMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListUpdateMember_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListUpdateMember_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUpdateMember Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListUpdateMember_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUpdateMember Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListUpdateMember_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUpdateMember input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListUpdateMember Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the EmailAddress input for this ListUpdateMember Choreo.
     *
     * @param string $value (required, string) The current email address for the subscriber you want to update.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the EmailType input for this ListUpdateMember Choreo.
     *
     * @param string $value (optional, string) Must be one of 'text', 'html', or 'mobile'. Defaults to html.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setEmailType($value)
    {
        return $this->set('EmailType', $value);
    }

    /**
     * Set the value for the ListId input for this ListUpdateMember Choreo.
     *
     * @param string $value (required, string) The id of the list that the existing subsbriber belongs to.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the Merge1 input for this ListUpdateMember Choreo.
     *
     * @param string $value (optional, string) Corresponds to the first merge var field defined in your account.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setMerge1($value)
    {
        return $this->set('Merge1', $value);
    }

    /**
     * Set the value for the Merge2 input for this ListUpdateMember Choreo.
     *
     * @param string $value (optional, string) Corresponds to the second merge var field defined in your account.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setMerge2($value)
    {
        return $this->set('Merge2', $value);
    }

    /**
     * Set the value for the Merge3 input for this ListUpdateMember Choreo.
     *
     * @param string $value (optional, string) Corresponds to the third merge var field defined in your account.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setMerge3($value)
    {
        return $this->set('Merge3', $value);
    }

    /**
     * Set the value for the Merge4 input for this ListUpdateMember Choreo.
     *
     * @param string $value (optional, string) Corresponds to the fourth merge var field defined in your account.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setMerge4($value)
    {
        return $this->set('Merge4', $value);
    }

    /**
     * Set the value for the NewEmail input for this ListUpdateMember Choreo.
     *
     * @param string $value (optional, multiline) Set this to update the email address of a subscriber.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setNewEmail($value)
    {
        return $this->set('NewEmail', $value);
    }

    /**
     * Set the value for the ReplaceInterests input for this ListUpdateMember Choreo.
     *
     * @param bool $value (optional, boolean) A flag to determine whether to replace the interest groups with the groups provided or add the provided groups to the member's interest groups. Specify '1' (true) or '0' (false). Defaults to 1.
     * @return MailChimp_ListUpdateMember_Inputs For method chaining.
     */
    public function setReplaceInterests($value)
    {
        return $this->set('ReplaceInterests', $value);
    }
}


/**
 * Execution object for the ListUpdateMember Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListUpdateMember_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUpdateMember Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUpdateMember execution.
     * @param MailChimp_ListUpdateMember $choreo The choreography object for this execution.
     * @param MailChimp_ListUpdateMember_Inputs|array $inputs (optional) Inputs as MailChimp_ListUpdateMember_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListUpdateMember_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListUpdateMember $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUpdateMember execution.
     *
     * @return MailChimp_ListUpdateMember_Results New results object.
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
     * Wraps results in appropriate results class for this ListUpdateMember execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListUpdateMember_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListUpdateMember_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUpdateMember Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListUpdateMember_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUpdateMember Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListUpdateMember_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUpdateMember execution.
     *
     * @return string The response from Mailchimp. Returns the string "true" for success and an error description for failures.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Add a new field to a MailChimp list.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVarAdd extends Temboo_Choreography
{
    /**
     * Add a new field to a MailChimp list.
     *
     * @param Temboo_Session $session The session that owns this ListMergeVarAdd Choreo.
     * @return MailChimp_ListMergeVarAdd New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListMergeVarAdd/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMergeVarAdd Choreo.
     *
     * @param MailChimp_ListMergeVarAdd_Inputs|array $inputs (optional) Inputs as MailChimp_ListMergeVarAdd_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMergeVarAdd_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListMergeVarAdd_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMergeVarAdd Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMergeVarAdd_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListMergeVarAdd_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMergeVarAdd Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVarAdd_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMergeVarAdd Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMergeVarAdd_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMergeVarAdd input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp.
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Choices input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (optional, string) A list of up to 10 choices for radio and dropdown type fields )separated by commas).
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setChoices($value)
    {
        return $this->set('Choices', $value);
    }

    /**
     * Set the value for the DateFormat input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (optional, string) Valid for birthday and date fields. For birthday, must be "MM/DD" (default) or "DD/MM". For date type, must be "MM/DD/YYYY" (default) or "DD/MM/YYYY".
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setDateFormat($value)
    {
        return $this->set('DateFormat', $value);
    }

    /**
     * Set the value for the DefaultCountry input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (optional, string) The ISO 3166 2 digit character code for the default country. Defaults to "US".
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setDefaultCountry($value)
    {
        return $this->set('DefaultCountry', $value);
    }

    /**
     * Set the value for the DefaultValue input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (optional, string) The default value for the new field.
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setDefaultValue($value)
    {
        return $this->set('DefaultValue', $value);
    }

    /**
     * Set the value for the FieldType input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (optional, string) Must be either left unset or one of 'text', 'number', 'radio', 'dropdown', 'date', 'address', 'phone', 'url', or 'imageurl. Defaults to text.
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setFieldType($value)
    {
        return $this->set('FieldType', $value);
    }

    /**
     * Set the value for the ListId input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (required, string) The ID of the list on which to add the new merge var.
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the Name input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (required, string) Provide a long merge var name for user display (i.e. First Name)
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the PhoneFormat input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (optional, string) Defaults to "US"  - any other value will cause them to be unformatted (international).
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setPhoneFormat($value)
    {
        return $this->set('PhoneFormat', $value);
    }

    /**
     * Set the value for the Public input for this ListMergeVarAdd Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the field is displayed in public. Specify '1' (true) or '0' (false). Defaults to 1.
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setPublic($value)
    {
        return $this->set('Public', $value);
    }

    /**
     * Set the value for the Req input for this ListMergeVarAdd Choreo.
     *
     * @param bool $value (optional, boolean) Indicates that the field will be required.  Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setReq($value)
    {
        return $this->set('Req', $value);
    }

    /**
     * Set the value for the Show input for this ListMergeVarAdd Choreo.
     *
     * @param bool $value (optional, boolean) Indicates whether the field is displayed in the app's list member view.  Specify '1' (true) or '0' (false). Defaults to 1.
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setShow($value)
    {
        return $this->set('Show', $value);
    }

    /**
     * Set the value for the Tag input for this ListMergeVarAdd Choreo.
     *
     * @param string $value (required, string) Provide a short merge var tag name. MUST be 10 UTF-8 chars, including 'A-Z', '0-9', or '_' only (i.e. DESC123456).
     * @return MailChimp_ListMergeVarAdd_Inputs For method chaining.
     */
    public function setTag($value)
    {
        return $this->set('Tag', $value);
    }
}


/**
 * Execution object for the ListMergeVarAdd Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVarAdd_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMergeVarAdd Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMergeVarAdd execution.
     * @param MailChimp_ListMergeVarAdd $choreo The choreography object for this execution.
     * @param MailChimp_ListMergeVarAdd_Inputs|array $inputs (optional) Inputs as MailChimp_ListMergeVarAdd_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMergeVarAdd_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListMergeVarAdd $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMergeVarAdd execution.
     *
     * @return MailChimp_ListMergeVarAdd_Results New results object.
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
     * Wraps results in appropriate results class for this ListMergeVarAdd execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListMergeVarAdd_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListMergeVarAdd_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMergeVarAdd Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMergeVarAdd_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMergeVarAdd Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListMergeVarAdd_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListMergeVarAdd execution.
     *
     * @return bool (boolean) The response from Mailchimp. Returns the string "true" for success and an error description for failures.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Unsubscribes one or more members from a MailChimp list.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchUnsubscribe extends Temboo_Choreography
{
    /**
     * Unsubscribes one or more members from a MailChimp list.
     *
     * @param Temboo_Session $session The session that owns this ListBatchUnsubscribe Choreo.
     * @return MailChimp_ListBatchUnsubscribe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListBatchUnsubscribe/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListBatchUnsubscribe Choreo.
     *
     * @param MailChimp_ListBatchUnsubscribe_Inputs|array $inputs (optional) Inputs as MailChimp_ListBatchUnsubscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListBatchUnsubscribe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListBatchUnsubscribe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListBatchUnsubscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListBatchUnsubscribe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListBatchUnsubscribe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListBatchUnsubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchUnsubscribe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListBatchUnsubscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListBatchUnsubscribe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListBatchUnsubscribe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListBatchUnsubscribe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListBatchUnsubscribe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListBatchUnsubscribe Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp
     * @return MailChimp_ListBatchUnsubscribe_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DeleteMember input for this ListBatchUnsubscribe Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to completely delete the member from your list instead of just unsubscribing. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListBatchUnsubscribe_Inputs For method chaining.
     */
    public function setDeleteMember($value)
    {
        return $this->set('DeleteMember', $value);
    }

    /**
     * Set the value for the Email input for this ListBatchUnsubscribe Choreo.
     *
     * @param string $value (required, string) The email address to unsubscribe from a Mailchimp list . Multiple emails can be supplied separated by commas.
     * @return MailChimp_ListBatchUnsubscribe_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ListId input for this ListBatchUnsubscribe Choreo.
     *
     * @param string $value (required, string) The Mailchimp List ID
     * @return MailChimp_ListBatchUnsubscribe_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the SendGoodbye input for this ListBatchUnsubscribe Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to send the goodbye email to the email address. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListBatchUnsubscribe_Inputs For method chaining.
     */
    public function setSendGoodbye($value)
    {
        return $this->set('SendGoodbye', $value);
    }

    /**
     * Set the value for the SendNotify input for this ListBatchUnsubscribe Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to send the unsubscribe notification email to the address defined in the list email notification settings. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListBatchUnsubscribe_Inputs For method chaining.
     */
    public function setSendNotify($value)
    {
        return $this->set('SendNotify', $value);
    }

    /**
     * Set the value for the SupressErrors input for this ListBatchUnsubscribe Choreo.
     *
     * @param bool $value (optional, boolean) Whether or not to suppress errors that arise from attempting to unsubscribe an email address. Defaults to 0 (false). Set to 1 (true) to supress errors.
     * @return MailChimp_ListBatchUnsubscribe_Inputs For method chaining.
     */
    public function setSupressErrors($value)
    {
        return $this->set('SupressErrors', $value);
    }
}


/**
 * Execution object for the ListBatchUnsubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchUnsubscribe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListBatchUnsubscribe Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListBatchUnsubscribe execution.
     * @param MailChimp_ListBatchUnsubscribe $choreo The choreography object for this execution.
     * @param MailChimp_ListBatchUnsubscribe_Inputs|array $inputs (optional) Inputs as MailChimp_ListBatchUnsubscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListBatchUnsubscribe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListBatchUnsubscribe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListBatchUnsubscribe execution.
     *
     * @return MailChimp_ListBatchUnsubscribe_Results New results object.
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
     * Wraps results in appropriate results class for this ListBatchUnsubscribe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListBatchUnsubscribe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListBatchUnsubscribe_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListBatchUnsubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListBatchUnsubscribe_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListBatchUnsubscribe Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListBatchUnsubscribe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "ErrorList" output from this ListBatchUnsubscribe execution.
     *
     * @return string (json) A list of emails that were not successfully unsubscribed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getErrorList()
    {
        return $this->get('ErrorList');
    }
    /**
     * Retrieve the value for the "SuccessList" output from this ListBatchUnsubscribe execution.
     *
     * @return string (json) A list of email successfully unsubscribed.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getSuccessList()
    {
        return $this->get('SuccessList');
    }
}

/**
 * Remove a subscriber from a MailChimp list.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListUnsubscribe extends Temboo_Choreography
{
    /**
     * Remove a subscriber from a MailChimp list.
     *
     * @param Temboo_Session $session The session that owns this ListUnsubscribe Choreo.
     * @return MailChimp_ListUnsubscribe New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListUnsubscribe/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListUnsubscribe Choreo.
     *
     * @param MailChimp_ListUnsubscribe_Inputs|array $inputs (optional) Inputs as MailChimp_ListUnsubscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListUnsubscribe_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListUnsubscribe_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListUnsubscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListUnsubscribe_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListUnsubscribe_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListUnsubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListUnsubscribe_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListUnsubscribe Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListUnsubscribe_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListUnsubscribe input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListUnsubscribe_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListUnsubscribe_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListUnsubscribe Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp.
     * @return MailChimp_ListUnsubscribe_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the DeleteMember input for this ListUnsubscribe Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to completely delete the member from your list instead of just unsubscribing. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListUnsubscribe_Inputs For method chaining.
     */
    public function setDeleteMember($value)
    {
        return $this->set('DeleteMember', $value);
    }

    /**
     * Set the value for the EmailAddress input for this ListUnsubscribe Choreo.
     *
     * @param string $value (required, string) The email address to unsubscribe.
     * @return MailChimp_ListUnsubscribe_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the ListId input for this ListUnsubscribe Choreo.
     *
     * @param string $value (required, string) The id of the list that contains the email address you want to unsubscribe.
     * @return MailChimp_ListUnsubscribe_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the SendGoodbye input for this ListUnsubscribe Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to send the goodbye email to the email address. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListUnsubscribe_Inputs For method chaining.
     */
    public function setSendGoodbye($value)
    {
        return $this->set('SendGoodbye', $value);
    }

    /**
     * Set the value for the SendNotify input for this ListUnsubscribe Choreo.
     *
     * @param bool $value (optional, boolean) A flag used to send the unsubscribe notification email to the address defined in the list email notification settings. Specify '1' (true) or '0' (false). Defaults to 0.
     * @return MailChimp_ListUnsubscribe_Inputs For method chaining.
     */
    public function setSendNotify($value)
    {
        return $this->set('SendNotify', $value);
    }
}


/**
 * Execution object for the ListUnsubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListUnsubscribe_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListUnsubscribe Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListUnsubscribe execution.
     * @param MailChimp_ListUnsubscribe $choreo The choreography object for this execution.
     * @param MailChimp_ListUnsubscribe_Inputs|array $inputs (optional) Inputs as MailChimp_ListUnsubscribe_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListUnsubscribe_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListUnsubscribe $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListUnsubscribe execution.
     *
     * @return MailChimp_ListUnsubscribe_Results New results object.
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
     * Wraps results in appropriate results class for this ListUnsubscribe execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListUnsubscribe_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListUnsubscribe_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListUnsubscribe Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListUnsubscribe_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListUnsubscribe Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListUnsubscribe_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListUnsubscribe execution.
     *
     * @return string The response from Mailchimp. Returns the string "true" for success and an error description for failures.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the email addresses of members of a MailChimp list. 
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMembers extends Temboo_Choreography
{
    /**
     * Retrieves the email addresses of members of a MailChimp list. 
     *
     * @param Temboo_Session $session The session that owns this ListMembers Choreo.
     * @return MailChimp_ListMembers New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/MailChimp/ListMembers/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this ListMembers Choreo.
     *
     * @param MailChimp_ListMembers_Inputs|array $inputs (optional) Inputs as MailChimp_ListMembers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMembers_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new MailChimp_ListMembers_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListMembers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMembers_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new MailChimp_ListMembers_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListMembers Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMembers_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the ListMembers Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return MailChimp_ListMembers_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListMembers input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return MailChimp_ListMembers_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return MailChimp_ListMembers_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListMembers Choreo.
     *
     * @param string $value (required, string) The API Key provided by Mailchimp.
     * @return MailChimp_ListMembers_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the Limit input for this ListMembers Choreo.
     *
     * @param int $value (optional, integer) Specifies the number of records in a page to be returned. Must be greater than zero and less than or equal to 15000. Defaults to 100.
     * @return MailChimp_ListMembers_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the ListId input for this ListMembers Choreo.
     *
     * @param string $value (required, string) The id of the Mailchimp list to retrieve members from.
     * @return MailChimp_ListMembers_Inputs For method chaining.
     */
    public function setListId($value)
    {
        return $this->set('ListId', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListMembers Choreo.
     *
     * @param string $value (optional, string) Indicates the desired format for the response. Accepted values are "json" or "xml" (the default).
     * @return MailChimp_ListMembers_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Since input for this ListMembers Choreo.
     *
     * @param string $value (optional, date) Retrieves records that have changed since this date/time. Formatted like 'YYYY-MM-DD HH:MM:SS.
     * @return MailChimp_ListMembers_Inputs For method chaining.
     */
    public function setSince($value)
    {
        return $this->set('Since', $value);
    }

    /**
     * Set the value for the Start input for this ListMembers Choreo.
     *
     * @param int $value (optional, integer) Specifies the page at which to begin returning records. Page size is defined by the limit argument. Must be zero or greater. Defaults to 0.
     * @return MailChimp_ListMembers_Inputs For method chaining.
     */
    public function setStart($value)
    {
        return $this->set('Start', $value);
    }

    /**
     * Set the value for the Status input for this ListMembers Choreo.
     *
     * @param string $value (optional, string) Must be one of 'subscribed', 'unsubscribed', 'cleaned', or 'updated'. Defaults to 'subscribed'.
     * @return MailChimp_ListMembers_Inputs For method chaining.
     */
    public function setStatus($value)
    {
        return $this->set('Status', $value);
    }
}


/**
 * Execution object for the ListMembers Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMembers_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListMembers Choreo.
     *
     * @param Temboo_Session $session The session that owns this ListMembers execution.
     * @param MailChimp_ListMembers $choreo The choreography object for this execution.
     * @param MailChimp_ListMembers_Inputs|array $inputs (optional) Inputs as MailChimp_ListMembers_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return MailChimp_ListMembers_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, MailChimp_ListMembers $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListMembers execution.
     *
     * @return MailChimp_ListMembers_Results New results object.
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
     * Wraps results in appropriate results class for this ListMembers execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return MailChimp_ListMembers_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new MailChimp_ListMembers_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the ListMembers Choreo.
 *
 * @package Temboo
 * @subpackage MailChimp
 */
class MailChimp_ListMembers_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the ListMembers Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return MailChimp_ListMembers_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this ListMembers execution.
     *
     * @return string The response from Mailchimp. Corresponds to the format specified in the ResponseFormat parameter. Defaults to "xml".
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
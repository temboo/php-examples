<?php

/**
 * Temboo PHP SDK AdMob classes
 *
 * Execute Choreographies from the Temboo AdMob bundle.
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
 * @subpackage AdMob
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Logout from AdMob service.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_Logout extends Temboo_Choreography
{
    /**
     * Logout from AdMob service.
     *
     * @param Temboo_Session $session The session that owns this Logout Choreo.
     * @return AdMob_Logout New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/Logout/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Logout Choreo.
     *
     * @param AdMob_Logout_Inputs|array $inputs (optional) Inputs as AdMob_Logout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_Logout_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_Logout_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Logout Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_Logout_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_Logout_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Logout Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_Logout_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Logout Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_Logout_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Logout input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_Logout_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_Logout_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientKey input for this Logout Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_Logout_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Token input for this Logout Choreo.
     *
     * @param string $value (required, string) The security token returned by the Login Choreo.
     * @return AdMob_Logout_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the Logout Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_Logout_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Logout Choreo.
     *
     * @param Temboo_Session $session The session that owns this Logout execution.
     * @param AdMob_Logout $choreo The choreography object for this execution.
     * @param AdMob_Logout_Inputs|array $inputs (optional) Inputs as AdMob_Logout_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_Logout_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_Logout $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Logout execution.
     *
     * @return AdMob_Logout_Results New results object.
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
     * Wraps results in appropriate results class for this Logout execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_Logout_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_Logout_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Logout Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_Logout_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Logout Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_Logout_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Logout execution.
     *
     * @return string (xml) The response from AdMob in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Search for Ad Group statistics by entering their IDs.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdGroupStats extends Temboo_Choreography
{
    /**
     * Search for Ad Group statistics by entering their IDs.
     *
     * @param Temboo_Session $session The session that owns this AdGroupStats Choreo.
     * @return AdMob_AdGroupStats New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/AdGroupStats/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AdGroupStats Choreo.
     *
     * @param AdMob_AdGroupStats_Inputs|array $inputs (optional) Inputs as AdMob_AdGroupStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_AdGroupStats_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_AdGroupStats_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AdGroupStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_AdGroupStats_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_AdGroupStats_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AdGroupStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdGroupStats_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AdGroupStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_AdGroupStats_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AdGroupStats input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AdGroupID input for this AdGroupStats Choreo.
     *
     * @param string $value (required, string) Search for ad groups using this ID.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setAdGroupID($value)
    {
        return $this->set('AdGroupID', $value);
    }

    /**
     * Set the value for the ClientKey input for this AdGroupStats Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Email input for this AdGroupStats Choreo.
     *
     * @param string $value (conditional, string) Your AdMob username. Required unless providing a valid Token input.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this AdGroupStats Choreo.
     *
     * @param string $value (required, date) Enter search end date in following format: 2011-09-12
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ObjectDimension input for this AdGroupStats Choreo.
     *
     * @param string $value (optional, string) Specify an Ad group to narrow your search.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setObjectDimension($value)
    {
        return $this->set('ObjectDimension', $value);
    }

    /**
     * Set the value for the OrderBy input for this AdGroupStats Choreo.
     *
     * @param string $value (optional, string) Order by the number of impressions. Example: [impressions]=asc
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this AdGroupStats Choreo.
     *
     * @param string $value (conditional, password) Your Admob password. Required unless providing a valid Token input.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AdGroupStats Choreo.
     *
     * @param string $value (optional, string) The format that your want the response to be in. Accepted values are: xml (the default) and json.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this AdGroupStats Choreo.
     *
     * @param string $value (required, date) Enter search start date in following format: 2011-09-12
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the TimeDimension input for this AdGroupStats Choreo.
     *
     * @param string $value (optional, string) Specify whether stats should be grouped by day, week, or month.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setTimeDimension($value)
    {
        return $this->set('TimeDimension', $value);
    }

    /**
     * Set the value for the Token input for this AdGroupStats Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @return AdMob_AdGroupStats_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the AdGroupStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdGroupStats_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AdGroupStats Choreo.
     *
     * @param Temboo_Session $session The session that owns this AdGroupStats execution.
     * @param AdMob_AdGroupStats $choreo The choreography object for this execution.
     * @param AdMob_AdGroupStats_Inputs|array $inputs (optional) Inputs as AdMob_AdGroupStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_AdGroupStats_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_AdGroupStats $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AdGroupStats execution.
     *
     * @return AdMob_AdGroupStats_Results New results object.
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
     * Wraps results in appropriate results class for this AdGroupStats execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_AdGroupStats_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_AdGroupStats_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AdGroupStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdGroupStats_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AdGroupStats Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_AdGroupStats_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AdGroupStats execution.
     *
     * @return string The response from AdMob. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this AdGroupStats execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Search for ad campaigns using IDs.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_CampaignSearch extends Temboo_Choreography
{
    /**
     * Search for ad campaigns using IDs.
     *
     * @param Temboo_Session $session The session that owns this CampaignSearch Choreo.
     * @return AdMob_CampaignSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/CampaignSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CampaignSearch Choreo.
     *
     * @param AdMob_CampaignSearch_Inputs|array $inputs (optional) Inputs as AdMob_CampaignSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_CampaignSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_CampaignSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CampaignSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_CampaignSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_CampaignSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CampaignSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_CampaignSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CampaignSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_CampaignSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CampaignSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_CampaignSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_CampaignSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CampaignID input for this CampaignSearch Choreo.
     *
     * @param string $value (optional, string) Search for ad campaigns using this ID.
     * @return AdMob_CampaignSearch_Inputs For method chaining.
     */
    public function setCampaignID($value)
    {
        return $this->set('CampaignID', $value);
    }

    /**
     * Set the value for the ClientKey input for this CampaignSearch Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_CampaignSearch_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Email input for this CampaignSearch Choreo.
     *
     * @param string $value (conditional, string) Your AdMob username. Required unless providing a valid Token input.
     * @return AdMob_CampaignSearch_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this CampaignSearch Choreo.
     *
     * @param bool $value (optional, boolean) If set to 1, ad groups that have been deleted will be included in the search result.
     * @return AdMob_CampaignSearch_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the Password input for this CampaignSearch Choreo.
     *
     * @param string $value (conditional, password) Your Admob password. Required unless providing a valid Token input.
     * @return AdMob_CampaignSearch_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CampaignSearch Choreo.
     *
     * @param string $value (optional, string) The format that your want the response to be in. Accepted values are: xml (the default) and json.
     * @return AdMob_CampaignSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Token input for this CampaignSearch Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @return AdMob_CampaignSearch_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the CampaignSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_CampaignSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CampaignSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this CampaignSearch execution.
     * @param AdMob_CampaignSearch $choreo The choreography object for this execution.
     * @param AdMob_CampaignSearch_Inputs|array $inputs (optional) Inputs as AdMob_CampaignSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_CampaignSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_CampaignSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CampaignSearch execution.
     *
     * @return AdMob_CampaignSearch_Results New results object.
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
     * Wraps results in appropriate results class for this CampaignSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_CampaignSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_CampaignSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CampaignSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_CampaignSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CampaignSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_CampaignSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CampaignSearch execution.
     *
     * @return string The response from AdMob. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this CampaignSearch execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Retrieve ad statistics by specifying IDs.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdStats extends Temboo_Choreography
{
    /**
     * Retrieve ad statistics by specifying IDs.
     *
     * @param Temboo_Session $session The session that owns this AdStats Choreo.
     * @return AdMob_AdStats New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/AdStats/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AdStats Choreo.
     *
     * @param AdMob_AdStats_Inputs|array $inputs (optional) Inputs as AdMob_AdStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_AdStats_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_AdStats_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AdStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_AdStats_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_AdStats_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AdStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdStats_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AdStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_AdStats_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AdStats input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AdID input for this AdStats Choreo.
     *
     * @param string $value (required, string) Search for ads using this ID.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setAdID($value)
    {
        return $this->set('AdID', $value);
    }

    /**
     * Set the value for the ClientKey input for this AdStats Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Email input for this AdStats Choreo.
     *
     * @param string $value (conditional, string) Your AdMob username. Required unless providing a valid Token input.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this AdStats Choreo.
     *
     * @param string $value (required, date) Enter search end date in following format: 2011-09-12
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ObjectDimension input for this AdStats Choreo.
     *
     * @param string $value (optional, string) Specify a specific Ad to narrow your search.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setObjectDimension($value)
    {
        return $this->set('ObjectDimension', $value);
    }

    /**
     * Set the value for the OrderBy input for this AdStats Choreo.
     *
     * @param string $value (optional, string) Order by the number of impressions. Example: [impressions]=asc
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this AdStats Choreo.
     *
     * @param string $value (conditional, password) Your Admob password. Required unless providing a valid Token input.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AdStats Choreo.
     *
     * @param string $value (optional, string) The format that your want the response to be in. Accepted values are: xml (the default) and json.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this AdStats Choreo.
     *
     * @param string $value (required, date) Enter search start date in following format: 2011-09-12
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the TimeDimension input for this AdStats Choreo.
     *
     * @param string $value (optional, string) Specify whether stats should be grouped by day, week, or month.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setTimeDimension($value)
    {
        return $this->set('TimeDimension', $value);
    }

    /**
     * Set the value for the Token input for this AdStats Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @return AdMob_AdStats_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the AdStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdStats_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AdStats Choreo.
     *
     * @param Temboo_Session $session The session that owns this AdStats execution.
     * @param AdMob_AdStats $choreo The choreography object for this execution.
     * @param AdMob_AdStats_Inputs|array $inputs (optional) Inputs as AdMob_AdStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_AdStats_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_AdStats $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AdStats execution.
     *
     * @return AdMob_AdStats_Results New results object.
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
     * Wraps results in appropriate results class for this AdStats execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_AdStats_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_AdStats_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AdStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdStats_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AdStats Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_AdStats_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AdStats execution.
     *
     * @return string The response from AdMob. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this AdStats execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Log into AdMob service and obtain an authorization token.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_Login extends Temboo_Choreography
{
    /**
     * Log into AdMob service and obtain an authorization token.
     *
     * @param Temboo_Session $session The session that owns this Login Choreo.
     * @return AdMob_Login New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/Login/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Login Choreo.
     *
     * @param AdMob_Login_Inputs|array $inputs (optional) Inputs as AdMob_Login_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_Login_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_Login_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Login Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_Login_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_Login_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Login Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_Login_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Login Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_Login_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Login input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_Login_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_Login_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientKey input for this Login Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_Login_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Email input for this Login Choreo.
     *
     * @param string $value (required, string) Your AdMob username.
     * @return AdMob_Login_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Password input for this Login Choreo.
     *
     * @param string $value (required, password) Your Admob password.
     * @return AdMob_Login_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }
}


/**
 * Execution object for the Login Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_Login_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Login Choreo.
     *
     * @param Temboo_Session $session The session that owns this Login execution.
     * @param AdMob_Login $choreo The choreography object for this execution.
     * @param AdMob_Login_Inputs|array $inputs (optional) Inputs as AdMob_Login_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_Login_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_Login $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Login execution.
     *
     * @return AdMob_Login_Results New results object.
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
     * Wraps results in appropriate results class for this Login execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_Login_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_Login_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Login Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_Login_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Login Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_Login_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Login execution.
     *
     * @return string (xml) The response from AdMob in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this Login execution.
     *
     * @return string (string) The token obtained by running this choreo.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Search for ads using IDs.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdSearch extends Temboo_Choreography
{
    /**
     * Search for ads using IDs.
     *
     * @param Temboo_Session $session The session that owns this AdSearch Choreo.
     * @return AdMob_AdSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/AdSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AdSearch Choreo.
     *
     * @param AdMob_AdSearch_Inputs|array $inputs (optional) Inputs as AdMob_AdSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_AdSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_AdSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AdSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_AdSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_AdSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AdSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AdSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_AdSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AdSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AdGroupID input for this AdSearch Choreo.
     *
     * @param string $value (optional, string) Search for ad groups using this ID.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function setAdGroupID($value)
    {
        return $this->set('AdGroupID', $value);
    }

    /**
     * Set the value for the AdID input for this AdSearch Choreo.
     *
     * @param string $value (optional, string) Search for ads using this ID.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function setAdID($value)
    {
        return $this->set('AdID', $value);
    }

    /**
     * Set the value for the ClientKey input for this AdSearch Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Email input for this AdSearch Choreo.
     *
     * @param string $value (conditional, string) Your AdMob username. Required unless providing a valid Token input.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this AdSearch Choreo.
     *
     * @param bool $value (optional, boolean) If set to 1, ad groups that have been deleted will be included in the search result.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the Password input for this AdSearch Choreo.
     *
     * @param string $value (conditional, password) Your Admob password. Required unless providing a valid Token input.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AdSearch Choreo.
     *
     * @param string $value (optional, string) The format that your want the response to be in. Accepted values are: xml (the default) and json.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Token input for this AdSearch Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @return AdMob_AdSearch_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the AdSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AdSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this AdSearch execution.
     * @param AdMob_AdSearch $choreo The choreography object for this execution.
     * @param AdMob_AdSearch_Inputs|array $inputs (optional) Inputs as AdMob_AdSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_AdSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_AdSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AdSearch execution.
     *
     * @return AdMob_AdSearch_Results New results object.
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
     * Wraps results in appropriate results class for this AdSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_AdSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_AdSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AdSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AdSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_AdSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AdSearch execution.
     *
     * @return string The response from AdMob. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this AdSearch execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Retrieve site statistics.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_SiteStats extends Temboo_Choreography
{
    /**
     * Retrieve site statistics.
     *
     * @param Temboo_Session $session The session that owns this SiteStats Choreo.
     * @return AdMob_SiteStats New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/SiteStats/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SiteStats Choreo.
     *
     * @param AdMob_SiteStats_Inputs|array $inputs (optional) Inputs as AdMob_SiteStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_SiteStats_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_SiteStats_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SiteStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_SiteStats_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_SiteStats_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SiteStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_SiteStats_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SiteStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_SiteStats_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SiteStats input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientKey input for this SiteStats Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Email input for this SiteStats Choreo.
     *
     * @param string $value (conditional, string) Your AdMob username. Required unless providing a valid Token input.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this SiteStats Choreo.
     *
     * @param string $value (required, date) Enter search end date in following format: 2011-09-12
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ObjectDimension input for this SiteStats Choreo.
     *
     * @param string $value (optional, string) Specify a site to group and narrow your search.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setObjectDimension($value)
    {
        return $this->set('ObjectDimension', $value);
    }

    /**
     * Set the value for the OrderBy input for this SiteStats Choreo.
     *
     * @param string $value (optional, string) Order by the number of impressions. Example: [impressions]=asc
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this SiteStats Choreo.
     *
     * @param string $value (conditional, password) Your Admob password. Required unless providing a valid Token input.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SiteStats Choreo.
     *
     * @param string $value (optional, string) The format that your want the response to be in. Accepted values are: xml (the default) and json.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SiteID input for this SiteStats Choreo.
     *
     * @param string $value (optional, string) Search for a site matching this ID.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the StartDate input for this SiteStats Choreo.
     *
     * @param string $value (required, date) Enter search start date in following format: 2011-09-12
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the TimeDimension input for this SiteStats Choreo.
     *
     * @param string $value (optional, string) Specify whether stats should be grouped by day, week, or month.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setTimeDimension($value)
    {
        return $this->set('TimeDimension', $value);
    }

    /**
     * Set the value for the Token input for this SiteStats Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @return AdMob_SiteStats_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the SiteStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_SiteStats_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SiteStats Choreo.
     *
     * @param Temboo_Session $session The session that owns this SiteStats execution.
     * @param AdMob_SiteStats $choreo The choreography object for this execution.
     * @param AdMob_SiteStats_Inputs|array $inputs (optional) Inputs as AdMob_SiteStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_SiteStats_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_SiteStats $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SiteStats execution.
     *
     * @return AdMob_SiteStats_Results New results object.
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
     * Wraps results in appropriate results class for this SiteStats execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_SiteStats_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_SiteStats_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SiteStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_SiteStats_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SiteStats Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_SiteStats_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SiteStats execution.
     *
     * @return string The response from AdMob. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this SiteStats execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Search for sites by specifying their ID.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_SiteSearch extends Temboo_Choreography
{
    /**
     * Search for sites by specifying their ID.
     *
     * @param Temboo_Session $session The session that owns this SiteSearch Choreo.
     * @return AdMob_SiteSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/SiteSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SiteSearch Choreo.
     *
     * @param AdMob_SiteSearch_Inputs|array $inputs (optional) Inputs as AdMob_SiteSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_SiteSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_SiteSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SiteSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_SiteSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_SiteSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SiteSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_SiteSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SiteSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_SiteSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SiteSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_SiteSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_SiteSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ClientKey input for this SiteSearch Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_SiteSearch_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Email input for this SiteSearch Choreo.
     *
     * @param string $value (conditional, string) Your AdMob username. Required unless providing a valid Token input.
     * @return AdMob_SiteSearch_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this SiteSearch Choreo.
     *
     * @param bool $value (optional, boolean) If set to 1, ad groups that have been deleted will be included in the search result.
     * @return AdMob_SiteSearch_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the Password input for this SiteSearch Choreo.
     *
     * @param string $value (conditional, password) Your Admob password. Required unless providing a valid Token input.
     * @return AdMob_SiteSearch_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SiteSearch Choreo.
     *
     * @param string $value (optional, string) The format that your want the response to be in. Accepted values are: xml (the default) and json.
     * @return AdMob_SiteSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the SiteID input for this SiteSearch Choreo.
     *
     * @param string $value (optional, string) Search for a site matching this ID.
     * @return AdMob_SiteSearch_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the Token input for this SiteSearch Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @return AdMob_SiteSearch_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the SiteSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_SiteSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SiteSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this SiteSearch execution.
     * @param AdMob_SiteSearch $choreo The choreography object for this execution.
     * @param AdMob_SiteSearch_Inputs|array $inputs (optional) Inputs as AdMob_SiteSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_SiteSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_SiteSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SiteSearch execution.
     *
     * @return AdMob_SiteSearch_Results New results object.
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
     * Wraps results in appropriate results class for this SiteSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_SiteSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_SiteSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SiteSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_SiteSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SiteSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_SiteSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SiteSearch execution.
     *
     * @return string The response from AdMob. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this SiteSearch execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Retrieve campaign stats by ID.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_CampaignStats extends Temboo_Choreography
{
    /**
     * Retrieve campaign stats by ID.
     *
     * @param Temboo_Session $session The session that owns this CampaignStats Choreo.
     * @return AdMob_CampaignStats New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/CampaignStats/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this CampaignStats Choreo.
     *
     * @param AdMob_CampaignStats_Inputs|array $inputs (optional) Inputs as AdMob_CampaignStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_CampaignStats_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_CampaignStats_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CampaignStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_CampaignStats_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_CampaignStats_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CampaignStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_CampaignStats_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the CampaignStats Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_CampaignStats_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CampaignStats input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the CampaignID input for this CampaignStats Choreo.
     *
     * @param string $value (required, string) Search for ad campaigns using this ID.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setCampaignID($value)
    {
        return $this->set('CampaignID', $value);
    }

    /**
     * Set the value for the ClientKey input for this CampaignStats Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Email input for this CampaignStats Choreo.
     *
     * @param string $value (conditional, string) Your AdMob username. Required unless providing a valid Token input.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this CampaignStats Choreo.
     *
     * @param string $value (required, date) Enter search end date in following format: 2011-09-12
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ObjectDimension input for this CampaignStats Choreo.
     *
     * @param string $value (optional, string) Specify a campaign to group and narrow your search.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setObjectDimension($value)
    {
        return $this->set('ObjectDimension', $value);
    }

    /**
     * Set the value for the OrderBy input for this CampaignStats Choreo.
     *
     * @param string $value (optional, string) Order by the number of impressions. Example: [impressions]=asc
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setOrderBy($value)
    {
        return $this->set('OrderBy', $value);
    }

    /**
     * Set the value for the Password input for this CampaignStats Choreo.
     *
     * @param string $value (conditional, password) Your Admob password. Required unless providing a valid Token input.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CampaignStats Choreo.
     *
     * @param string $value (optional, string) The format that your want the response to be in. Accepted values are: xml (the default) and json.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this CampaignStats Choreo.
     *
     * @param string $value (required, date) Enter search start date in following format: 2011-09-12
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the TimeDimension input for this CampaignStats Choreo.
     *
     * @param string $value (optional, string) Specify whether stats should be grouped by day, week, or month.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setTimeDimension($value)
    {
        return $this->set('TimeDimension', $value);
    }

    /**
     * Set the value for the Token input for this CampaignStats Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @return AdMob_CampaignStats_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the CampaignStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_CampaignStats_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CampaignStats Choreo.
     *
     * @param Temboo_Session $session The session that owns this CampaignStats execution.
     * @param AdMob_CampaignStats $choreo The choreography object for this execution.
     * @param AdMob_CampaignStats_Inputs|array $inputs (optional) Inputs as AdMob_CampaignStats_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_CampaignStats_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_CampaignStats $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CampaignStats execution.
     *
     * @return AdMob_CampaignStats_Results New results object.
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
     * Wraps results in appropriate results class for this CampaignStats execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_CampaignStats_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_CampaignStats_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the CampaignStats Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_CampaignStats_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the CampaignStats Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_CampaignStats_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this CampaignStats execution.
     *
     * @return string The response from AdMob. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this CampaignStats execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getToken()
    {
        return $this->get('Token');
    }
}

/**
 * Search for Ad Groups using IDs.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdGroupSearch extends Temboo_Choreography
{
    /**
     * Search for Ad Groups using IDs.
     *
     * @param Temboo_Session $session The session that owns this AdGroupSearch Choreo.
     * @return AdMob_AdGroupSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/AdMob/AdGroupSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AdGroupSearch Choreo.
     *
     * @param AdMob_AdGroupSearch_Inputs|array $inputs (optional) Inputs as AdMob_AdGroupSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_AdGroupSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new AdMob_AdGroupSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AdGroupSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_AdGroupSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new AdMob_AdGroupSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AdGroupSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdGroupSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AdGroupSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return AdMob_AdGroupSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AdGroupSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AdGroupID input for this AdGroupSearch Choreo.
     *
     * @param string $value (optional, string) Search for ad groups using this ID.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function setAdGroupID($value)
    {
        return $this->set('AdGroupID', $value);
    }

    /**
     * Set the value for the CampaignID input for this AdGroupSearch Choreo.
     *
     * @param string $value (optional, string) Search for ad groups in this specific campaign.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function setCampaignID($value)
    {
        return $this->set('CampaignID', $value);
    }

    /**
     * Set the value for the ClientKey input for this AdGroupSearch Choreo.
     *
     * @param string $value (required, string) The Client Key provided by AdMob.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function setClientKey($value)
    {
        return $this->set('ClientKey', $value);
    }

    /**
     * Set the value for the Email input for this AdGroupSearch Choreo.
     *
     * @param string $value (conditional, string) Your AdMob username. Required unless providing a valid Token input.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the IncludeDeleted input for this AdGroupSearch Choreo.
     *
     * @param bool $value (optional, boolean) If set to 1, ad groups that have been deleted will be included in the search result.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function setIncludeDeleted($value)
    {
        return $this->set('IncludeDeleted', $value);
    }

    /**
     * Set the value for the Password input for this AdGroupSearch Choreo.
     *
     * @param string $value (conditional, password) Your Admob password. Required unless providing a valid Token input.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AdGroupSearch Choreo.
     *
     * @param string $value (optional, string) The format that your want the response to be in. Accepted values are: xml (the default) and json.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Token input for this AdGroupSearch Choreo.
     *
     * @param string $value (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
     * @return AdMob_AdGroupSearch_Inputs For method chaining.
     */
    public function setToken($value)
    {
        return $this->set('Token', $value);
    }
}


/**
 * Execution object for the AdGroupSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdGroupSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AdGroupSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this AdGroupSearch execution.
     * @param AdMob_AdGroupSearch $choreo The choreography object for this execution.
     * @param AdMob_AdGroupSearch_Inputs|array $inputs (optional) Inputs as AdMob_AdGroupSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return AdMob_AdGroupSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, AdMob_AdGroupSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AdGroupSearch execution.
     *
     * @return AdMob_AdGroupSearch_Results New results object.
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
     * Wraps results in appropriate results class for this AdGroupSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return AdMob_AdGroupSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new AdMob_AdGroupSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AdGroupSearch Choreo.
 *
 * @package Temboo
 * @subpackage AdMob
 */
class AdMob_AdGroupSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AdGroupSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return AdMob_AdGroupSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AdGroupSearch execution.
     *
     * @return string The response from AdMob. Corresponds to the ResponseFormat input. Defaults to xml.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
    /**
     * Retrieve the value for the "Token" output from this AdGroupSearch execution.
     *
     * @return string (conditional, string) If provided, the Choreo will use the token to authenticate. If the token is expired or not provided, the Choreo will relogin and retrieve a new token when Email and Password are supplied.
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
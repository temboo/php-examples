<?php

/**
 * Temboo PHP SDK Clicky classes
 *
 * Execute Choreographies from the Temboo Clicky bundle.
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
 * @subpackage Clicky
 * @author     Temboo, Inc.
 * @copyright  2013 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       http://www.temboo.com
 */
/**
 * Retrieves analytics, filtering down to only the results you specify in a keyword filter.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_FilterByKeyword extends Temboo_Choreography
{
    /**
     * Retrieves analytics, filtering down to only the results you specify in a keyword filter.
     *
     * @param Temboo_Session $session The session that owns this FilterByKeyword Choreo.
     * @return Clicky_FilterByKeyword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/FilterByKeyword/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FilterByKeyword Choreo.
     *
     * @param Clicky_FilterByKeyword_Inputs|array $inputs (optional) Inputs as Clicky_FilterByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_FilterByKeyword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_FilterByKeyword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FilterByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_FilterByKeyword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_FilterByKeyword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FilterByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_FilterByKeyword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FilterByKeyword Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_FilterByKeyword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FilterByKeyword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_FilterByKeyword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_FilterByKeyword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Filter input for this FilterByKeyword Choreo.
     *
     * @param string $value (required, string) You can use this parameter to filter down to only the results you want.
     * @return Clicky_FilterByKeyword_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Limit input for this FilterByKeyword Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results that will be returned. Defaults to 10.
     * @return Clicky_FilterByKeyword_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Output input for this FilterByKeyword Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_FilterByKeyword_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this FilterByKeyword Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_FilterByKeyword_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this FilterByKeyword Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_FilterByKeyword_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this FilterByKeyword Choreo.
     *
     * @param string $value (required, string) The type of data you want to retrieve. Can be a comma-separated list of types (i.e. visitors,countries,searches).
     * @return Clicky_FilterByKeyword_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the FilterByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_FilterByKeyword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FilterByKeyword Choreo.
     *
     * @param Temboo_Session $session The session that owns this FilterByKeyword execution.
     * @param Clicky_FilterByKeyword $choreo The choreography object for this execution.
     * @param Clicky_FilterByKeyword_Inputs|array $inputs (optional) Inputs as Clicky_FilterByKeyword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_FilterByKeyword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_FilterByKeyword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FilterByKeyword execution.
     *
     * @return Clicky_FilterByKeyword_Results New results object.
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
     * Wraps results in appropriate results class for this FilterByKeyword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_FilterByKeyword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_FilterByKeyword_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FilterByKeyword Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_FilterByKeyword_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FilterByKeyword Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_FilterByKeyword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FilterByKeyword execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to retrieve analytics, using more advanced filter options.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_AdvancedFilter extends Temboo_Choreography
{
    /**
     * Allows you to retrieve analytics, using more advanced filter options.
     *
     * @param Temboo_Session $session The session that owns this AdvancedFilter Choreo.
     * @return Clicky_AdvancedFilter New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/AdvancedFilter/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this AdvancedFilter Choreo.
     *
     * @param Clicky_AdvancedFilter_Inputs|array $inputs (optional) Inputs as Clicky_AdvancedFilter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_AdvancedFilter_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_AdvancedFilter_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AdvancedFilter Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_AdvancedFilter_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_AdvancedFilter_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AdvancedFilter Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_AdvancedFilter_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the AdvancedFilter Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_AdvancedFilter_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AdvancedFilter input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Date input for this AdvancedFilter Choreo.
     *
     * @param string $value (optional, string) The date or date range you want to access. Use YYYY-MM-DD format for date and YYYY-MM-DD,YYYY-MM-DD for a range. See docs for more options for this input. Defaults to 'today'.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the FilterName input for this AdvancedFilter Choreo.
     *
     * @param string $value (required, string) The name of the data you want to filter by (i.e. ip_address). See docs for a complete list of supported filters.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function setFilterName($value)
    {
        return $this->set('FilterName', $value);
    }

    /**
     * Set the value for the FilterValue input for this AdvancedFilter Choreo.
     *
     * @param string $value (required, string) The value of the filter you want to apply to the request. For example, if you're FilterName is "ip_address", you could use "65.0.0.0,85.0.0.0" in the FilterValue.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function setFilterValue($value)
    {
        return $this->set('FilterValue', $value);
    }

    /**
     * Set the value for the Limit input for this AdvancedFilter Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results that will be returned. Defaults to 10.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Output input for this AdvancedFilter Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this AdvancedFilter Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this AdvancedFilter Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this AdvancedFilter Choreo.
     *
     * @param string $value (required, string) The type of data you want to retrieve. Note that not all types are available for this Choreo. Use types: vistors-list, segmentation, or actions-list.
     * @return Clicky_AdvancedFilter_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the AdvancedFilter Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_AdvancedFilter_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AdvancedFilter Choreo.
     *
     * @param Temboo_Session $session The session that owns this AdvancedFilter execution.
     * @param Clicky_AdvancedFilter $choreo The choreography object for this execution.
     * @param Clicky_AdvancedFilter_Inputs|array $inputs (optional) Inputs as Clicky_AdvancedFilter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_AdvancedFilter_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_AdvancedFilter $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AdvancedFilter execution.
     *
     * @return Clicky_AdvancedFilter_Results New results object.
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
     * Wraps results in appropriate results class for this AdvancedFilter execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_AdvancedFilter_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_AdvancedFilter_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the AdvancedFilter Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_AdvancedFilter_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the AdvancedFilter Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_AdvancedFilter_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this AdvancedFilter execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves hourly visitor and action tallies for the last 7 days.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_HourlyVisitorsLast7Days extends Temboo_Choreography
{
    /**
     * Retrieves hourly visitor and action tallies for the last 7 days.
     *
     * @param Temboo_Session $session The session that owns this HourlyVisitorsLast7Days Choreo.
     * @return Clicky_HourlyVisitorsLast7Days New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/HourlyVisitorsLast7Days/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this HourlyVisitorsLast7Days Choreo.
     *
     * @param Clicky_HourlyVisitorsLast7Days_Inputs|array $inputs (optional) Inputs as Clicky_HourlyVisitorsLast7Days_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_HourlyVisitorsLast7Days_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_HourlyVisitorsLast7Days_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this HourlyVisitorsLast7Days Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_HourlyVisitorsLast7Days_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_HourlyVisitorsLast7Days_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the HourlyVisitorsLast7Days Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_HourlyVisitorsLast7Days_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the HourlyVisitorsLast7Days Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_HourlyVisitorsLast7Days_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this HourlyVisitorsLast7Days input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_HourlyVisitorsLast7Days_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_HourlyVisitorsLast7Days_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Output input for this HourlyVisitorsLast7Days Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_HourlyVisitorsLast7Days_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this HourlyVisitorsLast7Days Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_HourlyVisitorsLast7Days_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this HourlyVisitorsLast7Days Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_HourlyVisitorsLast7Days_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this HourlyVisitorsLast7Days Choreo.
     *
     * @param string $value (optional, string) The type of data you want to retrieve. Defaults to "visitors,actions".
     * @return Clicky_HourlyVisitorsLast7Days_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the HourlyVisitorsLast7Days Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_HourlyVisitorsLast7Days_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the HourlyVisitorsLast7Days Choreo.
     *
     * @param Temboo_Session $session The session that owns this HourlyVisitorsLast7Days execution.
     * @param Clicky_HourlyVisitorsLast7Days $choreo The choreography object for this execution.
     * @param Clicky_HourlyVisitorsLast7Days_Inputs|array $inputs (optional) Inputs as Clicky_HourlyVisitorsLast7Days_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_HourlyVisitorsLast7Days_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_HourlyVisitorsLast7Days $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this HourlyVisitorsLast7Days execution.
     *
     * @return Clicky_HourlyVisitorsLast7Days_Results New results object.
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
     * Wraps results in appropriate results class for this HourlyVisitorsLast7Days execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_HourlyVisitorsLast7Days_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_HourlyVisitorsLast7Days_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the HourlyVisitorsLast7Days Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_HourlyVisitorsLast7Days_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the HourlyVisitorsLast7Days Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_HourlyVisitorsLast7Days_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this HourlyVisitorsLast7Days execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves segmentation data for visitors today who arrived via a search.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_SegmentationForVisitorsTodayViaSearch extends Temboo_Choreography
{
    /**
     * Retrieves segmentation data for visitors today who arrived via a search.
     *
     * @param Temboo_Session $session The session that owns this SegmentationForVisitorsTodayViaSearch Choreo.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/SegmentationForVisitorsTodayViaSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param Clicky_SegmentationForVisitorsTodayViaSearch_Inputs|array $inputs (optional) Inputs as Clicky_SegmentationForVisitorsTodayViaSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_SegmentationForVisitorsTodayViaSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_SegmentationForVisitorsTodayViaSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SegmentationForVisitorsTodayViaSearch Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_SegmentationForVisitorsTodayViaSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SegmentationForVisitorsTodayViaSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param int $value (optional, integer) The number of records you want to retrieve. Defaults to 30.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Output input for this SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param string $value (optional, string) The type of data you want to retrieve. Defaults to "segmentation".
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the SegmentationForVisitorsTodayViaSearch Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_SegmentationForVisitorsTodayViaSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this SegmentationForVisitorsTodayViaSearch execution.
     * @param Clicky_SegmentationForVisitorsTodayViaSearch $choreo The choreography object for this execution.
     * @param Clicky_SegmentationForVisitorsTodayViaSearch_Inputs|array $inputs (optional) Inputs as Clicky_SegmentationForVisitorsTodayViaSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_SegmentationForVisitorsTodayViaSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SegmentationForVisitorsTodayViaSearch execution.
     *
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Results New results object.
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
     * Wraps results in appropriate results class for this SegmentationForVisitorsTodayViaSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_SegmentationForVisitorsTodayViaSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the SegmentationForVisitorsTodayViaSearch Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_SegmentationForVisitorsTodayViaSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the SegmentationForVisitorsTodayViaSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_SegmentationForVisitorsTodayViaSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this SegmentationForVisitorsTodayViaSearch execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves last weeks's top pages, links, and searches, by day.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_TopStatsLastWeekByDay extends Temboo_Choreography
{
    /**
     * Retrieves last weeks's top pages, links, and searches, by day.
     *
     * @param Temboo_Session $session The session that owns this TopStatsLastWeekByDay Choreo.
     * @return Clicky_TopStatsLastWeekByDay New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/TopStatsLastWeekByDay/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopStatsLastWeekByDay Choreo.
     *
     * @param Clicky_TopStatsLastWeekByDay_Inputs|array $inputs (optional) Inputs as Clicky_TopStatsLastWeekByDay_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_TopStatsLastWeekByDay_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_TopStatsLastWeekByDay_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopStatsLastWeekByDay Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_TopStatsLastWeekByDay_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_TopStatsLastWeekByDay_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopStatsLastWeekByDay Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_TopStatsLastWeekByDay_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopStatsLastWeekByDay Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_TopStatsLastWeekByDay_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopStatsLastWeekByDay input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_TopStatsLastWeekByDay_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_TopStatsLastWeekByDay_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Output input for this TopStatsLastWeekByDay Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_TopStatsLastWeekByDay_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this TopStatsLastWeekByDay Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_TopStatsLastWeekByDay_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this TopStatsLastWeekByDay Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_TopStatsLastWeekByDay_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this TopStatsLastWeekByDay Choreo.
     *
     * @param string $value (optional, string) The type of data you want to retrieve. Defaults to "pages,links,searches".
     * @return Clicky_TopStatsLastWeekByDay_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the TopStatsLastWeekByDay Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_TopStatsLastWeekByDay_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopStatsLastWeekByDay Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopStatsLastWeekByDay execution.
     * @param Clicky_TopStatsLastWeekByDay $choreo The choreography object for this execution.
     * @param Clicky_TopStatsLastWeekByDay_Inputs|array $inputs (optional) Inputs as Clicky_TopStatsLastWeekByDay_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_TopStatsLastWeekByDay_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_TopStatsLastWeekByDay $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopStatsLastWeekByDay execution.
     *
     * @return Clicky_TopStatsLastWeekByDay_Results New results object.
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
     * Wraps results in appropriate results class for this TopStatsLastWeekByDay execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_TopStatsLastWeekByDay_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_TopStatsLastWeekByDay_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopStatsLastWeekByDay Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_TopStatsLastWeekByDay_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopStatsLastWeekByDay Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_TopStatsLastWeekByDay_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopStatsLastWeekByDay execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves anlaytics for your website for a particular date or date range.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_GetAnalyticsByDate extends Temboo_Choreography
{
    /**
     * Retrieves anlaytics for your website for a particular date or date range.
     *
     * @param Temboo_Session $session The session that owns this GetAnalyticsByDate Choreo.
     * @return Clicky_GetAnalyticsByDate New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/GetAnalyticsByDate/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAnalyticsByDate Choreo.
     *
     * @param Clicky_GetAnalyticsByDate_Inputs|array $inputs (optional) Inputs as Clicky_GetAnalyticsByDate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_GetAnalyticsByDate_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_GetAnalyticsByDate_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAnalyticsByDate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_GetAnalyticsByDate_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_GetAnalyticsByDate_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAnalyticsByDate Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_GetAnalyticsByDate_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAnalyticsByDate Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_GetAnalyticsByDate_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAnalyticsByDate input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_GetAnalyticsByDate_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_GetAnalyticsByDate_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Date input for this GetAnalyticsByDate Choreo.
     *
     * @param string $value (optional, string) The date or date range you want to access. Use YYYY-MM-DD format for date and YYYY-MM-DD,YYYY-MM-DD for a range. See docs for more options for this input. Defaults to 'today'.
     * @return Clicky_GetAnalyticsByDate_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Limit input for this GetAnalyticsByDate Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results that will be returned. Defaults to 10.
     * @return Clicky_GetAnalyticsByDate_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Output input for this GetAnalyticsByDate Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_GetAnalyticsByDate_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this GetAnalyticsByDate Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_GetAnalyticsByDate_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this GetAnalyticsByDate Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_GetAnalyticsByDate_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this GetAnalyticsByDate Choreo.
     *
     * @param string $value (required, string) The type of data you want to retrieve. Can be a comma-separated list of types (i.e. visitors,countries,searches).
     * @return Clicky_GetAnalyticsByDate_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the GetAnalyticsByDate Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_GetAnalyticsByDate_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAnalyticsByDate Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAnalyticsByDate execution.
     * @param Clicky_GetAnalyticsByDate $choreo The choreography object for this execution.
     * @param Clicky_GetAnalyticsByDate_Inputs|array $inputs (optional) Inputs as Clicky_GetAnalyticsByDate_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_GetAnalyticsByDate_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_GetAnalyticsByDate $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAnalyticsByDate execution.
     *
     * @return Clicky_GetAnalyticsByDate_Results New results object.
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
     * Wraps results in appropriate results class for this GetAnalyticsByDate execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_GetAnalyticsByDate_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_GetAnalyticsByDate_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAnalyticsByDate Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_GetAnalyticsByDate_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAnalyticsByDate Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_GetAnalyticsByDate_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAnalyticsByDate execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves a specified type of anlaytics for your website.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_GetAnalyticsByType extends Temboo_Choreography
{
    /**
     * Retrieves a specified type of anlaytics for your website.
     *
     * @param Temboo_Session $session The session that owns this GetAnalyticsByType Choreo.
     * @return Clicky_GetAnalyticsByType New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/GetAnalyticsByType/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this GetAnalyticsByType Choreo.
     *
     * @param Clicky_GetAnalyticsByType_Inputs|array $inputs (optional) Inputs as Clicky_GetAnalyticsByType_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_GetAnalyticsByType_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_GetAnalyticsByType_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAnalyticsByType Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_GetAnalyticsByType_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_GetAnalyticsByType_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAnalyticsByType Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_GetAnalyticsByType_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the GetAnalyticsByType Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_GetAnalyticsByType_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAnalyticsByType input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_GetAnalyticsByType_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_GetAnalyticsByType_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this GetAnalyticsByType Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results that will be returned. Defaults to 10.
     * @return Clicky_GetAnalyticsByType_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Output input for this GetAnalyticsByType Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_GetAnalyticsByType_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this GetAnalyticsByType Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_GetAnalyticsByType_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this GetAnalyticsByType Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_GetAnalyticsByType_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this GetAnalyticsByType Choreo.
     *
     * @param string $value (required, string) The type of data you want to retrieve. Can be a comma-separated list of types (i.e. visitors,countries,searches).
     * @return Clicky_GetAnalyticsByType_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the GetAnalyticsByType Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_GetAnalyticsByType_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAnalyticsByType Choreo.
     *
     * @param Temboo_Session $session The session that owns this GetAnalyticsByType execution.
     * @param Clicky_GetAnalyticsByType $choreo The choreography object for this execution.
     * @param Clicky_GetAnalyticsByType_Inputs|array $inputs (optional) Inputs as Clicky_GetAnalyticsByType_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_GetAnalyticsByType_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_GetAnalyticsByType $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAnalyticsByType execution.
     *
     * @return Clicky_GetAnalyticsByType_Results New results object.
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
     * Wraps results in appropriate results class for this GetAnalyticsByType execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_GetAnalyticsByType_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_GetAnalyticsByType_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the GetAnalyticsByType Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_GetAnalyticsByType_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the GetAnalyticsByType Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_GetAnalyticsByType_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this GetAnalyticsByType execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the last 30 visitors today who arrived via a search.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_Last30VisitorsTodayViaSearch extends Temboo_Choreography
{
    /**
     * Retrieves the last 30 visitors today who arrived via a search.
     *
     * @param Temboo_Session $session The session that owns this Last30VisitorsTodayViaSearch Choreo.
     * @return Clicky_Last30VisitorsTodayViaSearch New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/Last30VisitorsTodayViaSearch/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this Last30VisitorsTodayViaSearch Choreo.
     *
     * @param Clicky_Last30VisitorsTodayViaSearch_Inputs|array $inputs (optional) Inputs as Clicky_Last30VisitorsTodayViaSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_Last30VisitorsTodayViaSearch_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_Last30VisitorsTodayViaSearch_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this Last30VisitorsTodayViaSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_Last30VisitorsTodayViaSearch_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_Last30VisitorsTodayViaSearch_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the Last30VisitorsTodayViaSearch Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_Last30VisitorsTodayViaSearch_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the Last30VisitorsTodayViaSearch Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_Last30VisitorsTodayViaSearch_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this Last30VisitorsTodayViaSearch input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_Last30VisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_Last30VisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Limit input for this Last30VisitorsTodayViaSearch Choreo.
     *
     * @param int $value (optional, integer) The number of records you want to retrieve. Defaults to 30.
     * @return Clicky_Last30VisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Output input for this Last30VisitorsTodayViaSearch Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_Last30VisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this Last30VisitorsTodayViaSearch Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_Last30VisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this Last30VisitorsTodayViaSearch Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_Last30VisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this Last30VisitorsTodayViaSearch Choreo.
     *
     * @param string $value (optional, string) The type of data you want to retrieve. Defaults to "visitors-list".
     * @return Clicky_Last30VisitorsTodayViaSearch_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the Last30VisitorsTodayViaSearch Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_Last30VisitorsTodayViaSearch_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the Last30VisitorsTodayViaSearch Choreo.
     *
     * @param Temboo_Session $session The session that owns this Last30VisitorsTodayViaSearch execution.
     * @param Clicky_Last30VisitorsTodayViaSearch $choreo The choreography object for this execution.
     * @param Clicky_Last30VisitorsTodayViaSearch_Inputs|array $inputs (optional) Inputs as Clicky_Last30VisitorsTodayViaSearch_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_Last30VisitorsTodayViaSearch_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_Last30VisitorsTodayViaSearch $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this Last30VisitorsTodayViaSearch execution.
     *
     * @return Clicky_Last30VisitorsTodayViaSearch_Results New results object.
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
     * Wraps results in appropriate results class for this Last30VisitorsTodayViaSearch execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_Last30VisitorsTodayViaSearch_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_Last30VisitorsTodayViaSearch_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the Last30VisitorsTodayViaSearch Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_Last30VisitorsTodayViaSearch_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the Last30VisitorsTodayViaSearch Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_Last30VisitorsTodayViaSearch_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this Last30VisitorsTodayViaSearch execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves the stats for just a single item for the type you are requesting.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_FilterByItems extends Temboo_Choreography
{
    /**
     * Retrieves the stats for just a single item for the type you are requesting.
     *
     * @param Temboo_Session $session The session that owns this FilterByItems Choreo.
     * @return Clicky_FilterByItems New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/FilterByItems/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this FilterByItems Choreo.
     *
     * @param Clicky_FilterByItems_Inputs|array $inputs (optional) Inputs as Clicky_FilterByItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_FilterByItems_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_FilterByItems_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this FilterByItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_FilterByItems_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_FilterByItems_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the FilterByItems Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_FilterByItems_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the FilterByItems Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_FilterByItems_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this FilterByItems input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_FilterByItems_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_FilterByItems_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Item input for this FilterByItems Choreo.
     *
     * @param string $value (required, string) Use this input to get the stats for just a single item for the type you are requesting (i.e. type=links-domains and item=google.com).
     * @return Clicky_FilterByItems_Inputs For method chaining.
     */
    public function setItem($value)
    {
        return $this->set('Item', $value);
    }

    /**
     * Set the value for the Limit input for this FilterByItems Choreo.
     *
     * @param int $value (optional, integer) The maximum number of results that will be returned. Defaults to 10.
     * @return Clicky_FilterByItems_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Output input for this FilterByItems Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_FilterByItems_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this FilterByItems Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_FilterByItems_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this FilterByItems Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_FilterByItems_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this FilterByItems Choreo.
     *
     * @param string $value (required, string) The type of data you want to retrieve. Can be a comma-separated list of types (i.e. visitors,countries,searches).
     * @return Clicky_FilterByItems_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the FilterByItems Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_FilterByItems_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the FilterByItems Choreo.
     *
     * @param Temboo_Session $session The session that owns this FilterByItems execution.
     * @param Clicky_FilterByItems $choreo The choreography object for this execution.
     * @param Clicky_FilterByItems_Inputs|array $inputs (optional) Inputs as Clicky_FilterByItems_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_FilterByItems_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_FilterByItems $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this FilterByItems execution.
     *
     * @return Clicky_FilterByItems_Results New results object.
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
     * Wraps results in appropriate results class for this FilterByItems execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_FilterByItems_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_FilterByItems_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the FilterByItems Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_FilterByItems_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the FilterByItems Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_FilterByItems_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this FilterByItems execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves last weeks's top pages, links, and searches.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_TopStatsLastWeek extends Temboo_Choreography
{
    /**
     * Retrieves last weeks's top pages, links, and searches.
     *
     * @param Temboo_Session $session The session that owns this TopStatsLastWeek Choreo.
     * @return Clicky_TopStatsLastWeek New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/TopStatsLastWeek/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this TopStatsLastWeek Choreo.
     *
     * @param Clicky_TopStatsLastWeek_Inputs|array $inputs (optional) Inputs as Clicky_TopStatsLastWeek_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_TopStatsLastWeek_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_TopStatsLastWeek_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TopStatsLastWeek Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_TopStatsLastWeek_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_TopStatsLastWeek_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TopStatsLastWeek Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_TopStatsLastWeek_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the TopStatsLastWeek Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_TopStatsLastWeek_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TopStatsLastWeek input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_TopStatsLastWeek_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_TopStatsLastWeek_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Output input for this TopStatsLastWeek Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_TopStatsLastWeek_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this TopStatsLastWeek Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_TopStatsLastWeek_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this TopStatsLastWeek Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_TopStatsLastWeek_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this TopStatsLastWeek Choreo.
     *
     * @param string $value (optional, string) The type of data you want to retrieve. Defaults to "pages,links,searches".
     * @return Clicky_TopStatsLastWeek_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the TopStatsLastWeek Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_TopStatsLastWeek_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TopStatsLastWeek Choreo.
     *
     * @param Temboo_Session $session The session that owns this TopStatsLastWeek execution.
     * @param Clicky_TopStatsLastWeek $choreo The choreography object for this execution.
     * @param Clicky_TopStatsLastWeek_Inputs|array $inputs (optional) Inputs as Clicky_TopStatsLastWeek_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_TopStatsLastWeek_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_TopStatsLastWeek $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TopStatsLastWeek execution.
     *
     * @return Clicky_TopStatsLastWeek_Results New results object.
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
     * Wraps results in appropriate results class for this TopStatsLastWeek execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_TopStatsLastWeek_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_TopStatsLastWeek_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the TopStatsLastWeek Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_TopStatsLastWeek_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the TopStatsLastWeek Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_TopStatsLastWeek_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this TopStatsLastWeek execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieves today's visitors, actions, average actions, average time, and bounce rate.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_VisitorsToday extends Temboo_Choreography
{
    /**
     * Retrieves today's visitors, actions, average actions, average time, and bounce rate.
     *
     * @param Temboo_Session $session The session that owns this VisitorsToday Choreo.
     * @return Clicky_VisitorsToday New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/Clicky/VisitorsToday/');
    }

    /**
     * Executes this Choreo.
     *
     * Execution object provides access to results appropriate for this VisitorsToday Choreo.
     *
     * @param Clicky_VisitorsToday_Inputs|array $inputs (optional) Inputs as Clicky_VisitorsToday_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_VisitorsToday_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new Clicky_VisitorsToday_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this VisitorsToday Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_VisitorsToday_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new Clicky_VisitorsToday_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the VisitorsToday Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_VisitorsToday_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appropriate setters for the VisitorsToday Choreo.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return Clicky_VisitorsToday_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this VisitorsToday input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return Clicky_VisitorsToday_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a credential in your account specifying presets for this set of inputs.
     * @return Clicky_VisitorsToday_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Output input for this VisitorsToday Choreo.
     *
     * @param string $value (optional, string) What format you want the returned data to be in. Accepted values: xml, php, json, csv. Defaults to 'xml'.
     * @return Clicky_VisitorsToday_Inputs For method chaining.
     */
    public function setOutput($value)
    {
        return $this->set('Output', $value);
    }

    /**
     * Set the value for the SiteID input for this VisitorsToday Choreo.
     *
     * @param int $value (required, integer) Your request must include the site's ID that you want to access data from. Available from your site preferences page.
     * @return Clicky_VisitorsToday_Inputs For method chaining.
     */
    public function setSiteID($value)
    {
        return $this->set('SiteID', $value);
    }

    /**
     * Set the value for the SiteKey input for this VisitorsToday Choreo.
     *
     * @param string $value (required, string) The unique key assigned to you when you first register with Clicky. Available from your site preferences page.
     * @return Clicky_VisitorsToday_Inputs For method chaining.
     */
    public function setSiteKey($value)
    {
        return $this->set('SiteKey', $value);
    }

    /**
     * Set the value for the Type input for this VisitorsToday Choreo.
     *
     * @param string $value (optional, string) The type of data you want to retrieve. Defaults to "visitors,actions,actions-average,time-average,bounce-rate".
     * @return Clicky_VisitorsToday_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }
}


/**
 * Execution object for the VisitorsToday Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_VisitorsToday_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the VisitorsToday Choreo.
     *
     * @param Temboo_Session $session The session that owns this VisitorsToday execution.
     * @param Clicky_VisitorsToday $choreo The choreography object for this execution.
     * @param Clicky_VisitorsToday_Inputs|array $inputs (optional) Inputs as Clicky_VisitorsToday_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return Clicky_VisitorsToday_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, Clicky_VisitorsToday $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this VisitorsToday execution.
     *
     * @return Clicky_VisitorsToday_Results New results object.
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
     * Wraps results in appropriate results class for this VisitorsToday execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return Clicky_VisitorsToday_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new Clicky_VisitorsToday_Results($outputs);
    }
}


/**
 * Results object with appropriate getters for the VisitorsToday Choreo.
 *
 * @package Temboo
 * @subpackage Clicky
 */
class Clicky_VisitorsToday_Results extends Temboo_Results
{
    /**
     * Results object with appropriate getters for the VisitorsToday Choreo.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return Clicky_VisitorsToday_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
    /**
     * Retrieve the value for the "Response" output from this VisitorsToday execution.
     *
     * @return string The response from Clicky formatted as specified in the Output parameter. Default is XML.
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